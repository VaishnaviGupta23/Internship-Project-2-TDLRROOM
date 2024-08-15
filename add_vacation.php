
<!DOCTYPE html>
<?php date_default_timezone_set("Asia/Kolkata")?>
<html>
<head>
    <?php require_once("head.php")?>
    <style>
       
       
    </style>
   </head>
<body>
    <a class="btn btn-outline-primary" href="rroom_main.php" role="button">Back</a>
    
    <?php
   $date=date('Y-m-d');
    $time=date('H:i');
    $card_no=$_GET['card_no'];
  
     
		
        require_once("dbcon.php");
   $cmd = "Update room_number set status= '0',crew_id='0',crew_name='0',designation='0',hq='0',card_no='0' where card_no='$card_no'";  
     $res = mysqli_query($conn,$cmd);
    
        
        
        
    $cmd1 = "update main set status='10',date_vacated='$date',time_vacated='$time' where card_no='$card_no' and status='1'";
	
	$res1 = mysqli_query($conn,$cmd1);

 $cmd2 = "update lobby_data set status='2' where card_no='$card_no' and status='1'";
	
	$res2 = mysqli_query($conn,$cmd2);


        if($res and $res1){
             echo ("<div class='container my-3'><div class='alert alert-danger'><strong>Success: </strong>You Have Vacated Bed successfully</div></div>");
            
    $cmd3="insert into history_card (dated,time,card_no,purpose) value ('$date','$time','$card_no','vacation') ";
    $res3=mysqli_query($conn,$cmd3);
      $cmd4="update lobby_data set status='3' where a_card_no='$card_no'";
    $res4=mysqli_query($conn,$cmd4);
             $cmd10="update card_detail set status='0' where card_no='$card_no'";
         $res20=mysqli_query($conn,$cmd10);
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
     
    </body>
</html>

