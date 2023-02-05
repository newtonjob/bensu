<x-site>
    <!--slider area start-->
    <section class="slider_section mb-70">
        <div class="slider_area owl-carousel">
            @foreach (json_decode(site('banners')) as $banner)
            <div class="single_slider d-flex align-items-center" data-bgimg="{{ cloudinary_url($banner->img, ['transformation' => ['width' => 1700]]) }}">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="slider_content">
                                <h1>{{ $banner->t1 }}</h1>
                                <h2>{{ $banner->t2 }}</h2>
                                <p>{{ $banner->t3 }}</p>
                                <a class="button" href="{{ url('shop') }}">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!--slider area end-->

    <!--shipping area start-->
    <section class="shipping_area mb-70">
        <div class="container">
            <div class=" row">
                <div class="col-lg-3 col-md-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <img src="{{ asset('img/about/shipping1.png') }}" alt="Free shipping">
                        </div>
                        <div class="shipping_content">
                            <h2>Free Shipping</h2>
                            <p>Free delivery on special locations</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <img src="{{ asset('img/about/shipping2.png') }}" alt="Support">
                        </div>
                        <div class="shipping_content">
                            <h2>Support 24/7</h2>
                            <p>Contact us 24 hours everyday</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <img src="{{ asset('img/about/shipping3.png') }}" alt="Money back">
                        </div>
                        <div class="shipping_content">
                            <h2>100% Money Back</h2>
                            <p>You have 30 days to Return</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_shipping">
                        <div class="shipping_icone">
                            <img src="{{ asset('img/about/shipping4.png') }}" alt="secure payment">
                        </div>
                        <div class="shipping_content">
                            <h2>Secure Payment</h2>
                            <p>We ensure secure payment</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--shipping area end-->

    <!--banner area start-->
    <div class="banner_area mb-40">
        <div class="container">
            <div class="row">
                @foreach (json_decode(site('meta'))->ad->line1 as $key => $value)
                    @continue(empty($value))
                    <div class="col-md-{{ $key == 1 ? '6' : '3' }}">
                        <div class="single_banner mb-30">
                            <div class="banner_thumb">
                                <a href="{{ url('shop') }}">
                                    <img src="{{ cloudinary_url($value) }}" alt="Banner image">
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--banner area end-->

    <!--product area start-->
    <section class="product_area mb-46">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Hot Deals</h2>
                    </div>
                </div>
            </div>
            <div class="product_carousel product_column5 owl-carousel">
                @foreach ($discount_products as $product)
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="{{ url("shop/product/{$product->slug}")}}">
                                    <img src="{{ cloudinary_url(config('services.cloudinary.root_product').$product->images[0]->src, 200, true) }}" alt="Item image">
                                </a>

                                @isset($product->images[1])
                                    <a class="secondary_img" href="{{ url("shop/product/{$product->slug}")}}">
                                        <img src="{{ cloudinary_url(config('services.cloudinary.root_product').$product->images[1]->src, ['width' => 400, 'height' => 300]) }}" alt="Item image">
                                    </a>
                                @endisset

                                <div class="label_product">
                                    <span class="label_sale">sale</span>
                                </div>
                                <div class="action_links">
                                    <ul>
                                        <li class="wishlist"><a href="{{ url("shop/wishlist-add/{$product}") }}" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                        <!--<li class="compare"><a href="#" title="compare"><span class="ion-levels"></span></a></li>-->
                                        <li class="quick_button"><a href="{{ url("shop/quick-look/{$product->slug}")}}" data-toggle="modal" data-target="#modal_box"  title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
                                    </ul>
                                </div>
                                <div class="add_to_cart">
                                    <a href="{{ url("shop/cart-add/{$product}") }}" title="add to cart"><span class="spinner-border spinner-border-sm text-white preloader" style="display: none"></span> Add to cart</a>
                                </div>
                                <div class="product_timing">
                                    <div data-countdown="2019/12/25"></div>
                                </div>
                            </div>
                            <figcaption class="product_content">
                                <div class="price_box">
                                    <span class="old_price">
                                        ₦{{ number_format($product->price) }}
                                    </span>
                                    <span class="current_price">
                                        ₦{{ number_format(discount($product->price, $product->discount)) }}
                                    </span>
                                </div>
                                <h3 class="product_name">
                                    <a href="{{ url("shop/product/{$product->slug}")}}">
                                        {{ $product->name }}
                                    </a>
                                </h3>
                            </figcaption>
                        </figure>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
    <!--product area end-->

    <!--banner area start-->
    <div class="banner_area mb-40">
        <div class="container">
            <div class="row">
                @foreach (json_decode(site('meta'))->ad->line2 as $key => $value)
                    @continue(empty($value))
                    <div class="col-md-6">
                        <div class="single_banner mb-30">
                            <div class="banner_thumb">
                                <a href="{{ url('shop') }}">
                                    <img src="{{ cloudinary_url($value) }}" alt="Banner image">
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!--banner area end-->

    <!-- top-category area start-->
    <section class="top_category_product mb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-3">
                    <div class="top_category_header">
                        <h3>Top Categories</h3>
                        <p>Our customers find more interest in these categories.</p>
                        <a href="{{ url('shop') }}">Show All Categories</a>
                    </div>
                </div>
                <div class="col-lg-10 col-md-9">
                    <div class="top_category_container category_column5 owl-carousel">
                        @foreach (app('categories') as $category)
                            @continue(! $category->isFeatured())
                            <div class="col-lg-2">
                                <article class="single_category">
                                    <figure>
                                        <div class="category_thumb">
                                            <a href="{{ url("shop?category={$category->slug}") }}">
                                                <img src="{{ cloudinary_url($category->image, 200) }}" alt="{{ $category->name }} Image">
                                            </a>
                                        </div>
                                        <figcaption class="category_name">
                                            <h3><a href="{{ url("shop?category={$category->slug}") }}">{{ $category->name }}</a></h3>
                                        </figcaption>
                                    </figure>
                                </article>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- top-category area end-->

    <!--featured product area start-->
    <section class="featured_product_area mb-70">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section_title">
                        <h2>Featured Products</h2>
                    </div>
                </div>
            </div>
            <div class="row featured_container featured_column3">
                @foreach ($featured_products as $product)
                <div class="col-lg-4">
                    <article class="single_product">
                        <figure>
                            <div class="product_thumb">
                                <a class="primary_img" href="{{ url("shop/product/{$product->slug}")}}">
                                    <img src="{{ cloudinary_url(config('services.cloudinary.root_product').$product->images[0]->src, 115) }}" alt="Item image">
                                </a>

                                @isset($product->image[1])
                                    <a class="secondary_img" href="{{ url("shop/product/{$product->slug}")}}">
                                        <img src="{{ cloudinary_url(config('services.cloudinary.root_product').$product->images[1]->src, 115) }}" alt="Item image">
                                    </a>
                                @endisset

                                <div class="label_product">
                                    <span class="label_sale">sale</span>
                                </div>
                            </div>
                            <figcaption class="product_content">
                                <div class="price_box">
                                    <span class="old_price">
                                        {{ $product->discount ? number_format($product->price) : '' }}
                                    </span>
                                    <span class="current_price">
                                        ₦{{ number_format(discount($product->price, $product->discount)) }}
                                    </span>
                                </div>
                                <h3 class="product_name">
                                    <a href="{{ url("shop/product/{$product->slug}")}}">{{ $product->name }}</a>
                                </h3>
                                <div class="add_to_cart">
                                    <a href="{{ url("shop/cart-add/{$product}") }}" title="add to cart"><span class="spinner-border spinner-border-sm text-white preloader" style="display: none"></span> Add to cart</a>
                                </div>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--featured product area end-->
