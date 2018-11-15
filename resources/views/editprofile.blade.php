@extends('layouts.index')
@section('content')


<div class="container" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-lg-3" style="text-align:left;" >
                            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="180" height="180">
                        <button class="btn btn-secondary" type="submit" style="margin-top:20px;">Uplaod Profile Picture</button>    
                    </div>
                    <div class="col-lg-6">
                            <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="inputGroup-sizing-sm">First Name</span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                  </div>
                    <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">Second Name</span>
                                </div>
                                <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                     </div>
                    <div class="input-group input-group-sm mb-3">
                                            <div class="input-group-prepend">
                                              <span class="input-group-text" id="inputGroup-sizing-sm">Email Address</span>
                                            </div>
                                            <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                          </div> 
                    <div class="input-group input-group-sm mb-3">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text" id="inputGroup-sizing-sm">Phone Number</span>
                                                </div>
                                                <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                              </div> 
                    <input class="btn btn-secondary" type="submit" value="Update Profile" style="float:right;">        
                    </div>
                </div>
            </div>
            


</div>

@endsection