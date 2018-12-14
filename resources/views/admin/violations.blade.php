@extends('layouts.app')
@section('content')
<div class="container" style=" margin-top: 40px; text-align:left;">
    <h3 class="display-5" style="color: #001f9c ; " >MY DASHBOARD</h3>  
  </div>
@include('admin/dashboardnav')

<!--VIOLATIONS-->
<div class="container">
    <ul class="nav nav-pills nav-fill" style="margin-top:40px;">
        <li class="nav-item">
          <h4><a class="nav-link admin-header-block">ALL VIOLATIONS</a></h4>
        </li>
      </ul>
    
    <nav class="navbar">
        <form class="form-inline col-sm-12">
          <div class="col-sm-3">
            <select name="month" class="custom-select">
              <option value=""></option>
              <option value="1">January</option>
              <option value="2">February</option>
              <option value="3">March</option>
              <option value="4">April</option>
              <option value="5">May</option>
              <option value="6">June</option>
              <option value="7">July</option>
              <option value="8">August</option>
              <option value="9">September</option>
              <option value="10">October</option>
              <option value="11">November</option>
              <option value="12">December</option>
            </select>
          </div>
              
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
              <option value=""></option>
                <option value="1">Form 1</option>
                <option value="2">Form 2</option>
                <option value="3">Form 3</option>
                <option value="4">Form 4</option>
                <option value="5">Form 5</option>
                <option value="6">Form 6</option>
             </select>
    </div>
          <div class="col-sm-3" style="margin-top:10px;"><input name="username" class="form-control mr-sm-2" type="search" placeholder="Search By Username" aria-label="username" style="width: 100%;"></div>
          <div class="col-sm-3" style="margin-top:10px;"><input name="school" class="form-control mr-sm-2" type="search" placeholder="Search By School" aria-label="school" style="width: 100%;"></div>
          <div class="col-sm-3" style="margin-top:10px;"><input name="title" class="form-control mr-sm-2" type="search" placeholder="Search By Title" aria-label="examtitle" style="width: 100%;"></div>
          <div class="container">
              <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Filter Results</button>
        </div>
        </form>
</nav>
</div>   
<div class="container">
    <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
            <h4><a class="nav-link admin-header-block">VIOLATIONS</a></h4>
          </li>
    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Violation ID</th>
            <th scope="col">Reporter</th>
            <th scope="col">Post Title</th>
            <th scope="col">Subject</th>
            <th scope="col">Topic</th>
            <th scope="col">Violation Details</th>
            <th scope="col">Report Time</th>
            <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($violations as $violation)
          <tr>
              <th scope="row">{{ $violation->id }}</th>
              <td>{{ $violation->user->username }}</td>
              <td>Application of Physics in Daily Life</td>
              <td>{{ $violation->type }}</td>
              <td>Introduction To Physics</td>
              <td>{{ $violation->comments }}</td>
              <td>{{ $violation->created_at }}</td>
              <td>
                <small><a class="nav-item nav-link" href="#" style="color:red;">{{ $violation->suspended?'Allow':'Suspend' }}</a></small>
                <small><a class="nav-item nav-link" href="#" style="color:red;">View Material</a></small>
                <small><a class="nav-item nav-link" href="#" style="color:#001f9c;">Attend</a></small>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </ul>
</div> 

    
    <!--END VIOLATIONS-->
    @endsection