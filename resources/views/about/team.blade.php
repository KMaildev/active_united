@extends('layouts.main')
@section('content')
    <section class="feathers-area pt-100 pb-70"
        style="padding-top: 250px; background-image: url('{{ asset('data/our-team-banner-2.png') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="single-feathers">
                        <h3>
                            Team Member
                        </h3>
                        <p>
                            Our overseas employment agency consists of a skilled team dedicated to connecting talented
                            individuals with international job opportunities. We have a deep understanding of global
                            markets,
                            immigration laws, and visa processes. Our extensive network of contacts allows us to offer a
                            wide
                            range of employment opportunities in various sectors. We prioritize transparency, ethical
                            practices,
                            and open communication, providing personalized guidance and support to job seekers. Our
                            commitment
                            to excellence ensures successful placements and long-term relationships with clients.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="team-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span>PROFESSIONALS</span>
                <h2>Meet our skilled team</h2>
            </div>

            <div class="row">
                @foreach ($teams as $team)
                    <div class="col-lg-4 col-md-4">
                        <div class="single-team-member">
                            <img src="{{ $team->photo }}" alt="#"
                                style="width: 100%; height: 300px; background-size: top; object-fit: cover;">

                            <div class="team-content">
                                <span>
                                    {{ $team->position ?? '' }}
                                </span>
                                <h3>
                                    {{ $team->name ?? '' }}
                                </h3>

                                <div class="team-social">
                                    <a href="#" class="control">
                                        <i class="bx bx-share-alt"></i>
                                    </a>

                                    <ul>
                                        <li>
                                            <a href="#">
                                                <i class="bx bxl-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="bx bxl-instagram"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="bx bxl-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="bx bxl-linkedin-square"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
