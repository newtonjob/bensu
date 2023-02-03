<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $description ?? site('description') }}">
    <meta name="keywords" content="{{ $keywords ?? '' }}">
    <meta name="author" content="Newton Job - 07011227815">

    <meta property="og:site_name" content="{{ config('app.name') }}"/>
    <meta property="og:title" content="{{ $title ?? config('app.name') }}"/>
    <meta property="og:description" content="{{ $description ?? site('description') }}"/>
    <meta property="og:image" content="{{ $image ?? '' }}"/>

    <title>{{ $title ?? config('app.name') }}</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/logo/favicon.png') }}">
    <link rel="shortcut icon" type="image/png" sizes="16x16" href="{{ asset('img/logo/favicon.png') }}">

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('css/plugins.css')}}">
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css?v=3')}}">

    <!-- Plugins JS -->
    <script src="{{ asset('js/plugins.js') }}"></script>

    <!-- Google Ads -->
    <script data-ad-client="ca-pub-9149860498484877" async
            src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>

<body>
<!--header area start-->

<!--Offcanvas menu area start-->
<div class="off_canvars_overlay">

</div>
<div class="Offcanvas_menu">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="canvas_open">
                    <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                </div>
                <div class="Offcanvas_menu_wrapper">
                    <div class="canvas_close">
                        <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                    </div>
                    <div class="support_info">
                        <p>Telephone Enquiry: {{ site('phone') }}</p>
                    </div>
                    <div class="top_right text-right">
                        <ul id="account-menu1">
                            <li>
                                <a href="{{ url('account')}}">
                                    @auth
                                        {{ user('name') }}
                                    @else
                                        My Account
                                    @endauth
                                </a>
                            </li>
                            <li><a href="{{ url('shop/checkout')}}"> Checkout </a></li>

                            @auth
                                <li><a href="{{ url('auth/logout')}}"> Logout </a></li>
                            @endauth
                        </ul>
                    </div>
                    <div class="search_container" id="div-search1">
                        <form action="{{ url('shop') }}">
                            <div class="hover_category">
                                <select class="select_option" name="cat" id="categori" aria-label="categories">
                                    <option value="">All Categories</option>

                                    @foreach (app('categories') as $category)
                                        <option value="{{ $category->slug }}"
                                            @selected(request('category') == $category->slug)>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="search_box">
                                <input placeholder="Search product..." type="text" name="q" aria-label="search"
                                       value="{{ request('q') }}" minlength="2">
                                <button type="submit">Search</button>
                            </div>
                        </form>
                    </div>

                    <div class="middel_right_info v1">
                        <div class="header_wishlist">
                            <a href="{{ url('account#wishlist') }}"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            <span class="wishlist_quantity">{{ 0 }}</span> {{--Todo: Implement wishlist count--}}
                        </div>
                        <div class="mini_cart_wrapper">
                            {{--Todo: Implement mini cart--}}
                        </div>
                    </div>
                    <div id="menu" class="text-left">
                        <ul class="offcanvas_main_menu">
                            <li class="menu-item-has-children active"><a href="{{ route('home') }}">Home</a></li>
                            <li class="menu-item-has-children"><a href="{{ url('shop') }}">Shop</a></li>
                            <li class="menu-item-has-children"><span class="menu-expand"><i class="fa fa-angle-down"></i></span>
                                <a href="#">Brands</a>
                                <ul class="sub-menu" style="display: none;">
                                    @foreach (app('brands') as $brand)
                                        <li><a href="{{ url("shop?b={$brand->slug}") }}">{{ $brand->name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <!--<li class="menu-item-has-children">
                                <a href="#">Our Apps</a>
                                <ul class="sub-menu">
                                    <li><a href="javascript:void()">BodyCam</a></li>
                                    <li><a href="javascript:void()">CCTV</a></li>
                                    <li><a href="javascript:void()">Spy</a></li>
                                    <li><a href="javascript:void()">Smart Homes</a></li>
                                    <li><a href="javascript:void()">Tracking</a></li>
                                </ul>
                            </li>-->
                            <li class="menu-item-has-children"><a href="{{ url('account')}}">My Account</a></li>
                            <li class="menu-item-has-children"><a href="{{ url('home/about-us')}}">about Us</a></li>
                            <li class="menu-item-has-children"><a href="{{ url('home/stores')}}"> Our Stores</a></li>
                            <li class="menu-item-has-children"><a href="{{ url('home/contact-us')}}"> Contact Us</a>
                            </li>
                        </ul>
                    </div>

                    <div class="Offcanvas_footer">
                        <span><a href="#"><i class="fa fa-envelope-o"></i> {{ site('email') }}</a></span>
                        <ul>
                            <li class="facebook"><a href="{{ site('social_links')->facebook }}"><i
                                        class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a href="{{ site('social_links')->twitter }}"><i
                                        class="fa fa-twitter"></i></a></li>
                            <li class="instagram"><a href="{{ site('social_links')->instagram }}"><i
                                        class="fa fa-instagram"></i></a></li>
                            <li class="linkedin"><a href="{{ site('social_links')->linkedin }}"><i
                                        class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Offcanvas menu area end-->

<header>
    <div class="main_header">
        <!--header top start-->
        <div class="header_top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="support_info">
                            <p>Telephone Enquiry: {{ site('phone') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="top_right text-right">
                            <ul id="account-menu2">

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header top start-->
        <!--header middel start-->
        <div class="header_middle">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="logo">
                            <a href="{{ route('home') }}"><img src="{{ site('logo') }}" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-6">
                        <div class="middel_right">
                            <div class="search_container" id="div-search2"></div>
                            <div class="middel_right_info v2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header middel end-->
        <!--header bottom satrt-->
        <div class="main_menu_area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-12">
                        <div class="categories_menu">
                            <div class="categories_title">
                                <h2 class="categori_toggle">ALL CATEGORIES</h2>
                            </div>
                            <div class="categories_menu_toggle">
                                <ul>
                                    @foreach (app('categories') as $category)
                                        <li class="menu_item_children">
                                            <a href="{{ url("shop?category={$category->slug}")}}">
                                                {{ $category->name }}
                                                <i class="fa fa-angle-right"></i>
                                            </a>
                                            <ul class="categories_mega_menu column_2">
                                                <li class="menu_item_children"><a href="#">Products</a>
                                                    <ul class="categorie_sub_menu">
                                                        @foreach ($category->subCategories as $subCategory)
                                                            <li>
                                                                <a href="{{ url("shop?sub-category={$subCategory->slug}") }}">
                                                                    {{ $subCategory->name }}
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-12">
                        <div class="main_menu menu_position">
                            <nav>
                                <ul>
                                    <li><a class="active" href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ url('shop') }}">Shop</a></li>
                                    <li>
                                        <a href="#">Brands</a>
                                        <ul class="sub_menu">
                                            @foreach (app('brands') as $brand)
                                                <li><a href="{{ url("shop?brand={$brand->slug}") }}">{{ $brand->name }}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <!--<li>
                                        <a href="#">Our Apps</a>
                                        <ul class="sub_menu">
                                            <li><a href="javascript:void()">BodyCam</a></li>
                                            <li><a href="javascript:void()">CCTV</a></li>
                                            <li><a href="javascript:void()">Spy</a></li>
                                            <li><a href="javascript:void()">Smart Homes</a></li>
                                            <li><a href="javascript:void()">Tracking</a></li>
                                        </ul>
                                    </li>-->
                                    <li><a href="{{ url('account')}}">My Account</a></li>
                                    <li><a href="{{ url('home/about-us')}}">About Us</a></li>
                                    <li><a href="{{ url('home/stores')}}"> Our Stores</a></li>
                                    <li><a href="{{ url('home/contact-us')}}"> Contact Us</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--header bottom end-->
    </div>
</header>
<!--header area end-->

<!--sticky header area start-->
<div class="sticky_header_area sticky-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3">
                <div class="logo">
                    <a href="#"><img src="{{ asset('img/logo/logo.png')}}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="sticky_header_right menu_position">
                    <div class="main_menu">
                        <nav>
                            <ul>
                                <li><a class="active" href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ url('shop') }}">Shop</a></li>
                                <li>
                                    <a href="#">Brands</a>
                                    <ul class="sub_menu">
                                        @foreach (app('brands') as $brand)
                                            <li><a href="{{ url("shop?brand={$brand->slug}") }}">{{ $brand->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <!--<li>
                                    <a href="#">Our Apps</a>
                                    <ul class="sub_menu">
                                        <li><a href="javascript:void()">BodyCam</a></li>
                                        <li><a href="javascript:void()">CCTV</a></li>
                                        <li><a href="javascript:void()">Spy</a></li>
                                        <li><a href="javascript:void()">Smart Homes</a></li>
                                        <li><a href="javascript:void()">Tracking</a></li>
                                    </ul>
                                </li>-->
                                <li><a href="{{ url('account')}}">My Account</a></li>
                                <li><a href="{{ url('home/about-us')}}">about Us</a></li>
                                <li><a href="{{ url('home/stores')}}"> Our Stores</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="middel_right_info v2"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--sticky header area end-->

{{ $slot }}

<!--footer area start-->
<footer class="footer_widgets">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="widgets_container contact_us">
                        <div class="footer_logo">
                            <a href="#"><img src="{{ site('logo') }}" alt=""></a>
                        </div>
                        <div class="footer_contact">
                            <p>{{ site('footer_quote') }}</p>
                            <p><span>Address: </span> {{ site('address') }}</p>
                            <p><span>Mobile: </span> {{ site('phone') }}</p>
                            <p>
                                <span>Support: </span>
                                <a target="_blank" href="mailto:{{ site('email') }}">{{ site('email') }}</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widgets_container widget_menu">
                        <h3>Top Categories</h3>
                        <div class="footer_menu">
                            <ul>
                                @foreach (app('categories')->filter->isFeatured()->take(5) as $category)
                                    <li>
                                        <a href="{{ url("shop?category={$category->slug}") }}">{{ $category->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="widgets_container widget_menu">
                        <h3>Information</h3>
                        <div class="footer_menu">
                            <ul>
                                <li><a href="{{ url('home/account') }}">My Account</a></li>
                                <li><a href="{{ url('shop') }}">Shop</a></li>
                                <li><a href="{{ url('home/about-us') }}">About us</a></li>
                                <li><a href="{{ url('home/contact-us') }}">Contact Us</a></li>
                                <li><a href="#">Refund</a></li>
                                <li><a href="{{ url('home/privacy-policy') }}">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="widgets_container newsletter">
                        <h3>Follow Us</h3>
                        <div class="footer_social_link">
                            <ul>
                                <li><a class="facebook" target="_blank" href="{{ site('social_links')->facebook }}"
                                       title="Facebook"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a class="twitter" target="_blank" href="{{ site('social_links')->twitter }}"
                                       title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li><a class="instagram" target="_blank" href="{{ site('social_links')->instagram }}"
                                       title="instagram"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li><a class="linkedin" target="_blank" href="{{ site('social_links')->linkedin }}"
                                       title="linkedin"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="subscribe_form">
                            <h3>Join Our Newsletter Now</h3>
                            <form id="mc-form" class="mc-form footer-newsletter">
                                <!-- Todo: Implement newsletter -->
                                <input id="mc-email" type="email" aria-label="email"
                                       placeholder="Your email address..."/>
                                <button id="mc-submit">Subscribe!</button>
                            </form>
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div><!-- mailchimp-alerts end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer_bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="copyright_area">
                        <p>Copyright &copy; {{ date('Y') }} <a href="#">{{ site('title') }}</a>. All Right Reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="footer_payment text-right">
                        <a href="#"><img src="{{ asset('img/icon/payment.png') }}" alt=""></a>
                    </div>
                </div>
            </div>

            <!-- ELFSIGHT WhatsApp Widget -->
            <!--<script src="https://apps.elfsight.com/p/platform.js" defer></script>
            <div class="elfsight-app-39a24c8a-ce6c-4b48-a4c0-78a3fd80f912"></div>-->
        </div>
    </div>
</footer>
<!--footer area end-->

<!-- modal area start-->
<div class="modal fade" id="modal_box" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal_body">
                <div class="container" id="div-quick-look">

                </div>
            </div>
        </div>
    </div>
</div>
<!-- modal area end-->

<!-- newsletter popup start-->
<!--<div class="newletter-popup">
    <div id="boxes" class="newletter-container">
        <div id="dialog" class="window">
            <div id="popup2">
                <span class="b-close"><span>close</span></span>
            </div>
            <div class="box">
                <div class="newletter-title">
                    <h2>Join Our Newsletter Now</h2>
                </div>
                <div class="box-content newleter-content">
                    <label class="newletter-label">Enter your email address to subscribe our notification of our new
                        post &amp; features by email.</label>
                    <div id="frm_subscribe">
                        <form name="subscribe" id="subscribe_popup">
                            <span class="required">*</span><span>Enter you email address here...</span>
                            <input type="text" value="" name="subscribe_pemail" id="subscribe_pemail"
                                   placeholder="Enter you email address here...">
                            <input type="hidden" value="" name="subscribe_pname" id="subscribe_pname">
                            <div id="notification"></div>
                            <a class="theme-btn-outlined" onclick="email_subscribepopup()"><span>Subscribe</span></a>
                        </form>
                        <div class="subscribe-bottom">
                            <input type="checkbox" id="newsletter_popup_dont_show_again">
                            <label for="newsletter_popup_dont_show_again">Don't show this popup again</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>-->
<!-- newsletter popup start-->

<!-- JS
============================================ -->
<!-- Main JS -->
<script src="{{ asset('js/main.js?v=5') }}"></script>

<script src="{{ asset('admin/js/bootstrap-notify.js?v=4') }}"></script>
<script src="{{ asset('admin/js/sweetalert.min.js') }}"></script>
<script src="{{ asset('admin/js/app.js?v=4') }}"></script>

<!-- WidgetWhats -->
<script async data-id="51138" src="https://cdn.widgetwhats.com/script.min.js"></script>

<script>
    $('#div-search2').html($('#div-search1').html());
    $('.middel_right_info.v2').html($('.middel_right_info.v1').html());
    $('#account-menu2').html($('#account-menu1').html());

    //$('.offcanvas_main_menu').html($('#main_menu').html());

    // Quick Look
    $(document).on('click', '.quick_button a', function (e) {
        e.preventDefault();

        $('#div-quick-look').html('Loading...');

        getRequest($(this).attr('href'), function (result) {
            if (result.status) {
                $('#div-quick-look').html(result.data.html);

                $('.product_navactive').owlCarousel({
                    autoplay: true,
                    loop: true,
                    nav: true,
                    autoplay: false,
                    autoplayTimeout: 8000,
                    items: 4,
                    dots: false,
                    navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                    responsiveClass: true,
                    responsive: {
                        0: {
                            items: 1,
                        },
                        250: {
                            items: 2,
                        },
                        480: {
                            items: 3,
                        },
                        768: {
                            items: 4,
                        },

                    }
                });

                $('.modal').on('shown.bs.modal', function (e) {
                    $('.product_navactive').resize();
                });

                $('.product_navactive a').on('click', function (e) {
                    e.preventDefault();

                    var $href = $(this).attr('href');

                    $('.product_navactive a').removeClass('active');
                    $(this).addClass('active');

                    $('.product-details-large .tab-pane').removeClass('active show');
                    $('.product-details-large ' + $href).addClass('active show');
                });

            }
        }, false);

    });

    // Add to Cart anchor
    $(document).on('click', '.add_to_cart a', function (e) {
        e.preventDefault();

        var xhr = getRequest($(this).attr('href'));
        xhr.done(function (result) {
            if (result.status) $('.mini_cart_wrapper').html(result.data.cart);
        });
    });

    // Add to cart form
    $(document).on('submit', '.form_add_to_cart', function (e) {
        e.preventDefault();

        var xhr = submitForm(this);
        xhr.done(function (result) {
            if (result.status) $('.mini_cart_wrapper').html(result.data.cart);
        });
    });

    // Add to Wishlist
    $(document).on('click', '.wishlist a', function (e) {
        e.preventDefault();

        var xhr = getRequest($(this).attr('href'));
        xhr.done(function (result) {

            let wl = $('.wishlist_quantity');

            if (result.status) wl.text(result.data.wishlist_count);
        });
    });

    // Remove From Cart
    $(document).on('click', '.cart-item-remove', function (e) {
        e.preventDefault();
        var a = $(this);
        var xhr = getRequest(a.attr('href'));
        xhr.done(function (result) {
            if (result.status) {
                a.parent().parent().fadeOut(function () {
                    //$(this).remove();
                    if (a.hasClass('refresh-after')) location.reload();
                });
                $('.mini_cart_wrapper').html(result.data.cart);
            }
        });
    });
</script>

<x-tawkto-scripts/>

</body>
</html>
