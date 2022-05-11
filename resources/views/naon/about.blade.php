@extends('layouts.layouts')

@section('content')
        <!-- Top Header -->
    <header class="top-header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-9">
                    <div class="header-left">
                        <ul>
                            <li>
                                <i class="flaticon-email"></i>
                                <a href="mailto:info@naon.com">info@naon.com</a>
                            </li>
                            <li>
                                <i class="flaticon-telephone"></i>
                                <a href="tel:+123-456-778">+123 456 778</a>
                            </li>
                            <li>
                                <i class="flaticon-clock"></i>
                                Everyday 7 AM to 7 PM Sunday Off
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
                            <li>
                                <a href="https://www.linkedin.com/" target="_blank">
                                    <i class="flaticon-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://vimeo.com/" target="_blank">
                                    <i class="flaticon-vimeo"></i>
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
                            <img src="{{ url('css/assets/images/logos/logo-small.png') }}" class="logo-one" alt="logo">
                            <img src="{{ url('css/assets/images/logos/logo-white-small.png') }}" class="logo-two" alt="logo">
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
                        <img src="{{ url('css/assets/images/logos/logo.png') }}" class="logo-one" alt="Logo">
                        <img src="{{ url('css/assets/images/logos/logo-white.png') }}" class="logo-two" alt="Logo">
                    </a>

                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">
                                    Home
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="index.blade.php" class="nav-link">
                                            Home Demo - 1
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-2.html" class="nav-link">
                                            Home Demo - 2
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="index-3.html" class="nav-link">
                                            Home Demo - 3
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="about.blade.php" class="nav-link active">
                                    About Us
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">
                                    Pages
                                </a>

                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="testimonials.html" class="nav-link">
                                            Testimonials
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="faq.html" class="nav-link">
                                            FAQ
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="appointment.html" class="nav-link">
                                            Appointment
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link dropdown-toggle">
                                            Team
                                            <i class='bx bx-chevron-down'></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="team.html" class="nav-link">
                                                    Team
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="team-details.html" class="nav-link">
                                                    Team Details
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link dropdown-toggle">
                                            Pricing Plan
                                            <i class='bx bx-chevron-down'></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="pricing-1.html" class="nav-link">
                                                    Pricing Plan Style One
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="pricing-2.html" class="nav-link">
                                                    Pricing Plan Style Two
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link dropdown-toggle">
                                            Gallery
                                            <i class='bx bx-chevron-down'></i>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="gallery-1.html" class="nav-link">
                                                    Gallery Style One
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="gallery-2.html" class="nav-link">
                                                    Gallery Style Two
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link dropdown-toggle">
                                            User
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="login.html" class="nav-link">
                                                    Login
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="register.html" class="nav-link">
                                                    Register
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="forgot-password.html" class="nav-link">
                                                    Forgot Password
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="terms-condition.html" class="nav-link">
                                            Terms & Conditions
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="privacy-policy.html" class="nav-link">
                                            Privacy Policy
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="404.html" class="nav-link">
                                            404 Page
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="coming-soon.html" class="nav-link">
                                            Coming Soon
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">
                                    Services
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="services.html" class="nav-link">
                                            Services Style One
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="services-2.html" class="nav-link">
                                            Services Style Two
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="service-details.html" class="nav-link">
                                            Service Details
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">
                                    Shop
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="shop.html" class="nav-link">Shop</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="cart.html" class="nav-link">Cart</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="checkout.html" class="nav-link">Checkout</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="wishlist.html" class="nav-link">Wishlist</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="shop-details.html" class="nav-link">Shop Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="tracking-order.html" class="nav-link">Tracking Order</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="compare.html" class="nav-link">Compare</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="customer-services.html" class="nav-link">Customer Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="my-account.html" class="nav-link">My Account</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">
                                    Blog </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="blog.html" class="nav-link">
                                            Blog Grid
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-2.html" class="nav-link">
                                            Blog Left Sidebar
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="blog-3.html" class="nav-link">
                                            Blog Right Sidebar
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="author.html" class="nav-link">
                                            Author
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="categories.html" class="nav-link">
                                            Categories
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="tags.html" class="nav-link">
                                            Tags
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link dropdown-toggle">
                                            Single Blog
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="single-blog-1.html" class="nav-link">
                                                    Default
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="single-blog-2.html" class="nav-link">
                                                    With Video
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="single-blog-3.html" class="nav-link">
                                                    With Images Slider
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="contact.html" class="nav-link">
                                    Contact Us
                                </a>
                            </li>
                        </ul>

                        <div class="others-options d-flex align-items-center">
                            <div class="optional-item">
                                <div class="search-btn">
                                    <a class="#" href="#searchmodal" data-bs-toggle="modal" data-bs-target="#searchmodal">
                                        <i class='flaticon-search'></i>
                                    </a>
                                </div>
                            </div>
                            <div class="optional-item">
                                <a class="optional-item-cart" href="cart.html">
                                    <i class='flaticon-shopping-cart-empty-side-view'></i>
                                    <span>2</span>
                                </a>
                            </div>
                        </div>

                        <div class="mobile-nav">
                            <div class="mobile-other d-flex align-items-center">
                                <div class="optional-item">
                                    <div class="search-btn">
                                        <a class="#" href="#searchmodal" data-bs-toggle="modal" data-bs-target="#searchmodal">
                                            <i class='flaticon-search'></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="optional-item">
                                    <a class="optional-item-cart" href="cart.html">
                                        <i class='flaticon-shopping-cart-empty-side-view'></i>
                                        <span>2</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->

    <!-- Modal Start -->
    <div class="modal fade fade-scale searchmodal" id="searchmodal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal">
                        <i class="ri-close-line"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="modal-search-form">
                        <input type="search" class="search-field" placeholder="Search...">
                        <button type="submit"><i class="ri-search-line"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End -->

    <!-- Inner Banner -->
    <div class="inner-banner">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-7">
                    <div class="inner-title">
                        <h3>About Us</h3>
                        <ul>
                            <li>
                                <a href="index.blade.php">Home</a>
                            </li>
                            <li>About Us</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5 col-md-5">
                    <div class="inner-img">
                        <img src="{{ url('css/assets/images/inner-banner/inner-banner1.png') }}" alt="Inner Banner"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- About Area -->
    <div class="about-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-item">
                        <div class="about-slider owl-carousel owl-theme">
                            <div class="about-img">
                                <div class="top-border"></div>
                                <img src="{{ url('css/assets/images/about/about-img1.jpg') }}" alt="About"/>
                                <div class="bottom-border bottom-border-color"></div>
                            </div>

                            <div class="about-img">
                                <div class="top-border"></div>
                                <img src="{{ url('css/assets/images/about/about-img1.jpg') }}" alt="About"/>
                                <div class="bottom-border bottom-border-color"></div>
                            </div>

                            <div class="about-img">
                                <div class="top-border"></div>
                                <img src="{{ url('css/assets/images/about/about-img3.jpg') }}" alt="About"/>
                                <div class="bottom-border bottom-border-color"></div>
                            </div>
                        </div>
                        <div class="about-vector">
                            <img src="{{ url('css/assets/images/about/about-vector.png') }}" alt="About"/>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-content pl-20">
                        <div class="section-title">
                            <span>About us</span>
                            <h2>Moisturize Your Hands Everyday</h2>
                            <p>Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled but also the leap into electronic typesetting. </p>
                            <p>Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and</p>
                        </div>
                        <a href="about.blade.php" class="default-btn border-radius-5">Learn More <i class="flaticon-arrow-pointing-to-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Area End -->

    <!-- Services Area -->
    <div class="services-area section-bg ptb-100">
        <div class="container">
            <div class="section-title mb-45 text-center">
                <span>Our Services</span>
                <h2>What We Offer</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-6">
                    <div class="services-card">
                        <a href="service-details.html">
                            <img src="{{ url('css/assets/images/services/services-img1.jpg') }}" alt="Services"/>
                        </a>
                        <div class="content">
                            <h3><a href="service-details.html">Glitter For Nail Art</a></h3>
                            <a href="service-details.html" class="more-btn">
                                <i class="flaticon-arrow-pointing-to-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-6">
                    <div class="services-card">
                        <a href="service-details.html">
                            <img src="{{ url('css/assets/images/services/services-img2.jpg') }}" alt="Services"/>
                        </a>
                        <div class="content">
                            <h3><a href="service-details.html">Classic Nail Pedicure</a></h3>
                            <a href="service-details.html" class="more-btn">
                                <i class="flaticon-arrow-pointing-to-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-6">
                    <div class="services-card">
                        <a href="service-details.html">
                            <img src="assets/images/services/services-img3.jpg" alt="Services"/>
                        </a>
                        <div class="content">
                            <h3><a href="service-details.html">Paraffin For Nail Hands</a></h3>
                            <a href="service-details.html" class="more-btn">
                                <i class="flaticon-arrow-pointing-to-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-6">
                    <div class="services-card">
                        <a href="service-details.html">
                            <img src="assets/images/services/services-img4.jpg" alt="Services"/>
                        </a>
                        <div class="content">
                            <h3><a href="service-details.html">Deep Paraffin Waxing</a></h3>
                            <a href="service-details.html" class="more-btn">
                                <i class="flaticon-arrow-pointing-to-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-6">
                    <div class="services-card">
                        <a href="service-details.html">
                            <img src="assets/images/services/services-img5.jpg" alt="Services"/>
                        </a>
                        <div class="content">
                            <h3><a href="service-details.html">Classic Nail Manicure</a></h3>
                            <a href="service-details.html" class="more-btn">
                                <i class="flaticon-arrow-pointing-to-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-6">
                    <div class="services-card">
                        <a href="service-details.html">
                            <img src="assets/images/services/services-img6.jpg" alt="Services"/>
                        </a>
                        <div class="content">
                            <h3><a href="service-details.html">Art Nail & Effects</a></h3>
                            <a href="service-details.html" class="more-btn">
                                <i class="flaticon-arrow-pointing-to-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 text-center mt-20">
                    <a href="services.html" class="default-btn two border-radius-5">See All Service <i class="flaticon-arrow-pointing-to-right"></i></a>
                </div>
            </div>
            <div class="services-vector">
                <img src="assets/images/services/services-vector.png" alt="vector"/>
            </div>
        </div>
    </div>
    <!-- Services Area End -->

    <!-- Intro Video Area -->
    <div class="intro-video-area section-bg pb-100">
        <div class="container">
            <div class="video-content">
                <a href="https://www.youtube.com/watch?v=Zd00oIDAt60" class="play-btn">
                    <i class="ri-play-fill"></i>
                </a>
            </div>
            <div class="section-title text-center pt-100">
                <span class="color1">You're Welcomed!</span>
                <h2 class="color1">We Care About Your Nail And Your well-Being</h2>
            </div>
        </div>
    </div>
    <!-- Intro Video Area End -->

    <!-- Team Area -->
    <div class="team-area pt-100 pb-70">
        <div class="container">
            <div class="section-title mb-45 text-center">
                <span>Our Staff</span>
                <h2>Our Excellent & Expert Staff</h2>
                <div class="section-vector">
                    <img src="assets/images/shape/section-vector.png" alt="vector"/>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="team-card">
                        <div class="team-img">
                            <a href="team-details.html">
                                <img src="assets/images/team/team-img1.jpg" alt="Team"/>
                            </a>
                            <ul class="social-links-btn">
                                <li class="share-btn"><i class="flaticon-arrow-pointing-to-right"></i></li>
                                <li>
                                    <a href="https://vimeo.com/" target="_blank">
                                        <i class="ri-vimeo-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                        <i class="ri-linkedin-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="team-details.html">
                                    Lorenzo Diego
                                </a>
                            </h3>
                            <span>Nail Specialist</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="team-card">
                        <div class="team-img">
                            <a href="team-details.html">
                                <img src="assets/images/team/team-img2.jpg" alt="Team"/>
                            </a>
                            <ul class="social-links-btn">
                                <li class="share-btn"><i class="flaticon-arrow-pointing-to-right"></i></li>
                                <li>
                                    <a href="https://vimeo.com/" target="_blank">
                                        <i class="ri-vimeo-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                        <i class="ri-linkedin-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="content">

                            <h3>
                                <a href="team-details.html">
                                    Gabriele Edoardo
                                </a>
                            </h3>
                            <span>Senior Stylist</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="team-card">
                        <div class="team-img">
                            <a href="team-details.html">
                                <img src="assets/images/team/team-img3.jpg" alt="Team"/>
                            </a>
                            <ul class="social-links-btn">
                                <li class="share-btn"><i class="flaticon-arrow-pointing-to-right"></i></li>
                                <li>
                                    <a href="https://vimeo.com/" target="_blank">
                                        <i class="ri-vimeo-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                        <i class="ri-linkedin-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="content">
                            <h3>
                                <a href="team-details.html">
                                    Matteo Lorenzo
                                </a>
                            </h3>
                            <span>Pedicure Specialist</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team Area End -->

    <!-- Testimonial Area -->
    <div class="testimonial-area section-bg pt-100 pb-70">
        <div class="container">
            <div class="section-title mb-45 text-center">
                <span>Our Testimonial</span>
                <h2>What Our Clients Feedback</h2>
            </div>
            <div class="testimonial-slider owl-carousel owl-theme">
                <div class="testimonial-item">
                    <img src="assets/images/testimonial/testimonial-img1.jpg" alt="Testimonial"/>
                    <h3>Emanuele Ebrew</h3>
                    <p>Pellentesque habitant morbi tristique senectus netus et malesuada fames ac turpis egestas vestibulum tortor quam feugiat vit tristique senectus</p>
                    <div class="rating">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-line"></i>
                        <i class="ri-star-line"></i>
                    </div>
                </div>

                <div class="testimonial-item">
                    <img src="assets/images/testimonial/testimonial-img2.jpg" alt="Testimonial"/>
                    <h3>Giovanni Loren</h3>
                    <p>Pellentesque habitant morbi tristique senectus netus et malesuada fames ac turpis egestas vestibulum tortor quam feugiat vit tristique senectus</p>
                    <div class="rating">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-line"></i>
                        <i class="ri-star-line"></i>
                    </div>
                </div>

                <div class="testimonial-item">
                    <img src="assets/images/testimonial/testimonial-img3.jpg" alt="Testimonial"/>
                    <h3>Massimo Pasquale</h3>
                    <p>Pellentesque habitant morbi tristique senectus netus et malesuada fames ac turpis egestas vestibulum tortor quam feugiat vit tristique senectus</p>
                    <div class="rating">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-line"></i>
                        <i class="ri-star-line"></i>
                    </div>
                </div>

                <div class="testimonial-item">
                    <img src="assets/images/testimonial/testimonial-img4.jpg" alt="Testimonial"/>
                    <h3>Gabriele Edoardo </h3>
                    <p>Pellentesque habitant morbi tristique senectus netus et malesuada fames ac turpis egestas vestibulum tortor quam feugiat vit tristique senectus</p>
                    <div class="rating">
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-fill"></i>
                        <i class="ri-star-line"></i>
                        <i class="ri-star-line"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Area End -->

    <!-- Booking Area -->
    <div class="booking-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="book-img">
                        <img src="assets/images/book/book-img1.jpg" alt="Book"/>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="booking-form pl-20">
                        <div class="section-title mb-45">
                            <span>For Your Service</span>
                            <h2>Make An Appointment</h2>
                        </div>
                        <form>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" required data-error="Please Enter Your Name" placeholder="Your Name">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" required data-error="Please Enter Your Email" placeholder="Your Email">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" required data-error="Please Enter Your Phone number" placeholder="Phone number">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="form-select form-control">
                                            <option selected>2 Person</option>
                                            <option value="1">1 Person</option>
                                            <option value="2">4 Person</option>
                                            <option value="3">7 Person</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" id="datetimepicker" class="form-control" required data-error="Please Enter Date" placeholder=" Enter Date">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" required data-error="Please Enter Address" placeholder="Address">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="7" required data-error="Write your message" placeholder="Your Message"></textarea>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">
                                        Book Now
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking Area End -->

    <!-- Blog Area -->
    <div class="blog-area pt-100 pb-70 section-bg">
        <div class="container">
            <div class="section-title mb-45 text-center">
                <span>News Feeds</span>
                <h2>Our Latest Blog Update</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card">
                        <a href="single-blog-1.html" class="img">
                            <img src="assets/images/blog/blog-img1.jpg" alt="Blog"/>
                        </a>
                        <div class="content">
                            <ul>
                                <li>
                                    <i class="flaticon-user"></i>
                                    <a href="author.html">Admin</a>
                                </li>
                                <li>
                                    <i class="flaticon-clock"></i>
                                    Jan 14,2022
                                </li>
                            </ul>
                            <h3><a href="single-blog-1.html">Happy Hands Nail Polish And Exclusive Collection</a></h3>
                            <a href="single-blog-1.html" class="default-btn two border-radius-5">Read More <i class="flaticon-arrow-pointing-to-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog-card">
                        <a href="single-blog-1.html" class="img">
                            <img src="assets/images/blog/blog-img2.jpg" alt="Blog"/>
                        </a>
                        <div class="content">
                            <ul>
                                <li>
                                    <i class="flaticon-user"></i>
                                    <a href="author.html">Admin</a>
                                </li>
                                <li>
                                    <i class="flaticon-clock"></i>
                                    Jan 15,2022
                                </li>
                            </ul>
                            <h3><a href="single-blog-1.html">Why You Should Use Non-Toxic Nail Polish</a></h3>
                            <a href="single-blog-1.html" class="default-btn two border-radius-5">Read More <i class="flaticon-arrow-pointing-to-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog-card">
                        <a href="single-blog-1.html" class="img">
                            <img src="assets/images/blog/blog-img3.jpg" alt="Blog"/>
                        </a>
                        <div class="content">
                            <ul>
                                <li>
                                    <i class="flaticon-user"></i>
                                    <a href="author.html">Admin</a>
                                </li>
                                <li>
                                    <i class="flaticon-clock"></i>
                                    Jan 16,2022
                                </li>
                            </ul>
                            <h3><a href="single-blog-1.html">Organize Your Nail Polishes! 5 Creative Ways To Do Polish</a></h3>
                            <a href="single-blog-1.html" class="default-btn two border-radius-5">Read More <i class="flaticon-arrow-pointing-to-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog Area End -->

    <!-- Gallery Area -->
    <div class="gallery-area pt-100">
        <div class="container-fluid p-0">
            <div class="gallery-width">
                <div class="follow-area">
                    <a href="https://www.instagram.com/?hl=en" target="_blank" class="follow-btn">
                        <i class="ri-instagram-line"></i>
                    </a>

                    <h3>Follow Our Instagram</h3>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="gallery-img">
                            <img src="assets/images/gallery/gallery-img1.jpg" alt="Gallery"/>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="gallery-img">
                            <img src="assets/images/gallery/gallery-img2.jpg" alt="Gallery"/>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="gallery-img">
                            <img src="assets/images/gallery/gallery-img3.jpg" alt="Gallery"/>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="gallery-img">
                            <img src="assets/images/gallery/gallery-img4.jpg" alt="Gallery"/>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="gallery-img">
                            <img src="assets/images/gallery/gallery-img5.jpg" alt="Gallery"/>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="gallery-img">
                            <img src="assets/images/gallery/gallery-img6.jpg" alt="Gallery"/>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="gallery-img">
                            <img src="assets/images/gallery/gallery-img7.jpg" alt="Gallery"/>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="gallery-img">
                            <img src="assets/images/gallery/gallery-img8.jpg" alt="Gallery"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery Area End -->

    <!-- Footer Area -->
    <footer class="footer-area footer-bg">
        <div class="container pt-100 pb-70">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="footer-widget pe-5">
                        <div class="footer-logo">
                            <a href="index.blade.php">
                                <img src="assets/images/logos/logo.png" class="footer-logo1" alt="Images">
                            </a>
                            <a href="index.blade.php">
                                <img src="assets/images/logos/logo-white.png" class="footer-logo2" alt="Images">
                            </a>
                        </div>
                        <p>
                            Pellentesque habitant morbi tristique senectus netus malesuada fames ac turpis egestas vesti ulum tortor quam bulum tortor feugiat
                        </p>
                        <ul class="social-link">
                            <li>
                                <a href="https://www.facebook.com/" target="_blank">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/" target="_blank">
                                    <i class="ri-twitter-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/" target="_blank">
                                    <i class="ri-linkedin-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://vimeo.com/" target="_blank">
                                    <i class="ri-vimeo-fill"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget pe-2">
                        <h3>Our Newsletter</h3>
                        <form class="newsletter-form" data-toggle="validator" method="POST">
                            <input type="email" class="form-control" placeholder="Enter Your Email Address" name="EMAIL" required autocomplete="off">
                            <button class="subscribe-btn" type="submit">
                                Subscribe Now <i class="flaticon-paper-plane"></i>
                            </button>
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-2 col-sm-6">
                    <div class="footer-widget ps-4">
                        <h3>Salon Hours</h3>
                        <ul class="salon-hours">
                            <li>
                                <div class="content">
                                    <h3>Monday - Friday</h3>
                                    <span>09:00 AM - 10:00 PM </span>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <h3>Saturday - Sunday</h3>
                                    <span>10:00 AM - 08:00 PM </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="footer-widget ps-3">
                        <h3>Get In Touch</h3>
                        <ul class="footer-contact">
                            <li>
                                <i class="flaticon-telephone"></i>
                                <div class="content">
                                    <h4>Contact Us</h4>
                                    <span><a href="tel:+123456778" target="_blank">+123 456 778</a></span>
                                </div>
                            </li>
                            <li>
                                <i class="flaticon-email"></i>
                                <div class="content">
                                    <h4>Email:</h4>
                                    <span><a href="mailto:hello@naon.com" target="_blank">hello@naon.com</a></span>
                                </div>
                            </li>
                            <li>
                                <i class="flaticon-pin"></i>
                                <div class="content">
                                    <h4>Address</h4>
                                    <span>151, Demo Store United States</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- Copyright Area -->
    <div class="copyright-area">
        <div class="container">
            <div class="copy-right-text text-center">
                <p>
                    Copyright @
                    <script>document.write(new Date().getFullYear())</script>
                    <b>Naon</b> All Rights Reserved
                    <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a>
                </p>
            </div>
        </div>
    </div>
@endsection
