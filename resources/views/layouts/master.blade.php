<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />

    {{-- Summernote CSS Link --}}
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

    <link rel="stylesheet" href="//cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/dataTables.bootstrap5.min.css">

    <style>
        .dataTables_wrapper .dataTables_paginate_button{
            padding: 0px !important;
            margin: 0px !important;
        }
        div.dataTables_wrapper div.dataTables_length select{
            width: 50% !important;
        }
    </style>


</head>
<body>


    @include('layouts.inc.admin-navbar')

    <div id="layoutSidenav">
        @include('layouts.inc.admin-sidebar')

        <div id="layoutSidenav_content">
            <main>
                    @yield('content')
            </main>
            @include('layouts.inc.admin-footer')
        </div>
    </div>

        <script src="{{ asset('assets/js/jquery-3.6.0.min.js')  }}"></script>


    <script src="{{ asset('asset/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('asset/js/scripts.js') }}"></script>

    {{-- Summernote CSS Link --}}
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#ySummernote").summernote({
                height: 150,
            });

            $('.dropdown-toggle').dropdown();
        });
    </script>

        <script src="//cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.2/js/dataTables.bootstrap5.min.js"></script>

        <script>
                        $(document).ready( function () {
                $('#myDataTable').DataTable();
            } );
        </script>

        @yield('scripts')

</body>
</html>
