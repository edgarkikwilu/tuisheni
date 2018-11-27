@extends('layouts.app')
@section('content')
<div class="container" style=" margin-top: 40px; text-align:left;">
    <h3 class="display-5" style="color: #001f9c ; " >MY DASHBOARD</h3>  
  </div>
@include('admin/dashboardnav')

<!--ALL NOTES -->
<div class="container" style="margin-top:40px;">
          <div class="row">
            <div class="col-sm-3">
                <h4><a class="nav-link admin-header-block">UPLOAD NOTES:</a></h4>
              </div>
            <div class="col-sm-3">
                <button type="button" class="btn btn-secondary" > Upload Notes</button>
              </div>  
          </div>
          </div>  
        <ul class="nav nav-pills nav-fill">
          <li class="nav-item">
            <h4><a class="nav-link admin-header-block">FILTER NOTES</a></h4>
          </li>
        </ul>
        <nav class="navbar">
                <form class="form-inline col-sm-12" action="{{ route('admin.filter.notes') }}" method="POST">
                @csrf
                  <div class="col-sm-3">
                    <select class="custom-select" name="subject">
                        <option value=""></option>
                      @foreach ($subjects as $subject)
                      <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                      @endforeach
                    </select>
                  </div>
                <div class="col-sm-3">
                        <select class="custom-select" name="form">
                                <option value=""></option>
                            <option value="1">Form 1</option>
                            <option value="2">Form 2</option>
                            <option value="3">Form 3</option>
                            <option value="4">Form 4</option>
                            <option value="5">Form 5</option>
                            <option value="6">Form 6</option>
                        </select>
                </div>
                  <div class="col-sm-3"><input class="form-control mr-sm-2" type="search" placeholder="Search By Username" name="username" style="width: 100%;"></div>
                  <div class="col-sm-3"><input class="form-control mr-sm-2" type="search" placeholder="Search By School" name="school" style="width: 100%;"></div>
                  <div class="container">
                      <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Filter Notes</button>
                </div>
                </form>
        </nav>
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
                                        <small class="text-muted" style="color:#001f9c;">name,</small>
                                        <small class="text-muted">school</small>
                                        </div>
                                        <div class="col-lg-12">
                                                <small class="text-muted">{{ $note->created_at->diffForHumans() }}</small>
                                        </div>
                                        
                                        </div>     
                                </div>
                            <div class="container">
                                      <div class="row">
                                            <div class="col-lg-12">
                                                  <h5 class="card-title" style="color:#001f9c">{{ $note->title }}</h5>
                                            </div> 
                                    </div>
                            </div>
                            
                            <div class="container">
                                <div class="row">
                                        <div class="col-lg-12">
                                                <small class="text-muted">#physics #introduction-to-physics</small>
                                        </div>
                                        <div class="col-lg-12">
                                                <small style="text-align:center;"><a class="nav-item nav-link" href="{{ route('admin.editnotes') }}" style="color:#001f9c;">Edit</a></small>
                                                <small style="text-align:center;"><a class="nav-item nav-link" href="#" style="color:red;">Delete post</a></small>
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