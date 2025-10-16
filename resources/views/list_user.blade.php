@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div style="display:flex; align-items:center; justify-content:space-between; gap:16px; flex-wrap:wrap;">
        <h1 style="
            text-align: left;
            font-weight: 700;
            font-size: 2rem;
            letter-spacing: 0.5px;
            background: linear-gradient(90deg, #ff80ab, #ff4081, #f50057);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin-bottom: 1.8rem;
            font-family: 'Poppins', sans-serif;
        ">
            🌸 Daftar Pengguna Terdaftar 🌸
        </h1>

        <!-- Tombol Tambah Pengguna -->
        <a href="{{ route('user.create') }}" style="
            background: linear-gradient(135deg, #ff9fc0, #ff5e98);
            color: white;
            padding: 10px 16px;
            border-radius: 10px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 6px 16px rgba(255, 105, 180, 0.22);
            transition: transform 0.12s ease, box-shadow 0.12s ease;
        " onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 10px 20px rgba(255,105,180,0.28)';"
          onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 6px 16px rgba(255,105,180,0.22)';">
            <!-- simple plus icon -->
            <span style="font-size:16px; line-height:0;">➕</span>
            Tambah Pengguna
        </a>
    </div>

    @if (session('success'))
        <div style="
            background-color: #f8d7da;
            color: #842029;
            padding: 12px 16px;
            border-radius: 10px;
            margin-top: 12px;
            margin-bottom: 18px;
            text-align: center;
            font-weight: 500;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        ">
            {{ session('success') }}
        </div>
    @endif

    <table style="
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        background: linear-gradient(180deg, #fff0f6 0%, #ffe4ec 100%);
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 6px 18px rgba(255, 105, 180, 0.2);
        font-family: 'Poppins', sans-serif;
        margin-top: 12px;
    ">
        <thead style="background: linear-gradient(90deg, #ff80ab, #ff4081); color: white;">
            <tr>
                <th style="padding: 14px; text-align: left;">ID</th>
                <th style="padding: 14px; text-align: left;">Nama</th>
                <th style="padding: 14px; text-align: left;">NIM</th>
                <th style="padding: 14px; text-align: left;">Kelas</th>
                <th style="padding: 14px; text-align: center;">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr style="border-bottom: 1px solid #f5c6cb;">
                <td style="padding: 12px;">{{ $user->id }}</td>
                <td style="padding: 12px;">{{ $user->nama }}</td>
                <td style="padding: 12px;">{{ $user->nim }}</td>
                <td style="padding: 12px;">{{ $user->nama_kelas }}</td>
                <td style="padding: 12px; text-align: center;">
                    <a href="{{ route('user.edit', $user->id) }}" style="
                        background: linear-gradient(135deg, #ff80ab, #f50057);
                        color: white;
                        padding: 6px 14px;
                        border-radius: 8px;
                        text-decoration: none;
                        font-size: 14px;
                        font-weight: 500;
                        margin-right: 8px;
                        display: inline-flex;
                        align-items: center;
                        gap: 6px;
                        box-shadow: 0 3px 8px rgba(245, 0, 87, 0.3);
                        transition: transform 0.12s ease-in-out, box-shadow 0.12s;
                    " onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 5px 12px rgba(245,0,87,0.45)';"
                      onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 3px 8px rgba(245, 0, 87, 0.3)';">
                        <span style="font-size:14px;">✏️</span> Edit
                    </a>

                    <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="
                            background: linear-gradient(135deg, #ff1744, #d50000);
                            color: white;
                            border: none;
                            padding: 6px 14px;
                            border-radius: 8px;
                            cursor: pointer;
                            font-size: 14px;
                            font-weight: 500;
                            display: inline-flex;
                            align-items: center;
                            gap: 6px;
                            box-shadow: 0 3px 8px rgba(213, 0, 0, 0.3);
                            transition: transform 0.12s ease-in-out, box-shadow 0.12s;
                        " onclick="return confirm('Yakin ingin menghapus pengguna ini?')"
                           onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 5px 12px rgba(213,0,0,0.45)';"
                           onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 3px 8px rgba(213, 0, 0, 0.3)';">
                            <span style="font-size:14px;">🗑️</span> Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
