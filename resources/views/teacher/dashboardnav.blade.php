<div class="container">
   <div class="row">
        <div class="btn-group" role="group" aria-label="Basic example">
        <a href="{{route('teacher.topdash')}}"><button type="button" class="btn btn-secondary" style="margin-left:10px;">Profile</button></a>  
        <a href="{{route('teacher.notes')}}"><button type="button" class="btn btn-secondary" style="margin-left:10px;">Notes</button></a>
        <a href="{{route('teacher.examinations')}}"><button type="button" class="btn btn-secondary" style="margin-left:10px;">Examinations</button></a>
        <a href="{{route('teacher.results')}}"><button type="button" class="btn btn-secondary" style="margin-left:10px;">Results</button></a>
        {{-- <a href="{{route('teacher.assesment')}}"><button type="button" class="btn btn-secondary" style="margin-left:10px;">Assesment</button></a> --}}
        <a href="{{route('teacher.payments')}}"> <button type="button" class="btn btn-secondary" style="margin-left:10px;">Payments</button></a>
        </div>
   </div>
</div>