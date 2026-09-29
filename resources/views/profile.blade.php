@extends('layouts.main')

@section('content')

<div class="container mt-4">
    <h1>HALAMAN PROFILE</h1>

    <p>
        Nama : {{ $name }} <br>
        NIM : {{ $nim }} <br>
        Prodi : {{ $prodi }} <br>
        Gambar : {{ $gambar }} <br>
    </p>

    <img src="{{ asset('images/' . $gambar) }}" 
         alt="Foto Ervistia" 
         width="200">

</div>

@endsection