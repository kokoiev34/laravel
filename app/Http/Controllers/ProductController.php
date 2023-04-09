<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use http\Env\Request;

class ProductController
{
    public function product(Product $product)
    {
        return view('product', [
            'product' => $product
        ]);
    }

    public function products(){

        $products = Product::where("is_active", 1)->get();
        $categories = Category::all();

        return view("products", [
            "products" => $products,
            "categories"=> $categories
        ]);
    }
}
