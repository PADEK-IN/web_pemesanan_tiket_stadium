<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets/img/favicon.png') }}" rel="apple-touch-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/fonts/circular-std/style.css') }}" >
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/fonts/flag-icon-css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/datatables/css/dataTables.bootstrap4.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/css/custom.css') }}">
</head>

<body>
    <!-- main wrapper -->
    <main class="dashboard-main-wrapper">

        <!-- navbar -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="{{ route('dashboard') }}"><img src="{{ asset('assets/img/logo2.png') }}" width="170px" alt="Logo"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <div class="d-flex admin-box align-items-center justify-content-center">
                            <p style="font-size: 1.1rem; margin-right:10px; color:black;">{{ Auth::user()->name }}</p>
                        </div>
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{ asset('assets/img/user/'.Auth::user()->image) }}" alt="user-profile" class="user-avatar-lg rounded-circle"></a>
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
                                <a class="nav-link" href="{{ route('event') }}" aria-expanded="false"><i class="far fa-star"></i>Acara</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{ route('transaction') }}" aria-expanded="false"><i class="far fa-gem"></i>Transaksi</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- end left sidebar -->

        <!-- wrapper  -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- pageheader -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            @php
                                $currentPath = Request::path();
                                $firstSegment = explode('/', $currentPath)[0];
                            @endphp
                            <h2 class="pageheader-title">{{ $firstSegment }}</h2>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active"><a href="/dashboard" class="breadcrumb-link">{{ Request::path() }}</a></li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end pageheader -->
                <!-- Error Messages -->
                @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Whoops! Something went wrong.</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @elseif (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
                <!-- Success Message -->
                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @endif
                <!-- content -->
                {{ $slot }}
                <!-- end content -->
            </div>
        </div>
        <!-- end wrapper  -->

    </main>
    <!-- end main wrapper  -->

    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="{{ asset('assets/admin/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
    <!-- bootstap bundle js -->
    <script src="{{ asset('assets/admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- bootstap bundle js -->
    <script src="{{ asset('assets/admin/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <!-- bootstap bundle js -->
    <script src="{{ asset('assets/admin/vendor/bootstrap/js/popper.min.js') }}"></script>
    <!-- slimscroll js -->
    <script src="{{ asset('assets/admin/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
    <!-- Datatable js -->
    <script src="{{ asset('assets/admin/vendor/datatables/js/dataTables.js') }}"></script>
    <!-- Datatable js -->
    <script src="{{ asset('assets/admin/vendor/datatables/js/dataTables.bootstrap4.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('assets/admin/js/main-js.js') }}"></script>
    <script>
        // Fade out alerts after 2 seconds
        document.addEventListener('DOMContentLoaded', function() {
            setTimeout(function() {
                const alerts = document.querySelectorAll('.alert');
                alerts.forEach(function(alert) {
                    alert.style.transition = 'opacity 1s ease';
                    alert.style.opacity = '0';
                    setTimeout(function() {
                        alert.style.display = 'none';
                    }, 1000);
                });
            }, 2500); // 2,5 seconds
        });
        //pagination and search card event
        $(document).ready(function() {
            var pageSize = 6; // Set jumlah card per halaman
            var pageCount = Math.ceil($("#cardContainer .card").length / pageSize);

            // Add pagination buttons
            for (var i = 0; i < pageCount; i++) {
                $("#pagination").append('<li class="page-item"><a href="#" class="page-link">' + (i + 1) + '</a></li>');
            }

            // Show first set of cards
            showPage(1);

            // Handle pagination click
            $("#pagination").on("click", ".page-link", function(e) {
                e.preventDefault();
                var pageNum = parseInt($(this).text());
                showPage(pageNum);
            });

            function showPage(pageNum) {
                $("#cardContainer .card").hide();
                $("#cardContainer .card").slice((pageNum - 1) * pageSize, pageNum * pageSize).show();
            }

            function updatePagination() {
                var pageCount = Math.ceil($("#cardContainer .card:visible").length / pageSize);
                $("#pagination").empty();
                for (var i = 0; i < pageCount; i++) {
                    $("#pagination").append('<li class="page-item"><a href="#" class="page-link">' + (i + 1) + '</a></li>');
                }
            }

            function showPageSearch(pageNum) {
                currentPage = pageNum;
                var cards = $("#cardContainer .card:visible");
                var start = (pageNum - 1) * pageSize;
                var end = pageNum * pageSize;
                cards.hide().slice(start, end).show();
            }

            $("#searchInput").on("input", function() {
                var searchTerm = $(this).val().toLowerCase();
                $("#cardContainer .card").each(function() {
                    var title = $(this).data("title");
                    var description = $(this).data("description");
                    if (title.includes(searchTerm) || description.includes(searchTerm)) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
                updatePagination();
                showPageSearch(1);
            });

        });
    </script>
</body>

</html>
