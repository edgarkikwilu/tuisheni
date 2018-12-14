<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    
    <script src="{{ asset('js/app.js') }}" defer></script>

	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset ('js/bootstrap.css') }}">
  <link rel="stylesheet" href="{{ asset ('css/style.css') }}">
  <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->


  
	<title>School Bata</title>

    <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=wbey0h1l7jz2lp8lmlox7olwvkkbg9hxihsn3a4ls25xywr0"></script>
    <script>
        tinymce.init({ 
            selector: 'textarea',
            plugins: 'media link',
            api_key: 'wbey0h1l7jz2lp8lmlox7olwvkkbg9hxihsn3a4ls25xywr0 ',
            height: 200
        });
    </script>

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
        <div class="alert alert-success text-center" role="alert">
             {{Session::get('success')}}
        </div>    
    @endif
    
    @if(count($errors) > 0)
        <div class="alert alert-danger text-center" role="danger">
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
    
      @yield('content')

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script type="text/javascript">
        $('#message').on('submit', function(e){
            e.preventDefault();
            // var title = $('#msg_title').val();
            // var description = $('#msg_description').val();
            alert('submitted');
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
                    if (data.success != null) {
                        $('#msg_feedback').css('color:green;');
                        $('#msg_feedback').append(data.success);
                    }else if (data.error != null){
                        $('#msg_feedback').append(data.error);
                        $('#msg_feedback').css("color:red");
                    }
                },
                error: function(error){
                    $('#msg_feedback').css("color:red");
                    $('#msg_feedback').append(data.error);
                }
            });
        });
        
        // $('#btnfollow').on('click', function(e){
        //     e.preventDefault();
        //     var id = $(this).val();

        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         }
        //     });

        //     $.ajax({
        //         type:'get',
        //         url:'/follow/'+id,
        //         data:{},
        //         success: function(data){
        //             if (data.success != null) {
        //                 $('#btnfollow').css('display:none');
        //                 $('.following').css('display:block');
        //                 alert(data.success);
        //             }else if (data.error != null){
        //                 alert(data.error);
        //             }
        //         },
        //         error: function(error){
        //             alert(error.error);
        //         }

        //     });
        // });

        // $('.btnfollowteacher').on('click', function(e){
        //     e.preventDefault();
        //     var id = $(this).val();

        //     $.ajaxSetup({
        //         headers: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //         }
        //     });

        //     $.ajax({
        //         type:'get',
        //         url:'/follow/teacher/'+id,
        //         data:{},
        //         success: function(data){
        //             if (data.success != null) {
        //                 $('#btnfollow').css('display:none');
        //                 $('.following').css('display:block');
        //                 alert(data.success);
        //             }else if (data.error != null){
        //                 alert(data.error);
        //             }
        //         },
        //         error: function(error){
        //             alert(error.error);
        //         }

        //     });
        // });

        $('.chckbx1').on('change', function() {
             $('.chckbx1').not(this).prop('checked', false);
        });
        $('.chckbx2').on('change', function() {
             $('.chckbx2').not(this).prop('checked', false);
        });
        $('.chckbx3').on('change', function() {
             $('.chckbx3').not(this).prop('checked', false);
        });
        $('.chckbx4').on('change', function() {
             $('.chckbx4').not(this).prop('checked', false);
         });
        $('.chckbx5').on('change', function() {
             $('.chckbx5').not(this).prop('checked', false);
        });
        $('.chckbx6').on('change', function() {
             $('.chckbx6').not(this).prop('checked', false);
        });
        $('.chckbx7').on('change', function() {
             $('.chckbx7').not(this).prop('checked', false);
        });
        $('.chckbx8').on('change', function() {
             $('.chckbx8').not(this).prop('checked', false);
        });
        $('.chckbx9').on('change', function() {
             $('.chckbx9').not(this).prop('checked', false);
        });
        $('.chckbx10').on('change', function() {
             $('.chckbx10').not(this).prop('checked', false);
        });
        $('.chckbx11').on('change', function() {
             $('.chckbx11').not(this).prop('checked', false);
        });
        $('.chckbx12').on('change', function() {
             $('.chckbx12').not(this).prop('checked', false);
        });
        $('.chckbx13').on('change', function() {
             $('.chckbx13').not(this).prop('checked', false);
        });
        $('.chckbx14').on('change', function() {
             $('.chckbx14').not(this).prop('checked', false);
        });
        $('.chckbx15').on('change', function() {
             $('.chckbx15').not(this).prop('checked', false);
        });
        $('.chckbx16').on('change', function() {
             $('.chckbx16').not(this).prop('checked', false);
        });
        $('.chckbx17').on('change', function() {
             $('.chckbx17').not(this).prop('checked', false);
        });
        $('.chckbx18').on('change', function() {
             $('.chckbx18').not(this).prop('checked', false);
        });
        $('.chckbx19').on('change', function() {
             $('.chckbx19').not(this).prop('checked', false);
        });
        $('.chckbx20').on('change', function() {
             $('.chckbx20').not(this).prop('checked', false);
        });

        $('.marksForm').on('submit', function(e){
            e.preventDefault();
            var formdata = $(this).serialize();
            var method  = $(this).attr('method');
            var action  = $(this).attr('action');
            var id  = $(this).attr('id');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: method,
                url: action,
                data: formdata,
                success: function(data){
                    alert('suuce');
                    $('#marks'+id).append('Marked, scored: '+data.score+'%');
                },
                error:function(error){ 
                    alert(error.error);
                }
            });
        });

    </script>

</body>
</html>