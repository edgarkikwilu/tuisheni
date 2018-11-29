@extends('layouts.app')
@section('content')
<div class="container" style=" margin-top: 40px; text-align:left;">
    <h3 class="display-5" style="color: #001f9c ; " >MY DASHBOARD</h3>  
  </div>
  @include('admin/dashboardnav')
  
<!--RESPONSIVE BAR
  <div class="col-sm-12 admin-tabs" style="margin-top:30px;">
    <ul class="nav nav-tabs admin-nav text-uppercase" role="tablist">
      <li class="nav-item">
        <a class="nav-link admin-nav-item active" data-toggle="tab" href="#admin-users" role="tab" aria-controls="admin-users" aria-selected="false">Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link admin-nav-item" data-toggle="tab" href="#admin-notes" role="tab" aria-controls="admin-notes" aria-selected="true">Notes</a>
      </li>
      
    </ul>
  </div>
--END RESPONSIVE BAR-->
  <div class="col-sm-12" style="margin-top:30px;">
    <div class="tab-content">
      <!--USERS-->
      <div class="tab-pane fade active show" id="admin-users" role="tabpanel" aria-labelledby="admin-users-tab">
      </div>
  <!--END USERS-->
  <!--ALL NOTES -->
      <div class="tab-pane fade" id="admin-notes" role="tabpanel" aria-labelledby="admin-notes-tab">
     </div>
  <!--END ALL NOTES -->
       
</div>
    </div>
  </div>
</div>

@endsection