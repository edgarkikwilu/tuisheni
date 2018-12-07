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
                <a class="nav-link" href="{{ route('explore') }}">Explore Notes</a>
              </li>
              <li class="nav-item" style="margin-left:10px;">
                  <a class="nav-link" href="{{ route('quiz.quiz') }}">Online Quizzes</a>
                </li>
                <li class="nav-item" style="margin-left:10px; ">
                    <a class="nav-link" href="{{ route('examination.examination') }}">Examinations</a>
                  </li>
                  <li class="nav-item" style="margin-left:10px; ">
                      <a class="nav-link" href="{{ route('results') }}">Results</a>
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
                  <a style="color:#FFF;" id="navbarDropdown" class="nav-link dropdown-toggle" href="{{route('teacher.teacherdash')}}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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

        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            <strong>Success:</strong> {{Session::get('success')}}
        </div>    
    @endif
    
    @if(count($errors) > 0)
        <div class="alert alert-danger" role="danger">
            <strong>Errors:</strong>
            <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
            </ul>
        </div>
    @endif
      
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

    <script>
    
        $('#message').on('submit', function(e){
            e.preventDefault();
            // var title = $('#msg_title').val();
            // var description = $('#msg_description').val();

            var formdata = $(this).serialize();
            var action = $(this).attr('action');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'post',
                url: action,
                data: formdata,
                success: function(data){
                    // $("#myModal #close").click()
                    if (data.success != null) {
                        $('#msg_feedback').css('color:green;');
                        $('#msg_feedback').append(data.success);
                    }else if (data.error != null){
                        $('#msg_feedback').append(data.error);
                        $('#msg_feedback').css("color:red");
                    }
                },
                error: function(error){
                    // alert('message not sent');
                    $('#msg_feedback').css("color:red");
                    $('#msg_feedback').append(data.error);
                    // $("#myModal #close").click()
                }
            });
        });
        
        $('#btnfollow').on('click', function(e){
            e.preventDefault();
            var id = $(this).val();

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type:'get',
                url:'/follow/'+id,
                data:{},
                success: function(data){
                    if (data.success != null) {
                        $('#btnfollow').css('display:none');
                        $('.following').css('display:block');
                        alert(data.success);
                    }else if (data.error != null){
                        alert(data.error);
                    }
                },
                error: function(error){
                    alert(error.error);
                }

            });
        });
    </script>

</body>
</html>