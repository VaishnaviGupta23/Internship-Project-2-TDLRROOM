<?php 
 
    session_start();
    if(isset($_SESSION['isLoggedIn']))
    {
    ?>
<html>
    <head>
         <?php require_once("head.php")?>
         <?php require_once("dbcon.php")?>
        <style>
            th{
                font-size: 20Px;
            }
           
            #A{
                text-align: center;
              
            }
           th,td{
                text-align: center;
                font-size: 30Px;
               
               
            }
            #C{
                margin-left: 30Px;;
            }
            #E{
                margin-left: 30Px;
            }
            #F{
                margin-left: 30Px;
            }
            table{
              column-width: 50Px;  
            }
         </style>
        
    </head>
    <body>
 <div class="container bg-light col-sm-12">
     <h4 id="A">Summary of Meals at  TUNDLA Running Room</h4>
<table border="1" align="center">
    <tr>
    <th rowspan="2">Date</th>
      <th colspan="2">0-8</th>
    <th colspan="2">8-16</th>
    <th colspan="2">16-24</th>
    <th colspan="2">Total</th>
    <th colspan="2">% of Meal</th>
    <th rowspan="2" >Total</th>
        </tr>
    <tr>
    <th>N.M</th>
    <th>R.M</th>
         <th>N.M</th>
    <th>R.M</th>
         <th>N.M</th>
    <th>R.M</th>
         <th>N.M</th>
    <th>R.M</th>
         <th>N.M</th>
    <th>R.M</th>
    </tr>
<?php
   /* var_dump($_POST);*/
if(isset($_POST['period']))
{
	$D1 = trim($_POST['Dep_Date']);
	
    $D2 = trim($_POST['Arr_Date']);
   //echo ($D1);
   $D3 = date("d/m/Y", strtotime($D1));
   $D4 = date("d/m/Y", strtotime($D2));
        $startTime = strtotime($D1);
        $endTime = strtotime( $D2 );
    $x1=0;
    $x2=0;
    $x3=0;
    $x4=0;
    $x5=0;
    $x6=0;
    $x7=0;
    $x8=0;
    $x9=0;
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    
  $date = date( 'Y-m-d', $i );
       //echo ($date);
  $date1 = date( 'd-m-Y', $i ); 
     echo "<tr>";
     echo "<th>$date1</th>";
        $cmd1="select count(id) as ration from history_card where purpose='Ration with Packed Meal' and dated='$date' and time between '00:00' and '08:00'";  
  $res1=mysqli_query($conn,$cmd1);
    $rec1=mysqli_fetch_assoc($res1);
    $ration1=$rec1['ration'];
        $x1+=$ration1;
          echo "<td>$ration1</td>"; 
      $cmd="select count(id) as subs from history_card where (purpose='Lunch-' or purpose='Dinner-' or purpose='Break-Fast-') and dated='$date' and time between '00:00' and '08:00'";  
  $res=mysqli_query($conn,$cmd);
    $rec=mysqli_fetch_assoc($res);
    $sub1=$rec['subs'];
        $x2+=$sub1;
      echo "<td>$sub1</td>"; 
        $cmd1="select count(id) as ration from history_card where purpose='Ration with Packed Meal' and dated='$date' and time between '08:01' and '16:00'";  
  $res1=mysqli_query($conn,$cmd1);
    $rec1=mysqli_fetch_assoc($res1);
    $ration2=$rec1['ration'];
          $x3+=$ration2;
          echo "<td>$ration2</td>"; 
      $cmd="select count(id) as subs from history_card where (purpose='Lunch-' or purpose='Dinner-' or purpose='Break-Fast-') and dated='$date' and time between '08:01' and '16:00'";  
  $res=mysqli_query($conn,$cmd);
    $rec=mysqli_fetch_assoc($res);
    $sub2=$rec['subs'];
           $x4+=$sub2;
      echo "<td>$sub2</td>"; 
        $cmd1="select count(id) as ration from history_card where purpose='Ration with Packed Meal' and dated='$date' and time between '16:01' and '24:00'";  
  $res1=mysqli_query($conn,$cmd1);
    $rec1=mysqli_fetch_assoc($res1);
    $ration3=$rec1['ration'];
         $x5+=$ration3; 
          echo "<td>$ration3</td>"; 
      $cmd="select count(id) as subs from history_card where (purpose='Lunch-' or purpose='Dinner-' or purpose='Break-Fast-') and dated='$date' and time between '16:01' and '24:00'";  
  $res=mysqli_query($conn,$cmd);
    $rec=mysqli_fetch_assoc($res);
    $sub3=$rec['subs'];
         $x6+=$sub3; 
      echo "<td>$sub3</td>"; 
        $total_sub=($sub1+$sub2+$sub3);
        $total_ration=($ration1+$ration2+$ration3);
        $total=($total_sub+$total_ration);
        $x7+=$total_sub;
        $x8+=$total_ration;
        $x9+=$total;
         echo "<td>$total_ration</td>"; 
      echo "<td>$total_sub</td>"; 
     $p_sub=round ($total_sub*100/$total);
     $p_ration=round ($total_ration*100/$total);
         echo "<td>$p_ration</td>"; 
      echo "<td>$p_sub</td>"; 
      echo "<td>$total</td>"; 
    echo "</tr>";    
   }
 
   echo "<tr>";
    $x10=round($x8*100/$x9);
    $x11=round($x7*100/$x9);
   echo "<td>Total</td>"; 
   echo "<td>$x1</td>"; 
   echo "<td>$x2</td>"; 
   echo "<td>$x3</td>"; 
   echo "<td>$x4</td>"; 
   echo "<td>$x5</td>"; 
   echo "<td>$x6</td>"; 
   echo "<td>$x8</td>"; 
   echo "<td>$x7</td>"; 
   echo "<td>$x10</td>"; 
   echo "<td>$x11</td>"; 
   echo "<td>$x9</td>"; 
 
 
 
 echo "</tr>";   
    
}
        
      
        
        
    ?>
    
    
    
    
    
     </table>
        </div>
    </body>
</html>
<?php

    }
    else
    {
        header("location:../Index.php");
        die();
    }
?>