<!DOCTYPE html>
<?php date_default_timezone_set("Asia/Kolkata")?>

<html>
<head>
     <?php require_once("head.php")?>
    <style>
        h5{
            margin-top: 10Px;
        }
        
    </style>
     
    </head>
<body>

    <a class="btn btn-outline-success" href="rroom_main.php" role="button">Home</a>
    

<?php
 
if(isset($_POST['call_book']))
{
	$crew_id = trim($_POST['crew_id']);
	$crew_id2 = trim($_POST['crew_id2']);
	$crew_id3 = trim($_POST['crew_id3']);
    echo($crew_id);
    echo($crew_id2);
    echo($crew_id3);
	$date = trim($_POST['date']);
	$time = trim($_POST['time']);
    $date1= date("d/m/Y", strtotime($date));
    //echo($date1);
	
    $d1=date('d/m/Y');
    $d2=date('H:m:s');
  require_once('dbcon.php');
  $cmd4="select crew_name,designation, bed_no from room_number where crew_id='$crew_id' and status='1'" ; 
    $res4=mysqli_query($conn,$cmd4);
    $rec4=mysqli_fetch_assoc($res4);
    $bed_no=$rec4['bed_no'];
    $crew_name=$rec4['crew_name'];
    $designation=$rec4['designation'];
  $cmd5="select crew_name,designation, bed_no from room_number where crew_id='$crew_id2' and status='1'" ; 
    $res5=mysqli_query($conn,$cmd5);
    $rec5=mysqli_fetch_assoc($res5);  
     $bed_no2=$rec5['bed_no'];
    $crew_name2=$rec5['crew_name'];
    $designation2=$rec5['designation'];
$cmd6="select crew_name,designation, bed_no from room_number where crew_id='$crew_id3' and status='1'" ; 
    $res6=mysqli_query($conn,$cmd6);
    $rec6=mysqli_fetch_assoc($res6);  
     $bed_no3=$rec6['bed_no'];
    $crew_name3=$rec6['crew_name'];
    $designation3=$rec6['designation'];
    
   

    if($crew_id<>'NA'){
    echo "<table>";
    echo "<tr>";
        echo " <th>Crew ID:- </th>";
     echo "<td>$crew_id</td>";   
     
       echo "</tr>";
        echo "<tr>";
        echo" <th>Crew Name:- </th>";
     echo "<td>$crew_name</td>";   
     
       echo "</tr>";
         echo "<tr>";
        echo" <th>Designation:- </th>";
     echo "<td>$designation</td>";   
     
       echo "</tr>";
        
    echo "<tr>";
        echo" <th>Allotted BED Number:- </th>";
     echo "<td>$bed_no</td>";   
     
       echo "</tr>";
         echo "<tr>";
        echo" <th>Called Date :- </th>";
     echo "<td>$date1</td>";   
     
       echo "</tr>";
     echo "<tr>";
        echo" <th>Called Time :- </th>";
     echo "<td>'$time</td>";   
     
       echo "</tr>";   
       echo "<tr>";
        echo "<td><h5>Signature <br>(R/Room Incharge)</h5></td>";
           echo "<td><h5>Signature <br>(Crew)</h5></td>";
      echo "</tr>"; 
    echo "</table>";
    }
        
         if($crew_id2<>'NA'){
    echo "<table>";
    echo "<tr>";
        echo " <th>Crew ID:- </th>";
     echo "<td><$crew_id2></td>";   
     
       echo "</tr>";
        echo "<tr>";
        echo" <th>Crew Name:- </th>";
     echo "<td>$crew_name2</td>";   
     
       echo "</tr>";
         echo "<tr>";
        echo" <th>Designation:- </th>";
     echo "<td>$designation2</td>";   
     
       echo "</tr>";
        
    echo "<tr>";
        echo" <th>Allotted BED Number:- </th>";
     echo "<td>$bed_no2</td>";   
     
       echo "</tr>";
         echo "<tr>";
        echo" <th>Called Date :- </th>";
     echo "<td>$date1</td>";   
     
       echo "</tr>";
     echo "<tr>";
        echo" <th>Called Time :- </th>";
     echo "<td>$time</td>";   
     
       echo "</tr>";   
       echo "<tr>";
        echo "<td><h5>Signature <br>(R/Room Incharge)</h5></td>";
           echo "<td><h5>Signature <br>(Crew)</h5></td>";
      echo "</tr>"; 
    echo "</table>";
    }
    
    if($crew_id3<>'NA'){
    echo "<table>";
    echo "<tr>";
        echo " <th>Crew ID:- </th>";
     echo "<td>$crew_id3</td>";   
     
       echo "</tr>";
        echo "<tr>";
        echo" <th>Crew Name:- </th>";
     echo "<td>$crew_name3</td>";   
     
       echo "</tr>";
         echo "<tr>";
        echo" <th>Designation:- </th>";
     echo "<td>$designation3</td>";   
     
       echo "</tr>";
        
    echo "<tr>";
        echo" <th>Allotted BED Number:- </th>";
     echo "<td>$bed_no3</td>";   
     
       echo "</tr>";
         echo "<tr>";
        echo" <th>Called Date :- </th>";
     echo "<td>$date1</td>";   
     
       echo "</tr>";
     echo "<tr>";
        echo" <th>Called Time :- </th>";
     echo "<td>$time</td>";   
     
       echo "</tr>";   
       echo "<tr>";
        echo "<td><h5>Signature <br>(R/Room Incharge)</h5></td>";
           echo "<td><h5>Signature <br>(Crew)</h5></td>";
      echo "</tr>"; 
    echo "</table>";
    }
   
   require_once('dbcon.php');
    if($crew_id<>'NA'){
    $cmd7="Update room_number set status='3' where bed_no='$bed_no'";
    $res7 = mysqli_query($conn,$cmd7); 
    }
    if($crew_id2<>'NA'){
 $cmd8="Update room_number set status='3' where bed_no='$bed_no2'";
    $res8 = mysqli_query($conn,$cmd8); 
    }
    if($crew_id3<>'NA'){
 $cmd9="Update room_number set status='3' where bed_no='$bed_no3'";
    $res9 = mysqli_query($conn,$cmd9);    
    }
if($crew_id<>'NA'){
 $cmd1="Update main set status='3' where crew_id='$crew_id' and status='1'";
    $res1 = mysqli_query($conn,$cmd1);
}
    if($crew_id2<>'NA'){
$cmd2="Update main set status='3' where crew_id='$crew_id2' and status='1'";
    $res2 = mysqli_query($conn,$cmd2);
    }
    if($crew_id3<>'NA'){
$cmd3="Update main set status='3' where crew_id='$crew_id3' and status='1'";
    $res3 = mysqli_query($conn,$cmd3); 
    }
 
}
  
    
    
    
    
    
    ?>    
  <button type="submit" onclick="window.print()" class="btn btn-primary" name="print">Print</button>     
 
           

 
   
    
      
      
      
      
      
    
   
 
          
           
    
    

   
   
   
    </body>
</html>
