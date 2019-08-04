
<center><h1>Welcome {{auth()->guard('adminGuard')->user()->username}}</h1></center>

<h1 align="center">Posts Of {{$get->username}}</h1>

<a href="{{url('Admin/Logout')}}">Logout</a>

<table border="1" align="center">
	<tr>
		<th>Post</th>
		<th>Delete</th>
		<th>Edit</th>
		<th>Comments</th>
	</tr>
@foreach($get->hasposts as $key)
 	<tr>
 		<td>{{$key->post}}</td>
 		<td><a href="/deleteuser/{{$key->postId}}" id="{{$key->postId}}" class="clc">Delete</a></td>
 		<td><a href="/updateuser/{{$key->postId}}">Edit</a></td>
 		<td><a href="/Comments/{{$key->postId}}">Comment</a></td>
 	</tr>
 	@endforeach
</table>