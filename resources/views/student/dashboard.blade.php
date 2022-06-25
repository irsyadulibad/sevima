@extends('layouts.student.app')

@section('content')
<div class="row mt-4">
    <div class="col-12">
        <div class="card">
            <div class="card-header text-center">
                <h6>Your Lessons</h6>
            </div>
            <div class="card-body row">
                @forelse ($lessons as $lesson)
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="lesson-thumbnail m-auto" style="background-image: url('/storage/assets/lesson/{{ $lesson->thumbnail }}');"></div>
                            <h6 class="mt-3">{{ $lesson->name }}</h6>
                        </div>
                        <div class="card-footer text-center">
                            <form action="{{ route('student.lessons.start', $lesson) }}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-info">
                                    <i class="fas fa-play me-1"></i> Lanjutkan
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                @empty
                <div class="card">
                    <div class="card-body text-center">
                        <i style="font-size: 600%" class="fas fa-users-slash mt-3"></i>
                        <p class="mt-4 mb-1">You didn't join any lessons</p>
                        <p class="text-info">Start lesson now</p>
                    </div>
                    <div class="card-footer text-center">
                        <a href="{{ route('student.lessons.index') }}" class="btn btn-primary">
                            <i class="fas fa-play"></i> Start Lesson
                        </a>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection

@push('style')
<style>
    .lesson-thumbnail {
        position: relative;
        width: 100%;
        height: 0;
        padding-bottom: 100%;
        background-position: center;
        background-size: cover;
        border-radius: 5%;
    }
</style>
@endpush
