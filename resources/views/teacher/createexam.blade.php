@extends('layouts.teacher')
@section('content')
<div class="content" style=" margin-top: 40px; text-align:left;">
    <div class="row text-center">
        <div class="col-md-12">
            <h3 class="display-5" style="color: #001f9c ; " >CREATE NEW EXAM</h3>  
        </div>
    </div>
 
  
  <form action="{{ route('teacher.store.examination') }}" method="POST" enctype="multipart/form-data">
    @csrf
      <div class="row justify-content-center">
          <div class="col-md-2">
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
          <div class="col-md-3">
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
          <div class="col-md-2">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Select Exam Type</label>
                <select name="type" class="form-control" id="exampleFormControlSelect1">
                  <option class="selector_options" value="">--Exam Type--</option>
                  @foreach ($types as $type)
                      <option class="selector_options" value="{{ $type->id }}">{{ $type->name }}</option>
                  @endforeach
                </select>
              </div>
          </div>
        </div>    
    <div class="row justify-content-center">
      <div class="col-md-5">
          <div class="form-group">
            <label for="exampleFormControlInput1">Examination Title</label>
            <input type="text"  name="title" class="form-control" placeholder="Enter your exam tittle">
          </div>
      </div>
      <div class="col-md-5">
        <div class="form-group">
          <label for="exampleFormControlInput1">Examination Prize</label>
          <input type="text"  name="prize" class="form-control" placeholder="Enter 1st student prize(not compulsory)">
        </div>
      </div>
    </div>
      @php
        $now = carbon\Carbon::now();
      @endphp
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="form-group">
              <label for="exampleFormControlInput1">Start Time (yyyy-mm-dd HH:mm (24hrs format))</label>
              <div class="row">
                <div class="col-md-1">
                  <select name="syear" id="syear">
                    <option value="{{ $now->year }}">{{ $now->year }}</option>
                    <option value="2019">2019</option>
                  </select>
                </div>
                <div class="col-md-2">
                  <select name="smonth" id="smonth">
                    <option value="{{ date("m") }}">{{ $now->format('F') }}</option>
                    <option value="1">January</option>
                    <option value="2">February</option>
                    <option value="3">March</option>
                    <option value="4">April</option>
                    <option value="5">May</option>
                    <option value="6">June</option>
                    <option value="7">July</option>
                    <option value="8">August</option>
                    <option value="9">September</option>
                    <option value="10">October</option>
                    <option value="11">November</option>
                    <option value="12">December</option>
                  </select>
                </div>
                <div class="col-md-2">
                  <select name="sday" id="sday">
                    <option value="{{ $now->day }}">{{ $now->day }}</option>
                    @for ($i = 1; $i < 32; $i++)
                      <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                  </select>
                </div>
                <span>Time</span>
                <div class="col-md-1">
                  <select name="shour" id="shour">
                    <option value="{{ $now->hour }}">{{ $now->hour+3 }} :</option>
                    @for ($i = 0; $i < 25; $i++)
                      <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                  </select>
                </div>
                <div class="col-md-1">
                  <select name="sminute" id="sminute">
                    <option value="{{ $now->minute }}">{{ $now->minute }}</option>
                    @for ($i = 0; $i < 61; $i++)
                      <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                  </select>
                </div>
              </div>
            </div>
        </div>
          
        <div class="col-md-5">
          <div class="form-group">
            <label for="exampleFormControlInput1">End Time (yyyy-mm-dd HH:mm (24hrs format))</label>
            <div class="row">
              <div class="col-md-1">
                <select name="eyear" id="eyear">
                  <option value="{{ $now->year }}">{{ $now->year }}</option>
                  <option value="2019">2019</option>
                </select>
              </div>
              <div class="col-md-2">
                <select name="emonth" id="emonth">
                  <option value="{{ date("m") }}">{{ $now->format('F') }}</option>
                  <option value="1">January</option>
                  <option value="2">February</option>
                  <option value="3">March</option>
                  <option value="4">April</option>
                  <option value="5">May</option>
                  <option value="6">June</option>
                  <option value="7">July</option>
                  <option value="8">August</option>
                  <option value="9">September</option>
                  <option value="10">October</option>
                  <option value="11">November</option>
                  <option value="12">December</option>
                </select>
              </div>
              <div class="col-md-2">
                <select name="eday" id="eday">
                  <option value="{{ $now->day }}">{{ $now->day }}</option>
                  @for ($i = 1; $i < 32; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                  @endfor
                </select>
              </div>
              <span>Time</span>
              <div class="col-md-1">
                <select name="ehour" id="ehour">
                  <option value="{{ $now->hour }}">{{ $now->hour+3 }} :</option>
                  @for ($i = 0; $i < 25; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                  @endfor
                </select>
              </div>
              <div class="col-md-1">
                <select name="eminute" id="eminute">
                  <option value="{{ $now->minute }}">{{ $now->minute }}</option>
                  @for ($i = 0; $i < 61; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                  @endfor
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>
    <div class="row justify-content-center">
      <div class="col-md-10">
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Examination Description</label>
            <textarea class="form-control" name="description" rows="10"></textarea>
          </div>
      </div>
    </div>
    <div class="row justify-content-center" style="padding-bottom:20px;">
      <div class="col-md-5">
          <div class="custom-file">
              <input name="attachments[]" multiple type="file" class="custom-file-input" id="customFile">
              <label class="custom-file-label" for="customFile">Choose Question Papers</label>
          </div>
      </div>
      <div class="col-md-5">
          <input name="marking_scheme[]" multiple type="file" class="custom-file-input" id="customFile">
          <label class="custom-file-label" for="customFile">Choose MarkingScheme(if you have)</label>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-md-6">
          <button type="submit" class="btn btn-block btn-success">Upload Examination</button>
      </div>
    </div>
  </form>
</div>
  @endsection