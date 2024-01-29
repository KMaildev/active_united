@extends('layouts.main')
@section('title', 'Jobs')
@section('content')

    <section class="feature_section bg_gray clearfix py-5">
        <div class="maxw_1780 container">
            <div class="row g-0 justify-content-lg-between">

                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 wow fadeInUp2" data-wow-delay=".1s">
                    <div class="feature_listlayout_boxed2 deco_wrap">
                        <div class="item_icon">
                            <img src="{{ asset('assets/images/feature/icon_01.png') }}" alt="image_not_found">
                        </div>
                        <div class="item_content">
                            <span class="item_type">
                                ACTIVE UNITED CO.,LTD.
                            </span>
                            <h3 class="item_title">
                                Quality Assurance
                            </h3>
                            <p style="font-size: 17px; color: black; text-align: justify">
                                Our relentless commitment to quality ensures that job seekers find positions that align with
                                their skills and aspirations, while employers discover talent that propels their businesses
                                forward.
                            </p>
                        </div>

                        <div class="deco_image shape_1">
                            <img src="{{ asset('assets/images/feature/shape_01.png') }}" alt="image_not_found">
                        </div>
                        <div class="deco_image shape_2">
                            <img src="{{ asset('assets/images/feature/shape_02.png') }}" alt="image_not_found">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 wow fadeInUp2" data-wow-delay=".3s">
                    <div class="feature_listlayout_boxed2 deco_wrap">
                        <div class="item_icon">
                            <img src="{{ asset('assets/images/feature/icon_02.png') }}" alt="image_not_found">
                        </div>
                        <div class="item_content">
                            <span class="item_type">
                                ACTIVE UNITED CO.,LTD.
                            </span>
                            <h3 class="item_title">
                                Comprehensive Services
                            </h3>
                            <p style="font-size: 17px; color: black; text-align: justify">
                                From visa procurement to pre-departure orientation and continuous support, we offer a
                                complete suite of services to ensure a smooth and successful overseas employment experience.
                            </p>
                        </div>

                        <div class="deco_image shape_1">
                            <img src="{{ asset('assets/images/feature/shape_01.png') }}" alt="image_not_found">
                        </div>
                        <div class="deco_image shape_2">
                            <img src="{{ asset('assets/images/feature/shape_02.png') }}" alt="image_not_found">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 wow fadeInUp2" data-wow-delay=".5s">
                    <div class="feature_listlayout_boxed2 deco_wrap">
                        <div class="item_icon">
                            <img src="{{ asset('assets/images/feature/icon_03.png') }}" alt="image_not_found">
                        </div>
                        <div class="item_content">
                            <span class="item_type">
                                ACTIVE UNITED CO.,LTD.
                            </span>
                            <h3 class="item_title">
                                Global Network
                            </h3>
                            <p style="font-size: 17px; color: black; text-align: justify">
                                Our vast global network connects you to opportunities you might not find elsewhere. We have
                                strong relationships with employers and job seekers across the world.
                            </p>
                        </div>

                        <div class="deco_image shape_1">
                            <img src="{{ asset('assets/images/feature/shape_01.png') }}" alt="image_not_found">
                        </div>
                        <div class="deco_image shape_2">
                            <img src="{{ asset('assets/images/feature/shape_02.png') }}" alt="image_not_found">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="service_section sec_ptb_130 clearfix">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section_title text-center mb_30 wow fadeInUp2" data-wow-delay=".1s">
                        <h4 class="small_title">Jobs</h4>
                        <h2 class="big_title mb-0">
                            ACTIVE UNITED CO.,LTD.
                        </h2>
                        <span class="biggest_title">
                            Jobs
                        </span>

                        <div class="d-text" style="font-size: 17px; color: black; text-align: justify">
                            ACTIVE UNITED CO.,LTD. is a leading international employment agency specializing in
                            connecting employers
                            from all over the world with the best and most qualified candidates. With a wide network of
                            recruitment professionals, our team is dedicated to matching employers with the ideal candidates
                            to
                            help your business succeed.
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($jobs as $job)
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".3s">
                        <div class="service_grid">
                            <div class="item_image">
                                <img src="{{ $job->photo }}" alt="image_not_found"
                                    style="width: 100%; height: 260px; background-size: center; object-fit: cover;">
                            </div>
                            <div class="item_content bg_gray">
                                <h3 class="item_title">
                                    {{ $job->title ?? '' }}
                                </h3>
                                <p>
                                    Available Job in {{ $job->country->country ?? '' }}
                                </p>
                                <a class="icon_btn" target="_blank" href="{{ route('cv.index') }}">
                                    <i class="fal fa-arrow-right"></i>
                                </a>
                                <span class="bg_icon">
                                    <img src="{{ asset('data/company/mark.png') }}" alt="icon_not_found">
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
