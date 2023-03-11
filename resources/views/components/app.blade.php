<!DOCTYPE html>
<html lang="en">
<head><!--begin::Help drawer toggle-->
    <meta charset=utf-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <meta name="description" content="{{ $description ?? site('description') }}">
    <meta name="keywords" content="{{ $keywords ?? '' }}">
    <meta name="author" content="Newton Job - 07011227815">
    <meta name=CreativeLayers content=ATFN>
    <meta property="og:site_name" content="{{ config('app.name') }}"/>
    <meta property="og:title" content="{{ $title ?? '' }}"/>
    <meta property="og:description" content="{{ $description ?? '' }}"/>
    <meta property="og:image" content="{{ $image ?? '' }}"/>
    <title>{{ $title ?? config('app.name') }}</title>
    <meta property="og:locale" content="en_US"/>

    <!--Pagination Stylesheet-->
{{--    <link rel=stylesheet href="{{ asset('css/style.css') }}">--}}

    <!--Bensu favicon-->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/img/logo/favicon.png') }}">
    <link rel="shortcut icon" type="image/png" sizes="16x16" href="{{ asset('/img/logo/favicon.png') }}">
    <link rel="canonical" href="index.html"/>

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
    <!--end::Fonts-->

    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('admin/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <!--end::Vendor Stylesheets-->

    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('admin/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin/css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <!--end::Global Stylesheets Bundle-->
    <!--jquery scripts-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <!--Begin::Google Tag Manager -->
    <script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');
    </script>
    <!--End::Google Tag Manager -->
</head>
<!--end::Head-->

<!--begin::Body-->
<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true"
      data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true"
      data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default"
>
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <!--end::Theme mode setup on page load-->
    <!--Begin::Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
                style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!--End::Google Tag Manager (noscript) -->
    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">
            <x-app.topbar />
            <!--begin::Wrapper-->
            <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">
                <x-app.sidebar />
                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">

                    {{ $slot }}

                    <!--begin::Footer-->
                    <div id="kt_app_footer" class="app-footer ">
                        <!--begin::Footer container-->
                        <div class="app-container  container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3 ">
                            <!--begin::Copyright-->
                            <div class="text-dark order-2 order-md-1">
                                <span class="text-muted fw-semibold me-1">2023&copy;</span>
                                <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Bensu</a>
                            </div>
                            <!--end::Copyright-->
                            <!--begin::Menu-->
                            <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                                <li class="menu-item">
                                    <a href="" target="_blank" class="menu-link px-2">About</a>
                                </li>
                                <li class="menu-item">
                                    <a href="" target="_blank" class="menu-link px-2">Support</a>
                                </li>
                                <li class="menu-item">
                                    <a href="" target="_blank" class="menu-link px-2">Purchase</a>
                                </li>
                            </ul>
                            <!--end::Menu-->
                        </div>
                        <!--end::Footer container-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end:::Main-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::App-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"/>
                <path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor"/>
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->

    <!--begin::Javascript-->
    <script>
        var hostUrl = "/keen/demo1/{{ asset('admin/') }}";
    </script>

    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ asset('admin/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('admin/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->

    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('admin/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js') }}"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js') }}"></script>
    <script src="https://cdn.amcharts.com/lib/5/percent.js') }}"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js') }}"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js') }}"></script>
    <script src="https://cdn.amcharts.com/lib/5/map.js') }}"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js') }}"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js') }}"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js') }}"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js') }}"></script>
    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js') }}"></script>
    <script src="{{ asset('admin/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('admin/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('admin/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('admin/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('admin/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('admin/js/custom/utilities/modals/create-campaign.js') }}"></script>
    <script src="{{ asset('admin/js/custom/utilities/modals/users-search.js') }}"></script>
    <!--end::Custom Javascript-->
    <!--begin::Custom Javascript(used for products.index view only)-->
    <script src="{{ asset('admin/js/custom/apps/ecommerce/catalog/products.js') }}"></script>
    <!--end::Custom Javascript-->
    <!--begin::Custom Javascript(used for products.create view only)-->
    <script src="{{ asset('admin/js/custom/apps/ecommerce/catalog/save-product.js') }}"></script>
    <!--end::Custom Javascript-->
    <!--begin::Custom Javascript(used for categories.create view only)-->
    <script src="{{ asset('admin/js/custom/apps/ecommerce/catalog/save-category.js') }}"></script>
    <!--end::Custom Javascript-->
    <!--begin::Custom Javascript(used for categories.index view only)-->
    <script src="{{ asset('admin/js/custom/apps/ecommerce/catalog/categories.js') }}"></script>
    <!--end::Custom Javascript-->

    <!--end::Javascript-->
</body>
<!--end::Body-->
</html>
