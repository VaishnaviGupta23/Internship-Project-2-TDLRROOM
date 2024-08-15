<?php date_default_timezone_set("Asia/Kolkata")?> 
<?php
 
  $card_no=$_GET['card_no'];
$date=date("Y-m-d");
$time=date("H:i");
require_once("dbcon.php");
$cmd="insert into outside_data (dated,time,card_no) value ('$date','$time','$card_no')";
$res=mysqli_query($conn,$cmd);
    header("Location:rroom_main.php");  
     ?>  