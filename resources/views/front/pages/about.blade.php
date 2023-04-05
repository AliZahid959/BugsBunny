@extends('front.layout.app')

@section('content')

<!-- Start Hero -->
<div class="cs-page_heading cs-style1 cs-center text-center cs-bg" data-src="assets/img/about_hero_bg.jpeg">
    <div class="container">
        <div class="cs-page_heading_in">
            <h1 class="cs-page_title cs-font_50 cs-white_color">About Us</h1>
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item">
                    <a href="{{route('index')}}">Home</a>
                </li>
                <li class="breadcrumb-item active">About Us</li>
            </ol>
        </div>
    </div>
</div>
<!-- End Hero -->
{{-- <section>
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-7">
                <div class="cs-section_heading cs-style1">
                    <h3 class="cs-section_subtitle">{{$about->our_agency_heading}}</h3>
                    <div class="cs-height_30 cs-height_lg_20"></div>
                    <p class="cs-m0">{{$about->about_our_agency_description}}</p>
                    <div class="cs-height_30 cs-height_lg_30"></div>
                    <div class="cs-separator cs-accent_bg"></div>
                    <div class="cs-height_25 cs-height_lg_40"></div>
                </div>
            </div>
            <div class="col-lg-5 offset-xl-2">
                <img src="{{$about->our_agency_image}}" alt="" class="w-100 cs-radius_15">
                <div class="cs-height_25 cs-height_lg_25"></div>
            </div>

        </div>
    </div>
</section> --}}

<div class="cs-height_150 cs-height_lg_80"></div>
<!-- Start Why Choose -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6">
                <div class="cs-image_layer cs-style1">
                    <div class="cs-image_layer_in">
                        <img src="{{$about->why_choose_us_image}}" alt="Image" class="w-100 cs-radius_15">
                    </div>
                </div>
                <div class="cs-height_0 cs-height_lg_40"></div>
            </div>
            <div class="col-xl-5 offset-xl-1 col-lg-6">
                <div class="cs-section_heading cs-style1">
                    <h3 class="cs-section_subtitle">{{$about->why_choose_us_heading}}</h3>
                    <div class="cs-height_30 cs-height_lg_20"></div>
                    <p class="cs-m0">{{$about->why_choose_us_description}}</p>

                    <div class="cs-height_30 cs-height_lg_30"></div>
                    <div class="cs-separator cs-accent_bg"></div>
                    <div class="cs-height_25 cs-height_lg_0"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Why Choose -->

@endsection
