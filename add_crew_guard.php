

<!DOCTYPE html>
<?php date_default_timezone_set("Asia/Kolkata")?>

<html>
<head>
     <?php require_once("head.php")?>
     
    </head>
<body>
    
    <a class="btn btn-outline-primary" href="main_lobby.php" role="button">Home</a>
    

<?php

if(isset($_POST['registration']))
{
	$crew_id = trim($_POST['crew_id']);
	$crew_name = trim($_POST['crew_name']);   
	$hq = trim($_POST['hq']);   
    $traction = trim($_POST['traction']);
    $designation = trim($_POST['designation']);
    $mobile = trim($_POST['mobile']);
    
    
    
	require_once("dbcon.php");
	
	$cmd = "INSERT INTO biodata (crew_id,crew_name,traction,designation,mobile,hq) values ('$crew_id','$crew_name','$traction','$designation','$mobile','$hq')";
	
	$res = mysqli_query($conn,$cmd);
   	if($res)
	{
        
       echo ("<div class='container my-3'><div class='alert alert-danger'><strong>Success: </strong>Record Saved Successfully</div></div>");
    }
        
       
	else
	{
		$is_error = mysqli_error($conn);
		echo ("<div class='container my-3'><div class='alert alert-danger'><strong>Connection Error : </strong>$is_error</div></div>");
	}

}

   


?>
   
   
    </body>
</html>

