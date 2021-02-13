@extends('backend.layouts.app')
@section('content')
<a class="" href="{{route('createAdmin')}}"><div style="margin-left: 900px";><button type="button" class="btn btn-success">Create Admin</button></div></a>
<a class="" href="{{route('add')}}"><div style="margin-left: 900px";><button type="button" class="btn btn-success">Create Product</button></div></a> 
     
<h1>Admin List</h1>
<style>
  table, th, td {
    border: 1px solid black;
}
</style>
<table>
<tr>
    <th>Name</th>
    <th>Email</th>
    <th>Password</th>
</tr>
@forelse ($admins as  $admin)
    <tr>
        <td>{{$admin->name}}</td>
        <td>{{$admin->email}}</td>
        <td>{{$admin->password}}</td>
        <td><a href="{{route('editAdmin', $admin->id)}}"> Edit</a></td>
        <td>
        <form action = "{{route('destroyAdmin',['id'=>$admin->id])}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
        </td> 
        </form>
       
    </tr>
@empty
    <p> no records</p>
@endforelse
</table>
@endsection
