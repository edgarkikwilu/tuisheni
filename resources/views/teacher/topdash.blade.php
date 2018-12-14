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
  <link href="node_modules/jquery/dist/jquery.min.js" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag --------->
	<title>School Bata</title>

</head>
<body>
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
              {{-- <li class="nav-item" style="margin-left:10px;">
                <a class="nav-link" href="{{ route('teacher.teacherdash') }}">My Profile</a>
              </li> --}}
              <li class="nav-item" style="margin-left:10px;">
                  <a class="nav-link" href="{{ route('teacher.notes') }}">My Notes</a>
                </li>
                <li class="nav-item" style="margin-left:10px; ">
                    <a class="nav-link" href="{{ route('teacher.examinations') }}">My Examinations</a>
                  </li>
                  <li class="nav-item" style="margin-left:10px; ">
                    <a class="nav-link" href="{{ route('teacher.quiz') }}">My Quizzes</a>
                  </li>
                  <li class="nav-item" style="margin-left:10px; ">
                      <a class="nav-link" href="{{ route('teacher.points') }}">My Points</a>
                    </li>
                    <li class="nav-item" style="margin-left:10px; ">
                        <a class="nav-link" href="{{ route('teacher.payments') }}">My Payments</a>
                      </li>
              </ul>
              <div class="navbar-nav ml-auto">
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}" style="color:#FFF;">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}" style="color:#FFF;">{{ __('Register') }}</a>
                    @endif
                </li>
            @else
                <li class="nav-item dropdown">
                    <a style="color:#FFF;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->username }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a  class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
              </div> 
            </div>
        </nav>
       <div class="row">
           <div class="col-lg-6">
                <div style="text-align:left; margin-left:10px;">
                        <h4  ><small class="text-muted"> SCHOOL WEEK <?php echo date('W') ?></small></h4>  
                      </div>
           </div>
        <div class="col-lg-6">
                <div style="text-align:right; margin-right:10px;">
                        <h4  ><small class="text-muted"> {{ Auth::user()->points }} POINTS</small></h4>  
                    </div>
        </div>
                  
       </div>
              
   
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>

    <script>
        $(document).ready(function() {
            $('#btnAddNewQuestion').on('click', function(e){
            $('.qn').clone().appendTo('.qncontainer');
        });
    
      $('select[name="subject"]').on('change', function(){
          var subjectId = $(this).val();
          
          if(subjectId) {
            $.ajax({
            url: '/student/gettopics/'+subjectId,
            type:"GET",
            dataType:"json",
            data:{id: subjectId},      
                success:function(data) {
                    $('select[name="topic"]').empty();
                    $.each(data, function(key, value){
                    $('select[name="topic"]').append('<option value="'+ key +'">' + value + '</option>');
                });
                }
            });
          } else {
              $('select[name="topic"]').empty();
          }
      
      });

      $('select[name="topic"]').on('change', function(){
          var topicId = $(this).val();
          
          if(topicId) {
            
              $.ajax({
                  url: '/student/getsubtopics/'+topicId,
                  type:"GET",
                  dataType:"json",
                  data:{id: topicId},
                  success:function(data) {
                      $('select[name="subtopic"]').empty();
                      $.each(data, function(key, value){
                          $('select[name="subtopic"]').append('<option value="'+ key +'">' + value + '</option>');
                      });
                  }
              });
          } else {
              $('select[name="subtopic"]').empty();
          }
      
      });
    });

    // Set the date we're counting down to
var countDownDate = new Date( $time ).getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);

    </script>

</body>
</html>