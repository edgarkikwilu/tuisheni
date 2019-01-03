<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('/teacher/assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('/teacher/assets/img/favicon.png') }}">
  <title>
    SchoolBata |Teacher
  </title>
  <!--     Fonts and icons     -->
  
  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
  <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
  <!-- Nucleo Icons -->
  <link href="{{ asset('/teacher//assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="{{ asset('/teacher/assets/css/black-dashboard.css') }}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  {{-- <link href="../assets/demo/demo.css" rel="stylesheet" /> --}}
  <link href="{{ asset('css/teacher/dashboard.css') }}" rel="stylesheet" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=wbey0h1l7jz2lp8lmlox7olwvkkbg9hxihsn3a4ls25xywr0"></script>
  <script>
      tinymce.init({ 
          selector: 'textarea',
          plugins: 'media link',
          api_key: 'wbey0h1l7jz2lp8lmlox7olwvkkbg9hxihsn3a4ls25xywr0 ',
          height: 500
      });
  </script>
</head>

<body class="">
  <div class="wrapper">
    <div class="sidebar">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
      <div class="sidebar-wrapper">
        <div class="logo">MENU</div>
        <ul class="nav">
          <li>
            <a href="{{ route('teacher.teacherdash') }}">
              <i class="tim-icons icon-chart-pie-36"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="{{ route('teacher.notes') }}">
              <i class="tim-icons icon-notes"></i>
              <p>My Notes</p>
            </a>
          </li>
          <li>
            <a href="{{ route('teacher.examinations') }}">
              <i class="tim-icons icon-bullet-list-67"></i>
              <p>My Examinations</p>
            </a>
          </li>
          <li>
            <a href="{{ route('teacher.quiz') }}">
              <i class="tim-icons icon-bell-55"></i>
              <p>My Quizzes</p>
            </a>
          </li>
          <li>
              <a href="{{ route('teacher.points') }}">
              <i class="tim-icons icon-app"></i>
              <p>My Points</p>
            </a>
          </li>
          <li>
            <a href="{{ route('teacher.payments') }}">
              <i class="tim-icons icon-coins"></i>
              <p>My Payments</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle d-inline">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('/images/schoolbata.png') }}" width="140" height="130" alt="" srcset="">
            </a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto">
              <li class="dropdown nav-item">
                <a href="javascript:void(0)" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="notification d-none d-lg-block d-xl-block"></div>
                  <i class="fa fa-bell"></i>
                  {{-- <p class="d-lg-none">
                    Notifications
                  </p> --}}
                </a>
                <ul class="dropdown-menu dropdown-menu-right dropdown-navbar">
                  @foreach ($messages as $message)
                    <li class="nav-link">
                      <button type="button" class="btn btn-block btnShowNotification" value="{{ $message->id }}" data-container="body" data-toggle="popover" data-color="default" data-placement="bottom" data-content="{{ $message->description }}">
                        {{ $message->title }}
                      </button>
                    </li>
                  @endforeach
                </ul>
              </li>
              <li class="dropdown nav-item">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <div class="photo">
                    <img src="{{ asset('/teacher/assets/img/anime3.png') }}" alt="Profile Photo">
                  </div>
                  <b class="caret d-none d-lg-block d-xl-block"></b>
                </a>
                <ul class="dropdown-menu dropdown-navbar">
                  <li class="nav-link">
                    <a href="{{ route('teacher.profile') }}" class="dropdown-item">
                      <i class="ni ni-single-02"></i>
                      <span>My profile</span>
                    </a>
                  </li>
                  <li class="dropdown-divider"></li>
                  <li class="nav-link">
                    <a  class="dropdown-item" href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      <i class="ni ni-user-run"></i>
                      Logout
                    </a>
    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                  </li>
                </ul>
              </li>
              <li class="separator d-lg-none"></li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <i class="tim-icons icon-simple-remove"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- End Navbar -->
      @yield('content')
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Background</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger background-color">
            <div class="badge-colors text-center">
              <span class="badge filter badge-primary active" data-color="primary"></span>
              <span class="badge filter badge-info" data-color="blue"></span>
              <span class="badge filter badge-success" data-color="green"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="adjustments-line text-center color-change">
          <span class="color-label">LIGHT MODE</span>
          <span class="badge light-badge mr-2"></span>
          <span class="badge dark-badge ml-2"></span>
          <span class="color-label">DARK MODE</span>
        </li>
      </ul>
    </div>
  </div>
  <footer class="footer">
      <div class="container-fluid">
        <ul class="nav">
          <li class="nav-item">
            <a href="javascript:void(0)" class="nav-link">
              QutCode
            </a>
          </li>
          <li class="nav-item">
            <a href="javascript:void(0)" class="nav-link">
              About Us
            </a>
          </li>
          <li class="nav-item">
            <a href="javascript:void(0)" class="nav-link">
              Blog
            </a>
          </li>
        </ul>
        <div class="copyright">
          ©
          <script>
            document.write(new Date().getFullYear())
          </script> made with <i class="tim-icons icon-heart-2"></i> by
          <a href="javascript:void(0)" target="_blank">QutCode</a> for a better education.
        </div>
      </div>
    </footer>
  {{-- <!--   Core JS Files   -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js"></script>
  <script src="{{ asset('/js/jquery.js') }}"></script>
  <script src="{{ asset('/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('/js/bootstrap.js') }}"></script>
  <script src="{{ asset('/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
  <!-- Chart JS -->
  <script src="{{ asset('js/plugins/chartjs.min.js') }}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ asset('/js/plugins/bootstrap-notify.js') }}"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('/js/black-dashboard.min.js') }}"></script> --}}
  
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <!--   Core JS Files   -->
  <script src="{{ asset('/argon/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('/argon/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/teacher/assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>

  <!-- Chart JS -->
  <script src="{{ asset('/teacher/assets/js/plugins/chartjs.min.js') }}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ asset('/teacher/assets/js/plugins/bootstrap-notify.js') }}"></script>
  <!-- Control Center for Black Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('/teacher/assets/js/black-dashboard.min.js?v=1.0.0') }}"></script>
  <script src="{{ asset('js/teacher/dashboard.js') }}"></script>
  
  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');
        $navbar = $('.navbar');
        $main_panel = $('.main-panel');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');
        sidebar_mini_active = true;
        white_color = false;

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();



        $('.fixed-plugin a').click(function(event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .background-color span').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data', new_color);
          }

          if ($main_panel.length != 0) {
            $main_panel.attr('data', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data', new_color);
          }
        });

        $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            sidebar_mini_active = false;
            blackDashboard.showSidebarMessage('Sidebar mini deactivated...');
          } else {
            $('body').addClass('sidebar-mini');
            sidebar_mini_active = true;
            blackDashboard.showSidebarMessage('Sidebar mini activated...');
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });

        $('.switch-change-color input').on("switchChange.bootstrapSwitch", function() {
          var $btn = $(this);

          if (white_color == true) {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').removeClass('white-content');
            }, 900);
            white_color = false;
          } else {

            $('body').addClass('change-background');
            setTimeout(function() {
              $('body').removeClass('change-background');
              $('body').addClass('white-content');
            }, 900);

            white_color = true;
          }


        });

        $('.light-badge').click(function() {
          $('body').addClass('white-content');
        });

        $('.dark-badge').click(function() {
          $('body').removeClass('white-content');
        });
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
                    $('select[name="topic"]').append('<option class="selector_options" value="'+ key +'">' + value + '</option>');
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
                          $('select[name="subtopic"]').append('<option class="selector_options" value="'+ key +'">' + value + '</option>');
                      });
                  }
              });
          } else {
              $('select[name="subtopic"]').empty();
          }
      
      });

      $('#btnAddNewQuestion').on('click', function(e){
            $('.qn').clone().appendTo('.qncontainer');
        });
    });
    
  </script>
</body>

</html>