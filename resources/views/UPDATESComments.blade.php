<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="POST">
		{{csrf_field()}}
		Comment : <textarea placeholder="Write Comment" required rows="4" cols="30" name="commentss" class="lll"></textarea>
	    <input type="hidden" name="commentId" value="{{$update->commentId}}">
		<input type="submit" name="commen" value="Add Comment" />
	</form>
</body>
</html>