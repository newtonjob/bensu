@props(['discountedProducts'])
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
                    @foreach($discountedProducts as $product)
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
</section>
