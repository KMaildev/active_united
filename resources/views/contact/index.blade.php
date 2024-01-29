@extends('layouts.main')
@section('title', 'Contact Us')
@section('content')
    <section class="main-contact-area" style="padding-top: 100px; margin: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-wrap ptb-100">
                        <div class="contact-form">
                            <div class="contact-title">
                                <h2>Write us</h2>
                            </div>

                            <form class="cons-contact-form" method="post" action="{{ route('contact.store') }}"
                                autocomplete="off" id="create-form">
                                @csrf
                                <div class="row">

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <div class="form_item wow fadeInUp2" data-wow-delay=".1s">
                                                <label>Name</label>
                                                <div class="position-relative">
                                                    <input type="text" name="name" id="name" class="form-control"
                                                        placeholder="Enter your name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <div class="form_item wow fadeInUp2" data-wow-delay=".2s">
                                                <label for="Email Address">Email Address</label>
                                                <div class="position-relative">
                                                    <input class="form-control" type="email" name="email"
                                                        placeholder="Write Your Email">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <div class="form_item wow fadeInUp2" data-wow-delay=".2s">
                                                <label for="Subject">Subject</label>
                                                <div class="position-relative">
                                                    <input class="form-control" type="text" name="subject"
                                                        placeholder="Write Your Subject">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <div class="form_item wow fadeInUp2" data-wow-delay=".3s">
                                                <label for="Phone Number">Phone Number</label>
                                                <div class="position-relative">
                                                    <input class="form-control" type="tel" name="phone"
                                                        placeholder="Write Your Phone Number">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-sm-12">
                                        <div class="form-group">
                                            <div class="form_item wow fadeInUp2" data-wow-delay=".4s">
                                                <label for="Leave A Message">Leave A Message</label>
                                                <textarea name="message" placeholder="Write Your Message" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn btn-two">
                                            Send Message
                                        </button>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="contact-info ptb-100" style="background-image: url({{ asset('data/photo/2.jpg') }})">
                        <h3>Our contact details</h3>
                        <p>
                            Every Single Update To Contact Us
                        </p>

                        <ul class="address">
                            <li class="location">
                                <i class="bx bxs-location-plus"></i>
                                <span>Address</span>
                                No. (252), Second Floor, Bagayar Road, Myaynigone (South) Quarter, Sanchaung Township,
                                Yangon.
                            </li>
                            <li>
                                <i class="bx bxs-phone-call"></i>
                                <span>Phone</span>
                                <a href="tel:09 5003802">
                                    09 5003802,
                                </a>
                                <a href="tel:09 785003802">
                                    09 785003802
                                </a>
                            </li>
                            <li>
                                <i class="bx bxs-envelope"></i>
                                <span>Email</span>
                                <a href="mailto:ksthaik@gmail.com ">
                                    ksthaik@gmail.com
                                </a>
                            </li>
                        </ul>

                        <div class="sidebar-follow-us">
                            <h3>Follow us:</h3>

                            <ul class="social-wrap">
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="bx bxl-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreContact', '#create-form') !!}
@endsection
