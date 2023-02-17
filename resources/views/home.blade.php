<x-site>
    <x-home.hero />
    <section class="features pt30 pb20">
        <div class="container bb1">
            <div class="row ovh">
                <x-home.feature title="Free Shipping" paragraph="Free delivery on special locations" icon="fast-delivery" transition="1.0s"/>
                <x-home.feature title="100% Money Guarantee" paragraph="You have 30 days to return" icon="shield" transition="1.2s" />
                <x-home.feature title="Online Support" paragraph="Contact Us 24 hours everyday" icon="headphones" transition="1.4s" />
                <x-home.feature title="Flexible & Secure Payment" paragraph="We ensure Secure payments with multiple credit cards" icon="credit-card" transition="1.6s" />
            </div>
        </div>
    </section>
    <x-home.deals :$discountedProducts/>
    <x-home.categories />
    <x-home.featured-products :$bestSellers :$newProducts :$televisionSubCategory/>
    <x-home.partners />
</x-site>
