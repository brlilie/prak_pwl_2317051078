@extends('layouts.app')

@section('content')

<div class="container mt-5" style="max-width:600px;">
    <h1 style="
        font-weight: 700;
        font-size: 2rem;
        letter-spacing: 0.5px;
        background: linear-gradient(90deg, #ff80ab, #ff4081, #f50057);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        margin-bottom: 1.8rem;
        font-family: 'Poppins', sans-serif;
        text-align: center;
    ">
        ✏️ Edit Mata Kuliah ✏️
    </h1>

    @if (session('success'))
        <div style="
            background-color: #d1e7dd;
            color: #0f5132;
            padding: 12px 16px;
            border-radius: 10px;
            margin-bottom: 18px;
            text-align: center;
            font-weight: 500;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        ">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST" style="
        background: linear-gradient(180deg, #fff0f6 0%, #ffe4ec 100%);
        padding: 24px;
        border-radius: 16px;
        box-shadow: 0 6px 18px rgba(255, 105, 180, 0.2);
        font-family: 'Poppins', sans-serif;
    ">
        @csrf
        @method('PUT')

        <label for="nama_mk" style="font-weight:500;">Nama Mata Kuliah:</label>
        <input type="text" id="nama_mk" name="nama_mk" value="{{ $mk->nama_mk }}" required style="
            width: 100%;
            padding: 10px 14px;
            margin-top: 6px;
            margin-bottom: 18px;
            border-radius: 10px;
            border: 1px solid #ff80ab;
            font-size: 14px;
        ">

        <label for="sks" style="font-weight:500;">SKS:</label>
        <input type="number" id="sks" name="sks" value="{{ $mk->sks }}" required style="
            width: 100%;
            padding: 10px 14px;
            margin-top: 6px;
            margin-bottom: 24px;
            border-radius: 10px;
            border: 1px solid #ff80ab;
            font-size: 14px;
        ">

        <button type="submit" style="
            background: linear-gradient(135deg, #ff80ab, #f50057);
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            box-shadow: 0 6px 16px rgba(245, 0, 87, 0.22);
            transition: transform 0.12s ease, box-shadow 0.12s ease;
        " onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 10px 20px rgba(245,0,87,0.28)';"
          onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 6px 16px rgba(245,0,87,0.22)';">
            💾 Update
        </button>
    </form>
</div>

@endsection
