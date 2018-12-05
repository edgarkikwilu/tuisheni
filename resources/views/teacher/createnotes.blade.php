@extends('layouts.app')
@section('content')
<div class="container" style=" margin-top: 40px; text-align:left;">
    <h3 class="display-5" style="color: #001f9c ; " >CREATE NEW NOTES</h3>  

  
  <form action="{{ route('teacher.store.notes') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-md-4">
          <div class="form-group">
              <label for="exampleFormControlSelect1">Select Form</label>
              <select name="form" class="form-control" id="exampleFormControlSelect1">
                <option value="">--Form--</option>
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
              <option value="">--Subject--</option>
              @foreach ($subjects as $subject)
              <option value="{{ $subject->id }}">{{ $subject->name }}</option>
              @endforeach
            </select>
          </div>
      </div>
      <div class="col-md-4">
        <div class="col-md-2"><span id="loader"><i class="fa fa-spinner fa-3x fa-spin"></i></span></div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Select Topic</label>
            <select name="topic" class="form-control" id="exampleFormControlSelect1">
              <option value="">--Topic--</option>
            </select>
          </div>
      </div>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Select SubTopic</label>
      <select class="form-control" name="subtopic" id="exampleFormControlSelect1">
        <option value="">--SubTopic--</option>
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