@extends('layouts.index')
@section('content')
<div class="container" style=" margin-top: 40px; text-align:left;">
    <h3 class="display-5" style="color: #001f9c ; " >MY DASHBOARD</h3>  
  </div>
  @include('teacher/dashboardnav')
<!--ALL EXAMS-->          
        <div class="container">
            <div class="row">
              <div class="col-sm-3">
                  <h4><a class="nav-link admin-header-block">UPLOAD:</a></h4>
                </div>
              <div class="col-sm-3">
                  <button type="button" class="btn btn-secondary" > Upload Examination</button>
                </div>  
            </div>
        </div>  
        <ul class="nav nav-pills nav-fill">
          <li class="nav-item">
            <h4><a class="nav-link admin-header-block">FILTER EXAMS</a></h4>
          </li>
        </ul>
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
              <div class="col-sm-3"><input class="form-control mr-sm-2" type="search" placeholder="Search By Username" aria-label="username" style="width: 100%;"></div>
              <div class="col-sm-3"><input class="form-control mr-sm-2" type="search" placeholder="Search By School" aria-label="school" style="width: 100%;"></div>
              <div class="col-sm-3" style="margin-top:10px;"><input class="form-control mr-sm-2" type="search" placeholder="Search By Exam Title" aria-label="examtitle" style="width: 100%;"></div>
              <div class="container">
                  <button class="btn btn-primary" style="margin-top: 10px;" href="#">Filter Exams</button>
            </div>
            </form>
          
        </nav>
        <div class="container" style="margin-top: 10px; border-top: 1px dotted  #566573 ;">
        <div class="row">
          <div class="col-lg-3"  style="margin-top: 20px;">
              <div class="card">
                      <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap">
                              <div class="container" style="text-align:center;">
                                  <div class="row">
                                  <div class="col-lg-12">
                                  <small class="text-muted" style="color:#001f9c;">Mr. Masore,</small>
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
                                        <h5 class="card-title" style="color:#001f9c">Masore Physics Series 1</h5>
                                  </div> 
                          </div>
                  </div>
                  
                    <div class="container">
                      <div class="row">
                          <div class="col-lg-12">
                                  <p>Starts in: <small class="text-muted">2 days 6 hours</small></p>
                                  <p>1st Price: <small class="text-muted">10000 Points</small></p>
                          </div>
                      </div>
                  </div>
                  <div class="container">
                          <div class="row">
                                  <div class="col-lg-12">
                                          <small class="text-muted">#physics #weekly</small>
                                  </div>
                                  <div class="col-lg-12">
                                      <small style="text-align:center;"><a class="nav-item nav-link" href="#" style="color:#001f9c;">Edit Post Exam</a></small>
                                      <small style="text-align:center;"><a class="nav-item nav-link" href="#" style="color:red;">Delete Exam</a></small>
                              </div>
                                  
                          </div>
                  </div>
                      
                  
                        
                      </div>
        
        
          </div>
          <div class="col-lg-3"  style="margin-top: 20px;">
            <div class="card">
                    <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap">
                            <div class="container" style="text-align:center;">
                                <div class="row">
                                <div class="col-lg-12">
                                <small class="text-muted" style="color:#001f9c;">Mr. Masore,</small>
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
                                      <h5 class="card-title" style="color:#001f9c">Masore Physics Series 1</h5>
                                </div> 
                        </div>
                </div>
                
                  <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                                <p>Starts in: <small class="text-muted">2 days 6 hours</small></p>
                                <p>1st Price: <small class="text-muted">10000 Points</small></p>
                        </div>
                    </div>
                </div>
                <div class="container">
                        <div class="row">
                                <div class="col-lg-12">
                                        <small class="text-muted">#physics #weekly</small>
                                </div>
                                <div class="col-lg-12">
                                    <small style="text-align:center;"><a class="nav-item nav-link" href="#" style="color:#001f9c;">Edit Post Exam</a></small>
                                    <small style="text-align:center;"><a class="nav-item nav-link" href="#" style="color:red;">Delete Exam</a></small>
                            </div>
                                
                        </div>
                </div>
                    
                
                      
                    </div>
        
        
          </div>
          <div class="col-lg-3"  style="margin-top: 20px;">
            <div class="card">
                    <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap">
                            <div class="container" style="text-align:center;">
                                <div class="row">
                                <div class="col-lg-12">
                                <small class="text-muted" style="color:#001f9c;">Mr. Masore,</small>
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
                                      <h5 class="card-title" style="color:#001f9c">Masore Physics Series 1</h5>
                                </div> 
                        </div>
                </div>
                
                  <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                                <p>Starts in: <small class="text-muted">2 days 6 hours</small></p>
                                <p>1st Price: <small class="text-muted">10000 Points</small></p>
                        </div>
                    </div>
                </div>
                <div class="container">
                        <div class="row">
                                <div class="col-lg-12">
                                        <small class="text-muted">#physics #weekly</small>
                                </div>
                                <div class="col-lg-12">
                                    <small style="text-align:center;"><a class="nav-item nav-link" href="#" style="color:#001f9c;">Edit Post Exam</a></small>
                                    <small style="text-align:center;"><a class="nav-item nav-link" href="#" style="color:red;">Delete Exam</a></small>
                            </div>
                                
                        </div>
                </div>
                    
                
                      
                    </div>
        
        
          </div>
        </div>
          </div>
        
        <!--END ALL EXAMS-->
@endsection