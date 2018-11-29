@extends('layouts.app')
@section('content')
<div class="container" style=" margin-top: 40px; text-align:left;">
    <h3 class="display-5" style="color: #001f9c ; " >MY DASHBOARD</h3>  
  </div>
  @include('teacher/dashboardnav')


<div class="container" style="text-align:center; margin-top:50px;">
    <div class="row">
          <!--  <div class="col-lg-12">
                    <h3 class="display-5" style="color:#001f9c">My Academic Assesment</h3>
            </div>-->
        <div class="col-lg-12" >
                <h3 class="display-5" style="color:#001f9c">JANUARY REPORT</h3>
                <h4 class="display-5"><small class="text-muted">Points Earned: 97880 Points</small></h4>
                <h4 class="display-5"><small class="text-muted">Most Points Earned: 160000 Points</small></h4>
                <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Subject</th>
                            <th scope="col">Week 1</th>
                            <th scope="col">Week 2</th>
                            <th scope="col">Week 3</th>
                            <th scope="col">Week 4</th>
                            <th scope="col">Total Points</th>
                            <th scope="col">Most Points Earned</th>
                            </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">Biology</th>
                            <td>8300</td>
                            <td>8400</td>
                            <td>8300</td>
                            <td>8300</td>
                            <td>88000</td>
                            <td>890000</td>
                          </tr>
                          <tr>
                            <th scope="row">Chemistry</th>
                            <td>8300</td>
                            <td>8400</td>
                            <td>8300</td>
                            <td>8300</td>
                            <td>88000</td>
                            <td>890000</td>    
                        </tr>
                          <tr>
                            <th scope="row">Physics</th>
                            <td>8300</td>
                            <td>8400</td>
                            <td>8300</td>
                            <td>8300</td>
                            <td>88000</td>
                            <td>890000</td>
                          </tr>
                          <tr>
                                <th scope="row">Mathematics</th>
                                <td>8300</td>
                                <td>8400</td>
                                <td>8300</td>
                                <td>8300</td>
                                <td>88000</td>
                                <td>890000</td>
                        </tr>
                        <tr>
                                <th scope="row">ICT</th>
                                <td>8300</td>
                                <td>8400</td>
                                <td>8300</td>
                                <td>8300</td>
                                <td>88000</td>
                                <td>890000</td>
                        </tr>
                        <tr>
                                <th scope="row">Technical Education</th>
                                <td>8300</td>
                                <td>8400</td>
                                <td>8300</td>
                                <td>8300</td>
                                <td>88000</td>
                                <td>890000</td>
                        </tr>
                        
                        <tr>
                                <th scope="row">Book-Keeping</th>
                                <td>8300</td>
                                <td>8400</td>
                                <td>8300</td>
                                <td>8300</td>
                                <td>88000</td>
                                <td>890000</td>
                        </tr>
                        </tbody>
                      </table>
            </div>
    </div>
</div>

  
@endsection
    