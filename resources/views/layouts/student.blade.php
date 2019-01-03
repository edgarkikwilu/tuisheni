<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>SchoolBata |Student</title>

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Favicon -->
  <link href="{{ asset('/argon/assets/img/brand/favicon.png') }}" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="{{ asset('/argon/assets/vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
  <link href="{{ asset('/argon/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="{{ asset('/argon/assets/css/argon.css') }}" rel="stylesheet">
  <!-- My CSS -->
  <link rel="stylesheet" href="{{ asset('/css/student/dashboard.css') }}">

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

<body>
  <!-- Sidenav -->
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0 brand" href="{{ route('student.studentdash') }}">
        {{-- <img src="./assets/img/brand/blue.png" class="navbar-brand-img" alt="..."> --}}
        {{-- SchoolBata --}}
        <img src="{{ asset('/images/schoolbata.png') }}" width="140" height="130" alt="" srcset="">
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow notifications dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              @foreach ($messages as $message)
                <button type="button" class="btn btn-block btnShowNotification" value="{{ $message->id }}" data-container="body" data-toggle="popover" data-color="default" data-placement="bottom" data-content="{{ $message->description }}">
                    {{ $message->title }}
                  </button>
              @endforeach
            </div>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="{{ asset('/argon/assets/img/theme/team-1-800x800.jpg') }}">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow user-dropdown dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="{{ route('student.profile') }}" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item">
              <a  class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  <i class="ni ni-user-run"></i>
                  Logout
              </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                <img src="{{ asset('/argon/assets/img/brand/blue.png') }}">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('student.studentdash') }}">
              <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('student.notes') }}">
              <i class="ni ni-planet text-blue"></i> My Notes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('student.examinations') }}">
              <i class="ni ni-pin-3 text-orange"></i> My Examinations
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('student.quiz') }}">
              <i class="ni ni-single-02 text-yellow"></i> My Quizzes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('student.assesment') }}">
              <i class="ni ni-bullet-list-67 text-red"></i> My Assesment
            </a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href="{{ route('student.points') }}">
              <i class="ni ni-key-25 text-info"></i> My Points
            </a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" href="{{ route('student.payments') }}">
              <i class="ni ni-circle-08 text-pink"></i> My Transactions
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content">

      <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
    <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block brand" href="{{ route('student.studentdash') }}">Dashboard</a>
        <!-- Form -->
        <div class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="badge badge-{{ $messages->count()>0?"success":"danger" }}"><i class="fa fa-bell"></i>{{ $messages->count() }}</span>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              @foreach ($messages as $message)
                <button type="button" class="btn btn-block btnShowNotification" value="{{ $message->id }}" data-container="body" data-toggle="popover" data-color="default" data-placement="bottom" data-content="{{ $message->description }}">
                    {{ $message->title }}
                  </button>
              @endforeach
            </div>
          </div>
        </div>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
        <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                <img alt="img" src="./assets/img/theme/team-4-800x800.jpg">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                <span class="mb-0 text-sm  font-weight-bold username">{{ Auth::user()->firstname }} {{  Auth::user()->lastname }}</span>
                </div>
            </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="{{ route('student.profile') }}" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item">
                <a  class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="ni ni-user-run"></i>
                Logout
            </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </a>
            </div>
        </li>
        </ul>
    </div>
    </nav>
     
    @yield('content')

      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="{{ asset('/argon/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
  <script src="{{ asset('/argon/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <!-- Optional JS -->
  <script src="{{ asset('/argon/assets/vendor/chart.js/dist/Chart.min.js') }}"></script>
  <script src="{{ asset('/argon/assets/vendor/chart.js/dist/Chart.extension.js') }}"></script>
  <!-- Argon JS -->
  <script src="{{ asset('/argon/assets/js/argon.js') }}"></script>
  <!--My JS-->
  <script src="{{ asset('/js/student/dashboard.js') }}"></script>
</body>

</html>