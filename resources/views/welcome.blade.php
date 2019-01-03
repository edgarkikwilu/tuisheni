@extends('layouts.guest')
@section('content')
<div class="content">
  <div class="row" style="margin-top:20px; position:relative;">
    <div class="col-md-9">
        <div id="carouselExampleIndicators" class="carousel slide" style="margin-top: 30px; margin-left:20px;" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100 slides" src="{{ asset('/images/sc1.png') }}" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 slides" src="{{ asset('/images/sc4.png') }}" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 slides" src="{{ asset('/images/sc5.jpg') }}" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>

          <div class="row card-container">
            <div class="col-md-4">
              <a href="{{ route('explore') }}" class="">
                  <div style="width: 18rem;">
                    <div class="card card-stats mb-4 mb-lg-0 card-explore card-interactions">
                      <div class="card-body">
                        <div class="row">
                          <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Explore Notes</h5>
                            <span class="h2 font-weight-bold mb-0">{{ $counts[0] }}</span>
                          </div>
                          <div class="col-auto">
                            <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                              <i class="fas fa-chart-bar"></i>
                            </div>
                          </div>
                        </div>
                        <p class="mt-3 mb-0 text-muted text-sm">
                          <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                          <span class="text-nowrap">Since last month</span>
                        </p>
                      </div>
                    </div>
                  </div> <!--end of card-->
              </a>
            </div> <!--end of card container-->
            <div class="col-md-4">
              <a href="{{ route('quiz.quiz') }}">
                <div style="width: 18rem;">
                  <div class="card card-stats mb-4 mb-lg-0 card-quiz card-interactions">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <h5 class="card-title text-uppercase text-muted mb-0">Online Quizzes</h5>
                          <span class="h2 font-weight-bold mb-0">{{ $counts[1] }}</span>
                        </div>
                        <div class="col-auto">
                          <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                              <i class="fas fa-chart-bar"></i>
                          </div>
                        </div>
                      </div>
                      <p class="mt-3 mb-0 text-muted text-sm">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                        <span class="text-nowrap">Since last month</span>
                      </p>
                    </div>
                  </div>
                </div> <!--end of card-->
              </a>
            </div> <!--end of card container-->
            <div class="col-md-4">
              <a href="{{ route('examination.examination') }}">
                <div style="width: 18rem;">
                  <div class="card card-stats mb-4 mb-lg-0 card-exams card-interactions">
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <h5 class="card-title text-uppercase text-muted mb-0">Examinations</h5>
                          <span class="h2 font-weight-bold mb-0">{{ $counts[2] }}</span>
                        </div>
                        <div class="col-auto">
                          <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                            <i class="fas fa-chart-bar"></i>
                          </div>
                        </div>
                      </div>
                      <p class="mt-3 mb-0 text-muted text-sm">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                        <span class="text-nowrap">Since last month</span>
                      </p>
                    </div>
                  </div>
                </div> <!--end of card-->
              </a>
            </div> <!--end of card container-->
            <div class="col-md-4">
              <a href="{{ route('results') }}">
                <div style="width: 18rem;">
                    <div class="card card-stats mb-4 mb-lg-0 card-results card-interactions">
                      <div class="card-body">
                        <div class="row">
                          <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Results</h5>
                            <span class="h2 font-weight-bold mb-0">{{ $counts[3] }}</span>
                          </div>
                          <div class="col-auto">
                            <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                              <i class="fas fa-chart-bar"></i>
                            </div>
                          </div>
                        </div>
                        <p class="mt-3 mb-0 text-muted text-sm">
                          <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                          <span class="text-nowrap">Since last month</span>
                        </p>
                      </div>
                    </div>
                  </div> <!--end of card-->
              </a>
            </div> <!--end of card container-->
            <div class="col-md-4">
              <a href="{{ route('teachers') }}">
                  <div style="width: 18rem;">
                    <div class="card card-stats mb-4 mb-lg-0 card-teachers card-interactions">
                      <div class="card-body">
                        <div class="row">
                          <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Teachers</h5>
                            <span class="h2 font-weight-bold mb-0">{{ $counts[4] }}</span>
                          </div>
                          <div class="col-auto">
                            <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                              <i class="fas fa-chart-bar"></i>
                            </div>
                          </div>
                        </div>
                        <p class="mt-3 mb-0 text-muted text-sm">
                          <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                          <span class="text-nowrap">Since last month</span>
                        </p>
                      </div>
                    </div>
                  </div> <!--end of card-->
                </a>
              </div> <!--end of card container-->
              <div class="col-md-4">
                <a href="{{ route('students') }}">
                  <div style="width: 18rem;">
                    <div class="card card-stats mb-4 mb-lg-0 card-student card-interactions">
                      <div class="card-body">
                        <div class="row">
                          <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0">Students</h5>
                            <span class="h2 font-weight-bold mb-0">{{ $counts[5] }}</span>
                          </div>
                          <div class="col-auto">
                            <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                              <i class="fas fa-chart-bar"></i>
                            </div>
                          </div>
                        </div>
                        <p class="mt-3 mb-0 text-muted text-sm">
                          <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 3.48%</span>
                          <span class="text-nowrap">Since last month</span>
                        </p>
                      </div>
                    </div>
                    </div> <!--end of card-->
                </a>
              </div> <!--end of card container-->
          </div>
    
          <!-- Three columns of text below the carousel -->
          <div class="row" style="margin-left: 20px; margin-top:30px;">
            <div class="container partition" style=" text-align: center;">
                <h3 class="display-5 partition-title" >TOP 3 STUDENTS WEEK 1</h3>
            </div>
            
            @foreach ($topStudents as $student)
            <div class="col-lg-4" style=" text-align: center; margin-top:50px;">
              <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="110" height="110">
              <h4>#1 {{$student->user->username}}</h4>
              <h5><small class="text-muted">{{$student->user->school}}</small></h5>
              
              <p>AVERAGE: {{$student->score}}%</p>
              <p><a class="btn btn-secondary" href="{{ route('author',$student->user_id) }}" role="button">View Student &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            @endforeach
          </div><!-- /.row -->
          <div class="container partition" style="text-align:center; margin-top: 50px;">
              <h3 class="display-5 partition-title " >NATURAL SCIENCES MATERIALS</h3>
          </div>
          <div class="row justify-content-center" style="margin-top:40px;">
            

