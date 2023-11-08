<!-- partial:partials/_sidebar.html -->
	<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{url('dashboard')}}">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#user" aria-expanded="false" aria-controls="user">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">App User</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="user">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('profiles')}}">Profile</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('users')}}">Manage</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('appDefaults')}}">
              <i class="icon-star menu-icon"></i>
              <span class="menu-title">App Defaults</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('services')}}">
              <i class="icon-cog menu-icon"></i>
              <span class="menu-title">Services</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#portfolio" aria-expanded="false" aria-controls="portfolio">
              <i class="icon-briefcase menu-icon"></i>
              <span class="menu-title">Porfolio</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="portfolio">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('projectTypes')}}">Project Types</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('projects')}}">Projects</a></li>				
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('clients')}}">
              <i class="icon-book menu-icon"></i>
              <span class="menu-title">Clients</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('messages')}}">
              <i class="icon-inbox menu-icon"></i>
              <span class="menu-title">Messages</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('galleryImages')}}">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Images Gallery</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('mailSubscriptions')}}">
              <i class="icon-mail menu-icon"></i>
              <span class="menu-title">Mail Subscriptions</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{url('newsletters')}}">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Newsletters</span>
            </a>
          </li>		  
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#more" aria-expanded="false" aria-controls="more">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">More</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="more">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{url('banners')}}"> Banners </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('features')}}"> Features </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('plans')}}"> Plans & Pricing </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('testimonials')}}"> Testimonials </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{url('supports')}}"> Supports </a></li>			
              </ul>
            </div>
          </li>
        </ul>
    </nav>
<!-- partial -->