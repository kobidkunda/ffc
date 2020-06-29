@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    <table class="table table-bordered" id="users-table">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>City</th>
                            <th>Time</th>
                        </tr>
                        </thead>
                    </table>







                </div>
            </div>
        </div>
    </div>
</div>




<script>
    $(function() {
        $.noConflict();
        $('#users-table').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            processing: true,
            serverSide: true,
            ajax: '{!! route('datatablesapu') !!}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'mobile', name: 'mobile' },
                { data: 'city', name: 'city' },
                { data: 'created_at', name: 'created_at' }
            ]
        });
    });
</script>




@endsection