</x-site>
{{--    <!--product area start-->--}}
{{--    <section class="product_area mb-46">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="section_title">--}}
{{--                        <h2>Best Sellers</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="product_carousel product_column5 owl-carousel">--}}
{{--                @foreach ($rand_items as $product)--}}
{{--                    <article class="single_product">--}}
{{--                        <figure>--}}
{{--                            <div class="product_thumb">--}}
{{--                                <a class="primary_img" href="{{ url('shop/product/'.$i['slug'])}}">--}}
{{--                                    <img src="{{ $i['item_img'][0] }}" alt="Item image">--}}
{{--                                </a>--}}

{{--                                @isset($i['item_img'][1]))--}}
{{--                                    <a class="secondary_img" href="{{ url('shop/product/'.$i['slug'])}}">--}}
{{--                                        <img src="{{ $i['item_img'][1] }}" alt="Item image">--}}
{{--                                    </a>--}}
{{--                                @endisset--}}

{{--                                <div class="label_product">--}}
{{--                                    <span class="label_sale">sale</span>--}}
{{--                                </div>--}}
{{--                                <div class="action_links">--}}
{{--                                    <ul>--}}
{{--                                        <li class="wishlist"><a href="{{ url('shop/wishlist-add/'.$i['item_id']) }}" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>--}}
{{--                                        <!--<li class="compare"><a href="#" title="compare"><span class="ion-levels"></span></a></li>-->--}}
{{--                                        <li class="quick_button"><a href="{{ url('shop/quick-look/'.$i['slug'])}}" data-toggle="modal" data-target="#modal_box" title="quick view"> <span class="ion-ios-search-strong"></span></a></li>--}}
{{--                                    </ul>--}}
{{--                                </div>--}}
{{--                                <div class="add_to_cart">--}}
{{--                                    <a href="{{ url('shop/cart-add/'.$i['item_id']) }}" title="add to cart"><span class="spinner-border spinner-border-sm text-white preloader" style="display: none"></span> Add to cart</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <figcaption class="product_content">--}}
{{--                                <div class="price_box">--}}
{{--                                    <span class="old_price">--}}
{{--                                        {{ $i['discount'] ? '₦'.number_format($i['price_exchanged'], 2) : '' }}--}}
{{--                                    </span>--}}
{{--                                    <span class="current_price">--}}
{{--                                        ₦{{ number_format($i['price_discounted'], 2) }}--}}
{{--                                    </span>--}}
{{--                                </div>--}}
{{--                                <h3 class="product_name"><a href="{{ url('shop/product/'.$i['slug'])}}">{{ $i['item_name'] }}</a></h3>--}}
{{--                            </figcaption>--}}
{{--                        </figure>--}}
{{--                    </article>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!--product area end-->--}}

