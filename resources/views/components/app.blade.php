<!DOCTYPE html>
<html lang="en">
<head>
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
    <title></title>
    <meta property="og:locale" content="en_US"/>
    <!--Bensu favicon-->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/img/logo/favicon.png') }}">
    <link rel="shortcut icon" type="image/png" sizes="16x16" href="{{ asset('/img/logo/favicon.png') }}">
    <link rel="canonical" href="index.html"/>
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/><!--end::Fonts-->

    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('admin/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <!--end::Vendor Stylesheets-->


    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('admin/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin/css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <!--end::Global Stylesheets Bundle-->

    <!--Begin::Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
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
        })(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');</script>
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
                                <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
                            </div>
                            <!--end::Copyright-->
                            <!--begin::Menu-->
                            <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                                <li class="menu-item">
                                    <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                                </li>
                                <li class="menu-item">
                                    <a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
                                </li>
                                <li class="menu-item">
                                    <a href="https://themes.getbootstrap.com/product/keen-the-ultimate-bootstrap-admin-theme/" target="_blank" class="menu-link px-2">Purchase</a>
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
    <!--begin::App layout builder-->
    <div id="kt_app_layout_builder" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="app-settings" data-kt-drawer-activate="true"
        data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'300px', 'lg': '380px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_app_layout_builder_toggle" data-kt-drawer-close="#kt_app_layout_builder_close"
    >
        <!--begin::Card-->
        <div class="card border-0 shadow-none rounded-0 w-100">
            <!--begin::Card header-->
            <div class="card-header bgi-position-y-bottom bgi-position-x-end bgi-size-cover bgi-no-repeat rounded-0 border-0 py-4"
                id="kt_app_layout_builder_header" style="background-image:url('{{ asset('admin/media/misc/layout/header-bg.jpg') }}')"
            >
                <!--begin::Card title-->
                <h3 class="card-title fs-3 fw-bold text-white flex-column m-0">
                    Keen Builder
                    <small class="text-white opacity-50 fs-7 fw-semibold pt-1">Get your product deeply customized</small>
                </h3>
                <!--end::Card title-->
                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm btn-icon bg-white bg-opacity-25 btn-color-white p-0 w-20px h-20px rounded-1" id="kt_app_layout_builder_close">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor"/>
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"/>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body position-relative" id="kt_app_layout_builder_body">
                <!--begin::Content-->
                <div id="kt_app_settings_content" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true" data-kt-scroll-height="auto"
                     data-kt-scroll-wrappers="#kt_app_layout_builder_body" data-kt-scroll-dependencies="#kt_app_layout_builder_header, #kt_app_layout_builder_footer" data-kt-scroll-offset="5px"
                >
                    <!--begin::Form-->
                    <form class="form" method="POST" id="kt_app_layout_builder_form" action="/keen/demo1/index.php">
                        <input type="hidden" id="kt_app_layout_builder_action" name="layout-builder[action]"/>
                        <!--begin::Card body-->
                        <div class="card-body p-0">
                            <!--begin::Form group-->
                            <div class="form-group">
                                <!--begin::Heading-->
                                <div class="mb-6">
                                    <h4 class="fw-bold text-dark">Theme Mode</h4>
                                    <div class="fw-semibold text-muted fs-7 d-block lh-1">
                                        Enjoy Dark & Light modes.
                                        <a class="fw-semibold" href="../../html/keen/docs/getting-started/dark-mode.html"
                                           target="_blank">See docs</a>
                                    </div>
                                </div>
                                <!--end::Heading-->
                                <!--begin::Options-->
                                <div class="row" data-kt-buttons="true"
                                     data-kt-buttons-target=".form-check-image,.form-check-input">
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Option-->
                                        <label class="form-check-image form-check-success">
                                            <!--begin::Image-->
                                            <div class="form-check-wrapper">
                                                <img src="{{ asset('admin/media/misc/layout/demo1-light.png') }}" class="mw-100" alt=""/>
                                            </div>
                                            <!--end::Image-->
                                            <!--begin::Check-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm form-check-success">
                                                <input class="form-check-input" type="radio" value="light" name="theme_mode"
                                                       id="kt_layout_builder_theme_mode_light"/>
                                                <!--begin::Label-->
                                                <div class="form-check-label text-gray-700">
                                                    Light
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Check-->
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Option-->
                                        <label class="form-check-image form-check-success">
                                            <!--begin::Image-->
                                            <div class="form-check-wrapper">
                                                <img src="{{ asset('admin/media/misc/layout/demo1-dark.png') }}" class="mw-100" alt=""/>
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Check-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm form-check-success">
                                                <input class="form-check-input" type="radio" value="dark" name="theme_mode"
                                                       id="kt_layout_builder_theme_mode_dark"/>

                                                <!--begin::Label-->
                                                <div class="form-check-label text-gray-700">
                                                    Dark
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Check-->
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Col-->

                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Form group-->

                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-5"></div>
                            <!--end::Separator-->

                            <!--begin::Form group-->
                            <div class="form-group d-flex flex-stack">
                                <!--begin::Heading-->
                                <div class="d-flex flex-column">
                                    <h4 class="fw-bold text-dark">RTL Mode</h4>
                                    <div class="fs-7 fw-semibold text-muted">
                                        Change Language Direction.

                                        <a class="fw-semibold" href="../../html/keen/docs/getting-started/rtl.html"
                                           target="_blank">See docs</a>
                                    </div>
                                </div>
                                <!--end::Heading-->

                                <!--begin::Option-->
                                <div class="d-flex justify-content-end">
                                    <!--begin::Check-->
                                    <div
                                        class="form-check form-check-custom form-check-solid form-check-success form-switch">
                                        <input type="hidden" value="false"
                                               name="layout-builder[layout][app][general][rtl]"/>
                                        <input class="form-check-input w-45px h-30px" type="checkbox" value="true"
                                               name="layout-builder[layout][app][general][rtl]" id="kt_builder_rtl"/>

                                        <!--begin::Label-->
                                        <label class="form-check-label" for="kt_builder_rtl"></label>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Check-->
                                </div>
                                <!--end::Option-->
                            </div>
                            <!--end::Form group-->

                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-5"></div>
                            <!--end::Separator-->

                            <!--begin::Form group-->
                            <div class="form-group">
                                <!--begin::Heading-->
                                <div class="d-flex flex-column mb-4">
                                    <h4 class="fw-bold text-dark">Width Mode</h4>
                                    <div class="fs-7 fw-semibold text-muted">Page width options</div>
                                </div>
                                <!--end::Heading-->

                                <!--begin::Options-->
                                <div class="d-flex">
                                    <!--begin::Check-->
                                    <div
                                        class="form-check form-check-custom form-check-success form-check-solid form-check-sm me-5">
                                        <input class="form-check-input" type="radio" checked value="default"
                                               id="kt_builder_page_width_default"
                                               name="layout-builder[layout][app][general][page-width]"/>

                                        <!--begin::Label-->
                                        <label class="form-check-label text-gray-700 fw-bold text-nowrap"
                                               for="kt_builder_page_width_default">
                                            Default </label>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Check-->
                                    <!--begin::Check-->
                                    <div
                                        class="form-check form-check-custom form-check-success form-check-solid form-check-sm me-5">
                                        <input class="form-check-input" type="radio" value="fluid"
                                               id="kt_builder_page_width_fluid"
                                               name="layout-builder[layout][app][general][page-width]"/>

                                        <!--begin::Label-->
                                        <label class="form-check-label text-gray-700 fw-bold text-nowrap"
                                               for="kt_builder_page_width_fluid">
                                            Fluid </label>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Check-->
                                    <!--begin::Check-->
                                    <div
                                        class="form-check form-check-custom form-check-success form-check-solid form-check-sm me-5">
                                        <input class="form-check-input" type="radio" value="fixed"
                                               id="kt_builder_page_width_fixed"
                                               name="layout-builder[layout][app][general][page-width]"/>

                                        <!--begin::Label-->
                                        <label class="form-check-label text-gray-700 fw-bold text-nowrap"
                                               for="kt_builder_page_width_fixed">
                                            Fixed </label>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Check-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Form group-->

                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-5"></div>
                            <!--end::Separator-->

                            <!--begin::Form group-->
                            <div class="form-group">
                                <!--begin::Heading-->
                                <div class="d-flex flex-column mb-4">
                                    <h4 class="fw-bold text-dark">Menu Icon</h4>
                                    <div class="fs-7 fw-semibold text-muted">Sidebar menu icon options</div>
                                </div>
                                <!--end::Heading-->

                                <!--begin::Options-->
                                <div class="d-flex">
                                    <!--begin::Check-->
                                    <div
                                        class="form-check form-check-custom form-check-success form-check-solid form-check-sm me-5">
                                        <input class="form-check-input" type="radio" checked value="svg"
                                               id="kt_builder_icon_svg"
                                               name="layout-builder[layout][app][sidebar][default][menu][icon-type]"/>

                                        <!--begin::Label-->
                                        <label class="form-check-label text-gray-700 fw-bold text-nowrap"
                                               for="kt_builder_icon_svg">
                                            SVG Duotone </label>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Check-->
                                    <!--begin::Check-->
                                    <div
                                        class="form-check form-check-custom form-check-success form-check-solid form-check-sm me-5">
                                        <input class="form-check-input" type="radio" value="font" id="kt_builder_icon_font"
                                               name="layout-builder[layout][app][sidebar][default][menu][icon-type]"/>

                                        <!--begin::Label-->
                                        <label class="form-check-label text-gray-700 fw-bold text-nowrap"
                                               for="kt_builder_icon_font">
                                            Font Icons </label>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Check-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Form group-->

                            <!--begin::Separator-->
                            <div class="separator separator-dashed my-5"></div>
                            <!--end::Separator-->

                            <!--begin::Form group-->
                            <div class="form-group">
                                <!--begin::Heading-->
                                <div class="mb-6">
                                    <h4 class="fw-semibold text-dark">Layouts</h4>
                                    <span class="fw-semibold text-muted fs-7 lh-1">
                    4 main layouts.
                </span>
                                    <a href="layout-builder.html" class="fw-semibold text-primary">More layout options</a>
                                </div>
                                <!--end::Heading-->

                                <!--begin::Options-->
                                <div class="row gy-3" data-kt-buttons="true"
                                     data-kt-buttons-target=".form-check-image:not(.disabled),.form-check-input:not([disabled])">
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Option-->
                                        <label class="form-check-image form-check-success active  active">
                                            <!--begin::Image-->
                                            <div class="form-check-wrapper">
                                                <img src="{{ asset('admin/media/misc/layout/dark-sidebar.png') }}" class="mw-100" alt=""/>
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Check-->
                                            <div
                                                class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
                                                <input class="form-check-input" type="radio" checked value="dark-sidebar"
                                                       name="layout-builder[layout][app][general][layout]"/>

                                                <!--begin::Label-->
                                                <div class="form-check-label text-gray-700">
                                                    Dark Sidebar
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Check-->
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Option-->
                                        <label class="form-check-image form-check-success   ">
                                            <!--begin::Image-->
                                            <div class="form-check-wrapper">
                                                <img src="{{ asset('admin/media/misc/layout/light-sidebar.png') }}" class="mw-100"
                                                     alt=""/>
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Check-->
                                            <div
                                                class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
                                                <input class="form-check-input" type="radio" value="light-sidebar"
                                                       name="layout-builder[layout][app][general][layout]"/>

                                                <!--begin::Label-->
                                                <div class="form-check-label text-gray-700">
                                                    Light Sidebar
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Check-->
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Option-->
                                        <label class="form-check-image form-check-success   ">
                                            <!--begin::Image-->
                                            <div class="form-check-wrapper">
                                                <img src="{{ asset('admin/media/misc/layout/dark-header.png') }}" class="mw-100" alt=""/>
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Check-->
                                            <div
                                                class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
                                                <input class="form-check-input" type="radio" value="dark-header"
                                                       name="layout-builder[layout][app][general][layout]"/>

                                                <!--begin::Label-->
                                                <div class="form-check-label text-gray-700">
                                                    Dark Header
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Check-->
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Option-->
                                        <label class="form-check-image form-check-success   ">
                                            <!--begin::Image-->
                                            <div class="form-check-wrapper">
                                                <img src="{{ asset('admin/media/misc/layout/light-header.png') }}" class="mw-100" alt=""/>
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Check-->
                                            <div
                                                class="form-check form-check-custom form-check-success form-check-sm form-check-solid">
                                                <input class="form-check-input" type="radio" value="light-header"
                                                       name="layout-builder[layout][app][general][layout]"/>

                                                <!--begin::Label-->
                                                <div class="form-check-label text-gray-700">
                                                    Light Header
                                                </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Check-->
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Col-->

                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Form group-->
                        </div>
                        <!--end::Card body-->                </form>
                    <!--end::Form-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Card body-->

            <!--begin::Card footer-->
            <div class="card-footer border-0 d-flex gap-3 pb-9 pt-0" id="kt_app_layout_builder_footer">
                <button type="button" id="kt_app_layout_builder_preview" class="btn btn-primary flex-grow-1 fw-semibold">

                    <!--begin::Indicator label-->
                    <span class="indicator-label">
        Preview</span>
                    <!--end::Indicator label-->

                    <!--begin::Indicator progress-->
                    <span class="indicator-progress">
        Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
    </span>
                    <!--end::Indicator progress-->    </button>

                <button type="button" id="kt_app_layout_builder_reset" class="btn btn-light flex-grow-1 fw-semibold">

                    <!--begin::Indicator label-->
                    <span class="indicator-label">
        Reset</span>
                    <!--end::Indicator label-->

                    <!--begin::Indicator progress-->
                    <span class="indicator-progress">
        Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
    </span>
                    <!--end::Indicator progress-->    </button>
            </div>
            <!--end::Card footer-->    </div>
        <!--end::Card-->
    </div>
    <!--end::App layout builder-->

    <!--begin::App settings toggle-->
    <button
        id="kt_app_layout_builder_toggle"
        class="btn btn-dark app-layout-builder-toggle lh-1 py-4 "
        title="Keen Builder"
        data-bs-custom-class="tooltip-inverse"
        data-bs-toggle="tooltip"
        data-bs-placement="left"
        data-bs-dismiss="click"
        data-bs-trigger="hover">

        <i class="fonticon-equalizer fs-4 me-1"></i> Customize
    </button>
    <!--end::App settings toggle-->

    <!--begin::Drawers-->
    <!--begin::Activities drawer-->
    <div
        id="kt_activities"
        class="bg-body"

        data-kt-drawer="true"
        data-kt-drawer-name="activities"
        data-kt-drawer-activate="true"
        data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'300px', 'lg': '900px'}"
        data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_activities_toggle"
        data-kt-drawer-close="#kt_activities_close">

        <div class="card shadow-none border-0 rounded-0">
            <!--begin::Header-->
            <div class="card-header" id="kt_activities_header">
                <h3 class="card-title fw-bold text-dark">Activity Logs</h3>

                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5"
                            id="kt_activities_close">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                               xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)"
          fill="currentColor"/>
    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"/>
    </svg>

    </span>
                        <!--end::Svg Icon-->                </button>
                </div>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body position-relative" id="kt_activities_body">
                <!--begin::Content-->
                <div id="kt_activities_scroll"
                     class="position-relative scroll-y me-n5 pe-5"

                     data-kt-scroll="true"
                     data-kt-scroll-height="auto"
                     data-kt-scroll-wrappers="#kt_activities_body"
                     data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer"
                     data-kt-scroll-offset="5px">

                    <!--begin::Timeline items-->
                    <div class="timeline">
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px me-4">
                                <div class="symbol-label bg-light">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
                                    <span class="svg-icon svg-icon-2 svg-icon-gray-500"><svg width="24" height="24"
                                                                                             viewBox="0 0 24 24" fill="none"
                                                                                             xmlns="http://www.w3.org/2000/svg">
    <path opacity="0.3"
          d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z"
          fill="currentColor"/>
    <path
        d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z"
        fill="currentColor"/>
    </svg>
    </span>
                                    <!--end::Svg Icon-->        </div>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">There are 2 new tasks for you in “AirPlus Mobile App”
                                        project:
                                    </div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                             data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                            <img src="{{ asset('admin/media/avatars/300-14.jpg') }}" alt="img"/>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->

                                <!--begin::Timeline details-->
                                <div class="overflow-auto pb-5">
                                    <!--begin::Record-->
                                    <div
                                        class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                                        <!--begin::Title-->
                                        <a href="apps/projects/project.html"
                                           class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Meeting
                                            with customer</a>
                                        <!--end::Title-->

                                        <!--begin::Label-->
                                        <div class="min-w-175px pe-2">
                                            <span class="badge badge-light text-muted">Application Design</span>
                                        </div>
                                        <!--end::Label-->

                                        <!--begin::Users-->
                                        <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <img src="{{ asset('admin/media/avatars/300-2.jpg') }}" alt="img"/>
                                            </div>
                                            <!--end::User-->

                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <img src="{{ asset('admin/media/avatars/300-14.jpg') }}" alt="img"/>
                                            </div>
                                            <!--end::User-->

                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <div class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">
                                                    A
                                                </div>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Users-->

                                        <!--begin::Progress-->
                                        <div class="min-w-125px pe-2">
                                            <span class="badge badge-light-primary">In Progress</span>
                                        </div>
                                        <!--end::Progress-->

                                        <!--begin::Action-->
                                        <a href="apps/projects/project.html"
                                           class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Record-->

                                    <!--begin::Record-->
                                    <div
                                        class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
                                        <!--begin::Title-->
                                        <a href="apps/projects/project.html"
                                           class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Project
                                            Delivery Preparation</a>
                                        <!--end::Title-->

                                        <!--begin::Label-->
                                        <div class="min-w-175px">
                                            <span class="badge badge-light text-muted">CRM System Development</span>
                                        </div>
                                        <!--end::Label-->

                                        <!--begin::Users-->
                                        <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <img src="{{ asset('admin/media/avatars/300-20.jpg') }}" alt="img"/>
                                            </div>
                                            <!--end::User-->

                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <div class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">
                                                    B
                                                </div>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Users-->

                                        <!--begin::Progress-->
                                        <div class="min-w-125px">
                                            <span class="badge badge-light-success">Completed</span>
                                        </div>
                                        <!--end::Progress-->

                                        <!--begin::Action-->
                                        <a href="apps/projects/project.html"
                                           class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Record-->
                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com009.svg-->
                                    <span class="svg-icon svg-icon-2 svg-icon-gray-500"><svg width="24" height="24"
                                                                                             viewBox="0 0 24 24" fill="none"
                                                                                             xmlns="http://www.w3.org/2000/svg">
    <path opacity="0.3"
          d="M5.78001 21.115L3.28001 21.949C3.10897 22.0059 2.92548 22.0141 2.75004 21.9727C2.57461 21.9312 2.41416 21.8418 2.28669 21.7144C2.15923 21.5869 2.06975 21.4264 2.0283 21.251C1.98685 21.0755 1.99507 20.892 2.05201 20.7209L2.886 18.2209L7.22801 13.879L10.128 16.774L5.78001 21.115Z"
          fill="currentColor"/>
    <path
        d="M21.7 8.08899L15.911 2.30005C15.8161 2.2049 15.7033 2.12939 15.5792 2.07788C15.455 2.02637 15.3219 1.99988 15.1875 1.99988C15.0531 1.99988 14.92 2.02637 14.7958 2.07788C14.6717 2.12939 14.5589 2.2049 14.464 2.30005L13.74 3.02295C13.548 3.21498 13.4402 3.4754 13.4402 3.74695C13.4402 4.01849 13.548 4.27892 13.74 4.47095L14.464 5.19397L11.303 8.35498C10.1615 7.80702 8.87825 7.62639 7.62985 7.83789C6.38145 8.04939 5.2293 8.64265 4.332 9.53601C4.14026 9.72817 4.03256 9.98855 4.03256 10.26C4.03256 10.5315 4.14026 10.7918 4.332 10.984L13.016 19.667C13.208 19.859 13.4684 19.9668 13.74 19.9668C14.0115 19.9668 14.272 19.859 14.464 19.667C15.3575 18.77 15.9509 17.618 16.1624 16.3698C16.374 15.1215 16.1932 13.8383 15.645 12.697L18.806 9.53601L19.529 10.26C19.721 10.452 19.9814 10.5598 20.253 10.5598C20.5245 10.5598 20.785 10.452 20.977 10.26L21.7 9.53601C21.7952 9.44108 21.8706 9.32825 21.9221 9.2041C21.9737 9.07995 22.0002 8.94691 22.0002 8.8125C22.0002 8.67809 21.9737 8.54505 21.9221 8.4209C21.8706 8.29675 21.7952 8.18392 21.7 8.08899Z"
        fill="currentColor"/>
    </svg>
    </span>
                                    <!--end::Svg Icon-->        </div>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n2">
                                <!--begin::Timeline heading-->
                                <div class="overflow-auto pe-3">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak
                                        human workshop
                                    </div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                             data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
                                            <img src="{{ asset('admin/media/avatars/300-1.jpg') }}" alt="img"/>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <!--begin::Svg Icon | path: icons/duotune/coding/cod008.svg-->
                                    <span class="svg-icon svg-icon-2 svg-icon-gray-500"><svg width="24" height="24"
                                                                                             viewBox="0 0 24 24" fill="none"
                                                                                             xmlns="http://www.w3.org/2000/svg">
    <path
        d="M11.2166 8.50002L10.5166 7.80007C10.1166 7.40007 10.1166 6.80005 10.5166 6.40005L13.4166 3.50002C15.5166 1.40002 18.9166 1.50005 20.8166 3.90005C22.5166 5.90005 22.2166 8.90007 20.3166 10.8001L17.5166 13.6C17.1166 14 16.5166 14 16.1166 13.6L15.4166 12.9C15.0166 12.5 15.0166 11.9 15.4166 11.5L18.3166 8.6C19.2166 7.7 19.1166 6.30002 18.0166 5.50002C17.2166 4.90002 16.0166 5.10007 15.3166 5.80007L12.4166 8.69997C12.2166 8.89997 11.6166 8.90002 11.2166 8.50002ZM11.2166 15.6L8.51659 18.3001C7.81659 19.0001 6.71658 19.2 5.81658 18.6C4.81658 17.9 4.71659 16.4 5.51659 15.5L8.31658 12.7C8.71658 12.3 8.71658 11.7001 8.31658 11.3001L7.6166 10.6C7.2166 10.2 6.6166 10.2 6.2166 10.6L3.6166 13.2C1.7166 15.1 1.4166 18.1 3.1166 20.1C5.0166 22.4 8.51659 22.5 10.5166 20.5L13.3166 17.7C13.7166 17.3 13.7166 16.7001 13.3166 16.3001L12.6166 15.6C12.3166 15.2 11.6166 15.2 11.2166 15.6Z"
        fill="currentColor"/>
    <path opacity="0.3"
          d="M5.0166 9L2.81659 8.40002C2.31659 8.30002 2.0166 7.79995 2.1166 7.19995L2.31659 5.90002C2.41659 5.20002 3.21659 4.89995 3.81659 5.19995L6.0166 6.40002C6.4166 6.60002 6.6166 7.09998 6.5166 7.59998L6.31659 8.30005C6.11659 8.80005 5.5166 9.1 5.0166 9ZM8.41659 5.69995H8.6166C9.1166 5.69995 9.5166 5.30005 9.5166 4.80005L9.6166 3.09998C9.6166 2.49998 9.2166 2 8.5166 2H7.81659C7.21659 2 6.71659 2.59995 6.91659 3.19995L7.31659 4.90002C7.41659 5.40002 7.91659 5.69995 8.41659 5.69995ZM14.6166 18.2L15.1166 21.3C15.2166 21.8 15.7166 22.2 16.2166 22L17.6166 21.6C18.1166 21.4 18.4166 20.8 18.1166 20.3L16.7166 17.5C16.5166 17.1 16.1166 16.9 15.7166 17L15.2166 17.1C14.8166 17.3 14.5166 17.7 14.6166 18.2ZM18.4166 16.3L19.8166 17.2C20.2166 17.5 20.8166 17.3 21.0166 16.8L21.3166 15.9C21.5166 15.4 21.1166 14.8 20.5166 14.8H18.8166C18.0166 14.8 17.7166 15.9 18.4166 16.3Z"
          fill="currentColor"/>
    </svg>
    </span>
                                    <!--end::Svg Icon-->        </div>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="mb-5 pe-3">
                                    <!--begin::Title-->
                                    <a href="index.html#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3
                                        New Incoming Project Files:</a>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                             data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                                            <img src="{{ asset('admin/media/avatars/300-23.jpg') }}" alt="img"/>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->

                                <!--begin::Timeline details-->
                                <div class="overflow-auto pb-5">
                                    <div
                                        class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                        <!--begin::Item-->
                                        <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                            <!--begin::Icon-->
                                            <img alt="" class="w-30px me-3" src="{{ asset('admin/media/svg/files/pdf.svg') }}"/>
                                            <!--end::Icon-->

                                            <!--begin::Info-->
                                            <div class="ms-1 fw-semibold">
                                                <!--begin::Desc-->
                                                <a href="apps/projects/project.html"
                                                   class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
                                                <!--end::Desc-->

                                                <!--begin::Number-->
                                                <div class="text-gray-400">1.9mb</div>
                                                <!--end::Number-->
                                            </div>
                                            <!--begin::Info-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                            <!--begin::Icon-->
                                            <img alt="/keen/demo1/../demo1/apps/projects/project.html" class="w-30px me-3"
                                                 src="{{ asset('admin/media/svg/files/doc.svg') }}"/>
                                            <!--end::Icon-->

                                            <!--begin::Info-->
                                            <div class="ms-1 fw-semibold">
                                                <!--begin::Desc-->
                                                <a href="index.html#" class="fs-6 text-hover-primary fw-bold">Client UAT
                                                    Testing Results</a>
                                                <!--end::Desc-->

                                                <!--begin::Number-->
                                                <div class="text-gray-400">18kb</div>
                                                <!--end::Number-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="d-flex flex-aligns-center">
                                            <!--begin::Icon-->
                                            <img alt="/keen/demo1/../demo1/apps/projects/project.html" class="w-30px me-3"
                                                 src="{{ asset('admin/media/svg/files/css.svg') }}"/>
                                            <!--end::Icon-->

                                            <!--begin::Info-->
                                            <div class="ms-1 fw-semibold">
                                                <!--begin::Desc-->
                                                <a href="index.html#" class="fs-6 text-hover-primary fw-bold">Finance
                                                    Reports</a>
                                                <!--end::Desc-->

                                                <!--begin::Number-->
                                                <div class="text-gray-400">20mb</div>
                                                <!--end::Number-->
                                            </div>
                                            <!--end::Icon-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                    <span class="svg-icon svg-icon-2 svg-icon-gray-500"><svg width="24" height="24"
                                                                                             viewBox="0 0 24 24" fill="none"
                                                                                             xmlns="http://www.w3.org/2000/svg">
    <path opacity="0.3"
          d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
          fill="currentColor"/>
    <path
        d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
        fill="currentColor"/>
    </svg>
    </span>
                                    <!--end::Svg Icon-->        </div>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">
                                        Task <a href="index.html#" class="text-primary fw-bold me-1">#45890</a>
                                        merged with <a href="index.html#" class="text-primary fw-bold me-1">#45890</a> in
                                        “Ads Pro Admin Dashboard project:
                                    </div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                             data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                            <img src="{{ asset('admin/media/avatars/300-14.jpg') }}" alt="img"/>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                    <span class="svg-icon svg-icon-2 svg-icon-gray-500"><svg width="24" height="24"
                                                                                             viewBox="0 0 24 24" fill="none"
                                                                                             xmlns="http://www.w3.org/2000/svg">
    <path opacity="0.3"
          d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
          fill="currentColor"/>
    <path
        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
        fill="currentColor"/>
    </svg>
    </span>
                                    <!--end::Svg Icon-->        </div>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                             data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
                                            <img src="{{ asset('admin/media/avatars/300-2.jpg') }}" alt="img"/>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->

                                <!--begin::Timeline details-->
                                <div class="overflow-auto pb-5">
                                    <div
                                        class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                        <!--begin::Item-->
                                        <div class="overlay me-10">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px"
                                                     src="{{ asset('admin/media/stock/600x400/img-29.jpg') }}"/>
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Link-->
                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="index.html#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="overlay me-10">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px"
                                                     src="{{ asset('admin/media/stock/600x400/img-31.jpg') }}"/>
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Link-->
                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="index.html#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="overlay">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px"
                                                     src="{{ asset('admin/media/stock/600x400/img-40.jpg') }}"/>
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Link-->
                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="index.html#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
                                    <span class="svg-icon svg-icon-2 svg-icon-gray-500"><svg width="24" height="24"
                                                                                             viewBox="0 0 24 24" fill="none"
                                                                                             xmlns="http://www.w3.org/2000/svg">
    <path
        d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z"
        fill="currentColor"/>
    <path opacity="0.3"
          d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z"
          fill="currentColor"/>
    </svg>
    </span>
                                    <!--end::Svg Icon-->        </div>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">
                                        New case <a href="index.html#" class="text-primary fw-bold me-1">#67890</a>
                                        is assigned to you in Multi-platform Database Design project
                                    </div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="overflow-auto pb-5">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mt-1 fs-6">
                                            <!--begin::Info-->
                                            <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                            <!--end::Info-->

                                            <!--begin::User-->
                                            <a href="index.html#" class="text-primary fw-bold me-1">Alice Tan</a>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                    <span class="svg-icon svg-icon-2 svg-icon-gray-500"><svg width="24" height="24"
                                                                                             viewBox="0 0 24 24" fill="none"
                                                                                             xmlns="http://www.w3.org/2000/svg">
    <path opacity="0.3"
          d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
          fill="currentColor"/>
    <path
        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
        fill="currentColor"/>
    </svg>
    </span>
                                    <!--end::Svg Icon-->        </div>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">You have received a new order:</div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                             data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
                                            <img src="{{ asset('admin/media/avatars/300-4.jpg') }}" alt="img"/>
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->

                                <!--begin::Timeline details-->
                                <div class="overflow-auto pb-5">

                                    <!--begin::Notice-->
                                    <div
                                        class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
                                        <!--begin::Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/coding/cod004.svg-->
                                        <span class="svg-icon svg-icon-2tx svg-icon-primary me-4"><svg width="24"
                                                                                                       height="24"
                                                                                                       viewBox="0 0 24 24"
                                                                                                       fill="none"
                                                                                                       xmlns="http://www.w3.org/2000/svg">
    <path opacity="0.3"
          d="M19.0687 17.9688H11.0687C10.4687 17.9688 10.0687 18.3687 10.0687 18.9688V19.9688C10.0687 20.5687 10.4687 20.9688 11.0687 20.9688H19.0687C19.6687 20.9688 20.0687 20.5687 20.0687 19.9688V18.9688C20.0687 18.3687 19.6687 17.9688 19.0687 17.9688Z"
          fill="currentColor"/>
    <path
        d="M4.06875 17.9688C3.86875 17.9688 3.66874 17.8688 3.46874 17.7688C2.96874 17.4688 2.86875 16.8688 3.16875 16.3688L6.76874 10.9688L3.16875 5.56876C2.86875 5.06876 2.96874 4.46873 3.46874 4.16873C3.96874 3.86873 4.56875 3.96878 4.86875 4.46878L8.86875 10.4688C9.06875 10.7688 9.06875 11.2688 8.86875 11.5688L4.86875 17.5688C4.66875 17.7688 4.36875 17.9688 4.06875 17.9688Z"
        fill="currentColor"/>
    </svg>
    </span>
                                        <!--end::Svg Icon-->        <!--end::Icon-->

                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                            <!--begin::Content-->
                                            <div class="mb-3 mb-md-0 fw-semibold">
                                                <h4 class="text-gray-900 fw-bold">Database Backup Process Completed!</h4>

                                                <div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make sure
                                                    the data integrity is OK
                                                </div>
                                            </div>
                                            <!--end::Content-->

                                            <!--begin::Action-->
                                            <a href="index.html#"
                                               class="btn btn-primary px-6 align-self-center text-nowrap">
                                                Proceed </a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Notice-->

                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                    <span class="svg-icon svg-icon-2 svg-icon-gray-500"><svg width="24" height="24"
                                                                                             viewBox="0 0 24 24" fill="none"
                                                                                             xmlns="http://www.w3.org/2000/svg">
    <path
        d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z"
        fill="currentColor"/>
    <path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z"
          fill="currentColor"/>
    <path opacity="0.3"
          d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z"
          fill="currentColor"/>
    </svg>
    </span>
                                    <!--end::Svg Icon-->        </div>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">
                                        New order <a href="index.html#" class="text-primary fw-bold me-1">#67890</a>
                                        is placed for Workshow Planning & Budget Estimation
                                    </div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <a href="index.html#" class="text-primary fw-bold me-1">Jimmy Bold</a>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->                </div>
                    <!--end::Timeline items-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Body-->

            <!--begin::Footer-->
            <div class="card-footer py-5 text-center" id="kt_activities_footer">
                <a href="pages/user-profile/activity.html" class="btn btn-bg-body text-primary">
                    View All Activities <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                    <span class="svg-icon svg-icon-3 svg-icon-primary"><svg width="24" height="24" viewBox="0 0 24 24"
                                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"/>
    <path
        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
        fill="currentColor"/>
    </svg>
    </span>
                    <!--end::Svg Icon-->            </a>
            </div>
            <!--end::Footer-->
        </div>
    </div>
    <!--end::Activities drawer-->

    <!--begin::Chat drawer-->
    <div
        id="kt_drawer_chat"

        class="bg-body"
        data-kt-drawer="true"
        data-kt-drawer-name="chat"
        data-kt-drawer-activate="true"
        data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'300px', 'md': '500px'}"
        data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_drawer_chat_toggle"
        data-kt-drawer-close="#kt_drawer_chat_close">

        <!--begin::Messenger-->
        <div class="card w-100 rounded-0 border-0" id="kt_drawer_chat_messenger">
            <!--begin::Card header-->
            <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
                <!--begin::Title-->
                <div class="card-title">
                    <!--begin::User-->
                    <div class="d-flex justify-content-center flex-column me-3">
                        <a href="index.html#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian
                            Cox</a>

                        <!--begin::Info-->
                        <div class="mb-0 lh-1">
                            <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                            <span class="fs-7 fw-semibold text-muted">Active</span>
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::User-->
                </div>
                <!--end::Title-->

                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Menu-->
                    <div class="me-2">
                        <button class="btn btn-sm btn-icon btn-active-light-primary" data-kt-menu-trigger="click"
                                data-kt-menu-placement="bottom-end">
                            <i class="bi bi-three-dots fs-3"></i>
                        </button>

                        <!--begin::Menu 3-->
                        <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                            data-kt-menu="true">
                            <!--begin::Heading-->
                            <div class="menu-item px-3">
                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                    Contacts
                                </div>
                            </div>
                            <!--end::Heading-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="index.html#" class="menu-link px-3" data-bs-toggle="modal"
                                   data-bs-target="#kt_modal_users_search">
                                    Add Contact
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="index.html#" class="menu-link flex-stack px-3" data-bs-toggle="modal"
                                   data-bs-target="#kt_modal_invite_friends">
                                    Invite Contacts

                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                       title="Specify a contact email to send an invitation"></i>
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                                <a href="index.html#" class="menu-link px-3">
                                    <span class="menu-title">Groups</span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="index.html#" class="menu-link px-3" data-bs-toggle="tooltip"
                                           title="Coming soon">
                                            Create Group
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="index.html#" class="menu-link px-3" data-bs-toggle="tooltip"
                                           title="Coming soon">
                                            Invite Members
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="index.html#" class="menu-link px-3" data-bs-toggle="tooltip"
                                           title="Coming soon">
                                            Settings
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3 my-1">
                                <a href="index.html#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
                                    Settings
                                </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 3-->
                    </div>
                    <!--end::Menu-->

                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_chat_close">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-2"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                               xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)"
          fill="currentColor"/>
    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"/>
    </svg>

    </span>
                        <!--end::Svg Icon-->                </div>
                    <!--end::Close-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->

            <!--begin::Card body-->
            <div class="card-body" id="kt_drawer_chat_messenger_body">
                <!--begin::Messages-->
                <div
                    class="scroll-y me-n5 pe-5"

                    data-kt-element="messages"

                    data-kt-scroll="true"
                    data-kt-scroll-activate="true"
                    data-kt-scroll-height="auto"
                    data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
                    data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body"
                    data-kt-scroll-offset="0px">


                    <!--begin::Message(in)-->
                    <div class="d-flex justify-content-start mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                                                     src="{{ asset('admin/media/avatars/300-25.jpg') }}"/>
                                </div><!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="index.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian
                                        Cox</a>
                                    <span class="text-muted fs-7 mb-1">2 mins</span>
                                </div>
                                <!--end::Details-->

                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                 data-kt-element="message-text">
                                How likely are you to recommend our company to your friends and family ?
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->

                    <!--begin::Message(out)-->
                    <div class="d-flex justify-content-end mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">5 mins</span>
                                    <a href="index.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->

                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                                                     src="{{ asset('admin/media/avatars/300-1.jpg') }}"/>
                                </div><!--end::Avatar-->
                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                 data-kt-element="message-text">
                                Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on
                                GitHub.
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(out)-->

                    <!--begin::Message(in)-->
                    <div class="d-flex justify-content-start mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                                                     src="{{ asset('admin/media/avatars/300-25.jpg') }}"/>
                                </div><!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="index.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian
                                        Cox</a>
                                    <span class="text-muted fs-7 mb-1">1 Hour</span>
                                </div>
                                <!--end::Details-->

                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                 data-kt-element="message-text">
                                Ok, Understood!
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->

                    <!--begin::Message(out)-->
                    <div class="d-flex justify-content-end mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">2 Hours</span>
                                    <a href="index.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->

                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                                                     src="{{ asset('admin/media/avatars/300-1.jpg') }}"/>
                                </div><!--end::Avatar-->
                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                 data-kt-element="message-text">
                                You’ll receive notifications for all issues, pull requests!
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(out)-->

                    <!--begin::Message(in)-->
                    <div class="d-flex justify-content-start mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                                                     src="{{ asset('admin/media/avatars/300-25.jpg') }}"/>
                                </div><!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="index.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian
                                        Cox</a>
                                    <span class="text-muted fs-7 mb-1">3 Hours</span>
                                </div>
                                <!--end::Details-->

                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                 data-kt-element="message-text">
                                You can unwatch this repository immediately by clicking here: <a
                                    href="https://keenthemes.com">Keenthemes.com</a></div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->

                    <!--begin::Message(out)-->
                    <div class="d-flex justify-content-end mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">4 Hours</span>
                                    <a href="index.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->

                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                                                     src="{{ asset('admin/media/avatars/300-1.jpg') }}"/>
                                </div><!--end::Avatar-->
                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                 data-kt-element="message-text">
                                Most purchased Business courses during this sale!
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(out)-->

                    <!--begin::Message(in)-->
                    <div class="d-flex justify-content-start mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                                                     src="{{ asset('admin/media/avatars/300-25.jpg') }}"/>
                                </div><!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="index.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian
                                        Cox</a>
                                    <span class="text-muted fs-7 mb-1">5 Hours</span>
                                </div>
                                <!--end::Details-->

                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                 data-kt-element="message-text">
                                Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->

                    <!--begin::Message(template for out)-->
                    <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">Just now</span>
                                    <a href="index.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->

                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                                                     src="{{ asset('admin/media/avatars/300-1.jpg') }}"/>
                                </div><!--end::Avatar-->
                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                 data-kt-element="message-text">
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(template for out)-->

                    <!--begin::Message(template for in)-->
                    <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                                                                     src="{{ asset('admin/media/avatars/300-25.jpg') }}"/>
                                </div><!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="index.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian
                                        Cox</a>
                                    <span class="text-muted fs-7 mb-1">Just now</span>
                                </div>
                                <!--end::Details-->

                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                 data-kt-element="message-text">
                                Right before vacation season we have the next Big Deal for you.
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(template for in)-->
                </div>
                <!--end::Messages-->
            </div>
            <!--end::Card body-->

            <!--begin::Card footer-->
            <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
                <!--begin::Input-->
                <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input"
                          placeholder="Type a message">

                </textarea>
                <!--end::Input-->

                <!--begin:Toolbar-->
                <div class="d-flex flex-stack">
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center me-2">
                        <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                                data-bs-toggle="tooltip" title="Coming soon"><i class="bi bi-paperclip fs-3"></i></button>
                        <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                                data-bs-toggle="tooltip" title="Coming soon"><i class="bi bi-upload fs-3"></i></button>
                    </div>
                    <!--end::Actions-->

                    <!--begin::Send-->
                    <button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
                    <!--end::Send-->
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Card footer-->
        </div>
        <!--end::Messenger-->
    </div>
    <!--end::Chat drawer-->

    <!--begin::Chat drawer-->
    <div
        id="kt_shopping_cart"

        class="bg-body"
        data-kt-drawer="true"
        data-kt-drawer-name="cart"
        data-kt-drawer-activate="true"
        data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'300px', 'md': '500px'}"
        data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_drawer_shopping_cart_toggle"
        data-kt-drawer-close="#kt_drawer_shopping_cart_close">

        <!--begin::Messenger-->
        <div class="card card-flush w-100 rounded-0">
            <!--begin::Card header-->
            <div class="card-header">
                <!--begin::Title-->
                <h3 class="card-title text-gray-900 fw-bold">Shopping Cart</h3>
                <!--end::Title-->

                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_shopping_cart_close">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-2"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                               xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)"
          fill="currentColor"/>
    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"/>
    </svg>

    </span>
                        <!--end::Svg Icon-->                </div>
                    <!--end::Close-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->

            <!--begin::Card body-->
            <div class="card-body hover-scroll-overlay-y h-400px pt-5">

                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="apps/ecommerce/sales/details.html"
                               class="text-gray-800 text-hover-primary fs-4 fw-bold">Iblender</a>

                            <span class="text-gray-400 fw-semibold d-block">The best kitchen gadget in 2022</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 350</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">5</span>

                            <a href="index.html#"
                               class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr090.svg-->
                                <span class="svg-icon svg-icon-4"><svg width="24" height="24" viewBox="0 0 24 24"
                                                                       fill="none" xmlns="http://www.w3.org/2000/svg">
    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"/>
    </svg></span>
                                <!--end::Svg Icon-->                            </a>

                            <a href="index.html#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                <span class="svg-icon svg-icon-4"><svg width="24" height="24" viewBox="0 0 24 24"
                                                                       fill="none" xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)"
          fill="currentColor"/>
    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"/>
    </svg></span>
                                <!--end::Svg Icon-->                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="{{ asset('admin/media/stock/600x400/img-1.jpg') }}" alt=""/>
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="apps/ecommerce/sales/details.html"
                               class="text-gray-800 text-hover-primary fs-4 fw-bold">SmartCleaner</a>

                            <span class="text-gray-400 fw-semibold d-block">Smart tool for cooking</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">4</span>

                            <a href="index.html#"
                               class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr090.svg-->
                                <span class="svg-icon svg-icon-4"><svg width="24" height="24" viewBox="0 0 24 24"
                                                                       fill="none" xmlns="http://www.w3.org/2000/svg">
    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"/>
    </svg></span>
                                <!--end::Svg Icon-->                            </a>

                            <a href="index.html#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                <span class="svg-icon svg-icon-4"><svg width="24" height="24" viewBox="0 0 24 24"
                                                                       fill="none" xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)"
          fill="currentColor"/>
    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"/>
    </svg></span>
                                <!--end::Svg Icon-->                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="{{ asset('admin/media/stock/600x400/img-3.jpg') }}" alt=""/>
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="apps/ecommerce/sales/details.html"
                               class="text-gray-800 text-hover-primary fs-4 fw-bold">CameraMaxr</a>

                            <span class="text-gray-400 fw-semibold d-block">Professional camera for edge</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 150</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">3</span>

                            <a href="index.html#"
                               class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr090.svg-->
                                <span class="svg-icon svg-icon-4"><svg width="24" height="24" viewBox="0 0 24 24"
                                                                       fill="none" xmlns="http://www.w3.org/2000/svg">
    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"/>
    </svg></span>
                                <!--end::Svg Icon-->                            </a>

                            <a href="index.html#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                <span class="svg-icon svg-icon-4"><svg width="24" height="24" viewBox="0 0 24 24"
                                                                       fill="none" xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)"
          fill="currentColor"/>
    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"/>
    </svg></span>
                                <!--end::Svg Icon-->                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="{{ asset('admin/media/stock/600x400/img-8.jpg') }}" alt=""/>
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="apps/ecommerce/sales/details.html"
                               class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>

                            <span class="text-gray-400 fw-semibold d-block">Manfactoring unique objekts</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 1450</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">7</span>

                            <a href="index.html#"
                               class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr090.svg-->
                                <span class="svg-icon svg-icon-4"><svg width="24" height="24" viewBox="0 0 24 24"
                                                                       fill="none" xmlns="http://www.w3.org/2000/svg">
    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"/>
    </svg></span>
                                <!--end::Svg Icon-->                            </a>

                            <a href="index.html#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                <span class="svg-icon svg-icon-4"><svg width="24" height="24" viewBox="0 0 24 24"
                                                                       fill="none" xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)"
          fill="currentColor"/>
    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"/>
    </svg></span>
                                <!--end::Svg Icon-->                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="{{ asset('admin/media/stock/600x400/img-26.jpg') }}" alt=""/>
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="apps/ecommerce/sales/details.html"
                               class="text-gray-800 text-hover-primary fs-4 fw-bold">MotionWire</a>

                            <span class="text-gray-400 fw-semibold d-block">Perfect animation tool</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">7</span>

                            <a href="index.html#"
                               class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr090.svg-->
                                <span class="svg-icon svg-icon-4"><svg width="24" height="24" viewBox="0 0 24 24"
                                                                       fill="none" xmlns="http://www.w3.org/2000/svg">
    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"/>
    </svg></span>
                                <!--end::Svg Icon-->                            </a>

                            <a href="index.html#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                <span class="svg-icon svg-icon-4"><svg width="24" height="24" viewBox="0 0 24 24"
                                                                       fill="none" xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)"
          fill="currentColor"/>
    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"/>
    </svg></span>
                                <!--end::Svg Icon-->                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="{{ asset('admin/media/stock/600x400/img-21.jpg') }}" alt=""/>
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="apps/ecommerce/sales/details.html"
                               class="text-gray-800 text-hover-primary fs-4 fw-bold">Samsung</a>

                            <span class="text-gray-400 fw-semibold d-block">Profile info,Timeline etc</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 720</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">6</span>

                            <a href="index.html#"
                               class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr090.svg-->
                                <span class="svg-icon svg-icon-4"><svg width="24" height="24" viewBox="0 0 24 24"
                                                                       fill="none" xmlns="http://www.w3.org/2000/svg">
    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"/>
    </svg></span>
                                <!--end::Svg Icon-->                            </a>

                            <a href="index.html#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                <span class="svg-icon svg-icon-4"><svg width="24" height="24" viewBox="0 0 24 24"
                                                                       fill="none" xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)"
          fill="currentColor"/>
    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"/>
    </svg></span>
                                <!--end::Svg Icon-->                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="{{ asset('admin/media/stock/600x400/img-34.jpg') }}" alt=""/>
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="apps/ecommerce/sales/details.html"
                               class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>

                            <span class="text-gray-400 fw-semibold d-block">Manfactoring unique objekts</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 430</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">8</span>

                            <a href="index.html#"
                               class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr090.svg-->
                                <span class="svg-icon svg-icon-4"><svg width="24" height="24" viewBox="0 0 24 24"
                                                                       fill="none" xmlns="http://www.w3.org/2000/svg">
    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"/>
    </svg></span>
                                <!--end::Svg Icon-->                            </a>

                            <a href="index.html#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                <span class="svg-icon svg-icon-4"><svg width="24" height="24" viewBox="0 0 24 24"
                                                                       fill="none" xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)"
          fill="currentColor"/>
    <rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"/>
    </svg></span>
                                <!--end::Svg Icon-->                            </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="{{ asset('admin/media/stock/600x400/img-27.jpg') }}" alt=""/>
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->


            </div>
            <!--end::Card body-->

            <!--begin::Card footer-->
            <div class="card-footer">
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <span class="fw-bold text-gray-600">Total</span>
                    <span class="text-gray-800 fw-bolder fs-5">$ 1840.00</span>
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <span class="fw-bold text-gray-600">Sub total</span>
                    <span class="text-primary fw-bolder fs-5">$ 246.35</span>
                </div>
                <!--end::Item-->

                <!--end::Action-->
                <div class="d-flex justify-content-end mt-9">
                    <a href="index.html#" class="btn btn-primary d-flex justify-content-end">Pleace Order</a>
                </div>
                <!--end::Action-->
            </div>
            <!--end::Card footer-->
        </div>
        <!--end::Messenger-->
    </div>
    <!--end::Chat drawer-->
    <!--end::Drawers-->    <!--begin::Engage drawers-->
    <!--begin::Demos drawer-->
    <div
        id="kt_engage_demos"
        class="bg-body"
        data-kt-drawer="true"
        data-kt-drawer-name="explore"
        data-kt-drawer-activate="true"
        data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'350px', 'lg': '475px'}"
        data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_engage_demos_toggle"
        data-kt-drawer-close="#kt_engage_demos_close">

        <!--begin::Card-->
        <div class="card shadow-none rounded-0 w-100">
            <!--begin::Header-->
            <div class="card-header" id="kt_engage_demos_header">
                <h3 class="card-title fw-bold text-gray-700">
                    Demos
                </h3>

                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm btn-icon btn-active-color-primary h-40px w-40px me-n6"
                            id="kt_engage_demos_close">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-2"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                               xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)"
          fill="currentColor"/>
    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"/>
    </svg>

    </span>
                        <!--end::Svg Icon-->                </button>
                </div>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body" id="kt_engage_demos_body">
                <!--begin::Content-->
                <div
                    id="kt_explore_scroll"
                    class="scroll-y me-n5 pe-5"
                    data-kt-scroll="true"
                    data-kt-scroll-height="auto"
                    data-kt-scroll-wrappers="#kt_engage_demos_body"
                    data-kt-scroll-dependencies="#kt_engage_demos_header"
                    data-kt-scroll-offset="5px">

                    <!--begin::Wrapper-->
                    <div class="mb-0">
                        <!--begin::Heading-->
                        <div class="mb-7">
                            <div class="d-flex flex-stack">
                                <h3 class="mb-0">Keen Licenses</h3>

                                <a href="https://themes.getbootstrap.com/licenses/" class="fw-semibold" target="_blank">
                                    License FAQs
                                </a>
                            </div>
                        </div>
                        <!--end::Heading-->

                        <!--begin::License-->
                        <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                            <div class="d-flex flex-stack">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center mb-1">
                                        <div class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1">Standard License
                                        </div>

                                        <i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7"
                                           data-bs-toggle="popover"
                                           data-bs-custom-class="popover-inverse"
                                           data-bs-trigger="hover"
                                           data-bs-placement="top"
                                           data-bs-content="Use, by you or one client in a single site which end users are not charged for">
                                        </i>
                                    </div>
                                    <div class="fs-7 text-muted">For single site used by you or one client</div>
                                </div>

                                <div class="text-nowrap">
                                    <span class="text-muted fs-7 fw-semibold me-n1">$</span>
                                    <span class="text-dark fs-1 fw-bold">49</span>
                                </div>
                            </div>
                        </div>
                        <!--end::License-->
                        <!--begin::License-->
                        <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                            <div class="d-flex flex-stack">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center mb-1">
                                        <div class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1">Multisite
                                            License
                                        </div>

                                        <i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7"
                                           data-bs-toggle="popover"
                                           data-bs-custom-class="popover-inverse"
                                           data-bs-trigger="hover"
                                           data-bs-placement="top"
                                           data-bs-content="Use, by you or one client, in a single site which end users can be charged for.">
                                        </i>
                                    </div>
                                    <div class="fs-7 text-muted">For unlimited sites used by you or one client</div>
                                </div>

                                <div class="text-nowrap">
                                    <span class="text-muted fs-7 fw-semibold me-n1">$</span>
                                    <span class="text-dark fs-1 fw-bold">129</span>
                                </div>
                            </div>
                        </div>
                        <!--end::License-->
                        <!--begin::License-->
                        <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                            <div class="d-flex flex-stack">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center mb-1">
                                        <div class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1">Extended License
                                        </div>

                                        <i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7"
                                           data-bs-toggle="popover"
                                           data-bs-custom-class="popover-inverse"
                                           data-bs-trigger="hover"
                                           data-bs-placement="top"
                                           data-bs-content="Use, by you or one client, in a single site which end users can be charged for.">
                                        </i>
                                    </div>
                                    <div class="fs-7 text-muted">For single SaaS app with paying users</div>
                                </div>

                                <div class="text-nowrap">
                                    <span class="text-muted fs-7 fw-semibold me-n1">$</span>
                                    <span class="text-dark fs-1 fw-bold">429</span>
                                </div>
                            </div>
                        </div>
                        <!--end::License-->

                        <!--begin::License-->
                        <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                            <div class="d-flex flex-stack">
                                <div class="d-flex flex-column">
                                    <div class="d-flex align-items-center mb-1">
                                        <div class="fs-6 fw-semibold text-gray-800 fw-semibold mb-0 me-1">Custom License
                                        </div>
                                    </div>
                                    <div class="fs-7 text-muted">Reach us for custom license offers.</div>
                                </div>

                                <div class="text-nowrap">
                                    <a href="https://keenthemes.com/contact" class="btn btn-sm btn-success" target="_blank">Contact
                                        Us</a>
                                </div>
                            </div>
                        </div>
                        <!--end::License-->

                        <!--begin::Purchase-->
                        <a href="https://themes.getbootstrap.com/product/keen-the-ultimate-bootstrap-admin-theme/"
                           class="btn btn-primary fw-bold mb-15 w-100">
                            Buy Now
                        </a>
                        <!--end::Purchase-->

                        <!--begin::Demos-->
                        <div class="mb-0">
                            <h3 class="fw-bold text-center mb-6">
                                9
                                Keen
                                Demos
                            </h3>

                            <!--begin::Row-->
                            <div class="row g-5">
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-success rounded">
                                        <div class="overlay-wrapper">
                                            <img src="{{ asset('admin/media/preview/demos/demo1/light-ltr.png') }}" alt="demo"
                                                 class="w-100"/>
                                        </div>

                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="index.html" class="btn btn-sm btn-success shadow">
                                                Demo 1 </a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="{{ asset('admin/media/preview/demos/demo2/light-ltr.png') }}" alt="demo"
                                                 class="w-100"/>
                                        </div>

                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="../demo2/index.html" class="btn btn-sm btn-success shadow">
                                                Demo 2 </a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="{{ asset('admin/media/preview/demos/demo3/light-ltr.png') }}" alt="demo"
                                                 class="w-100"/>
                                        </div>

                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="../demo3/index.html" class="btn btn-sm btn-success shadow">
                                                Demo 3 </a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="{{ asset('admin/media/preview/demos/demo4/light-ltr.png') }}" alt="demo"
                                                 class="w-100"/>
                                        </div>

                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="../demo4/index.html" class="btn btn-sm btn-success shadow">
                                                Demo 4 </a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="{{ asset('admin/media/preview/demos/demo5/light-ltr.png') }}" alt="demo"
                                                 class="w-100"/>
                                        </div>

                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="../demo5/index.html" class="btn btn-sm btn-success shadow">
                                                Demo 5 </a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="{{ asset('admin/media/preview/demos/demo6/light-ltr.png') }}" alt="demo"
                                                 class="w-100"/>
                                        </div>

                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="../demo6/index.html" class="btn btn-sm btn-success shadow">
                                                Demo 6 </a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="{{ asset('admin/media/preview/demos/demo7/light-ltr.png') }}" alt="demo"
                                                 class="w-100"/>
                                        </div>

                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="../demo7/index.html" class="btn btn-sm btn-success shadow">
                                                Demo 7 </a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="{{ asset('admin/media/preview/demos/demo8/light-ltr.png') }}" alt="demo"
                                                 class="w-100"/>
                                        </div>

                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="../demo8/index.html" class="btn btn-sm btn-success shadow">
                                                Demo 8 </a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <!--begin::Demo-->
                                    <div
                                        class="overlay overflow-hidden position-relative border border-4 border-gray-200 rounded">
                                        <div class="overlay-wrapper">
                                            <img src="{{ asset('admin/media/preview/demos/demo9/light-ltr.png') }}" alt="demo"
                                                 class="w-100"/>
                                        </div>

                                        <div class="overlay-layer bg-dark bg-opacity-10">
                                            <a href="../demo9/index.html" class="btn btn-sm btn-success shadow">
                                                Demo 9 </a>
                                        </div>
                                    </div>
                                    <!--end::Demo-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                        </div>
                        <!--end::Demos-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Demos drawer-->


    <!--begin::Help drawer-->
    <div
        id="kt_help"
        class="bg-body"
        data-kt-drawer="true"
        data-kt-drawer-name="help"
        data-kt-drawer-activate="true"
        data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'350px', 'md': '525px'}"
        data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_help_toggle"
        data-kt-drawer-close="#kt_help_close">

        <!--begin::Card-->
        <div class="card shadow-none rounded-0 w-100">
            <!--begin::Header-->
            <div class="card-header" id="kt_help_header">
                <h5 class="card-title fw-semibold text-gray-600">
                    Learn & Get Inspired
                </h5>

                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm btn-icon explore-btn-dismiss me-n5" id="kt_help_close">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-2"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                               xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)"
          fill="currentColor"/>
    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"/>
    </svg>

    </span>
                        <!--end::Svg Icon-->                </button>
                </div>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body" id="kt_help_body">
                <!--begin::Content-->
                <div
                    id="kt_help_scroll"

                    class="hover-scroll-overlay-y"

                    data-kt-scroll="true"
                    data-kt-scroll-height="auto"
                    data-kt-scroll-wrappers="#kt_help_body"
                    data-kt-scroll-dependencies="#kt_help_header"
                    data-kt-scroll-offset="5px">

                    <!--begin::Support-->
                    <div class="rounded border border-dashed border-gray-300 p-6 p-lg-8 mb-10">
                        <!--begin::Heading-->
                        <h2 class="fw-bold mb-5">Support at <a href="https://devs.keenthemes.com" class="">devs.keenthemes.com</a>
                        </h2>
                        <!--end::Heading-->

                        <!--begin::Description-->
                        <div class="fs-5 fw-semibold mb-5">
                            <span class="text-gray-500">Join our developers community to find answer to your question and help others.</span>
                            <a class="explore-link d-none" href="https://keenthemes.com/licensing">FAQs</a>
                        </div>
                        <!--end::Description-->

                        <!--begin::Link-->
                        <a href="https://devs.keenthemes.com" class="btn btn-lg explore-btn-primary w-100">Get Support</a>
                        <!--end::Link-->
                    </div>
                    <!--end::Support-->

                    <!--begin::Link-->
                    <a href="../../html/keen/docs/index.html" class="parent-hover d-flex align-items-center mb-7">
                        <!--begin::Icon-->
                        <div
                            class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-warning">
                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                            <span class="svg-icon svg-icon-warning svg-icon-2x svg-icon-lg-3x"><svg width="24" height="24"
                                                                                                    viewBox="0 0 24 24"
                                                                                                    fill="none"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
    <path opacity="0.3"
          d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
          fill="currentColor"/>
    <path
        d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
        fill="currentColor"/>
    </svg>
    </span>
                            <!--end::Svg Icon-->                        </div>
                        <!--end::Icon-->

                        <!--begin::Info-->
                        <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column me-2 me-lg-5">
                                <!--begin::Title-->
                                <div class="text-dark parent-hover-primary fw-bold fs-6 fs-lg-4 mb-1">
                                    Documentation
                                </div>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="text-muted fw-semibold fs-7 fs-lg-6">
                                    From guides and how-tos, to live demos and code examples to get started right away.
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                            <span class="svg-icon svg-icon-gray-400 svg-icon-2"><svg width="24" height="24"
                                                                                     viewBox="0 0 24 24" fill="none"
                                                                                     xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"/>
    <path
        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
        fill="currentColor"/>
    </svg>
    </span>
                            <!--end::Svg Icon-->                        </div>
                        <!--end::Info-->
                    </a>
                    <!--end::Link-->
                    <!--begin::Link-->
                    <a href="../../html/keen/docs/base/utilities.html" class="parent-hover d-flex align-items-center mb-7">
                        <!--begin::Icon-->
                        <div
                            class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-primary">
                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm007.svg-->
                            <span class="svg-icon svg-icon-primary svg-icon-2x svg-icon-lg-3x"><svg width="24" height="24"
                                                                                                    viewBox="0 0 24 24"
                                                                                                    fill="none"
                                                                                                    xmlns="http://www.w3.org/2000/svg">
    <path d="M21 9V11C21 11.6 20.6 12 20 12H14V8H20C20.6 8 21 8.4 21 9ZM10 8H4C3.4 8 3 8.4 3 9V11C3 11.6 3.4 12 4 12H10V8Z"
          fill="currentColor"/>
    <path d="M15 2C13.3 2 12 3.3 12 5V8H15C16.7 8 18 6.7 18 5C18 3.3 16.7 2 15 2Z" fill="currentColor"/>
    <path opacity="0.3"
          d="M9 2C10.7 2 12 3.3 12 5V8H9C7.3 8 6 6.7 6 5C6 3.3 7.3 2 9 2ZM4 12V21C4 21.6 4.4 22 5 22H10V12H4ZM20 12V21C20 21.6 19.6 22 19 22H14V12H20Z"
          fill="currentColor"/>
    </svg>
    </span>
                            <!--end::Svg Icon-->                        </div>
                        <!--end::Icon-->

                        <!--begin::Info-->
                        <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column me-2 me-lg-5">
                                <!--begin::Title-->
                                <div class="text-dark parent-hover-primary fw-bold fs-6 fs-lg-4 mb-1">
                                    Plugins & Components
                                </div>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="text-muted fw-semibold fs-7 fs-lg-6">
                                    Check out our 300+ in-house components and customized 3rd-party plugins.
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                            <span class="svg-icon svg-icon-gray-400 svg-icon-2"><svg width="24" height="24"
                                                                                     viewBox="0 0 24 24" fill="none"
                                                                                     xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"/>
    <path
        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
        fill="currentColor"/>
    </svg>
    </span>
                            <!--end::Svg Icon-->                        </div>
                        <!--end::Info-->
                    </a>
                    <!--end::Link-->
                    <!--begin::Link-->
                    <a href="layout-builder.html" class="parent-hover d-flex align-items-center mb-7">
                        <!--begin::Icon-->
                        <div
                            class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-info">
                            <!--begin::Svg Icon | path: icons/duotune/art/art006.svg-->
                            <span class="svg-icon svg-icon-info svg-icon-2x svg-icon-lg-3x"><svg width="24" height="24"
                                                                                                 viewBox="0 0 24 24"
                                                                                                 fill="none"
                                                                                                 xmlns="http://www.w3.org/2000/svg">
    <path opacity="0.3"
          d="M22 19V17C22 16.4 21.6 16 21 16H8V3C8 2.4 7.6 2 7 2H5C4.4 2 4 2.4 4 3V19C4 19.6 4.4 20 5 20H21C21.6 20 22 19.6 22 19Z"
          fill="currentColor"/>
    <path
        d="M20 5V21C20 21.6 19.6 22 19 22H17C16.4 22 16 21.6 16 21V8H8V4H19C19.6 4 20 4.4 20 5ZM3 8H4V4H3C2.4 4 2 4.4 2 5V7C2 7.6 2.4 8 3 8Z"
        fill="currentColor"/>
    </svg>
    </span>
                            <!--end::Svg Icon-->                        </div>
                        <!--end::Icon-->

                        <!--begin::Info-->
                        <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column me-2 me-lg-5">
                                <!--begin::Title-->
                                <div class="text-dark parent-hover-primary fw-bold fs-6 fs-lg-4 mb-1">
                                    Layout Builder
                                </div>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="text-muted fw-semibold fs-7 fs-lg-6">
                                    Build your layout, preview it and export the HTML for server side integration.
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                            <span class="svg-icon svg-icon-gray-400 svg-icon-2"><svg width="24" height="24"
                                                                                     viewBox="0 0 24 24" fill="none"
                                                                                     xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"/>
    <path
        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
        fill="currentColor"/>
    </svg>
    </span>
                            <!--end::Svg Icon-->                        </div>
                        <!--end::Info-->
                    </a>
                    <!--end::Link-->
                    <!--begin::Link-->
                    <a href="../../html/keen/docs/getting-started/changelog.html"
                       class="parent-hover d-flex align-items-center mb-7">
                        <!--begin::Icon-->
                        <div
                            class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-danger">
                            <!--begin::Svg Icon | path: icons/duotune/electronics/elc009.svg-->
                            <span class="svg-icon svg-icon-danger svg-icon-2x svg-icon-lg-3x"><svg width="24" height="24"
                                                                                                   viewBox="0 0 24 24"
                                                                                                   fill="none"
                                                                                                   xmlns="http://www.w3.org/2000/svg">
    <path
        d="M13 9V8C13 7.4 13.4 7 14 7H15C16.7 7 18 5.7 18 4V3C18 2.4 17.6 2 17 2C16.4 2 16 2.4 16 3V4C16 4.6 15.6 5 15 5H14C12.3 5 11 6.3 11 8V9H13Z"
        fill="currentColor"/>
    <path opacity="0.3"
          d="M21 22H3C2.4 22 2 21.6 2 21V10C2 9.4 2.4 9 3 9H21C21.6 9 22 9.4 22 10V21C22 21.6 21.6 22 21 22ZM5 12C4.4 12 4 12.4 4 13C4 13.6 4.4 14 5 14C5.6 14 6 13.6 6 13C6 12.4 5.6 12 5 12ZM8 12C7.4 12 7 12.4 7 13C7 13.6 7.4 14 8 14C8.6 14 9 13.6 9 13C9 12.4 8.6 12 8 12ZM11 12C10.4 12 10 12.4 10 13C10 13.6 10.4 14 11 14C11.6 14 12 13.6 12 13C12 12.4 11.6 12 11 12ZM14 12C13.4 12 13 12.4 13 13C13 13.6 13.4 14 14 14C14.6 14 15 13.6 15 13C15 12.4 14.6 12 14 12ZM9 15C8.4 15 8 15.4 8 16C8 16.6 8.4 17 9 17C9.6 17 10 16.6 10 16C10 15.4 9.6 15 9 15ZM12 15C11.4 15 11 15.4 11 16C11 16.6 11.4 17 12 17C12.6 17 13 16.6 13 16C13 15.4 12.6 15 12 15ZM15 15C14.4 15 14 15.4 14 16C14 16.6 14.4 17 15 17C15.6 17 16 16.6 16 16C16 15.4 15.6 15 15 15ZM19 18C18.4 18 18 18.4 18 19C18 19.6 18.4 20 19 20C19.6 20 20 19.6 20 19C20 18.4 19.6 18 19 18ZM7 19C7 18.4 6.6 18 6 18H5C4.4 18 4 18.4 4 19C4 19.6 4.4 20 5 20H6C6.6 20 7 19.6 7 19ZM7 16C7 15.4 6.6 15 6 15H5C4.4 15 4 15.4 4 16C4 16.6 4.4 17 5 17H6C6.6 17 7 16.6 7 16ZM17 14H19C19.6 14 20 13.6 20 13C20 12.4 19.6 12 19 12H17C16.4 12 16 12.4 16 13C16 13.6 16.4 14 17 14ZM18 17H19C19.6 17 20 16.6 20 16C20 15.4 19.6 15 19 15H18C17.4 15 17 15.4 17 16C17 16.6 17.4 17 18 17ZM17 19C17 18.4 16.6 18 16 18H9C8.4 18 8 18.4 8 19C8 19.6 8.4 20 9 20H16C16.6 20 17 19.6 17 19Z"
          fill="currentColor"/>
    </svg>
    </span>
                            <!--end::Svg Icon-->                        </div>
                        <!--end::Icon-->

                        <!--begin::Info-->
                        <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column me-2 me-lg-5">
                                <!--begin::Title-->
                                <div class="text-dark parent-hover-primary fw-bold fs-6 fs-lg-4 mb-1">
                                    What's New ?
                                </div>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="text-muted fw-semibold fs-7 fs-lg-6">
                                    Latest features and improvements added with our users feedback in mind.
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                            <span class="svg-icon svg-icon-gray-400 svg-icon-2"><svg width="24" height="24"
                                                                                     viewBox="0 0 24 24" fill="none"
                                                                                     xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"/>
    <path
        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
        fill="currentColor"/>
    </svg>
    </span>
                            <!--end::Svg Icon-->                        </div>
                        <!--end::Info-->
                    </a>
                    <!--end::Link-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Help drawer--><!--end::Engage drawers-->

    <!--begin::Engage toolbar-->
    <div class="engage-toolbar d-flex position-fixed px-5 fw-bold zindex-2 top-50 end-0 transform-90 mt-5 mt-lg-20 gap-2">

        <!--begin::Demos drawer toggle-->
        <button
            id="kt_engage_demos_toggle"
            class="engage-demos-toggle engage-btn btn shadow-sm fs-6 px-4 rounded-top-0"
            title="Check out 9 more demos"
            data-bs-toggle="tooltip"
            data-bs-custom-class="tooltip-inverse"
            data-bs-placement="left"
            data-bs-dismiss="click"
            data-bs-trigger="hover">

        <span id="kt_engage_demos_label">
            Demos
        </span>
        </button>
        <!--end::Demos drawer toggle-->


        <!--begin::Help drawer toggle-->
        <button
            id="kt_help_toggle"
            class="engage-help-toggle btn engage-btn shadow-sm px-5 rounded-top-0"
            title="Learn & Get Inspired"
            data-bs-toggle="tooltip"
            data-bs-custom-class="tooltip-inverse"
            data-bs-placement="left"
            data-bs-dismiss="click"
            data-bs-trigger="hover">
            Help
        </button>
        <!--end::Help drawer toggle-->


    </div>
    <!--end::Engage toolbar--><!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor"/>
    <path
        d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
        fill="currentColor"/>
    </svg>
    </span>
        <!--end::Svg Icon--></div>
    <!--end::Scrolltop-->

    <!--begin::Modals-->

    <!--begin::Modal - Upgrade plan-->
    <div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-xl">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header justify-content-end border-0 pb-0">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                               xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)"
          fill="currentColor"/>
    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"/>
    </svg>

    </span>
                        <!--end::Svg Icon-->                </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Upgrade a Plan</h1>

                        <div class="text-muted fw-semibold fs-5">
                            If you need more info, please check <a href="index.html#" class="link-primary fw-bold">Pricing
                                Guidelines</a>.
                        </div>
                    </div>
                    <!--end::Heading-->

                    <!--begin::Plans-->
                    <div class="d-flex flex-column">
                        <!--begin::Nav group-->
                        <div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
                            <button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active"
                                    data-kt-plan="month">
                                Monthly
                            </button>
                            <button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3"
                                    data-kt-plan="annual">
                                Annual
                            </button>
                        </div>
                        <!--end::Nav group-->

                        <!--begin::Row-->
                        <div class="row mt-10">
                            <!--begin::Col-->
                            <div class="col-lg-6 mb-10 mb-lg-0">
                                <!--begin::Tabs-->
                                <div class="nav flex-column">
                                    <!--begin::Tab link-->
                                    <label
                                        class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6"
                                        data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">

                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan" checked="checked"
                                                       value="startup"/>
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Startup
                                                </div>
                                                <div class="fw-semibold opacity-75">
                                                    Best for startups
                                                </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Price-->
                                        <div class="ms-5">
                                            <span class="mb-2">$</span>

                                            <span class="fs-3x fw-bold" data-kt-plan-price-month="39"
                                                  data-kt-plan-price-annual="399">
                                                        39                                                </span>

                                            <span class="fs-7 opacity-50">/
                                                        <span data-kt-element="period">Mon</span>
                                                    </span>
                                        </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                    <!--begin::Tab link-->
                                    <label
                                        class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6  mb-6"
                                        data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">

                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan" value="advanced"/>
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Advanced
                                                </div>
                                                <div class="fw-semibold opacity-75">
                                                    Best for 100+ team size
                                                </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Price-->
                                        <div class="ms-5">
                                            <span class="mb-2">$</span>

                                            <span class="fs-3x fw-bold" data-kt-plan-price-month="339"
                                                  data-kt-plan-price-annual="3399">
                                                        339                                                </span>

                                            <span class="fs-7 opacity-50">/
                                                        <span data-kt-element="period">Mon</span>
                                                    </span>
                                        </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                    <!--begin::Tab link-->
                                    <label
                                        class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6  mb-6"
                                        data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">

                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan"
                                                       value="enterprise"/>
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Enterprise
                                                    <span
                                                        class="badge badge-light-success ms-2 py-2 px-3 fs-7">Popular</span>
                                                </div>
                                                <div class="fw-semibold opacity-75">
                                                    Best value for 1000+ team
                                                </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Price-->
                                        <div class="ms-5">
                                            <span class="mb-2">$</span>

                                            <span class="fs-3x fw-bold" data-kt-plan-price-month="999"
                                                  data-kt-plan-price-annual="9999">
                                                        999                                                </span>

                                            <span class="fs-7 opacity-50">/
                                                        <span data-kt-element="period">Mon</span>
                                                    </span>
                                        </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                    <!--begin::Tab link-->
                                    <label
                                        class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
                                        data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_custom">

                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan" value="custom"/>
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Custom
                                                </div>
                                                <div class="fw-semibold opacity-75">
                                                    Requet a custom license
                                                </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Price-->
                                        <div class="ms-5">
                                            <a href="index.html#" class="btn btn-sm btn-success">Contact Us</a>
                                        </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                </div>
                                <!--end::Tabs-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-6">
                                <!--begin::Tab content-->
                                <div class="tab-content rounded h-100 bg-light p-10">
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>

                                            <div class="text-muted fw-semibold">
                                                Optimal for 10+ team size and new startup
                                            </div>
                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Body-->
                                        <div class="pt-1">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                                                                                <span
                                                                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                                Up to 10 Active Users                                                        </span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success"><svg width="24"
                                                                                                        height="24"
                                                                                                        viewBox="0 0 24 24"
                                                                                                        fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
    <path
        d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
        fill="currentColor"/>
    </svg>
    </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                                                                                <span
                                                                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                                Up to 30 Project Integrations                                                        </span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success"><svg width="24"
                                                                                                        height="24"
                                                                                                        viewBox="0 0 24 24"
                                                                                                        fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
    <path
        d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
        fill="currentColor"/>
    </svg>
    </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                                                                                <span
                                                                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                                Analytics Module                                                        </span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success"><svg width="24"
                                                                                                        height="24"
                                                                                                        viewBox="0 0 24 24"
                                                                                                        fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
    <path
        d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
        fill="currentColor"/>
    </svg>
    </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                                                                                <span
                                                                                                                    class="fw-semibold fs-5 text-muted flex-grow-1">
                                                                Finance Module                                                        </span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                <span class="svg-icon svg-icon-1"><svg width="24" height="24"
                                                                                       viewBox="0 0 24 24" fill="none"
                                                                                       xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
    <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor"/>
    <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor"/>
    </svg>
    </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                                                                                <span
                                                                                                                    class="fw-semibold fs-5 text-muted flex-grow-1">
                                                                Accounting Module                                                        </span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                <span class="svg-icon svg-icon-1"><svg width="24" height="24"
                                                                                       viewBox="0 0 24 24" fill="none"
                                                                                       xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
    <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor"/>
    <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor"/>
    </svg>
    </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                                                                                <span
                                                                                                                    class="fw-semibold fs-5 text-muted flex-grow-1">
                                                                Network Platform                                                        </span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                <span class="svg-icon svg-icon-1"><svg width="24" height="24"
                                                                                       viewBox="0 0 24 24" fill="none"
                                                                                       xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
    <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor"/>
    <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor"/>
    </svg>
    </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ">
                                                                                                                <span
                                                                                                                    class="fw-semibold fs-5 text-muted flex-grow-1">
                                                                Unlimited Cloud Space                                                        </span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                <span class="svg-icon svg-icon-1"><svg width="24" height="24"
                                                                                       viewBox="0 0 24 24" fill="none"
                                                                                       xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
    <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor"/>
    <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor"/>
    </svg>
    </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade " id="kt_upgrade_plan_advanced">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>

                                            <div class="text-muted fw-semibold">
                                                Optimal for 100+ team size and grown company
                                            </div>
                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Body-->
                                        <div class="pt-1">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                                                                                <span
                                                                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                                Up to 10 Active Users                                                        </span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success"><svg width="24"
                                                                                                        height="24"
                                                                                                        viewBox="0 0 24 24"
                                                                                                        fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
    <path
        d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
        fill="currentColor"/>
    </svg>
    </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                                                                                <span
                                                                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                                Up to 30 Project Integrations                                                        </span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success"><svg width="24"
                                                                                                        height="24"
                                                                                                        viewBox="0 0 24 24"
                                                                                                        fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
    <path
        d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
        fill="currentColor"/>
    </svg>
    </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                                                                                <span
                                                                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                                Analytics Module                                                        </span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success"><svg width="24"
                                                                                                        height="24"
                                                                                                        viewBox="0 0 24 24"
                                                                                                        fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
    <path
        d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
        fill="currentColor"/>
    </svg>
    </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                                                                                <span
                                                                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                                Finance Module                                                        </span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success"><svg width="24"
                                                                                                        height="24"
                                                                                                        viewBox="0 0 24 24"
                                                                                                        fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
    <path
        d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
        fill="currentColor"/>
    </svg>
    </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                                                                                <span
                                                                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                                Accounting Module                                                        </span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success"><svg width="24"
                                                                                                        height="24"
                                                                                                        viewBox="0 0 24 24"
                                                                                                        fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
    <path
        d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
        fill="currentColor"/>
    </svg>
    </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                                                                                <span
                                                                                                                    class="fw-semibold fs-5 text-muted flex-grow-1">
                                                                Network Platform                                                        </span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                <span class="svg-icon svg-icon-1"><svg width="24" height="24"
                                                                                       viewBox="0 0 24 24" fill="none"
                                                                                       xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
    <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor"/>
    <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor"/>
    </svg>
    </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ">
                                                                                                                <span
                                                                                                                    class="fw-semibold fs-5 text-muted flex-grow-1">
                                                                Unlimited Cloud Space                                                        </span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                <span class="svg-icon svg-icon-1"><svg width="24" height="24"
                                                                                       viewBox="0 0 24 24" fill="none"
                                                                                       xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
    <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor"/>
    <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor"/>
    </svg>
    </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade " id="kt_upgrade_plan_enterprise">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>

                                            <div class="text-muted fw-semibold">
                                                Optimal for 1000+ team and enterpise
                                            </div>
                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Body-->
                                        <div class="pt-1">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                                                                                <span
                                                                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                                Up to 10 Active Users                                                        </span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success"><svg width="24"
                                                                                                        height="24"
                                                                                                        viewBox="0 0 24 24"
                                                                                                        fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
    <path
        d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
        fill="currentColor"/>
    </svg>
    </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                                                                                <span
                                                                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                                Up to 30 Project Integrations                                                        </span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success"><svg width="24"
                                                                                                        height="24"
                                                                                                        viewBox="0 0 24 24"
                                                                                                        fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
    <path
        d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
        fill="currentColor"/>
    </svg>
    </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                                                                                <span
                                                                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                                Analytics Module                                                        </span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success"><svg width="24"
                                                                                                        height="24"
                                                                                                        viewBox="0 0 24 24"
                                                                                                        fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
    <path
        d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
        fill="currentColor"/>
    </svg>
    </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                                                                                <span
                                                                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                                Finance Module                                                        </span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success"><svg width="24"
                                                                                                        height="24"
                                                                                                        viewBox="0 0 24 24"
                                                                                                        fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
    <path
        d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
        fill="currentColor"/>
    </svg>
    </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                                                                                <span
                                                                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                                Accounting Module                                                        </span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success"><svg width="24"
                                                                                                        height="24"
                                                                                                        viewBox="0 0 24 24"
                                                                                                        fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
    <path
        d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
        fill="currentColor"/>
    </svg>
    </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                                                                                <span
                                                                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                                Network Platform                                                        </span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success"><svg width="24"
                                                                                                        height="24"
                                                                                                        viewBox="0 0 24 24"
                                                                                                        fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
    <path
        d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
        fill="currentColor"/>
    </svg>
    </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ">
                                                                                                                <span
                                                                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                                Unlimited Cloud Space                                                        </span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success"><svg width="24"
                                                                                                        height="24"
                                                                                                        viewBox="0 0 24 24"
                                                                                                        fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
    <path
        d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
        fill="currentColor"/>
    </svg>
    </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade " id="kt_upgrade_plan_custom">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>

                                            <div class="text-muted fw-semibold">
                                                Optimal for corporations
                                            </div>
                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Body-->
                                        <div class="pt-1">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                                                                                <span
                                                                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                                Unlimited Users                                                        </span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success"><svg width="24"
                                                                                                        height="24"
                                                                                                        viewBox="0 0 24 24"
                                                                                                        fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
    <path
        d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
        fill="currentColor"/>
    </svg>
    </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                                                                                <span
                                                                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                                Unlimited Project Integrations                                                        </span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success"><svg width="24"
                                                                                                        height="24"
                                                                                                        viewBox="0 0 24 24"
                                                                                                        fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
    <path
        d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
        fill="currentColor"/>
    </svg>
    </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                                                                                <span
                                                                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                                Analytics Module                                                        </span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success"><svg width="24"
                                                                                                        height="24"
                                                                                                        viewBox="0 0 24 24"
                                                                                                        fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
    <path
        d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
        fill="currentColor"/>
    </svg>
    </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                                                                                <span
                                                                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                                Finance Module                                                        </span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success"><svg width="24"
                                                                                                        height="24"
                                                                                                        viewBox="0 0 24 24"
                                                                                                        fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
    <path
        d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
        fill="currentColor"/>
    </svg>
    </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                                                                                <span
                                                                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                                Accounting Module                                                        </span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success"><svg width="24"
                                                                                                        height="24"
                                                                                                        viewBox="0 0 24 24"
                                                                                                        fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
    <path
        d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
        fill="currentColor"/>
    </svg>
    </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                                                                                <span
                                                                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                                Network Platform                                                        </span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success"><svg width="24"
                                                                                                        height="24"
                                                                                                        viewBox="0 0 24 24"
                                                                                                        fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
    <path
        d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
        fill="currentColor"/>
    </svg>
    </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ">
                                                                                                                <span
                                                                                                                    class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                                Unlimited Cloud Space                                                        </span>
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                <span class="svg-icon svg-icon-1 svg-icon-success"><svg width="24"
                                                                                                        height="24"
                                                                                                        viewBox="0 0 24 24"
                                                                                                        fill="none"
                                                                                                        xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor"/>
    <path
        d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
        fill="currentColor"/>
    </svg>
    </span>
                                                <!--end::Svg Icon-->
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                </div>
                                <!--end::Tab content-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Plans-->

                    <!--begin::Actions-->
                    <div class="d-flex flex-center flex-row-fluid pt-12">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">
                            Cancel
                        </button>

                        <button type="submit" class="btn btn-primary" id="kt_modal_upgrade_plan_btn">

                            <!--begin::Indicator label-->
                            <span class="indicator-label">
        Upgrade Plan</span>
                            <!--end::Indicator label-->

                            <!--begin::Indicator progress-->
                            <span class="indicator-progress">
        Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
    </span>
                            <!--end::Indicator progress-->
                        </button>
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Upgrade plan--><!--begin::Modal - Create Campaign-->
    <div class="modal fade" id="kt_modal_create_campaign" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-fullscreen p-9">
            <!--begin::Modal content-->
            <div class="modal-content modal-rounded">
                <!--begin::Modal header-->
                <div class="modal-header py-7 d-flex justify-content-between">
                    <!--begin::Modal title-->
                    <h2>Create Campaign</h2>
                    <!--end::Modal title-->

                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                               xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)"
          fill="currentColor"/>
    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"/>
    </svg>

    </span>
                        <!--end::Svg Icon-->                </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y m-5">
                    <!--begin::Stepper-->
                    <div class="stepper stepper-links d-flex flex-column" id="kt_modal_create_campaign_stepper">
                        <!--begin::Nav-->
                        <div class="stepper-nav justify-content-center py-2">
                            <!--begin::Step 1-->
                            <div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">
                                    Campaign Details
                                </h3>
                            </div>
                            <!--end::Step 1-->

                            <!--begin::Step 2-->
                            <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">
                                    Creative Uploads
                                </h3>
                            </div>
                            <!--end::Step 2-->

                            <!--begin::Step 3-->
                            <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">
                                    Audiences
                                </h3>
                            </div>
                            <!--end::Step 3-->

                            <!--begin::Step 4-->
                            <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">
                                    Budget Estimates
                                </h3>
                            </div>
                            <!--end::Step 4-->

                            <!--begin::Step 5-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">
                                    Completed
                                </h3>
                            </div>
                            <!--end::Step 5-->
                        </div>
                        <!--end::Nav-->

                        <!--begin::Form-->
                        <form class="mx-auto w-100 mw-600px pt-15 pb-10" novalidate="novalidate"
                              id="kt_modal_create_campaign_stepper_form">

                            <!--begin::Step 1-->
                            <div class="current" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-15">
                                        <!--begin::Title-->
                                        <h2 class="fw-bold d-flex align-items-center text-dark">
                                            Setup Campaign Details
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                               title="Campaign name will be used as reference within your campaign reports"></i>
                                        </h2>
                                        <!--end::Title-->

                                        <!--begin::Notice-->
                                        <div class="text-muted fw-semibold fs-6">
                                            If you need more info, please check out
                                            <a href="index.html#" class="link-primary fw-bold">Help Page</a>.
                                        </div>
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Heading-->

                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="required form-label mb-3">Campaign Name</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-lg form-control-solid"
                                               name="campaign_name" placeholder="" value=""/>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="d-block fw-semibold fs-6 mb-5">
                                            <span class="required">Company Logo</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                               title="E.g. Select a logo to represent the company that's running the campaign."></i>
                                        </label>
                                        <!--end::Label-->

                                        <!--begin::Image input placeholder-->
                                        <style>.image-input-placeholder {
                                                background-image: url('{{ asset('admin/media/svg/files/blank-image.svg') }}');
                                            }

                                            [data-bs-theme="dark"] .image-input-placeholder {
                                                background-image: url('{{ asset('admin/media/svg/files/blank-image-dark.svg') }}');
                                            }
                                        </style>
                                        <!--end::Image input placeholder-->

                                        <!--begin::Image input-->
                                        <div
                                            class="image-input image-input-empty image-input-outline image-input-placeholder"
                                            data-kt-image-input="true">
                                            <!--begin::Preview existing avatar-->
                                            <div class="image-input-wrapper w-125px h-125px"></div>
                                            <!--end::Preview existing avatar-->

                                            <!--begin::Label-->
                                            <label
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                title="Change avatar">
                                                <i class="bi bi-pencil-fill fs-7"></i>

                                                <!--begin::Inputs-->
                                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg"/>
                                                <input type="hidden" name="avatar_remove"/>
                                                <!--end::Inputs-->
                                            </label>
                                            <!--end::Label-->

                                            <!--begin::Cancel-->
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                title="Cancel avatar">
                        <i class="bi bi-x fs-2"></i>
                    </span>
                                            <!--end::Cancel-->

                                            <!--begin::Remove-->
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                title="Remove avatar">
                        <i class="bi bi-x fs-2"></i>
                    </span>
                                            <!--end::Remove-->
                                        </div>
                                        <!--end::Image input-->

                                        <!--begin::Hint-->
                                        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                        <!--end::Hint-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="required fw-semibold fs-6 mb-5">Campaign Goal</label>
                                        <!--end::Label-->

                                        <!--begin::Roles-->
                                        <!--begin::Input row-->
                                        <div class="d-flex fv-row">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="user_role" type="radio" value="0"
                                                       id="kt_modal_update_role_option_0" checked='checked'/>
                                                <!--end::Input-->

                                                <!--begin::Label-->
                                                <label class="form-check-label" for="kt_modal_update_role_option_0">
                                                    <div class="fw-bold text-gray-800">Get more visitors</div>
                                                    <div class="text-gray-600">Increase impression traffic onto the
                                                        platform
                                                    </div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Radio-->
                                        </div>
                                        <!--end::Input row-->

                                        <div class='separator separator-dashed my-5'></div><!--begin::Input row-->
                                        <div class="d-flex fv-row">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="user_role" type="radio" value="1"
                                                       id="kt_modal_update_role_option_1"/>
                                                <!--end::Input-->

                                                <!--begin::Label-->
                                                <label class="form-check-label" for="kt_modal_update_role_option_1">
                                                    <div class="fw-bold text-gray-800">Get more messages on chat</div>
                                                    <div class="text-gray-600">Increase community interaction and
                                                        communication
                                                    </div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Radio-->
                                        </div>
                                        <!--end::Input row-->

                                        <div class='separator separator-dashed my-5'></div><!--begin::Input row-->
                                        <div class="d-flex fv-row">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="user_role" type="radio" value="2"
                                                       id="kt_modal_update_role_option_2"/>
                                                <!--end::Input-->

                                                <!--begin::Label-->
                                                <label class="form-check-label" for="kt_modal_update_role_option_2">
                                                    <div class="fw-bold text-gray-800">Get more calls</div>
                                                    <div class="text-gray-600">Boost telecommunication feedback to provide
                                                        precise and accurate information
                                                    </div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Radio-->
                                        </div>
                                        <!--end::Input row-->

                                        <div class='separator separator-dashed my-5'></div><!--begin::Input row-->
                                        <div class="d-flex fv-row">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="user_role" type="radio" value="3"
                                                       id="kt_modal_update_role_option_3"/>
                                                <!--end::Input-->

                                                <!--begin::Label-->
                                                <label class="form-check-label" for="kt_modal_update_role_option_3">
                                                    <div class="fw-bold text-gray-800">Get more likes</div>
                                                    <div class="text-gray-600">Increase positive interactivity on social
                                                        media platforms
                                                    </div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Radio-->
                                        </div>
                                        <!--end::Input row-->

                                        <div class='separator separator-dashed my-5'></div><!--begin::Input row-->
                                        <div class="d-flex fv-row">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="user_role" type="radio" value="4"
                                                       id="kt_modal_update_role_option_4"/>
                                                <!--end::Input-->

                                                <!--begin::Label-->
                                                <label class="form-check-label" for="kt_modal_update_role_option_4">
                                                    <div class="fw-bold text-gray-800">Lead generation</div>
                                                    <div class="text-gray-600">Collect contact information for potential
                                                        customers
                                                    </div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Radio-->
                                        </div>
                                        <!--end::Input row-->

                                        <!--end::Roles-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 1-->

                            <!--begin::Step 2-->
                            <div data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-12">
                                        <!--begin::Title-->
                                        <h1 class="fw-bold text-dark">Upload Files</h1>
                                        <!--end::Title-->

                                        <!--begin::Description-->
                                        <div class="text-muted fw-semibold fs-4">
                                            If you need more info, please check
                                            <a href="index.html#" class="link-primary">Campaign Guidelines</a>
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Heading-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Dropzone-->
                                        <div class="dropzone" id="kt_modal_create_campaign_files_upload">
                                            <!--begin::Message-->
                                            <div class="dz-message needsclick">
                                                <!--begin::Icon-->
                                                <!--begin::Svg Icon | path: icons/duotune/files/fil010.svg-->
                                                <span class="svg-icon svg-icon-3hx svg-icon-primary"><svg width="24"
                                                                                                          height="24"
                                                                                                          viewBox="0 0 24 24"
                                                                                                          fill="none"
                                                                                                          xmlns="http://www.w3.org/2000/svg">
    <path opacity="0.3"
          d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM14.5 12L12.7 9.3C12.3 8.9 11.7 8.9 11.3 9.3L10 12H11.5V17C11.5 17.6 11.4 18 12 18C12.6 18 12.5 17.6 12.5 17V12H14.5Z"
          fill="currentColor"/>
    <path d="M13 11.5V17.9355C13 18.2742 12.6 19 12 19C11.4 19 11 18.2742 11 17.9355V11.5H13Z" fill="currentColor"/>
    <path
        d="M8.2575 11.4411C7.82942 11.8015 8.08434 12.5 8.64398 12.5H15.356C15.9157 12.5 16.1706 11.8015 15.7425 11.4411L12.4375 8.65789C12.1875 8.44737 11.8125 8.44737 11.5625 8.65789L8.2575 11.4411Z"
        fill="currentColor"/>
    <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor"/>
    </svg>
    </span>
                                                <!--end::Svg Icon-->                    <!--end::Icon-->

                                                <!--begin::Info-->
                                                <div class="ms-4">
                                                    <h3 class="dfs-3 fw-bold text-gray-900 mb-1">Drop campaign files here or
                                                        click to upload.</h3>
                                                    <span class="fw-semibold fs-4 text-muted">Upload up to 10 files</span>
                                                </div>
                                                <!--end::Info-->
                                            </div>
                                        </div>
                                        <!--end::Dropzone-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">Uploaded File</label>
                                        <!--End::Label-->

                                        <!--begin::Files-->
                                        <div class="mh-300px scroll-y me-n7 pe-7">
                                            <!--begin::File-->
                                            <div
                                                class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px">
                                                        <img src="{{ asset('admin/media/svg/files/pdf.svg') }}" alt="icon"/>
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <a href="index.html#"
                                                           class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Product
                                                            Specifications</a>
                                                        <div class="fw-semibold text-muted">230kb</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>

                                                <!--begin::Menu-->
                                                <div class="min-w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true"
                                                            data-placeholder="Edit">
                                                        <option></option>
                                                        <option value="1">Remove</option>
                                                        <option value="2">Modify</option>
                                                        <option value="3">Select</option>
                                                    </select>
                                                </div>
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::File-->
                                            <!--begin::File-->
                                            <div
                                                class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px">
                                                        <img src="{{ asset('admin/media/svg/files/tif.svg') }}" alt="icon"/>
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <a href="index.html#"
                                                           class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Campaign
                                                            Creative Poster</a>
                                                        <div class="fw-semibold text-muted">2.4mb</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>

                                                <!--begin::Menu-->
                                                <div class="min-w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true"
                                                            data-placeholder="Edit">
                                                        <option></option>
                                                        <option value="1">Remove</option>
                                                        <option value="2">Modify</option>
                                                        <option value="3">Select</option>
                                                    </select>
                                                </div>
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::File-->
                                            <!--begin::File-->
                                            <div
                                                class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px">
                                                        <img src="{{ asset('admin/media/svg/files/folder-document.svg') }}" alt="icon"/>
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <a href="index.html#"
                                                           class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Campaign
                                                            Landing Page Source</a>
                                                        <div class="fw-semibold text-muted">1.12mb</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>

                                                <!--begin::Menu-->
                                                <div class="min-w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true"
                                                            data-placeholder="Edit">
                                                        <option></option>
                                                        <option value="1">Remove</option>
                                                        <option value="2">Modify</option>
                                                        <option value="3">Select</option>
                                                    </select>
                                                </div>
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::File-->
                                            <!--begin::File-->
                                            <div
                                                class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px">
                                                        <img src="{{ asset('admin/media/svg/files/css.svg') }}" alt="icon"/>
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <a href="index.html#"
                                                           class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Landing
                                                            Page Styling</a>
                                                        <div class="fw-semibold text-muted">85kb</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>

                                                <!--begin::Menu-->
                                                <div class="min-w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true"
                                                            data-placeholder="Edit">
                                                        <option></option>
                                                        <option value="1">Remove</option>
                                                        <option value="2">Modify</option>
                                                        <option value="3">Select</option>
                                                    </select>
                                                </div>
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::File-->
                                            <!--begin::File-->
                                            <div
                                                class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px">
                                                        <img src="{{ asset('admin/media/svg/files/ai.svg') }}" alt="icon"/>
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <a href="index.html#"
                                                           class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Design
                                                            Source Files</a>
                                                        <div class="fw-semibold text-muted">48mb</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>

                                                <!--begin::Menu-->
                                                <div class="min-w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true"
                                                            data-placeholder="Edit">
                                                        <option></option>
                                                        <option value="1">Remove</option>
                                                        <option value="2">Modify</option>
                                                        <option value="3">Select</option>
                                                    </select>
                                                </div>
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::File-->
                                            <!--begin::File-->
                                            <div class="d-flex flex-stack py-4 ">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-35px">
                                                        <img src="{{ asset('admin/media/svg/files/doc.svg') }}" alt="icon"/>
                                                    </div>
                                                    <!--end::Avatar-->

                                                    <!--begin::Details-->
                                                    <div class="ms-6">
                                                        <a href="index.html#"
                                                           class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Campaign
                                                            Plan Document</a>
                                                        <div class="fw-semibold text-muted">27kb</div>
                                                    </div>
                                                    <!--end::Details-->
                                                </div>

                                                <!--begin::Menu-->
                                                <div class="min-w-100px">
                                                    <select class="form-select form-select-solid form-select-sm"
                                                            data-control="select2" data-hide-search="true"
                                                            data-placeholder="Edit">
                                                        <option></option>
                                                        <option value="1">Remove</option>
                                                        <option value="2">Modify</option>
                                                        <option value="3">Select</option>
                                                    </select>
                                                </div>
                                                <!--end::Menu-->
                                            </div>
                                            <!--end::File-->
                                        </div>
                                        <!--end::Files-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 2-->
                            <!--begin::Step 3-->
                            <div data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-12">
                                        <!--begin::Title-->
                                        <h1 class="fw-bold text-dark">Configure Audiences</h1>
                                        <!--end::Title-->

                                        <!--begin::Description-->
                                        <div class="text-muted fw-semibold fs-4">
                                            If you need more info, please check
                                            <a href="index.html#" class="link-primary">Campaign Guidelines</a>
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Heading-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">
                                            Gender
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                               title="Show your ads to either men or women, or select 'All' for both"></i>
                                        </label>
                                        <!--End::Label-->

                                        <!--begin::Row-->
                                        <div class="row g-9" data-kt-buttons="true"
                                             data-kt-buttons-target="[data-kt-button='true']">
                                            <!--begin::Col-->
                                            <div class="col">
                                                <!--begin::Option-->
                                                <label
                                                    class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6"
                                                    data-kt-button="true">
                                                    <!--begin::Radio-->
                                                    <span
                                                        class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                <input class="form-check-input" type="radio" name="campaign_gender" value="1"
                                       checked="checked"/>
                            </span>
                                                    <!--end::Radio-->

                                                    <!--begin::Info-->
                                                    <span class="ms-5">
                                <span class="fs-4 fw-bold text-gray-800 d-block">All</span>
                            </span>
                                                    <!--end::Info-->
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col">
                                                <!--begin::Option-->
                                                <label
                                                    class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6"
                                                    data-kt-button="true">
                                                    <!--begin::Radio-->
                                                    <span
                                                        class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                <input class="form-check-input" type="radio" name="campaign_gender" value="2"/>
                            </span>
                                                    <!--end::Radio-->

                                                    <!--begin::Info-->
                                                    <span class="ms-5">
                                <span class="fs-4 fw-bold text-gray-800 d-block">Male</span>
                            </span>
                                                    <!--end::Info-->
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col">
                                                <!--begin::Option-->
                                                <label
                                                    class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6"
                                                    data-kt-button="true">
                                                    <!--begin::Radio-->
                                                    <span
                                                        class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                                <input class="form-check-input" type="radio" name="campaign_gender" value="3"/>
                            </span>
                                                    <!--end::Radio-->

                                                    <!--begin::Info-->
                                                    <span class="ms-5">
                                <span class="fs-4 fw-bold text-gray-800 d-block">Female</span>
                            </span>
                                                    <!--end::Info-->
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">
                                            Age
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                               title="Select the minimum and maximum age of the people who will find your ad relevant."></i>
                                        </label>
                                        <!--End::Label-->

                                        <!--begin::Slider-->
                                        <div class="d-flex flex-stack">
                                            <div id="kt_modal_create_campaign_age_min"
                                                 class="fs-7 fw-semibold text-muted"></div>
                                            <div id="kt_modal_create_campaign_age_slider"
                                                 class="noUi-sm w-100 ms-5 me-8"></div>
                                            <div id="kt_modal_create_campaign_age_max"
                                                 class="fs-7 fw-semibold text-muted"></div>
                                        </div>
                                        <!--end::Slider-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">
                                            Location
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                               title="Enter one or more location points for more specific targeting."></i>
                                        </label>
                                        <!--End::Label-->

                                        <!--begin::Tagify-->
                                        <input class="form-control d-flex align-items-center" value=""
                                               id="kt_modal_create_campaign_location"
                                               data-kt-flags-path="/keen/demo1/{{ asset('admin/media/flags/') }}"/>
                                        <!--end::Tagify-->
                                    </div>
                                    <!--end::Input group-->

                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 3-->
                            <!--begin::Step 4-->
                            <div data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-12">
                                        <!--begin::Title-->
                                        <h1 class="fw-bold text-dark">Budget Estimates</h1>
                                        <!--end::Title-->

                                        <!--begin::Description-->
                                        <div class="text-muted fw-semibold fs-4">
                                            If you need more info, please check
                                            <a href="index.html#" class="link-primary">Campaign Guidelines</a>
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Heading-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">
                                            Campaign Duration
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                               title="Choose how long you want your ad to run for"></i>
                                        </label>
                                        <!--end::Label-->

                                        <!--begin::Duration option-->
                                        <div class="d-flex gap-9 mb-7">
                                            <!--begin::Button-->
                                            <button type="button"
                                                    class="btn btn-outline btn-outline-dashed btn-active-light-primary active"
                                                    id="kt_modal_create_campaign_duration_all">
                                                Continuous duration<br/>
                                                <span class="fs-7">Your ad will run continuously for a daily budget.</span>
                                            </button>
                                            <!--end::Button-->

                                            <!--begin::Button-->
                                            <button type="button"
                                                    class="btn btn-outline btn-outline-dashed btn-active-light-primary btn-outline-default"
                                                    id="kt_modal_create_campaign_duration_fixed">
                                                Fixed duration<br/>
                                                <span class="fs-7">Your ad will run on the specified dates only.</span>
                                            </button>
                                            <!--end::Button-->
                                        </div>
                                        <!--end::Duration option-->

                                        <!--begin::Datepicker-->
                                        <input class="form-control form-control-solid d-none" placeholder="Pick date & time"
                                               id="kt_modal_create_campaign_datepicker"/>
                                        <!--end::Datepicker-->
                                    </div>
                                    <!--end::Input group-->


                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">
                                            Daily Budget
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                               title="Choose the budget allocated for each day. Higher budget will generate better results"></i>
                                        </label>
                                        <!--end::Label-->

                                        <!--begin::Slider-->
                                        <div class="d-flex flex-column text-center">
                                            <div class="d-flex align-items-start justify-content-center mb-7">
                                                <span class="fw-bold fs-4 mt-1 me-2">$</span>
                                                <span class="fw-bold fs-3x"
                                                      id="kt_modal_create_campaign_budget_label"></span>
                                                <span class="fw-bold fs-3x">.00</span>
                                            </div>
                                            <div id="kt_modal_create_campaign_budget_slider" class="noUi-sm"></div>
                                        </div>
                                        <!--end::Slider-->

                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 4-->
                            <!--begin::Step 5-->
                            <div data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-12 text-center">
                                        <!--begin::Title-->
                                        <h1 class="fw-bold text-dark">Campaign Created!</h1>
                                        <!--end::Title-->

                                        <!--begin::Description-->
                                        <div class="fw-semibold text-muted fs-4">
                                            You will receive an email with with the summary of your newly created campaign!
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Heading-->

                                    <!--begin::Actions-->
                                    <div class="d-flex flex-center pb-20">
                                        <button id="kt_modal_create_campaign_create_new" type="button"
                                                class="btn btn-lg btn-light me-3" data-kt-element="complete-start">
                                            Create New Campaign
                                        </button>

                                        <a href="" class="btn btn-lg btn-primary" data-bs-toggle="tooltip"
                                           title="Coming Soon">
                                            View Campaign
                                        </a>
                                    </div>
                                    <!--end::Actions-->

                                    <!--begin::Illustration-->
                                    <div class="text-center px-4">
                                        <img src="{{ asset('admin/media/illustrations/sketchy-1/9.png') }}" alt=""
                                             class="mww-100 mh-350px"/>
                                    </div>
                                    <!--end::Illustration-->
                                </div>
                            </div>
                            <!--end::Step 5-->
                            <!--begin::Actions-->
                            <div class="d-flex flex-stack pt-10">
                                <!--begin::Wrapper-->
                                <div class="me-2">
                                    <button type="button" class="btn btn-lg btn-light-primary me-3"
                                            data-kt-stepper-action="previous">
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                                        <span class="svg-icon svg-icon-3 me-1"><svg width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="currentColor"/>
    <path
        d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z"
        fill="currentColor"/>
    </svg>
    </span>
                                        <!--end::Svg Icon-->                                    Back
                                    </button>
                                </div>
                                <!--end::Wrapper-->

                                <!--begin::Wrapper-->
                                <div>
                                    <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
                                        <span class="indicator-label">
                                            Submit
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
    <span class="svg-icon svg-icon-3 ms-2 me-0"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"/>
    <path
        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
        fill="currentColor"/>
    </svg>
    </span>
                                            <!--end::Svg Icon-->                                    </span>
                                        <span class="indicator-progress">
                                            Please wait... <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>

                                    <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">
                                        Continue
                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                        <span class="svg-icon svg-icon-3 ms-1 me-0"><svg width="24" height="24"
                                                                                         viewBox="0 0 24 24" fill="none"
                                                                                         xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor"/>
    <path
        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
        fill="currentColor"/>
    </svg>
    </span>
                                        <!--end::Svg Icon-->                                </button>
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Stepper-->
                </div>
                <!--begin::Modal body-->
            </div>
        </div>
    </div>
    <!--end::Modal - Create Campaign--><!--begin::Modal - Users Search-->
    <div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                               xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)"
          fill="currentColor"/>
    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"/>
    </svg>

    </span>
                        <!--end::Svg Icon-->                </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                    <!--begin::Content-->
                    <div class="text-center mb-13">
                        <h1 class="mb-3">Search Users</h1>

                        <div class="text-muted fw-semibold fs-5">
                            Invite Collaborators To Your Project
                        </div>
                    </div>
                    <!--end::Content-->

                    <!--begin::Search-->
                    <div
                        id="kt_modal_users_search_handler"

                        data-kt-search-keypress="true"
                        data-kt-search-min-length="2"
                        data-kt-search-enter="enter"
                        data-kt-search-layout="inline">

                        <!--begin::Form-->
                        <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                            <!--begin::Hidden input(Added to disable form autocomplete)-->
                            <input type="hidden"/>
                            <!--end::Hidden input-->

                            <!--begin::Icon-->
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span
                                class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y"><svg
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)"
          fill="currentColor"/>
    <path
        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
        fill="currentColor"/>
    </svg>
    </span>
                            <!--end::Svg Icon-->                        <!--end::Icon-->

                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-lg form-control-solid px-15" name="search"
                                   value="" placeholder="Search by username, full name or email..."
                                   data-kt-search-element="input"/>
                            <!--end::Input-->

                            <!--begin::Spinner-->
                            <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                                  data-kt-search-element="spinner">
                                <span class="spinner-border h-15px w-15px align-middle text-muted"></span>
                            </span>
                            <!--end::Spinner-->

                            <!--begin::Reset-->
                            <span
                                class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none"
                                data-kt-search-element="clear">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
    <span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                              xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)"
          fill="currentColor"/>
    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"/>
    </svg>

    </span>
                                <!--end::Svg Icon-->                        </span>
                            <!--end::Reset-->
                        </form>
                        <!--end::Form-->

                        <!--begin::Wrapper-->
                        <div class="py-5">
                            <!--begin::Suggestions-->
                            <div data-kt-search-element="suggestions">
                                <!--begin::Heading-->
                                <h3 class="fw-semibold mb-5">Recently searched:</h3>
                                <!--end::Heading-->

                                <!--begin::Users-->
                                <div class="mh-375px scroll-y me-n7 pe-7">
                                    <!--begin::User-->
                                    <a href="index.html#"
                                       class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="{{ asset('admin/media/avatars/300-6.jpg') }}"/>
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                                            <span class="badge badge-light">Art Director</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <a href="index.html#"
                                       class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                M                        </span>
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                                            <span class="badge badge-light">Marketing Analytic</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <a href="index.html#"
                                       class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="{{ asset('admin/media/avatars/300-1.jpg') }}"/>
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                                            <span class="badge badge-light">Software Enginer</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <a href="index.html#"
                                       class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="{{ asset('admin/media/avatars/300-5.jpg') }}"/>
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                                            <span class="badge badge-light">Web Developer</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <a href="index.html#"
                                       class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="{{ asset('admin/media/avatars/300-25.jpg') }}"/>
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                                            <span class="badge badge-light">UI/UX Designer</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                </div>
                                <!--end::Users-->
                            </div>
                            <!--end::Suggestions-->

                            <!--begin::Results(add d-none to below element to hide the users list by default)-->
                            <div data-kt-search-element="results" class="d-none">
                                <!--begin::Users-->
                                <div class="mh-375px scroll-y me-n7 pe-7">
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                       data-kt-check="true" data-kt-check-target="[data-user-id='0']"
                                                       value="0"/>
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="{{ asset('admin/media/avatars/300-6.jpg') }}"/>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="index.html#"
                                                   class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>

                                                <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected>Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                       data-kt-check="true" data-kt-check-target="[data-user-id='1']"
                                                       value="1"/>
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                    M                            </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="index.html#"
                                                   class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody
                                                    Macy</a>

                                                <div class="fw-semibold text-muted">melody@altbox.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                <option value="1" selected>Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                       data-kt-check="true" data-kt-check-target="[data-user-id='2']"
                                                       value="2"/>
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="{{ asset('admin/media/avatars/300-1.jpg') }}"/>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="index.html#"
                                                   class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>

                                                <div class="fw-semibold text-muted">max@kt.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                       data-kt-check="true" data-kt-check-target="[data-user-id='3']"
                                                       value="3"/>
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="{{ asset('admin/media/avatars/300-5.jpg') }}"/>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="index.html#"
                                                   class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>

                                                <div class="fw-semibold text-muted">sean@dellito.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected>Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                       data-kt-check="true" data-kt-check-target="[data-user-id='4']"
                                                       value="4"/>
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="{{ asset('admin/media/avatars/300-25.jpg') }}"/>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="index.html#"
                                                   class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>

                                                <div class="fw-semibold text-muted">brian@exchange.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                       data-kt-check="true" data-kt-check-target="[data-user-id='5']"
                                                       value="5"/>
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-warning text-warning fw-semibold">
                                    C                            </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="index.html#"
                                                   class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela
                                                    Collins</a>

                                                <div class="fw-semibold text-muted">mik@pex.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected>Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                       data-kt-check="true" data-kt-check-target="[data-user-id='6']"
                                                       value="6"/>
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="{{ asset('admin/media/avatars/300-9.jpg') }}"/>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="index.html#"
                                                   class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis
                                                    Mitcham</a>

                                                <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                       data-kt-check="true" data-kt-check-target="[data-user-id='7']"
                                                       value="7"/>
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                    O                            </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="index.html#"
                                                   class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia
                                                    Wild</a>

                                                <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected>Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                       data-kt-check="true" data-kt-check-target="[data-user-id='8']"
                                                       value="8"/>
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-primary text-primary fw-semibold">
                                    N                            </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="index.html#"
                                                   class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>

                                                <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                <option value="1" selected>Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                       data-kt-check="true" data-kt-check-target="[data-user-id='9']"
                                                       value="9"/>
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="{{ asset('admin/media/avatars/300-23.jpg') }}"/>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="index.html#"
                                                   class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>

                                                <div class="fw-semibold text-muted">dam@consilting.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                       data-kt-check="true" data-kt-check-target="[data-user-id='10']"
                                                       value="10"/>
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                    E                            </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="index.html#"
                                                   class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>

                                                <div class="fw-semibold text-muted">emma@intenso.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected>Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                       data-kt-check="true" data-kt-check-target="[data-user-id='11']"
                                                       value="11"/>
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="{{ asset('admin/media/avatars/300-12.jpg') }}"/>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="index.html#"
                                                   class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>

                                                <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                <option value="1" selected>Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                       data-kt-check="true" data-kt-check-target="[data-user-id='12']"
                                                       value="12"/>
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                        <span class="symbol-label bg-light-info text-info fw-semibold">
                                    A                            </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="index.html#"
                                                   class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>

                                                <div class="fw-semibold text-muted">robert@benko.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                       data-kt-check="true" data-kt-check-target="[data-user-id='13']"
                                                       value="13"/>
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="{{ asset('admin/media/avatars/300-13.jpg') }}"/>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="index.html#"
                                                   class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John
                                                    Miller</a>

                                                <div class="fw-semibold text-muted">miller@mapple.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                       data-kt-check="true" data-kt-check-target="[data-user-id='14']"
                                                       value="14"/>
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                        <span
                                                            class="symbol-label bg-light-success text-success fw-semibold">
                                    L                            </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="index.html#"
                                                   class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>

                                                <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected>Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                       data-kt-check="true" data-kt-check-target="[data-user-id='15']"
                                                       value="15"/>
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="{{ asset('admin/media/avatars/300-21.jpg') }}"/>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="index.html#"
                                                   class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan
                                                    Wilder</a>

                                                <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                <option value="1" selected>Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                       data-kt-check="true" data-kt-check-target="[data-user-id='16']"
                                                       value="16"/>
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="{{ asset('admin/media/avatars/300-13.jpg') }}"/>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="index.html#"
                                                   class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John
                                                    Miller</a>

                                                <div class="fw-semibold text-muted">miller@mapple.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                    data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected>Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->


                                </div>
                                <!--end::Users-->

                                <!--begin::Actions-->
                                <div class="d-flex flex-center mt-15">
                                    <button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal"
                                            class="btn btn-active-light me-3">
                                        Cancel
                                    </button>

                                    <button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">
                                        Add Selected Users
                                    </button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Results-->
                            <!--begin::Empty-->
                            <div data-kt-search-element="empty" class="text-center d-none">
                                <!--begin::Message-->
                                <div class="fw-semibold py-10">
                                    <div class="text-gray-600 fs-3 mb-2">No users found</div>

                                    <div class="text-muted fs-6">Try to search by username, full name or email...</div>
                                </div>
                                <!--end::Message-->

                                <!--begin::Illustration-->
                                <div class="text-center px-5">
                                    <img src="{{ asset('admin/media/illustrations/sketchy-1/1.png') }}" alt=""
                                         class="w-100 h-200px h-sm-325px"/>
                                </div>
                                <!--end::Illustration-->
                            </div>
                            <!--end::Empty-->                    </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Search-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Users Search-->
    <!--begin::Modal - Invite Friends-->
    <div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                               xmlns="http://www.w3.org/2000/svg">
    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)"
          fill="currentColor"/>
    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor"/>
    </svg>

    </span>
                        <!--end::Svg Icon-->                </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                    <!--begin::Heading-->
                    <div class="text-center mb-13">
                        <!--begin::Title-->
                        <h1 class="mb-3">Invite a Friend</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            If you need more info, please check out
                            <a href="index.html#" class="link-primary fw-bold">FAQ Page</a>.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->

                    <!--begin::Google Contacts Invite-->
                    <div class="btn btn-light-primary fw-bold w-100 mb-8">
                        <img alt="Logo" src="{{ asset('admin/media/svg/brand-logos/google-icon.svg') }}" class="h-20px me-3"/>
                        Invite Gmail Contacts
                    </div>
                    <!--end::Google Contacts Invite-->

                    <!--begin::Separator-->
                    <div class="separator d-flex flex-center mb-8">
                        <span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>
                    </div>
                    <!--end::Separator-->

                    <!--begin::Textarea-->
                    <textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here">
                    </textarea>
                    <!--end::Textarea-->

                    <!--begin::Users-->
                    <div class="mb-10">
                        <!--begin::Heading-->
                        <div class="fs-6 fw-semibold mb-2">Your Invitations</div>
                        <!--end::Heading-->

                        <!--begin::List-->
                        <div class="mh-300px scroll-y me-n7 pe-7">
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="{{ asset('admin/media/avatars/300-6.jpg') }}"/>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="index.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                            Smith</a>

                                        <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                            data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                        <span
                                                                                            class="symbol-label bg-light-danger text-danger fw-semibold">
                                                    M                                            </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="index.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody
                                            Macy</a>

                                        <div class="fw-semibold text-muted">melody@altbox.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                            data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected>Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="{{ asset('admin/media/avatars/300-1.jpg') }}"/>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="index.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max
                                            Smith</a>

                                        <div class="fw-semibold text-muted">max@kt.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                            data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="{{ asset('admin/media/avatars/300-5.jpg') }}"/>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="index.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean
                                            Bean</a>

                                        <div class="fw-semibold text-muted">sean@dellito.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                            data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="{{ asset('admin/media/avatars/300-25.jpg') }}"/>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="index.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian
                                            Cox</a>

                                        <div class="fw-semibold text-muted">brian@exchange.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                            data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                        <span
                                                                                            class="symbol-label bg-light-warning text-warning fw-semibold">
                                                    C                                            </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="index.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela
                                            Collins</a>

                                        <div class="fw-semibold text-muted">mik@pex.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                            data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="{{ asset('admin/media/avatars/300-9.jpg') }}"/>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="index.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis
                                            Mitcham</a>

                                        <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                            data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                        <span
                                                                                            class="symbol-label bg-light-danger text-danger fw-semibold">
                                                    O                                            </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="index.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia
                                            Wild</a>

                                        <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                            data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                        <span
                                                                                            class="symbol-label bg-light-primary text-primary fw-semibold">
                                                    N                                            </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="index.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil
                                            Owen</a>

                                        <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                            data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected>Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="{{ asset('admin/media/avatars/300-23.jpg') }}"/>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="index.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan
                                            Wilson</a>

                                        <div class="fw-semibold text-muted">dam@consilting.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                            data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                        <span
                                                                                            class="symbol-label bg-light-danger text-danger fw-semibold">
                                                    E                                            </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="index.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                            Bold</a>

                                        <div class="fw-semibold text-muted">emma@intenso.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                            data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="{{ asset('admin/media/avatars/300-12.jpg') }}"/>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="index.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana
                                            Crown</a>

                                        <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                            data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected>Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                        <span
                                                                                            class="symbol-label bg-light-info text-info fw-semibold">
                                                    A                                            </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="index.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert
                                            Doe</a>

                                        <div class="fw-semibold text-muted">robert@benko.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                            data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="{{ asset('admin/media/avatars/300-13.jpg') }}"/>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="index.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John
                                            Miller</a>

                                        <div class="fw-semibold text-muted">miller@mapple.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                            data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                        <span
                                                                                            class="symbol-label bg-light-success text-success fw-semibold">
                                                    L                                            </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="index.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy
                                            Kunic</a>

                                        <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                            data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="{{ asset('admin/media/avatars/300-21.jpg') }}"/>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="index.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan
                                            Wilder</a>

                                        <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                            data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected>Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 ">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="{{ asset('admin/media/avatars/300-25.jpg') }}"/>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="index.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian
                                            Cox</a>

                                        <div class="fw-semibold text-muted">brian@exchange.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                            data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::List-->
                    </div>
                    <!--end::Users-->

                    <!--begin::Notice-->
                    <div class="d-flex flex-stack">
                        <!--begin::Label-->
                        <div class="me-5 fw-semibold">
                            <label class="fs-6">Adding Users by Team Members</label>
                            <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                        </div>
                        <!--end::Label-->

                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" checked="checked"/>

                            <span class="form-check-label fw-semibold text-muted">
                                Allowed
                            </span>
                        </label>
                        <!--end::Switch-->
                    </div>
                    <!--end::Notice-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Invite Friend-->            <!--end::Modals-->

    <!--begin::Javascript-->
    <script>
        var hostUrl = "/keen/demo1/{{ asset('admin/') }}";        </script>

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
    <!--end::Vendors Javascript-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('admin/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('admin/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('admin/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('admin/js/custom/utilities/modals/create-campaign.js') }}"></script>
    <script src="{{ asset('admin/js/custom/utilities/modals/users-search.js') }}"></script>
    <!--end::Custom Javascript-->
    <!--end::Javascript-->

</body>
<!--end::Body-->
</html>
