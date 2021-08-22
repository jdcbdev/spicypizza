<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\DB;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bestseller = Product::where('featured', true)
            ->take(8)->inRandomOrder()->get();

        $products = Product::where('featured', true)
            ->join('category_product', 'products.id', '=', 'category_product.product_id')
            ->join('category', 'category_product.category_id', '=', 'category.id')
            ->take(8)->inRandomOrder()->get();

        $solo = Product::where('category.id', 9)
            ->join('category_product', 'products.id', '=', 'category_product.product_id')
            ->join('category', 'category_product.category_id', '=', 'category.id')
            ->take(8)->inRandomOrder()->get();
        
        $refreshment = Product::where('category.id', 7)
            ->join('category_product', 'products.id', '=', 'category_product.product_id')
            ->join('category', 'category_product.category_id', '=', 'category.id')
            ->take(8)->inRandomOrder()->get();

        return view('landing-page')->with(compact('products','solo','refreshment'));
    }
}
