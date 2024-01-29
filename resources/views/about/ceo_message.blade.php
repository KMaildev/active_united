@extends('layouts.main')
@section('content')
    <section class="cta_section sec_ptb_130 bg_default_blue deco_wrap clearfix">
        <div class="container">
            <div
                class="row align-items-center justify-content-lg-between justify-content-md-center justify-content-sm-center">

                <div class="col-lg-5 col-md-7 col-sm-9 col-xs-12">
                    <div class="cta_image_2 wow fadeIn" data-wow-delay=".1s">
                        <img src="{{ asset('data/mdmessage.jpeg') }}" alt="image_not_found">
                    </div>
                </div>

                <div class="col-lg-6 col-md-7 col-sm-9 col-xs-12">
                    <div class="cta_content ml__30 text-white">
                        <div class="section_title mb_30 wow fadeInUp2" data-wow-delay=".2s">
                            <h4 class="small_title">
                                President's Message
                            </h4>
                            <h2 class="big_title mb-0 text-white">
                                President,
                                <br>
                                ACTIVE UNITED CO.,LTD.
                            </h2>
                            <span class="biggest_title">Quote</span>
                        </div>
                        <p class="mb_30 border_left_yellow text-white wow fadeInUp2" data-wow-delay=".3s"
                            style="font-size: 18px; color: black; text-align: justify">
                            As the President of our esteemed overseas employment agency, I want to extend a
                            heartfelt welcome to all aspiring professionals seeking exceptional
                            opportunities abroad and to our valued clients entrusting us with their talent
                            acquisition needs.
                            <br><br>
                            Our mission is clear: to connect global talent with remarkable employment
                            prospects while fostering cultural exchange. We are committed to providing
                            comprehensive and reliable overseas employment services, guiding you every step
                            of the way to ensure your success.
                            <br><br>
                            With integrity, excellence, diversity, and responsiveness as our guiding
                            principles, we strive to deliver superior services and create a positive impact
                            on individuals and societies worldwide.
                            <br><br>
                            Thank you for trusting us with your aspirations and requirements. Together,
                            let's achieve new heights in your career or find the exceptional talent your
                            organization deserves.
                        </p>
                        <a class="custom_btn bg_default_orange wow fadeInUp2" data-wow-delay=".5s" target="_blank"
                            href="{{ route('contact.index') }}">
                            meet with us
                            <span>
                                <i class="fal fa-arrow-right"></i>
                            </span>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <div class="deco_image deco_image_1 wow fadeInUp2" data-wow-delay=".1s">
            <img src="{{ asset('assets/images/cta/shape_01.png') }}" alt="shape_not_found">
        </div>
    </section>
@endsection
