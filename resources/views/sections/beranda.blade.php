@extends('layouts.app')

@section('content')
<main>
    <section id="home" class="hero">
        <img src="images/hero-image3.png" alt="Hero Image">
        <div class="hero-content">
            <h1>SELAMAT <br>DATANG!<br></h1>
            <p>Di Website Desa Sukolilo</p>
            <a href="#logo-desa"><button>KENALI DESA</button></a>
        </div>
        <div class="hero-gradient"></div>
    </section>
</section>

<section id="logo-desa" class="logo-desa-section page">
    <div class="logo-container">
        <div class="logo-description">
            <h2>Tentang Logo Desa</h2>
            <img class="big-logo" src="images/logo_desa.png" alt="Logo Desa">
            <div class="logo-elements">
                <div class="logo-element">
                    <img class="medium-logo" src="images/part_logo_desa/Garuda.png" alt="Pancasila">
                    <h3>Pancasila</h3>
                    <p>Sebagai ideologi negara Indonesia.</p>
                </div>
                <div class="logo-element">
                    <img class="medium-logo" src="images/part_logo_desa/Gentong.png" alt="Gentong">
                    <h3>Gentong</h3>
                    <p>Lambang dari wisata gentong mas.</p>
                </div>
                <div class="logo-element">
                    <img class="medium-logo" src="images/part_logo_desa/Keris.png" alt="Keris">
                    <h3>Keris</h3>
                    <p>Melambangkan power/kekuatan.</p>
                </div>
            </div>
        </div>
    </div>
</section>

        <section id="profil-desa" class="profil-desa-section page">
            <div>
                <h2>Profil Singkat Desa</h2>
                <img src="images/hero_desa.png" alt="" class="profil-title-img">
                <div class="profil-desa-container">
                    <div class="profil-elements">
                        <div class="profil-box">
                            <h3 class="small-title">Sejarah</h3>
                            <div class="profil-element">
                                <p>Desa kami berdiri sejak zaman kolonial dan memiliki sejarah panjang yang kaya. Awalnya
                                    desa ini didirikan oleh para petani yang berjuang untuk memanfaatkan lahan subur di
                                    daerah ini. Seiring waktu, desa berkembang menjadi komunitas yang solid dan mandiri.</p>
                            </div>
                        </div>
                        <div class="profil-box">
                            <h3 class="small-title">Letak Geografis</h3>
                            <div class="profil-element">
                                <p>Desa kami terletak di kaki gunung dengan koordinat geografis 7.1234° S, 110.1234° E.
                                    Dikelilingi oleh sawah hijau dan hutan pinus, desa ini menawarkan pemandangan alam yang
                                    menakjubkan dan udara yang sejuk.</p>
                            </div>
                        </div>
                        <div class="profil-box">
                            <h3 class="small-title">Luas Wilayah</h3>
                            <div class="profil-element">
                                <p>Dengan luas wilayah mencapai 1500 hektar, desa kami memiliki berbagai macam lahan, mulai
                                    dari area pertanian, hutan lindung, hingga kawasan permukiman. Hal ini memungkinkan kami
                                    untuk menjaga keseimbangan antara pembangunan dan kelestarian lingkungan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="profil-desa-section">
            <h2>Mars Desa Sukolilo</h2>
            <div class="space_40px"></div>
            <iframe
            class="iframe-player"
            src="https://www.youtube.com/embed/MoAK-J3rSlM?si=2tENu1yJlwPRwW-W"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            referrerpolicy="strict-origin-when-cross-origin"
            allowfullscreen>
            </iframe>
            <div class="space_40px"></div>
            <h2>Pengumuman</h2>
        </section>

<section id="berita" class="news-section">
    
    <div class="swiper-container news-grid">
       
        <div class="elements-box">
            @foreach ($berita as $b)
            <a class="berita-card" href="{{ route('informasi.info', ['id' => $b->id]) }}">
                    <div class="berita-card-img">
                        <img src="{{asset('storage/' . $b->foto_berita)}}" alt="berita" class="berita-img">
                    </div>
                    <div class="berita-card-text-box">
                        <text class="berita-title medium-label">{{ $b->judul }}</text>
                        <text class="berita-date">{{ $b->tanggal }}</text>
                    </div>
                </a>
            @endforeach
        </div>
        
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <a href="berita-dan-pengumuman" class="medium-label center-text">Lihat Selengkapnya</a>
    </div>
</section>
</main>

@endsection
