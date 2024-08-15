<!DOCTYPE html>
<html>
<head>
    <?php require_once("head.php")?>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js">
        </script>
    <style>
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

     <div class="container">
         <h6> Please select the Bed Numbers to Be kept For Maintainance</h6>
         <div class="row">
             <div class="col-sm-3"></div>
       
            <div class="col-sm-6 bg-light">
    <form action="add_maintain.php" method="post">
    
      <?php
        require_once("dbcon.php");
      echo "<table border='1' align='center'>";
        echo "<tr>";
         echo "<th id='T'>Bed Number</th>";
         echo "<th id='T'>Please Check</th>";
         
    echo "</tr>";
		$cmd="select * from room_number where status='0' order by bed_no";
		$res=mysqli_query($conn,$cmd);
		if($res and mysqli_num_rows($res)>0)
		{
			while ($rec=mysqli_fetch_assoc($res))
            {
            echo "<tr>";   
            $bed_no = $rec['bed_no'];
            
            
             echo "<td id='T'>$bed_no</td>";    
                 
            
           ?> 
        
             <td align="center"><input type="checkbox" name="check_list[]" class="chk_val" value= "<?php echo $bed_no;?>"></td>  
        
    <?php
                echo "</tr>";
            }
        }
    echo "</table>";
        
    ?>
      <br>  
      <br>  
      <br>  
      <button id="ttt" type="submit" class="btn btn-primary" name="submit">Submit</button>   
    </form>
         </div>
              <div class="col-sm-3"></div>
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

