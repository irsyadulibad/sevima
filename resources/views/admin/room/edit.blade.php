@extends('layouts.admin.app', ['header' => 'Edit Room'])

@section('content')
<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.rooms.update', $room) }}" method="post">
                    @method('PUT')
                    <x-admin.room.form :room="$room"/>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
