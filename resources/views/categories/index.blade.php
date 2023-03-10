<x-app>
    <!--begin::Main-->
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <!--begin::Content wrapper-->
        <div class="d-flex flex-column flex-column-fluid">

            <!--begin::Toolbar-->
            <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 "

            >

                <!--begin::Toolbar container-->
                <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">



                    <!--begin::Page title-->
                    <div  class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                        <!--begin::Title-->
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">
                            Categories
                        </h1>
                        <!--end::Title-->


                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="../../../index.html" class="text-muted text-hover-primary">
                                    Home                            </a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->

                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                eCommerce                                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->

                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                Catalog                                            </li>
                            <!--end::Item-->

                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center gap-2 gap-lg-3">
                        <!--begin::Filter menu-->
                        <div class="d-flex">
                            <select name="campaign-type" data-control="select2" data-hide-search="true" class="form-select form-select-sm bg-body border-body w-175px">
                                <option value="Twitter" selected="selected">Select Campaign</option>
                                <option value="Twitter">Twitter Campaign</option>
                                <option value="Twitter">Facebook Campaign</option>
                                <option value="Twitter">Adword Campaign</option>
                                <option value="Twitter">Carbon Campaign</option>
                            </select>

                            <a href="categories.html#" class="btn btn-icon btn-sm btn-success flex-shrink-0 ms-4"  data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                <span class="svg-icon svg-icon-2"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1" transform="rotate(-90 11.364 20.364)" fill="currentColor"/>
<rect x="4.36396" y="11.364" width="16" height="2" rx="1" fill="currentColor"/>
</svg></span>
                                <!--end::Svg Icon-->
                            </a>
                        </div>
                        <!--end::Filter menu-->


                        <!--begin::Secondary button-->
                        <!--end::Secondary button-->

                        <!--begin::Primary button-->
                        <!--end::Primary button-->
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Toolbar container-->
            </div>
            <!--end::Toolbar-->

            <!--begin::Content-->
            <div id="kt_app_content" class="app-content  flex-column-fluid " >
                <!--begin::Content container-->
                <div id="kt_app_content_container" class="app-container  container-xxl ">

                    <!--begin::Category-->
                    <div class="card card-flush">
                        <!--begin::Card header-->
                        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                            <!--begin::Card title-->
                            <div class="card-title">
                                <!--begin::Search-->
                                <div class="d-flex align-items-center position-relative my-1">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                    <span class="svg-icon svg-icon-1 position-absolute ms-4"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"/>
<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor"/>
</svg>
</span>
                                    <!--end::Svg Icon-->                <input type="text" data-kt-ecommerce-category-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Category" />
                                </div>
                                <!--end::Search-->
                            </div>
                            <!--end::Card title-->

                            <!--begin::Card toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Add customer-->
                                <a href="add-category.html" class="btn btn-primary">
                                    Add Category
                                </a>
                                <!--end::Add customer-->
                            </div>
                            <!--end::Card toolbar-->
                        </div>
                        <!--end::Card header-->

                        <!--begin::Card body-->
                        <div class="card-body pt-0">

                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_category_table">
                                <!--begin::Table head-->
                                <thead>
                                <!--begin::Table row-->
                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="w-10px pe-2">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_category_table .form-check-input" value="1" />
                                        </div>
                                    </th>
                                    <th class="min-w-250px">Category</th>
                                    <th class="min-w-150px">Category Type</th>
                                    <th class="text-end min-w-70px">Actions</th>
                                </tr>
                                <!--end::Table row-->
                                </thead>
                                <!--end::Table head-->

                                <!--begin::Table body-->
                                <tbody class="fw-semibold text-gray-600">
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->

                                    <!--begin::Category--->
                                    <td>
                                        <div class="d-flex">
                                            <!--begin::Thumbnail-->
                                            <a href="edit-category.html" class="symbol symbol-50px">
                                                <span class="symbol-label" style="background-image:url('../../../assets/media/stock/ecommerce/68.gif');"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1" data-kt-ecommerce-category-filter="category_name">Computers</a>
                                                <!--end::Title-->

                                                <!--begin::Description-->
                                                <div class="text-muted fs-7 fw-bold">Our computers and tablets include all the big brands.</div>
                                                <!--end::Description-->
                                            </div>
                                        </div>
                                    </td>
                                    <!--end::Category--->

                                    <!--begin::Type--->
                                    <td>
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Automated</div>
                                        <!--end::Badges-->
                                    </td>
                                    <!--end::Type--->

                                    <!--begin::Action--->
                                    <td class="text-end">
                                        <a href="categories.html#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-5 m-0"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"/>
