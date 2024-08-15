<?php 
 
   /* session_start();
    if(isset($_SESSION['isLoggedIn']))
    {*/
    ?>
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
   
        h2{
         text-align:center;
       font-size: 80Px;
       font-weight: bolder; 
            color: blue;
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
           font-size: 22px;
       }
        h6{
           text-align: center;
           color:crimson;
           font-size: 35px;
            font-weight: bolder;
       }
       #x{
           background-color:transparent;
           margin-top: 80Px;
           margin-left: 20%;
       }
       #z{
           color: black;
           font-weight: bolder;
       }
       input[type='text'] {
       
    height: 50Px;
           background-color:beige;
   
           font-size: 30Px;
           color: green;
    }
       input[type='select'] {
       
    height: 50Px;
     background-color:seashell;     
   
    }
       option{
       
    font-size: 28Px;
    font-weight:bold;
        color: green;
           
         
   
    }
       input[type='date'] {
       
    height: 50Px;
   
    }

    .role {
        
        font-weight:bolder;
    }
      #role1{
          margin-left: 20Px;
          color: coral;
      }
       #role2{
          margin-left: 20Px;
            color: coral;
      }
      #role3{
          margin-left: 20Px;
           color: coral;
      }
       #lp_name{
         
           font-size:30Px;
           color:darkgreen;
           font-weight: bolder;
       }
     


   
       .btn{
           width: 30%;
           height: 60Px;
           font-size: 30Px;
           margin-left: 30%;
       }
        #anchor{
           width: 30%;
           height: 60Px;
           font-size: 30Px;
            margin-left: 0px;
           
       }
       label{
       font-size: 22Px;
           color:chartreuse;
       }
       #t_no,#t_name,#dir,#type,#stn1,#speed{
           height: 50Px;
       }
       #rd{
           border: none;
           background-color: aqua;
           text-align: center;
           font-size:22Px;
           font-weight: bold;
       }
        #tt{
           height: 50Px;
             background-color:silver;
            font-size: 30Px;
        }
        #ttt{
            margin-top: 250Px;
            background-color: transparent;
        }
        #train{
            font-size:30Px;
        }

    
    
    
    </style>
    
    </head>
    <body>
      
        
    <a id="anchor" class="btn btn-outline-primary" href="entry_crew_id.php" role="button">ADD LP</a>
   <form id="ttt" action="add_main_lobby.php" method="post" onClick="this.form.submit(); this.disabled=true; this.value='Sending…'; ">
       
        <div id="x" class="container col-sm-6">
            <h6>Please Fill the Details Before Issue Card</h6>
            <br>
                  
       <div class="row"> 
         <div class="container col-sm-10">
  
        <label for="t_num" class="col-sm-12">Please Select Card Number</label>
      <div class="form-group">
     <input id="tt" oninput="detectHumans();"  class="form-control mr-sm-3" type="text" maxlength="12" placeholder="Card Value" aria-label="Search" autofocus name="lobby_card_no" >
    </div>
             
         </div>
            </div>
        
     <div class="row"> 
         <div class="container col-sm-10">
  
        <label for="t_num" class="col-sm-12">Please Select Staff ID</label>
      <div class="form-group">
        
    <input id="lp_cms" list="lp_cms_id_list" type="text" name="lp_id" class="form-group col-sm-12" placeholder="LP CMS ID" required>    
     <datalist id="lp_cms_id_list">

           <?php require_once("dbcon.php")?>
<?php
   
