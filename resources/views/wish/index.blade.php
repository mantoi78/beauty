@extends('layouts.layouts')

@section('content')

    <!-- Inner Banner -->
    <div class="inner-banner">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-7">
                    <div class="inner-title">
                        <h3>{{ $part->name }}</h3>
                        <ul>
                            <li>
                                <a href="{{ route('parts.index') }}">Home</a>
                            </li>
                            <li>{{ $part->name }}</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5 col-md-5">
                    <div class="inner-img">
                        <img src="{{ url("assets/images/features/features-img". -$part->id . ".jpg") }}" alt="features"/>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Inner Banner End -->

    <!-- Services Area -->
    <div class="services-area ptb-100">
        <div class="container">
            <div class="section-title mb-45 text-center">
{{--                <span>Our Services</span>--}}
                <h2>What We Want</h2>
            </div>
            <div class="row justify-content-center">
                @foreach($part->wishes as $wish)

                <div class="col-lg-4 col-md-6">
                    <div class="services-item-two">
                        <a href="service-details.html">
                        </a>
                        <div class="content">
                            <div class="icon">
                                <i class="flaticon-makeup-1"></i>
                            </div>
                                <h3>{!! nl2br(e($wish->name)) !!}</h3>

                                <p>
                                    @foreach($wish->approaches as $approach)
                                        <a href="{{ route('approaches.detail', $approach->id) }}">{{ $approach->name }}</a>
                                    @endforeach
                                </p>

                                <div class="content-right">
                                    <img src="{{ url('assets/images/services/services-vector-2.png') }}" alt="Service">
                                </div>
                        </div>
                    </div>
                </div>
                @endforeach



            </div>
        </div>

    </div>
    <!-- Services Area End -->
@endsection
