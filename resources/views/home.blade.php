@extends('front.layout.app')

@section('content')
<!-- Start Hero -->
<div class="cs-hero cs-style1 cs-bg cs-fixed_bg cs-shape_wrap_1" id="home" style="background-image:url('{{$setting->banner_image}}');">
    <div class="cs-shape_1"></div>
    <div class="cs-shape_1"></div>
    <div class="cs-shape_1"></div>
    <div class="container">
        <div class="cs-hero_text">
            <h2 class="cs-hero_title wow fadeInRight" data-wow-duration="0.8s" data-wow-delay="0.2s">{{$setting->site_heading}}</h2>
            <div class="cs-hero_info">
                <div>
                    <a href="{{route('front.page.contact')}}" class="cs-text_btn">
                        <span>Get in Touch</span>
                        <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z" fill="currentColor" />
                        </svg>
                    </a>
                </div>
                <div>
                    <div class="cs-hero_subtitle">{{$setting->site_description}}</div>
                </div>
            </div>
        </div>
        
    </div>
    <div class="cs-hero_social_wrap cs-primary_font cs-primary_color">
        <div class="cs-hero_social_title">Follow Us</div>
        <ul class="cs-hero_social_links">
            <li>
                <a href="{{$contact->social_link}}">Linkedin</a>
            </li>
        </ul>
    </div>
    <a href="#service" class="cs-down_btn"></a>
</div>

 <section>
      <div class="container">
        <div class="cs-funfact_wrap cs-type1">
          <div class="cs-funfact_shape" data-src="assets/img/funfact_shape_bg.svg"></div>
          <div class="cs-funfact_left">
            <div class="cs-funfact_heading">
              <h2>Our fun fact</h2>
              <p>BugsBunnyTech is a tech-focused website that offers tech news, product reviews, tutorials, and buying guides in an engaging and fun way. It's a great resource for anyone looking to stay informed and make informed purchasing decisions in the world of technology. </p>
            </div>
          </div>
          <div class="cs-funfact_right">
            <div class="cs-funfacts">
              <div class="cs-funfact cs-style1">
                <div class="cs-funfact_number cs-primary_font cs-semi_bold cs-primary_color">
                  <span data-count-to="{{$services_count}}" class="odometer"></span>
                </div>
                <div class="cs-funfact_text">
                  <span class="cs-accent_color">+</span>
                  <p>Our Services</p>
                </div>
              </div>
              <div class="cs-funfact cs-style1">
                <div class="cs-funfact_number cs-primary_font cs-semi_bold cs-primary_color">
                  <span data-count-to="{{$project_count}}" class="odometer"></span>
                </div>
                <div class="cs-funfact_text">
                  <span class="cs-accent_color">+</span>
                  <p>Project Completed</p>
                </div>
              </div>
              <div class="cs-funfact cs-style1">
                <div class="cs-funfact_number cs-primary_font cs-semi_bold cs-primary_color">
                  <span data-count-to="{{$team_count}}" class="odometer"></span>
                </div>
                <div class="cs-funfact_text">
                  <span class="cs-accent_color">+</span>
                  <p>Our Team Members</p>
                </div>
              </div>
              <div class="cs-funfact cs-style1">
                <div class="cs-funfact_number cs-primary_font cs-semi_bold cs-primary_color">
                  <span data-count-to="{{$application_count}}" class="odometer"></span>
                </div>
                <div class="cs-funfact_text">
                  <span class="cs-accent_color">+</span>
                  <p>Applications</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End FunFact -->

<section id="service">
    <div class="cs-height_150 cs-height_lg_80"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="cs-section_heading cs-style1">
                    <h3 class="cs-section_subtitle">What Can We Do</h3>
                    <h2 class="cs-section_title">Services we can help you with</h2>
                    <div class="cs-height_45 cs-height_lg_20"></div>
                    <a href="{{route('front.page.services')}}" class="cs-text_btn wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">
                        <span>See All Services</span>
                        <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.5303 6.53033C25.8232 6.23744 25.8232 5.76256 25.5303 5.46967L20.7574 0.696699C20.4645 0.403806 19.9896 0.403806 19.6967 0.696699C19.4038 0.989593 19.4038 1.46447 19.6967 1.75736L23.9393 6L19.6967 10.2426C19.4038 10.5355 19.4038 11.0104 19.6967 11.3033C19.9896 11.5962 20.4645 11.5962 20.7574 11.3033L25.5303 6.53033ZM0 6.75H25V5.25H0V6.75Z" fill="currentColor"></path>
                        </svg>
                    </a>
                </div>
                <div class="cs-height_90 cs-height_lg_45"></div>
            </div>
            <div class="col-xl-8">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 my-3">
                        <div class="cs-hobble">
                            <a href="JavaScript:void(0)" class="cs-card cs-style1 cs-hover_layer1">
                                <img src="{{asset('assets/img/service_4.jpeg')}}" style="height:155px !important;" alt="Service" />
                                <div class="cs-card_overlay"></div>
                                <div class="cs-card_info">
                                    <span class="cs-hover_layer3 cs-accent_bg"></span>
                                    <h2 class="cs-card_title">React js</h2>
                                </div>
                            </a>
                        </div>
                        <div class="cs-height_0 cs-height_lg_30"></div>
                    </div>
                    {{-- <div class="col-lg-3 col-sm-6 cs-hidden_mobile"></div> --}}
                    @foreach ($services as $item)
                    <div class="offset-lg-3 col-lg-3 col-sm-6 my-3">
                        <div class="cs-hobble">
                            <a href="JavaScript:void(0)" class="cs-card cs-style1 cs-hover_layer1">
                                <img src="{{$item->service_image}}" style="height:155px !important;" alt="Service" />
                                <div class="cs-card_overlay"></div>
                                <div class="cs-card_info">
                                    <span class="cs-hover_layer3 cs-accent_bg"></span>
                                    <h2 class="cs-card_title">{{$item->service_name}}</h2>
                                </div>
                            </a>
                        </div>
                        <div class="cs-height_0 cs-height_lg_30"></div>
                    </div>





                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="cs-height_150 cs-height_lg_50"></div>
</section>
<!-- End Service Section -->
<!-- Start Latest Project -->
<section>
    <div class="container">
        <div class="cs-section_heading cs-style1 text-center">
            <h3 class="cs-section_subtitle">Our Projects</h3>
            <h2 class="cs-section_title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s"> Portfolio to explore </h2>
        </div>
    </div>
    <div class="cs-height_90 cs-height_lg_45"></div>
    <div class="cs-slider cs-style3 cs-gap-24">
        <div class="cs-slider_container" data-autoplay="0" data-loop="1" data-speed="600" data-center="1" data-slides-per-view="1">
            <div class="cs-slider_wrapper">

                @foreach($work as $item)
                <div class="cs-slide">
                    <a href="JavaScript:void(0)" class="cs-portfolio cs-style1 cs-bg">
                        <div class="cs-portfolio_hover"></div>
                        <div class="cs-portfolio_bg" data-src="{{$item->work_image}}" style="background-size:contain !important;"></div>
                        <div class="cs-portfolio_info">
                            <div class="cs-portfolio_info_bg cs-accent_bg"></div>
                            <h2 class="cs-portfolio_title">{{$item->work_name}}</h2>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
        <!-- .cs-slider_container -->
        <div class="cs-pagination cs-style1"></div>
    </div>
    <!-- .cs-slider -->
