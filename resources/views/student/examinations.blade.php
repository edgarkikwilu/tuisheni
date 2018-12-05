@extends('layouts.app')
@section('content')
<div class="container" style=" margin-top: 40px; text-align:left;">
    <h3 class="display-5" style="color: #001f9c ; " >MY DASHBOARD</h3>  
  </div>
  @include('student/dashboardnav')
<!--ALL EXAMS-->          
        <ul class="nav nav-pills nav-fill" style="margin-top:40px;">
          <li class="nav-item">
            <h4><a class="nav-link admin-header-block">MY EXAMINATIONS</a></h4>
          </li>
        </ul>
        <nav class="navbar">
            <form action="{{ route('student.filter.examinations') }}" method="POST" class="form-inline col-sm-12">
                @csrf
              <div class="col-sm-3">
                <select name="subject" class="custom-select">
                        <option value="">--SUBJECT--</option>
                  @foreach ($subjects as $subject)
                  <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                  @endforeach
                </select>
              </div>
            <div class="col-sm-3">
                <select name="form" class="custom-select">
                        <option value="">--FORM--</option>
                        <option value="1">Form 1</option>
                        <option value="2">Form 2</option>
                        <option value="3">Form 3</option>
                        <option value="4">Form 4</option>
                        <option value="5">Form 5</option>
                        <option value="6">Form 6</option>
                 </select>
            </div>
            <div class="col-sm-3">
                <select name="type" class="custom-select">
                        <option value="">--EXAM TYPE--</option>
                        @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                </select>
                </div>
              <div class="container">
                <button class="btn btn-primary" style="margin-top: 10px;" type="submit">Filter Exams</button>
            </div>
            </form>
          
        </nav>
        <div class="container" style="margin-top: 10px; border-top: 1px dotted  #566573 ;">
        <div class="row">
          @foreach ($reports as $report)
          <div class="col-lg-3"  style="margin-top: 20px;">
                        <div class="card">
                                <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap">
                                        <div class="container" style="text-align:center;">
                                            <div class="row">
                                            <div class="col-lg-12">
                                            <small class="text-muted" style="color:#001f9c;">{{ $report->exam->user->username }},</small>
                                            <small class="text-muted">{{ $report->exam->user->school }}</small>
                                            </div>
                                            <div class="col-lg-12">
                                                <small class="text-muted">{{ $report->created_at->diffForHumans() }}</small>
                                            </div>
                                            </div>     
                                        </div>
                            <div class="container">
                                <div class="row">
                                <div class="col-lg-12">
                                <h5 class="card-title" style="color:#001f9c">{{ $report->exam->title }}</h5>
                                </div> 
                                </div>
                            </div>
                            
                              <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>Scored: <small class="text-muted">{{ $report->score }}</small> ({{ $report->grade }})</p>
                                        <p>1st Price: <small class="text-muted">{{ $report->exam->prize }}</small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                <div class="col-lg-12">
                                        <small class="text-muted">#{{ $report->exam->subject->name }} #{{ $report->exam->examType->name }}</small>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
          @endforeach
        </div>
          </div>
        
        <!--END ALL EXAMS-->
@endsection