<div class="card" style="width: 18rem;">
    <a href="{{ route('subject', 'physics') }}">
  <img class="card-img-top" src="{{ asset('/icons/physics.jpg') }}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Physics</h5>
    <p class="card-text">Itakusaidia katika Tanzania ya viwanda.</p>
  </div>
</a>
</div>
  
  
<div class="card" style="width: 18rem;">
    <a href="{{ route('subject', 'chemistry') }}">
    <img class="card-img-top" src="{{ asset('/icons/chemistry.png') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Chemistry</h5>
      <p class="card-text">Itakusaidia katika Tanzania ya viwanda.</p>
    </div>
  </a>
  </div>
  <div class="card" style="width: 18rem;">
      <a href="{{ route('subject', 'mathematics') }}">
    <img class="card-img-top" src="{{ asset('/icons/math.jpg') }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Mathematics</h5>
      <p class="card-text">Itakusaidia katika Tanzania ya viwanda.</p>
    </div>
  </a>
  </div>
  <div class="card" style="width: 18rem;">
      <a href="{{ route('subject', 'biology') }}">
      <img class="card-img-top" src="{{ asset('/icons/biology.jpg') }}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Biology</h5>
        <p class="card-text">Itakusaidia katika Tanzania ya viwanda.</p>
      </div>
    </a>
    </div>
    <div class="card" style="width: 18rem;">
        <a href="{{ route('subject', 'ict') }}">
      <img class="card-img-top" src="{{ asset('/icons/ict.png') }}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">ICT</h5>
        <p class="card-text">Itakusaidia katika Tanzania ya viwanda.</p>
      </div>
    </a>
    </div>
    <div class="card" style="width: 18rem;">
        <a href="{{ route('subject', 'technical') }}">
        <img class="card-img-top" src="{{ asset('/icons/ict.png') }}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Technical</h5>
          <p class="card-text">Itakusaidia katika Tanzania ya viwanda.</p>
        </div>
      </a>
      </div>
            </div>
    
    
            <div class="container partition" style="text-align:center; margin-top: 50px;">
                <h3 class="display-5 partition-title" >SOCIAL SCIENCES MATERIALS</h3>
            </div>
            <div class="row" style="margin-top:40px;">
                <div class="col-md-2" style="margin-left:30px; text-align:center;">
                  <div class="thumbnail">
                    <a href="{{ route('subject', 'geography') }}">
                      <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Image1">
                      <div class="caption">
                        <p>GEOGRAPHY</p>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-2" style="margin-left:30px; text-align:center;">
                  <div class="thumbnail">
                    <a href="{{ route('subject', 'history') }}">
                      <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Image2">
                      <div class="caption">
                        <p>HISTORY</p>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-2" style="margin-left:30px; text-align:center;">
                  <div class="thumbnail">
                    <a href="{{ route('subject', 'civics') }}">
                      <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Image3">
                      <div class="caption">
                        <p>CIVICS</p>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-2" style="margin-left:30px; text-align:center;" >
                    <div class="thumbnail">
                      <a href="{{ route('subject', 'economcs') }}">
                        <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Image3">
                        <div class="caption">
                          <p>ECONOMICS</p>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-2" style="margin-left:30px; text-align:center;">
                      <div class="thumbnail">
                        <a href="{{ route('subject', 'agriculture') }}">
                          <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Image3">
                          <div class="caption">
                            <p>AGRICULTURE</p>
                          </div>
                        </a>
                      </div>
                    </div>
                    
              </div>
    
              <div class="container partition" style="text-align:center; margin-top: 50px;">
                  <h3 class="display-5 partition-title" >AESTHETICS MATERIALS</h3>
              </div>
              <div class="row" style="margin-top:40px;">
                  <div class="col-md-2" style="margin-left:30px; text-align:center;">
                    <div class="thumbnail">
                      <a href="{{ route('subject', 'fine_arts') }}">
                        <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Image1">
                        <div class="caption">
                          <p>FINE ARTS</p>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-2" style="margin-left:30px; text-align:center;">
                    <div class="thumbnail">
                      <a href="{{ route('subject', 'theatre_arts') }}">
                        <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Image2">
                        <div class="caption">
                          <p>THEATER ARTS</p>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-2" style="margin-left:30px; text-align:center;">
                    <div class="thumbnail">
                      <a href="{{ route('subject', 'physical_education') }}">
                        <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Image3">
                        <div class="caption">
                          <p>PHYSICAL EDUCATION MATERIALS</p>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-2" style="margin-left:30px; text-align:center;" >
                      <div class="thumbnail">
                        <a href="{{ route('subject', 'music') }}">
                          <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Image3">
                          <div class="caption">
                            <p>MUSIC</p>
                          </div>
                        </a>
                      </div>
                    </div>
                </div>
    
                <div class="container partition" style="text-align:center; margin-top: 50px;">
                    <h3 class="display-5 partition-title" >BUSINESS STUDIES & RELIGION MATERIALS</h3>
                </div>
                <div class="row" style="margin-top:40px; ">
                    <div class="col-md-2" style="margin-left:30px; ">
                      <div class="thumbnail">
                        <a href="{{ route('subject', 'book_keeping') }}">
                          <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Image1">
                          <div class="caption">
                            <p>BOOK-KEEPING</p>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="col-md-2" style="margin-left:30px; text-align:center;">
                      <div class="thumbnail">
                        <a href="{{ route('subject', 'commerce') }}">
                          <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Image2">
                          <div class="caption">
                            <p>COMMERCE</p>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="col-md-2" style="margin-left:30px; text-align:center;">
                        <div class="thumbnail">
                          <a href="{{ route('subject', 'bible_studies') }}">
                            <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Image1">
                            <div class="caption">
                              <p>BIBLE STUDIES</p>
                            </div>
                          </a>
                        </div>
                      </div>
                      <div class="col-md-2" style="margin-left:30px; text-align:center;">
                        <div class="thumbnail">
                          <a href="{{ route('subject', 'islamic_knowledge') }}">
                            <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Image2">
                            <div class="caption">
                              <p>ISLAMIC KNOWLEDGE</p>
                            </div>
                          </a>
                        </div>
                      </div>
                    </div>
      <div class="container partition" style="text-align:center; margin-top:40px;">
              <h3 class="display-5 partition-title">Subscribe Now</h3>
              <p class="lead">Subscribe our packages now to get different experiences with your education career.</p>
       </div>
        
            <div class="container" style="margin-top:40px;">
              <div class="card-deck mb-4 text-center">
                @foreach ($packages as $package)
                <div class="card mb-4 box-shadow">
                    <div class="card-header">
                      <h4 class="my-0 font-weight-normal">{{$package->name}}</h4>
                    </div>
                    <div class="card-body">
                      <h1 class="card-title pricing-card-title">Tsh {{$package->price}}
                         <small class="text-muted">/ {{$package->duration}}</small></h1>
                      <ul class="list-unstyled mt-3 mb-4">
                        @foreach ($package->packageSpecs as $spec)
                        <li>{{$spec->name}}</li>
                        @endforeach
                      </ul>
                      <a href="#" class="btn btn-lg btn-block btn-primary">Get Started</a>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
    </div>
  </div>
</div>
@endsection