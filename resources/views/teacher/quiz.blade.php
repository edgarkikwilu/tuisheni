@extends('teacher.topdash')
@section('content')
<div class="container" style=" margin-top: 40px; text-align:left;">
    <h3 class="display-5" style="color: #001f9c ; " >MY QUIZZES</h3>  
  </div>

<div class="container" style="margin-top: 10px; border-top: 1px dotted  #566573 ;">
<nav class="navbar" style="margin-top: 40px;">
        <form action="{{ route('filter.quiz.quiz') }}" method="POST" class="form-inline col-sm-12">
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
                        <option value="1">Form 1</option>
                        <option value="2">Form 2</option>
                        <option value="3">Form 3</option>
                        <option value="4">Form 4</option>
                        <option value="5">Form 5</option>
                        <option value="6">Form 6</option>
                </select>
        </div>
        <div class="col-sm-3"><input name="quiztitle" class="form-control mr-sm-2" type="search" placeholder="Search By Quiz Title" aria-label="username" style="width: 100%;"></div>
        <div class="col-sm-3"><input name="topicname" class="form-control mr-sm-2" type="search" placeholder="Search By Topic Name" aria-label="school" style="width: 100%;"></div>
        <div class="col-sm-3" style="margin-top:10px;"><input name="title" class="form-control mr-sm-2" type="search" placeholder="Search By Quiz Title" aria-label="examtitle" style="width: 100%;"></div>
        <div class="container">
        <button class="btn btn-primary" style="margin-top: 10px;" type="submit">Filter Quizzes</button>
        </div>
        </form>

</nav>
</div>

<!--ALL QUIZZES-->
<div class="container" style="text-align:left; margin-top: 40px;">

@foreach ($quizzes as $quiz)
<div class="row" style="border:1px solid #ccc; margin-top:20px;">
    <div class="col-lg-2"  style="margin-top: 10px;">
            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap" style="width:100%">
    </div>
    <div class="col-lg-7">
    <a href="#" ><h5 style="margin-top:10px; font-weight:bold;" >{{ $quiz->title }}</h5></a>
            <div class="row">
                <div class="col-lg-6">
                    <small><label style="width:25%;">Subject: </label> <b>Physics</b></small>
                </div>
                <div class="col-lg-6">
                    <small><label style="width:25%; ">Class: </label><b>Form 3</b></small>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-6">
                    <small><label style="width:25%;">Time: </label> <b>10 minutes</b></small>
                 </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <small><label style="width:25%;">1st Price: </label> <b>5000 Points</b></small>
                </div>
                <div class="col-lg-6">
                    <small><label style="width:40%; ">10 Questions </label><em>@ 5 Points</em></small>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <small><label style="margin-right:10px; ">Topic: </label> <b>Introduction to physics</b></small>
                </div>
            </div>
     </div>
    <div class="col-lg-3" style="text-align:center; border-left:1px dotted #ccc;">
            <p style="margin-top:10px;"><small class="text-muted">Posted:7 mins ago</small></p>
            
                <small>Chodo, Eagles Secondary SChool</small>
            <button type="button" class="btn btn-sm btn-secondary" style="margin-top:10px;"> Attempt Quiz</button>
            <small><a class="nav-link" href="#">30 Attempts</a></small>
            <small><a class="nav-link" href="#" style="color:red;">Delete</a></small>

            
    </div>
</div> 
@endforeach

</div>
</div>
</div>

<!--END ALL QUIZZES-->

@endsection