@extends('admin.layout.master')
@section('title')
Subscriptions
@endsection
@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h4 class="nk-block-title page-title">All Subscriptions</h4>
                </div>
               
            </div>
        </div>
        <div class="nk-block">
            <div class="card card-bordered card-preview">
                <div class="card-inner">
                    <table class="table card-bordered" id="subscriptions" style="width: 100%">
                        <thead>
                            <tr>
                                <th class="col">Subscriptions Id</th>
                                <th class="col">Name</th>
                                <th class="col">User</th>
                                <th class="col">Duration (Days)</th>
                                <th class="col">Insurance Type</th>
                                <th class="col">Start Date</th>
                                <th class="col">End Date</th>
                                <th class="col">Payment Status</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    

    

    <script>
        $(document).ready(function() {
            var datatable = $('#subscriptions').DataTable({
                processing: true,
                serverSide: true,
                stateSave: true,
                responsive: true,
                // select: true,
                filter: true,
                dom: "<'row'" +
                    "<'col-6 d-flex align-items-center justify-content-start'f>" +
                    "<'col-6 d-flex align-items-center justify-content-end'l>" +
                    ">" +

                    "<'table-responsive my-2'tr>" +

                    "<'row'" +
                    "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                    "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                    ">",
                order: [
                    [0, "desc"]
                ],
                ajax: '{{ route('admin.getAllSubscriptions') }}',
                columns: [

                    {
                        data: 'id'
                    },
                    {
                        data: 'plan',
                        sortable: false
                    },
                    {
                        data: 'username',
                        sortable: false
                    },
                    {
                        data: 'duration',
                        sortable: false
                    },
                    {
                        data: 'insurance_type',
                        sortable: false
                    },
                    {
                        data: 'start_date',
                        sortable: false
                    },
                    {
                        data: 'end_date',
                        sortable: false
                    },
                    {
                        data: 'payment_status',
                        sortable: false
                    },
                    


                ],

            });
            var search = document.querySelector('.search');
            html = search.innerHTML
            search.innerHTML = '<span class="fw-3 px-2">Show</span>' + html +
                '<span class="fw-3 px-2">Entries</span>'
        });
    </script>

@endsection
