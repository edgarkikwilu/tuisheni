@extends('layouts.index')
@section('content')
<div class="container" style=" margin-top: 40px; text-align:left;">
    <h3 class="display-5" style="color: #001f9c ; " >MY DASHBOARD</h3>  
  </div>
@include('admin/dashboardnav')       
<div class="container">
                <ul class="nav nav-pills nav-fill" style="margin-top:40px;">
                                <li class="nav-item">
                                  <h4><a class="nav-link admin-header-block">ALL EXAMINATIONS</a></h4>
                                </li>
                              </ul>
                              <nav class="navbar">
                                      <form action="{{ route('admin.filter.examinations') }}" method="POST" class="form-inline col-sm-12">
                                            @csrf
                                        <div class="col-sm-3">
                                          <select name="subject" class="custom-select">
                                                  <option value=""></option>
                                            @foreach ($subjects as $subject)
                                                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                            @endforeach
                                          </select>
                                        </div>
                                      <div class="col-sm-3">
                                            <select name="form" class="custom-select">
                                                    <option value=""></option>
                                                    <option value="1">Form 1</option>
                                                    <option value="2">Form 2</option>
                                                    <option value="3">Form 3</option>
                                                    <option value="1">Form 4</option>
                                                    <option value="2">Form 5</option>
                                                    <option value="3">Form 6</option>
                                            </select>
                                      </div>
                                            <div class="col-sm-3">
                                                <input name="username" class="form-control mr-sm-2" type="search" placeholder="Search By Username" style="width: 100%;">
                                            </div>
                                            <div class="col-sm-3">
                                                <input name="school" class="form-control mr-sm-2" type="search" placeholder="Search By School" style="width: 100%;">
                                            </div>
                                            <div class="col-sm-3" style="margin-top:10px;">
                                                    <input name="title" class="form-control mr-sm-2" type="search" placeholder="Search By Exam Title" aria-label="examtitle" style="width: 100%;">
                                            </div>
                                        <div class="container">
                                            <button class="btn btn-primary" style="margin-top: 10px;" type="submit">Filter Exams</button>
                                            <button class="btn btn-secondary" style="margin-top: 10px; float:right;">Create New Exam</button>
                                      </div>
                                      </form> 
                              </nav>
</div>  
<div class="container" style="margin-top: 10px; border-top: 1px dotted  #566573 ;">

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
                        <div class="row">
                                <div class="col-lg-12">
                                <h5 class="card-title" style="color:#001f9c">{{ $exam->title }}</h5>
                                </div> 
                        </div>
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
                                <div class="col-lg-12">
                                <small style="text-align:center;"><a class="nav-item nav-link" href="#" style="color:#001f9c;">Edit Post Exam</a></small>
                                <small style="text-align:center;"><a class="nav-item nav-link" href="#" style="color:red;">Delete Exam</a></small>
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