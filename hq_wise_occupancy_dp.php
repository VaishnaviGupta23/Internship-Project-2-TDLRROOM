<!DOCTYPE html>
<html>
<head>
    <?php require_once("head.php")?>
   <style>
       table{
          align-content: center;
               
       }
    
    </style>
     
    </head>
<body> 
    
    <form action="hq_wise_occupancy.php" method="post">
        <div class="container col-md-4 bg-light">
            <h5>Please Select the Month/Months for Head Quarter Wise Occupancy Detail</h5>
    <table border="1" id="A">
      <?php
    for ($i=00;$i<=11;$i++)
        
    {
        
        
        echo "<tr>";
        echo "<td>";
        echo date("F-Y",strtotime("-$i Months"));
        echo "</td>";       
       
        ?>
        
        <td align="center"><input type="checkbox" name="check_list[]" class="chk_val" value= "<?php echo $i;?>"></td>
       
        
        <?php
         echo "</tr>"; 
    }
    ?>
       
    </table>
     <button type="submit" class="btn btn-primary" name="submit">Submit</button> 
     </div>
        </form>
   
    </body>
</html>
