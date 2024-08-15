<!DOCTYPE html>
<?php date_default_timezone_set("Asia/Kolkata")?>

<html>
<head>
     <?php require_once("head.php")?>
    
    </head>
<body>
   

    <a class="btn btn-outline-success" href="rroom_main.php" role="button">Home</a>
   

<?php
    $ist_date=date("d/m/Y");
    //echo ($ist_date);
  /* $ist_date= date('01-m-Y');
    $last_date= date('d-m-Y', strtotime('last day of this month'));*/

if(isset($_POST['submit']))
{
	$crewid = trim($_POST['crewid']);
	$roomallotted = trim($_POST['radio']);   
    $reception = trim($_POST['radio9']);
    $cleaningroom = trim($_POST['radio1']);
    $cleaningtoilet = trim($_POST['radio2']);
    $cleaninglinen= trim($_POST['radio3']);
    $behavehousekeeping = trim($_POST['radio4']);
    $behavemess = trim($_POST['radio5']);
    $timefood = trim($_POST['radio6']);
    $qualityfood = trim($_POST['radio7']);
    $atmosphere = trim($_POST['radio8']);
	$rating=$roomallotted+$reception+$cleaningroom+$cleaningtoilet+$cleaninglinen+$behavehousekeeping+$behavemess+$timefood+$qualityfood+$atmosphere;
	$marks=$rating/10;
	//$marks=0;
    $date=date('d/m/Y');
        $time=date('H:i:s');
    
   require_once("dbcon.php");
  $cmd2="select * from ghi where crewid='$crewid' and date='$ist_date'";
      $res = mysqli_query($conn,$cmd2);
    if (mysqli_num_rows($res)>0){
     echo ("<div class='container my-3'><div class='alert alert-danger'><strong>Success : </strong>You have given feedback earlier Today. We will take your feedback next time. Thank You</div></div>");
        die;
    }
    else{
    $cmd1="insert into ghi(roomallotted,reception,cleaningroom,cleaningtoilet,cleaninglinen,behavehousekeeping,behavemess,timefood,qualityfood,atmosphere,crewid,date,time) values ('$roomallotted','$reception','$cleaningroom','$cleaningtoilet','$cleaninglinen','$behavehousekeeping','$behavemess','$timefood','$qualityfood','$atmosphere','$crewid','$date','$time');";
	
        //echo $cmd1;
        $res1 = mysqli_query($conn,$cmd1);
       
       
       if($res1)
	   {
       echo ("<div class='container my-3'><div class='alert alert-success'><strong>Success : </strong>Thank You for Feedback.</div></div>");
		
		
		
		
		
		
		
		
		
       }
    }
    
}
    
    

?>
   
    </body>
</html>
 	