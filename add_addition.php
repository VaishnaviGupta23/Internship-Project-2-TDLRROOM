<?php date_default_timezone_set("Asia/Kolkata")?>
<a class="btn btn-outline-primary" href="rroom_main.php" role="button">Home</a>
<?php
if(isset($_POST['submit']))
{
	$a_bedsheet = trim($_POST['a_bedsheet']);
	$add_bedsheet = trim($_POST['add_bedsheet']);
	$less_bedsheet = trim($_POST['less_bedsheet']);
	$a_pillow_cover = trim($_POST['a_pillow_cover']);
	$add_pillow_cover = trim($_POST['add_pillow_cover']);
	$less_pillow_cover = trim($_POST['less_pillow_cover']);
	$a_blanket = trim($_POST['a_blanket']);
	$add_blanket = trim($_POST['add_blanket']);
	$less_blanket = trim($_POST['less_blanket']);
    $a_blanket_cover = trim($_POST['a_blanket_cover']);
	$add_blanket_cover = trim($_POST['add_blanket_cover']);
	$less_blanket_cover = trim($_POST['less_blanket_cover']);
	$a_net = trim($_POST['a_net']);
	$add_net = trim($_POST['add_net']);
	$less_net = trim($_POST['less_net']);
    $a_curtain = trim($_POST['a_curtain']);
	$add_curtain = trim($_POST['add_curtain']);
	$less_curtain = trim($_POST['less_curtain']);
    $a_towel = trim($_POST['a_towel']);
	$add_towel = trim($_POST['add_towel']);
	$less_towel = trim($_POST['less_towel']);
    $a_sofa_cover = trim($_POST['a_sofa_cover']);
	$add_sofa_cover = trim($_POST['add_sofa_cover']);
	$less_sofa_cover = trim($_POST['less_sofa_cover']);
    $t1=($a_bedsheet +$add_bedsheet-$less_bedsheet);
    $t2=($a_pillow_cover +$add_pillow_cover-$less_pillow_cover);
    $t3=($a_blanket +$add_blanket-$less_blanket);
    $t4=($a_blanket_cover +$add_blanket_cover-$less_blanket_cover);
    $t5=($a_net +$add_net-$less_net);
    $t6=($a_curtain +$add_curtain-$less_curtain);
    $t7=($a_towel +$add_towel-$less_towel);
    $t8=($a_sofa_cover +$add_sofa_cover-$less_sofa_cover);
    $dated=date("Y-m-d");
    $time=date("H:i");
    
    $cmd1="update linen_invent set bedsheet='$t1',pillow_cover='$t2',blanket='$t3',blanket_cover='$t4',net='$t5',curtain='$t6',towel='$t7',sofa_cover='$t8'";
    require_once("dbcon.php");
    $res1=mysqli_query($conn,$cmd1);
    
    
    $cmd="insert into add_linen_invent (dated,time,bedsheet,pillow_cover,blanket,blanket_cover,net,curtain,towel,sofa_cover) values ('$dated','$time','$add_bedsheet','$add_pillow_cover','$add_blanket','$add_blanket_cover','$add_net','$add_curtain','$add_towel','$add_sofa_cover')";
    require_once("dbcon.php");
    $res=mysqli_query($conn,$cmd);
    $cmd2="insert into saubtract_linen_invent (dated,time,bedsheet,pillow_cover,blanket,blanket_cover,net,curtain,towel,sofa_cover) values ('$dated','$time','$less_bedsheet','$less_pillow_cover','$less_blanket','$less_blanket_cover','$less_net','$less_curtain','$less_towel','$less_sofa_cover')";
    require_once("dbcon.php");
    $res2=mysqli_query($conn,$cmd2);
    if($res1)
	{
		echo ("<div class='container my-3'><div class='alert alert-success'><strong>Success : </strong>Chief Loco Inspector Name Mr added successfully.</div></div>");
	}
	else
	{
		$is_error = mysqli_error($conn);
		echo ("<div class='container my-3'><div class='alert alert-danger'><strong>Connection Error : </strong>$is_error</div></div>");
	}

}

?>