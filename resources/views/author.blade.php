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

      <div class="container" style=" text-align: center; margin-top: 50px;">
                <h3 class="display-5" style="color: #001f9c ; " >SCHOOL WEEK 1</h3>
        </div>
        
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
            
<div class="container">
    <nav class="nav nav-pills nav-justified">
        
       <a class="nav-item nav-link active" href="{{ route('index') }}">Home</a>
        <a class="nav-item nav-link" href="#">Explore Posts</a>
        <a class="nav-item nav-link" href="#">Online Quizzes</a>
        <a class="nav-item nav-link" href="#">Examinations</a>
        <a class="nav-item nav-link" href="#">My Profile</a>
        <a class="nav-item nav-link" href="#">Direct Messages</a>
      </nav>
</div>


<div class="container" style="margin-top: 50px;text-align:left; margin-left:20px;">
        <div class="row">
                <div class="col-lg-6" style="text-align:right;" >
                        <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="250" height="250">
                </div>
                <div class="col-lg-5">
                        <h3 class="display-5" style="margin-top: 10px;">{{$user->firstname}} {{$user->lastname}}</h3>
                        <h5><small class="text-muted">{{$user->school}}</small></h5>
                        <div class="container">
                                <a href="{{route('follow',$user->id)}}" class="btn btn-info btn-circle text-uppercase" >Follow</a>
                        </div>       
                </div>       
        </div>
</div>
            
<nav class="nav nav-pills nav-justified" style="margin-top: 20px;">
        <a class="nav-item nav-link" href="#">{{$user->notes->count()}} Posts</a>
        <a class="nav-item nav-link" href="#">{{$following}} Followers</a>
        <a class="nav-item nav-link" href="#">{{$followers}} Following</a>
</nav>

</div>

<div class="container" style="margin-top: 10px; border-top: 1px dotted  #566573 ;">

        <div class="row">
                @foreach ($user->notes as $notes)
                <div class="col-lg-4"  style="margin-top: 20px;">
                                <div class="card">
                                        <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap">
                                        <div class="card-body">
                                                <div class="container" style="text-align:center; margin-top:-10px;">
                                                    <div class="row">
                                                    <div class="col-lg-12">
                                                    <small class="text-muted" style="color:#001f9c;">{{$user->username}}</small>
                                                    <small class="text-muted">{{$notes->title}}</small>
                                                    </div>
                                                    <div class="col-lg-12">
                                                            <small class="text-muted">{{$user->created_at}}</small>
                                                    </div>
                                                    </div>     
                                                </div>
                                    <div class="container">
                                             <div class="row">
                                                    <div class="col-lg-12">
                                                         <h5 class="card-title" style="color:#001f9c">{{$notes->title}}</h5>
                                                    </div> 
                                            </div>
                                    </div>
                                    
                                    <div class="container">
                                            <div class="row">
                                                    <div class="col-lg-12">
                                                           <small class="text-muted">#physics #introduction-to-physics</small>
                                                    </div>
                                            </div>
                                    </div>            
                                    </div>
                                </div>
                        </div>
                @endforeach
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