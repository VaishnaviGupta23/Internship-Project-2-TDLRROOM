<!DOCTYPE html>
<?php date_default_timezone_set("Asia/Kolkata")?>
<?php 
 
    session_start();
    if(isset($_SESSION['isLoggedIn']))
    {
    ?>
<html>
    <head>
         <?php require_once("head.php")?>
        <style>
           
            body{
                background-color: bisque;
            }
            table{
                border-collapse: collapse;
                table-layout:auto;
                width: 100%;
                background-color: beige;
               
            }
            h6{
                font-size: 40Px;
                text-align:center;
            }
            td,th{
                text-align: center;
                font-size: 20PX;
            }
            #xx{
                text-align:left;
            }
        
        </style>
         
    </head>
    <body>
<!--
<a class="btn btn-outline-primary" href="e_summary.php" role="button">Back</a>
    <a class="btn btn-outline-success" href="admin_home.php" role="button">Home</a>
    <a class="btn btn-outline-danger" href="signout.php" role="button">Sign Out</a>
-->
<div class="container bg-light col-sm-12">

<?php
   /* var_dump($_POST);*/
if(isset($_POST['period']))
{
	$D1 = trim($_POST['Dep_Date']);
	$D2 = trim($_POST['arr_Date']);
    echo ($D1);
	
        $date=strtotime($D1);
        $date1=strtotime($D2);
   
   $D3 = date("d/m/Y", strtotime($D1));
 
   
       
       
      require_once('dbcon.php');
    echo "<h6>Occupancy Detail of TUNDLA Running From $D1 to $D2</h6>";
    $x=0;
echo "<table border='1'>";
     echo "<tr>";
   echo "<th>Sl No</th>";
   
   echo "<th>Crew ID</th>";
   echo "<th>Crew Name</th>";
   echo "<th>Designation</th>";
   echo "<th>HQ</th>";
   echo "<th>Room No</th>";
   echo "<th>Date</th>";
   echo "<th>Time</th>";
   echo "<th>Type Meal</th>";
    echo "</tr>";
    
    
    for ($i=$date;$i<=$date1;$i+=86400){
        
        $D10 = date('Y-m-d',($i));
   
  $cmd=" SELECT * FROM history_card WHERE (purpose<>'vacation' and purpose<>'occupation' and purpose<>'change room') and dated='$D10' order by time,lp_id";
    $res=mysqli_query($conn,$cmd);
    while($rec=mysqli_fetch_assoc($res)){
     $x++;
        
      
        $bed=$rec['bed_no'];
        $purpose=$rec['purpose'];
        $lp_id=$rec['lp_id'];
        $dated=$rec['dated'];
        $time=$rec['time'];
    $cmd1=" SELECT * FROM biodata WHERE crew_id='$lp_id'";
    $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
     $crew_name=$rec1['crew_name'];   
     $des=$rec1['designation'];   
     $hq=$rec1['hq'];   
          echo "<tr>";
         echo "<td>$x</td>";
        echo "<td >$lp_id</td>";
          echo "<td id='xx'>$crew_name</td>";
          echo "<td>$des</td>";
          echo "<td>$hq</td>";
          echo "<td>$bed</td>";
          echo "<td>$dated</td>";
         echo "<td>$time</td>";
         echo "<td>$bed</td>";      
         echo "<td>$purpose</td>";
          echo "</tr>";
    }

   
    
    }
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