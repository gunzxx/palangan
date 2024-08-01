@extends('layout.main')

@section('head')
    <link rel="stylesheet" href="/style/admin.css">
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
        <h1>Menu Admin</h1>
        <ul>
            <li>
                <a href="/admin/profile">
                    Profil&nbsp;
                    <i class="fa-solid fa-user"></i>
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