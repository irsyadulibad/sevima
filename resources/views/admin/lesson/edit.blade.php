@extends('layouts.admin.app', ['header' => 'Add Lesson'])

@section('content')
<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.lessons.update', $lesson) }}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    <x-admin.lesson.form :lesson="$lesson"/>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
