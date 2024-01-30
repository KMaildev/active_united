@extends('layouts.main')
@section('title', 'Jobs')
@section('content')

    <img src="{{ asset('data/japanese/1.jpg') }}" alt="" style="width: 100%; padding-top: 150px;">



    <div class="blog-column-three-area ptb-100">
        <div class="container">

            <div class="section-title">
                <span>
                    Gallery
                </span>
                <h2 style="font-size: 30px;">
                    Ginkgo Japanese Language Center's Photos
                </h2>
            </div>

            <div class="row d-flex justify-content-center"> 
                @foreach ($language_center_galleries as $activity)
                    @php
                        $images = explode(',', $activity->gallery);
                    @endphp
                    <div class="col-md-12">
                        <div class="section-title">
                            <p>
                                {!! $activity->title !!}
                            </p>
                        </div>
                    </div>
                    @foreach ($images as $image)
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <div class="single-blog-post"
                                style="box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 1px, rgba(0, 0, 0, 0.07) 0px 2px 2px, rgba(0, 0, 0, 0.07) 0px 4px 4px, rgba(0, 0, 0, 0.07) 0px 8px 8px, rgba(0, 0, 0, 0.07) 0px 16px 16px;">
                                <img src="{{ $image }}" alt="image_not_found"
                                    style="width: 100%; height: 260px; background-size: center; object-fit: cover; border: 3px solid #3A9F4A; padding: 7px; border-radius: 50px 15px;">
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>
    </div>

@endsection
