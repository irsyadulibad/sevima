@extends('layouts.student.app')

@section('content')
<div class="row justify-content-center mt-4">
    @forelse ($lessons as $lesson)
    <div class="col-3">
        <div class="card">
            <div class="card-body">
                <div class="lesson-thumbnail m-auto" style="background-image: url('/storage/assets/lesson/{{ $lesson->thumbnail }}');"></div>
                <h6 class="mt-3">{{ $lesson->name }}</h6>
                <small><i class="fas fa-file me-2"></i> {{ count($lesson->items) }} materi pembelajaran</small>
            </div>
            <div class="card-footer text-center">
                <form action="{{ route('student.lessons.start', $lesson) }}" method="post">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-info">
                        <i class="fas fa-play me-1"></i> Pelajari
                    </button>
                </form>
            </div>
        </div>
    </div>
    @empty
    <div class="col-4 pt-4 mb-4 pb-4">
        @if (empty(Auth::user()->rooms->toArray()))
        <div class="card">
            <div class="card-body text-center">
                <i style="font-size: 600%" class="fas fa-users-slash mt-3"></i>
                <p class="mt-4 mb-1">You didn't join any classes</p>
                <p class="text-info">Join to get all lessons</p>
            </div>
            <div class="card-footer text-center">
                <a href="{{ route('student.rooms.index') }}" class="btn btn-primary">
                    <i class="fas fa-sign-in-alt"></i> Join Class
                </a>
            </div>
        </div>
        @else
        <div class="card">
            <div class="card-body text-center">
                <i style="font-size: 600%" class="fas fa-face-frown mt-3"></i>
                <p class="mt-4 mb-1">Lessons not available</p>
                <p class="text-info">Cooming Soon</p>
            </div>
            <div class="card-footer text-center">
                <a href="{{ route('student.dashboard') }}" class="btn btn-primary">
                    <i class="fas fa-home me-2"></i> Dashboard
                </a>
            </div>
        </div>
        @endif
    </div>
    @endforelse
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
