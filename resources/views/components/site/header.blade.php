<div class="header_middle pt20 pb20 dn-992">
    <div class=container>
        <div class=row>
            <div class="col-lg-2 col-xxl-2">
                <div class=header_top_logo_home1>
                    <div class="logo">BENSU<span class=text-thm>.</span></div>
                </div>
            </div>
            <div class="col-lg-5 col-xxl-6">
                <div class=header_middle_advnc_search>
                    <div class=search_form_wrapper>
                        <div class=row>
                            <div class="col-auto pr0">
                                <div class=actegory>
                                    <select class=selectpicker id=selectbox_alCategory>
                                        <option value="Allcategory">All Category</option>
                                        @foreach(app('categories') as $category)
                                            <option value="{{ $category->slug }}" @selected(request('category') == $category->slug)>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @php
                                $products = app('featured_products')
                            @endphp
                            <div class="col-auto p0 pre_line">
                                <x-site.search-bar :products="$products"/>
                            </div>
                            <div class="col-auto p0">
                                <div class=advscrh_frm_btn>
                                    <button type=submit class="btn search-btn">
                                        <span class=flaticon-search></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-xxl-4 pr0-lg">
                <div class="hm_log_fav_cart_widget justify-content-center">
                    <div class=wrapper>
                        <ul class=mb0>
                            <li class=list-inline-item><a class=header_top_iconbox href="{{ url('account#wishlist') }}">
                                    <div class="d-block d-md-flex">
                                        <div class=icon><span class=flaticon-heart></span><span class=badge>{{ 0 }}</span></div>
                                        <div class=details>
                                            <p class=subtitle>Wishlist</p>
                                            <h5 class=title>My Items</h5>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=list-inline-item><a class="header_top_iconbox signin-filter-btn"
                                                          href="">
                                    <div class="d-block d-md-flex">
                                        <div class=icon><span class=flaticon-profile></span></div>
                                        <div class=details>
                                            <p class=subtitle>Sign In</p>
                                            <h5 class=title>Account</h5>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=list-inline-item><a class="header_top_iconbox cart-filter-btn"
                                                          href="#">
                                    <div class="d-block d-md-flex">
                                        <div class=icon><span><img src="{{asset('images/icons/flaticon-shopping-cart-white.svg')}}"
                                                                   alt=""></span><span class=badge>2</span></div>
                                        <div class=details>
                                            <p class=subtitle>$200.99</p>
                                            <h5 class=title>Total</h5>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<header class="header-nav menu_style_home_one main-menu">
    <nav class=posr>
        <div class="container posr menu_bdrt1">
            <div class=menu-toggle>
                <button type=button id=menu-btn>
                    <span class=icon-bar></span>
                    <span class=icon-bar></span>
                    <span class=icon-bar></span>
                </button>
            </div>
            <div class="posr logo1 home1_style">
                <div id=mega-menu>
                    <a class=btn-mega href="#">
                        <img class=me-2 src="{{asset('images/desktop-nav-menu-white.svg')}}" alt="Desktop Menu Icon">
                        <span class="fw500 fz16 color-white vam">Browse Categories</span>
                    </a>
                    <ul class=menu>
                        @foreach(app('categories') as $category)
                            <li>
                                <a class=dropdown href="{{ url("shop?category={$category->slug}")}}">
                                    <span class=menu-title>{{ $category->name }}</span>
                                </a>
                                <div class=drop-menu>
                                    <div class=one-third>
                                        <div class=cat-title>{{ $category->name }}</div>
                                        <ul class=mb20>
                                            @foreach($category->subCategories as $subCategory)
                                                <li><a href="{{ url("shop?sub-category={$subCategory->slug}") }}">
                                                        {{ $subCategory->name }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <ul id=respMenu class="ace-responsive-menu menu_list_custom_code wa pl200" data-menu-style=horizontal>
                <li class=visible_list>
                    <a href=""><span class=title>Home</span></a>
                </li>

                <li class=visible_list>
                    <a href="{{ url('home/stores') }}"><span class=title>Our Stores</span></a>
                </li>
                <li class=visible_list> <a href="#"><span class=title>Brands</span></a>
                    <ul>
                        @foreach (app('brands') as $brand)
                            <li><a href="{{ url("shop?brand={$brand->slug}") }}">{{ $brand->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class=visible_list>
                    <a href="{{ url('home/about-us') }}"><span class=title>About us</span></a>
                </li>
                <li class=visible_list>
                    <a href="{{ url('home/contact-us') }}"><span class=title>Contact Us</span></a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class=hiddenbar-body-ovelay></div>
<div class=signin-hidden-sbar>
    <div class=hsidebar-header>
        <div class=sidebar-close-icon><span class=flaticon-close></span></div>
        <h4 class=title>Sign-In</h4>
    </div>
    <div class=hsidebar-content>
        <div class="log_reg_form sidebar_area">
            <div class=login_form>
                <form action=#>
                    <div class="mb-2 mr-sm-2">
                        <label class=form-label>Username or email address</label>
                        <input class=form-control placeholder="Ali Tufan">
                    </div>
                    <div class="form-group mb5">
                        <label class=form-label>Password</label>
                        <input type=password class=form-control placeholder=Password>
                    </div>
                    <div class="custom-control custom-checkbox">
                        <input type=checkbox class=custom-control-input id=exampleCheck3>
                        <label class=custom-control-label for=exampleCheck3>Remember me</label>
                        <a class="btn-fpswd float-end" href="#">Lost your password?</a>
                    </div>
                    <button type=submit class="btn btn-log btn-thm mt20">Login</button>
                    <p class="text-center mb25 mt10">Don't have an account? <a class=signup-filter-btn
                                                                               href="#">Create account</a>
                    </p>
                    <div class=hr_content>
                        <hr>
                        <span class=hr_top_text>or</span>
                    </div>
                    <ul class="login_with_social text-center mt30 mb0">
                        <li class=list-inline-item><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li class=list-inline-item><a href="#"><i class="fab fa-google"></i></a></li>
                        <li class=list-inline-item><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class=list-inline-item><a href="#"><i class="fab fa-apple"></i></a></li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</div>
<div class=cart-hidden-sbar>
    <div class=hsidebar-header>
        <div class=sidebar-close-icon><span class=flaticon-close></span></div>
        <h4 class=title>Your Cart</h4>
    </div>
    <div class=hsidebar-content>
        <div class="log_fav_cart_widget hsidebar_home_page">
            <div class=wrapper>
                <ul class=cart>
                    <li class=list-inline-item>
                        <ul class=dropdown_content>
                            <li class=list_content>
                                <div>
                                    <img class="float-start mt10" src="{{asset('images/shop/s1.png')}}" alt=75x75>
                                    <p>Apple MacBook Pro with Apple M1 Chip</p>
                                    <div class="cart_btn home_page_sidebar mt10">
                                        <div class="quantity-block home_page_sidebar">
                                            <button class="quantity-arrow-minus home_page_sidebar"><img
                                                    src="{{asset('images/icons/minus.svg')}}" alt=""></button>
                                            <input class="quantity-num home_page_sidebar" type=number value=3>
                                            <button class="quantity-arrow-plus home_page_sidebar"><span
                                                    class=flaticon-close></span></button>
                                        </div>
                                        <span class="home_page_sidebar price">$3.399</span>
                                    </div>
                                    <span class=close_icon><i class=flaticon-close></i></span>
                                </div>
                            </li>
                            <li class=list_content>
                                <div>
                                    <img class="float-start mt10" src="{{asset('images/shop/s2.png')}}" alt=75x75>
                                    <p>Apple MacBook Pro with Apple M1 Chip</p>
                                    <div class="cart_btn home_page_sidebar mt10">
                                        <div class="quantity-block home_page_sidebar">
                                            <button class="quantity-arrow-minus2 home_page_sidebar"><img
                                                    src="{{asset('images/icons/minus.svg')}}" alt=""></button>
                                            <input class="quantity-num2 home_page_sidebar" type=number value=3>
                                            <button class="quantity-arrow-plus2 home_page_sidebar"><span
                                                    class=flaticon-close></span></button>
                                        </div>
                                        <span class="home_page_sidebar price">$3.399</span>
                                    </div>
                                    <span class=close_icon><i class=flaticon-close></i></span>
                                </div>
                            </li>
                            <li class=list_content_total_price>
                                <h5>Total: <span class="total_price float-end">$6.225.98</span></h5>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class=hsidebar_footer_content>
        <div class=list_last_content>
            <div class=lc>
                <p class=para>Buy $98.00 more to enjoy FREE Shipping</p>
                <div class="uilayout_range home1_style">
                    <div class="sidebar_range_slider mb30 mt25">
                        <input class=range-example-km value=80>
                    </div>
                </div>
                <a href="#" class="cart_btns btn btn-white">View Cart</a>
                <a href="#" class="checkout_btns btn btn-thm">Checkout</a>
            </div>
        </div>
    </div>
</div>
<div class=signup-hidden-sbar>
    <div class=hsidebar-header>
        <div class=sidebar-close-icon><span class=flaticon-close></span></div>
        <h4 class=title>Create Your Account</h4>
    </div>
    <div class=hsidebar-content>
        <div class="log_reg_form sidebar_area">
            <div class=sign_up_form>
                <form action=#>
                    <div class=form-group>
                        <label class=form-label>Your Name</label>
                        <input class=form-control placeholder="Ali Tufan">
                    </div>
                    <div class=form-group>
                        <label class=form-label>Username</label>
                        <input class=form-control placeholder=alitfn>
                    </div>
                    <div class=form-group>
                        <label class=form-label>Your Email</label>
                        <input type=email class=form-control placeholder=creativelayers088@gmail.com>
                    </div>
                    <div class="form-group mb20">
                        <label class=form-label>Password</label>
                        <input type=password class=form-control placeholder=******************>
                    </div>
                    <button type=submit class="btn btn-signup btn-thm">Create Account</button>
                    <p class="text-center mb25 mt10">Already have an account? <a href="">Sign in</a>
                    </p>
                    <div class=hr_content>
                        <hr>
                        <span class=hr_top_text>or</span>
                    </div>
                    <ul class="login_with_social text-center mt30 mb0">
                        <li class=list-inline-item><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li class=list-inline-item><a href="#"><i class="fab fa-google"></i></a></li>
                        <li class=list-inline-item><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class=list-inline-item><a href="#"><i class="fab fa-apple"></i></a></li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</div>
<div id=page class=stylehome1>
    <div class=mobile-menu>
        <div class="header stylehome1">
            <div class=menu_and_widgets>
                <div class="mobile_menu_bar float-start">
                    <a class=menubar href="#menu"><span></span></a>
                    <a class=mobile_logo href="#">BENSU<span class=text-thm>.</span></a>
                </div>
                <div class=mobile_menu_widget_icons>
                    <ul class="cart mt15">
                        <li class=list-inline-item>
                            <a class="cart_btn signin-filter-btn" href="#"><span
                                    class="icon flaticon-profile"></span></a>
                        </li>
                        <li class=list-inline-item>
                            <a class="cart_btn cart-filter-btn" href="#"><span class=icon><img
                                        src="{{asset('images/icons/flaticon-shopping-cart-white.svg')}}" alt=""></span><span
                                    class="badge bgc-thm">2</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=mobile_menu_search_widget>
                <div class=header_middle_advnc_search>
                    <div class="container search_form_wrapper">
                        <div class=row>
                            <div>
                                <x-site.search-bar :products="$products" />
                            </div>
                            <div>
                                <div class=advscrh_frm_btn>
                                    <button type=submit class="btn search-btn"><span class=flaticon-search></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=posr>
                <div class=mobile_menu_close_btn><span class=flaticon-close></span></div>
            </div>
        </div>
    </div>
    <nav id=menu class=stylehome1>
        <ul>
            <li><span>Home</span>
                <ul>
                    <li><a href="">Home V1</a></li>
                    <li><a href="index2.html">Home V2</a></li>
                    <li><a href="index3.html">Home V3</a></li>
                    <li><a href="index4.html">Home V4</a></li>
                    <li><a href="index5.html">Home V5</a></li>
                    <li><a href="index6.html">Home V6</a></li>
                    <li><a href="index7.html">Home V7</a></li>
                    <li><a href="index8.html">Home V8</a></li>
                    <li><a href="index9.html">Home V9</a></li>
                    <li><a href="index10.html">Home V10</a></li>
                </ul>
            </li>
            <li><span>Shop</span>
                <ul>
                    <li><span>Shop Listing</span>
                        <ul>
                            <li><a href="page-shop-list-v1.html">Listing v1</a></li>
                            <li><a href="page-shop-list-v2.html">Listing v2</a></li>
                            <li><a href="page-shop-list-v3.html">Listing v3</a></li>
                            <li><a href="page-shop-list-v4.html">Listing v4</a></li>
                            <li><a href="page-shop-list-v5.html">Listing v5</a></li>
                            <li><a href="page-shop-list-v6.html">Listing v6</a></li>
                            <li><a href="page-shop-list-v7.html">Listing v7</a></li>
                            <li><a href="page-shop-list-v8.html">Listing v8</a></li>
                        </ul>
                    </li>
                    <li><span>Shop Single</span>
                        <ul>
                            <li><a href="page-shop-single-v1.html">Version 1</a></li>
                            <li><a href="page-shop-single-v2.html">Version 2</a></li>
                            <li><a href="page-shop-single-v3.html">Version 3</a></li>
                            <li><a href="page-shop-single-v4.html">Version 4</a></li>
                            <li><a href="page-shop-single-v5.html">Version 5</a></li>
                            <li><a href="page-shop-single-color-switch.html">Color Switch</a></li>
                            <li><a href="page-shop-single-image-switch.html">Image Switch</a></li>
                            <li><a href="page-shop-single-countdown.html">Single Countdown</a></li>
                            <li><a href="page-shop-single-external-product.html">External Product</a></li>
                            <li><a href="page-shop-single-grouped-product.html">Grouped Product</a></li>
                            <li><a href="page-shop-single-bought-together.html">Bought Together</a></li>
                        </ul>
                    </li>
                    <li><span>User Dashboard</span>
                        <ul>
                            <li><a href="page-dashboard.html">Dashboard</a></li>
                            <li><a href="page-dashboard-order.html">Orders</a></li>
                            <li>
                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html">Downloads</a>
                            </li>
                            <li>
                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-address.html">Addresses</a>
                            </li>
                            <li>
                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-account-details.html">Account
                                    Details</a></li>
                            <li>
                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html">Wishlist</a>
                            </li>
                            <li><a href="page-login.html">Logout</a></li>
                        </ul>
                    </li>
                    <li><span>Shop Pages</span>
                        <ul>
                            <li><a href="page-shop-cart.html">Cart</a></li>
                            <li><a href="page-shop-checkout.html">Checkout</a></li>
                            <li><a href="page-shop-order-received.html">Order Received</a></li>
                            <li><a href="page-order-tracking.html">Order Tracking</a></li>
                            <li>
                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-store-location.html">Store
                                    Locator</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><span>Pages</span>
                <ul>
                    <li><a href="page-about.html">About Us</a></li>
                    <li><span>Accounts</span>
                        <ul>
                            <li><a href="page-account-details.html">Account Details</a></li>
                            <li><a href="page-account-order.html">Account Order</a></li>
                            <li><a href="page-account-address.html">Account Address</a></li>
                            <li><a href="page-account-wishlist.html">Account Wishlist</a></li>
                            <li><a href="page-account-invoice.html">Account Invoice</a></li>
                        </ul>
                    </li>
                    <li><a href="page-become-vendor.html">Become Vendor</a></li>
                    <li><span>Vendor Pages</span>
                        <ul>
                            <li><a href="page-vendor-list.html">Vendor List</a></li>
                            <li><a href="page-vendor-single.html">Vendor Single</a></li>
                            <li><a href="page-dashboard.html">Dashboard</a></li>
                            <li><a href="page-dashboard-products.html">Products</a></li>
                            <li><a href="page-dashboard-order.html">Order</a></li>
                            <li><a href="page-dashboard-customer.html">Customer</a></li>
                            <li><a href="page-dashboard-categories.html">Categories</a></li>
                            <li><a href="page-dashboard-message.html">Message</a></li>
                            <li><a href="page-dashboard-setting.html">Settings</a></li>
                        </ul>
                    </li>
                    <li><a href="page-brands.html">Brands</a></li>
                    <li><a href="page-contact.html">Contact</a></li>
                    <li><a href="page-coming-soon.html">Coming Soon</a></li>
                    <li><a href="page-help.html">Help</a></li>
                    <li><a href="page-error.html">404 Page</a></li>
                    <li><a href="page-faq.html">Faq</a></li>
                    <li><a href="page-invoices.html">Invoices</a></li>
                    <li><a href="page-login.html">Login</a></li>
                    <li><a href="page-register.html">Register</a></li>
                    <li><a href="page-terms.html">Terms and Conditions</a></li>
                    <li><a href="page-ui-element.html">UI Elements</a></li>
                </ul>
            </li>
            <li><span>Blog</span>
                <ul>
                    <li><a href="page-blog-grid.html">Blog Grid</a></li>
                    <li><a href="page-blog-grid-sidebar.html">Blog Grid Sidebar</a></li>
                    <li><a href="page-blog-details.html">Blog Details</a></li>
                    <li><a href="page-blog-list.html">Blog List</a></li>
                    <li><a href="page-blog-single.html">Blog Single</a></li>
                    <li><a href="page-blog-single2.html">Blog Single v2</a></li>
                </ul>
            </li>
            <li class="title my-3 bb1 pl20 fz20 fw500 pb-3">Departments</li>
            <li><span><i class="flaticon-cooking mr20"></i>Home & Kitchen</span>
                <ul>
                    <li><a href="page-shop-list-v1.html">Home & Kitchen</a></li>
                </ul>
            </li>
            <li><span><i class="flaticon-armchair mr20"></i>Home & Furniture</span>
                <ul>
                    <li><a href="page-shop-list-v1.html">Home & Furniture</a></li>
                </ul>
            </li>
            <li><span><i class="flaticon-smartphone-1 mr20"></i>Electronics</span>
                <ul>
                    <li><a href="page-shop-list-v1.html">Electronics</a></li>
                </ul>
            </li>
            <li><span><i class="flaticon-bride-dress mr20"></i>Clothing & Accessories</span>
                <ul>
                    <li><a href="page-shop-list-v1.html">Clothing & Accessories</a></li>
                </ul>
            </li>
            <li><span><i class="flaticon-heart-beat mr20"></i>Health & Beauty</span>
                <ul>
                    <li><a href="page-shop-list-v1.html">Health & Beauty</a></li>
                </ul>
            </li>
            <li><span><i class="flaticon-volleyball mr20"></i>Sport & Outdoor</span>
                <ul>
                    <li><a href="page-shop-list-v1.html">Sport & Outdoor</a></li>
                </ul>
            </li>
            <li><span><i class="flaticon-groceries mr20"></i>Grocery & Market</span>
                <ul>
                    <li><a href="page-shop-list-v1.html">Grocery & Market</a></li>
                </ul>
            </li>
            <li><span><i class="flaticon-remote-control mr20"></i>Toy & Video Games</span>
                <ul>
                    <li><a href="page-shop-list-v1.html">Toy & Video Games</a></li>
                </ul>
            </li>
            <li><span><i class="flaticon-feeding-bottle mr20"></i>Babies & Moms</span>
                <ul>
                    <li><a href="page-shop-list-v1.html">Babies & Moms</a></li>
                </ul>
            </li>
            <li><a class="tdu text-thm1 text-capitalize" href="#">See More <i
                        class="far fa-angle-down"></i></a></li>
        </ul>
    </nav>
</div>
