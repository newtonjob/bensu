@foreach($products as $product)
    <div class="item ovh">
        <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn" data-wow-duration=1.3s>
            <div class="thumb pb30"><img src="{{ cloudinary_url(config('services.cloudinary.root_product'). $product->images[0]->src, 230, true) }}" alt="Furniture Product">
                <div class=thumb_info>
                    <ul class=mb0>
                        <li>
                            <a href="{{ url("shop/wishlist-add/{$product->id}") }}" title="Add to Wishlist">
                                <span class=flaticon-heart></span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url("shop/quick-view/{$product->slug}") }}" title="quick view">
                                <span class=flaticon-show></span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <span class=flaticon-graph></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="shop_item_cart_btn d-grid">
                    <a href="{{ url("shop/cart-add/{$product->id}") }}" class="btn btn-thm">Add to Cart</a>
                </div>
            </div>
            <div class=details>
                <div class=sub_title>{{ $product->brand?->name }}</div>
                <div class="title title-56">
                    <a href="{{ url("shop/product/{$product->slug}")}}">{{ $product->name }}</a>
                </div>
                <div class=si_footer>
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
    </div>
@endforeach
