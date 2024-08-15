<html>
<head>
     <?php require_once("head.php")?>
    
    <style>
        body{
            background-color: beige;
        }
        input[type=text]{
            width: 100%;
            height: 50Px;
            font-size: 23Px;
            padding: 5px;
        } 
        label{
            color: orangered;
             font-size: 26Px;
        }
        h2{
            text-align: center;
        }
        .btn{
            width: 100%;
            font-size: 23Px;
            font-weight: bold;
            height: 50Px;
        }
    
    
    </style>
    </head>
<body>

<?php




if(isset($_POST['submit']))
{
   require_once("dbcon.php"); 
	$lp_id = trim($_POST['lp_id']);
	
	//echo ($lp_id);
	$cmd="select * from biodata where crew_id='$lp_id'";
	$res=mysqli_query($conn,$cmd);
    $rec=mysqli_fetch_assoc($res);
    $id=$rec['ID'];
    $lp_name=$rec['crew_name'];
   
    $lp_des=$rec['designation'];
    $lp_mobile=$rec['mobile'];
    $lp_hq=$rec['hq'];
    
?>
 <div class="container col-sm-8">
     <h2>Edit Biodata of Below Given Crew</h2>
 <form action="add_lp_edit.php" method="post">
     <label>LP CMS ID-</label>
     <input name="lp_id" type="text"  value="<?php echo  $lp_id ?>">
     <br>
      <input name="id" type="text" hidden value="<?php echo  $id ?>">
    <label>LP Name-</label>
     <input name="lp_name" type="text"  value="<?php echo  $lp_name ?>">
      <br>
     
     <label>LP Designation-</label>
     <input name="lp_des" type="text"  value="<?php echo  $lp_des ?>">
      <br>
      
     <label>Mobile-</label>
     <input name="mobile" type="text"  value="<?php echo  $lp_mobile ?>">
     <br>
      
     <label>HQ-</label>
     <input name="hq" type="text"  value="<?php echo  $lp_hq ?>">
     
     <br>
     <br>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>   
     
     
     </form>   
    
    
    
    
    </div>
    
    
<?php
  }  
    ?>
    
    
    
   
    
    </body>
</html>
 