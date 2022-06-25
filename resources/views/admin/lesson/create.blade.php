@extends('layouts.admin.app', ['header' => 'Add Lesson'])

@section('content')
<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.lessons.store') }}" method="post" enctype="multipart/form-data">
                    <x-admin.lesson.form/>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
