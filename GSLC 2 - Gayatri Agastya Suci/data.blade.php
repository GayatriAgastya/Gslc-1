@extends('layout.main')

@section('container')



    @foreach ($artikel as $artikel_index)

    <article>
        <h1>Judul: {{ $artikel_index ["Judul"] }} </h1>

        @if ($artikel_index["Author"]=== "David Dabner, Sandra Stewart")
            <h5> Artikel ini punya David Dabner, Sandra Stewart </h5>
        @endif

        @switch($artikel_index["Kategori"])
    @case(1)
        <h5> Kategori : Teknologi </h5>
        @break
    @case(2)
        <h5> Kategori : Pendidikan </h5>
        @break
    @default

@endswitch

        <h5>Author: {{ $artikel_index ["Author"] }} </h5>
        <p>
            {{ $artikel_index["Deskripsi"] }}
        </p>


    </article>

    @endforeach

    @endsection
