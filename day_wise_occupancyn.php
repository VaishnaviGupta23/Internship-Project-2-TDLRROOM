<html>
    <head>
         <?php require_once("head.php")?>
        <style>
            th{
                font-size: 20Px;
            }
            table{
             
                width: 100%;
            }
            #A{
                text-align: center;
                
                
            }
            td,th{
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
 <div class="container bg-light col-sm-12">
     <h4 id="A">DAY WISE OCCUPANCY OF TUNDLA RUNNING ROOM</h4>
<table border="1" align='centre'>
<?php
   /* var_dump($_POST);*/
if(isset($_POST['period']))
{
	$D1 = trim($_POST['Dep_Date']);
	
    $D2 = trim($_POST['Arr_Date']);
   
   $D3 = date("d/m/Y", strtotime($D1));
   $D4 = date("d/m/Y", strtotime($D2));
   
       $startTime = strtotime($D1);
        $endTime = strtotime( $D2 );
   $day1=($endTime-$startTime);
    $day=($day1/86400+1);
    
     echo "<tr>";
      echo "<th rowspan='2'>HQ</th>"; 
     
   for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
    
  $date = date( 'Y-m-d', $i );
  $date2 = date( 'd-m-Y', $i );
       //echo ($date);
  $date1 = date( 'd', $i ); 
     
     echo "<th colspan='4'>$date2</th>";
       
   }
   
    echo "</tr>";
    
     echo "<tr>";
      for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
     
      echo "<th>LP</th>";
      echo "<th>ALP</th>";
      echo "<th>Gd</th>";
      echo "<th>Total</th>";
    
      }
   
     echo "</tr>";
    
    echo "<tr>";
    echo "<th>CNB</th>"; 
      
   $tcnblp=0;
   $tcnbalp=0;
   $tcnbgd=0;
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
        
    $date = date( 'Y-m-d', $i );     
    $cmd1="select count(ID) as cnblp from main where (hq='CNB')  and (designation='LPG' or designation='LPP' or designation='LPM' or designation='SLPG' or designation='SLPP') and date_allottment='$date'";
        require_once('dbcon.php');
        $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $cnblp=$rec1['cnblp'];
       echo "<td>$cnblp</td>"; 
        $tcnblp+=$cnblp;
      
        
        
       $cmd1="select count(ID) as cnbalp from main where (hq='CNB')  and (designation='ALP' or designation='SALP' or designation='SHT' or designation='SSHT') and date_allottment='$date'"; 
          $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $cnbalp=$rec1['cnbalp'];
          echo "<td>$cnbalp</td>"; 
        $tcnbalp+=$cnbalp;
       
       $cmd1="select count(ID) as cnbgd from main where (hq='CNB') and (designation='GD' or designation='SGD' or designation='GDP' or designation='SGDP' or designation='GDM') and date_allottment='$date'";
          $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $cnbgd=$rec1['cnbgd'];
          echo "<td>$cnbgd</td>"; 
        $tcnbgd+=$cnbgd;
        $total_cnb=($cnblp+$cnbalp+$cnbgd);
         echo "<th>$total_cnb</th>"; 
      
      } 
        echo "</tr>";
     echo "<tr>";
    echo "<th>GMC</th>"; 
      
   $tGMClp=0;
   $tGMCalp=0;
   $tGMCgd=0;
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
        
    $date = date( 'Y-m-d', $i );     
    $cmd1="select count(ID) as GMClp from main where (hq='GMC')  and (designation='LPG' or designation='LPP' or designation='LPM' or designation='SLPG' or designation='SLPP') and date_allottment='$date'";
        require_once('dbcon.php');
        $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $GMClp=$rec1['GMClp'];
       echo "<td>$GMClp</td>"; 
        $tGMClp+=$GMClp;
      
        
        
       $cmd1="select count(ID) as GMCalp from main where (hq='GMC')  and (designation='ALP' or designation='SALP' or designation='SHT' or designation='SSHT') and date_allottment='$date'"; 
          $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $GMCalp=$rec1['GMCalp'];
          echo "<td>$GMCalp</td>"; 
        $tGMCalp+=$GMCalp;
       
       $cmd1="select count(ID) as GMCgd from main where (hq='GMC' ) and (designation='GD' or designation='SGD' or designation='GDP' or designation='SGDP' or designation='GDM') and date_allottment='$date'";
          $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $GMCgd=$rec1['GMCgd'];
          echo "<td>$GMCgd</td>"; 
        $tGMCgd+=$GMCgd;
        $total_GMC=($GMClp+$GMCalp+$GMCgd);
         echo "<th>$total_GMC</th>"; 
      
      } 
        echo "</tr>";
       echo "<tr>";
    echo "<th>PRYJ</th>"; 
      
   $tPRYJlp=0;
   $tPRYJalp=0;
   $tPRYJgd=0;
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
        
    $date = date( 'Y-m-d', $i );     
    $cmd1="select count(ID) as PRYJlp from main where (hq='PRYJ' or hq='ALD')  and (designation='LPG' or designation='LPP' or designation='LPM' or designation='SLPG' or designation='SLPP') and date_allottment='$date'";
        require_once('dbcon.php');
        $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $PRYJlp=$rec1['PRYJlp'];
       echo "<td>$PRYJlp</td>"; 
        $tPRYJlp+=$PRYJlp;
      
        
        
       $cmd1="select count(ID) as PRYJalp from main where (hq='PRYJ' or hq='ALD')  and (designation='ALP' or designation='SALP' or designation='SHT' or designation='SSHT') and date_allottment='$date'"; 
          $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $PRYJalp=$rec1['PRYJalp'];
          echo "<td>$PRYJalp</td>"; 
        $tPRYJalp+=$PRYJalp;
       
       $cmd1="select count(ID) as PRYJgd from main where (hq='PRYJ' or hq='ALD' ) and (designation='GD' or designation='SGD' or designation='GDP' or designation='SGDP' or designation='GDM') and date_allottment='$date'";
          $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $PRYJgd=$rec1['PRYJgd'];
          echo "<td>$PRYJgd</td>"; 
        $tPRYJgd+=$PRYJgd;
        $total_PRYJ=($PRYJlp+$PRYJalp+$PRYJgd);
         echo "<th>$total_PRYJ</th>"; 
      
      } 
        echo "</tr>";
       echo "<tr>";
    echo "<th>AGC</th>"; 
      
   $tAGClp=0;
   $tAGCalp=0;
   $tAGCgd=0;
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
        
    $date = date( 'Y-m-d', $i );     
    $cmd1="select count(ID) as AGClp from main where (hq='AGC')  and (designation='LPG' or designation='LPP' or designation='LPM' or designation='SLPG' or designation='SLPP') and date_allottment='$date'";
        require_once('dbcon.php');
        $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $AGClp=$rec1['AGClp'];
       echo "<td>$AGClp</td>"; 
        $tAGClp+=$AGClp;
      
        
        
       $cmd1="select count(ID) as AGCalp from main where (hq='AGC')  and (designation='ALP' or designation='SALP' or designation='SHT' or designation='SSHT') and date_allottment='$date'"; 
          $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $AGCalp=$rec1['AGCalp'];
          echo "<td>$AGCalp</td>"; 
        $tAGCalp+=$AGCalp;
       
       $cmd1="select count(ID) as AGCgd from main where (hq='AGC' ) and (designation='GD' or designation='SGD' or designation='GDP' or designation='SGDP' or designation='GDM') and date_allottment='$date'";
          $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $AGCgd=$rec1['AGCgd'];
          echo "<td>$AGCgd</td>"; 
        $tAGCgd+=$AGCgd;
        $total_AGC=($AGClp+$AGCalp+$AGCgd);
         echo "<th>$total_AGC</th>"; 
      
      } 
        echo "</tr>";
    
       echo "<tr>";
    echo "<th>GGC</th>"; 
      
   $tGGClp=0;
   $tGGCalp=0;
   $tGGCgd=0;
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
        
    $date = date( 'Y-m-d', $i );     
    $cmd1="select count(ID) as GGClp from main where (hq='GGC')  and (designation='LPG' or designation='LPP' or designation='LPM' or designation='SLPG' or designation='SLPP') and date_allottment='$date'";
        require_once('dbcon.php');
        $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $GGClp=$rec1['GGClp'];
       echo "<td>$GGClp</td>"; 
        $tGGClp+=$GGClp;
      
        
        
       $cmd1="select count(ID) as GGCalp from main where (hq='GGC')  and (designation='ALP' or designation='SALP' or designation='SHT' or designation='SSHT') and date_allottment='$date'"; 
          $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $GGCalp=$rec1['GGCalp'];
          echo "<td>$GGCalp</td>"; 
        $tGGCalp+=$GGCalp;
       
       $cmd1="select count(ID) as GGCgd from main where (hq='GGC' ) and (designation='GD' or designation='SGD' or designation='GDP' or designation='SGDP' or designation='GDM') and date_allottment='$date'";
          $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $GGCgd=$rec1['GGCgd'];
          echo "<td>$GGCgd</td>"; 
        $tGGCgd+=$GGCgd;
        $total_GGC=($GGClp+$GGCalp+$GGCgd);
         echo "<th>$total_GGC</th>"; 
      
      } 
        echo "</tr>";
       echo "<tr>";
    echo "<th>BKI</th>"; 
      
   $tBKIlp=0;
   $tBKIalp=0;
   $tBKIgd=0;
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
        
    $date = date( 'Y-m-d', $i );     
    $cmd1="select count(ID) as BKIlp from main where (hq='BKI')  and (designation='LPG' or designation='LPP' or designation='LPM' or designation='SLPG' or designation='SLPP') and date_allottment='$date'";
        require_once('dbcon.php');
        $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $BKIlp=$rec1['BKIlp'];
       echo "<td>$BKIlp</td>"; 
        $tBKIlp+=$BKIlp;
      
        
        
       $cmd1="select count(ID) as BKIalp from main where (hq='BKI')  and (designation='ALP' or designation='SALP' or designation='SHT' or designation='SSHT') and date_allottment='$date'"; 
          $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $BKIalp=$rec1['BKIalp'];
          echo "<td>$BKIalp</td>"; 
        $tBKIalp+=$BKIalp;
       
       $cmd1="select count(ID) as BKIgd from main where (hq='BKI' ) and (designation='GD' or designation='SGD' or designation='GDP' or designation='SGDP' or designation='GDM') and date_allottment='$date'";
          $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $BKIgd=$rec1['BKIgd'];
          echo "<td>$BKIgd</td>"; 
        $tBKIgd+=$BKIgd;
        $total_BKI=($BKIlp+$BKIalp+$BKIgd);
         echo "<th>$total_BKI</th>"; 
      
      } 
        echo "</tr>";
       echo "<tr>";
    echo "<th>JP</th>"; 
      
   $tJPlp=0;
   $tJPalp=0;
   $tJPgd=0;
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
        
    $date = date( 'Y-m-d', $i );     
    $cmd1="select count(ID) as JPlp from main where (hq='JP')  and (designation='LPG' or designation='LPP' or designation='LPM' or designation='SLPG' or designation='SLPP') and date_allottment='$date'";
        require_once('dbcon.php');
        $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $JPlp=$rec1['JPlp'];
       echo "<td>$JPlp</td>"; 
        $tJPlp+=$JPlp;
      
        
        
       $cmd1="select count(ID) as JPalp from main where (hq='JP')  and (designation='ALP' or designation='SALP' or designation='SHT' or designation='SSHT') and date_allottment='$date'"; 
          $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $JPalp=$rec1['JPalp'];
          echo "<td>$JPalp</td>"; 
        $tJPalp+=$JPalp;
       
       $cmd1="select count(ID) as JPgd from main where (hq='JP' ) and (designation='GD' or designation='SGD' or designation='GDP' or designation='SGDP' or designation='GDM') and date_allottment='$date'";
          $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $JPgd=$rec1['JPgd'];
          echo "<td>$JPgd</td>"; 
        $tJPgd+=$JPgd;
        $total_JP=($JPlp+$JPalp+$JPgd);
         echo "<th>$total_JP</th>"; 
      
      } 
        echo "</tr>";
       echo "<tr>";
    echo "<th>MTJ</th>"; 
      
   $tMTJlp=0;
   $tMTJalp=0;
   $tMTJgd=0;
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
        
    $date = date( 'Y-m-d', $i );     
    $cmd1="select count(ID) as MTJlp from main where (hq='MTJ')  and (designation='LPG' or designation='LPP' or designation='LPM' or designation='SLPG' or designation='SLPP') and date_allottment='$date'";
        require_once('dbcon.php');
        $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $MTJlp=$rec1['MTJlp'];
       echo "<td>$MTJlp</td>"; 
        $tMTJlp+=$MTJlp;
      
        
        
       $cmd1="select count(ID) as MTJalp from main where (hq='MTJ')  and (designation='ALP' or designation='SALP' or designation='SHT' or designation='SSHT') and date_allottment='$date'"; 
          $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $MTJalp=$rec1['MTJalp'];
          echo "<td>$MTJalp</td>"; 
        $tMTJalp+=$MTJalp;
       
       $cmd1="select count(ID) as MTJgd from main where (hq='MTJ' ) and (designation='GD' or designation='SGD' or designation='GDP' or designation='SGDP' or designation='GDM') and date_allottment='$date'";
          $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $MTJgd=$rec1['MTJgd'];
          echo "<td>$MTJgd</td>"; 
        $tMTJgd+=$MTJgd;
        $total_MTJ=($MTJlp+$MTJalp+$MTJgd);
         echo "<th>$total_MTJ</th>"; 
      
      } 
        echo "</tr>";
       echo "<tr>";
    echo "<th>GZB</th>"; 
      
   $tGZBlp=0;
   $tGZBalp=0;
   $tGZBgd=0;
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
        
    $date = date( 'Y-m-d', $i );     
    $cmd1="select count(ID) as GZBlp from main where (hq='GZB')  and (designation='LPG' or designation='LPP' or designation='LPM' or designation='SLPG' or designation='SLPP') and date_allottment='$date'";
        require_once('dbcon.php');
        $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $GZBlp=$rec1['GZBlp'];
       echo "<td>$GZBlp</td>"; 
        $tGZBlp+=$GZBlp;
      
        
        
       $cmd1="select count(ID) as GZBalp from main where (hq='GZB')  and (designation='ALP' or designation='SALP' or designation='SHT' or designation='SSHT') and date_allottment='$date'"; 
          $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $GZBalp=$rec1['GZBalp'];
          echo "<td>$GZBalp</td>"; 
        $tGZBalp+=$GZBalp;
       
       $cmd1="select count(ID) as GZBgd from main where (hq='GZB' ) and (designation='GD' or designation='SGD' or designation='GDP' or designation='SGDP' or designation='GDM') and date_allottment='$date'";
          $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $GZBgd=$rec1['GZBgd'];
          echo "<td>$GZBgd</td>"; 
        $tGZBgd+=$GZBgd;
        $total_GZB=($GZBlp+$GZBalp+$GZBgd);
         echo "<th>$total_GZB</th>"; 
      
      } 
        echo "</tr>";
       echo "<tr>";
    echo "<th>BE</th>"; 
      
   $tBElp=0;
   $tBEalp=0;
   $tBEgd=0;
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
        
    $date = date( 'Y-m-d', $i );     
    $cmd1="select count(ID) as BElp from main where (hq='BE')  and (designation='LPG' or designation='LPP' or designation='LPM' or designation='SLPG' or designation='SLPP') and date_allottment='$date'";
        require_once('dbcon.php');
        $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $BElp=$rec1['BElp'];
       echo "<td>$BElp</td>"; 
        $tBElp+=$BElp;
      
        
        
       $cmd1="select count(ID) as BEalp from main where (hq='BE')  and (designation='ALP' or designation='SALP' or designation='SHT' or designation='SSHT') and date_allottment='$date'"; 
          $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $BEalp=$rec1['BEalp'];
          echo "<td>$BEalp</td>"; 
        $tBEalp+=$BEalp;
       
       $cmd1="select count(ID) as BEgd from main where (hq='BE' ) and (designation='GD' or designation='SGD' or designation='GDP' or designation='SGDP' or designation='GDM') and date_allottment='$date'";
          $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $BEgd=$rec1['BEgd'];
          echo "<td>$BEgd</td>"; 
        $tBEgd+=$BEgd;
        $total_BE=($BElp+$BEalp+$BEgd);
         echo "<th>$total_BE</th>"; 
      
      } 
        echo "</tr>";
       echo "<tr>";
    echo "<th>CNBN</th>"; 
      
   $tCNBNlp=0;
   $tCNBNalp=0;
   $tCNBNgd=0;
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
        
    $date = date( 'Y-m-d', $i );     
    $cmd1="select count(ID) as CNBNlp from main where (hq='CNBN')  and (designation='LPG' or designation='LPP' or designation='LPM' or designation='SLPG' or designation='SLPP') and date_allottment='$date'";
        require_once('dbcon.php');
        $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $CNBNlp=$rec1['CNBNlp'];
       echo "<td>$CNBNlp</td>"; 
        $tCNBNlp+=$CNBNlp;
      
        
        
       $cmd1="select count(ID) as CNBNalp from main where (hq='CNBN')  and (designation='ALP' or designation='SALP' or designation='SHT' or designation='SSHT') and date_allottment='$date'"; 
          $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $CNBNalp=$rec1['CNBNalp'];
          echo "<td>$CNBNalp</td>"; 
        $tCNBNalp+=$CNBNalp;
       
       $cmd1="select count(ID) as CNBNgd from main where (hq='CNBN' ) and (designation='GD' or designation='SGD' or designation='GDP' or designation='SGDP' or designation='GDM') and date_allottment='$date'";
          $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $CNBNgd=$rec1['CNBNgd'];
          echo "<td>$CNBNgd</td>"; 
        $tCNBNgd+=$CNBNgd;
        $total_CNBN=($CNBNlp+$CNBNalp+$CNBNgd);
         echo "<th>$total_CNBN</th>"; 
      
      } 
        echo "</tr>";
       echo "<tr>";
    echo "<th>IDH</th>"; 
      
   $tIDHlp=0;
   $tIDHalp=0;
   $tIDHgd=0;
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
        
    $date = date( 'Y-m-d', $i );     
    $cmd1="select count(ID) as IDHlp from main where (hq='IDH')  and (designation='LPG' or designation='LPP' or designation='LPM' or designation='SLPG' or designation='SLPP') and date_allottment='$date'";
        require_once('dbcon.php');
        $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $IDHlp=$rec1['IDHlp'];
       echo "<td>$IDHlp</td>"; 
        $tIDHlp+=$IDHlp;
      
        
        
       $cmd1="select count(ID) as IDHalp from main where (hq='IDH')  and (designation='ALP' or designation='SALP' or designation='SHT' or designation='SSHT') and date_allottment='$date'"; 
          $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $IDHalp=$rec1['IDHalp'];
          echo "<td>$IDHalp</td>"; 
        $tIDHalp+=$IDHalp;
       
       $cmd1="select count(ID) as IDHgd from main where (hq='IDH' ) and (designation='GD' or designation='SGD' or designation='GDP' or designation='SGDP' or designation='GDM') and date_allottment='$date'";
          $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $IDHgd=$rec1['IDHgd'];
          echo "<td>$IDHgd</td>"; 
        $tIDHgd+=$IDHgd;
        $total_IDH=($IDHlp+$IDHalp+$IDHgd);
         echo "<th>$total_IDH</th>"; 
      
      } 
        echo "</tr>";
       echo "<tr>";
    echo "<th>Total</th>"; 
      
   $tlp=0;
   $talp=0;
   $tgd=0;
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
        
    $date = date( 'Y-m-d', $i );     
    $cmd1="select count(ID) as lp from main where (designation='LPG' or designation='LPP' or designation='LPM' or designation='SLPG' or designation='SLPP') and date_allottment='$date'";
        require_once('dbcon.php');
        $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $lp=$rec1['lp'];
       echo "<td>$lp</td>"; 
        $tlp+=$lp;
      
        
        
       $cmd1="select count(ID) as alp from main where (designation='ALP' or designation='SALP' or designation='SHT' or designation='SSHT') and date_allottment='$date'"; 
          $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $alp=$rec1['alp'];
          echo "<td>$alp</td>"; 
        $talp+=$alp;
       
       $cmd1="select count(ID) as gd from main where (designation='GD' or designation='SGD' or designation='GDP' or designation='SGDP' or designation='GDM') and date_allottment='$date'";
          $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $gd=$rec1['gd'];
          echo "<td>$gd</td>"; 
        $tgd+=$gd;
        $total_=($lp+$alp+$gd);
         echo "<th>$total_</th>"; 
      
      } 
        echo "</tr>";
      echo "<tr>";
    echo "<th>CLI</th>"; 
      
   $tcli=0;
  
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
        
    $date = date( 'Y-m-d', $i );     
    $cmd1="select count(ID) as cli from main where designation='CLI' and date_allottment='$date'";
        require_once('dbcon.php');
        $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $cli=$rec1['cli'];
       echo "<td colspan='4'>$cli</td>"; 
        $tcli+=$cli;
      
    
      } 
        echo "</tr>";
     
}
     ?>
     </table>
        </div>
        
        
        
        
    </body>
</html>