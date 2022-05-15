<?php


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
<?php require_once('admin/connection.php'); ?>

<section id="inner-banner">
<div class="overlay">
<div class="container">
<div class="row"> 
<div class="col-sm-6"><h1>ABOUT US</h1></div>
<div class="col-sm-6">
  <h6 class="breadcrumb"><a href="index.php">Home</a> / About us</h6></div>
</div>
</div>
</div>
</section>

<section id="about-sec">
<div class="container">
<div class="row text-center">
<h1>ABOUT CHARITY HOPE</h1>
<hr>
<?php
                                            
                                            $query= "SELECT * FROM `about` ORDER BY `id` ASC";
                                           
                                            $res= mysqli_query($conn,$query);
                                            if(mysqli_num_rows($res)>0){
                                            
                                                while($row=mysqli_fetch_array($res)){
                                    
                                            ?>
<h5><?php echo $row["title"];?></h5>
<p><?php echo $row["description"];?></p>

<?php

												}
											}

?>
<div class="text-center">
</div>
</div>
</div>
</section>

<section id="help">
<div class="container">
<div class="row text-center">
<h1>WAYS TO HELP</h1>
<hr>
<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h5>
<div class="text-left"> 
<div class="col-md-6 clearfix top-off">
<div class="icon_circle"><i class="fa fa-heartbeat">&nbsp;</i></div>
<div class="help-text">
<h4>Donate</h4>
<div class="line line-50"></div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</div>
</div>
<div class="col-md-6 clearfix top-off">
<div class="icon_circle"><i class="fa fa-user-plus">&nbsp;</i></div>
<div class="help-text">
<h4>Participate</h4>
<div class="line line-50"></div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</div>
</div>
<div class="col-md-6 clearfix top-off">
<div class="icon_circle"><i class="fa fa-usd">&nbsp;</i></div>
<div class="help-text">
<h4>Fundraise</h4>
<div class="line line-50"></div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</div>
</div>
<div class="col-md-6 clearfix top-off">
<div class="icon_circle"><i class="fa fa-credit-card">&nbsp;</i></div>
<div class="help-text">
<h4>Contribute</h4>
<div class="line line-50"></div>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
</div>
</div>
</div>
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
