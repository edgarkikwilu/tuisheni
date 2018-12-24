@extends('layouts.teacher')
@section('content')
<div class="content">
        <div class="row">
                <div class="col-md-9 col-md-offset-1">
                        <div class="card">
                                <div class="card-body">
                                        <form action="{{ route('teacher.filter.notes') }}" method="POST">
                                                @csrf
                                        <div class="row">
                                                <div class="col-sm-3">
                                                        <select name="subject" class="form-control selector">
                                                          <option value="">--Subject--</option>
                                                          @foreach ($subjects as $subject)
                                                          <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                                          @endforeach
                                                        </select>
                                                </div>
                                                <div class="col-sm-3">
                                                        <select name="form" class="form-control selector">
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
                                                <div class="col-sm-3">
                                                        <button type="submit" class="btn btn-xs btn-primary" style="margin-top: 10px;">Filter Notes</button>
                                                </div>
                                        </div>
                                  </form>
                                  <a href="{{ route('teacher.createnotes') }}" class="btn btn-block">Create New Notes</a>
                                </div>
                        </div>
                </div>
        </div>
        {{-- end of filter section --}}

        <div class="row">
                @foreach ($notes as $note)
                <div class="col-md-6">
                                <div class="card justify-content-center text-center">
                                        <div class="card-title">{{ $note->title }}</div>
                                        <div class="card-subtitle">
                                                #{{ $note->topic->subject->name }} #{{ $note->topic->name }} #form {{ $note->form }}
                                        </div>
                                        <div class="card-body">
                                                Content of the notes it shows brief content of the 
                                                whole notes.
                                                <div class="row">
                                                        <div class="col-md-12">
                                                                2 days ago
                                                                <span>2
                                                                <i class="tim-icons icon-attach-87"></i>
                                                                </span>
                                                                
                                                        <ul class="nav justify-content-end">
                                                                <li class="nav-item">
                                                                <a class="a_actions" href="{{ route('teacher.show.notes',$note->id) }}">
                                                                <i class="tim-icons icon-paper"></i>
                                                                </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                <a class="a_actions" href="{{ route('teacher.edit.notes',$note->id) }}">
                                                                <i class="tim-icons icon-pencil"></i>
                                                                </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                <a class="a_actions" href="{{ route('teacher.delete.notes',$note->id) }}">
                                                                <i class="tim-icons icon-trash-simple"></i>
                                                                </a>
                                                                </li>
                                                        </ul>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                @endforeach
        </div>

</div>{{-- end of content --}}
  @endsection