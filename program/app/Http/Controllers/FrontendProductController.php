<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Product;

class FrontendProductController extends Controller
{
    function index(){
        $product = Product::orderBy('id', 'asc')->paginate(config('role.pagination'));
        return view::make('product.product',['products'=>$product]);
    }
    function productAdd(){
        return view::make('product.productAdd');

     }
}