</svg>
</span>
                                            <!--end::Svg Icon-->                    </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="add-category.html" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="categories.html#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <!--end::Action--->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->

                                    <!--begin::Category--->
                                    <td>
                                        <div class="d-flex">
                                            <!--begin::Thumbnail-->
                                            <a href="edit-category.html" class="symbol symbol-50px">
                                                <span class="symbol-label" style="background-image:url('../../../assets/media/stock/ecommerce/71.gif');"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1" data-kt-ecommerce-category-filter="category_name">Watches</a>
                                                <!--end::Title-->

                                                <!--begin::Description-->
                                                <div class="text-muted fs-7 fw-bold">Our range of watches are perfect whether you’re looking to upgrade</div>
                                                <!--end::Description-->
                                            </div>
                                        </div>
                                    </td>
                                    <!--end::Category--->

                                    <!--begin::Type--->
                                    <td>
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Automated</div>
                                        <!--end::Badges-->
                                    </td>
                                    <!--end::Type--->

                                    <!--begin::Action--->
                                    <td class="text-end">
                                        <a href="categories.html#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-5 m-0"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"/>
</svg>
</span>
                                            <!--end::Svg Icon-->                    </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="add-category.html" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="categories.html#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <!--end::Action--->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->

                                    <!--begin::Category--->
                                    <td>
                                        <div class="d-flex">
                                            <!--begin::Thumbnail-->
                                            <a href="edit-category.html" class="symbol symbol-50px">
                                                <span class="symbol-label" style="background-image:url('../../../assets/media/stock/ecommerce/58.gif');"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1" data-kt-ecommerce-category-filter="category_name">Headphones</a>
                                                <!--end::Title-->

                                                <!--begin::Description-->
                                                <div class="text-muted fs-7 fw-bold">Our big range of headphones makes it easy to upgrade your device at a great price.</div>
                                                <!--end::Description-->
                                            </div>
                                        </div>
                                    </td>
                                    <!--end::Category--->

                                    <!--begin::Type--->
                                    <td>
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">Manual</div>
                                        <!--end::Badges-->
                                    </td>
                                    <!--end::Type--->

                                    <!--begin::Action--->
                                    <td class="text-end">
                                        <a href="categories.html#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-5 m-0"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"/>
</svg>
</span>
                                            <!--end::Svg Icon-->                    </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="add-category.html" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="categories.html#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <!--end::Action--->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->

                                    <!--begin::Category--->
                                    <td>
                                        <div class="d-flex">
                                            <!--begin::Thumbnail-->
                                            <a href="edit-category.html" class="symbol symbol-50px">
                                                <span class="symbol-label" style="background-image:url('../../../assets/media/stock/ecommerce/52.gif');"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1" data-kt-ecommerce-category-filter="category_name">Footwear</a>
                                                <!--end::Title-->

                                                <!--begin::Description-->
                                                <div class="text-muted fs-7 fw-bold">Whatever your activity needs are, we’ve got you covered.</div>
                                                <!--end::Description-->
                                            </div>
                                        </div>
                                    </td>
                                    <!--end::Category--->

                                    <!--begin::Type--->
                                    <td>
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Automated</div>
                                        <!--end::Badges-->
                                    </td>
                                    <!--end::Type--->

                                    <!--begin::Action--->
                                    <td class="text-end">
                                        <a href="categories.html#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-5 m-0"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"/>
</svg>
</span>
                                            <!--end::Svg Icon-->                    </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="add-category.html" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="categories.html#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <!--end::Action--->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->

                                    <!--begin::Category--->
                                    <td>
                                        <div class="d-flex">
                                            <!--begin::Thumbnail-->
                                            <a href="edit-category.html" class="symbol symbol-50px">
                                                <span class="symbol-label" style="background-image:url('../../../assets/media/stock/ecommerce/76.gif');"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1" data-kt-ecommerce-category-filter="category_name">Cameras</a>
                                                <!--end::Title-->

                                                <!--begin::Description-->
                                                <div class="text-muted fs-7 fw-bold">You’ll find exactly what you’re looking for with our huge range of cameras. </div>
                                                <!--end::Description-->
                                            </div>
                                        </div>
                                    </td>
                                    <!--end::Category--->

                                    <!--begin::Type--->
                                    <td>
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">Manual</div>
                                        <!--end::Badges-->
                                    </td>
                                    <!--end::Type--->

                                    <!--begin::Action--->
                                    <td class="text-end">
                                        <a href="categories.html#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-5 m-0"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"/>
