@props(['best_sellers', 'new_products'])
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
                        <button class="nav-link active" id=nav-home-tab data-bs-toggle=tab
                                data-bs-target=#nav-home role=tab aria-controls=nav-home aria-selected=true>
                            Top 5
                        </button>
                        <button class="nav-link me-0" id=nav-bread-tab data-bs-toggle=tab
                                data-bs-target=#nav-all role=tab aria-controls=nav-bread aria-selected=false>
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
                                <x-home.products :products="$best_sellers->take(5)" />
                            </div>
                        </div>
                        <div class="tab-pane fade" id=nav-all role=tabpanel aria-labelledby=nav-bread-tab>
                            <div class="best_item_slider_shop_lising_page shop_item_5grid_slider slider_dib_sm nav_none_400 dots_none owl-theme owl-carousel">
                                <x-home.products :products="$best_sellers->shuffle()" />
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
                    <h5 class=title>Free Delivery To Your Doorstep To Selected Locations in Lagos (Navy Town, Satellite Town, Featac, Apapa, Ikeja, VI, Lekki, Ikota, VGC, Ajah, and more). T&C Apply. </h5>
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
                        <button class="nav-link active" id=nav-narive-tab data-bs-toggle=tab
                                data-bs-target=#nav-narive role=tab aria-controls=nav-narive aria-selected=true>
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
                                <x-home.products :products="app('featured_products')" />
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
                        <button aria-controls=nav-hnat20 aria-selected=true class="nav-link active"
                                data-bs-target=#nav-hnat20 data-bs-toggle=tab id=nav-hnat20-tab role=tab>Top 12
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
                                @php
                                    $wow = 0.3;
                                @endphp
                                @foreach($new_products as $product)
                                    <div class="col-lg-3 col-lg-4 col-sm-6 px-1 px-sm-0 fadeInUp wow"
                                         data-wow-duration={{$wow.'s'}}>
                                        <div class="align-items-center bdr1 d-flex shop_item tiny_style">
                                            <div class=flex-shrink-0>
                                                <img alt="Hot New Arrival Product" src="{{ cloudinary_url(config('services.cloudinary.root_product'). $product->images[0]->src, 90, true) }}">
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
                                    @php
                                        $wow += 0.2;
                                    @endphp
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
