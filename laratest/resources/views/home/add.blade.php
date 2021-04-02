<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Moderator Add</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
</head>
<body>
    <h1>Moderator Add</h1>

    <form method="POST" action='{{route("add")}}' >
    	@csrf
		<fieldset>
			<legend>Add</legend>
			<table > 
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="{{old('username')}}"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="{{old('password')}}"></td>
				</tr>
				<tr>
					<td>Full Name</td>
					<td><input type="text" name="name" value="{{old('name')}}"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="email" value="{{old('email')}}"></td>
				</tr>
				<tr>
					<td>Date of Birth</td>
					<td><input type="text" name="dob" value="{{old('dob')}}"></td>
				</tr>
                 <div >
                            <label class="label">User Type</label>
                            <div>
                                <select name="type">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <option value="Moderator">Moderator</option>
                                    
                                </select>
                                <div>
                            </div>
                        </div> 
                        <tr>
				
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Save"></td>
				</tr>
			</table>
		</fieldset>
	</form>

	@foreach($errors->all() as $err)
	<p style ="red"> {{$err}}</p> <br>
	@endforeach
</body>
</html>
