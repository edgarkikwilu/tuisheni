@extends('teacher.topdash')
@section('content')
<div class="container" style=" margin-top: 10px; text-align:left;">
    <h3 class="display-5" style="color: #001f9c ; " >MY PROFILE</h3>  
  </div>

  <div class="container" style="border-bottom: 1px dotted #ccc; padding-bottom: 10px;">
    <div class="row">
        <div class="col-lg-2"  style="margin-top: 10px;">
          <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap" style="width:150px; height:150px;">
    </div>
    <div class="col-lg-7">
      <div class="row">
        <div class="col-lg-12">
          <a href="#"><h4 >{{ $teacher->firstname }} {{ $teacher->firstname }}</h4></a>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <small><label class="text-muted" >{{ $teacher->school }}</label></small>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <span>{{ $teacher->bio }}</span>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6" style="margin-top:10px;"><a class="nav-link" href="#">{{ $followers }} Followers</a></div>
        <div class="col-lg-6" style="margin-top:10px;"><a class="nav-link" href="#">{{ $following }} Following</a></div>
      </div>
    </div>
    <div class="col-lg-3" style="border-left:1px dotted #ccc; text-align:center;">
      <div class="row">
          <div class="col-lg-12">
            <small><label style="margin-right:10px;">Exams Conducted: </label><b>{{ $teacher->exams->count() }}</b></small>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <small><label style="margin-right:10px;">Notes Published:</label><b>{{ $teacher->notes->count() }}</b></small>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <small><label style="margin-right:10px;">Quizzes Conducted:</label><b>{{ $teacher->quizzes->count() }}</b></small>
          </div>
        </div>
    </div>
    </div>
  </div>

  <div class="text-center text-danger">
    Showing {{ date('m') }}-20{{ date('y') }} month data
    {!! $monthPointChart->container() !!}
  </div>

  <div class="text-center text-danger">
    Showing 20{{ date('y') }} data
    {!! $yearPointChart->container() !!}
  </div>

  <div class="text-center text-danger">
    Showing {{ date('m') }}-20{{ date('y') }} data
    {!! $weeklyExamChart->container() !!}
  </div>

  <div class="text-center text-danger">
    Showing 20{{ date('y') }} data
    {!! $monthlyExamChart->container() !!}
  </div>

</div>
  </div>
  </div>
</div>

{!! $monthPointChart->script() !!}
{!! $yearPointChart->script() !!}
{!! $weeklyExamChart->script() !!}
{!! $monthlyExamChart->script() !!}
@endsection