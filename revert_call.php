 <!DOCTYPE html>
<html>
<head>
     <?php require_once("head.php")?>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js">
        </script> 
    <?php date_default_timezone_set("asia/kolkata")?>
   
<style>
    #ID{
        width: 200Px;
    } 
     body{
            background-color:darkgray;
        }
        th,td{
            font-size: 25Px;
        }
        .chk_val{
            width: 30Px;
            height: 30Px;
        }
        h6{
          text-align: center;
            font-size: 30Px;
            font-weight: bolder;
            color: blanchedalmond;
        }
       
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
        #tt{
         background-color: blue;
            font-size: 28Px;
            
        }
        #ttt{
          background-color: blue;
            font-size: 28Px;
            width: 50%;
            margin-left: 200PX;
        }
        
        
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    
    
    </style>
    </head>
    <body>
        <div>
    <h2>TDL RUNNING ROOM</h2>
        
        </div>
        <div class="w3-padding-32 w3-blue w3-circle w3-center">
    <h1>Hospitality Operation Management Eco-System <br> (HOMES)</h1>
            
    </div> 
    <a id="tt" class="btn btn-outline-primary" href="rroom_main.php" role="button">Home</a>
    
       <div class="Card bg-light" style="width: 800Px; margin-left: 420Px; margin-top:30Px;" > 
           <div class="card-body">
  <h2 style="text-align:center">Cancel Crew And Guard Call Book</h2>
  <form action="add_call_book.php" method="post">
      <div class="form-group">      
     <input id="crew" list="crew1" type="text" name="crew_id" class="form-control" placeholder="Please Select LP ID" required>    
     <datalist id="crew1">
<option value="NA">NA</option>
<?php
    require_once("dbcon.php");
$sql = mysqli_query($conn, "SELECT crew_id,crew_name,designation From room_number where status='3'");
$row = mysqli_num_rows($sql);
while ($row = mysqli_fetch_array($sql)){
echo "<option value='". $row['crew_id'] ."'>" .$row['crew_id']." / ".$row['crew_name']." / ".$row['designation'] ."</option>" ;
}
?>
</datalist>       
    </div>
      <div class="form-group">      
     <input id="crew" list="crew2" type="text" name="crew_id2" class="form-control" placeholder="Please Select ALP ID" required>    
     <datalist id="crew2">
<option value="NA">NA</option>
<?php
    require_once("dbcon.php");
$sql = mysqli_query($conn, "SELECT crew_id,crew_name,designation From room_number where status='3'");
$row = mysqli_num_rows($sql);
while ($row = mysqli_fetch_array($sql)){
echo "<option value='". $row['crew_id'] ."'>" .$row['crew_id']." / ".$row['crew_name']." / ".$row['designation'] ."</option>" ;
}
?>
</datalist>       
    </div>
      <div class="form-group">      
     <input id="crew" list="crew3" type="text" name="crew_id3" class="form-control" placeholder="Please Select Guard ID" required>    
     <datalist id="crew3">
<option value="NA">NA</option>
<?php
    require_once("dbcon.php");
$sql = mysqli_query($conn, "SELECT crew_id,crew_name,designation From room_number where status='3'");
$row = mysqli_num_rows($sql);
while ($row = mysqli_fetch_array($sql)){
echo "<option value='". $row['crew_id'] ."'>" .$row['crew_id']." / ".$row['crew_name']." / ".$row['designation'] ."</option>" ;
}
?>
</datalist>       
    </div>
    
 
     <br>
     <br>
     <br>
    
    <button id="ttt" type="submit" class="btn btn-primary" name="call_book">Submit</button>
  </form>
</div>
           </div>    
        
    
     
    
    </body>
 <script>
    $(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
</script>   


</html>
