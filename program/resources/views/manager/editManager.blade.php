@extends('backend.layouts.app')
@section('content')
<h1>EDIT FORM</h1>

<form action ="{{route('update',$data['id'])}}" method = "POST">
    @csrf 
    @method('put')
    <label>NAME</label>
    <input type = "text" value = "{{$data['name']}}" name = "name"/><br>
    <span style = "color:red">@error('name'){{$message}}@enderror</span>
    <label>EMAIL</label>
    <input class = "" type = "text" value = "{{$data['email']}}" name = "email"><br>
    <span style = "color:red">@error('email'){{$message}}@enderror</span>
    <label>PASSWORD</label>
    <input class = "" type = "text" value = "" name = "password"><br>
    <span style = "color:red">@error('password'){{$message}}@enderror</span>
    <input type = "submit"  value = "update" name = "submit"/>
</form>

@endsection