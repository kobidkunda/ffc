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
                            <th>utm_medium</th><th>utm_campaign</th><th>utm_term</th>
                           
                            
                            <th>phone_verified_at</th>
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
                  { data: 'utm_medium', name: 'utm_medium' },
                    { data: 'utm_campaign', name: 'utm_campaign' },
                      { data: 'utm_term', name: 'utm_term' },
                        { data: 'phone_verified_at', name: 'phone_verified_at' },
                { data: 'created_at', name: 'created_at' }
            ]
        });
    });
</script>




@endsection
