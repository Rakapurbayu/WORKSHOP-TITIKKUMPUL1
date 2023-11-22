<nav class="site-nav">
    <div class="container">
        <div class="menu-bg-wrap">
            <div class="site-navigation">
                <a href="{{ route('home') }}" class="logo m-0 float-start">TitikKumpul</a>

                <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu float-end">
                    <li class="active"><a href="{{ route('home') }}">Home</a></li>
                    <li class="has-children">
                        <a>Kumpul</a>
                        <ul class="dropdown">
                            <li><a href="{{ route('PesanNongkrong') }}">Pesan Tempat</a></li>
                            <li><a href="{{ route('PesanMakan') }}">Pesan Makan</a></li>
                            <ul class="dropdown">
                               
                            </ul>
                    </li>
                </ul>
                </li>
                <li><a href="{{ route('TentangKami') }}">Tentang Kami</a></li>
                <li><a href="{{ route('KontakKami') }}">Kontak kami</a></li>
                @auth
                <li class="has-children">
                    <a>Akun</a>
                    <ul class="dropdown">
                        <li><a href="{{ route('PesanNongkrong') }}">Profile</a></li>
                        <li><a href="{{ route('ListPemesanan') }}">Pesanan Saya</a></li>
                        <li><a href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                </li>
                @else
                <li><a href="{{ route('login') }}">Login</a></li>
                @endauth
                </ul>

                <a href="#"
                    class="burger light me-auto float-end mt-1 site-menu-toggle js-menu-toggle d-inline-block d-lg-none"
                    data-toggle="collapse" data-target="#main-navbar">
                    <span></span>
                </a>
            </div>
        </div>
    </div>
</nav>
