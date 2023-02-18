@props(['products'])
<div class="col-lg-9 col-xl-10 pl50 pl15-md">
    <div class="row">
        <div class="col-lg-6">
            <div class="filter_components d-none d-lg-block">
                <ul class="mb0 align-items-center text-center text-md-start">
                    <li class="d-block d-sm-inline-block me-2 mb-3">
                        <div class="custom_dropdown_widget">
                            <div class="drop_btn">Price <i class="fa fa-angle-down"></i></div>
                            <div class="drop_content pb20">
                                <div class="zmart_custom_range_slider mt30">
                                    <input class="mb5" data-addui="slider" data-min="20" data-formatter="usd" data-fontsize="14" data-step="0.02" data-range="true" data-timeout="70987" value="20.50,70987.00"/>
                                </div>
                                <div class="enable_disable_btns d-grid">
                                    <a class="btn btn1 btn-thm mb10" href="page-shop-list-v6.html#">View Result</a>
                                    <a class="btn btn2" href="page-shop-list-v6.html#">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="d-block d-sm-inline-block me-2 mb-3">
                        <div class="custom_dropdown_widget">
                            <div class="drop_btn2">Brand <i class="fa fa-angle-down"></i></div>
                            <div class="drop_content2 pb20 text-start">
                                <div class="blog_search_widget mb15">
                                    <div class="input-group">
                                        <input type="text" class="form-control mb15" placeholder="Search" aria-label="Recipient's username">
                                    </div>
                                </div>
                                <div class="sidebar_widget_checkbox">
                                    <div class="ui_kit_checkbox mb15">
                                        <label class="custom_checkbox">Apple <span class="float-end">87</span>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="custom_checkbox" checked="checked">Asus <span class="float-end">92</span>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="custom_checkbox">Acer <span class="float-end">123</span>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="custom_checkbox">Dell <span class="float-end">49</span>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="custom_checkbox">Lenovo <span class="float-end">12</span>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                        <a href="page-shop-list-v6.html#" class="shop_btn">Show More</a>
                                    </div>
                                </div>
                                <div class="enable_disable_btns d-grid mt25">
                                    <a class="btn btn1 btn-thm mb10" href="page-shop-list-v6.html#">View Result</a>
                                    <a class="btn btn2" href="page-shop-list-v6.html#">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="filter_components text-center text-lg-end">
                <ul class="mb-2 mb-md-0">
                    <li class="list-inline-item d-lg-none me-2 mb-3"><a class="all-filter-btn flter_btn" href="page-shop-list-v6.html#"><span class="flaticon-sort me-2"></span>All Filter</a></li>
                    <li class="list-inline-item me-0">
                        <div class="page_control_shorting mb20 text-center text-md-end">
                            <select class="selectpicker show-tick">
                                <option>Default sorting</option>
                                <option>Best Seller</option>
                                <option>Best Match</option>
                                <option>Price Low</option>
                                <option>Price High</option>
                            </select>
                        </div>
                    </li>
                    <li class="d-none d-lg-inline-block list px-2"><a href="#">List</a></li>
                    <li class="d-none d-lg-inline-block gird ps-2"><a href="#">Grid</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            @foreach($products as $product)
                <div class="col-6 col-lg-4 col-xl-3 p0 pl15-520">
                    <div class="shop_item bdr1 m--1">
                        <x-site.product :$product/>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">

            <!-- {$products->links()}} -->
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="mbp_pagination mt30 text-center">
                    <ul class="page_navigation">
                        <li class="page-item">
                            <a class="page-link" href="page-shop-list-v6.html#" tabindex="-1" aria-disabled="true"> <span class="fas fa-angle-left"></span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="page-shop-list-v6.html#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="page-shop-list-v6.html#">2 <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item"><a class="page-link" href="page-shop-list-v6.html#">3</a></li>
                        <li class="page-item"><a class="page-link" href="page-shop-list-v6.html#">4</a></li>
                        <li class="page-item"><a class="page-link" href="page-shop-list-v6.html#">5</a></li>
                        <li class="page-item"><a class="page-link" href="page-shop-list-v6.html#">...</a></li>
                        <li class="page-item"><a class="page-link" href="page-shop-list-v6.html#">20</a></li>
                        <li class="page-item">
                            <a class="page-link" href="page-shop-list-v6.html#"><span class="fas fa-angle-right"></span></a>
                        </li>
                    </ul>
                    <p class="mt20 pagination_page_count text-center">1 – 20 of 300+ properties found</p>
                </div>
            </div>
        </div>
    </div>
</section>