</svg>
</span>
                                            <!--end::Svg Icon-->                    </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="add-category.html" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="categories.html#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <!--end::Action--->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->

                                    <!--begin::Category--->
                                    <td>
                                        <div class="d-flex">
                                            <!--begin::Thumbnail-->
                                            <a href="edit-category.html" class="symbol symbol-50px">
                                                <span class="symbol-label" style="background-image:url('../../../assets/media/stock/ecommerce/207.gif');"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1" data-kt-ecommerce-category-filter="category_name">Shirts</a>
                                                <!--end::Title-->

                                                <!--begin::Description-->
                                                <div class="text-muted fs-7 fw-bold">Any occasion, any time, we have everything you'll ever need. </div>
                                                <!--end::Description-->
                                            </div>
                                        </div>
                                    </td>
                                    <!--end::Category--->

                                    <!--begin::Type--->
                                    <td>
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Automated</div>
                                        <!--end::Badges-->
                                    </td>
                                    <!--end::Type--->

                                    <!--begin::Action--->
                                    <td class="text-end">
                                        <a href="categories.html#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-5 m-0"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"/>
</svg>
</span>
                                            <!--end::Svg Icon-->                    </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="add-category.html" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="categories.html#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <!--end::Action--->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->

                                    <!--begin::Category--->
                                    <td>
                                        <div class="d-flex">
                                            <!--begin::Thumbnail-->
                                            <a href="edit-category.html" class="symbol symbol-50px">
                                                <span class="symbol-label" style="background-image:url('../../../assets/media/stock/ecommerce/50.gif');"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1" data-kt-ecommerce-category-filter="category_name">Household</a>
                                                <!--end::Title-->

                                                <!--begin::Description-->
                                                <div class="text-muted fs-7 fw-bold">Spice up your home decor with our wide selection. </div>
                                                <!--end::Description-->
                                            </div>
                                        </div>
                                    </td>
                                    <!--end::Category--->

                                    <!--begin::Type--->
                                    <td>
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">Manual</div>
                                        <!--end::Badges-->
                                    </td>
                                    <!--end::Type--->

                                    <!--begin::Action--->
                                    <td class="text-end">
                                        <a href="categories.html#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-5 m-0"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"/>
</svg>
</span>
                                            <!--end::Svg Icon-->                    </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="add-category.html" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="categories.html#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <!--end::Action--->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->

                                    <!--begin::Category--->
                                    <td>
                                        <div class="d-flex">
                                            <!--begin::Thumbnail-->
                                            <a href="edit-category.html" class="symbol symbol-50px">
                                                <span class="symbol-label" style="background-image:url('../../../assets/media/stock/ecommerce/193.gif');"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1" data-kt-ecommerce-category-filter="category_name">Toys</a>
                                                <!--end::Title-->

                                                <!--begin::Description-->
                                                <div class="text-muted fs-7 fw-bold">Get the perfect gift for the little ones.</div>
                                                <!--end::Description-->
                                            </div>
                                        </div>
                                    </td>
                                    <!--end::Category--->

                                    <!--begin::Type--->
                                    <td>
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Automated</div>
                                        <!--end::Badges-->
                                    </td>
                                    <!--end::Type--->

                                    <!--begin::Action--->
                                    <td class="text-end">
                                        <a href="categories.html#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-5 m-0"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"/>
