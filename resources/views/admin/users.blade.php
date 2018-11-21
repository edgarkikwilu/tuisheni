@extends('layouts.index')
@section('content')
<div class="container" style=" margin-top: 40px; text-align:left;">
    <h3 class="display-5" style="color: #001f9c ; " >MY DASHBOARD</h3>  
  </div>
@include('admin/dashboardnav')
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
@endsection