@extends('layouts.app')
@section('content')
<div class="container mt-5" style="font-family: 'Poppins', sans-serif;">
    <h1 style="
        text-align: center;
        font-weight: 700;
        font-size: 2rem;
        letter-spacing: 0.5px;
        background: linear-gradient(90deg, #ff80ab, #ff4081, #f50057);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 2rem;
    ">
        🌷 Buat Pengguna Baru 🌷
    </h1>

    <div style="
        max-width: 600px;
        margin: 0 auto;
        background: linear-gradient(180deg, #fff0f6 0%, #ffe4ec 100%);
        border-radius: 16px;
        padding: 30px 40px;
        box-shadow: 0 6px 18px rgba(255, 105, 180, 0.25);
    ">
        <form action="{{ route('user.store') }}" method="POST">
            @csrf

            <div style="margin-bottom: 20px;">
                <label for="nama" style="
                    display: block;
                    font-weight: 600;
                    margin-bottom: 6px;
                    color: #d81b60;
                ">Nama:</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan nama pengguna" style="
                    width: 100%;
                    padding: 10px 14px;
                    border: 1.5px solid #f8bbd0;
                    border-radius: 8px;
                    outline: none;
                    transition: border-color 0.2s;
                " onfocus="this.style.borderColor='#f50057'" onblur="this.style.borderColor='#f8bbd0'">
            </div>

            <div style="margin-bottom: 20px;">
                <label for="npm" style="
                    display: block;
                    font-weight: 600;
                    margin-bottom: 6px;
                    color: #d81b60;
                ">NPM:</label>
                <input type="text" id="npm" name="npm" placeholder="Masukkan NPM" style="
                    width: 100%;
                    padding: 10px 14px;
                    border: 1.5px solid #f8bbd0;
                    border-radius: 8px;
                    outline: none;
                    transition: border-color 0.2s;
                " onfocus="this.style.borderColor='#f50057'" onblur="this.style.borderColor='#f8bbd0'">
            </div>

            <div style="margin-bottom: 25px;">
                <label for="kelas_id" style="
                    display: block;
                    font-weight: 600;
                    margin-bottom: 6px;
                    color: #d81b60;
                ">Kelas:</label>
                <select id="kelas_id" name="kelas_id" style="
                    width: 100%;
                    padding: 10px 14px;
                    border: 1.5px solid #f8bbd0;
                    border-radius: 8px;
                    background-color: #fff;
                    outline: none;
                    cursor: pointer;
                    transition: border-color 0.2s;
                " onfocus="this.style.borderColor='#f50057'" onblur="this.style.borderColor='#f8bbd0'">
                    @foreach ($kelas as $kelasItem)
                        <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>

            <div style="text-align: center;">
                <button type="submit" style="
                    background: linear-gradient(135deg, #ff80ab, #f50057);
                    color: white;
                    border: none;
                    padding: 10px 24px;
                    border-radius: 10px;
                    font-weight: 600;
                    cursor: pointer;
                    box-shadow: 0 4px 10px rgba(245, 0, 87, 0.4);
                    transition: transform 0.15s ease-in-out, box-shadow 0.2s;
                    font-size: 15px;
                    display: inline-flex;
                    align-items: center;
                    gap: 8px;
                " onmouseover="this.style.transform='scale(1.07)'; this.style.boxShadow='0 6px 12px rgba(245, 0, 87, 0.5)';"
                  onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 10px rgba(245, 0, 87, 0.4)';">
                    🌸 Simpan Pengguna
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
