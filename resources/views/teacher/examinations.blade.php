@extends('teacher.topdash')
@section('content')
<div class="container" style=" margin-top: 40px; text-align:left;">
    <h3 class="display-5" style="color: #001f9c ; " >MY EXAMINATIONS</h3>  
  </div>
 
<!--ALL EXAMS-->          
<div class="container">
                        <nav class="navbar">
                                <form class="form-inline col-sm-12">
                                <div class="col-sm-3">
                                <select class="custom-select">
                                        <option value="1">Physics</option>
                                        <option value="2">Biology</option>
                                        <option value="3">Chemistry</option>
                                        <option value="1">Mathematics</option>
                                        <option value="2">ICT</option>
                                        <option value="3">Technical Education</option>
                                        <option value="1">Kiswahili</option>
                                        <option value="2">English</option>
                                        <option value="3">French</option>
                                        <option value="3">Arabic</option>
                                        <option value="1">Geography</option>
                                        <option value="2">History</option>
                                        <option value="3">Civics</option>
                                        <option value="1">Economics</option>
                                        <option value="2">Agriculture</option>
                                        <option value="3">Book-Keeping</option>
                                        <option value="1">Commerce</option>
                                        <option value="2">Bible Knowledge</option>
                                        <option value="3">Islamic Knowledge</option>
                                        <option value="1">Fine Arts</option>
                                        <option value="2">Theater Arts</option>
                                        <option value="3">Physical Education</option>
                                        <option value="3">Music</option>
                                        
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
                                <div class="col-sm-3" style="margin-top:10px;"><input class="form-control mr-sm-2" type="search" placeholder="Search By Exam Title" aria-label="examtitle" style="width: 100%;"></div>
                                <div class="container">
                                        <button class="btn btn-primary" style="margin-top: 10px;" href="#">Filter Exams</button>
                                        <button class="btn btn-secondary" style="margin-top: 10px; float:right;" href="#">Create New Exam</button>
                                </div>
                                </form>
                                
                        </nav>
</div>
<div class="container">
        <div class="row" style="border:1px solid #ccc; margin-top:20px;">
                        <div class="col-lg-2"  style="margin-top: 10px;">
                                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap" style="width:100%">
                        </div>
                        <div class="col-lg-7">
                                <a href="#" ><h5 style="margin-top:10px; font-weight:bold;" >Examination title</h5></a>
                                <div class="row">
                                        <div class="col-lg-6">
                                        <small><label style="width:22%;">Start Time: </label> <b>6 mins left</b></small>
                                        </div>
                                        <div class="col-lg-6">
                                        <small><label style="width:22%;">Subject: </label> <b>Physics</b></small> 
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-lg-6">
                                        <small><label style="width:22%; ">Class: </label><b>Form 3</b></small>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-lg-6">
                                        <small><label style="width:22%">Time: </label> <b>90 minutes</b></small>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-lg-6">
                                        <small><label style="width:20%;">1st Price: </label> <b>5000 Points</b></small>
                                        </div>
                                </div>
                                </div>
                                <div class="col-lg-3" style="text-align:center; border-left:1px dotted #ccc;">
                                        <p style="margin-top:10px;"><small class="text-muted">Posted:7 mins ago</small></p>
                                        
                                                <small>Chodo, Eagles Secondary SChool</small>
                                        <button type="button" class="btn btn-sm btn-secondary" style="margin-top:10px;"> View Examination</button>
                                        <small><a class="nav-link" href="#">30 Views</a></small>
                                        <small><a class="nav-link" href="#" style="color:red;">Delete</a></small>
                
                                        
                                </div>
        </div>
        <div class="row" style="border:1px solid #ccc; margin-top:20px;">
                        <div class="col-lg-2"  style="margin-top: 10px;">
                                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap" style="width:100%">
                        </div>
                        <div class="col-lg-7">
                                <a href="#" ><h5 style="margin-top:10px; font-weight:bold;" >Examination title</h5></a>
                                <div class="row">
                                        <div class="col-lg-6">
                                           <small><label style="width:22%;">Start Time: </label> <b>6 mins left</b></small>
                                        </div>
                                        <div class="col-lg-6">
                                           <small><label style="width:22%;">Subject: </label> <b>Physics</b></small> 
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-lg-6">
                                        <small><label style="width:22%; ">Class: </label><b>Form 3</b></small>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-lg-6">
                                        <small><label style="width:22%">Time: </label> <b>90 minutes</b></small>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-lg-6">
                                        <small><label style="width:20%;">1st Price: </label> <b>5000 Points</b></small>
                                        </div>
                                </div>
                         </div>
                         <div class="col-lg-3" style="text-align:center; border-left:1px dotted #ccc;">
                                        <p style="margin-top:10px;"><small class="text-muted">Posted:7 mins ago</small></p>
                                        
                                        <small>Chodo, Eagles Secondary SChool</small>
                                        <button type="button" class="btn btn-sm btn-secondary" style="margin-top:10px;"> View Examination</button>
                                        <small><a class="nav-link" href="#">30 Views</a></small>
                                        <small><a class="nav-link" href="#" style="color:red;">Delete</a></small>
                
                                        
                                </div>
        </div>
                    
        <div class="row" style="border:1px solid #ccc; margin-top:20px;">
                        <div class="col-lg-2"  style="margin-top: 10px;">
                                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap" style="width:100%">
                        </div>
                        <div class="col-lg-7">
                                <a href="#" ><h5 style="margin-top:10px; font-weight:bold;" >Examination title</h5></a>
                                <div class="row">
                                        <div class="col-lg-6">
                                        <small><label style="width:22%;">Start Time: </label> <b>6 mins left</b></small>
                                        </div>
                                        <div class="col-lg-6">
                                        <small><label style="width:22%;">Subject: </label> <b>Physics</b></small> 
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-lg-6">
                                        <small><label style="width:22%; ">Class: </label><b>Form 3</b></small>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-lg-6">
                                        <small><label style="width:22%">Time: </label> <b>90 minutes</b></small>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-lg-6">
                                        <small><label style="width:20%;">1st Price: </label> <b>5000 Points</b></small>
                                        </div>
                                </div>
                         </div>
                         <div class="col-lg-3" style="text-align:center; border-left:1px dotted #ccc;">
                                        <p style="margin-top:10px;"><small class="text-muted">Posted:7 mins ago</small></p>
                                        
                                            <small>Chodo, Eagles Secondary SChool</small>
                                        <button type="button" class="btn btn-sm btn-secondary" style="margin-top:10px;"> View Examination</button>
                                        <small><a class="nav-link" href="#">30 Views</a></small>
                                        <small><a class="nav-link" href="#" style="color:red;">Delete</a></small>
                
                                        
                                </div>
        </div>
                    
                            
</div>
        <!--END ALL EXAMS-->
@endsection