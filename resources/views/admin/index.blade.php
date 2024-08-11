@extends('layout.main')

@section('head')
    <link rel="stylesheet" href="/style/admin/admin.css">
@endsection

@section('content')
    @if (session('token'))
        <input type="hidden" id="token" value="{{ session('token') }}">
        <script>
            const token = document.getElementById('token').value;
            document.cookie = `jwt-token=${token};`;
        </script>
    @endif

    <section id="admin-menu">
        <div class="profile-menu-container">
            <div class="profile-img">
                <img src="{{auth()->user()->getFirstMediaUrl('profile') == '' ? '/img/product/default.jpg' : auth()->user()->getFirstMediaUrl('profile')}}" alt="">
            </div>
            <div class="profile-detail">
                <p class="profile-welcome">Selamat datang,</p>
                <br>
                <h1>{{auth()->user()->name}}</h1>
                <p>{{auth()->user()->email}}</p>
            </div>
        </div>

        <h1>Menu Admin</h1>
        <ul>
            <li>
                <a href="/admin/profile">
                    Profil&nbsp;
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </li>
            <li>
                <a href="/admin/product">
                    Manajemen Produk&nbsp;
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </li>
            <li>
                <a href="/admin/berita">
                    Manajemen Berita&nbsp;
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </li>
            <li>
                <a href="/logout">
                    Logout
                    <i class="fa-solid fa-right-from-bracket"></i>
                </a>
            </li>
        </ul>
    </section>
@endsection