@extends('clients.Index')

@section('body')

<div class="col-lg-12 col-md-12">
    <div class="card">
		<div class="card-header header-danger">
		<h2><span class="card-category">{{ __('Client') }} {{$client->id }} </span>
		<a href="{{config('app.url')}}/clients" class="btn btn-secondary pull-right">View All</a></h2>
		</div>
	
		<div class="card-body">	
	<section id="step-1" class="section-step step-wrap">
		<div class="container step animated" data-animation="bounceInLeft" data-animation-delay="700">
			<div class="row">
				<!-- Step Description Starts -->
				<div class="col-md-8 step-desc">
					
					<div class="col-md-12 step-details">
							<div class="row form-group row-step"><span class="col-md-3"><b>Name:</b></span><span class="col-md-9 form-control text-left"> {{$client->name}}</span></div>
							<div class="row form-group row-step"><span class="col-md-3"><b>Email:</b></span><span class="col-md-9 form-control text-left"> {{$client->email}}</span></div>
							<div class="row form-group row-step"><span class="col-md-3"><b>Phone:</b></span><span class="col-md-9 form-control text-left"> {{$client->phone}}</span></div>
							<div class="row form-group row-step"><span class="col-md-3"><b>Address:</b></span><span class="col-md-9 form-control text-left">{{$client->address}}</span></div>
							<div class="row form-group row-step"><span class="col-md-3"><b>City:</b></span><span class="col-md-9 form-control text-left">{{$client->city}}</span></div>
							<div class="row form-group row-step"><span class="col-md-3"><b>Country:</b></span><span class="col-md-9 form-control text-left">{{$client->country}}</span></div>							
							<div class="row form-group row-step"><span class="col-md-3"><b>Created:</b></span><span class="col-md-9 form-control text-left">{{$client->created_at}}</span></div>
							<div class="row form-group row-step"><span class="col-md-3"><b>Updated:</b></span><span class="col-md-9 form-control text-left"> {{$client->updated_at}}</span></div>							
					</div> <!-- End step-details -->
				</div>
				<!-- Step Description Ends -->
				<div class="col-md-4 step-img">
					<img src="../img/note.png" alt="" /> <!-- Step Photo Here -->
				</div>
			</div>
					<div class="row text-center">
					 <a href="{{url()->previous()}}" id="back-btn" class="btn btn-lg-6 btn-default ">
								<div class="fa fa-arrow-left text-white"></div>  Back</a>	
					<a href="clients/{{$client->id}}"  id="edit-btn" class="btn btn-md-4 btn-primary ">Edit
								<div class="fa fa-edit text-white"></div> </a>					 
					<a href="clients/{{$client->id}}"  id="delete-btn" class="btn btn-md-4 btn-danger" action="clients">Delete
								<div class="fa fa-trash text-white"></div></a>
                  </div>			
		</div>
	</section>
		</div> 		   

    </div>
</div>
@endsection