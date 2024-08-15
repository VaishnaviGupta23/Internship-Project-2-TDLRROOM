<html>
<head>
    <style>
        h2{
            text-align: center;
                
        }
        table{
            border-collapse: collapse;
        }
        th,td{
            font-size: 30Px;
            text-align: center;
            width: 500Px;
        }
    
    </style>
    
    </head>
    <body>
         <?php
        if(isset($_POST['period']))
{
	$date = trim($_POST['Dep_Date']);
	
      
        $date2=date ('d-m-Y', strtotime($date));
         require_once('dbcon.php');
        /*$cmd4="select count(id) as total from main where date_allottment='$date' and crew_id<>'UM'";
    $res4=mysqli_query($conn,$cmd4);
    $rec4=mysqli_fetch_assoc($res4);
    $total=$rec4['total'];*/
   
    
    $cmd5="select count(id) as lpm from main where date_allottment='$date' and crew_id<>'UM' and (designation='LPP' or designation='LPM' or designation='SLPP')";
    $res5=mysqli_query($conn,$cmd5);
    $rec5=mysqli_fetch_assoc($res5);
    $lpm=$rec5['lpm'];
    $cmd5a="select count(id) as lpm1 from main where (date_allottment<'$date')  and crew_id<>'UM' and (date_vacated='0' or date_vacated='$date') and (designation='LPP' or designation='LPM' or designation='SLPP')";
    $res5a=mysqli_query($conn,$cmd5a);
    $rec5a=mysqli_fetch_assoc($res5a);
    $lpm1=$rec5a['lpm1'];
    $lpm2=($lpm+$lpm1);
    $cmd6="select count(id) as lpg from main where date_allottment='$date' and crew_id<>'UM' and (designation='LPG' or designation='SLPG' or designation='LP')";
    $res6=mysqli_query($conn,$cmd6);
    $rec6=mysqli_fetch_assoc($res6);
    $lpg=$rec6['lpg'];
     $cmd6a="select count(id) as lpg1 from main where date_allottment<'$date' and (date_vacated='0' or date_vacated='$date') and crew_id<>'UM' and (designation='LPG' or designation='SLPG' or designation='LP')";
    $res6a=mysqli_query($conn,$cmd6a);
    $rec6a=mysqli_fetch_assoc($res6a);
    $lpg1=$rec6a['lpg1'];
     $lpg2=($lpg+$lpg1);
    $cmd7="select count(id) as sht from main where (date_allottment='$date' )  and crew_id<>'UM' and  designation='SHT'";
    $res7=mysqli_query($conn,$cmd7);
    $rec7=mysqli_fetch_assoc($res7);
    $sht=$rec7['sht'];
    $cmd7a="select count(id) as sht1 from main where (date_allottment<'$date' )  and crew_id<>'UM' and (date_vacated='0' or date_vacated='$date') and designation='SHT'";
    $res7a=mysqli_query($conn,$cmd7a);
    $rec7a=mysqli_fetch_assoc($res7a);
    $sht1=$rec7a['sht1'];
    $sht2=($sht+$sht1);
    $cmd8="select count(id) as alp from main where (date_allottment='$date')  and crew_id<>'UM' and (designation='ALP' or designation='SALP')";
    $res8=mysqli_query($conn,$cmd8);
    $rec8=mysqli_fetch_assoc($res8);
    $alp=$rec8['alp'];
     $cmd8a="select count(id) as alp1 from main where (date_allottment<'$date')  and crew_id<>'UM' and (date_vacated='0' or date_vacated='$date') and (designation='ALP' or designation='SALP')";
    $res8a=mysqli_query($conn,$cmd8a);
    $rec8a=mysqli_fetch_assoc($res8a);
    $alp1=$rec8a['alp1'];
    $alp2=($alp+$alp1);
    $cmd9="select count(id) as gd from main where (date_allottment='$date')  and crew_id<>'UM' and (designation='SGD' or designation='GD' or designation='GDP' or designation='GDM' or designation='SGDP')";
    $res9=mysqli_query($conn,$cmd9);
    $rec9=mysqli_fetch_assoc($res9);
    $gd=$rec9['gd'];
    $cmd9a="select count(id) as gd1 from main where (date_allottment<'$date')  and crew_id<>'UM' and (date_vacated='0' or date_vacated='$date') and (designation='SGD' or designation='GD' or designation='GDP' or designation='GDM' or designation='SGDP')";
    $res9a=mysqli_query($conn,$cmd9a);
    $rec9a=mysqli_fetch_assoc($res9a);
    $gd1=$rec9a['gd1'];
    $gd2=($gd+$gd1);
    $cmd10="select count(id) as cli from main where (date_allottment='$date')  and crew_id<>'UM' and  designation='CLI'";
    $res10=mysqli_query($conn,$cmd10);
    $rec10=mysqli_fetch_assoc($res10);
    $cli=$rec10['cli'];
    $cmd10a="select count(id) as cli1 from main where (date_allottment<'$date')  and crew_id<>'UM' and (date_vacated='0' or date_vacated='$date') and designation='CLI'";
    $res10a=mysqli_query($conn,$cmd10a);
    $rec10a=mysqli_fetch_assoc($res10a);
    $cli1=$rec10a['cli1'];
    $cli2=($cli+$cli1);
    //$gt=($total+$total1);
        $total=($lpm2+$lpg2+$sht2+$alp2+$gd2+$cli2);
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
   /*For DER*/ 
            
            
            
            
            
        }
        ?>
        
