@extends('layouts.index')
@section('content')

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
                                        <a href="{{route('single')}}">
                                        <div class="row">
                                                <div class="col-lg-12">
                                                        <h5 class="card-title" style="color:#001f9c">Application of Physics in dailylife</h5>
                                                </div> 
                                        </div>
                                        </a>
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
                                <a href="{{route('single')}}">
                                <div class="row">
                                                <div class="col-lg-12">
                                                        <h5 class="card-title" style="color:#001f9c">Application of Physics in dailylife</h5>
                                                </div> 
                                </div>
                                </a>
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
                                                                <a href="{{route('single')}}">
                                                                <div class="col-lg-12">
                                                                     <h5 class="card-title" style="color:#001f9c">Application of Physics in dailylife</h5>
                                                                </div> 
                                                                </a>
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
                                                <a href="{{route('single')}}">
                                                 <div class="row">
                                                        <div class="col-lg-12">
                                                             <h5 class="card-title" style="color:#001f9c">Application of Physics in dailylife</h5>
                                                        </div> 
                                                </div>
                                                </a>
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
                                        <a href="{{route('single')}}">
                                             <div class="row">
                                                    <div class="col-lg-12">
                                                         <h5 class="card-title" style="color:#001f9c">Application of Physics in dailylife</h5>
                                                    </div> 
                                            </div>
                                        </a>
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
                                 <a href="{{route('single')}}">
                                     <div class="row">
                                            <div class="col-lg-12">
                                                 <h5 class="card-title" style="color:#001f9c">Application of Physics in dailylife</h5>
                                            </div> 
                                    </div>
                                </a>
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
                                        <a href="{{route('single')}}">
                                             <div class="row">
                                                    <div class="col-lg-12">
                                                         <h5 class="card-title" style="color:#001f9c">Application of Physics in dailylife</h5>
                                                    </div> 
                                                </a>
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
                                                <a href="{{route('single')}}">
                                                 <div class="row">
                                                        <div class="col-lg-12">
                                                             <h5 class="card-title" style="color:#001f9c">Application of Physics in dailylife</h5>
                                                        </div> 
                                                </div>
                                        </a>
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
                                        <a href="{{route('single')}}">
                                             <div class="row">
                                                    <div class="col-lg-12">
                                                         <h5 class="card-title" style="color:#001f9c">Application of Physics in dailylife</h5>
                                                    </div> 
                                            </div>
                                        </a>
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
@endsection