<form action="users" method="POST">
  {{csrf_field()}}
<pre>
FirstName   :<input type="text" name="names"/>
  <br>
password    :<input type="password" name="pass"/>
</pre>
  <input type="submit" name="usersubmit" value="Login"/>
</form>
