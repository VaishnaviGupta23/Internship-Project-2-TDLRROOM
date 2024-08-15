 <!DOCTYPE html>
<html>
<head>
     <?php require_once("head.php")?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js">
        </script>
   
    </head>
    <body>
        
    <a class="btn btn-outline-success" href="rroom_main.php" role="button">Home</a>
    
       <div class="Card bg-light" style="width: 700Px; margin-left: 200Px; margin-top:30Px;" > 
           <div class="card-body">
  <h2 style="text-align:center"> Form To Change Room  </h2>
  <form action="add_changeroom.php" method="post">
    <div class="form-group">      
     <input required id="crew" list="crew1" type="text" name="room1" class="form-control" placeholder="Please Select Previous Bed Number">    
     <datalist id="crew1">
<option value="">Select Room Number</option>
<?php
    require_once("dbcon.php");
$sql = mysqli_query($conn, "SELECT bed_no From room_number where status='1'");
$row = mysqli_num_rows($sql);
while ($row = mysqli_fetch_array($sql)){
echo "<option value='". $row['bed_no'] ."'>" .$row['bed_no'] ."</option>" ;
}
?>
</datalist>       
    </div>
       <div class="form-group">      
     <input required id="crew" list="crew2" type="text" name="room2" class="form-control" placeholder="Please Select New Bed Number">    
     <datalist id="crew2">
<option value="">Select Room Number</option>
<?php
    require_once("dbcon.php");
$sql = mysqli_query($conn, "SELECT bed_no From room_number where status='0'");
$row = mysqli_num_rows($sql);
while ($row = mysqli_fetch_array($sql)){
echo "<option value='". $row['bed_no'] ."'>" .$row['bed_no'] ."</option>" ;
}
?>
</datalist>       
    </div>
      
      <div class="form-group">      
     <input required id="crew" type="text" name="pvtnumber" class="form-control" placeholder="Please Enter The Private Number" pattern="[A-Z1-9]{6}" title="">    
        
    </div>
   <div class="form-group">      
     <input required id="crew" type="text" name="reason" class="form-control" placeholder="Please Give The Reason to Change The Room"> 
      </div>
    
    <button type="submit" class="btn btn-primary" name="changeroom">Submit</button>
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
