@extends('layouts.admin.app', ['header' => 'Edit Material'])

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
                <form action="{{ route('admin.lessons.items.update', ['lesson' => $lesson, 'item' => $item]) }}" method="post">
                    @method('PUT')
                    <x-admin.item.form :lesson="$lesson" :item="$item" />
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
