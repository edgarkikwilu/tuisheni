@extends('layouts.app')
@section('content')
<div class="container" style=" margin-top: 40px; text-align:left;">
    <h3 class="display-5" style="color: #001f9c ; " >MY DASHBOARD</h3>  
  </div>
@include('admin/dashboardnav')
<!--RESULTS-->
    <div class="container">
        <nav class="navbar">
            <form action="{{route('admin.filter.results')}}" method="POST" class="form-inline col-sm-12">
              @csrf
                <div class="col-sm-3">
                    <select name="month" class="custom-select">
                        <option value="">--MONTH--</option>
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
                      <option value="{{$subject->id}}">{{$subject->name}}</option>
                      @endforeach
                    </select>
                  </div>
                <div class="col-sm-3">
                    <select name="form" class="custom-select">
                        <option value="">--FORM--</option>
                        <option value="1">Form 1</option>
                        <option value="2">Form 2</option>
                        <option value="3">Form 3</option>
                        <option value="1">Form 4</option>
                        <option value="2">Form 5</option>
                        <option value="3">Form 6</option>
                      </select>
            </div>
                  <div class="col-sm-3" style="margin-top:10px;">
                    <input name="username" class="form-control mr-sm-2" type="search" placeholder="Search By Username" aria-label="username" style="width: 100%;"></div>
                  <div class="col-sm-3" style="margin-top:10px;">
                    <input name="school" class="form-control mr-sm-2" type="search" placeholder="Search By School" aria-label="school" style="width: 100%;"></div>
                  <div class="col-sm-3" style="margin-top:10px;">
                    <input name="title" class="form-control mr-sm-2" type="search" placeholder="Search By Exam Title" aria-label="examtitle" style="width: 100%;"></div>
                  <div class="container">
                      <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Filter Results</button>
                </div>
                </form>
        </nav>
    </div>
<div class="container">
    <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
          <h4><a class="nav-link admin-header-block">January Physics Examination Results</a></h4>
        </li>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Student ID</th>
                <th scope="col">Full Name</th>
                <th scope="col">Week 1</th>
                <th scope="col">Week 2</th>
                <th scope="col">Week 3</th>
                <th scope="col">Week 4</th>
                <th scope="col">Average</th>
                <th scope="col">Grade</th>
                <th scope="col">Position</th>
                </tr>
            </thead>
            <tbody>
              <?php $count = 0; ?>
              @foreach ($results as $result)
                <tr>
                <th scope="row">{{$count}}</th>
                  <td>{{$users[$count]}}</td>
                  @if($result->count() >= 1)
                  <td>{{$result[0]->score}}%</td>
                  @else
                  <td>0</td>
                  @endIf
                  @if($result->count() >= 2)
                  <td>{{$result[1]->score}}%</td>
                  @else
                  <td>0</td>
                  @endIf
                  @if($result->count() >= 3)
                  <td>{{$result[2]->score}}%</td>
                  @else
                  <td>0</td>
                  @endIf
                  @if($result->count() >= 4)
                  <td>{{$result[3]->score}}%</td>
                  @else
                  <td>0</td>
                  @endIf
                  <td>{{$averages[$count]}}%</td>
                  @if($averages[$count] >80)
                  <td>A</td>
                  @elseif($averages[$count] > 70)
                  <td>B</td>
                  @elseif($averages[$count]>55)
                  <td>C</td>
                  @elseif($averages[$count] >= 47)
                  <td>D</td>
                  @elseif($averages[$count] < 47)
                  <td>F</td>
                  @endif
                  <td>23/411</td>
                </tr>
                <?php $count++; ?>
              @endforeach
            </tbody>
          </table>
  
      </ul>
</div>    

<!--END RESULTS-->

@endsection