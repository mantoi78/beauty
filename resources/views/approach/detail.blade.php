@extends('layouts.layouts')

    @section('content')




        <!-- Inner Banner -->
        <div class="inner-banner">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-7">
                        <div class="inner-title">
                            <h3>{{ $approach->name }}</h3>
                            <ul>
                                <li>
                                    <a href="/parts">Home</a>
                                </li>
                                <li>{{ $part->name }} / {{ $approach->name }}</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-5">
                        <div class="inner-img">
                            <img src="{{ url('assets/images/inner-banner/inner-banner11.png') }}" alt="Inner Banner" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Services Details Area -->
        <div class="services-details-area pt-100 pb-70">
            <div class="container">
                    <div class="col-lg-10">
                        <div class="services-details-content">
                            <div class="services-preview-img">
                                <img src="{{ url('assets/images/gallery/eye_11_1100×649.png') }}" alt="Services Details" />
                            </div>
                            <h2 class="title">{{ $approach->name }}とは</h2>
                            <p>{{ $approach->description }}</p>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="services-preview-img">
                                        <img src="{{ url('assets/images/services/services-img10.jpg') }}" alt="Services Details" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="services-preview-img">
                                        <img src="{{ url('assets/images/services/services-img15.jpg') }}" alt="Services Details" />
                                    </div>
                                </div>
                            </div>
{{--                            <h3>About This Service</h3>--}}
{{--                            <p>Voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,</p>--}}
{{--                            <p>Voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi </p>--}}
                        </div>
                    </div>


                <div class="row">
                    <div class="col-lg-4">
                        <div class="side-bar-area pr-20">
                            {{--                            <div class="services-catagory">--}}
                            {{--                                <ul>--}}
                            {{--                                    <li>--}}
                            {{--                                        <a href="categories.html" target="_blank">--}}
                            {{--                                            Classic Nail Pedicure--}}
                            {{--                                            <i class="ri-arrow-right-s-line"></i>--}}
                            {{--                                        </a>--}}
                            {{--                                    </li>--}}
                            {{--                                    <li>--}}
                            {{--                                        <a href="categories.html" target="_blank">--}}
                            {{--                                            Paraffin For Nail Hands--}}
                            {{--                                            <i class="ri-arrow-right-s-line"></i>--}}
                            {{--                                        </a>--}}
                            {{--                                    </li>--}}
                            {{--                                    <li>--}}
                            {{--                                        <a href="categories.html" target="_blank">--}}
                            {{--                                            Deep Paraffin Waxing--}}
                            {{--                                            <i class="ri-arrow-right-s-line"></i>--}}
                            {{--                                        </a>--}}
                            {{--                                    </li>--}}
                            {{--                                    <li>--}}
                            {{--                                        <a href="categories.html" target="_blank">--}}
                            {{--                                            Art Nail & Effects--}}
                            {{--                                            <i class="ri-arrow-right-s-line"></i>--}}
                            {{--                                        </a>--}}
                            {{--                                    </li>--}}
                            {{--                                    <li>--}}
                            {{--                                        <a href="categories.html" target="_blank">--}}
                            {{--                                            Glitter For Nail Art--}}
                            {{--                                            <i class="ri-arrow-right-s-line"></i>--}}
                            {{--                                        </a>--}}
                            {{--                                    </li>--}}
                            {{--                                    <li>--}}
                            {{--                                        <a href="categories.html" target="_blank">--}}
                            {{--                                            Classic Nail Manicure--}}
                            {{--                                            <i class="ri-arrow-right-s-line"></i>--}}
                            {{--                                        </a>--}}
                            {{--                                    </li>--}}
                            {{--                                </ul>--}}
                        </div>
{{--                        <div class="side-bar-widget">--}}
{{--                            <h3 class="title">Our Brochure</h3>--}}
{{--                            <p class="mb-15">Alienum phaedrum torquatos nec eu vis detra peri culis ex nihil is in mei. Mei an pericula hincar tem ei est Alienum phae</p>--}}
                            <button class="default-btn active" type="submit" onclick="location.href='http://127.0.0.1:8000/salons' ">サロン予約しよう!</button>
                        </div>
{{--                        <a href="http://127.0.0.1:8080/salons" class="btn btn-primary" role="button">サロン予約しよう！</a>--}}
                        </div>
                    </div>
                </div>

            </div>
            </div>
        </div>
        <!-- Services Details Area End -->





@endsection
