@extends('layouts.app')
@section('content')
<div class="container" style=" margin-top: 40px; text-align:left;">
    <h3 class="display-5" style="color: #001f9c ; " >CREATE NEW EXAM</h3>  

  
  <form action="{{ route('teacher.store.examination') }}" method="POST" enctype="multipart/form-data">
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
                <label for="exampleFormControlSelect1">Select Exam Type</label>
                <select name="type" class="form-control" id="exampleFormControlSelect1">
                  <option value="">--Topic--</option>
                  @foreach ($types as $type)
                      <option value="{{ $type->id }}">{{ $type->name }}</option>
                  @endforeach
                </select>
              </div>
          </div>
        </div>    
    <div class="row">
      <div class="col-md-6">
          <div class="form-group">
            <label for="exampleFormControlInput1">Examination Title</label>
            <input type="text"  name="title" class="form-control" placeholder="Enter your topic tittle">
          </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label for="exampleFormControlInput1">Examination Prize</label>
          <input type="text"  name="prize" class="form-control" placeholder="Enter prize">
        </div>
      </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
              <label for="exampleFormControlInput1">Start Time (yyyy-mm-dd HH:mm (24hrs format))</label>
              <input type="datetime" name="start" placeholder="yyyy-mm-dd HH:mm (24hrs format)" class="form-control">
            </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="exampleFormControlInput1">End Time (yyyy-mm-dd HH:mm (24hrs format))</label>
            <input type="datetime" name="end" class="form-control" placeholder="yyyy-mm-dd HH:mm (24hrs format)">
          </div>
        </div>
      </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Examination Description</label>
      <textarea class="form-control" name="description" rows="10"></textarea>
    </div>
    <div class="custom-file">
        <input name="attachments[]" multiple type="file" class="custom-file-input" id="customFile">
        <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
    <button type="submit" class="btn btn-block btn-success">Upload</button>
  </form>
</div>
  @endsection