<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="description" content="GETAFIXMD | Dashboard">
    <meta name="author" content="Howin Cloud">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    @php
        $path = asset('/');
    @endphp
    <link rel="icon" type="image/x-icon" href="{{ $path }}finnishimages\finnish-emblem.png">
    <link rel="stylesheet" href="{{ $path }}assets/css/dashlitee5ca.css">
    <link id="skin-default" rel="stylesheet" href="{{ $path }}assets/css/themee5ca.css">
</head>


<body class="nk-body bg-white npc-default pg-auth user-select-none">
    <div class="nk-app-root">
        <div class="nk-main ">
            <div class="nk-wrap nk-wrap-nosidebar">
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                        {{-- <div class="brand-logo pb-4 text-center h1 fw-bold">Safa Group</div> --}}

                        <div class="brand-logo text-center fw-bold">
                            <img class="mx-1" src="{{ asset('finnishimages/finnish-logo.jpg') }}"
                                style="width:75%;object-fit:cover" alt="logo" />
                        </div>
                        <div class="card">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">

                                    </div>
                                </div>
                                <form method="POST" action="{{ route('do.login')}}" class="signin-form">
                                    @csrf
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="default-01">Email </label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <input type="email" class="form-control form-control-lg"
                                                placeholder="Email" id="email" class="block mt-1 w-full"
                                                type="email" name="email" :value="old('email')" required autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password" :value="__('Password')">Password
                                            </label>
                                        </div>
                                        <div class="form-control-wrap">
                                            <input type="password" class="form-control form-control-lg"
                                                placeholder="Password" id="password" class="block mt-1 w-full"
                                                name="password" required autocomplete="current-password">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block  colour-gradient">{{ __('Log in') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="nk-footer nk-auth-footer-full">
                        <div class="container-fluid">
                            <div class="nk-footer-wrap">
                                <div class="nk-footer-copyright"> © 2024 FINNISHGLOBALSCHOOL. Powered By <a
                                        href="https://howincloud.com" target="_blank"
                                        class="text-dark text-hover-dark me-2" style="  font-weight: 700">Howin<span
                                            style="color: red;  font-weight: 700">Cloud</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('login_asset/js/jquery.min.js') }}"></script>
    <script src="{{ asset('login_asset/js/popper.js') }}"></script>
    <script src="{{ asset('login_asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('login_asset/js/main.js') }}"></script>
</body>

</html>
