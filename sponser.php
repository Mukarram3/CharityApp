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

<section id="inner-banner">
<div class="overlay">
<div class="container">
<div class="row"> 
<div class="col-sm-6"><h1>SPONSER</h1></div>
<div class="col-sm-6">
  <h6 class="breadcrumb"><a href="index.php">Home</a> / Sponser</h6></div>
</div>
</div>
</div>
</section>

<section id="about-sec">
<div class="container">
<div class="row text-center">
<h2 style="margin-top:0;">I WISH TO BE A SPONSER<br>
WE NEED YOUR HELP TO HELP OTHERS</h2>
<div class="con-form clearfix">
<div class="col-md-6">
<input type="text" name="name" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="First Name*">
</div>
<div class="col-md-6">
<input type="text" name="name" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Last Name*">
</div>
<div class="col-md-6">
<input type="text" name="phone" value="" size="40" class="" aria-invalid="false" placeholder="Phone Number*">
</div>
<div class="col-md-6">
<input type="email" name="email" value="" size="40" class="" aria-invalid="false" placeholder="Email ID*">
</div>
<div class="col-md-6">
<input type="text" name="street" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Street Address*">
</div>
<div class="col-md-6">
<input type="text" name="city" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="City / Town*">
</div>
<div class="col-md-6">
<input type="text" name="country" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Country*">
</div>
<div class="col-md-6">
<input type="text" name="amount" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Amount*">
</div>
<div class="col-md-12">
<textarea name="message" cols="40" rows="5" class="" id="message" aria-invalid="false" placeholder="Message"></textarea>
</div>
<div class="col-xs-12 submit-button">
<input type="submit" value="Sponser Now" class="btn2" id="sub" style="border:none; margin: 20px 0 0 0">
</div
></div>
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
