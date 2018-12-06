@extends('layouts.index')
@section('content')
<div class="row">
    @include('sidebar_subject')
    <div class="col-md-9">
   
<div class="container" style="margin-top: 10px; ">
    <div class="row">
        <div class="col-lg-12"  style="margin-top: 20px;">
            <div class="card">
                <div class="container" style="text-align:center">
                        <h3 class="card-title" style="color:blue; margin-top:10px; margin-left:5px;" >{{ $exam->title }}</h3>
                        <span ><small class="text-muted">#{{ $exam->subject->name }}</small></span>
                </div>
            
                <div class="card-body">
                        {!! $exam->description !!}
                </div>
                <div class="container" >
                    <div class="row">
                        <div class="col-lg-6" >
                            <div class="card-body">
                                    <h5 class="text-muted"> <span style="background-color:lightgray" class="badge-pill">{{ $exam->attachements->count() }}</span> Attachments</h5>
                                    <div class="row">
                                        @foreach ($exam->attachements as $attchment)
                                        <div class="col-md-3 text-center">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <img class="card-image" style="margin-left:5px;" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="90" height="90">
                                                </div>
                                                <a href="">
                                                    <div class="col-md-12">{{ $attachment->name }}</div>
                                                </a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="container" style="border-top: 1px dotted #ccc; margin-top:20px;">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 style="margin-top:20px; margin-left:10px; color:blue;">SUBMITTED EXAMS</h4>
                        </div>
                        
                    </div>
                </div>
                <div class="container">
                    @foreach ($answers as $answer)
                    <div class="card">
                            <div class="container">
                                
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="container" style="text-align:center;">
                                        <a href="#"> <img class="rounded-circle" style=" margin-top:5px; " src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="80" height="80"></a>
                                        <a href="#" ><label>{{ $answer->user->username }}</label></a>
                                        <small class="text-muted"><label>{{ $answer->user->school }}</label></small>
                                        <small class="text-muted"><label>{{ $answer->created_at->diffForHumans() }}</label></small>
                                        
                                    </div>
                                </div>
                                
                                <div class="col-md-7">
                                    <div class="container" style="margin-top:20px;">
                                        <p>{{ $answer->feedback }}</p>
                                    </div> 
                                    <small><h5>{{ $answer->answerSheets->count() }}    Attachments</h5></small>
                                    <div class="row">
                                        {{ $count = 0 }}
                                        @foreach ($answer->answerSheets as $sheet)
                                        <div class="col-md-2">
                                            <img class="card-image" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="50" height="50">
                                            <a href="{{ route('student.show', $sheet->filename) }}"><div class="col-md-12">Attachment {{ $count }}</div></a>
                                            {{ $count++ }}
                                        </div>
                                        @endforeach
                                    </div>
                                    
                                </div>
                                <div class="col-md-3" style="border-left:1px dotted #ccc;">
                                    <div class="container" style=" text-align:center;">
                                        <form action="{{ route('teacher.give.marks') }}" method="POST">
                                            @csrf
                                            <input name="score" class="form-control" type="text" placeholder="Enter Marks" aria-label="marks" style="margin-top:20px; width: 100%;"> 
                                            <input type="number" name="user" value="{{ $answer->user_id }}" style="display:none"> 
                                            <input type="number" name="exam" value="{{ $answer->exam_id }}" style="display:none">  
                                            <textarea name="remarks" id="" cols="15" rows="3" placeholder="Enter remarks" style="margin-top:10px;"></textarea>
                                            <button class="btn btn-sm btn-block btn-success" type="submit" style="margin-top:10px;">Give Marks</button>
                                        </form>
                                    </div>
                                        
                                    </div>            
                            </div>        
                        </div>
                    @endforeach    
                </div>           
                </div>
                </div>
                    
                </div>
        </div>
    </div>
</div>
</div>
</div>

 <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
      
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header justify-content-center">
              <h4 class="modal-title">Message </h4>
            </div>
            <div class="modal-body">
              <div class="row justify-content-center">
                  <div class="col-md-10 col-offset-2">
                      <form action="{{ route('message') }}" method="post">
                          @csrf
                          <label for="title">Title</label>
                          <input name="title" type="text" class="form-control">
                          <label for="description">Description</label>
                          <input name="description" type="text" class="form-control">
                          <div class="row" style="margin-top:10px">
                              <div class="col-md-6">
                                  <button class="btn btn-danger btn-block" data-dismiss="modal" type="submit">Cancel</button>
                              </div>
                              <div class="col-md-6">
                                  <button class="btn btn-success btn-block" type="submit">Send</button>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
            </div>
          </div>
      
        </div>
      </div>


@endsection