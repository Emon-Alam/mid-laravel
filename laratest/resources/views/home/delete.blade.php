<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
</head>
<body>
<h1> Admin {{session('username')}}</h1>

	<a href="{{route('registration')}}"><h4>Add Moderator</h4></a>
	<a href="{{route('logout')}}"><button >Logout</button></a>
<table>
     <tr>
        
      <tr>
         <td>Name</td>
         <td>{{$user['name']}}</td>
      </tr>
      <tr>
            <td>Username</td>
            <td>{{ $user['username']}}</td>
     </tr>
     <tr>
             <td>Password</td>
            <td>{{ $user['password']}}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{ $user['email'] }}</td>
        </tr>
        <tr>
            <td>Full Name</td>
            <td>{{ $user['name'] }}</td>
        </tr>
        <tr>
            <td>Date of Birth</td>
            <td>{{ $user['dob'] }}</td>
    </tr>
             
      <tr>
            <td>User Type</td>
              <td>{{ $user['type'] }}</td>
          </tr>
         <tr>
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