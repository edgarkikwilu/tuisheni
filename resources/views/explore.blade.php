@extends('layouts.index')
@section('content')
<div class="container" style="margin-top: 10px; border-top: 1px dotted  #566573 ;">
<ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                        <h4><a class="nav-link admin-header-block">FILTER MATERIALS</a></h4>
                </li>
                </ul>
                <nav class="navbar">
                        <form class="form-inline col-sm-12">
                        <div class="col-sm-3">
                                <select class="custom-select">
                                <option value="1">Physics</option>
                                <option value="2">Biology</option>
                                <option value="3">Chemistry</option>
                                <option value="1">Mathematics</option>
                                <option value="2">ICT</option>
                                <option value="3">Technical Education</option>
                                <option value="1">Kiswahili</option>
                                <option value="2">English</option>
                                <option value="3">French</option>
                                <option value="3">Arabic</option>
                                <option value="1">Geography</option>
                                <option value="2">History</option>
                                <option value="3">Civics</option>
                                <option value="1">Economics</option>
                                <option value="2">Agriculture</option>
                                <option value="3">Book-Keeping</option>
                                <option value="1">Commerce</option>
                                <option value="2">Bible Knowledge</option>
                                <option value="3">Islamic Knowledge</option>
                                <option value="1">Fine Arts</option>
                                <option value="2">Theater Arts</option>
                                <option value="3">Physical Education</option>
                                <option value="3">Music</option>
                                
                                </select>
                        </div>
                        <div class="col-sm-3">
                                <select class="custom-select">
                                        <option value="1">Form 1</option>
                                        <option value="2">Form 2</option>
                                        <option value="3">Form 3</option>
                                        <option value="1">Form 4</option>
                                        <option value="2">Form 5</option>
                                        <option value="3">Form 6</option>
                                </select>
                        </div>
                        <div class="col-sm-3"><input class="form-control mr-sm-2" type="search" placeholder="Search By Username" aria-label="username" style="width: 100%;"></div>
                        <div class="col-sm-3"><input class="form-control mr-sm-2" type="search" placeholder="Search By School" aria-label="school" style="width: 100%;"></div>
                        <div class="container">
                                <button class="btn btn-primary" style="margin-top: 10px;" href="#">Filter Materials</button>
                        </div>
                        </form>
                        
                </nav>

        <div class="container" style="text-align:left; margin-top: 40px;">
            <h3 class="display-5" style="color: #000 ; " >RECOMMENDED POSTS</h3>  
        </div> 
            <div class="row">
                @foreach ($notesOg as $note)
                    <div class="col-lg-3"  style="margin-top: 10px;">
                        <div class="card">
                            <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{ $note->topic->name }} Sub-Title</h5>
                                <small class="text-muted">{{ $note->created_at->diffForHumans() }}</small>
                            <p>
                                <small class="text-muted">#physics #introduction-to-physics</small>    
                            
                            </p> 
                            </div>
                                
                        </div>
                    </div>
                @endforeach
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#">See More Notes Reccomendations</a>
                    </li>
                    
                    </ul>
            </div>
            <div class="container" style="text-align:left; margin-top: 40px;">
                <h3 class="display-5" style="color: #000 ; " >ALL POSTS</h3>  
            </div> 
                <div class="row">
                @foreach ($notes as $note)
                    <div class="col-lg-3"  style="margin-top: 10px;">
                        <div class="card">
                            <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{ $note->topic->name }} {{ $note->title }}</h5>
                                <small class="text-muted">>{{ $note->created_at->diffForHumans() }}</small>
                            <p>
                                <small class="text-muted">#physics #introduction-to-physics</small>    
                            
                            </p> 
                            </div>
                                
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
@endsection