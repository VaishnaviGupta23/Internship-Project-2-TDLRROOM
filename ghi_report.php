<html>
    <head>
         <?php require_once("head.php")?>
        <style>
            table{
                border-collapse: collapse; 
            }
            h6{
                font-size: 20Px;
                text-align: left;
               color:chocolate;

            }
            td{
                text-align: center;
            }
            #A{
                text-align: left;
            }
            
        
        </style>
        
    </head>
    <body>
<!--
<a class="btn btn-outline-primary" href="e_summary.php" role="button">Back</a>
    <a class="btn btn-outline-success" href="admin_home.php" role="button">Home</a>
    <a class="btn btn-outline-danger" href="signout.php" role="button">Sign Out</a>
-->
<div class="container bg-light col-sm-12">

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
    echo "<h6> टुंड्ला रनिंग रूम का सकल सन्तुष्टि सूचकांक विवरण दिनांक $D3 से $D4 (संख्यायें प्रतिशत में हैंं)</h6>";
echo "<table border='1'>";
     echo "<tr>";
   echo "<th> दिनांक</th>";
   echo "<th>फीड्बैक की संख्या </th>";
   echo "<th>लॉबी द्वारा रनिंग रूम में कमरे की आवंटन व्यवस्था</th>";
   echo "<th>रनिंग रूम के रिसेप्शन की क्वालिटी</th>";
   echo "<th>आवंटित कमरे की साफ़ सफाई</th>";
   echo "<th>टॉयलेट की साफ़ सफाई</th>";
   echo "<th>लिनेन वाशिंग की गुणवत्ता</th>";
   echo "<th>हाउस कीपिंग स्टाफ का व्यवहार</th>";
   echo "<th>मेस कर्मचारियों का व्यवहार</th>";
   echo "<th>भोजन को तैयार करने में लगा समय</th>";
   echo "<th>भोजन की गुणवत्ता</th>";
   echo "<th>रनिंग रूम परिसर में स्वच्छ वातावरण</th>";
   echo "<th>औसत</th>";
    echo "</tr>";
     
for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
     echo "<tr>";
  $date = date( 'd/m/Y', $i ); 
     echo "<td>$date</td>";
    
   $cmd1="select Sum(roomallotted) as sum1 from ghi where date='$date'";
    require_once('dbcon.php');
    $res1=mysqli_query($conn,$cmd1);
    $rec1=mysqli_fetch_assoc($res1);
    $sum1=$rec1['sum1'];
     $cmd2="select Sum(reception) as sum2 from ghi where date='$date'";
    require_once('dbcon.php');
    $res2=mysqli_query($conn,$cmd2);
    $rec2=mysqli_fetch_assoc($res2);
    $sum2=$rec2['sum2'];
     $cmd3="select Sum(cleaningroom) as sum3 from ghi where date='$date'";
    require_once('dbcon.php');
    $res3=mysqli_query($conn,$cmd3);
    $rec3=mysqli_fetch_assoc($res3);
    $sum3=$rec3['sum3'];
     $cmd4="select Sum(cleaningtoilet) as sum4 from ghi where date='$date'";
    require_once('dbcon.php');
    $res4=mysqli_query($conn,$cmd4);
    $rec4=mysqli_fetch_assoc($res4);
    $sum4=$rec4['sum4'];
     $cmd5="select Sum(cleaninglinen) as sum5 from ghi where date='$date'";
    require_once('dbcon.php');
    $res5=mysqli_query($conn,$cmd5);
    $rec5=mysqli_fetch_assoc($res5);
    $sum5=$rec5['sum5'];
     $cmd6="select Sum(behavehousekeeping) as sum6 from ghi where date='$date'";
    require_once('dbcon.php');
    $res6=mysqli_query($conn,$cmd6);
    $rec6=mysqli_fetch_assoc($res6);
    $sum6=$rec6['sum6'];
    $cmd7="select Sum(behavemess) as sum7 from ghi where date='$date'";
    require_once('dbcon.php');
    $res7=mysqli_query($conn,$cmd7);
    $rec7=mysqli_fetch_assoc($res7);
    $sum7=$rec7['sum7'];
     $cmd8="select Sum(timefood) as sum8 from ghi where date='$date'";
    require_once('dbcon.php');
    $res8=mysqli_query($conn,$cmd8);
    $rec8=mysqli_fetch_assoc($res8);
    $sum8=$rec8['sum8'];
    $cmd9="select Sum(qualityfood) as sum9 from ghi where date='$date'";
    require_once('dbcon.php');
    $res9=mysqli_query($conn,$cmd9);
    $rec9=mysqli_fetch_assoc($res9);
    $sum9=$rec9['sum9'];
    $cmd10="select Sum(atmosphere) as sum10 from ghi where date='$date'";
    require_once('dbcon.php');
    $res10=mysqli_query($conn,$cmd10);
    $rec10=mysqli_fetch_assoc($res10);
    $sum10=$rec10['sum10'];
   
  
   
    
     $cmd="select count(roomallotted) as count from ghi where date='$date'";
    require_once('dbcon.php');
    $res=mysqli_query($conn,$cmd);
    $rec=mysqli_fetch_assoc($res);
    $count=$rec['count'];
    
     $sum=($sum1+$sum2+$sum3+$sum4+$sum5+$sum6+$sum7+$sum8+$sum9+$sum10);
    
   $average=0;
    
    
    if($count>0){
    $avg=($sum*100)/($count*5*10);
    $average=round($avg);
    $A1=round($sum1*100)/($count*5);
    $A2=round($sum2*100)/($count*5);
    $A3=round($sum3*100)/($count*5);
    $A4=round($sum4*100)/($count*5);
    $A5=round($sum5*100)/($count*5);
    $A6=round($sum6*100)/($count*5);
    $A7=round($sum7*100)/($count*5);
    $A8=round($sum8*100)/($count*5);
    $A9=round($sum9*100)/($count*5);
    $A10=round($sum10*100)/($count*5);
   
    }
    else{
        $A1=0;
        $A2=0;
        $A3=0;
        $A4=0;
        $A5=0;
        $A6=0;
        $A7=0;
        $A8=0;
        $A9=0;
        $A10=0;
       
    }
    $A1R=round($A1);
    $A2R=round($A2);
    $A3R=round($A3);
    $A4R=round($A4);
    $A5R=round($A5);
    $A6R=round($A6);
    $A7R=round($A7);
    $A8R=round($A8);
    $A9R=round($A9);
    $A10R=round($A10);
    
    
   echo "<td>$count</td>"; 
   echo "<td>$A1R</td>"; 
   echo "<td>$A2R</td>"; 
   echo "<td>$A3R</td>"; 
   echo "<td>$A4R</td>"; 
   echo "<td>$A5R</td>"; 
   echo "<td>$A6R</td>"; 
   echo "<td>$A7R</td>"; 
   echo "<td>$A8R</td>"; 
   echo "<td>$A9R</td>"; 
   echo "<td>$A10R</td>"; 
   echo "<td>$average</td>"; 
    
   
  
  
   
    echo "</tr>";

}
   
    echo "</table>";   
       
}
       

   
    ?>
    </div>
      
        </body>
    </html>