@extends('layouts.index')
@section('content')
<div class="row">
        @include('sidebar_subject')
        <div class="col-md-9">
   
<div class="container" style=" margin-top: 40px;">
    <h3 class="display-5" style="color: #001f9c ; " >Filter Students</h3>  
  <nav class="navbar">
    <form action="{{ route('filter.students') }}" method="POST" class="form-inline col-sm-12">
        @csrf
    <div class="col-sm-3">
        <select name="form" class="custom-select">
            <option value=""></option>
            <option value="1">Form 1</option>
            <option value="2">Form 2</option>
            <option value="3">Form 3</option>
            <option value="4">Form 4</option>
            <option value="5">Form 5</option>
            <option value="6">Form 6</option>
            </select>
    </div>
      <div class="col-sm-3"><input name="username" class="form-control mr-sm-2" type="search" placeholder="Search By Username" style="width: 100%;"></div>
      <div class="col-sm-3"><input name="school" class="form-control mr-sm-2" type="search" placeholder="Search By School" style="width: 100%;"></div>
      <div class="container">
          <button class="btn btn-primary" style="margin-top: 10px;" type="submit">Filter Students</button>
    </div>
    </form>
  
</nav>
</div>
<div class="container">
    <div class="row">
        @foreach ($students as $student)
        <div class="col-lg-3" style=" text-align: center; margin-top:50px;">
                <div class="container">
                    <a href="#"> <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="110" height="110"></a>
                </div>
                <div class="container">
                    <a href="{{ route('author', $student->id) }}"><label>{{ $student->username }}</label> </a><br>
                    <small class="text-muted">{{ $student->school }}</small><br>
                    <p><small class="text-muted">{{ $student->bio }}</small></p>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ route('follow.student') }}" class="btn btn-sm btn-primary">Follow</a>
                        <a href="{{ route('message.student') }}" class="btn btn-sm btn-success">Message</a>
                    </div>
                    <small><a class="nav-link" href="#">30 Friends</a></small>
                </div>
                
            </div>
        @endforeach
    </div>
</div>
        </div>
</div>
@endsection