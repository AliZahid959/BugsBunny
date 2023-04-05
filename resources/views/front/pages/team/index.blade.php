@extends('front.layout.app')

@section('content')
 <!-- Start Hero -->
  <div class="cs-page_heading cs-style1 cs-center text-center cs-bg" data-src="assets/img/team_hero_bg.jpeg">
    <div class="container">
      <div class="cs-page_heading_in">
        <h1 class="cs-page_title cs-font_50 cs-white_color">Our Team</h1>
        <ol class="breadcrumb text-uppercase">
          <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
          <li class="breadcrumb-item active">Team</li>
        </ol>
      </div>
    </div>
  </div>
  <!-- End Hero -->
  <!-- End Why Choose -->
  <div class="cs-height_145 cs-height_lg_80"></div>
  <!-- Start Team Section -->
  <section>
   <div class="container">
        <div class="cs-slider cs-style2 cs-gap-24">
            <div class="cs-slider_heading cs-style1">
                <div class="cs-section_heading cs-style1">
                    <h3 class="cs-section_subtitle wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s"> Our Team </h3>
                    <h2 class="cs-section_title">Our Team <br />members </h2>
                </div>
                <div class="cs-slider_arrows cs-style1 cs-primary_color">
                    <div class="cs-left_arrow cs-center">
                        <svg width="26" height="13" viewBox="0 0 26 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.469791 5.96967C0.176899 6.26256 0.176899 6.73744 0.469791 7.03033L5.24276 11.8033C5.53566 12.0962 6.01053 12.0962 6.30342 11.8033C6.59632 11.5104 6.59632 11.0355 6.30342 10.7426L2.06078 6.5L6.30342 2.25736C6.59632 1.96447 6.59632 1.48959 6.30342 1.1967C6.01053 0.903806 5.53566 0.903806 5.24276 1.1967L0.469791 5.96967ZM26.0001 5.75L1.00012 5.75V7.25L26.0001 7.25V5.75Z" fill="currentColor" />
                        </svg>
                    </div>
                    <div class="cs-right_arrow cs-center">
                        <svg width="26" height="13" viewBox="0 0 26 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.5305 7.03033C25.8233 6.73744 25.8233 6.26256 25.5305 5.96967L20.7575 1.1967C20.4646 0.903806 19.9897 0.903806 19.6968 1.1967C19.4039 1.48959 19.4039 1.96447 19.6968 2.25736L23.9395 6.5L19.6968 10.7426C19.4039 11.0355 19.4039 11.5104 19.6968 11.8033C19.9897 12.0962 20.4646 12.0962 20.7575 11.8033L25.5305 7.03033ZM0.00012207 7.25H25.0001V5.75H0.00012207V7.25Z" fill="currentColor" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="cs-height_85 cs-height_lg_45"></div>
            <div class="cs-slider_container" data-autoplay="0" data-loop="1" data-speed="600" data-center="0" data-slides-per-view="responsive" data-xs-slides="1" data-sm-slides="2" data-md-slides="3" data-lg-slides="4" data-add-slides="4">
                <div class="cs-slider_wrapper">
                      @foreach ($team as $item )
                         <div class="cs-slide">
                        <div class="cs-team cs-style1">
                            <div class="cs-member_thumb">
                                <img src="{{$item->team_image}}" style="height:300px !important;" alt="Member" />
                                <div class="cs-member_overlay"></div>
                            </div>
                            <div class="cs-member_info">
                                <h2 class="cs-member_name">
                                    <a href="">{{$item->team_name}}</a>
                                </h2>
                                <div class="cs-member_designation">{{$item->designation}}</div>
                            </div>
                            <div class="cs-member_social cs-primary_color">
                                <a href="{{$item->social_link}}">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.39756 18.333H1.9422V7.20581H5.39756V18.333ZM3.66802 5.68795C2.56311 5.68795 1.6669 4.77277 1.6669 3.66786C1.6669 3.13714 1.87773 2.62814 2.25301 2.25286C2.6283 1.87758 3.13729 1.66675 3.66802 1.66675C4.19875 1.66675 4.70774 1.87758 5.08302 2.25286C5.4583 2.62814 5.66913 3.13714 5.66913 3.66786C5.66913 4.77277 4.77256 5.68795 3.66802 5.68795ZM18.3298 18.333H14.8819V12.9164C14.8819 11.6255 14.8559 9.96995 13.0854 9.96995C11.2889 9.96995 11.0136 11.3725 11.0136 12.8234V18.333H7.56199V7.20581H10.876V8.72367H10.9243C11.3857 7.84941 12.5125 6.92679 14.1937 6.92679C17.6907 6.92679 18.3336 9.22962 18.3336 12.2207V18.333H18.3298Z" fill="currentColor" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <!-- .cs-slider_container -->
            <div class="cs-pagination cs-style1 cs-hidden_desktop"></div>
        </div>
        <!-- .cs-slider -->
    </div>
  </section>
  <!-- End Team Section -->
@endsection