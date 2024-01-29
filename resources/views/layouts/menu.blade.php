<header class="header-area">
    <div class="top-header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 col-sm-8 pl-0">
                    <ul class="header-left-content">
                        <li>
                            <i class="flaticon-phone-ringing"></i>
                            <a href="tel:+1(514)312-5678">
                                09
                            </a>
                        </li>
                        <li>
                            <i class="flaticon-email"></i>
                            <a href="">

                            </a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-6 col-sm-4 pr-0">
                    <ul class="header-right-content">
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

    <!-- Start Nav Area -->
    <div class="navbar-area">
        <div class="mobile-nav">
            <div class="container-fluid">
                <a href="{{ route('home') }}" class="logo">
                    <img src="{{ asset('data/company/logo.jpg') }}" alt="Logo">
                </a>
            </div>
        </div>

        <div class="main-nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <img src="{{ asset('data/company/logo.jpg') }}" alt="Logo" style="width: 100px;">
                    </a>

                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav m-auto">

                            <li class="nav-item">
                                <a href="{{ route('home') }}">
                                    Home
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="javascript::void(0)" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    About Us
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('about.index') }}" class="nav-link">
                                            Our Company
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('ceo_message') }}" class="nav-link">
                                            President's Message
                                        </a>
                                    </li>

                                    <li>
                                        <a href="{{ route('team') }}" class="nav-link">
                                            Professional Team
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="{{ asset('data/company/Silver City 2023.pdf') }}">
                                    Company Profile
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Manpower Services
                                </a>
                                <ul class="dropdown-menu">
                                    @foreach ($countries as $country)
                                        <li>
                                            <a href="{{ route('job.show', $country->id) }}" class="nav-link">
                                                {{ $country->country ?? '' }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Gallery
                                </a>
                                <ul class="dropdown-menu">
                                    @foreach ($categories as $category)
                                        <li>
                                            <a href="{{ route('activities.show', $category->id) }}" class="nav-link">
                                                {{ $category->title ?? '' }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('cv.index') }}">
                                    Job Apply
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('employer.index') }}">
                                    Employers Form
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('contact.index') }}">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Nav Area -->
</header>
