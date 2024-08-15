<?php 
 
    /*session_start();
    if(isset($_SESSION['isLoggedIn']))
    {*/
    ?>
<html>
<head>
     <?php require_once("head.php")?>
    <?php date_default_timezone_set("Asia/Kolkata")?>
    </head>
<body>

<?php




if(isset($_POST['submit']))
{
    require_once("dbcon.php");
	$lp_id = trim($_POST['lp_id']);
      $cmd6=" select * from biodata where crew_id='$lp_id'";    
    $res6=mysqli_query($conn,$cmd6);
    $rec6=mysqli_fetch_assoc($res6);
        $lp_name=$rec6['crew_name'];
        $lp_hq=$rec6['hq'];
    $lp_des=$rec6['designation'];
    
	
	$card_no1 = ltrim($_POST['lobby_card_no']);
	$card_no = ltrim($card_no1,"0");
    
	$train = trim($_POST['train']);
	$type = trim($_POST['type']);
    $dated=date("Y-m-d");
    $time=date("H:i");
    $cmd1="select lobby_no from card_detail where card_no='$card_no'";
	$res1=mysqli_query($conn,$cmd1);
    $rec1=mysqli_fetch_assoc($res1);
    $lobby_card_no=$rec1['lobby_no'];
    
	$cmd2="select * from lobby_data where lp_id='$lp_id' and status='1'";
	$res2=mysqli_query($conn,$cmd2);
     if(mysqli_num_rows($res2)>0){
           $rec2=mysqli_fetch_assoc($res2);
       $card=$rec2['lobby_card_no']; 
         echo "This LP $lp_id is already issued with Card No- $card";
         
     }
    else{
        
     $cmd="select * from lobby_data where lobby_card_no='$lobby_card_no' and status='1'";
    $res=mysqli_query($conn,$cmd);
    if(mysqli_num_rows($res)>0){
        echo "This card Is already Issued.";
        
    }
    else{
        $cmd="insert into lobby_data (lp_id,lp_name,lp_hq,lp_des,lobby_card_no,a_card_no,train,type,dated,time,status) values ('$lp_id','$lp_name','$lp_hq','$lp_des','$lobby_card_no','$card_no','$train','$type','$dated','$time','1')";
        $res1=mysqli_query($conn,$cmd);
        $cmd1="update card_detail set status='1' where lobby_no='$lobby_card_no'";
         $res2=mysqli_query($conn,$cmd1);
        if($res1)
	{
            sleep(2);
			header("Location:main_lobby.php");
	}
	else
	{
		$is_error = mysqli_error($conn);
		echo ("<div class='container my-3'><div class='alert alert-danger'><strong>Connection Error : </strong>$is_error</div></div>");
	}
    }   
        
    }
	
	
   
	

}

?>
    
    
    </body>
</html>
<?php

   /* }
    else
    {
        header("location:../Index.php");
        die();
    }*/
?>
 