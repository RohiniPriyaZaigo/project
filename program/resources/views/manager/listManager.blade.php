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
@forelse ($users as  $user)
    <tr>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->password}}</td>
        <td><a href="{{route('edit', $user->id)}}"> <button type="submit" class="btn btn-primary">Edit</button></td>

        <!-- <td>
        <form action = "{{route('delete',['id'=>$user->id])}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="delete">
        </td> 
        </form> -->
    </tr>
@empty
    <p> no records</p>
@endforelse
</table>