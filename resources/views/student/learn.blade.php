@extends('layouts.student.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body row justify-content-center pb-4">
                <div class="col-md-8">
                    <div class="d-flex justify-content-between">
                        <h2>{{ $item->name }}</h2>
                        <h2>#{{ $item->id }}</h2>
                    </div>

                    @if ($item->video_url)
                    <iframe width="100%" height="350" src="{{ $item->video_url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    @endif

                    {!! $item->text_material !!}
                </div>
            </div>
            <div class="card-footer d-flex justify-content-between">
                @if ($prev)
                <a href="{{ route('student.learn.show', $prev) }}" class="btn btn-secondary">
                    <i class="fas fa-angle-left me-2"></i> Previous
                </a>
                @endif
                
                <a href="{{ route('student.lessons.show', $item->lesson) }}" class="btn btn-light">
                    <i class="fas fa-book me-2"></i> Back to Lesson
                </a>

                @if ($next)
                <a href="{{ route('student.learn.show', $next) }}" class="btn btn-primary">
                    Next <i class="fas fa-angle-right ms-2"></i>
                </a> 
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
