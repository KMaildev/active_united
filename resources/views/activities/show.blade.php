@extends('layouts.main')
@section('title', 'Activities')
@section('content')

    <section class="feathers-area pt-100 pb-70"
        style="padding-top: 250px; background-image: url('{{ asset('data/gallery-banner.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="single-feathers">
                        <h3>
                            Checkout our photo gallery
                        </h3>
                        <p>
                            Our gallery showcases a vibrant collection of photographs and testimonials from individuals who
                            have successfully found employment through our agency. These visuals depict diverse work
                            environments, cultural experiences, and personal growth opportunities that await those who
                            embark on their overseas employment journey with us. From bustling cityscapes to breathtaking
                            natural landscapes, our gallery captures the essence of working abroad and inspires our clients
                            to explore new horizons.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="blog-column-three-area ptb-100">
        <div class="container">

            <div class="section-title">
                <span>
                    Our Gallery & Activities
                </span>
                <h2>
                    Activities
                </h2>
            </div>

            <div class="row">
                @foreach ($activities as $activity)
                    @php
                        $images = explode(',', $activity->images);
                    @endphp
                    @foreach ($images as $image)
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="single-blog-post" style="box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 1px, rgba(0, 0, 0, 0.07) 0px 2px 2px, rgba(0, 0, 0, 0.07) 0px 4px 4px, rgba(0, 0, 0, 0.07) 0px 8px 8px, rgba(0, 0, 0, 0.07) 0px 16px 16px;">
                                <img src="{{ $image }}" alt="image_not_found"
                                    style="width: 100%; height: 260px; background-size: center; object-fit: cover;">

                                <div class="news-content">
                                    <a href="#">
                                        <h3>
                                            {{ $activity->title ?? '' }}
                                        </h3>
                                    </a>

                                    <p>
                                        {!! $activity->description ?? '' !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>

@endsection
