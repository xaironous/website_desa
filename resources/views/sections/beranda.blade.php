@extends('layouts.app')

@section('content')
<main>
    <section id="home" class="hero">
        <img src="images/hero-Image.png" alt="Hero Image">
        <div class="hero-content">
            <h1>SELAMAT <br>DATANG!<br></h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <a href="#logo-desa"><button>KENALI DESA</button></a>
        </div>
        <div class="hero-gradient"></div>
    </section>
</section>

<section id="logo-desa" class="logo-desa-section">
    <div class="logo-container">
        <img src="images/logo-desa.png" alt="Logo Desa">
        <div class="logo-description">
            <h2>Tentang Logo Desa</h2>
            <div class="logo-elements">
                <div class="logo-element">
                    <img src="images/pancasila.png" alt="Pancasila">
                    <h3>Pancasila</h3>
                    <p>Sebagai ideologi negara Indonesia.</p>
                </div>
                <div class="logo-element">
                    <img src="images/gentong.png" alt="Gentong">
                    <h3>Gentong</h3>
                    <p>Lambang dari wisata gentong mas.</p>
                </div>
                <div class="logo-element">
                    <img src="images/keris.png" alt="Keris">
                    <h3>Keris</h3>
                    <p>Melambangkan power/kekuatan.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<<<<<<< Updated upstream
<section id="profil-desa" class="profil-desa-section">
    <div class="profil-container">
        <h2>Profil Singkat Desa</h2>
        
        <div class="profil-item">
            <h3>Sejarah</h3>
            <p>Desa kami berdiri sejak zaman kolonial dan memiliki sejarah panjang yang kaya. Awalnya desa ini didirikan oleh para petani yang berjuang untuk memanfaatkan lahan subur di daerah ini. Seiring waktu, desa berkembang menjadi komunitas yang solid dan mandiri.</p>
        </div>
        
        <div class="profil-item">
            <h3>Letak Geografis</h3>
            <p>Desa kami terletak di kaki gunung dengan koordinat geografis 7.1234° S, 110.1234° E. Dikelilingi oleh sawah hijau dan hutan pinus, desa ini menawarkan pemandangan alam yang menakjubkan dan udara yang sejuk.</p>
        </div>
        
        <div class="profil-item">
            <h3>Luas Wilayah</h3>
            <p>Dengan luas wilayah mencapai 1500 hektar, desa kami memiliki berbagai macam lahan, mulai dari area pertanian, hutan lindung, hingga kawasan permukiman. Hal ini memungkinkan kami untuk menjaga keseimbangan antara pembangunan dan kelestarian lingkungan.</p>
        </div>
    </div>
</section>
=======
        <section id="profil-desa" class="profil-desa-section">
            <div>
                <h2>Profil Singkat Desa</h2>
                <div class="profil-container">
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
>>>>>>> Stashed changes

<section id="berita" class="news-section">
    <div class="swiper-container news-grid">
        <div class="swiper-wrapper">
            <div class="swiper-slide news-item">
                <img src="images/image1.jpg" alt="News 1">
                <h4>Ini judul berita...</h4>
                <p class="news-meta">CNN News • 10 hours ago • Travel • 6 min read</p>
            </div>
            <div class="swiper-slide news-item">
                <img src="images/image2.jpg" alt="News 2">
                <h4>Ini Judul berita...</h4>
                <p class="news-meta">BBC News • 11 hours ago • Work • 9 min read</p>
            </div>
            <div class="swiper-slide news-item">
                <img src="images/image3.jpg" alt="News 3">
                <h4>Ini Judul Berita...</h4>
                <p class="news-meta">CNN News • 11 hours ago • Technology • 9 min read</p>
            </div>
            <div class="swiper-slide news-item">
                <img src="images/image4.jpg" alt="News 5">
                <h4>Ini Judul Berita...</h4>
                <p class="news-meta">CNN • 11 hours ago • Culture • 8 min read</p>
            </div>
            <div class="swiper-slide news-item">
                <img src="images/image4.jpg" alt="News 5">
                <h4>Ini Judul Berita...</h4>
                <p class="news-meta">CNN • 11 hours ago • Culture • 8 min read</p>
            </div>
            <div class="swiper-slide news-item">
                <img src="images/image4.jpg" alt="News 5">
                <h4>Ini Judul Berita...</h4>
                <p class="news-meta">CNN • 11 hours ago • Culture • 8 min read</p>
            </div>
            <!-- Tambahkan lebih banyak slide sesuai kebutuhan -->
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
</main>

@endsection