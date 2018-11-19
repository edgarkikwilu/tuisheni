@extends('layouts.index')
@section('content')
<div class="container" style=" margin-top: 40px;">
    <h3 class="display-5" style="color: #001f9c ; " >Admin Dashboard</h3>  
  </div>
<!--RESPONSIVE BAR-->
  <div class="col-sm-12 admin-tabs" style="margin-top:30px;">
    <ul class="nav nav-tabs admin-nav text-uppercase" role="tablist">
      <li class="nav-item">
        <a class="nav-link admin-nav-item active" data-toggle="tab" href="#admin-users" role="tab" aria-controls="admin-users" aria-selected="false">Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link admin-nav-item" data-toggle="tab" href="#admin-notes" role="tab" aria-controls="admin-notes" aria-selected="true">Notes</a>
      </li>
      <li class="nav-item">
        <a class="nav-link admin-nav-item" data-toggle="tab" href="#admin-topic" role="tab" aria-controls="admin-topic" aria-selected="false">Topics</a>
      </li>
      <li class="nav-item">
        <a class="nav-link admin-nav-item" data-toggle="tab" href="#admin-examinations" role="tab" aria-controls="admin-examinations" aria-selected="false">Examinations</a>
      </li>
      <li class="nav-item">
        <a class="nav-link admin-nav-item" data-toggle="tab" href="#admin-results" role="tab" aria-controls="admin-results" aria-selected="false">Results</a>
      </li>
      <li class="nav-item">
        <a class="nav-link admin-nav-item" data-toggle="tab" href="#admin-awards" role="tab" aria-controls="admin-awards" aria-selected="false">Awards</a>
      </li>
      <li class="nav-item">
        <a class="nav-link admin-nav-item" data-toggle="tab" href="#admin-adverts" role="tab" aria-controls="admin-adverts" aria-selected="false">Advertisements</a>
      </li>
      <li class="nav-item">
        <a class="nav-link admin-nav-item" data-toggle="tab" href="#admin-payments" role="tab" aria-controls="admin-payments" aria-selected="false">Payments</a>
      </li>
      <li class="nav-item">
        <a class="nav-link admin-nav-item" data-toggle="tab" href="#admin-violations" role="tab" aria-controls="admin-violations" aria-selected="false">Violations</a>
      </li>
    </ul>
  </div>
  <!--END RESPONSIVE BAR-->
  <div class="col-sm-12" style="margin-top:30px;">
    <div class="tab-content">
      <!--USERS-->
      <div class="tab-pane fade active show" id="admin-users" role="tabpanel" aria-labelledby="admin-users-tab">
        <ul class="nav nav-pills nav-fill">
          <li class="nav-item">
            <h4><a class="nav-link admin-header-block">FILTER USERS</a></h4>
          </li>
        </ul>
        <nav class="navbar">
          <form class="form-inline col-sm-12">
            <div class="col-sm-3">
              <select class="custom-select">
                <option value="1">Teachers</option>
                <option value="2">Students</option>
                <option value="3">School</option>
              </select>
            </div>
            <div class="col-sm-3"><input class="form-control mr-sm-2" type="search" placeholder="First Name" aria-label="first" style="width: 100%;"></div>
            <div class="col-sm-3"><input class="form-control mr-sm-2" type="search" placeholder="Last Name" aria-label="last" style="width: 100%;"></div>
            <div class="col-sm-3">
              <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                  <a class="nav-link admin-filter-button text-uppercase" href="#">Filter</a>
                </li>
              </ul>
            </div>
          </form>
        </nav>
      
    <div class="container">
        <div class="row">
            <div>
                    <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">ID</th>
                                <th scope="col">First Name</th>
                                <th scope="col">Last Name</th>
                                <th scope="col">User Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Contact</th>
                                <th scope="col">School</th>
                                <th scope="col">Class</th>
                                <th scope="col">Account Type</th>
                                <th scope="col">Account State</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Odunga</td>
                                <td>mark_odunga</td>
                                <td>mark@mark.com</td>
                                <td>+255 765 386 386</td>
                                <td>Loyola High School</td>
                                <td>Form 3</td>
                                <td>Student</td>
                                <td>Active</td>
                              </tr>
                              <tr>
                                <th scope="row">2</th>
                                <td>Mark</td>
                                <td>Odunga</td>
                                <td>mark_odunga</td>
                                <td>mark@mark.com</td>
                                <td>+255 765 386 386</td>
                                <td>Loyola High School</td>
                                <td>Form 3</td>
                                <td>Student</td>
                                <td>Active</td>
                              </tr>
                              <tr>
                                <th scope="row">3</th>
                                <td>Mark</td>
                                <td>Odunga</td>
                                <td>mark_odunga</td>
                                <td>mark@mark.com</td>
                                <td>+255 765 386 386</td>
                                <td>Loyola High School</td>
                                <td>Form 3</td>
                                <td>Student</td>
                                <td>Active</td>
                            </tr>
                            </tbody>
                          </table>
            </div>
        </div>
    </div>  
        

  </div>
  <!--END USERS-->
  <!--ALL NOTES -->
      <div class="tab-pane fade" id="admin-notes" role="tabpanel" aria-labelledby="admin-notes-tab">
        <div class="container">
          <div class="row">
            <div class="col-sm-3">
                <h4><a class="nav-link admin-header-block">UPLOAD NOTES:</a></h4>
              </div>
            <div class="col-sm-3">
                <button type="button" class="btn btn-secondary" > Upload Notes</button>
              </div>  
          </div>
          </div>  
        <ul class="nav nav-pills nav-fill">
          <li class="nav-item">
            <h4><a class="nav-link admin-header-block">FILTER NOTES</a></h4>
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
                  <div class="container">
                      <button class="btn btn-primary" style="margin-top: 10px;" href="#">Filter Notes</button>
                </div>
                </form>
              
        </nav>
        <div class="container" style="margin-top: 10px; border-top: 1px dotted  #566573 ;">

            <div class="row">
              <div class="col-lg-3"  style="margin-top: 20px;">
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
                      <div class="col-lg-3"  style="margin-top: 20px;">
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

      </div>
      <!--END ALL NOTES -->
      <!--ALL TOPICS -->
      <div class="tab-pane fade" id="admin-topic" role="tabpanel" aria-labelledby="admin-topic-tab">
          <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
              <h4><a class="nav-link admin-header-block">ALL TOPICS</a></h4>
              <button class="btn btn-primary"  href="#">Add Topic</button>
            </li>
          </ul>
          <div class="container" style="margin-top:10px;">
              <div class="row">
                  <div class="col-sm-12">
                          <table class="table">
                                  <thead>
                                    <tr>
                                      <th scope="col">ID</th>
                                      <th scope="col">Topic Name</th>
                                      <th scope="col">Posts</th>
                                      <th scope="col">Subject</th>
                                      <th scope="col">Level</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <th scope="row">1</th>
                                      <td>Introduction To Physics</td>
                                      <td>12</td>
                                      <td>Physics</td>
                                      <td>Form 1</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">2</th>
                                      <td>Introduction To Physics</td>
                                      <td>12</td>
                                      <td>Physics</td>
                                      <td>Form 1</td>
                                    </tr>
                                    <tr>
                                      <th scope="row">3</th>
                                      <td>Introduction To Physics</td>
                                      <td>12</td>
                                      <td>Physics</td>
                                      <td>Form 1</td>
                                  </tr>
                                  </tbody>
                                </table>
                  </div>
              </div>
          </div>
        </div>                  
      <!--END ALL TOPICS -->      
    <!--ALL EXAMS-->          
      <div class="tab-pane fade" id="admin-examinations" role="tabpanel" aria-labelledby="admin-examinations-tab">
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
        </div>
