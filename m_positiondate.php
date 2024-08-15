
<html>
    <head>
         <?php require_once("head.php")?>
         <?php require_once("dbcon.php")?>
        <style>
            th{
                font-size: 20Px;
            }
            table{
               
               
              
            }
            #A{
                text-align: center;
                
                
            }
           th,td{
                text-align: center;
                font-size: 20Px;
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
                
            }
         </style>
        
    </head>
    <body>
 <div class="container bg-light col-sm-6">
    <h2>Occupancy Position of TDL Running Room </h2>
<table border="1" align="center">
    <tr>
    <th>Date</th>
    <th>LPM/LPP</th>
    <th>LPG</th>
    <th>SHT</th>
    <th>ALP</th>
    <th>Guard</th>
    <th>CLI</th>
    <th>Total</th>
        </tr>
<?php
   /* var_dump($_POST);*/
if(isset($_POST['period']))
{
	$D1 = trim($_POST['Dep_Date']);
	
    $D2 = trim($_POST['Arr_Date']);
    $sub1=0;
    $ration1=0;
   //echo ($D1);
   $D3 = date("d/m/Y", strtotime($D1));
   $D4 = date("d/m/Y", strtotime($D2));
        $startTime = strtotime($D1);
        $endTime = strtotime( $D2 );
   $lpm3=0; 
        $lpg3=0;
           $sht3=0;
           $alp3=0;
             $gd3=0;
             $cli3=0;
            $total3=0;
    
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    
  $date = date( 'Y-m-d', $i );
       //echo ($date);
  $date2 = date( 'd-m-Y', $i ); 
     $cmd5="select count(id) as lpm from main where date_allottment='$date' and crew_id<>'UM' and (designation='LPP' or designation='LPM' or designation='SLPP')";
    $res5=mysqli_query($conn,$cmd5);
    $rec5=mysqli_fetch_assoc($res5);
    $lpm=$rec5['lpm'];
    $cmd5a="select count(id) as lpm1 from main where (date_allottment<'$date')  and crew_id<>'UM' and (date_vacated='0' or date_vacated='$date') and (designation='LPP' or designation='LPM' or designation='SLPP')";
    $res5a=mysqli_query($conn,$cmd5a);
    $rec5a=mysqli_fetch_assoc($res5a);
    $lpm1=$rec5a['lpm1'];
    $lpm2=($lpm+$lpm1);
        $lpm3+=$lpm2;
    $cmd6="select count(id) as lpg from main where date_allottment='$date' and crew_id<>'UM' and (designation='LPG' or designation='SLPG' or designation='LP')";
    $res6=mysqli_query($conn,$cmd6);
    $rec6=mysqli_fetch_assoc($res6);
    $lpg=$rec6['lpg'];
     $cmd6a="select count(id) as lpg1 from main where date_allottment<'$date' and (date_vacated='0' or date_vacated='$date') and crew_id<>'UM' and (designation='LPG' or designation='SLPG' or designation='LP')";
    $res6a=mysqli_query($conn,$cmd6a);
    $rec6a=mysqli_fetch_assoc($res6a);
    $lpg1=$rec6a['lpg1'];
     $lpg2=($lpg+$lpg1);
        $lpg3+=$lpg2;
    $cmd7="select count(id) as sht from main where (date_allottment='$date' )  and crew_id<>'UM' and  (designation='SHT' or designation='SSHT')";
    $res7=mysqli_query($conn,$cmd7);
    $rec7=mysqli_fetch_assoc($res7);
    $sht=$rec7['sht'];
    $cmd7a="select count(id) as sht1 from main where (date_allottment<'$date' )  and crew_id<>'UM' and (date_vacated='0' or date_vacated='$date') and (designation='SHT' or designation='SSHT')";
    $res7a=mysqli_query($conn,$cmd7a);
    $rec7a=mysqli_fetch_assoc($res7a);
    $sht1=$rec7a['sht1'];
    $sht2=($sht+$sht1);
        $sht3+=$sht2;
    $cmd8="select count(id) as alp from main where (date_allottment='$date')  and crew_id<>'UM' and (designation='ALP' or designation='SALP')";
    $res8=mysqli_query($conn,$cmd8);
    $rec8=mysqli_fetch_assoc($res8);
    $alp=$rec8['alp'];
     $cmd8a="select count(id) as alp1 from main where (date_allottment<'$date')  and crew_id<>'UM' and (date_vacated='0' or date_vacated='$date') and (designation='ALP' or designation='SALP')";
    $res8a=mysqli_query($conn,$cmd8a);
    $rec8a=mysqli_fetch_assoc($res8a);
    $alp1=$rec8a['alp1'];
    $alp2=($alp+$alp1);
        $alp3+=$alp2;
    $cmd9="select count(id) as gd from main where (date_allottment='$date')  and crew_id<>'UM' and (designation='SGD' or designation='GD' or designation='GDP' or designation='GDM' or designation='SGDP')";
    $res9=mysqli_query($conn,$cmd9);
    $rec9=mysqli_fetch_assoc($res9);
    $gd=$rec9['gd'];
    $cmd9a="select count(id) as gd1 from main where (date_allottment<'$date')  and crew_id<>'UM' and (date_vacated='0' or date_vacated='$date') and (designation='SGD' or designation='GD' or designation='GDP' or designation='GDM' or designation='SGDP')";
    $res9a=mysqli_query($conn,$cmd9a);
    $rec9a=mysqli_fetch_assoc($res9a);
    $gd1=$rec9a['gd1'];
    $gd2=($gd+$gd1);
        $gd3+=$gd2;
    $cmd10="select count(id) as cli from main where (date_allottment='$date')  and crew_id<>'UM' and  designation='CLI'";
    $res10=mysqli_query($conn,$cmd10);
    $rec10=mysqli_fetch_assoc($res10);
    $cli=$rec10['cli'];
    $cmd10a="select count(id) as cli1 from main where (date_allottment<'$date')  and crew_id<>'UM' and (date_vacated='0' or date_vacated='$date') and designation='CLI'";
    $res10a=mysqli_query($conn,$cmd10a);
    $rec10a=mysqli_fetch_assoc($res10a);
    $cli1=$rec10a['cli1'];
    $cli2=($cli+$cli1);
        $cli3+=$cli2;
    //$gt=($total+$total1);
        //$total=($lpm2+$lpg2+$sht2+$alp2+$gd2+$cli2);
      $cmd10="select count(id) as t1 from main where (date_allottment='$date')  and crew_id<>'UM'";
    $res10=mysqli_query($conn,$cmd10);
    $rec10=mysqli_fetch_assoc($res10);
    $t1=$rec10['t1'];
    $cmd10a="select count(id) as t2 from main where (date_allottment<'$date')  and crew_id<>'UM' and (date_vacated='0' or date_vacated='$date')";
    $res10a=mysqli_query($conn,$cmd10a);
    $rec10a=mysqli_fetch_assoc($res10a);
    $t2=$rec10a['t2'];   
        $total=($t1+$t2);        
        
        $total3+=$total;
       /* echo ($lpm);
        echo "<br>";
        echo ($lpg);
        echo "<br>";
        echo ($sht);
        echo "<br>";
        echo ($alp);
        echo "<br>";
        echo ($gd);
        echo "<br>";
        echo ($cli);*/
        //echo ($gt);
     $cmd2="select MAX(total_occupancy) as maximum from summary where date='$date'";
    require_once('dbcon.php');
    $res2=mysqli_query($conn,$cmd2);
    $rec2=mysqli_fetch_assoc($res2);
    $maximum=$rec2['maximum'];
        $cmd3="select * from summary where total_occupancy='$maximum' and date='$date'";
    require_once('dbcon.php');
    $res3=mysqli_query($conn,$cmd3);
    $rec3=mysqli_fetch_assoc($res3);
    $date1=$rec3['date'];
    $time=$rec3['time'];
  ?>
 
   
        <tr>
        <th><?php echo $date2 ?></th>
        <td><?php echo $lpm2 ?></td> 
         <td><?php echo $lpg2 ?></td> 
            <td><?php echo $sht2 ?></td> 
            <td><?php echo $alp2 ?></td>
              <td><?php echo $gd2 ?></td> 
              <td><?php echo $cli2 ?></td> 
             <td><?php echo $total ?></td>        
        </tr>
        
      
         
       
      
           
    
    
    
    <?php
    
    
}
    ?>
     <tr>
        <th>Total</th>
        <th><?php echo $lpm3 ?></th> 
         <th><?php echo $lpg3 ?></th> 
            <th><?php echo $sht3 ?></th> 
            <th><?php echo $alp3 ?></th>
              <th><?php echo $gd3 ?></th> 
              <th><?php echo $cli3 ?></th> 
             <th><?php echo $total3 ?></th>        
        </tr>  
    <?php
}
    ?>
    
    
    
    
    
     </table>
        </div>
    </body>
</html>

