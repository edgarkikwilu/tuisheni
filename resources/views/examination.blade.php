@extends('layouts.index')
@section('content')
<div class="container" style="margin-top: 10px; border-top: 1px dotted  #566573 ;">
<!--RECOMENDATIONS-->
<div class="container" style="text-align:left; margin-top: 40px;">
    <h3 class="display-5" style="color: #000 ; " >RECOMMENDED EXAMS</h3>  

<div class="row">

@foreach ($recommended as $exam)
<div class="col-lg-3"  style="margin-top: 20px;">
                <div class="card">
                    <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap">
                    <div class="container" style="text-align:center;">
                        <div class="row">
                            <div class="col-lg-12">
                                <small class="text-muted" style="color:#001f9c;">{{ $exam->user->username }},</small>
                                <small class="text-muted">{{ $exam->user->school }}</small>
                            </div>
                            <div class="col-lg-12">
                            <small class="text-muted">{{ $exam->created_at->diffForHumans() }}</small>
                            </div>
                        </div>     
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <h5 class="card-title" style="color:#001f9c">{{ $exam->title }}</h5>
                            </div> 
                        </div>
                    </div>
            
                    <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                <p>Starts in: <small class="text-muted">{{ $exam->start}}</small></p>
                                <p>1st Price: <small class="text-muted">{{ $exam->prize }}</small></p>
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
            
@endforeach
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link" href="#">See More Reccomendations</a>
        </li>
        
    </ul>
</div>
</div>
<!--END RECOMENDATIONS-->
<!--ALL EXAMS-->
<div class="container" style="text-align:left; margin-top: 40px;">
<h3 class="display-5" style="color: #000 ; " >ALL EXAMS</h3>  

<div class="row">

@foreach ($other as $exam)
<div class="col-lg-3"  style="margin-top: 20px;">
        <div class="card">
                <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap">
                        <div class="container" style="text-align:center;">
                                <div class="row">
                                <div class="col-lg-12">
                                <small class="text-muted" style="color:#001f9c;">{{ $exam->user->username }},</small>
                                <small class="text-muted">{{ $exam->user->school }}</small>
                                </div>
                                <div class="col-lg-12">
                                        <small class="text-muted">{{ $exam->created_at->diffForHumans() }}</small>
                                </div>
                                </div>     
                        </div>
                <div class="container">
                <div class="row">
                        <div class="col-lg-12">
                        <h5 class="card-title" style="color:#001f9c">{{ $exam->title }}</h5>
                        </div> 
                </div>
                </div>
        <div class="container">
                <div class="row">
                        <div class="col-lg-12">
                        <p>Starts in: <small class="text-muted">{{ $exam->start }}</small></p>
                        <p>1st Price: <small class="text-muted">{{ $exam->prize }}</small></p>
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
@endforeach    

</div>
</div>
<!--END ALL EXAMS-->
</div>
@endsection