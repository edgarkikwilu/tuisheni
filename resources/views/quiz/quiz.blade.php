@extends('layouts.index')
@section('content')
<div class="row">
     @include('sidebar_subject')
     <div class="col-md-9">

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
        <div class="col-sm-3"><input name="username" class="form-control mr-sm-2" type="search" placeholder="Search By Username" aria-label="username" style="width: 100%;"></div>
        <div class="col-sm-3"><input name="school" class="form-control mr-sm-2" type="search" placeholder="Search By School" aria-label="school" style="width: 100%;"></div>
        <div class="col-sm-3" style="margin-top:10px;"><input name="title" class="form-control mr-sm-2" type="search" placeholder="Search By Quiz Title" aria-label="examtitle" style="width: 100%;"></div>
        <div class="container">
        <button class="btn btn-primary" style="margin-top: 10px;" type="submit">Filter Quizzes</button>
        </div>
        </form>

</nav>
</div>

<!--ALL QUIZZES-->
<div class="container" style="text-align:left; margin-top: 40px;">
<h3 class="display-5" style="color: #000 ; " >ALL QUIZZES</h3> 

@php
    $count = 0;
@endphp

@foreach ($quizzes as $quiz)
<div class="row" style="border:1px solid #ccc; margin-top:20px;">
        <div class="col-lg-2"  style="margin-top: 10px;">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap" style="width:100%">
        </div>
        <div class="col-lg-7">
                        <span><h5 style="margin-top:10px; font-weight:bold;" >{{ $quiz->title }}</h5></span>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <small><label style="width:25%;">Subject: </label> <b>{{ $quiz->subject->name }}</b></small>
                                    </div>
                                    <div class="col-lg-6">
                                        <small><label style="width:25%; ">Class: </label><b>Form {{ $quiz->topic->form }}</b></small>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-lg-6">
                                        <small><label style="width:25%;">Time: </label> <b>{{ $quiz->created_at->diffForHumans() }}</b></small>
                                     </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <small><label style="width:25%;">1st Price: </label> <b>5000 Points</b></small>
                                    </div>
                                    <div class="col-lg-6">
                                        <small><label style="width:40%; ">{{ $quiz->questions->count() }} Questions </label><em>@ {{ $quiz->prize }} Points</em></small>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                    <small><label style="margin-right:10px; ">Topic: </label> <b>{{ $quiz->topic->name }}</b></small>
                                    </div>
                                </div>
                         </div>
        
        <div class="col-lg-3" style="text-align:center; border-left:1px dotted #ccc;">
                <p style="margin-top:10px;"><small class="text-muted">Posted: {{ $quiz->created_at->diffForHumans() }}</small></p>
                    <small>{{ $quiz->user->username }}, {{ $quiz->user->school }}</small>
                <a href="{{ route('attempt.quiz.quiz', $quiz->id) }}" class="btn btn-sm btn-secondary" style="margin-top:10px;"> Attempt Quiz</a>
                <small><span class="nav-link">{{ $quiz->attempts }} Attempts</span></small>
                <small><span class="nav-link">Success rates {{ round($stats[$count]->count() / $quiz->attempts * 100, 2) }} %</span></small>
        </div>
</div>
@php
    $count++
@endphp
@endforeach
</div>
</div>
</div>

<!--END ALL QUIZZES-->

@endsection