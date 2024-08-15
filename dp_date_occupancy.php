
 
    
<html>
<head>
    <title>HOMES</title>
    
     <?php require_once("head.php")?>
    
    <style>
        body{
             background-image: url("images/AE%20SIR%20HOMES.jpg");
          background-repeat: no-repeat, repeat;
          background-position: center; /* Center the image */
          background-size : 100% auto;
          padding-top: 50px;
            background-color: darkgrey;
        }
   
       
       .btn{
           width: 30%;
           height: 60Px;
           font-size: 30Px;
           margin-left: 30%;
       }
       
        #x{
          margin-top: 25%;  
        }
        label{
            font-size: 30Px;
            color: crimson;
             margin-left:30%; 
            
        }
        input[type='date']{
            width: 300Px;
            height: 50Px;
            margin-left:30%; 
        }
        #anchor{
            width: 30%;
           height: 60Px;
           font-size: 30Px;
           margin-left: 0%;
        }
        h3{
            font-size: 30Px;
            color: blueviolet;
            text-align: center;
        }
    
    
    </style>
    
    </head>
    <body>
      
        
    <a id="anchor" class="btn btn-outline-primary" href="rroom_main.php" role="button">HOME</a>
 
      <form action="date_occupancy.php" method="post">
          <div class="container col-sm-4>" id="x">
              <h3> Date Wise Occupancy Report of TDL Running Room</h3>
    <div class="form-group">
        <label> Please Select From Date:-</label>
      <input type="date" class="form-control" placeholder="From Date" name="Dep_Date"  required>
    </div>
    
      
   <br>
               <div class="form-group">
        <label> Please Select To Date and submit:-</label>
      <input type="date" class="form-control" placeholder="To Date" name="arr_Date"  required>
    </div>
   <br>
    <button type="submit" class="btn btn-primary" name="period">Submit</button> 
      </div> 
       
        </form>
    </body>
</html>

?>