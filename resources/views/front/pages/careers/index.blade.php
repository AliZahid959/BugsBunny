@extends('front.layout.app')
@section('content')
<!-- Start Hero -->
<div class="cs-page_heading cs-style1 cs-center text-center cs-bg" data-src="assets/img/service_hero_bg.jpeg">
    <div class="container">
        <div class="cs-page_heading_in">
            <h1 class="cs-page_title cs-font_50 cs-white_color">Careers</h1>
            <ol class="breadcrumb text-uppercase">
                <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                <li class="breadcrumb-item active">Careers</li>
            </ol>
        </div>
    </div>
</div>
<!-- End Hero -->
<div class="cs-height_150 cs-height_lg_80"></div>

<div class="container">
    <div class="cs-tabs_heading">
        <div class="cs-section_heading cs-style1">
            <h3 class="cs-section_subtitle">Discover a career that ignites your passion and fulfills your aspirations by joining our team. Let us help you turn your dream job into a reality</h3>
            <h2 class="cs-section_title">bugsbunnytech Careers</h2>
        </div>
    </div>
</div>
<div class="cs-height_150 cs-height_lg_80"></div>

<div class="container">
    <!-- .cs-tab -->
    <div class="cs-tab active" id="tab_2">
        <div class="row">

            @foreach ($careers as $item )
            <div class="col-lg-12">
                <div class="cs-pricing_table cs-style1">
                    <h2 class="cs-pricing_title">{{$item->title}}</h2>
                    <div class="cs-pricing_info">
                        <div class="cs-price_text mt-4">{{$item->city}}</div>
                    </div>
                    <div class="cs-height_25 cs-height_lg_25"></div>
                    <div class="cs-height_25 cs-height_lg_25"></div>

                    <div class="cs-pricing_btn_wrap">
                        <a href="{{route('front.page.career.show' , $item)}}" class=" cs-text_btn">
                            <span>See Details</span>
                            <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z" fill="currentColor" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="cs-height_25 cs-height_lg_25"></div>
            </div>
            @endforeach


        </div>
    </div>
    <!-- .cs-tab -->
</div>

</div>

@endsection
