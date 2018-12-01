@extends('layouts.index')
@section('content')
    <div class="row">
        @include('sidebar_subject')
        <div class="col-md-9">
                <div class="container" style=" margin-top: 40px; text-align:left;">
                        <h3 class="display-5" style="color: #001f9c ; " >CREATE QUIZ</h3>  
                    
                      
                      <form>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                            <label for="class">Select Class</label>
                                            <select class="custom-select" id="class">
                                                <option>Form 1</option>
                                                <option>Form 2</option>
                                                <option>Form 3</option>
                                                <option>Form 4</option>
                                                <option>Form 5</option>
                                                <option>Form 6</option>
                                            </select>
                                    </div>
                                </div>
                    
                                <div class="col-md-4">
                                        <div class="form-group" >
                                            <label for="">Select Subject</label>
                                            <select class="custom-select">
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
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                            <label for="class">Number of Questions</label>
                                            <select class="custom-select" id="class">
                                                <option>5 Questions</option>
                                                <option>10 Questions</option>
                                                <option>15 Questions</option>
                                                <option>20 Questions</option>
                                                <option>25 Questions</option>
                                                <option>30 Questions</option>
                                                <option>40 Questions</option>
                                                <option>50 Questions</option>
                                            </select>
                                        </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                          
                              <div class="form-group">
                                    <label for="exampleFormControlInput1">Topic Title</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter your topic tittle">
                                  </div>
                      </form>
                      <div class="container" style="margin-top:10px;">
                            <h4 style="margin-top:30px;">SECTION A (Multiple Choice)</h4>
                            <div class="col-md-12" style="margin-top:10px;">
                                    <h5>Question No 1.</h5>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Question No 1">
                              </div>
                              <div class="col-md-4" style="margin-top:30px; margin-left:30px;">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Selection A">
                              </div>
                              <div class="col-md-4" style="margin-top:10px; margin-left:30px;">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Selection B">
                              </div>
                              <div class="col-md-4" style="margin-top:10px; margin-left:30px;">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Selection C">
                              </div>
                              <div class="col-md-4" style="margin-top:10px; margin-left:30px;">
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Selection D">
                              </div>
                            </div>
                    </div>
        </div>
    </div>


  @endsection