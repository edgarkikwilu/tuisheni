@extends('layouts.index')
@section('content')


<div class="container" style="margin-top: 50px;text-align:left; margin-left:20px;">
        <div class="row">
                <div class="col-lg-6" style="text-align:right;" >
                        <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="250" height="250">
                </div>
                <div class="col-lg-5">
                        <h3 class="display-5" style="margin-top: 10px;">{{$user->firstname}} {{$user->lastname}}</h3>
                        <h5><small class="text-muted">{{$user->school}}</small></h5>
                        <div class="container">
                                <a href="{{route('follow',$user->id)}}" class="btn btn-info btn-circle text-uppercase" >Follow</a>
                        </div>       
                </div>       
        </div>
</div>
            
<nav class="nav nav-pills nav-justified" style="margin-top: 20px;">
        <a class="nav-item nav-link" href="#">{{$user->notes->count()}} Posts</a>
        <a class="nav-item nav-link" href="#">{{$following}} Followers</a>
        <a class="nav-item nav-link" href="#">{{$followers}} Following</a>
</nav>

</div>

<div class="container" style="margin-top: 10px; border-top: 1px dotted  #566573 ;">

<div class="row">
@foreach ($user->notes as $notes)
<div class="col-lg-4"  style="margin-top: 20px;">
        <div class="card">
                <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap">
        <div class="card-body">
                <div class="container" style="text-align:center; margin-top:-10px;">
                        <div class="row">
                        <div class="col-lg-12">
                        <small class="text-muted" style="color:#001f9c;">{{$user->username}}</small>
                        <small class="text-muted">{{$notes->title}}</small>
                        </div>
                        <div class="col-lg-12">
                                <small class="text-muted">{{$user->created_at}}</small>
                        </div>
                        </div>     
                </div>
        <div class="container">
        <a href="{{ route('single', $user->id) }}">
                <div class="row">
                        <div class="col-lg-12">
                        <h5 class="card-title" style="color:#001f9c">{{$notes->title}}</h5>
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
        </div>
@endforeach
</div>
</div>

    
@endsection