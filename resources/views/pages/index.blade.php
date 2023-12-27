@extends('layouts.appUser')

@section('content')
    <div class="hero">
        <div class="hero-slide">
            <div class="img overlay" style="background-image: url('images/hero_bg_3.jpg')"></div>
            <div class="img overlay" style="background-image: url('images/hero_bg_2.jpg')"></div>
            <div class="img overlay" style="background-image: url('images/hero_bg_1.jpg')"></div>
        </div>

        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center">
                    <h1 class="heading" data-aos="fade-up">
                        Tuangkan Keluh Kesahmu Mari Berkumpul
                    </h1>
                    <h1 class="heading" data-aos="fade-up">
                        TitikKumpul
                    </h1>
                    <form action="#" class="narrow-w form-search d-flex align-items-stretch mb-3" data-aos="fade-up"
                        data-aos-delay="200">
                        <input type="date" class="form-control px-4" id="dateInput" placeholder="Tanggal" />
                        <input type="time" class="form-control px-4" placeholder="Jam" />
                        <input type="number" class="form-control px-4" placeholder="Jumlah Orang" min="1" max="50" />
                        <input type="text" class="form-control px-4" placeholder="Dimanakah tempat kumpul mu?" />
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row mb-5 align-items-center">
                <div class="col-lg-6">
                    <h2 class="font-weight-bold text-primary heading">
                        Tempat Pilihan TitikKumpul
                    </h2>
                </div>

                <div class="col-lg-6 text-lg-end">
                    <p>
                        <a  href="{{ route('createvendor.index') }}" target="_blank" class="btn btn-primary text-white py-3 px-4">+ Buat titik kumpul </a>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="property-slider-wrap">
                        <div class="property-slider">
                            <div class="property-item">
                                <a href="property-single.html" class="img">
                                    <img src="images/img_1.jpeg" alt="Image" class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>Cafe Lali Djiwo</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">Semeru, Prigen, Kec. Prigen, Pasuruan, Jawa Timur 67157</span>
                                        <span class="city d-block mb-3">Pasuruan, Jawa Timur</span>

                                        <div class="specs d-flex mb-4 py-0">
                                            <a href="property-single.html" class="btn btn-primary py-2 px-3">See Menu</a>
                                        </div>

                                        <a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->

                            <div class="property-item">
                                <a href="{{ route('jokopi.index') }}" class="img">
                                    <img src="images/img_2.jpeg" alt="Image" class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>Jokopi</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">Ketebang, Genteng, Surabaya, Jawa Timur 60272</span>
                                        <span class="city d-block mb-3">Surabaya, Jawa Timur</span>

                                        <div class="specs d-flex mb-4">
                                            <a href="property-single.html" class="btn btn-primary py-2 px-3">See Menu</a>
                                        </div>

                                        <a href="{{ route('jokopi.index') }}" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div>
                            <div class="property-item">
                                <a href="property-single.html" class="img">
                                    <img src="images/img_7.jpg" alt="Image" class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>$1,291,000</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">5232 California Fake, Ave. 21BC</span>
                                        <span class="city d-block mb-3">California, USA</span>

                                        <div class="specs d-flex mb-4">
                                            <a href="property-single.html" class="btn btn-primary py-2 px-3">See Menu</a>
                                        </div>

                                        <a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->


                            <!-- .item -->

                            <div class="property-item">
                                <a href="property-single.html" class="img">
                                    <img src="images/img_9.jpg" alt="Image" class="img-fluid" />
                                </a>

                                <div class="property-content">
                                    <div class="price mb-2"><span>Starbucks</span></div>
                                    <div>
                                        <span class="d-block mb-2 text-black-50">Kalijudan, Mulyorejo, Surabaya, Jawa Timur 60114</span>
                                        <span class="city d-block mb-3">Surabaya, Jawa Timur</span>

                                        <div class="specs d-flex mb-4">
                                            <a href="property-single.html" class="btn btn-primary py-2 px-3">See Menu</a>
                                        </div>

                                        <a href="property-single.html" class="btn btn-primary py-2 px-3">See details</a>
                                    </div>
                                </div>
                            </div>
                            <!-- .item -->
                        </div>

                        <div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
                            <span class="prev" data-controls="prev" aria-controls="property"
                                tabindex="-1">Prev</span>
                            <span class="next" data-controls="next" aria-controls="property"
                                tabindex="-1">Next</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="features-1">
        <div class="container">
            <div class="row">
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="box-feature">
                        <span class="flaticon-house"></span>
                        <h3 class="mb-3">Terbuka Untuk Kerja Sama</h3>
                        <p-black>
                            Di Titik Kumpul kami terbuka untuk semua tempat terbaik untuk nongkrong dan berkumpul disini.
                        </p-black>
                    </div>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="box-feature">
                        <span class="flaticon-house-3"></span>
                        <h3 class="mb-3">Pelayanan</h3>
                        <p-black>
                            Kami akan selalu berusaha untuk memberikan pelayanan terbaik untuk setiap User yang mempercayakan kami.
                        </p-black>
                    </div>
                </div>
                <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                    <div class="box-feature">
                        <span class="flaticon-house-1"></span>
                        <h3 class="mb-3">Tempat Terbaik</h3>
                        <p-black>
                            Disini kami memberikan setiap rekomendasi terbaik untuk semua kalangan yang ingin mencari tempat berkumpul.
                        </p-black>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="section section-4 bg-light">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-5">
                    <h2 class="font-weight-bold heading text-primary mb-4">
                        Mari Temukan Tempat Tongkronganmu
                    </h2>
                    <h2 class="font-weight-bold heading text-primary mb-4">
                        TITIKKUMPUL
                    </h2>
                    <p class="text-black-50">
                        Mari berkumpul dengan partnermu bersama kami.
                    </p>
                </div>
            </div>
            <div class="row justify-content-between mb-5">
                <div class="col-lg-7 mb-5 mb-lg-0 order-lg-2">
                    <div class="img-about dots">
                        <img src="images/hero_bg_3.jpg" alt="Image" class="img-fluid" />
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3">
                            <span class="icon-home2"></span>
                        </span>
                        <div class="feature-text">
                            <h3 class="heading">Terbuka Untuk Kerja Sama</h3>
                            <p class="text-white-50">
                                Di Titik Kumpul kami terbuka untuk semua tempat terbaik untuk nongkrong dan berkumpul disini.
                            </p>
                        </div>
                    </div>

                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3">
                            <span class="icon-person"></span>
                        </span>
                        <div class="feature-text">
                            <h3 class="heading">Pelayanan</h3>
                            <p class="text-white-50">
                                Kami akan selalu berusaha untuk memberikan pelayanan terbaik untuk setiap User yang mempercayakan kami.
                            </p>
                        </div>
                    </div>

                    <div class="d-flex feature-h">
                        <span class="wrap-icon me-3">
                            <span class="icon-security"></span>
                        </span>
                        <div class="feature-text">
                            <h3 class="heading">Tempat Terbaik</h3>
                            <p class="text-white-50">
                                Disini kami memberikan setiap rekomendasi terbaik untuk semua kalangan yang ingin mencari tempat berkumpul.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="section">
        <div class="row justify-content-center footer-cta" data-aos="fade-up">
            <div class="col-lg-7 mx-auto text-center">
                <h2 class="mb-4">Mari Berkumpul Bersama Kami</h2>
                <p>
                    <a href="#" target="_blank" class="btn btn-primary text-white py-3 px-4">Login/Register</a>
                </p>
            </div>
            <!-- /.col-lg-7 -->
        </div>
        <!-- /.row -->
    </div>

    <div class="section section-5 bg-light">
        <div class="container">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-6 mb-5">
                    <h2 class="font-weight-bold heading text-primary mb-4">
                        Para Pengembar
                    </h2>
                    <p class="text-black-50">
                        Projek ini dikembangan oleh tiga orang Mahasiswa D4 Teknik Informatika
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="h-100 person">
                        <img src="images/person_1-min.jpg" alt="Image" class="img-fluid" />

                        <div class="person-contents">
                            <h2 class="mb-0"><a href="#">Rifqi Widyadana</a></h2>
                            <span class="meta d-block mb-3">434221039</span>
                            <ul class="social list-unstyled list-inline dark-hover">
                                <li class="list-inline-item">
                                    <a><span class="icon-twitter"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a><span class="icon-facebook"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a><span class="icon-linkedin"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a><span class="icon-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="h-100 person">
                        <img src="images/person_2-min.jpg" alt="Image" class="img-fluid" />

                        <div class="person-contents">
                            <h2 class="mb-0"><a href="#">Fairnanda Kurnia Gusty</a></h2>
                            <span class="meta d-block mb-3">434221039</span>

                            <ul class="social list-unstyled list-inline dark-hover">
                                <li class="list-inline-item">
                                    <a><span class="icon-twitter"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a><span class="icon-facebook"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a><span class="icon-linkedin"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a><span class="icon-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0">
                    <div class="h-100 person">
                        <img src="images/person_3-min.jpg" alt="Image" class="img-fluid" />

                        <div class="person-contents">
                            <h2 class="mb-0"><a href="#">Rakapurbayu</a></h2>
                            <span class="meta d-block mb-3">434221039</span>
                            <ul class="social list-unstyled list-inline dark-hover">
                                <li class="list-inline-item">
                                    <a><span class="icon-twitter"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a><span class="icon-facebook"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a><span class="icon-linkedin"></span></a>
                                </li>
                                <li class="list-inline-item">
                                    <a><span class="icon-instagram"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
