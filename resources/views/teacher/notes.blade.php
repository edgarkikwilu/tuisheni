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
           @foreach ($notes as $note)
           <div class="col-lg-2"  style="margin-top: 10px;">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap" style="width:100%">
        </div>
        <div class="col-lg-7">
                <a href="{{route('single', $note->id)}}" ><h5 style="margin-top:10px; font-weight:bold;" >{{ $note->title }}</h5></a>
                <p>{!! $note->article !!}</p>
                <div class="row">
                        <div class="col-lg-6">
                                <small><label style="width:17%;">Subject: </label> <b>{{ $note->topic->subject->name }}</b></small> 
                        </div>
                        <div class="col-lg-6">
                                <small><label style="width:17%;">Class: </label><b>Form {{ $note->form }}</b></small>
                        </div>
                </div>
                <div class="row">
                        <div class="col-lg-12">
                                <small><label style="margin-right:10px;">Topic: </label> <b>{{ $note->topic->name }}</b></small>
                        </div>
                </div>
        </div>
        <div class="col-lg-3" style="text-align:center; border-left:1px dotted #ccc;">
                <p style="margin-top:10px;"><small class="text-muted">Posted:{{ $note->created_at->diffForHumans() }}</small></p>
                
                    <small>Chodo, Eagles Secondary SChool</small>
                    <a href="{{  route('single',$note->id)}}" class="btn btn-xs btn-secondary btn-block"><h5 style="margin-top:10px; font-weight:bold;" >{{ $note->title }}</h5></a>
                <small><a class="nav-link" href="#">30 Views</a></small>
                <small>
                        <form id="" class="ondoaPostForm" action="{{ route('teacher.delete.notes') }}" method="post">
                                @csrf
                                <input type="number" value="{{ $note->id }}" name="id" style="display:none">
                                <button id="{{ $note->id }}" type="submit" class="btn btn-sm btn-danger btn-block btnOndoaPost">Delete Notes 
                                        <span class="glyphicon glyphicon-trash"></span>
                                </button>
                        </form>        
                </small>  
        </div>
        @endforeach     
</div>

  @endsection