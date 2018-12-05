@extends('teacher.topdash')
@section('content')
<div class="container" style=" margin-top: 40px; text-align:left;">
    <h3 class="display-5" style="color: #001f9c ; " >MY NOTES</h3>  
  </div>
 
  <!--ALL NOTES -->
<div class="container" style="margin-top:40px;">
    
    <nav class="navbar">
        <form action="{{ route('teacher.filter.notes') }}" class="form-inline col-sm-12" method="POST">
                @csrf
          <div class="col-sm-3">
            <select name="subject" class="custom-select">
              <option value="">--Subject--</option>
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
          <div class="col-sm-3"><input name="title" class="form-control mr-sm-2" type="search" placeholder="Search By Title" style="width: 100%;"></div>
          <div class="container">
              <button type="submit" class="btn btn-primary" style="margin-top: 10px;">Filter Notes</button>
        </div>
        </form>
        <a href="{{route('teacher.createnotes')}}"><button class="btn btn-secondary" style="margin-top: 10px; float:right;" >Create New Notes</button></a>
      
    </nav>
</div>
<div class="container">
        <div class="row" style="border:1px solid #ccc; margin-top:20px;">
                <div class="col-lg-2"  style="margin-top: 10px;">
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap" style="width:100%">
                </div>
                <div class="col-lg-7">
                        <a href="{{route('single', 20)}}" ><h5 style="margin-top:10px; font-weight:bold;" >Application Of Physics in daily life</h5></a>
                        <p>Short Description goes here, just excerpts with some limited number of words and read more link, Three lines will be enough for the good User interface, without forgeting a read more button link  ...read more&raquo;</p>
                        <div class="row">
                                <div class="col-lg-6">
                                        <small><label style="width:17%;">Subject: </label> <b>Physics</b></small> 
                                </div>
                                <div class="col-lg-6">
                                        <small><label style="width:17%;">Class: </label><b>Form 3</b></small>
                                </div>
                        </div>
                        <div class="row">
                                <div class="col-lg-12">
                                        <small><label style="margin-right:10px;">Topic: </label> <b>Introduction to Physics</b></small>
                                </div>
                        </div>
                        
                </div>
                <div class="col-lg-3" style="text-align:center; border-left:1px dotted #ccc;">
                        <p style="margin-top:10px;"><small class="text-muted">Posted:7 mins ago</small></p>
                        
                            <small>Chodo, Eagles Secondary SChool</small>
                        <button type="button" class="btn btn-sm btn-secondary" style="margin-top:10px;"> View & Download</button>
                        <small><a class="nav-link" href="#">30 Views</a></small>
                        <small><a class="nav-link" href="#" style="color:red;">Delete</a></small>

                        
                </div>
        </div>
        <div class="row" style="border:1px solid #ccc; margin-top:20px;">
                <div class="col-lg-2"  style="margin-top: 10px;">
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap" style="width:100%">
                </div>
                <div class="col-lg-7">
                        <a href="{{route('single', 20)}}" ><h5 style="margin-top:10px; font-weight:bold;" >Application Of Physics in daily life</h5></a>
                        <p>Short Description goes here, just excerpts with some limited number of words and read more link, Three lines will be enough for the good User interface, without forgeting a read more button link  ...read more&raquo;</p>
                        <div class="row">
                                <div class="col-lg-6">
                                        <small><label style="width:17%;">Subject: </label> <b>Physics</b></small> 
                                </div>
                                <div class="col-lg-6">
                                        <small><label style="width:17%;">Class: </label><b>Form 3</b></small>
                                </div>
                                </div>
                                <div class="row">
                                        <div class="col-lg-12">
                                                <small><label style="margin-right:10px;">Topic: </label> <b>Introduction to Physics</b></small>
                                        </div>
                                </div>
                </div>
                <div class="col-lg-3" style="text-align:center; border-left:1px dotted #ccc;">
                        <p style="margin-top:10px;"><small class="text-muted">Posted:7 mins ago</small></p>
                        
                            <small>Chodo, Eagles Secondary SChool</small>
                        <button type="button" class="btn btn-sm btn-secondary" style="margin-top:10px;"> View & Download</button>
                        <small><a class="nav-link" href="#">30 Views</a></small>
                        <small><a class="nav-link" href="#" style="color:red;">Delete</a></small>

                        
                </div>
        </div>
        <div class="row" style="border:1px solid #ccc; margin-top:20px;">
                <div class="col-lg-2"  style="margin-top: 10px;">
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap" style="width:100%">
                </div>
                <div class="col-lg-7">
                        <a href="{{route('single', 20)}}" ><h5 style="margin-top:10px; font-weight:bold;" >Application Of Physics in daily life</h5></a>
                        <p>Short Description goes here, just excerpts with some limited number of words and read more link, Three lines will be enough for the good User interface, without forgeting a read more button link  ...read more&raquo;</p>
                        <div class="row">
                                <div class="col-lg-6">
                                        <small><label style="width:17%;">Subject: </label> <b>Physics</b></small> 
                                </div>
                                <div class="col-lg-6">
                                        <small><label style="width:17%;">Class: </label><b>Form 3</b></small>
                                </div>
                                </div>
                                <div class="row">
                                        <div class="col-lg-12">
                                                <small><label style="margin-right:10px;">Topic: </label> <b>Introduction to Physics</b></small>
                                        </div>
                                </div>
                </div>
                <div class="col-lg-3" style="text-align:center; border-left:1px dotted #ccc;">
                        <p style="margin-top:10px;"><small class="text-muted">Posted:7 mins ago</small></p>
                        
                            <small>Chodo, Eagles Secondary SChool</small>
                        <button type="button" class="btn btn-sm btn-secondary" style="margin-top:10px;"> View & Download</button>
                        <small><a class="nav-link" href="#">30 Views</a></small>
                        <small><a class="nav-link" href="#" style="color:red;">Delete</a></small>

                        
                </div>
        </div>
