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
{{--                        <li>--}}
{{--                            <a href="https://www.linkedin.com/" target="_blank">--}}
{{--                                <i class="flaticon-linkedin"></i>--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="https://vimeo.com/" target="_blank">--}}
{{--                                <i class="flaticon-vimeo"></i>--}}
{{--                            </a>--}}
{{--                        </li>--}}
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
                <a class="navbar-brand" href="index.blade.php">
                    <img src="{{ url('assets/images/favicon_beauty_3.png') }}" class="logo-one" alt="Logo">
                    <img src="{{ url('assets/images/favicon_beauty_3.png') }}" class="logo-two" alt="Logo">
                </a>

                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a href="/parts" class="nav-link">
                                Home
                            </a>
                            {{--                                <ul class="dropdown-menu">--}}
                            {{--                                    <li class="nav-item">--}}
                            {{--                                        <a href="index.blade.php" class="nav-link active">--}}
                            {{--                                            Home Demo - 1--}}
                            {{--                                        </a>--}}
                            {{--                                    </li>--}}
                            {{--                                    <li class="nav-item">--}}
                            {{--                                        <a href="index-2.html" class="nav-link">--}}
                            {{--                                            Home Demo - 2--}}
                            {{--                                        </a>--}}
                            {{--                                    </li>--}}
                            {{--                                    <li class="nav-item">--}}
                            {{--                                        <a href="index-3.html" class="nav-link">--}}
                            {{--                                            Home Demo - 3--}}
                            {{--                                        </a>--}}
                            {{--                                    </li>--}}
                            {{--                                </ul>--}}
                        </li>

                        <li class="nav-item">
                            <a href="/about" class="nav-link">
                                About Us
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/parts" class="nav-link dropdown-toggle">
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
                                {{--                                    <li class="nav-item">--}}
                                {{--                                        <a href="#" class="nav-link dropdown-toggle">--}}
                                {{--                                            Team--}}
                                {{--                                            <i class='bx bx-chevron-down'></i>--}}
                                {{--                                        </a>--}}
                                {{--                                        <ul class="dropdown-menu">--}}
                                {{--                                            <li class="nav-item">--}}
                                {{--                                                <a href="team.html" class="nav-link">--}}
                                {{--                                                    Team--}}
                                {{--                                                </a>--}}
                                {{--                                            </li>--}}
                                {{--                                            <li class="nav-item">--}}
                                {{--                                                <a href="team-details.html" class="nav-link">--}}
                                {{--                                                    Team Details--}}
                                {{--                                                </a>--}}
                                {{--                                            </li>--}}
                                {{--                                        </ul>--}}
                                {{--                                    </li>--}}
                                {{--                                    <li class="nav-item">--}}
                                {{--                                        <a href="#" class="nav-link dropdown-toggle">--}}
                                {{--                                            Pricing Plan--}}
                                {{--                                            <i class='bx bx-chevron-down'></i>--}}
                                {{--                                        </a>--}}
                                {{--                                        <ul class="dropdown-menu">--}}
                                {{--                                            <li class="nav-item">--}}
                                {{--                                                <a href="pricing-1.html" class="nav-link">--}}
                                {{--                                                    Pricing Plan Style One--}}
                                {{--                                                </a>--}}
                                {{--                                            </li>--}}
                                {{--                                            <li class="nav-item">--}}
                                {{--                                                <a href="pricing-2.html" class="nav-link">--}}
                                {{--                                                    Pricing Plan Style Two--}}
                                {{--                                                </a>--}}
                                {{--                                            </li>--}}
                                {{--                                        </ul>--}}
                                {{--                                    </li>--}}
                                {{--                                    <li class="nav-item">--}}
                                {{--                                        <a href="#" class="nav-link dropdown-toggle">--}}
                                {{--                                            Gallery--}}
                                {{--                                            <i class='bx bx-chevron-down'></i>--}}
                                {{--                                        </a>--}}
                                {{--                                        <ul class="dropdown-menu">--}}
                                {{--                                            <li class="nav-item">--}}
                                {{--                                                <a href="gallery-1.html" class="nav-link">--}}
                                {{--                                                    Gallery Style One--}}
                                {{--                                                </a>--}}
                                {{--                                            </li>--}}
                                {{--                                            <li class="nav-item">--}}
                                {{--                                                <a href="gallery-2.html" class="nav-link">--}}
                                {{--                                                    Gallery Style Two--}}
                                {{--                                                </a>--}}
                                {{--                                            </li>--}}
                                {{--                                        </ul>--}}
                                {{--                                    </li>--}}
                                {{--                                    <li class="nav-item">--}}
                                {{--                                        <a href="#" class="nav-link dropdown-toggle">--}}
                                {{--                                            User--}}
                                {{--                                        </a>--}}
                                {{--                                        <ul class="dropdown-menu">--}}
                                {{--                                            <li class="nav-item">--}}
                                {{--                                                <a href="login.html" class="nav-link">--}}
                                {{--                                                    Login--}}
                                {{--                                                </a>--}}
                                {{--                                            </li>--}}
                                {{--                                            <li class="nav-item">--}}
                                {{--                                                <a href="register.html" class="nav-link">--}}
                                {{--                                                    Register--}}
                                {{--                                                </a>--}}
                                {{--                                            </li>--}}
                                {{--                                            <li class="nav-item">--}}
                                {{--                                                <a href="forgot-password.html" class="nav-link">--}}
                                {{--                                                    Forgot Password--}}
                                {{--                                                </a>--}}
                                {{--                                            </li>--}}
                                {{--                                        </ul>--}}
                                {{--                                    </li>--}}
                                {{--                                    <li class="nav-item">--}}
                                {{--                                        <a href="/parts/4" class="nav-link">--}}
                                {{--                                            ネイル--}}
                                {{--                                        </a>--}}
                                {{--                                    </li>--}}

                                {{--                                    <li class="nav-item">--}}
                                {{--                                        <a href="privacy-policy.html" class="nav-link">--}}
                                {{--                                            Privacy Policy--}}
                                {{--                                        </a>--}}
                                {{--                                    </li>--}}

                                {{--                                    <li class="nav-item">--}}
                                {{--                                        <a href="404.blade.php" class="nav-link">--}}
                                {{--                                            404 Page--}}
                                {{--                                        </a>--}}
                                {{--                                    </li>--}}

                                {{--                                    <li class="nav-item">--}}
                                {{--                                        <a href="coming-soon.html" class="nav-link">--}}
                                {{--                                            Coming Soon--}}
                                {{--                                        </a>--}}
                                {{--                                    </li>--}}
                            </ul>
                        </li>

                        {{--                            <li class="nav-item">--}}
                        {{--                                <a href="#" class="nav-link dropdown-toggle">--}}
                        {{--                                    Wishes & Approaches--}}
                        {{--                                </a>--}}
                        {{--                                <ul class="dropdown-menu">--}}
                        {{--                                    <li class="nav-item">--}}
                        {{--                                        <a href="services.html" class="nav-link">--}}
                        {{--                                            Services Style One--}}
                        {{--                                        </a>--}}
                        {{--                                    </li>--}}
                        {{--                                    <li class="nav-item">--}}
                        {{--                                        <a href="services-2.html" class="nav-link">--}}
                        {{--                                            Services Style Two--}}
                        {{--                                        </a>--}}
                        {{--                                    </li>--}}
                        {{--                                    <li class="nav-item">--}}
                        {{--                                        <a href="service-details.html" class="nav-link">--}}
                        {{--                                            Service Details--}}
                        {{--                                        </a>--}}
                        {{--                                    </li>--}}
                        {{--                                </ul>--}}
                        {{--                            </li>--}}

                        <li class="nav-item">
                            <a href="/salons" class="nav-link">
                                Salons
                            </a>
                            {{--                                <ul class="dropdown-menu">--}}
                            {{--                                    <li class="nav-item">--}}
                            {{--                                        <a href="shop.html" class="nav-link">Shop</a>--}}
                            {{--                                    </li>--}}
                            {{--                                    <li class="nav-item">--}}
                            {{--                                        <a href="cart.html" class="nav-link">Cart</a>--}}
                            {{--                                    </li>--}}
                            {{--                                    <li class="nav-item">--}}
                            {{--                                        <a href="checkout.html" class="nav-link">Checkout</a>--}}
                            {{--                                    </li>--}}
                            {{--                                    <li class="nav-item">--}}
                            {{--                                        <a href="wishlist.html" class="nav-link">Wishlist</a>--}}
                            {{--                                    </li>--}}
                            {{--                                    <li class="nav-item">--}}
                            {{--                                        <a href="shop-details.html" class="nav-link">Shop Details</a>--}}
                            {{--                                    </li>--}}
                            {{--                                    <li class="nav-item">--}}
                            {{--                                        <a href="tracking-order.html" class="nav-link">Tracking Order</a>--}}
                            {{--                                    </li>--}}
                            {{--                                    <li class="nav-item">--}}
                            {{--                                        <a href="compare.html" class="nav-link">Compare</a>--}}
                            {{--                                    </li>--}}
                            {{--                                    <li class="nav-item">--}}
                            {{--                                        <a href="customer-services.html" class="nav-link">Customer Services</a>--}}
                            {{--                                    </li>--}}
                            {{--                                    <li class="nav-item">--}}
                            {{--                                        <a href="my-account.html" class="nav-link">My Account</a>--}}
                            {{--                                    </li>--}}
                            {{--                                </ul>--}}
                        </li>

                        {{--                            <li class="nav-item">--}}
                        {{--                                <a href="#" class="nav-link dropdown-toggle">--}}
                        {{--                                    Blog </a>--}}
                        {{--                                <ul class="dropdown-menu">--}}
                        {{--                                    <li class="nav-item">--}}
                        {{--                                        <a href="blog.html" class="nav-link">--}}
                        {{--                                            Blog Grid--}}
                        {{--                                        </a>--}}
                        {{--                                    </li>--}}
                        {{--                                    <li class="nav-item">--}}
                        {{--                                        <a href="blog-2.html" class="nav-link">--}}
                        {{--                                            Blog Left Sidebar--}}
                        {{--                                        </a>--}}
                        {{--                                    </li>--}}
                        {{--                                    <li class="nav-item">--}}
                        {{--                                        <a href="blog-3.html" class="nav-link">--}}
                        {{--                                            Blog Right Sidebar--}}
                        {{--                                        </a>--}}
                        {{--                                    </li>--}}

                        {{--                                    <li class="nav-item">--}}
                        {{--                                        <a href="author.html" class="nav-link">--}}
                        {{--                                            Author--}}
                        {{--                                        </a>--}}
                        {{--                                    </li>--}}

                        {{--                                    <li class="nav-item">--}}
                        {{--                                        <a href="categories.html" class="nav-link">--}}
                        {{--                                            Categories--}}
                        {{--                                        </a>--}}
                        {{--                                    </li>--}}
                        {{--                                    <li class="nav-item">--}}
                        {{--                                        <a href="tags.html" class="nav-link">--}}
                        {{--                                            Tags--}}
                        {{--                                        </a>--}}
                        {{--                                    </li>--}}
                        {{--                                    <li class="nav-item">--}}
                        {{--                                        <a href="#" class="nav-link dropdown-toggle">--}}
                        {{--                                            Single Blog--}}
                        {{--                                        </a>--}}
                        {{--                                        <ul class="dropdown-menu">--}}
                        {{--                                            <li class="nav-item">--}}
                        {{--                                                <a href="single-blog-1.html" class="nav-link">--}}
                        {{--                                                    Default--}}
                        {{--                                                </a>--}}
                        {{--                                            </li>--}}
                        {{--                                            <li class="nav-item">--}}
                        {{--                                                <a href="single-blog-2.html" class="nav-link">--}}
                        {{--                                                    With Video--}}
                        {{--                                                </a>--}}
                        {{--                                            </li>--}}
                        {{--                                            <li class="nav-item">--}}
                        {{--                                                <a href="single-blog-3.html" class="nav-link">--}}
                        {{--                                                    With Images Slider--}}
                        {{--                                                </a>--}}
                        {{--                                            </li>--}}
                        {{--                                        </ul>--}}
                        {{--                                    </li>--}}
                        {{--                                </ul>--}}
                        {{--                            </li>--}}

