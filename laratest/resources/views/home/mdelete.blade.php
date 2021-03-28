<!DOCTYPE html>
<html>
<head>
	<title>contant delete</title>
</head>
<body>
<h1> Admin {{session('username')}}</h1>

	<a href="{{route('registration')}}"><h4>Add Moderator</h4></a>
	<a href="{{route('logout')}}"><button >Logout</button></a>
<table>
     <tr>
        
      
            <td>Movie name</td>
            <td>{{ $user['mname']}}</td>
     </tr>
     <tr>
             <td>Category</td>
            <td>{{ $user['cetagory']}}</td>
        </tr>
        
     <td>
       <h3>Are you sure?</h3>
         </td>
            <td></td>
         </tr>
     <tr>
         <td>
  <form method="post">
         @csrf
      <input type="submit" name="submit" value="Confirm">
        </form>
      </td>
      <td></td>
        </tr>
     <tr><td><br></td></tr>
 </table>
 </body>
</html>
