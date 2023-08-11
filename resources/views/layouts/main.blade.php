
    <!DOCTYPE html>
    <html lang="en">

    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="./assets/img/favicon.png">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        {{ env('APP_NAME') }} - @yield('title_content')
    </title>
    @include('layouts.css')
    @yield('component_css')
    </head>

    <body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
        <!-- Navbar -->
        @include('layouts.sidebar')
        <!-- / Navbar -->
    <main class="main-content position-relative border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
            <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                @yield("breadcrumb")
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                </div>
                @include('layouts.navbar')
            </div>
            </div>
        </nav>
        @yield('content')
        <!-- End Navbar -->
        <footer class="footer pt-3  ">
            <div class="container-fluid">
                @include('layouts.footer')
            </div>
        </footer>
        </div>
    </main>

    <!-- Core JS -->
    @include('layouts.js')
    @yield('component_js')
    </body>

    </html>