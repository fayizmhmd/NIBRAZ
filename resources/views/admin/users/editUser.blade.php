@extends('admin.layout.master')
@section('title')
    Edit User
@endsection
@section('content')
    <div class="card mb-5 mb-xxl-8">
        <div class="card-body pt-9 pb-0">
            <div class="d-flex flex-wrap flex-sm-nowrap">
                <div class="me-7 mb-4">
                    <div class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                        @if ($user->image)
                            <img src="{{ asset($user->image) }}"
                                style="width:8vw;height:8vw;object-fit:cover;border-radius:5px" alt="image">
                        @else
                            <img src="https://www.pngitem.com/pimgs/m/35-350426_profile-icon-png-default-profile-picture-png-transparent.png"
                                style="width:8vw;height:8vw;object-fit:cover;border-radius:5px" alt="image">
                        @endif
                    </div>
                </div>

                <div class="flex-grow-1 ms-2">
                    <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                        <div class="d-flex flex-column">
                            <div class="d-flex align-items-center mb-2">
                                <span class="text-gray-900  fs-2 fw-bolder me-1">{{ $user->name }}</span>
                                <span>
                                    <span class="svg-icon svg-icon-1 svg-icon-primary">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z"
                                                fill="#00A3FF"></path>
                                            <path class="permanent"
                                                d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z"
                                                fill="white"></path>
                                        </svg>
                                    </span>
                                </span>
                            </div>

                            <div class="d-flex flex-wrap fw-bold fs-6 mb-4 pe-2">
                                <span class="d-flex align-items-center text-gray-400  me-5 mb-2">
                                    <span class="svg-icon svg-icon-4 me-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3"
                                                d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z"
                                                fill="black"></path>
                                            <path
                                                d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z"
                                                fill="black"></path>
                                        </svg>
                                    </span>
                                    @foreach ($user->roles as $role)
                                        {{ $role->name }}
                                    @endforeach
                                </span>
                                @if ($user->phone)
                                    <span class="d-flex align-items-center text-gray-400  me-5 mb-2">
                                        <span class="svg-icon svg-icon-4 me-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd"
                                                    d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                                            </svg>
                                        </span> {{ $user->phone }}
                                    </span>
                                @else
                                    <span></span>
                                @endif
                                @if ($user->email)
                                    <span class="d-flex align-items-center text-gray-400  mb-2">
                                        <span class="svg-icon svg-icon-4 me-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                    d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z"
                                                    fill="black"></path>
                                                <path
                                                    d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z"
                                                    fill="black"></path>
                                            </svg>
                                        </span> {{ $user->email }}
                                    </span>
                                @else
                                    <span>Email</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <ul class="nav nav-tabs mt-3 ">
                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#general"><em
                            class="icon ni ni-user"></em><span>General</span></a>
                </li>
                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#rolespermission"><em
                            class="icon ni ni-link"></em><span>Roles and permissions</span></a>
                </li>
                @if (count($user->subscriptionHistory) >0 )
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#subscription"><em
                        class="icon  ni-like-2"></em><span>Subscription Detials</span></a>
                    </li>
                @endif
                
                @if (isset($existing_policy) )
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#existing_policies"><em
                        class="icon  ni-like-2"></em><span>Existing Policy Detials</span></a>
                    </li>
                @endif
            </ul>
            <div class="tab-content mt-0">
                <div class="tab-pane active" id="general">
                    <div id="kt_account_settings_profile_details" class="collapse show">
                        <form action="{{ route('admin.updateUser') }}" method="post" enctype="multipart/form-data"
                            class="form-validate">
                            @csrf
                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <div class="card-body mt-3">
                                <div class="row g-3 align-center">
                                    <div class="col-lg-5">
                                        <div class="form-group"><label class="form-label" for="name">
                                                User Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="Name" value="{{ $user->name }}" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-3 align-center mt-1">
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label class="form-label" for="name">
                                                Current Image</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        @if ($user->image)
                                            <img src="{{ asset($user->image) }}"
                                                style="width:4vw;height:4vw;object-fit:cover;border-radius:5px; " />
                                        @else
                                            <span class="badge badge-dot bg-info">No Image Found</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row g-3 align-center mt-1">
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label class="form-label" for="name">
                                                Image</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <input type="file" name="image" class="form-control"
                                                    placeholder="Select Image">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-3 align-center mt-1">
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label class="form-label" for="email"> Email</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <input type="text" name="email" class="form-control"
                                                    placeholder="Email" value="{{ $user->email }}" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-3 align-center mt-1">
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label class="form-label" for="email"> Phone</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <input type="text" name="phone" class="form-control"
                                                    placeholder="Phone" value="{{ $user->phone }}" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-3 align-center mt-1">
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label class="form-label" for="email"> Gender</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <select name="gender" class="form-select" data-control="" required>
                                                   <option value="" @if ($user->gender == '') selected @endif>Select Type</option>
                                                   <option value="MALE" @if ($user->gender == 'MALE') selected @endif>Male</option>
                                                   <option value="FEMALE" @if ($user->gender == 'FEMALE') selected @endif>Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-3 align-center mt-1">
                                    <div class="col-lg-5">
                                        <div class="form-group">
                                            <label class="form-label" for="email"> Date of Birth</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <input type="date" name="dob" class="form-control"
                                                    placeholder="Phone" value="{{ $user->dob }}" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                               

                                

                               
                                <div class="form-group d-flex justify-content-end mt-3">
                                    <button type="submit" class="btn btn-lg btn-primary">
                                        Update
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="tab-pane" id="rolespermission">
                    <div id="kt_account_settings_profile_details" class="collapse show">
                        <form class="form fv-plugins-bootstrap5 fv-plugins-framework"
                            action="{{ route('admin.updateUserRole') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <div class="card-body mt-3">
                                <div class="row g-3 align-center">
                                    <label class=" col-lg-5 form-label" for="password"> Change Password</label>
                                    <div class="col-lg-7 fv-row fv-plugins-icon-container">
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Password" minlength="8">
                                    </div>
                                </div>
                                <div class="row g-3 align-center mt-1">
                                    <label class=" col-lg-5 form-label" for="password"> Current Role</label>
                                    <div class="col-lg-7">
                                        @foreach ($user->roles as $role)
                                            <span class="badge bg-primary">
                                                {{ $role->name }}
                                            </span>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="row g-3 align-center mt-1">
                                    <label class=" col-lg-5 form-label" for="password"> Change Role</label>
                                    <div class="col-lg-7 fv-row fv-plugins-icon-container">
                                        <select class="form-select js-select2" data-search="on" data-control="select2"
                                            name="role">
                                            @foreach ($roles as $role)
                                                <option @if (in_array($role->id, $user->roles->pluck('id')->toArray())) selected @endif
                                                    value="{{ $role->id }}">
                                                    {{ $role->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group d-flex justify-content-end mt-3">
                                    <button type="submit" class="btn btn-lg btn-primary">
                                        Update
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="tab-pane" id="subscription">
                    <div id="kt_account_settings_profile_details" class="collapse show">
                     
                           
                            <div class="card-body mt-3">
                                @if (isset($activePlan->first()->plan))
                                    <div class="row g-3 align-center mb-1">
                                        <label class=" col-lg-2 form-label" for="password"> Current Plan</label>
                                        <div class="col-lg-7 fv-row fv-plugins-icon-container">: <b>#{{ $activePlan->first()->plan->name }}</b></div>
                                    </div>

                                    <div class="row g-3 align-center mb-1">
                                        <label class=" col-lg-2 form-label" for="password"> Start Date</label>
                                        <div class="col-lg-7 fv-row fv-plugins-icon-container">: {{ $activePlan->first()->start_date }}</div>
                                    </div>

                                    <div class="row g-3 align-center mb-1">
                                        <label class=" col-lg-2 form-label" for="password"> End Date</label>
                                        <div class="col-lg-7 fv-row fv-plugins-icon-container">: {{ $activePlan->first()->end_date }}</div>
                                    </div>
                                    <div class="row g-3 align-center mb-1">
                                        <label class=" col-lg-2 form-label" for="password"> Price</label>
                                        <div class="col-lg-7 fv-row fv-plugins-icon-container">: {{ $activePlan->first()->price }}</div>
                                    </div>
                                    <div class="row g-3 align-center mb-1">
                                        <label class=" col-lg-2 form-label" for="password"> Status</label>
                                        <div class="col-lg-7 fv-row fv-plugins-icon-container">: <span class="badge bg-success">Active</span></div>
                                    </div>
                                @endif
                                <br>
                                <label class=" col-lg-5 form-label" for="">Subscription History:</label>
                                <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th scope="col">#ID</th>
                                        <th scope="col">Plan</th>
                                        <th scope="col">Start Date</th>
                                        <th scope="col">End Date</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Duration</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Status</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                     @foreach ($user->subscriptionHistory as $subs)
                                        <tr>
                                            <th scope="row">{{ $subs->id }}</th>
                                            <td>{{ (isset($subs->plan)) ? $subs->plan->name : '--' }}</td>
                                            <td>{{ $subs->start_date }}</td>
                                            <td>{{ $subs->end_date }}</td>
                                            <td>{{ $subs->insurance_type }}</td>
                                            <td>{{ $subs->duration }}</td>
                                            <td>{{ $subs->price }}</td>
                                            <td>{!! ($subs->subscription_status == 1) ? '<span class="badge bg-success">Active</span>' : '<span class="badge bg-danger">Expired</span>' !!}</td>

                                        </tr>
                                     @endforeach
                                      
                                    </tbody>
                                  </table>
                                

                                
                               
                            </div>
                       
                    </div>
                </div>

                <div class="tab-pane" id="existing_policies">
                    <div id="kt_account_settings_profile_details" class="collapse show">
                     
                           
                            <div class="card-body mt-3">
                                @if (isset($existing_policy))
                                    <div class="row g-3 align-center mb-1">
                                        <label class=" col-lg-2 form-label" for="password"> Policy Number</label>
                                        <div class="col-lg-7 fv-row fv-plugins-icon-container">: <b>#{{ $existing_policy->policy_number }}</b></div>
                                    </div>

                                    <div class="row g-3 align-center mb-1">
                                        <label class=" col-lg-2 form-label" for="password"> Company Name</label>
                                        <div class="col-lg-7 fv-row fv-plugins-icon-container">: {{ $existing_policy->company_name }}</div>
                                    </div>

                                    <div class="row g-3 align-center mb-1">
                                        <label class=" col-lg-2 form-label" for="password"> Purchase Date</label>
                                        <div class="col-lg-7 fv-row fv-plugins-icon-container">: {{ $existing_policy->purchase_date }}</div>
                                    </div>

                                    <div class="row g-3 align-center mb-1">
                                        <label class=" col-lg-2 form-label" for="password"> Expiry Date</label>
                                        <div class="col-lg-7 fv-row fv-plugins-icon-container">: {{ $existing_policy->expiry_date }}</div>
                                    </div>

                                    <div class="row g-3 align-center mb-1">
                                        <label class=" col-lg-2 form-label" for="password"> Deductible Price</label>
                                        <div class="col-lg-7 fv-row fv-plugins-icon-container">: {{ $existing_policy->deductible_price }}</div>
                                    </div>
                                    <div class="row g-3 align-center mb-1">
                                        <label class=" col-lg-2 form-label" for="password"> Status</label>
                                        <div class="col-lg-7 fv-row fv-plugins-icon-container">: {!! ($existing_policy->status == 0) ? '<span class="badge bg-success">Active</span>' : '<span class="badge bg-danger">Expired</span>' !!}</div>
                                    </div>
                                @endif
                            </div>
                       
                    </div>
                </div>
            </div>

            {{-- <div class="card mt-4 mb-4">
                        <div class="card-header  card-header-stretch">
                            <div class="card-toolbar">
                                <ul class="nav nav-tabs nav-pills border-0 flex-row flex-md-row me-5 mb-3 mb-md-0 fs-6">
                                    <li class="nav-item w-md-120px me-0">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#kt_vtab_pane_1">General</a>
                                    </li>
                                    <li class="nav-item w-md-120px me-0">
                                        <a class="nav-link" data-bs-toggle="tab" href="#kt_vtab_pane_2">Roles and
                                            permissions</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="tab-content" id="myTabContent">


                                <div class="tab-pane fade show active" id="kt_vtab_pane_1" role="tabpanel">
                                    <div class="card-header border-0 cursor-pointer " role="button"
                                        data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details"
                                        aria-expanded="true" aria-controls="kt_account_profile_details" sty>
                                        <div class="card-title m-0">
                                            <h3 class="fw-bolder m-0 align-items-center">User Info</h3>
                                        </div>
                                    </div>
                                    <div id="kt_account_settings_profile_details" class="collapse show">
                                        <form class="form fv-plugins-bootstrap5 fv-plugins-framework"
                                            action="{{ route('admin.updateUser') }}" method="post"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $user->id }}">
                                            <div class="card-body border-top p-9">
                                                <div class="row mb-6">
                                                    <label class="col-lg-4 col-form-label required fw-bold fs-6">User
                                                        Name</label>
                                                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                        <input type="text" name="name"
                                                            class="form-control form-control-lg form-control-solid"
                                                            placeholder="Enter Your Name" value="{{ $user->name }}"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="row mb-6">
                                                    <label class="col-lg-4 col-form-label fw-bold fs-6">Image</label>
                                                    <div class="col-lg-8">
                                                        <div class="image-input image-input-outline"
                                                            data-kt-image-input="true"
                                                            style="background-image: url('{{ asset($user->image) }}') ;background-position: center">
                                                            <div class="image-input-wrapper w-125px h-125px"
                                                                style="background-image: url('{{ asset($user->image) }}') ;background-position: center">
                                                            </div>
                                                            <label
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="change"
                                                                data-bs-toggle="tooltip" title=""
                                                                data-bs-original-title="Change avatar">
                                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                                <input type="file" name="image"
                                                                    accept=".png, .jpg, .jpeg, .svg, .gif">
                                                                <input type="hidden" name="avatar_remove">
                                                            </label>
                                                            <span
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="cancel"
                                                                data-bs-toggle="tooltip" title=""
                                                                data-bs-original-title="Cancel avatar">
                                                                <i class="bi bi-x fs-2"></i>
                                                            </span>
                                                            <span
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="remove"
                                                                data-bs-toggle="tooltip" title=""
                                                                data-bs-original-title="Remove avatar">
                                                                <i class="bi bi-x fs-2"></i>
                                                            </span>
                                                        </div>
                                                        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                                    </div>
                                                </div>
                                                <div class="row mb-6">
                                                    <label class="col-lg-4 col-form-label required fw-bold fs-6">Gender
                                                    </label>
                                                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                        <select class="form-select form-select-solid"
                                                            data-control="select2" data-placeholder="Select an Option"
                                                            data-allow-clear="true" name="gender" required>
                                                            <option value="MALE"
                                                                {{ $user->gender == 'MALE' ? 'selected' : '' }}>Male
                                                            </option>
                                                            <option value="FEMALE"
                                                                {{ $user->gender == 'FEMALE' ? 'selected' : '' }}>Female
                                                            </option>
                                                            <option value="OTHER"
                                                                {{ $user->gender == 'OTHER' ? 'selected' : '' }}>Other
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-6">
                                                    <label
                                                        class="col-lg-4 col-form-label required fw-bold fs-6">Email</label>
                                                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                        <input type="email" name="email"
                                                            class="form-control form-control-lg form-control-solid"
                                                            placeholder="user@example.com" value="{{ $user->email }}"
                                                            required>
                                                    </div>
                                                </div>
                                                <div class="row mb-6">
                                                    <label class="col-lg-4 col-form-label fw-bold fs-6">
                                                        <span class="required">Phone</span>
                                                    </label>
                                                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                        <input type="tel" class="form-control form-control-solid"
                                                            placeholder="9999999999" name="phone" minlength="10"
                                                            maxlength="12" value="{{ $user->phone }}"
                                                            pattern="[6789][0-9]{9}"
                                                            title="Phone Number should start with 6,7,8,9 | Min Length = 10"
                                                            required />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                            <input type="hidden">
                                            <div></div>
                                        </form>
                                    </div>
                                </div>


                                <div class="tab-pane fade" id="kt_vtab_pane_2" role="tabpane1">
                                    <div class="card-header border-0 cursor-pointer " role="button"
                                        data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details"
                                        aria-expanded="true" aria-controls="kt_account_profile_details" sty>
                                        <div class="card-title m-0">
                                            <h3 class="fw-bolder m-0 align-items-center">Roles And Permissions
                                            </h3>
                                        </div>
                                    </div>
                                    <div id="kt_account_settings_profile_details" class="collapse show">
                                        <form class="form fv-plugins-bootstrap5 fv-plugins-framework"
                                            action="{{ route('admin.updateUserRole') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $user->id }}">
                                            <div class="card-body border-top p-9">
                                                <div class="row mb-6">
                                                    <label class="col-lg-4 col-form-label fw-bold fs-6">Change
                                                        Password</label>
                                                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                        <input type="password" name="password"
                                                            class="form-control form-control-lg form-control-solid"
                                                            placeholder="Password" minlength="8">
                                                    </div>
                                                </div>
                                                <div class="row mb-6">
                                                    <label class="col-lg-4 col-form-label fw-bold fs-6">Current
                                                        Role</label>
                                                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                        @foreach ($user->roles as $role)
                                                            <span class="badge badge-primary">
                                                                {{ $role->name }}
                                                            </span>
                                                        @endforeach
                                                    </div>
                                                </div>
                                                <div class="row mb-6">
                                                    <label class="col-lg-4 col-form-label fw-bold fs-6">Change
                                                        Role</label>
                                                    <div class="col-lg-8 fv-row fv-plugins-icon-container">
                                                        <select class="form-select form-select-solid"
                                                            data-control="select2" name="role">
                                                            @foreach ($roles as $role)
                                                                <option @if (in_array($role->id, $user->roles->pluck('id')->toArray())) selected @endif
                                                                    value="{{ $role->id }}">
                                                                    {{ $role->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card-footer d-flex justify-content-end py-6 px-9">
                                                <button type="submit" class="btn btn-primary"
                                                    id="">Update</button>
                                            </div>
                                            <input type="hidden">
                                            <div></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
        </div>
    </div>

    <script type="text/javascript">
        function copyText() {
            let input = document.getElementById('input');
            navigator.clipboard.writeText(input.value);
            console.log(document.getElementById('copy').innerHTML = "<i class='bi bi-check fs-5'></i>");
        }

        $('#plan').click(() => {
            $("#change_plan").toggle(
                function() {
                    $("#change_plan").css({
                        "display": "block"
                    });
                },
                function() {
                    $("#change_plan").css({
                        "display": "hide"
                    });
                }
            );


            console.log("ok")
        })
        $("#dob").flatpickr({
            maxDate: new Date().fp_incr(-2190)
        });
    </script>
@endsection
