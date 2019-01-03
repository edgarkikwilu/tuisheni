@extends('layouts.guest')
@section('content')
<div class="row">
        <div class="col-md-9">
   
<div class="content">
    <div class="row">
        <div class="col-lg-12"  style="margin-top: 20px;">
            <div class="card">
                <div class="container" style="padding:5px; border-bottom:1px dotted #ccc;">
                    <div class="row">
                        <div class="col-lg-2" >
                                <a href="#"> <img class="rounded-circle" style="margin-left:35%; margin-top:5px; " src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="80" height="80"></a>    
                        </div>
                        <div class="col-lg-7">
                                <a href="#"><h4>{{ $quiz->user->username }}</h4></a> 
                                <h5><small class="text-muted">{{ $quiz->user->school }}</small></h5>
                                <span ><small style="color:green;">Posted {{ $quiz->created_at->diffForHumans() }}</small></span>
                        </div>
                        <div class="col-lg-3" style="float:right; margin-top:20px;">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('follow',$quiz->user->id) }}" class="btn btn-sm btn-primary">Follow</a>
                                <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#myModal">Message</button>
                            </div>
                            <small><a class="nav-link" href="#">{{ $quiz->attempts }} Attempts</a></small>
                        </div>
                    </div>
                </div>
                <div class="container" style="text-align:center">
                        <h3 class="card-title" style="color:blue; margin-top:10px; margin-left:5px;" >{{ $quiz->title }}</h3>
                        <span><small class="text-muted">#{{ $quiz->subject->name }} #{{ $quiz->topic->name }}</small></span>
                </div>
            <div class="text-center" style="margin-top:10px;">
                 <h4>{{ $quiz->questions->count() }} Questions Only</h4>
            </div>

            <form action="{{ route('quiz.check.answers') }}" id="checkAnsForm" method="post">
                @csrf
                <input type="hidden" name="quiz_id" value="{{ $quiz->id }}">
                <div class="card-body">
                    @php
                        $count = 0
                    @endphp
                    @foreach ($quiz->questions as $question)
                    
                        <div class="container quiz-qn">
                            <p class="question">Qn {{ $count+1 }}. {{ $question->question }}</p>
                            <ul class="quiz-choices">
                                @foreach ($question->choices as $choice)
                                <li class="quiz-choice">
                                    <input type="hidden" name="answer[{{ $count }}][qn]" value="{{ $question->id }}">
                                    <input type="hidden" name="answer[{{ $count }}][cans]" value="{{ $question->answer }}">

                                    <input type="checkbox" class="chckbx{{ $count+1 }}" value="{{ $choice->index }}" name="answer[{{ $count }}][ans]">
                                    {{ $choice->index }} : {{ $choice->name }}
                                    
                                </li>
                                @endforeach
                            </ul>
                            @if ($isAnswerResponse)
                                    @if ($yourAnswers[$count] == $correctAnswers[$count])
                                        <span style="background-color:green;">Your Answer Was: {{ $yourAnswers[$count]}} => CORRECT</span>
                                    @else
                                        <span style="background-color:red;">Your Answer Was: {{ $yourAnswers[$count]}} => WRONG</span>
                                    @endif
                            @endif
                        </div>
                        @php
                            $count++
                        @endphp
                    @endforeach
                </div>
                <input type="hidden" name="count" value="{{ $count }}">
                <button type="submit" id="btnSubmit" class="btn btn-success" style="margin-top:10px;">SUBMIT ANSWERS</button>
            </form>
               
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
              <h4 class="modal-title">Message {{ $quiz->user->username }}</h4>
            </div>
            <div class="modal-body">
                <span id="msg_feedback"></span>
              <div class="row justify-content-center">
                  <div class="col-md-10 col-offset-2">
                      <form action="{{ route('message') }}" id="message" method="post">
                          {{-- @csrf --}}
                          <input type="hidden" name="recipient_id" value="{{ $quiz->user->id }}">
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