<div>
    <div class="thumb pb30">
        @if($product->discount)
            <h3 class="badge" style="background-color: #f5c34b; color: black; padding: 10px; position: absolute; left: 20px;" >
                -{{ $product->discount }}%
            </h3>
        @endif
        <img src="{{ $product->images->first()->src }}" alt="{{ $product->name }} Product">
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
        <div class=sub_title>{{ $product->brand?->name }} &nbsp;</div>
        <div class="title title-56">
            <a href="{{ url("shop/product/{$product->slug}")}}">{{ $product->name }}</a>
        </div>
        <div class=si_footer>
            <div class=price>
                ₦{{ number_format($product->price) }}
                @if($product->discount)
                    <small>
                        <del>₦{{number_format($product->getRawOriginal('price'))}}</del>
                    </small>
                @endif
            </div>
        </div>
    </div>
</div>
