@extends('layouts.admin.app', ['header' => 'Add Room'])

@section('content')
<div class="row">
    <div class="col-md-5">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.rooms.store') }}" method="post">
                    <x-admin.room.form/>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
