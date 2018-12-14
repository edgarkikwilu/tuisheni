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
                        @foreach ($topics as $topic)
                        <a href="#" class="list-group-item list-group-item-action bg-secondary" style="color:#FFF;">{{ $topic->name }}</a>
                        @endforeach
                </div>            
        </div>
    </div>
</div>







<div class="container" style="text-align:left; margin-top: 40px;">
        <h3 class="display-5" style="color: #001f9c;">{{ $topics->first()->name }} (Recomended)</h3>  
</div> 
<div class="container">
        <div class="row">
                @foreach ($recommendedNotes as $note)
                <div class="col-lg-3"  style="margin-top: 20px;">
                        <div class="card">
                                <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap">
                                        <div class="container" style="text-align:center;">
                                                <div class="row">
                                                <div class="col-lg-12">
                                                <small class="text-muted" style="color:#001f9c;">{{ $note->user->username }},</small>
                                                <small class="text-muted">{{ $note->user->school }}</small>
                                                </div>
                                                <div class="col-lg-12">
                                                        <small class="text-muted">{{ $note->created_at}}</small>
                                                </div>
                                                </div>     
                                        </div>
                                <div class="container">
                                        <a href="{{route('single',$note->id)}}">
                                        <div class="row">
                                                <div class="col-lg-12">
                                                        <h5 class="card-title" style="color:#001f9c">{{ $note->title }}</h5>
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
</div>

<div class="container" style="text-align:left; margin-top: 40px;">
    <div class="row">
        <div class="col-lg-9"><h3 class="display-5" style="color: #001f9c ; " >{{ $topics->first()->name }} (Most Voted)</h3></div>
        <div class="col-lg-3"> <button type="button" class="btn btn-secondary" style="float:right;">Add New Post</button></div>
    </div>
        
         
</div> 

<div class="container">
        <div class="row">
                @foreach ($mostVotedNotes as $note)
                <div class="col-lg-3"  style="margin-top: 20px;">
                                <div class="card">
                                        <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap">
                                                <div class="container" style="text-align:center;">
                                                    <div class="row">
                                                    <div class="col-lg-12">
                                                    <small class="text-muted" style="color:#001f9c;">{{ $note->user->username }},</small>
                                                    <small class="text-muted">{{ $note->user->school }}</small>
                                                    </div>
                                                    <div class="col-lg-12">
                                                            <small class="text-muted">{{ $note->created_at }}</small>
                                                    </div>
                                                    </div>     
                                                </div>
                                    <div class="container">
                                                <div class="row">
                                                        <a href="{{route('single',$note->id)}}">
                                                        <div class="col-lg-12">
                                                                <h5 class="card-title" style="color:#001f9c">{{ $note->title }}</h5>
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
                @endforeach
        </div>
</div>
@endsection