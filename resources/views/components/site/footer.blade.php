<section class="footer_one home1 bdrt1">
    <div class="container pb60">
        <div class=row>
            <div class="col-lg-6 offset-lg-3">
                <div class="mailchimp_widget mb30-md text-center">
                    <div class="icon float-start"><span class=flaticon-email-1></span></div>
                    <div class=details>
                        <h3 class=title>Join Our Newsletter Now</h3>
                    </div>
                </div>
                <div class=footer_social_widget>
                    <form class=footer_mailchimp_form>
                        <div class="row align-items-center">
                            <div class=col-auto>
                                <input type=email class=form-control placeholder="Your email address">
                                <button class="ms-sm-2 btn-thm" type=submit>Subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row mt60">
            <div class="col-sm-6 col-md-5 col-lg-3 col-xl-3">
                <div class=footer_contact_widget>
                    <a href="#"><img class="mb-4" style="height: 34px; width: 162px" src="{{ asset('img/logo/logo.png') }}" alt="logo"></a>
                    <h4>Address: <span class="h6">{{ site('address') }}</span></h4>
                    <div class="footer_contact_iconbox d-flex mb-4">
                        <div class=icon><span class=flaticon-phone-call></span></div>
                        <div class="details ms-4">
                            <h5 class=title>Mobile</h5>
                            <a href="#">{{ substr(site('phone'), 0, 31) }}</a>
                            <p><a href="#">{{ substr(site('phone'), -14) }}</a></p>
                        </div>
                    </div>
                    <div class="footer_contact_iconbox d-flex">
                        <div class=icon><span class=flaticon-email></span></div>
                        <div class="details ms-4">
                            <h5 class=title>Support</h5>
                            <a target="_blank" href="mailto:{{ site('email') }}">{{ site('email') }}</a></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-2 col-xl-2">
                <div class=footer_qlink_widget>
                    <h4>Top Categories</h4>
                        <ul class=list-unstyled>
                            @foreach (app('categories')->take(5) as $category)
                                <li class="">
                                    <a href="{{ route('shop'). "?category={$category->slug}" }}">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-2 col-xl-2">
                <div class=footer_qlink_widget>
                    <h4>Information</h4>
                    <ul class=list-unstyled>
                        <li><a href="{{ url('home/account') }}">My Account</a></li>
                        <li><a href="{{ url('account#wishlist') }}">My Items</a></li>
                        <li><a class="cart-filter-btn" href="#">My Cart</a></li>
                        <li><a href="{{ route('shop') }}">Shop</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-2 col-xl-2">
                <div class=footer_qlink_widget>
                    <h4>Our Services</h4>
                    <ul class=list-unstyled>
                        <li><a href="{{ url('home/about-us') }}">About us</a></li>
                        <li><a href="{{ url('home/contact-us') }}">Contact Us</a></li>
                        <li><a href="#">Refund</a></li>
                        <li><a href="{{ url('home/privacy-policy') }}">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-8 col-md-5 col-lg-3 col-xl-3">
                <div class=footer_social_widget>
                    <h4 class=title>Follow us</h4>
                    <div class="social_icon_list mt30">
                        <ul class=mb20>
                            <li class=list-inline-item>
                                <a href="{{ site('social_links')->facebook }}"><i class="fab fa-facebook"></i></a>
                            </li>
                            <li class=list-inline-item>
                                <a href="{{ site('social_links')->twitter }}"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li class=list-inline-item>
                                <a href="{{ site('social_links')->instagram }}"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class=list-inline-item>
                                <a href="{{ site('social_links')->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=footer_acceped_card_widget>
                    <h4 class="title mb20">We accept</h4>
                    <div class=acceped_card_list>
                        <ul class="d-flex mb-0">
                            <li class=me-2>
                                <a href="#"><img src="{{asset('images/resource/visa-card.png')}}" alt=visa-card></a>
                            </li>
                            <li class=me-2>
                                <a href="#"><img src="{{asset('images/resource/master-card.png')}}" alt=master-card></a>
                            </li>
                            <li class=me-2>
                                <a href="#"><img src="{{asset('images/resource/apple-pay.png')}}" alt=apple-pay></a>
                            </li>
                            <li class=me-2>
                                <a href="#"><img src="{{asset('images/resource/discover-card.png')}}" alt=discover-card></a>
                            </li>
                            <li class=me-2>
                                <a href="#"><img src="{{asset('images/resource/paypal.png')}}" alt=paypal></a>
                            </li>
                            <li>
                                <a href="#"><img src="{{asset('images/resource/amex-card.png')}}" alt=amex-card></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container bdrt1 pt20 pb20">
        <div class=row>
            <div class=col-lg-6>
                <div class="copyright-widget text-center text-lg-start d-block d-lg-flex mb15-md">
                    <p class=me-4>©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        <a href="{{ route('home') }}">{{ site('title') }}</a>. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
</section>
