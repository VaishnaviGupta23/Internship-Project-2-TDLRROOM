<!DOCTYPE html>
<html>
<head>
	<title>HOMES</title>
	<script src="jquery.min.js"></script>
	<script src="instascan.min.js"></script>
     <?php require_once("head.php")?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        
       
        h1{
            text-align: center;
            color: coral;
        }
        body {
  background-color:cyan;
  text-align: center;
}
        #yy{
            width:350Px;;
            font-size: 20px;
            color: brown;
            font-weight: bold;
        }
        h6{
            text-align: left;
            font-size: 30Px;
            font-weight: bold;
        }
        table{
            width: 80%;
            
        }
        th,td{
            font-size: 21Px;
            text-align: center;
        }
        

h1 {
  font-size: 60pt;
  font-family: 'Luckiest Guy';
  color:coral;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-shadow:   0px -6px 0 #212121,  
                 0px -6px 0 #212121,
                 0px  6px 0 #212121,
                 0px  6px 0 #212121,
                -6px  0px 0 #212121,  
                 6px  0px 0 #212121,
                -6px  0px 0 #212121,
                 6px  0px 0 #212121,
                -6px -6px 0 #212121,  
                 6px -6px 0 #212121,
                -6px  6px 0 #212121,
                 6px  6px 0 #212121,
                -6px  18px 0 #212121,
                 0px  18px 0 #212121,
                 6px  18px 0 #212121,
                 0 19px 1px rgba(0,0,0,.1),
                 0 0 6px rgba(0,0,0,.1),
                 0 6px 3px rgba(0,0,0,.3),
                 0 12px 6px rgba(0,0,0,.2),
                 0 18px 18px rgba(0,0,0,.25),
                 0 24px 24px rgba(0,0,0,.2),
                 0 36px 36px rgba(0,0,0,.15);
}
    
    
    </style>
</head>
<body>
   <div class="w3-padding-32 w3-blue w3-circle w3-center">
  <h2><font size="50pt" color="red" font-weight="bolder">Hospitality Operation Management Eco-System (HOMES)</font></h2>
   
</div>
    <nav class="navbar navbar-expand-sm bg-light navbar-light">
       
          
       
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
       
      
         <li class="nav-item">
         <a id="yy" href="" class="btn btn-outline-primary">ADD LP</a>
      </li>
       
        
         <li class="nav-item">
         <a id="yy" href="barcode1.php" class="btn btn-outline-primary">Generate Bar Code</a>
      </li>
           <li class="nav-item">
        <a id="yy" class="btn btn-outline-primary" href="issue1.php">Issue Device</a>
      </li>
        <li class="nav-item">
        <a id="yy" class="btn btn-outline-primary" href="receive1.php">Receive Device</a>
      </li>
         <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="yy" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Reports
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a id="tt" class="dropdown-item" href="">Cuurently Issued MTRC</a>
          <a id="tt" class="dropdown-item" href="">Date Wise Issued Device</a>
         
          
        </div>
      </li>
        
      
      
        
  
        
    </ul>
      
      
      
  </div>  
</nav> 
    
</body>
</html>