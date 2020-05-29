<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PADI - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="{{ url('font/iconsmind-s/css/iconsminds.css') }}" />
    <link rel="stylesheet" href="{{ url('font/simple-line-icons/css/simple-line-icons.css') }}" />
    <link rel="stylesheet" href="{{ url('css/vendor/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ url('css/vendor/bootstrap.rtl.only.min.css') }}" />
    <link rel="stylesheet" href="{{ url('css/vendor/component-custom-switch.min.css') }} " />
    <link rel="stylesheet" href="{{ url('css/vendor/perfect-scrollbar.css') }} " />
    <link rel="stylesheet" href="{{ url('css/main.css') }}" />
    <link rel="stylesheet" href="{{ url('css/dore.light.purple.min.css') }}" />
    {{-- select 2 --}}
    <link rel="stylesheet" href="{{ url('css/vendor/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ url('css/vendor/select2-bootstrap.min.css') }}" />
    {{-- datepicker --}}
    <link rel="stylesheet" href="{{ url('css/vendor/bootstrap-datepicker3.min.css') }}" />
    {{-- Load CSS --}}
    @yield('css')
    {{-- End Load CSS --}}

</head>

<body id="app-container" class="menu-default show-spinner">
    {{-- <body id="app-container" class="menu-default"> --}}
    <!-- Navbar -->
    @include('navbar')
    <!-- End Navbar -->

    <!-- Menu -->
    @include('menu')
    <!-- End Menu -->
    <main>
        @yield('content')
    </main>

    <footer class="page-footer">
        <div class="footer-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <p class="mb-0 text-muted">Study Board 2020</p>
                    </div>
                    <div class="col-sm-6 d-none d-sm-block">
                        <ul class="breadcrumb pt-0 pr-0 float-right">
                            <li class="breadcrumb-item mb-0">
                                <a href="#" class="btn-link">Peduli Awam Digital</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    {{-- Load JS --}}
    <script src="{{ url('js/vendor/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ url('js/vendor/bootstrap.bundle.min.js') }} "></script>
    <script src="{{ url('js/vendor/perfect-scrollbar.min.js') }} "></script>
    <script src="{{ url('js/vendor/mousetrap.min.js') }} "></script>
    <script src="{{ url('js/dore.script.js') }}"></script>
    <script src="{{ url('js/scripts.single.theme.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.cookie.js') }}"></script>
    <script src="{{ asset('js/vendor/moment.min.js') }}"></script>
    {{-- sweet alert for notification --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    {{-- select2 --}}
    <script src="{{ url('js/vendor/select2.full.js')}}"></script>
    <script src="{{ url('js/dore-plugins/select.from.library.js') }}"></script>

    {{-- datepicker --}}
    <script src="{{ url('js/vendor/bootstrap-datepicker.js') }}"></script>
    <script src="{{ url('js/global.js') }}"></script>
    <script src="{{ asset('js/helpers/ajax_helper.js') }}"></script>
    <script src="{{ asset('js/helpers/notify.js') }}"></script>

    <input type="hidden" name="" id="api_url" value="{{ env('API_URL') }}">
    @yield('js')
    {{-- End Load JS --}}

</body>

</html>