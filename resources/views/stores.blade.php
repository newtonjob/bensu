<x-site>
    <x-site.breadcrumbs title="Stores"/>
    <!-- Our Contact -->
    <section class="our-contact pt0 pb0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="main-title">
                        <h2 class="mtitle">Our Locations</h2>
                        <p>We have {{ count(app('locations')) }} different locations where you can purchase any of our products from.</p>
                        <p>If you are choosing the pickup option for your order, you can pickup from any of our locations closest to you.</p>
                        <p>Here's a list of our store locations.</p>
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
        </div>
    </section>
</x-site>
