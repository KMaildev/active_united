@extends('layouts.main')
@section('content')
    <section class="team_section sec_ptb_130 pb-0 clearfix">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section_title text-center mb_30 wow fadeInUp2" data-wow-delay=".1s">
                        <h4 class="small_title">Team Member</h4>
                        <h2 class="big_title mb-0">
                            ACTIVE UNITED CO.,LTD.
                        </h2>
                        <span class="biggest_title">
                            Team Member
                        </span>

                        <div class="d-text" style="font-size: 18px; color: black; text-align: justify">
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
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt__30">
                @foreach ($teams as $team)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 wow fadeInUp2" data-wow-delay=".1s">
                        <div class="team_grid">
                            <div class="item_image">
                                <img src="{{ $team->photo }}" alt="#"
                                    style="width: 100%; height: 280px; background-size: top; object-fit: cover;">
                            </div>
                            <div class="item_content">
                                <h3 class="member_name">
                                    {{ $team->name ?? '' }}
                                </h3>
                                <span class="member_title">
                                    {{ $team->position ?? '' }}
                                </span>
                                <ul class="square_social_links ul_li clearfix">
                                    <li>
                                        <a class="bg_default_lightblue" href="#!">
                                            <i class="fab fa-facebook-f"></i>
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="bg_default_orange" href="#!">
                                            <i class="fab fa-twitter"></i>
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="bg_default_yellow" href="#!">
                                            <i class="fab fa-youtube"></i>
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="bg_default_purple" href="#!">
                                            <i class="fab fa-linkedin"></i>
                                            <i class="fab fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <br>
@endsection
