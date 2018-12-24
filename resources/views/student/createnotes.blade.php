@extends('layouts.student')
@section('content')
<div class="content">
  <div class="row">
    <div class="col-md-12" >
        <form action="{{ route('student.store.notes') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="row text-center" style="margin-top:10%;">
              <div class="col-md-10 create-new-notes-title">
                <span>Create New Notes</span>
              </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Select Form</label>
                    <select name="form" class="form-control form-control-alternative" id="exampleFormControlSelect1">
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
                  <select name="subject" class="form-control form-control-alternative" id="exampleFormControlSelect1">
                    <option value="">--Subject--</option>
                    @foreach ($subjects as $subject)
                    <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                    @endforeach
                  </select>
                </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                  <label for="exampleFormControlSelect1">Select Topic</label>
                  <select name="topic" class="form-control form-control-alternative" id="exampleFormControlSelect1">
                    <option value="">--Topic--</option>
                  </select>
                </div>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Select SubTopic</label>
            <select class="form-control form-control-alternative" name="subtopic" id="exampleFormControlSelect1">
              <option value="">--SubTopic--</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1">Topic Title</label>
            <input name="title" type="text" class="form-control form-control-alternative" id="exampleFormControlInput1" placeholder="Enter your topic tittle">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Topic Description</label>
            <textarea name="article" class="form-control form-control-alternative" id="exampleFormControlTextarea1" rows="10"></textarea>
          </div>
          <div class="custom-file uploader">
            <input name="attachments[]" multiple type="file" class="custom-file-input form-control-alternative" id="customFile">
            <label class="custom-file-label" for="customFile">Choose file(s)</label>
          </div>
          <div>
            <div class="buttonAdd">
              <button class="btnAdd btn btn-danger" type="button"><i class="ni ni-fat-add"></i>Add</button>
            </div>
          </div>
          <button type="submit" class="btn btn-success btn-block">Post</button>
        </form>
    </div>
  </div>
</div>
  @endsection