</div>
        
  
      <div class="container" style="margin-top: 10px; border-top: 1px dotted  #566573 ;">
        <div class="row">
          @foreach ($notes as $note)
          <div class="col-lg-3"  style="margin-top: 20px;">
                <div class="card">
                        <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap">
                        <div class="card-body">
                                <div class="container" style="text-align:center; margin-top:-10px;">
                                        <div class="row">
                                        <div class="col-lg-12">
                                        <small class="text-muted" style="color:#001f9c;">{{ $note->user->username }},</small>
                                        <small class="text-muted">{{ $note->user->school }}</small>
                                        </div>
                                        <div class="col-lg-12">
                                                <small class="text-muted">{{ $note->created_at->diffForHumans() }}</small>
                                        </div>
                                        </div>     
                                </div>
                        <div class="container">
                                <div class="row">
                                        <div class="col-lg-12">
                                        <h5 class="card-title" style="color:#001f9c">{{ $note->title }}</h5>
                                        <p>Attachments: <small class="text-muted badge-pill" style="background-color:gainsboro;">{{ $note->attachements->count() }}</small></p>
                                        </div> 
                                </div>
                        </div>
                        <div class="container">
                                <div class="row">
                                        <div class="col-lg-12">
                                                <small class="text-muted">#{{ $note->subtopic->name }} #{{ $note->topic->name }}</small>
                                        </div>
                                        <div class="col-lg-12">
                                                <small style="text-align:center;"><a class="nav-item nav-link" href="#" style="color:#001f9c;">Edit Post post</a></small>
                                                <small style="text-align:center;">
                                                        <form id="" class="ondoaPostForm" action="{{ route('teacher.delete.notes') }}" method="post">
                                                                @csrf
                                                                <input type="number" value="{{ $note->id }}" name="id" style="display:none">
                                                                <button id="{{ $note->id }}" type="submit" class="btn btn-sm btn-danger btn-block btnOndoaPost">Delete Notes 
                                                                        <span class="glyphicon glyphicon-trash"></span>
                                                                </button>
                                                        </form>
        
                                                </small>
                                        </div>
                                </div>
                        </div>
                        </div>
                        </div>
                </div>
          @endforeach
      </div>
      </div>
      
      <!--END ALL NOTES -->

  @endsection