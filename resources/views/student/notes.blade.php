@extends('layouts.student')
@section('content')
<div class="content">
  
        <div class="row">
                <div class="col-md-12">
                        <div class="row filterdiv">
                                <form action="{{ route('student.filter.notes') }}" method="POST" class="form-inline col-sm-12">
                                        @csrf
                                        <div class="col-sm-2">
                                        <select name="subject" class="custom-select">
                                        <option value="">--SUBJECT--</option>
                                        @foreach ($subjects as $subject)
                                                <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                        @endforeach
                                        </select>
                                        </div>
                                <div class="col-sm-2">
                                        <select name="form" class="custom-select">
                                                <option value="">--FORM--</option>
                                                <option value="1">Form 1</option>
                                                <option value="2">Form 2</option>
                                                <option value="3">Form 3</option>
                                                <option value="4">Form 4</option>
                                                <option value="5">Form 5</option>
                                                <option value="6">Form 6</option>
                                        </select>
                                </div>
                                        <div class="col-sm-2"><input name="username" class="form-control mr-sm-2" type="search" placeholder="Search By Username" aria-label="username" style="width: 100%;"></div>
                                        <div class="col-sm-3"><input name="school" class="form-control mr-sm-2" type="search" placeholder="Search By School" aria-label="school" style="width: 100%;"></div>
                                        <div class="col-sm-2">
                                        <button class="btn btnFilterNotes btn-primary" type="submit">Filter Notes</button>
                                        </div>
                                </form>
                                <div class="col-sm-2">
                                        <a class="btn btn-secondary btnNewNotes" href="{{route('student.createnotes')}}">
                                        <i class="ni ni-fat-add"></i>
                                        Create New Notes</a>
                                </div>
                        </div>
                </div>
        </div>
        <div class="row">
                <div class="col-md-12 text-center">
                        <div class="alert alert-warning">
                                <span>Read Later</span>
                                <span class="badge-circle badge-light">{{ $later->count() }}</span>
                        </div>
                </div>
                @foreach ($later as $note)
        <div class="col-sm-4"  style="margin-top: 20px;">
                <div class="card notes-card justify-content-center text-center">
                        <div class="card-title notes-title">{{ substr($note->title,0,25) }}{{ strlen($note->title) > 25?"...":"" }}</div>
                        <div class="card-subtitle text-mute">
                                <small>#{{ $note->topic->subject->name }} #{{ $note->topic->name }} #form {{ $note->form }}</small>
                        </div>
                        <div class="card-body notes-article">
                                {{ substr(strip_tags($note->article),0,120) }}{{ strlen(strip_tags($note->article))>120?"...":"" }}
                        </div>
                        <div class="card-footer">
                                <div class="row">
                                        <div class="col-sm-5 diff">
                                                {{ $note->created_at->diffForHumans() }}
                                        </div>
                                        <div class="col-sm-3">
                                                <span>{{ $note->attachements->count() }}
                                                <i class="fas fa-paperclip"></i>
                                                </span>
                                        </div>
                                        <div class="col-sm-1">
                                        <a class="a_actions" href="{{ route('single',$note->id) }}"><i class="fas fa-book-open"></i>
                                        </a>
                                        </div>
                                        <div class="col-sm-1">
                                        <a class="a_actions" href="{{ route('teacher.edit.notes',$note->id) }}"><i class="far fa-edit"></i>
                                        </a>
                                        </div>
                                        <div class="col-sm-1">
                                        <form action="{{ route('student.delete.notes') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $note->id }}">
                                                <button type="submit" class="a_actions"><i class="ni ni-fat-remove"></i>
                                                </button>
                                        </form>
                                        </div>
                                </div>
                        </div>
                </div>        
        </div>
        @endforeach
                
        </div>
        <div class="row">
                <div class="col-md-12 text-center">
                        <div class="alert alert-warning">
                                <span>My Notes</span>
                                <span class="badge-circle badge-light">{{ $notes->count() }}</span>
                        </div>
                </div>
        @foreach ($notes as $note)
        <div class="col-sm-4"  style="margin-top: 20px;">
                <div class="card notes-card justify-content-center text-center">
                        <div class="card-title notes-title">{{ substr($note->title,0,25) }}{{ strlen($note->title) > 25?"...":"" }}</div>
                        <div class="card-subtitle text-mute">
                                <small>#{{ $note->topic->subject->name }} #{{ $note->topic->name }} #form {{ $note->form }}</small>
                        </div>
                        <div class="card-body notes-article">
                                {{ substr(strip_tags($note->article),0,120) }}{{ strlen(strip_tags($note->article))>120?"...":"" }}
                        </div>
                        <div class="card-footer">
                                <div class="row">
                                        <div class="col-sm-4 diff">
                                                        <i class="far fa-clock"></i>
                                                {{ $note->created_at->diffForHumans() }}
                                        </div>
                                        <div class="col-sm-2 diff">
                                                <span>{{ $note->attachements->count() }}
                                                <i class="fas fa-paperclip"></i>
                                                </span>
                                        </div>
                                        <div class="col-sm-2">
                                        <a class="a_actions" href="{{ route('single',$note->id) }}"><i class="fas fa-book-open"></i>
                                        </a>
                                        </div>
                                        <div class="col-sm-2">
                                        <a class="a_actions" href="{{ route('teacher.edit.notes',$note->id) }}"><i class="far fa-edit"></i>
                                        </a>
                                        </div>
                                        <div class="col-sm-2">
                                                <form action="{{ route('student.delete.notes') }}" method="post">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $note->id }}">
                                                        <button type="submit" class="a_actions btn btn-light btn-sm"><i class="ni ni-fat-remove"></i>
                                                        </button>
                                                </form>
                                        </div>
                                </div>
                        </div>
                </div>        
        </div>
        @endforeach
      </div>
</div>
  @endsection