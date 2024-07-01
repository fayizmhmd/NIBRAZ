@extends('admin.layout.master')
@section('title')
    User Scheme
@endsection
@section('content')
    <div class="nk-content-body">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">{{ $user?->name }} -</span> User Schemes <span> </h3>
                </div>
                <div class="nk-block-head-content">
                    <a href="#" class="btn btn-icon btn-primary d-md-none">
                        <em class="icon ni ni-plus"></em>
                    </a>
                    <a data-bs-toggle="modal" data-bs-target="#addUserScheme"
                        class="btn btn-primary d-none d-md-inline-flex">
                        <em class="icon ni ni-plus"></em>
                        <span>Add User Scheme</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="nk-block">
            <div class="card card-bordered card-preview">
                <div class="card-inner">
                    <table class="table card-bordered" id="userschemes" style="width: 100%">
                        <thead>
                            <tr>
                                <th class="col">Unique Id</th>
                                <th class="col">Scheme</th>
                                <th class="col">Status</th>
                                <th class="col"></th>
                                <th class="col">Paid</th>
                                <th class="col">Total</th>
                                <th class="col"></th>
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

    <div class="modal fade" id="addUserScheme" tabindex="-1">
        <div class="modal-dialog modal-dialog-top modal-lg user-select-none">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Scheme</h5>
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="bi bi-x-lg"></i>
                    </div>
                </div>
                <form action="{{ route('admin.addUserScheme') }}" method="POST" enctype="multipart/form-data"
                    id="myForm">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $user?->id }}" />
                    <div class="modal-body ">
                        <div class='form-group row mb-4 align-middle'>
                            <label class=" col-lg-3 required form-label">Unique Id</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" placeholder="Unique Id" name='unique_id'
                                    required />
                            </div>
                        </div>
                        <div class='form-group row mb-4'>
                            <label class=" col-lg-3 required form-label">Scheme</label>
                            <div class="col-lg-9">
                                <select name="scheme_id" id="scheme_id" class="form-select js-select2"
                                    data-control="select2" aria-placeholder="Select Scheme">
                                    @foreach ($schemes as $scheme)
                                        <option value="{{ $scheme->id }}">{{ $scheme->name }}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                        <div class='form-group row mb-4'>
                            <label class=" col-lg-3 required form-label">User</label>
                            <div class="col-lg-9">
                                <span class="badge bg-info badge-md">
                                    {{ $user?->name }}
                                </span>
                            </div>
                        </div>
                        <div class='form-group row mb-4'>
                            <label class=" col-lg-3 required form-label">Scheme User Name</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" placeholder="Scheme User Name"
                                    name='scheme_user_name' required />
                            </div>
                        </div>
                        <div class='form-group row mb-4 align-middle'>
                            <label class=" col-lg-3 required form-label">Scheme Total</label>
                            <div class="col-lg-9">
                                <input type="number" class="form-control" placeholder="Scheme Total" name='scheme_total'
                                    required />
                            </div>
                        </div>
                        <div class='form-group row mb-4 align-middle'>
                            <label class=" col-lg-3 required form-label">Phone</label>
                            <div class="col-lg-9">
                                <input type="number" class="form-control" placeholder="Phone" name='phone' />
                            </div>
                        </div>
                        <div class='form-group row mb-4 align-middle'>
                            <label class=" col-lg-3 required form-label">Address</label>
                            <div class="col-lg-9">
                                <textarea class="form-control" placeholder="Enter Address" name="address"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @foreach ($userSchemes as $userScheme)
        <div class="modal fade" tabindex="-1" id="userSchemeTransactions{{ $userScheme->id }}">
            <div class="modal-dialog modal-dialog-top modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Transactions </h5>
                        <div class="btn btn-icon btn-sm btn-active-light-info ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <span class="svg-icon svg-icon-2x">&times;</span>
                        </div>
                    </div>
                    <div class="modal-body">
                        <table class="table card-bordered" data-auto-responsive="false">
                            <thead>
                                <tr class="fw-bolder text-muted text-center bg-light">
                                    <th class="nk-tb-col">Transaction Id</th>
                                    {{-- <th class="nk-tb-col tb-col-lg">Customer</th>
                                    <th class="nk-tb-col tb-col-lg">Scheme</th> --}}
                                    <th class="nk-tb-col tb-col-lg">Image</th>
                                    <th class="nk-tb-col tb-col-lg">Entry Type</th>
                                    <th class="nk-tb-col tb-col-lg">Amount</th>
                                    <th class="nk-tb-col tb-col-lg">Payment Date</th>
                                    {{-- <th class="nk-tb-col tb-col-lg"></th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @if ($userScheme->transactions->count())
                                    @foreach ($userScheme->transactions as $transaction)
                                        <tr class="text-center">
                                            <td>{{ $transaction->transaction_id }}</td>
                                            {{-- <td>{{ $transaction->user->name }}</td>
                                            <td>{{ $transaction->scheme->name }}</td> --}}
                                            {{-- <td>{{ $transaction->amount }}</td> --}}
                                            <td>
                                                @if ($transaction->image)
                                                    <a class="transaction-image popup-image product-card"
                                                        href="{{ asset($transaction->image) }}">
                                                        <img class="w-100 rounded-top"
                                                            src="{{ asset($transaction->image) }}" alt="">
                                                        <span class="transaction-preview" style="background:#00000060">
                                                            <div class="transaction-text">
                                                                <em class="icon ni ni-eye "></em><span
                                                                    style="margin-left:2px ">preview</span>
                                                            </div>
                                                        </span>
                                                    </a>
                                                @else
                                                    -No Image-
                                                @endif
                                            </td>
                                            <td>
                                                @if ($transaction->entry_type == 'DEBIT')
                                                    <span class="badge bg-danger">{{ $transaction->entry_type }}</span>
                                                @elseif ($transaction->entry_type == 'DEBIT')
                                                    <span class="badge bg-success">{{ $transaction->entry_type }}</span>
                                                @else
                                                    --
                                                @endif
                                            </td>
                                            <td>{{ $transaction->amount ?? '0.00' }}</td>
                                            <td>{{ $transaction->paid_date }}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr class="text-center">
                                        <td> </td>
                                        <td> </td>
                                        <td>-No Transactions-</td>
                                        <td> </td>
                                        <td> </td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" tabindex="-1" id="userSchemeClose{{ $userScheme->id }}">
            <div class="modal-dialog modal-dialog-top modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Close Amount</h5>
                        <div class="btn btn-icon btn-sm btn-active-light-info ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <span class="svg-icon svg-icon-2x">&times;</span>
                        </div>
                    </div>
                    <form action="{{ route('admin.closeSchemeCollection') }}" method="POST"
                        enctype="multipart/form-data" id="myForm">
                        @csrf
                        <div class="modal-body">
                            <input type="hidden" name="id" value="{{ $userScheme->id }}" />
                            <div class="modal-body">
                                <div class='form-group row mb-4'>
                                    <label class=" col-lg-3 required form-label">User</label>
                                    <div class="col-lg-9">
                                        <div class="form-control-wrap">
                                            <input type="hidden" name="user_id" value="{{ $userScheme->user_id }}" />
                                            <span style="font-weight: 550">
                                                @if ($userScheme->user)
                                                    {{ $userScheme->user->name }}
                                                @else
                                                    -No Specified-
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class='form-group row mb-4'>
                                    <label class=" col-lg-3 required form-label">Scheme</label>
                                    <div class="col-lg-9">
                                        <input type="hidden" name="scheme_id" value="{{ $userScheme->scheme_id }}" />
                                        <span style="font-weight: 550">
                                            {{ $userScheme->scheme->name }}
                                        </span>
                                    </div>
                                </div>
                                <div class='form-group row mb-4'>
                                    <label class=" col-lg-3 required form-label">Pending Amount</label>
                                    <div class="col-lg-9">
                                        <span class="" style="font-weight: 550">
                                            @if ($userScheme->transactions->count())
                                                @php
                                                    $amount = 0;
                                                    foreach ($userScheme->transactions as $transaction) {
                                                        $amount += $transaction->amount;
                                                    }
                                                    $amount = $userScheme->scheme->scheme_value - $amount;
                                                @endphp
                                                {{ $amount }}
                                            @else
                                                {{ $userScheme->scheme->scheme_value }}
                                            @endif
                                        </span>
                                        <input type="hidden" name="amount" value="{{ $amount ?? 0 }}" />
                                    </div>
                                </div>
                                <div class='form-group row mb-4'>
                                    <label class=" col-lg-3 required form-label">Transaction Recipt</label>
                                    <div class="col-lg-9">
                                        <input type="file" class="form-control" placeholder="Image" name="image"
                                            required />
                                    </div>
                                </div>
                                <div class='form-group row mb-4'>
                                    <label class=" col-lg-3 required form-label">Paid Date</label>
                                    <div class="col-lg-9 user-select-none">
                                        <div class="form-control-wrap">
                                            <div class="form-icon form-icon-right"><em
                                                    class="icon ni ni-calendar-alt"></em>
                                            </div>
                                            <input type="text" class="form-control date-picker"
                                                placeholder="Paid Date" name="paid_date" required
                                                data-date-format="dd-mm-yyyy" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Close Amount</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    <script>
        $(document).ready(function() {
            var datatable = $('#userschemes').DataTable({
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
                ajax: "{{ route('admin.getSingleCustomerUserSchemes', $user ? $user->id : 0) }}",
                columns: [{
                        data: 'unique_id'
                    },
                    {
                        data: 'scheme',
                        sortable: false
                    },
                    {
                        data: 'is_active',
                        sortable: false
                    },
                    {
                        data: 'status',
                        sortable: false
                    },
                    {
                        data: 'paid',
                        sortable: false
                    },
                    {
                        data: 'total',
                        sortable: false
                    },
                    {
                        data: 'transactions',
                        sortable: false
                    },
                    {
                        data: 'notify_user',
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
