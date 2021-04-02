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
    <a href="{{route('index')}}"><button >Back</button></a>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>Movie NAME</td>
            <td>Subtitle</td>
            <td>Category</td>
            
        </tr>

        @foreach ($list as $i)
            <tr>
                <td>{{$i['id']}}</td>
                <td>{{$i['mname']}}</td>
                <td>{{$i['subtitle']}}</td>
                <td>{{$i['category']}}</td>
           
                </td>
            </tr>
            @endforeach     
        
    </table>
    </body>
</html>
</html> 