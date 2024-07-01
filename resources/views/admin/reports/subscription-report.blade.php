@extends('admin.layout.master')
@section('title')
Subscription Report
@endsection
@section('content')
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title page-title">Subscription Report</h4>
            </div>

        </div>
    </div>
    <div class="nk-block">
        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <form action="{{ route('admin.subscriptionReport')}}" method='GET'>
                    <div class="row g-3 align-center">
                        <div class="col-lg-1">
                            <div class="form-group"><label class="form-label" for="name">Customer</label></div>
                        </div>
                        <div class="col-lg-7">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <select name="user_id" class="form-control">
                                        <option value="all">All</option>
                                        @foreach ($customers as $customer)
                                            <option value="{{ $customer->id }}" {{ ($userId == $customer->id) ? 'selected' : '' }}>#{{ $customer->customer_id }} - {{ $customer->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <button type="submit" class='btn btn-primary w-100 justify-content-center'>Search</button>
                        </div>
                        <div class="col-lg-2">
                            <a href='#' class='btn btn-info w-100 justify-content-center'>Export PDF</a>
                        </div>
                    </div>
                </form>
                <hr>
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
    $(document).ready(function () {
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
            ajax: '{{ route("admin.getReportSubscription", ["userId" => $userId]) }}',
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