{{--    <!--banner area start-->--}}
{{--    <div class="banner_area mb-40">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                @foreach ($site_data['meta']->ad->line3 as $key => $value)--}}
{{--                    @continue(empty($value))--}}

{{--                    <div class="col-md-{{ $key == 0 ? '9' : '3' }}">--}}
{{--                        <div class="single_banner mb-30">--}}
{{--                            <div class="banner_thumb">--}}
{{--                                <a href="{{ url('shop') }}">--}}
{{--                                    <img src="{{ cloudinary_url($value) }}" alt="Banner image">--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!--banner area end-->--}}

{{--    <!--product area start-->--}}
{{--    <section class="product_area mb-46">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-9 col-md-12">--}}
{{--                    <div class="product_left_area">--}}
{{--                        <div class="section_title">--}}
{{--                            <h2>Television Series</h2>--}}
{{--                        </div>--}}
{{--                        <div class="product_carousel product_column4 owl-carousel">--}}
{{--                            @foreach ($television_series as $i)--}}
{{--                                <article class="single_product">--}}
{{--                                    <figure>--}}
{{--                                        <div class="product_thumb">--}}
{{--                                            <a class="primary_img" href="{{ url('shop/product/' . $i['slug']) }}">--}}
{{--                                                <img src="{{ $i['item_img'][0] }}" alt="Item image">--}}
{{--                                            </a>--}}

{{--                                            @isset($i['item_img'][1])--}}
{{--                                                <a class="secondary_img"--}}
{{--                                                   href="{{ url('shop/product/' . $i['slug']) }}">--}}
{{--                                                    <img src="{{ $i['item_img'][1] }}" alt="Item image">--}}
{{--                                                </a>--}}
{{--                                            @endisset--}}

{{--                                            <div class="label_product">--}}
{{--                                                <span class="label_sale">sale</span>--}}
{{--                                            </div>--}}
{{--                                            <div class="action_links">--}}
{{--                                                <ul>--}}
{{--                                                    <li class="wishlist"><a href="{{ url('shop/wishlist-add/'.$i['item_id']) }}" title="Add to Wishlist"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>--}}
{{--                                                    <!--<li class="compare"><a href="#" title="compare"><span class="ion-levels"></span></a></li>-->--}}
{{--                                                    <li class="quick_button"><a href="{{ url('shop/quick-look/'.$i['slug'])}}" data-toggle="modal" data-target="#modal_box" title="quick view">--}}
{{--                                                            <span class="ion-ios-search-strong"></span></a>--}}
{{--                                                    </li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                            <div class="add_to_cart">--}}
{{--                                                <a href="{{ url('shop/cart-add/'.$i['item_id']) }}" title="add to cart"><span class="spinner-border spinner-border-sm text-white preloader" style="display: none"></span> Add to cart</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <figcaption class="product_content">--}}
{{--                                            <div class="price_box">--}}
{{--                                                <span class="old_price">--}}
{{--                                                    {{ $i['discount'] ? '₦' . number_format($i['price_exchanged'], 2) : '' }}--}}
{{--                                                </span>--}}
{{--                                                <span class="current_price">--}}
{{--                                                    ₦{{ number_format($i['price_discounted'], 2) }}--}}
{{--                                                </span>--}}
{{--                                            </div>--}}
{{--                                            <h3 class="product_name">--}}
{{--                                                <a href="{{ url('shop/product/' . $i['slug']) }}">{{ $i['item_name'] }}</a>--}}
{{--                                            </h3>--}}
{{--                                        </figcaption>--}}
{{--                                    </figure>--}}
{{--                                </article>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-lg-3 col-md-12">--}}
{{--                    <!--testimonials section start-->--}}
{{--                    <div class="testimonial_are">--}}
{{--                        <div class="section_title">--}}
{{--                            <h2>Testimonials</h2>--}}
{{--                        </div>--}}
{{--                        <div class="testimonial_active owl-carousel">--}}
{{--                            <article class="single_testimonial">--}}
{{--                                <figure>--}}
{{--                                    <div class="testimonial_thumb">--}}
{{--                                        <a href="#"><img src="{{ asset('img/about/testimonial1.jpg') }}" alt="Client image"></a>--}}
{{--                                    </div>--}}
{{--                                    <figcaption class="testimonial_content">--}}
{{--                                        <p>Support and response has been amazing, helping me with several issues I came across and got them solved almost the same day. A pleasure to work with them!</p>--}}
{{--                                        <h3><a href="#">Kathy Young</a><span> - CEO of SunPark</span></h3>--}}
{{--                                    </figcaption>--}}
{{--                                </figure>--}}
{{--                            </article>--}}
{{--                            <article class="single_testimonial">--}}
{{--                                <figure>--}}
{{--                                    <div class="testimonial_thumb">--}}
{{--                                        <a href="#"><img src="{{ asset('img/about/testimonial2.jpg') }}" alt="Client image"></a>--}}
{{--                                    </div>--}}
{{--                                    <figcaption class="testimonial_content">--}}
{{--                                        <p>Perfect Themes and the best of all that you have many options to choose! Best Support team ever! Thank you very much!</p>--}}
{{--                                        <h3><a href="#">John Sullivan</a><span> - Customer</span></h3>--}}
{{--                                    </figcaption>--}}
{{--                                </figure>--}}
{{--                            </article>--}}
{{--                            <article class="single_testimonial">--}}
{{--                                <figure>--}}
{{--                                    <div class="testimonial_thumb">--}}
{{--                                        <a href="#"><img src="{{ asset('img/about/testimonial3.jpg') }}" alt="Client image"></a>--}}
{{--                                    </div>--}}
{{--                                    <figcaption class="testimonial_content">--}}
{{--                                        <p>Code, template and others are very good. The support has served me immediately and solved my problems when I need help. Are to be congratulated.</p>--}}
{{--                                        <h3><a href="#">Jenifer Brown</a><span> - Manager of AZ</span></h3>--}}
{{--                                    </figcaption>--}}
{{--                                </figure>--}}
{{--                            </article>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <!--testimonials section end-->--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <!--product area end-->--}}

{{--    <!--brand area start-->--}}
{{--    <div class="brand_area mb-70">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12">--}}
{{--                    <div class="brand_container owl-carousel">--}}
{{--                        <div class="brand_items">--}}
{{--                            @foreach ($brand_list as $k => $b)--}}
{{--                                @continue(empty($b['brand_img']))--}}

{{--                                <div class="single_brand">--}}
{{--                                    <a href="#"><img src="{{ $b['brand_img'] }}" alt="{{ $b['brand_name'] }}"></a>--}}
{{--                                </div>--}}

{{--                                @if($loop->even)--}}
{{--                                    </div><div class="brand_items">--}}
{{--                                @endif--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-site>--}}

