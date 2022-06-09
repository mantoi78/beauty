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
                                {{-- 詳細ページ画像--}}
{{--                                <img src="{{ url('assets/images/gallery/eye_11_1100×649.png') }}" alt="Services Details" />--}}
                                <img src="{{ url("assets/images/gallery/services-details/sd-img". -$approach->id . ".jpg") }}" alt="Services Details"/>
                            </div>
                            <h2 class="title">{{ $approach->name }}とは</h2>
                            <p>{!! nl2br(e($approach->description)) !!}</p>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">

                                </div>
                            </div>

                        </div>
                    </div>


                <div class="row">
                    <div class="col-lg-4">
                        <div class="side-bar-area pr-20">

                        </div>

                            <button class="default-btn active" type="submit" onclick="location.href='{{ route('salons.index') }}' ">サロン予約しよう!</button>
                        </div>
                        </div>
                    </div>
                </div>

            </div>
            </div>
        </div>
        <!-- Services Details Area End -->





@endsection
