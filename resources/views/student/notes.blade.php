@extends('layouts.app')
@section('content')
<div class="container" style=" margin-top: 40px; text-align:left;">
    <h3 class="display-5" style="color: #001f9c ; " >MY DASHBOARD</h3>  
  </div>
  @include('student/dashboardnav')

  <!--ALL NOTES -->
<div class="container">
  <ul class="nav nav-pills nav-fill" style="margin-top:40px;">
    <li class="nav-item">
      <h4><a class="nav-link admin-header-block">MY NOTES</a></h4>
    </li>
  </ul>
<nav class="navbar">
    <form action="{{ route('student.filter.notes') }}" method="POST" class="form-inline col-sm-12">
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
      <div class="col-sm-3"><input name="username" class="form-control mr-sm-2" type="search" placeholder="Search By Username" aria-label="username" style="width: 100%;"></div>
      <div class="col-sm-3"><input name="school" class="form-control mr-sm-2" type="search" placeholder="Search By School" aria-label="school" style="width: 100%;"></div>
      <div class="container">
          <button class="btn btn-primary" style="margin-top: 10px;" type="submit">Filter Notes</button>
      </div>
</form>
<a href="{{route('student.createnotes')}}"><button class="btn btn-secondary" style="margin-top: 10px; float:right;" >Create New Notes</button></a>
</nav>
</div>

      <div class="container" style="margin-top: 10px; border-top: 1px dotted  #566573 ;">
        <div class="row">
          @foreach ($notes as $note)
          <div class="col-lg-3"  style="margin-top: 20px;">
                <div class="card">
                        <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap">
                        <div class="card-body">
                                <div class="container" style="text-align:center; margin-top:-10px;">
                                        <div class="row">
                                        <div class="col-lg-12">
                                        <small class="text-muted" style="color:#001f9c;">{{ $note->user->username }},</small>
                                        <small class="text-muted">{{ $note->user->school }}</small>
                                        </div>
                                        <div class="col-lg-12">
                                        <small class="text-muted">{{ $note->created_at }}</small>
                                        </div>
                                        </div>     
                                </div>
                        <div class="container">
                                <div class="row">
                                        <div class="col-lg-12">
                                                <a href="{{route('single',$note->id)}}" ><h5 style="margin-top:10px;" >{{ $note->title }}</h5></a>
                                        </div> 
                                </div>
                        </div>
                        <div class="container">
                                <div class="row">
                                        <div class="col-lg-12">
                                                <small class="text-muted">#{{ $note->topic->name }} #{{ $note->subtopic->name }}</small>
                                        </div>
                                </div>
                        </div>
                        </div>
                        </div>
                </div>
          @endforeach
      </div>
      </div>
      
      <!--END ALL NOTES -->

  @endsection