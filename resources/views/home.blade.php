@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <div class="container mt-5">
                        <h2 class="mb-4" style="text-align: center;">Student List<div class="pull-left"><a href="{{ url('new-student') }}" class="btn btn-success">Create New Student</a></div> </h2>
                        <table class="table table-bordered yajra-datatable">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Number</th>
                                <th>Email</th>
                                <th>Class</th>
                                <th>Profile Pic</th>
                                <th>State</th>
                                <th>Country</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function () {

        var table = $('.yajra-datatable').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('students.list') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'name', name: 'name'},
                {data: 'number', name: 'number'},
                {data: 'email', name: 'email'},
                {data: 'class', name: 'class'},
                {data: 'image', name: 'image'},
                {data: 'state', name: 'state'},
                {data: 'country', name: 'country'},
                {
                    data: 'action',
                    name: 'action',
                    orderable: true,
                    searchable: true
                },
            ]
        });

    });
</script>
@endsection
