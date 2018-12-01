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
                                        <button type="button" class="btn btn-sm btn-primary">Follow</button>
                                        <button type="button" class="btn btn-sm btn-success">Message</button>
                                    </div>
                                    <small><a class="nav-link" href="#">10 Views</a></small>
                        </div>
                    </div>
                </div>
                <div class="container" style="text-align:center">
                        <h3 class="card-title" style="color:blue; margin-top:10px; margin-left:5px;" >This is the post title of an exam</h3>
                        <span ><small class="text-muted">#physics #introduction to physics</small></span>
                </div>
            
                <div class="card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
                <div class="container" >
                    <div class="row">
                        <div class="col-lg-6" >
                            <div class="card-body">
                                    <h5 class="text-muted">Attachments</h5>
                                    <img class="card-image" style="margin-left:5px; margin-top:5px;" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="90" height="90">
                                    <img class="card-image" style="margin-left:5px; margin-top:5px;" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="90" height="90">
                                    <img class="card-image" style="margin-left:5px; margin-top:5px;" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="90" height="90">    
                            </div>
                            <button type="button" class="btn btn-sm btn-primary" style="margin-left:20px;">View & Download Attachments</button>
                            </div>
                    </div>
                </div>
                <div class="container" style="border-top: 1px dotted #ccc; margin-top:20px;">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 style="margin-top:20px; margin-left:10px; color:blue;">COMMENTS</h4>
                        </div>
                        
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="container" style="text-align:center;">
                                <a href="#"> <img class="rounded-circle" style=" margin-top:5px; " src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="80" height="80"></a>
                                <a href="#"><h4><small>Janeth Nelson</small></h4></a> 
                                <p><small class="text-muted">4 mins ago</small></p>
                            </div>
                        </div>
                        
                        <div class="col-md-8">
                            <div class="container" style="margin-top:20px;">
                              <p> Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p>
                            </div> 
                        </div> 
                    </div>
                </div>
                
                
                
            </div>
        </div>
    </div>
</div>
    </div>
</div>

 

@endsection