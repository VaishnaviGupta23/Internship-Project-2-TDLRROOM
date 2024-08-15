<html>
    
<head>
    <?php require_once("head.php") ?>
    <style>
        h2{
            text-align: center;
            
        }
        td,th{
            text-align: center;
        }
        table{
            width: 50%;
        }
    
    </style>
    
    </head>
    <body>
        <h2>Current Occupancy Position at TDL Running Room</h2>
    <table border="1" align='center'>
     <tr>
      <th>SL</th>  
      <th>HQ</th>  
      <th>LPM</th>  
      <th>LPP</th>  
      <th>LPG</th>  
      <th>SALP</th>  
      <th>ALP</th>  
      <th>GDM</th>  
      <th>GDP</th>  
      <th>GD</th>  
      <th>CLI</th>  
      <th>Total</th>  
        </tr>   
    <?php 
    require_once("dbcon.php"); 
    $x=0;
    $x1=0;
    $x2=0;
    $x3=0;
    $x4=0;
    $x5=0;
    $x6=0;
    $x7=0;
    $x8=0;
    $x9=0;
    $x10=0;
   
    
    $cmd1="select distinct(hq) from room_number where hq<>'0'";      
    $res1=mysqli_query($conn,$cmd1);
    while($rec1=mysqli_fetch_assoc($res1)){
        $x++;
    $hq=$rec1['hq'];
    $cmd2="select count(id) as lpm from room_number where hq='$hq' and designation='LPM' and status='1'";
    $res2=mysqli_query($conn,$cmd2);
    $rec2=mysqli_fetch_assoc($res2);
    $lpm=$rec2['lpm'];
        $x1+=$lpm;
      $cmd2="select count(id) as lpp from room_number where hq='$hq' and designation='LPP' and status='1'";
    $res2=mysqli_query($conn,$cmd2);
    $rec2=mysqli_fetch_assoc($res2);
    $lpp=$rec2['lpp'];
        $x2+=$lpp;
    $cmd2="select count(id) as lpg from room_number where hq='$hq' and designation='LPG' and status='1'";
    $res2=mysqli_query($conn,$cmd2);
    $rec2=mysqli_fetch_assoc($res2);
    $lpg=$rec2['lpg'];
        $x3+=$lpg;
         $cmd2="select count(id) as salp from room_number where hq='$hq' and designation='SALP' and status='1'";
    $res2=mysqli_query($conn,$cmd2);
    $rec2=mysqli_fetch_assoc($res2);
    $salp=$rec2['salp'];
        $x4+=$salp;
    $cmd2="select count(id) as alp from room_number where hq='$hq' and designation='ALP' and status='1'";
    $res2=mysqli_query($conn,$cmd2);
    $rec2=mysqli_fetch_assoc($res2);
    $alp=$rec2['alp'];
        $x5+=$alp;
    $cmd2="select count(id) as gdm from room_number where hq='$hq' and designation='GDM' and status='1'";
    $res2=mysqli_query($conn,$cmd2);
    $rec2=mysqli_fetch_assoc($res2);
    $gdm=$rec2['gdm'];
        $x6+=$gdm;
    $cmd2="select count(id) as gdp from room_number where hq='$hq' and (designation='GDP' or designation='SGDP') and status='1'";
    $res2=mysqli_query($conn,$cmd2);
    $rec2=mysqli_fetch_assoc($res2);
    $gdp=$rec2['gdp'];
        $x7+=$gdp;
     $cmd2="select count(id) as ggd from room_number where hq='$hq' and (designation='GD' or designation='SGD') and status='1'";
    $res2=mysqli_query($conn,$cmd2);
    $rec2=mysqli_fetch_assoc($res2);
    $ggd=$rec2['ggd'];
        $x8+=$ggd;
         $cmd2="select count(id) as cli from room_number where hq='$hq' and designation='CLI' and status='1'";
    $res2=mysqli_query($conn,$cmd2);
    $rec2=mysqli_fetch_assoc($res2);
    $cli=$rec2['cli'];
         $x10+=$cli;
    $total=($lpm+$lpp+$lpg+$salp+$alp+$gdm+$gdp+$ggd+$cli);
     $x9+=$total;
    echo"<tr>";
     echo "<td>$x</td>" ;  
     echo "<td>$hq</td>" ;  
     echo "<td>$lpm</td>" ;  
     echo "<td>$lpp</td>" ;  
     echo "<td>$lpg</td>" ;  
     echo "<td>$salp</td>" ;  
     echo "<td>$alp</td>" ;  
     echo "<td>$gdm</td>" ;  
     echo "<td>$gdp</td>" ;  
     echo "<td>$ggd</td>" ;  
     echo "<td>$cli</td>" ;  
     echo "<td>$total</td>" ;  
        
        
        
    echo"</tr>";
        
        
        
    }
        
    echo"<tr>";
     echo "<td colspan='2'>Total</td>" ;  
    
     echo "<td>$x1</td>" ;  
     echo "<td>$x2</td>" ;  
     echo "<td>$x3</td>" ;  
     echo "<td>$x4</td>" ;  
     echo "<td>$x5</td>" ;  
     echo "<td>$x6</td>" ;  
     echo "<td>$x7</td>" ;  
     echo "<td>$x8</td>" ;  
     echo "<td>$x10</td>" ;  
     echo "<td>$x9</td>" ;  
        
        
        
    echo"</tr>";    
        
        
        
        
        
        
        
        ?>
    
    </table>
    
    
    
    
    </body>




</html>