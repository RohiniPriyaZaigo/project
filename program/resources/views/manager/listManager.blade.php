@extends('backend.layouts.app')
@section('content')
<a class="" href="{{route('createManager')}}"><div style="margin-left: 900px";><button type="button" class="btn btn-success">Create Manager</button></div></a>
<a class="" href="{{route('add')}}"><div style="margin-left: 900px";><button type="button" class="btn btn-success">Create Product</button></div></a> 
<h1>Manager List</h1>
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
@forelse ($managers as  $manager)
    <tr>
        <td>{{$manager->name}}</td>
        <td>{{$manager->email}}</td>
        <td>{{$manager->password}}</td>
        <td><a href="{{route('editManager', $manager->id)}}"> Edit</a></td>
        <td>
        <form action = "{{route('destroyManager',['id'=>$manager->id])}}" method="post">
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