<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
        <meta charset="utf-8">

        <title>{{ config('app.name', 'Admin') }} | @yield('title')</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

         <!-- BEGIN: Vendor CSS-->
            <link rel="stylesheet" type="text/css" href="{{ asset ('admin/app-assets/vendors/css/vendors.min.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset ('admin/app-assets/vendors/css/weather-icons/climacons.min.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset ('admin/app-assets/fonts/meteocons/style.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset ('admin/app-assets/vendors/css/charts/morris.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset ('admin/app-assets/vendors/css/charts/chartist.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset ('admin/app-assets/vendors/css/charts/chartist-plugin-tooltip.css') }}">
            <!-- END: Vendor CSS-->

            <!-- BEGIN: Theme CSS-->
            <link rel="stylesheet" type="text/css" href="{{ asset ('admin/app-assets/css/bootstrap.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset ('admin/app-assets/css/bootstrap-extended.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset ('admin/app-assets/css/colors.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset ('admin/app-assets/css/components.css') }}">
            <!-- END: Theme CSS-->

            <!-- BEGIN: Page CSS-->
            <link rel="stylesheet" type="text/css" href="{{ asset ('admin/app-assets/css/core/menu/menu-types/vertical-menu-modern.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset ('admin/app-assets/css/core/colors/palette-gradient.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset ('admin/app-assets/fonts/simple-line-icons/style.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset ('admin/app-assets/css/core/colors/palette-gradient.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset ('admin/app-assets/css/pages/timeline.css') }}">
            <link rel="stylesheet" type="text/css" href="{{ asset ('admin/app-assets/css/pages/dashboard-ecommerce.css') }}">
            <!-- END: Page CSS-->

            <!-- BEGIN: Custom CSS-->
            <link rel="stylesheet" type="text/css" href="{{ asset ('admin/assets/css/style.css') }}">
            <!-- END: Custom CSS-->

            {{-- Font --}}
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

        @livewireStyles
</head>
<body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    @include('layouts.inc.admin.navbar')
    @include('layouts.inc.admin.sidebar')

    <div class="app-content content">

        <div class="content-wrapper">
            <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">Admin Admin Panel</h3>
                <div class="row breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper col-12">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a>
                            </li>
                            <li class="breadcrumb-item">
                               @yield('pagepath')
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            @yield('content')
        </div>

    </div>


    <!-- BEGIN: Vendor JS-->
    <script src="{{ asset ('admin/app-assets/vendors/js/vendors.min.js') }}"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="{{ asset ('admin/app-assets/vendors/js/charts/chartist.min.js') }}"></script>
    <script src="{{ asset ('admin/app-assets/vendors/js/charts/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ asset ('admin/app-assets/vendors/js/charts/raphael-min.js') }}"></script>
    <script src="{{ asset ('admin/app-assets/vendors/js/charts/morris.min.js') }}"></script>
    <script src="{{ asset ('admin/app-assets/vendors/js/timeline/horizontal-timeline.js') }}"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="{{ asset ('admin/app-assets/js/core/app-menu.js') }}"></script>
    <script src="{{ asset ('admin/app-assets/js/core/app.js') }}"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="{{ asset ('admin/app-assets/js/scripts/pages/dashboard-ecommerce.js') }}"></script>
    <!-- END: Page JS-->
    @yield('scripts')
    @livewireScripts
</body>
</html>
