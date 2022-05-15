<?php


session_start();

if(isset($_GET["action"]) && $_GET["action"]=="logout" ){
    unset($_SESSION["loggedin"]);
    header("location: login.php");
}


?>

<?php

require_once("admin/connection.php");

if(isset($_POST["submit"])){
  $name=mysqli_real_escape_string($conn,$_POST["name"]);
  $name=htmlentities($name);
  $email=$_POST["email"];
  $subject=$_POST["subject"];
  $message=$_POST["message"];

if(empty($name)){
  $nameerr="Name field is required";
  $_SESSION["nameerr"]=true;
    $_SESSION["nameerr"]=$nameerr;
}
if(empty($email)){
  $emailerr="Email is Required";
  $_SESSION["emailerr"]=true;
    $_SESSION["emailerr"]=$emailerr;
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
  $emailerr="Invalid email format";
  $_SESSION["emailerr"]=true;
    $_SESSION["emailerr"]=$emailerr;
}
if(empty($subject)){
  $subjecterr="Please Enter Your Subject";
  $_SESSION["subjecterr"]=true;
    $_SESSION["subjecterr"]=$subjecterr;
}
else{

  $sql="INSERT INTO `users_contacts` (`name`,`email`,`subject`,`message`) VALUES ('$name','$email','$subject','$message')";

   

  $res = mysqli_query($conn,$sql);
  
  if($res){
    $inserted="data submitted";
  }
  else{
    $notinserted="data not submitted";
  }

}
  
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
<div class="col-sm-6"><h1>CONTACT US</h1></div>
<div class="col-sm-6">
  <h6 class="breadcrumb"><a href="index.php">Home</a> / Contact us</h6></div>
</div>
</div>
</div>
</section>

<div class="google-maps">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12789754.135904364!2d-103.6801893!3d38.4992109!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1502302011686" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<section id="about-sec">
<div class="container">
<div class="row text-center" style=" margin-top:-20px;">
<div class="col-md-4" style=" margin-top:20px;">
<div class="con-box">
<div class="fancy-box-icon">
<i class="fa fa-mobile-phone"></i>
</div>
<h3>PHONE</h3>
<div class="fancy-box-content">
<p>Phone 01: +923004949800<br>
Phone 02: +92347658977</p>
</div>
</div>
</div>
<div class="col-md-4" style=" margin-top:20px;">
<div class="con-box" style="background:#2f3191;">
<div class="fancy-box-icon">
<i class="fa fa-map-marker"></i>
</div>
<h3>ADDRESS</h3>
<div class="fancy-box-content">
<p>3104 Doctors Drive, Los Angeles,<br>
sargodha city of pakistan</p>
</div>
</div>
</div>
<div class="col-md-4" style=" margin-top:20px;">
<div class="con-box">
<div class="fancy-box-icon">
<i class="fa fa-envelope-o"></i>
</div>
<h3>EMAIL</h3>
<div class="fancy-box-content">
<p>info@charitymanagementsystem.com<br>
help@charitymanagementsystem.com</p>
</div>
</div>
</div>
<div class="clearfix"></div>
<h2>IF YOU GOT ANY QUESTIONS<br>
PLEASE DO NOT HESITATE TO SEND US A MESSAGE.</h2>
<div class="row">
  <div class="col-lg-6">
  
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Message</strong> Sent Successfully...
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
                        
                                    <?php
                                
                                if(!empty($inserted)){
                                  ?>
                                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Message</strong> Can't sent Successfully...
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
                          
                                      <?php
                                }
                                ?>
  </div>
</div>
<div class="con-form clearfix">
  <form action="" method="post">
<div class="col-md-4">
<input type="text" name="name" value="" size="40" class="" id="name" aria-required="true" aria-invalid="false" placeholder="Your Name*">
<span class="error text-danger"><?php  if(isset($_SESSION['nameerr'])){ echo $_SESSION['nameerr']; unset($_SESSION['nameerr']);  }  ?></span>
</div>
<div class="col-md-4">
<input type="text" name="email" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Your Email*">
<span class="error text-danger"><?php  if(isset($_SESSION['emailerr'])){ echo $_SESSION['emailerr']; unset($_SESSION['emailerr']);  }  ?></span>
</div>
<div class="col-md-4">
<input type="text" name="subject" value="" size="40" class="" id="subject" aria-invalid="false" placeholder="Subject">
<span class="error text-danger"><?php  if(isset($_SESSION['subjecterr'])){ echo $_SESSION['subjecterr']; unset($_SESSION['subjecterr']);  }  ?></span>
</div>
<div class="col-md-12">
<textarea name="message" cols="40" rows="5" class="" id="message" aria-invalid="false" placeholder="Message"></textarea>
</div>
<div class="col-xs-12 submit-button">
<input type="submit" value="send message" class="btn2" id="sub" name="submit" style="border:none; margin: 20px 0 0 0">
</div>
</form>
</div>
</div>
</div>
</section>




<?php

require_once('footer.php') ?>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootsnav.js"></script>
<script src="js/banner.js"></script>  
<script src="js/script.js"></script>
</body>
</html>
