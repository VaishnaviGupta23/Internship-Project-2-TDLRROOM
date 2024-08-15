<!DOCTYPE html>
<?php date_default_timezone_set("Asia/Kolkata")?>
<html>
<head>
     <?php require_once("head.php")?>
   <title>HOMES</title>
   
     <?php require_once("head.php")?>
   
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   
	
  
    <style>
         body{
            background-color:aqua;
        }
   h1 {
       text-align: center;
       font-size: 70Px;
       font-weight: bolder;
       color: red;
  text-shadow: 0 1px 0 #ccc,
               0 2px 0 #c9c9c9,
               0 3px 0 #bbb,
               0 4px 0 #b9b9b9,
               0 5px 0 #aaa,
               0 6px 1px rgba(0,0,0,.1),
               0 0 5px rgba(0,0,0,.1),
               0 1px 3px rgba(0,0,0,.3),
               0 3px 5px rgba(0,0,0,.2),
               0 5px 10px rgba(0,0,0,.25),
               0 10px 10px rgba(0,0,0,.2),
               0 20px 20px rgba(0,0,0,.15);
       
}
        h2{
         text-align:center;
       font-size: 80Px;
       font-weight: bolder; 
            color: blue;
        }
    </style>
    </head>
    <body>
   <div>
       <h2>TDL RUNNING ROOM</h2>
        
        </div>
        <div class="w3-padding-32 w3-blue w3-circle w3-center">
    <h1>Hospitality Operation Management Eco-System <br> (HOMES)</h1>
            
    </div>
        <?php
    require_once('dbcon.php');
        $card_no1=$_GET['dist'];
        //$card_no1=179592977;
$card_no = ltrim($card_no1, '0');
   echo ($card_no);
$cmd="select * from lobby_data where a_card_no='$card_no' order by id desc limit 1";
$res=mysqli_query($conn,$cmd);
 $rec=mysqli_fetch_assoc($res);
$status=$rec['status'];
if($status==1){
    
   header( 'Location:occupation.php?card_no='.$card_no );
    
    
    
}
elseif ($status==2){
    
    header( 'Location:bf_out.php?card_no='.$card_no );
    
}
else {
    echo "This Card Is Not Issued by TDL Lobby";
}
    
    ?>
    
    
    </body>
</html>