{{--                        <li class="nav-item">--}}
{{--                            <a href="contact.html" class="nav-link">--}}
{{--                                Contact Us--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}

                    {{--                        <div class="others-options d-flex align-items-center">--}}
                    {{--                            <div class="optional-item">--}}
                    {{--                                <div class="search-btn">--}}
                    {{--                                    <a class="#" href="#searchmodal" data-bs-toggle="modal" data-bs-target="#searchmodal">--}}
                    {{--                                        <i class='flaticon-search'></i>--}}
                    {{--                                    </a>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                            <div class="optional-item">--}}
                    {{--                                <a class="optional-item-cart" href="cart.html">--}}
                    {{--                                    <i class='flaticon-shopping-cart-empty-side-view'></i>--}}
                    {{--                                    <span>2</span>--}}
                    {{--                                </a>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}

                    {{--                        <div class="mobile-nav">--}}
                    {{--                            <div class="mobile-other d-flex align-items-center">--}}
                    {{--                                <div class="optional-item">--}}
                    {{--                                    <div class="search-btn">--}}
                    {{--                                        <a class="#" href="#searchmodal" data-bs-toggle="modal" data-bs-target="#searchmodal">--}}
                    {{--                                            <i class='flaticon-search'></i>--}}
                    {{--                                        </a>--}}
                    {{--                                    </div>--}}
                    {{--                                </div>--}}

                    {{--                                <div class="optional-item">--}}
                    {{--                                    <a class="optional-item-cart" href="cart.html">--}}
                    {{--                                        <i class='flaticon-shopping-cart-empty-side-view'></i>--}}
                    {{--                                        <span>2</span>--}}
                    {{--                                    </a>--}}
                    {{--                                </div>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                </div>
            </nav>
        </div>
    </div>
</div>

