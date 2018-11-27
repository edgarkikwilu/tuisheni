@extends('layouts.index')
@section('content')
<div class="container" style=" margin-top: 40px; text-align:left;">
    <h3 class="display-5" style="color: #001f9c ; " >CREATE NEW EXAM</h3>  

  
  <form>
    <div class="form-group">
      <label for="exampleFormControlSelect1">Select Physics Form 1 Examination Type</label>
      <select class="form-control" id="exampleFormControlSelect1">
        <option>Weekly</option>
        <option>Monthly</option>
        <option>Terminal</option>
        <option>Annual</option>
      </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1">Examination Title</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter your topic tittle">
      </div>
    <div class="form-group">
      <label for="exampleFormControlTextarea1">Examination Description</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
    </div>
    <div class="custom-file">
        <input type="file" class="custom-file-input" id="customFile">
        <label class="custom-file-label" for="customFile">Choose file</label>
    </div>
  </form>
</div>
  @endsection