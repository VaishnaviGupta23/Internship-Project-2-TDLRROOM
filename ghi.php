<!DOCTYPE html>
<?php date_default_timezone_set("Asia/Kolkata")?>
<meta charset="utf-8">
<html>
<head>
     <?php require_once("head.php")?>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js">
        </script> 
  <style>
      body{
          background-color: darkgrey;
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
      }
       #role2{
          margin-left: 90Px;
      }
      #role3{
          margin-left: 94Px;
      }
      #role4{
          margin-left: 93Px;
      }
       #role5{
          margin-left: 93Px;
      }


    .checkbox label {
        margin-bottom: 1px !important;
    }
      h4{
          margin-left: 80Px;
          color:crimson;
      
      }
      h5{
         margin-left: 70Px;
          font-size: 30Px;
          
      }
      h6{
         margin-left:10Px;
          font-size: 22Px;
          
      }
      #butt{
          width: 300Px;
        
      }
      #ID{
         margin-left: 70Px;  
      }
      td{
          width: 100Px;
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
     
    <meta charset="utf-8">
    </head>
    <body>
        <div>
         <h2>TDL RUNNING ROOM</h2>
        
        </div>
        <div class="w3-padding-32 w3-blue w3-circle w3-center">
    <h1>Hospitality Operation Management Eco-System <br> (HOMES)</h1>
            
    </div> 
    <a id="tt" class="btn btn-outline-primary" href="rroom_main.php" role="button">Home</a>
        <div class="row">
        
           
            <h4>सकल सन्तुष्टि सूचकांक/ Gross Happiness Index(GHI)</h4>
            </div>
            <h5>कृपया रनिंग रूम का आकलन करें( 1-5 नम्बरों कि scale पर) </h5>
        <form action="add_ghi.php" method="post">
         <div col-sm-10 class="form-group">      
     <input id="crew" list="crew1" type="text" name="crewid" class="form-control" placeholder="Please Select Crew ID" required>    
     <datalist id="crew1">
<option value="">Select Loco Number</option>
<?php
    require_once("dbcon.php");
$sql = mysqli_query($conn, "SELECT crew_id From main where designation<>'1' and status='1'");
$row = mysqli_num_rows($sql);
while ($row = mysqli_fetch_array($sql)){
echo "<option value='". $row['crew_id'] ."'>" .$row['crew_id'] ."</option>" ;
}
?>
</datalist>       
    </div>
        <div class="container col-sm-12 bg-light">
           
            <table>
           <tr>
       <h6>लॉबी द्वारा रनिंग रूम में कमरे की आवंटन व्यवस्था/ Allottment Arrangement</h6>
     </tr>
     <tr>
           <td> <input required class="radio" id="rad1" type="radio" name="radio" value="1" style="content:'1';" ></td>
          <label id="role1" class="role" for="rad1"><span></span>1</label>
           <td> <input id="rad2" type="radio" name="radio" value="2" > </td>
          <label id="role2" class="role" for="rad2"><span></span>2</label>
           <td> <input id="rad3" type="radio" name="radio" value="3"> </td>
         <label id="role3" class="role" for="rad3"><span></span>3</label>
           <td> <input id="rad4" type="radio" name="radio" value="4"> </td>
         <label id="role4" class="role" for="rad4"><span></span>4</label>
           <td> <input id="rad5" type="radio" name="radio" value="5"> </td>
         <label id="role5" class="role" for="rad5"><span></span>5</label>
          
          
                </tr>    
 
      </table>  
    </div>
      <div class="container col-sm-12 bg-light">
            <table>
           <tr>
       <h6>रनिंग रूम के रिसेप्शन की क्वालिटी/ Quality of reception</h6>
     </tr>
    
     <tr>
           <td > <input required id="rad19" type="radio" name="radio9" value="1" ></td>
        
        
           <td> <input id="rad20" type="radio" name="radio9" value="2" > </td>
       
           <td> <input id="rad21" type="radio" name="radio9" value="3"> </td>
       
           <td> <input id="rad22" type="radio" name="radio9" value="4"> </td>
         
           <td> <input id="rad23" type="radio" name="radio9" value="5"> </td>
       
         
        
           
                </tr>    
    
      </table>  
    </div>                
            
            
            
     <div class="container col-sm-12 bg-light">
            <table>
           <tr>
       <h6>आवंटित कमरे की साफ़ सफाई/ Cleanliness of Room</h6>
     </tr>
               
         
     <tr>
           <td> <input required id="rad10" type="radio" name="radio1" value="1" ></td>
        
           <td> <input id="rad11" type="radio" name="radio1" value="2" > </td>
         
           <td> <input id="rad12" type="radio" name="radio1" value="3"> </td>
        
           <td> <input id="rad13" type="radio" name="radio1" value="4"> </td>
         
           <td> <input id="rad14" type="radio" name="radio1" value="5"> </td>
       
          
        
           
                </tr>
             </table>  
         </div>
      
    
     <div class="container col-sm-12 bg-light">
            <table>
           <tr>
       <h6>टॉयलेट की साफ़ सफाई/ Cleanliness of Toilet</h6>
     </tr>
    
     <tr>
           <td> <input required id="rad19" type="radio" name="radio2" value="1" ></td>
        
           <td> <input id="rad20" type="radio" name="radio2" value="2" > </td>
         
           <td> <input id="rad21" type="radio" name="radio2" value="3"> </td>
        
           <td> <input id="rad22" type="radio" name="radio2" value="4"> </td>
         
           <td> <input id="rad23" type="radio" name="radio2" value="5"> </td>
       
           
           
                </tr>    
    
      </table>  
    </div>         
    <div class="container col-sm-12 bg-light">
            <table>
           <tr>
       <h6>लिनेन वाशिंग की गुणवत्ता/ Quality of Linen Washing</h6>
     </tr>
    
     <tr>
           <td> <input required id="rad19" type="radio" name="radio3" value="1" ></td>
        
           <td> <input id="rad20" type="radio" name="radio3" value="2" > </td>
         
           <td> <input id="rad21" type="radio" name="radio3" value="3"> </td>
        
           <td> <input id="rad22" type="radio" name="radio3" value="4"> </td>
         
           <td> <input id="rad23" type="radio" name="radio3" value="5"> </td>
       
          
        
           
                </tr>    
    
      </table>  
    </div>         
   <div class="container col-sm-12 bg-light">
            <table>
           <tr>
       <h6>हाउस कीपिंग स्टाफ का व्यवहार/ Behaviour Housekeeping Staff </h6>
     </tr>
    
     <tr>
           <td> <input required id="rad19" type="radio" name="radio4" value="1" ></td>
        
           <td> <input id="rad20" type="radio" name="radio4" value="2" > </td>
         
           <td> <input id="rad21" type="radio" name="radio4" value="3"> </td>
        
           <td> <input id="rad22" type="radio" name="radio4" value="4"> </td>
         
           <td> <input id="rad23" type="radio" name="radio4" value="5"> </td>
       
           
        
           
                </tr>    
    
      </table>  
    </div> 
              <div class="container col-sm-12 bg-light">
            <table>
           <tr>
       <h6>मेस कर्मचारियों का व्यवहार/ Behaviour Mess Staff </h6>
     </tr>
    
     <tr>
           <td> <input required id="rad19" type="radio" name="radio5" value="1" ></td>
        
           <td> <input id="rad20" type="radio" name="radio5" value="2" > </td>
         
           <td> <input id="rad21" type="radio" name="radio5" value="3"> </td>
        
           <td> <input id="rad22" type="radio" name="radio5" value="4"> </td>
         
           <td> <input id="rad23" type="radio" name="radio5" value="5"> </td>
       
          
        
           
                </tr>    
    
      </table>  
    </div>               
       <div class="container col-sm-12 bg-light">
            <table>
           <tr>
       <h6>भोजन को तैयार करने में लगा समय/ Time taken for Meal </h6>
     </tr>
    
     <tr>
           <td> <input required id="rad19" type="radio" name="radio6" value="1" ></td>
        
           <td> <input id="rad20" type="radio" name="radio6" value="2" > </td>
         
           <td> <input id="rad21" type="radio" name="radio6" value="3"> </td>
        
           <td> <input id="rad22" type="radio" name="radio6" value="4"> </td>
         
           <td> <input id="rad23" type="radio" name="radio6" value="5"> </td>
       
          
           
                </tr>    
    
      </table>  
    </div>                    
      <div class="container col-sm-12 bg-light">
            <table>
           <tr>
       <h6>भोजन की गुणवत्ता/ Quality of Meal </h6>
     </tr>
    
     <tr>
           <td> <input required id="rad19" type="radio" name="radio7" value="1" ></td>
        
           <td> <input id="rad20" type="radio" name="radio7" value="2" > </td>
         
           <td> <input id="rad21" type="radio" name="radio7" value="3"> </td>
        
           <td> <input id="rad22" type="radio" name="radio7" value="4"> </td>
         
           <td> <input id="rad23" type="radio" name="radio7" value="5"> </td>
       
           
        
           
                </tr>    
    
      </table>  
    </div>                       
      <div class="container col-sm-12 bg-light">
            <table>
           <tr>
       <h6>रनिंग रूम परिसर में स्वच्छ वातावरण/ Atmosphere of Running Room </h6>
     </tr>
    
     <tr>
           <td> <input required id="rad19" type="radio" name="radio8" value="1" ></td>
        
           <td> <input id="rad20" type="radio" name="radio8" value="2" > </td>
         
           <td> <input id="rad21" type="radio" name="radio8" value="3"> </td>
        
           <td> <input id="rad22" type="radio" name="radio8" value="4"> </td>
         
           <td> <input id="rad23" type="radio" name="radio8" value="5"> </td>
       
          
        
           
                </tr>    
    
      </table> 
            <button id="butt" type="submit" class="btn btn-primary" name="submit">Submit</button>     
    </div>
       
            
    </form>
        
    </body>
    <script>
    $(document).ready(function() {
        function disableBack() { window.history.forward() }

        window.onload = disableBack();
        window.onpageshow = function(evt) { if (evt.persisted) disableBack() }
    });
</script>   
</html>