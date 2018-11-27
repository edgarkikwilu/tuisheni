@extends('layouts.index')
@section('content')
<div class="container" style=" margin-top: 40px; text-align:left;">
    <h3 class="display-5" style="color: #001f9c ; " >MY DASHBOARD</h3>  
  </div>
  @include('teacher/dashboardnav')

  <!--MY PAYMENTS-->
<div class="container" style="text-align:left; margin-top: 40px;">
  <h3 class="display-5" style="color: #001f9c ; " >TOTAL: 1000 Points</h3>  
</div>
<div class="container">
  <p>Deposit with Tigo Pesa</p>
  <p>Deposit with M-Pesa</p>
  <p>Deposit with Airtel Money</p>
</div>   
        
<div class="container">
    <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
          <h4><a class="nav-link admin-header-block">FILTER PAYMENTS</a></h4>
        </li>
      </ul>
      <nav class="navbar">
              <form class="form-inline col-sm-12">
                  <div class="col-sm-3">
                      <select class="custom-select">
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="1">April</option>
                        <option value="2">May</option>
                        <option value="3">June</option>
                        <option value="1">July</option>
                        <option value="2">August</option>
                        <option value="3">September</option>
                        <option value="3">October</option>
                        <option value="1">November</option>
                        <option value="2">December</option>
                        
                      </select>
                    </div>
                    <div class="col-sm-3">
                        <select class="custom-select">
                          <option value="1">Week 1</option>
                          <option value="2">Week 2</option>
                          <option value="3">Week 3</option>
                          <option value="1">Week 4</option>
                        </select>
                      </div>
                <div class="col-sm-3">
                  <select class="custom-select">
                    <option value="1">Teachers</option>
                    <option value="2">Students</option>
                    <option value="3">School</option>
                    
                  </select>
                </div>
              <div class="col-sm-3">
                      <select class="custom-select">
                              <option value="1">Form 1</option>
                              <option value="2">Form 2</option>
                              <option value="3">Form 3</option>
                              <option value="1">Form 4</option>
                              <option value="2">Form 5</option>
                              <option value="3">Form 6</option>
                            </select>
              </div>
                <div class="col-sm-3" style="margin-top:10px;"><input class="form-control mr-sm-2" type="search" placeholder="Search By Username" aria-label="username" style="width: 100%;"></div>
                <div class="col-sm-3" style="margin-top:10px;"><input class="form-control mr-sm-2" type="search" placeholder="Search By School" aria-label="school" style="width: 100%;"></div>
                
                <div class="container">
                    <button class="btn btn-primary" style="margin-top: 10px;" href="#">Filter Payments</button>
              </div>
              </form>
            
      </nav>
</div>
<div class="container">
      
      <ul class="nav nav-pills nav-fill">
          <li class="nav-item">
              <h4><a class="nav-link admin-header-block">January  Payments (Tsh 560,000/=)</a></h4>
            </li>
                      
      
      <table class="table">
          <thead>
            <tr>
              <th scope="col">Payment ID</th>
              <th scope="col">Full Name</th>
              <th scope="col">School</th>
              <th scope="col">Payment Details</th>
              <th scope="col">Payment Origin</th>
              <th scope="col">Action</th>
              <th scope="col">Amount</th>
              <th scope="col">Date/Time</th>
              </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Mrisho Abdul</td>
              <td>Eagles Secondary School</td>
              <td>Deposit For More Points</td>
              <td>Subscription Page</td>
              <td>Deposit</td>
              <td>Tsh 1000/=</td>
              <td>23/04/2018 12:30</td>
            </tr>
            <tr>
              <th scope="row">1</th>
              <td>Mrisho Abdul</td>
              <td>Eagles Secondary School</td>
              <td>Deposit For More Points</td>
              <td>Subscription Page</td>
              <td>Deposit</td>
              <td>Tsh 1000/=</td>
              <td>23/04/2018 12:30</td>
            </tr>
            <tr>
              <th scope="row">1</th>
              <td>Mrisho Abdul</td>
              <td>Eagles Secondary School</td>
              <td>Deposit For More Points</td>
              <td>Subscription Page</td>
              <td>Deposit</td>
              <td>Tsh 1000/=</td>
              <td>23/04/2018 12:30</td>  
            </tr>
            <tr>
              <th scope="row">1</th>
              <td>Mrisho Abdul</td>
              <td>Eagles Secondary School</td>
              <td>Deposit For More Points</td>
              <td>Subscription Page</td>
              <td>Deposit</td>
              <td>Tsh 1000/=</td>
              <td>23/04/2018 12:30</td>
          </tr>
          <tr>
              <th scope="row">1</th>
              <td>Mrisho Abdul</td>
              <td>Eagles Secondary School</td>
              <td>Deposit For More Points</td>
              <td>Subscription Page</td>
              <td>Deposit</td>
              <td>Tsh 1000/=</td>
              <td>23/04/2018 12:30</td>
          </tr>
          <tr>
              <th scope="row">1</th>
              <td>Mrisho Abdul</td>
              <td>Eagles Secondary School</td>
              <td>Deposit For More Points</td>
              <td>Subscription Page</td>
              <td>Deposit</td>
              <td>Tsh 1000/=</td>
              <td>23/04/2018 12:30</td>
          </tr>
          <tr>
              <th scope="row">1</th>
              <td>Mrisho Abdul</td>
              <td>Eagles Secondary School</td>
              <td>Deposit For More Points</td>
              <td>Subscription Page</td>
              <td>Deposit</td>
              <td>Tsh 1000/=</td>
              <td>23/04/2018 12:30</td>
          </tr>
          <tr>
              <th scope="row">1</th>
              <td>Mrisho Abdul</td>
              <td>Eagles Secondary School</td>
              <td>Deposit For More Points</td>
              <td>Subscription Page</td>
              <td>Deposit</td>
              <td>Tsh 1000/=</td>
              <td>23/04/2018 12:30</td>
          </tr>
          <tr>
              <th scope="row">1</th>
              <td>Mrisho Abdul</td>
              <td>Eagles Secondary School</td>
              <td>Deposit For More Points</td>
              <td>Subscription Page</td>
              <td>Deposit</td>
              <td>Tsh 1000/=</td>
              <td>23/04/2018 12:30</td>
          </tr>
          </tbody>
        </table>
      </ul>
</div>

      <!--END MY PAYMENTS-->
      
      
@endsection