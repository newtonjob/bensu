<x-site>
    <x-home.hero />
    <x-home.features />
    <x-home.deals :discountedProducts="$discountedProducts"/>
    <x-home.categories />
    <x-home.featured-products :bestSellers="$bestSellers" :newProducts="$newProducts"/>
    <x-home.partners />
</x-site>
