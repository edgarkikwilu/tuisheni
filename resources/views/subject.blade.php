@extends('layouts.index')
@section('content')

<div class="container" style="text-align:center; margin-top:40px;">
        <div class="row"  >
                <div class="col-lg-12">
                        <h3 class="display-5" style="color: #001f9c ; " >PHYSICS</h3>
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
        <h3 class="display-6" style="color: #001f9c ; " >PHYSICS TOP 3 WEEK 1</h3>
    </div>
    <div class="col-lg-4" style=" text-align: center; margin-top:50px;">
      <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="110" height="110">
      <h4>#1 John Paul</h4>
      <h5><small class="text-muted">St. Marys High School</small></h5>
      
      <p>AVERAGE: 95%</p>
      <p><a class="btn btn-secondary" href="{{ route('assessment',1) }}" role="button">View Student &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4" style=" text-align: center; margin-top:50px;">
      <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="110" height="110">
      <h4>#2 Aneth Steven</h4>
      <h5><small class="text-muted">St. Marys High School</small></h5>
      <p>AVERAGE: 90%</p>
      <p><a class="btn btn-secondary" href="#" role="button">View Student &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4" style=" text-align: center; margin-top:50px;">
      <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="110" height="110">
      <h4>#3 JumaHassan</h4>
      <h5><small class="text-muted">Mbezi High School</small></h5>
      <p>AVERAGE: 85%</p>
      <p><a class="btn btn-secondary" href="#" role="button">View Student &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    
  </div><!-- /.row -->

  <div class="container" style="text-align:center; margin-top: 40px;">
        <h4 class="display-6" style="color: #001f9c ; " >MOST VIEWED PHYSICS MATERIALS</h4>  
    </div> 
    <div class="container">
            <div class="row">
        <div class="col-lg-4"  style="margin-top: 20px;">
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
                </div>
        </div>
                                
        </div>
                                      
</div>
                   
                   
</div>
<div class="col-lg-4"  style="margin-top: 20px;">
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
                                                                
                                                        </div>
                                                </div>
                                                      
                                                </div>
                                                      
                                                    </div>
                                   
              
                                            </div>
                                            <div class="col-lg-4"  style="margin-top: 20px;">
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
                                                                        
                                                                </div>
                                                        </div>
                                                              
                                                        </div>
                                                              
                                                            </div>
                                           
                      
                                                    </div>
       
            </div>
                <ul class="nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="#">See More Physics Exams Reccomendations</a>
                        </li>
                        
                        </ul>
            
            </div>
            
    </div>

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
                                                            
                                                    </div>
                                            </div>
                                                
                                            
                                                  
                                                </div>
                               
                
                                        </div>
        </div>
            <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#">See More Physics Exams Reccomendations</a>
                    </li>
                    
                    </ul>
        
        </div>
        
</div>

<div class="container" style="text-align:center; margin-top: 40px;">
        <h4 class="display-6" style="color: #001f9c ; " >RECOMMENDED PHYSICS TEACHERS</h4>  
    </div>

<div class="container">
    <div class="row">
            <div class="col-lg-3" style=" text-align: center; margin-top:50px;">
                <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="110" height="110">
                <h4>Mr. Bujilima</h4>
                <h5><small class="text-muted">Eagles Secondary School</small></h5>
                <p><small class="text-muted">I am Mr. Bujilima, Mathematics teacher and this is my short bio. See you in class</small></p>
                <p><a class="btn btn-secondary" href="#" role="button">Follow </a></p>
              </div><!-- /.col-lg-4 -->
        <div class="col-lg-3" style=" text-align: center; margin-top:50px;">
                    <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="110" height="110">
                    <h4>Mr. Bujilima</h4>
                    <h5><small class="text-muted">Eagles Secondary School</small></h5>
                    <p><small class="text-muted">I am Mr. Bujilima, Mathematics teacher and this is my short bio. See you in class</small></p>
                    <p><a class="btn btn-secondary" href="#" role="button">Follow </a></p>
       </div><!-- /.col-lg-4 -->
            <div class="col-lg-3" style=" text-align: center; margin-top:50px;">
                    <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="110" height="110">
                    <h4>Mr. Bujilima</h4>
                    <h5><small class="text-muted">Eagles Secondary School</small></h5>
                    <p><small class="text-muted">I am Mr. Bujilima, Mathematics teacher and this is my short bio. See you in class</small></p>
                    <p><a class="btn btn-secondary" href="#" role="button">Follow </a></p>
          </div><!-- /.col-lg-4 -->
                <div class="col-lg-3" style=" text-align: center; margin-top:50px;">
                            <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="110" height="110">
                            <h4>Mr. Bujilima</h4>
                            <h5><small class="text-muted">Eagles Secondary School</small></h5>
                            <p><small class="text-muted">I am Mr. Bujilima, Mathematics teacher and this is my short bio. See you in class</small></p>
                        <p><a class="btn btn-secondary" href="#" role="button">Follow </a></p>  </div><!-- /.col-lg-4 -->
    </div>
    <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="#">See More Physics Teachers</a>
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