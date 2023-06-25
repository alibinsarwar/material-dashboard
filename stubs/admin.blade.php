<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">


  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.js">

  <!-- Favicons -->
  <link href="{{ asset('admin_theme') }}/assets/img/favicon.png" rel="icon">
  <link href="{{ asset('admin_theme') }}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('admin_theme') }}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('admin_theme') }}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ asset('admin_theme') }}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('admin_theme') }}/{{ asset('admin_theme') }}/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="{{ asset('admin_theme') }}/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="{{ asset('admin_theme') }}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{ asset('admin_theme') }}/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('admin_theme') }}/assets/css/style.css" rel="stylesheet">
  <link href="{{ asset('admin_theme') }}/assets/css/dropify.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    @yield('css')
</head>

<body class="">
    <div class="wrapper ">
        @include('admin.components.sidebar')
        <div class="main-panel">
            <!-- Navbar -->
            @include('admin.components.navbar')
            <!-- End Navbar -->
            <div class="content">
                <div class="content">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>


    <link src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></link>
      <!-- Vendor JS Files -->
  <script src="{{ asset('admin_theme') }}/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="{{ asset('admin_theme') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ asset('admin_theme') }}/assets/vendor/chart.js/chart.min.js"></script>
  <script src="{{ asset('admin_theme') }}/assets/vendor/echarts/echarts.min.js"></script>
  <script src="{{ asset('admin_theme') }}/assets/vendor/quill/quill.min.js"></script>
  <script src="{{ asset('admin_theme') }}/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="{{ asset('admin_theme') }}/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="{{ asset('admin_theme') }}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('admin_theme') }}/assets/js/main.js"></script>

</body>

</html>
