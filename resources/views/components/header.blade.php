<!-- Top Header -->
<header class="top-header">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-9">
                <div class="header-left">
                    <ul>
                        <li>
                            <i class="flaticon-email"></i>
                            <a href="mailto:info@findbeauty.com">info@findbeauty.com</a>
                        </li>
                        <li>
                            <i class="flaticon-telephone"></i>
                            <a href="tel:+123-456-778">+123 456 778</a>
                        </li>

                    </ul>
                </div>
            </div>

            <div class="col-lg-4 col-md-3">
                <div class="header-right">
                    <ul class="social-links">
                        <li>
                            <a href="https://www.facebook.com/" target="_blank">
                                <i class="flaticon-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/" target="_blank">
                                <i class="flaticon-twitter"></i>
                            </a>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Top Header End -->
<!-- Start Navbar Area -->
<div class="navbar-area naon-area">
    <div class="mobile-responsive-nav">
        <div class="container">
            <div class="mobile-responsive-menu">
                <div class="logo">
                    <a href="index.blade.php">
                        <img src="{{ url('assets/images/favicon_beauty_3.png') }}" class="logo-one" alt="logo">
                        <img src="{{ url('assets/images/favicon_beauty_3.png') }}" class="logo-two" alt="logo">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="desktop-nav nav-area">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light ">
{{--                <a class="navbar-brand" href="index.blade.php">--}}
{{--                    ロゴ押すとHomeへ戻る--}}
                    <a class="navbar-brand" href="{{ route('parts.index') }}">

                    <img src="{{ url('assets/images/favicon_beauty_3.png') }}" class="logo-one" alt="Logo">
                    Find Beauty
{{--                    <img src="{{ url('assets/images/favicon_beauty_3.png') }}" class="logo-two" alt="Logo">--}}
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="{{ route('parts.index') }}" class="nav-link">
                                Home
                            </a>

                        </li>

                        <li class="nav-item">
                            <a href="{{ route('parts.index') }}" class="nav-link">
                                About Us
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('parts.index') }}" class="nav-link dropdown-toggle">
                                Parts
                            </a>

                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="/parts/1" class="nav-link　dropdown-toggle">
                                        アイブロウ
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/parts/2" class="nav-link">
                                        まつげ
                                    </a>
                                </li>

                                </li>
                                <li class="nav-item">
                                    <a href="/parts/3" class="nav-link">
                                        目
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="/parts/4" class="nav-link">
                                        ネイル
                                    </a>
                                </li>

                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="{{ route('salons.index') }}" class="nav-link">
                                Salons
                            </a>

                        </li>

                </div>
            </nav>
        </div>
    </div>
</div>

