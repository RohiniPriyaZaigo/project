@extends('backend.layouts.app')
@section('content')
<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Manager
    </button>
<div class="dropdown-menu">
      <a class="dropdown-item" href="{{route('listManager')}}">List</a>
      <a class="dropdown-item" href="{{route('createManager')}}">Create</a>
      <a class="dropdown-item" href="{{route('add')}}">Product</a>
    </div>
  





@endsection