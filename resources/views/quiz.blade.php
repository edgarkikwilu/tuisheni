@extends('layouts.index')
@section('content')
<div class="container" style="margin-top: 10px; border-top: 1px dotted  #566573 ;">
<nav class="navbar" style="margin-top: 40px;">
        <form action="{{ route('filter.quiz') }}" method="POST" class="form-inline col-sm-12">
                @csrf
        <div class="col-sm-3">
        <select name="subject" class="custom-select">
        <option value=""></option>
        @foreach ($subjects as $subject)
                <option value="{{ $subject->id }}">{{ $subject->name }}</option>
        @endforeach
        </select>
        </div>
        <div class="col-sm-3">
                <select name="form" class="custom-select">
                        <option value="1">Form 1</option>
                        <option value="2">Form 2</option>
                        <option value="3">Form 3</option>
                        <option value="4">Form 4</option>
                        <option value="5">Form 5</option>
                        <option value="6">Form 6</option>
                </select>
        </div>
        <div class="col-sm-3"><input name="username" class="form-control mr-sm-2" type="search" placeholder="Search By Username" aria-label="username" style="width: 100%;"></div>
        <div class="col-sm-3"><input name="school" class="form-control mr-sm-2" type="search" placeholder="Search By School" aria-label="school" style="width: 100%;"></div>
        <div class="col-sm-3" style="margin-top:10px;"><input name="title" class="form-control mr-sm-2" type="search" placeholder="Search By Quiz Title" aria-label="examtitle" style="width: 100%;"></div>
        <div class="container">
        <button class="btn btn-primary" style="margin-top: 10px;" type="submit">Filter Quizzes</button>
        </div>
        </form>

</nav>

<!--ALL QUIZZES-->
<div class="container" style="text-align:left; margin-top: 40px;">
<h3 class="display-5" style="color: #000 ; " >ALL QUIZZES</h3>  

<div class="row">

@foreach ($quizzes as $quiz)
<div class="col-lg-3"  style="margin-top: 20px;">
        <div class="card">
                <img class="card-img-top" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap">
                        <div class="container" style="text-align:center;">
                            <div class="row">
                            <div class="col-lg-12">
                            <small class="text-muted" style="color:#001f9c;">{{ $quiz->user->username }},</small>
                            <small class="text-muted">{{ $quiz->user->school }}</small>
                            </div>
                            <div class="col-lg-12">
                                <small class="text-muted">{{ $quiz->user->created_at->diffForHumans() }}</small>
                            </div>
                            </div>     
                        </div>
            <div class="container">
                <div class="row">
                        <div class="col-lg-12">
                        <h5 class="card-title" style="color:#001f9c">{{ $quiz->user->title }}</h5>
                        </div> 
                </div>
            </div>
            
                <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p>Total: <small class="text-muted">{{ $quiz->questions->count() }} Questions</small></p>
                        <p>Price: <small class="text-muted">{{ $quiz->prize }} Points</small></p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                <div class="col-lg-12">
                        <small class="text-muted">#physics {{ $quiz->tag }}</small>
                </div>          
                </div>
            </div>            
        </div>
    </div>
@endforeach

</div>
</div>
<!--END ALL QUIZZES-->
</div>
@endsection