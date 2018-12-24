@extends('layouts.teacher')
@section('content')
<div class="content" style="text-align:center; margin-top:10px;">
  <div class="row justify-content-center">
    <div class="col-md-2 alert alert-primary text-center" style="" role="alert">
        <span>Total Points</span><br>
        <span>{{ Auth::user()->points }}</span>
    </div>
    <div class="col-md-2 alert alert-primary text-center" style="" role="alert">
      <span>Notes Points</span><br>
      <span>{{ $pointsCount[0] }}</span>
    </div>
    <div class="col-md-2 alert alert-primary text-center" style="" role="alert">
      <span>Exam Points</span><br>
      <span>{{ $pointsCount[1] }}</span>
    </div>
    <div class="col-md-2 alert alert-primary text-center" style="" role="alert">
      <span>Quiz Points</span><br>
      <span>{{ $pointsCount[2] }}</span>
    </div>
    <div class="col-md-2 alert alert-primary text-center" style="" role="alert">
      <span>Tutorial Points</span><br>
      <span>{{ $pointsCount[3] }}</span>
    </div>
  </div>
  <form action="{{ route('filter.points') }}" id="pointsfilterform" method="post">
  <div class="row">
      <div class="col-md-2">
          Filter:
        </div>
        <div class="col-md-3 form-group">
          <select name="type" id="type" class="form-control">
            <option class="selector_options" value="">--Type--</option>
            <option class="selector_options" value="exam">Exam</option>
            <option class="selector_options" value="notes">Notes</option>
            <option class="selector_options" value="quiz">Quiz</option>
            <option class="selector_options" value="tutorial">Tutorial</option>
          </select>
        </div>
        <div class="col-md-3  form-group">
          <select name="month" id="month" class="form-control">
            <option class="selector_options" value="">--Month--</option>
            <option class="selector_options" value="1">January</option>
            <option class="selector_options" value="2">February</option>
            <option class="selector_options" value="3">March</option>
            <option class="selector_options" value="4">April</option>
            <option class="selector_options" value="5">May</option>
            <option class="selector_options" value="6">June</option>
            <option class="selector_options" value="7">July</option>
            <option class="selector_options" value="8">August</option>
            <option class="selector_options" value="9">September</option>
            <option class="selector_options" value="10">October</option>
            <option class="selector_options" value="11">November</option>
            <option class="selector_options" value="12">December</option>
          </select>
        </div>
        <div class="col-md-2">
          <button type="submit" class="btn btn-block btn-ouline-success btn-sm">Filter</button>
        </div>
      </div>
    </form>
    {{-- <div class="row">
      <div class="col-md-10">
          <canvas id="uploadedContentAnalysis"></canvas>
      </div>
    </div> --}}
    <div class="row">
        <div class="col-lg-12" >
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Source</th>
                <th scope="col">Type</th>
                <th scope="col">Action</th>
                <th scope="col">From</th>
                <th scope="col">Time</th>
                <th scope="col">Points</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($points as $point)
                <tr>
                  <th scope="row">{{ $point->source }}</th>
                  <td>{{ $point->type }}</td>
                  <td>{{ $point->action }}</td>
                  <td>{{ $point->from->username }}</td>
                  <td>{{ $point->created_at }}</td>
                  <td>{{ $point->value }} Points</td>
                </tr>
              @endforeach
            </tbody>
          </table>
          <h3 class="display-5" style="color:#001f9c">{{ $points->sum('value') }} POINTS</h3>
      </div>
    </div>
</div>

  
@endsection
    