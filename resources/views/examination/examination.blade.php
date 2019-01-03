@extends('layouts.guest')
@section('content')
<div class="content">
<div class="row">
<div class="col-md-9">
<div class="divbar" style="margin-top: 40px;">
        <form action="{{ route('filter.examination.examination') }}" method="POST" class="form-inline">
        @csrf
        <div class="row">
                <div class="col-sm-2">
                <select name="subject" class="custom-select form-control">
                <option value="">--Subject--</option>
                @foreach ($subjects as $subject)
                        <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                @endforeach
                </select>
                </div>
                <div class="col-sm-2">
                        <select name="form" class="custom-select form-control">
                                <option value="">--Form--</option>
                                <option value="1">Form 1</option>
                                <option value="2">Form 2</option>
                                <option value="3">Form 3</option>
                                <option value="4">Form 4</option>
                                <option value="5">Form 5</option>
                                <option value="6">Form 6</option>
                        </select>
                </div>
                <div class="col-sm-2">
                        <input name="username" class="form-control" type="search" placeholder="Search By Username" aria-label="username" style="width: 100%;"></div>
                <div class="col-sm-2">
                        <input name="school" class="form-control" type="search" placeholder="Search By School" aria-label="school" style="width: 100%;"></div>
                <div class="col-sm-2">
                        <input name="title" class="form-control" type="search" placeholder="Search By Exam Title" aria-label="examtitle" style="width: 100%;"></div>
                <div class="col-sm-2">
                <button class="btn btn-success"type="submit">
                        <i class="fa fa-filter"></i>
                        Filter Exams</button>
                </div>
        </div>
        </form>

</div>
</div>

@if ($show)

        @if ($recommended->count() != 0)
                <!--RECOMENDATIONS-->
<div class="col-md-9" style="text-align:left; margin-top: 40px;">
        <h3 class="display-5" style="color: #000 ; " >RECOMMENDED EXAMS</h3>      
            @foreach ($recommended as $exam)
            <div class="row" style="border:1px solid #ccc; margin-top:20px;">
                <div class="col-lg-9">
                        <a href="{{ route('examination.single_exam', $exam->id) }}" ><h5 style="margin-top:10px; font-weight:bold;" >{{ $exam->title }}</h5></a>
                        <div class="row">
                                <div class="col-lg-6">
                                <small><label style="width:24%;">Start Time: </label> <b>{{ $exam->start }}</b></small>
                                </div>
                                <div class="col-lg-6">
                                <small><label style="width:22%;">Subject: </label> <b>{{ $exam->subject->name }}</b></small> 
                                </div>
                        </div>
                        <div class="row">
                                <div class="col-lg-6">
                                <small><label style="width:22%; ">Class: </label><b>Form {{ $exam->form }}</b></small>
                                </div>
                        </div>
                        <div class="row">
                                <div class="col-lg-6">
                                <small><label style="width:22%">Time: </label> <b>{{ $exam->duration }} minutes</b></small>
                                </div>
                                <div class="col-lg-6">
                                <small><label style="width:20%;">1st Prize: </label> <b>{{ $exam->prize }}</b></small>
                                </div>        
                        </div>
                        <div class="row">
                                <small><a class="nav-link" href="#"><span class="badge-pill badge-danger">{{ $exam->attachements->count() }}</span> Attachment(s)</a></small>
                        </div>
                        </div>
                        <div class="col-lg-3" style="text-align:center; border-left:1px dotted #ccc;">
                                <p style="margin-top:10px;"><small class="text-muted">Posted:{{ $exam->created_at->diffForHumans() }}</small></p>
                                
                                        <small>{{ $exam->user->username }}, {{ $exam->user->school }}</small>
                                <a href="{{ route('examination.single_exam', $exam->id) }}" class="btn btn-sm btn-success" style="margin-top:10px;"> View Examination</a>
                                <div>
                                <small class="badge-pill badge-info">{{ $exam->views }}  Views</small>
                                </div>
                                
                                
                        </div>
