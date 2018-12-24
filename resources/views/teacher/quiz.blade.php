@extends('layouts.teacher')
@section('content')

<div class="content" style="margin-top: 10px; border-top: 1px dotted  #566573 ;">
<nav class="navbar" style="margin-top: 40px;">
        <form action="{{ route('filter.quiz.quiz') }}" method="POST" class="form-inline col-sm-12">
                @csrf
        <div class="col-sm-3">
        <select name="subject" class="custom-select">
        <option class="selector_options" value=""></option>
        @foreach ($subjects as $subject)
        <option class="selector_options" value="{{ $subject->id }}">{{ $subject->name }}</option>
        @endforeach
        </select>
        </div>
        <div class="col-sm-3">
                <select name="form" class="custom-select">
                    <option class="selector_options" value="">--FORM--</option>
                    <option class="selector_options" value="1">Form 1</option>
                    <option class="selector_options" value="2">Form 2</option>
                    <option class="selector_options" value="3">Form 3</option>
                    <option class="selector_options" value="4">Form 4</option>
                    <option class="selector_options" value="5">Form 5</option>
                    <option class="selector_options" value="6">Form 6</option>
                </select>
        </div>
        <div class="col-sm-3"><input name="quiztitle" class="form-control mr-sm-2" type="search" placeholder="Search By Quiz Title" aria-label="username" style="width: 100%;"></div>
        <div class="col-sm-3"><input name="topicname" class="form-control mr-sm-2" type="search" placeholder="Search By Topic Name" aria-label="school" style="width: 100%;"></div>
        <div class="col-sm-3" style="margin-top:10px;"><input name="title" class="form-control mr-sm-2" type="search" placeholder="Search By Quiz Title" aria-label="examtitle" style="width: 100%;"></div>
        <div class="container">
        <button class="btn btn-sm btn-primary" style="margin-top: 10px;" type="submit">Filter Quizzes</button>
        <a href="{{route('teacher.createquiz')}}" class="btn btn-sm btn-secondary" style="float:right;">Create New Quiz</a>
        </div>
        </form>
</nav>

@foreach ($quizzes as $quiz)
<div class="row" style="border:1px solid #ccc; margin-top:20px;">
    <div class="col-lg-2"  style="margin-top: 10px;">
            <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap" style="width:100%">
    </div>
    <div class="col-lg-7">
    <a href="{{ route('attempt.quiz.quiz', $quiz->id) }}" ><h5 style="margin-top:10px; font-weight:bold;" >{{ $quiz->title }}</h5></a>
            <div class="row">
                <div class="col-lg-6">
                    <small><label style="width:25%;">Subject: </label> <b>{{ $quiz->subject->name }}</b></small>
                </div>
                <div class="col-lg-6">
                    <small><label style="width:25%; ">Class: </label><b>Form {{ $quiz->form }}</b></small>
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-6">
                    <small><label style="width:25%;">Time: </label> <b>{{ $quiz->time }}</b></small>
                 </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <small><label style="width:25%;">1st Price: </label> <b>{{ $quiz->prize }} Points</b></small>
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
        <p style="margin-top:10px;"><small class="text-muted">Posted:{{ $quiz->created_at->diffForHumans() }}</small></p>
        <a href="{{ route('attempt.quiz.quiz', $quiz->id) }}" class="btn btn-sm btn-secondary" style="margin-top:10px;">Preview Quiz</a>
        <small><div>{{ $quiz->attempts }} Attempts</div></small>
        <small style="text-align:center;">
            <form id="" class="ondoaPostForms" action="{{ route('teacher.delete.quiz') }}" method="post">
                @csrf
                <input type="hidden" value="{{ $quiz->id }}" name="id">
                <button id="{{ $quiz->id }}s" type="submit" class="btn btn-sm btn-danger btn-block btnOndoaPosts">Delete Quiz 
                    <i class="tim-icons icon-trash-simple"></i>
                </button>
            </form>
        </small>
    </div>
</div> 
@endforeach

</div>

@endsection