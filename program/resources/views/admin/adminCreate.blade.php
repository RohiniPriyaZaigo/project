@extends('backend.layouts.app')
@section('content')
<h1>Create Admin</h1>
<form action="{{route('storeAdmin')}}" method="POST" enctype="multipart/form-data" style="margin-top:50px">
          @csrf
          <div class="row col-6" style="margin-left:300px" ;>
            <div class="col-6">
              <label>NAME</label>
            </div>
            <div class="col-6">
              <input class="" type="text" value="{{old('name')}}" name="name"><br>
              <span style="color:red">@error('name'){{$message}}@enderror</span>
            </div>
            <div class="col-6">
              <label>EMAIL</label>
            </div>
            <div class="col-6">
              <input class="" type="email" value="{{old('email')}}" name="email"><br>
              <span style="color:red">@error('email'){{$message}}@enderror</span>
            </div>
            <div class="col-6">
              <label>PASSWORD</label>
            </div>
            <div class="col-6">
              <input class="" type="password" value="{{old('password')}}" name="password"><br>
              <span style="color:red">@error('password'){{$message}}@enderror</span>
            </div>
            <input type="submit" value="submit"/>
            </div>
        </form>
@endsection