<!--END ALL EXAMS-->
<!--RESULTS-->
        <div class="tab-pane fade" id="admin-results" role="tabpanel" aria-labelledby="admin-results-tab">
            <nav class="navbar">
                <form class="form-inline col-sm-12">
                    <div class="col-sm-3">
                        <select class="custom-select">
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
                  <div class="col-sm-3" style="margin-top:10px;"><input class="form-control mr-sm-2" type="search" placeholder="Search By Username" aria-label="username" style="width: 100%;"></div>
                  <div class="col-sm-3" style="margin-top:10px;"><input class="form-control mr-sm-2" type="search" placeholder="Search By School" aria-label="school" style="width: 100%;"></div>
                  <div class="col-sm-3" style="margin-top:10px;"><input class="form-control mr-sm-2" type="search" placeholder="Search By Exam Title" aria-label="examtitle" style="width: 100%;"></div>
                  <div class="container">
                      <button class="btn btn-primary" style="margin-top: 10px;" href="#">Filter Results</button>
                </div>
                </form>
              
        </nav>
            <ul class="nav nav-pills nav-fill">
              <li class="nav-item">
                <h4><a class="nav-link admin-header-block">January Physics Examination Results</a></h4>
              </li>
              <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Student ID</th>
                      <th scope="col">Full Name</th>
                      <th scope="col">Week 1</th>
                      <th scope="col">Week 2</th>
                      <th scope="col">Week 3</th>
                      <th scope="col">Week 4</th>
                      <th scope="col">Average</th>
                      <th scope="col">Grade</th>
                      <th scope="col">Position</th>
                      </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mrisho Abdul</td>
                      <td>78%</td>
                      <td>89%</td>
                      <td>83%</td>
                      <td>83%</td>
                      <td>83%</td>
                      <td>A</td>
                      <td>23/411</td>
                    </tr>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mrisho Abdul</td>
                      <td>78%</td>
                      <td>89%</td>
                      <td>83%</td>
                      <td>83%</td>
                      <td>83%</td>
                      <td>A</td>
                      <td>23/411</td>
                    </tr>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mrisho Abdul</td>
                      <td>78%</td>
                      <td>89%</td>
                      <td>83%</td>
                      <td>83%</td>
                      <td>83%</td>
                      <td>A</td>
                      <td>23/411</td>  
                    </tr>
                    <tr>
                      <th scope="row">1</th>
                      <td>Mrisho Abdul</td>
                      <td>78%</td>
                      <td>89%</td>
                      <td>83%</td>
                      <td>83%</td>
                      <td>83%</td>
                      <td>A</td>
                      <td>23/411</td>
                  </tr>
                  <tr>
                      <th scope="row">1</th>
                      <td>Mrisho Abdul</td>
                      <td>78%</td>
                      <td>89%</td>
                      <td>83%</td>
                      <td>83%</td>
                      <td>83%</td>
                      <td>A</td>
                      <td>23/411</td>
                  </tr>
                  <tr>
                      <th scope="row">1</th>
                      <td>Mrisho Abdul</td>
                      <td>78%</td>
                      <td>89%</td>
                      <td>83%</td>
                      <td>83%</td>
                      <td>83%</td>
                      <td>A</td>
                      <td>23/411</td>
                  </tr>
                  <tr>
                      <th scope="row">1</th>
                      <td>Mrisho Abdul</td>
                      <td>78%</td>
                      <td>89%</td>
                      <td>83%</td>
                      <td>83%</td>
                      <td>83%</td>
                      <td>A</td>
                      <td>23/411</td>
                  </tr>
                  <tr>
                      <th scope="row">1</th>
                      <td>Mrisho Abdul</td>
                      <td>78%</td>
                      <td>89%</td>
                      <td>83%</td>
                      <td>83%</td>
                      <td>83%</td>
                      <td>A</td>
                      <td>23/411</td>
                  </tr>
                  <tr>
                      <th scope="row">1</th>
                      <td>Mrisho Abdul</td>
                      <td>78%</td>
                      <td>89%</td>
                      <td>83%</td>
                      <td>83%</td>
                      <td>83%</td>
                      <td>A</td>
                      <td>23/411</td>
                  </tr>
                  </tbody>
                </table>
      
            </ul>
           </div>
  <!--END RESULTS-->
  <!--AWARDS-->
