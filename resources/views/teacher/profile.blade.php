@extends('layouts.teacher')
@section('content')
<div class="content">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">
            <h5 class="title">Edit Profile</h5>
          </div>
          <div class="card-body">
            <form action="{{ route('teacher.edit.profile') }}" method="POST">
              @csrf
              <div class="row">
                <div class="col-md-3 px-md-1">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Username" value="{{ Auth::user()->username }}">
                  </div>
                </div>
                <div class="col-md-3 px-md-1">
                  <div class="form-group">
                    <label>Mobile</label>
                    <input type="text" class="form-control" name="mobile" placeholder="mobile" value="{{ Auth::user()->mobile }}">
                  </div>
                </div>
                <div class="col-md-6 pl-md-1">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" placeholder="mike@email.com">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    <label for="exampleInputEmail1">School</label>
                    <input type="text" class="form-control" name="school" value="{{ Auth::user()->school }}" placeholder="Eagles Secondary School">
                  </div>
                </div>
                <div class="col-md-2 pl-md-1">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Teaching class</label>
                    <input type="number" class="form-control" name="form" value="{{ Auth::user()->form }}" placeholder="1">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 pr-md-1">
                  <div class="form-group">
                    <label>First Name</label>
                    <input type="text" class="form-control" name="firstname" placeholder="firsname" value="{{ Auth::user()->firstname }}">
                  </div>
                </div>
                <div class="col-md-6 pl-md-1">
                  <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" class="form-control" name="lastname" placeholder="Last Name" value="{{ Auth::user()->lastname }}">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Location</label>
                    <input type="text" class="form-control" name="ward" placeholder="Home Address" value="{{ Auth::user()->ward }}">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4 pr-md-1">
                  <div class="form-group">
                    <label>City</label>
                    <input type="text" class="form-control" name="city" placeholder="City" value="{{ Auth::user()->city }}">
                  </div>
                </div>
                <div class="col-md-4 px-md-1">
                  <div class="form-group">
                    <label>Country</label>
                    <input type="text" class="form-control" name="country" placeholder="Country" value="{{ Auth::user()->country }}">
                  </div>
                </div>
                <div class="col-md-4 pl-md-1">
                  <div class="form-group">
                    <label>District</label>
                    <input type="text" class="form-control" name="district" placeholder="{{ Auth::user()->district }}">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-8">
                  <div class="form-group">
                    <label>About Me</label>
                    <textarea rows="4" cols="80" class="form-control" name="bio" placeholder="Here can be your description" value="{{ Auth::user()->bio }}">{{ Auth::user()->bio }}</textarea>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-fill btn-primary">Save</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card card-user">
          <div class="card-body">
            <p class="card-text">
              <div class="author">
                <div class="block block-one"></div>
                <div class="block block-two"></div>
                <div class="block block-three"></div>
                <div class="block block-four"></div>
                <a href="javascript:void(0)">
                  <img class="avatar" src="{{ asset('/teacher/assets/img/emilyz.jpg') }}" alt="...">
                  <h5 class="title">{{ Auth::user()->username }}</h5>
                </a>
                <p>
                    {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}
                </p>
                <p class="description">
                    {{ Auth::user()->type }} - Form {{ Auth::user()->form }}
                </p>
              </div>
            </p>
            <div class="card-description text-center">
                {!! Auth::user()->bio !!}
            </div>
          </div>
          <div class="card-footer">
            <div class="button-container">
              <button href="javascript:void(0)" class="btn btn-icon btn-round btn-facebook">
                <i class="fab fa-facebook"></i>
              </button>
              <button href="javascript:void(0)" class="btn btn-icon btn-round btn-twitter">
                <i class="fab fa-twitter"></i>
              </button>
              <button href="javascript:void(0)" class="btn btn-icon btn-round btn-google">
                <i class="fab fa-google-plus"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection