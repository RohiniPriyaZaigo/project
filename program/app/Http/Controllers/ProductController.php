<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Product;
use Carbon\Carbon;
use Auth;

class ProductController extends Controller
{   function add(){
    return view::make('frontend.productCreate');
}
    function index(Request $req){
    $req->validate([
        'productName' => 'required',
        'sku'=> 'required',
        'quantity'=> 'required',
        'productImage' => 'required|image|mimes:jpg,png,gif,svg,jpeg,csv|max:2048',
        
    ],[
        'productName.required' => 'Product Name is Required',
        'sku.required' => 'SKU is required',
        'quantity' => 'Quantity is required',
        'productImage' => 'Product Image is required',
        'productImage.image' => "Plz upload the image",
        'productImage.mimes'=> "File is not supported image",

    ]);

    $fileExtension =  $req->productImage->extension();
        $timeStamp = Carbon::now()->format('Y_m_d_H_i_s_u');
        $fileName = $timeStamp.'.'.$fileExtension;

    $req->productImage->storeAs('public/images', $fileName); 


    $product = new Product;
    $product->productName = $req->productName;
    $product->sku = $req->sku;
    $product->quantity = $req->quantity;
    $product->productImage = $fileName;
    //$product->user_id = Auth::user()->id;
    $product->save();
    return redirect()->route("list")->with("success",'file submitted');
}
function list(){
        $product = Product::all();
        return view::make('frontend.productList',['users'=>$product]);
    }
    function edit($id){
        $product = Product::find($id);
        return view::make('frontend.productEdit',['data'=> $product]);

    }
    function update(Request $req, $id){
        $req->validate([
            'productName' => 'required',
            'sku'=> 'required',
            'quantity'=> 'required',
            'productImage' => 'required',
            
        ],[
            'productName.required' => 'Product Name is Required',
            'sku.required' => 'SKU is required',
            'quantity' => 'Quantity is required',
            'productImage' => 'Product Image is required',
            'productImage.image' => "Plz upload the image",
    
        ]);
        $fileExtension =  $req->productImage->extension();
        $timeStamp = Carbon::now()->format('Y_m_d_H_i_s_u');
        $fileName = $timeStamp.'.'.$fileExtension;

        $req->productImage->storeAs('public/images', $fileName); 


        $product = Product::find($id);
        $product->productName = $req->productName;
        $product->sku = $req->sku;
        $product->quantity = $req->quantity;
        $product->productImage = $fileName ;
        $product->update();
        return redirect()->route('list')->with("success",'Updated Successfully');

    }
    function destroy($id){
        $product = Product::find($id);
        if(!empty($product)){
        $product->delete();
        }
        return redirect()->route('list')->with("success",'file is deleted');
     }
     
}
