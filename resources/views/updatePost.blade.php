<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="POST">

  {{csrf_field()}}

     <textarea name="NewPost" placeholder="Write Post" required rows="4" cols="30" class="fff"></textarea>

     <input type="hidden" name="postId" value="{{$getso->postId}}">

     <input type="submit" name="insert" value="Insert" id="gets">
</form>
</body>
</html>