 <!DOCTYPE html>
<html>
<head>
     <?php require_once("head.php")?>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js">
        </script> 
   <style>
       .form-control,#xx{
           height: 50Px;
       }
    
    </style>
    </head>
    <body>
    
       <div class="Card bg-light" style="width: 700Px; margin-left: 200Px; margin-top:30Px;" > 
           <div class="card-body">
  <h2 style="text-align:center"> Crew And Guard Registration </h2>
  <form action="add_crew_guard.php" method="post">
    <div class="form-group">      
      <input type="text" class="form-control" placeholder="Enter Crew CMS ID" name="crew_id" required>
    </div>
    <div class="form-group">      
      <input type="Text" class="form-control" placeholder="Enter Crew Name" name="crew_name" required>
    </div>
       <div class="form-group">      
      <input type="Text" class="form-control" placeholder="Head Quarter" name="hq" required>
    </div>
      <div class="form-group">      
      <select id="xx" class="form-control" name="traction" required >
     		   <option value="0">Please Select Traction</option>
     		   <option value="DSL">DSL</option>
      		   <option value="ELEC">ELEC</option>
   		   <option value="DSL+ELEC">DSL+ELEC</option>
   		   <option value="NA">NA</option>
   		 
 	       </select>
    </div> 
     
       <div class="form-group">      
      <select id="xx" class="form-control" name="designation" required >
     		   <option value="0">Please Select Designation</option>
     		   <option value="LPM">LPM</option>
      		   <option value="SLPP">SLPP</option>
   		   <option value="LPP">LPP</option>
   		   <option value="SSHT">SSHT</option>
   		   <option value="LPG">LPG</option>
   		   <option value="SHT">SHT</option>
   		   <option value="SALP">SALP</option>
   		   <option value="ALP">ALP</option>
   		   <option value="GDP">GDP</option>
   		   <option value="GDM">GDM</option>
   		   <option value="SGDP">SGDP</option>
   		   <option value="GD">GD</option>
   		   <option value="SGD">SGD</option>
   		   <option value="SLPG">SLPG</option>
   		   <option value="CLI">CLI</option>
   		 
 	       </select>
    </div>    
      <div class="form-group">      
      <input type="Mobile" class="form-control" placeholder=" Crew Mobile Numer" name="mobile" required>
    </div>
    
    <button type="submit" class="btn btn-primary" name="registration">Submit</button>
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
