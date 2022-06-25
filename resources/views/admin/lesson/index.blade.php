@extends('layouts.admin.app')

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-end mb-4">
                    <a href="{{ route('admin.lessons.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Add Lesson
                    </a>
                </div>
                <div class="table-responsive">
                    <table id="room-table" class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Rooms</th>
                                <th>Descriptions</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
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
    $('#room-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            url: `{{ route('admin.lessons.datatables') }}`
        },
        columns: [
            {data: 'DT_RowIndex', searchable: false, orderable: false},
            {data: 'name'},
            {render: (meta, data, row, type) => {
                const rooms = JSON.parse(row.rooms);
                return rooms.join(', ');
            }},
            {data: 'description'},
            {render: (meta, data, row, type) => {
                return `
                <div class="d-flex">
                    <a href="${row.detailUrl}/edit" class="btn btn-sm btn-success">
                        <i class="fas fa-pencil-alt"></i>
                    </a>
                    <form action="${row.detailUrl}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger ml-1">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </form>
                </div>
                `;
            }}
        ]
    });
</script>
@endpush
