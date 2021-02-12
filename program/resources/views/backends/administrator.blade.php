

@extends('backend.layouts.app')
@section('content')
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Admin
    </button>
<div class="dropdown-menu">
      <a class="dropdown-item" href="{{route('listAdmin')}}">List</a>
      <a class="dropdown-item" href="{{route('createAdmin')}}">Create</a>
      <a class="dropdown-item" href="{{route('add')}}">Product</a>
    </div>
  





@endsection