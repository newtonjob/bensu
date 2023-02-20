<div class="header_middle pt20 pb20 dn-992 dark_blue">
    <div class=container>
        <div class=row>
            <div class="col-lg-2 col-xxl-2">
                <div class=header_top_logo_home1>
                    <div class="logo">
                        <a class=logo  style=font-size:32px href="{{ url('home') }}">BENSU<span class=text-thm>.</span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-xxl-6">
                <div class=header_middle_advnc_search>
                    <div class=search_form_wrapper>
                        <div class=row>
                            <div class="col-auto pr0">
                                <div class=actegory>
                                    <form action="{{ route('shop') }}" onChange="submit()">
                                        <select class=selectpicker id=selectbox_alCategory name="category">
                                            <option value="Allcategory">All Category</option>
                                            @foreach(app('categories') as $category)
                                                <option value="{{ $category->slug }}" @selected(request('category') == $category->slug)>
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </form>
                                </div>
                            </div>
                            @php($products = app('featured_products')->take(5))
                            <x-site.search-bar :products="$products" id="search"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-xxl-4 pr0-lg">
                <div class="hm_log_fav_cart_widget justify-content-center">
                    <div class=wrapper>
                        <ul class=mb0>
                            <li class=list-inline-item>
                                <a class="header_top_iconbox signin-filter-btn" href="">
                                    <div class="d-block d-md-flex">
                                        <div class=icon><span class=flaticon-profile></span></div>
                                        <div class=details>
                                            <p class=subtitle>Sign In</p>
                                            <h5 class=title>Account</h5>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=list-inline-item>
                                <a class=header_top_iconbox href="{{ url('account#wishlist') }}">
                                    <div class="d-block d-md-flex">
                                        <div class=icon><span class=flaticon-heart></span><span class=badge>{{ 0 }}</span></div>
                                        <div class=details>
                                            <p class=subtitle>Wishlist</p>
                                            <h5 class=title>My Items</h5>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class=list-inline-item>
                                <a class="header_top_iconbox cart-filter-btn" href="#">
                                    <div class="d-block d-md-flex">
                                        <div class=icon>
                                            <span>
                                                <img src="{{asset('images/icons/flaticon-shopping-cart-white.svg')}}" alt="">
                                            </span>
                                            <span class=badge>2</span>
                                        </div>
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
<header class="header-nav menu_style_home_one main-menu light_blue">
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
                                                <li>
                                                    <a href="{{ url("shop?sub-category={$subCategory->slug}") }}">
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
                    <a href="{{ url('home') }}"><span class=title>Home</span></a>
                </li>

                <li class=visible_list>
                    <a href="{{ url('shop') }}"><span class=title>Shop</span></a>
                </li>

                <li class=visible_list> <a href="#"><span class=title>Brands</span></a>
                    <ul>
                        @foreach (app('brands') as $brand)
                            <li><a href="{{ url("shop?brand={$brand->slug}") }}">{{ $brand->name }}</a></li>
                        @endforeach
                    </ul>
                </li>
                 <li class=visible_list>
                    <a href="{{ url('home/stores') }}"><span class=title>Our Stores</span></a>
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
                    <p class="text-center mb25 mt10">
                        Don't have an account? <a class=signup-filter-btn href="#">Create account</a>
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
        <div class="header stylehome1  dark_blue">
            <div class=menu_and_widgets>
                <div class="mobile_menu_bar float-start">
                    <a class=menubar href="#menu"><span></span></a>
                    <a class=mobile_logo href="">BENSU<span class=text-thm>.</span></a>
                </div>
                <div class=mobile_menu_widget_icons>
                    <ul class="cart mt15">
                        <li class=list-inline-item>
                            <a class="cart_btn signin-filter-btn" href="#">
                                <span class="icon flaticon-profile"></span>
                            </a>
                        </li>
                        <li class=list-inline-item>
                            <a class="cart_btn" href="{{ url('account#wishlist') }}">
                                <span class="icon flaticon-heart"></span><span class="badge bgc-thm">{{ 0 }}</span>
                            </a>
                        </li>
                        <li class=list-inline-item>
                            <a class="cart_btn cart-filter-btn" href="#">
                                <span class=icon>
                                    <img src="{{asset('images/icons/flaticon-shopping-cart-white.svg')}}" alt="">
                                </span>
                                <span class="badge bgc-thm">2</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class=mobile_menu_search_widget>
                <div class=header_middle_advnc_search>
                    <div class="container search_form_wrapper">
                        <div class=row>
                            <div>
                                <x-site.search-bar :products="$products" id="mobile_search" style="min-width: 295px;"/>
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
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{ url('home/stores') }}">Our Stores</a></li>
            <li><span>Brands</span>
                <ul>
                    @foreach (app('brands') as $brand)
                        <li><a href="{{ url("shop?brand={$brand->slug}") }}">{{ $brand->name }}</a></li>
                    @endforeach
                </ul>
            </li>
            <li><a href="{{ url('home/about-us') }}">About us</a></li>
            <li><a href="{{ url('home/contact-us') }}">Contact Us</a></li>
            <li class="title my-3 bb1 pl20 fz20 fw500 pb-3">CATEGORIES</li>
            @foreach(app('categories') as $category)
                <li><span>{{ $category->name }}</span>
                    <ul>
                        @foreach($category->subCategories as $subCategory)
                            <li><a href="{{ url("shop?sub-category={$subCategory->slug}") }}">
                                    {{ $subCategory->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    </nav>
</div>
