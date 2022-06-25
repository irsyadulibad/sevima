@extends('layouts.student.app')

@section('content')
<div class="row mt-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h3>{{ $lesson->name }}</h3>
                <h6 class="mt-3">{{ $lesson->description }}</h6>
            </div>
            <div class="card-footer pb-0">
                <p>
                    <i class="fas fa-file mr-2"></i> {{ count($lesson->items) }} materi pembelajaran
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container mt-3">
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            @foreach ($lesson->items as $item)
                            <tr>
                                <td class="align-middle">
                                    <a href="{{ route('student.learn.show', $item) }}">{{ $item->name }}</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-body d-flex justify-content-center">
                    <div id="thumbnail-prev"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('style')
<style>
    #thumbnail-prev {
        position: relative;
        width: 80%;
        height: 0;
        padding-bottom: 80%;
        background-image: url('/storage/assets/lesson/{{ $lesson->thumbnail }}');
        background-position: center;
        background-size: cover;
        border-radius: 5%;
    }
</style>
@endpush
