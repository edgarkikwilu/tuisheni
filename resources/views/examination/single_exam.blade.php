@extends('layouts.index')
@section('content')
<div class="row">
    @include('sidebar_subject')
<div class="col-md-9">
   
<div class="container" style="margin-top: 10px; ">
    <div class="row">
        <div class="col-lg-12"  style="margin-top: 20px;">
            <div class="card">
                <div class="container" style="padding:5px; border-bottom:1px dotted #ccc;">
                    <div class="row">
                        <div class="col-lg-2">
                            <a href="#"> <img class="rounded-circle" style="margin-left:35%; margin-top:5px; " src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="80" height="80"></a>    
                        </div>
                        <div class="col-lg-7">
                            <a href="#"><h4><small>{{ $exam->user->username }}</small></h4></a>
                            <h5><small class="text-muted">{{ $exam->user->school }}</small></h5>
                            <span ><small style="color:green;">Posted {{ $exam->created_at->diffForHumans() }}</small></span>
                        </div>
                        <div class="col-lg-3" style="float:right; margin-top:20px;">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('follow',$exam->user->id) }}" class="btn btn-sm btn-primary">Follow</a>
                                <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#myModal">Message</button>
                            </div>
                            <small><a class="nav-link" href="#">10 Votes</a></small>
                        </div>
                    </div>
                </div>
                <div class="container" style="text-align:center">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="card-title" style="color:blue; margin-top:10px; margin-left:5px;" >{{ $exam->title }}</h3>
                            <span ><small class="text-muted">#physics #introduction to physics</small></span>
                        </div>
                        
                    </div>
                        
                </div>
            
                <div class="card-body">
                    {!! $exam->description !!}
                </div>
                <div class="container" >
                    <div class="row">
                        <div class="col-md-9" >
                            <div class="card-body">
                                    <h5 class="text-muted"> <span>{{ $exam->attachements->count() }}</span> Attachments</h5>
                                    <div class="row">
                                        @foreach ($exam->attachements as $attachment)
                                            <div class="col-md-3 text-center">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <img class="card-image" style="margin-left:5px;" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="90" height="90">
                                                    </div>
                                                    <a href="{{ route('student.show.exam', $attachment->filename) }}"><div class="col-md-12">{{ $attachment->filename }}</div></a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    
                            </div>
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="btn btn-sm btn-secondary" style="margin-top:10px; margin-left:10px;" data-toggle="modal" data-target="#submitModal">Submit Exam</button>
                            <small><a class="nav-link" href="#">Report This Page</a></small>
                        </div>
                    </div>
                </div>
                </div>
                <div class="container" style="text-align:center; margin-top:20px;">
                        <h4>ADD COMMENTS</h4>
                </div>
            <div class="card" style="margin-top:30px;">
                    <div class="container" >
                            
                            <div class="container" style="margin-top:20px;">
                                <div class="row">
                                
                                <div class="container" style="text-align:center;">
                                    <div class="col-lg-12">
                                        <div class="container">
                                            <textarea style="margin-top:10px; width:100%;" placeholder="Add Your Comments Here!!" name="" id=""  rows="5"></textarea><br>
                                            <button type="submit" class="btn btn-sm btn-primary" style="margin-top:10px;">Add Comment</button>
                                        </div>
                                    </div>
                                </div>
                                
                                </div>
                            </div>
                            <div class="container">
                                    <h4 style="margin-top:20px; margin-left:10px; color:blue;">{{ $exam->comments->count() }} COMMENTS</h4>
                                </div>
                        </div>   
                        <div class="container">
                                @foreach ($exam->comments as $comment)
                                <div class="row">
                                        <div class="col-md-2">
                                            <div class="container" style="text-align:center;">
                                                <a href="#"> <img class="rounded-circle" style=" margin-top:5px; " src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="80" height="80"></a>
                                                <a href="#"><h4><small>{{ $comment->user->username }}</small></h4></a> 
                                                <p><small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small></p>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-8">
                                            <div class="container" style="margin-top:20px;">
                                              <p> {!! $comment->comment !!}</p>
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

 <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">    
        <!-- Modal content-->
        <div class="modal-content">
        <div class="modal-header justify-content-center">
            <h4 class="modal-title">Message {{ $exam->user->username }}</h4>
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


    <div id="submitModal" class="modal fade" role="dialog">
        <div class="modal-dialog">    
            <!-- Modal content-->
            <div class="modal-content">
            <div class="modal-header justify-content-center">
                <h4 class="modal-title">Submit Exam to {{ $exam->user->username }}</h4>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-offset-2">
                        <form action="#" method="post">
                            @csrf
                            <label for="description">Any Comments</label>
                            <input name="description" type="text" class="form-control">
                            <div class="custom-file" style="margin-top:10px;">
                                <input name="attachments[]" multiple type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                            </div>
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