<html>
<head>
  <style>
      body{
          background-color:azure;
  }
      th{
          font-size: 27Px;
          color:crimson;
      } 
      td{
          font-size: 24Px;
          color: blueviolet;
      }
      table{
          border-collapse: collapse;
      }
      h2{
          text-align: center;
      }
    
    
    </style>  
    
    </head>
    <body>
   <div class="col-sm-10">
       <h2>Report of Crew Taken Card But Not Allotted Room In Running Room</h2>
      <?php
    echo "<table border='1' align='center'>";
   
    echo"<th>Crew ID</th>";
    echo"<th>Crew Name</th>";
    echo"<th>Crew Designation</th>";
    echo"<th>Crew HQ</th>";
    echo"<th>Train No</th>";
    echo"<th>Card No</th>";
    echo"<th>Date of Issue</th>";
    echo"<th>Time of Issue</th>";
   
    
   
    
    $cmd="select * from lobby_data where status='1' order by dated,time";
    require_once('dbcon.php');
    $res=mysqli_query($conn,$cmd);
   while($rec=mysqli_fetch_assoc($res)){
       $lp_id=$rec['lp_id'];
       $lp_name=$rec['lp_name'];
       $card_no=$rec['lobby_card_no'];
       $train=$rec['train'];
       $lp_hq=$rec['lp_hq'];
       $lp_des=$rec['lp_des'];
       $dated=$rec['dated'];
       $time=$rec['time'];
      
       
       
       echo "<tr>";
       echo "<td>$lp_id</td>";
       echo "<td>$lp_name</td>";
       echo "<td>$lp_des</td>";
       echo "<td>$lp_hq</td>";
       echo "<td>$train</td>";
       echo "<td>$card_no</td>";
       echo "<td>$dated</td>";
       echo "<td>$time</td>";
       
     
      
      echo "</tr>"; 
   }
 echo "</table>";

    ?>     
           
           
           
           </div>  
    
    
    </body>


</html>