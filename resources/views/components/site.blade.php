<!doctype html>
<html dir=ltr lang=en>
<head>
    <meta charset=utf-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <meta name=keywords
          content="auto parts, baby store, ecommerce, electronics, fashion, food, marketplace, modern, multi vendor, multipurpose, organic, responsive, shop, shopping, store">
    <meta name=description content="Zeomart - Multi-Vendor & Marketplace HTML Template">
    <meta name=CreativeLayers content=ATFN>
    <link rel=stylesheet href="{{asset('css/bootstrap.min.css')}}">
    <link rel=stylesheet href="{{asset('css/ace-responsive-menu.css')}}">
    <link rel=stylesheet href="{{asset('css/menu.css')}}">
    <link rel=stylesheet href="{{asset('css/fontawesome.css')}}">
    <link rel=stylesheet href="{{asset('css/flaticon.css')}}">
    <link rel=stylesheet href="{{asset('css/bootstrap-select.min.css')}}">
    <link rel=stylesheet href="{{asset('css/animate.css')}}">
    <link rel=stylesheet href="{{asset('css/slider.css')}}">
    <link rel=stylesheet href="{{asset('css/style.css')}}">
    <link rel=preconnect href="https://fonts.googleapis.com">
    <link rel=preconnect href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500&family=Poppins:wght@700&display=swap"
          rel=stylesheet>
    <link rel=stylesheet href="css/responsive.css">
    <title>Zeomart - Multi-Vendor & Marketplace HTML Template</title>
    <link href="{{asset('images/favicon.ico')}}'" sizes=128x128 rel="shortcut icon" type=image/x-icon>
    <link href="{{asset('images/favicon.ico')}}'" sizes=128x128 rel="shortcut icon">
    <link href="{{asset('images/apple-touch-icon-60x60.png')}}" sizes=60x60 rel=apple-touch-icon>
    <link href="{{asset('images/apple-touch-icon-72x72.png')}}" sizes=72x72 rel=apple-touch-icon>
    <link href="{{asset('images/apple-touch-icon-114x114.png')}}" sizes=114x114 rel=apple-touch-icon>
    <link href="{{asset('images/apple-touch-icon-180x180.png')}}" sizes=180x180 rel=apple-touch-icon>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        .hero {
            background: #D1ECFD url("{{asset('images/home/bg-circle.svg')}}") no-repeat bottom right;
            /*			background-color: #fde8ed;*/
            background-size: 75% !important;
            height: 600px;
            padding: 24px 0 20px 0;
            position: relative;
            padding-left: 40px;
        }

        .hero1 {
            background: url("{{asset('images/home/banner.png')}}") no-repeat bottom right;
            background-size: 60% auto;
            height: 100%;
            display: inline-block;
            width: 100%;
        }
    </style>