<div class="tab-pane fade" id="admin-awards" role="tabpanel" aria-labelledby="admin-awards-tab">

<div class="container">
  <div class="row">
    <div class="col-sm-3">
        <h4><a class="nav-link admin-header-block">INSERT AWARD:</a></h4>
      </div>
    <div class="col-sm-3">
        <button type="button" class="btn btn-secondary" > Create New</button>
      </div>  
  </div>
  </div>
  <ul class="nav nav-pills nav-fill">
      <li class="nav-item">
        <h4><a class="nav-link admin-header-block">FILTER AWARDS</a></h4>
      </li>
    </ul>
    <nav class="navbar">
            <form class="form-inline col-sm-12">
                <div class="col-sm-3">
                    <select class="custom-select">
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
                      <select class="custom-select">
                        <option value="1">Week 1</option>
                        <option value="2">Week 2</option>
                        <option value="3">Week 3</option>
                        <option value="1">Week 4</option>
                      </select>
                    </div>
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
              <div class="col-sm-3" style="margin-top:10px;"><input class="form-control mr-sm-2" type="search" placeholder="Search By Username" aria-label="username" style="width: 100%;"></div>
              <div class="col-sm-3" style="margin-top:10px;"><input class="form-control mr-sm-2" type="search" placeholder="Search By School" aria-label="school" style="width: 100%;"></div>
              
              <div class="container">
                  <button class="btn btn-primary" style="margin-top: 10px;" href="#">Filter Awards</button>
            </div>
            </form>
          
    </nav>
    <ul class="nav nav-pills nav-fill">
    <li class="nav-item">
        <h4><a class="nav-link admin-header-block">January  Perfomance Awards</a></h4>
      </li>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Student ID</th>
            <th scope="col">Full Name</th>
            <th scope="col">School</th>
            <th scope="col">Details</th>
            <th scope="col">Average</th>
            <th scope="col">Grade</th>
            <th scope="col">Position</th>
            <th scope="col">Award</th>
            </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mrisho Abdul</td>
            <td>Eagles Secondary School</td>
            <td>Top Physics Student</td>
            <td>83%</td>
            <td>A</td>
            <td>23/411</td>
            <td>5000 Points</td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Mrisho Abdul</td>
            <td>Eagles Secondary School</td>
            <td>Top Physics Student</td>
            <td>83%</td>
            <td>A</td>
            <td>23/411</td>
            <td>5000 Points</td>
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Mrisho Abdul</td>
            <td>Eagles Secondary School</td>
            <td>Top Physics Student</td>
            <td>83%</td>
            <td>A</td>
            <td>23/411</td>
            <td>5000 Points</td>  
          </tr>
          <tr>
            <th scope="row">1</th>
            <td>Mrisho Abdul</td>
            <td>Eagles Secondary School</td>
            <td>Top Physics Student</td>
            <td>83%</td>
            <td>A</td>
            <td>23/411</td>
            <td>5000 Points</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Mrisho Abdul</td>
            <td>Eagles Secondary School</td>
            <td>Top Physics Student</td>
            <td>83%</td>
            <td>A</td>
            <td>23/411</td>
            <td>5000 Points</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Mrisho Abdul</td>
            <td>Eagles Secondary School</td>
            <td>Top Physics Student</td>
            <td>83%</td>
            <td>A</td>
            <td>23/411</td>
            <td>5000 Points</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Mrisho Abdul</td>
            <td>Eagles Secondary School</td>
            <td>Top Physics Student</td>
            <td>83%</td>
            <td>A</td>
            <td>23/411</td>
            <td>5000 Points</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Mrisho Abdul</td>
            <td>Eagles Secondary School</td>
            <td>Top Physics Student</td>
            <td>83%</td>
            <td>A</td>
            <td>23/411</td>
            <td>5000 Points</td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Mrisho Abdul</td>
            <td>Eagles Secondary School</td>
            <td>Top Physics Student</td>
            <td>83%</td>
            <td>A</td>
            <td>23/411</td>
            <td>5000 Points</td>
        </tr>
        </tbody>
      </table>
    </ul>
  </div>
