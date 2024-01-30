@extends('layouts.main')
@section('title', 'Jobs')
@section('content')

    <section class="feathers-area pt-100 pb-70"
        style="padding-top: 250px; background-image: url('{{ asset('data/career_banner_1.jpg') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="single-feathers">
                        <h3>
                            We have international career
                        </h3>
                        <p>
                            ACTIVE UNITED CO.,LTD. is a leading international employment agency specializing in
                            connecting employers
                            from all over the world with the best and most qualified candidates. With a wide network of
                            recruitment professionals, our team is dedicated to matching employers with the ideal candidates
                            to
                            help your business succeed.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="services-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>
                    Jobs
                </span>
                <h2>
                    Available Job in {{ $c->country ?? '' }}
                </h2>
            </div>

            <div class="row">
                @foreach ($jobs as $key => $job)
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-services" style="box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px;">
                            <img src="{{ $job->photo }}" alt="image_not_found"
                                style="width: 100%; height: 200px; background-size: top; object-fit: cover;">
                            <h3 style="padding-top: 10px;">
                                {{ $job->title ?? '' }}
                            </h3>
                            <p>
                                Available Job in {{ $job->country->country ?? '' }}
                            </p>

                            <a href="{{ route('cv.index') }}" class="read-more">
                                Submit CV
                                <span class="flaticon-next"></span>
                            </a>

                            <span class="count">
                                {{ $key + 1 }}
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
