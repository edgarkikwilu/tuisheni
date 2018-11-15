<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
  <link rel="javascript" href="{{ asset('js/bootstrap.js') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  
    <title>School Bata</title>

</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <a href="{{ route('index') }}"><h3 class="display-4" style="color: #FFF ; " >SCHOOL BATA</h3></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav ml-auto">
                @guest
                        <a href="#" style="color:#FFF;"> Sign Up</a>
                        <a href="#" style=" color:#FFF;">Login</a>
                @endguest
                @auth
                        <a href="#" style=" color:#FFF;">Points</a>
                        <a href="#" style="color:#FFF;"> Username</a>
                @endauth
        </div>    
      </nav>
      @if (Session::has('success'))
          <div class="alert alert-info">
                  {{Session::get('success')}}
          </div>
      @endif
      @if (Session::has('error'))
          <div class="alert alert-danger">
                  {{Session::get('error')}}
          </div>
      @endif
<div class="container" style="text-align:center; margin-top:40px;">
        <div class="row"  >
                <div class="col-lg-12">
                        <h3 class="display-5" style="color: #001f9c ; " >{{$subject}}</h3>
                </div>  
            </div>
</div>
      

<div class="container">
    <nav class="nav nav-pills nav-justified">
        
       <a class="nav-item nav-link" href="{{ route('class',[$subject,1]) }}">Form One</a>
        <a class="nav-item nav-link" href="{{ route('class',[$subject,2]) }}">Form Two</a>
        <a class="nav-item nav-link" href="{{ route('class',[$subject,3]) }}">Form Three</a>
        <a class="nav-item nav-link" href="{{ route('class',[$subject,4]) }}">Form Four</a>
        <a class="nav-item nav-link" href="{{ route('class',[$subject,5]) }}">Form Five</a>
        <a class="nav-item nav-link" href="{{ route('class',[$subject,6]) }}">Form Six</a>
      </nav>
</div>

<!-- Three columns of text below the carousel -->
<div class="row" style="margin-left: 20px;">
    <div class="container" style=" text-align: center; margin-top: 50px;">
        <h3 class="display-6" style="color: #001f9c ; " >{{$subject}} TOP 3 WEEK 1</h3>
    </div>
    
    @foreach ($topStudents as $student)
    <div class="col-lg-4" style=" text-align: center; margin-top:50px;">
        <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="110" height="110">
    <h4>{{$student->user->firstname}} {{$student->user->lastname}}</h4>
        <h5><small class="text-muted">{{$student->user->school}}</small></h5>
        
        <p>AVERAGE: {{$student->score}}%</p>
        <p><a class="btn btn-secondary" href="{{ route('assessment',1) }}" role="button">View Student &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
    @endforeach
    
  </div><!-- /.row -->

  <div class="container" style="text-align:center; margin-top: 40px;">
        <h4 class="display-6" style="color: #001f9c ; " >MOST VIEWED {{$subject}} MATERIALS</h4>  
    </div> 
    <div class="container">
            <div class="row">
                    
                @foreach ($recommended as $note)
                <div class="col-lg-4"  style="margin-top: 20px;">
                        <div class="card">
                                <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap">
                                <div class="card-body">
                                        <div class="    container" style="text-align:center; margin-top:-10px;">
                                                <div class="row">
                                                <div class="col-lg-12">
                                                <small class="text-muted" style="color:#001f9c;">{{$note->user->username}},</small>
                                                <small class="text-muted">{{$note->user->school}}</small>
                                                </div>
                                                <div class="col-lg-12">
                                                        <small class="text-muted">{{$note->created_at}}</small>
                                                </div>
                                                </div>     
                                        </div>
                                <div class="container">
                                        <div class="row">
                                                <div class="col-lg-12">
                                                        <h5 class="card-title" style="color:#001f9c">{{$note->title}}</h5>
                                                </div> 
                                        </div>
                                </div>
                                
                                <div class="container">
                                        <div class="row">
                                                <div class="col-lg-12">
                                                        <small class="text-muted">{{$note->tags}}</small>
                                                </div>
                                        </div>
                                </div>
                                        
                                </div>
                                        
                                </div>
                        </div>
                @endforeach
            </div>
                <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="#">See More Physics Exams Reccomendations</a>
                        </li>
                        
                        </ul>
            
            </div>
            
    </div>

  <div class="container" style="text-align:center; margin-top: 40px;">
    <h4 class="display-6" style="color: #001f9c ; " >RECOMMENDED PHYSICS EXAMS WEEK 1</h4>  
