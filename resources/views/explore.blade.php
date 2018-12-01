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
        <h3 class="display-5" style="color: #000 ; " >RECOMMENDED MATERIALS</h3>  
</div> 
<div class="container" >
@foreach ($notesOg as $note)
        <div class="row" style="border:1px solid #ccc; margin-top:20px;">
                <div class="col-lg-2"  style="margin-top: 10px;">
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap" style="width:100%">
                </div>
                <div class="col-lg-7">
                        <a href="{{route('single')}}" ><h5 style="margin-top:10px;" >{{ $note->topic->name }}</h5></a>
                        <p>Short Description goes here, just excerpts with some limited number of words and read more link, Three lines will be enough for the good User interface, without forgeting a read more button link  ...read more&raquo;</p>
                        <p><small class="text-muted">#physics #introduction to physics</small></p>
                </div>
                <div class="col-lg-3" style="text-align:center; border-left:1px dotted #ccc;">
                        <p style="margin-top:10px;"><small class="text-muted">Posted: {{ $note->created_at->diffForHumans() }}</small></p>
                        
                            <small>Chodo, Eagles Secondary SChool</small>
                        <button type="button" class="btn btn-sm btn-secondary" style="margin-top:10px;"> View & Download</button>
                        <small><a class="nav-link" href="#">30 Views</a></small>
                </div>
        </div>
@endforeach
        
                        
       
        <ul class="nav justify-content-center">
                <li class="nav-item">
                <a class="nav-link" href="#">See More Notes Reccomendations</a>
                </li>
                
                </ul>
        </div>
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
                                <a href="{{route('single')}}" ><h5 style="margin-top:10px;" >{{ $note->topic->name }}</h5></a>
                                <p>Short Description goes here, just excerpts with some limited number of words and read more link, Three lines will be enough for the good User interface, without forgeting a read more button link  ...read more&raquo;</p>
                                <p><small class="text-muted">#physics #introduction to physics</small></p>
                        </div>
                        <div class="col-lg-3" style="text-align:center; border-left:1px dotted #ccc;">
                                <p style="margin-top:10px;"><small class="text-muted">Posted: {{ $note->created_at->diffForHumans() }}</small></p>
                                
                                    <small>Chodo, Eagles Secondary SChool</small>
                                <button type="button" class="btn btn-sm btn-secondary" style="margin-top:10px;">View & Download</button>
                                <small><a class="nav-link" href="#">30 Views</a></small>
                        </div>
                </div>
        @endforeach
        </div>
</div>
                        
</div>
</div>
@endsection