</svg>
</span>
                                            <!--end::Svg Icon-->                    </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="add-category.html" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="categories.html#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <!--end::Action--->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->

                                    <!--begin::Category--->
                                    <td>
                                        <div class="d-flex">
                                            <!--begin::Thumbnail-->
                                            <a href="edit-category.html" class="symbol symbol-50px">
                                                <span class="symbol-label" style="background-image:url('../../../assets/media/stock/ecommerce/169.gif');"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1" data-kt-ecommerce-category-filter="category_name">Handbags</a>
                                                <!--end::Title-->

                                                <!--begin::Description-->
                                                <div class="text-muted fs-7 fw-bold">Great fashion, great selections, great prices</div>
                                                <!--end::Description-->
                                            </div>
                                        </div>
                                    </td>
                                    <!--end::Category--->

                                    <!--begin::Type--->
                                    <td>
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-primary">Manual</div>
                                        <!--end::Badges-->
                                    </td>
                                    <!--end::Type--->

                                    <!--begin::Action--->
                                    <td class="text-end">
                                        <a href="categories.html#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-5 m-0"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"/>
</svg>
</span>
                                            <!--end::Svg Icon-->                    </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="add-category.html" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="categories.html#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <!--end::Action--->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->

                                    <!--begin::Category--->
                                    <td>
                                        <div class="d-flex">
                                            <!--begin::Thumbnail-->
                                            <a href="edit-category.html" class="symbol symbol-50px">
                                                <span class="symbol-label" style="background-image:url('../../../assets/media/stock/ecommerce/177.gif');"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1" data-kt-ecommerce-category-filter="category_name">Wines</a>
                                                <!--end::Title-->

                                                <!--begin::Description-->
                                                <div class="text-muted fs-7 fw-bold">Great taste, great selections, great prices</div>
                                                <!--end::Description-->
                                            </div>
                                        </div>
                                    </td>
                                    <!--end::Category--->

                                    <!--begin::Type--->
                                    <td>
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Automated</div>
                                        <!--end::Badges-->
                                    </td>
                                    <!--end::Type--->

                                    <!--begin::Action--->
                                    <td class="text-end">
                                        <a href="categories.html#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-5 m-0"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"/>
</svg>
</span>
                                            <!--end::Svg Icon-->                    </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="add-category.html" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="categories.html#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <!--end::Action--->
                                </tr>
                                <!--end::Table row-->
                                <!--begin::Table row-->
                                <tr>
                                    <!--begin::Checkbox-->
                                    <td>
                                        <div class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <!--end::Checkbox-->

                                    <!--begin::Category--->
                                    <td>
                                        <div class="d-flex">
                                            <!--begin::Thumbnail-->
                                            <a href="edit-category.html" class="symbol symbol-50px">
                                                <span class="symbol-label" style="background-image:url('../../../assets/media/stock/ecommerce/151.gif');"></span>
                                            </a>
                                            <!--end::Thumbnail-->

                                            <div class="ms-5">
                                                <!--begin::Title-->
                                                <a href="edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bold mb-1" data-kt-ecommerce-category-filter="category_name">Sandals</a>
                                                <!--end::Title-->

                                                <!--begin::Description-->
                                                <div class="text-muted fs-7 fw-bold">In season summer footwear with a huge range of options</div>
                                                <!--end::Description-->
                                            </div>
                                        </div>
                                    </td>
                                    <!--end::Category--->

                                    <!--begin::Type--->
                                    <td>
                                        <!--begin::Badges-->
                                        <div class="badge badge-light-success">Automated</div>
                                        <!--end::Badges-->
                                    </td>
                                    <!--end::Type--->

                                    <!--begin::Action--->
                                    <td class="text-end">
                                        <a href="categories.html#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                            Actions
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                            <span class="svg-icon svg-icon-5 m-0"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor"/>
</svg>
</span>
                                            <!--end::Svg Icon-->                    </a>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="add-category.html" class="menu-link px-3">
                                                    Edit
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="categories.html#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">
                                                    Delete
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </td>
                                    <!--end::Action--->
                                </tr>
                                <!--end::Table row-->
                                </tbody>
                                <!--end::Table body-->
                            </table>
                            <!--end::Table-->    </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Category-->        </div>
                <!--end::Content container-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Content wrapper-->


        <!--begin::Footer-->
        <div id="kt_app_footer" class="app-footer " >
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
                    <li class="menu-item"><a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a></li>

                    <li class="menu-item"><a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a></li>

                    <li class="menu-item"><a href="https://themes.getbootstrap.com/product/keen-the-ultimate-bootstrap-admin-theme/" target="_blank" class="menu-link px-2">Purchase</a></li>
                </ul>
                <!--end::Menu-->        </div>
            <!--end::Footer container-->
        </div>
        <!--end::Footer-->                            </div>
    <!--end:::Main-->
</x-app>
