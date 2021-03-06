@extends('layouts.layouts')

@section('content')

    <!-- Inner Banner -->
    <div class="inner-banner">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-7">
                    <div class="inner-title">
                        <h3>Salon</h3>
                        <ul>
                            <li>
                                <a href="{{ route('parts.index') }}">Home</a>
                            </li>
                            <li>サロン一覧</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5 col-md-5">
                    <div class="inner-img">
                        <img src="{{ url('assets/images/inner-banner/inner-banner3.png') }}" alt="Inner Banner"/>
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
                {{ $salons->links('components.pagination') }}
                @foreach($salons as $salon)
                    <div class="col-lg-4 col-md-6">
                        <div class="testimonial-item testimonial-item-color">
                            <img src="{{ url('assets/images/testimonial/testimonial-img-1.jpg') }}" alt="Testimonial"/>
                            <h3>{{ $salon->name }}</h3>
                            <p>{{ $salon->address }}</p>

                            {{-- 星評価--}}
                            <div class="rating">
                                <span class="star-rating"></span>
                                @for($i = 1; $i <= $salon->assessment; $i++)
                                    <i class="ri-star-fill"></i>
                                @endfor
                                @for($i = 1; $i <= (5 - $salon->assessment);$i++)
                                    <i class="ri-star-line"></i>
                                @endfor
                            </div>
                        </div>
                    </div>
                @endforeach
                {{ $salons->links('components.pagination') }}
            </div>
        </div>
    </div>

@endsection
