@extends('layouts.student')
@section('content')
<div class="content" style="text-align:center; margin-top:10px;">
    <div class="row">
        <div class="col-lg-12">
                <h3 class="display-5" style="color:#001f9c">My Academic Assesment</h3>
        </div>
        <div class="container" style="text-align:center; margin-top:0%;">
                <div class="col-lg-12" style="margin-top:20px;">
                        <h3 class="display-5" style="color:#001f9c">{{ $month }} REPORT</h3>
                        <h4 class="display-5"><small class="text-muted">Position: 32/4744</small></h4>
                        <h4 class="display-5"><small class="text-muted">Average: {{ $averages->avg() }}%</small></h4>
                        <form action="{{ route('student.filter.assessment') }}" method="post">
                                @csrf
                                <div class="row justify-content-center">
                                        <div class="col-md-5">
                                        <div class="form-group">
                                                <select name="month" id="month" class="custom-select form-control">
                                                        <option value="">--Choose Month--</option>
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
                                        </div>
                                        <div class="col-md-3 col-md-offset-4">
                                                <button class="btn btn-light btnFilterAssessment" type="submit">Filter</button>
                                        </div>
                                </div>
                                </form>
                        <table class="table">
                                <thead>
                                        <tr>
                                        <th scope="col">Subject</th>
                                        <th scope="col">Week 1</th>
                                        <th scope="col">Week 2</th>
                                        <th scope="col">Week 3</th>
                                        <th scope="col">Week 4</th>
                                        <th scope="col">Average</th>
                                        {{-- <th scope="col">Position</th> --}}
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
                                        {{-- <td>23/411</td> --}}
                                        </tr>
                                        <?php $count++; ?>
                                        @endforeach
                                </tbody>
                                </table>
                        </div>
        </div>
        </div>
</div>

  
@endsection
    