$sql = mysqli_query($conn, "SELECT crew_id From biodata");
$row = mysqli_num_rows($sql);
while ($row = mysqli_fetch_array($sql)){
echo "<option value='". $row['crew_id'] ."'>" .$row['crew_id'] ."</option>" ;
}
?>
</datalist>
    </div>
             
              <div id="lp_name" class="col-sm-12"></div>
            
              <div id="lp_name" class="col-sm-6"></div>
             <input hidden readonly type=text name="lp_name" class="form-control col-sm-1" id="lp_name1" placeholder="LP Name">
      
            <input hidden readonly type=text name="lp_hq" class="form-control col-sm-1" id="lp_hq" placeholder="HQ">
                 
            <input hidden readonly type=text name="lp_designation" class="form-control col-sm-1" id="lp_des" placeholder="Designation">
            
           
        
         </div>
            </div>
           
    <div class="row"> 
         <div class="container col-sm-10">
  
        <label for="t_num" class="col-sm-12">Please Fill Train Number</label>
      <div class="form-group">
   <input type="text" name="train" id="train" class="col-sm-12" placeholder="Please fill train Number">
    </div>
             
              
         </div>
            </div>
     <div class="row"> 
         <div class="container col-sm-10">
  
        <label for="t_num" class="col-sm-12">Please Select Type Of Working</label>
      <div class="form-group">
     <select id="tt" name="type" class="col-sm-12">   
  
<option value="working">Working A Train</option>
<option value="spare">Spare</option>
<option value="LR">LR</option>
          
</select> 
    </div>
             
              
         </div>
            </div>       
            
            <br>
           <br>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button> 
        </div>
              
        
        </form>
     <script>
        $(document).ready(function(){
            var is_section_exists=false;
              $("#lp_cms").change(function(){
            
                var lp_cms_id=$(this).val();
                    
                $.ajax({
                    url:'get_device_info.php',
                    type:'post',
                    data:{lp_cms_id:lp_cms_id},
                    
                    success:function(result){
                        var res = JSON.parse(result);
                        var lp_name=res['crew_name'];
                        var lp_hq=res['hq'];
                        var lp_des=res['designation'];
                          $("#lp_name").empty();
                         
                        $("#lp_name").append("Name-"+lp_name+",  Des-"+lp_des+",HQ-"+lp_hq);
                        
                        $("#lp_name1").val(lp_name);
                        $("#lp_hq").val(lp_hq);
                        $("#lp_des").val(lp_des);
                        
                        
                       // alert(result);
                    }
                });
            })
        })      
        
        </script>
    <script>
        var Loco = new Array();
           
            var list = document.getElementById("lp_cms_id_list");
            var list_items = list.options;
            //alert(list_items[].value);
            for(i=0;i<list_items.length;i++)
            {
                Loco.push(list_items[i].value); 
                 
                
            }
               $("#lp_cms").change(function(){
                var id=$(this).val();
                if(Loco.indexOf(id)==-1)
                {
                    alert("This is not a valid CMS ID. Please Insert LP Details And Try");
                    $(this).val("");
                    
                }
            });      
        </script>
         <script>
        function check(){
         var dist = document.getElementById('tt').value;
       $("#tt").keyup(function () {
      
    if (this.value.length > 6) {
         
    window.location.href = "rroom_main1.php?dist=" + dist;
    }
           /*else{
                alert ('This Device Does Not Belong to GMC Lobby');  
                         document.getElementById('#tt').value = "";
                              $('#tt').focus();
           }*/
          
})
        }; 
        
  var x = -1;
        var delta = 0;
        var count = 0;
        function detectHumans() {
            count += 1;
            if ($("#tt").val().length != count) {
                alert('Human Entries Not Allowed. Use Card Only');
                 document.getElementById('tt').value = "";
                              $('#tt').focus();
                
            }
            console.log($("#tt").val());
            y = Date.now();
            if (x == -1) {
                x = y;
            }
            else if (delta == 0) {
                delta = y - x;
                x = y;
            }
            else{
                var new_delta = y - x;
                console.log(delta);
                console.log(new_delta);
                if (Math.abs(new_delta - delta) > 10) {
                    alert('Human Entries Not Allowed. Use Card Only');
                    document.getElementById('tt').value = "";
                              $('#tt').focus();
                }
                delta = new_delta;
                x = y;
            }
        }
        </script>
        
        
    </body>

</html>
<?php

   /* }
    else
    {
        header("location:../Index.php");
        die();
    }*/
?>