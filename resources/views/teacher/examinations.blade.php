@extends('layouts.teacher')
@section('content')

<div class="content">
        <div class="row">
                <form action="{{ route('teacher.filter.examinations') }}" class="form-inline col-sm-12" method="POST">
                        @csrf
                <div class="col-sm-3">
                <select name="subject" class=" form-control selector">
                        <option class="selector_options" value="">--Subject--</option>
                        @foreach ($subjects as $subject)
                        <option class="selector_options" value="{{ $subject->id }}">{{ $subject->name }}</option>
                        @endforeach
                </select>
                </div>
                <div class="col-sm-3">
                        <select name="form" class=" form-control selector">
                                <option class="selector_options" value="">--Form--</option>
                                <option class="selector_options" value="1">Form 1</option>
                                <option class="selector_options" value="2">Form 2</option>
                                <option class="selector_options" value="3">Form 3</option>
                                <option class="selector_options" value="1">Form 4</option>
                                <option class="selector_options" value="2">Form 5</option>
                                <option class="selector_options" value="3">Form 6</option>
                        </select>
                </div>
                <div class="col-sm-3" style="margin-top:10px;"><input name="title" class="form-control mr-sm-2" type="search" placeholder="Search By Exam Title" aria-label="examtitle" style="width: 100%;"></div>
                <div class="col-sm-3">
                        <button class="btn btn-primary" style="margin-top: 10px;" type="submit">Filter Exams</button>
                </div>
                </form>
                <a href="{{ route('teacher.create.exam') }}" class="btn btn-secondary" style="margin-top: 10px; float:right;">Create New Exam</a>
        </div>

        @foreach ($exams as $exam)
        <div class="row" style="border:1px solid #ccc; margin-top:20px;">
                        <div class="col-md-2"  style="margin-top: 10px;">
                                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap" style="width:100%">
                        </div>
                        <div class="col-md-7">
                                <a href="#" ><h5 style="margin-top:10px; font-weight:bold;" >{{ $exam->title }}</h5></a>
                                <div class="row">
                                        <div class="col-md-6">
                                        <small><label style="width:22%;">Start Time: </label> <b>{{ $exam->start }}</b></small>
                                        </div>
                                        <div class="col-md-6">
                                        <small><label style="width:22%;">Subject: </label> <b>{{ $exam->subject->name }}</b></small> 
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-md-6">
                                        <small><label style="width:22%; ">Class: </label><b>Form {{ $exam->form }}</b></small>
                                        </div>
                                        <div class="col-md-6">
                                        <small>Booked: <span class="badge-dark">{{ $exam->attendances->count() }}</span></small>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-lg-6">
                                        <small><label style="width:22%">Time: </label> <b>{{ $exam->duration }} minutes</b></small>
                                        </div>
                                        <div class="col-md-6">
                                                <small>Attendance: <span class="badge-dark">{{ $exam->attendances->count() }}</span></small>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-md-6">
                                        <small><label style="width:20%;">1st Prize: </label> <b>{{ $exam->prize }}</b></small>
                                        </div>
                                        <div class="col-md-6">
                                        <small>Submitted: <span class="badge-dark">{{ $exam->answers->count() }}</span></small>
                                        </div>
                                </div>
                                </div>
                                <div class="col-lg-3" style="text-align:center; border-left:1px dotted #ccc;">
                                        <p style="margin-top:10px;"><small class="text-muted">Posted:{{ $exam->created_at->diffForHumans() }}</small></p>
                                        
                                                <small>{{ $exam->user->username }}, {{ $exam->user->school }}</small>
                                        <a href="{{ route('teacher.single_exam', $exam->id) }}" class="btn btn-sm btn-secondary" style="margin-top:10px;"> View Examination</a>
                                        <small><a class="nav-link" href="#">{{ $exam->views }} Views</a></small>
                                        <small style="text-align:center;">
                                                <form id="" class="ondoaPostForms" action="{{ route('teacher.delete.examination') }}" method="post">
                                                        @csrf
                                                        <input type="hidden" value="{{ $exam->id }}" name="id">
                                                        <button id="{{ $exam->id }}s" type="submit" class="btn btn-sm btn-danger btn-block btnOndoaPosts">Delete Exam 
                                                                <i class="tim-icons icon-trash-simple"></i>
                                                        </button>
                                                </form>
                                        </small>
                                </div>
        </div> 
        @endforeach             
</div>
        <!--END ALL EXAMS-->
@endsection