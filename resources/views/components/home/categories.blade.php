<section class="top-category pb30 pt20">
    <div class=container>
        <div class=row>
            <div class=col-lg-12>
                <div class="d-flex justify-content-between">
                    <div class=main-title>
                        <h2>Top Categores</h2>
                    </div>
                    <div class="main-title mb-5"><a class="title_more_btn mt10" href="{{ url('shop') }}">View
                            All Categories</a></div>
                </div>
            </div>
        </div>
        <div class="row ovh">
            @php($categories = app('categories')->take(8))
            @foreach ($categories as $category)
                <div class="col-6 col-md-3 col-xl wow fadeInUp" data-wow-duration=.7s><a
                        href="{{ url("shop?category={$category->slug}") }}">
                        <div class=iconbox>
                            <div class=icon><img src="{{ cloudinary_url($category->image, ['width' => 100]) }}" alt="{{ $category->name }} Image"></div>
                            <div class=details>
                                <h5 class=title>{{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="row ovh mt70">
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-duration=.7s>
                <div class="banner_one home1_style color1 mb30">
                    <div class="thumb style1">
                        <img class=float-end src="{{asset('images/banner/smartwatch.png')}}" alt=smartwatch>
                    </div>
                    <div class=details>
                        <h3 class=title>Smart Wrist Watch</h3>
                        <a href="{{ url('shop') }}" class=shop_btn>Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-duration=.9s>
                <div class="banner_one home1_style color2 mb30">
                    <div class="thumb style1"><img class=float-end src="{{asset('images/banner/earphone.png')}}"
                                                   alt=EarPhone></div>
                    <div class=details>
                        <h3 class=title>Electronic Hearing aid</h3>
                        <a href="{{ url('shop') }}" class=shop_btn>Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-duration=1.1s>
                <div class="banner_one home1_style color3 mb30">
                    <div class=thumb><img class=float-end src="{{asset('images/banner/smartdevice.png')}}"
                                          alt=smartdevice.png>
                    </div>
                    <div class=details>
                        <h3 class=title>Blood Pressure Meter</h3>
                        <a href="{{ url('shop') }}" class=shop_btn>Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
