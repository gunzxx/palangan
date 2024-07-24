@extends('layout.main')

@section('head')
    <link rel="stylesheet" href="/style/katalog.css">
@endsection

@section('content')
    <section id="katalog">
        <h1>Daftar UMKM Desa Palangan</h1>
        <div class="katalogs">
            @foreach ($products as $product)
                <div class="katalog">
                    <div class="katalog-img">
                        <img
                            src="{{ $product->getFirstMediaUrl() == '' ? '/img/product/default.jpg' : $product->getFirstMediaUrl() }}">
                    </div>
                    <div class="katalog-detail">
                        <div class="katalog-text">
                            <h3>{{$product->name}}</h3>
                            <p>{{$product->seller}}</p>
                            <p class="elipsis-text">{{$product->detail}}</p>
                        </div>
                        <a href="https://wa.me/{{$product->contact}}" target="_blank" class="katalog-price">
                            <span><i class="fa-solid fa-cart-shopping"></i> &nbsp;Rp. {{ number_format($product->price, 2, ",", ".") }}</span>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    <div class="spacer-1"></div>
@endsection
