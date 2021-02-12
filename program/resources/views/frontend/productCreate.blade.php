@extends('backend.layouts.app')
@section('content')

        
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
        
@endsection