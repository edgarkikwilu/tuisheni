@extends('layouts.index')
@section('content')
<div class="container" style=" margin-top: 40px; text-align:left;">
    <h3 class="display-5" style="color: #001f9c ; " >MY DASHBOARD</h3>  
  </div>
@include('admin/dashboardnav')

<!--ALL TOPICS -->
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
                 
    <!--END ALL TOPICS -->

@endsection