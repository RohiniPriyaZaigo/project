@extends('backend.layouts.app')
@section('content')
<h1>Customer List</h1>
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
@forelse ($customers as  $customer)
    <tr>
        <td>{{$customer->name}}</td>
        <td>{{$customer->email}}</td>
        <td>{{$customer->password}}</td>
        <td><a href="{{route('editCustomer', $customer->id)}}">Edit</td>
        <td>
        <form action = "{{route('destroyCustomer',['id'=>$customer->id])}}" method="post">
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