</div> 
<div class="container">
        <div class="row">
                <div class="col-lg-3"  style="margin-top: 20px;">
                        <div class="card">
                                <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap">
                                        <div class="container" style="text-align:center;">
                                            <div class="row">
                                            <div class="col-lg-12">
                                            <small class="text-muted" style="color:#001f9c;">Mr. Masore,</small>
                                            <small class="text-muted">Loyola High School</small>
                                            </div>
                                            <div class="col-lg-12">
                                                    <small class="text-muted">9 mins ago</small>
                                            </div>
                                            </div>     
                                        </div>
                            <div class="container">
                                     <div class="row">
                                            <div class="col-lg-12">
                                                 <h5 class="card-title" style="color:#001f9c">Masore Physics Series 1</h5>
                                            </div> 
                                    </div>
                            </div>
                            
                             <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                            <p>Starts in: <small class="text-muted">2 days 6 hours</small></p>
                                            <p>1st Price: <small class="text-muted">10000 Points</small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                    <div class="row">
                                            <div class="col-lg-12">
                                                   <small class="text-muted">#physics #weekly</small>
                                            </div>
                                            
                                    </div>
                            </div>
                                
                            
                                  
                                </div>
               

                        </div>
                        <div class="col-lg-3"  style="margin-top: 20px;">
                           <div class="card">
                                        <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap">
                                                <div class="container" style="text-align:center;">
                                                    <div class="row">
                                                    <div class="col-lg-12">
                                                    <small class="text-muted" style="color:#001f9c;">Mr. Masore,</small>
                                                    <small class="text-muted">Loyola High School</small>
                                                    </div>
                                                    <div class="col-lg-12">
                                                            <small class="text-muted">9 mins ago</small>
                                                    </div>
                                                    </div>     
                                                </div>
                                    <div class="container">
                                             <div class="row">
                                                    <div class="col-lg-12">
                                                         <h5 class="card-title" style="color:#001f9c">Masore Physics Series 1</h5>
                                                    </div> 
                                            </div>
                                    </div>
                                    
                                     <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                    <p>Starts in: <small class="text-muted">2 days 6 hours</small></p>
                                                    <p>1st Price: <small class="text-muted">10000 Points</small></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                            <div class="row">
                                                    <div class="col-lg-12">
                                                           <small class="text-muted">#physics #weekly</small>
                                                    </div>
                                                    
                                            </div>
                                    </div>
                                        
                                    
                                          
                                        </div>
                       
        
                        </div>
                        <div class="col-lg-3"  style="margin-top: 20px;">
                            <div class="card">
                                        <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap">
                                                <div class="container" style="text-align:center;">
                                                    <div class="row">
                                                    <div class="col-lg-12">
                                                    <small class="text-muted" style="color:#001f9c;">Mr. Masore,</small>
                                                    <small class="text-muted">Loyola High School</small>
                                                    </div>
                                                    <div class="col-lg-12">
                                                            <small class="text-muted">9 mins ago</small>
                                                    </div>
                                                    </div>     
                                                </div>
                                    <div class="container">
                                             <div class="row">
                                                    <div class="col-lg-12">
                                                         <h5 class="card-title" style="color:#001f9c">Masore Physics Series 1</h5>
                                                    </div> 
                                            </div>
                                    </div>
                                    
                                     <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                    <p>Starts in: <small class="text-muted">2 days 6 hours</small></p>
                                                    <p>1st Price: <small class="text-muted">10000 Points</small></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="container">
                                            <div class="row">
                                                    <div class="col-lg-12">
                                                           <small class="text-muted">#physics #weekly</small>
                                                    </div>
                                                    
                                            </div>
                                    </div>
                                        
                                    
                                          
                                        </div>
                       
        
                                </div>
                                <div class="col-lg-3"  style="margin-top: 20px;">
                                        <div class="card">
                                                <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap">
                                                        <div class="container" style="text-align:center;">
                                                            <div class="row">
                                                            <div class="col-lg-12">
                                                            <small class="text-muted" style="color:#001f9c;">Mr. Masore,</small>
                                                            <small class="text-muted">Loyola High School</small>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                    <small class="text-muted">9 mins ago</small>
                                                            </div>
                                                            </div>     
                                                        </div>
                                            <div class="container">
                                                     <div class="row">
                                                            <div class="col-lg-12">
                                                                 <h5 class="card-title" style="color:#001f9c">Masore Physics Series 1</h5>
                                                            </div> 
                                                    </div>
                                            </div>
                                            
                                             <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                            <p>Starts in: <small class="text-muted">2 days 6 hours</small></p>
                                                            <p>1st Price: <small class="text-muted">10000 Points</small></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="container">
                                                    <div class="row">
                                                            <div class="col-lg-12">
                                                                   <small class="text-muted">#physics #weekly</small>
                                                            </div>
                                                            
                                                    </div>
                                            </div>
                                                
                                            
                                                  
                                                </div>
                               
                
                                        </div>
        </div>
            <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#">See More Physics Exams Reccomendations</a>
                    </li>
                    
                    </ul>
        
        </div>
        
