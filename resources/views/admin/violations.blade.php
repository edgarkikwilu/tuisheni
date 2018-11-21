@extends('layouts.index')
@section('content')
<div class="container" style=" margin-top: 40px; text-align:left;">
    <h3 class="display-5" style="color: #001f9c ; " >MY DASHBOARD</h3>  
  </div>
@include('admin/dashboardnav')

<!--VIOLATIONS-->
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

    
    <!--END VIOLATIONS-->
    @endsection