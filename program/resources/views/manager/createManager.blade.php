@extends('backend.layouts.app')
@section('content')
<h1>Create Manager</h1>
<form action="{{route('storeManager')}}" method="POST" enctype="multipart/form-data" style="margin-top:50px">
          @csrf
          <div class="row col-6" style="margin-left:300px" ;>
            <div class="col-6">
              <label>Name</label>
            </div>
            <div class="col-6">
              <input class="" type="text" value="{{old('name')}}" name="name"><br>
              <span style="color:red">@error('name'){{$message}}@enderror</span>
            </div>
            <div class="col-6">
              <label>Email</label>
            </div>
            <div class="col-6">
              <input class="" type="email" value="{{old('email')}}" name="email"><br>
              <span style="color:red">@error('email'){{$message}}@enderror</span>
            </div>
            <div class="col-6">
              <label>Password</label>
            </div>
            <div class="col-6">
              <input class="" type="password" value="{{old('password')}}" name="password"><br>
              <span style="color:red">@error('password'){{$message}}@enderror</span>
            </div>
            <div class = "col-6">
            <input type="submit" value="submit"/>
            </div>
        </form>
@endsection