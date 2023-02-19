@props(['products', 'id', 'style' => ''])
<div class="col-auto p0 pre_line">
    <div class="top-search text-start">
        <form id="{{ $id }}" action="{{ url('shop') }}" class=form-search accept-charset=utf-8>
            <div class="box-search">
                <input class="form_control" name=q placeholder="Search products…" aria-label="search"
                    value="{{ request('q') }}" minlength="2" style="{{ $style }}"
                >
                <div class=search-suggestions>
                    <div class=box-suggestions>
                        <ul>
                            @foreach($products as $product)
                                <a href="{{ url("shop/product/{$product->slug}") }}">
                                    <li>
                                        <div class=thumb>
                                            <img src="{{ $product->images->first()->src }}" alt="{{ $product->name }}">
                                        </div>
                                        <div class=info-product>
                                            <div class=item_title>{{ $product->name }}</div>
                                            <div class=price>
                                                <span class=sale>
                                                    ₦{{ number_format(discount($product->price, $product->discount)) }}
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                </a>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="col-auto p0">
    <div class=advscrh_frm_btn>
        <button type=submit class="btn search-btn" form="{{ $id }}">
            <span class=flaticon-search></span>
        </button>
    </div>
</div>