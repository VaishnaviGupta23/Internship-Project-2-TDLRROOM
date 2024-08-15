<?php  
 require_once('dbcon.php');  
 if(isset($_POST["query"]))  
 { 
     $x=$_POST["query"];
      $output = '';  
      $query = "SELECT * FROM biodata WHERE crew_id='$x'";  
      $result = mysqli_query($conn,$query);  
      $output = '<ul class="list-unstyled">';  
      if(mysqli_num_rows($result)>0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<li>'.$row["crew_id"].'</li>';  
           }  
      }  
      else  
      {  
           $output .= '<li>LP ID Not Found</li>';  
      }  
      $output .= '</ul>';  
      echo $output;  
 }  
 ?>  