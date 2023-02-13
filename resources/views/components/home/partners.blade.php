<section id=our-partners class="our-partners pt0 pb60">
    <div class=container>
        <div class=row>
            <div class=col-lg-12>
                <div class="shop_item_6grid_slider slider_dib_sm dots_none nav_none owl-carousel owl-theme">
                    @foreach(app('brands')->take(6) as $brand)
                        <div class=item>
                            <div class="partner_item wow fadeInUp" data-wow-duration="{{ 0.3 * $loop->iteration }}">
                                <img src="{{ cloudinary_url($brand->image, 100) }}" alt="{{$brand->name}} Image">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
