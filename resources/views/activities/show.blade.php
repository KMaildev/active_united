@extends('layouts.main')
@section('title', 'Activities')
@section('content')

    <section class="service_section sec_ptb_130 clearfix">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12">
                    <div class="section_title text-center mb_30 wow fadeInUp2" data-wow-delay=".1s">
                        <h4 class="small_title">Gallery</h4>
                        <h2 class="big_title mb-0">
                            Our Gallery & Activities
                        </h2>
                        <span class="biggest_title">
                            Activities
                        </span>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($activities as $activity)
                    @php
                        $images = explode(',', $activity->images);
                    @endphp
                    @foreach ($images as $image)
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".3s">
                            <div class="service_grid">
                                <div class="item_image">
                                    <img src="{{ $image }}" alt="image_not_found"
                                        style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                                </div>
                                <div class="item_content bg_gray">
                                    <h3 class="item_title">
                                        {{ $activity->title ?? '' }}
                                    </h3>
                                    <p>
                                        {!! $activity->description ?? '' !!}
                                    </p>
                                    <span class="bg_icon">
                                        <img src="{{ asset('data/company/mark.png') }}" alt="icon_not_found">
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>

@endsection
