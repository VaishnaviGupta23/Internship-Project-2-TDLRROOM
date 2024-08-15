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
    body{
        background-color: lightgray;
    }
    input[type=number]{
      
        width: 80Px;
        background-color: lightgray;
        color: blue;
    }
    th{
        text-align: center;
        font-size: 26Px;
   color: crimson;
    }
      input[type=date]{
        background-color:transparent;
        width: 160Px;
    }
    #xx{
      text-align: center;
        font-size: 21Px;
        color: green;  
    }
    td{
        text-align: center;
    }
    h3{
        text-align:center;
        color:brown;
        font-size: 32Px;
        font-weight: bold;
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
    
 $cmd="select * from balance order by id desc limit 1";   
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
        
       
 <div class="container col-sm-10">
     <h3>Daily Data For Washing Linen</h3> 
     <form action="add_washing.php" method="post">
 <table class="table" border="1">
  <thead class="thead-striped">
    <tr>
      <th rowspan="2" scope="col">Dated</th>
      <th colspan="3" scope="col">Bedsheet</th>
      <th colspan="3" scope="col">Pillow Cover</th>
      <th colspan="3" scope="col">Blanket</th>
      <th colspan="3" scope="col">Blanket Cover</th>
      
     
    </tr>
      <tr>
         
      <th id="xx" scope="col">Balance with <br> Contractor</th>
          <th id="xx" scope="col">Unclean Handed<br> Over</th>
      <th id="xx" scope="col">Cleaned Received</th>
      
           <th id="xx" scope="col">Balance with <br> Contractor</th>
          <th id="xx" scope="col">Unclean Handed<br> Over</th>
      <th id="xx" scope="col">Cleaned Received</th>
      <th id="xx" scope="col">Balance with <br> Contractor</th>
          <th id="xx" scope="col">Unclean Handed<br> Over</th>
      <th id="xx" scope="col">Cleaned Received</th>
         <th id="xx" scope="col">Balance with <br> Contractor</th>
          <th id="xx" scope="col">Unclean Handed<br> Over</th>
      <th id="xx" scope="col">Cleaned Received</th>
      
          
      </tr>
  </thead>
  <tbody>
      
    <tr>
    <td><input required type="date" name="dated"></td>   
      <td> <input readonly type="number" name="a_bedsheet" value="<?php echo $bedsheet ?>"></td>
      <td><input type="number" name="add_bedsheet" value="0"></td>
      <td><input type="number" name="less_bedsheet" value="0"></td>
     <td> <input readonly type="number" name="a_pillow_cover" value="<?php echo $pillow_cover ?>"></td>
      <td><input type="number" name="add_pillow_cover" value="0"></td>
      <td><input type="number" name="less_pillow_cover" value="0"></td>
  
     
      <td> <input readonly type="number" name="a_blanket" value="<?php echo $blanket ?>"></td>
      <td><input type="number" name="add_blanket" value="0"></td>
      <td><input type="number" name="less_blanket" value="0"></td>
    
      <td><input readonly type="number" name="a_blanket_cover" value="<?php echo $blanket_cover ?>"></td>
      <td><input type="number" name="add_blanket_cover" value="0"></td>
      <td><input type="number" name="less_blanket_cover" value="0"></td>
    
     
     </tr>
  </tbody>
</table>
         <br>
         <br>
          <table class="table" border="1">
  <thead class="thead-striped">
    <tr>
      
      <th colspan="3" scope="col">Mosquito Net</th>
      <th colspan="3" scope="col">Curtain</th>
      <th colspan="3" scope="col">Towel</th>
      <th colspan="3" scope="col">Sofa Cover</th>
     
    </tr>
      <tr>
     
       <th id="xx" scope="col">Balance with <br> Contractor</th>
          <th id="xx" scope="col">Unclean Handed<br> Over</th>
      <th id="xx" scope="col">Cleaned Received</th>
      
           <th id="xx" scope="col">Balance with <br> Contractor</th>
          <th id="xx" scope="col">Unclean Handed<br> Over</th>
      <th id="xx" scope="col">Cleaned Received</th>
      <th id="xx" scope="col">Balance with <br> Contractor</th>
          <th id="xx" scope="col">Unclean Handed<br> Over</th>
      <th id="xx" scope="col">Cleaned Received</th>
         <th id="xx" scope="col">Balance with <br> Contractor</th>
          <th id="xx" scope="col">Unclean Handed<br> Over</th>
      <th id="xx" scope="col">Cleaned Received</th>
    
      </tr>
  </thead>
  <tbody>
      
    <tr>
     
      <td> <input readonly type="number" name="a_net" value="<?php echo $net ?>"></td>
      <td><input type="number" name="add_net" value="0"></td>
      <td><input type="number" name="less_net" value="0"></td>
   
      <td> <input readonly type="number" name="a_curtain" value="<?php echo $curtain ?>"></td>
      <td><input type="number" name="add_curtain" value="0"></td>
      <td><input type="number" name="less_curtain" value="0"></td>
   
      <td> <input readonly type="number" name="a_towel" value="<?php echo $towel ?>"></td>
      <td><input type="number" name="add_towel" value="0"></td>
      <td><input type="number" name="less_towel" value="0"></td>
  
      <td> <input readonly type="number" name="a_sofa_cover" value="<?php echo $sofa_cover ?>"></td>
      <td><input type="number" name="add_sofa_cover" value="0"></td>
      <td><input type="number" name="less_sofa_cover" value="0"></td>
     </tr>
  </tbody>
</table>
 <button id="butt" type="submit" class="btn btn-primary" name="submit">Submit</button>  
</form>
    </div>
          
       
    </div>
    
    </body>


</html>