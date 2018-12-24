@extends('layouts.teacher')
@section('content')
<div class="content">
    <h3 class="display-5" style="color: #001f9c ; " >CREATE NEW NOTES</h3>  
  
  <form action="{{ route('teacher.store.notes') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-md-4">
          <div class="form-group">
              <label for="exampleFormControlSelect1">Select Form</label>
              <select name="form" class="form-control" id="exampleFormControlSelect1">
                <option class="selector_options" value="">--Form--</option>
                  <option class="selector_options" value="1">Form 1</option>
                  <option class="selector_options" value="2">Form 2</option>
                  <option class="selector_options" value="3">Form 3</option>
                  <option class="selector_options" value="4">Form 4</option>
                  <option class="selector_options" value="5">Form 5</option>
                  <option class="selector_options" value="6">Form 6</option>
              </select>
            </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Select Subject</label>
            <select name="subject" class="form-control" id="exampleFormControlSelect1">
              <option class="selector_options" value="">--Subject--</option>
              @foreach ($subjects as $subject)
              <option class="selector_options" value="{{ $subject->id }}">{{ $subject->name }}</option>
              @endforeach
            </select>
          </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Select Topic</label>
            <select name="topic" class="form-control" id="exampleFormControlSelect1">
              <option class="selector_options" value="">--Topic--</option>
            </select>
          </div>
      </div>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Select SubTopic</label>
      <select class="form-control" name="subtopic" id="exampleFormControlSelect1">
        <option class="selector_options" value="">--SubTopic--</option>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlInput1">Topic Title</label>
      <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter your topic tittle">
    </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Topic Description</label>
      <textarea name="article" class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
    </div>
    <div class="custom-file">
      <input name="attachments[]" multiple type="file" class="custom-file-input" id="customFile">
      <label class="custom-file-label" for="customFile">Choose file(s)</label>
    </div>
    <button type="submit" class="btn btn-success btn-block">Post</button>
  </form>
</div>
  @endsection