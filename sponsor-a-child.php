<?php


session_start();

if(isset($_GET["action"]) && $_GET["action"]=="logout" ){
    unset($_SESSION["loggedin"]);
    header("location: login.php");
}


?>

<?php 

require_once('admin/connection.php');

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
<link rel="stylesheet" href="css/owl.carousel.css">
<link href="css/owl.theme.css" rel="stylesheet">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> 
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">  
</head>
<body>

<?php require_once('navbar.php') ?>

<section id="inner-banner">
<div class="overlay">
<div class="container">
<div class="row"> 
<div class="col-sm-6"><h1>SPONSER A CHILD</h1></div>
<div class="col-sm-6">
<h6 class="breadcrumb"><a href="index.php">Home</a> / Sponser a Child</h6></div>
</div>
</div>
</div>
</section>

<section id="about-sec">
<div class="container">
<div class="row text-center">
<div id="owl-demo" class="owl-carousel owl-theme">

                                            <?php
                                            
                                            $query= "SELECT * FROM `sponser_childs` ORDER BY `id` ASC";
                                           
                                            $res= mysqli_query($conn,$query);
                                            if(mysqli_num_rows($res)>0){
                                            
                                                while($row=mysqli_fetch_array($res)){
                                    
                                            ?>

<div class="item">
<div class="sponser-box">
<img src="images/<?php echo $row["image"]; ?>" alt="Owl Image">
<h4>Hi, I’m Ogwang</h4>
<div class="spon-bdr clearfix">
<div class="col-xs-6">Where I Live</div> 
<div class="col-xs-6"><?php echo $row["address"]; ?></div>
</div>
<div class="spon-bdr clearfix">
<div class="col-xs-6">My Age</div> 
<div class="col-xs-6"><?php echo $row["age"]; ?></div>
</div>
<div class="spon-bdr clearfix">
<div class="col-xs-6">My Birthday</div> 
<div class="col-xs-6"><?php echo $row["dob"]; ?></div>
</div>
<a href="<?php if(isset($_SESSION["loggedin"])){ echo "donate.php"; } else{ echo "login.php"; }?>" class="btn1">Sponsor me</a>
</div>
</div>

<?php
                                           
                                                }
                                            }
                                            else{
                                                echo "No Data Available";
                                            }

                                           ?>

 
</div>

</div>
</div>
</section>

<section id="activities-sec">
<div class="container">
<div class="row text-center">
<h1>WHAT WE DO?</h1>
<hr>
<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h5>
<div class="text-left"> 
<div class="col-md-4 clearfix top-off">
<div class="grid-content-left"><i class="fa fa-heart"></i></div>
<div class="grid-content-wrapper"><h4>Charity for Education</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis dignissim.</p>
<a href="activities.html" title="" >Read More</a>
</div>
</div>
<div class="col-md-4 clearfix top-off">
<div class="grid-content-left"><i class="fa fa-cutlery"></i></div>
<div class="grid-content-wrapper"><h4>Feed for Hungry Child</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis dignissim.</p>
<a href="activities.html" title="" >Read More</a>
</div>
</div>
<div class="col-md-4 clearfix top-off">
<div class="grid-content-left"><i class="fa fa-home"></i></div>
<div class="grid-content-wrapper"><h4>Home for Homeless</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis dignissim.</p>
<a href="activities.html" title="" >Read More</a>
</div>
</div>
<div class="col-md-4 clearfix top-off">
<div class="grid-content-left"><i class="fa fa-tint"></i></div>
<div class="grid-content-wrapper"><h4>Bringing Clean Water</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis dignissim.</p>
<a href="activities.html" title="" >Read More</a>
</div>
</div>
<div class="col-md-4 clearfix top-off">
<div class="grid-content-left"><i class="fa fa-thumbs-up"></i></div>
<div class="grid-content-wrapper"><h4>Help Little Hands</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis dignissim.</p>
<a href="activities.html" title="" >Read More</a>
</div>
</div>
<div class="col-md-4 clearfix top-off">
<div class="grid-content-left"><i class="fa fa-money"></i></div>
<div class="grid-content-wrapper"><h4>Donate for Children</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis dignissim.</p>
<a href="activities.html" title="" >Read More</a>
</div>
</div>
</div>
</div>
</div>
</section>

<section id="video-sec">
<div class="container">
<div class="row text-center">
<h1>How can you help?</h1>
<hr>
<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h5>
<div class="text-left"> 
<div class="col-md-6 clearfix top-off">
<video width="400" controls>
 <source src="images/mov_bbb.mp4" type="video/mp4">
</video>
</div>
<div class="col-md-6 clearfix top-off">
<div class="media">
<div class="media-image">
<img src="images/g1.png" class="attachment-full size-full" alt="g1">																							</div>
<div class="media-text">
<h5>BECOME A VOLUNTEER</h5>
<p>Give us a brief description of the service that you are promoting.</p>
</div>
</div>
<div class="media">
<div class="media-image">
<img src="images/g2.png" class="attachment-full size-full" alt="g1">																							</div>
<div class="media-text">
<h5>MAKE A GIFT</h5>
<p>Give us a brief description of the service that you are promoting.</p>
</div>
</div>
<div class="media">
<div class="media-image">
<img src="images/g1.png" class="attachment-full size-full" alt="g1">																							</div>
<div class="media-text">
<h5>GIVE A SCHOLASHIP</h5>
<p>Give us a brief description of the service that you are promoting.</p>
</div>
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
<script src="js/owl.carousel.js"></script>
 <script>
          $(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
 
      autoPlay: 5000, //Set AutoPlay to 3 seconds
	  navigation : true,
      navigationText:["",""],
      items : 4,
      itemsDesktop : [1199,3],
      itemsDesktopSmall : [979,3]
 
  });
 
});
          </script>
          <script src="js/script.js"></script>
</body>
</html>
