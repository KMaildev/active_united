@extends('layouts.main')
@include('layouts.slider')
@section('content')
    <section class="who-we-are-area pt-100 pb-70">
        <div class="container">
            <div class="row d-flex justify-content-evenly">
                <div class="col-lg-6">
                    <div class="who-we-are-img">
                        <img src="{{ asset('data/photo/3.jpg') }}" alt="Image">
                    </div>

                    <br>
                    <a href="{{ route('about.index') }}" class="default-btn" style="text-align: right">
                        Read More
                        <span class="flaticon-next"></span>
                    </a>

                    <a href="{{ route('ceo_message') }}" class="default-btn" style="text-align: right">
                        MD's Message
                        <span class="flaticon-next"></span>
                    </a>

                    <a href="{{ route('contact.index') }}" class="default-btn" style="text-align: right">
                        Contact Us
                        <span class="flaticon-next"></span>
                    </a>
                </div>

                <div class="col-lg-6">
                    <div class="who-we-are-content">
                        <span class="top-title">
                            About Our Company
                        </span>
                        <h2>ACTIVE <span>UNITED</span> CO.,LTD.</h2>

                        <p style="text-align: justify; font-size: 18px;">
                            ACTIVE UNITED CO.,LTD. (OVERSEAS MYANMAR MANPOWER EMPLOYMENT AGENCY) has been successfully
                            recruiting for
                            and supplying companies, factories and businesses, especially for Thailand, Japan, Malaysia,
                            Singapore and Middle East Countries. We retain a term of skilled recruitment professionals who
                            uphold our reputation by providing effective and efficient recruitment services for our
                            customer’s satisfaction.
                        </p>

                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="single-who-we-are">
                                    <i class="flaticon-quality"></i>
                                    <h3>Quality Assurance </h3>
                                    <p style="text-align: justify">
                                        Our relentless commitment to quality ensures that job seekers find positions that
                                        align with their skills and aspirations, while employers discover talent that
                                        propels their businesses forward.
                                    </p>
                                </div>
                            </div>

                            <div class="col-lg-6 col-sm-6">
                                <div class="single-who-we-are">
                                    <i class="flaticon-responsibility"></i>
                                    <h3>
                                        Comprehensive Services
                                    </h3>
                                    <p style="text-align: justify">
                                        From visa procurement to pre-departure orientation and continuous support, we offer
                                        a complete suite of services to ensure a smooth and successful overseas employment
                                        experience.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="feathers-area pt-100 pb-70" style="background-image: url('{{ asset('data/CEO-MESSAGE.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-feathers">
                        <i class="flaticon-planning"></i>
                        <h3>
                            Our Vission
                        </h3>
                        <p style="text-align: justify">
                            Our mission is to provide exceptional overseas employment services by offering a
                            comprehensive range of solutions to both job seekers and employers. We strive to
                            match the right candidates with the right opportunities, fostering mutual success
                            and long-term partnerships. Through our dedication to ethical practices and
                            personalized support, we aim to make a positive impact on the lives of individuals
                            and the organizations we serve.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6">
                    <div class="single-feathers">
                        <i class="flaticon-stopwatch"></i>
                        <h3>Our Mission</h3>
                        <p style="text-align: justify;">
                            Our vision is to be a leading overseas employment company, connecting talented
                            individuals with rewarding job opportunities worldwide. We aim to empower job
                            seekers and contribute to the growth and development of businesses in need of
                            skilled and dedicated professionals.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                    <div class="single-feathers">
                        <i class="flaticon-cost"></i>
                        <h3>Our Value</h3>
                        <ul>
                            <li style="text-align: justify; color: white;">
                                Excellence - We strive for excellence in every aspect of our services,
                                aiming to
                                exceed expectations.
                            </li>
                            <br>
                            <li style="text-align: justify; color: white;">
                                Respect - We value and respect the diverse backgrounds and perspectives of
                                all
                                individuals we work with.
                            </li>
                            <br>
                            <li style="text-align: justify; color: white;">
                                Collaboration - We foster strong partnerships, working together to achieve
                                mutual success.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection
