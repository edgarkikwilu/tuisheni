@extends('layouts.guest')
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
<div class="col-md-9">
@include('class/classnav')
        <div class="container" style=" text-align: center; margin-top:30px;">
        <h3 class="display-6" style="color: #001a2c; font-size:1.3em;" >{{ strtoupper($subject) }} 
                {{-- WEEK echo date('W')  --}}
        </h3>
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

        <div class="container">
                <div class="row justify-content-center partition">Recommended Notes</div>
                <div class="row">
                        @foreach ($recommended as $note)
                        <div class="col-sm-6"  style="margin-top: 20px;">
                                <div class="card notes-card justify-content-center text-center">
                                        <div class="card-title notes-title">{{ substr($note->title,0,25) }}{{ strlen($note->title) > 25?"...":"" }} <br>

                                        <small class="text-mute">#{{ $note->topic->subject->name }} #{{ $note->topic->name }} #form {{ $note->form }}</small>
                                        
                                        </div>

                                        <div class="card-body notes-article">
                                                {{ substr(strip_tags($note->article),0,120) }}{{ strlen(strip_tags($note->article))>120?"...":"" }}
                                        </div>
                                        <div class="card-footer">
                                                <div class="row">
                                                        <div class="col-sm-5 diff">
                                                                {{ $note->created_at->diffForHumans() }}
                                                        </div>
                                                        <div class="col-sm-3">
                                                                <span>{{ $note->attachements->count() }}
                                                                <i class="fas fa-paperclip"></i>
                                                                </span>
                                                        </div>
                                                        <div class="col-sm-1">
                                                        <a class="a_actions" href="{{ route('single',$note->id) }}"><i class="fas fa-book-open"></i>
                                                        </a>
                                                        </div>
                                                </div>
                                        </div>
                                </div>        
                        </div>
                        @endforeach
        </div>
        </div>
        
        <div class="container">
                <div class="row justify-content-center partition">Other {{ strtoupper($subject) }} Notes</div>
                        <div class="row">
                        @foreach ($other as $note)
                                <div class="col-sm-6 notes-card"  style="margin-top: 20px;">
                                        <div class="card notes-card justify-content-center text-center">
                                                <div class="card-title notes-title">{{ substr($note->title,0,25) }}{{ strlen($note->title) > 25?"...":"" }}
                                                        <br>
                                                        <small class="text-mute">#{{ $note->topic->subject->name }} #{{ $note->topic->name }} #form {{ $note->form }}</small>
                                                </div>
                                                
                                                <div class="card-body notes-article">
                                                        {{ substr(strip_tags($note->article),0,120) }}{{ strlen(strip_tags($note->article))>120?"...":"" }}
                                                </div>
                                                <div class="card-footer">
                                                        <div class="row">
                                                                <div class="col-md-6 diff">
                                                                        {{ $note->created_at->diffForHumans() }}
                                                                </div>
                                                                <div class="col-md-3">
                                                                        <span>{{ $note->attachements->count() }}
                                                                        <i class="fas fa-paperclip"></i>
                                                                        </span>
                                                                </div>
                                                                <div class="col-md-2">
                                                                <a class="a_actions" href="{{ route('single',$note->id) }}"><i class="fas fa-book-open"></i>
                                                                </a>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>        
                                </div>
                        @endforeach
                </div>
        </div>

<div class="container" style="text-align:center; margin-top: 40px;">
        <h4 class="display-6 partition" >RECOMMENDED {{ strtoupper($subject) }} EXAMS WEEK 1</h4>  
</div> 
<div class="container">
        @foreach ($exams as $exam)
                <div class="row" style="border:1px solid #ccc; margin-top:20px;">
                        {{-- <div class="col-lg-2"  style="margin-top: 10px;">
                                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap" class="exam-image" style="width:100%">
                        </div> --}}
                        <div class="col-lg-9">
                                <a href="{{ route('examination.single_exam', $exam->id) }}" ><h5 style="margin-top:10px; font-weight:bold;" >{{ $exam->title }}</h5></a>
                                <div class="row">
                                        <div class="col-lg-6">
                                        <small><label style="width:24%;">Start Time: </label> <b>{{ $exam->start }}</b></small>
                                        </div>
                                        <div class="col-lg-6">
                                        <small><label style="width:22%;">Subject: </label> <b>{{ $exam->subject->name }}</b></small> 
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-lg-6">
                                        <small><label style="width:22%; ">Class: </label><b>Form {{ $exam->form }}</b></small>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-lg-6">
                                        <small><label style="width:22%">Time: </label> <b>{{ $exam->duration }} minutes</b></small>
                                        </div>
                                        <div class="col-lg-6">
                                        <small><label style="width:20%;">1st Prize: </label> <b>{{ $exam->prize }}</b></small>
                                        </div>        
                                </div>
                                <div class="row">
                                        <small><a class="nav-link" href="#">{{ $exam->attachements->count() }} Attachment(s)</a></small>
                                </div>
                                </div>
                                <div class="col-lg-3" style="text-align:center; border-left:1px dotted #ccc;">
                                        <p style="margin-top:10px;"><small class="text-muted">Posted:{{ $exam->created_at->diffForHumans() }}</small></p>
                                        
                                                <small>{{ $exam->user->username }}, {{ $exam->user->school }}</small>
                                        <a href="{{ route('examination.single_exam', $exam->id) }}" class="btn btn-sm btn-success" style="margin-top:10px;"> View Examination</a>
                                        <div>
                                        <small class="badge-pill badge-info">{{ $exam->views }}  Views</small>
                                        </div>
                                        
                                        
                                </div>
                        </div>
        @endforeach
        <div class="see-more">
                <a class="nav-link" href="{{route('examination.examination')}}">See More {{ strtoupper($subject) }} Examinations</a>
        </div>
        
</div>               
<div class="container" style="text-align:center; margin-top: 40px;">
        <h4 class="display-6 partition">RECOMMENDED {{ strtoupper($subject) }} TEACHERS</h4>  
</div>
                
                <div class="container">
                <div class="row">
                        @foreach ($teachers as $teacher)
                        <div class="col-lg-3" style=" text-align: center; margin-top:50px; max-height:300px;">
                                <a href="{{route('author',$teacher->id) }}"> <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="110" height="110">
                                <h4>{{$teacher->firstname}} {{$teacher->lastname}}</h4> </a>
                                <h5><small class="text-muted">{{$teacher->school}}</small></h5>
                                <p><small class="text-muted">{{ substr(strip_tags($teacher->bio),0,90) }}{{ strlen($teacher->bio) > 90?"...":"" }}</small></p>
                        <p><a class="btn btn-warning btn-sm" href="{{route('follow',$teacher->id)}}" role="button">Follow </a></p>
                                </div><!-- /.col-lg-4 -->
                        @endforeach
                <div class="see-more">
                        <a class="nav-link" href="{{route('teachers')}}">See More {{$subject}} Teachers</a>
                </div>
                </div>
                
                <div class="container" style="text-align:center; margin-top:40px;">
                        <h3 class="display-5 partition">SUBSCRIBE NOW</h3>
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