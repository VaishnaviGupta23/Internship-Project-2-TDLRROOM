<html>
    <head>
         <?php require_once("head.php")?>
        <style>
           td{
                text-align: center;
               width: 60Px;
            }
            table{
                margin-left: 20Px;
                width: 800Px;
                
            }
            h6{
                text-align: center;
                font-size: 20Px;
            }
            #x{
                text-align: center;
                width: 60Px;
                height: 60Px;
            }
           </style>
        
    </head>
    <body>

<div class="container bg-light col-sm-10">

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
   /* echo($D3);
    echo($D4)*/;
    $roomallotted11=0;
    $roomallotted21=0;
    $roomallotted31=0;
    $roomallotted41=0;
    $roomallotted51=0;
    $reception11=0;
    $reception21=0;
    $reception31=0;
    $reception41=0;
    $reception51=0;
    $cleaningroom11=0;
    $cleaningroom21=0;
    $cleaningroom31=0;
    $cleaningroom41=0;
    $cleaningroom51=0;
    $cleaningtoilet11=0;
    $cleaningtoilet21=0;
    $cleaningtoilet31=0;
    $cleaningtoilet41=0;
    $cleaningtoilet51=0;
    $cleaninglinen11=0;
    $cleaninglinen21=0;
    $cleaninglinen31=0;
    $cleaninglinen41=0;
    $cleaninglinen51=0;
    $behavehousekeeping11=0;
    $behavehousekeeping21=0;
    $behavehousekeeping31=0;
    $behavehousekeeping41=0;
    $behavehousekeeping51=0;
    $behavemess11=0;
    $behavemess21=0;
    $behavemess31=0;
    $behavemess41=0;
    $behavemess51=0;
    $timefood11=0;
    $timefood21=0;
    $timefood31=0;
    $timefood41=0;
    $timefood51=0;
    $qualityfood11=0;
    $qualityfood21=0;
    $qualityfood31=0;
    $qualityfood41=0;
    $qualityfood51=0;
     $atmosphere11=0;
    $atmosphere21=0;
    $atmosphere31=0;
    $atmosphere41=0;
    $atmosphere51=0;
  for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
     echo "<tr>";
  $date = date( 'd/m/Y', $i ); 
    // echo "<td>$date</td>";
      
      
   $cmd2="select count(reception) as reception1 from ghi where date='$date' and reception='1'";
    require_once('dbcon.php');
    $res2=mysqli_query($conn,$cmd2);
    $rec2=mysqli_fetch_assoc($res2);
    $reception1=$rec2['reception1'];
      $reception11+=$reception1;
     $cmd3="select count(reception) as reception2 from ghi where date='$date' and reception='2'";
    require_once('dbcon.php');
    $res3=mysqli_query($conn,$cmd3);
    $rec3=mysqli_fetch_assoc($res3);
    $reception2=$rec3['reception2'];
      $reception21+=$reception2;
    $cmd4="select count(reception) as reception3 from ghi where date='$date' and reception='3'";
    require_once('dbcon.php');
    $res4=mysqli_query($conn,$cmd4);
    $rec4=mysqli_fetch_assoc($res4);
    $reception3=$rec4['reception3'];
      $reception31+=$reception3;
    $cmd5="select count(reception) as reception4 from ghi where date='$date' and reception='4'";
    require_once('dbcon.php');
    $res5=mysqli_query($conn,$cmd5);
    $rec5=mysqli_fetch_assoc($res5);
    $reception4=$rec5['reception4'];
      $reception41+=$reception4;
   $cmd6="select count(reception) as reception5 from ghi where date='$date' and reception='5'";
    require_once('dbcon.php');
    $res6=mysqli_query($conn,$cmd6);
    $rec6=mysqli_fetch_assoc($res6);
    $reception5=$rec6['reception5'];
      $reception51+=$reception5;
      
      $cmd7="select count(roomallotted) as roomallotted1 from ghi where date='$date' and roomallotted='1'";
    require_once('dbcon.php');
    $res7=mysqli_query($conn,$cmd7);
    $rec7=mysqli_fetch_assoc($res7);
    $roomallotted1=$rec7['roomallotted1'];
      $roomallotted11+=$roomallotted1;
      
      $cmd8="select count(roomallotted) as roomallotted2 from ghi where date='$date' and roomallotted='2'";
    require_once('dbcon.php');
    $res8=mysqli_query($conn,$cmd8);
    $rec8=mysqli_fetch_assoc($res8);
    $roomallotted2=$rec8['roomallotted2'];
      $roomallotted21+=$roomallotted2;
 $cmd9="select count(roomallotted) as roomallotted3 from ghi where date='$date' and roomallotted='3'";
    require_once('dbcon.php');
    $res9=mysqli_query($conn,$cmd9);
    $rec9=mysqli_fetch_assoc($res9);
    $roomallotted3=$rec9['roomallotted3'];
      $roomallotted31+=$roomallotted3;
