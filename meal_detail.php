<html>
    <head>
         <?php require_once("head.php")?>
         <?php require_once("dbcon.php")?>
        <style>
            th{
                font-size: 20Px;
            }
            table{
               
               
              
            }
            #A{
                text-align: center;
                
                
            }
           th,td{
                text-align: center;
                font-size: 20Px;
            }
            #C{
                margin-left: 30Px;;
            }
            #E{
                margin-left: 30Px;
            }
            #F{
                margin-left: 30Px;
            }
            table{
                
            }
         </style>
        
    </head>
    <body>
 <div class="container bg-light col-sm-6">
     <h4 id="A">Details of Meals at  TUNDLA Running Room</h4>
<table border="1" align="center">
   
    <th>LP Name</th>
    <th>LP ID</th>
    <th>Date</th>
    <th>Time</th>
    <th>Type of Meal</th>
<?php
   
if(isset($_POST['period']))
{
	$D1 = trim($_POST['Dep_Date']);
	echo ($D1);
   
     echo "<tr>";
    
      $cmd="select * from history_card where (purpose='Lunch-' or purpose='Dinner-' or purpose='Break-Fast-') and dated='$D1'";  
  $res=mysqli_query($conn,$cmd);
    while ($rec=mysqli_fetch_assoc($res)){
      $date=$rec['dated'];  
        
      echo "<tr>"; 
       echo "<td>$sub</td>";   
        
         echo "</tr>";   
        
    }
   
     
    $cmd1="select * from history_card where purpose='Ration with Packed Meal' and dated='$D1'";  
  $res1=mysqli_query($conn,$cmd1);
    $rec1=mysqli_fetch_assoc($res1);
    $ration=$rec1['ration'];
          echo "<td>$ration</td>"; 
    
  
 
    
    
}
    ?>
    
    
    
    
    
     </table>
        </div>
    </body>
</html>