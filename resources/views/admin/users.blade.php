@extends('layouts.index')
@section('content')
<div class="container" style=" margin-top: 40px; text-align:left;">
    <h3 class="display-5" style="color: #001f9c ; " >MY DASHBOARD</h3>  
  </div>
@include('admin/dashboardnav')
<!--USERS-->
<div class="container">
        <ul class="nav nav-pills nav-fill" style="margin-top:40px;">
          <li class="nav-item">
            <h4><a class="nav-link admin-header-block">ALL USERS</a></h4>
          </li>
        </ul>
        <nav class="navbar">
          <form action="{{ route('admin.filter.users') }}" method="POST" class="form-inline col-sm-12">
            @csrf
            <div class="col-sm-3">
              <select name="account" class="custom-select">
                <option value=""></option>
                <option value="teacher">Teachers</option>
                <option value="student">Students</option>
                <option value="school">School</option>
              </select>
            </div>
            <div class="col-sm-3"><input name="firstname" class="form-control mr-sm-2" type="search" placeholder="First Name" aria-label="first" style="width: 100%;"></div>
            <div class="col-sm-3"><input name="lastname" class="form-control mr-sm-2" type="search" placeholder="Last Name" aria-label="last" style="width: 100%;"></div>
            <div class="col-sm-3">
              <button type="submit" class="btn btn-block btn-primary">FILTER</button>
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
                              @foreach ($users as $user)
                              <tr>
                                <th scope="row">{{ $user->id }}</th>
                                <td>{{ $user->firstname }}</td>
                                <td>{{ $user->lastname }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->mobile }}</td>
                                <td>{{ $user->school }}</td>
                                <td>{{ $user->form }}</td>
                                <td>{{ $user->type }}</td>
                                <td>{{ $user->active?'Active':'Suspended' }}</td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
            </div>
        </div>
    </div> 
  <!--END USERS-->
@endsection