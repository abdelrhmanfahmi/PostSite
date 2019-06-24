<form action="welcome" method="POST">
  {{csrf_field()}}
<pre>
  <input type="text" name="name"/>
  <br>
  <input type="password" name="pass"/>
</pre>
  <input type="submit" name="submit" value="Login"/>
</form>
