@extends('admin.layout.master')
@section('title')
    mail list
@endsection
@section('content')

<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title page-title">Contact list</h4>
            </div>
            {{-- <div class="nk-block-head-content">
                <a  class="btn btn-primary" href="{{ route('admin.addGallery') }}">
                    <em class="icon ni ni-plus"></em>
                    <span>Add Gallery</span>
                </a>
            </div> --}}
        </div>
    </div>
    <div class="nk-block">
        <div class="card card-bordered card-preview">
            <div class="card-inner">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="contactus">
                        <thead>
                            <tr>
                                <th class="text-center">Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Message</th>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            var datatable = $('#contactus').DataTable({
                processing: true,
                serverSide: true,
                stateSave: true,
                responsive: true,
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
                ajax: '{{ route('admin.getContactus') }}',
                columns: [
                    { data: 'id' },
                     {data: 'name' ,sortable: false },
                    { data: 'email', sortable: false },
                    { data: 'phone', sortable: false },
                    { data: 'message', sortable: false }
                ],
            });

            var search = document.querySelector('.search');
            html = search.innerHTML;
            search.innerHTML = '<span class="fw-3 px-2">Show</span>' + html + '<span class="fw-3 px-2">Entries</span>';
        });
    </script>

@endsection
