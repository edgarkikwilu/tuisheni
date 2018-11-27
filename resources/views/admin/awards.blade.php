@extends('layouts.index')
@section('content')
<div class="container" style=" margin-top: 40px; text-align:left;">
    <h3 class="display-5" style="color: #001f9c ; " >MY DASHBOARD</h3>  
  </div>
@include('admin/dashboardnav')

<!--AWARDS-->
        <div class="container">
          <div class="row">
            <div class="col-sm-3">
                <h4><a class="nav-link admin-header-block">INSERT AWARD:</a></h4>
              </div>
            <div class="col-sm-3">
                <button type="button" class="btn btn-secondary" > Create New</button>
              </div>  
          </div>
          </div>
          <ul class="nav nav-pills nav-fill">
              <li class="nav-item">
                <h4><a class="nav-link admin-header-block">FILTER AWARDS</a></h4>
              </li>
            </ul>
            <nav class="navbar">
              <form action="{{ route('admin.filter.awards') }}" method="POST" class="form-inline col-sm-12">
                @csrf
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
                        <select name="week" class="custom-select">
                          <option value=""></option>
                          <option value="1">Week 1</option>
                          <option value="2">Week 2</option>
                          <option value="3">Week 3</option>
                          <option value="1">Week 4</option>
                        </select>
                      </div>
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
                  <option value=""></option>
                  <option value="1">Form 1</option>
                  <option value="2">Form 2</option>
                  <option value="3">Form 3</option>
                  <option value="1">Form 4</option>
                  <option value="2">Form 5</option>
                  <option value="3">Form 6</option>
                </select>
              </div>
                <div class="col-sm-3" style="margin-top:10px;">
                  <input name="username" class="form-control mr-sm-2" type="search" placeholder="Search By Username" style="width: 100%;"></div>
                <div class="col-sm-3" style="margin-top:10px;">
                  <input name="school" class="form-control mr-sm-2" type="search" placeholder="Search By School" style="width: 100%;"></div>
                
                <div class="container">
                    <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Filter Awards</button>
              </div>
              </form>
                  
            </nav>
            <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <h4><a class="nav-link admin-header-block">January  Perfomance Awards</a></h4>
              </li>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Student ID</th>
                    <th scope="col">Full Name</th>
                    <th scope="col">School</th>
                    <th scope="col">Details</th>
                    <th scope="col">Average</th>
                    <th scope="col">Grade</th>
                    <th scope="col">Position</th>
                    <th scope="col">Award</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($awards as $award)
                  <tr>
                      <th scope="row">{{ $award->id }}</th>
                      <td>{{ $award->user->username }}</td>
                      <td>{{ $award->user->school }}</td>
                      <td>{{ $award->description }}</td>
                      <td>{{ $award->score }}%</td>
                    @if($award->score >80)
                    <td>A</td>
                    @elseif($award->score > 70)
                    <td>B</td>
                    @elseif($award->score>55)
                    <td>C</td>
                    @elseif($award->score >= 47)
                    <td>D</td>
                    @elseif($award->score < 47)
                    <td>F</td>
                    @endif
                      <td>23/411</td>
                      <td>{{ $award->bonus }} points</td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </ul>
        
        <!--END AWARDS-->

        @endsection