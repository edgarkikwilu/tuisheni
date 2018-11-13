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
                        {{-- <a href="#" style="color:#FFF;">Username</a> --}}
                        <ul class="navbar-nav ml-auto">
                                <li><a href="#" style=" color:#FFF;">Points</a></li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                        </form></li>
                                <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->username }} <span class="caret"></span>
                                        </a>
        
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                                </a>
        
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                                </form>
                                        </div>
                                </li>
                        </ul>
                @endauth
        </div>    
      </nav>

<div class="container" style="text-align:center; margin-top: 40px;">
    <h3 class="display-5" style="color: #001f9c ; " >MY ASSESMENT</h3>  
</div>      

<div class="container">
    <nav class="nav nav-pills nav-justified">
        
       <a class="nav-item nav-link active" href="{{ route('index') }}">Home</a>
        <a class="nav-item nav-link" href="#">Explore Posts</a>
        <a class="nav-item nav-link" href="#">Online Quizzes</a>
        <a class="nav-item nav-link" href="#">Examinations</a>
        <a class="nav-item nav-link" href="#">My Profile</a>
      </nav>
</div>

<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="col-lg-6" style="text-align:right;" >
                <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="250" height="250">
        </div>
        <div class="col-lg-5">
                <h3 class="display-5" style="margin-top: 10px;">John Paul</h3>
                <h5><small class="text-muted">St. Marys High School</small></h5>
                <div class="container" style=" border-top: 1px dotted  #566573 ;">
                    <div class="container" style=" margin-top: 30px;">
                        <div class="row">
                            <div class="col-lg-6">
                                <h5><small>Overall Average:</small> </h5>
                            </div>
                            <div class="col-lg-6">
                                <h5><small class="text-muted">70%</small>
                                </h5>    
                            </div>
                        </div>
                    </div>
                    <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h5><small>Overall Position:</small> </h5>
                                </div>
                                <div class="col-lg-6">
                                    <h5><small class="text-muted">54/6675</small></h5>    
                                </div>
                            </div>
                        </div>
                </div>
                    
        </div>
    </div>

</div>

<div class="container" style="text-align:center; margin-top:50px;">
    <div class="row">
          <!--  <div class="col-lg-12">
                    <h3 class="display-5" style="color:#001f9c">My Academic Assesment</h3>
            </div>-->
        <div class="col-lg-12" >
            <h3 class="display-5" style="color:#001f9c">JANUARY REPORT</h3>
            <h4 class="display-5"><small class="text-muted">Position: 32/4744</small></h4>
            <h4 class="display-5"><small class="text-muted">Average: 85%</small></h4>
            <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Subject</th>
                        <th scope="col">Week 1</th>
                        <th scope="col">Week 2</th>
                        <th scope="col">Week 3</th>
                        <th scope="col">Week 4</th>
                        <th scope="col">Average</th>
                        <th scope="col">Position</th>
                        </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">Biology</th>
                        <td>83%</td>
                        <td>83%</td>
                        <td>83%</td>
                        <td>83%</td>
                        <td>88%</td>
                        <td>23/411</td>
                      </tr>
                      <tr>
                        <th scope="row">Chemistry</th>
                        <td>72%</td>
                        <td>83%</td>
                        <td>83%</td>
                        <td>83%</td>
                        <td>83%</td>
                        <td>19/727</td>
                      </tr>
                      <tr>
                        <th scope="row">Physics</th>
                        <td>66%</td>
                        <td>83%</td>
                        <td>83%</td>
                        <td>83%</td>
                        <td>83%</td>
                        <td>51/221</td>
                      </tr>
                      <tr>
                            <th scope="row">Mathematics</th>
                            <td>66%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>51/221</td>
                    </tr>
                    <tr>
                            <th scope="row">ICT</th>
                            <td>66%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>51/221</td>
                    </tr>
                    <tr>
                            <th scope="row">Technical Education</th>
                            <td>66%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>51/221</td>
                    </tr>
                    <tr>
                            <th scope="row">Agriculture</th>
                            <td>66%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>51/221</td>
                    </tr>
                    <tr>
                            <th scope="row">Geography</th>
                            <td>66%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>51/221</td>
                    </tr>
                    <tr>
                            <th scope="row">History</th>
                            <td>66%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>51/221</td>
                    </tr>
                    <tr>
                            <th scope="row">Civics</th>
                            <td>66%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>51/221</td>
                    </tr>
                    <tr>
                            <th scope="row">Book-Keeping</th>
                            <td>66%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>51/221</td>
                    </tr>
                    </tbody>
                  </table>
        </div>
        <div class="col-lg-12" >
                <h3 class="display-5" style="color:#001f9c">JANUARY REPORT</h3>
                <h4 class="display-5"><small class="text-muted">Points Earned: 97880 Points</small></h4>
                <h4 class="display-5"><small class="text-muted">Most Points Earned: 160000 Points</small></h4>
                <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Subject</th>
                            <th scope="col">Week 1</th>
                            <th scope="col">Week 2</th>
                            <th scope="col">Week 3</th>
                            <th scope="col">Week 4</th>
                            <th scope="col">Total Points</th>
                            <th scope="col">Most Points Earned</th>
                            </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">Biology</th>
                            <td>8300</td>
                            <td>8400</td>
                            <td>8300</td>
                            <td>8300</td>
                            <td>88000</td>
                            <td>890000</td>
                          </tr>
                          <tr>
                            <th scope="row">Chemistry</th>
                            <td>8300</td>
                            <td>8400</td>
                            <td>8300</td>
                            <td>8300</td>
                            <td>88000</td>
                            <td>890000</td>    
                        </tr>
                          <tr>
                            <th scope="row">Physics</th>
                            <td>8300</td>
                            <td>8400</td>
                            <td>8300</td>
                            <td>8300</td>
                            <td>88000</td>
                            <td>890000</td>
                          </tr>
                          <tr>
                                <th scope="row">Mathematics</th>
                                <td>8300</td>
                                <td>8400</td>
                                <td>8300</td>
                                <td>8300</td>
                                <td>88000</td>
                                <td>890000</td>
                        </tr>
                        <tr>
                                <th scope="row">ICT</th>
                                <td>8300</td>
                                <td>8400</td>
                                <td>8300</td>
                                <td>8300</td>
                                <td>88000</td>
                                <td>890000</td>
                        </tr>
                        <tr>
                                <th scope="row">Technical Education</th>
                                <td>8300</td>
                                <td>8400</td>
                                <td>8300</td>
                                <td>8300</td>
                                <td>88000</td>
                                <td>890000</td>
                        </tr>
                        
                        <tr>
                                <th scope="row">Book-Keeping</th>
                                <td>8300</td>
                                <td>8400</td>
                                <td>8300</td>
                                <td>8300</td>
                                <td>88000</td>
                                <td>890000</td>
                        </tr>
                        </tbody>
                      </table>
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