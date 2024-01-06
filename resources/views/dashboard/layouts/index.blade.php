<!--
=========================================================
* Material Dashboard 2 - v3.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" type="image/png" href="{{ asset('img/logo.png') }}">
  <meta name="robots" content="noindex">
  <meta name="googlebot" content="noindex">
  @yield('externalcss')
  @vite(['resources/js/app.js'])
  <title>
    Admin | Dashboard
  </title>
  <!--     Fonts and icons     -->
  <!-- Nucleo Icons -->
  <link href="{{ asset('css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('css/material-dashboard.css') }}" rel="stylesheet" />
  <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>

<body class="g-sidenav-show bg-gray-200">
  @include('dashboard.partials.sidebar')
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    @include('dashboard.partials.navbar')
    <!-- End Navbar -->
    @yield('content')
  </main>
  <!--   Core JS Files   -->
  <script src="https://kit.fontawesome.com/e1744d5724.js" crossorigin="anonymous"></script>
  <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
  <script src="{{ asset('js/popper.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/perfect-scrollbar.min.js') }}"></script>
  <script src="{{ asset('js/smooth-scrollbar.min.js') }}"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('js/material-dashboard.min.js') }}"></script>
  @yield('scriptjs')
</body>

</html>