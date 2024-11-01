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

<html
    lang="en"
    class="light-style layout-wide customizer-hide"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="{{assets('public/assets/dashboard/"
    data-template="vertical-menu-template"
    data-style="light"
>
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
        />

        <title>
            Demo : Login Basic - Pages | sneat - Bootstrap Dashboard PRO
        </title>

        <meta
            name="description"
            content="Most Powerful &amp; Comprehensive Bootstrap 5 Admin Dashboard built for developers!"
        />
        <meta
            name="keywords"
            content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5"
        />
        <!-- Canonical SEO -->
        <link
            rel="canonical"
            href="https://themeselection.com/item/sneat-dashboard-pro-bootstrap/"
        />

        <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
        <script>
            (function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    "gtm.start": new Date().getTime(),
                    event: "gtm.js",
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != "dataLayer" ? "&l=" + l : "";
                j.async = true;
                j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, "script", "dataLayer", "GTM-5DDHKGP");
        </script>
        <!-- End Google Tag Manager -->

        <!-- Favicon -->
        <link
            rel="icon"
            type="image/x-icon"
            href="{{assets('public/assets/dashboard/img/favicon/favicon.ico')}}"
        />

        <!-- Fonts -->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link
            rel="preconnect"
            href="https://fonts.gstatic.com"
            crossorigin=""
        />
        <link
            href="../../../css2-1?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
            rel="stylesheet"
        />

        <!-- Icons -->
        <link
            rel="stylesheet"
            href="{{assets('public/assets/dashboard/vendor/fonts/boxicons.css')}}"
        />
        <link
            rel="stylesheet"
            href="{{assets('public/assets/dashboard/vendor/fonts/fontawesome.css')}}"
        />
        <link
            rel="stylesheet"
            href="{{assets('public/assets/dashboard/vendor/fonts/flag-icons.css')}}"
        />

        <!-- Core CSS -->
        <link
            rel="stylesheet"
            href="{{assets('public/assets/dashboard/vendor/css/rtl/core.css')}}"
            class="template-customizer-core-css"
        />
        <link
            rel="stylesheet"
            href="{{assets('public/assets/dashboard/vendor/css/rtl/theme-default.css')}}"
            class="template-customizer-theme-css"
        />
        <link rel="stylesheet" href="{{assets('public/assets/dashboard/css/demo.css')}}" />

        <!-- Vendors CSS -->
        <link
            rel="stylesheet"
            href="{{assets('public/assets/dashboard/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}"
        />
        <link
            rel="stylesheet"
            href="{{assets('public/assets/dashboard/vendor/libs/typeahead-js/typeahead.css')}}"
        />
        <!-- Vendor -->
        <link
            rel="stylesheet"
            href="{{assets('public/assets/dashboard/vendor/libs/%40form-validation/form-validation.css')}}"
        />

        <!-- Page CSS -->
        <!-- Page -->
        <link
            rel="stylesheet"
            href="{{assets('public/assets/dashboard/vendor/css/pages/page-auth.css')}}"
        />

        <!-- Helpers -->
        <script src="{{assets('public/assets/dashboard/vendor/js/helpers.js')}}"></script>
        <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
        <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
        <script src="{{assets('public/assets/dashboard/vendor/js/template-customizer.js')}}"></script>
        <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
        <script src="{{assets('public/assets/dashboard/js/config.js')}}"></script>
    </head>

    <body>
        <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
        <noscript
            ><iframe
                src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP"
                height="0"
                width="0"
                style="display: none; visibility: hidden"
            ></iframe
        ></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <!-- Content -->

        {{ $slot }}

        <!-- / Content -->

        <!-- Core JS -->
        <!-- build:js assets/vendor/js/core.js -->

        <script src="{{assets('public/assets/dashboard/vendor/libs/jquery/jquery.js')}}"></script>
        <script src="{{assets('public/assets/dashboard/vendor/libs/popper/popper.js')}}"></script>
        <script src="{{assets('public/assets/dashboard/vendor/js/bootstrap.js')}}"></script>
        <script src="{{assets('public/assets/dashboard/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
        <script src="{{assets('public/assets/dashboard/vendor/libs/hammer/hammer.js')}}"></script>
        <script src="{{assets('public/assets/dashboard/vendor/libs/i18n/i18n.js')}}"></script>
        <script src="{{assets('public/assets/dashboard/vendor/libs/typeahead-js/typeahead.js')}}"></script>
        <script src="{{assets('public/assets/dashboard/vendor/js/menu.js')}}"></script>

        <!-- endbuild -->

        <!-- Vendors JS -->
        <script src="{{assets('public/assets/dashboard/vendor/libs/%40form-validation/popular.js')}}"></script>
        <script src="{{assets('public/assets/dashboard/vendor/libs/%40form-validation/bootstrap5.js')}}"></script>
        <script src="{{assets('public/assets/dashboard/vendor/libs/%40form-validation/auto-focus.js')}}"></script>

        <!-- Main JS -->
        <script src="{{assets('public/assets/dashboard/js/main.js')}}"></script>

        <!-- Page JS -->
        <script src="{{assets('public/assets/dashboard/js/pages-auth.js')}}"></script>
    </body>
</html>

<!-- beautify ignore:end -->
