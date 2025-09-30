@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Daftar Pengguna</h1>

    @include('layouts.table', ['users' => $users])

</div>
@endsection
