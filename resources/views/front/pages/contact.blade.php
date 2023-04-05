@extends('front.layout.app')

@section('content')
    <!-- Start Hero -->
  <div class="cs-page_heading cs-style1 cs-center text-center cs-bg" data-src="assets/img/contact_hero_bg.jpeg">
    <div class="container">
      <div class="cs-page_heading_in">
        <h1 class="cs-page_title cs-font_50 cs-white_color">Contact Us</h1>
        <ol class="breadcrumb text-uppercase">
          <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
          <li class="breadcrumb-item active">Contact</li>
        </ol>
      </div>
    </div>
  </div>
  <!-- End Hero -->
  <div class="cs-height_150 cs-height_lg_80"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="cs-section_heading cs-style1">
          <h3 class="cs-section_subtitle">{{$contact->description}}</h3>
          <h2 class="cs-section_title">{{$contact->heading}}</h2>
        </div>
        <div class="cs-height_55 cs-height_lg_30"></div>
        <ul class="cs-contact_info cs-style1 cs-mp0">
          <li>
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M17 12.5C15.75 12.5 14.55 12.3 13.43 11.93C13.08 11.82 12.69 11.9 12.41 12.17L10.21 14.37C7.38 12.93 5.06 10.62 3.62 7.79L5.82 5.58C6.1 5.31 6.18 4.92 6.07 4.57C5.7 3.45 5.5 2.25 5.5 1C5.5 0.45 5.05 0 4.5 0H1C0.45 0 0 0.45 0 1C0 10.39 7.61 18 17 18C17.55 18 18 17.55 18 17V13.5C18 12.95 17.55 12.5 17 12.5ZM9 0V10L12 7H18V0H9Z" fill="#FF4A17"></path>
            </svg>
            <span>{{$contact->main_phone_no}}</span>
          </li>
           <li>
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M17 12.5C15.75 12.5 14.55 12.3 13.43 11.93C13.08 11.82 12.69 11.9 12.41 12.17L10.21 14.37C7.38 12.93 5.06 10.62 3.62 7.79L5.82 5.58C6.1 5.31 6.18 4.92 6.07 4.57C5.7 3.45 5.5 2.25 5.5 1C5.5 0.45 5.05 0 4.5 0H1C0.45 0 0 0.45 0 1C0 10.39 7.61 18 17 18C17.55 18 18 17.55 18 17V13.5C18 12.95 17.55 12.5 17 12.5ZM9 0V10L12 7H18V0H9Z" fill="#FF4A17"></path>
            </svg>
            <span>{{$contact->secondary_phone_no}}</span>
          </li>
          <li>
            <svg width="20" height="18" viewBox="0 0 20 18" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M20 6.98V16C20 17.1 19.1 18 18 18H2C0.9 18 0 17.1 0 16V4C0 2.9 0.9 2 2 2H12.1C12.04 2.32 12 2.66 12 3C12 4.48 12.65 5.79 13.67 6.71L10 9L2 4V6L10 11L15.3 7.68C15.84 7.88 16.4 8 17 8C18.13 8 19.16 7.61 20 6.98ZM14 3C14 4.66 15.34 6 17 6C18.66 6 20 4.66 20 3C20 1.34 18.66 0 17 0C15.34 0 14 1.34 14 3Z" fill="#FF4A17"></path>
            </svg>              
            <span>{{$contact->email}}</span>
          </li>
          <li>
            <svg width="14" height="20" viewBox="0 0 14 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M7 0C3.13 0 0 3.13 0 7C0 12.25 7 20 7 20C7 20 14 12.25 14 7C14 3.13 10.87 0 7 0ZM7 9.5C5.62 9.5 4.5 8.38 4.5 7C4.5 5.62 5.62 4.5 7 4.5C8.38 4.5 9.5 5.62 9.5 7C9.5 8.38 8.38 9.5 7 9.5Z" fill="#FF4A17" />
            </svg>
            <span><span>Main Address : </span>{{$contact->main_address}}</span>
          </li>
          <li>
            <svg width="14" height="20" viewBox="0 0 14 20" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M7 0C3.13 0 0 3.13 0 7C0 12.25 7 20 7 20C7 20 14 12.25 14 7C14 3.13 10.87 0 7 0ZM7 9.5C5.62 9.5 4.5 8.38 4.5 7C4.5 5.62 5.62 4.5 7 4.5C8.38 4.5 9.5 5.62 9.5 7C9.5 8.38 8.38 9.5 7 9.5Z" fill="#FF4A17" />
            </svg>
            <span><span>Second Address : </span>{{$contact->secondary_address}}</span>
          </li>
        </ul>
        <div class="cs-height_0 cs-height_lg_50"></div>
      </div>
      <div class="col-lg-6">
        <form action="{{ route('contact-application.store' , $application) }}" method="POST" class="row">
           @csrf
          <div class="col-sm-6">
            <label class="cs-primary_color">Full Name*</label>
            <input type="text" class="cs-form_field" name="applicant_name" required>
            <div class="cs-height_20 cs-height_lg_20"></div>
          </div>
          <div class="col-sm-6">
            <label class="cs-primary_color">Email*</label>
            <input type="text" class="cs-form_field" name="applicant_email" required>
            <div class="cs-height_20 cs-height_lg_20"></div>
          </div>
          <div class="col-sm-6">
            <label class="cs-primary_color">Mobile*</label>
            <input type="text" class="cs-form_field" name="phone" required>
            <div class="cs-height_20 cs-height_lg_20"></div>
          </div>
          <div class="col-lg-12">
            <label class="cs-primary_color">Write Project Details*</label>
            <textarea cols="30" rows="7" class="cs-form_field" name="details" required></textarea>
            <div class="cs-height_25 cs-height_lg_25"></div>
          </div>
          <div class="col-lg-12">
            <button class="cs-btn cs-style1" type="submit">
              <span>Send Message</span>             
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="cs-height_150 cs-height_lg_80"></div>
  <div class="cs-google_map cs-bg" data-src="assets/img/map_img.jpeg">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96652.27317354927!2d-74.33557928194516!3d40.79756494697628!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3a82f1352d0dd%3A0x81d4f72c4435aab5!2sTroy+Meadows+Wetlands!5e0!3m2!1sen!2sbd!4v1563075599994!5m2!1sen!2sbd" allowfullscreen></iframe>
  </div>
  <div class="cs-height_50 cs-height_lg_40"></div>
@endsection