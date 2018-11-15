<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
  <link rel="javascript" href="{{ asset('js/bootstrap.js') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  
	<title>School Bata</title>

</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <a href="{{ route('index') }}"><h3 class="display-4" style="color: #FFF ; " >SCHOOL BATA</h3></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-nav ml-auto">
                @guest
                        <a href="#" style="color:#FFF;"> Sign Up</a>
                        <a href="#" style=" color:#FFF;">Login</a>
                @endguest
                @auth
                        <a href="#" style=" color:#FFF;">Points</a>
                        <a href="#" style="color:#FFF;"> Username</a>
                @endauth
        </div>    
      </nav>

<div class="container" style="text-align:center; margin-top: 40px;">
    <h3 class="display-5" style="color: #001f9c ; " >PHYSICS FORM ONE</h3>  
</div>
<div class="container" style="text-align:center; margin-top: 30px;">
        <nav class="nav nav-pills nav-justified">
            
           <a class="nav-item nav-link" href="#">Form One</a>
            <a class="nav-item nav-link" href="#">Form Two</a>
            <a class="nav-item nav-link" href="#">Form Three</a>
            <a class="nav-item nav-link" href="#">Form Four</a>
            <a class="nav-item nav-link" href="#">Form Five</a>
            <a class="nav-item nav-link" href="#">Form Six</a>
          </nav>
    </div>
        

    <div class="container" style="text-align:center; margin-top: 30px;" >
    <div class="row" style="text-align:center">
        <div class="col-lg-12" style="text-align:center">
                <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action bg-secondary" style="color:#FFF;">
                          Introduction To Physics
                        </a>
                        <a href="#" class="list-group-item list-group-item-action">Archimedes Principle</a>
                        <a href="#" class="list-group-item list-group-item-action">Energy</a>
                        <a href="#" class="list-group-item list-group-item-action">Motion in a Straight Line</a>
                        <a href="#" class="list-group-item list-group-item-action">Force</a>
                      </div>            
        </div>
    </div>
</div>


<div class="container" style="text-align:left; margin-top: 40px;">
        <h3 class="display-5" style="color: #001f9c ; " >INTRODUCTION TO PHYSICS (Recomended)</h3>  
</div> 
<div class="container">
    
        <div class="row">
                @foreach ($votedNotes as $note)
                <div class="col-lg-3"  style="margin-top: 20px;">
                        <div class="card">
                                <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap">
                                        <div class="container" style="text-align:center;">
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
                @endforeach
</div>

<div class="container" style="text-align:left; margin-top: 40px;">
    <div class="row">
        <div class="col-lg-9"><h3 class="display-5" style="color: #001f9c ; " >INTRODUCTION TO PHYSICS (Most Voted)</h3></div>
        <div class="col-lg-3"> <button type="button" class="btn btn-secondary" style="float:right;">Add New Post</button></div>
    </div>
        
         
</div> 

<div class="container">
        <div class="row">
                <div class="col-lg-3"  style="margin-top: 20px;">
                        <div class="card">
                                <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap">
                                        <div class="container" style="text-align:center;">
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
                        <div class="col-lg-3"  style="margin-top: 20px;">
                            <div class="card">
                                        <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap">
                                                <div class="container" style="text-align:center;">
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
                        <div class="col-lg-3"  style="margin-top: 20px;">
                            <div class="card">
                                            <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap">
                                                    <div class="container" style="text-align:center;">
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
                       <div class="col-lg-3"  style="margin-top: 20px;">
                            <div class="card">
                                        <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap">
                                                <div class="container" style="text-align:center;">
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
   
    

                <div class="col-lg-3"  style="margin-top: 20px;">
                        <div class="card">
                                <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap">
                                        <div class="container" style="text-align:center;">
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
                        <div class="col-lg-3"  style="margin-top: 20px;">
                            <div class="card">
                                        <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap">
                                                <div class="container" style="text-align:center;">
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
                        <div class="col-lg-3"  style="margin-top: 20px;">
                            <div class="card">
                                            <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap">
                                                    <div class="container" style="text-align:center;">
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
                       <div class="col-lg-3"  style="margin-top: 20px;">
                            <div class="card">
                                        <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap">
                                                <div class="container" style="text-align:center;">
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
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../js/bootstrap.js"></script>
</body>
</html>