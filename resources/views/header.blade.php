<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta tags, styles, and other head content -->
    <title>
      @yield('title')
    </title>
  </head>
  <body>
    <nav>
        <!DOCTYPE html>
        <html lang="en">
          <head>
            <meta charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1" />
            <meta name="author" content="Untree.co" />
            <link rel="shortcut icon" href="favicon.png" />
        
            <meta name="description" content="" />
            <meta name="keywords" content="bootstrap, bootstrap5" />
        
            <link rel="preconnect" href="https://fonts.googleapis.com" />
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
            <link
              href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap"
              rel="stylesheet"
            />
        
            <link rel="stylesheet" href="fonts/icomoon/style.css" />
            <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css" />
        
            <link rel="stylesheet" href="css/tiny-slider.css" />
            <link rel="stylesheet" href="css/aos.css" />
            <link rel="stylesheet" href="css/style.css" />
        
            <title>
              TitikKumpul &mdash;
            </title>
          </head>
          <body>
            <div class="site-mobile-menu site-navbar-target">
              <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close">
                  <span class="icofont-close js-menu-toggle"></span>
                </div>
              </div>
              <div class="site-mobile-menu-body"></div>
            </div>
        
            <nav class="site-nav">
              <div class="container">
                <div class="menu-bg-wrap">
                  <div class="site-navigation">
                    <a href="index.html" class="logo m-0 float-start">TitikKumpul</a>
        
                    <ul
                      class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end"
                    >
                      <li class="active"><a href="{{ route('home') }}">Beranda</a></li>
                      <li class="has-children">
                        <a href="{{ route('PesanNongkrong') }}">Pesan Tempat Nongkrong</a>
                        <ul class="dropdown">
                          <li><a href="#">Pesan Tempat</a></li>
                          <li><a href="#">Pesan Makan</a></li>
                            <ul class="dropdown">
                              <li><a href="#">Sub Menu One</a></li>
                              <li><a href="#">Sub Menu Two</a></li>
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li><a href="{{ route('TentangKami') }}">Tentang Kami</a></li>
                      <li><a href="{{ route('KontakKami') }}">Kontak kami</a></li>
                    </ul>
        
                    <a
                      href="#"
                      class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
                      data-toggle="collapse"
                      data-target="#main-navbar"
                    >
                      <span></span>
                    </a>
                  </div>
                </div>
              </div>
            </nav>
        
            <div class="hero">
              <div class="hero-slide">
                <div
                  class="img overlay"
                  style="background-image: url('images/hero_bg_3.jpg')"
                ></div>
                <div
                  class="img overlay"
                  style="background-image: url('images/hero_bg_2.jpg')"
                ></div>
                <div
                  class="img overlay"
                  style="background-image: url('images/hero_bg_1.jpg')"
                ></div>
              </div>
            </nav>
    
    <div class="container">
      @yield('content')
    </div>
    
    <footer>
      <!-- Footer content -->
    </footer>
  </body>
</html>
