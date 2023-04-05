<!-- Start Footer -->
<footer class="cs-fooer">
    <div class="cs-fooer_main">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <div class="cs-footer_item">
                        <div class="cs-text_widget">
                            <h2>bugsbunnytech</h2>
                            <p> Welcome to BugsBunny Tech, your gateway to innovative and reliable software solutions </p>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-3 col-sm-6">
                    <div class="cs-footer_item">
                        <h2 class="cs-widget_title">Services</h2>
                        <ul class="cs-menu_widget cs-mp0">
                            <li>
                                <a href="javascript:void(0)">Web Development</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">APP development</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">Digital marketing</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"> Blockchain development</a>
                            </li>
                        </ul>
                    </div>
                </div> --}}
                <div class="col-lg-6 col-sm-6">
                    <div class="cs-footer_item">
                        <h2 class="c-widget_title">Contact Us</h2>
                        <ul class="cs-menu_widget cs-mp0">
                            <li>
                                <p>Main Address : {{$contact->main_address}}</p>
                            </li>
                            <li>
                                <p>Second Address : {{$contact->secondary_address}}</p>
                            </li>

                            <li>{{$contact->main_phone_no}}</li>
                            <li>{{$contact->secondary_phone_no}}</li>
                            <li>{{$contact->email}}</li>
                        </ul>
                    </div>
                </div>
                {{-- <div class="col-lg-3 col-sm-6">
          <div class="cs-footer_item">
            <h2 class="cs-widget_title">Subscribe</h2>
            <div class="cs-newsletter cs-style1">
              <form action="#" class="cs-newsletter_form">
                <input type="email" class="cs-newsletter_input" placeholder="example@gmail.com" />
                <button class="cs-newsletter_btn">
                  <span>Send</span>
                </button>
              </form>
              <div class="cs-newsletter_text"> At vero eos et accusamus et iusto odio as part dignissimos ducimus qui blandit. </div>
            </div>
          </div>
        </div> --}}
            </div>
        </div>
    </div>
    <div class="container">
        <div class="cs-bottom_footer">
            <div class="cs-bottom_footer_left">
                <div class="cs-copyright">Copyright © 2023 bugsbunnytech.</div>
            </div>
            {{-- <div class="cs-bottom_footer_right">
        <ul class="cs-footer_links cs-mp0">
          <li>
            <a href="#">Terms of Use</a>
          </li>
          <li>
            <a href="#">Privacy Policy</a>
          </li>
        </ul>
      </div> --}}
        </div>
    </div>
</footer>
<!-- End Footer -->
