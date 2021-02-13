@extends('backend.layouts.app')
@section('content')
<h1> Product List </h1>
<style>
  table, th, td {
    border: 1px solid black;
}
</style>
<table>
<tr>
    <th>productName</th>
    <th>sku</th>
    <th>quantity</th>
    <th>productImage</th>
</tr>
@forelse ($users as  $user)
    <tr>
        <td>{{$user->productName}}</td>
        <td>{{$user->sku}}</td>
        <td>{{$user->quantity}}</td>
        <td><img src="{{asset('storage/images/'.$user->productImage)}}" width="100px;" height="100px;" alt="Image"></td>
 <td><a href="{{route('edit', $user->id)}}">Edit</a></td>

        <td>
        <form action = "{{route('delete',['id'=>$user->id])}}" method="post">
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