</head>
<body>
<div class="wrapper ovh">
{{--    <div class=preloader></div>--}}
    <div class="header_middle pt20 pb20 dn-992">
        <div class=container>
            <div class=row>
                <div class="col-lg-2 col-xxl-2">
                    <div class=header_top_logo_home1>
                        <div class=logo>Zeomart<span class=text-thm>.</span></div>
                    </div>
                </div>
                <div class="col-lg-5 col-xxl-6">
                    <div class=header_middle_advnc_search>
                        <div class=search_form_wrapper>
                            <div class=row>
                                <div class="col-auto pr0">
                                    <div class=actegory>
                                        <select class=selectpicker id=selectbox_alCategory>
                                            <option value=AllCategory>All Category</option>
                                            <option value=Today’sHotDeals>Today’s Hot Deals</option>
                                            <option value=Babies&Moms>Babies & Moms</option>
                                            <option value=Clothing&Accessories>Clothing & Accessories</option>
                                            <option value=Electronics>Electronics</option>
                                            <option value=Grocery&Market>Grocery & Market</option>
                                            <option value=Health&Beauty>Health & Beauty</option>
                                            <option value=Home&Kitchen>Home & Kitchen</option>
                                            <option value=Home&Furniture>Home & Furniture</option>
                                            <option value=Health&Beauty>Health & Beauty</option>
                                            <option value=Sport&Outdoor>Sport & Outdoor</option>
                                            <option value=Toy&VideoGames>Toy & Video Games</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-auto p0">
                                    <div class=top-search>
                                        <form action=# class=form-search accept-charset=utf-8>
                                            <div class="box-search pre_line">
                                                <input class=form_control name=search placeholder="Search products…">
                                                <div class=search-suggestions>
                                                    <div class=box-suggestions>
                                                        <ul>
                                                            <li>
                                                                <div class=thumb><img src="{{asset('images/listing/sf1.png')}}"
                                                                                      alt=sf1.png></div>
                                                                <div class=info-product>
                                                                    <div class=item_title>Sony DJ Headphones 4334205465,
                                                                        Black, Standard
                                                                    </div>
                                                                    <div class=price><span class=sale>$32.50</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class=thumb><img src="{{asset('images/listing/sf2.png')}}"
                                                                                      alt=sf2.png></div>
                                                                <div class=info-product>
                                                                    <div class=item_title>Sony E-Mount Full Frame FE
                                                                        24-70mm f/2.8 GM II G Master
                                                                    </div>
                                                                    <div class=price><span class=sale>$32.50</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class=thumb><img src="{{asset('images/listing/sf3.png')}}"
                                                                                      alt=sf3.png></div>
                                                                <div class=info-product>
                                                                    <div class=item_title>TV 55" 4-Series 4K UHD smart
                                                                        TV
                                                                    </div>
                                                                    <div class=price><span class=sale>$32.50</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class=thumb><img src="{{asset('images/listing/sf4.png')}}"
                                                                                      alt=sf4.png></div>
                                                                <div class=info-product>
                                                                    <div class=item_title>Hugolog Baby Monitor, 2K
                                                                        Security Camera, PT Cameras for
                                                                    </div>
                                                                    <div class=price><span class=sale>$32.50</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class=thumb><img src="{{asset('images/listing/sf5.png')}}"
                                                                                      alt=sf5.png></div>
                                                                <div class=info-product>
                                                                    <div class=item_title>Apple iPhone Retina 6s Plus
                                                                        64GB
                                                                    </div>
                                                                    <div class=price><span class=sale>$32.50</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-auto p0">
                                    <div class=advscrh_frm_btn>
                                        <button type=submit class="btn search-btn"><span class=flaticon-search></span>
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
                                <li class=list-inline-item><a class=header_top_iconbox
                                                              href="page-account-wishlist.html">
                                        <div class="d-block d-md-flex">
                                            <div class=icon><span class=flaticon-heart></span></div>
                                            <div class=details>
                                                <p class=subtitle>Wishlist</p>
                                                <h5 class=title>My Items</h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class=list-inline-item><a class="header_top_iconbox signin-filter-btn"
                                                              href="index.html#">
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
                                                              href="index.html#">
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
                        <a class=btn-mega href="index.html#">
                            <img class=me-2 src="{{asset('images/desktop-nav-menu-white.svg')}}" alt="Desktop Menu Icon">
                            <span class="fw500 fz16 color-white vam">Browse Categories</span>
                        </a>
                        <ul class=menu>
                            <li>
                                <a class=dropdown href="index.html#">
                                    <span class="menu-icn flaticon-diamond"></span>
                                    <span class=menu-title>Today’s Hot Deals</span>
                                </a>
                                <div class=drop-menu>
                                    <div class=one-third>
                                        <div class=cat-title>Electronics</div>
                                        <ul class=mb20>
                                            <li><a href="index.html#">Shop All</a></li>
                                        </ul>
                                        <div class=cat-title>TV & Video</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">Shop all TVs</a></li>
                                            <li><a href="index.html#">TVs by Size</a></li>
                                            <li><a href="index.html#">Smart TVs</a></li>
                                            <li><a href="index.html#">Roku TVs</a></li>
                                            <li><a href="index.html#">Streaming</a></li>
                                            <li><a href="index.html#">TV Mounts & Accessories</a></li>
                                            <li><a href="index.html#">DVD & Blu-Ray Players</a></li>
                                        </ul>
                                    </div>
                                    <div class=one-third>
                                        <div class=cat-title>Computers</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">Shop All Computers</a></li>
                                            <li><a href="index.html#">Laptops</a></li>
                                            <li><a href="index.html#">Chromebook</a></li>
                                            <li><a href="index.html#">PC Gaming</a></li>
                                            <li><a href="index.html#">Desktops</a></li>
                                            <li><a href="index.html#">Monitors</a></li>
                                            <li><a href="index.html#">Networking</a></li>
                                            <li><a href="index.html#">Computer Accessories</a></li>
                                            <li><a href="index.html#">Computer Components</a></li>
                                            <li><a href="index.html#">Tax Software</a></li>
                                            <li><a href="index.html#">Computer Software</a></li>
                                        </ul>
                                    </div>
                                    <div class=one-third>
                                        <div class=cat-title>Cell Phones</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">Shop All Cell Phones</a></li>
                                            <li><a href="index.html#">Wireless Deals</a></li>
                                            <li><a href="index.html#">5G Phones</a></li>
                                            <li><a href="index.html#">iPhone</a></li>
                                            <li><a href="index.html#">Galaxy Phones</a></li>
                                            <li><a href="index.html#">Phone Chargers & Power Banks</a></li>
                                            <li><a href="index.html#">Grips & Phone Stands</a></li>
                                            <li><a href="index.html#">Phone Cables</a></li>
                                            <li><a href="index.html#">Car Mounts</a></li>
                                            <li><a href="index.html#">iPhone Accessories</a></li>
                                            <li><a href="index.html#">Cell Phone Accessory Deals</a></li>
                                        </ul>
                                    </div>
                                    <div class=one-third>
                                        <div class=cat-title>Smart Home</div>
                                        <ul class=mb20>
                                            <li><a href="index.html#">Shop All Smart Home</a></li>
                                            <li><a href="index.html#">Smart Assistants & Hubs</a></li>
                                            <li><a href="index.html#">Smart Security</a></li>
                                            <li><a href="index.html#">Smart Energy & Lighting</a></li>
                                        </ul>
                                        <div class=cat-title>Photo Services</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">All Photo Services</a></li>
                                            <li><a href="index.html#">Same Day Services</a></li>
                                            <li><a href="index.html#">Photo Cards</a></li>
                                            <li><a href="index.html#">Photo Gifts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class=dropdown href="index.html#">
                                    <span class="menu-icn flaticon-cooking"></span>
                                    <span class=menu-title>Home & Kitchen</span>
                                </a>
                                <div class=drop-menu>
                                    <div class=one-third>
                                        <div class=cat-title>Electronics</div>
                                        <ul class=mb20>
                                            <li><a href="index.html#">Shop All</a></li>
                                        </ul>
                                        <div class=cat-title>TV & Video</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">Shop all TVs</a></li>
                                            <li><a href="index.html#">TVs by Size</a></li>
                                            <li><a href="index.html#">Smart TVs</a></li>
                                            <li><a href="index.html#">Roku TVs</a></li>
                                            <li><a href="index.html#">Streaming</a></li>
                                            <li><a href="index.html#">TV Mounts & Accessories</a></li>
                                            <li><a href="index.html#">DVD & Blu-Ray Players</a></li>
                                        </ul>
                                    </div>
                                    <div class=one-third>
                                        <div class=cat-title>Computers</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">Shop All Computers</a></li>
                                            <li><a href="index.html#">Laptops</a></li>
                                            <li><a href="index.html#">Chromebook</a></li>
                                            <li><a href="index.html#">PC Gaming</a></li>
                                            <li><a href="index.html#">Desktops</a></li>
                                            <li><a href="index.html#">Monitors</a></li>
                                            <li><a href="index.html#">Networking</a></li>
                                            <li><a href="index.html#">Computer Accessories</a></li>
                                            <li><a href="index.html#">Computer Components</a></li>
                                            <li><a href="index.html#">Tax Software</a></li>
                                            <li><a href="index.html#">Computer Software</a></li>
                                        </ul>
                                    </div>
                                    <div class=one-third>
                                        <div class=cat-title>Cell Phones</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">Shop All Cell Phones</a></li>
                                            <li><a href="index.html#">Wireless Deals</a></li>
                                            <li><a href="index.html#">5G Phones</a></li>
                                            <li><a href="index.html#">iPhone</a></li>
                                            <li><a href="index.html#">Galaxy Phones</a></li>
                                            <li><a href="index.html#">Phone Chargers & Power Banks</a></li>
                                            <li><a href="index.html#">Grips & Phone Stands</a></li>
                                            <li><a href="index.html#">Phone Cables</a></li>
                                            <li><a href="index.html#">Car Mounts</a></li>
                                            <li><a href="index.html#">iPhone Accessories</a></li>
                                            <li><a href="index.html#">Cell Phone Accessory Deals</a></li>
                                        </ul>
                                    </div>
                                    <div class=one-third>
                                        <div class=cat-title>Smart Home</div>
                                        <ul class=mb20>
                                            <li><a href="index.html#">Shop All Smart Home</a></li>
                                            <li><a href="index.html#">Smart Assistants & Hubs</a></li>
                                            <li><a href="index.html#">Smart Security</a></li>
                                            <li><a href="index.html#">Smart Energy & Lighting</a></li>
                                        </ul>
                                        <div class=cat-title>Photo Services</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">All Photo Services</a></li>
                                            <li><a href="index.html#">Same Day Services</a></li>
                                            <li><a href="index.html#">Photo Cards</a></li>
                                            <li><a href="index.html#">Photo Gifts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class=dropdown href="index.html#">
                                    <span class="menu-icn flaticon-armchair"></span>
                                    <span class=menu-title>Home & Furniture</span>
                                </a>
                                <div class=drop-menu>
                                    <div class=one-third>
                                        <div class=cat-title>Electronics</div>
                                        <ul class=mb20>
                                            <li><a href="index.html#">Shop All</a></li>
                                        </ul>
                                        <div class=cat-title>TV & Video</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">Shop all TVs</a></li>
                                            <li><a href="index.html#">TVs by Size</a></li>
                                            <li><a href="index.html#">Smart TVs</a></li>
                                            <li><a href="index.html#">Roku TVs</a></li>
                                            <li><a href="index.html#">Streaming</a></li>
                                            <li><a href="index.html#">TV Mounts & Accessories</a></li>
                                            <li><a href="index.html#">DVD & Blu-Ray Players</a></li>
                                        </ul>
                                    </div>
                                    <div class=one-third>
                                        <div class=cat-title>Computers</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">Shop All Computers</a></li>
                                            <li><a href="index.html#">Laptops</a></li>
                                            <li><a href="index.html#">Chromebook</a></li>
                                            <li><a href="index.html#">PC Gaming</a></li>
                                            <li><a href="index.html#">Desktops</a></li>
                                            <li><a href="index.html#">Monitors</a></li>
                                            <li><a href="index.html#">Networking</a></li>
                                            <li><a href="index.html#">Computer Accessories</a></li>
                                            <li><a href="index.html#">Computer Components</a></li>
                                            <li><a href="index.html#">Tax Software</a></li>
                                            <li><a href="index.html#">Computer Software</a></li>
                                        </ul>
                                    </div>
                                    <div class=one-third>
                                        <div class=cat-title>Cell Phones</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">Shop All Cell Phones</a></li>
                                            <li><a href="index.html#">Wireless Deals</a></li>
                                            <li><a href="index.html#">5G Phones</a></li>
                                            <li><a href="index.html#">iPhone</a></li>
                                            <li><a href="index.html#">Galaxy Phones</a></li>
                                            <li><a href="index.html#">Phone Chargers & Power Banks</a></li>
                                            <li><a href="index.html#">Grips & Phone Stands</a></li>
                                            <li><a href="index.html#">Phone Cables</a></li>
                                            <li><a href="index.html#">Car Mounts</a></li>
                                            <li><a href="index.html#">iPhone Accessories</a></li>
                                            <li><a href="index.html#">Cell Phone Accessory Deals</a></li>
                                        </ul>
                                    </div>
                                    <div class=one-third>
                                        <div class=cat-title>Smart Home</div>
                                        <ul class=mb20>
                                            <li><a href="index.html#">Shop All Smart Home</a></li>
                                            <li><a href="index.html#">Smart Assistants & Hubs</a></li>
                                            <li><a href="index.html#">Smart Security</a></li>
                                            <li><a href="index.html#">Smart Energy & Lighting</a></li>
                                        </ul>
                                        <div class=cat-title>Photo Services</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">All Photo Services</a></li>
                                            <li><a href="index.html#">Same Day Services</a></li>
                                            <li><a href="index.html#">Photo Cards</a></li>
                                            <li><a href="index.html#">Photo Gifts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class=dropdown href="index.html#">
                                    <span class="menu-icn flaticon-smartphone-1"></span>
                                    <span class=menu-title>Electronics</span>
                                </a>
                                <div class=drop-menu>
                                    <div class=one-third>
                                        <div class=cat-title>Electronics</div>
                                        <ul class=mb20>
                                            <li><a href="index.html#">Shop All</a></li>
                                        </ul>
                                        <div class=cat-title>TV & Video</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">Shop all TVs</a></li>
                                            <li><a href="index.html#">TVs by Size</a></li>
                                            <li><a href="index.html#">Smart TVs</a></li>
                                            <li><a href="index.html#">Roku TVs</a></li>
                                            <li><a href="index.html#">Streaming</a></li>
                                            <li><a href="index.html#">TV Mounts & Accessories</a></li>
                                            <li><a href="index.html#">DVD & Blu-Ray Players</a></li>
                                        </ul>
                                    </div>
                                    <div class=one-third>
                                        <div class=cat-title>Computers</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">Shop All Computers</a></li>
                                            <li><a href="index.html#">Laptops</a></li>
                                            <li><a href="index.html#">Chromebook</a></li>
                                            <li><a href="index.html#">PC Gaming</a></li>
                                            <li><a href="index.html#">Desktops</a></li>
                                            <li><a href="index.html#">Monitors</a></li>
                                            <li><a href="index.html#">Networking</a></li>
                                            <li><a href="index.html#">Computer Accessories</a></li>
                                            <li><a href="index.html#">Computer Components</a></li>
                                            <li><a href="index.html#">Tax Software</a></li>
                                            <li><a href="index.html#">Computer Software</a></li>
                                        </ul>
                                    </div>
                                    <div class=one-third>
                                        <div class=cat-title>Cell Phones</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">Shop All Cell Phones</a></li>
                                            <li><a href="index.html#">Wireless Deals</a></li>
                                            <li><a href="index.html#">5G Phones</a></li>
                                            <li><a href="index.html#">iPhone</a></li>
                                            <li><a href="index.html#">Galaxy Phones</a></li>
                                            <li><a href="index.html#">Phone Chargers & Power Banks</a></li>
                                            <li><a href="index.html#">Grips & Phone Stands</a></li>
                                            <li><a href="index.html#">Phone Cables</a></li>
                                            <li><a href="index.html#">Car Mounts</a></li>
                                            <li><a href="index.html#">iPhone Accessories</a></li>
                                            <li><a href="index.html#">Cell Phone Accessory Deals</a></li>
                                        </ul>
                                    </div>
                                    <div class=one-third>
                                        <div class=cat-title>Smart Home</div>
                                        <ul class=mb20>
                                            <li><a href="index.html#">Shop All Smart Home</a></li>
                                            <li><a href="index.html#">Smart Assistants & Hubs</a></li>
                                            <li><a href="index.html#">Smart Security</a></li>
                                            <li><a href="index.html#">Smart Energy & Lighting</a></li>
                                        </ul>
                                        <div class=cat-title>Photo Services</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">All Photo Services</a></li>
                                            <li><a href="index.html#">Same Day Services</a></li>
                                            <li><a href="index.html#">Photo Cards</a></li>
                                            <li><a href="index.html#">Photo Gifts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class=dropdown href="index.html#">
                                    <span class="menu-icn flaticon-bride-dress"></span>
                                    <span class=menu-title>Clothing & Accessories</span>
                                </a>
                                <div class=drop-menu>
                                    <div class=one-third>
                                        <div class=cat-title>Electronics</div>
                                        <ul class=mb20>
                                            <li><a href="index.html#">Shop All</a></li>
                                        </ul>
                                        <div class=cat-title>TV & Video</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">Shop all TVs</a></li>
                                            <li><a href="index.html#">TVs by Size</a></li>
                                            <li><a href="index.html#">Smart TVs</a></li>
                                            <li><a href="index.html#">Roku TVs</a></li>
                                            <li><a href="index.html#">Streaming</a></li>
                                            <li><a href="index.html#">TV Mounts & Accessories</a></li>
                                            <li><a href="index.html#">DVD & Blu-Ray Players</a></li>
                                        </ul>
                                    </div>
                                    <div class=one-third>
                                        <div class=cat-title>Computers</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">Shop All Computers</a></li>
                                            <li><a href="index.html#">Laptops</a></li>
                                            <li><a href="index.html#">Chromebook</a></li>
                                            <li><a href="index.html#">PC Gaming</a></li>
                                            <li><a href="index.html#">Desktops</a></li>
                                            <li><a href="index.html#">Monitors</a></li>
                                            <li><a href="index.html#">Networking</a></li>
                                            <li><a href="index.html#">Computer Accessories</a></li>
                                            <li><a href="index.html#">Computer Components</a></li>
                                            <li><a href="index.html#">Tax Software</a></li>
                                            <li><a href="index.html#">Computer Software</a></li>
                                        </ul>
                                    </div>
                                    <div class=one-third>
                                        <div class=cat-title>Cell Phones</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">Shop All Cell Phones</a></li>
                                            <li><a href="index.html#">Wireless Deals</a></li>
                                            <li><a href="index.html#">5G Phones</a></li>
                                            <li><a href="index.html#">iPhone</a></li>
                                            <li><a href="index.html#">Galaxy Phones</a></li>
                                            <li><a href="index.html#">Phone Chargers & Power Banks</a></li>
                                            <li><a href="index.html#">Grips & Phone Stands</a></li>
                                            <li><a href="index.html#">Phone Cables</a></li>
                                            <li><a href="index.html#">Car Mounts</a></li>
                                            <li><a href="index.html#">iPhone Accessories</a></li>
                                            <li><a href="index.html#">Cell Phone Accessory Deals</a></li>
                                        </ul>
                                    </div>
                                    <div class=one-third>
                                        <div class=cat-title>Smart Home</div>
                                        <ul class=mb20>
                                            <li><a href="index.html#">Shop All Smart Home</a></li>
                                            <li><a href="index.html#">Smart Assistants & Hubs</a></li>
                                            <li><a href="index.html#">Smart Security</a></li>
                                            <li><a href="index.html#">Smart Energy & Lighting</a></li>
                                        </ul>
                                        <div class=cat-title>Photo Services</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">All Photo Services</a></li>
                                            <li><a href="index.html#">Same Day Services</a></li>
                                            <li><a href="index.html#">Photo Cards</a></li>
                                            <li><a href="index.html#">Photo Gifts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class=dropdown href="index.html#">
                                    <span class="menu-icn flaticon-heart-beat"></span>
                                    <span class=menu-title>Health & Beauty</span>
                                </a>
                                <div class=drop-menu>
                                    <div class=one-third>
                                        <div class=cat-title>Electronics</div>
                                        <ul class=mb20>
                                            <li><a href="index.html#">Shop All</a></li>
                                        </ul>
                                        <div class=cat-title>TV & Video</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">Shop all TVs</a></li>
                                            <li><a href="index.html#">TVs by Size</a></li>
                                            <li><a href="index.html#">Smart TVs</a></li>
                                            <li><a href="index.html#">Roku TVs</a></li>
                                            <li><a href="index.html#">Streaming</a></li>
                                            <li><a href="index.html#">TV Mounts & Accessories</a></li>
                                            <li><a href="index.html#">DVD & Blu-Ray Players</a></li>
                                        </ul>
                                    </div>
                                    <div class=one-third>
                                        <div class=cat-title>Computers</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">Shop All Computers</a></li>
                                            <li><a href="index.html#">Laptops</a></li>
                                            <li><a href="index.html#">Chromebook</a></li>
                                            <li><a href="index.html#">PC Gaming</a></li>
                                            <li><a href="index.html#">Desktops</a></li>
                                            <li><a href="index.html#">Monitors</a></li>
                                            <li><a href="index.html#">Networking</a></li>
                                            <li><a href="index.html#">Computer Accessories</a></li>
                                            <li><a href="index.html#">Computer Components</a></li>
                                            <li><a href="index.html#">Tax Software</a></li>
                                            <li><a href="index.html#">Computer Software</a></li>
                                        </ul>
                                    </div>
                                    <div class=one-third>
                                        <div class=cat-title>Cell Phones</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">Shop All Cell Phones</a></li>
                                            <li><a href="index.html#">Wireless Deals</a></li>
                                            <li><a href="index.html#">5G Phones</a></li>
                                            <li><a href="index.html#">iPhone</a></li>
                                            <li><a href="index.html#">Galaxy Phones</a></li>
                                            <li><a href="index.html#">Phone Chargers & Power Banks</a></li>
                                            <li><a href="index.html#">Grips & Phone Stands</a></li>
                                            <li><a href="index.html#">Phone Cables</a></li>
                                            <li><a href="index.html#">Car Mounts</a></li>
                                            <li><a href="index.html#">iPhone Accessories</a></li>
                                            <li><a href="index.html#">Cell Phone Accessory Deals</a></li>
                                        </ul>
                                    </div>
                                    <div class=one-third>
                                        <div class=cat-title>Smart Home</div>
                                        <ul class=mb20>
                                            <li><a href="index.html#">Shop All Smart Home</a></li>
                                            <li><a href="index.html#">Smart Assistants & Hubs</a></li>
                                            <li><a href="index.html#">Smart Security</a></li>
                                            <li><a href="index.html#">Smart Energy & Lighting</a></li>
                                        </ul>
                                        <div class=cat-title>Photo Services</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">All Photo Services</a></li>
                                            <li><a href="index.html#">Same Day Services</a></li>
                                            <li><a href="index.html#">Photo Cards</a></li>
                                            <li><a href="index.html#">Photo Gifts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class=dropdown href="index.html#">
                                    <span class="menu-icn flaticon-volleyball"></span>
                                    <span class=menu-title>Sport & Outdoor</span>
                                </a>
                                <div class=drop-menu>
                                    <div class=one-third>
                                        <div class=cat-title>Electronics</div>
                                        <ul class=mb20>
                                            <li><a href="index.html#">Shop All</a></li>
                                        </ul>
                                        <div class=cat-title>TV & Video</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">Shop all TVs</a></li>
                                            <li><a href="index.html#">TVs by Size</a></li>
                                            <li><a href="index.html#">Smart TVs</a></li>
                                            <li><a href="index.html#">Roku TVs</a></li>
                                            <li><a href="index.html#">Streaming</a></li>
                                            <li><a href="index.html#">TV Mounts & Accessories</a></li>
                                            <li><a href="index.html#">DVD & Blu-Ray Players</a></li>
                                        </ul>
                                    </div>
                                    <div class=one-third>
                                        <div class=cat-title>Computers</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">Shop All Computers</a></li>
                                            <li><a href="index.html#">Laptops</a></li>
                                            <li><a href="index.html#">Chromebook</a></li>
                                            <li><a href="index.html#">PC Gaming</a></li>
                                            <li><a href="index.html#">Desktops</a></li>
                                            <li><a href="index.html#">Monitors</a></li>
                                            <li><a href="index.html#">Networking</a></li>
                                            <li><a href="index.html#">Computer Accessories</a></li>
                                            <li><a href="index.html#">Computer Components</a></li>
                                            <li><a href="index.html#">Tax Software</a></li>
                                            <li><a href="index.html#">Computer Software</a></li>
                                        </ul>
                                    </div>
                                    <div class=one-third>
                                        <div class=cat-title>Cell Phones</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">Shop All Cell Phones</a></li>
                                            <li><a href="index.html#">Wireless Deals</a></li>
                                            <li><a href="index.html#">5G Phones</a></li>
                                            <li><a href="index.html#">iPhone</a></li>
                                            <li><a href="index.html#">Galaxy Phones</a></li>
                                            <li><a href="index.html#">Phone Chargers & Power Banks</a></li>
                                            <li><a href="index.html#">Grips & Phone Stands</a></li>
                                            <li><a href="index.html#">Phone Cables</a></li>
                                            <li><a href="index.html#">Car Mounts</a></li>
                                            <li><a href="index.html#">iPhone Accessories</a></li>
                                            <li><a href="index.html#">Cell Phone Accessory Deals</a></li>
                                        </ul>
                                    </div>
                                    <div class=one-third>
                                        <div class=cat-title>Smart Home</div>
                                        <ul class=mb20>
                                            <li><a href="index.html#">Shop All Smart Home</a></li>
                                            <li><a href="index.html#">Smart Assistants & Hubs</a></li>
                                            <li><a href="index.html#">Smart Security</a></li>
                                            <li><a href="index.html#">Smart Energy & Lighting</a></li>
                                        </ul>
                                        <div class=cat-title>Photo Services</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">All Photo Services</a></li>
                                            <li><a href="index.html#">Same Day Services</a></li>
                                            <li><a href="index.html#">Photo Cards</a></li>
                                            <li><a href="index.html#">Photo Gifts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class=dropdown href="index.html#">
                                    <span class="menu-icn flaticon-groceries"></span>
                                    <span class=menu-title>Grocery & Market</span>
                                </a>
                                <div class=drop-menu>
                                    <div class=one-third>
                                        <div class=cat-title>Electronics</div>
                                        <ul class=mb20>
                                            <li><a href="index.html#">Shop All</a></li>
                                        </ul>
                                        <div class=cat-title>TV & Video</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">Shop all TVs</a></li>
                                            <li><a href="index.html#">TVs by Size</a></li>
                                            <li><a href="index.html#">Smart TVs</a></li>
                                            <li><a href="index.html#">Roku TVs</a></li>
                                            <li><a href="index.html#">Streaming</a></li>
                                            <li><a href="index.html#">TV Mounts & Accessories</a></li>
                                            <li><a href="index.html#">DVD & Blu-Ray Players</a></li>
                                        </ul>
                                    </div>
                                    <div class=one-third>
                                        <div class=cat-title>Computers</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">Shop All Computers</a></li>
                                            <li><a href="index.html#">Laptops</a></li>
                                            <li><a href="index.html#">Chromebook</a></li>
                                            <li><a href="index.html#">PC Gaming</a></li>
                                            <li><a href="index.html#">Desktops</a></li>
                                            <li><a href="index.html#">Monitors</a></li>
                                            <li><a href="index.html#">Networking</a></li>
                                            <li><a href="index.html#">Computer Accessories</a></li>
                                            <li><a href="index.html#">Computer Components</a></li>
                                            <li><a href="index.html#">Tax Software</a></li>
                                            <li><a href="index.html#">Computer Software</a></li>
                                        </ul>
                                    </div>
                                    <div class=one-third>
                                        <div class=cat-title>Cell Phones</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">Shop All Cell Phones</a></li>
                                            <li><a href="index.html#">Wireless Deals</a></li>
                                            <li><a href="index.html#">5G Phones</a></li>
                                            <li><a href="index.html#">iPhone</a></li>
                                            <li><a href="index.html#">Galaxy Phones</a></li>
                                            <li><a href="index.html#">Phone Chargers & Power Banks</a></li>
                                            <li><a href="index.html#">Grips & Phone Stands</a></li>
                                            <li><a href="index.html#">Phone Cables</a></li>
                                            <li><a href="index.html#">Car Mounts</a></li>
                                            <li><a href="index.html#">iPhone Accessories</a></li>
                                            <li><a href="index.html#">Cell Phone Accessory Deals</a></li>
                                        </ul>
                                    </div>
                                    <div class=one-third>
                                        <div class=cat-title>Smart Home</div>
                                        <ul class=mb20>
                                            <li><a href="index.html#">Shop All Smart Home</a></li>
                                            <li><a href="index.html#">Smart Assistants & Hubs</a></li>
                                            <li><a href="index.html#">Smart Security</a></li>
                                            <li><a href="index.html#">Smart Energy & Lighting</a></li>
                                        </ul>
                                        <div class=cat-title>Photo Services</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">All Photo Services</a></li>
                                            <li><a href="index.html#">Same Day Services</a></li>
                                            <li><a href="index.html#">Photo Cards</a></li>
                                            <li><a href="index.html#">Photo Gifts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class=dropdown href="index.html#">
                                    <span class="menu-icn flaticon-remote-control"></span>
                                    <span class=menu-title>Toy & Video Games</span>
                                </a>
                                <div class=drop-menu>
                                    <div class=one-third>
                                        <div class=cat-title>Electronics</div>
                                        <ul class=mb20>
                                            <li><a href="index.html#">Shop All</a></li>
                                        </ul>
                                        <div class=cat-title>TV & Video</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">Shop all TVs</a></li>
                                            <li><a href="index.html#">TVs by Size</a></li>
                                            <li><a href="index.html#">Smart TVs</a></li>
                                            <li><a href="index.html#">Roku TVs</a></li>
                                            <li><a href="index.html#">Streaming</a></li>
                                            <li><a href="index.html#">TV Mounts & Accessories</a></li>
                                            <li><a href="index.html#">DVD & Blu-Ray Players</a></li>
                                        </ul>
                                    </div>
                                    <div class=one-third>
                                        <div class=cat-title>Computers</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">Shop All Computers</a></li>
                                            <li><a href="index.html#">Laptops</a></li>
                                            <li><a href="index.html#">Chromebook</a></li>
                                            <li><a href="index.html#">PC Gaming</a></li>
                                            <li><a href="index.html#">Desktops</a></li>
                                            <li><a href="index.html#">Monitors</a></li>
                                            <li><a href="index.html#">Networking</a></li>
                                            <li><a href="index.html#">Computer Accessories</a></li>
                                            <li><a href="index.html#">Computer Components</a></li>
                                            <li><a href="index.html#">Tax Software</a></li>
                                            <li><a href="index.html#">Computer Software</a></li>
                                        </ul>
                                    </div>
                                    <div class=one-third>
                                        <div class=cat-title>Cell Phones</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">Shop All Cell Phones</a></li>
                                            <li><a href="index.html#">Wireless Deals</a></li>
                                            <li><a href="index.html#">5G Phones</a></li>
                                            <li><a href="index.html#">iPhone</a></li>
                                            <li><a href="index.html#">Galaxy Phones</a></li>
                                            <li><a href="index.html#">Phone Chargers & Power Banks</a></li>
                                            <li><a href="index.html#">Grips & Phone Stands</a></li>
                                            <li><a href="index.html#">Phone Cables</a></li>
                                            <li><a href="index.html#">Car Mounts</a></li>
                                            <li><a href="index.html#">iPhone Accessories</a></li>
                                            <li><a href="index.html#">Cell Phone Accessory Deals</a></li>
                                        </ul>
                                    </div>
                                    <div class=one-third>
                                        <div class=cat-title>Smart Home</div>
                                        <ul class=mb20>
                                            <li><a href="index.html#">Shop All Smart Home</a></li>
                                            <li><a href="index.html#">Smart Assistants & Hubs</a></li>
                                            <li><a href="index.html#">Smart Security</a></li>
                                            <li><a href="index.html#">Smart Energy & Lighting</a></li>
                                        </ul>
                                        <div class=cat-title>Photo Services</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">All Photo Services</a></li>
                                            <li><a href="index.html#">Same Day Services</a></li>
                                            <li><a href="index.html#">Photo Cards</a></li>
                                            <li><a href="index.html#">Photo Gifts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a class=dropdown href="index.html#">
                                    <span class="menu-icn flaticon-feeding-bottle"></span>
                                    <span class=menu-title>Babies & Moms</span>
                                </a>
                                <div class=drop-menu>
                                    <div class=one-third>
                                        <div class=cat-title>Electronics</div>
                                        <ul class=mb20>
                                            <li><a href="index.html#">Shop All</a></li>
                                        </ul>
                                        <div class=cat-title>TV & Video</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">Shop all TVs</a></li>
                                            <li><a href="index.html#">TVs by Size</a></li>
                                            <li><a href="index.html#">Smart TVs</a></li>
                                            <li><a href="index.html#">Roku TVs</a></li>
                                            <li><a href="index.html#">Streaming</a></li>
                                            <li><a href="index.html#">TV Mounts & Accessories</a></li>
                                            <li><a href="index.html#">DVD & Blu-Ray Players</a></li>
                                        </ul>
                                    </div>
                                    <div class=one-third>
                                        <div class=cat-title>Computers</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">Shop All Computers</a></li>
                                            <li><a href="index.html#">Laptops</a></li>
                                            <li><a href="index.html#">Chromebook</a></li>
                                            <li><a href="index.html#">PC Gaming</a></li>
                                            <li><a href="index.html#">Desktops</a></li>
                                            <li><a href="index.html#">Monitors</a></li>
                                            <li><a href="index.html#">Networking</a></li>
                                            <li><a href="index.html#">Computer Accessories</a></li>
                                            <li><a href="index.html#">Computer Components</a></li>
                                            <li><a href="index.html#">Tax Software</a></li>
                                            <li><a href="index.html#">Computer Software</a></li>
                                        </ul>
                                    </div>
                                    <div class=one-third>
                                        <div class=cat-title>Cell Phones</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">Shop All Cell Phones</a></li>
                                            <li><a href="index.html#">Wireless Deals</a></li>
                                            <li><a href="index.html#">5G Phones</a></li>
                                            <li><a href="index.html#">iPhone</a></li>
                                            <li><a href="index.html#">Galaxy Phones</a></li>
                                            <li><a href="index.html#">Phone Chargers & Power Banks</a></li>
                                            <li><a href="index.html#">Grips & Phone Stands</a></li>
                                            <li><a href="index.html#">Phone Cables</a></li>
                                            <li><a href="index.html#">Car Mounts</a></li>
                                            <li><a href="index.html#">iPhone Accessories</a></li>
                                            <li><a href="index.html#">Cell Phone Accessory Deals</a></li>
                                        </ul>
                                    </div>
                                    <div class=one-third>
                                        <div class=cat-title>Smart Home</div>
                                        <ul class=mb20>
                                            <li><a href="index.html#">Shop All Smart Home</a></li>
                                            <li><a href="index.html#">Smart Assistants & Hubs</a></li>
                                            <li><a href="index.html#">Smart Security</a></li>
                                            <li><a href="index.html#">Smart Energy & Lighting</a></li>
                                        </ul>
                                        <div class=cat-title>Photo Services</div>
                                        <ul class=mb0>
                                            <li><a href="index.html#">All Photo Services</a></li>
                                            <li><a href="index.html#">Same Day Services</a></li>
                                            <li><a href="index.html#">Photo Cards</a></li>
                                            <li><a href="index.html#">Photo Gifts</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <ul id=respMenu class="ace-responsive-menu menu_list_custom_code wa pl200" data-menu-style=horizontal>
                    <li class=visible_list><a href="index.html#"><span class=title>Home</span></a>
                        <ul>
                            <li><a href="index.html">Home V1</a></li>
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
                    <li class=megamenu_style><a href="index.html#"><span class=title>Shop</span></a>
                        <ul class="row dropdown-megamenu">
                            <li class="col mega_menu_list pl30">
                                <h4 class=title>Shop Listing</h4>
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
                            <li class="col mega_menu_list">
                                <h4 class=title>Shop Single</h4>
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
                            <li class="col mega_menu_list">
                                <h4 class=title>User Dashboard</h4>
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
                            <li class="col mega_menu_list">
                                <h4 class=title>Woo Pages</h4>
                                <ul>
                                    <li><a href="page-shop-cart.html">Cart</a></li>
                                    <li><a href="page-shop-checkout.html">Checkout</a></li>
                                    <li><a href="page-shop-order-received.html">Wishlist</a></li>
                                    <li><a href="page-account-details.html">My account</a></li>
                                    <li><a href="page-compare.html">Compare</a></li>
                                    <li><a href="page-order-tracking.html">Order Tracking</a></li>
                                </ul>
                            </li>
                            <li class="col mega_menu_list">
                                <div class="banner_one megamenu_style home1_style color1 mb30">
                                    <div class="thumb style1">
                                        <img class=float-end src="{{asset('images/banner/smartwatch.png')}}" alt=smartwatch>
                                    </div>
                                    <div class=details>
                                        <p class="para color-light-blue">Starting from <span class=fw500>$899.</span>
                                        </p>
                                        <h3 class=title>Health Care Monitor</h3>
                                        <a href="page-shop-list-v1.html" class=shop_btn>Shop Now</a>
                                    </div>
                                </div>
                                <div class="banner_one megamenu_style home1_style color1">
                                    <div class=thumb>
                                        <img class=float-end src="{{asset('images/banner/earphone.png')}}" alt=EarPhone>
                                    </div>
                                    <div class=details>
                                        <p class="para color-light-blue">Starting from <span class=fw500>$899.</span>
                                        </p>
                                        <h3 class=title>Stainless Steel Scissors</h3>
                                        <a href="page-shop-list-v1.html" class=shop_btn>Shop Now</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class=visible_list><a href="index.html#"><span class=title>Pages</span></a>
                        <ul>
                            <li><a href="page-about.html">About Us</a></li>
                            <li><a href="index.html#"><span class=title>Accounts</span></a>
                                <ul>
                                    <li><a href="page-account-details.html">Account Details</a></li>
                                    <li><a href="page-account-order.html">Account Order</a></li>
                                    <li><a href="page-account-address.html">Account Address</a></li>
                                    <li><a href="page-account-wishlist.html">Account Wishlist</a></li>
                                    <li><a href="page-account-invoice.html">Account Invoice</a></li>
                                </ul>
                            </li>
                            <li><a href="page-become-vendor.html">Become Vendor</a></li>
                            <li><a href="index.html#"><span class=title>Vendor Pages</span></a>
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
                    <li class=visible_list><a href="index.html#"><span class=title>Blog</span></a>
                        <ul>
                            <li><a href="page-blog-grid.html">Blog Grid</a></li>
                            <li><a href="page-blog-grid-sidebar.html">Blog Grid Sidebar</a></li>
                            <li><a href="page-blog-details.html">Blog Details</a></li>
                            <li><a href="page-blog-list.html">Blog List</a></li>
                            <li><a href="page-blog-single.html">Blog Single</a></li>
                            <li><a href="page-blog-single2.html">Blog Single v2</a></li>
                        </ul>
                    </li>
                </ul>
                <ul id=respMenu2 class="ace-responsive-menu widget_menu_home2 wa" data-menu-style=horizontal>
                    <li class="list-inline-item list_c"><a href="index.html#">Deal of the Day</a></li>
                    <li class="list-inline-item list_c"><a href="index.html#">Hot Deals</a></li>
                    <li class="list-inline-item list_c"><a href="index.html#">Best Sellers</a></li>
                    <li class="list-inline-item list_c"><a href="index.html#">New Arrivals</a></li>
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
                            <a class="btn-fpswd float-end" href="index.html#">Lost your password?</a>
                        </div>
                        <button type=submit class="btn btn-log btn-thm mt20">Login</button>
                        <p class="text-center mb25 mt10">Don't have an account? <a class=signup-filter-btn
                                                                                   href="index.html#">Create account</a>
                        </p>
                        <div class=hr_content>
                            <hr>
                            <span class=hr_top_text>or</span>
                        </div>
                        <ul class="login_with_social text-center mt30 mb0">
                            <li class=list-inline-item><a href="index.html#"><i class="fab fa-facebook"></i></a></li>
                            <li class=list-inline-item><a href="index.html#"><i class="fab fa-google"></i></a></li>
                            <li class=list-inline-item><a href="index.html#"><i class="fab fa-twitter"></i></a></li>
                            <li class=list-inline-item><a href="index.html#"><i class="fab fa-apple"></i></a></li>
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
                    <a href="index.html#" class="cart_btns btn btn-white">View Cart</a>
                    <a href="index.html#" class="checkout_btns btn btn-thm">Checkout</a>
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
                        <p class="text-center mb25 mt10">Already have an account? <a href="page-login.html">Sign in</a>
                        </p>
                        <div class=hr_content>
                            <hr>
                            <span class=hr_top_text>or</span>
                        </div>
                        <ul class="login_with_social text-center mt30 mb0">
                            <li class=list-inline-item><a href="index.html#"><i class="fab fa-facebook"></i></a></li>
                            <li class=list-inline-item><a href="index.html#"><i class="fab fa-google"></i></a></li>
                            <li class=list-inline-item><a href="index.html#"><i class="fab fa-twitter"></i></a></li>
                            <li class=list-inline-item><a href="index.html#"><i class="fab fa-apple"></i></a></li>
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
                        <a class=menubar href="index.html#menu"><span></span></a>
                        <a class=mobile_logo href="index.html#">Zeomart<span class=text-thm>.</span></a>
                    </div>
                    <div class=mobile_menu_widget_icons>
                        <ul class="cart mt15">
                            <li class=list-inline-item>
                                <a class="cart_btn signin-filter-btn" href="index.html#"><span
                                        class="icon flaticon-profile"></span></a>
                            </li>
                            <li class=list-inline-item>
                                <a class="cart_btn cart-filter-btn" href="index.html#"><span class=icon><img
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
                                    <div class="top-search text-start">
                                        <form action=# class=form-search accept-charset=utf-8>
                                            <div class=box-search>
                                                <input class=form_control name=search placeholder="Search products…">
                                                <div class="search-suggestions text-start">
                                                    <div class=box-suggestions>
                                                        <ul>
                                                            <li>
                                                                <div class=thumb>
                                                                    <img src="{{asset('images/listing/sf1.png')}}'" alt=sf1.png>
                                                                </div>
                                                                <div class=info-product>
                                                                    <div class=item_title>Sony DJ Headphones 4334205465,
                                                                        Black, Standard
                                                                    </div>
                                                                    <div class=price><span class=sale>$32.50</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class=thumb>
                                                                    <img src="{{asset('images/listing/sf2.png')}}" alt=sf2.png>
                                                                </div>
                                                                <div class=info-product>
                                                                    <div class=item_title>Sony E-Mount Full Frame FE
                                                                        24-70mm f/2.8 GM II G Master
                                                                    </div>
                                                                    <div class=price><span class=sale>$32.50</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class=thumb>
                                                                    <img src="{{asset('images/listing/sf3.png')}}" alt=sf3.png>
                                                                </div>
                                                                <div class=info-product>
                                                                    <div class=item_title>TV 55" 4-Series 4K UHD smart
                                                                        TV
                                                                    </div>
                                                                    <div class=price><span class=sale>$32.50</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class=thumb>
                                                                    <img src="{{asset('images/listing/sf4.png')}}" alt=sf4.png>
                                                                </div>
                                                                <div class=info-product>
                                                                    <div class=item_title>Hugolog Baby Monitor, 2K
                                                                        Security Camera, PT Cameras for
                                                                    </div>
                                                                    <div class=price><span class=sale>$32.50</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class=thumb>
                                                                    <img src="{{asset('images/listing/sf5.png')}}" alt=sf5.png>
                                                                </div>
                                                                <div class=info-product>
                                                                    <div class=item_title>Apple iPhone Retina 6s Plus
                                                                        64GB
                                                                    </div>
                                                                    <div class=price><span class=sale>$32.50</span>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
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
                        <li><a href="index.html">Home V1</a></li>
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
                <li><a class="tdu text-thm1 text-capitalize" href="index.html#">See More <i
                            class="far fa-angle-down"></i></a></li>
            </ul>
        </nav>
    </div>
    <div class="body_content_wrapper position-relative pt30">
        <section class=home-one>
            <div class=container>
                <div class=row>
                    <div class=col-lg-12>
                        <div class="main-banner-wrapper home1_style bdrs6 ovh">
                            <div class="banner-style-one owl-theme owl-carousel">
                                <div class="slide slide-one hero">
                                    <div class="container hero1">
                                        <div class="row home-content">
                                            <div class="col-lg-6 offset-lg-1 col-xl-5"><span
                                                    class=tag>Limited Edition</span>
                                                <h3 class=banner-title><span class=fw400>Sport Essentials</span><br>
                                                    Yoga Mats, Weights<br class="d-none d-xl-block">
                                                    & more</h3>
                                                <p>Discover our new items. Up to<span class=fw500>25% Off !</span></p>
                                                <a href="page-shop-cart.html" class="btn banner-btn btn-thm">Shop
                                                    Now</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide slide-one" style=background-image:url(images/home/2.jpg);height:600px>
                                    <div class=container>
                                        <div class="row home-content">
                                            <div class="col-lg-5 offset-lg-1"><span class=tag>Limited Edition</span>
                                                <h3 class=banner-title><span class=fw400>Game Consoles and</span><br>
                                                    Accessories Super Deals</h3>
                                                <p>Discover our new items. Up to<span class=fw500>25% Off !</span></p>
                                                <a href="page-shop-cart.html" class="btn banner-btn btn-thm">Shop
                                                    Now</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide slide-one bgpc"
                                     style=background-image:url(images/home/5.jpg);height:600px>
                                    <div class=container>
                                        <div class="row home-content">
                                            <div class="col-lg-5 offset-lg-1"><span class=tag>New Arrivals</span>
                                                <h3 class=banner-title><span class=fw400>Wall clock</span><br>
                                                    renaissance</h3>
                                                <p>Discover our new items. Up to<span class=fw500>25% Off !</span></p>
                                                <a href="page-shop-cart.html" class="btn banner-btn btn-thm">Shop
                                                    Now</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-btn-block banner-carousel-btn"><span class="carousel-btn left-btn"><i
                                        class="fas fa-chevron-left left"></i></span><span class="carousel-btn right-btn"><i
                                        class="fas fa-chevron-right right"></i></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="features pt30 pb20">
            <div class="container bb1">
                <div class="row ovh">
                    <div class="col-sm-6 col-xl-3">
                        <div class="icon_boxes d-flex wow fadeInUp" data-wow-duration=1.0s>
                            <div class=icon><span class=flaticon-fast-delivery></span></div>
                            <div class=details>
                                <h5 class=title>Free Shipping</h5>
                                <p class=para>Free Shipping for orders over $200</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="icon_boxes d-flex wow fadeInUp" data-wow-duration=1.2s>
                            <div class=icon><span class=flaticon-shield></span></div>
                            <div class=details>
                                <h5 class=title>Money Guarantee</h5>
                                <p class=para>Within 30 days for an exchange.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="icon_boxes d-flex wow fadeInUp" data-wow-duration=1.4s>
                            <div class=icon><span class=flaticon-headphones></span></div>
                            <div class=details>
                                <h5 class=title>Online Support</h5>
                                <p class=para>24 hours a day, 7 days a week</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-3">
                        <div class="icon_boxes d-flex wow fadeInUp" data-wow-duration=1.6s>
                            <div class=icon><span class=flaticon-credit-card></span></div>
                            <div class=details>
                                <h5 class=title>Flexible Payment</h5>
                                <p class=para>Pay with Multiple Credit Cards</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="deliver-divider pt30 pb70">
            <div class=container>
                <div class=row>
                    <div class=col-lg-12>
                        <div class="d-flex db-500 justify-content-between">
                            <div class="main-title mb0-500 d-block d-lg-flex">
                                <h2>Deal of the Day</h2>
                                <div class=deal_countdown>
                                    <ul class="deal_counter ml0-md" id=timer>
                                        <li class="list-inline-item days"></li>
                                        <li class=list-inline-item><span class=title>Days :</span></li>
                                        <li class="list-inline-item hours"></li>
                                        <li class=list-inline-item><span class=title>Hours :</span></li>
                                        <li class="list-inline-item minutes"></li>
                                        <li class=list-inline-item><span class=title>Minutes :</span></li>
                                        <li class="list-inline-item seconds"></li>
                                        <li class=list-inline-item><span class=title>Seconds</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="main-title mb-5"><a class="title_more_btn mt10" href="page-shop-list-v2.html">View
                                    All</a></div>
                        </div>
                    </div>
                </div>
                <div class=row>
                    <div class=col-lg-12>
                        <div class="navi_pagi_bottom_center shop_item_5grid_slider dod_slider owl-carousel owl-theme">
                            <div class="item ovh">
                                <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn" data-wow-duration=1.0s>
                                    <div class="thumb pb30"><img src="{{asset('images/shop-items/dd1.png')}}" alt="Deal Day1">
                                        <div class=thumb_info>
                                            <ul class=mb0>
                                                <li>
                                                    <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                            class=flaticon-heart></span></a></li>
                                                <li>
                                                    <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                            class=flaticon-show></span></a></li>
                                                <li><a href="page-shop-list-v6.html"><span class=flaticon-graph></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="shop_item_cart_btn d-grid"><a href="page-shop-cart.html"
                                                                                  class="btn btn-thm">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class=details>
                                        <div class=sub_title>SAMSUNG</div>
                                        <div class=title><a href="page-shop-single-v1.html">Samsung 65" 4K UHD HDR QLED
                                                Tizen Smart TV</a></div>
                                        <div class="review d-flex db-500">
                                            <ul class="mb0 me-2">
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                            </ul>
                                            <div class=review_count><a href="index.html#">3,014 reviews</a></div>
                                        </div>
                                        <div class=si_footer>
                                            <div class=price>$32.50 <small>
                                                    <del>$45</del>
                                                    <span class="off_tag text-thm1">20% Off</span></small></div>
                                            <div class="line mt20"></div>
                                            <div class="sell_stock mt10">
                                                <div class=sell>Sold 56</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item ovh">
                                <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn" data-wow-duration=1.2s>
                                    <div class="thumb pb30"><img src="{{asset('images/shop-items/dd2.png')}}" alt="Deal Day2">
                                        <div class=thumb_info>
                                            <ul class=mb0>
                                                <li>
                                                    <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                            class=flaticon-heart></span></a></li>
                                                <li>
                                                    <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                            class=flaticon-show></span></a></li>
                                                <li><a href="page-shop-list-v6.html"><span class=flaticon-graph></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="shop_item_cart_btn d-grid"><a href="page-shop-cart.html"
                                                                                  class="btn btn-thm">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class=details>
                                        <div class=sub_title>SONY</div>
                                        <div class=title><a href="page-shop-single-v1.html">Ozark Trail 6-Person Clip &
                                                Camp Dome Tent</a></div>
                                        <div class="review d-flex db-500">
                                            <ul class="mb0 me-2">
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                            </ul>
                                            <div class=review_count><a href="index.html#">3,014 reviews</a></div>
                                        </div>
                                        <div class=si_footer>
                                            <div class=price>$32.50 <small>
                                                    <del>$45</del>
                                                </small></div>
                                            <div class="line mt20"></div>
                                            <div class="sell_stock mt10">
                                                <div class=sell>Sold 56</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item ovh">
                                <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn" data-wow-duration=1.4s>
                                    <div class="thumb pb30"><img src="{{asset('images/shop-items/dd3.png')}}" alt="Deal Day3">
                                        <div class=thumb_info>
                                            <ul class=mb0>
                                                <li>
                                                    <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                            class=flaticon-heart></span></a></li>
                                                <li>
                                                    <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                            class=flaticon-show></span></a></li>
                                                <li><a href="page-shop-list-v6.html"><span class=flaticon-graph></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="shop_item_cart_btn d-grid"><a href="page-shop-cart.html"
                                                                                  class="btn btn-thm">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class=details>
                                        <div class=sub_title>SONY</div>
                                        <div class=title><a href="page-shop-single-v1.html">Beats by Dr. Dre Studio3
                                                Skyline Over-Ear Noise Cancelling</a></div>
                                        <div class="review d-flex db-500">
                                            <ul class="mb0 me-2">
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                            </ul>
                                            <div class=review_count><a href="index.html#">3,014 reviews</a></div>
                                        </div>
                                        <div class=si_footer>
                                            <div class=price>$399.00 <small>
                                                    <del>$45</del>
                                                </small></div>
                                            <div class="line mt20"></div>
                                            <div class="sell_stock mt10">
                                                <div class=sell>Sold 56</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item ovh">
                                <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn" data-wow-duration=1.6s>
                                    <div class="thumb pb30"><img src="{{asset('images/shop-items/dd4.png')}}" alt="Deal Day4">
                                        <div class=thumb_info>
                                            <ul class=mb0>
                                                <li>
                                                    <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                            class=flaticon-heart></span></a></li>
                                                <li>
                                                    <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                            class=flaticon-show></span></a></li>
                                                <li><a href="page-shop-list-v6.html"><span class=flaticon-graph></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="shop_item_cart_btn d-grid"><a href="page-shop-cart.html"
                                                                                  class="btn btn-thm">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class=details>
                                        <div class=sub_title>Eastsport</div>
                                        <div class=title><a href="page-shop-single-v1.html">Eastsport Unisex Campus Tech
                                                Backpack Charcoal</a></div>
                                        <div class="review d-flex db-500">
                                            <ul class="mb0 me-2">
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                            </ul>
                                            <div class=review_count><a href="index.html#">3,014 reviews</a></div>
                                        </div>
                                        <div class=si_footer>
                                            <div class=price>$32.50 <small>
                                                    <del>$45</del>
                                                </small></div>
                                            <div class="line mt20"></div>
                                            <div class="sell_stock mt10">
                                                <div class=sell>Sold 56</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item ovh">
                                <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn" data-wow-duration=1.8s>
                                    <div class="thumb pb30"><img src="{{asset('images/shop-items/dd5.png')}}" alt="Deal Da5">
                                        <div class=thumb_info>
                                            <ul class=mb0>
                                                <li>
                                                    <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                            class=flaticon-heart></span></a></li>
                                                <li>
                                                    <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                            class=flaticon-show></span></a></li>
                                                <li><a href="page-shop-list-v6.html"><span class=flaticon-graph></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="shop_item_cart_btn d-grid"><a href="page-shop-cart.html"
                                                                                  class="btn btn-thm">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class=details>
                                        <div class=sub_title>rolex</div>
                                        <div class=title><a href="page-shop-single-v1.html">Pre-Owned Rolex Day-date
                                                1802 Gold Watch (Certified Authenti...</a></div>
                                        <div class="review d-flex db-500">
                                            <ul class="mb0 me-2">
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                            </ul>
                                            <div class=review_count><a href="index.html#">3,014 reviews</a></div>
                                        </div>
                                        <div class=si_footer>
                                            <div class=price>$18.124 <small>
                                                    <del>$45</del>
                                                </small></div>
                                            <div class="line mt20"></div>
                                            <div class="sell_stock mt10">
                                                <div class=sell>Sold 56</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=item>
                                <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                    <div class="thumb pb30"><img src="{{asset('images/shop-items/dd1.png')}}" alt="Deal Day1">
                                        <div class=thumb_info>
                                            <ul class=mb0>
                                                <li>
                                                    <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                            class=flaticon-heart></span></a></li>
                                                <li>
                                                    <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                            class=flaticon-show></span></a></li>
                                                <li><a href="page-shop-list-v6.html"><span class=flaticon-graph></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="shop_item_cart_btn d-grid"><a href="page-shop-cart.html"
                                                                                  class="btn btn-thm">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class=details>
                                        <div class=sub_title>SAMSUNG</div>
                                        <div class=title><a href="page-shop-single-v1.html">Samsung 65" 4K UHD HDR QLED
                                                Tizen Smart TV</a></div>
                                        <div class="review d-flex db-500">
                                            <ul class="mb0 me-2">
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                            </ul>
                                            <div class=review_count><a href="index.html#">3,014 reviews</a></div>
                                        </div>
                                        <div class=si_footer>
                                            <div class=price>$32.50 <small>
                                                    <del>$45</del>
                                                    <span class="off_tag text-thm1">20% Off</span></small></div>
                                            <div class="line mt20"></div>
                                            <div class="sell_stock mt10">
                                                <div class=sell>Sold 56</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=item>
                                <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                    <div class="thumb pb30"><img src="{{asset('images/shop-items/dd2.png')}}" alt="Deal Day2">
                                        <div class=thumb_info>
                                            <ul class=mb0>
                                                <li>
                                                    <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                            class=flaticon-heart></span></a></li>
                                                <li>
                                                    <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                            class=flaticon-show></span></a></li>
                                                <li><a href="page-shop-list-v6.html"><span class=flaticon-graph></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="shop_item_cart_btn d-grid"><a href="page-shop-cart.html"
                                                                                  class="btn btn-thm">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class=details>
                                        <div class=sub_title>SONY</div>
                                        <div class=title><a href="page-shop-single-v1.html">Ozark Trail 6-Person Clip &
                                                Camp Dome Tent</a></div>
                                        <div class="review d-flex db-500">
                                            <ul class="mb0 me-2">
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                            </ul>
                                            <div class=review_count><a href="index.html#">3,014 reviews</a></div>
                                        </div>
                                        <div class=si_footer>
                                            <div class=price>$32.50 <small>
                                                    <del>$45</del>
                                                </small></div>
                                            <div class="line mt20"></div>
                                            <div class="sell_stock mt10">
                                                <div class=sell>Sold 56</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=item>
                                <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                    <div class="thumb pb30"><img src="{{asset('images/shop-items/dd3.png')}}" alt="Deal Day3">
                                        <div class=thumb_info>
                                            <ul class=mb0>
                                                <li>
                                                    <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                            class=flaticon-heart></span></a></li>
                                                <li>
                                                    <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                            class=flaticon-show></span></a></li>
                                                <li><a href="page-shop-list-v6.html"><span class=flaticon-graph></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="shop_item_cart_btn d-grid"><a href="page-shop-cart.html"
                                                                                  class="btn btn-thm">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class=details>
                                        <div class=sub_title>SONY</div>
                                        <div class=title><a href="page-shop-single-v1.html">Beats by Dr. Dre Studio3
                                                Skyline Over-Ear Noise Cancelling</a></div>
                                        <div class="review d-flex db-500">
                                            <ul class="mb0 me-2">
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                            </ul>
                                            <div class=review_count><a href="index.html#">3,014 reviews</a></div>
                                        </div>
                                        <div class=si_footer>
                                            <div class=price>$399.00 <small>
                                                    <del>$45</del>
                                                </small></div>
                                            <div class="line mt20"></div>
                                            <div class="sell_stock mt10">
                                                <div class=sell>Sold 56</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=item>
                                <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                    <div class="thumb pb30"><img src="{{asset('images/shop-items/dd4.png')}}" alt="Deal Day4">
                                        <div class=thumb_info>
                                            <ul class=mb0>
                                                <li>
                                                    <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                            class=flaticon-heart></span></a></li>
                                                <li>
                                                    <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                            class=flaticon-show></span></a></li>
                                                <li><a href="page-shop-list-v6.html"><span class=flaticon-graph></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="shop_item_cart_btn d-grid"><a href="page-shop-cart.html"
                                                                                  class="btn btn-thm">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class=details>
                                        <div class=sub_title>Eastsport</div>
                                        <div class=title><a href="page-shop-single-v1.html">Eastsport Unisex Campus Tech
                                                Backpack Charcoal</a></div>
                                        <div class="review d-flex db-500">
                                            <ul class="mb0 me-2">
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                            </ul>
                                            <div class=review_count><a href="index.html#">3,014 reviews</a></div>
                                        </div>
                                        <div class=si_footer>
                                            <div class=price>$32.50 <small>
                                                    <del>$45</del>
                                                </small></div>
                                            <div class="line mt20"></div>
                                            <div class="sell_stock mt10">
                                                <div class=sell>Sold 56</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=item>
                                <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                    <div class="thumb pb30"><img src="{{asset('images/shop-items/dd5.png')}}" alt="Deal Da5">
                                        <div class=thumb_info>
                                            <ul class=mb0>
                                                <li>
                                                    <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                            class=flaticon-heart></span></a></li>
                                                <li>
                                                    <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                            class=flaticon-show></span></a></li>
                                                <li><a href="page-shop-list-v6.html"><span class=flaticon-graph></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="shop_item_cart_btn d-grid"><a href="page-shop-cart.html"
                                                                                  class="btn btn-thm">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class=details>
                                        <div class=sub_title>rolex</div>
                                        <div class=title><a href="page-shop-single-v1.html">Pre-Owned Rolex Day-date
                                                1802 Gold Watch (Certified Authenti...</a></div>
                                        <div class="review d-flex db-500">
                                            <ul class="mb0 me-2">
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                            </ul>
                                            <div class=review_count><a href="index.html#">3,014 reviews</a></div>
                                        </div>
                                        <div class=si_footer>
                                            <div class=price>$18.124 <small>
                                                    <del>$45</del>
                                                </small></div>
                                            <div class="line mt20"></div>
                                            <div class="sell_stock mt10">
                                                <div class=sell>Sold 56</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=item>
                                <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                    <div class="thumb pb30"><img src="{{asset('images/shop-items/dd1.png')}}" alt="Deal Day1">
                                        <div class=thumb_info>
                                            <ul class=mb0>
                                                <li>
                                                    <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                            class=flaticon-heart></span></a></li>
                                                <li>
                                                    <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                            class=flaticon-show></span></a></li>
                                                <li><a href="page-shop-list-v6.html"><span class=flaticon-graph></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="shop_item_cart_btn d-grid"><a href="page-shop-cart.html"
                                                                                  class="btn btn-thm">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class=details>
                                        <div class=sub_title>SAMSUNG</div>
                                        <div class=title><a href="page-shop-single-v1.html">Samsung 65" 4K UHD HDR QLED
                                                Tizen Smart TV</a></div>
                                        <div class="review d-flex db-500">
                                            <ul class="mb0 me-2">
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                            </ul>
                                            <div class=review_count><a href="index.html#">3,014 reviews</a></div>
                                        </div>
                                        <div class=si_footer>
                                            <div class=price>$32.50 <small>
                                                    <del>$45</del>
                                                    <span class="off_tag text-thm1">20% Off</span></small></div>
                                            <div class="line mt20"></div>
                                            <div class="sell_stock mt10">
                                                <div class=sell>Sold 56</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=item>
                                <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                    <div class="thumb pb30"><img src="{{asset('images/shop-items/dd2.png')}}" alt="Deal Day2">
                                        <div class=thumb_info>
                                            <ul class=mb0>
                                                <li>
                                                    <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                            class=flaticon-heart></span></a></li>
                                                <li>
                                                    <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                            class=flaticon-show></span></a></li>
                                                <li><a href="page-shop-list-v6.html"><span class=flaticon-graph></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="shop_item_cart_btn d-grid"><a href="page-shop-cart.html"
                                                                                  class="btn btn-thm">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class=details>
                                        <div class=sub_title>SONY</div>
                                        <div class=title><a href="page-shop-single-v1.html">Ozark Trail 6-Person Clip &
                                                Camp Dome Tent</a></div>
                                        <div class="review d-flex db-500">
                                            <ul class="mb0 me-2">
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                            </ul>
                                            <div class=review_count><a href="index.html#">3,014 reviews</a></div>
                                        </div>
                                        <div class=si_footer>
                                            <div class=price>$32.50 <small>
                                                    <del>$45</del>
                                                </small></div>
                                            <div class="line mt20"></div>
                                            <div class="sell_stock mt10">
                                                <div class=sell>Sold 56</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=item>
                                <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                    <div class="thumb pb30"><img src="{{asset('images/shop-items/dd3.png')}}" alt="Deal Day3">
                                        <div class=thumb_info>
                                            <ul class=mb0>
                                                <li>
                                                    <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                            class=flaticon-heart></span></a></li>
                                                <li>
                                                    <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                            class=flaticon-show></span></a></li>
                                                <li><a href="page-shop-list-v6.html"><span class=flaticon-graph></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="shop_item_cart_btn d-grid"><a href="page-shop-cart.html"
                                                                                  class="btn btn-thm">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class=details>
                                        <div class=sub_title>SONY</div>
                                        <div class=title><a href="page-shop-single-v1.html">Beats by Dr. Dre Studio3
                                                Skyline Over-Ear Noise Cancelling</a></div>
                                        <div class="review d-flex db-500">
                                            <ul class="mb0 me-2">
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                            </ul>
                                            <div class=review_count><a href="index.html#">3,014 reviews</a></div>
                                        </div>
                                        <div class=si_footer>
                                            <div class=price>$399.00 <small>
                                                    <del>$45</del>
                                                </small></div>
                                            <div class="line mt20"></div>
                                            <div class="sell_stock mt10">
                                                <div class=sell>Sold 56</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=item>
                                <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                    <div class="thumb pb30"><img src="{{asset('images/shop-items/dd4.png')}}" alt="Deal Day4">
                                        <div class=thumb_info>
                                            <ul class=mb0>
                                                <li>
                                                    <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                            class=flaticon-heart></span></a></li>
                                                <li>
                                                    <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                            class=flaticon-show></span></a></li>
                                                <li><a href="page-shop-list-v6.html"><span class=flaticon-graph></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="shop_item_cart_btn d-grid"><a href="page-shop-cart.html"
                                                                                  class="btn btn-thm">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class=details>
                                        <div class=sub_title>Eastsport</div>
                                        <div class=title><a href="page-shop-single-v1.html">Eastsport Unisex Campus Tech
                                                Backpack Charcoal</a></div>
                                        <div class="review d-flex db-500">
                                            <ul class="mb0 me-2">
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                            </ul>
                                            <div class=review_count><a href="index.html#">3,014 reviews</a></div>
                                        </div>
                                        <div class=si_footer>
                                            <div class=price>$32.50 <small>
                                                    <del>$45</del>
                                                </small></div>
                                            <div class="line mt20"></div>
                                            <div class="sell_stock mt10">
                                                <div class=sell>Sold 56</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=item>
                                <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                    <div class="thumb pb30"><img src="{{asset('images/shop-items/dd5.png')}}" alt="Deal Da5">
                                        <div class=thumb_info>
                                            <ul class=mb0>
                                                <li>
                                                    <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                            class=flaticon-heart></span></a></li>
                                                <li>
                                                    <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                            class=flaticon-show></span></a></li>
                                                <li><a href="page-shop-list-v6.html"><span class=flaticon-graph></span></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="shop_item_cart_btn d-grid"><a href="page-shop-cart.html"
                                                                                  class="btn btn-thm">Add to Cart</a>
                                        </div>
                                    </div>
                                    <div class=details>
                                        <div class=sub_title>rolex</div>
                                        <div class=title><a href="page-shop-single-v1.html">Pre-Owned Rolex Day-date
                                                1802 Gold Watch (Certified Authenti...</a></div>
                                        <div class="review d-flex db-500">
                                            <ul class="mb0 me-2">
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                                <li class=list-inline-item><a href="index.html#"><i
                                                            class="fas fa-star"></i></a></li>
                                            </ul>
                                            <div class=review_count><a href="index.html#">3,014 reviews</a></div>
                                        </div>
                                        <div class=si_footer>
                                            <div class=price>$18.124 <small>
                                                    <del>$45</del>
                                                </small></div>
                                            <div class="line mt20"></div>
                                            <div class="sell_stock mt10">
                                                <div class=sell>Sold 56</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="top-category pb30 pt20">
            <div class=container>
                <div class=row>
                    <div class=col-lg-12>
                        <div class="d-flex justify-content-between">
                            <div class=main-title>
                                <h2>Shop by Category</h2>
                            </div>
                            <div class="main-title mb-5"><a class="title_more_btn mt10" href="page-shop-list-v2.html">View
                                    All Categories</a></div>
                        </div>
                    </div>
                </div>
                <div class="row ovh">
                    <div class="col-6 col-md-3 col-xl wow fadeInUp" data-wow-duration=.7s><a
                            href="page-shop-list-v6.html">
                            <div class=iconbox>
                                <div class=icon><img src="{{asset('images/shop-items/ct1.png')}}" alt="Category Image"></div>
                                <div class=details>
                                    <h5 class=title>Electronics</h5>
                                    <p class=subtitle>29 items</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-3 col-xl wow fadeInUp" data-wow-duration=.9s><a
                            href="page-shop-list-v6.html">
                            <div class=iconbox>
                                <div class=icon><img src="{{asset('images/shop-items/ct2.png')}}" alt="Category Image"></div>
                                <div class=details>
                                    <h5 class=title>Clothings</h5>
                                    <p class=subtitle>29 items</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-3 col-xl wow fadeInUp" data-wow-duration=1.1s><a
                            href="page-shop-list-v6.html">
                            <div class=iconbox>
                                <div class=icon><img src="{{asset('images/shop-items/ct3.png')}}" alt="Category Image"></div>
                                <div class=details>
                                    <h5 class=title>Health & Beauty</h5>
                                    <p class=subtitle>29 items</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-3 col-xl wow fadeInUp" data-wow-duration=1.3s><a
                            href="page-shop-list-v6.html">
                            <div class=iconbox>
                                <div class=icon><img src="{{asset('images/shop-items/ct4.png')}}" alt="Category Image"></div>
                                <div class=details>
                                    <h5 class=title>Home & Kitchen</h5>
                                    <p class=subtitle>29 items</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-3 col-xl wow fadeInUp" data-wow-duration=1.5s><a
                            href="page-shop-list-v6.html">
                            <div class=iconbox>
                                <div class=icon><img src="{{asset('images/shop-items/ct5.png')}}" alt="Category Image"></div>
                                <div class=details>
                                    <h5 class=title>Home & Furniture</h5>
                                    <p class=subtitle>29 items</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-3 col-xl wow fadeInUp" data-wow-duration=1.7s><a
                            href="page-shop-list-v6.html">
                            <div class=iconbox>
                                <div class=icon><img src="{{asset('images/shop-items/ct6.png')}}" alt="Category Image"></div>
                                <div class=details>
                                    <h5 class=title>Grocery & Market</h5>
                                    <p class=subtitle>29 items</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-3 col-xl wow fadeInUp" data-wow-duration=1.9s><a
                            href="page-shop-list-v6.html">
                            <div class=iconbox>
                                <div class=icon><img src="{{asset('images/shop-items/ct7.png')}}" alt="Category Image"></div>
                                <div class=details>
                                    <h5 class=title>Toy & Video Games</h5>
                                    <p class=subtitle>29 items</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-md-3 col-xl wow fadeInUp" data-wow-duration=2.1s><a
                            href="page-shop-list-v6.html">
                            <div class=iconbox>
                                <div class=icon><img src="{{asset('images/shop-items/ct8.png')}}" alt="Category Image"></div>
                                <div class=details>
                                    <h5 class=title>Babies & Moms</h5>
                                    <p class=subtitle>29 items</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row ovh mt70">
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-duration=.7s>
                        <div class="banner_one home1_style color1 mb30">
                            <div class="thumb style1"><img class=float-end src="{{asset('images/banner/smartwatch.png')}}"
                                                           alt=smartwatch></div>
                            <div class=details>
                                <p class="para color-light-blue">Starting from<span class=fw500>$899.</span></p>
                                <h3 class=title>Health Care Monitor</h3>
                                <a href="page-shop-list-v1.html" class=shop_btn>Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-duration=.9s>
                        <div class="banner_one home1_style color2 mb30">
                            <div class="thumb style1"><img class=float-end src="{{asset('images/banner/earphone.png')}}"
                                                           alt=EarPhone></div>
                            <div class=details>
                                <p class="para color-light-blue">Starting from<span class=fw500>$899.</span></p>
                                <h3 class=title>Stainless Steel Scissors</h3>
                                <a href="page-shop-list-v1.html" class=shop_btn>Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-duration=1.1s>
                        <div class="banner_one home1_style color3 mb30">
                            <div class=thumb><img class=float-end src="{{asset('images/banner/smartdevice.png')}}"
                                                  alt=smartdevice.png>
                                <div class=off_banner><img src="{{asset('images/banner/off-banner.png')}}" alt="Off Banner"></div>
                            </div>
                            <div class=details>
                                <p class="para color-light-blue">Starting from<span class=fw500>$899.</span></p>
                                <h3 class=title>Blood Pressure Meter</h3>
                                <a href="page-shop-list-v1.html" class=shop_btn>Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="featured-product pt0 pb90">
            <div class=container>
                <div class=row>
                    <div class=col-lg-6>
                        <div class="main-title mb0-sm">
                            <h2>Best seller in the last month</h2>
                        </div>
                    </div>
                    <div class=col-lg-6>
                        <div class="popular_listing_sliders ui_kit_tab style2">
                            <div class="nav nav-tabs mb30 justify-content-start justify-content-lg-end" role=tablist>
                                <button class="nav-link active" id=nav-home-tab data-bs-toggle=tab
                                        data-bs-target=#nav-home role=tab aria-controls=nav-home aria-selected=true>Top
                                    20
                                </button>
                                <button class=nav-link id=nav-shopping-tab data-bs-toggle=tab
                                        data-bs-target=#nav-shopping role=tab aria-controls=nav-shopping
                                        aria-selected=false>Baby
                                </button>
                                <button class=nav-link id=nav-hotels-tab data-bs-toggle=tab data-bs-target=#nav-hotels
                                        role=tab aria-controls=nav-hotels aria-selected=false>Furniture
                                </button>
                                <button class=nav-link id=nav-destination-tab data-bs-toggle=tab
                                        data-bs-target=#nav-destination role=tab aria-controls=nav-destination
                                        aria-selected=false>Electronic
                                </button>
                                <button class="nav-link me-0" id=nav-bread-tab data-bs-toggle=tab
                                        data-bs-target=#nav-bread role=tab aria-controls=nav-bread aria-selected=false>
                                    All
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=row>
                    <div class=col-lg-12>
                        <div class="popular_listing_sliders row ui_kit_tab style2">
                            <div class="tab-content col-lg-12" id=nav-tabContent>
                                <div class="tab-pane fade show active" id=nav-home role=tabpanel
                                     aria-labelledby=nav-home-tab>
                                    <div class="best_item_slider_shop_lising_page shop_item_5grid_slider slider_dib_sm nav_none_400 dots_none owl-theme owl-carousel">
                                        <div class="item ovh">
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn"
                                                 data-wow-duration=1.1s>
                                                <div class="thumb pb30">
                                                    <img src="{{asset('images/shop-items/bslm1.png')}}" alt="Best Seller Item">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid">
                                                        <a href="page-shop-cart.html" class="btn btn-thm">Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>SAMSUNG</div>
                                                    <div class=title><a href="page-shop-single-v1.html">Great Value
                                                            Ultra Strong Paper Towels, Split Sheets, 6 Double </a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$32.50 <small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item ovh">
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn"
                                                 data-wow-duration=1.3s>
                                                <div class="thumb pb30">
                                                    <img src="{{asset('images/shop-items/bslm2.png')}}" alt="Best Seller Item">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid">
                                                        <a href="page-shop-cart.html" class="btn btn-thm">Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>SONY</div>
                                                    <div class=title><a href="page-shop-single-v1.html">Dell Inspiron
                                                            3000 15.6" Touchscreen Laptop - Black (Intel Core
                                                            i5-1035G1/256GB SSD/8GB RAM/Windows 11 S)</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$32.50 <small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item ovh">
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn"
                                                 data-wow-duration=1.5s>
                                                <div class="thumb pb30">
                                                    <img src="{{asset('images/shop-items/bslm3.png')}}" alt="Best Seller Item">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid">
                                                        <a href="page-shop-cart.html" class="btn btn-thm">Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>Eastsport</div>
                                                    <div class=title><a href="page-shop-single-v1.html">LG Gram 17"
                                                            Laptop -Obsidian Black (Intel Evo Core i7-1165G7/1TB SSD/16GB
                                                            RAM) -En -Only at Best Buy</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$399.00 <small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item ovh">
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn"
                                                 data-wow-duration=1.7s>
                                                <div class="thumb pb30">
                                                    <img src="{{asset('images/shop-items/bslm4.png')}}" alt="Best Seller Item">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid">
                                                        <a href="page-shop-cart.html" class="btn btn-thm">Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>rolex</div>
                                                    <div class=title><a href="page-shop-single-v1.html">HP 15.6"
                                                            Touchscreen Laptop - Natural Silver (AMD Ryzen 5 5625U/1TB
                                                            SSD/12GB RAM/Windows 11)</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$32.50 <small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item ovh">
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn"
                                                 data-wow-duration=1.9s>
                                                <div class="thumb pb30">
                                                    <img src="{{asset('images/shop-items/bslm5.png')}}" alt="Best Seller Item">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid">
                                                        <a href="page-shop-cart.html" class="btn btn-thm">Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>rolex</div>
                                                    <div class=title><a href="page-shop-single-v1.html">Marketside Large
                                                            Cage Free Brown Eggs, 36 Oz, 18 Ct</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$18.124 <small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id=nav-shopping role=tabpanel
                                     aria-labelledby=nav-shopping-tab>
                                    <div class="best_item_slider_shop_lising_page shop_item_5grid_slider slider_dib_sm nav_none_400 dots_none owl-theme owl-carousel">
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30">
                                                    <img src="{{asset('images/shop-items/bslm1.png')}}" alt="Best Seller Item">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid">
                                                        <a href="page-shop-cart.html" class="btn btn-thm">Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>SAMSUNG</div>
                                                    <div class=title><a href="page-shop-single-v1.html">Great Value
                                                            Ultra Strong Paper Towels, Split Sheets, 6 Double </a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$32.50 <small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30">
                                                    <img src="{{asset('images/shop-items/bslm2.png')}}" alt="Best Seller Item">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid">
                                                        <a href="page-shop-cart.html" class="btn btn-thm">Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>SONY</div>
                                                    <div class=title><a href="page-shop-single-v1.html">Dell Inspiron
                                                            3000 15.6" Touchscreen Laptop - Black (Intel Core
                                                            i5-1035G1/256GB SSD/8GB RAM/Windows 11 S)</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$32.50 <small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30">
                                                    <img src="{{asset('images/shop-items/bslm3.png')}}" alt="Best Seller Item">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid">
                                                        <a href="page-shop-cart.html" class="btn btn-thm">Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>Eastsport</div>
                                                    <div class=title><a href="page-shop-single-v1.html">LG Gram 17"
                                                            Laptop -Obsidian Black (Intel Evo Core i7-1165G7/1TB SSD/16GB
                                                            RAM) -En -Only at Best Buy</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$399.00 <small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30">
                                                    <img src="{{asset('images/shop-items/bslm4.png')}}" alt="Best Seller Item">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid">
                                                        <a href="page-shop-cart.html" class="btn btn-thm">Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>rolex</div>
                                                    <div class=title><a href="page-shop-single-v1.html">HP 15.6"
                                                            Touchscreen Laptop - Natural Silver (AMD Ryzen 5 5625U/1TB
                                                            SSD/12GB RAM/Windows 11)</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$32.50 <small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30">
                                                    <img src="{{asset('images/shop-items/bslm5.png')}}" alt="Best Seller Item">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid">
                                                        <a href="page-shop-cart.html" class="btn btn-thm">Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>rolex</div>
                                                    <div class=title><a href="page-shop-single-v1.html">Marketside Large
                                                            Cage Free Brown Eggs, 36 Oz, 18 Ct</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$18.124 <small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id=nav-hotels role=tabpanel aria-labelledby=nav-hotels-tab>
                                    <div class="best_item_slider_shop_lising_page shop_item_5grid_slider slider_dib_sm nav_none_400 dots_none owl-theme owl-carousel">
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30">
                                                    <img src="{{asset('images/shop-items/bslm1.png')}}" alt="Best Seller Item">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid">
                                                        <a href="page-shop-cart.html" class="btn btn-thm">Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>SAMSUNG</div>
                                                    <div class=title><a href="page-shop-single-v1.html">Great Value
                                                            Ultra Strong Paper Towels, Split Sheets, 6 Double </a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$32.50 <small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30">
                                                    <img src="{{asset('images/shop-items/bslm2.png')}}" alt="Best Seller Item">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid">
                                                        <a href="page-shop-cart.html" class="btn btn-thm">Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>SONY</div>
                                                    <div class=title><a href="page-shop-single-v1.html">Dell Inspiron
                                                            3000 15.6" Touchscreen Laptop - Black (Intel Core
                                                            i5-1035G1/256GB SSD/8GB RAM/Windows 11 S)</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$32.50 <small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30">
                                                    <img src="{{asset('images/shop-items/bslm3.png')}}" alt="Best Seller Item">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid">
                                                        <a href="page-shop-cart.html" class="btn btn-thm">Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>Eastsport</div>
                                                    <div class=title><a href="page-shop-single-v1.html">LG Gram 17"
                                                            Laptop -Obsidian Black (Intel Evo Core i7-1165G7/1TB SSD/16GB
                                                            RAM) -En -Only at Best Buy</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$399.00 <small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30">
                                                    <img src="{{asset('images/shop-items/bslm4.png')}}" alt="Best Seller Item">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid">
                                                        <a href="page-shop-cart.html" class="btn btn-thm">Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>rolex</div>
                                                    <div class=title><a href="page-shop-single-v1.html">HP 15.6"
                                                            Touchscreen Laptop - Natural Silver (AMD Ryzen 5 5625U/1TB
                                                            SSD/12GB RAM/Windows 11)</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$32.50 <small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30">
                                                    <img src="{{asset('images/shop-items/bslm5.png')}}" alt="Best Seller Item">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid">
                                                        <a href="page-shop-cart.html" class="btn btn-thm">Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>rolex</div>
                                                    <div class=title><a href="page-shop-single-v1.html">Marketside Large
                                                            Cage Free Brown Eggs, 36 Oz, 18 Ct</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$18.124 <small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id=nav-destination role=tabpanel
                                     aria-labelledby=nav-destination-tab>
                                    <div class="best_item_slider_shop_lising_page shop_item_5grid_slider slider_dib_sm nav_none_400 dots_none owl-theme owl-carousel">
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30">
                                                    <img src="{{asset('images/shop-items/bslm1.png')}}" alt="Best Seller Item">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid">
                                                        <a href="page-shop-cart.html" class="btn btn-thm">Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>SAMSUNG</div>
                                                    <div class=title><a href="page-shop-single-v1.html">Great Value
                                                            Ultra Strong Paper Towels, Split Sheets, 6 Double </a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$32.50 <small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30">
                                                    <img src="{{asset('images/shop-items/bslm2.png')}}" alt="Best Seller Item">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid">
                                                        <a href="page-shop-cart.html" class="btn btn-thm">Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>SONY</div>
                                                    <div class=title><a href="page-shop-single-v1.html">Dell Inspiron
                                                            3000 15.6" Touchscreen Laptop - Black (Intel Core
                                                            i5-1035G1/256GB SSD/8GB RAM/Windows 11 S)</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$32.50 <small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30">
                                                    <img src="{{asset('images/shop-items/bslm3.png')}}" alt="Best Seller Item">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid">
                                                        <a href="page-shop-cart.html" class="btn btn-thm">Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>Eastsport</div>
                                                    <div class=title><a href="page-shop-single-v1.html">LG Gram 17"
                                                            Laptop -Obsidian Black (Intel Evo Core i7-1165G7/1TB SSD/16GB
                                                            RAM) -En -Only at Best Buy</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$399.00 <small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30">
                                                    <img src="{{asset('images/shop-items/bslm4.png')}}" alt="Best Seller Item">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid">
                                                        <a href="page-shop-cart.html" class="btn btn-thm">Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>rolex</div>
                                                    <div class=title><a href="page-shop-single-v1.html">HP 15.6"
                                                            Touchscreen Laptop - Natural Silver (AMD Ryzen 5 5625U/1TB
                                                            SSD/12GB RAM/Windows 11)</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$32.50 <small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30">
                                                    <img src="{{asset('images/shop-items/bslm5.png')}}" alt="Best Seller Item">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid">
                                                        <a href="page-shop-cart.html" class="btn btn-thm">Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>rolex</div>
                                                    <div class=title><a href="page-shop-single-v1.html">Marketside Large
                                                            Cage Free Brown Eggs, 36 Oz, 18 Ct</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$18.124 <small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id=nav-bread role=tabpanel aria-labelledby=nav-bread-tab>
                                    <div class="best_item_slider_shop_lising_page shop_item_5grid_slider slider_dib_sm nav_none_400 dots_none owl-theme owl-carousel">
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30">
                                                    <img src="{{asset('images/shop-items/bslm1.png')}}" alt="Best Seller Item">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid">
                                                        <a href="page-shop-cart.html" class="btn btn-thm">Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>SAMSUNG</div>
                                                    <div class=title><a href="page-shop-single-v1.html">Great Value
                                                            Ultra Strong Paper Towels, Split Sheets, 6 Double </a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$32.50 <small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30">
                                                    <img src="{{asset('images/shop-items/bslm2.png')}}" alt="Best Seller Item">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid">
                                                        <a href="page-shop-cart.html" class="btn btn-thm">Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>SONY</div>
                                                    <div class=title><a href="page-shop-single-v1.html">Dell Inspiron
                                                            3000 15.6" Touchscreen Laptop - Black (Intel Core
                                                            i5-1035G1/256GB SSD/8GB RAM/Windows 11 S)</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$32.50 <small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30">
                                                    <img src="{{asset('images/shop-items/bslm3.png')}}" alt="Best Seller Item">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid">
                                                        <a href="page-shop-cart.html" class="btn btn-thm">Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>Eastsport</div>
                                                    <div class=title><a href="page-shop-single-v1.html">LG Gram 17"
                                                            Laptop -Obsidian Black (Intel Evo Core i7-1165G7/1TB SSD/16GB
                                                            RAM) -En -Only at Best Buy</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$399.00 <small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30">
                                                    <img src="{{asset('images/shop-items/bslm4.png')}}" alt="Best Seller Item">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid">
                                                        <a href="page-shop-cart.html" class="btn btn-thm">Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>rolex</div>
                                                    <div class=title><a href="page-shop-single-v1.html">HP 15.6"
                                                            Touchscreen Laptop - Natural Silver (AMD Ryzen 5 5625U/1TB
                                                            SSD/12GB RAM/Windows 11)</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$32.50 <small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30">
                                                    <img src="{{asset('images/shop-items/bslm5.png')}}" alt="Best Seller Item">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid">
                                                        <a href="page-shop-cart.html" class="btn btn-thm">Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>rolex</div>
                                                    <div class=title><a href="page-shop-single-v1.html">Marketside Large
                                                            Cage Free Brown Eggs, 36 Oz, 18 Ct</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$18.124 <small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="deliver-divider pt0 pb90">
            <div class=container>
                <div class=row>
                    <div class=col-lg-12>
                        <div class="online_delivery text-center">
                            <h5 class=title>Members get free shipping* with no order minimum!*Restrictions apply.Try
                                free 30-day trial</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="featured-product pt0">
            <div class=container>
                <div class=row>
                    <div class=col-md-5>
                        <div class="main-title mb0-sm">
                            <h2>Furniture products</h2>
                        </div>
                    </div>
                    <div class=col-md-7>
                        <div class="popular_listing_sliders ui_kit_tab style2">
                            <div class="nav nav-tabs mb30 justify-content-start justify-content-md-end" role=tablist>
                                <button class="nav-link active" id=nav-narive-tab data-bs-toggle=tab
                                        data-bs-target=#nav-narive role=tab aria-controls=nav-narive aria-selected=true>
                                    New arrivals
                                </button>
                                <button class=nav-link id=nav-bseller-tab data-bs-toggle=tab data-bs-target=#nav-bseller
                                        role=tab aria-controls=nav-bseller aria-selected=false>Best sellers
                                </button>
                                <button class=nav-link id=nav-brated-tab data-bs-toggle=tab data-bs-target=#nav-brated
                                        role=tab aria-controls=nav-brated aria-selected=false>Best rated
                                </button>
                                <button class="nav-link me-0" id=nav-afurniture-tab data-bs-toggle=tab
                                        data-bs-target=#nav-afurniture role=tab aria-controls=nav-afurniture
                                        aria-selected=false>All
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=row>
                    <div class=col-lg-12>
                        <div class="popular_listing_sliders row ui_kit_tab style2">
                            <div class="tab-content col-lg-12" id=nav-tabContent2>
                                <div class="tab-pane fade show active" id=nav-narive role=tabpanel
                                     aria-labelledby=nav-narive-tab>
                                    <div class="best_item_slider_shop_lising_page shop_item_5grid_slider slider_dib_sm nav_none_400 dots_none owl-theme owl-carousel">
                                        <div class="item ovh">
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn"
                                                 data-wow-duration=1.1s>
                                                <div class="thumb pb30"><img src="{{asset('images/shop-items/fp1.png')}}"
                                                                             alt="Furniture Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a href="page-shop-cart.html"
                                                                                              class="btn btn-thm">Add to
                                                            Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>SAMSUNG</div>
                                                    <div class=title><a href="page-shop-single-v1.html">Samsung 65" 4K
                                                            UHD HDR QLED Tizen Smart TV</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$32.50<small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item ovh">
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn"
                                                 data-wow-duration=1.3s>
                                                <div class="thumb pb30"><img src="{{asset('images/shop-items/fp2.png')}}"
                                                                             alt="Furniture Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a href="page-shop-cart.html"
                                                                                              class="btn btn-thm">Add to
                                                            Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>SONY</div>
                                                    <div class=title><a href="page-shop-single-v1.html">Ozark Trail
                                                            6-Person Clip & Camp Dome Tent</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$32.50<small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item ovh">
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn"
                                                 data-wow-duration=1.5s>
                                                <div class="thumb pb30"><img src="{{asset('images/shop-items/fp3.png')}}"
                                                                             alt="Furniture Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a href="page-shop-cart.html"
                                                                                              class="btn btn-thm">Add to
                                                            Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>Eastsport</div>
                                                    <div class=title><a href="page-shop-single-v1.html">Beats by Dr. Dre
                                                            Studio3 Skyline Over-Ear Noise Cancelling</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$399.00<small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item ovh">
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn"
                                                 data-wow-duration=1.7s>
                                                <div class="thumb pb30"><img src="{{asset('images/shop-items/fp4.png')}}"
                                                                             alt="Furniture Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a href="page-shop-cart.html"
                                                                                              class="btn btn-thm">Add to
                                                            Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>rolex</div>
                                                    <div class=title><a href="page-shop-single-v1.html">Eastsport Unisex
                                                            Campus Tech Backpack Charcoal</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$32.50<small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="item ovh">
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn"
                                                 data-wow-duration=1.9s>
                                                <div class="thumb pb30"><img src="{{asset('images/shop-items/fp5.png')}}"
                                                                             alt="Furniture Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a href="page-shop-cart.html"
                                                                                              class="btn btn-thm">Add to
                                                            Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>rolex</div>
                                                    <div class=title><a href="page-shop-single-v1.html">Pre-Owned Rolex
                                                            Day-date 1802 Gold Watch (Certified Authenti...</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$18.124<small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id=nav-bseller role=tabpanel aria-labelledby=nav-bseller-tab>
                                    <div class="best_item_slider_shop_lising_page shop_item_5grid_slider slider_dib_sm nav_none_400 dots_none owl-theme owl-carousel">
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30"><img src="{{asset('images/shop-items/fp1.png')}}"
                                                                             alt="Furniture Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a href="page-shop-cart.html"
                                                                                              class="btn btn-thm">Add to
                                                            Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>SAMSUNG</div>
                                                    <div class=title><a href="page-shop-single-v1.html">Samsung 65" 4K
                                                            UHD HDR QLED Tizen Smart TV</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$32.50<small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30"><img src="{{asset('images/shop-items/fp2.png')}}"
                                                                             alt="Furniture Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a href="page-shop-cart.html"
                                                                                              class="btn btn-thm">Add to
                                                            Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>SONY</div>
                                                    <div class=title><a href="page-shop-single-v1.html">Ozark Trail
                                                            6-Person Clip & Camp Dome Tent</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$32.50<small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30"><img src="{{asset('images/shop-items/fp3.png')}}"
                                                                             alt="Furniture Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a href="page-shop-cart.html"
                                                                                              class="btn btn-thm">Add to
                                                            Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>Eastsport</div>
                                                    <div class=title><a href="page-shop-single-v1.html">Beats by Dr. Dre
                                                            Studio3 Skyline Over-Ear Noise Cancelling</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$399.00<small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30"><img src="{{asset('images/shop-items/fp4.png')}}"
                                                                             alt="Furniture Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a href="page-shop-cart.html"
                                                                                              class="btn btn-thm">Add to
                                                            Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>rolex</div>
                                                    <div class=title><a href="page-shop-single-v1.html">Eastsport Unisex
                                                            Campus Tech Backpack Charcoal</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$32.50<small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30"><img src="{{asset('images/shop-items/fp5.png')}}"
                                                                             alt="Furniture Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a href="page-shop-cart.html"
                                                                                              class="btn btn-thm">Add to
                                                            Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>rolex</div>
                                                    <div class=title><a href="page-shop-single-v1.html">Pre-Owned Rolex
                                                            Day-date 1802 Gold Watch (Certified Authenti...</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$18.124<small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id=nav-brated role=tabpanel aria-labelledby=nav-brated-tab>
                                    <div class="best_item_slider_shop_lising_page shop_item_5grid_slider slider_dib_sm nav_none_400 dots_none owl-theme owl-carousel">
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30"><img src="{{asset('images/shop-items/fp1.png')}}"
                                                                             alt="Furniture Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a href="page-shop-cart.html"
                                                                                              class="btn btn-thm">Add to
                                                            Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>SAMSUNG</div>
                                                    <div class=title><a href="page-shop-single-v1.html">Samsung 65" 4K
                                                            UHD HDR QLED Tizen Smart TV</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$32.50<small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30"><img src="{{asset('images/shop-items/fp2.png')}}"
                                                                             alt="Furniture Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a href="page-shop-cart.html"
                                                                                              class="btn btn-thm">Add to
                                                            Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>SONY</div>
                                                    <div class=title><a href="page-shop-single-v1.html">Ozark Trail
                                                            6-Person Clip & Camp Dome Tent</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$32.50<small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30"><img src="{{asset('images/shop-items/fp3.png')}}"
                                                                             alt="Furniture Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a href="page-shop-cart.html"
                                                                                              class="btn btn-thm">Add to
                                                            Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>Eastsport</div>
                                                    <div class=title><a href="page-shop-single-v1.html">Beats by Dr. Dre
                                                            Studio3 Skyline Over-Ear Noise Cancelling</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$399.00<small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30"><img src="{{asset('images/shop-items/fp4.png')}}"
                                                                             alt="Furniture Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a href="page-shop-cart.html"
                                                                                              class="btn btn-thm">Add to
                                                            Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>rolex</div>
                                                    <div class=title><a href="page-shop-single-v1.html">Eastsport Unisex
                                                            Campus Tech Backpack Charcoal</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$32.50<small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30"><img src="{{asset('images/shop-items/fp5.png')}}"
                                                                             alt="Furniture Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a href="page-shop-cart.html"
                                                                                              class="btn btn-thm">Add to
                                                            Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>rolex</div>
                                                    <div class=title><a href="page-shop-single-v1.html">Pre-Owned Rolex
                                                            Day-date 1802 Gold Watch (Certified Authenti...</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$18.124<small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id=nav-afurniture role=tabpanel
                                     aria-labelledby=nav-afurniture-tab>
                                    <div class="best_item_slider_shop_lising_page shop_item_5grid_slider slider_dib_sm nav_none_400 dots_none owl-theme owl-carousel">
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30"><img src="{{asset('images/shop-items/fp1.png')}}"
                                                                             alt="Furniture Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a href="page-shop-cart.html"
                                                                                              class="btn btn-thm">Add to
                                                            Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>SAMSUNG</div>
                                                    <div class=title><a href="page-shop-single-v1.html">Samsung 65" 4K
                                                            UHD HDR QLED Tizen Smart TV</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$32.50<small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30"><img src="{{asset('images/shop-items/fp2.png')}}"
                                                                             alt="Furniture Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a href="page-shop-cart.html"
                                                                                              class="btn btn-thm">Add to
                                                            Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>SONY</div>
                                                    <div class=title><a href="page-shop-single-v1.html">Ozark Trail
                                                            6-Person Clip & Camp Dome Tent</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$32.50<small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30"><img src="{{asset('images/shop-items/fp3.png')}}"
                                                                             alt="Furniture Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a href="page-shop-cart.html"
                                                                                              class="btn btn-thm">Add to
                                                            Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>Eastsport</div>
                                                    <div class=title><a href="page-shop-single-v1.html">Beats by Dr. Dre
                                                            Studio3 Skyline Over-Ear Noise Cancelling</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$399.00<small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30"><img src="{{asset('images/shop-items/fp4.png')}}"
                                                                             alt="Furniture Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a href="page-shop-cart.html"
                                                                                              class="btn btn-thm">Add to
                                                            Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>rolex</div>
                                                    <div class=title><a href="page-shop-single-v1.html">Eastsport Unisex
                                                            Campus Tech Backpack Charcoal</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$32.50<small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=item>
                                            <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                <div class="thumb pb30"><img src="{{asset('images/shop-items/fp5.png')}}"
                                                                             alt="Furniture Product">
                                                    <div class=thumb_info>
                                                        <ul class=mb0>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-heart></span></a></li>
                                                            <li>
                                                                <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                        class=flaticon-show></span></a></li>
                                                            <li><a href="page-shop-list-v6.html"><span
                                                                        class=flaticon-graph></span></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="shop_item_cart_btn d-grid"><a href="page-shop-cart.html"
                                                                                              class="btn btn-thm">Add to
                                                            Cart</a></div>
                                                </div>
                                                <div class=details>
                                                    <div class=sub_title>rolex</div>
                                                    <div class=title><a href="page-shop-single-v1.html">Pre-Owned Rolex
                                                            Day-date 1802 Gold Watch (Certified Authenti...</a></div>
                                                    <div class="review d-flex db-500">
                                                        <ul class="mb0 me-2">
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                            <li class=list-inline-item><a href="index.html#"><i
                                                                        class="fas fa-star"></i></a></li>
                                                        </ul>
                                                        <div class=review_count><a href="index.html#">3,014 reviews</a>
                                                        </div>
                                                    </div>
                                                    <div class=si_footer>
                                                        <div class=price>$18.124<small>
                                                                <del>$45</del>
                                                            </small></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="featured-product pt0">
            <div class=container>
                <div class=row>
                    <div class=col-md-5>
                        <div class="main-title mb0-sm">
                            <h2>Electronics products</h2>
                        </div>
                    </div>
                    <div class=col-md-7>
                        <div class="popular_listing_sliders ui_kit_tab style2">
                            <div class="nav nav-tabs mb30 justify-content-start justify-content-md-end" role=tablist>
                                <button class="nav-link active" id=nav-enarive-tab data-bs-toggle=tab
                                        data-bs-target=#nav-enarive role=tab aria-controls=nav-enarive
                                        aria-selected=true>New arrivals
                                </button>
                                <button class=nav-link id=nav-ebseller-tab data-bs-toggle=tab
                                        data-bs-target=#nav-ebseller role=tab aria-controls=nav-ebseller
                                        aria-selected=false>Best sellers
                                </button>
                                <button class=nav-link id=nav-ebrated-tab data-bs-toggle=tab data-bs-target=#nav-ebrated
                                        role=tab aria-controls=nav-ebrated aria-selected=false>Best rated
                                </button>
                                <button class="nav-link me-0" id=nav-aelectronic-tab data-bs-toggle=tab
                                        data-bs-target=#nav-aelectronic role=tab aria-controls=nav-aelectronic
                                        aria-selected=false>All
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=row>
                    <div class=col-lg-12>
                        <div class="popular_listing_sliders row ui_kit_tab style2">
                            <div class="tab-content col-lg-12" id=nav-tabContent3>
                                <div class="tab-pane fade show active" id=nav-enarive role=tabpanel
                                     aria-labelledby=nav-enarive-tab>
                                    <div class=row>
                                        <div class=col-lg-12>
                                            <div class="best_item_slider_shop_lising_page shop_item_5grid_slider slider_dib_sm nav_none_400 dots_none nav_none owl-theme owl-carousel">
                                                <div class="item ovh">
                                                    <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn"
                                                         data-wow-duration=1.1s>
                                                        <div class="thumb pb30"><img src="{{asset('images/shop-items/ep1.png')}}"
                                                                                     alt="Electronics Product">
                                                            <div class=thumb_info>
                                                                <ul class=mb0>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-heart></span></a></li>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-show></span></a></li>
                                                                    <li><a href="page-shop-list-v6.html"><span
                                                                                class=flaticon-graph></span></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="shop_item_cart_btn d-grid"><a
                                                                    href="page-shop-cart.html" class="btn btn-thm">Add
                                                                    to Cart</a></div>
                                                        </div>
                                                        <div class=details>
                                                            <div class=sub_title>Apple</div>
                                                            <div class=title><a href="page-shop-single-v1.html">Apple
                                                                    Watch SE (GPS) 40mm Space Grey Aluminum Case with</a>
                                                            </div>
                                                            <div class="review d-flex db-500">
                                                                <ul class="mb0 me-2">
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                </ul>
                                                                <div class=review_count><a href="index.html#">3,014
                                                                        reviews</a></div>
                                                            </div>
                                                            <div class=si_footer>
                                                                <div class=price>$32.50<small>
                                                                        <del>$45</del>
                                                                    </small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item ovh">
                                                    <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn"
                                                         data-wow-duration=1.3s>
                                                        <div class="thumb pb30"><img src="{{asset('images/shop-items/ep2.png')}}"
                                                                                     alt="Electronics Product">
                                                            <div class=thumb_info>
                                                                <ul class=mb0>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-heart></span></a></li>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-show></span></a></li>
                                                                    <li><a href="page-shop-list-v6.html"><span
                                                                                class=flaticon-graph></span></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="shop_item_cart_btn d-grid"><a
                                                                    href="page-shop-cart.html" class="btn btn-thm">Add
                                                                    to Cart</a></div>
                                                        </div>
                                                        <div class=details>
                                                            <div class=sub_title>Apple</div>
                                                            <div class=title><a href="page-shop-single-v1.html">Apple
                                                                    iPhone 11 64GB Smartphone - Black.</a></div>
                                                            <div class="review d-flex db-500">
                                                                <ul class="mb0 me-2">
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                </ul>
                                                                <div class=review_count><a href="index.html#">3,014
                                                                        reviews</a></div>
                                                            </div>
                                                            <div class=si_footer>
                                                                <div class=price>$32.50<small>
                                                                        <del>$45</del>
                                                                    </small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item ovh">
                                                    <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn"
                                                         data-wow-duration=1.5s>
                                                        <div class="thumb pb30"><img src="{{asset('images/shop-items/ep3.png')}}"
                                                                                     alt="Electronics Product">
                                                            <div class=thumb_info>
                                                                <ul class=mb0>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-heart></span></a></li>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-show></span></a></li>
                                                                    <li><a href="page-shop-list-v6.html"><span
                                                                                class=flaticon-graph></span></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="shop_item_cart_btn d-grid"><a
                                                                    href="page-shop-cart.html" class="btn btn-thm">Add
                                                                    to Cart</a></div>
                                                        </div>
                                                        <div class=details>
                                                            <div class=sub_title>Eastsport</div>
                                                            <div class=title><a href="page-shop-single-v1.html">iRobot
                                                                    Roomba i3+ EVO Wi-Fi Connected Self-Empty Robot.</a>
                                                            </div>
                                                            <div class="review d-flex db-500">
                                                                <ul class="mb0 me-2">
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                </ul>
                                                                <div class=review_count><a href="index.html#">3,014
                                                                        reviews</a></div>
                                                            </div>
                                                            <div class=si_footer>
                                                                <div class=price>$399.00<small>
                                                                        <del>$45</del>
                                                                    </small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item ovh">
                                                    <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn"
                                                         data-wow-duration=1.7s>
                                                        <div class="thumb pb30"><img src="{{asset('images/shop-items/ep4.png')}}"
                                                                                     alt="Electronics Product">
                                                            <div class=thumb_info>
                                                                <ul class=mb0>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-heart></span></a></li>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-show></span></a></li>
                                                                    <li><a href="page-shop-list-v6.html"><span
                                                                                class=flaticon-graph></span></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="shop_item_cart_btn d-grid"><a
                                                                    href="page-shop-cart.html" class="btn btn-thm">Add
                                                                    to Cart</a></div>
                                                        </div>
                                                        <div class=details>
                                                            <div class=sub_title>rolex</div>
                                                            <div class=title><a href="page-shop-single-v1.html">Dyson V7
                                                                    Complete Cordless Stick Vacuum - Iron/Blue</a></div>
                                                            <div class="review d-flex db-500">
                                                                <ul class="mb0 me-2">
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                </ul>
                                                                <div class=review_count><a href="index.html#">3,014
                                                                        reviews</a></div>
                                                            </div>
                                                            <div class=si_footer>
                                                                <div class=price>$32.50<small>
                                                                        <del>$45</del>
                                                                    </small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item ovh">
                                                    <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn"
                                                         data-wow-duration=1.9s>
                                                        <div class="thumb pb30"><img src="{{asset('images/shop-items/ep5.png')}}"
                                                                                     alt="Electronics Product">
                                                            <div class=thumb_info>
                                                                <ul class=mb0>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-heart></span></a></li>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-show></span></a></li>
                                                                    <li><a href="page-shop-list-v6.html"><span
                                                                                class=flaticon-graph></span></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="shop_item_cart_btn d-grid"><a
                                                                    href="page-shop-cart.html" class="btn btn-thm">Add
                                                                    to Cart</a></div>
                                                        </div>
                                                        <div class=details>
                                                            <div class=sub_title>rolex</div>
                                                            <div class=title><a href="page-shop-single-v1.html">Meta
                                                                    Quest 2 256GB VR Headset with Touch Controllers</a>
                                                            </div>
                                                            <div class="review d-flex db-500">
                                                                <ul class="mb0 me-2">
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                </ul>
                                                                <div class=review_count><a href="index.html#">3,014
                                                                        reviews</a></div>
                                                            </div>
                                                            <div class=si_footer>
                                                                <div class=price>$18.124<small>
                                                                        <del>$45</del>
                                                                    </small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id=nav-ebseller role=tabpanel
                                     aria-labelledby=nav-ebseller-tab>
                                    <div class=row>
                                        <div class=col-lg-12>
                                            <div class="best_item_slider_shop_lising_page shop_item_5grid_slider slider_dib_sm nav_none_400 dots_none nav_none owl-theme owl-carousel">
                                                <div class=item>
                                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                        <div class="thumb pb30"><img src="{{asset('images/shop-items/ep1.png')}}"
                                                                                     alt="Electronics Product">
                                                            <div class=thumb_info>
                                                                <ul class=mb0>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-heart></span></a></li>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-show></span></a></li>
                                                                    <li><a href="page-shop-list-v6.html"><span
                                                                                class=flaticon-graph></span></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="shop_item_cart_btn d-grid"><a
                                                                    href="page-shop-cart.html" class="btn btn-thm">Add
                                                                    to Cart</a></div>
                                                        </div>
                                                        <div class=details>
                                                            <div class=sub_title>Apple</div>
                                                            <div class=title><a href="page-shop-single-v1.html">Apple
                                                                    Watch SE (GPS) 40mm Space Grey Aluminum Case with</a>
                                                            </div>
                                                            <div class="review d-flex db-500">
                                                                <ul class="mb0 me-2">
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                </ul>
                                                                <div class=review_count><a href="index.html#">3,014
                                                                        reviews</a></div>
                                                            </div>
                                                            <div class=si_footer>
                                                                <div class=price>$32.50<small>
                                                                        <del>$45</del>
                                                                    </small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=item>
                                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                        <div class="thumb pb30"><img src="{{asset('images/shop-items/ep2.png')}}"
                                                                                     alt="Electronics Product">
                                                            <div class=thumb_info>
                                                                <ul class=mb0>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-heart></span></a></li>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-show></span></a></li>
                                                                    <li><a href="page-shop-list-v6.html"><span
                                                                                class=flaticon-graph></span></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="shop_item_cart_btn d-grid"><a
                                                                    href="page-shop-cart.html" class="btn btn-thm">Add
                                                                    to Cart</a></div>
                                                        </div>
                                                        <div class=details>
                                                            <div class=sub_title>Apple</div>
                                                            <div class=title><a href="page-shop-single-v1.html">Apple
                                                                    iPhone 11 64GB Smartphone - Black.</a></div>
                                                            <div class="review d-flex db-500">
                                                                <ul class="mb0 me-2">
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                </ul>
                                                                <div class=review_count><a href="index.html#">3,014
                                                                        reviews</a></div>
                                                            </div>
                                                            <div class=si_footer>
                                                                <div class=price>$32.50<small>
                                                                        <del>$45</del>
                                                                    </small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=item>
                                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                        <div class="thumb pb30"><img src="{{asset('images/shop-items/ep3.png')}}"
                                                                                     alt="Electronics Product">
                                                            <div class=thumb_info>
                                                                <ul class=mb0>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-heart></span></a></li>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-show></span></a></li>
                                                                    <li><a href="page-shop-list-v6.html"><span
                                                                                class=flaticon-graph></span></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="shop_item_cart_btn d-grid"><a
                                                                    href="page-shop-cart.html" class="btn btn-thm">Add
                                                                    to Cart</a></div>
                                                        </div>
                                                        <div class=details>
                                                            <div class=sub_title>Eastsport</div>
                                                            <div class=title><a href="page-shop-single-v1.html">iRobot
                                                                    Roomba i3+ EVO Wi-Fi Connected Self-Empty Robot.</a>
                                                            </div>
                                                            <div class="review d-flex db-500">
                                                                <ul class="mb0 me-2">
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                </ul>
                                                                <div class=review_count><a href="index.html#">3,014
                                                                        reviews</a></div>
                                                            </div>
                                                            <div class=si_footer>
                                                                <div class=price>$399.00<small>
                                                                        <del>$45</del>
                                                                    </small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=item>
                                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                        <div class="thumb pb30"><img src="{{asset('images/shop-items/ep4.png')}}"
                                                                                     alt="Electronics Product">
                                                            <div class=thumb_info>
                                                                <ul class=mb0>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-heart></span></a></li>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-show></span></a></li>
                                                                    <li><a href="page-shop-list-v6.html"><span
                                                                                class=flaticon-graph></span></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="shop_item_cart_btn d-grid"><a
                                                                    href="page-shop-cart.html" class="btn btn-thm">Add
                                                                    to Cart</a></div>
                                                        </div>
                                                        <div class=details>
                                                            <div class=sub_title>rolex</div>
                                                            <div class=title><a href="page-shop-single-v1.html">Dyson V7
                                                                    Complete Cordless Stick Vacuum - Iron/Blue</a></div>
                                                            <div class="review d-flex db-500">
                                                                <ul class="mb0 me-2">
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                </ul>
                                                                <div class=review_count><a href="index.html#">3,014
                                                                        reviews</a></div>
                                                            </div>
                                                            <div class=si_footer>
                                                                <div class=price>$32.50<small>
                                                                        <del>$45</del>
                                                                    </small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=item>
                                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                        <div class="thumb pb30"><img src="{{asset('images/shop-items/ep5.png')}}"
                                                                                     alt="Electronics Product">
                                                            <div class=thumb_info>
                                                                <ul class=mb0>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-heart></span></a></li>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-show></span></a></li>
                                                                    <li><a href="page-shop-list-v6.html"><span
                                                                                class=flaticon-graph></span></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="shop_item_cart_btn d-grid"><a
                                                                    href="page-shop-cart.html" class="btn btn-thm">Add
                                                                    to Cart</a></div>
                                                        </div>
                                                        <div class=details>
                                                            <div class=sub_title>rolex</div>
                                                            <div class=title><a href="page-shop-single-v1.html">Meta
                                                                    Quest 2 256GB VR Headset with Touch Controllers</a>
                                                            </div>
                                                            <div class="review d-flex db-500">
                                                                <ul class="mb0 me-2">
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                </ul>
                                                                <div class=review_count><a href="index.html#">3,014
                                                                        reviews</a></div>
                                                            </div>
                                                            <div class=si_footer>
                                                                <div class=price>$18.124<small>
                                                                        <del>$45</del>
                                                                    </small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id=nav-ebrated role=tabpanel aria-labelledby=nav-ebrated-tab>
                                    <div class=row>
                                        <div class=col-lg-12>
                                            <div class="best_item_slider_shop_lising_page shop_item_5grid_slider slider_dib_sm nav_none_400 dots_none nav_none owl-theme owl-carousel">
                                                <div class=item>
                                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                        <div class="thumb pb30"><img src="{{asset('images/shop-items/ep1.png')}}"
                                                                                     alt="Electronics Product">
                                                            <div class=thumb_info>
                                                                <ul class=mb0>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-heart></span></a></li>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-show></span></a></li>
                                                                    <li><a href="page-shop-list-v6.html"><span
                                                                                class=flaticon-graph></span></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="shop_item_cart_btn d-grid"><a
                                                                    href="page-shop-cart.html" class="btn btn-thm">Add
                                                                    to Cart</a></div>
                                                        </div>
                                                        <div class=details>
                                                            <div class=sub_title>Apple</div>
                                                            <div class=title><a href="page-shop-single-v1.html">Apple
                                                                    Watch SE (GPS) 40mm Space Grey Aluminum Case with</a>
                                                            </div>
                                                            <div class="review d-flex db-500">
                                                                <ul class="mb0 me-2">
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                </ul>
                                                                <div class=review_count><a href="index.html#">3,014
                                                                        reviews</a></div>
                                                            </div>
                                                            <div class=si_footer>
                                                                <div class=price>$32.50<small>
                                                                        <del>$45</del>
                                                                    </small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=item>
                                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                        <div class="thumb pb30"><img src="{{asset('images/shop-items/ep2.png')}}"
                                                                                     alt="Electronics Product">
                                                            <div class=thumb_info>
                                                                <ul class=mb0>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-heart></span></a></li>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-show></span></a></li>
                                                                    <li><a href="page-shop-list-v6.html"><span
                                                                                class=flaticon-graph></span></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="shop_item_cart_btn d-grid"><a
                                                                    href="page-shop-cart.html" class="btn btn-thm">Add
                                                                    to Cart</a></div>
                                                        </div>
                                                        <div class=details>
                                                            <div class=sub_title>Apple</div>
                                                            <div class=title><a href="page-shop-single-v1.html">Apple
                                                                    iPhone 11 64GB Smartphone - Black.</a></div>
                                                            <div class="review d-flex db-500">
                                                                <ul class="mb0 me-2">
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                </ul>
                                                                <div class=review_count><a href="index.html#">3,014
                                                                        reviews</a></div>
                                                            </div>
                                                            <div class=si_footer>
                                                                <div class=price>$32.50<small>
                                                                        <del>$45</del>
                                                                    </small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=item>
                                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                        <div class="thumb pb30"><img src="{{asset('images/shop-items/ep3.png')}}"
                                                                                     alt="Electronics Product">
                                                            <div class=thumb_info>
                                                                <ul class=mb0>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-heart></span></a></li>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-show></span></a></li>
                                                                    <li><a href="page-shop-list-v6.html"><span
                                                                                class=flaticon-graph></span></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="shop_item_cart_btn d-grid"><a
                                                                    href="page-shop-cart.html" class="btn btn-thm">Add
                                                                    to Cart</a></div>
                                                        </div>
                                                        <div class=details>
                                                            <div class=sub_title>Eastsport</div>
                                                            <div class=title><a href="page-shop-single-v1.html">iRobot
                                                                    Roomba i3+ EVO Wi-Fi Connected Self-Empty Robot.</a>
                                                            </div>
                                                            <div class="review d-flex db-500">
                                                                <ul class="mb0 me-2">
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                </ul>
                                                                <div class=review_count><a href="index.html#">3,014
                                                                        reviews</a></div>
                                                            </div>
                                                            <div class=si_footer>
                                                                <div class=price>$399.00<small>
                                                                        <del>$45</del>
                                                                    </small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=item>
                                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                        <div class="thumb pb30"><img src="{{asset('images/shop-items/ep4.png')}}"
                                                                                     alt="Electronics Product">
                                                            <div class=thumb_info>
                                                                <ul class=mb0>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-heart></span></a></li>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-show></span></a></li>
                                                                    <li><a href="page-shop-list-v6.html"><span
                                                                                class=flaticon-graph></span></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="shop_item_cart_btn d-grid"><a
                                                                    href="page-shop-cart.html" class="btn btn-thm">Add
                                                                    to Cart</a></div>
                                                        </div>
                                                        <div class=details>
                                                            <div class=sub_title>rolex</div>
                                                            <div class=title><a href="page-shop-single-v1.html">Dyson V7
                                                                    Complete Cordless Stick Vacuum - Iron/Blue</a></div>
                                                            <div class="review d-flex db-500">
                                                                <ul class="mb0 me-2">
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                </ul>
                                                                <div class=review_count><a href="index.html#">3,014
                                                                        reviews</a></div>
                                                            </div>
                                                            <div class=si_footer>
                                                                <div class=price>$32.50<small>
                                                                        <del>$45</del>
                                                                    </small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=item>
                                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                        <div class="thumb pb30"><img src="{{asset('images/shop-items/ep5.png')}}"
                                                                                     alt="Electronics Product">
                                                            <div class=thumb_info>
                                                                <ul class=mb0>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-heart></span></a></li>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-show></span></a></li>
                                                                    <li><a href="page-shop-list-v6.html"><span
                                                                                class=flaticon-graph></span></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="shop_item_cart_btn d-grid"><a
                                                                    href="page-shop-cart.html" class="btn btn-thm">Add
                                                                    to Cart</a></div>
                                                        </div>
                                                        <div class=details>
                                                            <div class=sub_title>rolex</div>
                                                            <div class=title><a href="page-shop-single-v1.html">Meta
                                                                    Quest 2 256GB VR Headset with Touch Controllers</a>
                                                            </div>
                                                            <div class="review d-flex db-500">
                                                                <ul class="mb0 me-2">
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                </ul>
                                                                <div class=review_count><a href="index.html#">3,014
                                                                        reviews</a></div>
                                                            </div>
                                                            <div class=si_footer>
                                                                <div class=price>$18.124<small>
                                                                        <del>$45</del>
                                                                    </small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id=nav-aelectronic role=tabpanel
                                     aria-labelledby=nav-aelectronic-tab>
                                    <div class=row>
                                        <div class=col-lg-12>
                                            <div class="best_item_slider_shop_lising_page shop_item_5grid_slider slider_dib_sm nav_none_400 dots_none nav_none owl-theme owl-carousel">
                                                <div class=item>
                                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                        <div class="thumb pb30"><img src="{{asset('images/shop-items/ep1.png')}}"
                                                                                     alt="Electronics Product">
                                                            <div class=thumb_info>
                                                                <ul class=mb0>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-heart></span></a></li>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-show></span></a></li>
                                                                    <li><a href="page-shop-list-v6.html"><span
                                                                                class=flaticon-graph></span></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="shop_item_cart_btn d-grid"><a
                                                                    href="page-shop-cart.html" class="btn btn-thm">Add
                                                                    to Cart</a></div>
                                                        </div>
                                                        <div class=details>
                                                            <div class=sub_title>Apple</div>
                                                            <div class=title><a href="page-shop-single-v1.html">Apple
                                                                    Watch SE (GPS) 40mm Space Grey Aluminum Case with</a>
                                                            </div>
                                                            <div class="review d-flex db-500">
                                                                <ul class="mb0 me-2">
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                </ul>
                                                                <div class=review_count><a href="index.html#">3,014
                                                                        reviews</a></div>
                                                            </div>
                                                            <div class=si_footer>
                                                                <div class=price>$32.50<small>
                                                                        <del>$45</del>
                                                                    </small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=item>
                                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                        <div class="thumb pb30"><img src="{{asset('images/shop-items/ep2.png')}}"
                                                                                     alt="Electronics Product">
                                                            <div class=thumb_info>
                                                                <ul class=mb0>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-heart></span></a></li>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-show></span></a></li>
                                                                    <li><a href="page-shop-list-v6.html"><span
                                                                                class=flaticon-graph></span></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="shop_item_cart_btn d-grid"><a
                                                                    href="page-shop-cart.html" class="btn btn-thm">Add
                                                                    to Cart</a></div>
                                                        </div>
                                                        <div class=details>
                                                            <div class=sub_title>Apple</div>
                                                            <div class=title><a href="page-shop-single-v1.html">Apple
                                                                    iPhone 11 64GB Smartphone - Black.</a></div>
                                                            <div class="review d-flex db-500">
                                                                <ul class="mb0 me-2">
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                </ul>
                                                                <div class=review_count><a href="index.html#">3,014
                                                                        reviews</a></div>
                                                            </div>
                                                            <div class=si_footer>
                                                                <div class=price>$32.50<small>
                                                                        <del>$45</del>
                                                                    </small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=item>
                                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                        <div class="thumb pb30"><img src="{{asset('images/shop-items/ep3.png')}}"
                                                                                     alt="Electronics Product">
                                                            <div class=thumb_info>
                                                                <ul class=mb0>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-heart></span></a></li>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-show></span></a></li>
                                                                    <li><a href="page-shop-list-v6.html"><span
                                                                                class=flaticon-graph></span></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="shop_item_cart_btn d-grid"><a
                                                                    href="page-shop-cart.html" class="btn btn-thm">Add
                                                                    to Cart</a></div>
                                                        </div>
                                                        <div class=details>
                                                            <div class=sub_title>Eastsport</div>
                                                            <div class=title><a href="page-shop-single-v1.html">iRobot
                                                                    Roomba i3+ EVO Wi-Fi Connected Self-Empty Robot.</a>
                                                            </div>
                                                            <div class="review d-flex db-500">
                                                                <ul class="mb0 me-2">
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                </ul>
                                                                <div class=review_count><a href="index.html#">3,014
                                                                        reviews</a></div>
                                                            </div>
                                                            <div class=si_footer>
                                                                <div class=price>$399.00<small>
                                                                        <del>$45</del>
                                                                    </small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=item>
                                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                        <div class="thumb pb30"><img src="{{asset('images/shop-items/ep4.png')}}"
                                                                                     alt="Electronics Product">
                                                            <div class=thumb_info>
                                                                <ul class=mb0>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-heart></span></a></li>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-show></span></a></li>
                                                                    <li><a href="page-shop-list-v6.html"><span
                                                                                class=flaticon-graph></span></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="shop_item_cart_btn d-grid"><a
                                                                    href="page-shop-cart.html" class="btn btn-thm">Add
                                                                    to Cart</a></div>
                                                        </div>
                                                        <div class=details>
                                                            <div class=sub_title>rolex</div>
                                                            <div class=title><a href="page-shop-single-v1.html">Dyson V7
                                                                    Complete Cordless Stick Vacuum - Iron/Blue</a></div>
                                                            <div class="review d-flex db-500">
                                                                <ul class="mb0 me-2">
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                </ul>
                                                                <div class=review_count><a href="index.html#">3,014
                                                                        reviews</a></div>
                                                            </div>
                                                            <div class=si_footer>
                                                                <div class=price>$32.50<small>
                                                                        <del>$45</del>
                                                                    </small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class=item>
                                                    <div class="shop_item bdrtrb1 px-2 px-sm-3">
                                                        <div class="thumb pb30"><img src="{{asset('images/shop-items/ep5.png')}}"
                                                                                     alt="Electronics Product">
                                                            <div class=thumb_info>
                                                                <ul class=mb0>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-heart></span></a></li>
                                                                    <li>
                                                                        <a href="http://rrfonline.unlockdesizn.com/alitufan/zeomart/page-dashboard-wish-list.html"><span
                                                                                class=flaticon-show></span></a></li>
                                                                    <li><a href="page-shop-list-v6.html"><span
                                                                                class=flaticon-graph></span></a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="shop_item_cart_btn d-grid"><a
                                                                    href="page-shop-cart.html" class="btn btn-thm">Add
                                                                    to Cart</a></div>
                                                        </div>
                                                        <div class=details>
                                                            <div class=sub_title>rolex</div>
                                                            <div class=title><a href="page-shop-single-v1.html">Meta
                                                                    Quest 2 256GB VR Headset with Touch Controllers</a>
                                                            </div>
                                                            <div class="review d-flex db-500">
                                                                <ul class="mb0 me-2">
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                    <li class=list-inline-item><a href="index.html#"><i
                                                                                class="fas fa-star"></i></a></li>
                                                                </ul>
                                                                <div class=review_count><a href="index.html#">3,014
                                                                        reviews</a></div>
                                                            </div>
                                                            <div class=si_footer>
                                                                <div class=price>$18.124<small>
                                                                        <del>$45</del>
                                                                    </small></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt100">
                    <div class=col-lg-12>
                        <div class="shop_item_7grid_slider slider_dib_400 dots_none nav_none shop_by_brand style2 owl-carousel owl-theme">
                            <div class=item><a class="mb-2 me-3 wow fadeInUp" data-wow-duration=1.1s href="index.html#">Wireless
                                    Networks</a></div>
                            <div class=item><a class="mb-2 me-3 wow fadeInUp" data-wow-duration=1.3s href="index.html#">Cell
                                    Phones</a></div>
                            <div class=item><a class="mb-2 me-3 wow fadeInUp" data-wow-duration=1.5s href="index.html#">Cameras</a>
                            </div>
                            <div class=item><a class="mb-2 me-3 wow fadeInUp" data-wow-duration=1.7s href="index.html#">Head
                                    Phones</a></div>
                            <div class=item><a class="mb-2 me-3 wow fadeInUp" data-wow-duration=1.9s href="index.html#">Accessories</a>
                            </div>
                            <div class=item><a class="mb-2 me-3 wow fadeInUp" data-wow-duration=2.1s href="index.html#">Gaming
                                    Monitors</a></div>
                            <div class=item><a class="mb-2 me-3 wow fadeInUp" data-wow-duration=2.3s href="index.html#">Virtual
                                    Reality</a></div>
                        </div>
                    </div>
                </div>
                <div class="banner_one_large bdrs6 mt100 px-4 px-md-0">
                    <div class=row>
                        <div class="col-lg-5 offset-lg-1 align-self-center">
                            <div class="apple_widget_home1 mb-4 mb-lg-0">
                                <h1 class=title>Apple Watch</h1>
                                <p class="para mt-3 mb-4">Now up to $70 off. Give Mom a gift that shows off your
                                    love.</p>
                                <a href="page-shop-list-v1.html" class="btn btn-thm">Shop Now</a></div>
                        </div>
                        <div class="col-lg-6 align-self-center">
                            <div class="apple_widget_home1 animate_content text-center">
                                <div class="thumb animate_thumb"><img src="{{asset('images/banner/banner-img1.png')}}"
                                                                      alt="Banner Image"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="featured-product pt0">
            <div class=container>
                <div class=row>
                    <div class=col-md-6>
                        <div class="main-title mb0-sm">
                            <h2>Hot New Arrivals</h2>
                        </div>
                    </div>
                    <div class=col-md-6>
                        <div class="popular_listing_sliders style2 ui_kit_tab">
                            <div class="justify-content-md-end justify-content-start mb30 nav nav-tabs" role=tablist>
                                <button aria-controls=nav-hnat20 aria-selected=true class="nav-link active"
                                        data-bs-target=#nav-hnat20 data-bs-toggle=tab id=nav-hnat20-tab role=tab>Top 20
                                </button>
                                <button aria-controls=nav-hnababy aria-selected=false class=nav-link
                                        data-bs-target=#nav-hnababy data-bs-toggle=tab id=nav-hnababy-tab role=tab>Baby
                                </button>
                                <button aria-controls=nav-hnafurniture aria-selected=false class=nav-link
                                        data-bs-target=#nav-hnafurniture data-bs-toggle=tab id=nav-hnafurniture-tab
                                        role=tab>Furniture
                                </button>
                                <button aria-controls=nav-hnaent aria-selected=false class="nav-link me-0"
                                        data-bs-target=#nav-hnaent data-bs-toggle=tab id=nav-hnaent-tab role=tab>
                                    Electronic
                                </button>
                                <button aria-controls=nav-hnaall aria-selected=false class="nav-link me-0"
                                        data-bs-target=#nav-hnaall data-bs-toggle=tab id=nav-hnaall-tab role=tab>All
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=row>
                    <div class=col-lg-12>
                        <div class="row popular_listing_sliders style2 ui_kit_tab">
                            <div class="col-lg-12 tab-content" id=nav-tabContent4>
                                <div class="fade tab-pane active show" id=nav-hnat20 aria-labelledby=nav-hnat20-tab
                                     role=tabpanel>
                                    <div class=row>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=0.3s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap1.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Sony DJ Headphones
                                                            4334205465, Black, Standard</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=0.5s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap2.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Sony E-Mount Full
                                                            Frame FE 24-70mm f/2.8 GM II G Master</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=0.7s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap3.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">TV 55" 4-Series 4K UHD
                                                            smart TV</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=0.9s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap4.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">TV 55" 4-Series 4K UHD
                                                            smart TV</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=1.1s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap5.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Apple iPhone Retina 6s
                                                            Plus 64GB</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=1.3s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap6.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Samsung Galaxy S21
                                                            Ultra Silicone Case with S-Pen Bundle</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=1.5s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap7.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Apple iPhone Retina 6s
                                                            Plus 64GB</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=1.7s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap8.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Office Chair Ergonomic
                                                            Cheap Desk Chair Mesh Computer</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=1.9s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap9.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Ray-Ban Women's
                                                            Rb3647n Double Bridge Round Sunglasses</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=2.1s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap10.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Suptek Aluminum Alloy
                                                            Cell Phone Desk Mount Stand</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=2.3s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap11.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">PopSockets PopWallet+:
                                                            Swappable and Repositionable</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=2.5s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap12.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Cooling Body Gel
                                                            Moisturizer with Soothing Aloe</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fade tab-pane" id=nav-hnababy aria-labelledby=nav-hnababy-tab role=tabpanel>
                                    <div class=row>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=0.3s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap1.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Sony DJ Headphones
                                                            4334205465, Black, Standard</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=0.5s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap2.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Sony E-Mount Full
                                                            Frame FE 24-70mm f/2.8 GM II G Master</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=0.7s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap3.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">TV 55" 4-Series 4K UHD
                                                            smart TV</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=0.9s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap4.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">TV 55" 4-Series 4K UHD
                                                            smart TV</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=1.1s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap5.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Apple iPhone Retina 6s
                                                            Plus 64GB</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=1.3s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap6.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Samsung Galaxy S21
                                                            Ultra Silicone Case with S-Pen Bundle</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=1.5s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap7.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Apple iPhone Retina 6s
                                                            Plus 64GB</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=1.7s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap8.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Office Chair Ergonomic
                                                            Cheap Desk Chair Mesh Computer</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=1.9s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap9.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Ray-Ban Women's
                                                            Rb3647n Double Bridge Round Sunglasses</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=2.1s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap10.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Suptek Aluminum Alloy
                                                            Cell Phone Desk Mount Stand</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=2.3s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap11.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">PopSockets PopWallet+:
                                                            Swappable and Repositionable</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=2.5s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap12.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Cooling Body Gel
                                                            Moisturizer with Soothing Aloe</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fade tab-pane" id=nav-hnafurniture aria-labelledby=nav-hnafurniture-tab
                                     role=tabpanel>
                                    <div class=row>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=0.3s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap1.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Sony DJ Headphones
                                                            4334205465, Black, Standard</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=0.5s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap2.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Sony E-Mount Full
                                                            Frame FE 24-70mm f/2.8 GM II G Master</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=0.7s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap3.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">TV 55" 4-Series 4K UHD
                                                            smart TV</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=0.9s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap4.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">TV 55" 4-Series 4K UHD
                                                            smart TV</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=1.1s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap5.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Apple iPhone Retina 6s
                                                            Plus 64GB</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=1.3s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap6.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Samsung Galaxy S21
                                                            Ultra Silicone Case with S-Pen Bundle</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=1.5s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap7.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Apple iPhone Retina 6s
                                                            Plus 64GB</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=1.7s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap8.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Office Chair Ergonomic
                                                            Cheap Desk Chair Mesh Computer</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=1.9s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap9.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Ray-Ban Women's
                                                            Rb3647n Double Bridge Round Sunglasses</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=2.1s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap10.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Suptek Aluminum Alloy
                                                            Cell Phone Desk Mount Stand</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=2.3s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap11.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">PopSockets PopWallet+:
                                                            Swappable and Repositionable</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=2.5s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap12.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Cooling Body Gel
                                                            Moisturizer with Soothing Aloe</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fade tab-pane" id=nav-hnaent aria-labelledby=nav-hnaent-tab role=tabpanel>
                                    <div class=row>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=0.3s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap1.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Sony DJ Headphones
                                                            4334205465, Black, Standard</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=0.5s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap2.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Sony E-Mount Full
                                                            Frame FE 24-70mm f/2.8 GM II G Master</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=0.7s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap3.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">TV 55" 4-Series 4K UHD
                                                            smart TV</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=0.9s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap4.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">TV 55" 4-Series 4K UHD
                                                            smart TV</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=1.1s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap5.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Apple iPhone Retina 6s
                                                            Plus 64GB</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=1.3s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap6.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Samsung Galaxy S21
                                                            Ultra Silicone Case with S-Pen Bundle</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=1.5s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap7.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Apple iPhone Retina 6s
                                                            Plus 64GB</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=1.7s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap8.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Office Chair Ergonomic
                                                            Cheap Desk Chair Mesh Computer</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=1.9s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap9.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Ray-Ban Women's
                                                            Rb3647n Double Bridge Round Sunglasses</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=2.1s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap10.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Suptek Aluminum Alloy
                                                            Cell Phone Desk Mount Stand</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=2.3s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap11.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">PopSockets PopWallet+:
                                                            Swappable and Repositionable</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=2.5s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap12.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Cooling Body Gel
                                                            Moisturizer with Soothing Aloe</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="fade tab-pane" id=nav-hnaall aria-labelledby=nav-hnaall-tab role=tabpanel>
                                    <div class=row>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=0.3s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap1.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Sony DJ Headphones
                                                            4334205465, Black, Standard</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=0.5s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap2.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Sony E-Mount Full
                                                            Frame FE 24-70mm f/2.8 GM II G Master</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=0.7s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap3.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">TV 55" 4-Series 4K UHD
                                                            smart TV</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=0.9s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap4.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">TV 55" 4-Series 4K UHD
                                                            smart TV</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=1.1s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap5.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Apple iPhone Retina 6s
                                                            Plus 64GB</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=1.3s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap6.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Samsung Galaxy S21
                                                            Ultra Silicone Case with S-Pen Bundle</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=1.5s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap7.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Apple iPhone Retina 6s
                                                            Plus 64GB</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=1.7s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap8.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Office Chair Ergonomic
                                                            Cheap Desk Chair Mesh Computer</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=1.9s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap9.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Ray-Ban Women's
                                                            Rb3647n Double Bridge Round Sunglasses</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=2.1s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap10.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Suptek Aluminum Alloy
                                                            Cell Phone Desk Mount Stand</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=2.3s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap11.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">PopSockets PopWallet+:
                                                            Swappable and Repositionable</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                             data-wow-duration=2.5s>
                                            <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                                <div class=flex-shrink-0><img alt="Hot New Arrival Product"
                                                                              src="{{asset('images/shop-items/hnap12.png')}}"></div>
                                                <div class="flex-grow-1 ms-3">
                                                    <div class="mb-2 title"><a href="index.html#">Cooling Body Gel
                                                            Moisturizer with Soothing Aloe</a></div>
                                                    <div class="para text-thm1">$32.50</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id=our-partners class="our-partners pt0 pb60">
            <div class=container>
                <div class=row>
                    <div class=col-lg-12>
                        <div class="text-center mb35">
                            <h5 class=fz16>Trusted by the world’s best</h5>
                        </div>
                    </div>
                    <div class=col-lg-12>
                        <div class="shop_item_6grid_slider slider_dib_sm dots_none nav_none owl-carousel owl-theme">
                            <div class=item>
                                <div class="partner_item wow fadeInUp" data-wow-duration=0.3s><img
                                        src="{{asset('images/partners/1.png')}}" alt=1.png></div>
                            </div>
                            <div class=item>
                                <div class="partner_item wow fadeInUp" data-wow-duration=0.5s><img
                                        src="{{asset('images/partners/2.png')}}" alt=2.png></div>
                            </div>
                            <div class=item>
                                <div class="partner_item wow fadeInUp" data-wow-duration=0.7s><img
                                        src="{{asset('images/partners/3.png')}}" alt=3.png></div>
                            </div>
                            <div class=item>
                                <div class="partner_item wow fadeInUp" data-wow-duration=0.9s><img
                                        src="{{asset('images/partners/4.png')}}" alt=4.png></div>
                            </div>
                            <div class=item>
                                <div class="partner_item wow fadeInUp" data-wow-duration=1.1s><img
                                        src="{{asset('images/partners/5.png')}}" alt=5.png></div>
                            </div>
                            <div class=item>
                                <div class="partner_item wow fadeInUp" data-wow-duration=1.3s><img
                                        src="{{asset('images/partners/6.png')}}" alt=6.png></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="footer_one home1 bdrt1">
            <div class="container pb60">
                <div class=row>
                    <div class="col-lg-6 offset-lg-3">
                        <div class="mailchimp_widget mb30-md text-center">
                            <div class="icon float-start"><span class=flaticon-email-1></span></div>
                            <div class=details>
                                <h3 class=title>Subscribe and get 20% discount.</h3>
                            </div>
                        </div>
                        <div class=footer_social_widget>
                            <form class=footer_mailchimp_form>
                                <div class="row align-items-center">
                                    <div class=col-auto>
                                        <input type=email class=form-control placeholder="Your email address">
                                        <button class="ms-sm-2 btn-thm" type=submit>Subscribe</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row mt60">
                    <div class="col-sm-6 col-md-5 col-lg-3 col-xl-3">
                        <div class=footer_contact_widget>
                            <h4>Contact Us</h4>
                            <div class="footer_contact_iconbox d-flex mb-4">
                                <div class=icon><span class=flaticon-phone-call></span></div>
                                <div class="details ms-4">
                                    <h5 class=title>Monday-Friday: 08am-9pm</h5>
                                    <a href="index.html#">+(1) 123 456 7890</a></div>
                            </div>
                            <div class="footer_contact_iconbox d-flex">
                                <div class=icon><span class=flaticon-email></span></div>
                                <div class="details ms-4">
                                    <h5 class=title>Need help with your order?</h5>
                                    <a href="index.html#">support@zeomart.com</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-2 col-xl-2">
                        <div class=footer_qlink_widget>
                            <h4>About Zenmart</h4>
                            <ul class=list-unstyled>
                                <li><a href="index.html#">Track Your Order</a></li>
                                <li><a href="index.html#">Product Guides</a></li>
                                <li><a href="index.html#">Wishlists</a></li>
                                <li><a href="index.html#">Privacy Policy</a></li>
                                <li><a href="index.html#">Store Locator</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-2 col-xl-2">
                        <div class=footer_qlink_widget>
                            <h4>Customer Support</h4>
                            <ul class=list-unstyled>
                                <li><a href="index.html#">Contact Us</a></li>
                                <li><a href="index.html#">Help Centre</a></li>
                                <li><a href="index.html#">Returns & Exchanges</a></li>
                                <li><a href="index.html#">Best Buy Financing</a></li>
                                <li><a href="index.html#">Best Buy Gift Card</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3 col-lg-2 col-xl-2">
                        <div class=footer_qlink_widget>
                            <h4>Services</h4>
                            <ul class=list-unstyled>
                                <li><a href="index.html#">Geek Squad</a></li>
                                <li><a href="index.html#">In-Home Advisor</a></li>
                                <li><a href="index.html#">Trade-In Program</a></li>
                                <li><a href="index.html#">Electronics Recycling</a></li>
                                <li><a href="index.html#">Best Buy Health</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-8 col-md-5 col-lg-3 col-xl-3">
                        <div class=footer_social_widget>
                            <h4 class=title>Follow us</h4>
                            <div class="social_icon_list mt30">
                                <ul class=mb20>
                                    <li class=list-inline-item><a href="index.html#"><i class="fab fa-facebook"></i></a>
                                    </li>
                                    <li class=list-inline-item><a href="index.html#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class=list-inline-item><a href="index.html#"><i
                                                class="fab fa-instagram"></i></a></li>
                                    <li class=list-inline-item><a href="index.html#"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="footer_mobile_app_widget mb25">
                            <h4 class="title mb10">Mobile Apps</h4>
                            <div class=mobile_app_list>
                                <ul class=mb0>
                                    <li><a href="index.html#"><span class=flaticon-apple></span>iOS App</a></li>
                                    <li><a href="index.html#"><span class=flaticon-android></span>Android App</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class=footer_acceped_card_widget>
                            <h4 class="title mb20">We accept</h4>
                            <div class=acceped_card_list>
                                <ul class="d-flex mb-0">
                                    <li class=me-2><a href="index.html#"><img src="{{asset('images/resource/visa-card.png')}}"
                                                                              alt=visa-card></a></li>
                                    <li class=me-2><a href="index.html#"><img src="{{asset('images/resource/master-card.png')}}"
                                                                              alt=master-card></a></li>
                                    <li class=me-2><a href="index.html#"><img src="{{asset('images/resource/apple-pay.png')}}"
                                                                              alt=apple-pay></a></li>
                                    <li class=me-2><a href="index.html#"><img src="{{asset('images/resource/discover-card.png')}}"
                                                                              alt=discover-card></a></li>
                                    <li class=me-2><a href="index.html#"><img src="{{asset('images/resource/paypal.png')}}"
                                                                              alt=paypal></a></li>
                                    <li><a href="index.html#"><img src="{{asset('images/resource/amex-card.png')}}"
                                                                   alt=amex-card></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container bdrt1 pt20 pb20">
                <div class=row>
                    <div class=col-lg-6>
                        <div class="copyright-widget text-center text-lg-start d-block d-lg-flex mb15-md">
                            <p class=me-4>© 2022 Zeomart. All Rights Reserved</p>
                            <p><a href="index.html#">Privacy</a>·<a href="index.html#">Terms</a>·<a href="index.html#">Sitemap</a>
                            </p>
                        </div>
                    </div>
                    <div class=col-lg-6>
                        <div class="footer_bottom_right_widgets text-center text-lg-end">
                            <ul class=mb0>
                                <li class="list-inline-item mb20-340">
                                    <select class="selectpicker show-tick">
                                        <option>Currency : USD</option>
                                        <option>Euro</option>
                                        <option>Pound</option>
                                    </select>
                                </li>
                                <li class=list-inline-item>
                                    <select class="selectpicker show-tick">
                                        <option>Language: English</option>
                                        <option>Frenc</option>
                                        <option>Italian</option>
                                        <option>Spanish</option>
                                        <option>Turkey</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <a class=scrollToHome href="index.html#"><i class="fas fa-angle-up"></i></a>
    </div>
</div>
<script src="{{asset('js/jquery-3.6.0.js')}}"></script>
<script src="{{asset('js/jquery-migrate-3.0.0.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('js/jquery.mmenu.all.js')}}"></script>
<script src="{{asset('js/ace-responsive-menu.js')}}"></script>
<script src="{{asset('js/jquery-scrolltofixed-min.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/slider.js')}}"></script>
<script src="{{asset('js/scrollbalance.js')}}"></script>
<script src="{{asset('js/script.js')}}"></script>
</body>
</html>
