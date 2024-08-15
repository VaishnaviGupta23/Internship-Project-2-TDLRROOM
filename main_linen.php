
    
<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <?php require_once("head.php")?>
  <style>
      
      .btn{
          width: 350Px;
          height: 50Px;
          font-size: 20Px;
      } 
      #A{
          color: aquamarine;
          font-size: 30Px;
      }
      #B{
          color:chartreuse;
          font-size: 30Px;
      }
      h2{
          text-align: center;
          color: brown;
          font-size: 30Px;
          font-weight: bolder;
      }
      body{
          background-color: darkgrey;
          
      }
   
    
    
    
    </style>  
    
    </head>
    <body>
        <h2>Linen Management System at TDL Running Room</h2>
        <nav class="navbar navbar-expand-sm bg-success navbar-light">
        
  <a class="navbar-brand" href="#">Linen Management System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
       
      <li class="nav-item">
        <a class="nav-link" href="rroom_main.php">HOME</a>
      </li>  
     
        
      
        
    </ul>
      
      
      
  </div>  
</nav>
        <div class="card text-center">
  
  <div class="card-body bg-secondary">
    <h4 id="A">Inventory Reporting</h4>
    <a href="addition.php" class="btn btn-primary">Addition/deletion in Inventory</a>
   
    <a href="" class="btn btn-primary">Date Wise Report </a>
    <i class="fa fa-car"></i>
<!--<i class="fa fa-car" style="font-size:48px;"></i>
<i class="fa fa-car" style="font-size:60px;color:red;"></i>
    -->
      
     
      
  </div>
            
  
        </div>
        <div class="card text-center">
  <div class="card-header">
  
  </div>
  <div class="card-body">
    <h4 id="B">Daily Data of Washing</h4>
    <a href="washing.php" class="btn btn-primary">Washing Activity</a>
    <a href="" class="btn btn-primary">Present Availabilty</a>
    
    
    
  </div>
   
        </div>
        
     
     
      
            
  

        
        
        
        
        
        
        
        
        
        
        
         
    </body>

    


</html>
