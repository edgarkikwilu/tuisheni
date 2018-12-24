@extends('layouts.teacher')
@section('content')
   
<div class="content" style="margin-top: 10px; ">
    <div class="row">
        <div class="col-lg-12"  style="margin-top: 20px;">
            <div class="card">
                <div class="container" style="text-align:center">
                        <h3 class="card-title" style="color:blue; margin-top:10px; margin-left:5px;" >{{ $exam->title }}</h3>
                        <span ><small class="text-muted">#{{ $exam->subject->name }}</small></span>
                </div>
            
                <div class="card-body text-center">
                        {!! $exam->description !!}
                </div>
                <div class="container" >
                    <div class="row">
                        <div class="col-md-7 col-md-offset-2" >
                            <div class="card-body">
                                <h5 class="text-muted"> <span style="background-color:lightgray" class="badge-pill">{{ $exam->attachements->count() }}</span> Attachments</h5>
                                <div class="row">
                                    @php
                                        $count = 1;
                                    @endphp
                                    <table class="table table-hover">
                                        <thead>
                                            <th>#</th>
                                            <th>Filename</th>
                                        </thead>
                                        <tbody>
                                            @php
                                                $count = 1;
                                            @endphp
                                            @foreach ($exam->attachements as $attachment)
                                                <tr>
                                                    <th>{{ $count }}</th>
                                                    <td>
                                                        <a href="{{ url('/show/exam/'.$attachment->filename) }}" class="">{{ $attachment->filename }}</a>
                                                    </td>
                                                </tr>
                                                @php
                                                    $count++;
                                                @endphp
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card-body">
                                    <h5 class="text-muted"> <span style="background-color:lightgray" class="badge-pill">{{ $exam->markingSchemes->count() }}</span> Marking Scheme</h5>
                                    <table class="table table-hover">
                                            <thead>
                                                <th>#</th>
                                                <th>Filename</th>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $count = 1;
                                                @endphp
                                                @foreach ($exam->markingSchemes as $markingScheme)
                                                    <tr>
                                                        <th>{{ $count }}</th>
                                                        <td>
                                                            <a href="{{ url('/show/marking/scheme/'.$markingScheme->filename) }}" class="">{{ $markingScheme->filename }}</a>
                                                        </td>
                                                    </tr>
                                                    @php
                                                        $count++;
                                                    @endphp
                                                @endforeach
                                            </tbody>
                                        </table>
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
                                <small>{{ $answer->answerSheets->count() }} Answer Sheets</small>
                                <div class="row">
                                    @php
                                        $count = 0;
                                    @endphp
                                    @foreach ($answer->answerSheets as $sheet)
                                    <div class="col-md-12">
                                        <img class="card-image" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="50" height="50">
                                        <a href="{{ url('/show/answer/sheet/'.$sheet->filename) }}">
                                            <div class="">Attachment {{ $count }}</div>
                                        </a>
                                        @php
                                            $count++;
                                        @endphp
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @php
                                $reportCounter = 0;
                            @endphp
                            <div class="col-md-3" style="border-left:1px dotted #ccc;">
                                <div id="marks{{ $answer->id }}" class="alert alert-success" role="alert"></div>
                                @if ($answer->score != null)
                                        <div class="card text-center">
                                            <div class="card-body">
                                                Marks Awarded: <h4>{{ $answer->score }} %</h4>
                                            </div>
                                        </div>
                                @else
                                    <div class="container{{ $answer->id }}" style=" text-align:center;">
                                        <form id="{{ $answer->id }}" class="marksForm" action="{{ route('teacher.give.marks') }}" method="POST">
                                            {{-- @csrf --}}
                                            <input type="hidden" name="answer_id" value="{{ $answer->id }}">
                                            <input name="score" class="form-control" type="text" placeholder="Enter Marks" aria-label="marks" style="margin-top:20px; width: 100%;" required> 
                                            <input type="hidden" name="user_id" value="{{ $answer->user_id }}"> 
                                            <input type="hidden" name="exam_id" value="{{ $answer->exam_id }}">  
                                            <input name="remarks" id="" cols="15" rows="3" placeholder="Enter remarks" style="margin-top:10px;" required>
                                            <button class="btn btn-sm btn-block btn-success" type="submit" style="margin-top:10px;">Give Marks</button>
                                        </form>
                                    </div>   
                                @endif
                                </div>   
                                @php
                                    $reportCounter++;
                                @endphp         
                        </div>        
                    </div>
                @endforeach    
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