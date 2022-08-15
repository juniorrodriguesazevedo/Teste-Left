<?php

namespace App\Observers;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductObserver
{
    /**
     * Handle the Product "creating" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function creating(Product $product)
    {
        if ($product->image) {

            $extension = $product->image->getClientOriginalExtension();
            $nameImage =  now() . ".$extension";

            $product['image'] = Storage::putFileAs('products', $product->image, $nameImage);
        }
    }

    /**
     * Handle the Product "updating" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function updating(Product $product)
    {
        $productImageSent = Product::firstWhere('id', $product->id);

        if ($product->image) {
            if ($productImageSent->image && Storage::exists($productImageSent->image)) {
                Storage::delete($productImageSent->image);
            }

            $extension = $product->image->getClientOriginalExtension();
            $nameImage =  now() . ".$extension";

            $product['image'] = Storage::putFileAs('products', $product->image, $nameImage);
        }
    }

    /**
     * Handle the Product "deleting" event.
     *
     * @param  \App\Models\Product  $product
     * @return void
     */
    public function deleting(Product $product)
    {
        if ($product->image) {
            Storage::delete($product->image);
        }
    }
}
