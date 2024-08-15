<html>
<head>
    <style>
    .btn{
    font-size: 30Px;
    }
    </style>
    </head>
    <body>
         <a class="btn btn-outline-success" href="rroom_main.php" role="button">Home</a>
    <?php
   if(isset($_POST['submit']))
{
   require_once("dbcon.php"); 
	$lp_id = trim($_POST['lp_id']);
	$lp_name = trim($_POST['lp_name']);
	$lp_des = trim($_POST['lp_des']);
	$id = trim($_POST['id']);
	$mobile = trim($_POST['mobile']);
	$hq = trim($_POST['hq']);
	$cmd="update biodata set crew_name='$lp_name',designation='$lp_des',mobile='$mobile',hq='$hq',crew_id='$lp_id' where ID='$id'";
	
	$res=mysqli_query($conn,$cmd);
    if($res){
        echo ("<div class='container my-3'><div class='alert alert-danger'><strong>Warning : </strong>Your Edit Data Saved Sucessfully</div></div>");
    }
      
   }
        ?>
    
    </body>
</html>