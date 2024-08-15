<html>
    <head>
         <?php require_once("head.php")?>
        <style>
            th{
                font-size: 20Px;
            }
            table{
                table-layout: fixed;
                width: 100%;
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
         </style>
        
    </head>
    <body>
 <div class="container bg-light col-sm-10">
    
<table border="1">
<?php
   /* var_dump($_POST);*/
if(isset($_POST['period']))
{
	$D1 = trim($_POST['Dep_Date']);
	
    $D2 = trim($_POST['Arr_Date']);
   
   $D3 = date("d/m/Y", strtotime($D1));
   $D4 = date("d/m/Y", strtotime($D2));
    $d6=date('F-Y',strtotime($D1));
   
       $startTime = strtotime($D1);
        $endTime = strtotime( $D2 );
   $day1=($endTime-$startTime);
    $day=($day1/86400+1);
   echo " <h4 id='A'>DAY WISE OCCUPANCY OF TUNDLA RUNNING ROOM FOR the Month of $d6 </h4>";
    
    
    
     echo "<tr>";
      echo "<th>HQ</th>"; 
       echo "<th>Date</th>"; 
   for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    
  $date = date( 'Y-m-d', $i );
       //echo ($date);
  $date1 = date( 'd', $i ); 
     
     echo "<th>$date1</th>";
       
   }
    echo "<th>Total</th>";
    echo "</tr>";
    echo "<tr>";
    echo "<th rowspan='3'>CNB</th>"; 
       echo "<th>LP</th>";
   $tcnblp=0;
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
        
    $date = date( 'Y-m-d', $i );     
    $cmd1="select count(ID) as cnblp from main where LEFT(crew_id, LENGTH(crew_id) - 5)='CNB'   and (designation='LPG' or designation='LPP' or designation='LPM' or designation='SLPG' or designation='SLPP') and date_allottment='$date'";
        require_once('dbcon.php');
        $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $cnblp=$rec1['cnblp'];
       echo "<td>$cnblp</td>"; 
        $tcnblp+=$cnblp;
      } 
     echo "<td>$tcnblp</td>";
     
    echo "</tr>";
 echo "<tr>";
   $tcnbalp=0;
       echo "<th>ALP</th>";
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    $date = date( 'Y-m-d', $i );     
    $cmd2="select count(ID) as cnbalp from main where LEFT(crew_id, LENGTH(crew_id) - 5)='CNB'   and (designation='ALP' or designation='SALP' or designation='SHT' or designation='SSHT') and date_allottment='$date'";
        require_once('dbcon.php');
        $res2=mysqli_query($conn,$cmd2);
        $rec2=mysqli_fetch_assoc($res2);
        $cnbalp=$rec2['cnbalp'];
       echo "<td>$cnbalp</td>";
       $tcnbalp+=$cnbalp; 
    }
     echo "<td>$tcnbalp</td>";
    
    echo "</tr>"; 
    echo "<tr>";
   $tcnbgd=0;
       echo "<th>GD</th>";
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    $date = date( 'Y-m-d', $i );     
    $cmd3="select count(ID) as cnbgd from main where LEFT(crew_id, LENGTH(crew_id) - 5)='CNB'   and (designation='GD' or designation='SGD' or designation='GDP' or designation='SGDP' or designation='GDM') and date_allottment='$date'";
        require_once('dbcon.php');
        $res3=mysqli_query($conn,$cmd3);
        $rec3=mysqli_fetch_assoc($res3);
        $cnbgd=$rec3['cnbgd'];
       echo "<td>$cnbgd</td>";
        $tcnbgd+=$cnbgd;
    } 
     echo "<td>$tcnbgd</td>";
    echo "</tr>"; 
     echo "<tr>";
    
    
    
    
    
    
    
  echo "<th rowspan='3'>GMC</th>"; 
       echo "<th>LP</th>";
   $tgmclp=0;
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
        
    $date = date( 'Y-m-d', $i );     
    $cmd1="select count(ID) as gmclp from main where  LEFT(crew_id, LENGTH(crew_id) - 5)='GMC'  and (designation='LPG' or designation='LPP' or designation='LPM' or designation='SLPG' or designation='SLPP') and date_allottment='$date'";
        require_once('dbcon.php');
        $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $gmclp=$rec1['gmclp'];
       echo "<td>$gmclp</td>"; 
        $tgmclp+=$gmclp;
      } 
     echo "<td>$tgmclp</td>";
     
    echo "</tr>";
 echo "<tr>";
   $tgmcalp=0;
       echo "<th>ALP</th>";
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    $date = date( 'Y-m-d', $i );     
    $cmd2="select count(ID) as gmcalp from main where LEFT(crew_id, LENGTH(crew_id) - 5)='GMC'  and (designation='ALP' or designation='SALP' or designation='SHT' or designation='SSHT') and date_allottment='$date'";
        require_once('dbcon.php');
        $res2=mysqli_query($conn,$cmd2);
        $rec2=mysqli_fetch_assoc($res2);
        $gmcalp=$rec2['gmcalp'];
       echo "<td>$gmcalp</td>";
       $tgmcalp+=$gmcalp; 
    }
     echo "<td>$tgmcalp</td>";
    
    echo "</tr>"; 
    echo "<tr>";
   $tgmcgd=0;
       echo "<th>GD</th>";
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    $date = date( 'Y-m-d', $i );     
    $cmd3="select count(ID) as gmcgd from main where LEFT(crew_id, LENGTH(crew_id) - 5)='GMC'  and (designation='GD' or designation='SGD' or designation='GDP' or designation='SGDP' or designation='GDM') and date_allottment='$date'";
        require_once('dbcon.php');
        $res3=mysqli_query($conn,$cmd3);
        $rec3=mysqli_fetch_assoc($res3);
        $gmcgd=$rec3['gmcgd'];
       echo "<td>$gmcgd</td>";
        $tgmcgd+=$gmcgd;
    } 
     echo "<td>$tgmcgd</td>";
    echo "</tr>"; 
     echo "<tr>";
    
    
    echo "<th rowspan='3'>CNBN</th>"; 
       echo "<th>LP</th>";
   $tCNBNlp=0;
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
        
    $date = date( 'Y-m-d', $i );     
    $cmd1="select count(ID) as CNBNlp from main where  LEFT(crew_id, LENGTH(crew_id) - 5)='CNBN'  and (designation='LPG' or designation='LPP' or designation='LPM' or designation='SLPG' or designation='SLPP') and date_allottment='$date'";
        require_once('dbcon.php');
        $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $CNBNlp=$rec1['CNBNlp'];
       echo "<td>$CNBNlp</td>"; 
        $tCNBNlp+=$CNBNlp;
      } 
     echo "<td>$tCNBNlp</td>";
     
    echo "</tr>";
 echo "<tr>";
   $tCNBNalp=0;
       echo "<th>ALP</th>";
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    $date = date( 'Y-m-d', $i );     
    $cmd2="select count(ID) as CNBNalp from main where LEFT(crew_id, LENGTH(crew_id) - 5)='CNBN'  and (designation='ALP' or designation='SALP' or designation='SHT' or designation='SSHT') and date_allottment='$date'";
        require_once('dbcon.php');
        $res2=mysqli_query($conn,$cmd2);
        $rec2=mysqli_fetch_assoc($res2);
        $CNBNalp=$rec2['CNBNalp'];
       echo "<td>$CNBNalp</td>";
       $tCNBNalp+=$CNBNalp; 
    }
     echo "<td>$tCNBNalp</td>";
    
    echo "</tr>"; 
    echo "<tr>";
   $tCNBNgd=0;
       echo "<th>GD</th>";
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    $date = date( 'Y-m-d', $i );     
    $cmd3="select count(ID) as CNBNgd from main where LEFT(crew_id, LENGTH(crew_id) - 5)='CNBN'  and (designation='GD' or designation='SGD' or designation='GDP' or designation='SGDP' or designation='GDM') and date_allottment='$date'";
        require_once('dbcon.php');
        $res3=mysqli_query($conn,$cmd3);
        $rec3=mysqli_fetch_assoc($res3);
        $CNBNgd=$rec3['CNBNgd'];
       echo "<td>$CNBNgd</td>";
        $tCNBNgd+=$CNBNgd;
    } 
     echo "<td>$tCNBNgd</td>";
    echo "</tr>"; 
     echo "<tr>";
    
    
    
     echo "<th rowspan='3'>IDH</th>"; 
       echo "<th>LP</th>";
   $tIDHlp=0;
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
        
    $date = date( 'Y-m-d', $i );     
    $cmd1="select count(ID) as IDHlp from main where  LEFT(crew_id, LENGTH(crew_id) - 5)='IDH'  and (designation='LPG' or designation='LPP' or designation='LPM' or designation='SLPG' or designation='SLPP') and date_allottment='$date'";
        require_once('dbcon.php');
        $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $IDHlp=$rec1['IDHlp'];
       echo "<td>$IDHlp</td>"; 
        $tIDHlp+=$IDHlp;
      } 
     echo "<td>$tIDHlp</td>";
     
    echo "</tr>";
 echo "<tr>";
   $tIDHalp=0;
       echo "<th>ALP</th>";
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    $date = date( 'Y-m-d', $i );     
    $cmd2="select count(ID) as IDHalp from main where LEFT(crew_id, LENGTH(crew_id) - 5)='IDH'  and (designation='ALP' or designation='SALP' or designation='SHT' or designation='SSHT') and date_allottment='$date'";
        require_once('dbcon.php');
        $res2=mysqli_query($conn,$cmd2);
        $rec2=mysqli_fetch_assoc($res2);
        $IDHalp=$rec2['IDHalp'];
       echo "<td>$IDHalp</td>";
       $tIDHalp+=$IDHalp; 
    }
     echo "<td>$tIDHalp</td>";
    
    echo "</tr>"; 
    echo "<tr>";
   $tIDHgd=0;
       echo "<th>GD</th>";
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    $date = date( 'Y-m-d', $i );     
    $cmd3="select count(ID) as IDHgd from main where LEFT(crew_id, LENGTH(crew_id) - 5)='IDH'  and (designation='GD' or designation='SGD' or designation='GDP' or designation='SGDP' or designation='GDM') and date_allottment='$date'";
        require_once('dbcon.php');
        $res3=mysqli_query($conn,$cmd3);
        $rec3=mysqli_fetch_assoc($res3);
        $IDHgd=$rec3['IDHgd'];
       echo "<td>$IDHgd</td>";
        $tIDHgd+=$IDHgd;
    } 
     echo "<td>$tIDHgd</td>";
    echo "</tr>"; 
     echo "<tr>";
    
   
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    $tagclp=0;
    echo "<th rowspan='3'>AGC</th>"; 
       echo "<th>LP</th>";
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    $date = date( 'Y-m-d', $i );     
    $cmd1="select count(ID) as agclp from main where (LEFT(crew_id, LENGTH(crew_id) - 5)='AGC')  and (designation='LPG' or designation='LPP' or designation='LPM' or designation='SLPG' or designation='SLPP') and date_allottment='$date'";
        require_once('dbcon.php');
        $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $agclp=$rec1['agclp'];
        $tagclp+=$agclp;
       echo "<td>$agclp</td>"; 
    } 
    echo "<td>$tagclp</td>"; 
    echo "</tr>";
 echo "<tr>";
   $tagcalp=0;
       echo "<th>ALP</th>";
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    $date = date( 'Y-m-d', $i );     
    $cmd2="select count(ID) as agcalp from main where (LEFT(crew_id, LENGTH(crew_id) - 5)='AGC')  and (designation='ALP' or designation='SALP' or designation='SHT' or designation='SSHT') and date_allottment='$date'";
        require_once('dbcon.php');
        $res2=mysqli_query($conn,$cmd2);
        $rec2=mysqli_fetch_assoc($res2);
        $agcalp=$rec2['agcalp'];
        $tagcalp+=$agcalp;
       echo "<td>$agcalp</td>"; 
    } 
    echo "<td>$tagcalp</td>";
    echo "</tr>"; 
    echo "<tr>";
   $tagcgd=0;
       echo "<th>GD</th>";
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    $date = date( 'Y-m-d', $i );     
    $cmd3="select count(ID) as agcgd from main where (LEFT(crew_id, LENGTH(crew_id) - 5)='AGC')  and (designation='GD' or designation='SGD' or designation='GDP' or designation='SGDP' or designation='GDM') and date_allottment='$date'";
        require_once('dbcon.php');
        $res3=mysqli_query($conn,$cmd3);
        $rec3=mysqli_fetch_assoc($res3);
        $agcgd=$rec3['agcgd'];
        $tagcgd+=$agcgd;
       echo "<td>$agcgd</td>"; 
    }
    echo "<td>$tagcgd</td>"; 
    
    echo "</tr>";
    echo "<tr>";
    $tggclp=0;
    echo "<th rowspan='3'>GGC</th>"; 
       echo "<th>LP</th>";
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    $date = date( 'Y-m-d', $i );     
    $cmd1="select count(ID) as ggclp from main where (LEFT(crew_id, LENGTH(crew_id) - 5)='GGC')  and (designation='LPG' or designation='LPP' or designation='LPM' or designation='SLPG' or designation='SLPP') and date_allottment='$date'";
        require_once('dbcon.php');
        $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $ggclp=$rec1['ggclp'];
        $tggclp+=$ggclp;
       echo "<td>$ggclp</td>"; 
    } 
     echo "<td>$tggclp</td>"; 
    echo "</tr>";
 echo "<tr>";
   $tggcalp=0;
       echo "<th>ALP</th>";
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    $date = date( 'Y-m-d', $i );     
    $cmd2="select count(ID) as ggcalp from main where (LEFT(crew_id, LENGTH(crew_id) - 5)='GGC')  and (designation='ALP' or designation='SALP' or designation='SHT' or designation='SSHT') and date_allottment='$date'";
        require_once('dbcon.php');
        $res2=mysqli_query($conn,$cmd2);
        $rec2=mysqli_fetch_assoc($res2);
        $ggcalp=$rec2['ggcalp'];
        $tggcalp+=$ggcalp;
       echo "<td>$ggcalp</td>"; 
    } 
     echo "<td>$tggcalp</td>"; 
    echo "</tr>"; 
    echo "<tr>";
   $tggcgd=0;
       echo "<th>GD</th>";
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    $date = date( 'Y-m-d', $i );     
    $cmd3="select count(ID) as ggcgd from main where (LEFT(crew_id, LENGTH(crew_id) - 5)='GGC')  and (designation='GD' or designation='SGD' or designation='GDP' or designation='SGDP' or designation='GDM') and date_allottment='$date'";
        require_once('dbcon.php');
        $res3=mysqli_query($conn,$cmd3);
        $rec3=mysqli_fetch_assoc($res3);
        $ggcgd=$rec3['ggcgd'];
        $tggcgd+=$ggcgd;
       echo "<td>$ggcgd</td>"; 
    } 
    echo "<td>$tggcgd</td>"; 
    echo "</tr>";  
    echo "<tr>";
    $taldlp=0;
    echo "<th rowspan='3'>PRYJ</th>"; 
       echo "<th>LP</th>";
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    $date = date( 'Y-m-d', $i );     
    $cmd1="select count(ID) as aldlp from main where (LEFT(crew_id, LENGTH(crew_id) - 5)='ALD' or LEFT(crew_id, LENGTH(crew_id) - 5)='PRYJ' )  and (designation='LPG' or designation='LPP' or designation='LPM' or designation='SLPG' or designation='SLPP') and date_allottment='$date'";
        require_once('dbcon.php');
        $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $aldlp=$rec1['aldlp'];
         $taldlp+= $aldlp;
       echo "<td>$aldlp</td>"; 
    } 
     echo "<td>$taldlp</td>"; 
    echo "</tr>";
 echo "<tr>";
   $taldalp=0;
       echo "<th>ALP</th>";
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    $date = date( 'Y-m-d', $i );     
    $cmd2="select count(ID) as aldalp from main where (LEFT(crew_id, LENGTH(crew_id) - 5)='ALD' or LEFT(crew_id, LENGTH(crew_id) - 5)='PRYJ' )  and (designation='ALP' or designation='SALP' or designation='SHT' or designation='SSHT') and date_allottment='$date'";
        require_once('dbcon.php');
        $res2=mysqli_query($conn,$cmd2);
        $rec2=mysqli_fetch_assoc($res2);
        $aldalp=$rec2['aldalp'];
        $taldalp+=$aldalp;
       echo "<td>$aldalp</td>"; 
    } 
    echo "<td>$taldalp</td>"; 
    echo "</tr>"; 
    echo "<tr>";
   $taldgd=0;
       echo "<th>GD</th>";
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    $date = date( 'Y-m-d', $i );     
    $cmd3="select count(ID) as aldgd from main where (LEFT(crew_id, LENGTH(crew_id) - 5)='ALD' or LEFT(crew_id, LENGTH(crew_id) - 5)='PRYJ' )  and (designation='GD' or designation='SGD' or designation='GDP' or designation='SGDP' or designation='GDM') and date_allottment='$date'";
        require_once('dbcon.php');
        $res3=mysqli_query($conn,$cmd3);
        $rec3=mysqli_fetch_assoc($res3);
        $aldgd=$rec3['aldgd'];
        $taldgd+=$aldgd;
       echo "<td>$aldgd</td>"; 
    } 
     echo "<td>$taldgd</td>"; 
    echo "</tr>"; 
    echo "<tr>";
    $TBKIlp=0;
    echo "<th rowspan='3'>BKI</th>"; 
       echo "<th>LP</th>";
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    $date = date( 'Y-m-d', $i );     
    $cmd1="select count(ID) as BKIlp from main where (LEFT(crew_id, LENGTH(crew_id) - 5)='BKI')  and (designation='LPG' or designation='LPP' or designation='LPM' or designation='SLPG' or designation='SLPP') and date_allottment='$date'";
        require_once('dbcon.php');
        $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $BKIlp=$rec1['BKIlp'];
        $TBKIlp+=$BKIlp;
       echo "<td>$BKIlp</td>"; 
    } 
    echo "<td>$TBKIlp</td>"; 
    echo "</tr>";
 echo "<tr>";
   $TBKIalp=0;
       echo "<th>ALP</th>";
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    $date = date( 'Y-m-d', $i );     
    $cmd2="select count(ID) as BKIalp from main where (LEFT(crew_id, LENGTH(crew_id) - 5)='BKI')  and (designation='ALP' or designation='SALP' or designation='SHT' or designation='SSHT') and date_allottment='$date'";
        require_once('dbcon.php');
        $res2=mysqli_query($conn,$cmd2);
        $rec2=mysqli_fetch_assoc($res2);
        $BKIalp=$rec2['BKIalp'];
        $TBKIalp+=$BKIalp;
       echo "<td>$BKIalp</td>"; 
    } 
     echo "<td>$TBKIalp</td>"; 
    echo "</tr>"; 
    echo "<tr>";
   $TBKIgd=0;
       echo "<th>GD</th>";
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    $date = date( 'Y-m-d', $i );     
    $cmd3="select count(ID) as BKIgd from main where (LEFT(crew_id, LENGTH(crew_id) - 5)='BKI')  and (designation='GD' or designation='SGD' or designation='GDP' or designation='SGDP' or designation='GDM') and date_allottment='$date'";
        require_once('dbcon.php');
        $res3=mysqli_query($conn,$cmd3);
        $rec3=mysqli_fetch_assoc($res3);
        $BKIgd=$rec3['BKIgd'];
        $TBKIgd+=$BKIgd;
       echo "<td>$BKIgd</td>"; 
    } 
     echo "<td>$TBKIgd</td>"; 
    echo "</tr>";  
    echo "<tr>";
    $TJPlp=0;
    echo "<th rowspan='3'>JP</th>"; 
       echo "<th>LP</th>";
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    $date = date( 'Y-m-d', $i );     
    $cmd1="select count(ID) as JPlp from main where (LEFT(crew_id, LENGTH(crew_id) - 5)='JP')  and (designation='LPG' or designation='LPP' or designation='LPM' or designation='SLPG' or designation='SLPP') and date_allottment='$date'";
        require_once('dbcon.php');
        $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $JPlp=$rec1['JPlp'];
        $TJPlp+=$JPlp;
       echo "<td>$JPlp</td>"; 
    } 
    echo "<td>$TJPlp</td>"; 
    echo "</tr>";
 echo "<tr>";
   $TJPalp=0;
       echo "<th>ALP</th>";
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    $date = date( 'Y-m-d', $i );     
    $cmd2="select count(ID) as JPalp from main where (LEFT(crew_id, LENGTH(crew_id) - 5)='JP')  and (designation='ALP' or designation='SALP' or designation='SHT' or designation='SSHT') and date_allottment='$date'";
        require_once('dbcon.php');
        $res2=mysqli_query($conn,$cmd2);
        $rec2=mysqli_fetch_assoc($res2);
        $JPalp=$rec2['JPalp'];
        $TJPalp+=$JPalp;
       echo "<td>$JPalp</td>"; 
    } 
    echo "<td>$TJPalp</td>"; 
    echo "</tr>"; 
    echo "<tr>";
   $TJPgd=0;
       echo "<th>GD</th>";
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    $date = date( 'Y-m-d', $i );     
    $cmd3="select count(ID) as JPgd from main where (LEFT(crew_id, LENGTH(crew_id) - 5)='JP')  and (designation='GD' or designation='SGD' or designation='GDP' or designation='SGDP' or designation='GDM') and date_allottment='$date'";
        require_once('dbcon.php');
        $res3=mysqli_query($conn,$cmd3);
        $rec3=mysqli_fetch_assoc($res3);
        $JPgd=$rec3['JPgd'];
         $TJPgd+= $JPgd;
       echo "<td>$JPgd</td>"; 
    } 
    echo "<td>$TJPgd</td>"; 
    echo "</tr>";  
    echo "<tr>";
    $TMTJlp=0;
    echo "<th rowspan='3'>MTJ</th>"; 
       echo "<th>LP</th>";
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    $date = date( 'Y-m-d', $i );     
    $cmd1="select count(ID) as MTJlp from main where (LEFT(crew_id, LENGTH(crew_id) - 5)='MTJ')  and (designation='LPG' or designation='LPP' or designation='LPM' or designation='SLPG' or designation='SLPP') and date_allottment='$date'";
        require_once('dbcon.php');
        $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $MTJlp=$rec1['MTJlp'];
        $TMTJlp+=$MTJlp;
       echo "<td>$MTJlp</td>"; 
    } 
     echo "<td>$TMTJlp</td>"; 
    echo "</tr>";
 echo "<tr>";
   $TMTJalp=0;
       echo "<th>ALP</th>";
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    $date = date( 'Y-m-d', $i );     
    $cmd2="select count(ID) as MTJalp from main where (LEFT(crew_id, LENGTH(crew_id) - 5)='MTJ')  and (designation='ALP' or designation='SALP' or designation='SHT' or designation='SSHT') and date_allottment='$date'";
        require_once('dbcon.php');
        $res2=mysqli_query($conn,$cmd2);
        $rec2=mysqli_fetch_assoc($res2);
        $MTJalp=$rec2['MTJalp'];
        $TMTJalp+=$MTJalp;
       echo "<td>$MTJalp</td>"; 
    } 
    echo "<td>$TMTJalp</td>"; 
    echo "</tr>"; 
    echo "<tr>";
   $TMTJgd=0;
       echo "<th>GD</th>";
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    $date = date( 'Y-m-d', $i );     
    $cmd3="select count(ID) as MTJgd from main where (LEFT(crew_id, LENGTH(crew_id) - 5)='MTJ')  and (designation='GD' or designation='SGD' or designation='GDP' or designation='SGDP' or designation='GDM') and date_allottment='$date'";
        require_once('dbcon.php');
        $res3=mysqli_query($conn,$cmd3);
        $rec3=mysqli_fetch_assoc($res3);
        $MTJgd=$rec3['MTJgd'];
        $TMTJgd+=$MTJgd;
       echo "<td>$MTJgd</td>"; 
    } 
    echo "<td>$TMTJgd</td>"; 
    echo "</tr>";  
    echo "<tr>";
    $TGZBlp=0;
    echo "<th rowspan='3'>GZB</th>"; 
       echo "<th>LP</th>";
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    $date = date( 'Y-m-d', $i );     
    $cmd1="select count(ID) as GZBlp from main where (LEFT(crew_id, LENGTH(crew_id) - 5)='GZB')  and (designation='LPG' or designation='LPP' or designation='LPM' or designation='SLPG' or designation='SLPP') and date_allottment='$date'";
        require_once('dbcon.php');
        $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $GZBlp=$rec1['GZBlp'];
        $TGZBlp+=$GZBlp;
       echo "<td>$GZBlp</td>"; 
    } 
    echo "<td>$TGZBlp</td>"; 
    echo "</tr>";
 echo "<tr>";
   $TGZBalp=0;
       echo "<th>ALP</th>";
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    $date = date( 'Y-m-d', $i );     
    $cmd2="select count(ID) as GZBalp from main where (LEFT(crew_id, LENGTH(crew_id) - 5)='GZB')  and (designation='ALP' or designation='SALP' or designation='SHT' or designation='SSHT') and date_allottment='$date'";
        require_once('dbcon.php');
        $res2=mysqli_query($conn,$cmd2);
        $rec2=mysqli_fetch_assoc($res2);
        $GZBalp=$rec2['GZBalp'];
        $TGZBalp+=$GZBalp;
       echo "<td>$GZBalp</td>"; 
    } 
    echo "<td>$TGZBalp</td>"; 
    echo "</tr>"; 
    echo "<tr>";
    $TGZBgd=0;
       echo "<th>GD</th>";
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    $date = date( 'Y-m-d', $i );     
    $cmd3="select count(ID) as GZBgd from main where (LEFT(crew_id, LENGTH(crew_id) - 5)='GZB')  and (designation='GD' or designation='SGD' or designation='GDP' or designation='SGDP' or designation='GDM') and date_allottment='$date'";
        require_once('dbcon.php');
        $res3=mysqli_query($conn,$cmd3);
        $rec3=mysqli_fetch_assoc($res3);
        $GZBgd=$rec3['GZBgd'];
        $TGZBgd+=$GZBgd;
       echo "<td>$GZBgd</td>"; 
    } 
     echo "<td>$TGZBgd</td>"; 
    echo "</tr>";  
    echo "<tr>";
    $TBElp=0;
    echo "<th rowspan='3'>BE</th>"; 
       echo "<th>LP</th>";
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    $date = date( 'Y-m-d', $i );     
    $cmd1="select count(ID) as BElp from main where (LEFT(crew_id, LENGTH(crew_id) - 5)='BE')  and (designation='LPG' or designation='LPP' or designation='LPM' or designation='SLPG' or designation='SLPP') and date_allottment='$date'";
        require_once('dbcon.php');
        $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $BElp=$rec1['BElp'];
        $TBElp+=$BElp;
       echo "<td>$BElp</td>"; 
    } 
    echo "<td>$TBElp</td>"; 
    echo "</tr>";
 echo "<tr>";
   $TBEalp=0;
       echo "<th>ALP</th>";
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    $date = date( 'Y-m-d', $i );     
    $cmd2="select count(ID) as BEalp from main where (LEFT(crew_id, LENGTH(crew_id) - 5)='BE')  and (designation='ALP' or designation='SALP' or designation='SHT' or designation='SSHT') and date_allottment='$date'";
        require_once('dbcon.php');
        $res2=mysqli_query($conn,$cmd2);
        $rec2=mysqli_fetch_assoc($res2);
        $BEalp=$rec2['BEalp'];
         $TBEalp+= $BEalp;
       echo "<td>$BEalp</td>"; 
    } 
      echo "<td>$TBEalp</td>";
    echo "</tr>"; 
    echo "<tr>";
   $TBEgd=0;
       echo "<th>GD</th>";
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    $date = date( 'Y-m-d', $i );     
    $cmd3="select count(ID) as BEgd from main where (LEFT(crew_id, LENGTH(crew_id) - 5)='BE')  and (designation='GD' or designation='SGD' or designation='GDP' or designation='SGDP' or designation='GDM') and date_allottment='$date'";
        require_once('dbcon.php');
        $res3=mysqli_query($conn,$cmd3);
        $rec3=mysqli_fetch_assoc($res3);
        $BEgd=$rec3['BEgd'];
         $TBEgd+= $BEgd;
       echo "<td>$BEgd</td>"; 
    } 
     echo "<td>$TBEgd</td>"; 
    echo "</tr>"; 
     echo "<tr>";
   $tcli=0;
       echo "<th colspan='2'>CLI</th>";
      
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    $date = date( 'Y-m-d', $i );     
    $cmd4="select count(ID) as cli from main where designation='CLI' and date_allottment='$date'";
        require_once('dbcon.php');
        $res4=mysqli_query($conn,$cmd4);
        $rec4=mysqli_fetch_assoc($res4);
        $cli=$rec4['cli'];
        $tcli+=$cli;
       echo "<td>$cli</td>"; 
    } 
    echo "<td>$tcli</td>"; 
    echo "</tr>";  
   
       echo "<tr>";
   $ttotal=0;
       echo "<th colspan='2'>Total</th>";
      $total=array();
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    $date = date( 'Y-m-d', $i );     
    $cmd5="select count(ID) as total from main where date_allottment='$date' and hq<>'0'";
        require_once('dbcon.php');
        $res5=mysqli_query($conn,$cmd5);
        $rec5=mysqli_fetch_assoc($res5);
        $total=$rec5['total'];
        $ttotal+=$total;
        $array[]=$total;
       echo "<td>$total</td>"; 
    }
    arsort($array);
    $Z=$array[0];
    //echo($Z);
    rsort($array);
    $Z1=$array[0];
    //echo($Z1);
    //var_dump($array);
    echo "<td>$ttotal</td>"; 
    echo "</tr>"; 
  $avg_occupancy=round($ttotal/$day);
    
    
      $ttotal_lp=0; 
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    $date = date( 'Y-m-d', $i );     
    $cmd6="select count(ID) as totallp from main where date_allottment='$date' and (designation='LPG' or designation='LPP' or designation='LPM' or designation='SLPG' or designation='SLPP')";
        require_once('dbcon.php');
        $res6=mysqli_query($conn,$cmd6);
        $rec6=mysqli_fetch_assoc($res6);
        $total_lp=$rec6['totallp'];
      $ttotal_lp+=$total_lp;
    } 
   
   $ttotal_alp=0; 
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    $date = date( 'Y-m-d', $i );     
    $cmd7="select count(ID) as totalalp from main where date_allottment='$date' and (designation='ALP' or designation='SALP' or designation='SHT' or designation='SSHT')";
        require_once('dbcon.php');
        $res7=mysqli_query($conn,$cmd7);
        $rec7=mysqli_fetch_assoc($res7);
        $total_alp=$rec7['totalalp'];
      $ttotal_alp+=$total_alp;
    }   
    $ttotal_gd=0; 
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    $date = date( 'Y-m-d', $i );     
    $cmd8="select count(ID) as totalgd from main where date_allottment='$date' and (designation='GD' or designation='SGD' or designation='GDP' or designation='SGDP' or designation='GDM')";
        require_once('dbcon.php');
        $res8=mysqli_query($conn,$cmd8);
        $rec8=mysqli_fetch_assoc($res8);
        $total_gd=$rec8['totalgd'];
      $ttotal_gd+=$total_gd;
    }    
   $ttotal_cli=0; 
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    $date = date( 'Y-m-d', $i );     
    $cmd9="select count(ID) as totalcli from main where date_allottment='$date' and (designation='CLI' )";
        require_once('dbcon.php');
        $res9=mysqli_query($conn,$cmd9);
        $rec9=mysqli_fetch_assoc($res9);
        $total_cli=$rec9['totalcli'];
      $ttotal_cli+=$total_cli;
    }
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    
  $date = date( 'Y-m-d', $i ); 
    
    
       
     $cmd2="select MAX(total_occupancy) as maximum from summary where date='$date'";
    require_once('dbcon.php');
    $res2=mysqli_query($conn,$cmd2);
    $rec2=mysqli_fetch_assoc($res2);
    $maximum=$rec2['maximum'];
   
    
    
    $cmd3="select * from summary where total_occupancy='$maximum' and date='$date'";
    require_once('dbcon.php');
    $res3=mysqli_query($conn,$cmd3);
    $rec3=mysqli_fetch_assoc($res3);
    $date=$rec3['date'];
    $time=$rec3['time'];
 
}
}
 
      ?>
    </table>
     <br>
     <div class="row">
         
     <h5 id="D">Total Loco Pilot- <?php echo $ttotal_lp ?></h5>
             
         
        
      <h5 id="C"> Total ALP-<?php echo $ttotal_alp ?></h5> 
             
         
      <h5 id="E"> Total Guard-<?php echo $ttotal_gd ?></h5> 
            
         
      <h5 id="F"> Total CLI-<?php echo $ttotal_cli ?></h5> 
            
         </div>
     <div class="row">
        
     <h5 id="D">Maximum Occupancy- <?php echo $Z1 ?></h5>
            
          
     <h5 id="C">Minimum Occupancy- <?php echo $Z ?></h5>
             
         
     <h5 id="E">Average Occupancy- <?php echo $avg_occupancy ?></h5>
             
          
     <h5 id="F">Total Occupancy- <?php echo $ttotal ?></h5>
             
     </div>
     <div class="row">
     <h5 id="D">Peak Hourly Occupancy- <?php echo $maximum ?></h5>
     <h5 id="E">Date- <?php echo $date ?></h5>
     <h5 id="E">Time- <?php echo $time ?></h5>
         
     
     </div>
        </div>
        
        
        
        
    </body>
</html>