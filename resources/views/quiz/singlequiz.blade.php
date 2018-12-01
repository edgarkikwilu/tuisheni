@extends('layouts.index')
@section('content')
<div class="row">
        @include('sidebar_subject')
        <div class="col-md-9">
   
<div class="container" style="margin-top: 10px; ">
    <div class="row">
        <div class="col-lg-12"  style="margin-top: 20px;">
            <div class="card">
                <div class="container" style="padding:5px; border-bottom:1px dotted #ccc;">
                    <div class="row">
                        <div class="col-lg-2" >
                                <a href="#"> <img class="rounded-circle" style="margin-left:35%; margin-top:5px; " src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="80" height="80"></a>    
                        </div>
                        <div class="col-lg-7">
                                <a href="#"><h4>Mr James Juma</h4></a> 
                                <h5><small class="text-muted">Makongo Secondary School</small></h5>
                                <span ><small style="color:green;">Posted 3 hours ago</small></span>
                        </div>
                        <div class="col-lg-3" style="float:right; margin-top:20px;">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" class="btn btn-primary">Follow</button>
                                        <button type="button" class="btn btn-success">Message</button>
                                    </div>
                                    <small><a class="nav-link" href="#">30 Friends</a></small>
                        </div>
                    </div>
                </div>
                <div class="container" style="text-align:center">
                        <h3 class="card-title" style="color:blue; margin-top:10px; margin-left:5px;" >School Bata Physics Form One Quiz Series 2</h3>
                        <span ><small class="text-muted">#physics #Matter</small></span>
                </div>
            <div class="container" style="margin-top:10px;">
                 <h4>SECTION A (Multiple Choice 2 Points each)</h4>
            </div>
                <div class="card-body">
                    <div class="container">
                        <p>Qn 1. Select the best answer aout of the selections below, the answers might look the saame but try to check out for the best answer. </p>
                        <ul>
                            <li>First choice</li>
                            <li>Second choice</li>
                            <li>Third choice</li>
                            <li>Fourth choice</li>
                        </ul>
                    </div>
                    <div class="container">
                            <p>Qn 2. Select the best answer aout of the selections below, the answers might look the saame but try to check out for the best answer. </p>
                            <ul>
                                <li>First choice</li>
                                <li>Second choice</li>
                                <li>Third choice</li>
                                <li>Fourth choice</li>
                            </ul>
                        </div>
                        <div class="container">
                                <p>Qn 3. Select the best answer aout of the selections below, the answers might look the saame but try to check out for the best answer. </p>
                                <ul>
                                    <li>First choice</li>
                                    <li>Second choice</li>
                                    <li>Third choice</li>
                                    <li>Fourth choice</li>
                                </ul>
                            </div>
                  
                </div>
                <button type="button" class="btn btn-success" style="margin-top:10px;">SUBMIT ANSWERS</button>
            </div>
        </div>
    </div>
</div>
        </div>
</div>
 

@endsection