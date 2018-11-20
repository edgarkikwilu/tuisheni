@extends('layouts.index')
@section('content')

<div class="container" style="text-align:left; margin-top: 40px;">
    <h3 class="display-5" style="color: #000 ; " >RECOMMENDED {{ $subject }} MATERIALS</h3>   
    <div class="row">
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
    </div>
</div>

@endsection 