<!DOCTYPE html>
<?php date_default_timezone_set("Asia/Kolkata")?>
<?php 
 
    session_start();
    if(isset($_SESSION['isLoggedIn']))
    {
    ?>
<html>
    <head>
        <style>
            table{
                border-collapse: collapse;
                width: 700Px;
            }
            h6{
                font-size: 20Px;
                text-align: left;
            }
            td{
                text-align: center;
            }
            #A{
                text-align: left;
            }
            
        
        </style>
         <?php require_once("head.php")?>
    </head>
    <body>
<!--
<a class="btn btn-outline-primary" href="e_summary.php" role="button">Back</a>
    <a class="btn btn-outline-success" href="admin_home.php" role="button">Home</a>
    <a class="btn btn-outline-danger" href="signout.php" role="button">Sign Out</a>
-->
<div class="container bg-light col-sm-8">

<?php
   /* var_dump($_POST);*/
if(isset($_POST['period']))
{
	$D1 = trim($_POST['Dep_Date']);
	
    $D2 = trim($_POST['Arr_Date']);
   
   $D3 = date("d/m/Y", strtotime($D1));
   $D4 = date("d/m/Y", strtotime($D2));
   
       $startTime = strtotime($D1);
        $endTime = strtotime( $D2 );
    echo "<h6>Occupancy Detail of TUNDLA Running From Date $D3 to $D4</h6>";
echo "<table border='1'>";
     echo "<tr>";
   echo "<th>Date</th>";
   echo "<th>Total Occupancy</th>";
   echo "<th>Average Occupancy</th>";
   echo "<th>Peak Occupancy</th>";
   echo "<th>Peak Occupancy Time</th>";
   echo "<th>Grand Total For Today</th>";
    echo "</tr>";
     $x1=0;
    $x2=0;
for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
     echo "<tr>";
  $date = date( 'Y-m-d', $i ); 
     echo "<td>$date</td>";
    
   $cmd1="select Avg(total_occupancy) as average from summary where date='$date' and total_occupancy<>'0'";
    require_once('dbcon.php');
    $res1=mysqli_query($conn,$cmd1);
    $rec1=mysqli_fetch_assoc($res1);
    $avg=$rec1['average'];
    $average=round($avg);
   
    
     $cmd2="select MAX(total_occupancy) as maximum from summary where date='$date'";
    require_once('dbcon.php');
    $res2=mysqli_query($conn,$cmd2);
    $rec2=mysqli_fetch_assoc($res2);
    $maximum=$rec2['maximum'];
   
    
    
    $cmd3="select * from summary where total_occupancy='$maximum' and date='$date'";
    require_once('dbcon.php');
    $res3=mysqli_query($conn,$cmd3);
    $rec3=mysqli_fetch_assoc($res3);
    $date=$rec3['date'];
    $time=$rec3['time'];
    
    $cmd4="select count(id) as total from main where date_allottment='$date' and crew_id<>'UM' and (designation='ALP' or designation='SGD' or designation='LPG' or designation='SALP' or designation='GD' or designation='GDP' or designation='LPP' or designation='GDM' or designation='LPM' or designation='CLI' or designation='SGDP' or designation='SLPG' or designation='LP' or designation='SHT' or designation='SLPP')";
    $res4=mysqli_query($conn,$cmd4);
    $rec4=mysqli_fetch_assoc($res4);
    $total=$rec4['total'];
    $x1+=$total;
   
    
    $cmd5="select count(id) as total1 from main where date_allottment<'$date' and crew_id<>'UM' and (date_vacated='0' or date_vacated='$date') and (designation='ALP' or designation='SGD' or designation='LPG' or designation='SALP' or designation='GD' or designation='GDP' or designation='LPP' or designation='GDM' or designation='LPM' or designation='CLI' or designation='SGDP' or designation='SLPG' or designation='LP' or designation='SHT' or designation='SLPP')";
    $res5=mysqli_query($conn,$cmd5);
    $rec5=mysqli_fetch_assoc($res5);
    $total1=$rec5['total1'];
    $gt=($total+$total1);
    
     $x2+=$gt;
  
    echo "<td>$total</td>";
    echo "<td>$average</td>";
    echo "<td>$maximum</td>";
    echo "<td>$time</td>";
    echo "<td>$gt</td>";
    echo "</tr>";

}
    
     echo "<tr>";
    echo "<td>Total</td>";
    echo "<td>$x1</td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td></td>";
    echo "<td>$x2</td>";
     echo "</tr>";
    
    echo "</table>";   
       
}
       

   
    ?>
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