</section>
<!-- End Awards Text -->
<!-- Start General Text -->
{{-- <div class="container">
    <h2 class="cs-font_50 cs-m0 text-center cs-line_height_4 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s"> Agility redefined. Achieve your business objectives with ease. Choose bugsbunnytech</h2>
</div> --}}
<!-- End General Text -->
<!-- Start Video Block -->
{{-- <div class="container">
    <a href="https://www.youtube.com/watch?v=VcaAVWtP48A" class="cs-video_block cs-style1 cs-video_open cs-bg" data-src="assets/img/video_bg.jpeg">
        <span class="cs-player_btn cs-accent_color">
            <span></span>
        </span>
    </a>
</div> --}}
<!-- End Video Block -->
<!-- Start Team Section -->

<section>
    <div class="container">
        <div class="cs-slider cs-style2 cs-gap-24">
            <div class="cs-slider_heading cs-style1">
                <div class="cs-section_heading cs-style1">
                    <h3 class="cs-section_subtitle wow fadeInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s"> Our Team </h3>
                    <h2 class="cs-section_title">Awesome team <br />members </h2>
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
                    @foreach($team as $item)
                    <div class="cs-slide">
                        <div class="cs-team cs-style1">
                            <div class="cs-member_thumb">
                                <img src="{{$item->team_image}}" alt="Member" />
                                <div class="cs-member_overlay"></div>
                            </div>
                            <div class="cs-member_info">
                                <h2 class="cs-member_name">
                                    <a href="team-details.html">{{$item->team_name}}</a>
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
                <!-- .cs-slider_container -->
                <div class="cs-pagination cs-style1 cs-hidden_desktop"></div>
            </div>
            <!-- .cs-slider -->
        </div>
</section>
      <div class="cs-height_130 cs-height_lg_80"></div>

