<x-site>
    <x-site.breadcrumbs title="Contact-us"/>
    <!-- Our Contact -->
    <section class="our-contact pt0 pb0">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 m-auto pt0">
                    <div class="main-title">
                        <h2>Contact us</h2>
                        <p>
                            Do you want to make enquiries of any sort? Have complaints about your order or anything at all we could help you with?<br>There are several channels through which you can reach out us immediately.
                        </p>
                        <p>
                            You may simply initiate a live chat conversation with any of our available agents by clicking on the live chat icon at the bottom-right corner of this page,<br>or simple give us a call through any of our phone numbers as indicated at the bottom of this page.
                        </p>
                        <p>
                            You may also reach us via whatsApp by clicking on the whatsApp Icon at the bottom-left corner of this page.
                        </p>
                    </div>
                    <div class="main-title">
                        <h4>Our Address:</h4>
                        <p>{{ site('address') }}</p>
                    </div>
                    <div class="contact_icon_box mt30">
                        <div class="contact_iconbox d-flex mb30">
                            <div class="icon"><span class="flaticon-phone-call"></span></div>
                            <div class="details ms-4">
                                <h4 class="title">Monday - Saturday: 08am-06pm</h4>
                                <a href="#">{{ site('phone') }}</a>
                            </div>
                        </div>
                        <div class="contact_iconbox d-flex">
                            <div class="icon"><span class="flaticon-email"></span></div>
                            <div class="details ms-4">
                                <h4 class="title">Need help?</h4>
                                <a href="mailto:{{ site('email') }}">{{ site('email') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="footer_social_widget mt30 mb30-md">
                        <h4 class="title mb0">Follow us</h4>
                        <div class="social_icon_list mt10">
                            <ul class="mb20">
                                <li class="list-inline-item">
                                    <a href="{{ site('social_links')->facebook }}"><i class="fab fa-facebook"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ site('social_links')->twitter }}"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ site('social_links')->instagram }}"><i class="fab fa-instagram"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="{{ site('social_links')->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt60 pt55 bdrt1">
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
            <div class="row pt20 bdrt1">
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
