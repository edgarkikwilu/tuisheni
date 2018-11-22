@extends('layouts.index')
@section('content')

<div class="container" style=" margin-top: 40px;">
    <h3 class="display-5" style="color: #001f9c ; " >Filter Teachers</h3>  
</div>
  <nav class="navbar">
    <form class="form-inline col-sm-12">
      <div class="col-sm-3">
        <select class="custom-select">
          <option value="1">Physics</option>
          <option value="2">Biology</option>
          <option value="3">Chemistry</option>
          <option value="1">Mathematics</option>
          <option value="2">ICT</option>
          <option value="3">Technical Education</option>
          <option value="1">Kiswahili</option>
          <option value="2">English</option>
          <option value="3">French</option>
          <option value="3">Arabic</option>
          <option value="1">Geography</option>
          <option value="2">History</option>
          <option value="3">Civics</option>
          <option value="1">Economics</option>
          <option value="2">Agriculture</option>
          <option value="3">Book-Keeping</option>
          <option value="1">Commerce</option>
          <option value="2">Bible Knowledge</option>
          <option value="3">Islamic Knowledge</option>
          <option value="1">Fine Arts</option>
          <option value="2">Theater Arts</option>
          <option value="3">Physical Education</option>
          <option value="3">Music</option>
          
        </select>
      </div>
    <div class="col-sm-3">
            <select class="custom-select">
                <option value="1">Form 1</option>
                <option value="2">Form 2</option>
                <option value="3">Form 3</option>
                <option value="1">Form 4</option>
                <option value="2">Form 5</option>
                <option value="3">Form 6</option>
              </select>
    </div>
      <div class="col-sm-3"><input class="form-control mr-sm-2" type="search" placeholder="Search By Username" aria-label="username" style="width: 100%;"></div>
      <div class="col-sm-3"><input class="form-control mr-sm-2" type="search" placeholder="Search By School" aria-label="school" style="width: 100%;"></div>
      <div class="container">
          <button class="btn btn-primary" style="margin-top: 10px;" href="#">Filter Teachers</button>
    </div>
    </form>
  
</nav>

<div class="container">
    <div class="row">
        <div class="col-lg-3" style=" text-align: center; margin-top:50px;">
            <a href="#"> <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="110" height="110">
            <h4>Mr James Juma</h4> </a>
            <h5><small class="text-muted">Makongo Secondary School</small></h5>
            <p><small class="text-muted">My name is Mr James Juma this is my short bio to my students </small></p>
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary">Follow</button>
                <button type="button" class="btn btn-success">Message</button>
            </div>
            <small><a class="nav-link" href="#">30 Friends</a></small>
        </div>
        <div class="col-lg-3" style=" text-align: center; margin-top:50px;">
            <a href="#"> <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="110" height="110">
            <h4>Mr James Juma</h4> </a>
            <h5><small class="text-muted">Makongo Secondary School</small></h5>
            <p><small class="text-muted">My name is Mr James Juma this is my short bio to my students </small></p>
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary">Follow</button>
                <button type="button" class="btn btn-success">Message</button>
            </div>
            <small><a class="nav-link" href="#">30 Friends</a></small>
        </div>
        <div class="col-lg-3" style=" text-align: center; margin-top:50px;">
            <a href="#"> <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="110" height="110">
            <h4>Mr James Juma</h4> </a>
            <h5><small class="text-muted">Makongo Secondary School</small></h5>
            <p><small class="text-muted">My name is Mr James Juma this is my short bio to my students </small></p>
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary">Follow</button>
                <button type="button" class="btn btn-success">Message</button>
            </div>
            <small><a class="nav-link" href="#">30 Friends</a></small>
        </div>
        <div class="col-lg-3" style=" text-align: center; margin-top:50px;">
            <a href="#"> <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="110" height="110">
            <h4>Mr James Juma</h4> </a>
            <h5><small class="text-muted">Makongo Secondary School</small></h5>
            <p><small class="text-muted">My name is Mr James Juma this is my short bio to my students </small></p>
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-primary">Follow</button>
                <button type="button" class="btn btn-success">Message</button>
            </div>
            <small><a class="nav-link" href="#">30 Friends</a></small>
        </div>
        
    </div>
</div>

@endsection