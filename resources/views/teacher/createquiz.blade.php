@extends('layouts.teacher')
@section('content')

<div class="content">
        <div class="row">
                <div class="col-md-9">
                        <div class="container" style=" margin-top: 40px; text-align:left;">
                            <h3 class="display-5" style="color: #001f9c ; " >CREATE QUIZ</h3>  
                        
                            <form action="{{ route('teacher.store.quiz') }}" method="POST">
                            @csrf
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                                <label for="class">Select Class</label>
                                                <select name="form" class="custom-select" id="class" required>
                                                    <option class="selector_options" value="">--Choose Form--</option>
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
                                        <div class="form-group" >
                                            <label for="">Select Subject</label>
                                            <select name="subject" class="custom-select" required>
                                                    <option class="selector_options" value="">--Choose Subject--</option>
                                                @foreach ($subjects as $subject)
                                                <option class="selector_options" value="{{ $subject->id }}">{{ $subject->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="class">Topics</label>
                                            <select name="topic" class="custom-select" id="class" required>
                                                <option class="selector_options" value="">--Choose Topic</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="class">Sub Topic</label>
                                            <select name="subtopic" class="custom-select" id="class" required>
                                                <option class="selector_options" value="">--Choose SubTopic</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                    <div class="form-group">
                    <label for="exampleFormControlInput1">Topic Title</label>
                    <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter your topic tittle" required>
                    </div>
        
                    <div class="container qncontainer" style="margin-top:10px;">
                        <h4 style="margin-top:30px;">SECTION A (Multiple Choice)</h4>
        
                        {{-- start of question --}}
                    <div class="container qn" style="margin-top:20px; border:1px solid #ccc; padding:1%;">
                        <div class="col-md-12" style="margin-top:10px;">
                                <h5 class="number">Question</h5>
                                <textarea type="text" name="questions[]" class="form-control" id="exampleFormControlInput1" placeholder="Enter Question No 1"></textarea>
                            </div>
                            <div class="col-md-6" style="margin-top:30px; margin-left:30px;">
                                <input name="questions[].choice[]" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Selection A">
                            </div>
                            <div class="col-md-6" style="margin-top:10px; margin-left:30px;">
                                <input name="questions[].choice[]" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Selection B">
                            </div>
                            
        
                            <div class="col-md-6" style="margin-top:10px; margin-left:30px;">
                                <input name="questions[].choice[]" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Selection C">
                            </div>
                            
                        <div class="container">
                        <div class="row">
                            <div class="col-md-6" style="margin-top:10px; margin-left:30px;">
                                <input name="questions[].choice[]" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Selection D">
                            </div>
                            <div class="col-md-3 offset-md-4">
                                <label for="class">Select Answer</label>
                                    <select name="questions[].answer" class="custom-select" id="class">
                                        <option>A</option>
                                        <option>B</option>
                                        <option>C</option>
                                        <option>D</option>
                                    </select>
                            </div>        
                                </div>
                            </div> 
                        </div>
                        {{-- end of question --}}
        
                    </div>
        
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-block btn-success" id="btnSubmitQuiz">Submit</button>
                        </div>
                        
                    </div>
                </form>
                    </div>
                    <div class="col-md-6 col-md-offset-3" style="margin-top:20px">
                        <button class="btn btn-block btn-info" id="btnAddNewQuestion">Add new Question</button>
                    </div>
                </div>
            </div>
</div>

@endsection