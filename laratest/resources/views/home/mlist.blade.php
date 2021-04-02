<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Content List</title>
</head>
<body>
    <h1>Content List</h1>
    <a href="{{route('index')}}"><button >Back</button></a> |
    <a href="{{route('logout')}}"><button >Logout</button></a>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>Movie NAME</td>
            <td>Subtitle</td>
            <td>Category</td>
            
        </tr>

        @for($i=0; $i < count($list); $i++)
        <tr>
            <td>{{ $list[$i]['id'] }}</td>
            <td>{{ $list[$i]['mname'] }}</td>
            <td>{{ $list[$i]['subtitle'] }}</td>
            <td>{{ $list[$i]['category'] }}</td>
            
            <td>
            <a href="/home/delete/category/{{ $list[$i]['id'] }}">Delete</a>
                
                
            </td>
        </tr>
        @endfor
    </table>
    </body>
</html>
</html> 