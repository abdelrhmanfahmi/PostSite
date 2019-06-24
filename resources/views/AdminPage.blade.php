
<center><h1>Welcome {{auth()->guard('adminGuard')->user()->username}}</h1></center>



<a href="{{url('Admin/Logout')}}">Logout</a>
