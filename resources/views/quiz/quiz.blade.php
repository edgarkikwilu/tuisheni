@extends('layouts.index')
@section('content')
<div class="row">
     @include('sidebar_subject')
     <div class="col-md-9">

<div class="container" style="margin-top: 10px; border-top: 1px dotted  #566573 ;">
<nav class="navbar" style="margin-top: 40px;">
        <form action="{{ route('filter.quiz') }}" method="POST" class="form-inline col-sm-12">
                @csrf
        <div class="col-sm-3">
        <select name="subject" class="custom-select">
        <option value=""></option>
        <option value="1">Physics</option>
        <option value="2">Biology</option>
        <option value="3">Chemistry</option>
        <option value="1">Mathematics</option>
        <option value="2">ICT</option>
        <option value="3">Technical Education</option>
        <option value="1">Kiswahili</option>
        <option value="2">English</option>
        <option value="3">French</option>
        <option value="3">Arabic</option>
        <option value="1">Geography</option>
        <option value="2">History</option>
        <option value="3">Civics</option>
        <option value="1">Economics</option>
        <option value="2">Agriculture</option>
        <option value="3">Book-Keeping</option>
        <option value="1">Commerce</option>
        <option value="2">Bible Knowledge</option>
        <option value="3">Islamic Knowledge</option>
        <option value="1">Fine Arts</option>
        <option value="2">Theater Arts</option>
        <option value="3">Physical Education</option>
        <option value="3">Music</option>
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
</div>

<!--ALL QUIZZES-->
<div class="container" style="text-align:left; margin-top: 40px;">
<h3 class="display-5" style="color: #000 ; " >ALL QUIZZES</h3>  
<div class="row" style="border:1px solid #ccc; margin-top:20px;">
        <div class="col-lg-2"  style="margin-top: 10px;">
                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap" style="width:100%">
        </div>
        <div class="col-lg-7">
                <a href="{{route('quiz/singlequiz')}}" ><h5 style="margin-top:10px;" >Mtiga Physics Quiz Series 2</h5></a>
                        <div class="col-md-12">
                                <label style="width:20%">Topic:</label><small><b> Introduction to physics (Physics)</b></small></br>
                                <label style="width:20%">Class:</label><small><b> Form 1</b></small></br>
                                <col-md-6><label style="width:20%">Time:</label><small><b> 5 minutes</b></small></col-md-6>
                                <col-md-6><label style="width:20%; margin-left:15%;"></label><small><b> 10 Questions @ 3 Points</b></small></col-md-6>                          
                        </div>
        </div>
        <div class="col-lg-3" style="text-align:center; border-left:1px dotted #ccc;">
                <p style="margin-top:10px;"><small class="text-muted">Posted: 3 mins ago</small></p>
                
                    <small>Mr Mtiga, Eagles Secondary SChool</small>
                <button type="button" class="btn btn-sm btn-secondary" style="margin-top:10px;"> Attempt Quiz</button>
                <small><a class="nav-link" href="#">30 Attempts</a></small>
        </div>
</div>
<div class="row" style="border:1px solid #ccc; margin-top:20px;">
                <div class="col-lg-2"  style="margin-top: 10px;">
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap" style="width:100%">
                </div>
                <div class="col-lg-7">
                        <a href="{{route('quiz/singlequiz')}}" ><h5 style="margin-top:10px;" >Mtiga Physics Quiz Series 2</h5></a>
                        <label style="width:20%">Topic:</label><small><b> Introduction to physics (Physics)</b></small></br>
                        <label style="width:20%">Class:</label><small><b> Form 1</b></small></br>
                        <col-md-6><label style="width:20%">Time:</label><small><b> 5 minutes</b></small></col-md-6>
                        <col-md-6><label style="width:20%; margin-left:15%;"></label><small><b> 10 Questions @ 3 Points</b></small></col-md-6>                          
                </div>
                <div class="col-lg-3" style="text-align:center; border-left:1px dotted #ccc;">
                        <p style="margin-top:10px;"><small class="text-muted">Posted: 3 mins ago</small></p>
                        
                            <small>Mr Mtiga, Eagles Secondary SChool</small>
                        <button type="button" class="btn btn-sm btn-secondary" style="margin-top:10px;"> Attempt Quiz</button>
                        <small><a class="nav-link" href="#">30 Attempts</a></small>
                </div>
        </div>
        <div class="row" style="border:1px solid #ccc; margin-top:20px;">
                        <div class="col-lg-2"  style="margin-top: 10px;">
                                <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Card image cap" style="width:100%">
                        </div>
                        <div class="col-lg-7">
                                <a href="{{route('quiz/singlequiz')}}" ><h5 style="margin-top:10px;" >Mtiga Physics Quiz Series 2</h5></a>
                                        <div class="col-md-12">
                                                <label style="width:20%">Topic:</label><small><b> Introduction to physics (Physics)</b></small></br>
                                                <label style="width:20%">Class:</label><small><b> Form 1</b></small></br>
                                                <col-md-6><label style="width:20%">Time:</label><small><b> 5 minutes</b></small></col-md-6>
                                                <col-md-6><label style="width:20%; margin-left:15%;"></label><small><b> 10 Questions @ 3 Points</b></small></col-md-6>
                                                                         
                                        </div>
                        </div>
                        <div class="col-lg-3" style="text-align:center; border-left:1px dotted #ccc;">
                                <p style="margin-top:10px;"><small class="text-muted">Posted: 3 mins ago</small></p>
                                
                                    <small>Mr Mtiga, Eagles Secondary SChool</small>
                                <button type="button" class="btn btn-sm btn-secondary" style="margin-top:10px;"> Attempt Quiz</button>
                                <small><a class="nav-link" href="#">30 Attempts</a></small>
                        </div>
                </div>
</div>
     </div>
</div>

<!--END ALL QUIZZES-->

@endsection