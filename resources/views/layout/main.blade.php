@if (!isset($page))
    {{ $page = '' }}
@endif


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.3/dist/sweetalert2.min.css">
    <link rel="shortcut icon" href="/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="/hvr/css/hover-min.css" />
    <link rel="stylesheet" href="/leaflet/leaflet.css" />
    <link rel="stylesheet" href="/filepond/filepond.min.css" />
    <link rel="stylesheet" href="/aos/dist/aos.css" />
    <link href="/fa/css/fontawesome.css" rel="stylesheet" />
    <link href="/fa/css/brands.css" rel="stylesheet" />
    <link href="/fa/css/solid.css" rel="stylesheet" />
    <link rel="stylesheet" href="/style.css" />
    <title>KUMPALA | Desa Palangan</title>
    <script src="/ckeditor/ckeditor.js"></script>
    @yield('head')
</head>

<body>
    <nav>
        <div class="nav-header">
            <div class="nav-logo">
                <img src="/logo.png">
            </div>
            <div class="nav-header-text">
                <h1>KUMPALA</h1>
                <p>Komunitas UMKM Desa Palangan</p>
            </div>
        </div>
        <div class="nav-body">
            <div class="nav-list">
                <a class="nav-item {{ $page == 'home' ? 'active' : '' }}" href="/">Beranda</a>
            </div>
            <div class="nav-list">
                <a class="nav-item {{ $page == 'katalog' ? 'active' : '' }}" href="/katalog">Katalog</a>
            </div>
            <div class="nav-list">
                <a class="nav-item {{ $page == 'berita' ? 'active' : '' }}" href="/berita">Berita</a>
            </div>
            <div class="nav-list">
                <a class="nav-item {{ $page == 'admin' ? 'active' : '' }}" href="/admin">
                    {{-- <i class="fa-solid fa-user"></i> --}}
                    Admin
                </a>
            </div>
        </div>
    </nav>

    @yield('content')

    <section id="footer">
        <div class="footer-detail">
            <div class="contact-container">
                <div class="contact-row">
                    <div class="info-container contact-col">
                        <div class="info-img">
                            <img src="/logo.png" alt="">
                        </div>
                        <div class="info-detail">
                            <h1>KUMPALA</h1>
                            <p>Desa Palangan</p>
                            <p>Kecamatan Jangkar</p>
                            <p>Kabupaten Situbondo</p>
                            <p>Provinsi Kalimantan Timur</p>
                        </div>
                    </div>
                    <div class="contact-col">
                        <div class="contact-list">
                            <i class="fa-brands fa-whatsapp"></i>
                            <p>081234567890</p>
                        </div>
                        <div class="contact-list">
                            <i class="fa-solid fa-envelope"></i>
                            <p>kumpala240724@gmail.com</p>
                        </div>
                    </div>
                    <div class="contact-col">
                        <div class="contact-list">
                            <i class="fa-brands fa-instagram"></i>
                            <p>@desa_palangan</p>
                        </div>
                        <div class="contact-list">
                            <i class="fa-brands fa-facebook"></i>
                            <p>Desa Palangan</p>
                        </div>
                        <div class="contact-list">
                            <i class="fa-solid fa-location-dot"></i>
                            <p>755R+9JM, Palangan, Jangkar, Situbondo Regency, East Java 68372</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-container">
            <p>2024 © Desa Palangan</p>
        </div>
    </section>

    <script src="/filepond/filepond.min.js"></script>
    <script src="/aos/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="/script.js"></script>
    @yield('script')
</body>

</html>