</div>
                        
            @endforeach
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#">See More Reccomendations</a>
                    </li>
                    
                </ul>

            </div>
            <!--END RECOMENDATIONS-->
        @endif
        @if ($other->count() != 0)
        <!--ALL EXAMS-->
        <div class="col-md-9" style="text-align:left; margin-top: 40px;">
                <h3 class="display-5" style="color: #000 ; " >ALL EXAMS</h3>  
                @foreach ($other as $exam)
                <div class="row" style="border:1px solid #ccc; margin-top:20px;">
                        {{-- <div class="col-lg-2"  style="margin-top: 10px;">
                                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap" style="width:100%">
                        </div> --}}
                        <div class="col-lg-9">
                                <a href="{{ route('examination.single_exam', $exam->id) }}" ><h5 style="margin-top:10px; font-weight:bold;" >{{ $exam->title }}</h5></a>
                                <div class="row">
                                        <div class="col-lg-6">
                                        <small><label style="width:24%;">Start Time: </label> <b>{{ $exam->start }}</b></small>
                                        </div>
                                        <div class="col-lg-6">
                                        <small><label style="width:22%;">Subject: </label> <b>{{ $exam->subject->name }}</b></small> 
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-lg-6">
                                        <small><label style="width:22%; ">Class: </label><b>Form {{ $exam->form }}</b></small>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-lg-6">
                                        <small><label style="width:22%">Time: </label> <b>{{ $exam->duration }} minutes</b></small>
                                        </div>
                                        <div class="col-lg-6">
                                        <small><label style="width:20%;">1st Prize: </label> <b>{{ $exam->prize }}</b></small>
                                        </div>        
                                </div>
                                <div class="row">
                                <small><a class="nav-link" href="#"><span class="badge-pill badge-danger">{{ $exam->attachements->count() }}</span> Attachment(s)</a></small>
                        </div>
                        </div>
                        <div class="col-lg-3" style="text-align:center; border-left:1px dotted #ccc;">
                                <p style="margin-top:10px;"><small class="text-muted">Posted:{{ $exam->created_at->diffForHumans() }}</small></p>
                                
                                        <small>{{ $exam->user->username }}, {{ $exam->user->school }}</small>
                                <a href="{{ route('examination.single_exam', $exam->id) }}" class="btn btn-sm btn-success" style="margin-top:10px;"> View Examination</a>
                                <div>
                                <small class="badge-pill badge-info">{{ $exam->views }}  Views</small>
                                </div>
                                
                                
                        </div>
        </div>
                @endforeach    
                </div>
                <!--END ALL EXAMS-->
        @endif
@elseif($exams->count() != 0)
<div class="container" style="text-align:left; margin-top: 40px;">
        <div class="col-md-12 text-center">
                Filtered Exams Results
        </div>

@foreach ($exams as $exam)
<div class="row" style="border:1px solid #ccc; margin-top:20px;">
        {{-- <div class="col-lg-2"  style="margin-top: 10px;">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap" style="width:100%">
        </div> --}}
        <div class="col-lg-9">
                <a href="{{ route('examination.single_exam', $exam->id) }}" ><h5 style="margin-top:10px; font-weight:bold;" >{{ $exam->title }}</h5></a>
                <div class="row">
                        <div class="col-lg-6">
                        <small><label style="width:24%;">Start Time: </label> <b>{{ $exam->start }}</b></small>
                        </div>
                        <div class="col-lg-6">
                        <small><label style="width:22%;">Subject: </label> <b>{{ $exam->subject->name }}</b></small> 
                        </div>
                </div>
                <div class="row">
                        <div class="col-lg-6">
                        <small><label style="width:22%; ">Class: </label><b>Form {{ $exam->form }}</b></small>
                        </div>
                </div>
                <div class="row">
                        <div class="col-lg-6">
                        <small><label style="width:22%">Time: </label> <b>{{ $exam->duration }} minutes</b></small>
                        </div>
                        <div class="col-lg-6">
                        <small><label style="width:20%;">1st Prize: </label> <b>{{ $exam->prize }}</b></small>
                        </div>        
                </div>
                <div class="row">
                        <small><a class="nav-link" href="#"><span class="badge-pill badge-danger">{{ $exam->attachements->count() }}</span> Attachment(s)</a></small>
                </div>
                </div>
                <div class="col-lg-3" style="text-align:center; border-left:1px dotted #ccc;">
                        <p style="margin-top:10px;"><small class="text-muted">Posted:{{ $exam->created_at->diffForHumans() }}</small></p>
                        
                                <small>{{ $exam->user->username }}, {{ $exam->user->school }}</small>
                        <a href="{{ route('examination.single_exam', $exam->id) }}" class="btn btn-sm btn-success" style="margin-top:10px;"> View Examination</a>
                        <div>
                        <small class="badge-pill badge-info">{{ $exam->views }}  Views</small>
                        </div>
                </div>
</div>
@endforeach    
</div>
@endif

</div>
</div>

@endsection