<!--END AWARDS-->
<!--ADVERTISEMENTS-->
<div class="tab-pane fade" id="admin-adverts" role="tabpanel" aria-labelledby="admin-adverts-tab">
    <div class="container">
        <div class="row">
          <div class="col-sm-3">
              <h4><a class="nav-link admin-header-block">Upload Advertisement:</a></h4>
            </div>
          <div class="col-sm-3">
              <button type="button" class="btn btn-secondary" > Create New</button>
            </div>  
        </div>
        </div>
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <h4><a class="nav-link admin-header-block">ADVERTISEMENTS</a></h4>
              </li>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Advert ID</th>
                    <th scope="col">Advert Name</th>
                    <th scope="col">Details</th>
                    <th scope="col">Advert Link</th>
                    <th scope="col">Attachment</th>
                    <th scope="col">Date Added</th>
                    <th scope="col">Expire Date</th>
                    </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>This Week Offers </td>
                    <td>All offers details withdescriptions on how to claim or take advantage of the offer</td>
                    <td>http://link-to-an-advert</td>
                    <td>http://link-to-an-advert-attachment</td>
                    <td>12/02/2018</td>
                    <td>17/02/2018</td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>This Week Offers </td>
                    <td>All offers details withdescriptions on how to claim or take advantage of the offer</td>
                    <td>http://link-to-an-advert</td>
                    <td>http://link-to-an-advert-attachment</td>
                    <td>12/02/2018</td>
                    <td>17/02/2018</td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>This Week Offers </td>
                    <td>All offers details withdescriptions on how to claim or take advantage of the offer</td>
                    <td>http://link-to-an-advert</td>
                    <td>http://link-to-an-advert-attachment</td>
                    <td>12/02/2018</td>
                    <td>17/02/2018</td>  
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>This Week Offers </td>
                    <td>All offers details withdescriptions on how to claim or take advantage of the offer</td>
                    <td>http://link-to-an-advert</td>
                    <td>http://link-to-an-advert-attachment</td>
                    <td>12/02/2018</td>
                    <td>17/02/2018</td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>This Week Offers </td>
                    <td>All offers details withdescriptions on how to claim or take advantage of the offer</td>
                    <td>http://link-to-an-advert</td>
                    <td>http://link-to-an-advert-attachment</td>
                    <td>12/02/2018</td>
                    <td>17/02/2018</td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>This Week Offers </td>
                    <td>All offers details withdescriptions on how to claim or take advantage of the offer</td>
                    <td>http://link-to-an-advert</td>
                    <td>http://link-to-an-advert-attachment</td>
                    <td>12/02/2018</td>
                    <td>17/02/2018</td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>This Week Offers </td>
                    <td>All offers details withdescriptions on how to claim or take advantage of the offer</td>
                    <td>http://link-to-an-advert</td>
                    <td>http://link-to-an-advert-attachment</td>
                    <td>12/02/2018</td>
                    <td>17/02/2018</td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>This Week Offers </td>
                    <td>All offers details withdescriptions on how to claim or take advantage of the offer</td>
                    <td>http://link-to-an-advert</td>
                    <td>http://link-to-an-advert-attachment</td>
                    <td>12/02/2018</td>
                    <td>17/02/2018</td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>This Week Offers </td>
                    <td>All offers details withdescriptions on how to claim or take advantage of the offer</td>
                    <td>http://link-to-an-advert</td>
                    <td>http://link-to-an-advert-attachment</td>
                    <td>12/02/2018</td>
                    <td>17/02/2018</td>
                </tr>
                </tbody>
              </table>
            </ul>
  </div>
