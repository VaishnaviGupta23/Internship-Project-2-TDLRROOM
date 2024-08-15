<?php 
 
    session_start();
    if(isset($_SESSION['isLoggedIn']))
    {
    ?>
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
     <h4 id="A">Summary of Meals at  TUNDLA Running Room</h4>
<table border="1" align="center">
    <th>Date</th>
    <th>Subsidised Meal</th>
    <th>Ration Meal</th>
<?php
   /* var_dump($_POST);*/
if(isset($_POST['period']))
{
	$D1 = trim($_POST['Dep_Date']);
	
    $D2 = trim($_POST['Arr_Date']);
    $sub1=0;
    $ration1=0;
   //echo ($D1);
   $D3 = date("d/m/Y", strtotime($D1));
   $D4 = date("d/m/Y", strtotime($D2));
        $startTime = strtotime($D1);
        $endTime = strtotime( $D2 );
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    
  $date = date( 'Y-m-d', $i );
       //echo ($date);
  $date1 = date( 'd-m-Y', $i ); 
     echo "<tr>";
     echo "<th>$date1</th>";
      $cmd="select count(id) as subs from history_card where (purpose='Lunch-' or purpose='Dinner-' or purpose='Break-Fast-') and dated='$date'";  
  $res=mysqli_query($conn,$cmd);
    $rec=mysqli_fetch_assoc($res);
    $sub=$rec['subs'];
        $sub1+=$sub;
      echo "<td>$sub</td>"; 
    $cmd1="select count(id) as ration from history_card where purpose='Ration with Packed Meal' and dated='$date'";  
  $res1=mysqli_query($conn,$cmd1);
    $rec1=mysqli_fetch_assoc($res1);
    $ration=$rec1['ration'];
        $ration1+=$ration;
          echo "<td>$ration</td>"; 
    echo "</tr>";    
   }
 echo "<tr>";
     echo "<td>Total</td>"; 
     echo "<td>$sub1</td>"; 
     echo "<td>$ration1</td>"; 
 echo "</tr>";
    
    
}
    ?>
    
    
    
    
    
     </table>
        </div>
    </body>
</html>

<?php

    }
    else
    {
        header("location:../Index.php");
        die();
    }
?>