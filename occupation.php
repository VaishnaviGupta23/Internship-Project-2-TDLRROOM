
<html>
    <?php require_once("head.php") ?>
    <?php require_once("dbcon.php") ?>
   
   
<head>
    <style>
        
      
      
        h1 {
       text-align: center;
       font-size: 70Px;
       font-weight: bolder;
           
       color: red;
  text-shadow: 0 1px 0 #ccc,
               0 2px 0 #c9c9c9,
               0 3px 0 #bbb,
               0 4px 0 #b9b9b9,
               0 5px 0 #aaa,
               0 6px 1px rgba(0,0,0,.1),
               0 0 5px rgba(0,0,0,.1),
               0 1px 3px rgba(0,0,0,.3),
               0 3px 5px rgba(0,0,0,.2),
               0 5px 10px rgba(0,0,0,.25),
               0 10px 10px rgba(0,0,0,.2),
               0 20px 20px rgba(0,0,0,.15);
       
}
        h2{
         text-align:center;
       font-size: 80Px;
       font-weight: bolder; 
            color:greenyellow;
        }
        h3{
            text-align: center;
            color:blue;
            font-size:50px;
            font-weight: bolder;
        }
         h4{
            text-align: center;
            color:blueviolet;
            font-size:40px;
            font-weight: bolder;
        }
        #tt{
          height: 55Px;
            font-size:40Px;
            text-align: center;
            background-color: transparent;
            color: green;
            font-weight: bolder;
        }
        option{
            font-size: 30Px;
            color: green;
        }
        label{
            font-size:40Px;
            font-weight: bold;
            color: crimson;
            text-align: center;
        }
         .btn{
           width: 30%;
           height: 60Px;
           font-size: 30Px;
           margin-left: 30%;
             background-color: transparent;
             outline:none;
       }
         table{
           border-collapse: collapse;
          table-layout:auto;
         
      }
      th,td{
          width: 80PX;
          color: brown;
          height: 80Px;
          border-bottom: 3Px solid #f00;
          
      }
      body{
          background-color:white;
      }
      #floor{
          font-size: 35PX;
      }
      #A{
      transform: rotate(-90deg) ;
          font-size: 30Px;
          color:blue;
          width: 30Px;
      }
      #B{
          height: 20Px;
          color:crimson;
          font-size: 25Px;
          text-align: center;
      }
      #C{
          color: darkcyan;
           font-size: 30Px;
          text-align: center;
      }
      #D{
          text-align: center;
          font-size: 40Px;
          font-family:sans-serif;
          
        
      }
      #lav{
          color: crimson;
          font-size: 20Px;
      } 
      #mn{
          text-align: center;
          font-size: 25Px;
          font-weight: bolder;
      }
      
      
      
      td img{
    display: block;
    margin-left: auto;
    margin-right: auto;

}
   ul li{
  display: inline;
}
      #head{
          font-size: 25PX;
      }
      h2{
          margin: 0;
      }
      #ganga,#yamuna{
          font-size:35Px;
          color:chocolate;
      }
      #Y{
          table-layout: fixed;
          width: 100%;
      }
      #M{
          text-align: right;
          color: darkmagenta;
      }
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </style>
    
    </head>
<body>
 
    <div class="container col-sm-12">
 <div>
 <h2>TDL RUNNING ROOM</h2>
        
        </div>
        <div class="w3-padding-32 w3-blue w3-circle w3-center">
    <h1>Hospitality Operation Management Eco-System <br> (HOMES)</h1>
            
    </div> 
     <?php
  $card_no=$_GET['card_no'];
   //echo ($card_no);
