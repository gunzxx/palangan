@extends('layout.main')

@section('head')
    <link rel="stylesheet" href="/style/katalog.css">
    <link rel="stylesheet" href="/mobile/admin.css">
@endsection


@section('content')
    <section id="hero-image">
        <img src="/img/hero/katalog.jpg">
    </section>

    <section id="katalog">
        @if ($products->count() > 0)
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
                                <p class="elipsis-text">{{Str::limit($product->detail, 50)}}</p>
                            </div>
                            <a href="https://wa.me/{{$product->contact}}" target="_blank" class="katalog-price">
                                <span><i class="fa-solid fa-cart-shopping"></i> &nbsp; Pesan sekarang</span>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <h1>Tidak ada produk.</h1>
        @endif
    </section>

    <div class="spacer-1"></div>
@endsection
