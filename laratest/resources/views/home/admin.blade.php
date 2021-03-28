<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
</head>
<body>
    <h1>Welcome Admin {{session('username')}}</h1>

	<a href="{{route('registration')}}"><h4>Add Moderator</h4></a>
	<a href="{{route('logout')}}"><button >Logout</button></a>
</body>
</html>
