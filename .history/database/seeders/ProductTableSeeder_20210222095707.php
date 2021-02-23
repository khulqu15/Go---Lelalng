<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=5; $i++) {
            $product = new Product();
            $product->name = 'Product '.$i;
            $product->category_id = $i;
            $product->price = $i."000";
            $product->close = '20/03/2002';
            $product->picture = $i.'.png';
            $product->description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur sed posuere urna, eu luctus neque. Aenean sodales faucibus pellentesque. Donec facilisis, eros vitae fringilla pellentesque, nisi nisi varius lectus, ac ornare tortor tortor a felis. Suspendisse condimentum urna vitae eros mollis, at placerat metus congue.';
            $product->save();
        }
    }
}
