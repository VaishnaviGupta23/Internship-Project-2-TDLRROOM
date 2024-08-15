<!DOCTYPE html>
<?php date_default_timezone_set("Asia/Kolkata")?>

<html>
<head>
     <?php require_once("head.php")?>
    <style>
        label{
            color:brown;
        }
    
    
    </style>
    
    </head>
<body>
   <a class="btn btn-outline-primary" href="" role="button">Back</a>
    
    <a class="btn btn-outline-danger" href="" role="button">Sign Out</a> 

<div class="Card bg-light" style="width: 700Px; margin-left: 200Px; margin-top:30Px;" > 
           <div class="card-body">
  <h2 style="text-align:center">Please Select Dates For Day Wise Occupancy </h2>
  <form action="shift_meal.php" method="post">
    <div class="form-group">
        <label> Start Date:-</label>
      <input type="date" class="form-control" placeholder="Departure Date" name="Dep_Date" value="<?php echo date("Y/m/d");?>" required>
    </div>
    
      <div class="form-group">  
          <label>End Date:-</label>
      <input type="Date" class="form-control" placeholder="Arrival Date" name="Arr_Date" value="<?php echo date("Y/m/d");?>" required>
    </div>
   
    <button type="submit" class="btn btn-primary" name="period">Submit</button>
  </form>
</div>
           </div>


   
   
    </body>
</html>
 	
