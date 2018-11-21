@extends('layouts.index')
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
            <h4 class="display-5"><small class="text-muted">Average: 85%</small></h4>
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
                      <tr>
                        <th scope="row">Biology</th>
                        <td>83%</td>
                        <td>83%</td>
                        <td>83%</td>
                        <td>83%</td>
                        <td>88%</td>
                        <td>23/411</td>
                      </tr>
                      <tr>
                        <th scope="row">Chemistry</th>
                        <td>72%</td>
                        <td>83%</td>
                        <td>83%</td>
                        <td>83%</td>
                        <td>83%</td>
                        <td>19/727</td>
                      </tr>
                      <tr>
                        <th scope="row">Physics</th>
                        <td>66%</td>
                        <td>83%</td>
                        <td>83%</td>
                        <td>83%</td>
                        <td>83%</td>
                        <td>51/221</td>
                      </tr>
                      <tr>
                            <th scope="row">Mathematics</th>
                            <td>66%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>51/221</td>
                    </tr>
                    <tr>
                            <th scope="row">ICT</th>
                            <td>66%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>51/221</td>
                    </tr>
                    <tr>
                            <th scope="row">Technical Education</th>
                            <td>66%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>51/221</td>
                    </tr>
                    <tr>
                            <th scope="row">Agriculture</th>
                            <td>66%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>51/221</td>
                    </tr>
                    <tr>
                            <th scope="row">Geography</th>
                            <td>66%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>51/221</td>
                    </tr>
                    <tr>
                            <th scope="row">History</th>
                            <td>66%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>51/221</td>
                    </tr>
                    <tr>
                            <th scope="row">Civics</th>
                            <td>66%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>51/221</td>
                    </tr>
                    <tr>
                            <th scope="row">Book-Keeping</th>
                            <td>66%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>83%</td>
                            <td>51/221</td>
                    </tr>
                    </tbody>
                  </table>
        </div>
        </div>
</div>

  
@endsection
    