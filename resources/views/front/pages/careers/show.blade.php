@extends('front.layout.app')

@section('content')
<!-- Start Hero -->
<div class="cs-page_heading cs-style1 cs-center text-center cs-bg" data-src="assets/img/service_hero_bg.jpeg">
    <div class="container">
        <div class="cs-page_heading_in">
            <h1 class="cs-page_title cs-font_50 cs-white_color">Job</h1>
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item active">job Detail</li>
            </ol>
        </div>
    </div>
</div>
<!-- End Hero -->
<!-- End Why Choose -->
<div class="container">
    <div class="cs-portfolio_details">
        <div class="row">
            <div class="col-lg-12">
                <div class="cs-section_heading cs-style1">
                    <h3 class="cs-section_subtitle">Job Title: </h3>
                    <h2 class="cs-section_title">{{$careers->title}}</h2>
                    <div class="cs-height_40 cs-height_lg_20"></div>
                    <h3 class="cs-section_subtitle">Job Description: </h3>
                    <p>{{$careers->description}}</p>

                </div>
            </div>

            <div class="cs-height_60 cs-height_lg_40"></div>

            <div class="col-lg-12 mt-5">
                <h2 class="cs-section_title">Job Requirments</h2>

                <div class="row cs-list cs-style1 cs-mp0">
                    @foreach($careers->required_skills as $item)
                    <div class="col-4">
                        <a href="JavaScript:void(0)"  class="my-3 cs-text_btn cs-type2 float-start">
                            <svg width="26" height="16" viewBox="0 0 26 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M25.7071 8.70711C26.0976 8.31658 26.0976 7.68342 25.7071 7.29289L19.3431 0.928932C18.9526 0.538408 18.3195 0.538408 17.9289 0.928932C17.5384 1.31946 17.5384 1.95262 17.9289 2.34315L23.5858 8L17.9289 13.6569C17.5384 14.0474 17.5384 14.6805 17.9289 15.0711C18.3195 15.4616 18.9526 15.4616 19.3431 15.0711L25.7071 8.70711ZM0 9H25V7H0V9Z" fill="#FF4A17"></path>
                            </svg>
                            <span>{{ $item }}</option></span>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="cs-height_60 cs-height_lg_40"></div>

            <div class="col-7">
                <div class="cs-height_10 cs-height_lg_10"></div>
                <h3 class="cs-section_subtitle">Ideal Candidate: </h3>
                <p>{{$careers->ideal_candidate}}</p>
                <h3 class="cs-section_subtitle">Other Requirments: </h3>
                <p>{{$careers->other_requirments}}</p>
                <h3 class="cs-section_subtitle">What We Offer: </h3>
                <p>{{$careers->what_are_we_offering}}</p>

                <div class="cs-pricing_btn_wrap">
                    <a href="{{route('job-application.create')}}" class=" cs-text_btn">
                        <span>Apply Now</span>
                        <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z" fill="currentColor" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="cs-height_60 cs-height_lg_40"></div>
                <h2 class="cs-font_30 cs-font_26_sm cs-m0">Job Info -</h2>
                <div class="cs-height_50 cs-height_lg_30"></div>
                <div class="row">
                    <div class="col-6">
                        <h3 class="cs-accent_color cs-font_22 cs-font_18_sm cs-m0">City:</h3>
                        <p class="cs-m0">{{$careers->city}}</p>
                        <div class="cs-height_30 cs-height_lg_30"></div>
                    </div>
                    <div class="col-6">
                        <h3 class="cs-accent_color cs-font_22 cs-font_18_sm cs-m0">Location:</h3>
                        <p class="cs-m0">{{$careers->address}}</p>
                        <div class="cs-height_30 cs-height_lg_30"></div>
                    </div>
                    <div class="col-6">
                        <h3 class="cs-accent_color cs-font_22 cs-font_18_sm cs-m0">Experience:</h3>
                        <p class="cs-m0">{{$careers->experience}}</p>
                        <div class="cs-height_30 cs-height_lg_30"></div>
                    </div>

                    <div class="col-6">
                        <h3 class="cs-accent_color cs-font_22 cs-font_18_sm cs-m0">Salary Offered:</h3>
                        <p class="cs-m0">Rs: {{$careers->salary}}</p>
                        <div class="cs-height_30 cs-height_lg_30"></div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>

<div class="cs-height_60 cs-height_lg_40"></div>
<div class="cs-height_60 cs-height_lg_40"></div>



<div class="cs-height_145 cs-height_lg_80"></div>
<!-- Start CTA -->
<section>
    <div class="cs-cta cs-style1 cs-bg text-center cs-shape_wrap_1 cs-position_1 rounded-0" data-src="assets/img/cta_bg_2.jpeg">
        <div class="cs-shape_1"></div>
        <div class="cs-shape_1"></div>
        <div class="cs-shape_1"></div>
        <div class="cs-cta_in">
            <h2 class="cs-cta_title cs-semi_bold cs-m0">{{$contact->email}}</h2>
        </div>
    </div>
</section>
<!-- End CTA -->
@endsection
