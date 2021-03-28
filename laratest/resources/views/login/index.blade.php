<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
</head>
<body>
	<h1></h1>

	<form method="post">
         @csrf
       

		<fieldset>
			<legend>Login</legend>
			<table>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" value="Login"></td>
					<td></td>
				</tr>
				

			</table>
			
			<a href="{{route('registration')}}">create a account</a>
		</fieldset>
		@foreach ($errors->all() as $err)
    				<p style ="red"> {{$err}}</p>
    			@endforeach
    			{{session('errorMsg')}}
    			{{session('successMsg')}}
	</form>


    {{session('msg')}}

</body>
</html>
