@extends('layouts.student')
@section('content')
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url({{ asset('/argon/assets/img/theme/profile-cover.jpg') }}); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello {{ Auth::user()->username }}</h1>
            <p class="text-white mt-0 mb-5">This is your profile page. Please fill and complete the form below.</p>
            <a href="#!" class="btn btn-info">Edit profile</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="{{ asset('/argon/assets/img/theme/team-4-800x800.jpg') }}" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-sm btn-info mr-4">Withdraw</a>
                <a href="#" class="btn btn-sm btn-default float-right">
                  <i class="ni ni-fat-add"></i>
                  Picture</a>
              </div>
            </div>
            <div class="card-body pt-0 pt-md-4">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                    <div>
                      <span class="heading">{{ $followers }}</span>
                      <span class="description">Followers</span>
                    </div>
                    <div>
                      <span class="heading">{{ $following }}</span>
                      <span class="description">Following</span>
                    </div>
                    <div>
                      <span class="heading">{{ Auth::user()->points }}</span>
                      <span class="description">Cash</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h3>
                  {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}<span class="font-weight-light">, 0</span>
                </h3>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i>{{ Auth::user()->email }} <br> 
                  {{ Auth::user()->mobile }}
                </div>
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i>{{ Auth::user()->type }} - Form {{ Auth::user()->form }}
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i>{{ Auth::user()->school }}
                </div>
                <hr class="my-4" />
                <p>{{ Auth::user()->bio }}</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-7">
                  <h3 class="mb-0">My account</h3>
                </div>
                <div class="col-5 text-right">
                  <h4>Approve/Edit Your Information</h4>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form action="{{ route('student.edit.profile') }}" method="POST">
                @csrf
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-5">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Username</label>
                        <input type="text" id="input-username" name="username" class="form-control form-control-alternative" placeholder="Username" value="{{ Auth::user()->username }}">
                      </div>
                    </div>
                    <div class="col-lg-5">
                      <div class="form-group">
                        <label class="form-control-label" for="input-school">School</label>
                        <input type="text" id="input-school" name="school" class="form-control form-control-alternative" placeholder="Eagles Secondary School" value="{{ Auth::user()->school }}">
                      </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="form-group">
                        <label class="form-control-label" for="input-form">Form</label>
                        <input type="number" id="input-form" name="form" class="form-control form-control-alternative" placeholder="1" max="6" value="{{ Auth::user()->form }}">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">First name</label>
                        <input type="text" id="input-first-name" name="firstname" class="form-control form-control-alternative" placeholder="First name" value="{{ Auth::user()->firstname }}">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Last name</label>
                        <input type="text" id="input-last-name" name="lastname" class="form-control form-control-alternative" placeholder="Last name" value="{{ Auth::user()->lastname }}">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-5">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Email Address</label>
                        <input id="input-address" name="email" class="form-control form-control-alternative" placeholder="Home Address" value="{{ Auth::user()->email }}" type="text">
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Mobile</label>
                        <input id="input-mobile" name="mobile" class="form-control form-control-alternative" placeholder="0656724750" value="{{ Auth::user()->mobile }}" type="text">
                      </div>
                    </div>
                    <div class="col-md-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">District</label>
                        <input id="input-district" name="district" class="form-control form-control-alternative" placeholder="Kibamba" value="{{ Auth::user()->district }}" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">City</label>
                        <input type="text" name="city" id="input-city" class="form-control form-control-alternative" placeholder="City" value="{{ Auth::user()->city }}">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Country</label>
                        <input type="text" name="country" id="input-country" class="form-control form-control-alternative" placeholder="Country" value="{{ Auth::user()->country }}">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-ward">Ward</label>
                        <input type="text" name="ward" id="ward" class="form-control form-control-alternative" placeholder="{{ Auth::user()->ward }}">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">About me</h6>
                <div class="pl-lg-4">
                  <div class="form-group">
                    <label>About Me</label>
                    <textarea rows="4" name="bio" class="form-control form-control-alternative" placeholder="A few words about you ...">{{ Auth::user()->bio }}</textarea>
                  </div>
                </div>
                <button type="submit" class="btn btn-info">Edit Profile</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="footer">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2018 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
@endsection