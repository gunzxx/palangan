@extends('layout.main')

@section('head')
    <link rel="stylesheet" href="/style/katalog.css">
@endsection

@section('content')
    <section id="katalog">
        <h1>DAFTAR UMKM</h1>
        <div class="katalogs">
            @foreach ($products as $product)
                <div class="katalog">
                    <div class="katalog-img">
                        <img
                            src="{{ $product->getFirstMediaUrl() == '' ? '/img/product/default.jpg' : $product->getFirstMediaUrl() }}">
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <div class="spacer-1"></div>
@endsection
