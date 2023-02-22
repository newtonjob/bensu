<x-site>
    <x-site.breadcrumbs />
    <!-- About Us & Team -->
    <section class="our-team pt0 pb40">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="aboutus_thumb">
                        <img class="img-fluid w100" src="{{ asset('images/about/1.jpg') }}" alt="About1 Image">
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="aboutus_thumb">
                        <img class="img-fluid w100" src="{{ asset('images/about/2.jpg') }}" alt="About2 Image">
                    </div>
                    <div class="aboutus_thumb">
                        <img class="img-fluid w100" src="{{ asset('images/about/3.jpg') }}" alt="About3 Image">
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="aboutus_thumb">
                        <img class="img-fluid w100" src="{{ asset('images/about/4.jpg') }}" alt="About4 Image">
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="aboutus_thumb">
                        <img class="img-fluid w100" src="{{ asset('images/about/5.jpg') }}" alt="About5 Image">
                    </div>
                    <div class="aboutus_thumb">
                        <img class="img-fluid w100" src="{{ asset('images/about/6.jpg') }}" alt="About6 Image">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-10 m-auto pt30">
                    <div class="main-title">
                        <h2>{{ json_decode(site('about'))->title }}</h2>
                    </div>
                    <div class="about_us_content mb30 mt15">
                        <h4 class="title">{{ json_decode(site('about'))->text1 }}</h4>
                    </div>
                    <div class="row mb45">
                        @foreach(json_decode(site('about'))->body as $body)
                            <div class="col-lg-6">
                                <div class="aboutus_mission_vision">
                                    <h4 class="title">{{ $body->title }}</h4>
                                    <p>{{ $body->body }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-xl-10 m-auto pt60 bdrt1">
                    <div class="main-title">
                        <h2>We Reached So Far</h2>
                    </div>
                    <div class="row mb30">
                        <div class="col-sm-6 col-lg-3 text-center">
                            <div class="funfact_one">
                                <div class="details">
                                    <ul>
                                        <li class="list-inline-item"><div class="timer">120</div></li>
                                        <li class="list-inline-item"><span>+</span></li>
                                    </ul>
                                    <h5>Stores around the world</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 text-center">
                            <div class="funfact_one">
                                <div class="details">
                                    <ul>
                                        <li class="list-inline-item"><div class="timer">15</div></li>
                                        <li class="list-inline-item"><span>M</span></li>
                                    </ul>
                                    <h5>Products sold till date</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 text-center">
                            <div class="funfact_one">
                                <div class="details">
                                    <ul>
                                        <li class="list-inline-item"><div class="timer">200</div></li>
                                        <li class="list-inline-item"><span>K</span></li>
                                    </ul>
                                    <h5>Registered users</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 text-center">
                            <div class="funfact_one">
                                <div class="details">
                                    <ul>
                                        <li class="list-inline-item"><div class="timer">300</div></li>
                                        <li class="list-inline-item"><span>+</span></li>
                                    </ul>
                                    <h5>Brands available in store</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt30">
                <div class="col-xl-10 m-auto pt60 bdrt1">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="main-title">
                                <h2 class="mtitle">{{ site('footer_quote') }}</h2>
                            </div>
                            <a class="about_page_shop_btn btn btn-white" href="{{ route('shop') }}">Shop Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt60">
                <div class="col-xl-10 m-auto pt60 bdrt1">
                    <div class="main-title">
                        <h2>Why Should You Choose Us</h2>
                    </div>
                </div>
                <div class="col-xl-10 m-auto">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="icon_boxes about_style text-center">
                                <div class="icon">
                                    <span class="flaticon-shield"></span>
                                </div>
                                <div class="details">
                                    <h4 class="title">Money Guarantee</h4>
                                    <p class="para">Within 30 days for an exchange.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="icon_boxes about_style text-center">
                                <div class="icon">
                                    <span class="flaticon-headphones"></span>
                                </div>
                                <div class="details">
                                    <h4 class="title">Online Support</h4>
                                    <p class="para">24 hours a day, 7 days a week</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="icon_boxes about_style text-center">
                                <div class="icon">
                                    <span class="flaticon-credit-card"></span>
                                </div>
                                <div class="details">
                                    <h4 class="title">Flexible Payment</h4>
                                    <p class="para">Pay with Multiple Credit Cards</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <x-home.partners />
</x-site>
