@extends('layout.main')

@section('head')
    <link rel="stylesheet" href="/style/berita-detail.css">
@endsection

@section('content')
    <div id="berita-detail">
        <h1>{{$berita->title}}</h1>
        <p>
            {!! $berita->body !!}
        </p>
    </div>
@endsection