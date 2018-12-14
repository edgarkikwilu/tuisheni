@extends('layouts.index')
@section('content')

<div class="row">
@include('class/class_topic')
    <div class="col-md-9">
                <div class="container" style="text-align:center; margin-top: 40px;">
                                <h3 class="display-5" style="color: #001f9c ; " >PHYSICS FORM ONE</h3>  
                        </div>
                        @include('class/classnav')
                
                        @if ($recommendedNotes->count() != 0)
                        <div class="container" style="text-align:left; margin-top: 40px;">
                                <h3 class="display-5" style="color: #001f9c;">{{ $topics->first()->name }} (Recomended)</h3>  
                </div> 
                <div class="container">
                        <div class="row">
                                @foreach ($recommendedNotes as $note)
                                <div class="row" style="border:1px solid #ccc; margin-top:20px;">
                                                <div class="col-lg-2"  style="margin-top: 10px;">
                                                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap" style="width:100%">
                                                </div>
                                                <div class="col-lg-7">
                                                                <a href="{{route('single',$note->id)}}"><h5 style="margin-top:10px;" >{{ $note->topic->name }}</h5></a>
                                                        <p>Short Description goes here, just excerpts with some limited number of words and read more link, Three lines will be enough for the good User interface, without forgeting a read more button link  ...read more&raquo;</p>
                                                        <p><small class="text-muted">#physics #introduction to physics</small></p>
                                                </div>
                                                <div class="col-lg-3" style="text-align:center;">
                                                        <p style="margin-top:10px;"><small class="text-muted">Posted: {{ $note->created_at->diffForHumans() }}</small></p>
                                                        
                                                        <small>{{ $note->user->username }}, {{ $note->user->school }}</small>
                                                        <button type="button" class="btn btn-sm btn-secondary" style="margin-top:10px;">View & Download</button>
                                                        <small><a class="nav-link" href="#">30 Views</a></small>
                                                </div>
                                        </div>
                                
                                @endforeach
                                </div>
                            @endif
                            
        @if ($mostVotedNotes->count() != 0)
        <div class="container" style="text-align:left; margin-top: 40px;">
                <div class="row">
                        <div class="col-lg-9"><h3 class="display-5" style="color: #001f9c ; " >{{ $topics->first()->name }} (Most Voted)</h3></div>
                <div class="col-lg-3"><a href="{{ route('student.createnotes') }}"> <button type="button"  class="btn btn-secondary" style="float:right;">Create New Notes</button></a></div>
                </div>     
                </div> 
                
                <div class="container">
                        <div class="row">
                                @foreach ($mostVotedNotes as $note)
                                <div class="row" style="border:1px solid #ccc; margin-top:20px;">
                                        <div class="col-lg-2"  style="margin-top: 10px;">
                                                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap" style="width:100%">
                                        </div>
                                        <div class="col-lg-7">
                                                        <a href="{{route('single',$note->id)}}"><h5 style="margin-top:10px;" >{{ $note->topic->name }}</h5></a>
                                                <p>{!! $note->article !!}</p>
                                                <p><small class="text-muted">#{{ $note->topic->subject->name }} #{{ $note->subtopic->name }}</small></p>
                                        </div>
                                        <div class="col-lg-3" style="text-align:center;">
                                                <p style="margin-top:10px;"><small class="text-muted">Posted: {{ $note->created_at->diffForHumans() }}</small></p>
                                                
                                                        <small>{{ $note->user->username }}, {{ $note->user->school }}</small>
                                                <button type="button" class="btn btn-sm btn-secondary" style="margin-top:10px;">View & Download</button>
                                                <small><a class="nav-link" href="#">{{ $note->views }} Views</a></small>
                                        </div>
                                </div>
                                @endforeach
                        </div>
                </div>
        @endif

        @if ($recommendedNotes->count() == 0 && $mostVotedNotes->count() == 0)
            <div class="row">
                    <div class="col-md-12 text-center" style="align-vertical:center">
                        Notes Not Available 
                    </div>
            </div>
        @endif
    </div>
</div>
                


@endsection