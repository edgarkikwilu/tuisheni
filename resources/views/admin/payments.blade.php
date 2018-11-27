@extends('layouts.app')
@section('content')
<div class="container" style=" margin-top: 40px; text-align:left;">
    <h3 class="display-5" style="color: #001f9c ; " >MY DASHBOARD</h3>  
  </div>
@include('admin/dashboardnav')

<!--PAYMENTS-->
<div class="container" style="text-align:center; margin-top: 40px;">
  <h3 class="display-5" style="color: #001f9c ; " >TOTAL: 1000 Points</h3> 
  <div class="row">
          <div class="col-sm-6">
                <p><a class="nav-link" href="#">Add Points with Tigo Pesa</a></p>
                <p><a class="nav-link" href="#">Add Points with M-Pesa</a></p>
                <p><a class="nav-link" href="#">Add Points with Airtel Money</a></p>
          </div>
          <div class="col-sm-6">
                <p><a class="nav-link" href="#">Withdraw with Tigo Pesa</a></p>
                <p><a class="nav-link" href="#">Withdraw with M-Pesa</a></p>
                <p><a class="nav-link" href="#">Withdraw with Airtel Money</a></p>
          </div>
      </div>
</div>    
<div class="container">
    <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
          <h4><a class="nav-link admin-header-block">ALL PAYMENTS</a></h4>
        </li>
      </ul>
      <nav class="navbar">
              <form action="{{ route('admin.filter.payments') }}" method="POST" class="form-inline col-sm-12">
                @csrf
                  <div class="col-sm-3">
                      <select name="month" class="custom-select">
                        <option value=""></option>
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
                        <select name="week" class="custom-select">
                          <option value=""></option>
                          <option value="1">Week 1</option>
                          <option value="2">Week 2</option>
                          <option value="3">Week 3</option>
                          <option value="1">Week 4</option>
                        </select>
                      </div>
                <div class="col-sm-3">
                  <select name="type" class="custom-select">
                    <option value=""></option>
                    <option value="teacher">Teachers</option>
                    <option value="student">Students</option>
                    <option value="school">School</option>
                    
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
                    <button type="submit" class="btn btn-primary" style="margin-top: 10px;" >Filter Payments</button>
              </div>
              </form>
            
      </nav>
</div>
<div class="container">
    <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
            <h4><a class="nav-link admin-header-block">January  Payments (Tsh {{ $sum }}/=)</a></h4>
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
          @foreach ($payments as $payment)
          <tr>
              <th scope="row">{{ $payment->id }}</th>
              <td>{{ $payment->user->username }}</td>
              <td>{{ $payment->user->school }}</td>
              <td>{{ $payment->type }}</td>
              <td>{{ $payment->client }}</td>
              <td>Deposit</td>
              <td>{{ $payment->amount }}</td>
              <td>{{ $payment->created_at }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
  </ul>
</div>  
    
      <!--END PAYMENTS-->

      @endsection
      