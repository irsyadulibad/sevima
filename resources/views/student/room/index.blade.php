@extends('layouts.student.app')

@section('content')
<div class="row">
    <div class="col-md-7">
        <div class="card">
            <div class="card-header">
                <h6>All Classes</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="classes-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-5">
        <div class="card">
            <div class="card-header">
                <h6>Joined Classes</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        @forelse (Auth::user()->rooms as $room)
                        <tr>
                            <td>{{ $room->name }}</td>
                            <td>
                                <a href="{{ route('student.rooms.leave', $room) }}" class="text-danger">
                                    <i class="fas fa-sign-out-alt"></i> leave
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td align="center">You did't join any classes yet</td>
                        </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<x-datatables/>
@endsection

@push('script')
<script>
    $('#classes-table').DataTable({
        serverSide: true,
        processing: true,
        ajax: {
            url: `{{ route('datatables.rooms') }}`
        },
        columns: [
            {data: 'DT_RowIndex', searchable: false, sortable: false},
            {data: 'name'},
            {render: (data, type, row, meta) => {
                return `
                <div class="d-flex">
                    <a href="/student/rooms/${row.id}/join" class="btn btn-sm btn-info" title="join">
                        <i class="fas fa-fw fa-sign-in-alt"></i>
                    <a>
                </div>
                `;
            }}
        ]
    });
</script>
@endpush
