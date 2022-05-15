<?php

require_once('admin/connection.php');
session_start();
if(isset($_GET["action"]) && $_GET["action"]=="logout" ){
    unset($_SESSION["loggedin"]);
    header("location: login.php");
}

?>
<!DOCTYPE HTML>
<html class="no-js" lang="de">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="robots" content="index,follow">

<title>online charity management system</title>

<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/animate.css" rel="stylesheet">
<link href="css/bootsnav.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> 
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">  
</head>
<body>
<?php require_once('navbar.php') ?>

<section id="inner-banner">
<div class="overlay">
<div class="container">
<div class="row"> 
<div class="col-sm-6"><h1>ACTIVITIES</h1></div>
<div class="col-sm-6">
  <h6 class="breadcrumb"><a href="index.php">Home</a> / Activities</h6></div>
</div>
</div>
</div>
</section>

<section id="about-sec">
<div class="container">
<div class="row text-left">

                                            <?php
                                            
                                            $query= "SELECT * FROM `activities` ORDER BY `id` ASC";
                                           
                                            $res= mysqli_query($conn,$query);
                                            if(mysqli_num_rows($res)>0){
                                            
                                              $count=0;

                                              
                                                while($row=mysqli_fetch_array($res)){

                                    if($count%2=="0"){
                                      
                                      ?>
<div class="act-box clearfix mt-1">
<div class="col-md-6">
<div class="image"><img src="admin/images/<?php echo $row["image"];?>" /></div>
</div>
<div class="col-md-6">
<div class="act-pad">
<h4><?php echo $row["title"];?></h4>
<p><?php echo $row["description"];?></p>
<div class="price">Raised: $<?php echo $row["raised"];?> <span class="goal">Goal: $<?php echo $row["goal"];?></span></div>
<a href="<?php if(isset($_SESSION["loggedin"])){ echo "donate.php"; } else{ echo "login.php"; }?>" class="btn1">donate now</a>
<div class="clearfix"></div>
</div>
</div>
</div>

<?php
                                    }
                                    else{
                                            ?>


<div class="act-box clearfix">
<div class="col-md-6 col-md-push-6">
<div class="image"><img src="admin/images/<?php echo $row["image"];?>" /></div>
</div>
<div class="col-md-6 col-md-pull-6">
<div class="act-pad">
<h4><?php echo $row["title"];?></h4>
<p><?php echo $row["description"];?></p>
<div class="price">Raised: $<?php echo $row["raised"];?> <span class="goal">Goal: $<?php echo $row["goal"];?></span></div>
<a href="<?php if(isset($_SESSION["loggedin"])){ echo "donate.php"; } else{ echo "login.php"; }?>" class="btn1">donate now</a>
<div class="clearfix"></div>
</div>
</div>
</div>


                                 <?php   
                                 
                                    }
                                    $count=$count+1;
                                                }
                                                
                                              }

                                         ?>



</div>
</div>
</section>

<?php require_once('footer.php') ?>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootsnav.js"></script>
<script src="js/banner.js"></script>  
<script src="js/script.js"></script>
</body>
</html>
