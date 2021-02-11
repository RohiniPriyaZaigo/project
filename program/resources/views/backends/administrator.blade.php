

@extends('backend.layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <h2>Admin</h2>

  <div class="container">
<a href=""><button type="submit" class="btn btn-primary">List</button></a> 
<a href=""><button type="submit" class="btn btn-primary">Create</button></a>
<a href=""><button type="button" class="btn btn-primary">Edit</button></a>
  <button type="button" class="btn btn-primary">Delete</button>
</div>
  
<h2>Manager</h2>
<div class="container">
<a href=""><button type="submit" class="btn btn-primary">List</button></a>
<a href=""><button type="submit" class="btn btn-primary">Create</button></a>
<a href=""><button type="button" class="btn btn-primary">Edit</button></a>
  <button type="button" class="btn btn-primary">Delete</button>
</div>
<h2> Product</h2>
 <div class="container">
<a href="{{route('list')}}"><button type="submit" class="btn btn-primary">List</button></a> 
<a href="{{route('add')}}"><button type="submit" class="btn btn-primary">Create</button></a>
<a href="{{route('edit')}}"><button type="button" class="btn btn-primary">Edit</button></a>
  <button type="button" class="btn btn-primary">Delete</button>
</div>

</body>
</html>

@endsection