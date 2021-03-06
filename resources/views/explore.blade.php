@extends('layouts.guest')
@section('content')
<div class="row">
         <div class="col-md-9">
                <div class="container" style="margin-top: 10px; border-top: 1px dotted  #566573 ;">
                        <ul class="nav nav-pills nav-fill">
                                <li class="nav-item">
                                    <h4><a class="nav-link admin-header-block">EXPLORE MATERIALS</a></h4>
                                </li>
                        </ul>
                        <nav class="navbar">
                                <form action="{{ route('explore.filter.notes') }}" method="POST" class="form-inline col-sm-12">
                                        @csrf
                                <div class="col-sm-3">
                                        <select name="subject" class="custom-select">
                                                <option value="">--Subject</option>
                                                @foreach ($subjects as $subject)
                                                        <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                                @endforeach
                                        </select>
                                </div>
                                <div class="col-sm-3">
                                        <select name="form" class="custom-select">
                                                <option value="">--Form--</option>
                                                <option value="1">Form 1</option>
                                                <option value="2">Form 2</option>
                                                <option value="3">Form 3</option>
                                                <option value="4">Form 4</option>
                                                <option value="5">Form 5</option>
                                                <option value="6">Form 6</option>
                                        </select>
                                </div>
                                <div class="col-sm-3"><input name="username" class="form-control mr-sm-2" type="search" placeholder="Search By Username" aria-label="username" style="width: 100%;"></div>
                                <div class="col-sm-3"><input name="school" class="form-control mr-sm-2" type="search" placeholder="Search By School" aria-label="school" style="width: 100%;"></div>
                                <div class="container">
                                        <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Filter Materials</button>
                                </div>
                                </form>
                                
                        </nav>
           
                        
        @if ($show)
        <div class="container partition" style="text-align:left; margin-top: 40px;">
                <h3 class="display-5" style="color: #000 ; " >RECOMMENDED MATERIALS</h3>  
        </div> 
        <div class="row" >
        @foreach ($notesOg as $note)
        <div class="col-md-6 notes-card"  style="margin-top: 20px;">
                <div class="card notes-card justify-content-center text-center">
                        <div class="card-title notes-title">{{ substr($note->title,0,25) }}{{ strlen($note->title) > 25?"...":"" }}
                                <br>
                                <small class="text-mute">#{{ $note->topic->subject->name }} #{{ $note->topic->name }} #form {{ $note->form }}</small>
                        </div>
                        
                        <div class="card-body notes-article">
                                {{ substr(strip_tags($note->article),0,120) }}{{ strlen(strip_tags($note->article))>120?"...":"" }}
                        </div>
                        <div class="card-footer">
                                <div class="row">
                                        <div class="col-md-6 diff">
                                                {{ $note->created_at->diffForHumans() }}
                                        </div>
                                        <div class="col-md-3">
                                                <span>{{ $note->attachements->count() }}
                                                <i class="fas fa-paperclip"></i>
                                                </span>
                                        </div>
                                        <div class="col-md-2">
                                        <a class="a_actions" href="{{ route('single',$note->id) }}"><i class="fas fa-book-open"></i>
                                        </a>
                                        </div>
                                </div>
                        </div>
                </div>        
        </div>
        @endforeach
        </div>
                                
        {{-- end of recommended notes --}}
        </div>
        <div class="container partition" style="text-align:left; margin-top: 40px;">
        <h3 class="display-5" style="color: #000 ; " >ALL MATERIALS</h3>  
        </div> 
        <div class="container">
        @foreach ($notes as $note)
        <div class="row" style="border:1px solid #ccc; margin-top:20px;">
                        <div class="col-lg-2"  style="margin-top: 10px;">
                                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap" style="width:100%">
                        </div>
                        <div class="col-lg-7">
                                <a href="{{route('single',$note->id)}}" ><h5 style="margin-top:10px;" >{{ $note->title }}</h5></a>
                                <p>{{ substr(strip_tags($note->article), 0, 300) }}{{ strlen($note->article) > 300?"...read more":'' }}</p>
                                <small><label style="width:10%;">Subject: </label> <b>Physics</b></small> 
                                <small><label style="width:10%; margin-left:20%;">Class: </label><b>Form {{ $note->form }}</b></small><br>
                                <small><label style="width:10%;">Topic: </label> <b>{{ $note->topic->name }} </b></small>
                               
                        </div>
                        <div class="col-lg-3" style="text-align:center; border-left:1px dotted #ccc;">
                                <p style="margin-top:10px;"><small class="text-muted">Posted: {{ $note->created_at->diffForHumans() }}</small></p>
                                <small>{{ $note->user->username }}, {{ $note->user->school }}</small><br>
                                <a href="{{route('single',$note->id)}}" style="margin-top:10px;"> <button class="btn btn-sm btn-secondary" type="button">View & Download</button> </a>
                                <small><a class="nav-link" href="#">{{ $note->views }} Views</a></small>
                        </div>
                </div>
        @endforeach
</div>
{{-- end of other notes --}}
@endif

@if (!$show)
<div class="container partition" style="text-align:left; margin-top: 40px;">
        <h3 class="display-5 text-center" style="color: #000;" >FILTERED MATERIALS</h3>  
</div> 
        <div class="container">
                @foreach ($notes as $note)
                <div class="row" style="border:1px solid #ccc; margin-top:20px;">
                                <div class="col-lg-2"  style="margin-top: 10px;">
                                                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap" style="width:100%">
                                        </div>
                                        <div class="col-lg-7">
                                                <a href="{{route('single',$note->id)}}" ><h5 style="margin-top:10px;" >{{ $note->title }}</h5></a>
                                                <p>{{ substr(strip_tags($note->article), 0, 300) }}{{ strlen($note->article) > 300?"...read more":'' }}</p>
                                                <small><label style="width:10%;">Subject: </label> <b>Physics</b></small> 
                                                <small><label style="width:10%; margin-left:20%;">Class: </label><b>Form 3</b></small><br>
                                                <small><label style="width:10%;">Topic: </label> <b>{{ $note->topic->name }}</b></small>
                                        </div>
                                        
                                <div class="col-lg-3" style="text-align:center; border-left:1px dotted #ccc;">
                                        <p style="margin-top:10px;"><small class="text-muted">Posted: {{ $note->created_at->diffForHumans() }}</small></p>
                                        <small>{{ $note->user->username }}, {{ $note->user->school }}</small>
                                        <a href="{{route('single',$note->id)}}"><button type="button" class="btn btn-sm btn-secondary" style="margin-top:10px;"> View & Download</button></a>
                                        
                                        <small><a class="nav-link" href="#">{{ $note->views }} Votes</a></small>
                                </div>
                        </div>
                @endforeach
        </div>
        {{-- end of filter notes --}}
@endif                        
</div>
</div>
@endsection