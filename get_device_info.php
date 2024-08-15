<?php
if(isset($_REQUEST['lp_cms_id']))
{
    $lp_cms_id=$_REQUEST['lp_cms_id'];
    require_once("dbcon.php");
    $cmd="select * from biodata where crew_id='$lp_cms_id'";
    $res=mysqli_query($conn,$cmd);
    if($res)
    {
        if(mysqli_num_rows($res)>0)
        {
            $info = mysqli_fetch_assoc($res);
            $output = json_encode($info);
            echo $output;
        }
    }
    else
    {
        echo mysqli_error($conn);
    }
}
?>
