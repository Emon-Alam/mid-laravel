<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View User Profile</title>
</head>
<body>
    <h1>User {{session('username')}} Profile</h1>
    <a href="{{route('index')}}"><button >Back</button></a> |
    <a href="{{route('logout')}}"><button >Logout</button></a>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>USERNAME</td>
            <td>PASSWORD</td>
            <td>FULL NAME</td>
            <td>EMAIL</td>
            <td>DOB</td>
            <td>TYPE</td>
        </tr>

        @for($i=0; $i < count($list); $i++)
        <tr>
            <td>{{ $list[$i]['id'] }}</td>
            <td>{{ $list[$i]['username'] }}</td>
            <td>{{ $list[$i]['password'] }}</td>
            <td>{{ $list[$i]['name'] }}</td>
            <td>{{ $list[$i]['email'] }}</td>
            <td>{{ $list[$i]['dob'] }}</td>
            <td>{{ $list[$i]['type'] }}</td>
            <td>
                
                 
                
            
        </tr>
        @endfor
    </table>
    </body>
</html>
</html> 