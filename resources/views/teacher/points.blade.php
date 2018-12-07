@extends('teacher.topdash')
@section('content')
<div class="container" style=" margin-top: 20px; text-align:left;">
    <h3 class="display-5" style="color: #001f9c ; " >MY POINTS</h3>  
  </div>
 


<div class="container" style="text-align:center; margin-top:10px;">
    <div class="row">
          <!--  <div class="col-lg-12">
                    <h3 class="display-5" style="color:#001f9c">My Academic Assesment</h3>
            </div>-->
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
    