$cmd10="select count(roomallotted) as roomallotted4 from ghi where date='$date' and roomallotted='4'";
    require_once('dbcon.php');
    $res10=mysqli_query($conn,$cmd10);
    $rec10=mysqli_fetch_assoc($res10);
    $roomallotted4=$rec10['roomallotted4'];
      $roomallotted41+=$roomallotted4; 
$cmd11="select count(roomallotted) as roomallotted5 from ghi where date='$date' and roomallotted='5'";
    require_once('dbcon.php');
    $res11=mysqli_query($conn,$cmd11);
    $rec11=mysqli_fetch_assoc($res11);
    $roomallotted5=$rec11['roomallotted5'];
      $roomallotted51+=$roomallotted5; 
      
    $cmd12="select count(cleaningroom) as cleaningroom1 from ghi where date='$date' and cleaningroom='1'";
    require_once('dbcon.php');
    $res12=mysqli_query($conn,$cmd12);
    $rec12=mysqli_fetch_assoc($res12);
    $cleaningroom1=$rec12['cleaningroom1'];
      $cleaningroom11+=$cleaningroom1;  
    $cmd13="select count(cleaningroom) as cleaningroom2 from ghi where date='$date' and cleaningroom='2'";
    require_once('dbcon.php');
    $res13=mysqli_query($conn,$cmd13);
    $rec13=mysqli_fetch_assoc($res13);
    $cleaningroom2=$rec13['cleaningroom2'];
      $cleaningroom21+=$cleaningroom2;
      
    $cmd14="select count(cleaningroom) as cleaningroom3 from ghi where date='$date' and cleaningroom='3'";
    require_once('dbcon.php');
    $res14=mysqli_query($conn,$cmd14);
    $rec14=mysqli_fetch_assoc($res14);
    $cleaningroom3=$rec14['cleaningroom3'];
      $cleaningroom31+=$cleaningroom3; 
      
     $cmd15="select count(cleaningroom) as cleaningroom4 from ghi where date='$date' and cleaningroom='4'";
    require_once('dbcon.php');
    $res15=mysqli_query($conn,$cmd15);
    $rec15=mysqli_fetch_assoc($res15);
    $cleaningroom4=$rec15['cleaningroom4'];
      $cleaningroom41+=$cleaningroom4; 
    $cmd16="select count(cleaningroom) as cleaningroom5 from ghi where date='$date' and cleaningroom='5'";
    require_once('dbcon.php');
    $res16=mysqli_query($conn,$cmd16);
    $rec16=mysqli_fetch_assoc($res16);
    $cleaningroom5=$rec16['cleaningroom5'];
      $cleaningroom51+=$cleaningroom5; 
  
     $cmd17="select count(cleaningtoilet) as cleaningtoilet1 from ghi where date='$date' and cleaningtoilet='1'";
    require_once('dbcon.php');
    $res17=mysqli_query($conn,$cmd17);
    $rec17=mysqli_fetch_assoc($res17);
    $cleaningtoilet1=$rec17['cleaningtoilet1'];
      $cleaningtoilet11+=$cleaningtoilet1;
    $cmd18="select count(cleaningtoilet) as cleaningtoilet2 from ghi where date='$date' and cleaningtoilet='2'";
    require_once('dbcon.php');
    $res18=mysqli_query($conn,$cmd18);
    $rec18=mysqli_fetch_assoc($res18);
    $cleaningtoilet2=$rec18['cleaningtoilet2'];
      $cleaningtoilet21+=$cleaningtoilet2; 
    $cmd19="select count(cleaningtoilet) as cleaningtoilet3 from ghi where date='$date' and cleaningtoilet='3'";
    require_once('dbcon.php');
    $res19=mysqli_query($conn,$cmd19);
    $rec19=mysqli_fetch_assoc($res19);
    $cleaningtoilet3=$rec19['cleaningtoilet3'];
      $cleaningtoilet31+=$cleaningtoilet3;   
     $cmd20="select count(cleaningtoilet) as cleaningtoilet4 from ghi where date='$date' and cleaningtoilet='4'";
    require_once('dbcon.php');
    $res20=mysqli_query($conn,$cmd20);
    $rec20=mysqli_fetch_assoc($res20);
    $cleaningtoilet4=$rec20['cleaningtoilet4'];
      $cleaningtoilet41+=$cleaningtoilet4;   
    $cmd21="select count(cleaningtoilet) as cleaningtoilet5 from ghi where date='$date' and cleaningtoilet='5'";
    require_once('dbcon.php');
    $res21=mysqli_query($conn,$cmd21);
    $rec21=mysqli_fetch_assoc($res21);
    $cleaningtoilet5=$rec21['cleaningtoilet5'];
      $cleaningtoilet51+=$cleaningtoilet5; 
      
    $cmd22="select count(cleaninglinen) as cleaninglinen1 from ghi where date='$date' and cleaninglinen='1'";
    require_once('dbcon.php');
    $res22=mysqli_query($conn,$cmd22);
    $rec22=mysqli_fetch_assoc($res22);
    $cleaninglinen1=$rec22['cleaninglinen1'];
      $cleaninglinen11+=$cleaninglinen1;  
    $cmd23="select count(cleaninglinen) as cleaninglinen2 from ghi where date='$date' and cleaninglinen='2'";
    require_once('dbcon.php');
    $res23=mysqli_query($conn,$cmd23);
    $rec23=mysqli_fetch_assoc($res23);
    $cleaninglinen2=$rec23['cleaninglinen2'];
      $cleaninglinen21+=$cleaninglinen2; 
 $cmd24="select count(cleaninglinen) as cleaninglinen3 from ghi where date='$date' and cleaninglinen='3'";
    require_once('dbcon.php');
    $res24=mysqli_query($conn,$cmd24);
    $rec24=mysqli_fetch_assoc($res24);
    $cleaninglinen3=$rec24['cleaninglinen3'];
      $cleaninglinen31+=$cleaninglinen3;
      
    $cmd25="select count(cleaninglinen) as cleaninglinen4 from ghi where date='$date' and cleaninglinen='4'";
    require_once('dbcon.php');
    $res25=mysqli_query($conn,$cmd25);
    $rec25=mysqli_fetch_assoc($res25);
    $cleaninglinen4=$rec25['cleaninglinen4'];
      $cleaninglinen41+=$cleaninglinen4;
    $cmd26="select count(cleaninglinen) as cleaninglinen5 from ghi where date='$date' and cleaninglinen='5'";
    require_once('dbcon.php');
    $res26=mysqli_query($conn,$cmd26);
    $rec26=mysqli_fetch_assoc($res26);
    $cleaninglinen5=$rec26['cleaninglinen5'];
      $cleaninglinen51+=$cleaninglinen5;
    $cmd27="select count(behavehousekeeping) as behavehousekeeping1 from ghi where date='$date' and behavehousekeeping='1'";
    require_once('dbcon.php');
    $res27=mysqli_query($conn,$cmd27);
    $rec27=mysqli_fetch_assoc($res27);
    $behavehousekeeping1=$rec27['behavehousekeeping1'];
      $behavehousekeeping11+=$behavehousekeeping1;
    $cmd28="select count(behavehousekeeping) as behavehousekeeping2 from ghi where date='$date' and behavehousekeeping='2'";
    require_once('dbcon.php');
    $res28=mysqli_query($conn,$cmd28);
    $rec28=mysqli_fetch_assoc($res28);
    $behavehousekeeping2=$rec28['behavehousekeeping2'];
      $behavehousekeeping21+=$behavehousekeeping2;
    $cmd29="select count(behavehousekeeping) as behavehousekeeping3 from ghi where date='$date' and behavehousekeeping='3'";
    require_once('dbcon.php');
    $res29=mysqli_query($conn,$cmd29);
    $rec29=mysqli_fetch_assoc($res29);
    $behavehousekeeping3=$rec29['behavehousekeeping3'];
      $behavehousekeeping31+=$behavehousekeeping3;
    $cmd30="select count(behavehousekeeping) as behavehousekeeping4 from ghi where date='$date' and behavehousekeeping='4'";
    require_once('dbcon.php');
    $res30=mysqli_query($conn,$cmd30);
    $rec30=mysqli_fetch_assoc($res30);
    $behavehousekeeping4=$rec30['behavehousekeeping4'];
      $behavehousekeeping41+=$behavehousekeeping4;
     $cmd31="select count(behavehousekeeping) as behavehousekeeping5 from ghi where date='$date' and behavehousekeeping='5'";
    require_once('dbcon.php');
    $res31=mysqli_query($conn,$cmd31);
    $rec31=mysqli_fetch_assoc($res31);
    $behavehousekeeping5=$rec31['behavehousekeeping5'];
      $behavehousekeeping51+=$behavehousekeeping5;
      $cmd32="select count(behavemess) as behavemess1 from ghi where date='$date' and behavemess='1'";
    require_once('dbcon.php');
    $res32=mysqli_query($conn,$cmd32);
    $rec32=mysqli_fetch_assoc($res32);
    $behavemess1=$rec32['behavemess1'];
      $behavemess11+=$behavemess1;
    $cmd33="select count(behavemess) as behavemess2 from ghi where date='$date' and behavemess='2'";
    require_once('dbcon.php');
    $res33=mysqli_query($conn,$cmd33);
    $rec33=mysqli_fetch_assoc($res33);
    $behavemess2=$rec33['behavemess2'];
      $behavemess21+=$behavemess2;
    $cmd34="select count(behavemess) as behavemess3 from ghi where date='$date' and behavemess='3'";
    require_once('dbcon.php');
    $res34=mysqli_query($conn,$cmd34);
    $rec34=mysqli_fetch_assoc($res34);
    $behavemess3=$rec34['behavemess3'];
      $behavemess31+=$behavemess3;
    $cmd35="select count(behavemess) as behavemess4 from ghi where date='$date' and behavemess='4'";
    require_once('dbcon.php');
    $res35=mysqli_query($conn,$cmd35);
    $rec35=mysqli_fetch_assoc($res35);
    $behavemess4=$rec35['behavemess4'];
      $behavemess41+=$behavemess4;
     $cmd36="select count(behavemess) as behavemess5 from ghi where date='$date' and behavemess='5'";
    require_once('dbcon.php');
    $res36=mysqli_query($conn,$cmd36);
    $rec36=mysqli_fetch_assoc($res36);
    $behavemess5=$rec36['behavemess5'];
      $behavemess51+=$behavemess5;
         $cmd37="select count(timefood) as timefood1 from ghi where date='$date' and timefood='1'";
    require_once('dbcon.php');
    $res37=mysqli_query($conn,$cmd37);
    $rec37=mysqli_fetch_assoc($res37);
    $timefood1=$rec37['timefood1'];
      $timefood11+=$timefood1;
    $cmd38="select count(timefood) as timefood2 from ghi where date='$date' and timefood='2'";
    require_once('dbcon.php');
    $res38=mysqli_query($conn,$cmd38);
    $rec38=mysqli_fetch_assoc($res38);
    $timefood2=$rec38['timefood2'];
      $timefood21+=$timefood2;
    $cmd39="select count(timefood) as timefood3 from ghi where date='$date' and timefood='3'";
    require_once('dbcon.php');
    $res39=mysqli_query($conn,$cmd39);
    $rec39=mysqli_fetch_assoc($res39);
    $timefood3=$rec39['timefood3'];
      $timefood31+=$timefood3;
    $cmd40="select count(timefood) as timefood4 from ghi where date='$date' and timefood='4'";
    require_once('dbcon.php');
    $res40=mysqli_query($conn,$cmd40);
    $rec40=mysqli_fetch_assoc($res40);
    $timefood4=$rec40['timefood4'];
      $timefood41+=$timefood4;
     $cmd41="select count(timefood) as timefood5 from ghi where date='$date' and timefood='5'";
    require_once('dbcon.php');
    $res41=mysqli_query($conn,$cmd41);
    $rec41=mysqli_fetch_assoc($res41);
    $timefood5=$rec41['timefood5'];
      $timefood51+=$timefood5;
      $cmd42="select count(qualityfood) as qualityfood1 from ghi where date='$date' and qualityfood='1'";
    require_once('dbcon.php');
    $res42=mysqli_query($conn,$cmd42);
    $rec42=mysqli_fetch_assoc($res42);
    $qualityfood1=$rec42['qualityfood1'];
      $qualityfood11+=$qualityfood1;
    $cmd43="select count(qualityfood) as qualityfood2 from ghi where date='$date' and qualityfood='2'";
    require_once('dbcon.php');
    $res43=mysqli_query($conn,$cmd43);
    $rec43=mysqli_fetch_assoc($res43);
    $qualityfood2=$rec43['qualityfood2'];
      $qualityfood21+=$qualityfood2;
    $cmd44="select count(qualityfood) as qualityfood3 from ghi where date='$date' and qualityfood='3'";
    require_once('dbcon.php');
    $res44=mysqli_query($conn,$cmd44);
    $rec44=mysqli_fetch_assoc($res44);
    $qualityfood3=$rec44['qualityfood3'];
      $qualityfood31+=$qualityfood3;
    $cmd45="select count(qualityfood) as qualityfood4 from ghi where date='$date' and qualityfood='4'";
    require_once('dbcon.php');
    $res45=mysqli_query($conn,$cmd45);
    $rec45=mysqli_fetch_assoc($res45);
    $qualityfood4=$rec45['qualityfood4'];
      $qualityfood41+=$qualityfood4;
     $cmd46="select count(qualityfood) as qualityfood5 from ghi where date='$date' and qualityfood='5'";
    require_once('dbcon.php');
    $res46=mysqli_query($conn,$cmd46);
    $rec46=mysqli_fetch_assoc($res46);
    $qualityfood5=$rec46['qualityfood5'];
      $qualityfood51+=$qualityfood5;
      $cmd47="select count(atmosphere) as atmosphere1 from ghi where date='$date' and atmosphere='1'";
    require_once('dbcon.php');
    $res47=mysqli_query($conn,$cmd47);
    $rec47=mysqli_fetch_assoc($res47);
    $atmosphere1=$rec47['atmosphere1'];
      $atmosphere11+=$atmosphere1;
    $cmd48="select count(atmosphere) as atmosphere2 from ghi where date='$date' and atmosphere='2'";
    require_once('dbcon.php');
    $res48=mysqli_query($conn,$cmd48);
    $rec48=mysqli_fetch_assoc($res48);
    $atmosphere2=$rec48['atmosphere2'];
      $atmosphere21+=$atmosphere2;
    $cmd49="select count(atmosphere) as atmosphere3 from ghi where date='$date' and atmosphere='3'";
    require_once('dbcon.php');
    $res49=mysqli_query($conn,$cmd49);
    $rec49=mysqli_fetch_assoc($res49);
    $atmosphere3=$rec49['atmosphere3'];
      $atmosphere31+=$atmosphere3;
    $cmd50="select count(atmosphere) as atmosphere4 from ghi where date='$date' and atmosphere='4'";
    require_once('dbcon.php');
    $res50=mysqli_query($conn,$cmd50);
    $rec50=mysqli_fetch_assoc($res50);
    $atmosphere4=$rec50['atmosphere4'];
      $atmosphere41+=$atmosphere4;
     $cmd51="select count(atmosphere) as atmosphere5 from ghi where date='$date' and atmosphere='5'";
    require_once('dbcon.php');
    $res51=mysqli_query($conn,$cmd51);
    $rec51=mysqli_fetch_assoc($res51);
    $atmosphere5=$rec51['atmosphere5'];
      $atmosphere51+=$atmosphere5;
  }
    $total= $atmosphere11+ $atmosphere21+ $atmosphere31+ $atmosphere41+ $atmosphere51;
    $total1=$reception11+$roomallotted11+$cleaningroom11+$cleaningtoilet11+$cleaninglinen11+$behavehousekeeping11+$behavemess11+$timefood11+$qualityfood11+$atmosphere11;
     $total2=$reception21+$roomallotted21+$cleaningroom21+$cleaningtoilet21+$cleaninglinen21+$behavehousekeeping21+$behavemess21+$timefood21+$qualityfood21+$atmosphere21;
     $total3=$reception31+$roomallotted31+$cleaningroom31+$cleaningtoilet31+$cleaninglinen31+$behavehousekeeping31+$behavemess31+$timefood31+$qualityfood31+$atmosphere31;
     $total4=$reception41+$roomallotted41+$cleaningroom41+$cleaningtoilet41+$cleaninglinen41+$behavehousekeeping41+$behavemess41+$timefood41+$qualityfood41+$atmosphere41;
     $total5=$reception51+$roomallotted51+$cleaningroom51+$cleaningtoilet51+$cleaninglinen51+$behavehousekeeping51+$behavemess51+$timefood51+$qualityfood51+$atmosphere51;
    $total11=$total1+$total2+$total3+$total4+$total5;
