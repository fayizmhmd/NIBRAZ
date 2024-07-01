@extends('admin.layout.master')
@section('title')
    Branch Admins
@endsection
@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h4 class="nk-block-title page-title">Branch Admins</h4>
                </div>
                <div class="nk-block-head-content">
                    <a data-bs-toggle="modal" data-bs-target="#add_user" class="btn btn-primary">
                        <em class="icon ni ni-plus"></em>
                        <span>Add Branch Admin</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="nk-block">
            <div class="card card-bordered card-preview">
                <div class="card-inner">
                    <table class="table card-bordered" id="users" style="width: 100%">
                        <thead>
                            <tr>
                                <th class="col">User Id</th>
                                <th class="col">User Name</th>
                                <th class="col">Address</th>
                                <th class="col">Phone</th>
                                <th class="col">Login</th>
                                <th class="col">Status</th>
                                <th class="col"></th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="add_user" tabindex="-1">
        <div class="modal-dialog modal-dialog-top modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Branch Admin</h5>
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="bi bi-x-lg"></i>
                    </div>
                </div>
                <form action="{{ route('admin.addUser') }}" method="POST" enctype="multipart/form-data" id="myForm">
                    @csrf
                    <div class="modal-body ">
                        <div class='form-group row mb-4 align-middle'>
                            <label class=" col-lg-3 required form-label">User Name</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" placeholder="User Name" name='name'
                                    required />
                            </div>
                        </div>
                        <div class='form-group row mb-4'>
                            <label class=" col-lg-3 required form-label">Email</label>
                            <div class="col-lg-9">
                                <input type="email" class="form-control" placeholder="Email" name="email" />
                            </div>
                        </div>
                        <div class='form-group row mb-4'>
                            <label class=" col-lg-3 required form-label">Address</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" placeholder="Address" name="address" required />
                            </div>
                        </div>
                        <div class='form-group row mb-4'>
                            <label class=" col-lg-3  form-label">Photo</label>
                            <div class="col-lg-9">
                                <input class="form-control" type="file" name="image"
                                    accept=".jpeg, .png, .jpg, .svg, .gif">
                            </div>
                        </div>
                        <div class='form-group row mb-4'>
                            <label class=" col-lg-3 required form-label">Phone</label>
                            <div class="col-lg-9">
                                <input type="tel" class="form-control" placeholder="9999999999" name="phone"
                                    minlength="10" maxlength="10" pattern="[789][0-9]{9}"
                                    title="Phone Number should start with 6,7,8,9 | Min Length = 10" required />
                            </div>
                        </div>
                        <div class='form-group row mb-4'>
                            <label class=" col-lg-3 required form-label">Password</label>
                            <div class="col-lg-9">
                                <input type="password" class="form-control" minlength='8' placeholder="Password"
                                    name='password' required />
                            </div>
                        </div>
                        <input type="hidden" name="role" value="{{ 'Branch Admin' }}" />
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @foreach ($users as $user)
        <div class="modal fade" id="deleteUser{{ $user->id }}" tabindex="-1">
            <div class="modal-dialog modal-dialog-top">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Delete User</h5>
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="bi bi-x-lg"></i>
                        </div>
                    </div>
                    <div class="modal-body">
                        <p>Do you really want to delete this user ?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <a href="{{ route('admin.deleteUser', $user->id) }}" type="button"
                            class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <script>
        $(document).ready(function() {
            var datatable = $('#users').DataTable({
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
                ajax: '{{ route('admin.getAllBranchAdmins') }}',
                columns: [

                    {
                        data: 'id'
                    },
                    {
                        data: 'name',
                        sortable: false
                    },
                    {
                        data: 'address',
                        sortable: false
                    },
                    {
                        data: 'phone',
                        sortable: false
                    },
                    {
                        data: 'login',
                        sortable: false
                    },
                    {
                        data: 'status',
                        sortable: false
                    },
                    {
                        data: 'action',
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
