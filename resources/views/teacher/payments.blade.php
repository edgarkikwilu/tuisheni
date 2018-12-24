@extends('layouts.teacher')
@section('content')
<div class="content" style="text-align:left; margin-top: 40px;">
  <div class="row justify-content-center">
    <div class="col-md-3">
      <div class="alert-danger alert text-center" role="alert">
        <span>Transactions</span><br>
        <span>{{ $totalPayments }} /-</span>
      </div>
    </div>
    <div class="col-md-3">
      <div class="alert-info alert text-center" role="alert">
        <span>Balance</span><br>
        <span>{{ Auth::user()->points }} /-</span>
      </div>
    </div>
    <div class="col-md-3">
      <div class="alert-dismissible alert text-center" role="alert">
        <span><button class="btn btn-sm btn-outline-info">WithDraw</button></span>
      </div>
    </div>
  </div>
        
      <div class="row justify-content-center">
        <div class="col-md-7">
          <div class="card text-center">
              <div class="card-body">
                  <h4><a class="nav-link admin-header-block">FILTER TRANSACTIONS</a></h4>
                <form action="{{ route('teacher.filter.payments') }}" method="POST" class="form-inline">
                  @csrf
                    <div class="col-sm-3">
                      <select name="month" class="custom-select form-control">
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
                  <div class="col-sm-3"><button class="btn btn-primary btn-sm" type="submit">Filter Payments</button>
                  </div>
                </form>
              </div>
            </div>
        </div>
      </div>
      
      <div class="text-center">
          <h4><a class="nav-link admin-header-block">{{ $month == null?'':$month }} - {{ \Carbon\Carbon::now()->year }}  Transactions (Tsh {{ $payments->sum('amount') }}/=)</a></h4>
      </div>
                      
      
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
</div>

      <!--END MY PAYMENTS-->
      
      
@endsection