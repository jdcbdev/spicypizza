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

        return view('landing-page')
            ->with('bestseller', $bestseller);

    }
}
