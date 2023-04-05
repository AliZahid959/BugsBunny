  <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
      <div class="app-brand demo">
          <a href="{{route('home')}}" class="app-brand-link">
              <span class="app-brand-logo demo">
              </span>
              <span class="app-brand-text demo menu-text fw-bolder ms-2"> bugsbunnytech
              </span>
          </a>

          <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm align-middle"></i>
          </a>
      </div>

      <div class="menu-inner-shadow"></div>

      <ul class="menu-inner py-1">
          <!-- Dashboard -->
          <li class="menu-item active">
              <a href="{{route('home')}}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-home-circle"></i>
                  <div data-i18n="Analytics">Dashboard</div>
              </a>
          </li>

          <!-- Layouts -->
          <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-wrench"></i>
                  <div data-i18n="Layouts">Services</div>
              </a>

              <ul class="menu-sub">
                  <li class="menu-item {{Route::is('service.create') ? 'active' : ''}}" >
                      <a href="{{route('service.create')}}" class="menu-link">
                          <div data-i18n="Without menu">Add New Service</div>
                      </a>
                  </li>
                  <li class="menu-item {{Route::is('service.index') ? 'active' : ''}}">
                      <a href="{{route('service.index')}}" class="menu-link">
                          <div data-i18n="Without navbar">View All Services</div>
                      </a>
                  </li>
              </ul>
          </li>

           <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                  <i class="menu-icon tf-icons bx bx-layout"></i>
                  <div data-i18n="Layouts">Portfolio</div>
              </a>

              <ul class="menu-sub">
                  <li class="menu-item {{Route::is('work.create') ? 'active' : ''}}">
                      <a href="{{route('work.create')}}" class="menu-link">
                          <div data-i18n="Without menu">Add New Project</div>
                      </a>
                  </li>
                  <li class="menu-item">
                      <a href="{{route('work.index')}}" class="menu-link">
                          <div data-i18n="Without navbar">View All Projects</div>
                      </a>
                  </li>
              </ul>
          </li>

          <li class="menu-item ">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bxs-user-plus"></i>
                  <div data-i18n="Layouts">Our Team</div>
              </a>

              <ul class="menu-sub">
                  <li class="menu-item {{Route::is('team.create') ? 'active' : ''}}">
                      <a href="{{route('team.create')}}" class="menu-link">
                          <div data-i18n="Without menu">Add New Members</div>
                      </a>
                  </li>
                  <li class="menu-item {{Route::is('team.index') ? 'active' : ''}}">
                      <a href="{{route('team.index')}}" class="menu-link">
                          <div data-i18n="Without navbar">View All Members</div>
                      </a>
                  </li>
              </ul>
          </li>

           <li class="menu-item ">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bxs-user-plus"></i>
                  <div data-i18n="Layouts">Careers</div>
              </a>

              <ul class="menu-sub">
                  <li class="menu-item {{Route::is('careers.create') ? 'active' : ''}}">
                      <a href="{{route('careers.create')}}" class="menu-link">
                          <div data-i18n="Without menu">Add New Job</div>
                      </a>
                  </li>
                  <li class="menu-item {{Route::is('careers.index') ? 'active' : ''}}">
                      <a href="{{route('careers.index')}}" class="menu-link">
                          <div data-i18n="Without navbar">View All Jobs</div>
                      </a>
                  </li>
              </ul>
          </li>

           <li class="menu-item">
              <a href="{{route('contact-application.index')}}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-book-bookmark"></i>
                  <div data-i18n="Analytics">Contact Applications</div>
              </a>
          </li>

            <li class="menu-item">
              <a href="{{route('job-application.index')}}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-book-bookmark"></i>
                  <div data-i18n="Analytics">Jobs Applications</div>
              </a>
          </li>

          <li class="menu-item">
              <a href="{{route('about.settings')}}" class="menu-link">
                  <i class="menu-icon tf-icons bx bx-layout"></i>
                  <div data-i18n="Analytics">About Page Manager</div>
              </a>
          </li>

           <li class="menu-item">
              <a href="{{route('contact.settings')}}" class="menu-link">
            <i class="menu-icon tf-icons bx bxs-user-plus"></i>
                  <div data-i18n="Analytics">Contact Page Manager</div>
              </a>
          </li>

           <li class="menu-item">
              <a href="{{route('setting')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-wrench"></i>
                  <div data-i18n="Analytics">General Site Settings</div>
              </a>
          </li>

      
      </ul>
  </aside>