<!--END ADVERTISEMENTS-->
<!--PAYMENTS-->
<div class="tab-pane fade" id="admin-payments" role="tabpanel" aria-labelledby="admin-payments-tab">
      <ul class="nav nav-pills nav-fill">
          <li class="nav-item">
            <h4><a class="nav-link admin-header-block">FILTER PAYMENTS</a></h4>
          </li>
        </ul>
        <nav class="navbar">
                <form class="form-inline col-sm-12">
                    <div class="col-sm-3">
                        <select class="custom-select">
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
                          <select class="custom-select">
                            <option value="1">Week 1</option>
                            <option value="2">Week 2</option>
                            <option value="3">Week 3</option>
                            <option value="1">Week 4</option>
                          </select>
                        </div>
                  <div class="col-sm-3">
                    <select class="custom-select">
                      <option value="1">Teachers</option>
                      <option value="2">Students</option>
                      <option value="3">School</option>
                      
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
                  <div class="col-sm-3" style="margin-top:10px;"><input class="form-control mr-sm-2" type="search" placeholder="Search By Username" aria-label="username" style="width: 100%;"></div>
                  <div class="col-sm-3" style="margin-top:10px;"><input class="form-control mr-sm-2" type="search" placeholder="Search By School" aria-label="school" style="width: 100%;"></div>
                  
                  <div class="container">
                      <button class="btn btn-primary" style="margin-top: 10px;" href="#">Filter Payments</button>
                </div>
                </form>
              
        </nav>
        
        <ul class="nav nav-pills nav-fill">
            <li class="nav-item">
                <h4><a class="nav-link admin-header-block">January  Payments (Tsh 560,000/=)</a></h4>
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
              <tr>
                <th scope="row">1</th>
                <td>Mrisho Abdul</td>
                <td>Eagles Secondary School</td>
                <td>Deposit For More Points</td>
                <td>Subscription Page</td>
                <td>Deposit</td>
                <td>Tsh 1000/=</td>
                <td>23/04/2018 12:30</td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>Mrisho Abdul</td>
                <td>Eagles Secondary School</td>
                <td>Deposit For More Points</td>
                <td>Subscription Page</td>
                <td>Deposit</td>
                <td>Tsh 1000/=</td>
                <td>23/04/2018 12:30</td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>Mrisho Abdul</td>
                <td>Eagles Secondary School</td>
                <td>Deposit For More Points</td>
                <td>Subscription Page</td>
                <td>Deposit</td>
                <td>Tsh 1000/=</td>
                <td>23/04/2018 12:30</td>  
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>Mrisho Abdul</td>
                <td>Eagles Secondary School</td>
                <td>Deposit For More Points</td>
                <td>Subscription Page</td>
                <td>Deposit</td>
                <td>Tsh 1000/=</td>
                <td>23/04/2018 12:30</td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Mrisho Abdul</td>
                <td>Eagles Secondary School</td>
                <td>Deposit For More Points</td>
                <td>Subscription Page</td>
                <td>Deposit</td>
                <td>Tsh 1000/=</td>
                <td>23/04/2018 12:30</td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Mrisho Abdul</td>
                <td>Eagles Secondary School</td>
                <td>Deposit For More Points</td>
                <td>Subscription Page</td>
                <td>Deposit</td>
                <td>Tsh 1000/=</td>
                <td>23/04/2018 12:30</td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Mrisho Abdul</td>
                <td>Eagles Secondary School</td>
                <td>Deposit For More Points</td>
                <td>Subscription Page</td>
                <td>Deposit</td>
                <td>Tsh 1000/=</td>
                <td>23/04/2018 12:30</td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Mrisho Abdul</td>
                <td>Eagles Secondary School</td>
                <td>Deposit For More Points</td>
                <td>Subscription Page</td>
                <td>Deposit</td>
                <td>Tsh 1000/=</td>
                <td>23/04/2018 12:30</td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Mrisho Abdul</td>
                <td>Eagles Secondary School</td>
                <td>Deposit For More Points</td>
                <td>Subscription Page</td>
                <td>Deposit</td>
                <td>Tsh 1000/=</td>
                <td>23/04/2018 12:30</td>
            </tr>
            </tbody>
          </table>
        </ul>