<section class="cs-gradient_bg_1 cs-shape_wrap_3 cs-parallax">
      <div class="cs-shape_3 cs-to_up" style="transform: translateY(-13.9344px);">
        <svg width="162" height="181" viewBox="0 0 162 181" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M156.833 178.434C156.833 177.053 157.954 175.932 159.335 175.932C160.716 175.932 161.837 177.053 161.837 178.434C161.837 179.814 160.716 180.935 159.335 180.935C157.954 180.935 156.833 179.814 156.833 178.434Z" fill="#FF4A17"></path>
          <path d="M117.65 178.434C117.65 177.053 118.771 175.932 120.152 175.932C121.533 175.932 122.653 177.053 122.653 178.434C122.653 179.814 121.533 180.935 120.152 180.935C118.771 180.935 117.65 179.814 117.65 178.434Z" fill="#FF4A17"></path>
          <path d="M78.4694 178.434C78.4694 177.053 79.5902 175.932 80.971 175.932C82.3517 175.932 83.4726 177.053 83.4726 178.434C83.4726 179.814 82.3517 180.935 80.971 180.935C79.5876 180.935 78.4694 179.814 78.4694 178.434Z" fill="#FF4A17"></path>
          <path d="M39.286 178.434C39.286 177.053 40.4069 175.932 41.7876 175.932C43.1684 175.932 44.2893 177.053 44.2893 178.434C44.2893 179.814 43.1684 180.935 41.7876 180.935C40.4069 180.935 39.286 179.814 39.286 178.434Z" fill="#FF4A17"></path>
          <path d="M0.102661 178.434C0.102661 177.053 1.22354 175.932 2.60429 175.932C3.98504 175.932 5.10591 177.053 5.10591 178.434C5.10591 179.814 3.98504 180.935 2.60429 180.935C1.22091 180.935 0.102661 179.814 0.102661 178.434Z" fill="#FF4A17"></path>
          <path d="M156.833 143.419C156.833 142.038 157.954 140.917 159.335 140.917C160.716 140.917 161.837 142.038 161.837 143.419C161.837 144.799 160.716 145.92 159.335 145.92C157.954 145.92 156.833 144.799 156.833 143.419Z" fill="#FF4A17"></path>
          <path d="M117.65 143.419C117.65 142.038 118.771 140.917 120.152 140.917C121.533 140.917 122.653 142.038 122.653 143.419C122.653 144.799 121.533 145.92 120.152 145.92C118.771 145.92 117.65 144.799 117.65 143.419Z" fill="#FF4A17"></path>
          <path d="M78.4694 143.419C78.4694 142.038 79.5902 140.917 80.971 140.917C82.3517 140.917 83.4726 142.038 83.4726 143.419C83.4726 144.799 82.3517 145.92 80.971 145.92C79.5876 145.92 78.4694 144.799 78.4694 143.419Z" fill="#FF4A17"></path>
          <path d="M39.286 143.419C39.286 142.038 40.4069 140.917 41.7876 140.917C43.1684 140.917 44.2893 142.038 44.2893 143.419C44.2893 144.799 43.1684 145.92 41.7876 145.92C40.4069 145.92 39.286 144.799 39.286 143.419Z" fill="#FF4A17"></path>
          <path d="M0.102661 143.419C0.102661 142.038 1.22354 140.917 2.60429 140.917C3.98504 140.917 5.10591 142.038 5.10591 143.419C5.10591 144.799 3.98504 145.92 2.60429 145.92C1.22091 145.92 0.102661 144.799 0.102661 143.419Z" fill="#FF4A17"></path>
          <path d="M156.833 108.404C156.833 107.023 157.954 105.902 159.335 105.902C160.716 105.902 161.837 107.023 161.837 108.404C161.837 109.785 160.716 110.906 159.335 110.906C157.954 110.906 156.833 109.787 156.833 108.404Z" fill="#FF4A17"></path>
          <path d="M120.152 110.906C121.533 110.906 122.653 109.786 122.653 108.404C122.653 107.022 121.533 105.902 120.152 105.902C118.77 105.902 117.65 107.022 117.65 108.404C117.65 109.786 118.77 110.906 120.152 110.906Z" fill="#FF4A17"></path>
          <path d="M80.9684 110.906C82.35 110.906 83.47 109.786 83.47 108.404C83.47 107.022 82.35 105.902 80.9684 105.902C79.5868 105.902 78.4668 107.022 78.4668 108.404C78.4668 109.786 79.5868 110.906 80.9684 110.906Z" fill="#FF4A17"></path>
          <path d="M39.286 108.404C39.286 107.023 40.4069 105.902 41.7876 105.902C43.1684 105.902 44.2893 107.023 44.2893 108.404C44.2893 109.785 43.1684 110.906 41.7876 110.906C40.4069 110.906 39.286 109.787 39.286 108.404Z" fill="#FF4A17"></path>
          <path d="M0.102661 108.404C0.102661 107.023 1.22354 105.902 2.60429 105.902C3.98504 105.902 5.10591 107.023 5.10591 108.404C5.10591 109.785 3.98504 110.906 2.60429 110.906C1.22091 110.906 0.102661 109.787 0.102661 108.404Z" fill="#FF4A17"></path>
          <path d="M156.833 73.3918C156.833 72.011 157.954 70.8901 159.335 70.8901C160.716 70.8901 161.837 72.011 161.837 73.3918C161.837 74.7725 160.716 75.8934 159.335 75.8934C157.954 75.8908 156.833 74.7725 156.833 73.3918Z" fill="#FF4A17"></path>
          <path d="M120.152 75.8934C121.533 75.8934 122.653 74.7734 122.653 73.3918C122.653 72.0102 121.533 70.8901 120.152 70.8901C118.77 70.8901 117.65 72.0102 117.65 73.3918C117.65 74.7734 118.77 75.8934 120.152 75.8934Z" fill="#FF4A17"></path>
          <path d="M80.9684 75.8934C82.35 75.8934 83.47 74.7734 83.47 73.3918C83.47 72.0102 82.35 70.8901 80.9684 70.8901C79.5868 70.8901 78.4668 72.0102 78.4668 73.3918C78.4668 74.7734 79.5868 75.8934 80.9684 75.8934Z" fill="#FF4A17"></path>
          <path d="M39.286 73.3918C39.286 72.011 40.4069 70.8901 41.7876 70.8901C43.1684 70.8901 44.2893 72.011 44.2893 73.3918C44.2893 74.7725 43.1684 75.8934 41.7876 75.8934C40.4069 75.8934 39.286 74.7725 39.286 73.3918Z" fill="#FF4A17"></path>
          <path d="M0.102661 73.3918C0.102661 72.011 1.22354 70.8901 2.60429 70.8901C3.98504 70.8901 5.10591 72.011 5.10591 73.3918C5.10591 74.7725 3.98504 75.8934 2.60429 75.8934C1.22091 75.8908 0.102661 74.7725 0.102661 73.3918Z" fill="#FF4A17"></path>
          <path d="M156.833 38.3766C156.833 36.9959 157.954 35.875 159.335 35.875C160.716 35.875 161.837 36.9959 161.837 38.3766C161.837 39.7574 160.716 40.8782 159.335 40.8782C157.954 40.8756 156.833 39.7574 156.833 38.3766Z" fill="#FF4A17"></path>
          <path d="M120.152 40.8782C121.533 40.8782 122.653 39.7582 122.653 38.3766C122.653 36.995 121.533 35.875 120.152 35.875C118.77 35.875 117.65 36.995 117.65 38.3766C117.65 39.7582 118.77 40.8782 120.152 40.8782Z" fill="#FF4A17"></path>
          <path d="M80.9684 40.8782C82.35 40.8782 83.47 39.7582 83.47 38.3766C83.47 36.995 82.35 35.875 80.9684 35.875C79.5868 35.875 78.4668 36.995 78.4668 38.3766C78.4668 39.7582 79.5868 40.8782 80.9684 40.8782Z" fill="#FF4A17"></path>
          <path d="M39.286 38.3766C39.286 36.9959 40.4069 35.875 41.7876 35.875C43.1684 35.875 44.2893 36.9959 44.2893 38.3766C44.2893 39.7574 43.1684 40.8782 41.7876 40.8782C40.4069 40.8782 39.286 39.7574 39.286 38.3766Z" fill="#FF4A17"></path>
          <path d="M0.102661 38.3766C0.102661 36.9959 1.22354 35.875 2.60429 35.875C3.98504 35.875 5.10591 36.9959 5.10591 38.3766C5.10591 39.7574 3.98504 40.8782 2.60429 40.8782C1.22091 40.8756 0.102661 39.7574 0.102661 38.3766Z" fill="#FF4A17"></path>
          <path d="M156.833 3.36198C156.833 1.98123 157.954 0.860352 159.335 0.860352C160.716 0.860352 161.837 1.98123 161.837 3.36198C161.837 4.74273 160.716 5.8636 159.335 5.8636C157.954 5.8636 156.833 4.74273 156.833 3.36198Z" fill="#FF4A17"></path>
          <path d="M117.65 3.36198C117.65 1.98123 118.771 0.860352 120.152 0.860352C121.533 0.860352 122.653 1.98123 122.653 3.36198C122.653 4.74273 121.533 5.8636 120.152 5.8636C118.771 5.8636 117.65 4.74273 117.65 3.36198Z" fill="#FF4A17"></path>
          <path d="M78.4694 3.36198C78.4694 1.98123 79.5902 0.860352 80.971 0.860352C82.3517 0.860352 83.4726 1.98123 83.4726 3.36198C83.4726 4.74273 82.3517 5.8636 80.971 5.8636C79.5876 5.8636 78.4694 4.74273 78.4694 3.36198Z" fill="#FF4A17"></path>
          <path d="M39.286 3.36198C39.286 1.98123 40.4069 0.860352 41.7876 0.860352C43.1684 0.860352 44.2893 1.98123 44.2893 3.36198C44.2893 4.74273 43.1684 5.8636 41.7876 5.8636C40.4069 5.8636 39.286 4.74273 39.286 3.36198Z" fill="#FF4A17"></path>
          <path d="M0.102661 3.36198C0.102661 1.98123 1.22354 0.860352 2.60429 0.860352C3.98504 0.860352 5.10591 1.98123 5.10591 3.36198C5.10591 4.74273 3.98504 5.8636 2.60429 5.8636C1.22091 5.8636 0.102661 4.74273 0.102661 3.36198Z" fill="#FF4A17"></path>
        </svg>
      </div>
      <div class="cs-height_130 cs-height_lg_80"></div>
      <div class="container">
        <div class="cs-testimonial_slider">
          <div class="cs-testimonial_slider_left">
            <div class="slider-nav cs-style1 slick-initialized slick-slider slick-dotted"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="display: inline-block;">Previous</button><div class="slick-list draggable" style="padding: 0px 50px;"><div class="slick-track" style="opacity: 1; width: 30000px; transform: translate3d(-270px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-3" id="" aria-hidden="true"><div><div class="slider-for_item item-nav" style="width: 100%; display: inline-block;">
                <div class="slider-nav_item">
                  <div class="cs-rotate_img">
                    <div class="cs-rotate_img_in">
                      <img src="assets/img/testimonial_1.jpeg" alt="Nav Image">
                    </div>
                  </div>
                </div>
              </div></div></div><div class="slick-slide slick-cloned" data-slick-index="-2" id="" aria-hidden="true"><div><div class="slider-for_item item-nav" style="width: 100%; display: inline-block;">
                <div class="slider-nav_item">
                  <div class="cs-rotate_img">
                    <div class="cs-rotate_img_in">
                      <img src="assets/img/testimonial_2.jpeg" alt="Nav Image">
                    </div>
                  </div>
                </div>
              </div></div></div><div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true"><div><div class="slider-for_item item-nav" style="width: 100%; display: inline-block;">
                <div class="slider-nav_item">
                  <div class="cs-rotate_img">
                    <div class="cs-rotate_img_in">
                      <img src="assets/img/testimonial_3.jpeg" alt="Nav Image">
                    </div>
                  </div>
                </div>
              </div></div></div><div class="slick-slide slick-current slick-active slick-center" data-slick-index="0" aria-hidden="false" role="tabpanel" id="slick-slide50" tabindex="-1"><div><div class="slider-for_item item-nav" style="width: 100%; display: inline-block;">
                <div class="slider-nav_item">
                  <div class="cs-rotate_img">
                    <div class="cs-rotate_img_in">
                      <img src="assets/img/testimonial_1.jpeg" alt="Nav Image">
                    </div>
                  </div>
                </div>
              </div></div></div><div class="slick-slide slick-active" data-slick-index="1" aria-hidden="false" role="tabpanel" id="slick-slide51" tabindex="-1"><div><div class="slider-for_item item-nav" style="width: 100%; display: inline-block;">
                <div class="slider-nav_item">
                  <div class="cs-rotate_img">
                    <div class="cs-rotate_img_in">
                      <img src="assets/img/testimonial_2.jpeg" alt="Nav Image">
                    </div>
                  </div>
                </div>
              </div></div></div><div class="slick-slide" data-slick-index="2" aria-hidden="true" role="tabpanel" id="slick-slide52" tabindex="-1"><div><div class="slider-for_item item-nav" style="width: 100%; display: inline-block;">
                <div class="slider-nav_item">
                  <div class="cs-rotate_img">
                    <div class="cs-rotate_img_in">
                      <img src="assets/img/testimonial_3.jpeg" alt="Nav Image">
                    </div>
                  </div>
                </div>
              </div></div></div><div class="slick-slide" data-slick-index="3" aria-hidden="true" role="tabpanel" id="slick-slide53" tabindex="-1"><div><div class="slider-for_item item-nav" style="width: 100%; display: inline-block;">
                <div class="slider-nav_item">
                  <div class="cs-rotate_img">
                    <div class="cs-rotate_img_in">
                      <img src="assets/img/testimonial_1.jpeg" alt="Nav Image">
                    </div>
                  </div>
                </div>
              </div></div></div><div class="slick-slide" data-slick-index="4" aria-hidden="true" role="tabpanel" id="slick-slide54" tabindex="-1"><div><div class="slider-for_item item-nav" style="width: 100%; display: inline-block;">
                <div class="slider-nav_item">
                  <div class="cs-rotate_img">
                    <div class="cs-rotate_img_in">
                      <img src="assets/img/testimonial_2.jpeg" alt="Nav Image">
                    </div>
                  </div>
                </div>
              </div></div></div><div class="slick-slide" data-slick-index="5" aria-hidden="true" role="tabpanel" id="slick-slide55" tabindex="-1"><div><div class="slider-for_item item-nav" style="width: 100%; display: inline-block;">
                <div class="slider-nav_item">
                  <div class="cs-rotate_img">
                    <div class="cs-rotate_img_in">
                      <img src="assets/img/testimonial_3.jpeg" alt="Nav Image">
                    </div>
                  </div>
                </div>
              </div></div></div><div class="slick-slide slick-cloned" data-slick-index="6" id="" aria-hidden="true"><div><div class="slider-for_item item-nav" style="width: 100%; display: inline-block;">
                <div class="slider-nav_item">
                  <div class="cs-rotate_img">
                    <div class="cs-rotate_img_in">
                      <img src="assets/img/testimonial_1.jpeg" alt="Nav Image">
                    </div>
                  </div>
                </div>
              </div></div></div><div class="slick-slide slick-cloned" data-slick-index="7" id="" aria-hidden="true"><div><div class="slider-for_item item-nav" style="width: 100%; display: inline-block;">
                <div class="slider-nav_item">
                  <div class="cs-rotate_img">
                    <div class="cs-rotate_img_in">
                      <img src="assets/img/testimonial_2.jpeg" alt="Nav Image">
                    </div>
                  </div>
                </div>
              </div></div></div><div class="slick-slide slick-cloned" data-slick-index="8" id="" aria-hidden="true"><div><div class="slider-for_item item-nav" style="width: 100%; display: inline-block;">
                <div class="slider-nav_item">
                  <div class="cs-rotate_img">
                    <div class="cs-rotate_img_in">
                      <img src="assets/img/testimonial_3.jpeg" alt="Nav Image">
                    </div>
                  </div>
                </div>
              </div></div></div><div class="slick-slide slick-cloned slick-center" data-slick-index="9" id="" aria-hidden="true"><div><div class="slider-for_item item-nav" style="width: 100%; display: inline-block;">
                <div class="slider-nav_item">
                  <div class="cs-rotate_img">
                    <div class="cs-rotate_img_in">
                      <img src="assets/img/testimonial_1.jpeg" alt="Nav Image">
                    </div>
                  </div>
                </div>
              </div></div></div><div class="slick-slide slick-cloned" data-slick-index="10" id="" aria-hidden="true"><div><div class="slider-for_item item-nav" style="width: 100%; display: inline-block;">
                <div class="slider-nav_item">
                  <div class="cs-rotate_img">
                    <div class="cs-rotate_img_in">
                      <img src="assets/img/testimonial_2.jpeg" alt="Nav Image">
                    </div>
                  </div>
                </div>
              </div></div></div><div class="slick-slide slick-cloned" data-slick-index="11" id="" aria-hidden="true"><div><div class="slider-for_item item-nav" style="width: 100%; display: inline-block;">
                <div class="slider-nav_item">
                  <div class="cs-rotate_img">
                    <div class="cs-rotate_img_in">
                      <img src="assets/img/testimonial_3.jpeg" alt="Nav Image">
                    </div>
                  </div>
                </div>
              </div></div></div></div></div><button class="slick-next slick-arrow" aria-label="Next" type="button" style="display: inline-block;">Next</button><ul class="slick-dots" style="display: block;" role="tablist"><li class="slick-active" role="presentation"><button type="button" role="tab" id="slick-slide-control50" aria-controls="slick-slide50" aria-label="1 of 3" tabindex="0" aria-selected="true">1</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control51" aria-controls="slick-slide51" aria-label="2 of 3" tabindex="-1">2</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control52" aria-controls="slick-slide52" aria-label="3 of 3" tabindex="-1">3</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control53" aria-controls="slick-slide53" aria-label="4 of 3" tabindex="-1">4</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control54" aria-controls="slick-slide54" aria-label="5 of 3" tabindex="-1">5</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control55" aria-controls="slick-slide55" aria-label="6 of 3" tabindex="-1">6</button></li></ul></div>
          </div>
          <div class="cs-testimonial_slider_right">
            <div class="slider-for cs-style1 slick-initialized slick-slider"><button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">Previous</button><div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 9438px; transform: translate3d(-726px, 0px, 0px);"><div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" style="width: 726px;"><div><div class="slider-for_item" style="width: 100%; display: inline-block;">
                <div class="cs-testimonial cs-style1">
                  <div class="cs-testimonial_quote">
                    <svg width="42" height="38" viewBox="0 0 42 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M37.928 18.9982H31.4175V13.7899C31.4175 10.9172 33.7532 8.58154 36.6259 8.58154H37.2769C38.3593 8.58154 39.23 7.71077 39.23 6.62842V2.72217C39.23 1.63981 38.3593 0.769043 37.2769 0.769043H36.6259C29.4319 0.769043 23.605 6.59587 23.605 13.7899V33.3211C23.605 35.4777 25.3547 37.2274 27.5113 37.2274H37.928C40.0845 37.2274 41.8342 35.4777 41.8342 33.3211V22.9045C41.8342 20.7479 40.0845 18.9982 37.928 18.9982ZM14.4905 18.9982H7.98004V13.7899C7.98004 10.9172 10.3157 8.58154 13.1884 8.58154H13.8394C14.9218 8.58154 15.7925 7.71077 15.7925 6.62842V2.72217C15.7925 1.63981 14.9218 0.769043 13.8394 0.769043H13.1884C5.99436 0.769043 0.167542 6.59587 0.167542 13.7899V33.3211C0.167542 35.4777 1.91722 37.2274 4.07379 37.2274H14.4905C16.647 37.2274 18.3967 35.4777 18.3967 33.3211V22.9045C18.3967 20.7479 16.647 18.9982 14.4905 18.9982Z" fill="white"></path>
                    </svg>
                  </div>
                  <div class="cs-testimonial_text"> I wish I would have thought of it first. Creative agency is the most tech valuable business resource we have ever purchased. Dude your stuff is the bomb! eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt to the explicabo. </div>
                  <div class="cs-rating" data-rating="4">
                    <div class="cs-rating_bg" data-src="assets/img/rating.svg" style="background-image: url(&quot;assets/img/rating.svg&quot;);"></div>
                    <div class="cs-rating_percentage" data-src="assets/img/rating.svg" style="background-image: url(&quot;assets/img/rating.svg&quot;); width: 80%;"></div>
                  </div>
                  <h2 class="cs-testimonial_avatar_name">Ahon Monsery</h2>
                  <div class="cs-testimonial_avatar_designation text-uppercase"> CEO AT TECH </div>
                </div>
              </div></div></div><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 726px;"><div><div class="slider-for_item" style="width: 100%; display: inline-block;">
                <div class="cs-testimonial cs-style1">
                  <div class="cs-testimonial_quote">
                    <svg width="42" height="38" viewBox="0 0 42 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M37.928 18.9982H31.4175V13.7899C31.4175 10.9172 33.7532 8.58154 36.6259 8.58154H37.2769C38.3593 8.58154 39.23 7.71077 39.23 6.62842V2.72217C39.23 1.63981 38.3593 0.769043 37.2769 0.769043H36.6259C29.4319 0.769043 23.605 6.59587 23.605 13.7899V33.3211C23.605 35.4777 25.3547 37.2274 27.5113 37.2274H37.928C40.0845 37.2274 41.8342 35.4777 41.8342 33.3211V22.9045C41.8342 20.7479 40.0845 18.9982 37.928 18.9982ZM14.4905 18.9982H7.98004V13.7899C7.98004 10.9172 10.3157 8.58154 13.1884 8.58154H13.8394C14.9218 8.58154 15.7925 7.71077 15.7925 6.62842V2.72217C15.7925 1.63981 14.9218 0.769043 13.8394 0.769043H13.1884C5.99436 0.769043 0.167542 6.59587 0.167542 13.7899V33.3211C0.167542 35.4777 1.91722 37.2274 4.07379 37.2274H14.4905C16.647 37.2274 18.3967 35.4777 18.3967 33.3211V22.9045C18.3967 20.7479 16.647 18.9982 14.4905 18.9982Z" fill="white"></path>
                    </svg>
                  </div>
                  <div class="cs-testimonial_text"> I wish I would have thought of it first. Creative agency is the most tech valuable business resource we have ever purchased. Dude your stuff is the bomb! eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt to the explicabo. </div>
                  <div class="cs-rating" data-rating="4">
                    <div class="cs-rating_bg" data-src="assets/img/rating.svg" style="background-image: url(&quot;assets/img/rating.svg&quot;);"></div>
                    <div class="cs-rating_percentage" data-src="assets/img/rating.svg" style="background-image: url(&quot;assets/img/rating.svg&quot;); width: 80%;"></div>
                  </div>
                  <h2 class="cs-testimonial_avatar_name">Ahon Monsery</h2>
                  <div class="cs-testimonial_avatar_designation text-uppercase"> CEO AT TECH </div>
                </div>
              </div></div></div><div class="slick-slide" data-slick-index="1" aria-hidden="true" style="width: 726px;"><div><div class="slider-for_item" style="width: 100%; display: inline-block;">
                <div class="cs-testimonial cs-style1">
                  <div class="cs-testimonial_quote">
                    <svg width="42" height="38" viewBox="0 0 42 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M37.928 18.9982H31.4175V13.7899C31.4175 10.9172 33.7532 8.58154 36.6259 8.58154H37.2769C38.3593 8.58154 39.23 7.71077 39.23 6.62842V2.72217C39.23 1.63981 38.3593 0.769043 37.2769 0.769043H36.6259C29.4319 0.769043 23.605 6.59587 23.605 13.7899V33.3211C23.605 35.4777 25.3547 37.2274 27.5113 37.2274H37.928C40.0845 37.2274 41.8342 35.4777 41.8342 33.3211V22.9045C41.8342 20.7479 40.0845 18.9982 37.928 18.9982ZM14.4905 18.9982H7.98004V13.7899C7.98004 10.9172 10.3157 8.58154 13.1884 8.58154H13.8394C14.9218 8.58154 15.7925 7.71077 15.7925 6.62842V2.72217C15.7925 1.63981 14.9218 0.769043 13.8394 0.769043H13.1884C5.99436 0.769043 0.167542 6.59587 0.167542 13.7899V33.3211C0.167542 35.4777 1.91722 37.2274 4.07379 37.2274H14.4905C16.647 37.2274 18.3967 35.4777 18.3967 33.3211V22.9045C18.3967 20.7479 16.647 18.9982 14.4905 18.9982Z" fill="white"></path>
                    </svg>
                  </div>
                  <div class="cs-testimonial_text"> I wish I would have thought of it first. Creative agency is the most tech valuable business resource we have ever purchased. Dude your stuff is the bomb! eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt to the explicabo. </div>
                  <div class="cs-rating" data-rating="4">
                    <div class="cs-rating_bg" data-src="assets/img/rating.svg" style="background-image: url(&quot;assets/img/rating.svg&quot;);"></div>
                    <div class="cs-rating_percentage" data-src="assets/img/rating.svg" style="background-image: url(&quot;assets/img/rating.svg&quot;); width: 80%;"></div>
                  </div>
                  <h2 class="cs-testimonial_avatar_name">Ahon Monsery</h2>
                  <div class="cs-testimonial_avatar_designation text-uppercase"> CEO AT TECH </div>
                </div>
              </div></div></div><div class="slick-slide" data-slick-index="2" aria-hidden="true" style="width: 726px;"><div><div class="slider-for_item" style="width: 100%; display: inline-block;">
                <div class="cs-testimonial cs-style1">
                  <div class="cs-testimonial_quote">
                    <svg width="42" height="38" viewBox="0 0 42 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M37.928 18.9982H31.4175V13.7899C31.4175 10.9172 33.7532 8.58154 36.6259 8.58154H37.2769C38.3593 8.58154 39.23 7.71077 39.23 6.62842V2.72217C39.23 1.63981 38.3593 0.769043 37.2769 0.769043H36.6259C29.4319 0.769043 23.605 6.59587 23.605 13.7899V33.3211C23.605 35.4777 25.3547 37.2274 27.5113 37.2274H37.928C40.0845 37.2274 41.8342 35.4777 41.8342 33.3211V22.9045C41.8342 20.7479 40.0845 18.9982 37.928 18.9982ZM14.4905 18.9982H7.98004V13.7899C7.98004 10.9172 10.3157 8.58154 13.1884 8.58154H13.8394C14.9218 8.58154 15.7925 7.71077 15.7925 6.62842V2.72217C15.7925 1.63981 14.9218 0.769043 13.8394 0.769043H13.1884C5.99436 0.769043 0.167542 6.59587 0.167542 13.7899V33.3211C0.167542 35.4777 1.91722 37.2274 4.07379 37.2274H14.4905C16.647 37.2274 18.3967 35.4777 18.3967 33.3211V22.9045C18.3967 20.7479 16.647 18.9982 14.4905 18.9982Z" fill="white"></path>
                    </svg>
                  </div>
                  <div class="cs-testimonial_text"> I wish I would have thought of it first. Creative agency is the most tech valuable business resource we have ever purchased. Dude your stuff is the bomb! eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt to the explicabo. </div>
                  <div class="cs-rating" data-rating="4">
                    <div class="cs-rating_bg" data-src="assets/img/rating.svg" style="background-image: url(&quot;assets/img/rating.svg&quot;);"></div>
                    <div class="cs-rating_percentage" data-src="assets/img/rating.svg" style="background-image: url(&quot;assets/img/rating.svg&quot;); width: 80%;"></div>
                  </div>
                  <h2 class="cs-testimonial_avatar_name">Ahon Monsery</h2>
                  <div class="cs-testimonial_avatar_designation text-uppercase"> CEO AT TECH </div>
                </div>
              </div></div></div><div class="slick-slide" data-slick-index="3" aria-hidden="true" style="width: 726px;"><div><div class="slider-for_item" style="width: 100%; display: inline-block;">
                <div class="cs-testimonial cs-style1">
                  <div class="cs-testimonial_quote">
                    <svg width="42" height="38" viewBox="0 0 42 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M37.928 18.9982H31.4175V13.7899C31.4175 10.9172 33.7532 8.58154 36.6259 8.58154H37.2769C38.3593 8.58154 39.23 7.71077 39.23 6.62842V2.72217C39.23 1.63981 38.3593 0.769043 37.2769 0.769043H36.6259C29.4319 0.769043 23.605 6.59587 23.605 13.7899V33.3211C23.605 35.4777 25.3547 37.2274 27.5113 37.2274H37.928C40.0845 37.2274 41.8342 35.4777 41.8342 33.3211V22.9045C41.8342 20.7479 40.0845 18.9982 37.928 18.9982ZM14.4905 18.9982H7.98004V13.7899C7.98004 10.9172 10.3157 8.58154 13.1884 8.58154H13.8394C14.9218 8.58154 15.7925 7.71077 15.7925 6.62842V2.72217C15.7925 1.63981 14.9218 0.769043 13.8394 0.769043H13.1884C5.99436 0.769043 0.167542 6.59587 0.167542 13.7899V33.3211C0.167542 35.4777 1.91722 37.2274 4.07379 37.2274H14.4905C16.647 37.2274 18.3967 35.4777 18.3967 33.3211V22.9045C18.3967 20.7479 16.647 18.9982 14.4905 18.9982Z" fill="white"></path>
                    </svg>
                  </div>
                  <div class="cs-testimonial_text"> I wish I would have thought of it first. Creative agency is the most tech valuable business resource we have ever purchased. Dude your stuff is the bomb! eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt to the explicabo. </div>
                  <div class="cs-rating" data-rating="4">
                    <div class="cs-rating_bg" data-src="assets/img/rating.svg" style="background-image: url(&quot;assets/img/rating.svg&quot;);"></div>
                    <div class="cs-rating_percentage" data-src="assets/img/rating.svg" style="background-image: url(&quot;assets/img/rating.svg&quot;); width: 80%;"></div>
                  </div>
                  <h2 class="cs-testimonial_avatar_name">Ahon Monsery</h2>
                  <div class="cs-testimonial_avatar_designation text-uppercase"> CEO AT TECH </div>
                </div>
              </div></div></div><div class="slick-slide" data-slick-index="4" aria-hidden="true" style="width: 726px;"><div><div class="slider-for_item" style="width: 100%; display: inline-block;">
                <div class="cs-testimonial cs-style1">
                  <div class="cs-testimonial_quote">
                    <svg width="42" height="38" viewBox="0 0 42 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M37.928 18.9982H31.4175V13.7899C31.4175 10.9172 33.7532 8.58154 36.6259 8.58154H37.2769C38.3593 8.58154 39.23 7.71077 39.23 6.62842V2.72217C39.23 1.63981 38.3593 0.769043 37.2769 0.769043H36.6259C29.4319 0.769043 23.605 6.59587 23.605 13.7899V33.3211C23.605 35.4777 25.3547 37.2274 27.5113 37.2274H37.928C40.0845 37.2274 41.8342 35.4777 41.8342 33.3211V22.9045C41.8342 20.7479 40.0845 18.9982 37.928 18.9982ZM14.4905 18.9982H7.98004V13.7899C7.98004 10.9172 10.3157 8.58154 13.1884 8.58154H13.8394C14.9218 8.58154 15.7925 7.71077 15.7925 6.62842V2.72217C15.7925 1.63981 14.9218 0.769043 13.8394 0.769043H13.1884C5.99436 0.769043 0.167542 6.59587 0.167542 13.7899V33.3211C0.167542 35.4777 1.91722 37.2274 4.07379 37.2274H14.4905C16.647 37.2274 18.3967 35.4777 18.3967 33.3211V22.9045C18.3967 20.7479 16.647 18.9982 14.4905 18.9982Z" fill="white"></path>
                    </svg>
                  </div>
                  <div class="cs-testimonial_text"> I wish I would have thought of it first. Creative agency is the most tech valuable business resource we have ever purchased. Dude your stuff is the bomb! eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt to the explicabo. </div>
                  <div class="cs-rating" data-rating="4">
                    <div class="cs-rating_bg" data-src="assets/img/rating.svg" style="background-image: url(&quot;assets/img/rating.svg&quot;);"></div>
                    <div class="cs-rating_percentage" data-src="assets/img/rating.svg" style="background-image: url(&quot;assets/img/rating.svg&quot;); width: 80%;"></div>
                  </div>
                  <h2 class="cs-testimonial_avatar_name">Ahon Monsery</h2>
                  <div class="cs-testimonial_avatar_designation text-uppercase"> CEO AT TECH </div>
                </div>
              </div></div></div><div class="slick-slide" data-slick-index="5" aria-hidden="true" style="width: 726px;"><div><div class="slider-for_item" style="width: 100%; display: inline-block;">
                <div class="cs-testimonial cs-style1">
                  <div class="cs-testimonial_quote">
                    <svg width="42" height="38" viewBox="0 0 42 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M37.928 18.9982H31.4175V13.7899C31.4175 10.9172 33.7532 8.58154 36.6259 8.58154H37.2769C38.3593 8.58154 39.23 7.71077 39.23 6.62842V2.72217C39.23 1.63981 38.3593 0.769043 37.2769 0.769043H36.6259C29.4319 0.769043 23.605 6.59587 23.605 13.7899V33.3211C23.605 35.4777 25.3547 37.2274 27.5113 37.2274H37.928C40.0845 37.2274 41.8342 35.4777 41.8342 33.3211V22.9045C41.8342 20.7479 40.0845 18.9982 37.928 18.9982ZM14.4905 18.9982H7.98004V13.7899C7.98004 10.9172 10.3157 8.58154 13.1884 8.58154H13.8394C14.9218 8.58154 15.7925 7.71077 15.7925 6.62842V2.72217C15.7925 1.63981 14.9218 0.769043 13.8394 0.769043H13.1884C5.99436 0.769043 0.167542 6.59587 0.167542 13.7899V33.3211C0.167542 35.4777 1.91722 37.2274 4.07379 37.2274H14.4905C16.647 37.2274 18.3967 35.4777 18.3967 33.3211V22.9045C18.3967 20.7479 16.647 18.9982 14.4905 18.9982Z" fill="white"></path>
                    </svg>
                  </div>
                  <div class="cs-testimonial_text"> I wish I would have thought of it first. Creative agency is the most tech valuable business resource we have ever purchased. Dude your stuff is the bomb! eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt to the explicabo. </div>
                  <div class="cs-rating" data-rating="4">
                    <div class="cs-rating_bg" data-src="assets/img/rating.svg" style="background-image: url(&quot;assets/img/rating.svg&quot;);"></div>
                    <div class="cs-rating_percentage" data-src="assets/img/rating.svg" style="background-image: url(&quot;assets/img/rating.svg&quot;); width: 80%;"></div>
                  </div>
                  <h2 class="cs-testimonial_avatar_name">Ahon Monsery</h2>
                  <div class="cs-testimonial_avatar_designation text-uppercase"> CEO AT TECH </div>
                </div>
              </div></div></div><div class="slick-slide slick-cloned" data-slick-index="6" id="" aria-hidden="true" style="width: 726px;"><div><div class="slider-for_item" style="width: 100%; display: inline-block;">
                <div class="cs-testimonial cs-style1">
                  <div class="cs-testimonial_quote">
                    <svg width="42" height="38" viewBox="0 0 42 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M37.928 18.9982H31.4175V13.7899C31.4175 10.9172 33.7532 8.58154 36.6259 8.58154H37.2769C38.3593 8.58154 39.23 7.71077 39.23 6.62842V2.72217C39.23 1.63981 38.3593 0.769043 37.2769 0.769043H36.6259C29.4319 0.769043 23.605 6.59587 23.605 13.7899V33.3211C23.605 35.4777 25.3547 37.2274 27.5113 37.2274H37.928C40.0845 37.2274 41.8342 35.4777 41.8342 33.3211V22.9045C41.8342 20.7479 40.0845 18.9982 37.928 18.9982ZM14.4905 18.9982H7.98004V13.7899C7.98004 10.9172 10.3157 8.58154 13.1884 8.58154H13.8394C14.9218 8.58154 15.7925 7.71077 15.7925 6.62842V2.72217C15.7925 1.63981 14.9218 0.769043 13.8394 0.769043H13.1884C5.99436 0.769043 0.167542 6.59587 0.167542 13.7899V33.3211C0.167542 35.4777 1.91722 37.2274 4.07379 37.2274H14.4905C16.647 37.2274 18.3967 35.4777 18.3967 33.3211V22.9045C18.3967 20.7479 16.647 18.9982 14.4905 18.9982Z" fill="white"></path>
                    </svg>
                  </div>
                  <div class="cs-testimonial_text"> I wish I would have thought of it first. Creative agency is the most tech valuable business resource we have ever purchased. Dude your stuff is the bomb! eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt to the explicabo. </div>
                  <div class="cs-rating" data-rating="4">
                    <div class="cs-rating_bg" data-src="assets/img/rating.svg" style="background-image: url(&quot;assets/img/rating.svg&quot;);"></div>
                    <div class="cs-rating_percentage" data-src="assets/img/rating.svg" style="background-image: url(&quot;assets/img/rating.svg&quot;); width: 80%;"></div>
                  </div>
                  <h2 class="cs-testimonial_avatar_name">Ahon Monsery</h2>
                  <div class="cs-testimonial_avatar_designation text-uppercase"> CEO AT TECH </div>
                </div>
              </div></div></div><div class="slick-slide slick-cloned" data-slick-index="7" id="" aria-hidden="true" style="width: 726px;"><div><div class="slider-for_item" style="width: 100%; display: inline-block;">
                <div class="cs-testimonial cs-style1">
                  <div class="cs-testimonial_quote">
                    <svg width="42" height="38" viewBox="0 0 42 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M37.928 18.9982H31.4175V13.7899C31.4175 10.9172 33.7532 8.58154 36.6259 8.58154H37.2769C38.3593 8.58154 39.23 7.71077 39.23 6.62842V2.72217C39.23 1.63981 38.3593 0.769043 37.2769 0.769043H36.6259C29.4319 0.769043 23.605 6.59587 23.605 13.7899V33.3211C23.605 35.4777 25.3547 37.2274 27.5113 37.2274H37.928C40.0845 37.2274 41.8342 35.4777 41.8342 33.3211V22.9045C41.8342 20.7479 40.0845 18.9982 37.928 18.9982ZM14.4905 18.9982H7.98004V13.7899C7.98004 10.9172 10.3157 8.58154 13.1884 8.58154H13.8394C14.9218 8.58154 15.7925 7.71077 15.7925 6.62842V2.72217C15.7925 1.63981 14.9218 0.769043 13.8394 0.769043H13.1884C5.99436 0.769043 0.167542 6.59587 0.167542 13.7899V33.3211C0.167542 35.4777 1.91722 37.2274 4.07379 37.2274H14.4905C16.647 37.2274 18.3967 35.4777 18.3967 33.3211V22.9045C18.3967 20.7479 16.647 18.9982 14.4905 18.9982Z" fill="white"></path>
                    </svg>
                  </div>
                  <div class="cs-testimonial_text"> I wish I would have thought of it first. Creative agency is the most tech valuable business resource we have ever purchased. Dude your stuff is the bomb! eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt to the explicabo. </div>
                  <div class="cs-rating" data-rating="4">
                    <div class="cs-rating_bg" data-src="assets/img/rating.svg" style="background-image: url(&quot;assets/img/rating.svg&quot;);"></div>
                    <div class="cs-rating_percentage" data-src="assets/img/rating.svg" style="background-image: url(&quot;assets/img/rating.svg&quot;); width: 80%;"></div>
                  </div>
                  <h2 class="cs-testimonial_avatar_name">Ahon Monsery</h2>
                  <div class="cs-testimonial_avatar_designation text-uppercase"> CEO AT TECH </div>
                </div>
              </div></div></div><div class="slick-slide slick-cloned" data-slick-index="8" id="" aria-hidden="true" style="width: 726px;"><div><div class="slider-for_item" style="width: 100%; display: inline-block;">
                <div class="cs-testimonial cs-style1">
                  <div class="cs-testimonial_quote">
                    <svg width="42" height="38" viewBox="0 0 42 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M37.928 18.9982H31.4175V13.7899C31.4175 10.9172 33.7532 8.58154 36.6259 8.58154H37.2769C38.3593 8.58154 39.23 7.71077 39.23 6.62842V2.72217C39.23 1.63981 38.3593 0.769043 37.2769 0.769043H36.6259C29.4319 0.769043 23.605 6.59587 23.605 13.7899V33.3211C23.605 35.4777 25.3547 37.2274 27.5113 37.2274H37.928C40.0845 37.2274 41.8342 35.4777 41.8342 33.3211V22.9045C41.8342 20.7479 40.0845 18.9982 37.928 18.9982ZM14.4905 18.9982H7.98004V13.7899C7.98004 10.9172 10.3157 8.58154 13.1884 8.58154H13.8394C14.9218 8.58154 15.7925 7.71077 15.7925 6.62842V2.72217C15.7925 1.63981 14.9218 0.769043 13.8394 0.769043H13.1884C5.99436 0.769043 0.167542 6.59587 0.167542 13.7899V33.3211C0.167542 35.4777 1.91722 37.2274 4.07379 37.2274H14.4905C16.647 37.2274 18.3967 35.4777 18.3967 33.3211V22.9045C18.3967 20.7479 16.647 18.9982 14.4905 18.9982Z" fill="white"></path>
                    </svg>
                  </div>
                  <div class="cs-testimonial_text"> I wish I would have thought of it first. Creative agency is the most tech valuable business resource we have ever purchased. Dude your stuff is the bomb! eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt to the explicabo. </div>
                  <div class="cs-rating" data-rating="4">
                    <div class="cs-rating_bg" data-src="assets/img/rating.svg" style="background-image: url(&quot;assets/img/rating.svg&quot;);"></div>
                    <div class="cs-rating_percentage" data-src="assets/img/rating.svg" style="background-image: url(&quot;assets/img/rating.svg&quot;); width: 80%;"></div>
                  </div>
                  <h2 class="cs-testimonial_avatar_name">Ahon Monsery</h2>
                  <div class="cs-testimonial_avatar_designation text-uppercase"> CEO AT TECH </div>
                </div>
              </div></div></div><div class="slick-slide slick-cloned" data-slick-index="9" id="" aria-hidden="true" style="width: 726px;"><div><div class="slider-for_item" style="width: 100%; display: inline-block;">
                <div class="cs-testimonial cs-style1">
                  <div class="cs-testimonial_quote">
                    <svg width="42" height="38" viewBox="0 0 42 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M37.928 18.9982H31.4175V13.7899C31.4175 10.9172 33.7532 8.58154 36.6259 8.58154H37.2769C38.3593 8.58154 39.23 7.71077 39.23 6.62842V2.72217C39.23 1.63981 38.3593 0.769043 37.2769 0.769043H36.6259C29.4319 0.769043 23.605 6.59587 23.605 13.7899V33.3211C23.605 35.4777 25.3547 37.2274 27.5113 37.2274H37.928C40.0845 37.2274 41.8342 35.4777 41.8342 33.3211V22.9045C41.8342 20.7479 40.0845 18.9982 37.928 18.9982ZM14.4905 18.9982H7.98004V13.7899C7.98004 10.9172 10.3157 8.58154 13.1884 8.58154H13.8394C14.9218 8.58154 15.7925 7.71077 15.7925 6.62842V2.72217C15.7925 1.63981 14.9218 0.769043 13.8394 0.769043H13.1884C5.99436 0.769043 0.167542 6.59587 0.167542 13.7899V33.3211C0.167542 35.4777 1.91722 37.2274 4.07379 37.2274H14.4905C16.647 37.2274 18.3967 35.4777 18.3967 33.3211V22.9045C18.3967 20.7479 16.647 18.9982 14.4905 18.9982Z" fill="white"></path>
                    </svg>
                  </div>
                  <div class="cs-testimonial_text"> I wish I would have thought of it first. Creative agency is the most tech valuable business resource we have ever purchased. Dude your stuff is the bomb! eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt to the explicabo. </div>
                  <div class="cs-rating" data-rating="4">
                    <div class="cs-rating_bg" data-src="assets/img/rating.svg" style="background-image: url(&quot;assets/img/rating.svg&quot;);"></div>
                    <div class="cs-rating_percentage" data-src="assets/img/rating.svg" style="background-image: url(&quot;assets/img/rating.svg&quot;); width: 80%;"></div>
                  </div>
                  <h2 class="cs-testimonial_avatar_name">Ahon Monsery</h2>
                  <div class="cs-testimonial_avatar_designation text-uppercase"> CEO AT TECH </div>
                </div>
              </div></div></div><div class="slick-slide slick-cloned" data-slick-index="10" id="" aria-hidden="true" style="width: 726px;"><div><div class="slider-for_item" style="width: 100%; display: inline-block;">
                <div class="cs-testimonial cs-style1">
                  <div class="cs-testimonial_quote">
                    <svg width="42" height="38" viewBox="0 0 42 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M37.928 18.9982H31.4175V13.7899C31.4175 10.9172 33.7532 8.58154 36.6259 8.58154H37.2769C38.3593 8.58154 39.23 7.71077 39.23 6.62842V2.72217C39.23 1.63981 38.3593 0.769043 37.2769 0.769043H36.6259C29.4319 0.769043 23.605 6.59587 23.605 13.7899V33.3211C23.605 35.4777 25.3547 37.2274 27.5113 37.2274H37.928C40.0845 37.2274 41.8342 35.4777 41.8342 33.3211V22.9045C41.8342 20.7479 40.0845 18.9982 37.928 18.9982ZM14.4905 18.9982H7.98004V13.7899C7.98004 10.9172 10.3157 8.58154 13.1884 8.58154H13.8394C14.9218 8.58154 15.7925 7.71077 15.7925 6.62842V2.72217C15.7925 1.63981 14.9218 0.769043 13.8394 0.769043H13.1884C5.99436 0.769043 0.167542 6.59587 0.167542 13.7899V33.3211C0.167542 35.4777 1.91722 37.2274 4.07379 37.2274H14.4905C16.647 37.2274 18.3967 35.4777 18.3967 33.3211V22.9045C18.3967 20.7479 16.647 18.9982 14.4905 18.9982Z" fill="white"></path>
                    </svg>
                  </div>
                  <div class="cs-testimonial_text"> I wish I would have thought of it first. Creative agency is the most tech valuable business resource we have ever purchased. Dude your stuff is the bomb! eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt to the explicabo. </div>
                  <div class="cs-rating" data-rating="4">
                    <div class="cs-rating_bg" data-src="assets/img/rating.svg" style="background-image: url(&quot;assets/img/rating.svg&quot;);"></div>
                    <div class="cs-rating_percentage" data-src="assets/img/rating.svg" style="background-image: url(&quot;assets/img/rating.svg&quot;); width: 80%;"></div>
                  </div>
                  <h2 class="cs-testimonial_avatar_name">Ahon Monsery</h2>
                  <div class="cs-testimonial_avatar_designation text-uppercase"> CEO AT TECH </div>
                </div>
              </div></div></div><div class="slick-slide slick-cloned" data-slick-index="11" id="" aria-hidden="true" style="width: 726px;"><div><div class="slider-for_item" style="width: 100%; display: inline-block;">
                <div class="cs-testimonial cs-style1">
                  <div class="cs-testimonial_quote">
                    <svg width="42" height="38" viewBox="0 0 42 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M37.928 18.9982H31.4175V13.7899C31.4175 10.9172 33.7532 8.58154 36.6259 8.58154H37.2769C38.3593 8.58154 39.23 7.71077 39.23 6.62842V2.72217C39.23 1.63981 38.3593 0.769043 37.2769 0.769043H36.6259C29.4319 0.769043 23.605 6.59587 23.605 13.7899V33.3211C23.605 35.4777 25.3547 37.2274 27.5113 37.2274H37.928C40.0845 37.2274 41.8342 35.4777 41.8342 33.3211V22.9045C41.8342 20.7479 40.0845 18.9982 37.928 18.9982ZM14.4905 18.9982H7.98004V13.7899C7.98004 10.9172 10.3157 8.58154 13.1884 8.58154H13.8394C14.9218 8.58154 15.7925 7.71077 15.7925 6.62842V2.72217C15.7925 1.63981 14.9218 0.769043 13.8394 0.769043H13.1884C5.99436 0.769043 0.167542 6.59587 0.167542 13.7899V33.3211C0.167542 35.4777 1.91722 37.2274 4.07379 37.2274H14.4905C16.647 37.2274 18.3967 35.4777 18.3967 33.3211V22.9045C18.3967 20.7479 16.647 18.9982 14.4905 18.9982Z" fill="white"></path>
                    </svg>
                  </div>
                  <div class="cs-testimonial_text"> I wish I would have thought of it first. Creative agency is the most tech valuable business resource we have ever purchased. Dude your stuff is the bomb! eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt to the explicabo. </div>
                  <div class="cs-rating" data-rating="4">
                    <div class="cs-rating_bg" data-src="assets/img/rating.svg" style="background-image: url(&quot;assets/img/rating.svg&quot;);"></div>
                    <div class="cs-rating_percentage" data-src="assets/img/rating.svg" style="background-image: url(&quot;assets/img/rating.svg&quot;); width: 80%;"></div>
                  </div>
                  <h2 class="cs-testimonial_avatar_name">Ahon Monsery</h2>
                  <div class="cs-testimonial_avatar_designation text-uppercase"> CEO AT TECH </div>
                </div>
              </div></div></div></div></div><button class="slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button></div>
          </div>
        </div>
      </div>
      <div class="cs-height_130 cs-height_lg_80"></div>
    </section>

