<!DOCTYPE html>
<!-- =========================================================
* sneat - Bootstrap Dashboard PRO | v2.0.0
==============================================================

* Product Page: https://themeselection.com/item/sneat-dashboard-pro-bootstrap/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->


<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="{{ asset('/assets/dashboard/') }}" data-template="vertical-menu-template" data-style="light">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <title>Demo : Dashboard - Analytics | sneat - Bootstrap Dashboard PRO</title>

    
    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 Admin Dashboard built for developers!">
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/item/sneat-dashboard-pro-bootstrap/">
    
    
    <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <script>(function (w, d, s, l, i) {
        w[l] = w[l] || []; w[l].push({
          'gtm.start':
            new Date().getTime(), event: 'gtm.js'
        }); var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-5DDHKGP');</script>
    <!-- End Google Tag Manager -->
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('{{ asset('/assets/dashboard/img/favicon/favicon.ico') }}') }}">

    <!-- Fonts -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="../../../css2-1?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('/assets/dashboard/vendor/fonts/boxicons.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/dashboard/vendor/fonts/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/dashboard/vendor/fonts/flag-icons.css') }}">

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/dashboard/vendor/css/rtl/core.css') }}" class="template-customizer-core-css">
    <link rel="stylesheet" href="{{ asset('/assets/dashboard/vendor/css/rtl/theme-default.css') }}" class="template-customizer-theme-css">
    <link rel="stylesheet" href="{{ asset('/assets/dashboard/css/demo.css') }}">
    
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('/assets/dashboard/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/dashboard/vendor/libs/typeahead-js/typeahead.css') }}"> 
    <link rel="stylesheet" href="{{ asset('/assets/dashboard/vendor/libs/apex-charts/apex-charts.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/dashboard/vendor/libs/fullcalendar/fullcalendar.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/dashboard/vendor/libs/flatpickr/flatpickr.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/dashboard/vendor/libs/tagify/tagify.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/dashboard/vendor/libs/quill/typography.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/dashboard/vendor/libs/quill/katex.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/dashboard/vendor/libs/quill/editor.css') }}">

    <link rel="stylesheet" href="{{ asset('/assets/dashboard/vendor/libs/select2/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/dashboard/vendor/libs/quill/editor.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/dashboard/vendor/libs/%40form-validation/form-validation.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/dashboard/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/dashboard/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/dashboard/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/dashboard/vendor/libs/select2/select2.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/dashboard/vendor/libs/dropzone/dropzone.css') }}">
<link rel="stylesheet" href="{{ asset('/assets/dashboard/vendor/libs/tagify/tagify.css') }}">
    <!-- Page CSS -->
     @stack('styles')
    

    <!-- Helpers -->
    <script src="{{ asset('/assets/dashboard/vendor/js/helpers.js') }}"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="{{ asset('/assets/dashboard/vendor/js/template-customizer.js') }}"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('/assets/dashboard/js/config.js') }}"></script>
    
</head>

<body>

  
  <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  
  <!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar  ">
  <div class="layout-container">

    
    




<!-- Menu -->
@include('dashboard.layouts.sidebar')
<!-- / Menu -->

    

    <!-- Layout container -->
    <div class="layout-page">
      
      



<!-- Navbar -->
@include('dashboard.layouts.navbar')
<!-- / Navbar -->

      

      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        {{$slot}}
        <!-- / Content -->

          
          

<!-- Footer -->
@include('dashboard.layouts.footer')
<!-- / Footer -->

          
          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      </div>
      <!-- / Layout page -->
    </div>

    
    
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    
    
    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
    
  </div>
  <!-- / Layout wrapper -->

  
  <!-- <div class="buy-now">
    <a href="https://themeselection.com/item/sneat-dashboard-pro-bootstrap/" target="_blank" class="btn btn-danger btn-buy-now">Buy Now</a>
  </div> -->
  

  

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  
  <script src="{{ asset('/assets/dashboard/vendor/libs/jquery/jquery.js') }}"></script>
  <script src="{{ asset('/assets/dashboard/vendor/libs/popper/popper.js') }}"></script>
  <script src="{{ asset('/assets/dashboard/vendor/js/bootstrap.js') }}"></script>
  <script src="{{ asset('/assets/dashboard/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
  <script src="{{ asset('/assets/dashboard/vendor/libs/hammer/hammer.js') }}"></script>
  <script src="{{ asset('/assets/dashboard/vendor/libs/i18n/i18n.js') }}"></script>
  <script src="{{ asset('/assets/dashboard/vendor/libs/typeahead-js/typeahead.js') }}"></script>
  <script src="{{ asset('/assets/dashboard/vendor/js/menu.js') }}"></script>
  
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="{{ asset('/assets/dashboard/vendor/libs/apex-charts/apexcharts.js') }}"></script>
  <script src="{{ asset('/assets/dashboard/vendor/libs/fullcalendar/fullcalendar.js') }}"></script>
<script src="{{ asset('/assets/dashboard/vendor/libs/%40form-validation/popular.js') }}"></script>
<script src="{{ asset('/assets/dashboard/vendor/libs/%40form-validation/bootstrap5.js') }}"></script>
<script src="{{ asset('/assets/dashboard/vendor/libs/%40form-validation/auto-focus.js') }}"></script>
<script src="{{ asset('/assets/dashboard/vendor/libs/select2/select2.js') }}"></script>
<script src="{{ asset('/assets/dashboard/vendor/libs/moment/moment.js') }}"></script>
<script src="{{ asset('/assets/dashboard/vendor/libs/flatpickr/flatpickr.js') }}"></script>
<script src="{{ asset('/assets/dashboard/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
<script src="{{ asset('/assets/dashboard/vendor/libs/select2/select2.js') }}"></script>  
<script src="{{ asset('/assets/dashboard/vendor/libs/quill/katex.js') }}"></script>
<script src="{{ asset('/assets/dashboard/vendor/libs/quill/quill.js') }}"></script>
<script src="{{ asset('/assets/dashboard/vendor/libs/dropzone/dropzone.js') }}"></script>
<script src="{{ asset('/assets/dashboard/vendor/libs/jquery-repeater/jquery-repeater.js') }}"></script>
<!-- Main JS -->
  <script src="{{ asset('/assets/dashboard/js/main.js') }}"></script>
  

  <!-- Page JS -->
  <script src="{{ asset('/assets/dashboard/js/dashboards-analytics.js') }}"></script>
  @stack('scripts')
</body>

</html>

<!-- beautify ignore:end -->