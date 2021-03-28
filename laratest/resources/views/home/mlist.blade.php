<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View User List</title>
</head>
<body>
    <h1>User list</h1>
    <a href="{{route('index')}}"><button >Back</button></a> |
    <a href="{{route('logout')}}"><button >Logout</button></a>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>Movie NAME</td>
            <td>Category</td>
            
        </tr>

        @for($i=0; $i < count($list); $i++)
        <tr>
            <td>{{ $list[$i]['id'] }}</td>
            <td>{{ $list[$i]['mname'] }}</td>
            <td>{{ $list[$i]['category'] }}</td>
            
            <td>
                
                
                
            </td>
        </tr>
        @endfor
    </table>
    </body>
</html>
</html> 