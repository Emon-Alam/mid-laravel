<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
</head>
<body>

        <h1>welcome Moderator {{session('username')}}</h1>
		<a href="{{route('profile')}}"><h4>Profile</h4></a>
		<a href="{{route('clist')}}"><h4>Content</h4></a>
		<a href="{{route('ccreate')}}"><h4>Add Content</h4></a>
		<a href="{{route('logout')}}"><button >Logout</button></a>

</body>
</html>
