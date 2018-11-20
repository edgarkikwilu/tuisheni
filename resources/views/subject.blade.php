@extends('layouts.index')
@section('content')

<div class="container" style="text-align:center; margin-top:40px;">
        <div class="row"  >
                <div class="col-lg-12">
                        <h3 class="display-5" style="color: #001f9c ; " >{{$subject}}</h3>
                </div>  
            </div>
</div>
      

<div class="container">
    <nav class="nav nav-pills nav-justified">
        
       <a class="nav-item nav-link" href="{{ route('class',[$subject,1]) }}">Form One</a>
        <a class="nav-item nav-link" href="{{ route('class',[$subject,2]) }}">Form Two</a>
        <a class="nav-item nav-link" href="{{ route('class',[$subject,3]) }}">Form Three</a>
        <a class="nav-item nav-link" href="{{ route('class',[$subject,4]) }}">Form Four</a>
        <a class="nav-item nav-link" href="{{ route('class',[$subject,5]) }}">Form Five</a>
        <a class="nav-item nav-link" href="{{ route('class',[$subject,6]) }}">Form Six</a>
      </nav>
</div>

<!-- Three columns of text below the carousel -->
<div class="row" style="margin-left: 20px;">
    <div class="container" style=" text-align: center; margin-top: 50px;">
        <h3 class="display-6" style="color: #001f9c ; " >{{$subject}} TOP 3 WEEK 1</h3>
    </div>
    
    @foreach ($topStudents as $student)
    <div class="col-lg-4" style=" text-align: center; margin-top:50px;">
        <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="110" height="110">
    <h4>{{$student->user->firstname}} {{$student->user->lastname}}</h4>
        <h5><small class="text-muted">{{$student->user->school}}</small></h5>
        
        <p>AVERAGE: {{$student->score}}%</p>
        <p><a class="btn btn-secondary" href="{{ route('author',$student->user_id) }}" role="button">View Student &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
    @endforeach  
    
  </div><!-- /.row -->

  
  <div class="container" style="text-align:center; margin-top: 40px;">
    <h4 class="display-6" style="color: #001f9c ; " >RECOMMENDED PHYSICS EXAMS WEEK 1</h4>  
</div> 
<div class="container">
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
                                <a href="{{ route('single') }}">     
                                        <div class="row">
                                            <div class="col-lg-12">
                                                 <h5 class="card-title" style="color:#001f9c">Masore Physics Series 1</h5>
                                            </div> 
                                    </div>
                                </a>
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
                                        <a href="{{ route('single') }}">     
                                                <div class="row">
                                                        <div class="col-lg-12">
                                                                <h5 class="card-title" style="color:#001f9c">Masore Physics Series 1</h5>
                                                        </div> 
                                                </div>
                                        </a>
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
                                        <a href="{{ route('single') }}">     
                                                <div class="row">
                                                        <div class="col-lg-12">
                                                                <h5 class="card-title" style="color:#001f9c">Masore Physics Series 1</h5>
                                                        </div> 
                                                </div>
                                        </a>
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
                                                        <a href="{{ route('single') }}">     
                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                                 <h5 class="card-title" style="color:#001f9c">Masore Physics Series 1</h5>
                                                                            </div> 
                                                                    </div>
                                                        </a>    
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
                                                            
                                                    </div>
                                            </div>
                                                
                                            
                                                  
                                                </div>
                               
                
                                        </div>
        </div>
            <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('examination')}}">See More Physics Examinations</a>
                    </li>
                    
                    </ul>
        
        </div>
        
</div>

<div class="container" style="text-align:center; margin-top: 40px;">
        <h4 class="display-6" style="color: #001f9c ; " >RECOMMENDED PHYSICS TEACHERS</h4>  
    </div>

<div class="container">
    <div class="row">
            @foreach ($teachers as $teacher)
            <div class="col-lg-3" style=" text-align: center; margin-top:50px;">
                <a href="{{route('author',$student->user_id) }}"> <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="110" height="110">
                <h4>{{$teacher->firstname}} {{$teacher->lastname}}</h4> </a>
                <h5><small class="text-muted">{{$teacher->school}}</small></h5>
                <p><small class="text-muted">{{$teacher->bio}}</small></p>
            <p><a class="btn btn-secondary" href="{{route('follow',$teacher->id)}}" role="button">Follow </a></p>
                </div><!-- /.col-lg-4 -->
            @endforeach
    <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="{{route('teachers')}}">See More Physics Teachers</a>
            </li>
            
            </ul>
</div>

<div class="container" style="text-align:center; margin-top:40px;">
        <h3 class="display-5" style="color: #001f9c ; ">SUBSCRIBE NOW</h3>
        <p class="lead">Subscribe our packages now to get different experiences with your education career.</p>
 </div>
  
      <div class="container" style="margin-top:40px;">
        <div class="card-deck mb-4 text-center">
          <div class="card mb-4 box-shadow" >
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Light</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">Tsh 4,000 <small class="text-muted">/ mo</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>2 GB of storage</li>
                <li>Email support</li>
                <li>Help center access</li>
              </ul>
              <button type="button" class="btn btn-lg btn-block btn-outline-primary">Get Started</button>
            </div>
          </div>
          <div class="card mb-4 box-shadow">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Gold</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">Tsh 7,000 <small class="text-muted">/ mo</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>10 GB of storage</li>
                <li>Priority email support</li>
                <li>Help center access</li>
              </ul>
              <button type="button" class="btn btn-lg btn-block btn-primary">Get Started</button>
            </div>
          </div>
          <div class="card mb-4 box-shadow">
            <div class="card-header">
              <h4 class="my-0 font-weight-normal">Premium</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">Tsh 10,000 <small class="text-muted">/ mo</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>15 GB of storage</li>
                <li>Phone and email support</li>
                <li>Help center access</li>
              </ul>
              <button type="button" class="btn btn-lg btn-block btn-primary">Get Started</button>
            </div>
          </div>
        </div>
      </div>   

@endsection