<div class="cs-height_150 cs-height_lg_80"></div>

<section>
    <div class="container">
        <div class="cs-cta cs-style1 cs-bg text-center cs-shape_wrap_1 cs-position_1" data-src="assets/img/cta_bg.jpeg">
            <div class="cs-shape_1"></div>
            <div class="cs-shape_1"></div>
            <div class="cs-shape_1"></div>
            <div class="cs-cta_in">
                <h2 class="cs-cta_title cs-semi_bold cs-m0"> Get in Touch </h2>
                <div class="cs-height_70 cs-height_lg_30"></div>
                <a href="{{route('contact-application.create')}}" class="cs-text_btn wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <span>Get in Touch</span>
                    <svg width="26" height="12" viewBox="0 0 26 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M25.5307 6.53033C25.8236 6.23744 25.8236 5.76256 25.5307 5.46967L20.7577 0.696699C20.4648 0.403806 19.99 0.403806 19.6971 0.696699C19.4042 0.989593 19.4042 1.46447 19.6971 1.75736L23.9397 6L19.6971 10.2426C19.4042 10.5355 19.4042 11.0104 19.6971 11.3033C19.99 11.5962 20.4648 11.5962 20.7577 11.3033L25.5307 6.53033ZM0.000366211 6.75H25.0004V5.25H0.000366211V6.75Z" fill="currentColor" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- End CTA -->

<span class="cs-scrollup">
    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 10L1.7625 11.7625L8.75 4.7875V20H11.25V4.7875L18.225 11.775L20 10L10 0L0 10Z" fill="currentColor" />
    </svg>
</span>
<!-- Start Video Popup -->
<div class="cs-video_popup">
    <div class="cs-video_popup_overlay"></div>
    <div class="cs-video_popup_content">
        <div class="cs-video_popup_layer"></div>
        <div class="cs-video_popup_container">
            <div class="cs-video_popup_align">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="about:blank"></iframe>
                </div>
            </div>
            <div class="cs-video_popup_close"></div>
        </div>
    </div>
</div>
<!-- End Video Popup -->

@endsection
