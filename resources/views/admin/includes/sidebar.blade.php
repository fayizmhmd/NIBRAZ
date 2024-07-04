<div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
    <div class="nk-sidebar-element nk-sidebar-head">
        {{-- <div class="nk-sidebar-brand">Safa Group of Companies</div> --}}
        <div class="flex-grow-1 nk-sidebar-brand d-flex align-items-center" >
            <img class="mx-1" src="{{ asset('NibrazImages/nibraz-heading.jpg') }}" style=" width: 220px; "
                alt="logo" />
        </div>
        <div class="nk-menu-trigger me-n2">
            <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu">
                <svg xmlns="http://www.w3.org/2000/svg" style="width: 22px" fill="currentColor" class="bi bi-arrow-left"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                </svg>
            </a>
            <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex"
                data-target="sidebarMenu">
                <svg xmlns="http://www.w3.org/2000/svg" style="width: 22px" fill="currentColor" class="bi bi-list"
                    viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
            </a>
        </div>
    </div>



        <div class="nk-sidebar-element">
            <div class="nk-sidebar-content">
                <div class="nk-sidebar-menu" data-simplebar>
                    <ul class="nk-menu">

                        @can('dashboard')
                            <li class="nk-menu-item ">
                                <a href="{{ route('admin.dashboard') }}" class="nk-menu-link">
                                    <span class="nk-menu-icon">
                                        <em class="icon ni ni-dashboard-fill"></em>
                                    </span>
                                    <span class="nk-menu-text">Dashboard</span>
                                </a>
                            </li>
                        @endcan

                        @can('all_users')
                            <li class="nk-menu-item ">
                                <a href="{{ route('admin.viewUsers') }}" class="nk-menu-link">
                                    <span class="nk-menu-icon">
                                        <em class="icon ni ni-users-fill"></em>
                                    </span>
                                    <span class="nk-menu-text">Users</span>
                                </a>
                            </li>
                        @endcan

                        @can('all_users')
                            <li class="nk-menu-item ">
                                <a href="{{ route('admin.viewProjects') }}" class="nk-menu-link">
                                    <span class="nk-menu-icon">
                                        <em class="icon ni ni-list"></em>
                                    </span>
                                    <span class="nk-menu-text">Project Management</span>
                                </a>
                            </li>
                        @endcan

                        @can('all_users')
                            <li class="nk-menu-item ">
                                <a href="{{ route('admin.viewGallery') }}" class="nk-menu-link">
                                    <span class="nk-menu-icon">
                                        <em class="fas fa-image"></em>
                                    </span>
                                    <span class="nk-menu-text">Gallery</span>
                                </a>
                            </li>
                        @endcan

                        @can('all_users')
                            <li class="nk-menu-item ">
                                <a href="{{ route('admin.viewReviews') }}" class="nk-menu-link">
                                    <span class="nk-menu-icon">
                                        <em class="icon ni ni-text"></em>
                                    </span>
                                    <span class="nk-menu-text">Testimonials</span>
                                </a>
                            </li>
                        @endcan


                        @can('all_users')
                        <li class="nk-menu-item ">
                            <a href="{{ route('admin.viewlogo') }}" class="nk-menu-link">
                                <span class="nk-menu-icon">
                                    <em class="icon ni ni-building"></em>
                                </span>
                                <span class="nk-menu-text">Client Logos</span>
                            </a>
                        </li>
                    @endcan




                        @can('all_users')
                            <li class="nk-menu-item ">
                                <a href="{{ route('admin.viewcontact') }}" class="nk-menu-link">
                                    <span class="nk-menu-icon">
                                        <em class="icon ni ni-mail"></em>
                                    </span>
                                    <span class="nk-menu-text">Contact mail</span>
                                </a>
                            </li>
                        @endcan

                        @can('all_users')
                            <li class="nk-menu-item ">
                                <a href="{{ route('admin.viewsettings') }}" class="nk-menu-link">
                                    <span class="nk-menu-icon">
                                        <em class="icon ni ni-setting"></em>
                                    </span>
                                    <span class="nk-menu-text">Settings</span>
                                </a>
                            </li>
                        @endcan

                        @can('plans')
                        {{-- <li class="nk-menu-item">
                            <a href="{{ route('admin.viewSubscriptions') }}" class="nk-menu-link">
                                <span class="nk-menu-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" style="width: 22px" fill="currentColor"
                                        class="bi bi-card-checklist" viewBox="0 0 16 16">
                                        <path
                                            d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z" />
                                        <path
                                            d="M7 5.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0zM7 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm-1.496-.854a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z" />
                                    </svg>
                                </span>
                                <span class="nk-menu-text">Subscriptions</span>
                            </a>
                        </li> --}}
                        @endcan

                        @can('reports')
                        <li class="nk-menu-item has-sub">
                            <a href="#" class="nk-menu-link nk-menu-toggle">
                                <span class="nk-menu-icon">
                                    <em class="icon ni ni-bar-chart"></em>
                                </span>
                                <span class="nk-menu-text">Report</span>
                            </a>
                            <ul class="nk-menu-sub">
                                <li class="nk-menu-item">
                                    <a href="{{ route('admin.subscriptionReport')}}" class="nk-menu-link">
                                        <span class="nk-menu-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22px" fill="currentColor"
                                                class="bi bi-dot" viewBox="0 0 16 16">
                                                <path d="M8 9.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                            </svg>
                                        </span>
                                        <span class="nk-menu-text">Subscription Report</span>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        @endcan




                    </ul>
                </div>
            </div>
        </div>

</div>
