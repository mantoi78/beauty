@extends('layouts.layouts')

@section('content')


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


@endsection
