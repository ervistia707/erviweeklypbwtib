@extends('layouts.main')

@section('content')
    <div class="mt-5">
        @foreach($beritas as $berita)    
            <h2><a href="/berita/{{ $berita['Slug'] }}">{{ $berita["judul"] }}</a></h2>
            <h5>{{ $berita["Penulis"] }}</h5>
            <p>{{ $berita["Konten"] }}</p>    
        @endforeach
    </div>
@endsection