</div>

<div class="container" style="text-align:center; margin-top: 40px;">
        <h4 class="display-6" style="color: #001f9c ; " >RECOMMENDED PHYSICS TEACHERS</h4>  
    </div>

<div class="container">
    <div class="row">
            @foreach ($teachers as $teacher)
            <div class="col-lg-3" style=" text-align: center; margin-top:50px;">
                <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="110" height="110">
                <h4>{{$teacher->firstname}} {{$teacher->lastname}}</h4>
                <h5><small class="text-muted">{{$teacher->school}}</small></h5>
                <p><small class="text-muted">{{$teacher->bio}}</small></p>
            <p><a class="btn btn-secondary" href="{{route('follow',$teacher->id)}}" role="button">Follow </a></p>
                </div><!-- /.col-lg-4 -->
            @endforeach
    <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="#">See More Physics Teachers</a>
            </li>
            
            </ul>
</div>

<div class="container" style="text-align:center; margin-top:40px;">
        <h3 class="display-5" style="color: #001f9c ; ">SUBSCRIBE NOW</h3>
        <p class="lead">Subscribe our packages now to get different experiences with your education career.</p>
 </div>
  
      <div class="container" style="margin-top:40px;">
        <div class="card-deck mb-4 text-center">
          <div class="card mb-4 box-shadow" >
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Light</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">Tsh 4,000 <small class="text-muted">/ mo</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>2 GB of storage</li>
                <li>Email support</li>
                <li>Help center access</li>
              </ul>
              <button type="button" class="btn btn-lg btn-block btn-outline-primary">Get Started</button>
            </div>
          </div>
          <div class="card mb-4 box-shadow">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Gold</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">Tsh 7,000 <small class="text-muted">/ mo</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>10 GB of storage</li>
                <li>Priority email support</li>
                <li>Help center access</li>
              </ul>
              <button type="button" class="btn btn-lg btn-block btn-primary">Get Started</button>
            </div>
          </div>
          <div class="card mb-4 box-shadow">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Premium</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">Tsh 10,000 <small class="text-muted">/ mo</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>15 GB of storage</li>
                <li>Phone and email support</li>
                <li>Help center access</li>
              </ul>
              <button type="button" class="btn btn-lg btn-block btn-primary">Get Started</button>
            </div>
          </div>
        </div>
      </div>   

 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../js/bootstrap.js"></script>
</body>
</html>