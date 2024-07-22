@extends('layout.main')

@section('content')
    <section id="main">
        <h1>DAFTAR UMKM</h1>
        <div class="umkm-container">
            @foreach ($products as $product)

            @endforeach
        </div>
    </section>
@endsection
