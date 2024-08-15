 <html>  
      <head>  
            
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <style>  
           ul{  
                background-color:#eee;  
                cursor:pointer;  
           }  
           li{  
                padding:12px;  
           }  
               .btn{
                   width: 100%;
                   height: 50Px;
                   font-size: 22Px;
               }
               #country{
                   width: 100%;
                   height: 50Px;
               }
               label{
                   font-size: 30Px;
                   color: blueviolet;
               }
           </style>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Select LP CMS ID </h3><br />
               <form method="post" action="edit_lp1.php">
                <label>Enter LP CMS ID</label>  
                <input type="text" name="lp_id" id="country" class="form-control" placeholder="Enter LP CMS ID" />  
                <div id="countryList"></div>
                   <br>
                   <br>
                   <br>
                   <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                   </form>
           </div>  
      </body>  
 </html> 

 <script>  
 $(document).ready(function(){  
      $('#country').keyup(function(){  
           var query = $(this).val();  
           if(query != '')  
           {  
                $.ajax({  
                     url:"json_change_li.php",  
                     method:"POST",  
                     data:{query:query},  
                     success:function(data)  
                     {  
                          $('#countryList').fadeIn();  
                          $('#countryList').html(data);  
                     }  
                });  
           }  
      });  
      $(document).on('click', 'li', function(){  
           $('#country').val($(this).text());  
           $('#countryList').fadeOut();  
      });  
 });  
 </script>  