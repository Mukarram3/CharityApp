<?php

require_once('admin/connection.php');
session_start();

if(isset($_GET["action"]) && $_GET["action"]=="logout" ){
    unset($_SESSION["loggedin"]);
    header("location: login.php");
}



if(isset($_POST["submit"])){
  $fname=mysqli_real_escape_string($conn,$_POST["fname"]);
  $fname=htmlentities($fname);
  $lname=$_POST["lname"];
  $email=$_POST["email"];
  $address=$_POST["address"];
  $city=$_POST["city"];
  $country=$_POST["country"];
  $phone=$_POST["phone"];
  $message=$_POST["message"];
  $amount=$_POST["amount"];
  $userId=$_SESSION["id"];

  if(empty($fname)){
    $fnameerr="First Name is required";
  $_SESSION["fnameerr"]=true;
    $_SESSION["fnameerr"]=$fnameerr;
}

if(empty($lname)){
    $lnameerr="Last Name is Required";
    $_SESSION["lnameerr"]=true;
    $_SESSION["lnameerr"]=$lnameerr;
}
if(empty($phone)){
  $phoneerr="Phone is Required";
  $_SESSION["phoneerr"]=true;
    $_SESSION["phoneerr"]=$phoneerr;
}
if(empty($email)){
    $emailerr="Email is Required";
    $_SESSION["emailerr"]=true;
    $_SESSION["emailerr"]=$emailerr;
}
elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
  $emailerr="Invalid email format";
  $_SESSION["emailerr"]=true;
    $_SESSION["emailerr"]=$emailerr;
}
if(empty($address)){
    $addresserr="Address is Required";
    $_SESSION["addresserr"]=true;
    $_SESSION["addresserr"]=$addresserr;
}
if(empty($city)){
    $cityerr="City is Required";
    $_SESSION["cityerr"]=true;
    $_SESSION["cityerr"]=$cityerr;
}
if(empty($country)){
    $countryerr="Country is Required";
    $_SESSION["countryerr"]=true;
    $_SESSION["countryerr"]=$countryerr;
}
if(empty($amount)){
    $amounterr="Amount is Required";
    $_SESSION["amounterr"]=true;
    $_SESSION["amounterr"]=$amounterr;
}
if(empty($message)){
    $messageerr="Message is Required";
    $_SESSION["messageerr"]=true;
    $_SESSION["messageerr"]=$messageerr;
}
else{

  $sql="INSERT INTO `donators` (`fname`,`lname`,`email`,`address`,`city`,`country`,`phone`,`message`,`amount`,`userId`) VALUES ('$fname','$lname','$email','$address','$city','$country','$phone','$message','$amount','$userId')";

   

  $res = mysqli_query($conn,$sql);
  

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
<div class="col-sm-6"><h1>DONATE</h1></div>
<div class="col-sm-6">
  <h6 class="breadcrumb"><a href="index.php">Home</a> / Donate</h6></div>
</div>
</div>
</div>
</section>

<section id="about-sec">
<div class="container">
<div class="row text-center">
<h2 style="margin-top:0;">I WISH TO MAKE A DONATION<br>
WE NEED YOUR HELP TO HELP OTHERS</h2>

<form action="" method="post">

<div class="con-form clearfix">
<div class="col-md-6">
<input type="text" name="fname" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="First Name*">
<span class="error text-danger"><?php  if(isset($_SESSION['fnameerr'])){ echo $_SESSION['fnameerr']; unset($_SESSION['fnameerr']);  }  ?></span>
</div>
<div class="col-md-6">
<input type="text" name="lname" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Last Name*">
<span class="error text-danger"><?php  if(isset($_SESSION['lnameerr'])){ echo $_SESSION['lnameerr']; unset($_SESSION['lnameerr']);  }  ?></span>
</div>
<div class="col-md-6">
<input type="text" name="phone" value="" size="40" class="" aria-invalid="false" placeholder="Phone Number*">
<span class="error text-danger"><?php  if(isset($_SESSION['phoneerr'])){ echo $_SESSION['phoneerr']; unset($_SESSION['phoneerr']);  }  ?></span>
</div>

<div class="col-md-6">
<input type="text" name="email" value="" size="40" class="" aria-invalid="false" placeholder="Email ID*">
<span class="error text-danger"><?php  if(isset($_SESSION['emailerr'])){ echo $_SESSION['emailerr']; unset($_SESSION['emailerr']);  }  ?></span>
</div>
<div class="col-md-6">
<input type="text" name="address" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Street Address*">
<span class="error text-danger"><?php  if(isset($_SESSION['addresserr'])){ echo $_SESSION['addresserr']; unset($_SESSION['addresserr']);  }  ?></span>
</div>
<div class="col-md-6">
<input type="text" name="city" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="City / Town*">
<span class="error text-danger"><?php  if(isset($_SESSION['cityerr'])){ echo $_SESSION['cityerr']; unset($_SESSION['cityerr']);  }  ?></span>
</div>
<div class="col-md-6">
<input type="text" name="country" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Country*">
<span class="error text-danger"><?php  if(isset($_SESSION['countryerr'])){ echo $_SESSION['countryerr']; unset($_SESSION['countryerr']);  }  ?></span>
</div>
<div class="col-md-6">
<input type="text" name="amount" value="" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Amount*">
<span class="error text-danger"><?php  if(isset($_SESSION['amounterr'])){ echo $_SESSION['amounterr']; unset($_SESSION['amounterr']);  }  ?></span>
</div>
<div class="col-md-12">
<textarea name="message" cols="40" rows="5" class="" id="message" aria-invalid="false" placeholder="Message"></textarea>
<span class="error text-danger"><?php  if(isset($_SESSION['messageerr'])){ echo $_SESSION['messageerr']; unset($_SESSION['messageerr']);  }  ?></span>
</div>
<div class="col-xs-12 submit-button">
<input type="submit" name="submit" value="Donate Now" class="btn2" id="submit" style="border:none; margin: 20px 0 0 0">
</div>

</form>
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
