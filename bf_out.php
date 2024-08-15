
<html>
    <?php require_once("head.php") ?>
    <?php require_once("dbcon.php") ?>
   
   
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/9daccec2ae.js" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet"/>
    <style>
        
      
       body{
          background-image: url("images/AE%20SIR%20HOMES.jpg");
          background-repeat: no-repeat, repeat;
          background-position: center; /* Center the image */
          background-size: cover; /* Resize the background image to cover the entire container */
          padding-top: 50px;
         
        }

       
        h2{
         text-align:center;
       font-size: 80Px;
       font-weight: bolder; 
            color:greenyellow;
        }
        h3{
            text-align: center;
            color:blue;
            font-size:50px;
            font-weight: bolder;
        }
         h4{
            text-align: center;
            color:blueviolet;
            font-size:40px;
            font-weight: bolder;
        }
        #tt{
          height: 55Px;
            font-size:40Px;
            text-align: center;
            background-color: transparent;
            color: green;
            font-weight: bolder;
        }
        option{
            font-size: 30Px;
            color: green;
        }
        label{
            font-size:40Px;
            font-weight: bold;
            color: crimson;
            text-align: center;
        }
         #m{
         text-align: center;
         font-size: 30Px;
           margin-left:70Px;  
       }
       #A{
         text-align: center;
         font-size: 30Px;
           margin-left:110Px;
               
       }
       h5{
           text-align: center;
           color:darkmagenta;
           font-size: 35px;
       }
       #x{
           background-color:aquamarine;
           margin-top: 30Px;
       }
       #z{
           color: black;
           font-weight: bolder;
       }
       input[type='radio'] {
        -webkit-appearance: none;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        outline: none;
        border: 3px solid gray;
      border-color:firebrick;
     margin-left: 7Px;
     
    }

    input[type='radio']:before {
       content: '';
        display: block;
        width: 60%;
        height: 60%;
        margin: 20% auto;
        border-radius: 50%;
        
    }

 input[type="radio"]:checked:before {
        background: green;
        
    }
    
    input[type="radio"]:checked {
      border-color:green;
    }

    .role {
        
        font-weight:bolder;
    }
      #role1{
          margin-left: 20Px;
          color:maroon;
          font-size: 22Px;
      }
       #role2{
          margin-left: 20Px;
            color: maroon;
           font-size: 22Px;
      }
      #role3{
          margin-left: 20Px;
           color: maroon;
          font-size: 22Px;
      }
       #role4{
         margin-left: 20Px;
           color:maroon;
           font-size: 22Px;
       }
     


    .checkbox label {
        margin-bottom: 1px !important;
    }
       .btn{
           width: 40%;
           height: 60Px;
           font-size: 30Px;
           margin-left: 30%;
           
       }
        #ttt{
            width: 300px;
            margin-right: 10Px;
            float: right;
            color: blue;
            background-color: aqua;
            font-size:25Px;
            font-weight: bolder;
            text-align: center;
        }
        #ttt1{
            width: 300px;
            margin-right: 10Px;
            float: left;
             color: blue;
            background-color: aqua;
            font-size:25Px;
            font-weight: bolder;
            text-align: center;
        }
        .container{
            margin-top: 200Px;
            margin-left: 10%;
            background-color: transparent;
        }
        #xx{
            border-top-color: transparent;
        }
        #t1{
            text-align: center;
            font-size: 30Px;
            color: crimson;
        }  
       
     
    </style>
    
    </head>
<body>
 
    
        <div class="row>">
     <div class="container col-sm-2"></div>      
<div id="xx" class="card text-center col-sm-6">
  
    
  </div>
      <div class="container col-sm-2"></div>          
        </div>
     
    <?php
  $card_no=$_GET['card_no'];
    //echo ($card_no);
         $cmd="select * from main where card_no='$card_no' and status='1' order by id desc limit 1";
    $res=mysqli_query($conn,$cmd);
    if(mysqli_num_rows($res)>0){
      $rec=mysqli_fetch_assoc($res);
        $lp_id=$rec['crew_id'];
        $lp_name=$rec['crew_name'];
        $lp_hq=$rec['hq'];
        $lp_des=$rec['designation'];
        $bed=$rec['bed_no'];
    }
  
    
      
     ?> 

   <form action="bf_print.php" method="post">
      
       <div class="row>">
           <div class="container col-sm-12">
           <h3 id="t1">This Card Belongs to <?php echo $lp_name ?>/<?php echo $lp_hq ?>/<?php echo $lp_des ?> Staying at Bed No-<?php echo $bed ?></h3>     
         
        <div id="x" class="container col-sm-8">
            <?php
           echo "<a id='ttt'  href='add_vacation.php?card_no=$card_no' role='button'>Vacate the Room</a>"; 
            echo "<a id='ttt1'  href='outside.php?card_no=$card_no' role='button'>Back to Home Page</a>"; 
                ?>
                
            <br>
            <h5>Select Options for Messing Facality  </h5>
            <br>
      <table id="m">
                <tr>
                    
                     
            <td> <input class="radio" id="rad1" type="radio" name="radio" value="Break-Fast" style="content:'1';" ></td>
          <td><label id="role1" class="role" for="rad1"><span></span>Break Fast</label></td>
        
                    <td> <input  class="radio" id="rad1" type="radio" name="radio" value="Ration" style="content:'1';" ></td>
              
          <td><label id="role4" class="role" for="rad1"><span></span>Ration Meal</label></td>
                     <!--<td> <input  class="radio" id="rad1" type="radio" name="radio2" value="1" style="content:'1';" ></td>
          <td><label id="role4" class="role" for="rad1"><span></span>Packed Food (Only or Include)</label></td>-->
          </tr>
          <tr>
                
           <td> <input id="rad2" type="radio" name="radio" value="Lunch" > </td>
         <td> <label id="role2" class="role" for="rad2"><span></span>Lunch</label></td>
          </tr>
          <tr>
               
        <td> <input id="rad2" type="radio" name="radio" value="Dinner" > </td>
         <td> <label id="role2" class="role" for="rad2"><span></span>Dinner</label></td>
          </tr>
          
            
         <input hidden type="text" name="card_no" value="<?php echo $card_no ?>">  
                    
    </table>
            <br>
            <br>
            
            <table id="m">
         <tr>
           
             
            
             </tr>
            
             </table> 
            <br>
            <br>
            
           
            <br>
      <br>
      <br>
      <br>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            
          </div>
              
            
       </div>
         </div>
        
        </form>  
   
    <script language="JavaScript">
$('form input').on('keypress', function(e) {
    return e.which !== 13;
});
</script>  
    
    
    
    </body>


</html>