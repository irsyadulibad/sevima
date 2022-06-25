@extends('layouts.admin.app', ['header' => 'Lesson Detail'])

@section('content')
<div class="row">
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
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('admin.lessons.items.create', $lesson) }}" class="btn btn-primary float-right mb-4">
                        <i class="fas fa-plus"></i> Add Material
                    </a>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            @foreach ($lesson->items as $item)
                            <tr>
                                <td class="align-middle">
                                    <h6>{{ $item->name }}</h6>
                                </td>
                                <td class="align-middle">
                                    <a href="{{ route('admin.lessons.items.edit', ['lesson' => $lesson, 'item' => $item]) }}" class="btn btn-sm btn-success">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{ route('admin.lessons.items.destroy', ['lesson' => $lesson, 'item' => $item]) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
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
