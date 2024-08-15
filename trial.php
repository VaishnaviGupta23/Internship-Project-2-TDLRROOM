

<!DOCTYPE html>
<?php date_default_timezone_set("Asia/Kolkata")?>
<html>
<head>
     <?php require_once("head.php")?>
   <title>HOMES</title>
   
   

	
  
    <style>
       
         body {
    /* Image Location */
    background-image: url("./images/AE%20SIR%20HOMES.jpg");
 
   
    background-position:top;
    background-repeat: no-repeat;
   
    background-size:2400px;
    background-color: #464646;
             height: 100%;
      
    /* Font Colour */
    color:white;
             
}
    table {
  width: 100%;
   margin-left: 5%;      
           
        
}
        th{
            text-align: center;
            font-size: 22Px;
            font-weight: bold;
            color:aqua;
        } 
        td{
            text-align: center;
            font-size: 22Px;
            font-weight: bold;
            color:white;
            height: 30Px;
        } 
   #xx{
            color: red;
            font-size: 30Px;
            font-weight: bolder;
        }  
#yy{
            color: blue;
            font-size: 27Px;
    font-weight: bold;
        }  

   #zz{
            color:green;
            font-size: 27Px;
        font-weight: bold;
        }  
        
#zz1{
            color:blue;
            font-size: 27Px;
        font-weight: bold;
        }  

    #zz2{
            color:green;
            font-size: 27Px;
        font-weight: bold;
        }  
   
        #G{
            margin-left: 3%Px;
        } 
        h6{
            margin-left: 2%;
            color: brown;
            font-size: 25px;
            background-color: black;
            background-size:cover;
           
        }
        h3{
            text-align: center;
            color:chartreuse;
            font-size: 23Px;
            font-weight: bolder;
        }
        #alok{
            margin-top:5Px;
            ;
        }
        #A{
            color: red;
        }
        #B{
            color: blue;
        }
      #C{
            color: yellow;
        }
        .navbar{
            margin-top:19%;
        }
        #mmm{
            text-align: left;
        }
        .dropdown-item{
            font-size: 25Px;
        }
    
    
    </style>
      
      </head>
    <body>
  
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a id="xx" class="navbar-brand" href="#">HOMES</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a id="yy" class="nav-link" href="ghi.php">GHI <span class="sr-only">(current)</span></a>
          
          
      </li>
        
      
        <li class="nav-item">
        <a id="zz2" class="nav-link" href="maintain.php">Maintainance</a>
      </li>
        <li class="nav-item">
        <a id="zz1" class="nav-link" href="call_book.php">Call</a>
      </li>
        
        
      <li class="nav-item dropdown">
        <a id="zz2" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Reports
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="date_picker_ghi.php">Reports GHI</a>
          <a class="dropdown-item" href="dp_ghi_marks.php">Marks Wise GHI</a>
          
          <a class="dropdown-item" href="dp_date_occupancy.php">Date Wise Occupancy report</a>
          <a class="dropdown-item" href="dp_meal.php">Date Wise Meal  report</a>
            <a class="dropdown-item" href="dp_washing.php">Date Wise Washing Report</a>
            <a class="dropdown-item" href="dp_occupancy.php">Summary Occupancy</a>
            <a class="dropdown-item" href="day_wise_occupancy_dp.php">Day wise HQ wise Occupancy</a>
            <a class="dropdown-item" href="dp_meal_summary.php">Date wise Meal Summary</a>
            <a class="dropdown-item" href="dp_shift_meal.php">Shift wise Meal Summary</a>
        </div>
      </li>
        <li class="nav-item">
        <a id="zz1" class="nav-link" href="revert_call.php">Revert Call</a>
      </li>
        <li class="nav-item">
        <a id="zz2" class="nav-link" href="display_room.php">Display</a>
      </li>
      <li class="nav-item">
        <a id="zz1" class="nav-link" href="changeroom.php">Change</a>
      </li>
        <li class="nav-item">
        <a id="zz1" class="nav-link" href="vacation.php">Vacation</a>
      </li>
        <li class="nav-item">
        <a id="zz1" class="nav-link" href="main_linen.php">Linen</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input id="tt" oninput="detectHumans();"  class="form-control mr-sm-3" type="text" maxlength="12" placeholder="Card Value" aria-label="Search" autofocus onchange="return check()">
      
    </form>
      
  </div>
    </nav>    
     <?php
        $X=date("d/m/Y");
        $X1=date("Y-m-d");

       
    $cmd="select count(ID) as total_checkout from main where date_vacated='$X1' and crew_name<>'Under Maintainance'";
        require_once("dbcon.php");
        $res=mysqli_query($conn,$cmd);
        $rec=mysqli_fetch_assoc($res);
        $total_checkout=$rec['total_checkout'];
      
      $cmd11="select count(ID) as count from room_number where (status='1' or status='3')";
    $res11=mysqli_query($conn,$cmd11);
    $rec11=mysqli_fetch_assoc($res11);
    $current_occupancy=$rec11['count'];   
      
      $cmd12="select count(ID) as count1 from ghi where date='$X'";
    $res12=mysqli_query($conn,$cmd12);
    $rec12=mysqli_fetch_assoc($res12);
    $ghi_taken=$rec12['count1'];    
        
        ?>   
        
      <div id="alok">
          <table>
              <tr>
    <th><h6 id="">Total Check Out Today- <?php echo $total_checkout ?></h6> </th>   
    <th><h6>Current Occupancy-<?php echo $current_occupancy ?> </h6> </th>   
    <th><h6>Total GHI Taken-<?php echo $ghi_taken ?></h6></th>
                  </tr>
              </table>
    </div>     
       <div class="row">
           <div class="col-sm-2">
      <?php
    echo "<table border='1'>";
    echo "<h3>Incoming Crew</h3>";
    echo"<th>Crew ID</th>";
    echo"<th>Crew Name</th>";
    echo"<th>Card_No</th>";
   
    
   
    
    $cmd="select * from lobby_data where status='1' order by dated,time";
    require_once('dbcon.php');
    $res=mysqli_query($conn,$cmd);
   while($rec=mysqli_fetch_assoc($res)){
       $lp_id=$rec['lp_id'];
       $lp_name=$rec['lp_name'];
       $card_no=$rec['lobby_card_no'];
      
       
       
       echo "<tr>";
       echo "<td>$lp_id</td>";
       echo "<td>$lp_name</td>";
       echo "<td>$card_no</td>";
       
     
      
      echo "</tr>"; 
   }
 echo "</table>";

    ?>     
           
           
           
           </div> 
           <div class="col-sm-1"></div>
           <div class="col-sm-8">
        
    <?php
    echo "<table border='1'>";
               echo "<h3>Crew Present at Running Room</h3>";
    echo"<th>Bed Number</th>";
    echo"<th>Allottment Date</th>";
    echo"<th>Allottment Time</th>";
    echo"<th>Crew ID</th>";
    echo"<th>Crew Name</th>";
    echo"<th>Designation</th>";
    echo"<th>Mobile</th>";
    
    echo"<th>Status</th>";
    echo"<th>Card No.</th>";
    
    $cmd="select * from main where( status='1' or status='2')order by date_allottment,time_allottment, bed_no";
    require_once('dbcon.php');
    $res=mysqli_query($conn,$cmd);
   while($rec=mysqli_fetch_assoc($res)){
       $crew_id=$rec['crew_id'];
       $crew_name=$rec['crew_name'];
       $designation=$rec['designation'];
      
       $occupation_date=$rec['date_allottment'];
       $occupation_time=$rec['time_allottment'];
       $bed_no=$rec['bed_no'];
       $status=$rec['status'];
       
    $cmd1="select * from biodata where crew_id='$crew_id'";
    
    $res1=mysqli_query($conn,$cmd1);   
     $rec1=mysqli_fetch_assoc($res1);
       $mobile=$rec1['mobile'];
       
        $cmd2="select lobby_card_no from lobby_data where lp_id='$crew_id' and status='2' order by dated desc limit 1";
    
    $res2=mysqli_query($conn,$cmd2);   
     $rec2=mysqli_fetch_assoc($res2);
       $lobby_card=$rec2['lobby_card_no'];
       
       echo "<tr>";
       echo "<td>$bed_no</td>";
       echo "<td>$occupation_date</td>";
       echo "<td>$occupation_time</td>";
       echo "<td>$crew_id</td>";
       echo "<td id='mmm'>$crew_name</td>";
       echo "<td>$designation</td>";
       echo "<td>$mobile</td>";
     
       if($status=='1'){
       echo "<td id='A'>occupied</td>";
       }
       if($status=='2'){
       echo "<td id='B'>Repair</td>";
       }
       if($status=='3'){
       echo "<td id='C'>On Call</td>";
       }
        echo "<td>$lobby_card</td>";
      echo "</tr>"; 
   }
 echo "</table>";

    ?>
               </div>
       
    </div>    
     
    </body>
    <script>
        function check(){
         var dist = document.getElementById('tt').value;
       $("#tt").keyup(function () {
      
    if (this.value.length > 6) {
         
    window.location.href = "rroom_main1.php?dist=" + dist;
    }
           /*else{
                alert ('This Device Does Not Belong to GMC Lobby');  
                         document.getElementById('#tt').value = "";
                              $('#tt').focus();
           }*/
          
})
        }; 
        
  var x = -1;
        var delta = 0;
        var count = 0;
        function detectHumans() {
            count += 1;
            if ($("#tt").val().length != count) {
                alert('Human Entries Not Allowed. Use Card Only');
                 document.getElementById('tt').value = "";
                              $('#tt').focus();
                
            }
            console.log($("#tt").val());
            y = Date.now();
            if (x == -1) {
                x = y;
            }
            else if (delta == 0) {
                delta = y - x;
                x = y;
            }
            else{
                var new_delta = y - x;
                console.log(delta);
                console.log(new_delta);
                if (Math.abs(new_delta - delta) > 10) {
                    alert('Human Entries Not Allowed. Use Card Only');
                    document.getElementById('tt').value = "";
                              $('#tt').focus();
                }
                delta = new_delta;
                x = y;
            }
        }
        </script>
      
        
       
</html>
