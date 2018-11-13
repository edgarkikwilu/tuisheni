@extends('layouts.index')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide" style="margin-top: 30px; margin-left:20px; height: 50%;" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide" height="300px">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide" height="300px">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide" height="300px">
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

      <!-- Three columns of text below the carousel -->
      <div class="row" style="margin-left: 20px;">
        <div class="container" style=" text-align: center; margin-top: 50px;">
            <h3 class="display-5" style="color: #001f9c ; " >TOP 3 STUDENTS WEEK 1</h3>
        </div>
        
        @foreach ($sortedList as $student)
        <div class="col-lg-4" style=" text-align: center; margin-top:50px;">
          <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="110" height="110">
          <h4>#1 {{$student->user->username}}</h4>
          <h5><small class="text-muted">{{$student->user()->school}}</small></h5>
          
          <p>AVERAGE: {{$student->score}}%</p>
          <p><a class="btn btn-secondary" href="{{ route('author',300) }}" role="button">View Student &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        @endforeach
      </div><!-- /.row -->
      <div class="container" style="text-align:center; margin-top: 50px;">
          <h3 class="display-5" style="color: #001f9c ; " >NATURAL SCIENCES MATERIALS</h3>
      </div>
      <div class="row" style="margin-top:40px;">
          <div class="col-md-2" style="margin-left:30px; text-align:center;">
            <div class="thumbnail">
              <a href="{{ route('subject', 'physics') }}">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Image1" style="width:100%">
                <div class="caption">
                  <p>PHYSICS</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-2" style="margin-left:30px; text-align:center;">
            <div class="thumbnail">
              <a href="{{ route('subject', 'chemistry') }}">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Image2" style="width:100%">
                <div class="caption">
                  <p>CHEMISTRY</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-2" style="margin-left:30px; text-align:center;">
            <div class="thumbnail">
              <a href="{{ route('subject', 'maths') }}">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Image3" style="width:100%">
                <div class="caption">
                  <p>MATHEMATICS</p>
                </div>
              </a>
            </div>
          </div>
          <div class="col-md-2" style="margin-left:30px; text-align:center;" >
              <div class="thumbnail">
                <a href="{{ route('subject', 'biology') }}">
                  <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Image3" style="width:100%">
                  <div class="caption">
                    <p>BIOLOGY</p>
                  </div>
                </a>
              </div>
            </div>
              <div class="col-md-2" style="margin-left:30px; text-align:center;">
                  <div class="thumbnail">
                    <a href="{{ route('subject', 'ict') }}">
                      <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Image3" style="width:100%">
                      <div class="caption">
                        <p>ICT</p>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-2" style="margin-left:30px; text-align:center;">
                    <div class="thumbnail">
                      <a href="{{ route('subject', 'technical') }}">
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Image3" style="width:100%">
                        <div class="caption">
                          <p>TECHNICAL EDUCATION</p>
                        </div>
                      </a>
                    </div>
                  </div>
        </div>


        <div class="container" style="text-align:center; margin-top: 50px;">
            <h3 class="display-5" style="color: #001f9c ; " >SOCIAL SCIENCES MATERIALS</h3>
        </div>
        <div class="row" style="margin-top:40px;">
            <div class="col-md-2" style="margin-left:30px; text-align:center;">
              <div class="thumbnail">
                <a href="{{ route('subject', 'geography') }}">
                  <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Image1" style="width:100%">
                  <div class="caption">
                    <p>GEOGRAPHY</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-2" style="margin-left:30px; text-align:center;">
              <div class="thumbnail">
                <a href="{{ route('subject', 'history') }}">
                  <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Image2" style="width:100%">
                  <div class="caption">
                    <p>HISTORY</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-2" style="margin-left:30px; text-align:center;">
              <div class="thumbnail">
                <a href="{{ route('subject', 'civics') }}">
                  <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Image3" style="width:100%">
                  <div class="caption">
                    <p>CIVICS</p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-md-2" style="margin-left:30px; text-align:center;" >
                <div class="thumbnail">
                  <a href="{{ route('subject', 'economcs') }}">
                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Image3" style="width:100%">
                    <div class="caption">
                      <p>ECONOMICS</p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-2" style="margin-left:30px; text-align:center;">
                  <div class="thumbnail">
                    <a href="{{ route('subject', 'agriculture') }}">
                      <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Image3" style="width:100%">
                      <div class="caption">
                        <p>AGRICULTURE</p>
                      </div>
                    </a>
                  </div>
                </div>
                
          </div>

          <div class="container" style="text-align:center; margin-top: 50px;">
              <h3 class="display-5" style="color: #001f9c ; " >AESTHETICS MATERIALS</h3>
          </div>
          <div class="row" style="margin-top:40px;">
              <div class="col-md-2" style="margin-left:30px; text-align:center;">
                <div class="thumbnail">
                  <a href="{{ route('subject', 'fine_arts') }}">
                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Image1" style="width:100%">
                    <div class="caption">
                      <p>FINE ARTS</p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-2" style="margin-left:30px; text-align:center;">
                <div class="thumbnail">
                  <a href="{{ route('subject', 'theatre_arts') }}">
                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Image2" style="width:100%">
                    <div class="caption">
                      <p>THEATER ARTS</p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-2" style="margin-left:30px; text-align:center;">
                <div class="thumbnail">
                  <a href="{{ route('subject', 'physical_education') }}">
                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Image3" style="width:100%">
                    <div class="caption">
                      <p>PHYSICAL EDUCATION MATERIALS</p>
                    </div>
                  </a>
                </div>
              </div>
              <div class="col-md-2" style="margin-left:30px; text-align:center;" >
                  <div class="thumbnail">
                    <a href="{{ route('subject', 'music') }}">
                      <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Image3" style="width:100%">
                      <div class="caption">
                        <p>MUSIC</p>
                      </div>
                    </a>
                  </div>
                </div>
            </div>

            <div class="container" style="text-align:center; margin-top: 50px; width:50%;">
                <h3 class="display-5" style="color: #001f9c ; " >BUSINESS STUDIES & RELIGION MATERIALS</h3>
            </div>
            <div class="row" style="margin-top:40px; ">
                <div class="col-md-2" style="margin-left:30px; ">
                  <div class="thumbnail">
                    <a href="{{ route('subject', 'book_keeping') }}">
                      <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Image1" style="width:100%">
                      <div class="caption">
                        <p>BOOK-KEEPING</p>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-2" style="margin-left:30px; text-align:center;">
                  <div class="thumbnail">
                    <a href="{{ route('subject', 'commerce') }}">
                      <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Image2" style="width:100%">
                      <div class="caption">
                        <p>COMMERCE</p>
                      </div>
                    </a>
                  </div>
                </div>
                <div class="col-md-2" style="margin-left:30px; text-align:center;">
                    <div class="thumbnail">
                      <a href="{{ route('subject', 'bible_studies') }}">
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Image1" style="width:100%">
                        <div class="caption">
                          <p>BIBLE STUDIES</p>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="col-md-2" style="margin-left:30px; text-align:center;">
                    <div class="thumbnail">
                      <a href="{{ route('subject', 'islamic_knowledge') }}">
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Image2" style="width:100%">
                        <div class="caption">
                          <p>ISLAMIC KNOWLEDGE</p>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
  <div class="container" style="text-align:center; margin-top:40px;">
          <h3 class="display-5" style="color: #001f9c ; ">Subscribe Now</h3>
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
@endsection