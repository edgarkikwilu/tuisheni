<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset ('js/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset ('css/style.css') }}">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" id="bootstrap-css">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->


  
	<title>School Bata</title>

</head>
<body>
<!--    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <h3 class="display-4" style="color: #FFF ; " ><a href="{{ route('index') }}" style="text-decoration:none; color:#FFF;">SCHOOL BATA</a> </h3>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav ml-auto">
            @guest
              <a href="{{ route('login') }}" style=" color:#FFF;">Login</a>
              <a href="{{ route('register') }}" style="color:#FFF;">Sign Up</a>
            @endguest
            @auth
              <a href="#" style=" color:#FFF;">Points</a>
              <a href="#" style="color:#FFF;"> Username</a>
            @endauth
        </div>  
      </nav>  -->

      <nav class="navbar navbar-expand-lg navbar-light bg-primary" >
          <a class="navbar-brand" href="#" style="font-size:26px; color:#FFF;">SCHOOL BATA</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active"style="margin-left:10px;">
                <a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item" style="margin-left:10px;">
                <a class="nav-link" href="{{ route('explore') }}">Explore Post</a>
              </li>
              <li class="nav-item" style="margin-left:10px;">
                  <a class="nav-link" href="{{ route('quiz') }}">Online Quizzes</a>
                </li>
                <li class="nav-item" style="margin-left:10px; ">
                    <a class="nav-link" href="{{ route('examination') }}">Examinations</a>
                  </li>
                  <li class="nav-item" style="margin-left:10px; ">
                    <a class="nav-link" href="{{ route('teachers') }}">Teachers</a>
                  </li>
                  <li class="nav-item" style="margin-left:10px; ">
                      <a class="nav-link" href="{{ route('students') }}">Students</a>
                    </li>
                    <li class="nav-item" style="margin-left:10px; ">
                        <a class="nav-link" href="#">Direct Message</a>
                      </li>
              </ul>
              <div class="navbar-nav ml-auto">
                  @guest
                    <a href="{{ route('login') }}" style=" color:#FFF;">Login</a>
                    <a href="{{ route('register') }}" style="color:#FFF;">Sign Up</a>
                  @endguest
                  @auth
                    <a href="#" style=" color:#FFF;padding-right:20px;">{{ Auth::user()->points }} Points</a>
                    {{-- <a href="#" style="color:#FFF;"> {{ Auth::user()->username }}</a> --}}
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ Auth::user()->username }}
                    </a>
                    <a href="{{ route('admin.admindash') }}" style="color:#FFF;">My Dashboard</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                  @endauth
              </div> 
            </div>
        </nav>

      
      
        <div style="text-align:left; margin-left:10px;">
          <h4  ><small class="text-muted"> SCHOOL WEEK <?php echo date('W') ?></small></h4>  
        </div>      
      
    <!--  
      
      <div class="container">
          <nav class="nav nav-pills nav-justified">
              
             <a class="nav-item nav-link active" href="{{ route('index') }}">Home</a>
              <a class="nav-item nav-link" href="{{ route('explore') }}">Explore Posts</a>
              <a class="nav-item nav-link" href="#">Online Quizzes</a>
              <a class="nav-item nav-link" href="#">Examinations</a>
              <a class="nav-item nav-link" href="{{ route('profile') }}">My Profile</a>
              <a class="nav-item nav-link" href="{{ route('dm') }}">Direct Messages</a>
              
            </nav>
      </div>  -->

      @yield('content')



 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../js/bootstrap.js"></script>
    <script src="../../../../js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>