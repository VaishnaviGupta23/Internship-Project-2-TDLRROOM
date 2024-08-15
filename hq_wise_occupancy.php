<!DOCTYPE html>

<html>
<head>
    <?php require_once("head.php")?>
    <style>
        table {margin: 0 auto;}
        #A{
            font-size: 25Px;
            font-weight: bolder;
            text-align: center;
        } 
        #B{
            font-size: 20Px;
            font-weight: bold;
            text-align: center;
        }
        #X{
         font-size: 40Px;
            font-weight: bolder;
            text-align: center;   
        }
        #K{
         font-size: 18Px;
            
            text-align: center;     
        }
        #L{
            font-size: 20Px;
            font-weight: bolder;
            
        }
        #O{
           font-size: 25Px;
            font-weight: bolder;
            text-align: center;  
        }
        #N{
        font-size: 20Px;
            font-weight: bold;
            text-align: center;     
        }
        #M{
        font-size: 18Px;
            
            text-align: center;     
        }
    
    </style>
   
   </head>
<body> 
    
    <h5 id="X"> Head Quarter Wise Occupancy </h5>
    <div class="container col-md-12 bg-light">
    <table border="1">
        <tr>
            <td id="A" rowspan="3">Month</td>
            <td id="A" colspan="12">NCR</td>
            <td id="A" colspan="3">WCR</td>
            <td id="A" colspan="6">NWR</td>
            <td id="A" colspan="3">NR</td>
            <td id="A" colspan="3" rowspan="2">BE</td>
            <td id="A"  rowspan="3">CLI</td>
            <td id="A"  rowspan="3">Total</td>
        </tr>
        <tr>
            <td id="A" colspan="3">ALD</td>
            <td id="A" colspan="3">CNB</td>
            <td id="A" colspan="3">AGC</td>
            <td id="A" colspan="3">MTJ</td>
            <td id="A" colspan="3">GGC</td>
            <td id="A" colspan="3">JP</td>
            <td id="A" colspan="3">BKI</td>
            <td id="A" colspan="3">GZB</td>
        </tr>
        <tr>
            <td id="B">LP</td>
            <td id="B">ALP</td>
            <td id="B">GD</td>
            <td id="B">LP</td>
            <td id="B">ALP</td>
            <td id="B">GD</td>
            <td id="B">LP</td>
            <td id="B">ALP</td>
            <td id="B">GD</td>
            <td id="B">LP</td>
            <td id="B">ALP</td>
            <td id="B">GD</td>
            <td id="B">LP</td>
            <td id="B">ALP</td>
            <td id="B">GD</td>
            <td id="B">LP</td>
            <td id="B">ALP</td>
            <td id="B">GD</td>
            <td id="B">LP</td>
            <td id="B">ALP</td>
            <td id="B">GD</td>
            <td id="B">LP</td>
            <td id="B">ALP</td>
            <td id="B">GD</td>
            <td id="B">LP</td>
            <td id="B">ALP</td>
            <td id="B">GD</td>
            
             
            
        </tr>
        
    <?php
    
   $A=$_POST['check_list']; 
        
    foreach ($A as $selected)
    {
        echo "<tr>";
      $B=($selected);
        
        $M= date("F",strtotime("-$B Months"));
        $N= date("y",strtotime("-$B Months"));
        $O= $M."-".$N;
        //echo ($O);
       
           echo "<td id='L'>";
              echo $O; 
               echo "</td>"; 
        
        $Y1= date("n",strtotime($M));
        $Y=$Y."/20".$N;
        //echo ($Y);
        //echo ($Y1);
        //Calculation of ALLAHABAD
  
  $cmd1= "select count(ID) as ALDLP from main where LEFT(crew_id, 4)='PRYJ' and substr(date_allottment,5,2) like '$Y1' and (designation='LPG' or designation='LPP' or designation='LPM' or designation='SLPG' or designation='SLPP')";
        require_once('dbcon.php');
        $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $ALDLP=$rec1['ALDLP'];
         echo "<td id='K'>";
              echo $ALDLP; 
               echo "</td>"; 
 $cmd2= "select count(ID) as ALDALP from main where LEFT(crew_id, LENGTH(crew_id) - 4)='ALD' and substr(date_allottment,4,7) like '$Y1' and (designation='ALP' or designation='SALP' or designation='SHT' or designation='SSHT')";
        require_once('dbcon.php');
        $res2=mysqli_query($conn,$cmd2);
        $rec2=mysqli_fetch_assoc($res2);
        $ALDALP=$rec2['ALDALP'];
         echo "<td id='K'>";
              echo $ALDALP; 
               echo "</td>";   
    $cmd3= "select count(ID) as ALDGD from main where LEFT(crew_id, LENGTH(crew_id) - 4)='ALD' and substr(date_allottment,4,7) like '$Y1' and (designation='GD' or designation='SGD' or designation='GDP' or designation='SGDP' or designation='GDM' )";
        require_once('dbcon.php');
        $res3=mysqli_query($conn,$cmd3);
        $rec3=mysqli_fetch_assoc($res3);
        $ALDGD=$rec3['ALDGD'];
         echo "<td id='K'>";
              echo $ALDGD; 
               echo "</td>";    
        
        
     //Calculation of Kanpur  
        
     $cmd4= "select count(ID) as CNBLP from main where LEFT(crew_id,4)='CNB' and substr(date_allottment,5,2) like '$Y1' and (designation='LPG' or designation='LPP' or designation='LPM' or designation='SLPG' or designation='SLPP')";
        require_once('dbcon.php');
        $res4=mysqli_query($conn,$cmd4);
        $rec4=mysqli_fetch_assoc($res4);
        $CNBLP=$rec4['CNBLP'];
        echo ($CNBLP);
         
 $cmd5= "select count(ID) as CNBALP from main where LEFT(crew_id, LENGTH(crew_id) - 4)='CNB' and substr(date_allottment,4,7) like '$Y1' and (designation='ALP' or designation='SALP' or designation='SHT' or designation='SSHT')";
        require_once('dbcon.php');
        $res5=mysqli_query($conn,$cmd5);
        $rec5=mysqli_fetch_assoc($res5);
        $CNBALP=$rec5['CNBALP'];
           
    $cmd6= "select count(ID) as CNBGD from main where LEFT(crew_id, LENGTH(crew_id) - 4)='CNB' and substr(date_allottment,4,7) like '$Y1' and (designation='GD' or designation='SGD' or designation='GDP' or designation='SGDP' or designation='GDM' )";
        require_once('dbcon.php');
        $res6=mysqli_query($conn,$cmd6);
        $rec6=mysqli_fetch_assoc($res6);
        $CNBGD=$rec6['CNBGD'];
       
        //Calculation of GMC
  
  $cmd1= "select count(ID) as GMCLP from main where LEFT(crew_id, LENGTH(crew_id) - 4)='GMC' and substr(date_allottment,4,7) like '$Y1' and (designation='LPG' or designation='LPP' or designation='LPM' or designation='SLPG' or designation='SLPP')";
        require_once('dbcon.php');
        $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $GMCLP=$rec1['GMCLP'];
        $KANLP=($CNBLP+$GMCLP);
         echo "<td id='K'>";
              echo $KANLP; 
               echo "</td>"; 
 $cmd2= "select count(ID) as GMCALP from main where LEFT(crew_id, LENGTH(crew_id) - 4)='GMC' and substr(date_allottment,4,7) like '$Y1' and (designation='ALP' or designation='SALP' or designation='SHT' or designation='SSHT')";
        require_once('dbcon.php');
        $res2=mysqli_query($conn,$cmd2);
        $rec2=mysqli_fetch_assoc($res2);
        $GMCALP=$rec2['GMCALP'];
        $KANALP=($CNBALP+$GMCALP); 
        
         echo "<td id='K'>";
              echo $KANALP; 
               echo "</td>";   
    $cmd3= "select count(ID) as GMCGD from main where LEFT(crew_id, LENGTH(crew_id) - 4)='GMC' and substr(date_allottment,4,7) like '$Y1' and (designation='GD' or designation='SGD' or designation='GDP' or designation='SGDP' or designation='GDM' )";
        require_once('dbcon.php');
        $res3=mysqli_query($conn,$cmd3);
        $rec3=mysqli_fetch_assoc($res3);
        $GMCGD=$rec3['GMCGD'];
         $KANGD=($CNBGD+$GMCGD);
         echo "<td id='K'>";
              echo $KANGD; 
               echo "</td>";  
            
   //Calculation of AGRA
  
  $cmd1= "select count(ID) as AGCLP from main where LEFT(crew_id, LENGTH(crew_id) - 4)='AGC' and substr(date_allottment,4,7) like '$Y1' and (designation='LPG' or designation='LPP' or designation='LPM' or designation='SLPG' or designation='SLPP')";
        require_once('dbcon.php');
        $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $AGCLP=$rec1['AGCLP'];
         echo "<td id='K'>";
              echo $AGCLP; 
               echo "</td>"; 
 $cmd2= "select count(ID) as AGCALP from main where LEFT(crew_id, LENGTH(crew_id) - 4)='AGC' and substr(date_allottment,4,7) like '$Y1' and (designation='ALP' or designation='SALP' or designation='SHT' or designation='SSHT')";
        require_once('dbcon.php');
        $res2=mysqli_query($conn,$cmd2);
        $rec2=mysqli_fetch_assoc($res2);
        $AGCALP=$rec2['AGCALP'];
         echo "<td id='K'>";
              echo $AGCALP; 
               echo "</td>";   
    $cmd3= "select count(ID) as AGCGD from main where LEFT(crew_id, LENGTH(crew_id) - 4)='AGC' and substr(date_allottment,4,7) like '$Y1' and (designation='GD' or designation='SGD' or designation='GDP' or designation='SGDP' or designation='GDM' )";
        require_once('dbcon.php');
        $res3=mysqli_query($conn,$cmd3);
        $rec3=mysqli_fetch_assoc($res3);
        $AGCGD=$rec3['AGCGD'];
         echo "<td id='K'>";
              echo $AGCGD; 
               echo "</td>";       
        
    //Calculation of MTJ
  
  $cmd1= "select count(ID) as MTJLP from main where LEFT(crew_id, LENGTH(crew_id) - 4)='MTJ' and substr(date_allottment,4,7) like '$Y1' and (designation='LPG' or designation='LPP' or designation='LPM' or designation='SLPG' or designation='SLPP')";
        require_once('dbcon.php');
        $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $MTJLP=$rec1['MTJLP'];
         echo "<td id='K'>";
              echo $MTJLP; 
               echo "</td>"; 
 $cmd2= "select count(ID) as MTJALP from main where LEFT(crew_id, LENGTH(crew_id) - 4)='MTJ' and substr(date_allottment,4,7) like '$Y1' and (designation='ALP' or designation='SALP' or designation='SHT' or designation='SSHT')";
        require_once('dbcon.php');
        $res2=mysqli_query($conn,$cmd2);
        $rec2=mysqli_fetch_assoc($res2);
        $MTJALP=$rec2['MTJALP'];
         echo "<td id='K'>";
              echo $MTJALP; 
               echo "</td>";   
    $cmd3= "select count(ID) as MTJGD from main where LEFT(crew_id, LENGTH(crew_id) - 4)='MTJ' and substr(date_allottment,4,7) like '$Y1' and (designation='GD' or designation='SGD' or designation='GDP' or designation='SGDP' or designation='GDM' )";
        require_once('dbcon.php');
        $res3=mysqli_query($conn,$cmd3);
        $rec3=mysqli_fetch_assoc($res3);
        $MTJGD=$rec3['MTJGD'];
         echo "<td id='K'>";
              echo $MTJGD; 
               echo "</td>";      
        
  //Calculation of GGC
  
  $cmd1= "select count(ID) as GGCLP from main where LEFT(crew_id, LENGTH(crew_id) - 4)='GGC' and substr(date_allottment,4,7) like '$Y1' and (designation='LPG' or designation='LPP' or designation='LPM' or designation='SLPG' or designation='SLPP')";
        require_once('dbcon.php');
        $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $GGCLP=$rec1['GGCLP'];
         echo "<td id='K'>";
              echo $GGCLP; 
               echo "</td>"; 
 $cmd2= "select count(ID) as GGCALP from main where LEFT(crew_id, LENGTH(crew_id) - 4)='GGC' and substr(date_allottment,4,7) like '$Y1' and (designation='ALP' or designation='SALP' or designation='SHT' or designation='SSHT')";
        require_once('dbcon.php');
        $res2=mysqli_query($conn,$cmd2);
        $rec2=mysqli_fetch_assoc($res2);
        $GGCALP=$rec2['GGCALP'];
         echo "<td id='K'>";
              echo $GGCALP; 
               echo "</td>";   
    $cmd3= "select count(ID) as GGCGD from main where LEFT(crew_id, LENGTH(crew_id) - 4)='GGC' and substr(date_allottment,4,7) like '$Y1' and (designation='GD' or designation='SGD' or designation='GDP' or designation='SGDP' or designation='GDM' )";
        require_once('dbcon.php');
        $res3=mysqli_query($conn,$cmd3);
        $rec3=mysqli_fetch_assoc($res3);
        $GGCGD=$rec3['GGCGD'];
         echo "<td id='K'>";
              echo $GGCGD; 
               echo "</td>"; 
        
        //Calculation of JP
  
  $cmd1= "select count(ID) as JPLP from main where LEFT(crew_id, LENGTH(crew_id) - 4)='JP' and substr(date_allottment,4,7) like '$Y1' and (designation='LPG' or designation='LPP' or designation='LPM' or designation='SLPG' or designation='SLPP')";
        require_once('dbcon.php');
        $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $JPLP=$rec1['JPLP'];
         echo "<td id='K'>";
              echo $JPLP; 
               echo "</td>"; 
 $cmd2= "select count(ID) as JPALP from main where LEFT(crew_id, LENGTH(crew_id) - 4)='JP' and substr(date_allottment,4,7) like '$Y1' and (designation='ALP' or designation='SALP' or designation='SHT' or designation='SSHT')";
        require_once('dbcon.php');
        $res2=mysqli_query($conn,$cmd2);
        $rec2=mysqli_fetch_assoc($res2);
        $JPALP=$rec2['JPALP'];
         echo "<td id='K'>";
              echo $JPALP; 
               echo "</td>";   
    $cmd3= "select count(ID) as JPGD from main where LEFT(crew_id, LENGTH(crew_id) - 4)='JP' and substr(date_allottment,4,7) like '$Y1' and (designation='GD' or designation='SGD' or designation='GDP' or designation='SGDP' or designation='GDM' )";
        require_once('dbcon.php');
        $res3=mysqli_query($conn,$cmd3);
        $rec3=mysqli_fetch_assoc($res3);
        $JPGD=$rec3['JPGD'];
         echo "<td id='K'>";
              echo $JPGD; 
               echo "</td>";  
        
      //Calculation of BKI
  
  $cmd1= "select count(ID) as BKILP from main where LEFT(crew_id, LENGTH(crew_id) - 4)='BKI' and substr(date_allottment,4,7) like '$Y1' and (designation='LPG' or designation='LPP' or designation='LPM' or designation='SLPG' or designation='SLPP')";
        require_once('dbcon.php');
        $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $BKILP=$rec1['BKILP'];
         echo "<td id='K'>";
              echo $BKILP; 
               echo "</td>"; 
 $cmd2= "select count(ID) as BKIALP from main where LEFT(crew_id, LENGTH(crew_id) - 4)='BKI' and substr(date_allottment,4,7) like '$Y1' and (designation='ALP' or designation='SALP' or designation='SHT' or designation='SSHT')";
        require_once('dbcon.php');
        $res2=mysqli_query($conn,$cmd2);
        $rec2=mysqli_fetch_assoc($res2);
        $BKIALP=$rec2['BKIALP'];
         echo "<td id='K'>";
              echo $BKIALP; 
               echo "</td>";   
    $cmd3= "select count(ID) as BKIGD from main where LEFT(crew_id, LENGTH(crew_id) - 4)='BKI' and substr(date_allottment,4,7) like '$Y1' and (designation='GD' or designation='SGD' or designation='GDP' or designation='SGDP' or designation='GDM' )";
        require_once('dbcon.php');
        $res3=mysqli_query($conn,$cmd3);
        $rec3=mysqli_fetch_assoc($res3);
        $BKIGD=$rec3['BKIGD'];
         echo "<td id='K'>";
              echo $BKIGD; 
               echo "</td>";    
        
 //Calculation of GZB
  
  $cmd1= "select count(ID) as GZBLP from main where LEFT(crew_id, LENGTH(crew_id) - 4)='GZB' and substr(date_allottment,4,7) like '$Y1' and (designation='LPG' or designation='LPP' or designation='LPM' or designation='SLPG' or designation='SLPP')";
        require_once('dbcon.php');
        $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $GZBLP=$rec1['GZBLP'];
         echo "<td id='K'>";
              echo $GZBLP; 
               echo "</td>"; 
 $cmd2= "select count(ID) as GZBALP from main where LEFT(crew_id, LENGTH(crew_id) - 4)='GZB' and substr(date_allottment,4,7) like '$Y1' and (designation='ALP' or designation='SALP' or designation='SHT' or designation='SSHT')";
        require_once('dbcon.php');
        $res2=mysqli_query($conn,$cmd2);
        $rec2=mysqli_fetch_assoc($res2);
        $GZBALP=$rec2['GZBALP'];
         echo "<td id='K'>";
              echo $GZBALP; 
               echo "</td>";   
    $cmd3= "select count(ID) as GZBGD from main where LEFT(crew_id, LENGTH(crew_id) - 4)='GZB' and substr(date_allottment,4,7) like '$Y1' and (designation='GD' or designation='SGD' or designation='GDP' or designation='SGDP' or designation='GDM' )";
        require_once('dbcon.php');
        $res3=mysqli_query($conn,$cmd3);
        $rec3=mysqli_fetch_assoc($res3);
        $GZBGD=$rec3['GZBGD'];
         echo "<td id='K'>";
              echo $GZBGD; 
               echo "</td>";         
    //Calculation of BE
  
  $cmd1= "select count(ID) as BELP from main where LEFT(crew_id, LENGTH(crew_id) - 4)='BE' and substr(date_allottment,4,7) like '$Y1' and (designation='LPG' or designation='LPP' or designation='LPM' or designation='SLPG' or designation='SLPP')";
        require_once('dbcon.php');
        $res1=mysqli_query($conn,$cmd1);
        $rec1=mysqli_fetch_assoc($res1);
        $BELP=$rec1['BELP'];
         echo "<td id='K'>";
              echo $BELP; 
               echo "</td>"; 
 $cmd2= "select count(ID) as BEALP from main where LEFT(crew_id, LENGTH(crew_id) - 4)='BE' and substr(date_allottment,4,7) like '$Y1' and (designation='ALP' or designation='SALP' or designation='SHT' or designation='SSHT')";
        require_once('dbcon.php');
        $res2=mysqli_query($conn,$cmd2);
        $rec2=mysqli_fetch_assoc($res2);
        $BEALP=$rec2['BEALP'];
         echo "<td id='K'>";
              echo $BEALP; 
               echo "</td>";   
    $cmd3= "select count(ID) as BEGD from main where LEFT(crew_id, LENGTH(crew_id) - 4)='BE' and substr(date_allottment,4,7) like '$Y1' and (designation='GD' or designation='SGD' or designation='GDP' or designation='SGDP' or designation='GDM' )";
        require_once('dbcon.php');
        $res3=mysqli_query($conn,$cmd3);
        $rec3=mysqli_fetch_assoc($res3);
        $BEGD=$rec3['BEGD'];
         echo "<td id='K'>";
              echo $BEGD; 
               echo "</td>";
        
        //Calculataion of CLI
    $cmd4= "select count(ID) as CLI from main where LEFT(crew_id, LENGTH(crew_id) - 4)='ALD' and substr(date_allottment,4,7) like '$Y1' and designation='CLI'";
        require_once('dbcon.php');
        $res4=mysqli_query($conn,$cmd4);
        $rec4=mysqli_fetch_assoc($res4);
        $cli=$rec4['CLI'];
         echo "<td id='K'>";
              echo $cli; 
               echo "</td>";     
   $total= ($ALDLP+$ALDALP+$ALDGD+$KANLP+$KANALP+$KANGD+$AGCLP+$AGCALP+$AGCGD+$MTJLP+$MTJALP+$MTJGD+$GGCLP+$GGCALP+$GGCGD+$JPLP+$JPALP+$JPGD+$BKILP+$BKIALP+$BKIGD+$GZBLP+$GZBALP+$GZBGD+$BELP+$BEALP+$BEGD+$cli);
         echo "<td id='K'>";
              echo $total; 
               echo "</td>";  
        
        
        echo "</tr>";
            
    }
   
    ?>
           
     </table>
        
    </div>
   <div class="container col-md-12 bg-light">
        <?php
         $c_month= date('M Y', mktime(0, 0, 0, date('m')-1, 1, date('Y')));
        
        ?>
        <h4 id="X">Detail Of Occupancy For The Month Of <?php echo $c_month?></h4>
    <table border="1">
     <tr>
       <th id="O">Staff</th> 
       <th id="O">Total In Month</th> 
       <th id="O">Average Per Day</th> 
       <th id="O">% Per Day</th> 
                
        </tr> 
   <?php
    $X=date('Y/m/d', strtotime('first day of last month'));
    $Y=date('d', strtotime('first day of last month'));
    $Z=date('d', strtotime('last day of previous month'));
            $Z1=($Z-$Y+1);
            
   
    $A=substr($X,5,2);
    $B=substr($X,0,4);
    $C=($A."/".$B);
    
    $cmd11="select count(ID) as total_lp from main where substr(date_allottment,4,7) like '$C' and (designation='LPG' or designation='LPP' or designation='LPM' or designation='SLPG' or designation='SLPP')";
             require_once('dbcon.php');
        $res11=mysqli_query($conn,$cmd11);
        $rec11=mysqli_fetch_assoc($res11);
        $LP=$rec11['total_lp'];
        $average_lp=round($LP/$Z1);
    $cmd12="select count(ID) as total_alp from main where substr(date_allottment,4,7) like '$C' and (designation='ALP' or designation='SALP' or designation='SHT' or designation='SSHT')";
             require_once('dbcon.php');
        $res12=mysqli_query($conn,$cmd12);
        $rec12=mysqli_fetch_assoc($res12);
        $ALP=$rec12['total_alp'];
        $average_alp=round($ALP/$Z1);
            
     $cmd13="select count(ID) as total_gd from main where substr(date_allottment,4,7) like '$C' and (designation='GD' or designation='SGD' or designation='GDP' or designation='SGDP' or designation='GDM' )";
             require_once('dbcon.php');
        $res13=mysqli_query($conn,$cmd13);
        $rec13=mysqli_fetch_assoc($res13);
        $gd=$rec13['total_gd'];
        $average_gd=round($gd/$Z1); 
            
        $cmd14="select count(ID) as total_cli from main where substr(date_allottment,4,7) like '$C' and designation='CLI' ";
             require_once('dbcon.php');
        $res14=mysqli_query($conn,$cmd14);
        $rec14=mysqli_fetch_assoc($res14);
        $cli=$rec14['total_cli'];
        $average_cli=round($cli/$Z1); 
            $total_staff=($LP+$ALP+$gd+$cli);
            $total_average=($average_lp+$average_alp+$average_gd+$average_cli);
            $percent_lp=round(($LP/$total_staff)*100);
            $percent_alp=round(($ALP/$total_staff)*100);
            //$percent_gd=round(($gd/$total_staff)*100);
            $percent_cli=round(($cli/$total_staff)*100);
           $total_percent=( $percent_lp+$percent_alp+$percent_cli);
            $percent_gd=(100-$total_percent);
    ?>
    <tr>
      <td id="N">LP</td>  
      <td id="M"><?php echo $LP ?></td>  
      <td id="M"><?php echo $average_lp ?></td>  
      <td id="M"><?php echo $percent_lp ?></td>  
        
        </tr> 
        <tr>
      <td id="N">ALP</td>  
      <td id="M"><?php echo $ALP ?></td>  
      <td id="M"><?php echo $average_alp ?></td>  
       <td id="M"><?php echo $percent_alp ?></td>  
        </tr> 
        <tr>
      <td id="N">Guard</td>  
      <td id="M"><?php echo $gd ?></td>  
      <td id="M"><?php echo $average_gd ?></td>  
       <td id="M"><?php echo $percent_gd ?></td>  
        </tr> 
        <tr>
      <td id="N">CLI</td>  
      <td id="M"><?php echo $cli ?></td>  
      <td id="M"><?php echo $average_cli ?></td>  
      <td id="M"><?php echo $percent_cli ?></td>   
        </tr> 
         <tr>
      <td id="N">Total</td>  
      <td id="M"><?php echo $total_staff ?></td>  
      <td id="M"><?php echo $total_average ?></td>  
      <td id="M">100</td>  
        
        </tr> 
        </table>
        </div>
    </body>
</html>
