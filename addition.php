<html>
<head>
   <?php require_once("head.php")?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
<style>
  body{
          background-image: url("");
          background-repeat: no-repeat, repeat;
          background-position: center; /* Center the image */
          background-size: cover; /* Resize the background image to cover the entire container */
          padding-top: 50px;
         
        }
    input[type=number]{
        background-color:transparent;
    }
    input[type=date]{
        background-color:transparent;
        height: 50Px;
    }
    body{
        background-color: lightcyan;
    }
    h3{
        text-align: center;
        font-size: 30px;
        font-weight: bold;
        color: brown;
        
    }
    .btn{
        margin-left: 30%;
        width: 40%;
        font-size: 23Px;
        height: 50Px;
    }
    


    
    
    </style>    
    
    
    </head>
<body>
    <?php require_once("dbcon.php")?>
    <?php
    
 $cmd="select * from linen_invent";   
 $res=mysqli_query($conn,$cmd);
    $rec=mysqli_fetch_assoc($res);
    $bedsheet=$rec['bedsheet'];
    $pillow_cover=$rec['pillow_cover'];
    $blanket=$rec['blanket'];
    $blanket_cover=$rec['blanket_cover'];
    $sofa_cover=$rec['sofa_cover'];
    $net=$rec['net'];
    $curtain=$rec['curtain'];
    $towel=$rec['towel'];
    ?>
   
    <div class="row">
        <div class="com-sm-2"></div>
        
 <div class="container col-sm-8">
     <h3>Inventory Position At Tundla Running Room</h3>
     <form action="add_addition.php" method="post">
         
         <input type="date" name="dated" required>
         
 <table class="table">
     
  <thead class="thead-striped">
    <tr>
      <th scope="col">Sl No</th>
      <th scope="col">Item</th>
      
        
      <th scope="col">Present Quantity</th>
      <th scope="col">Additional Qty.</th>
      <th scope="col">Out of Service Qty.</th>
     
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <th>Bedsheet</th>
      <td> <input readonly type="number" name="a_bedsheet" value="<?php echo $bedsheet ?>"></td>
      <td><input type="number" name="add_bedsheet" value="0"></td>
      <td><input type="number" name="less_bedsheet" value="0"></td>
    </tr>
     <tr>
      <th scope="row">2</th>
      <th>Pillow Cover</th>
      <td> <input readonly type="number" name="a_pillow_cover" value="<?php echo $pillow_cover ?>"></td>
      <td><input type="number" name="add_pillow_cover" value="0"></td>
      <td><input type="number" name="less_pillow_cover" value="0"></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <th>Blanket</th>
      <td> <input readonly type="number" name="a_blanket" value="<?php echo $blanket ?>"></td>
      <td><input type="number" name="add_blanket" value="0"></td>
      <td><input type="number" name="less_blanket" value="0"></td>
    </tr>
       <tr>
      <th scope="row">4</th>
      <th>Blanket Cover</th>
      <td><input readonly type="number" name="a_blanket_cover" value="<?php echo $blanket_cover ?>"></td>
      <td><input type="number" name="add_blanket_cover" value="0"></td>
      <td><input type="number" name="less_blanket_cover" value="0"></td>
    </tr>
      <tr>
      <th scope="row">5</th>
      <th>Net</th>
      <td> <input readonly type="number" name="a_net" value="<?php echo $net ?>"></td>
      <td><input type="number" name="add_net" value="0"></td>
      <td><input type="number" name="less_net" value="0"></td>
    </tr>
      <tr>
      <th scope="row">6</th>
      <th>Curtain</th>
      <td> <input readonly type="number" name="a_curtain" value="<?php echo $curtain ?>"></td>
      <td><input type="number" name="add_curtain" value="0"></td>
      <td><input type="number" name="less_curtain" value="0"></td>
    </tr>
      <tr>
      <th scope="row">7</th>
      <th>Towel</th>
      <td> <input readonly type="number" name="a_towel" value="<?php echo $towel ?>"></td>
      <td><input type="number" name="add_towel" value="0"></td>
      <td><input type="number" name="less_towel" value="0"></td>
    </tr>
     <tr>
      <th scope="row">8</th>
      <th>Sofa Cover</th>
      <td> <input readonly type="number" name="a_sofa_cover" value="<?php echo $sofa_cover ?>"></td>
      <td><input type="number" name="add_sofa_cover" value="0"></td>
      <td><input type="number" name="less_sofa_cover" value="0"></td>
    </tr> 
  </tbody>
</table>
 <button id="butt" type="submit" class="btn btn-primary" name="submit">Submit</button>  
</form>
    </div>
          
        <div class="com-sm-2"></div>
    </div>
    
    </body>


€</html>