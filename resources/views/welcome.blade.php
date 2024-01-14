 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/styles.css') }}" rel="stylesheet"> 
@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'home', 'titlePage'=> 'Authhome','rtemplate' => $rtemplate])


@section('content')



  @auth
    <div class="container-fluid page-cover " id="home">
		<div class="cover">
				<div class="intro-text">
				</div>
				<div class="page-text">
						<p>Hie {{auth()->user()->name}} : Welcome to <span> </span></p>
						
				</div>
		</div>	
    </div>
  @else
      <section id="home" class="home">
        <div class="bg-holder" style="background-color
		:white;background-position:center;background-size:cover;">
        </div>
        <!--/.bg-holder-->
		<div class="container ">
			<div class="row ">
				<div class="col-md-7 col-lg-6 text-md-start text-center">
					<div id="customCarousel1" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
						  <div class="carousel-item active">
							<div class="container ">
							  <div class="row rw-align">
								<div class="col-md-12 col-lg-12 col-tl">
								  <h1 class="text-white fs-md-5 fs-lg-6"> Fast and Quick Money Back Guarantee</h1>
								  <p class="text-light">More Value for your time and money </p>
								  <a class="btn btn-primary btn-fs" href="#" role="button">Get In Touch</a>
								  <a class="btn btn-secondary btn-fs btn-plain-lg" href="#" role="button">Get Quote</a>
								</div>
							  </div>
							</div>
						  </div>
						  <div class="carousel-item ">
							<div class="container ">
							  <div class="row rw-align">
								<div class="col-md-12 col-lg-12 col-tl ">
								  <h1 class="text-white fs-md-5 fs-lg-6"> Easy and Affordable Investment</h1>
								  <p class="text-light">Affordable packages for your satisfaction  </p>
								  <a class="btn btn-primary btn-fs" href="#" role="button">Get In Touch</a>
								  <a class="btn btn-secondary btn-fs btn-plain-lg" href="#" role="button">Get Quote</a>
								</div>
							  </div>
							</div>
						  </div>
						  <div class="carousel-item ">
							<div class="container ">
							  <div class="row rw-align">
								<div class="col-md-12 col-lg-12 col-tl">
								  <h1 class="text-white fs-md-5 fs-lg-6"> Great Personal and Financial Solutions</h1>
								  <p class="text-light text-sz">Find a solution thats suits your needs and budget  </p>
								  <a class="btn btn-primary btn-fs" href="#" role="button">Get In Touch</a>
								  <a class="btn btn-secondary btn-fs btn-plain-lg" href="#" role="button">Get Quote</a>
								</div>
							  </div>
							</div>
						  </div>						  
						</div>
						<ol class="carousel-indicators">
						  <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
						  <li data-target="#customCarousel1" data-slide-to="1"></li>
						  <li data-target="#customCarousel1" data-slide-to="2"></li>
						</ol>
					</div>
				</div>
					<div class="col-md-5 col-lg-6 order-0 order-md-1 align-self-center"><img class="w-100" src="img/hero-img.png" alt="..." /></div>
			</div>
		</div>
      </section>


      <!-- ============================================-->
	<section  id="about" class="pt-8 bg-soft-primary">  
	      <!-- Details 1 -->
			<div id="details" class="basic-1">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-xxl-5 text-center mx-auto">
						  <h2>About Us <div class="header-strips-two"></div></h2>
						  <p class="mb-4">Get to know more about who we are.</p>
						</div>						
					</div>					
					<div class="row">
						@if($rtemplate['appDefaults']->count() == 0)	
							<div class="col-lg-6 col-xl-7">
								<div class="image-container">
									<img class="img-fluid" src="img/hero-img1.png" alt="alternative">
								</div> <!-- end of image-container -->
							</div> <!-- end of col -->
							<div class="col-lg-6 col-xl-5">
								<div class="text-container">
									<h2>{{$rtemplate['appDefaults']->appTitle}} </h2>
									<p>{{$rtemplate['appDefaults']->aboutText}}
									</p>
								</div> <!-- end of text-container -->
							</div> <!-- end of col -->
						@else					
							<div class="col-lg-6 col-xl-7">
								<div class="image-container">
									<img class="img-fluid" src="img/hero-img1.png" alt="alternative">
								</div> <!-- end of image-container -->
							</div> <!-- end of col -->
							<div class="col-lg-6 col-xl-5">
								<div class="text-container">
									<h2>Top Ranked Financial Services Provider In The Industry </h2>
									<p>Maecenas fringilla quam posuere, pellentesque est nec, gravida turpis. Integer vitae mollis felis. Integer id quam id tellus hendrerit laciniad binfer
										Sed id dui rutrum, dictum urna eu, accumsan turpis. Fusce id auctor velit, sed viverra dui rem dina
									</p>
								</div> <!-- end of text-container -->
							</div> <!-- end of col -->
						@endif
					</div> <!-- end of row -->
				</div> <!-- end of container -->
			</div> <!-- end of basic-1 -->
	</section>
    <!-- end of details 1 -->
	
      <!--serviceS Section begin ============================-->
      <section id="services" class="pt-8">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-xxl-5 text-center mx-auto">
              <h2>What Services We Are Offering <div class="header-strips-two"></div></h2>
              <p class="mb-4">Get the best financial services at the price you can afford</p>
            </div>
          </div>
          <div class="row align-items-center mt-5">
            <div class="col-md-5 col-lg-6 order-md-1 order-0"><img class="w-100" src="images/svg/illustrations/illustration-6.svg" alt="" /></div>
            <div class="col-md-7 col-lg-6 pe-lg-4 pe-xl-7">
				@if($rtemplate['features']->count() == 0)
					@foreach($rtemplate['features'] as $ft)				
						<div class="d-flex align-items-start"><span class="flaticon-weath"></span>
							<div class="flex-1">
							   <h5>{{$ft->text}}</h5>
							   <p class="text-muted mb-4">{{$ft->body}}</p>
							</div>
						</div>		
					@endforeach
				@else			
				  <div class="d-flex align-items-start"><span class="flaticon-accountant"></span>
					<div class="flex-1">
					  <h5>Accounting</h5>
					  <p class="text-muted mb-4">Beside the support we provide you with various tools to be able to host and manage your websites</p>
					</div>
				  </div>
				  <div class="d-flex align-items-start"><span class="flaticon-accounting-1"></span>
					<div class="flex-1">
					  <h5>Tax, Compliance & Payroll</h5>
					  <p class="text-muted mb-4">Be able to customize your plan over time if needed so you pay only for what you use</p>
					</div>
				  </div>
				  <div class="d-flex align-items-start"><span class="flaticon-wealth"></span>
					<div class="flex-1">
					  <h5>Financial Services</h5>
					  <p class="text-muted mb-4">We are the most reliable service provider, ready to give you a helping hand the fastest way possible 24/7</p>
					</div>
				  </div>
				  <div class="d-flex align-items-start"><span class="flaticon-teamwork"></span>
					<div class="flex-1">
					  <h5>Investment Portfolio</h5>
					  <p class="text-muted mb-4">Beside the support we provide you with various tools to be able to host and manage your websites</p>
					</div>
				  </div>
				  <div class="d-flex align-items-start"><span class="flaticon-budget"></span>
					<div class="flex-1">
					  <h5>Growth &amp Funding Access</h5>
					  <p class="text-muted mb-4">Be able to customize your plan over time if needed so you pay only for what you use</p>
					</div>
				  </div>
				@endif
            </div>
          </div>
        </div>
        <!-- end of .container-->

      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->




      <!-- ============================================-->
	<section id="section-details" class="pt-8 bg-soft-primary">  
	      <!-- Details 1 -->
			<div id="details" class="basic-2">
				<div class="container">				
					<div class="row">
						<div class="col-lg-6 col-xl-7">
							<div class="image-container">
								<img class="img-fluid" src="img/values-2.png" alt="alternative">
							</div> <!-- end of image-container -->
						</div> <!-- end of col -->
						<div class="col-lg-6 col-xl-5">
							<div class="text-container">
								@if($rtemplate['banners']->count() == 0)
									<h2>{{$rtemplate['banners'][0]->heading}}</h2>
									<p>{{$rtemplate['banners'][0]->body}}</p>	
								@else							
									<h2>Consult With Our Top Professional Accounting Advisors</h2>
									<p>Maecenas fringilla quam posuere, pellentesque est nec, gravida turpis. Integer vitae mollis felis. Integer id quam id tellus hendrerit laciniad binfer
										Sed id dui rutrum, dictum urna eu, accumsan turpis. Fusce id auctor velit, sed viverra dui rem dina
									</p>
								@endif
								<a class="btn btn-primary btn-fs" href="#contact">Get Guote</a>
							</div> <!-- end of text-container -->
						</div> <!-- end of col -->
					</div> <!-- end of row -->
				</div> <!-- end of container -->
			</div> <!-- end of basic-1 -->
	</section>
    <!-- end of details 1 -->

      <!-- ============================================-->
	<section id="section-details" class="pt-8">
		<div class="counter">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-xl-5">
						<div class="text-container">
							<h2>Some Facts About Our Achievements</h2>
								@if($rtemplate['banners']->count() != 0)
									<p>{{$rtemplate['banners'][1]->body}}
									</p>								
								@else								
									<p>In gravida vitae nulla vitae tincidunt imperdiet ante. Pellentesque aliquet mi eu tortor dictum, non imperdiet ante viverra. Phasellus eget enim orci flig rine bilo</p>
								@endif
							<!-- Counter -->
							<div class="counter-container">
								<div class="counter-cell">
									<div data-purecounter-start="0" data-purecounter-end="1250" data-purecounter-duration="2" class="purecounter">1</div>
									<div class="counter-info">Happy Customers</div>
								</div> <!-- end of counter-cell -->
								<div class="counter-cell orange">
									<div data-purecounter-start="0" data-purecounter-end="1380" data-purecounter-duration="2" class="purecounter">1</div>
									<div class="counter-info">Cases Solved</div>
								</div> <!-- end of counter-cell -->
							</div> <!-- end of counter-container -->
							<!-- end of counter -->

						</div> <!-- end of text-container -->
					</div> <!-- end of col -->
					<div class="col-lg-6 col-xl-7">
						<div class="image-container">
							<img class="img-fluid" src="images/details-2.svg" alt="alternative">
						</div> <!-- end of image-container -->
					</div> <!-- end of col -->
				</div> <!-- end of row -->
			</div> <!-- end of container -->
		</div> <!-- end of counter -->
		<!-- end of details 2 -->
	</section>

    <!-- Projects -->
	<section class="pt-8 bg-soft-primary" id="projects"> 
			<div id="projects" class="filter bg-gray">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-xxl-5 text-center mx-auto">
						  <h2>Browse Through Our Latest Projects <div class="header-strips-two"></div></h2>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-12">					
							<!-- Filter -->
							<div class="button-group filters-button-group">
								<button class="button is-checked" data-filter="*">ALL</button>
									@if($rtemplate['projectTypes']->count() == 0)
										@foreach($rtemplate['projectTypes'] as $pt)
											<button class="button" data-filter=".$pt->name">{{$pt->name}}</button>
										@endforeach
									@else								
										<button class="button" data-filter=".accounting">ACCOUNTING</button>
										<button class="button" data-filter=".taxpayroll">TAX &amp PAYROLL</button>
										<button class="button" data-filter=".financial">FINANCIAL</button>
										<button class="button" data-filter=".investment">INVESTMENT</button>
										<button class="button" data-filter=".funding">FUNDING</button>					
									@endif
							</div> <!-- end of button group -->
							
							<div class="grid projects-container">
								@if($rtemplate['projectTypes']->count() == 0)
									@foreach($rtemplate['projectTypes'] as $pt)
										@if($rtemplate['projects']->count() != 0)	
											@foreach($rtemplate['projects'] as $pj)
												@if($pj->type == $pt->name)
													<div class="col-lg-4 col-md-6 element-item {{$pt->name}}">
														<a href="{{config('app.url')}}/projectView/{{$pt->id}}">
															@if($rtemplate['projectsImages']->count() != 0)
																@foreach($rtemplate['projectsImages'] as $pi)
																	@if($pi->ref_class == $pj->name)
																		<img src="{{ asset('storage/'.$pi->imagePath)}}" class="img-fluid" alt="alternative">
																	@endif
																@endforeach
															@else												
																<img class="img-fluid" src="{{asset('images/portfolio/p1.jpg')}}" alt="alternative">
															@endif
															<p><strong>{{$pj->name}}</strong> {{$pj->description}}</p>
														</a>
													</div>											  
												@endif
											@endforeach
										@endif
									@endforeach
								@else										
									<div class="col-lg-4 col-md-6 element-item taxpayroll">
										<a href="{{config('app.url')}}/projectView/1">
											<img class="img-fluid" src="{{asset('images/portfolio/p1.jpg')}}" alt="alternative">
											<p><strong>Online banking</strong> - pellentesque tincidunt leo eu laoreedt integer quis vanos compren</p>
										</a>
									</div>
									<div class="col-lg-4 col-md-6 element-item taxpayroll">
										<a href="{{config('app.url')}}/projectView/1">
											<img class="img-fluid" src="{{asset('images/portfolio/p2.jpg')}}" alt="alternative">
											<p><strong>Loans company</strong> - odio semper, interdum orci molestie, mattis lectus pellentesq aliqu</p>
										</a>
									</div>
									<div class="col-lg-4 col-md-6 element-item investment">
										<a href="{{config('app.url')}}/projectView/1">
											<img class="img-fluid" src="{{asset('images/portfolio/p3.jpg')}}" alt="alternative">
											<p><strong>Refinance firm</strong> - arcu a neque congue finibus doneci malesuada et purus melan bris</p>
										</a>
									</div>
									<div class="col-lg-4 col-md-6 element-item investment taxpayroll">
										<a href="{{config('app.url')}}/projectView/1">
											<img class="img-fluid" src="{{asset('images/portfolio/p4.jpg')}}" alt="alternative">
											<p><strong>Financial products</strong> - id aliquam ut malesuada eros utr varius blandit aliquam tinci bist</p>
										</a>
									</div>
									<div class="col-lg-4 col-md-6 element-item investment funding">
										<a href="{{config('app.url')}}/projectView/1">
											<img class="img-fluid" src="{{asset('images/portfolio/p5.jpg')}}" alt="alternative">
											<p><strong>Credit cards</strong> - magna a feugiat cras a semper tellus in rhoncus vehicula tellus rugo</p>
										</a>
									</div>
									<div class="col-lg-4 col-md-6 element-item accounting financial">
										<a href="{{config('app.url')}}/projectView/1">
											<img class="img-fluid" src="{{asset('images/portfolio/p6.jpg')}}" alt="alternative">
											<p><strong>Software robots</strong> - vel sodales dolor donec a est sapien integer pharetr bilom conva</p>
										</a>
									</div>
									<div class="col-lg-4 col-md-6 element-item accounting funding">
										<a href="{{config('app.url')}}/projectView/1">
											<img class="img-fluid" src="{{asset('images/portfolio/p7.jpg')}}" alt="alternative">
											<p><strong>Company control</strong> - ut quam aliquam elemo de vestibulum fringilla porttitor vanic tres</p>
										</a>
									</div>
									<div class="col-lg-4 col-md-6 element-item accounting financial">
										<a href="{{config('app.url')}}/projectView/1">
											<img class="img-fluid" src="{{asset('images/portfolio/p8.jpg')}}" alt="alternative">
											<p><strong>Audit reports</strong> - sed tempor, metus vel pharetra finibus, est ante hendrerit augue</p>
										</a>
									</div>
									<div class="col-lg-4 col-md-6 element-item accounting financial">
										<a href="{{config('app.url')}}/projectView/1">
											<img class="img-fluid" src="{{asset('images/portfolio/p9.jpg')}}" alt="alternative">
											<p><strong>Big business</strong> - aliquam semper molestie nisi, at porttitor lacus suscipit in mole richter</p>
										</a>
									</div>
								@endif
							</div> <!-- end of grid -->
							<!-- end of filter -->
							
						</div> <!-- end of col -->
					</div> <!-- end of row -->
				</div> <!-- end of container -->
			</div> <!-- end of filter -->
    <!-- end of projects -->
	</section>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-6" id="pricingTable">
        <div class="container pricing">
          <div class="row">
            <div class="col-lg-6 col-xxl-5 text-center mx-auto">
              <h2>Check Out Our Pricing Plans <div class="header-strips-two"></div></h2>
              <p class="mb-4">Get the best financial and investment services at the price you can afford</p>
            </div>
          </div>		  
          <div class="row">
			@if($rtemplate['plans']->count() == 0)
				@foreach($rtemplate['plans'] as $plan)
					<div class="col-sm-6 col-xl-3 mb-3">
					  <div class="card card-span py-4  border-top border-4 border-primary">
						<div class="card-body">
						  <div class="text-center"><span class="flaticon-accountant"></span>
							<h5 class="my-3">{{$plan->name}}</h5>
							<ul class="list-unstyled">
							  <li>{{$plan->description}}</li>
							</ul>
						  </div>
						</div>
						<div class="border-top bg-white text-center pt-3 pb-0">
						  <p class="mb-0">Get started at </p>
						  <div class="d-flex justify-content-center">
							<h3 class="fw-normal">${{$plan->cost}}</h3><span class="d-flex align-items-center">/{{$plan->duration}}</span>
						  </div>
						</div>
					  </div>
					</div>		
				@endforeach
			@else
            <div class="col-sm-6 col-xl-3 mb-3">
              <div class="card card-span py-4  border-top border-4 border-primary">
                <div class="card-body">
                  <div class="text-center"><span class="flaticon-accountant"></span>
                    <h5 class="my-3">PERSONAL</h5>
                    <ul class="list-unstyled">
                      <li>Increase the rank of you</li>
                      <li>website by the higher speed</li>
                    </ul>
                  </div>
                </div>
                <div class="border-top bg-white text-center pt-3 pb-0">
                  <p class="mb-0">Get started at </p>
                  <div class="d-flex justify-content-center">
                    <h3 class="fw-normal">%44.99</h3><span class="d-flex align-items-center">/month</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3 mb-3">
              <div class="card card-span py-4 border-top border-4 border-primary">
                <div class="card-body">
                  <div class="text-center"><span class="flaticon-accounting-1"></span>
                    <h5 class="my-3">BUSINESS</h5>
                    <ul class="list-unstyled">
                      <li>Be able to conceal your ID </li>
                      <li>whenever needed</li>
                    </ul>
                  </div>
                </div>
                <div class="border-top bg-white text-center pt-3 pb-0">
                  <p class="mb-0">Get started at </p>
                  <div class="d-flex justify-content-center">
                    <h3 class="fw-normal">$74.99</h3><span class="d-flex align-items-center">/month</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3 mb-3">
              <div class="card card-span py-4 border-top border-4 border-primary">
                <div class="card-body">
                  <div class="text-center"><span class="flaticon-wealth"></span>
                    <h5 class="my-3">ULTIMATE</h5>
                    <ul class="list-unstyled">
                      <li>Super convenient and highly </li>
                      <li>customizable option</li>
                    </ul>
                  </div>
                </div>
                <div class="border-top bg-white text-center pt-3 pb-0">
                  <p class="mb-0">Get started at </p>
                  <div class="d-flex justify-content-center">
                    <h3 class="fw-normal">$114.99</h3><span class="d-flex align-items-center">/month</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-xl-3 mb-3">
              <div class="card card-span py-4 border-top border-4 border-primary">
                <div class="card-body">
                  <div class="text-center"><span class="flaticon-budget"></span>
                    <h5 class="my-3">PREMIUM</h5>
                    <ul class="list-unstyled">
                      <li>With low cost and high variety</li>
                      <li>of tools, plugins of your choice</li>
                    </ul>
                  </div>
                </div>
                <div class="border-top bg-white text-center pt-3 pb-0">
                  <p class="mb-0">Get started at </p>
                  <div class="d-flex justify-content-center">
                    <h3 class="fw-normal">$134.99</h3><span class="d-flex align-items-center">/month</span>
                  </div>
                </div>
              </div>
            </div>
			@endif			
          </div>
        </div>
        <!-- end of .container-->
      </section>
      <!-- <section> close ============================-->

      <!-- ==============Details section==============================-->
	<section id="section-details" class="pt-8 bg-soft-primary">  
	      <!-- Details 1 -->
			<div id="details" class="basic-1">
				<div class="container">				
					<div class="row">
						<div class="col-lg-6 col-xl-5">
							<div class="text-container">
								@if($rtemplate['banners']->count() == 0)
									<h2>{{$rtemplate['banners'][2]->heading}}</h2>
									<p>{{$rtemplate['banners'][2]->body}}</p>	
								@else							
									<h2>Invest Your Capital &amp Start Earning Today</h2>
									<p>Maecenas fringilla quam posuere, pellentesque est nec, gravida turpis. Integer vitae mollis felis. Integer id quam id tellus hendrerit laciniad binfer
										Sed id dui rutrum, dictum urna eu, accumsan turpis. Fusce id auctor velit, sed viverra dui rem dina
									</p>
								@endif
								<a class="btn btn-primary btn-fs" href="#">Get Guote</a>
							</div> <!-- end of text-container -->
						</div> <!-- end of col -->
						<div class="col-lg-6 col-xl-7">
							<div class="image-container">
								<img class="img-fluid" src="img/values-2.png" alt="alternative">
							</div> <!-- end of image-container -->
						</div> <!-- end of col -->						
					</div> <!-- end of row -->
				</div> <!-- end of container -->
			</div> <!-- end of basic-1 -->
	</section>
    <!-- end of details 1 -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="pt-6 testimonials">
      <div class="container animated" data-animation="bounceInLeft" data-animation-delay="700">
        <div class="row">
            <div class="col-lg-6 col-xxl-5 text-center mx-auto">
              <h2>Valued Clients Testimonials  <div class="header-strips-two"></div></h2>
              <p class="mb-4">What they're saying about us</p>
            </div>
         </div>
        <div class="testimonials-slider swiper">
          <div class="swiper-wrapper">
			@if($rtemplate['testimonials']->count() == 0)				
				@foreach($rtemplate['testimonials'] as $ts)
					<div class="swiper-slide">
					  <div class="testimonial-item">
						<p>
						  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
						  {{$ts->comment}}
						  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
						</p>
						<img src="{{ asset('images/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
						<h3>{{ $ts->name}}</h3>
						<h4>{{ $ts->title}}</h4>
					  </div>
					</div><!-- End testimonial item -->	
				@endforeach
			@else
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ asset('images/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ asset('images/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ asset('images/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ asset('images/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="{{ asset('images/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->
			@endif
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->
	
	
	<section class="pt-6">
			<!-- Contact -->
			<div id="contact" class="form-1">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							@if($rtemplate['appDefaults']->count() == 0)	
								<p class="p-heading">{{$rtemplate['appDefaults']->contactText}}</p>
								<ul class="list-unstyled li-u6">
									<li><i class="fa fa-map-marker"></i> &nbsp;22 Praesentum, Pharetra Fin, CB 12345, KL</li>
									<li><i class="fa fa-phone"></i> &nbsp;<a href="{{$rtemplate['appDefaults']->phone}}">{{$rtemplate['appDefaults']->phone}}</a></li>
									<li><i class="fa fa-envelope"></i> &nbsp;<a href="{{$rtemplate['appDefaults']->email}}">{{$rtemplate['appDefaults']->email}}</a></li>
								</ul>							
							@else
								<p class="p-heading">Vel malesuada sapien condimentum nec. Fusce interdum nec urna et finibus pulvinar tortor id</p>
								<ul class="list-unstyled li-u6">
									<li><i class="fa fa-map-marker"></i> &nbsp;22 Praesentum, Pharetra Fin, CB 12345, KL</li>
									<li><i class="fa fa-phone"></i> &nbsp;<a href="tel:00817202212">+81 720 2212</a></li>
									<li><i class="fa fa-envelope"></i> &nbsp;<a href="mailto:lorem@ipsum.com">lorem@ipsum.com</a></li>
								</ul>
							@endif
						</div> <!-- end of col -->
					</div> <!-- end of row -->
					<div class="row">
						<div class="col-lg-10 offset-lg-1">
							
							<!-- Contact Form -->
							<form>
								<div class="form-group">
									<input type="text" class="form-control-input" placeholder="Name" required>
								</div>
								<div class="form-group">
									<input type="email" class="form-control-input" placeholder="Email" required>
								</div>
								<div class="form-group">
									<select class="form-control-select" required>
										<option class="select-option" value="" disabled selected>Project type</option>
										@if($rtemplate['projectTypes']->count() == 0)
											@foreach($rtemplate['projectTypes'] as $pt)
												<option class="select-option" value="{{$pt->name}}">{{$pt->name}}</option>
											@endforeach
										@else
											<option class="select-option" value="accounting">Accounting</option>
											<option class="select-option" value="taxpayroll">Tax, Compliance &amp Payroll</option>
											<option class="select-option" value="financial">Financial Services</option>
											<option class="select-option" value="investment">Investment Portfolio</option>
											<option class="select-option" value="funding">Growth &amp Funding Access</option>
										@endif										
									</select>
								</div>
								<div class="form-group">
									<textarea class="form-control-textarea" placeholder="Message" required></textarea>
								</div>
								<div class="form-group">
									<button type="submit" class="form-control-submit-button">Submit</button>
								</div>
							</form>
							<!-- end of contact form -->

						</div> <!-- end of col -->
					</div> <!-- end of row -->
				</div> <!-- end of container -->
			</div> <!-- end of form-1 -->
			<!-- end of contact -->
	</section>
      <!-- ============================================-->
	  
	  
      <!-- <section> begin ============================-->
      <section class="pb-lg-0 pt-md-8 py-0">
         <!-- CLIENTS =================================== -->          
         <div id="clients" class="p-top-50 p-bot-50">
            <div class="container">
               <!--Client logo-->
			   <div class="row align-items-center justify-content-xl-between py-5 border-klean">
				   <div id="carousel-our-clients" class="owl-carousel text-center margin-top-20">
					@if($rtemplate['carouselImages']->count() > 5)
						@foreach($rtemplate['carouselImages'] as $ci)	
							<div class="our-clients"> <a href="#"> <img src="{{ asset('storage/'.$ci->imagePath)}}" height="40" alt="" /> </a> </div>
						@endforeach			   
					@else					   
					  <div class="our-clients"> <a href="#"> <img src="{{ asset('images/gallery/robinhood.png') }}" height="40" alt="" /> </a> </div>
					  <div class="our-clients"> <a href="#"> <img src="{{ asset('images/gallery/reddit.png') }}" height="40" alt="" /> </a> </div>
					  <div class="our-clients"> <a href="#"> <img src="{{ asset('images/gallery/upcase.png') }}"  height="40" alt="" /> </a> </div>	  
					  <div class="our-clients"> <a href="#"> <img src="{{ asset('images/gallery/hubspot.png') }}"  height="40" alt="" /> </a> </div>
					  <div class="our-clients"> <a href="#"> <img src="{{ asset('images/gallery/tunein.png') }}"  height="40" alt="" /> </a> </div>
					  <div class="our-clients"> <a href="#"> <img src="{{ asset('images/gallery/robinhood.png') }}"  height="40" alt="" /> </a> </div>
					  <div class="our-clients"> <a href="#"> <img src="{{ asset('images/gallery/reddit.png') }}"  height="40" alt="" /> </a> </div>
					  <div class="our-clients"> <a href="#"> <img src="{{ asset('images/gallery/upcase.png') }}"  height="40" alt="" /> </a> </div>
					  <div class="our-clients"> <a href="#"> <img src="{{ asset('images/gallery/hubspot.png') }}"  height="40" alt="" /> </a> </div>
					  <div class="our-clients"> <a href="#"> <img src="{{ asset('images/gallery/tunein.png') }}"  height="40" alt="" /> </a> </div>
					@endif
				   </div>
				</div>
               <!--/Client logo--> 
            </div>
         </div>		
      </section>
      <!-- <section> close ============================-->
      <!-- ============================================-->

  @endauth
  
@endsection
 