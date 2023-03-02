<x-site>
    <x-site.breadcrumbs title="Stores"/>
    <!-- Our Contact -->
    <section class="our-contact pt0 pb0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="main-title">
                        <h2 class="mtitle">Our Locations</h2>
                        <p>We have {{ count(app('locations')) }} different location from where you can purchase any of our products from.</p>
                        <p>If you are choosing the pickup option for your order, you can pickup from any of our locations closest to you.</p>
                        <p>See below, a list of our store locations.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        @foreach(app('locations') as $location)
                            <div class="col-md-6">
                                <div class="location_lists">
                                    <div class="wrapper">
                                        <h4 class="title">{{ $location->name }}</h4>
                                        <ul>
                                            <li><a href="#">{{ $location->address }}</a></li>
                                        </ul>
                                        <a href="#" class="locate_map_btn">See Map</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row pt10 pb20 bdrt1">
                <div class="col-sm-6 col-xl-3">
                    <div class="icon_boxes">
                        <div class="icon">
                            <span class="flaticon-fast-delivery"></span>
                        </div>
                        <div class="details">
                            <h5 class="title">Free Shipping</h5>
                            <p class="para">Free Shipping for orders over $200</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="icon_boxes">
                        <div class="icon">
                            <span class="flaticon-shield"></span>
                        </div>
                        <div class="details">
                            <h5 class="title">Money Guarantee</h5>
                            <p class="para">Within 30 days for an exchange.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="icon_boxes">
                        <div class="icon">
                            <span class="flaticon-headphones"></span>
                        </div>
                        <div class="details">
                            <h5 class="title">Online Support</h5>
                            <p class="para">24 hours a day, 7 days a week</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3">
                    <div class="icon_boxes">
                        <div class="icon">
                            <span class="flaticon-credit-card"></span>
                        </div>
                        <div class="details">
                            <h5 class="title">Flexible Payment</h5>
                            <p class="para">Pay with Multiple Credit Cards</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-site>
