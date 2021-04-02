<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
</head>
<body>

        <h1>welcome Moderator {{session('username')}}</h1>
		<a href="{{route('profile')}}"><h4>Profile</h4></a>
		<a href="{{route('clist')}}"><h4>Content</h4></a>
		   
			  <tr>
            <td>Content Category:</td>
            <td  align="left" >
                <select onchange="la(this.value)" >
                    <option value="" selected>Select A Category</option>
                    <option value="{{route('movieliste')}}"><h4>Eng(sub) Movies List</h4></option>
                    <option value="{{route('movielisth')}}"><h4>Hinde(sub) Movies List</h4></option>
                    <option value="{{route('gamelist')}}"><h4>Games List</h4></option>
                    <option value="{{route('tvliste')}}"><h4>Eng(sub) Tv-Series List</h4></option>
                    <option value="{{route('tvlisth')}}"><h4>Hinde(sub) Tv-Series List</h4></option>
                    <option value="{{route('softlist')}}"><h4>Software List</h4></option>
                </select>
            </td>
        </tr>
	<script>
		function la(src)
		{
			window.location=src;
		}
	</script>
		
		
		<a href="{{route('ccreate')}}"><h4>Add Content</h4></a>
		<a href="{{route('logout')}}"><button >Logout</button></a>

</body>
</html>