</div>
<!--END PAYMENTS-->

<!--VIOLATIONS-->
<div class="tab-pane fade" id="admin-violations" role="tabpanel" aria-labelledby="admin-violations-tab">
    <nav class="navbar">
        <form class="form-inline col-sm-12">
            <div class="col-sm-3">
                <select class="custom-select">
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
          <div class="col-sm-3" style="margin-top:10px;"><input class="form-control mr-sm-2" type="search" placeholder="Search By Username" aria-label="username" style="width: 100%;"></div>
          <div class="col-sm-3" style="margin-top:10px;"><input class="form-control mr-sm-2" type="search" placeholder="Search By School" aria-label="school" style="width: 100%;"></div>
          <div class="col-sm-3" style="margin-top:10px;"><input class="form-control mr-sm-2" type="search" placeholder="Search By Title" aria-label="examtitle" style="width: 100%;"></div>
          <div class="container">
              <button class="btn btn-primary" style="margin-top: 10px;" href="#">Filter Results</button>
        </div>
        </form>
      
</nav>  
  <ul class="nav nav-pills nav-fill">
      <li class="nav-item">
          <h4><a class="nav-link admin-header-block">VIOLATIONS</a></h4>
        </li>
  
  <table class="table">
      <thead>
        <tr>
          <th scope="col">Violation ID</th>
          <th scope="col">Reporter</th>
          <th scope="col">Post Title</th>
          <th scope="col">Subject</th>
          <th scope="col">Topic</th>
          <th scope="col">Violation Details</th>
          <th scope="col">Report Time</th>
          <th scope="col">Action</th>
          </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mrisho Abdul</td>
          <td>Application of Physics in Daily Life</td>
          <td>Physics</td>
          <td>Introduction To Physics</td>
          <td>The uploaded content doesn't match respective topic</td>
          <td>23/04/2018 12:30</td>
          <td>
            <small><a class="nav-item nav-link" href="#" style="color:red;">Delete</a></small>
            <small><a class="nav-item nav-link" href="#" style="color:#001f9c;">Edit</a></small>
          </td>
        </tr>
        <tr>
          <th scope="row">1</th>
          <td>Mrisho Abdul</td>
          <td>Application of Physics in Daily Life</td>
          <td>Physics</td>
          <td>Introduction To Physics</td>
          <td>The uploaded content doesn't match respective topic</td>
          <td>23/04/2018 12:30</td>
          <td>
            <small><a class="nav-item nav-link" href="#" style="color:red;">Delete</a></small>
            <small><a class="nav-item nav-link" href="#" style="color:#001f9c;">Edit</a></small>
          </td>
        </tr>
        <tr>
          <th scope="row">1</th>
          <td>Mrisho Abdul</td>
          <td>Application of Physics in Daily Life</td>
          <td>Physics</td>
          <td>Introduction To Physics</td>
          <td>The uploaded content doesn't match respective topic</td>
          <td>23/04/2018 12:30</td>
          <td>
            <small><a class="nav-item nav-link" href="#" style="color:red;">Delete</a></small>
            <small><a class="nav-item nav-link" href="#" style="color:#001f9c;">Edit</a></small>
          </td>  
        </tr>
        <tr>
          <th scope="row">1</th>
          <td>Mrisho Abdul</td>
          <td>Application of Physics in Daily Life</td>
          <td>Physics</td>
          <td>Introduction To Physics</td>
          <td>The uploaded content doesn't match respective topic</td>
          <td>23/04/2018 12:30</td>
          <td>
            <small><a class="nav-item nav-link" href="#" style="color:red;">Delete</a></small>
            <small><a class="nav-item nav-link" href="#" style="color:#001f9c;">Edit</a></small>
          </td>
      </tr>
      <tr>
          <th scope="row">1</th>
          <td>Mrisho Abdul</td>
          <td>Application of Physics in Daily Life</td>
          <td>Physics</td>
          <td>Introduction To Physics</td>
          <td>The uploaded content doesn't match respective topic</td>
          <td>23/04/2018 12:30</td>
          <td>
            <small><a class="nav-item nav-link" href="#" style="color:red;">Delete</a></small>
            <small><a class="nav-item nav-link" href="#" style="color:#001f9c;">Edit</a></small>
          </td>
      </tr>
      <tr>
          <th scope="row">1</th>
          <td>Mrisho Abdul</td>
          <td>Application of Physics in Daily Life</td>
          <td>Physics</td>
          <td>Introduction To Physics</td>
          <td>The uploaded content doesn't match respective topic</td>
          <td>23/04/2018 12:30</td>
          <td>
            <small><a class="nav-item nav-link" href="#" style="color:red;">Delete</a></small>
            <small><a class="nav-item nav-link" href="#" style="color:#001f9c;">Edit</a></small>
          </td>
      </tr>
      <tr>
          <th scope="row">1</th>
          <td>Mrisho Abdul</td>
          <td>Application of Physics in Daily Life</td>
          <td>Physics</td>
          <td>Introduction To Physics</td>
          <td>The uploaded content doesn't match respective topic</td>
          <td>23/04/2018 12:30</td>
          <td>
            <small><a class="nav-item nav-link" href="#" style="color:red;">Delete</a></small>
            <small><a class="nav-item nav-link" href="#" style="color:#001f9c;">Edit</a></small>
          </td>
      </tr>
      <tr>
          <th scope="row">1</th>
          <td>Mrisho Abdul</td>
          <td>Application of Physics in Daily Life</td>
          <td>Physics</td>
          <td>Introduction To Physics</td>
          <td>The uploaded content doesn't match respective topic</td>
          <td>23/04/2018 12:30</td>
          <td>
            <small><a class="nav-item nav-link" href="#" style="color:red;">Delete</a></small>
            <small><a class="nav-item nav-link" href="#" style="color:#001f9c;">Edit</a></small>
          </td>
      </tr>
      <tr>
          <th scope="row">1</th>
          <td>Mrisho Abdul</td>
          <td>Application of Physics in Daily Life</td>
          <td>Physics</td>
          <td>Introduction To Physics</td>
          <td>The uploaded content doesn't match respective topic</td>
          <td>23/04/2018 12:30</td>
          <td>
            <small><a class="nav-item nav-link" href="#" style="color:red;">Delete</a></small>
            <small><a class="nav-item nav-link" href="#" style="color:#001f9c;">Edit</a></small>
          </td>
      </tr>
      </tbody>
    </table>
  </ul>
</div>

<!--END VIOLATIONS-->        
</div>
    
      
    
    </div>
  </div>
</div>

@endsection