?>
<table border="1">
    <h6>Marks Given In Feed Back</h6>
    <tr>
  <th id="x" colspan="9">Feed Back Summary from <?php echo ($D3)?> to <?php echo ($D4)?> Of Running Room Tundla </th>  
    
    </tr>
    <tr>
   <th id="x">Sl No.</th> 
   <th id="x">Item</th> 
   <th id="x">No Of FeedBack</th> 
   <th id="x">1</th> 
   <th id="x">2</th> 
   <th id="x">3</th> 
   <th id="x">4</th> 
   <th id="x">5</th> 
   <th id="x">Total</th> 
    </tr>
    <tr>
        <th id="x">1</th>
        <th>लॉबी द्वारा रनिंग रूम में कमरे की आवंटन व्यवस्था</th>
        <th id="x" rowspan="10"><?php echo($total) ?></th>
        <td ><?php echo($roomallotted11) ?></td>
        <td ><?php echo($roomallotted21) ?></td>
        <td ><?php echo($roomallotted31) ?></td>
        <td ><?php echo($roomallotted41) ?></td>
        <td ><?php echo($roomallotted51) ?></td>
        <td ><?php echo($total) ?></td>
    </tr>
    <tr>
        <th id="x">2</th>
        <th>रनिंग रूम के रिसेप्शन की क्वालिटी</th>
        
        <td ><?php echo($reception11) ?></td>
        <td ><?php echo($reception21) ?></td>
        <td ><?php echo($reception31) ?></td>
        <td ><?php echo($reception41) ?></td>
        <td ><?php echo($reception51) ?></td>
        <td ><?php echo($total) ?></td>
    </tr>
    <tr>
        <th id="x">3</th>
        <th>आवंटित कमरे की साफ़ सफाई</th>
        
        <td ><?php echo($cleaningroom11) ?></td>
        <td ><?php echo($cleaningroom21) ?></td>
        <td ><?php echo($cleaningroom31) ?></td>
        <td ><?php echo($cleaningroom41) ?></td>
        <td ><?php echo($cleaningroom51) ?></td>
        <td ><?php echo($total) ?></td>
    </tr>
     <tr>
        <th id="x">4</th>
        <th>टॉयलेट की साफ़ सफाई</th>
        
        <td ><?php echo($cleaningtoilet11) ?></td>
        <td ><?php echo($cleaningtoilet21) ?></td>
        <td ><?php echo($cleaningtoilet31) ?></td>
        <td ><?php echo($cleaningtoilet41) ?></td>
        <td ><?php echo($cleaningtoilet51) ?></td>
        <td ><?php echo($total) ?></td>
    </tr>
    <tr>
        <th id="x">5</th>
        <th>लिनेन वाशिंग की गुणवत्ता</th>
        
        <td ><?php echo($cleaninglinen11) ?></td>
        <td ><?php echo($cleaninglinen21) ?></td>
        <td ><?php echo($cleaninglinen31) ?></td>
        <td ><?php echo($cleaninglinen41) ?></td>
        <td ><?php echo($cleaninglinen51) ?></td>
        <td ><?php echo($total) ?></td>
    </tr>
     <tr>
        <th id="x">6</th>
        <th>हाउस कीपिंग स्टाफ का व्यवहार</th>
        
        <td ><?php echo($behavehousekeeping11) ?></td>
        <td ><?php echo($behavehousekeeping21) ?></td>
        <td ><?php echo($behavehousekeeping31) ?></td>
        <td ><?php echo($behavehousekeeping41) ?></td>
        <td ><?php echo($behavehousekeeping51) ?></td>
        <td ><?php echo($total) ?></td>
    </tr>
    <tr>
        <th id="x">7</th>
        <th>मेस कर्मचारियों का व्यवहार</th>
        
        <td ><?php echo($behavemess11) ?></td>
        <td ><?php echo($behavemess21) ?></td>
        <td ><?php echo($behavemess31) ?></td>
        <td ><?php echo($behavemess41) ?></td>
        <td ><?php echo($behavemess51) ?></td>
        <td ><?php echo($total) ?></td>
    </tr>
    <tr>
     <th id="x">8</th>
        <th>भोजन को तैयार करने में लगा समय</th>
        
        <td ><?php echo($timefood11) ?></td>
        <td ><?php echo($timefood21) ?></td>
        <td ><?php echo($timefood31) ?></td>
        <td ><?php echo($timefood41) ?></td>
        <td ><?php echo($timefood51) ?></td>
        <td ><?php echo($total) ?></td>
    </tr>
     <tr>
     <th id="x">9</th>
        <th>भोजन की गुणवत्ता</th>
        
        <td ><?php echo($qualityfood11) ?></td>
        <td ><?php echo($qualityfood21) ?></td>
        <td ><?php echo($qualityfood31) ?></td>
        <td ><?php echo($qualityfood41) ?></td>
        <td ><?php echo($qualityfood51) ?></td>
        <td ><?php echo($total) ?></td>
    </tr>
     <tr>
     <th id="x">10</th>
        <th>रनिंग रूम परिसर में स्वच्छ वातावरण</th>
        
        <td ><?php echo($atmosphere11) ?></td>
        <td ><?php echo($atmosphere21) ?></td>
        <td ><?php echo($atmosphere31) ?></td>
        <td ><?php echo($atmosphere41) ?></td>
        <td ><?php echo($atmosphere51) ?></td>
        <td ><?php echo($total) ?></td>
    </tr>
    <tr>
     <th id="x">Total</th>
        <th></th>
        
        <td ></td>
        <td ><?php echo($total1) ?></td>
        <td ><?php echo($total2) ?></td>
        <td ><?php echo($total3) ?></td>
        <td ><?php echo($total4) ?></td>
        <td ><?php echo($total5) ?></td>
        <td ><?php echo($total11) ?></td>
        
    </tr>
     </table>    
    
    
    
    
    <?php
    
}

        ?>
        </div>
        
        </body>
    </html>