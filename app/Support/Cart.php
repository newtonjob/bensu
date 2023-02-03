<?php

namespace App\Support;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Cache;

class Cart
{
    /**
     * All the products in the cart.
     *
     * @var Collection
     */
    public $products;

    public function __construct()
    {
        $this->products = Cache::get($this->key(), new Collection);
    }

    /**
     * Get the key for the cached cart.
     *
     * @return string
     */
    public function key()
    {
        return 'cart:' . user('id');
    }

    /**
     * Add the given product to the cart.
     *
     * @param  Product  $product
     * @param  int  $quantity
     * @return $this
     */
    public function add(Product $product, int $quantity = null)
    {
        $quantity ??= request('quantity', 1);

        $this->products->when(
            fn ($products) => $products->contains($product),

            function ($products) use ($product, $quantity) {
                $products->find($product)->quantity += $quantity;
            },

            function ($products) use ($product, $quantity) {
                $products->add($product->tap(
                    fn ($product) => $product->quantity = $quantity
                ));
            }
        );

        return $this;
    }

    /**
     * Remove the given product from the cart.
     *
     * @param  Product  $product
     * @return $this
     */
    public function remove(Product $product)
    {
        $this->products = $this->products->except($product->id);

        return $this;
    }

    /**
     * Sync the quantity in cart for the given product with the new given quantity.
     *
     * @param  Product  $product
     * @param  int|null  $quantity
     * @return void
     */
    public function sync(Product $product, int $quantity = null)
    {
        $quantity ??= request('quantity', 1);

        $this->products->find($product)->quantity = $quantity;
    }

    /**
     * Get the total amount of products in the cart.
     *
     * @return mixed
     */
    public function amount()
    {
        return $this->products->sum(
            fn ($product) => $product->price * $product->quantity
        );
    }

    /**
     * Empty the cart.
     *
     * @return $this
     */
    public function empty()
    {
        $this->products = Collection::empty();

        return $this;
    }

    /**
     * @param  string  $key
     * @return void
     */
    public function __get(string $key)
    {
        return $this->products->{$key};
    }

    /**
     * @param  string  $method
     * @param  array  $parameters
     * @return void
     */
    public function __call(string $method, array $parameters)
    {
        return $this->products->{$method}(...$parameters);
    }

    public function __destruct()
    {
        Cache::put($this->key(), $this->products);
    }
}
