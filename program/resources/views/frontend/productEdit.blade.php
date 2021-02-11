@extends('backend.layouts.app')
@section('content')
<h1>EDIT FORM</h1>
<html>
<body>
<form action ="{{route('update',$data['id'])}}" method = "POST">
    @csrf 
    @method('put')
    <label>PRODUCT NAME</label>
    <input type = "text" value = "{{$data['productName']}}" name = "productName"/><br>
    <span style = "color:red">@error('productName'){{$message}}@enderror</span>
    <label>SKU</label>
    <input class = "" type = "text" value = "{{$data['sku']}}" name = "sku"><br>
    <span style = "color:red">@error('sku'){{$message}}@enderror</span>
    <label>QUANTITY</label>
    <input class = "" type = "text" value = "{{$data['quantity']}}" name = "quantity"><br>
    <span style = "color:red">@error('quantity'){{$message}}@enderror</span>
    <label>PRODUCT IMAGE</label>
    <input class = "" type = "file" value = "{{$data['productImage']}}" name = "productImage"><br>
    <span style = "color:red">@error('productImage'){{$message}}@enderror</span>
    <input type = "submit" value = "update" name = "submit"/>
</form>
</body>
</html>
@endsection