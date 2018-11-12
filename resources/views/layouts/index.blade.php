<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="js/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

  
	<title>School Bata</title>

</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
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
      </nav>

      <div class="container" style="text-align:center; margin-top: 40px;">
          <h3 class="display-5" style="color: #001f9c ; " >SCHOOL WEEK 1</h3>  
      </div>      
      
      
      
      <div class="container">
          <nav class="nav nav-pills nav-justified">
              
             <a class="nav-item nav-link active" href="{{ route('index') }}">Home</a>
              <a class="nav-item nav-link" href="{{ route('explore') }}">Explore Posts</a>
              <a class="nav-item nav-link" href="#">Online Quizzes</a>
              <a class="nav-item nav-link" href="#">Examinations</a>
              <a class="nav-item nav-link" href="{{ route('profile') }}">My Profile</a>
              <a class="nav-item nav-link" href="{{ route('dm') }}">Direct Messages</a>
              
            </nav>
      </div>

      @yield('content')

<!--
<nav class="nav flex-column" style="margin-top: 20px; margin-left: 5px;">
NATURAL SCIENCES
  <a class="nav-link" href="#">Physics</a>
  <a class="nav-link" href="#">Chemistry</a>
  <a class="nav-link" href="#">Mathematics</a>
  <a class="nav-link" href="#">Biology</a>
  <a class="nav-link" href="#">Agriculture</a>
  <a class="nav-link" href="#">ICT</a>
  <a class="nav-link" href="#">Technical Education</a>
  <a class="nav-link" href="#">Home Economics</a>

SOCIAL SCIENCES
  <a class="nav-link" href="#">History</a>
  <a class="nav-link" href="#">Civics</a>
  <a class="nav-link" href="#">Geography</a>
  <a class="nav-link" href="#">Economics</a>

LANGUAGES
  <a class="nav-link" href="#">English</a>
  <a class="nav-link" href="#">Kiswahili</a>
  <a class="nav-link" href="#">Arabic</a>
  <a class="nav-link" href="#">French</a>

AESTHETICS
<a class="nav-link" href="#">Fine Arts</a>
<a class="nav-link" href="#">Theater Arts</a>
<a class="nav-link" href="#">Physical Education</a>
<a class="nav-link" href="#">Music</a>

  BUSINESS STUDIES
  <a class="nav-link" href="#">Book-Keeping</a>
  <a class="nav-link" href="#">Commerce</a>

RELIGION
  <a class="nav-link" href="#">Bible Studies</a>
  <a class="nav-link" href="#">Islamic Studies</a>
</nav>
-->






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

</body>
</html>