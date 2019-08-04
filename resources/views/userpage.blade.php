<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>

<center><h1>welcome {{auth()->guard('studentGuard')->user()->username}}</h1></center>

<form action="" method="post" onsubmit="Post(this);return false;">

  {{csrf_field()}}

     <textarea name="POSTS" placeholder="Write Post" required rows="4" cols="30" class="fff"></textarea>

     <input type="hidden" name="postid" value="{{$ins->id}}">

     <input type="submit" name="insert" value="Insert" id="gets">
</form>

POST :
<br>	
<div id="test">
<div >
@foreach($ins->hasposts as $key)
<a href="{{'/comm/' . $key->postId}}">{{$key->post}}</a><br>
@endforeach
</div>
</div>
<a href="{{url('User/Logout')}}">Logout</a>


<script src="{{url('/mins.js')}}"></script>

</body>
</html>
