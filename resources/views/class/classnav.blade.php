<div class="container">
        {{-- <nav class="nav nav-pills nav-justified text-center">        
            <a class="nav-item nav-link" href="{{ route('class/class',[$subject,1]) }}">Form One</a>
            <a class="nav-item nav-link" href="{{ route('class/class',[$subject,2]) }}">Form Two</a>
            <a class="nav-item nav-link" href="{{ route('class/class',[$subject,3]) }}">Form Three</a>
            <a class="nav-item nav-link" href="{{ route('class/class',[$subject,4]) }}">Form Four</a>
            <a class="nav-item nav-link" href="{{ route('class/class',[$subject,5]) }}">Form Five</a>
            <a class="nav-item nav-link" href="{{ route('class/class',[$subject,6]) }}">Form Six</a>
        </nav> --}}
        <div class="row justify-content-center">
            <div class="col-xs-4">
                <div class="alert alert-light form-links">
                    <a class="btn btn-block btn-sm classses" href="{{ route('class/class',[$subject,1]) }}">Form One</a>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="alert alert-light form-links">
                    <a class="btn btn-block btn-sm classses" href="{{ route('class/class',[$subject,2]) }}">Form Two</a>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="alert alert-light form-links classses">
                    <a class="btn btn-block btn-sm" href="{{ route('class/class',[$subject,3]) }}">Form Three</a>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="alert alert-light form-links classses">
                    <a class="btn btn-block btn-sm" href="{{ route('class/class',[$subject,4]) }}">Form Four</a>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="alert alert-light form-links classses">
                    <a class="btn btn-block btn-sm" href="{{ route('class/class',[$subject,5]) }}">Form Five</a>
                </div>
            </div>
            <div class="col-xs-4">
                <div class="alert alert-light form-links classses">
                    <a class="btn btn-block btn-sm" href="{{ route('class/class',[$subject,6]) }}">Form Six</a>
                </div>
            </div>
        </div>
    </div>
    