<html>
    <head>
         <?php require_once("head.php")?>
        <style>
           td{
                text-align: center;
               width: 60Px;
            }
            table{
                margin-left: 20Px;
                width: 800Px;
                
            }
            h6{
                text-align: center;
                font-size: 20Px;
            }
            #x{
                text-align: center;
                width: 60Px;
                height: 60Px;
            }
           </style>
        
    </head>
    <body>

<div class="container bg-light col-sm-10">

<?php
   /* var_dump($_POST);*/
if(isset($_POST['period']))
{
	$D1 = trim($_POST['dep_Date']);
	
    $D2 = trim($_POST['arr_Date']);
   
   $D3 = date("d/m/Y", strtotime($D1));
   $D4 = date("d/m/Y", strtotime($D2));
   /* echo ($D1);
    echo ($D2);*/
    
    for ( $i = $startTime; $i <= $endTime; $i = $i + 86400 ) {
     echo "<tr>";
  $date = date( 'Y/m/d', $i ); 
        echo "<h2>Report is Under preparation</h2>";
        
    }
}
        ?>
    
        </div>
    </body>
</html>