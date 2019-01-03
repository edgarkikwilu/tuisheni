@extends('layouts.guest')
@section('content')
<div class="content">
    <div class="row">
<div class="col-md-9">

<div class="container" style="margin-top: 10px; border-top: 1px dotted  #566573 ;">
<nav class="navbar" style="margin-top: 40px;">
        <form action="{{ route('filter.quiz.quiz') }}" method="POST" class="form-inline col-sm-12">
                @csrf
        <div class="row">
                <div class="col-sm-2">
                        <select name="subject" class="custom-select form-control">
                        <option value="">--SUJBJECT--</option>
                        @foreach ($subjects as $subject)
                        <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                        @endforeach
                        </select>
                        </div>
                        <div class="col-sm-2">
                            <select name="form" class="custom-select form-control">
                                    <option value="1">Form 1</option>
                                    <option value="2">Form 2</option>
                                    <option value="3">Form 3</option>
                                    <option value="4">Form 4</option>
                                    <option value="5">Form 5</option>
                                    <option value="6">Form 6</option>
                            </select>
                        </div>
                        <div class="col-sm-2"><input name="username" class="form-control mr-sm-2" type="search" placeholder="Search By Username" aria-label="username" style="width: 100%;"></div>
                        <div class="col-sm-2"><input name="school" class="form-control mr-sm-2" type="search" placeholder="Search By School" aria-label="school" style="width: 100%;"></div>
                        <div class="col-sm-2"><input name="title" class="form-control mr-sm-2" type="search" placeholder="Search By Quiz Title" aria-label="examtitle" style="width: 100%;"></div>
                        <div class="col-md-2">
                            <button class="btn btn-sm btn-block btn-icon btn-success" style="margin-top: 10px;" type="submit">
                                    <span class="btn-inner--icon"><i class="fas fa-filter"></i></span>
                                    <span class="btn-inner--text">Filter Quizzes</span>
                            </button>
                        </div>
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
        {{-- <div class="col-lg-2"  style="margin-top: 10px;">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap" style="width:100%">
        </div> --}}
        <div class="col-offset-2 col-md-9">
            <span><h5 style="margin-top:10px; font-weight:bold;" >{{ $quiz->title }}</h5></span>
            <div class="row">
                <div class="col-md-6">
                    <small><label>Subject: </label> <b>{{ $quiz->subject->name }}</b></small>
                </div>
                <div class="col-md-6">
                    <small><label>Class: </label><b>Form {{ $quiz->topic->form }}</b></small>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <small><label>Time: </label> <b>{{ $quiz->time }}</b></small>
                    </div>
                    <div class="col-md-6">
                    <small><label >{{ $quiz->questions->count() }} Questions </label><em>@ {{ $quiz->prize }} Points</em></small>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                <small><label>Topic: </label> <b>{{ $quiz->topic->name }}</b></small>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                        <small class="text-muted" style="font-style:italic;">{{ $quiz->user->username }}, {{ $quiz->user->school }}</small>
                </div>
            </div>
        </div>
        
        <div class="col-md-3" style="text-align:center; border-left:1px dotted #ccc;">
             <div class="card" style="background-color:gainsboro; z-index:10px; box-shadow:green 3px 3px 3px 4px; margin-top:5px;">
                <p style="margin-top:10px;"><small class="text-muted">Posted: {{ $quiz->created_at->diffForHumans() }}</small></p>
                
                <a href="{{ route('attempt.quiz.quiz', $quiz->id) }}" class="btn btn-sm btn-success" style="margin-top:10px;"> Attempt Quiz</a>
                <div class="div">
                    <span class="badge badge-pill badge-danger">{{ $quiz->attempts }} Attempts</span>
                </div>
                <div> 
                    <span style="font-size:0.8em;"> Success rates </span>
                    <span class="badge badge-pill badge-success">{{ round($stats[$count]->count() / $quiz->attempts * 100, 2) }} %</span>
                </div>     
            </div>   
        </div>
</div>
@php
    $count++
@endphp
@endforeach

{{ $quizzes->links() }}
</div>
</div>
</div>
</div>

<!--END ALL QUIZZES-->

@endsection