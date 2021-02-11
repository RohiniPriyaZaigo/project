@extends('backend.layouts.app')
@section('content')
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        
        <form action="{{route('index')}}" method="POST" enctype="multipart/form-data" style="margin-top:50px">
          @csrf
          <div class="row col-6" style="margin-left:300px" ;>
            <div class="col-6">
              <label>PRODUCT NAME</label>
            </div>
            <div class="col-6">
              <input class="" type="text" value="{{old('productName')}}" name="productName"><br>
              <span style="color:red">@error('productName'){{$message}}@enderror</span>
            </div>
            <div class="col-6">
              <label>SKU</label>
            </div>
            <div class="col-6">
              <input class="" type="text" value="{{old('sku')}}" name="sku"><br>
              <span style="color:red">@error('sku'){{$message}}@enderror</span>
            </div>
            <div class="col-6">
              <label>QUANTITY</label>
            </div>
            <div class="col-6">
              <input class="" type="text" value="{{old('quantity')}}" name="quantity"><br>
              <span style="color:red">@error('quantity'){{$message}}@enderror</span>
            </div>
            <div class="col-6">
              <label>PRODUCT IMAGE</label>
            </div>
            <div class="col-6">
              <input class="" type="file" value="{{old('productImage')}}" name="productImage"><br>
              <span style="color:red">@error('productImage'){{$message}}@enderror</span>
            </div>
            <div class = "col-6">
            <input type="submit" value="submit"/>
            </div>
        </form>
        </body>
</html>
@endsection