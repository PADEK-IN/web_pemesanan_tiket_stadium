<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/fonts/circular-std/style.css') }}" >
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/charts/chartist-bundle/chartist.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/charts/morris-bundle/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/charts/c3charts/c3.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/fonts/flag-icon-css/flag-icon.min.css') }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body>
    <!-- main wrapper -->
    <main class="dashboard-main-wrapper">

        <!-- navbar -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="{{ route('dashboard') }}">TickItNow</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('assets/img/others/avatar-1.jpg') }}" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">{{ Auth::user()->name }}</h5>
                                    <span><i>{{ Auth::user()->email }}</i></span>
                                </div>
                                <a class="dropdown-item" href="{{ route('profile.edit') }}"><i class="fas fa-user mr-2"></i>Profile</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end navbar -->

        <!-- left sidebar -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('dashboard') }}" aria-expanded="false"><i class="fab fa-microsoft"></i>Dashboard</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('dashboard') }}" aria-expanded="false"><i class="far fa-star"></i>Acara</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('dashboard') }}" aria-expanded="false"><i class="far fa-gem"></i>Tiket</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('dashboard') }}" aria-expanded="false"><i class="far fa-money-bill-alt"></i>Transaksi</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('dashboard') }}" aria-expanded="false"><i class="fa fa-fw fa-user-circle"></i>User</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- end left sidebar -->

        <!-- content wrapper  -->
        {{ $slot }}
        <!-- end wrapper  -->

    </main>
    <!-- end main wrapper  -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="{{ asset('assets/admin/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <!-- bootstap bundle js -->
    <script src="{{ asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <!-- slimscroll js -->
    <script src="{{ asset('assets/admin/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('assets/admin/js/main-js.js') }}"></script>
    <!-- chart chartist js -->
    <script src="{{ asset('assets/admin/vendor/charts/chartist-bundle/chartist.min.js') }}"></script>
    <!-- sparkline js -->
    <script src="{{ asset('assets/admin/vendor/charts/sparkline/jquery.sparkline.js') }}"></script>
    <!-- morris js -->
    <script src="{{ asset('assets/admin/vendor/charts/morris-bundle/raphael.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/charts/morris-bundle/morris.js') }}"></script>
    <!-- chart c3 js -->
    <script src="{{ asset('assets/admin/vendor/charts/c3charts/c3.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/charts/c3charts/d3-5.4.0.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/charts/c3charts/C3chartjs.js') }}"></script>
    <script src="{{ asset('assets/admin/js/dashboard-ecommerce.js') }}"></script>
</body>

</html>
