<?php 
 
   /* session_start();
    if(isset($_SESSION['isLoggedIn']))
    {*/
    ?>
<html>
    <?php date_default_timezone_set("Asia/Kolkata")?>
    <head>
        
     <?php require_once("head.php")?>;
    <style>
        h6{
            margin-left: 5%;
        }
        th,td{
            text-align: center;
            font-size: 12px;
        }
        #xx{
            margin-left: 2%;
        }
        #yy{
            height: 20Px;
        }
         @media print{
    #xy{
        display:none !important;
    }
}
        
        </style>
    </head>
    <body>

<?php
if(empty($_POST['radio'])) {
        $d1=0;
        $d3=0;
        $p='';
    }
   else{
       $d1 = $_POST['radio']; 
        $d3=5.55;
       $p=$d1;
       }
if(empty($_POST['radio2'])) {
        $d2=0;
        $d4=0;
        $q='';
    }
   else{
       $d2 = $_POST['radio2']; 
     $d4=5.55;
       $q='packed food';
       }
    if( $d1=='Ration' and $d2==1){
      $total=5.55;
        $purpose='Ration with Packed Meal';
    }
    elseif($d1=='Ration' and $d2==0){
        $total=0;
        $purpose='Ration with Packed Meal';
      
    }
    else{
      $total=($d3+$d4);
        $total = number_format($total, 2);
        $purpose=$p.'-'.$q;    
    }

        echo ($purpose);
        

   
    $card_no=trim($_POST['card_no']);
   $cmd="select * from room_number where card_no='$card_no'";
    require_once("dbcon.php");
$res=mysqli_query($conn,$cmd);
$rec=mysqli_fetch_assoc($res);
$lp_id=$rec['crew_id'];
$lp_name=$rec['crew_name'];
$lp_hq=$rec['hq'];
$room=$rec['bed_no'];
        $dated=date("Y-m-d");
        $time=date("H:i");
    
    $cmd5="select * from history_card where lp_id='$lp_id' and dated='$dated' and time='$time'";
    $res5=mysqli_query($conn,$cmd5);
    if(mysqli_num_rows($res5)>0){
        die;
    }
    else{
     $cmd1="insert into history_card (dated,time,card_no,purpose,lp_id,bed_no) values ('$dated','$time','$card_no','$purpose','$lp_id','$room')";
        $res1=mysqli_query($conn,$cmd1);   
        
    }


    
$cmd2="select * from ref_id";
$res2=mysqli_query($conn,$cmd2);
 $rec2=mysqli_fetch_assoc($res2);
    $ref_id1=$rec2['ref_id'];
    $rroom=$rec2['rroom'];
    $ref_id=($ref_id1+1);
  $cmd3="update ref_id set ref_id='$ref_id'";
$res3=mysqli_query($conn,$cmd3);  
?>
    
<table>
 <tr id="yy">
 <td><img id="xx" src='images/images.png' alt='Blue image' style='height:20px text-align:centre'></td>   
 <td>Running Room,TDL</td>   
    
    </tr>       
        </table>
<h6>Mess Receipt</h6>

<table align='left'>
    <tr>
  <th>Ref id</th>  
  <td><?php echo $ref_id ?></td>  
    </tr> 
 <tr>
  <td>Date:-<?php echo date("d-m-Y") ?></td>  
  <td>Time:-<?php echo date("H:i") ?></td>  
    </tr>   

<tr>
 
  <td><?php echo $lp_id ?></td>  
  <td><?php echo $lp_name ?>/<?php echo $lp_hq ?></td>  
    </tr>
    
    <tr>
   
  <td>Bed No-<?php echo $room ?></td>  
    </tr>
<?php
    if($d1<>'0'){
    echo "<tr>";
        
  echo "<th>Meal Type</th>";  
  echo "<td>$d1</td>";  
    echo "</tr>";
}
    else{
        
    }
if($d2<>0){
    echo "<tr>";
        
  echo "<th>Packed Food</th>";  
  echo "<td>Yes</td>";  
    echo "</tr>";
}
    else{
        
    }
?>
 <tr>
  <th>Total Amount </th>  
  <td>Rs:-<?php echo $total ?></td>  
    </tr>
            <button id="xy" onClick="myFunction()">Print</button>

</table>
        <script>
        window.onafterprint = function(e){
    closePrintView();
};

function myFunction(){
     
    window.print();
   $('#xy').prop('disabled', 'true');
    window.location.href = 'rroom_main.php';   
}

function closePrintView() {
    window.location.href = 'rroom_main.php';   
}

            </script>
        </body>
    
    </html>
<?php
/*
    }
    else
    {
        header("location:../Index.php");
        die();
    }*/
?>