@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
    <!-- content-wrapper -->
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome {{auth()->user()->name}}</h3>
                  <h6 class="font-weight-normal mb-0">All systems are running smoothly! You have <span class="text-primary">0 new notifications!</span></h6>
                </div>
                <div class="col-12 col-xl-4">
                 <div class="justify-content-end d-flex">
                  <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                    <button class="btn btn-sm btn-light bg-white dropdown-toggle" type="button" id="dropdownMenuDate2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                     <i class="mdi mdi-calendar"></i> Today (10 Jan 2021)
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                      <a class="dropdown-item" href="#">January - March</a>
                      <a class="dropdown-item" href="#">March - June</a>
                      <a class="dropdown-item" href="#">June - August</a>
                      <a class="dropdown-item" href="#">August - November</a>
                    </div>
                  </div>
                 </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-people mt-auto">
                  <img src="{{ asset('images/gallery/hero-img2.png') }}" alt="people">
                  <div class="weather-info">
                    <div class="d-flex">
                      <div>
                        <h2 class="mb-0 font-weight-normal"><i class="icon-sun mr-2"></i>29<sup>C</sup></h2>
                      </div>
                      <div class="ml-2">
                        <h4 class="location font-weight-normal">Johannesburg</h4>
                        <h6 class="font-weight-normal">South Africa</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin transparent">
              <div class="row">
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-primary">
                    <div class="card-body">
                      <p class="mb-4">Total Projects</p>
                      <p class="fs-30 mb-2">+ {{$dashboard ?  $dashboard['projectsTotal']:'0'}}</p>
                      <p>{{$dashboard ?  $dashboard['projectsUpdate']:'0 weeks ago'}}</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-4 stretch-card transparent">
                  <div class="card card-gray">
                    <div class="card-body">
                      <p class="mb-4">Total Mail Subscribers</p>
                      <p class="fs-30 mb-2">+ {{$dashboard ?  $dashboard['mailSubscriptions_total']:'0'}} </p>
                      <p>{{$dashboard ?  $dashboard['mailSubscriptions_update']:'0'}}</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card card-info">
                    <div class="card-body">
                      <p class="mb-4">New Messages</p>
                      <p class="fs-30 mb-2">+ {{$dashboard ?  $dashboard['messagesTotal']:'0'}}</p>
                      <p>{{$dashboard ?  $dashboard['messagesUpdate']:'0 days ago'}}</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 stretch-card transparent">
                  <div class="card card-purple">
                    <div class="card-body">
                      <p class="mb-4">Number of Clients</p>
                      <p class="fs-30 mb-2">+  {{$dashboard ?  $dashboard['clientsTotal']:'0'}}</p>
                      <p>{{$dashboard ?  $dashboard['last_client_update']:'0 days ago'}}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Total Projects</p>
                  <p class="font-weight-500">The total number of projects up to date. It is the total figure of all our active projects</p>
                  <div class="d-flex flex-wrap mb-5">
                    <div class="mr-5 mt-3">
                      <p class="text-muted">Completed</p>
                      <h3 class="text-success fs-30 font-weight-medium">{{$dashboard ?  $dashboard['projCompleted']:'123'}}</h3>
                    </div>
                    <div class="mr-5 mt-3">
                      <p class="text-muted">Incomplete</p>
                      <h3 class="text-primary fs-30 font-weight-medium">{{$dashboard ?  $dashboard['projIncomplete']:'14'}}</h3>
                    </div>
                    <div class="mr-5 mt-3">
                      <p class="text-muted">Pending</p>
                      <h3 class="text-warning fs-30 font-weight-medium">{{$dashboard ?  $dashboard['projPending']:'71'}}</h3>
                    </div>
                    <div class="mt-3">
                      <p class="text-muted">Cancelled</p>
                      <h3 class="text-danger fs-30 font-weight-medium">{{$dashboard ?  $dashboard['projCancelled']:'0'}}</h3>
                    </div> 
                  </div>
                  <canvas id="projects-line-chart"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                 <div class="d-flex justify-content-between">
                  <p class="card-title">Mail Subscriptions</p>
                  <a href="#" class="text-info">View all</a>
                 </div>
                  <p class="font-weight-500">The total number of our mail subscribers. It is the total figure of all mail subscriptions for our newsletters</p>
                  <div id="mailsubscriptions-legend" class="chartjs-legend mt-4 mb-2"></div>
                  <canvas id="mailsubscriptions-chart"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card position-relative">
                <div class="card-body">
                  <div id="detailedReports" class="carousel slide detailed-report-carousel position-static pt-2" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <div class="row">
                          <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                            <div class="ml-xl-4 mt-3">
                            <p class="card-title">Detailed Reports</p>
                              <h1 class="text-primary">+  {{$dashboard ?  $dashboard['clientsTotal']:'0'}}</h1>
                              <h3 class="font-weight-500 mb-xl-4 text-primary">Total Clients</h3>
                              <p class="mb-2 mb-xl-0">The total number of all our clients up to date. It is total figure of all active clients in our clients database</p>
                            </div>  
                            </div>
                          <div class="col-md-12 col-xl-9">
                            <div class="row">
                              <div class="col-md-6 border-right">
                                <div class="table-responsive mb-3 mb-md-0 mt-3">
                                  <table class="table table-borderless report-table">
								    @if($dashboard['clientsAggrTotal'] != 0)
										@foreach($dashboard['clientsbyCity'] as $cn)
											<tr>
											  <td class="text-muted">{{$cn->city}}</td>
											  <td class="w-100 px-0">
												<div class="progress progress-md mx-4">
												  <div class="progress-bar {{$dashboard['clientsColor'][$cn->city]}}" role="progressbar" style="width: {{$dashboard['cityPercentage'][$cn->city]}}%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											  </td>
											  <td><h5 class="font-weight-bold mb-0">{{$dashboard['clientsperCity'][$cn->city]}}</h5></td>
											</tr>										
										@endforeach
									@else
                                    <tr>
                                      <td class="text-muted">New York</td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">713</h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">Washington</td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">583</h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">Johannesburg</td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">924</h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">Capetown</td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">664</h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">London</td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">560</h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">Geneva</td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar bg-dark" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">793</h5></td>
                                    </tr>
									@endif
                                  </table>
                                </div>
                              </div>
                              <div class="col-md-6 mt-3">
                                <canvas id="clients-chart"></canvas>
                                <div id="clients-legend"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <div class="row">
                          <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                            <div class="ml-xl-4 mt-3">
                            <p class="card-title">Detailed Reports</p>
                              <h1 class="text-primary">+ {{$dashboard ?  $dashboard['projectsTotal']:'0'}}</h1>
                              <h3 class="font-weight-500 mb-xl-4 text-primary">Total Projects</h3>
                              <p class="mb-2 mb-xl-0">The total number of projects up to date. It is the total figure of all our active &amp completed projects </p>
                            </div>  
                          </div>
                          <div class="col-md-12 col-xl-9">
                            <div class="row">
                              <div class="col-md-6 border-right">
                                <div class="table-responsive mb-3 mb-md-0 mt-3">
                                  <table class="table table-borderless report-table">
								  @if($dashboard['projectTypesTotal'] != 0)
									@foreach($dashboard['projectTypes'] as $pt)
                                    <tr>
                                      <td class="text-muted">{{$pt->name}}</td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar {{$dashboard['projectColor'][$pt->name]}}" role="progressbar" style="width: {{$dashboard['projPercentage'][$pt->name]}}%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">{{$dashboard['projectTypesData'][$pt->name]}}</h5></td>
                                    </tr>
									@endforeach
								  @else
                                    <tr>
                                      <td class="text-muted">Accounting</td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">600</h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">Tax, Compliance &amp Payroll</td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">300</h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">Financial Services</td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar bg-info" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">924</h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">Investment &amp Portfolio</td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">664</h5></td>
                                    </tr>
                                    <tr>
                                      <td class="text-muted">Growth &amp Funding Access</td>
                                      <td class="w-100 px-0">
                                        <div class="progress progress-md mx-4">
                                          <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                      </td>
                                      <td><h5 class="font-weight-bold mb-0">560</h5></td>
                                    </tr>
									@endif
                                  </table>
                                </div>
                              </div>
                              <div class="col-md-6 mt-3">
                                <canvas id="projects-chart"></canvas>
                                <div id="projects-legend"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#detailedReports" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#detailedReports" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
		  
        </div>
    <!-- content-wrapper ends -->
@endsection
