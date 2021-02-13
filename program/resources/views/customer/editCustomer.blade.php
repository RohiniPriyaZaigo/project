@extends('backend.layouts.app')
@section('content')
<h1>EDIT FORM</h1>

<form action ="{{route('updateCustomer',$customer['id'])}}" method = "POST">
    @csrf 
    @method('put')
    <label>NAME</label>
    <input type = "text" value = "{{$customer['name']}}" name = "name"/><br>
    <span style = "color:red">@error('name'){{$message}}@enderror</span>
    <label>EMAIL</label>
    <input class = "" type = "text" value = "{{$customer['email']}}" name = "email"><br>
    <span style = "color:red">@error('email'){{$message}}@enderror</span>
    <label>PASSWORD</label>
    <input class = "" type = "password" value = "" name = "password"><br>
    <span style = "color:red">@error('password'){{$message}}@enderror</span>
    <input type = "submit"  value = "update" name = "submit"/>
</form>

@endsection