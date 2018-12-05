@extends('layouts.index')
@section('content')
<div class="row">
         @include('sidebar_subject')
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
        <div class="container" style="text-align:left; margin-top: 40px;">
                <h3 class="display-5" style="color: #000 ; " >RECOMMENDED MATERIALS</h3>  
        </div> 
        <div class="container" >
        @foreach ($notesOg as $note)
                <div class="row" style="border:1px solid #ccc; margin-top:20px;">
                        <div class="col-lg-2"  style="margin-top: 10px;">
                                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap" style="width:100%">
                        </div>
                        <div class="col-lg-7">
                                <a href="{{route('single',$note->id)}}" ><h5 style="margin-top:10px;" >{{ $note->title }}</h5></a>
                                <p>{{ substr(strip_tags($note->article), 0, 300) }}{{ strlen($note->article) > 300?"...read more":'' }}</p>
                                <p><small class="text-muted">#{{ $note->topic->name }} #{{ $note->subtopic->name }}</small></p>
                        </div>
                        <div class="col-lg-3" style="text-align:center; border-left:1px dotted #ccc;">
                                <p style="margin-top:10px;"><small class="text-muted">Posted: {{ $note->created_at->diffForHumans() }}</small></p>
                                
<div class="container" style="text-align:left; margin-top: 40px;">
        <h3 class="display-5" style="color: #000 ; " >RECOMMENDED MATERIALS</h3>  
</div> 
<div class="container" >
@foreach ($notesOg as $note)
        <div class="row" style="border:1px solid #ccc; margin-top:20px;">
                <div class="col-lg-2"  style="margin-top: 10px;">
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap" style="width:100%">
                </div>
                <div class="col-lg-7">
                        <a href="{{route('single',$note->id)}}" ><h5 style="margin-top:10px;" >{{ $note->title }}</h5></a>
                        <p>Short Description goes here, just excerpts with some limited number of words and read more link, Three lines will be enough for the good User interface, without forgeting a read more button link  ...read more&raquo;</p>
                        <small><label style="width:10%;">Subject: </label> <b>Physics</b></small> 
                        <small><label style="width:10%; margin-left:20%;">Class: </label><b>Form 3</b></small></br>
                        <small><label style="width:10%;">Topic: </label> <b>Introduction to Physics</b></small>
                                        <small>{{ $note->user->username }}, {{ $note->user->school }}</small>
                                <a href="{{route('single',$note->id)}}" class="btn btn-sm btn-secondary" ><h5 style="margin-top:10px;" >View & Download</h5></a>
                                <small><a class="nav-link" href="#">30 Views</a></small>
                        </div>
                </div>
        @endforeach
                
                                
                
                <ul class="nav justify-content-center">
                        <li class="nav-item">
                        <a class="nav-link" href="#">See More Notes Reccomendations</a>
                        </li>
                        
                            <small>{{ $note->user->username }}, {{ $note->user->school }}</small>
                        <button type="button" class="btn btn-sm btn-secondary" style="margin-top:10px;"> View & Download</button>
                        <small><a class="nav-link" href="#">30 Views</a></small>
                </div>
                        </ul>
        </div>
        {{-- end of recommended notes --}}
        </div>
        <div class="container" style="text-align:left; margin-top: 40px;">
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
                                <p>Short Description goes here, just excerpts with some limited number of words and read more link, Three lines will be enough for the good User interface, without forgeting a read more button link  ...read more&raquo;</p>
                                <small><label style="width:10%;">Subject: </label> <b>Physics</b></small> 
                                <small><label style="width:10%; margin-left:20%;">Class: </label><b>Form 3</b></small></br>
                                <small><label style="width:10%;">Topic: </label> <b>Introduction to Physics</b></small>
                        </div>
                        <div class="col-lg-3" style="text-align:center; border-left:1px dotted #ccc;">
                                <p style="margin-top:10px;"><small class="text-muted">Posted: {{ $note->created_at->diffForHumans() }}</small></p>
                                
                                    <small>{{ $note->user->username }}, {{ $note->user->school }}</small>
                                <button type="button" class="btn btn-sm btn-secondary" style="margin-top:10px;"> View & Download</button>
                        <a href="{{route('single',$note->id)}}" ><h5 style="margin-top:10px;" >{{ $note->title }}</h5></a>
                        <p>{{ substr(strip_tags($note->article), 0, 300) }}{{ strlen($note->article) > 300?"...read more":'' }}</p>
                        <p><small class="text-muted">#{{ $note->topic->name }} #{{ $note->subtopic->name }}</small></p>
                </div>
                <div class="col-lg-3" style="text-align:center; border-left:1px dotted #ccc;">
                        <p style="margin-top:10px;"><small class="text-muted">Posted: {{ $note->created_at->diffForHumans() }}</small></p>
                        <small>{{ $note->user->username }}, {{ $note->user->school }}</small>
                        <a href="{{route('single',$note->id)}}" class="btn btn-sm btn-secondary" ><h5 style="margin-top:10px;" >View & Download</h5></a>
                        <small><a class="nav-link" href="#">30 Views</a></small>
                </div>
        </div>
        @endforeach
</div>
{{-- end of other notes --}}
@endif

@if (!$show)
<div class="container" style="text-align:left; margin-top: 40px;">
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
                                <p><small class="text-muted">#{{ $note->topic->name }} #{{ $note->subtopic->name }}</small></p>
                        </div>
                        <div class="col-lg-3" style="text-align:center; border-left:1px dotted #ccc;">
                                <p style="margin-top:10px;"><small class="text-muted">Posted: {{ $note->created_at->diffForHumans() }}</small></p>
                                <small>{{ $note->user->username }}, {{ $note->user->school }}</small>
                                <a href="{{route('single',$note->id)}}" class="btn btn-sm btn-secondary" ><h5 style="margin-top:10px;" >View & Download</h5></a>
                                <small><a class="nav-link" href="#">30 Views</a></small>
                        </div>
                </div>
                @endforeach
        </div>
        {{-- end of filter notes --}}
@endif

</div>
                        
</div>
</div>
@endsection