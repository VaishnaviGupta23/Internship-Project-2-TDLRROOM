
<!DOCTYPE html>
<?php date_default_timezone_set("Asia/Kolkata")?>

<html>
<head>
    <?php require_once("head.php")?>
    <style>
       
       
    </style>
   </head>
<body> 
   
    <a class="btn btn-outline-success" href="rroom_main.php" role="button">Home</a>
   
    <?php
   $date=date('Y-m-d');
    $time=date('H:i');
   
   $Y=$_POST['check_list'];
	foreach($Y as $selected)
	{
		$X=$selected;
		//echo ($X);
        require_once("dbcon.php");
   $cmd = "Update room_number set status= '2' where bed_no='$X'";  
     $res = mysqli_query($conn,$cmd); 
    $cmd1 = "INSERT INTO main (status,bed_no,date_allottment,time_allottment,crew_id,crew_name,designation,type_wkg,train_number,date_vacated,time_vacated) values ('2','$X','$date','$time','UM','Under Maintainance','NA','NA','NA','NA','NA')";
	
	$res1 = mysqli_query($conn,$cmd1); 
        if($res and $res1){
             echo ("<div class='container my-3'><div class='alert alert-danger'><strong>Success: </strong>You Have Put Bed Number $X under maintainance successfully</div></div>");
            
     
            
            
            
            
        }
    }
  $cmd3="Select count(bed_no) as occupancy from room_number where status='1' or status='3'";
    $res3= mysqli_query($conn,$cmd3);
    $rec3=mysqli_fetch_assoc($res3);
    $occupancy=$rec3['occupancy'];
    
    $cmd4="Select count(bed_no) as under_maint from room_number where status='2'";
    $res4= mysqli_query($conn,$cmd4);
    $rec4=mysqli_fetch_assoc($res4);
    $under_maint=$rec4['under_maint'];
 
    $cmd5= "INSERT INTO summary (date,time,total_occupancy,under_maintain) values ('$date','$time','$occupancy','$under_maint')";
     $res5= mysqli_query($conn,$cmd5);      
            






    die;
        
   ?>
     <?php require_once("scripts.php")?>
    </body>
</html>

