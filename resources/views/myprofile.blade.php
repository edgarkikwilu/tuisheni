@extends('layouts.index')
@section('content')

<div class="container" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-lg-6" style="text-align:right;" >
                            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="250" height="250">
                    </div>
                    <div class="col-lg-5">
                            <h3 class="display-5" style="margin-top: 10px;">John Paul</h3>
                            <h5><small class="text-muted">St. Marys High School</small></h5>
                            <div class="container" style=" border-top: 1px dotted  #566573 ;">
                                <div class="container" style=" margin-top: 30px;">
                                    <div class="row">
                                        <div>
                                            <h5><small>Overall Average:</small> </h5>
                                        </div>
                                        <div>
                                            <h5><small class="text-muted">70%</small>
                                            </h5>    
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                        <div class="row">
                                            <div>
                                                <h5><small>Overall Position:</small> </h5>
                                            </div>
                                            <div>
                                                <h5><small class="text-muted">54/6675</small></h5>    
                                            </div>
                                        </div>
                                    </div>
                                    <a href="{{ route('editprofile') }}" class="btn btn-secondary" style="float:left; margin-top:20px;">Edit My Profile</a>
                                   </div>
                                
                    </div>
                </div>
            </div>
            

<nav class="nav nav-pills nav-justified" style="margin-top: 20px;">
        <a class="nav-item nav-link" href="#">4 Posts</a>
        <a class="nav-item nav-link" href="#">34 Followers</a>
        <a class="nav-item nav-link" href="#">77 Following</a>
</nav>


<div class="container" style="margin-top: 10px; border-top: 1px dotted  #566573 ;">

        <div class="row">
                <div class="col-lg-4"  style="margin-top: 20px;">
                        <div class="card">
                                <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap">
                                <div class="card-body">
                                        <div class="container" style="text-align:center; margin-top:-10px;">
                                            <div class="row">
                                            <div class="col-lg-12">
                                            <small class="text-muted" style="color:#001f9c;">Husna Mohamed,</small>
                                            <small class="text-muted">Loyola High School</small>
                                            </div>
                                            <div class="col-lg-12">
                                                    <small class="text-muted">9 mins ago</small>
                                            </div>
                                            
                                            </div>     
                                        </div>
                            <div class="container">
                                     <div class="row">
                                            <div class="col-lg-12">
                                                 <h5 class="card-title" style="color:#001f9c">Application of Physics in dailylife</h5>
                                            </div> 
                                    </div>
                            </div>
                            
                            <div class="container">
                                    <div class="row">
                                            <div class="col-lg-12">
                                                   <small class="text-muted">#physics #introduction-to-physics</small>
                                            </div>
                                            <div class="col-lg-12">
                                                        <small style="text-align:center;"><a class="nav-item nav-link" href="#" style="color:#001f9c;">Edit Post post</a></small>
                                                        <small style="text-align:center;"><a class="nav-item nav-link" href="#" style="color:red;">Delete post</a></small>
                                                </div>
                                    </div>
                            </div>
                                  
                            </div>
                                  
                                </div>
               
               
                        </div>
                        <div class="col-lg-4"  style="margin-top: 20px;">
                                        <div class="card">
                                                <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap">
                                                <div class="card-body">
                                                        <div class="container" style="text-align:center; margin-top:-10px;">
                                                            <div class="row">
                                                            <div class="col-lg-12">
                                                            <small class="text-muted" style="color:#001f9c;">Husna Mohamed,</small>
                                                            <small class="text-muted">Loyola High School</small>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                    <small class="text-muted">9 mins ago</small>
                                                            </div>
                                                            </div>     
                                                        </div>
                                            <div class="container">
                                                     <div class="row">
                                                            <div class="col-lg-12">
                                                                 <h5 class="card-title" style="color:#001f9c">Application of Physics in dailylife</h5>
                                                            </div> 
                                                    </div>
                                            </div>
                                            
                                            <div class="container">
                                                    <div class="row">
                                                            <div class="col-lg-12">
                                                                   <small class="text-muted">#physics #introduction-to-physics</small>
                                                            </div>
                                                            <div class="col-lg-12">
                                                                        <small style="text-align:center;"><a class="nav-item nav-link" href="#" style="color:#001f9c;">Edit Post post</a></small>
                                                                        <small style="text-align:center;"><a class="nav-item nav-link" href="#" style="color:red;">Delete post</a></small>
                                                                  </div>
                                                            
                                                    </div>
                                            </div>
                                                  
                                            </div>
                                                  
                                                </div>
                               
          
                                        </div>
   
        </div>
    </div>

@endsection