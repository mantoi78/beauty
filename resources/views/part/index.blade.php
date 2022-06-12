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
                            <a href="/about" class="learn-btn">Learn More <i class="flaticon-arrow-pointing-to-right"></i></a>
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
                            {{-- 違う画像を表示させる--}}
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

@endsection
