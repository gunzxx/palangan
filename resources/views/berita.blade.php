@extends('layout.main')

@section('head')
    <link rel="stylesheet" href="/style/berita.css">
@endsection

@section('content')
    @session('error')
        <input type="hidden" id="error" value="{{ session('error') }}">
        <script>
            const alertText = document.getElementById('error').value;
            Swal.fire({
                icon: 'error',
                text: alertText,
            });
        </script>
    @endsession

    @session('success')
        <input type="hidden" id="success" value="{{ session('success') }}">
        <script>
            const alertText = document.getElementById('success').value;
            Swal.fire({
                icon: 'success',
                text: alertText,
            });
        </script>
    @endsession

    <section id="hero-image">
        <img src="/img/hero/berita.webp">
    </section>

    <section id="berita">
        @if ($beritas->count() <= 0)
            <h1>Tidak ada berita.</h1>
            {{-- <a href="/admin/berita/create">Tambah berita</a> --}}
        @else
            @foreach ($beritas as $berita)
                <div class="berita">
                    <img class="berita-img" src="{{ $berita->getFirstMediaUrl('hero') == '' ? '/img/berita/default.jpg' : $berita->getFirstMediaUrl('hero') }}">
                    <div class="berita-detail">
                        <div class="berita-detail-container">
                            <h1>{{$berita->title}}</h1>
                            <p>{!!Str::limit(strip_tags($berita->body),100)!!}</p>
                        </div>
                        <a href="/berita/{{$berita->id}}" class="berita-btn">Lihat selengkapnya</a>
                    </div>
                </div>
            @endforeach
        @endif
    </section>
@endsection