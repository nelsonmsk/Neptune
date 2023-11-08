<!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light fixed-top py-4 d-block" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container "><a class="navbar-brand" href="{{ config('app.url')}}">{{$rtemplate['appDefaults']->appTitle}}</a>
          <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navigation-index"  aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse  border-lg-0 mt-4 mt-lg-0 justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto pt-2 pt-lg-0 font-base">
              <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link fw-medium active" aria-current="page" href="{{ config('app.url')}}/#">Home</a></li>
              <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" href="{{ config('app.url')}}/#about">About</a></li>
              <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" href="{{ config('app.url')}}/#services">Services</a></li>			  
              <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" href="{{ config('app.url')}}/#projects">Projects</a></li>			  
              <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" href="{{ config('app.url')}}/#pricingTable">Pricing</a></li>
              <li class="nav-item px-2" data-anchor="data-anchor"><a class="nav-link" href="{{ config('app.url')}}/#contact">Contact</a></li>
            </ul>
            <form class="ps-lg-5"><a class="btn btn-fs btn-primary order-1 order-lg-0" href="{{ config('app.url') }}/login">login
                <span class="bi bi-person-fill"></a></form>
          </div>
        </div>
      </nav>
<!-- End Navbar -->