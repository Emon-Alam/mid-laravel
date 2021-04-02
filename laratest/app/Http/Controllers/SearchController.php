<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
    return view('login.index');
    }

    public function search(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      
      if($query != '')
      {
         
       $data = DB::table('media')
       
       ->where('id', 'like', '%'.$query.'%')
         ->orWhere('mname', 'like', '%'.$query.'%')
         ->orWhere('category', 'like', '%'.$query.'%')
         ->orderBy('id', 'desc')
         ->get();

        

     if($data->count() > 0){

           $total_row = $data->count();
       if($total_row > 0)
       {
         $output .= '

         <div align="left">
         <h5 align="left">Content Details</h5><br />

         <tr>
            <th>ID</th>
            <th>Movie NAME</th>
            <th>Subtitle</th>
            <th>Category</th>
         </tr>
         </div>
        ';
        foreach($data as $row)
        {
           
         $output .= '
         <tr>
          <td>'.$row->id.'</td>
          <td>'.$row->mname.'</td>
          <td>'.$row->subtitle.'</td>
          <td>'.$row->category.'</td>
          
         
         </tr>
         
         ';
        }
       }
       else
       {
 
        $output = '
        <tr>
         <td align="center" colspan="5">No Data Found</td>
        </tr>
        ';
 
       }
       $data = array(
        'table_data'  => $output,
        'total_data'  => $total_row
       );

       
 
       echo json_encode($data);
         }

     
         else{
           $output = '
            <tr>
             <td align="center" colspan="5">No Data Found</td>
            </tr>
            ';
            
         }

      }
     
     }

    }
}
