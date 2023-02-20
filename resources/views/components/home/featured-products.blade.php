@props(['bestSellers', 'newProducts', 'televisionSubCategory'])
<section class="featured-product pt0 pb90">
    <div class=container>
        <div class=row>
            <div class=col-lg-6>
                <div class="main-title mb0-sm">
                    <h2>Best sellers</h2>
                </div>
            </div>
            <div class=col-lg-6>
                <div class="popular_listing_sliders ui_kit_tab style2">
                    <div class="nav nav-tabs mb30 justify-content-start justify-content-lg-end" role=tablist>
                        <button class="nav-link active" id=nav-home-tab data-bs-toggle=tab data-bs-target=#nav-home role=tab aria-controls=nav-home aria-selected=true>
                            Top 5
                        </button>
                        <button class="nav-link me-0" id=nav-bread-tab data-bs-toggle=tab data-bs-target=#nav-all role=tab aria-controls=nav-bread aria-selected=false>
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
                                @foreach($bestSellers->take(5) as $product)
                                    <div class="item ovh">
                                        <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn" data-wow-duration=1.3s>
                                            <x-site.product :$product/>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id=nav-all role=tabpanel aria-labelledby=nav-bread-tab>
                            <div class="best_item_slider_shop_lising_page shop_item_5grid_slider slider_dib_sm nav_none_400 dots_none owl-theme owl-carousel">
                                @foreach($bestSellers->shuffle() as $product)
                                    <div class="item ovh">
                                        <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn" data-wow-duration=1.3s>
                                            <x-site.product :$product/>
                                        </div>
                                    </div>
                                @endforeach
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
                    <h5 class=title>
                        Free Delivery To Your Doorstep To Selected Locations in Lagos (Navy Town, Satellite Town, Featac, Apapa, Ikeja, VI, Lekki, Ikota, VGC, Ajah, and more). T&C Apply.
                    </h5>
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
                    <h2>Featured products</h2>
                </div>
            </div>
            <div class=col-md-7>
                <div class="popular_listing_sliders ui_kit_tab style2">
                    <div class="nav nav-tabs mb30 justify-content-start justify-content-md-end" role=tablist>
                        <button class="nav-link active" id=nav-narive-tab data-bs-toggle=tab data-bs-target=#nav-narive role=tab aria-controls=nav-narive aria-selected=true>
                            All
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
                                @foreach(app('featured_products') as $product)
                                    <div class="item ovh">
                                        <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn" data-wow-duration=1.3s>
                                            <x-site.product :$product/>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner_one_large bdrs6 mt100 px-4 px-md-0">
            <div class=row>
                <div class="col-lg-5 offset-lg-1 align-self-center">
                    <div class="apple_widget_home1 mb-4 mb-lg-0">
                        <h1 class=title>Television Series</h1>
                        <p class="para mt-3 mb-4">Discover our new items. Up to <span class=fw500>25% Off !</span></p>
                        <p></p>
                        <a href="{{ url("shop?sub-category={$televisionSubCategory->slug}") }}" class="btn btn-thm">Shop Now</a></div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="apple_widget_home1 animate_content text-center">
                        <div class="thumb animate_thumb">
                            <img style="height: 400px;" src="{{ asset('images/banner/tv2.png') }}" alt="Banner Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt100">
            <div class=col-lg-12>
                <div class="shop_item_7grid_slider slider_dib_400 dots_none nav_none shop_by_brand style2 owl-carousel owl-theme">
                    @foreach($televisionSubCategory->brands->unique() as $brand)
                        <div class=item>
                            <a class="mb-2 me-3 wow fadeInUp" data-wow-duration={{ 1 + (0.2 * $loop->iteration).'s' }} href="{{ url("shop?brand={$brand->slug}") }}">{{ $brand->name }}</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<section class="featured-product pt0 pb90">
    <div class=container>
        <div class=row>
            <div class=col-lg-12>
                <div class="popular_listing_sliders row ui_kit_tab style2">
                    <div class="tab-content col-lg-12" id=nav-tabContent>
                        <div class="tab-pane fade show active" id=tv-top role=tabpanel
                             aria-labelledby=nav-home-tab>
                            <div class="best_item_slider_shop_lising_page shop_item_5grid_slider slider_dib_sm nav_none_400 dots_none owl-theme owl-carousel">
                                @foreach($televisionSubCategory->products as $product)
                                    <div class="item ovh">
                                        <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn" data-wow-duration=1.3s>
                                            <x-site.product :$product/>
                                        </div>
                                    </div>
                                @endforeach
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
            <div class=col-md-6>
                <div class="main-title mb0-sm">
                    <h2>Hot New Arrivals</h2>
                </div>
            </div>
            <div class=col-md-6>
                <div class="popular_listing_sliders style2 ui_kit_tab">
                    <div class="justify-content-md-end justify-content-start mb30 nav nav-tabs" role=tablist>
                        <button aria-controls=nav-hnat20 aria-selected=true class="nav-link active" data-bs-target=#nav-hnat20 data-bs-toggle=tab id=nav-hnat20-tab role=tab>Top 12
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class=row>
            <div class=col-lg-12>
                <div class="row popular_listing_sliders style2 ui_kit_tab">
                    <div class="col-lg-12 tab-content" id=nav-tabContent4>
                        <div class="fade tab-pane active show" id=nav-hnat20 aria-labelledby=nav-hnat20-tab role=tabpanel>
                            <div class=row>
                                @foreach($newProducts as $product)
                                    <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow" data-wow-duration={{ (0.2 * $loop->iteration).'s' }}>
                                        <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                            <div class=flex-shrink-0>
                                                <img alt="Hot New Arrival Product" src="{{ $product->images->first()?->src }}">
                                            </div>
                                            <div class="flex-grow-1 ms-3">
                                                <div class="mb-2 title">
                                                    <a href="{{ url("shop/product/{$product->slug}")}}">{{ $product->name }}</a>
                                                </div>
                                                <div class=price>
                                                    ₦{{ number_format(discount($product->price, $product->discount)) }}
                                                    <small>
                                                        <del>{{ $product->discount ? "₦{$product->price}" : '' }}</del>
                                                        <span class="off_tag text-thm1 badge">
                                                            {{ $product->discount ? "-{$product->discount}%" : ''  }}
                                                        </span>
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
