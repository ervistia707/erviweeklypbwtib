@extends('layouts.main')

@section('content')
    <div class="text-center">
        <h2>{{ $berita["judul"] }}</h2>
        <h5>Penulis: {{ $berita["Penulis"] }}</h5>
    </div>
    <div class="text-justify">
        <p>{{ $berita["Konten"] }}</p>
    </div>

    <a href="/berita">Kembali</a>
@endsection