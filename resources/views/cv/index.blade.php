@extends('layouts.main')
@section('content')
    <section class="feathers-area pt-100 pb-70"
        style="padding-top: 250px; background-image: url('{{ asset('data/3.png') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="single-feathers">
                        <i class="flaticon-planning"></i>
                        <h3>
                            Apply Now
                        </h3>
                        <p>
                            To apply for the desired job, we recommend reading the job requirements
                            carefuly then if you found yourself qualified for it, simply fill in the below form and
                            click APPLY NOW.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="services-area pt-100 pb-70">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8 col-sm-8">
                    <div class="contact-form">
                        <div class="column mcb-column mcb-item-04q251sx2 one column_column">
                            <div class="column_attr clearfix align_center animate fadeInUp" data-anim-type="fadeInUp"
                                style="background-image:url({{ asset('data/home_elearning_sep.png') }});background-repeat:no-repeat;background-position:center bottom;">
                                <center>
                                    <strong>
                                        <h2>Submit <span class="color3">CV</span></h2>
                                        <h3 style="color:#468ECE;">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">
                                                    Apply
                                                </font>
                                            </font>
                                            <span style="color:#fe0000;">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">
                                                        for Your job.
                                                    </font>
                                                </font>
                                            </span>
                                        </h3>
                                    </strong>
                                </center>
                            </div>
                        </div>
                        <br>

                        <style>
                            input[type=text] {
                                width: 100%;
                                padding: 10px 18px;
                                margin: 0px 0;
                                box-sizing: border-box;
                                border: 1px solid black;
                                -webkit-transition: 0.5s;
                                transition: 0.5s;
                                outline: none;
                            }

                            input[type=text]:focus {
                                border: 1px solid black;
                            }
                        </style>


                        <form autocomplete="off" method="POST" action="{{ route('cv.store') }}"
                            enctype="multipart/form-data" id="create-form" autocomplete="off">
                            @csrf

                            <style>
                                input[type=text] {
                                    width: 100%;
                                    padding: 12px 20px;
                                    margin: 8px 0;
                                    box-sizing: border-box;
                                    border: 1px solid black;
                                    -webkit-transition: 0.5s;
                                    transition: 0.5s;
                                    outline: none;
                                }

                                input[type=text]:focus {
                                    border: 1px solid black;
                                }
                            </style>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label class="text-black" style="color: black;">Name*</label>
                                    <input type="text" name="name" class="form-control " value="">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label class="text-black" style="color: black;">Phone</label>
                                    <input type="text" name="phone" class="form-control " value="">
                                </div>
                            </div>

                            <div class="col-lg-12 py-3">
                                <div class="form-group">
                                    <label class="text-black" style="color: black;">Additional Note</label>
                                    <input type="text" name="additional_note" class="form-control " value="">
                                </div>
                            </div>

                            <div class="col-lg-12 py-3">
                                <div class="form-group">
                                    <label for="img" style="color: black;">
                                        Select your CV to upload
                                    </label>
                                    <br>
                                    <input type="file" name="attachment_file" accept=".doc, .docx, .pdf"
                                        class="form-control-file" required>
                                </div>
                            </div>

                            <div>
                                <button type="submit" class="default-btn btn-two">
                                    Apply Now
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
@section('script')
    {!! JsValidator::formRequest('App\Http\Requests\StoreCv', '#create-form') !!}
@endsection
