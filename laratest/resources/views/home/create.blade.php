<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1> {{session('type')}}-{{session('username')}}</h1>

    <a href="{{route('index')}}"><button >Back</button></a>
	<a href="{{route('logout')}}"><button >Logout</button></a>

    <h1>Adding New MOvie</h1>

<form action="" method="post">
@csrf 
    <table style="text-align:right;">
        
        <tr>
            <td>Category:</td>
            <td  align="left" >
                <select name="category" id="">
                    <option value="" selected>Select A Category</option>
                    <option value="Movies" @if (old('category')=='Movies') selected @endif>Movies</option>
                    <option value="Games" @if (old('category')=='Games') selected @endif>Games</option>
                    <option value="TV_series" @if (old('category')=='TV_series') selected @endif>TV series</option>
                    <option value="Software" @if (old('category')=='Software') selected @endif>Software</option>
                </select>
            </td>
        </tr>
        <tr>
            <td> Name:</td>
            <td ><input type="text" name="mname" value="{{old('mnaem')}}" id=""></td>
        </tr>
        <tr>
            <td>Subtitle:</td>
            <td ><input type="text" name="subtitle" value="{{old('subtitle')}}" id=""></td>
        </tr>
        


    </table>
    @foreach ($errors->all() as $err)
    <p >{{$err}}</p>
    @endforeach


    <br>
    <button type="submit">Add Content</button><br>
</form>

 </body>
</html>
