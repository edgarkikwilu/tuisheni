@extends('layouts.index')
@section('content')
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

<div class="row">
@include('sidebar_subject')
<div class="col-md-9">
@include('class/classnav')
        <div class="container" style=" text-align: center; margin-top:30px;">
        <h3 class="display-6" style="color: #001f9c ; " >{{$subject}} TOP 3 WEEK <?php echo date('W') ?></h3>
        </div>
        
        <div class="container">
                <div class="row">
                        @foreach ($topStudents as $student)
                        <div class="col-lg-4" style=" text-align: center; margin-top:30px;">
                                <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="110" height="110">
                                <h4>{{$student->user->firstname}} {{$student->user->lastname}}</h4>
                                <h5><small class="text-muted">{{$student->user->school}}</small></h5>
                                
                                <p>AVERAGE: {{$student->score}}%</p>
                                <p><a class="btn btn-secondary" href="{{ route('student/results') }}" role="button">View Results &raquo;</a></p>
                        </div>
                        @endforeach  
                </div>
        </div>
        

<div class="container" style="text-align:center; margin-top: 40px;">
        <h4 class="display-6" style="color: #001f9c ; " >RECOMMENDED PHYSICS EXAMS WEEK 1</h4>  
</div> 
<div class="container">
        <div class="row">
                @foreach ($exams as $exam)
                <div class="col-lg-3"  style="margin-top: 20px;">
                        <div class="card">
                                <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap">
                                        <div class="container" style="text-align:center;">
                                        <div class="row">
                                        <div class="col-lg-12">
                                        <small class="text-muted" style="color:#001f9c;">{{ $exam->user->username }},</small>
                                        <small class="text-muted">{{ $exam->user->school }}</small>
                                        </div>
                                        <div class="col-lg-12">
                                                <small class="text-muted">{{ $exam->created_at->diffForHumans() }}</small>
                                        </div>
                                        </div>     
                                        </div>
                        <div class="container">
                                <a href="{{ route('single') }}">     
                                        <div class="row">
                                        <div class="col-lg-12">
                                                <h5 class="card-title" style="color:#001f9c">{{ $exam->title }}</h5>
                                        </div> 
                                </div>
                                </a>
                        </div>
                        
                                <div class="container">
                                <div class="row">
                                <div class="col-lg-12">
                                        <p>Starts in: <small class="text-muted">{{ $exam->start }}</small></p>
                                        <p>1st Price: <small class="text-muted">{{ $exam->prize }}</small></p>
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
        @endforeach
        </div>
        <ul class="nav justify-content-center">
                <li class="nav-item">
                        <a class="nav-link" href="{{route('examination')}}">See More {{$subject}} Examinations</a>
                </li>
                
                </ul>
        
</div>               
<div class="container" style="text-align:center; margin-top: 40px;">
        <h4 class="display-6" style="color: #001f9c;">RECOMMENDED {{$subject}} TEACHERS</h4>  
</div>
                
                <div class="container">
                <div class="row">
                        @foreach ($teachers as $teacher)
                        <div class="col-lg-3" style=" text-align: center; margin-top:50px;">
                                <a href="{{route('author',$teacher->id) }}"> <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="110" height="110">
                                <h4>{{$teacher->firstname}} {{$teacher->lastname}}</h4> </a>
                                <h5><small class="text-muted">{{$teacher->school}}</small></h5>
                                <p><small class="text-muted">{{$teacher->bio}}</small></p>
                        <p><a class="btn btn-secondary" href="{{route('follow',$teacher->id)}}" role="button">Follow </a></p>
                                </div><!-- /.col-lg-4 -->
                        @endforeach
                <ul class="nav justify-content-center">
                        <li class="nav-item">
                                <a class="nav-link" href="{{route('teachers')}}">See More {{$subject}} Teachers</a>
                        </li>
                        
                        </ul>
                </div>
                
                <div class="container" style="text-align:center; margin-top:40px;">
                        <h3 class="display-5" style="color: #001f9c ; ">SUBSCRIBE NOW</h3>
                        <p class="lead">Subscribe our packages now to get different experiences with your education career.</p>
                </div>
                
                        <div class="container" style="margin-top:40px;">
                        <div class="card-deck mb-4 text-center">
                                @foreach ($packages as $package)
                                <div class="card mb-4 box-shadow">
                                        <div class="card-header">
                                        <h4 class="my-0 font-weight-normal">{{$package->name}}</h4>
                                        </div>
                                        <div class="card-body">
                                        <h1 class="card-title pricing-card-title">Tsh {{$package->price}}
                                                <small class="text-muted">/ {{$package->duration}}</small></h1>
                                        <ul class="list-unstyled mt-3 mb-4">
                                        @foreach ($package->packageSpecs as $spec)
                                        <li>{{$spec->name}}</li>
                                        @endforeach
                                        </ul>
                                        <a href="#" class="btn btn-lg btn-block btn-primary">Get Started</a>
                                        </div>
                                        </div>
                                @endforeach
                        </div>
                        </div>                
</div>
</div>
</div>
<!--
  -->

<!-- Three columns of text below the carousel -->
 
     

@endsection