<section class="deliver-divider pt30 pb70">
    <div class=container>
        <div class=row>
            <div class=col-lg-12>
                <div class="d-flex db-500 justify-content-between">
                    <div class="main-title mb0-500 d-block d-lg-flex">
                        <h2>Hot Deals</h2>
                    </div>
                    <div class="main-title mb-5">
                        <a class="title_more_btn mt10" href="{{ url('shop') }}">View All</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=row>
            <div class=col-lg-12>
                <div class="navi_pagi_bottom_center shop_item_5grid_slider dod_slider owl-carousel owl-theme">
                    @foreach (app('discount_products') as $product)
                        <div class="item">
                            <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn" data-wow-duration=1.0s>
                                <div class="thumb pb30">
                                    <img src="{{ cloudinary_url(config('services.cloudinary.root_product'). $product->images[0]->src, ) }}" alt="Deal Day1">
                                    <div class=thumb_info>
                                        <ul class=mb0>
                                            <li>
                                                <a href="{{ url("shop/wishlist-add/{$product}") }}" title="Add to wishlist"><span class=flaticon-heart></span></a>
                                            </li>
                                            <li>
                                                <a href="{{ url("shop/quick-look/{$product->slug}") }}"><span class=flaticon-show></span></a>
                                            </li>
                                            <li><a href=""><span class=flaticon-graph></span></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="shop_item_cart_btn d-grid"><a href="{{ url("shop/cart-add/{$product}") }}"
                                                                              class="btn btn-thm">Add to Cart</a>
                                    </div>
                                </div>
                                <div class=details>
                                    <div class=sub_title>{{ $product->brand }}</div>
                                    <div class=title><a href="{{ url("shop/product/{$product->slug}") }}">{{ $product->name }}</a></div>
                                    <div class="review d-flex db-500">
                                        <ul class="mb0 me-2">
                                            <li class=list-inline-item><a href="#"><i
                                                        class="fas fa-star"></i></a></li>
                                            <li class=list-inline-item><a href="#"><i
                                                        class="fas fa-star"></i></a></li>
                                            <li class=list-inline-item><a href="#"><i
                                                        class="fas fa-star"></i></a></li>
                                            <li class=list-inline-item><a href="#"><i
                                                        class="fas fa-star"></i></a></li>
                                            <li class=list-inline-item><a href="#"><i
                                                        class="fas fa-star"></i></a></li>
                                        </ul>
                                        <div class=review_count><a href="#">{{ 5 }} reviews</a></div>
                                    </div>
                                    <div class=si_footer>
                                        <div class=price>
                                            ₦{{ number_format(discount($product->price, $product->discount)) }}
                                            <small>
                                                <del>₦{{ $product->discount ? $product->price : '' }}</del>
                                                <span class="off_tag text-thm1 badge">
                                                    {{ $product->discount ? '-'.$product->discount. '%' : ''  }}
                                                </span>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
