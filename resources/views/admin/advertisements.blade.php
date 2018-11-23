@extends('layouts.index')
@section('content')
<div class="container" style=" margin-top: 40px; text-align:left;">
    <h3 class="display-5" style="color: #001f9c ; " >MY DASHBOARD</h3>  
  </div>
@include('admin/dashboardnav')

<!--ADVERTISEMENTS-->

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
    
    <!--END ADVERTISEMENTS-->
@endsection 