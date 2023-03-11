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
                            You may also reach us via WhatsApp by clicking on the WhatsApp Icon at the bottom-left corner of this page.
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
            <div class="row ovh pt30 bdrt1">
                <x-home.feature title="Free Shipping" paragraph="Free delivery on special locations" icon="fast-delivery" transition="1.0s"/>
                <x-home.feature title="100% Money Guarantee" paragraph="You have 30 days to return" icon="shield" transition="1.2s" />
                <x-home.feature title="Online Support" paragraph="Contact Us 24 hours everyday" icon="headphones" transition="1.4s" />
                <x-home.feature title="Flexible & Secure Payment" paragraph="We ensure Secure payments with multiple credit cards" icon="credit-card" transition="1.6s" />
            </div>
        </div>
    </section>
</x-site>
