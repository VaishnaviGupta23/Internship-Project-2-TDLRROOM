<!DOCTYPE html>
<?php date_default_timezone_set("asia/kolkata")?>

<html>
<head>
    
     <?php require_once("head.php")?>
     
    </head>
<body onunload="">

    <a class="btn btn-outline-success" href="rroom_main.php" role="button">Home</a>
    

<?php

if(isset($_POST['changeroom']))
{
	$room1 = trim($_POST['room1']);
	$room2 = trim($_POST['room2']);
	$pvtnumber = trim($_POST['pvtnumber']);
	$reason = trim($_POST['reason']);
    
$cmd1="select * from room_number where bed_no='$room1'";
    require_once("dbcon.php");
    
    $res1=mysqli_query($conn,$cmd1);
    $rec1=mysqli_fetch_assoc($res1);
    $crew_id=$rec1['crew_id'];
    $crew_name=$rec1['crew_name'];
    $designation=$rec1['designation'];
    $hq=$rec1['hq'];
    $card_no=$rec1['card_no'];
    $value1=$rec1['value'];
   
     $date=date('Y-m-d');
    $time=date('H:i');
  
}
 $cmd3="insert into history_card (dated,time,card_no,purpose) value ('$date','$time','$card_no','change room') ";
    $res3=mysqli_query($conn,$cmd3);
$cmd6="insert into changeroom (previousroom,newroom,privatenumber,lpname,crewid,designation,hq,date,time,reason,card_no) values ('$room1','$room2','$pvtnumber','$crew_name','$crew_id','$designation','$hq','$date','$time','$reason','$card_no')";
 require_once("dbcon.php");
$res6=mysqli_query($conn,$cmd6); 

$cmd7="update main set bed_no='$room2' where bed_no='$room1' and status='1'";    
   $res7=mysqli_query($conn,$cmd7);
$cmd8="update room_number set crew_id='$crew_id', crew_name='$crew_name',designation='$designation',hq='$hq',card_no='$card_no', status='1' where bed_no='$room2'";
$res8=mysqli_query($conn,$cmd8);
$cmd9="update room_number set crew_id='0', crew_name='0',designation='0',hq='0',card_no='0', status='0' where bed_no='$room1'";
$res9=mysqli_query($conn,$cmd9);
if($res3 and $res6 and $res7 and $res8 and $res9){
 echo ("<div class='container my-3'><div class='alert alert-success'><strong>Message : </strong> You have Success Fully Changed the Room </div></div>"); 
}
else{
   $is_error = mysqli_error($conn);
		echo ("<div class='container my-3'><div class='alert alert-danger'><strong>Connection Error : </strong>$is_error</div></div>"); 
    
    
}
?>
    
    
    
    
    
    
    </body>
</html>