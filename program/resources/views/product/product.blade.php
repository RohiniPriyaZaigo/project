@extends('backend.layouts.app')
@section('content')
<h1>PURSHASE OUR PRODUCTS </h1>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
    @foreach($products as $product)
        <div class="col-md-4">
              <div class="thumbnail">
                <img src="{{asset('storage/images/'.$product->productImage)}}" alt="" class="img-responsive">
                <div class="caption">
                  <h4>{{$product->productName}}</h4>
                  <h4>{{$product->sku}}</h4>
                  <h4>{{$product->qunatity}}</h4>
                  <h4>{{$product->productImage}}</h4>
                  <p class="btn-holder"><a href="{{route('home')}}" class="btn btn-warning btn-block text-center" role="button">Add to cart</a> </p>
                </div>
                </div>
                 </div>
                 @endforeach
              </div>
            </div>
            @endsection

            