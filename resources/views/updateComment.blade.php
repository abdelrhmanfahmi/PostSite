<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>The Post Is : {{$data->post}}</h1>
<table border="1" align="center">
	<tr>
		<th>Comments</th>
		<th>Delete</th>
		<th>Edit</th>
	</tr>
	@foreach($data->comments as $key)
	<tr>
		<td>{{$key->comment}}</td>
		<td><a href="/deletecomment/{{$key->commentId}}" id="{{$key->commentId}}" class="clc">Delete</a></td>
 		<td><a href="/updatecomment/{{$key->commentId}}">Edit</a></td>
	</tr>
	@endforeach
</table>
</body>
</html>