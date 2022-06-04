@extends('layouts.layouts')

@section('content')
    <!-- Banner Area -->
    <div class="banner-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="banner-slider owl-carousel owl-theme">
                        <div class="banner-content">
                            {{--                            <span>Nail and Beauty Salon</span>--}}
                            <h2>部位からメニューを見つける</h2>
                            {{--                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut elit tellus luctus nec ullamcorper mattis pulvinar dapibus leo consectetur</p>--}}
                            <a href="/about" class="learn-btn">Learn More <i class="flaticon-arrow-pointing-to-right"></i></a>
                        </div>

                        <div class="banner-content">
                            {{--                            <span>Nail and Beauty Salon</span>--}}
                            <h2>希望からメニューを見つける</h2>
                            {{--                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut elit tellus luctus nec ullamcorper mattis pulvinar dapibus leo consectetur</p>--}}
                            <a href="/about" class="learn-btn">Learn More <i class="flaticon-arrow-pointing-to-right"></i></a>
                        </div>

                        <div class="banner-content">
                            {{--                            <span>Nail and Beauty Salon</span>--}}
                            <h2>メニューの説明が見たい</h2>
                            {{--                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Ut elit tellus luctus nec ullamcorper mattis pulvinar dapibus leo consectetur</p>--}}
                            <a href="about.html" class="learn-btn">Learn More <i class="flaticon-arrow-pointing-to-right"></i></a>
                        </div>
                    </div>

                </div>

                <div class="col-lg-6">
                    <div class="banner-img" data-speed="0.05" data-revert="true">
                        <div class="woman">
                            <img src="{{ url('assets/images/home-one/eye_1.jpg') }}" data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true" alt="Banner">
                            <div class="vector" data-aos="fade-down" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                                {{--                                <img src="{{ url('assets/images/home-one/home-vector.png') }}" alt="vector">--}}
                            </div>
                        </div>
                        <div class="nail-img" data-aos="fade-up" data-aos-delay="900" data-aos-duration="1000" data-aos-once="true">
                            {{--                            <img src="{{ url('assets/images/home-one/nail-img.jpg') }} a" alt="Nail">--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->

    <!-- Features Area -->
    <div class="features-area pt-100 pb-70">
        <div class="container">
            <div class="row justify-content-center">
                @foreach($parts as $part)
                    <div class="col-lg-3 col-md-6">
                        <div class="features-card">
                            <div class="img">
{{--                                違う画像を表示させる--}}
                                <img src="{{ url("assets/images/features/features-img". -$part->id . ".jpg") }}" alt="features"/>
                            </div>
                            <div class="content">
                                <div class="top-icon">
                                    <i class="flaticon-make-up"></i>
                                </div>
                                <h3>{{ $part->name }}</h3>
                                <div class="more-btn">
                                    <a href="{{ route('wishes.index', $part->id) }}">
                                        <i class="flaticon-arrow-pointing-to-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Features Area End -->

    <!-- About Area -->
    <div class="about-area section-bg pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-item">
                        <div class="about-slider owl-carousel owl-theme">
                            <div class="about-img">
                                <div class="top-border"></div>
                                <img src="{{ url('assets/images/home-one/eye_1.jpg') }}" alt="About">
                                <div class="bottom-border"></div>
                            </div>

                            <div class="about-img">
                                <div class="top-border"></div>
                                <img src="{{ url('assets/images/about/about-img-2.jpg') }}" alt="About">
                                <div class="bottom-border"></div>
                            </div>

                            <div class="about-img">
                                <div class="top-border"></div>
                                <img src="{{ url('assets/images/about/about-img-3.jpg') }}" alt="About">
                                <div class="bottom-border"></div>
                            </div>
                        </div>
                        <div class="about-vector">
                            <img src="{{ url('assets/images/about/about-vector.png') }}" alt="About">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-content pl-20">
                        <div class="section-title">
                            <span>About us</span>
                            <h2>部位や希望することから<br>キレイの方法を見つけよう</h2>
                            <p>キレイになりたい、ここを何か変えたい、<br>でも何をしたらいいのかわからない、<br>どんなメニューがあるのかもわからない</br></p>
                            <p>サロン検索してもメニューの説明がない、<br>メニューからサロン検索したい、<br>世の中では当たり前のメニューかもしれないけれど詳しく知りたい、<br>そんな方のために部位や希望することからキレイの方法を探せて、<br>詳しく記載したページを作りました。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Area End -->

    <!-- Gallery Area -->
    <div class="gallery-area pt-100">
        <div class="container-fluid p-0">
            <div class="gallery-width">
                {{--                <div class="follow-area">--}}
                {{--                    <a href="https://www.instagram.com/?hl=en" target="_blank" class="follow-btn">--}}
                {{--                        <i class="ri-instagram-line"></i>--}}
                {{--                    </a>--}}

                {{--                    <h3>Follow Our Instagram</h3>--}}
            </div>
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="gallery-img">
                        <img src="{{ url('assets/images/gallery/gallery-img-1.png') }}" alt="Gallery">
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="gallery-img">
                        <img src="{{ url('assets/images/gallery/gallery-img-2.png') }}" alt="Gallery">
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="gallery-img">
                        <img src="{{ url('assets/images/gallery/gallery-img-3.jpg') }}" alt="Gallery">
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="gallery-img">
                        <img src="{{ url('assets/images/gallery/gallery-img-4.jpg') }}" alt="Gallery">
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="gallery-img">
                        <img src="{{ url('assets/images/gallery/gallery-img-5.jpg') }}" alt="Gallery">
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="gallery-img">
                        <img src="{{ url('assets/images/gallery/gallery-img-6.jpg') }}" alt="Gallery">
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="gallery-img">
                        <img src="{{ url('assets/images/gallery/gallery-img-7.jpg') }}" alt="Gallery">
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="gallery-img">
                        <img src="{{ url('assets/images/gallery/gallery-img-8.jpg') }}" alt="Gallery">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Gallery Area End -->

    {{--    <!-- Footer Area -->--}}
    {{--    <footer class="footer-area footer-bg">--}}
    {{--        <div class="container pt-100 pb-70">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-lg-4 col-sm-6">--}}
    {{--                    <div class="footer-widget pe-5">--}}
    {{--                        <div class="footer-logo">--}}
    {{--                            <a href="index.blade.php">--}}
    {{--                                <img src="{{ url('assets/images/logos/logo.png') }}" class="footer-logo1" alt="Images">--}}
    {{--                            </a>--}}
    {{--                            <a href="index.blade.php">--}}
    {{--                                <img src="{{ url('assets/images/logos/logo-white.pn') }}g" class="footer-logo2" alt="Images">--}}
    {{--                            </a>--}}
    {{--                        </div>--}}
    {{--                        <p>--}}
    {{--                            Pellentesque habitant morbi tristique senectus netus malesuada fames ac turpis egestas vesti ulum tortor quam bulum tortor feugiat--}}
    {{--                        </p>--}}
    {{--                        <ul class="social-link">--}}
    {{--                            <li>--}}
    {{--                                <a href="https://www.facebook.com/" target="_blank">--}}
    {{--                                    <i class="ri-facebook-fill"></i>--}}
    {{--                                </a>--}}
    {{--                            </li>--}}
    {{--                            <li>--}}
    {{--                                <a href="https://twitter.com/" target="_blank">--}}
    {{--                                    <i class="ri-twitter-fill"></i>--}}
    {{--                                </a>--}}
    {{--                            </li>--}}
    {{--                            <li>--}}
    {{--                                <a href="https://www.linkedin.com/" target="_blank">--}}
    {{--                                    <i class="ri-linkedin-fill"></i>--}}
    {{--                                </a>--}}
    {{--                            </li>--}}
    {{--                            <li>--}}
    {{--                                <a href="https://vimeo.com/" target="_blank">--}}
    {{--                                    <i class="ri-vimeo-fill"></i>--}}
    {{--                                </a>--}}
    {{--                            </li>--}}
    {{--                        </ul>--}}
    {{--                    </div>--}}
    {{--                </div>--}}

    {{--                <div class="col-lg-3 col-sm-6">--}}
    {{--                    <div class="footer-widget pe-2">--}}
    {{--                        <h3>Our Newsletter</h3>--}}
    {{--                        <form class="newsletter-form" data-toggle="validator" method="POST">--}}
    {{--                            <input type="email" class="form-control" placeholder="Enter Your Email Address" name="EMAIL" required autocomplete="off">--}}
    {{--                            <button class="subscribe-btn" type="submit">--}}
    {{--                                Subscribe Now <i class="flaticon-paper-plane"></i>--}}
    {{--                            </button>--}}
    {{--                            <div id="validator-newsletter" class="form-result"></div>--}}
    {{--                        </form>--}}
    {{--                    </div>--}}
    {{--                </div>--}}

    {{--                <div class="col-lg-2 col-sm-6">--}}
    {{--                    <div class="footer-widget ps-4">--}}
    {{--                        <h3>Salon Hours</h3>--}}
    {{--                        <ul class="salon-hours">--}}
    {{--                            <li>--}}
    {{--                                <div class="content">--}}
    {{--                                    <h3>Monday - Friday</h3>--}}
    {{--                                    <span>09:00 AM - 10:00 PM </span>--}}
    {{--                                </div>--}}
    {{--                            </li>--}}
    {{--                            <li>--}}
    {{--                                <div class="content">--}}
    {{--                                    <h3>Saturday - Sunday</h3>--}}
    {{--                                    <span>10:00 AM - 08:00 PM </span>--}}
    {{--                                </div>--}}
    {{--                            </li>--}}
    {{--                        </ul>--}}
    {{--                    </div>--}}
    {{--                </div>--}}

    {{--                <div class="col-lg-3 col-sm-6">--}}
    {{--                    <div class="footer-widget ps-3">--}}
    {{--                        <h3>Get In Touch</h3>--}}
    {{--                        <ul class="footer-contact">--}}
    {{--                            <li>--}}
    {{--                                <i class="flaticon-telephone"></i>--}}
    {{--                                <div class="content">--}}
    {{--                                    <h4>Contact Us</h4>--}}
    {{--                                    <span><a href="tel:+123456778" target="_blank">+123 456 778</a></span>--}}
    {{--                                </div>--}}
    {{--                            </li>--}}
    {{--                            <li>--}}
    {{--                                <i class="flaticon-email"></i>--}}
    {{--                                <div class="content">--}}
    {{--                                    <h4>Email:</h4>--}}
    {{--                                    <span><a href="mailto:hello@naon.com" target="_blank">hello@naon.com</a></span>--}}
    {{--                                </div>--}}
    {{--                            </li>--}}
    {{--                            <li>--}}
    {{--                                <i class="flaticon-pin"></i>--}}
    {{--                                <div class="content">--}}
    {{--                                    <h4>Address</h4>--}}
    {{--                                    <span>151, Demo Store United States</span>--}}
    {{--                                </div>--}}
    {{--                            </li>--}}
    {{--                        </ul>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </footer>--}}
    {{--    <!-- Footer Area End -->--}}

    {{--    <!-- Copyright Area -->--}}
    {{--    <div class="copyright-area">--}}
    {{--        <div class="container">--}}
    {{--            <div class="copy-right-text text-center">--}}
    {{--                <p>--}}
    {{--                    Copyright @--}}
    {{--                    <script>document.write(new Date().getFullYear())</script>--}}
    {{--                    <b>Naon</b> All Rights Reserved--}}
    {{--                    <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a>--}}
    {{--                </p>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--    <!-- Copyright Area End -->--}}

    <!-- QuickView Modal Area -->
    <div class="modal fade productsQuickView" id="productsQuickView" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="btn-close-on" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class='flaticon-close'></i></span>
                </button>
                <div class="product-details-desc">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12">
                            <div class="products-quickView-image">
                                <img src="{{ url('assets/images/products/product-details.png') }}" alt="Product Details">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-12">
                            <div class="product-desc mb-30 pl-20">
                                <h3>Nail Polish Removers </h3>
                                <div class="price">
                                    <span class="old-price">$140.00 </span>
                                    <span class="new-price">- $110.00</span>
                                </div>
                                <div class="product-review">
                                    <div class="rating">
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-fill"></i>
                                        <i class="ri-star-line"></i>
                                        <i class="ri-star-line"></i>
                                    </div>
                                    <div class="rating-count">255 Reviews</div>
                                </div>
                                <p>
                                    Voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.
                                </p>
                                <ul class="product-category-list">
                                    <li>Availablity: <span>In Stock</span></li>
                                    <li>Tags: <span>Nail, Lover</span></li>
                                </ul>
                                <div class="input-counter-area">
                                    <h4>Quantity</h4>
                                    <div class="input-counter">
                                        <span class="minus-btn"><i class="ri-add-fill"></i></span>
                                        <input type="text" value="1">
                                        <span class="plus-btn"><i class="ri-subtract-line"></i></span>
                                    </div>
                                </div>

                                <div class="product-add-btn">
                                    <button type="submit" class="default-btn border-radius-5">
                                        Add To Cart <i class="flaticon-shopping-cart-empty-side-view"></i>
                                    </button>
                                    <ul class="products-action">
                                        <li><a href="compare.html"> <i class="ri-arrow-left-right-line"></i></a></li>
                                        <li><a href="wishlist.html"><i class="ri-heart-line"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product-share">
                                    <ul>
                                        <li>
                                            <span>Share:</span>
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
                                        <li>
                                            <a href="https://vimeo.com/" target="_blank">
                                                <i class="ri-vimeo-fill"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
