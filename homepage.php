 
<?php
	
	require 'dbconfig/config.php';

   
?>
<!DOCTYPE html>
<html>
<head>
<title>BountyHunter|Home</title>

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
     
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
     
<link rel="stylesheet" href="css/general.css">
<link rel="stylesheet" href="css/profile2.css">
<link rel="stylesheet" href="css/loader.css">
 
 
 
      
 
<style>
body{

background-image: url('imgs/pic1.jpeg');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
}
</style>

</head>
  

<body>

 

   
 <?php include("dashboard.php"); ?>

	
 
	 
	
	 
    <div class="container emp-profile" >
  
   
     <div class="row">
    <div class="col-lg-12">
        <h1 class="page-header" style="color: black;font-size: 50px; font-family: 'Alfa Slab One';"> Dashboard </h1>
        
        <ol class="breadcrumb">
            <li class="active">
            
                 
            
            </li>
        </ol>
        
    </div>
</div>

<div class="row">
   
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-blue">
            
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                       
                       &nbsp;&nbsp;&nbsp; <i class="fa fa-trophy fa-5x"></i>
                        
                    </div>
                    
                    <div class="col-xs-9 text-right">
                        <div class="huge">3</div>
                           
                        <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Bounties </div>
                        
                    </div>
                    
                </div>
            </div>
            
            <a href="viewtask.php">
                <div class="panel-footer">
                   
                    <span class="pull-left">
                        View Details 
                    </span>
                    
                    <span class="pull-right"> 
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span> 
                    
                    <div class="clearfix"></div>
                    
                </div>
            </a>
            
        </div>
    </div>
   
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                       
                       &nbsp;&nbsp;&nbsp;  <i class="fa fa-tasks fa-5x"></i>
                        
                    </div>
                    
                    <div class="col-xs-9 text-right">
                        <div class="huge"> 2 </div>
                           
                        <div>&nbsp;&nbsp;  Pending Tasks </div>
                        
                    </div>
                    
                </div>
            </div>
            
            <a href="gethuntinfo.php">
                <div class="panel-footer">
                   
                    <span class="pull-left">
                        View Details 
                    </span>
                    
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span>
                    
                    <div class="clearfix"></div>
                    
                </div>
            </a>
            
        </div>
    </div>
   
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-orange">
            
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                       
                         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-bullseye fa-5x"></i>
                        
                    </div>
                    
                    <div class="col-xs-9 text-right">
                        <div class="huge"> 3 </div>
                           
                        <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Hunts </div>
                        
                    </div>
                    
                </div>
            </div>
            
            <a href="viewhunt.php">
                <div class="panel-footer">
                   
                    <span class="pull-left">
                        View Details 
                    </span>
                    
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span>
                    
                    <div class="clearfix"></div>
                    
                </div>
            </a>
            
        </div>
    </div>
   
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                       
                        &nbsp;&nbsp;&nbsp; <i class="fa fa-tasks fa-5x"></i>
                        
                    </div>
                    
                    <div class="col-xs-9 text-right">
                        <div class="huge">2 </div>
                           
                        <div>&nbsp;&nbsp;  Pending Hunts </div>
                        
                    </div>
                    
                </div>
            </div>
            
            <a href="">
                <div class="panel-footer">
                   
                    <span class="pull-left">
                        View Details 
                    </span>
                    
                    <span class="pull-right">
                        <i class="fa fa-arrow-circle-right"></i> 
                    </span>
                    
                    <div class="clearfix"></div>
                    
                </div>
            </a>
            
        </div>
    </div>
    
</div>
  </div>
</div>
	
	
	
	
	
	</div>
</div>

</body>


</html>