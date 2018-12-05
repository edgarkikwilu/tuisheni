@extends('layouts.app')
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
        <form action="{{ route('teacher.filter.payments') }}" method="POST" class="form-inline col-sm-12">
          @csrf
            <div class="col-sm-3">
              <select name="month" class="custom-select">
                <option value="">--Month--</option>
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
          <div class="col-sm-3" style="margin-top:10px;"><button class="btn btn-primary" style="margin-top: 10px;" type="submit">Filter Payments</button>
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
                <td>{{ $payment->type }}</td>
                <td>{{ $payment->client }}</td>
                <td>{{ $payment->action }}</td>
                <td>{{ $payment->amount }}</td>
                <td>{{ $payment->created_at }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </ul>
</div>

      <!--END MY PAYMENTS-->
      
      
@endsection