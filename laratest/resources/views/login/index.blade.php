<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
</head>
<body align="center">
	<h1>Welcome to FTP server</h1>
  <link rel="stylesheet" type="text/css" href="{{asset('css/login.css')}}">
  
  
	<form method="post">
         @csrf
       

    <div>
			<legend>Login</legend>
			
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
				
        </div>

        
			
			<a href="{{route('registration')}}">create a account</a>

      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

		@foreach ($errors->all() as $err)
    				<p style ="red"> {{$err}}</p>
    			@endforeach
    			{{session('errorMsg')}}
    			{{session('successMsg')}}
           
          <tr>
	<td><h1>Content Category:</h1></td>
            <td  >
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
     <div></div><br>
	<script>
		function la(src)
		{
			window.location=src;
		}
	</script>

</form>
	
  {{session('msg')}}


  <div><tr>
    <td><input type="text" class="searchInput" name="search" id="search" placeholder="Content Search.."></td></tr></div> 
    
    
  <div id='submitsearch' style=""></div>
  <table> 
  <tr><td></td></tr>
        </table>
  
        <script >
        $(document).ready(function(){
        fetch_all_data();
        function fetch_all_data(query = '')
        {
          $.ajax({
          url:"{{ route('csearch') }}",
          method:'GET',
          data:{query:query},
          dataType:'json',
          success:function(data)
          {
            $('tbody').html(data.table_data);
            $('#total_records').text(data.total_data);
          }
          })
        }
        $(document).on('keyup', '#search', function(){
          var query = $(this).val();
          fetch_all_data(query);
        });
        });
        </script>
        
	
</body>
</html>
