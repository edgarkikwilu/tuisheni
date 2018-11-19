@extends('layouts.index')
@section('content')
<div class="container" style="margin-top: 10px; border-top: 1px dotted  #566573 ;">

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
                        <a class="nav-link" href="#">See More Reccomendations</a>
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