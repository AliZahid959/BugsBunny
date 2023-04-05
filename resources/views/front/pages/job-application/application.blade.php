@extends('front.layout.app')

@section('content')
<!-- Start Hero -->
<div class="cs-page_heading cs-style1 cs-center text-center cs-bg" data-src="assets/img/service_hero_bg.jpeg">
    <div class="container">
        <div class="cs-page_heading_in">
            <h1 class="cs-page_title cs-font_50 cs-white_color">Application</h1>
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item active">job Application</li>
            </ol>
        </div>
    </div>
</div>
<!-- End Hero -->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <form action="{{route('job-application.store' , $job_application)}}" method="POST"  enctype="multipart/form-data" class="row">
                @csrf
                <div class="col-sm-12">
                    <label class="cs-primary_color">Full Name*</label>
                    <input type="text" class="cs-form_field" name="name" required>
                    <div class="cs-height_20 cs-height_lg_20"></div>
                </div>
                <div class="col-sm-6">
                    <label class="cs-primary_color">Email*</label>
                    <input type="text" class="cs-form_field" name="email" required>
                    <div class="cs-height_20 cs-height_lg_20"></div>
                </div>
                <div class="col-sm-6">
                    <label class="cs-primary_color">Mobile*</label>
                    <input type="text" class="cs-form_field" name="phone_no" required>
                    <div class="cs-height_20 cs-height_lg_20"></div>
                </div>
                <div class="col-lg-12">
                    <label class="cs-primary_color">Uploda CV*</label>
                    <input type="file" name="cv" class="cs-form_field">
                    <div class="cs-height_25 cs-height_lg_25"></div>
                </div>
                <div class="col-lg-12">
                    <button class="cs-btn cs-style1" type="submit">
                        <span>Apply Now</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
