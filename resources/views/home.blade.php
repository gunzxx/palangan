@extends('layout.main')

{{-- @section('script')
    <script>
        if (window.innerWidth <= 768) {
            const mobileNotification = document.getElementById('mobile-notification');
            const navbar = document.querySelector('nav');
            mobileNotification.style.display = 'flex';
            navbar.style.display = 'none';
            console.log(mobileNotification);
        }
    </script>
@endsection --}}

@section('content')
    {{-- <div id="mobile-notification">
        <h1>Untuk smartphone harap gunakan mode desktop</h1>
    </div> --}}

    <section id="hero">
        <img src="/img/umkm/1.jpeg" alt="">
    </section>

    <map name="planetmap">
        <area shape="rect" coords="0,0,82,126" href="sun.htm" alt="Sun">
        <area shape="circle" coords="90,58,3" href="mercur.htm" alt="Mercury">
        <area shape="circle" coords="124,58,8" href="venus.htm" alt="Venus">
      </map>

    <section id="main">
        <h1>Tentang Palangan</h1>
        <div class="content-container">
            <div class="content-body">
                <div class="content" id="apa-itu-palangan">
                    <h1 data-aos="fade-up">Apa itu Desa Palangan?</h1>
                    <p data-aos="fade-up">Desa palangan terletak di kecamatan jangkar kab.situbondo, rata - rata penduduk desa bekerja sebagai petani. desa palangan memiliki kebudayaan bernama rokat saba, ritual rokat saba menjadi suatu mekanisme yang menciptakan keteraturan dan keharmonisan sosial.</p>
                    <div data-aos="fade-up" class="content-img">
                        <img src="/img/umkm/4.jpeg">
                    </div>
                </div>
                <div class="content content-flex" id="potensi-palangan">
                    <h1 data-aos="fade-up">Potensi Desa Palangan</h1>
                    <p data-aos="fade-up">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia quis earum neque ea minima ad
                        consectetur perferendis. Voluptates qui eos repellendus atque rem nulla nam natus exercitationem
                        veniam nisi, deleniti cumque sint ad aut in ipsum? Magnam molestiae possimus, sequi odit cumque sit
                        doloremque praesentium est amet dolores, vel officia, maiores ipsam aliquam debitis? Rerum animi
                        voluptatum autem cum. Minima commodi doloremque quasi nihil ipsum, ex voluptate, amet, consectetur
                        ut sed reprehenderit maxime! Doloribus non veniam hic assumenda. Alias deleniti rerum quia ipsa,
                        neque quos. Illum sequi odio consequuntur. Quam sit itaque deleniti voluptatem quaerat
                        exercitationem debitis, voluptas a! Quidem.
                    </p>
                    <div class="content-img-container">
                        <div data-aos="fade-up" class="content-img">
                            <img src="/img/umkm/2.jpg">
                        </div>
                        <div data-aos="fade-up" class="content-img">
                            <img src="/img/umkm/3.jpeg">
                        </div>
                        <div data-aos="fade-up" class="content-img">
                            <img src="/img/umkm/4.jpeg">
                        </div>
                        <div data-aos="fade-up" class="content-img">
                            <img src="/img/umkm/1.jpeg">
                        </div>
                        <div data-aos="fade-up" class="content-img">
                            <img src="/img/umkm/3.jpeg">
                        </div>
                    </div>
                </div>
                <div class="content" id="maps" data-aos="fade-up">
                    <h1>Peta Desa Palangan</h1>
                    <p>Berikut merupakan peta Desa Palangan</p>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15813.792891289924!2d114.18413964489906!3d-7.742188926421525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd0d5824aa9e10d%3A0x177096ccdff5d8ea!2sPalangan%2C%20Jangkar%2C%20Situbondo%20Regency%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1721513198801!5m2!1sen!2sid"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div id="product" data-aos="fade-up">
                    <h1>Produk Desa Palangan</h1>
                    <div class="products">
                        @foreach ($products as $product)
                            <div class="product">
                                <div class="product-image">
                                    <img src="{{ $product->getFirstMediaUrl() == '' ? '/img/product/default.jpg' : $product->getFirstMediaUrl() }}">
                                </div>
                                <div class="product-detail">
                                    <div class="detail-container">
                                        <h1>{{ $product->name }}</h1>
                                        <p>{{ $product->detail }}</p>
                                    </div>
                                    <a href="https://wa.me/{{$product->contact}}" target="_blank" class="price-container">
                                        <p><i class="fa-solid fa-cart-shopping"></i> &nbsp;Pesan sekarang</p>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <a href="/katalog">Lihat lainnya>></a>
                </div>
            </div>
            <div class="content-side-container">
                <div class="content-side">
                    <h1 align="center">Menu</h1>
                    <ul>
                        <li>
                            <a href="#apa-itu-palangan">Apa itu palangan?</a>
                        </li>
                        <li>
                            <a href="#potensi-palangan">Potensi desa palangan</a>
                        </li>
                        <li>
                            <a href="#maps">Peta desa palangan</a>
                        </li>
                    </ul>
                </div>
                {{-- <div class="galeri-container">
                    <img src="/img/umkm/2.jpg" class="hvr-grow">
                    <img src="/img/umkm/3.jpeg" class="hvr-grow">
                    <img src="/palangan.jpeg" class="hvr-grow">
                    <img src="/img/umkm/2.jpg" class="hvr-grow">
                </div> --}}
            </div>
        </div>
    </section>

    {{-- <section id="resources">
        <h1>Sumber Daya Alam Desa Palangan</h1>
    </section> --}}
@endsection
