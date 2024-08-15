<!DOCTYPE html>
<?php date_default_timezone_set("Asia/Kolkata")?>

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
	$D5 = trim($_POST['Dep_Date']);
	$D6 = trim($_POST['arr_Date']);
    
        $date=strtotime($D5);
        $date1=strtotime($D6);
    //echo ($date1);
     echo "<h6>Occupancy Detail of TUNDLA Running From $D5 to $D6</h6>";
    echo "<table border='1'>";
     echo "<tr>";
   echo "<th>Sl No</th>";
   echo "<th>Date Occupation</th>";
   echo "<th>Time Occupation</th>";
 
   echo "<th>Bed No</th>";
   echo "<th>Crew ID</th>";
   echo "<th>Crew Name</th>";
   echo "<th>Designation</th>";
   echo "<th>Train Number</th>";
   echo "<th>Mobile Number</th>";
   echo "<th>Date Vacated</th>";
   echo "<th>Time Vacated</th>";
    echo "</tr>";
     $x=0;

        
    for ($i=$date;$i<=$date1;$i+=86400){
  
  
   $D1 = date('Y-m-d',($i));
   $D3 = date('d-m-Y',($i));
  //echo ($D1);
       // echo"<br>";
     
      
       
      require_once('dbcon.php');
   
   
  $cmd="select * from main where (date_allottment='$D1' or date_allottment='$D3')  and crew_name<>'Under Maintainance' and status='10' order by date_allottment,time_allottment";
    $res=mysqli_query($conn,$cmd);
    while($rec=mysqli_fetch_assoc($res)){
     $x++;
        $date=date ("d-m-Y",strtotime ($rec['date_allottment']));
        $time=$rec['time_allottment'];
        $bed=$rec['bed_no'];
        $crew_id=$rec['crew_id'];
        $crew_name=$rec['crew_name'];
        $des=$rec['designation'];
        $train=$rec['train_number'];
        $date11=$rec['date_vacated'];
        $time1=$rec['time_vacated'];
        
          $cmd1="select * from biodata where crew_id='$crew_id'";
    
    $res1=mysqli_query($conn,$cmd1);   
     $rec1=mysqli_fetch_assoc($res1);
       $mobile=$rec1['mobile'];
        
        echo "<tr>";
         echo "<td>$x</td>";
         echo "<td>$date</td>";
         echo "<td>$time</td>";
         echo "<td>$bed</td>";
         echo "<td >$crew_id</td>";
         echo "<td id='xx'>$crew_name</td>";
         echo "<td>$des</td>";
         echo "<td>$train</td>";
         echo "<td>$mobile</td>";
         echo "<td>$date11</td>";
         echo "<td>$time1</td>";
          echo "</tr>";
         
    }
       
     }
   
       echo "</table>";   
       
}
       

   
    ?>
    </div>
       
        </body>
    </html>

