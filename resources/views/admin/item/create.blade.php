@extends('layouts.admin.app', ['header' => 'Create Material'])

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('admin.lessons.show', $lesson) }}" class="btn btn-sm btn-light">
                    <i class="fas fa-arrow-left"></i> back
                </a>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.lessons.items.store', $lesson) }}" method="post">
                    <x-admin.item.form />
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
