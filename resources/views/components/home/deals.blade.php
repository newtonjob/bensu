<section class="deliver-divider pt30 pb70">
    <div class=container>
        <div class=row>
            <div class=col-lg-12>
                <div class="d-flex db-500 justify-content-between">
                    <div class="main-title mb0-500 d-block d-lg-flex">
                        <h2>Hot Deals</h2>
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
                    <div class="main-title mb-5">
                        <a class="title_more_btn mt10" href="{{ url('shop') }}">View All</a>
                    </div>
                </div>
            </div>
        </div>
        <div class=row>
            <div class=col-lg-12>
                <div class="navi_pagi_bottom_center shop_item_5grid_slider dod_slider owl-carousel owl-theme">
                    <x-home.products :products="app('discount_products')" />
                    <x-home.products :products="app('discount_products')" />
                    <x-home.products :products="app('discount_products')" />
                </div>
            </div>
        </div>
    </div>
</section>
