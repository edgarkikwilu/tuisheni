@extends('layouts.teacher')
@section('content')
    <div class="content">
        <div class="row">
            <div class="col-md-12 text-center">
                <p>{{ $notes->title }}</p>
            </div>
        </div>
        <div class="row text-center justify-content-center">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <span>{{ $notes->topic->subject->name }}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        <span>{{ $notes->topic->name }}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="card">
                    <div class="card-body">
                        <span>{{ $notes->views }} Views</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        {!! $notes->article !!}
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="row">
                    Attachments: {{ $notes->attachements->count() }}
                </div>
                <div class="card">
                    <div class="card-body">
                        <ol>
                            @foreach ($notes->attachements as $attachment)
                                <li>
                                    <a href="{{ route('student.show', $attachment->filename) }}">{{ $attachment->filename }}</a>
                                </li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection