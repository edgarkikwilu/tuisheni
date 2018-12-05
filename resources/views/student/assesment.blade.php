@extends('layouts.app')
@section('content')
<div class="container" style=" margin-top: 40px; text-align:left;">
    <h3 class="display-5" style="color: #001f9c ; " >MY DASHBOARD</h3>  
  </div>
  @include('student/dashboardnav')


<div class="container" style="text-align:center; margin-top:50px;">
    <div class="row">
          <!--  <div class="col-lg-12">
                    <h3 class="display-5" style="color:#001f9c">My Academic Assesment</h3>
            </div>-->
        <div class="col-lg-12" >
            <h3 class="display-5" style="color:#001f9c">JANUARY REPORT</h3>
            <h4 class="display-5"><small class="text-muted">Position: 32/4744</small></h4>
            <h4 class="display-5"><small class="text-muted">Average: {{ $averages->avg() }}%</small></h4>
            <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Subject</th>
                        <th scope="col">Week 1</th>
                        <th scope="col">Week 2</th>
                        <th scope="col">Week 3</th>
                        <th scope="col">Week 4</th>
                        <th scope="col">Average</th>
                        <th scope="col">Position</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count = 0; ?>
                      @foreach ($reports as $report)
                      <tr>
                        <th scope="row">{{ $subjects[$count]->name }}</th>
                        <td>
                                @if ($report->count() >= 1)
                                {{ $report[0]->score }}%
                                @else
                                    0
                                @endif
                        </td>
                        <td>
                                @if ($report->count() >= 2)
                                   {{ $report[1]->score }}%
                                @else
                                        0
                                @endif
                        </td>
                        <td>
                                @if ($report->count() >= 3)
                                {{ $report[2]->score }}%
                                @else
                                        0
                                @endif
                        </td>
                        <td>
                                @if ($report->count() >= 4)
                                {{ $report[3]->score }}%
                                @else
                                        0
                                @endif
                        </td>
                        <td>{{ $averages[$count] }}%</td>
                        <td>23/411</td>
                        </tr>
                        <?php $count++; ?>
                      @endforeach
                    </tbody>
                  </table>
        </div>
        </div>
</div>

  
@endsection
    