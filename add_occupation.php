<html>
    <?php require_once("head.php")?>
    <?php date_default_timezone_set("Asia/Kolkata")?>
   <head>
       <style>
           .btn{
               background-color: aqua;
               font-weight: bolder;
               font-size: 30Px;
           }
           .container{
               font-size: 30Px;
           }
       
       </style>
    
    </head>
    <body>
    <a class="btn " href="rroom_main.php" role="button">Home</a>
<?php

    require_once("dbcon.php");
	$lp_id = $_GET['crew_id'];
     $cmd6=" select * from biodata where crew_id='$lp_id'";    
    $res6=mysqli_query($conn,$cmd6);
    $rec6=mysqli_fetch_assoc($res6);
        $lp_name=$rec6['crew_name'];
        $lp_hq=$rec6['hq'];
    $lp_des=$rec6['designation'];
        
	$card_no = $_GET['card_no'];
	$bed_no = $_GET['bed'];
	$train = $_GET['train'];
	$type = $_GET['wkg_type'];
   
    $cmd6=" select * from main where crew_id='$lp_id' and status='1'";    
    $res6=mysqli_query($conn,$cmd6);
    if(mysqli_num_rows($res6)>0){
    
        $rec6=mysqli_fetch_assoc($res6);
        $bed=$rec6['bed_no'];
     echo ("<div class='container my-3'><div class='alert alert-success'><strong>Danger : </strong> $bed already Allotted to Sri $lp_name/$lp_id</div></div>");
        
    }
    else{
    $dated=date("Y-m-d");
    $time=date("H:i");
    $cmd="update lobby_data set status='2',occup_date='$dated',occup_time='$time' where a_card_no='$card_no'";
    $res=mysqli_query($conn,$cmd);
   $cmd1="update room_number set status='1',crew_id='$lp_id',crew_name='$lp_name',designation='$lp_des',hq='$lp_hq',card_no='$card_no' where bed_no='$bed_no'";
    $res1=mysqli_query($conn,$cmd1);
    $cmd2="insert into main (status,bed_no,date_allottment,time_allottment,crew_id,crew_name,designation,hq,type_wkg,train_number,card_no) values ('1','$bed_no','$dated','$time','$lp_id','$lp_name','$lp_des','$lp_hq','$type','$train','$card_no')";
    $res2=mysqli_query($conn,$cmd2);
    $cmd3="insert into history_card (dated,time,card_no,purpose,lp_id,bed_no) value ('$dated','$time','$card_no','occupation','$lp_id','$bed_no') ";
    $res3=mysqli_query($conn,$cmd3);
    
    $cmd3="Select count(bed_no) as occupancy from room_number where status='1' or status='3'";
    $res3= mysqli_query($conn,$cmd3);
    $rec3=mysqli_fetch_assoc($res3);
    $occupancy=$rec3['occupancy'];
    
    $cmd4="Select count(bed_no) as under_maint from room_number where status='2'";
    $res4= mysqli_query($conn,$cmd4);
    $rec4=mysqli_fetch_assoc($res4);
    $under_maint=$rec4['under_maint'];
 
    $cmd5= "INSERT INTO summary (date,time,total_occupancy,under_maintain) values ('$dated','$time','$occupancy','$under_maint')";
     $res5= mysqli_query($conn,$cmd5);
    
    if($res5){
        echo ("<div class='container my-3'><div class='alert alert-success'><strong>Success : </strong>You Have Successfully Alloted $bed_no to Sri $lp_name</div></div>");
    }
    }

?>
        </body>
    </html>
