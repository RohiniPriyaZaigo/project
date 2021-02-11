<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
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
        <td>{{$user->productImage}}</td>
        <!-- <td><img src="{{asset('storage/images/'.$user->productImage)}}" width="100px;" height="100px;" alt="Image"></td> -->
        <td><a href="{{route('edit')}}"> <button type="submit" class="btn btn-primary">Edit</button></td>
    </tr>
@empty
    <p> no records</p>
@endforelse
</table>


