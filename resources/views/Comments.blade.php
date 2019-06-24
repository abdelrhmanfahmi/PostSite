<html>
<head>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>	
</head>
<body>
	<div id="msg"></div>
	<form action="" method="POST"  onsubmit="Comments(this);return false;">
		{{csrf_field()}}
		Comment : <textarea placeholder="Write Comment" required rows="4" cols="30" name="comm" class="lll"></textarea>


					<input type="hidden" name="postId" value="{{$add->postId}}">
		<input type="submit" name="commen" value="Add Comment" />
	</form>

	Post: {{ $add->post }}

	<br>
<div id="sayed">
	<table>
		<tr>
			<td>Comments</td>
		</tr>
		@foreach($add->comments as $key)
			<tr>
					
				<td>Comment:{{$key->comment}}</td>
				<td>
				<form action="" method="POST" onsubmit="Update(this);return false;">
					{{csrf_field()}}
					<input type="text" name="fahmy" placeholder="write Updated Comment" required class="mm" />
					<input type="hidden" class="commentid" value="{{$key->commentId}}">

					<input type="submit" name="update" value="Update"/>
				</form>
				 </td>
			</tr>
		@endforeach	
	</table>
	</div>
<script src="{{url('/mins.js')}}"></script>
</body>
</html>
