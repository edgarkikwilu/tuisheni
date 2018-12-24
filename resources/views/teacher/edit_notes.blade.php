@extends('layouts.teacher')
@section('content')
<div class="content">
        <form action="{{ route('teacher.update.notes') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <input type="hidden" name="id" value="{{ $notes->id }}">
              <div class="col-md-4">
                  <div class="form-group">
                      <label for="exampleFormControlSelect1">Select Form</label>
                      <select name="form" class="form-control" id="exampleFormControlSelect1">
                        <option value="{{ $notes->form }}">{{ $notes->form }}</option>
                          <option value="1">Form 1</option>
                          <option value="2">Form 2</option>
                          <option value="3">Form 3</option>
                          <option value="4">Form 4</option>
                          <option value="5">Form 5</option>
                          <option value="6">Form 6</option>
                      </select>
                    </div>
              </div>
              <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Select Subject</label>
                    <select name="subject" class="form-control" id="exampleFormControlSelect1">
                            <option value="{{ $notes->topic->subject->id }}">{{ $notes->topic->subject->id }}</option>
                      @foreach ($subjects as $subject)
                      <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                      @endforeach
                    </select>
                  </div>
              </div>
              <div class="col-md-4">
                <div class="col-md-2"><span id="loader"></span></div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Select Topic</label>
                    <select name="topic" class="form-control" id="exampleFormControlSelect1">
                      <option value="{{ $notes->topic->id }}">{{ $notes->topic->name }}</option>
                    </select>
                  </div>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleFormControlSelect1">Select SubTopic</label>
              <select class="form-control" name="subtopic" id="exampleFormControlSelect1">
                    <option value="{{ $notes->subtopic->id }}">{{ $notes->subtopic->name }}</option>
              </select>
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Topic Title</label>
              <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter your topic tittle" value="{{ $notes->title }}">
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Topic Description</label>
              <textarea name="article" class="form-control" id="exampleFormControlTextarea1" rows="10" >{!! $notes->article !!}</textarea>
            </div>
            <div class="form-group">
                <div class="card">
                    <div class="card-body">
                        <ol>
                            @foreach ($notes->attachements as $attachment)
                                <li>
                                    <a href="{{ route('student.show', $attachment->filename) }}">{{ $attachment->filename }}</a>
                                    <a href="{{ route('notes.delete',$attachment->id,$notes->id) }}" class="deleteAttachment">
                                        <i class="tim-icons icon-trash-simple"></i>
                                    </a>
                                </li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
            <div class="custom-file">
              <input name="attachments[]" multiple type="file" class="custom-file-input" id="customFile">
              <label class="custom-file-label" for="customFile">Choose file(s)</label>
            </div>
            <button type="submit" class="btn btn-success btn-block">Update</button>
          </form>
</div>
@endsection