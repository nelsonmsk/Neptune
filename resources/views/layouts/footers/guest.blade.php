<footer>
    <section class="py-0 py-xxl-6" id="footer">
        <div class="bg-holder" style="background-image:url({{ asset('images/gallery/footer-bg.png') }});background-position:center;background-size:cover;">
        </div>
        <!--/.bg-holder--> 

        <div class="container">
          <div class="row min-vh-75 min-vh-xl-50 pt-10">
			<div class="col-lg-4 md-5 mb-lg-0">
				<!-- Theme's logo -->
				 <h5 class="lh-lg fw-bold text-white"><a class="footer-name" href="">
					@if ($rtemplate['appDefaults']->appTitle)
						{{$rtemplate['appDefaults']->appTitle}}
					@else
						{{ __('Neptune') }}
					@endif
				</a></h5>
				<!-- Webpixels' mission -->
				@if ($rtemplate['appDefaults']->contactText)
					<p class="mt-4 text-sm opacity-8 pr-lg-4">{{$rtemplate['appDefaults']->contactText}}</p>							
					
				@else						
					<p class="mt-4 text-sm opacity-8 pr-lg-4">Neptune attempts to bring the best development experience to designers and developers by offering the tools needed for having a quick and solid start in most web projects.</p>
				@endif
				<!-- Social -->
				<ul class="nav mt-4">
					<li class="nav-item">
					@if ($rtemplate['appDefaults']->twitter)
						<a class="nav-link pl-0" href="{{$rtemplate['appDefaults']->twitter}}" target="_blank">
							<i class="fa fa-twitter"></i>
						</a>
					@else
						<a class="nav-link pl-0" href="https://twitter.com/neptune" target="_blank">
							<i class="fa fa-twitter"></i>
						</a>								
					@endif
					</li>
					<li class="nav-item">
					@if ($rtemplate['appDefaults']->facebook)
						<a class="nav-link" href="{{$rtemplate['appDefaults']->facebook}}" target="_blank">
							<i class="fa fa-facebook"></i>
						</a>
					@else
						<a class="nav-link" href="https://facebook.com/neptune" target="_blank">
							<i class="fa fa-facebook"></i>
						</a>								
					@endif
					</li>
					<li class="nav-item">
					@if ($rtemplate['appDefaults']->instagram)							
						<a class="nav-link" href="{{$rtemplate['appDefaults']->instagram}}" target="_blank">
							<i class="fa fa-instagram"></i>
						</a>
					@else
						<a class="nav-link" href="https://www.instagram.com/neptune" target="_blank">
							<i class="fa fa-instagram"></i>
						</a>								
					@endif
					</li>
					<li class="nav-item">
					@if ($rtemplate['appDefaults']->linkedin)							
						<a class="nav-link" href="{{$rtemplate['appDefaults']->linkedin}}" target="_blank">
							<i class="fa fa-linkedin"></i>
						</a>
					@else
						<a class="nav-link" href="https://www.linkedin.com/neptune" target="_blank">
							<i class="fa fa-linkedin"></i>
						</a>								
					@endif
					</li>
				</ul>
			</div>	
            <div class="col-lg-2 col-6 col-sm-4 ml-lg-auto mb-5 mb-lg-0">
              <h5 class="lh-lg fw-bold text-white">Company</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">			  
                <li class="lh-lg"><a class="text-200 text-decoration-none" href="{{ config('app.url')}}/#about">About</a></li>
                <li class="lh-lg"><a class="text-200 text-decoration-none" href="{{ config('app.url')}}/#projects">Projects</a></li>
                <li class="lh-lg"><a class="text-200 text-decoration-none" href="{{ config('app.url')}}/#pricingTable">Pricing Plans</a></li>
                <li class="lh-lg"><a class="text-200 text-decoration-none" href="{{ config('app.url')}}/#contact">Contact</a></li>
                <li class="lh-lg"><a class="text-200 text-decoration-none" href="#!">FAQ</a></li>				
              </ul>
            </div>					
            <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
              <h5 class="lh-lg fw-bold text-white">Services</h5>
              <ul class="list-unstyled mb-md-4 mb-lg-0">
                <li class="lh-lg"><a class="text-200 text-decoration-none" href="{{ config('app.url')}}/#services">Accounting Services</a></li>
                <li class="lh-lg"><a class="text-200 text-decoration-none" href="{{ config('app.url')}}/#services">Tax, Compliance &amp Payroll</a></li>
                <li class="lh-lg"><a class="text-200 text-decoration-none" href="{{ config('app.url')}}/#services">Financial Services</a></li>
                <li class="lh-lg"><a class="text-200 text-decoration-none" href="{{ config('app.url')}}/#services">Investment Services</a></li>
                <li class="lh-lg"><a class="text-200 text-decoration-none" href="{{ config('app.url')}}/#services">Growth &amp Funding Access</a></li>				
              </ul>
            </div>
            <div class="col-lg-2 col-6 col-sm-4 mb-5 mb-lg-0">
              <h5 class="lh-lg fw-bold text-white">Newsletter</h5>
              <ul class="list-unstyled list-inline mb-6 mb-md-0">
			  <li class="lh-lg">
					<form id="subscription-form">
						<input type="email" name="EMAIL" required="required" placeholder="Your Email" class="input-email" />
						<button type="submit" id="subscription-btn" class="fancy-button btn-solid-reg zoom">
							Subscribe
							<span class="icon">
								<i class="fa fa-sign-in"></i>
							</span>
						</button>
					</form>
				</li>
              </ul>
            </div>
          </div>
          <hr class="divider divider-fade divider-dark my-4" />
          <div class="row flex-center pb-3">
            <div class="col-md-12 order-0">
              <p class="text-200 text-center text-md-start">All rights Reserved &copy; {{$rtemplate['appDefaults']->appTitle}}, <script> document.write(new Date().getFullYear())</script>. By Nelsonmsk</p>
            </div>
          </div>
        </div>
	      <!-- Back To Top Button -->
		<div class="scroll-up">
			<a href="#totop"><i class="fa fa-angle-up"></i></a>
		</div>
    <!-- end of back to top button -->			
    </section>

</footer>