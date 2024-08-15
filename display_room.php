<html>
<head>
    <meta http-equiv="refresh" content="10">
     <?php require_once("head.php")?>
  <style>
   @-moz-keyframes blink {
    0% {
        opacity:1;
    }
    50% {
        opacity:0;
    }
    100% {
        opacity:1;
    }
} 

@-webkit-keyframes blink {
    0% {
        opacity:1;
    }
    50% {
        opacity:0;
    }
    100% {
        opacity:1;
    }
}
/* IE */
@-ms-keyframes blink {
    0% {
        opacity:1;
    }
    50% {
        opacity:0;
    }
    100% {
        opacity:1;
    }
} 
/* Opera and prob css3 final iteration */
@keyframes blink {
    0% {
        opacity:1;
    }
    50% {
        opacity:0;
    }
    100% {
        opacity:1;
    }
} 
.blink-image {
    -moz-animation: blink normal 2s infinite ease-in-out; /* Firefox */
    -webkit-animation: blink normal 2s infinite ease-in-out; /* Webkit */
    -ms-animation: blink normal 2s infinite ease-in-out; /* IE */
    animation: blink normal 2s infinite ease-in-out; /* Opera and prob css3 final iteration */
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
          font-size: 50Px;
          font-weight: bolder;
      }
    </style>  
    
    </head>
<body>
 <?php
    require_once('dbcon.php');
    $cmd11="select count(ID) as count from room_number where status='1' or status='3'";
    $res11=mysqli_query($conn,$cmd11);
    $rec11=mysqli_fetch_assoc($res11);
    $count=$rec11['count'];
    ?>
 
   <h2 id="D"> लोको पायलट एवम गार्ड रनिंग रूम टुंन्ड्ला -  धारिता-पट्ट</h2>
        
      
           
     
 <h2 id="D"> Loco Pilot and Guard Running Room Tundla- Occupancy Position </h2>
    <h5  id="M">Current Occupancy- <?php echo $count?></h5>
     
   <ul>
       <li id="ganga"> New Running Room (Ganga)</li>
       <li id="head"> </li>
    <li><img src='images/GREEN2.JPG' alt='Green image' style='height:5px text-align:centre'></li>
        <li id="head"> Vacant</li>
     <li><img src='images/RED2.JPG' alt='Red image' style='height:5px text-align:centre'></li>
        <li id="head"> Occupied</li>
         <li><img src='images/YELLOW2.JPG' alt='Yellow image' style='height:5px text-align:centre'></li>
        <li id="head"> Crew On Call</li>
    <li><img src='images/BLUE2.JPG' alt='Blue image' style='height:5px text-align:centre'></li>
        <li id="head"> Under Maintainance</li>
       <li id="yamuna">Old Running Room (Yamuna)</li>
       <!--<li><img src='images/YELLOW3.JPG' alt='Blue image' style='height:5px text-align:centre'></li>
        <li id="head"> Western Style Lavatory</li>-->
        
    </ul> 
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
          <th id="C">Bed-1(A)</th>  
   
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
                 echo "<td><img src='images/GREEN1.JPG' alt='Green image' style='height:20px text-align:centre'></td>";
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
          
   <th id="C">Bed-2(B)</th>  
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
                 echo "<td><img src='images/GREEN1.JPG' alt='Green image' style='height:20px text-align:centre'></td>";
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
          
   <th id="C">Bed-1(A)</th>   
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
                 echo "<td><img src='images/GREEN1.JPG' alt='Green image' style='height:20px text-align:centre'></td>";
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
          
    <th id="C">Bed-2(B)</th>   
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
                 echo "<td><img src='images/GREEN1.JPG' alt='Green image' style='height:20px text-align:centre'></td>";
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
          
   <th id="C">Bed-1(A)</th>  
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
                 echo "<td><img src='images/GREEN1.JPG' alt='Green image' style='height:20px text-align:centre'></td>";
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
        
   <th id="C">Bed-2(B)</th>  
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
                 echo "<td><img src='images/GREEN1.JPG' alt='Green image' style='height:20px text-align:centre'></td>";
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
      
   <th id="C">Bed-1(A)</th>   
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
                 echo "<td><img src='images/GREEN1.JPG' alt='Green image' style='height:20px text-align:centre'></td>";
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
          
   <th id="C">Bed-2(B)</th>  
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
                 echo "<td><img src='images/GREEN1.JPG' alt='Green image' style='height:20px text-align:centre'></td>";
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
          <th id="C">Bed-1(A)</th>  
   
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
                 echo "<td><img src='images/GREEN1.JPG' alt='Green image' style='height:20px text-align:centre'></td>";
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
          <th id="C">Bed-2(B)</th>  
   
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
                 echo "<td><img src='images/GREEN1.JPG' alt='Green image' style='height:20px text-align:centre'></td>";
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
          <th id="C">Bed-1(A)</th>  
   
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
                 echo "<td><img src='images/GREEN1.JPG' alt='Green image' style='height:20px text-align:centre'></td>";
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
          <th id="C">Bed-2(B)</th>  
   
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
                 echo "<td><img src='images/GREEN1.JPG' alt='Green image' style='height:20px text-align:centre'></td>";
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
   <th id="B">51-A</th>  
   <th id="B">52-A </th>  
   <th id="B">53-A</th>  
   <th id="B">54-A</th>  
   <th id="B">55</th>  
   <th id="B">56</th>  
   <th id="B">57-A</th>  
   <th id="B">58</th>  
   <th id="B">59</th>  
   <th id="B">60</th>  
    
  
  
   
          
      
   </tr>
      
     <tr>
          <th id="C">Bed-1(A)</th>  
   
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
                 echo "<td><img src='images/GREEN1.JPG' alt='Green image' style='height:20px text-align:centre'></td>";
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
          <th id="C">Bed-2(B)</th>  
   
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
                 echo "<td><img src='images/GREEN1.JPG' alt='Green image' style='height:20px text-align:centre'></td>";
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
          <th id="C">Bed-3(C)</th>  
   
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
                 echo "<td><img src='images/GREEN1.JPG' alt='Green image' style='height:20px text-align:centre'></td>";
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
  
   <th id="B">Room No</th>  
   <th id="B">51-B</th>  
   <th id="B">52-B </th>  
   <th id="B">53-B</th>  
   <th id="B">54-B</th>  
   <th id="B"></th>  
   <th id="B"></th>  
   <th id="B">57-B</th>  
   <th id="B"></th>  
   <th id="B"></th>  
   <th id="B"></th>  
   
      
   </tr>
      
      
      
      
      
      
      
      
     <tr>
          <th id="C">Bed-4(D)</th>  
   
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
                 echo "<td><img src='images/GREEN1.JPG' alt='Green image' style='height:20px text-align:centre'></td>";
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
          <th id="C">Bed-5(E)</th>  
   
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
                 echo "<td><img src='images/GREEN1.JPG' alt='Green image' style='height:20px text-align:centre'></td>";
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
          <th id="C">Bed-6(F)</th>  
   
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
                 echo "<td><img src='images/GREEN1.JPG' alt='Green image' style='height:20px text-align:centre'></td>";
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
       
       
   
         
    <script type="text/javascript">    
    setInterval(page_refresh, 10000); 
</script>
 
    
    </body>

</html>