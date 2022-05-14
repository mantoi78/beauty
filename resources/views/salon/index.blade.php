@extends('layouts.layouts')


@section('content')


    <body>





    <!-- Inner Banner -->
    <div class="inner-banner">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-7">
                    <div class="inner-title">
                        <h3>Salon</h3>
                        <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>サロン一覧</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5 col-md-5">
                    <div class="inner-img">
                        <img src="{{ url('css/assets/images/inner-banner/inner-banner3.png') }}" alt="Inner Banner"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Testimonial Area -->
    <div class="testimonial-area pt-100 pb-70">
        <div class="container">
            <div class="row">

                @foreach($salons as $salon)
                <div class="col-lg-4 col-md-6">
                    <div class="testimonial-item testimonial-item-color">
                        <img src="{{ url('css/assets/images/testimonial/testimonial-img1.jpg') }}" alt="Testimonial"/>
                        <h3>{{ $salon->name }}</h3>
                        <p>{{ $salon->address }}</p>
                        <div class="rating">
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-fill"></i>
                            <i class="ri-star-line"></i>
                            <i class="ri-star-line"></i>
                        </div>
                    </div>
                </div>
                @endforeach

{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="testimonial-item testimonial-item-color">--}}
{{--                        <img src="assets/images/testimonial/testimonial-img2.jpg" alt="Testimonial"/>--}}
{{--                        <h3>Giovanni Loren</h3>--}}
{{--                        <p>Pellentesque habitant morbi tristique senectus netus et malesuada fames ac turpis egestas vestibulum tortor quam feugiat vit tristique senectus</p>--}}
{{--                        <div class="rating">--}}
{{--                            <i class="ri-star-fill"></i>--}}
{{--                            <i class="ri-star-fill"></i>--}}
{{--                            <i class="ri-star-fill"></i>--}}
{{--                            <i class="ri-star-line"></i>--}}
{{--                            <i class="ri-star-line"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}


{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="testimonial-item testimonial-item-color">--}}
{{--                        <img src="assets/images/testimonial/testimonial-img3.jpg" alt="Testimonial"/>--}}
{{--                        <h3>Massimo Pasquale</h3>--}}
{{--                        <p>Pellentesque habitant morbi tristique senectus netus et malesuada fames ac turpis egestas vestibulum tortor quam feugiat vit tristique senectus</p>--}}
{{--                        <div class="rating">--}}
{{--                            <i class="ri-star-fill"></i>--}}
{{--                            <i class="ri-star-fill"></i>--}}
{{--                            <i class="ri-star-fill"></i>--}}
{{--                            <i class="ri-star-line"></i>--}}
{{--                            <i class="ri-star-line"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="testimonial-item testimonial-item-color">--}}
{{--                        <img src="assets/images/testimonial/testimonial-img4.jpg" alt="Testimonial"/>--}}
{{--                        <h3>Gabriele Edoardo </h3>--}}
{{--                        <p>Pellentesque habitant morbi tristique senectus netus et malesuada fames ac turpis egestas vestibulum tortor quam feugiat vit tristique senectus</p>--}}
{{--                        <div class="rating">--}}
{{--                            <i class="ri-star-fill"></i>--}}
{{--                            <i class="ri-star-fill"></i>--}}
{{--                            <i class="ri-star-fill"></i>--}}
{{--                            <i class="ri-star-line"></i>--}}
{{--                            <i class="ri-star-line"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="testimonial-item testimonial-item-color">--}}
{{--                        <img src="assets/images/testimonial/testimonial-img5.jpg" alt="Testimonial"/>--}}
{{--                        <h3>Matteo Lorenzo </h3>--}}
{{--                        <p>Pellentesque habitant morbi tristique senectus netus et malesuada fames ac turpis egestas vestibulum tortor quam feugiat vit tristique senectus</p>--}}
{{--                        <div class="rating">--}}
{{--                            <i class="ri-star-fill"></i>--}}
{{--                            <i class="ri-star-fill"></i>--}}
{{--                            <i class="ri-star-fill"></i>--}}
{{--                            <i class="ri-star-line"></i>--}}
{{--                            <i class="ri-star-line"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4 col-md-6">--}}
{{--                    <div class="testimonial-item testimonial-item-color">--}}
{{--                        <img src="assets/images/testimonial/testimonial-img6.jpg" alt="Testimonial"/>--}}
{{--                        <h3>Aaliyah Madelyn</h3>--}}
{{--                        <p>Pellentesque habitant morbi tristique senectus netus et malesuada fames ac turpis egestas vestibulum tortor quam feugiat vit tristique senectus</p>--}}
{{--                        <div class="rating">--}}
{{--                            <i class="ri-star-fill"></i>--}}
{{--                            <i class="ri-star-fill"></i>--}}
{{--                            <i class="ri-star-fill"></i>--}}
{{--                            <i class="ri-star-line"></i>--}}
{{--                            <i class="ri-star-line"></i>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

                <div class="col-lg-12 col-md-12 text-center">
                    <div class="pagination-area">
                        <a href="blog-1.html" class="prev page-numbers">
                            <i class="flaticon-arrow-pointing-to-left"></i>
                        </a>

                        <span class="page-numbers current" aria-current="page">1</span>
                        <a href="blog-1.html" class="page-numbers">2</a>
                        <a href="blog-1.html" class="page-numbers">3</a>

                        <a href="blog-1.html" class="next page-numbers">
                            <i class="flaticon-arrow-pointing-to-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial Area End -->






    </body>
@endsection