$cmd="select * from lobby_data where a_card_no='$card_no' order by id desc limit 1";
    $res=mysqli_query($conn,$cmd);
    if(mysqli_num_rows($res)>0){
      $rec=mysqli_fetch_assoc($res);
        $lp_id=$rec['lp_id'];
        $lp_name=$rec['lp_name'];
        $lp_hq=$rec['lp_hq'];
        $lp_des=$rec['lp_des'];
        $train=$rec['train'];
        $type=$rec['type'];
        $status=$rec['status'];
      
      if($status==1){
     ?>   
          
    <h3>Please Allot Room to Sri <?php echo $lp_name ?>/<?php echo $lp_des ?>/<?php echo $lp_hq ?></h3> 
      <div class="row">
<div class="container col-sm-6">
 
   
    
  <table border="3">
      <tr>
   <th rowspan="3" id="A">Ground-Floor</th>  
   <th id="B">Room No</th>  
   <th id="B">01</th>  
   <th id="B">02 </th>  
   <th id="B">03</th>  
   <th id="B">04</th>  
   <th id="B">05</th>  
   <th id="B">06</th>  
   <th id="B">07</th>  
   <th id="B">08</th>  
   <th id="B">09</th>  
  
  
   
          
      
   </tr>
      
     <tr>
          <th id="C">Bed-A</th>  
   
  <?php
            $cmd1="select * from room_number";
         require_once('dbcon.php');
         $res1=mysqli_query($conn,$cmd1);
         while($rec1=mysqli_fetch_assoc($res1)){
             $roomno=$rec1['bed_no'];
             $status=$rec1['status'];
             $room_number=$rec1['room_number'];
             $wing=$rec1['wing'];
             $floor_no=$room_number[0];
             //echo ($floor_no);
             $bed_serial=substr($roomno,-1);
             
             //echo ($room_number);
             //echo "<br>";
            
        
        if($status==0 and $floor_no=='1' and $bed_serial=='A' and $wing=='1' )
             {
                
          echo "<td><a href='add_occupation.php?crew_id=$lp_id & crew_name=$lp_name & designation=$lp_des  & hq=$lp_hq &wkg_type=$type & train=$train &bed=$roomno & card_no=$card_no'><img src='images/GREEN1.JPG' alt='Green image' style='height:20px text-align:centre'></a></td>";   
        
             }
            if($status==1 and $floor_no=='1' and $bed_serial=='A' and $wing=='1' )
            {
                 echo "<td><img src='images/RED1.JPG' alt='Red image' style='height:20px text-align:centre'></td>"; 
             }
             if($status==2 and $floor_no=='1' and $bed_serial=='A'  and $wing=='1'){
                 echo "<td><img src='images/BLUE.JPG' alt='Blue image' style='height:20px text-align:centre'></td>"; 
             }
             if($status==3 and $floor_no=='1' and $bed_serial=='A' and $wing=='1'){
                 echo "<td><img class='blink-image' id='fire' src='images/YELLOW.JPG' alt='Yellow image' style='height:20px text-align:centre'></td>"; 
             }
             
      
            
            
              
              
              
         }
        
   
       
         ?>
   
   </tr>
      
 <tr>
          
   <th id="C">Bed-B</th>  
  <?php
            $cmd1="select * from room_number";
         require_once('dbcon.php');
         $res1=mysqli_query($conn,$cmd1);
         while($rec1=mysqli_fetch_assoc($res1)){
             $roomno=$rec1['bed_no'];
             $status=$rec1['status'];
              $room_number=$rec1['room_number'];
                $wing=$rec1['wing'];
             $room=substr($roomno,-1);
             $floor_no=$room_number[0];
             //echo ($floor_no);
             $bed_serial=substr($roomno,-1);
             
             
             
            if($status==0 and $floor_no=='1' and $bed_serial=='B'  and $wing=='1' ){
                 echo "<td><a href='add_occupation.php?crew_id=$lp_id & crew_name=$lp_name & designation=$lp_des  & hq=$lp_hq &wkg_type=$type & train=$train &bed=$roomno & card_no=$card_no'><img src='images/GREEN1.JPG' alt='Green image' style='height:20px text-align:centre'></a></td>";
             }
            if($status==1 and $floor_no=='1' and $bed_serial=='B' and $wing=='1' ){
                 echo "<td><img src='images/RED1.JPG' alt='Red image' style='height:20px text-align:centre'></td>"; 
             }
             if($status==2 and $floor_no=='1' and $bed_serial=='B' and $wing=='1' ){
                 echo "<td><img src='images/BLUE.JPG' alt='Blue image' style='height:20px text-align:centre'></td>"; 
             }
             if($status==3 and $floor_no=='1' and $bed_serial=='B' and $wing=='1' ){
                 echo "<td><img class='blink-image' id='fire' src='images/YELLOW.JPG' alt='Blue image' style='height:20px text-align:centre'></td>"; 
             }      
                 
                 
                 
             
         }
       
         ?>
   
          
      
   </tr>       
     
   <tr>
   <th rowspan="3" id="A">Ground Floor</th>  
   <th id="B">Room No</th>  
   <th id="B">10</th>  
   <th id="B">11 </th>  
   <th id="B">12</th>  
   <th id="B">13</th>  
   <th id="B">14</th>  
   <th id="B">15</th>  
   <th id="B">16</th>  
   <th id="B">17</th>  
   <th id="B">18</th>  
 
  
   
          
      
   </tr>  
 <tr>
          
   <th id="C">Bed-A</th>   
  <?php
            $cmd1="select * from room_number";
         require_once('dbcon.php');
         $res1=mysqli_query($conn,$cmd1);
         while($rec1=mysqli_fetch_assoc($res1)){
             $roomno=$rec1['bed_no'];
             $status=$rec1['status'];
             $room_number=$rec1['room_number'];
                $wing=$rec1['wing'];
             $floor_no=$room_number[0];
             //echo ($floor_no);
             $bed_serial=substr($roomno,-1);
            //echo ($bed_serial);
              
             
           
           
             
              if($status==0 and $floor_no=='1' and $bed_serial=='A' and $wing=='2' ){
                echo "<td><a href='add_occupation.php?crew_id=$lp_id & crew_name=$lp_name & designation=$lp_des  & hq=$lp_hq &wkg_type=$type & train=$train &bed=$roomno & card_no=$card_no'><img src='images/GREEN1.JPG' alt='Green image' style='height:20px text-align:centre'></a></td>";
             }
            if($status==1 and $floor_no=='1' and $bed_serial=='A' and $wing=='2' ){
                 echo "<td><img src='images/RED1.JPG' alt='Red image' style='height:20px text-align:centre'></td>"; 
             }
             if($status==2 and $floor_no=='1' and $bed_serial=='A' and $wing=='2' ){
                 echo "<td><img src='images/BLUE.JPG' alt='Blue image' style='height:20px text-align:centre'></td>"; 
             }
             if($status==3 and $floor_no=='1' and $bed_serial=='A' and $wing=='2' ){
                 echo "<td><img class='blink-image' id='fire' src='images/YELLOW.JPG' alt='Blue image' style='height:20px text-align:centre'></td>"; 
             }         
                 
                 
                 
                 
                 
             
         }
         
       
         ?>
   
   </tr>
      
 <tr>
          
    <th id="C">Bed-B</th>   
  <?php
            $cmd1="select * from room_number";
         require_once('dbcon.php');
         $res1=mysqli_query($conn,$cmd1);
         while($rec1=mysqli_fetch_assoc($res1)){
             $roomno=$rec1['bed_no'];
             $status=$rec1['status'];
              $room_number=$rec1['room_number'];
                $wing=$rec1['wing'];
             $room=substr($roomno,-1);
             $floor_no=$room_number[0];
             //echo ($floor_no);
             $bed_serial=substr($roomno,-1);
             
               
            
          
             
           if($status==0 and $floor_no=='1' and $bed_serial=='B' and $wing=='2' ){
                echo "<td><a href='add_occupation.php?crew_id=$lp_id & crew_name=$lp_name & designation=$lp_des  & hq=$lp_hq &wkg_type=$type & train=$train &bed=$roomno & card_no=$card_no'><img src='images/GREEN1.JPG' alt='Green image' style='height:20px text-align:centre'></a></td>";
             }
            if($status==1 and $floor_no=='1' and $bed_serial=='B'  and $wing=='2' ){
                 echo "<td><img src='images/RED1.JPG' alt='Red image' style='height:20px text-align:centre'></td>"; 
             }
              if($status==2 and $floor_no=='1' and $bed_serial=='B'  and $wing=='2' ){
                 echo "<td><img src='images/BLUE.JPG' alt='Blue image' style='height:20px text-align:centre'></td>"; 
             }
             if($status==3 and $floor_no=='1' and $bed_serial=='B' and $wing=='2' ){
                 echo "<td><img class='blink-image' id='fire' src='images/YELLOW.JPG' alt='Blue image' style='height:20px text-align:centre'></td>"; 
             }            
                 
                 
                 
                 
             
             }
        
       
         ?>
   
          
      
   </tr>          
 <tr>
  <th rowspan="3" id="A">First Floor</th>  
   
   <th id="B">Room No</th>  
   <th id="B">19</th>  
   <th id="B">20 </th>  
   <th id="B">21</th>  
   <th id="B">22</th>  
   <th id="B">23</th>  
   <th id="B">24</th>  
   <th id="B">25</th>  
   <th id="B">26</th>  
   <th id="B">27</th>  
  
  
   
          
      
   </tr>  
 <tr>
          
   <th id="C">Bed-A</th>  
  <?php
            $cmd1="select * from room_number";
         require_once('dbcon.php');
         $res1=mysqli_query($conn,$cmd1);
         while($rec1=mysqli_fetch_assoc($res1)){
             $roomno=$rec1['bed_no'];
             $status=$rec1['status'];
             $room_number=$rec1['room_number'];
             $wing=$rec1['wing'];
             $floor_no=$room_number[0];
             //echo ($floor_no);
             $bed_serial=substr($roomno,-1);
            //echo ($bed_serial);
             
            
            
          if($status==0 and $floor_no=='2' and $bed_serial=='A' and $wing=='3' ){
                 echo "<td><a href='add_occupation.php?crew_id=$lp_id & crew_name=$lp_name & designation=$lp_des  & hq=$lp_hq &wkg_type=$type & train=$train &bed=$roomno & card_no=$card_no'><img src='images/GREEN1.JPG' alt='Green image' style='height:20px text-align:centre'></a></td>";
             }
            if($status==1 and $floor_no=='2' and $bed_serial=='A'  and $wing=='3' ){
                 echo "<td><img src='images/RED1.JPG' alt='Red image' style='height:20px text-align:centre'></td>"; 
             }
             if($status==2 and $floor_no=='2' and $bed_serial=='A' and $wing=='3' ){
                 echo "<td><img src='images/BLUE.JPG' alt='Blue image' style='height:20px text-align:centre'></td>"; 
             }
             if($status==3 and $floor_no=='2' and $bed_serial=='A' and $wing=='3' ){
                 echo "<td><img class='blink-image' id='fire' src='images/YELLOW.JPG' alt='Blue image' style='height:20px text-align:centre'></td>"; 
             }       
                 
                 
                 
                 
            
             
         }
       
         ?>
   
   </tr>
      
 <tr>
        
   <th id="C">Bed-B</th>  
  <?php
            $cmd1="select * from room_number";
         require_once('dbcon.php');
         $res1=mysqli_query($conn,$cmd1);
         while($rec1=mysqli_fetch_assoc($res1)){
             $roomno=$rec1['bed_no'];
             $status=$rec1['status'];
            $room_number=$rec1['room_number'];
            $wing=$rec1['wing'];
             
             $room=substr($roomno,-1);
             $floor_no=$room_number[0];
             //echo ($floor_no);
             $bed_serial=substr($roomno,-1);
             
            
          
            if($status==0 and $floor_no=='2' and $bed_serial=='B' and $wing=='3' ){
                echo "<td><a href='add_occupation.php?crew_id=$lp_id & crew_name=$lp_name & designation=$lp_des  & hq=$lp_hq &wkg_type=$type & train=$train &bed=$roomno & card_no=$card_no'><img src='images/GREEN1.JPG' alt='Green image' style='height:20px text-align:centre'></a></td>";
             }
            if($status==1 and $floor_no=='2' and $bed_serial=='B' and $wing=='3' ){
                 echo "<td><img src='images/RED1.JPG' alt='Red image' style='height:20px text-align:centre'></td>"; 
             }
              if($status==2 and $floor_no=='2' and $bed_serial=='B' and $wing=='3' ){
                 echo "<td><img src='images/BLUE.JPG' alt='Blue image' style='height:20px text-align:centre'></td>"; 
             }
             if($status==3 and $floor_no=='2' and $bed_serial=='B' and $wing=='3' ){
                 echo "<td><img class='blink-image' id='fire1' src='images/YELLOW.JPG' alt='Blue image' style='height:20px text-align:centre'></td>"; 
             }     
                 
                 
                 
             
         }
       
         ?>
   
          
      
   </tr>             
<tr>
   <th rowspan="3" id="A">First Floor</th>  
   <th id="B">Room No</th>  
   <th id="B">28</th>  
   <th id="B">29 </th>  
   <th id="B">30</th>  
   <th id="B">31</th>  
   <th id="B">32</th>  
   <th id="B">33</th>  
   <th id="B">34</th>  
   <th id="B">35</th>  
   <th id="B">36</th>  
  
   
          
      
   </tr>  
 <tr>
      
   <th id="C">Bed-A</th>   
  <?php
            $cmd1="select * from room_number";
         require_once('dbcon.php');
         $res1=mysqli_query($conn,$cmd1);
         while($rec1=mysqli_fetch_assoc($res1)){
             $roomno=$rec1['bed_no'];
             $status=$rec1['status'];
              $room_number=$rec1['room_number'];
              $wing=$rec1['wing'];
             $floor_no=$room_number[0];
             //echo ($floor_no);
             $bed_serial=substr($roomno,-1);
            //echo ($bed_serial);
             
             
            
            
             if($status==0 and $floor_no=='2' and $bed_serial=='A' and $wing=='4' ){
                echo "<td><a href='add_occupation.php?crew_id=$lp_id & crew_name=$lp_name & designation=$lp_des  & hq=$lp_hq &wkg_type=$type & train=$train &bed=$roomno & card_no=$card_no'><img src='images/GREEN1.JPG' alt='Green image' style='height:20px text-align:centre'></a></td>";
             }
            if($status==1 and $floor_no=='2' and $bed_serial=='A' and $wing=='4' ){
                 echo "<td><img src='images/RED1.JPG' alt='Red image' style='height:20px text-align:centre'></td>"; 
             }
             if($status==2 and $floor_no=='2' and $bed_serial=='A' and $wing=='4' ){
                 echo "<td><img src='images/BLUE.JPG' alt='Blue image' style='height:20px text-align:centre'></td>"; 
             }
             if($status==3 and $floor_no=='2' and $bed_serial=='A' and $wing=='4' ){
                 echo "<td><img class='blink-image' id='fire' src='images/YELLOW.JPG' alt='Blue image' style='height:20px text-align:centre'></td>"; 
             }        
                 
                 
                 
            
             
             }
         
       
         ?>
   
   </tr>
      
 <tr>
          
   <th id="C">Bed-B</th>  
  <?php
            $cmd1="select * from room_number";
         require_once('dbcon.php');
         $res1=mysqli_query($conn,$cmd1);
         while($rec1=mysqli_fetch_assoc($res1)){
             $roomno=$rec1['bed_no'];
             $status=$rec1['status'];
             $room_number=$rec1['room_number'];
             $wing=$rec1['wing'];
             $room=substr($roomno,-1);
             $floor_no=$room_number[0];
             //echo ($floor_no);
             $bed_serial=substr($roomno,-1);
                    
              
           
           
               if($status==0 and $floor_no=='2' and $bed_serial=='B'  and $wing=='4' ){
                 echo "<td><a href='add_occupation.php?crew_id=$lp_id & crew_name=$lp_name & designation=$lp_des  & hq=$lp_hq &wkg_type=$type & train=$train &bed=$roomno & card_no=$card_no'><img src='images/GREEN1.JPG' alt='Green image' style='height:20px text-align:centre'></a></td>";
             }
            if($status==1 and $floor_no=='2' and $bed_serial=='B' and $wing=='4' ){
                 echo "<td><img src='images/RED1.JPG' alt='Red image' style='height:20px text-align:centre'></td>"; 
             }
             if($status==2 and $floor_no=='2' and $bed_serial=='B' and $wing=='4' ){
                 echo "<td><img src='images/BLUE.JPG' alt='Blue image' style='height:20px text-align:centre'></td>"; 
             }
             if($status==3 and $floor_no=='2' and $bed_serial=='B' and $wing=='4' ){
                 echo "<td><img class='blink-image' id='fire' src='images/YELLOW.JPG' alt='Blue image' style='height:20px text-align:centre'></td>"; 
             }     
             
             }
         
       
         ?>
   
          
      
   </tr>             

   
    
    
    
    
    
          
    
     </table>  
    
    </div>
     
    <div class="container col-sm-6 bg-grey">

       
        <table id="Y" border="3">
     <tr>
  
   <th id="B">Room No</th>  
   <th id="B">37</th>  
   <th id="B">38 </th>  
   <th id="B">39</th>  
   <th id="B">40</th>  
   <th id="B">41</th>  
   <th id="B">42</th>  
   <th id="B">43</th>  
       
      
   </tr>
      
     <tr>
          <th id="C">Bed-A</th>  
   
  <?php
            $cmd1="select * from room_number order by room_number";
         require_once('dbcon.php');
         $res1=mysqli_query($conn,$cmd1);
         while($rec1=mysqli_fetch_assoc($res1)){
             $roomno=$rec1['bed_no'];
             $status=$rec1['status'];
             $room_number=$rec1['room_number'];
             $wing=$rec1['wing'];
             $floor_no=$roomno[0];
           
             $bed_serial=substr($roomno,-1);
             
             //echo ($room_number);
             //echo "<br>";
            
        
        if($status==0 and $bed_serial=='A' and $wing=='6' )
             {
                echo "<td><a href='add_occupation.php?crew_id=$lp_id & crew_name=$lp_name & designation=$lp_des  & hq=$lp_hq &wkg_type=$type & train=$train &bed=$roomno & card_no=$card_no'><img src='images/GREEN1.JPG' alt='Green image' style='height:20px text-align:centre'></a></td>";
             }
            if($status==1 and $bed_serial=='A' and $wing=='6' )
            {
                 echo "<td><img src='images/RED1.JPG' alt='Red image' style='height:20px text-align:centre'></td>"; 
             }
             if($status==2 and $bed_serial=='A'  and $wing=='6'){
                 echo "<td><img src='images/BLUE.JPG' alt='Blue image' style='height:20px text-align:centre'></td>"; 
             }
             if($status==3 and $bed_serial=='A' and $wing=='6'){
                 echo "<td><img class='blink-image' id='fire' src='images/YELLOW.JPG' alt='Yellow image' style='height:20px text-align:centre'></td>"; 
             }
      
         }
      
         ?>
   
   </tr>
     <tr>
          <th id="C">Bed-B</th>  
   
  <?php
            $cmd1="select * from room_number order by room_number";
         require_once('dbcon.php');
         $res1=mysqli_query($conn,$cmd1);
         while($rec1=mysqli_fetch_assoc($res1)){
             $roomno=$rec1['bed_no'];
             $status=$rec1['status'];
             $room_number=$rec1['room_number'];
             $wing=$rec1['wing'];
             $floor_no=$roomno[0];
            
             $bed_serial=substr($roomno,-1);
             
             //echo ($room_number);
             //echo "<br>";
            
        
        if($status==0 and $bed_serial=='B' and $wing=='6' )
             {
                echo "<td><a href='add_occupation.php?crew_id=$lp_id & crew_name=$lp_name & designation=$lp_des  & hq=$lp_hq &wkg_type=$type & train=$train &bed=$roomno & card_no=$card_no'><img src='images/GREEN1.JPG' alt='Green image' style='height:20px text-align:centre'></a></td>";
             }
            if($status==1 and $bed_serial=='B' and $wing=='6' )
            {
                 echo "<td><img src='images/RED1.JPG' alt='Red image' style='height:20px text-align:centre'></td>"; 
             }
             if($status==2 and $bed_serial=='B'  and $wing=='6'){
                 echo "<td><img src='images/BLUE.JPG' alt='Blue image' style='height:20px text-align:centre'></td>"; 
             }
             if($status==3 and $bed_serial=='B' and $wing=='6'){
                 echo "<td><img class='blink-image' id='fire' src='images/YELLOW.JPG' alt='Yellow image' style='height:20px text-align:centre'></td>"; 
             }
      
         }
      
         ?>
   
   </tr>
            <tr>
  
   <th id="B">Room No</th>  
   <th id="B">44</th>  
   <th id="B">45 </th>  
   <th id="B">46</th>  
   <th id="B">47</th>  
   <th id="B">48</th>  
   <th id="B">49</th>  
   <th id="B">50</th>  
       
      
   </tr>
     <tr>
          <th id="C">Bed-A</th>  
   
  <?php
            $cmd1="select * from room_number order by room_number";
         require_once('dbcon.php');
         $res1=mysqli_query($conn,$cmd1);
         while($rec1=mysqli_fetch_assoc($res1)){
             $roomno=$rec1['bed_no'];
             $status=$rec1['status'];
             $room_number=$rec1['room_number'];
             $wing=$rec1['wing'];
             $floor_no=$roomno[0];
            
             $bed_serial=substr($roomno,-1);
             
             //echo ($room_number);
             //echo "<br>";
            
        
        if($status==0 and $bed_serial=='A' and $wing=='7' )
             {
                echo "<td><a href='add_occupation.php?crew_id=$lp_id & crew_name=$lp_name & designation=$lp_des  & hq=$lp_hq &wkg_type=$type & train=$train &bed=$roomno & card_no=$card_no'><img src='images/GREEN1.JPG' alt='Green image' style='height:20px text-align:centre'></a></td>";
             }
            if($status==1 and $bed_serial=='A' and $wing=='7' )
            {
                 echo "<td><img src='images/RED1.JPG' alt='Red image' style='height:20px text-align:centre'></td>"; 
             }
             if($status==2 and $bed_serial=='A'  and $wing=='7'){
                 echo "<td><img src='images/BLUE.JPG' alt='Blue image' style='height:20px text-align:centre'></td>"; 
             }
             if($status==3 and $bed_serial=='A' and $wing=='7'){
                 echo "<td><img class='blink-image' id='fire' src='images/YELLOW.JPG' alt='Yellow image' style='height:20px text-align:centre'></td>"; 
             }
      
         }
      
         ?>
   
   </tr>
     <tr>
          <th id="C">Bed-B</th>  
   
  <?php
            $cmd1="select * from room_number order by room_number";
         require_once('dbcon.php');
         $res1=mysqli_query($conn,$cmd1);
         while($rec1=mysqli_fetch_assoc($res1)){
             $roomno=$rec1['bed_no'];
             $status=$rec1['status'];
             $room_number=$rec1['room_number'];
             $wing=$rec1['wing'];
             $floor_no=$roomno[0];
            
             $bed_serial=substr($roomno,-1);
             
             //echo ($room_number);
             //echo "<br>";
            
        
        if($status==0 and $bed_serial=='B' and $wing=='7' )
             {
                 echo "<td><a href='add_occupation.php?crew_id=$lp_id & crew_name=$lp_name & designation=$lp_des  & hq=$lp_hq &wkg_type=$type & train=$train &bed=$roomno & card_no=$card_no'><img src='images/GREEN1.JPG' alt='Green image' style='height:20px text-align:centre'></a></td>";
             }
            if($status==1 and $bed_serial=='B' and $wing=='7' )
            {
                 echo "<td><img src='images/RED1.JPG' alt='Red image' style='height:20px text-align:centre'></td>"; 
             }
             if($status==2 and $bed_serial=='B'  and $wing=='7'){
                 echo "<td><img src='images/BLUE.JPG' alt='Blue image' style='height:20px text-align:centre'></td>"; 
             }
             if($status==3 and $bed_serial=='B' and $wing=='7'){
                 echo "<td><img class='blink-image' id='fire' src='images/YELLOW.JPG' alt='Yellow image' style='height:20px text-align:centre'></td>"; 
             }
      
         }
      
         ?>
   
   </tr>
       
        
        
        
        
        </table>
         <br>
        <br>
  <table id="Y" border="3">
      <tr>
  
   <th id="B">Room No</th>  
   <th id="B">51</th>  
   <th id="B">52 </th>  
   <th id="B">53</th>  
   <th id="B">54</th>  
   <th id="B">55</th>  
   <th id="B">56</th>  
   <th id="B">57</th>  
   <th id="B">58</th>  
   <th id="B">59</th>  
   <th id="B">60</th>  
    
  
  
   
          
      
   </tr>
      
     <tr>
          <th id="C">Bed-A</th>  
   
  <?php
            $cmd1="select * from room_number";
         require_once('dbcon.php');
         $res1=mysqli_query($conn,$cmd1);
         while($rec1=mysqli_fetch_assoc($res1)){
             $roomno=$rec1['bed_no'];
             $status=$rec1['status'];
             $room_number=$rec1['room_number'];
             $wing=$rec1['wing'];
             $floor_no=$roomno[0];
           
             $bed_serial=substr($roomno,-1);
             
             //echo ($room_number);
             //echo "<br>";
            
        
        if($status==0 and $bed_serial=='A' and $wing=='5' )
             {
                 echo "<td><a href='add_occupation.php?crew_id=$lp_id & crew_name=$lp_name & designation=$lp_des  & hq=$lp_hq &wkg_type=$type & train=$train &bed=$roomno & card_no=$card_no'><img src='images/GREEN1.JPG' alt='Green image' style='height:20px text-align:centre'></a></td>";
             }
            if($status==1 and $bed_serial=='A' and $wing=='5' )
            {
                 echo "<td><img src='images/RED1.JPG' alt='Red image' style='height:20px text-align:centre'></td>"; 
             }
             if($status==2 and $bed_serial=='A'  and $wing=='5'){
                 echo "<td><img src='images/BLUE.JPG' alt='Blue image' style='height:20px text-align:centre'></td>"; 
             }
             if($status==3 and $bed_serial=='A' and $wing=='5'){
                 echo "<td><img class='blink-image' id='fire' src='images/YELLOW.JPG' alt='Yellow image' style='height:20px text-align:centre'></td>"; 
             }
      
         }
      
         ?>
   
   </tr>
     <tr>
          <th id="C">Bed-B</th>  
   
  <?php
            $cmd1="select * from room_number";
         require_once('dbcon.php');
         $res1=mysqli_query($conn,$cmd1);
         while($rec1=mysqli_fetch_assoc($res1)){
             $roomno=$rec1['bed_no'];
             $status=$rec1['status'];
             $room_number=$rec1['room_number'];
             $wing=$rec1['wing'];
             $floor_no=$roomno[0];
            
             $bed_serial=substr($roomno,-1);
             
             //echo ($room_number);
             //echo "<br>";
            
        
        if($status==0 and $bed_serial=='B' and $wing=='5' )
             {
                echo "<td><a href='add_occupation.php?crew_id=$lp_id & crew_name=$lp_name & designation=$lp_des  & hq=$lp_hq &wkg_type=$type & train=$train &bed=$roomno & card_no=$card_no'><img src='images/GREEN1.JPG' alt='Green image' style='height:20px text-align:centre'></a></td>";
             }
            if($status==1 and $bed_serial=='B' and $wing=='5' )
            {
                 echo "<td><img src='images/RED1.JPG' alt='Red image' style='height:20px text-align:centre'></td>"; 
             }
             if($status==2 and $bed_serial=='B'  and $wing=='5'){
                 echo "<td><img src='images/BLUE.JPG' alt='Blue image' style='height:20px text-align:centre'></td>"; 
             }
             if($status==3 and $bed_serial=='B' and $wing=='5'){
                 echo "<td><img class='blink-image' id='fire' src='images/YELLOW.JPG' alt='Yellow image' style='height:20px text-align:centre'></td>"; 
             }
      
         }
      
         ?>
   
   </tr>
     <tr>
          <th id="C">Bed-C</th>  
   
  <?php
            $cmd1="select * from room_number order by bed_no";
         require_once('dbcon.php');
         $res1=mysqli_query($conn,$cmd1);
         while($rec1=mysqli_fetch_assoc($res1)){
             $roomno=$rec1['bed_no'];
             $status=$rec1['status'];
             $room_number=$rec1['room_number'];
             $wing=$rec1['wing'];
             $floor_no=$roomno[0];
            
             $bed_serial=substr($roomno,-1);
             
             //echo ($room_number);
             //echo "<br>";
             if($status==0 and $bed_serial=='C' and $wing=='8' )
             {
                 echo "<td id='mn'>NA</td>";
             } 
        
        if($status==0 and $bed_serial=='C' and $wing=='5' )
             {
                 echo "<td><a href='add_occupation.php?crew_id=$lp_id & crew_name=$lp_name & designation=$lp_des  & hq=$lp_hq &wkg_type=$type & train=$train &bed=$roomno & card_no=$card_no'><img src='images/GREEN1.JPG' alt='Green image' style='height:20px text-align:centre'></a></td>";
             }
            if($status==1 and $bed_serial=='C' and $wing=='5' )
            {
                 echo "<td><img src='images/RED1.JPG' alt='Red image' style='height:20px text-align:centre'></td>"; 
             }
             if($status==2 and $bed_serial=='C'  and $wing=='5'){
                 echo "<td><img src='images/BLUE.JPG' alt='Blue image' style='height:20px text-align:centre'></td>"; 
             }
             if($status==3 and $bed_serial=='C' and $wing=='5'){
                 echo "<td><img class='blink-image' id='fire' src='images/YELLOW.JPG' alt='Yellow image' style='height:20px text-align:centre'></td>"; 
             }
      
         }
      
         ?>
   
   </tr>
     <tr>
          <th id="C">Bed-D</th>  
   
  <?php
            $cmd1="select * from room_number order by bed_no";
         require_once('dbcon.php');
         $res1=mysqli_query($conn,$cmd1);
         while($rec1=mysqli_fetch_assoc($res1)){
             $roomno=$rec1['bed_no'];
             $status=$rec1['status'];
             $room_number=$rec1['room_number'];
             $wing=$rec1['wing'];
             $floor_no=$roomno[0];
            
             $bed_serial=substr($roomno,-1);
             
             //echo ($room_number);
             //echo "<br>";
             if($status==0 and $bed_serial=='D' and $wing=='8' )
             {
                echo "<td id='mn'>NA</td>";
             } 
        
        if($status==0 and $bed_serial=='D' and $wing=='5' )
             {
                 echo "<td><a href='add_occupation.php?crew_id=$lp_id & crew_name=$lp_name & designation=$lp_des  & hq=$lp_hq &wkg_type=$type & train=$train &bed=$roomno & card_no=$card_no'><img src='images/GREEN1.JPG' alt='Green image' style='height:20px text-align:centre'></a></td>";
             }
            if($status==1 and $bed_serial=='D' and $wing=='5' )
            {
                 echo "<td><img src='images/RED1.JPG' alt='Red image' style='height:20px text-align:centre'></td>"; 
             }
             if($status==2 and $bed_serial=='D'  and $wing=='5'){
                 echo "<td><img src='images/BLUE.JPG' alt='Blue image' style='height:20px text-align:centre'></td>"; 
             }
             if($status==3 and $bed_serial=='D' and $wing=='5'){
                 echo "<td><img class='blink-image' id='fire' src='images/YELLOW.JPG' alt='Yellow image' style='height:20px text-align:centre'></td>"; 
             }
      
         }
      
         ?>
   
   </tr>
    
     <tr>
          <th id="C">Bed-E</th>  
   
  <?php
            $cmd1="select * from room_number  order by bed_no";
         require_once('dbcon.php');
         $res1=mysqli_query($conn,$cmd1);
         while($rec1=mysqli_fetch_assoc($res1)){
             $roomno=$rec1['bed_no'];
             $status=$rec1['status'];
             $room_number=$rec1['room_number'];
             $wing=$rec1['wing'];
             $floor_no=$roomno[0];
            
             $bed_serial=substr($roomno,-1);
             
             //echo ($room_number);
             //echo "<br>";
            
         if($status==0 and $bed_serial=='E' and $wing=='8' )
             {
                echo "<td id='mn'>NA</td>";
             }
        if($status==0 and $bed_serial=='E' and $wing=='5' )
             {
                echo "<td><a href='add_occupation.php?crew_id=$lp_id & crew_name=$lp_name & designation=$lp_des  & hq=$lp_hq &wkg_type=$type & train=$train &bed=$roomno & card_no=$card_no'><img src='images/GREEN1.JPG' alt='Green image' style='height:20px text-align:centre'></a></td>";
             }
            if($status==1 and $bed_serial=='E' and $wing=='5' )
            {
                 echo "<td><img src='images/RED1.JPG' alt='Red image' style='height:20px text-align:centre'></td>"; 
             }
             if($status==2 and $bed_serial=='E'  and $wing=='5'){
                 echo "<td><img src='images/BLUE.JPG' alt='Blue image' style='height:20px text-align:centre'></td>"; 
             }
             if($status==3 and $bed_serial=='E' and $wing=='5'){
                 echo "<td><img class='blink-image' id='fire' src='images/YELLOW.JPG' alt='Yellow image' style='height:20px text-align:centre'></td>"; 
             }
     
           
      
             
             
             
         }
      
         ?>
   
   </tr>
    <tr>
          <th id="C">Bed-F</th>  
   
  <?php
            $cmd1="select * from room_number order by bed_no";
         require_once('dbcon.php');
         $res1=mysqli_query($conn,$cmd1);
         while($rec1=mysqli_fetch_assoc($res1)){
             $roomno=$rec1['bed_no'];
             $status=$rec1['status'];
             $room_number=$rec1['room_number'];
             $wing=$rec1['wing'];
             $floor_no=$roomno[0];
            
             $bed_serial=substr($roomno,-1);
             
             //echo ($room_number);
             //echo "<br>";
           if($status==0 and $bed_serial=='F' and $wing=='8' )
             {
                 echo "<td id='mn'>NA</td>";
             } 
        
        if($status==0 and $bed_serial=='F' and $wing=='5' )
             {
                 echo "<td><a href='add_occupation.php?crew_id=$lp_id & crew_name=$lp_name & designation=$lp_des  & hq=$lp_hq &wkg_type=$type & train=$train &bed=$roomno & card_no=$card_no'><img src='images/GREEN1.JPG' alt='Green image' style='height:20px text-align:centre'></a></td>";
             }
            if($status==1 and $bed_serial=='F' and $wing=='5' )
            {
                 echo "<td><img src='images/RED1.JPG' alt='Red image' style='height:20px text-align:centre'></td>"; 
             }
             if($status==2 and $bed_serial=='F'  and $wing=='5'){
                 echo "<td><img src='images/BLUE.JPG' alt='Blue image' style='height:20px text-align:centre'></td>"; 
             }
             if($status==3 and $bed_serial=='F' and $wing=='5'){
                 echo "<td><img class='blink-image' id='fire' src='images/YELLOW.JPG' alt='Yellow image' style='height:20px text-align:centre'></td>"; 
             }
      
         }
      
         ?>
   
   </tr>
    
        </table>
        
</div>
        
       
    </div>
    
    
     <?php
      
      } 
        else{
            
         echo "This Card Is not issued from TDL Lobby";   
            
        }
        
        
        
        
    }
    else{
        echo "This Card does not belong to TDL Lobby";
    }

?>
     
    
    
    
    
    
 
    
    
   
      
    
    
    
    </body>


</html>