@extends('layouts.student')
@section('content')

<div class="container" style="text-align:left; margin-top: 10px;">
  <h3 class="display-5" style="color: #001f9c ; " >TOTAL: {{ Auth::user()->points }} TSh</h3>  
</div>
<div class="content mt-10">
    <button type="button" class="btn btn-sm btn-outline-success" data-toggle="modal" data-target="#paymentModal">Click Here To Deposit</button>
    <button class="btn btn-sm btn-outline-warning">Click Here To WithDraw</button>
    <ul class="nav nav-pills nav-fill">
        <li class="nav-item">
          <h4><a class="nav-link admin-header-block">FILTER TRANSACTION</a></h4>
        </li>
      </ul>
      <nav class="navbar card">
              <form method="POST" action="{{ route('student.filter.payments') }}" class="form-inline col-sm-12">
                @csrf
                  <div class="col-sm-2">
                      <select name="month" class="custom-select form-control">
                        <option value="">--MONTH--</option>
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
                    <div class="col-sm-2">
                        <select name="action" class="custom-select form-control">
                          <option value="">--ACTION--</option>
                          <option value="deposit">Deposit</option>
                          <option value="withdraw">WithDraw</option>
                          <option value="transfer">Transfer</option>
                        </select>
                      </div>
                <div class="col-sm-2">
                    <button class="btn btn-primary" type="submit">Filter Transactions</button>
              </div>
              </form>
      </nav>

    @if ($month != 0)
    <h4><a class="nav-link admin-header-block">January  Transactions (Tsh {{ $payments->sum('amount') }}/=)</a></h4>
    @endif
        
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
              <th scope="row">{{ $payment->id }}/th>
              <td>{{ $payment->type }}</td>
              <td>{{ $payment->client }}</td>
              <td>{{ $payment->action }}</td>
              <td>Tsh {{ $payment->amount }}/=</td>
              <td>{{ $payment->created_at }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>

</div>
        
 <!--END MY PAYMENTS-->

 <!-- Modal -->
<div id="paymentModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
    <form action="" method="POST">
        @csrf
        <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Lipia service charge(TSh 2000 TU) kwa mtandao kisha weka token tutakayo kutumia.
                <br><span style="color:red;">  Kumbuka Hatuchaji Kodi ya Mwezi!!</span>
            </h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
                <label for="token">Token</label>
                <input type="text" name="token" min="4" class="form-control" required>
                <hr>
    <p>Jinsi Ya Kulipia</p>
    {{-- <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>Kodi/Bei</th>
                    <th>Malipo</th>
                </thead>
                <tbody>
                    <tr>
                        <th>chini ya Tsh 49,999</th>
                        <td>Tsh 7000</td>
                    </tr>
                    <tr>
                        <th>Tsh 50,000 - 99,999</th>
                        <td>Tsh 15,000</td>
                    </tr>
                    <tr>
                        <th>Tsh 100,000 - 199,999</th>
                        <td>Tsh 25,000</td>
                    </tr>
                    <tr>
                        <th>200,000 - 499,999</th>
                        <td>Tsh 50,000</td>
                    </tr>
                    <tr>
                        <th>Tsh 500,000 - 1,000,000</th>
                        <td>Tsh 90,000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> --}}
          <div class="accordion">Tigo Pesa</div>
<div class="panel">
    <ol>
        <li><h4>1: Piga *150*01#</h4></li> <br>
        <li><h4>2: Chagua 1(Tuma Pesa)</h4></li><br>
        <li><h4>3: Chagua 1(Tuma kwa namba ya simu)</h4></li><br>
        <li><h4>4: Ingiza namba ya mpokeaji - 0656 724 750</h4></li><br>
        <li><h4>5: Ingiza kiasi TSH 2,000 tu!!</h4></li><br>
        <li><h4>6: Weka namba ya siri na Thibitisha kwamba jina ni EDGAR KIKWILU kabla hujatuma muamala</h4></li><br>
        <li><h4>7: Utapokea ujumbe mfupi wenye TOKEN namba </h4></li><br>
        <li><h4>8: Kisha utaiandika hiyo token hapo juu</h4></li><br>
        <li><h4>9:Bonyeza kitufe(Button) 'Thibitisha' ili tuthibitishe kuwa ni wewe uliye lipa</h4></li><br>
        <li><h4>6:Furahia huduma yetu, huduma kwa wateja wataangalia nyumba ulizochagua na huduma itaanza mara moja</h4></li><br>
    </ol>
</div>

<div class="accordion">Airtel Money</div>
<div class="panel">
    <ol>
        <li><h4>1: Piga *150*60#</h4></li> <br>
        <li><h4>2: Chagua 1(Tuma Pesa)</h4></li><br>
        <li><h4>3: Chagua 1(Weka namba ya simu)</h4></li><br>
        <li><h4>4: Ingiza namba ya mpokeaji - 0686 96 97 37</h4></li><br>
        <li><h4>5: Ingiza kiasi TSH 2,000 tu!!</h4></li><br>
        <li><h4>6: Weka namba ya siri na Thibitisha kwamba jina ni EDGAR KIKWILU kabla hujatuma muamala</h4></li><br>
        <li><h4>7: Utapokea ujumbe mfupi wenye TOKEN namba </h4></li><br>
        <li><h4>8: Kisha utaiandika hiyo token hapo juu</h4></li><br>
        <li><h4>9:Bonyeza kitufe(Button) 'Thibitisha' ili tuthibitishe kuwa ni wewe uliye lipa</h4></li><br>
        <li><h4>6:Furahia huduma yetu, huduma kwa wateja wataangalia nyumba ulizochagua na huduma itaanza mara moja</h4></li><br>
    </ol>
</div>

<div class="accordion">M Pesa</div>
<div class="panel">
    <ol>
        <li><h4>1: Piga *150*00#</h4></li> <br>
        <li><h4>2: Chagua 1(Tuma Pesa)</h4></li><br>
        <li><h4>3: Chagua 1(Tuma kwa namba ya simu)</h4></li><br>
        <li><h4>4: Ingiza namba ya mpokeaji - 0656 724 750</h4></li><br>
        <li><h4>5: Ingiza kiasi TSH 2,000 tu!!</h4></li><br>
        <li><h4>6: Weka namba ya siri na Thibitisha kwamba jina ni EDGAR KIKWILU kabla hujatuma muamala</h4></li><br>
        <li><h4>7: Utapokea ujumbe mfupi wenye TOKEN namba </h4></li><br>
        <li><h4>8: Kisha utaiandika hiyo token hapo juu</h4></li><br>
        <li><h4>9:Bonyeza kitufe(Button) 'Thibitisha' ili tuthibitishe kuwa ni wewe uliye lipa</h4></li><br>
        <li><h4>6:Furahia huduma yetu, huduma kwa wateja wataangalia nyumba ulizochagua na huduma itaanza mara moja</h4></li><br>
    </ol>
</div>

        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success btn-lg">Thibitisha</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </div>
    </form>
    </div>
</div>
      
      
@endsection