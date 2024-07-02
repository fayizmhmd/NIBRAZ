@extends('admin.layout.master')
@section('title')
    Programs
@endsection
@section('content')
@if (session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h4 class="nk-block-title page-title">All Projects</h4>
                </div>
                <div class="nk-block-head-content">
                    <a  class="btn btn-primary" href="{{ route('admin.addProjects') }}">
                        <em class="icon ni ni-plus"></em>
                        <span>Add Projects</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="nk-block">
            <div class="card card-bordered card-preview">
                <div class="card-inner">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" id="projects">
                            <thead>
                                <tr>
                                    <th class="text-center">Id</th>
                                    <th>Name</th>
                                    <th>SEO</th>
                                    <th>Image</th>
                                    <th>Status</th>
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

    @foreach ($projects as $project)
        <div class="modal fade" id="deleteproject{{ $project->id }}" tabindex="-1">
            <div class="modal-dialog modal-dialog-top">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete College</h5>
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                            <i class="bi bi-x-lg"></i>
                        </div>
                    </div>
                    <div class="modal-body">
                        <p>Do you really want to delete this project?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <a href="{{ route('admin.deleteProjects', ['id' => $project->id]) }}" type="button" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            var datatable = $('#projects').DataTable({
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
                ajax: '{{ route('admin.getAllprojects') }}',
                columns: [
                    { data: 'id' },
                    { data: 'name', sortable: false },
                    { data: 'seo', sortable: false },
                    { data: 'image', sortable: false },
                    { data: 'status', sortable: false },
                    { data: 'action', sortable: false },
                ],
            });

            var search = document.querySelector('.search');
            html = search.innerHTML;
            search.innerHTML = '<span class="fw-3 px-2">Show</span>' + html + '<span class="fw-3 px-2">Entries</span>';
        });
    </script>
@endsection