<h2>Occupancy Position of TDL Running Room for the Date- <?php echo $date2 ?></h2>
    <table align='center' border="2">
        <tr>
        <th>LPM/LPP</th>
        <td><?php echo $lpm2 ?></td>        
        </tr>
        <tr>
        <th>LPG</th>
        <td><?php echo $lpg2 ?></td>        
        </tr>
        <tr>
        <th>LPS</th>
        <td><?php echo $sht2 ?></td>        
        </tr>
        <tr>
        <th>ALP</th>
        <td><?php echo $alp2 ?></td>        
        </tr>
        <tr>
        <th>Guard</th>
        <td><?php echo $gd2 ?></td>        
        </tr>
        <tr>
        <th>CLI</th>
        <td><?php echo $cli2 ?></td>        
        </tr>
        <tr>
        <th>Total</th>
        <td><?php echo $total ?></td>        
        </tr>
        <tr>
        <th>Peak</th>
        <th><?php echo $maximum ?> AT <?php echo $time ?></th>        
        </tr>
        
        </table>
    <br>
         <?php
        if(isset($_POST['period']))
{
	$date = trim($_POST['Dep_Date']);
	
   
	
        
     
   
      
        $date2=date ('d-m-Y', strtotime($date));
         require_once('dbcon.php');
        /*$cmd4="select count(id) as total from main where date_allottment='$date' and crew_id<>'UM'";
    $res4=mysqli_query($conn,$cmd4);
    $rec4=mysqli_fetch_assoc($res4);
    $total=$rec4['total'];*/
   
    
   /* $cmd5="select count(id) as lpm from main where date_allottment='$date' and crew_id<>'UM' and (designation='LPP' or designation='LPM' or designation='SLPP')";
    $res5=mysqli_query($conn,$cmd5);
    $rec5=mysqli_fetch_assoc($res5);
    $lpm=$rec5['lpm'];
    $cmd5a="select count(id) as lpm1 from main where (date_allottment<'$date')  and crew_id<>'UM' and (date_vacated='0' or date_vacated='$date') and (designation='LPP' or designation='LPM' or designation='SLPP')";
    $res5a=mysqli_query($conn,$cmd5a);
    $rec5a=mysqli_fetch_assoc($res5a);
    $lpm1=$rec5a['lpm1'];
    $lpm2=($lpm+$lpm1);*/
    $cmd6="select count(id) as lpg from main where date_allottment='$date' and crew_id<>'UM' and (designation='LPG' or designation='SLPG' or designation='LP') and (type_wkg='spare' or type_wkg='working' or type_wkg='LR') ";
    $res6=mysqli_query($conn1,$cmd6);
    $rec6=mysqli_fetch_assoc($res6);
    $lpg=$rec6['lpg'];
     $cmd6a="select count(id) as lpg1 from main where date_allottment<'$date' and (date_vacated='0' or date_vacated='$date') and crew_id<>'UM' and (designation='LPG' or designation='SLPG' or designation='LP' or type_wkg='LR' ) and (type_wkg='spare' or type_wkg='working')";
    $res6a=mysqli_query($conn1,$cmd6a);
    $rec6a=mysqli_fetch_assoc($res6a);
    $lpg1=$rec6a['lpg1'];
     $lpg2=($lpg+$lpg1);
   
    $cmd8="select count(id) as alp from main where (date_allottment='$date')  and crew_id<>'UM' and (designation='ALP' or designation='SALP') and (type_wkg='spare' or type_wkg='working' or type_wkg='LR')";
    $res8=mysqli_query($conn1,$cmd8);
    $rec8=mysqli_fetch_assoc($res8);
    $alp=$rec8['alp'];
     $cmd8a="select count(id) as alp1 from main where (date_allottment<'$date')  and crew_id<>'UM' and (date_vacated='0' or date_vacated='$date') and (designation='ALP' or designation='SALP') and (type_wkg='spare' or type_wkg='working' or type_wkg='LR')";
    $res8a=mysqli_query($conn1,$cmd8a);
    $rec8a=mysqli_fetch_assoc($res8a);
    $alp1=$rec8a['alp1'];
    $alp2=($alp+$alp1);
    $cmd9="select count(id) as gd from main where (date_allottment='$date')  and crew_id<>'UM' and (designation='SGD' or designation='GD' or designation='GDP' or designation='GDM' or designation='SGDP')";
    $res9=mysqli_query($conn1,$cmd9);
    $rec9=mysqli_fetch_assoc($res9);
    $gd=$rec9['gd'];
    $cmd9a="select count(id) as gd1 from main where (date_allottment<'$date')  and crew_id<>'UM' and (date_vacated='0' or date_vacated='$date') and (designation='SGD' or designation='GD' or designation='GDP' or designation='GDM' or designation='SGDP')";
    $res9a=mysqli_query($conn1,$cmd9a);
    $rec9a=mysqli_fetch_assoc($res9a);
    $gd1=$rec9a['gd1'];
    $gd2=($gd+$gd1);
    $cmd10="select count(id) as cli from main where (date_allottment='$date')  and crew_id<>'UM' and  designation='CLI'";
    $res10=mysqli_query($conn1,$cmd10);
    $rec10=mysqli_fetch_assoc($res10);
    $cli=$rec10['cli'];
    $cmd10a="select count(id) as cli1 from main where (date_allottment<'$date')  and crew_id<>'UM' and (date_vacated='0' or date_vacated='$date') and designation='CLI'";
    $res10a=mysqli_query($conn1,$cmd10a);
    $rec10a=mysqli_fetch_assoc($res10a);
    $cli1=$rec10a['cli1'];
    $cli2=($cli+$cli1);
            
            
    $cmd8="select count(id) as et from main where (date_allottment='$date')  and crew_id<>'UM' and type_wkg='ET'";
    $res8=mysqli_query($conn1,$cmd8);
    $rec8=mysqli_fetch_assoc($res8);
    $et=$rec8['et'];
     $cmd8a="select count(id) as et1 from main where (date_allottment<'$date')  and crew_id<>'UM' and (date_vacated='0' or date_vacated='$date') and type_wkg='ET'";
    $res8a=mysqli_query($conn1,$cmd8a);
    $rec8a=mysqli_fetch_assoc($res8a);
    $et1=$rec8a['et1'];
    $et2=($et+$et1);
    
    $cmd8="select count(id) as con from main where (date_allottment='$date')  and crew_id<>'UM' and type_wkg='cond'";
    $res8=mysqli_query($conn1,$cmd8);
    $rec8=mysqli_fetch_assoc($res8);
    $con=$rec8['con'];
     $cmd8a="select count(id) as con1 from main where (date_allottment<'$date')  and crew_id<>'UM' and (date_vacated='0' or date_vacated='$date') and type_wkg='cond'";
    $res8a=mysqli_query($conn1,$cmd8a);
    $rec8a=mysqli_fetch_assoc($res8a);
    $con1=$rec8a['con1'];
    $con2=($con+$con1);
    //$gt=($total+$total1);
        $total=($lpg+$alp+$gd+$cli+$et+$con);
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
    $res2=mysqli_query($conn1,$cmd2);
    $rec2=mysqli_fetch_assoc($res2);
    $maximum=$rec2['maximum'];
        $cmd3="select * from summary where total_occupancy='$maximum' and date='$date'";
    require_once('dbcon.php');
    $res3=mysqli_query($conn1,$cmd3);
    $rec3=mysqli_fetch_assoc($res3);
    $date1=$rec3['date'];
    $time=$rec3['time'];
        }
        ?>
        
<h2>Occupancy Position of DER Running Room for the Date- <?php echo $date2 ?></h2>
    <table align='center' border="2">
        <tr>
        <th>LPG</th>
        <td><?php echo $lpg ?></td>        
        </tr>
        <tr>
        <th>ALP</th>
        <td><?php echo $alp ?></td>        
        </tr>
        <tr>
        <th>GD</th>
        <td><?php echo $gd ?></td>        
        </tr>
        <tr>
        <th>CLI</th>
        <td><?php echo $cli ?></td>        
        </tr>
        <tr>
        <th>ET</th>
        <td><?php echo $et ?></td>        
        </tr>
        <tr>
        <th>Conductor</th>
        <td><?php echo $con ?></td>        
        </tr>
        <tr>
        <th>Total</th>
        <td><?php echo $total ?></td>        
        </tr>
        <tr>
        <th>Peak</th>
        <th><?php echo $maximum ?> AT <?php echo $time ?></th>        
        </tr>
        
        </table>
    
    
    
    
    
    </body>
</html>