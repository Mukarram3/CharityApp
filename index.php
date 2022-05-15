<?php
session_start();
if(isset($_GET["action"]) && $_GET["action"]=="logout" ){
    unset($_SESSION["loggedin"]);
    header("location: login.php");
}
 



?>

<?php

require_once('navbar.php');?>
	<?php require_once('admin/connection.php');
    
	
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
<link rel="stylesheet" href="css/swipebox.css">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> 
</head>
<body>

	

<div id="first-slider">
    <div id="carousel-example-generic" class="carousel slide carousel-fade">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <!-- Item 1 -->
            <div class="item active slide1" style="background-image: url('images/slide1.jpg');">
                        <h2 data-animation="animated bounceInDown"><span>Give a little change a lot</span></h2>
                        <h3 data-animation="animated bounceInDown">“For attractive lips, speakwords of kindness </h3>
                        <h4 data-animation="animated bounceInUp"><a href="about-us.php">READ MORE</a></h4>             
             </div> 
            <!-- Item 2 -->

            <?php
                                            
                                            $query= "SELECT * FROM `slider` ORDER BY `id` ASC";
                                           
                                            $res= mysqli_query($conn,$query);
                                            if(mysqli_num_rows($res)>0){

                                                $i=0;
                                            
                                                while($row=mysqli_fetch_array($res)){
                                    
                                            ?>
            <div class="item slide2"  style="background-image: url('admin/images/<?php echo $row["image"] ?>');">
                        <h2 data-animation="animated bounceInDown"><span><?php echo $row["title"] ?></span></h2>
                        <h3 data-animation="animated bounceInDown"><?php echo $row["description"] ?></h3>
                        <h4 data-animation="animated bounceInUp"><a href="about-us.php">READ MORE</a></h4>             
             </div>
          
       
             <?php
                                           
                                        }
                                    }

                                   ?>
    
        </div>
        <!-- End Wrapper for slides-->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i><span class="sr-only">Next</span>
        </a>
    </div>
</div>

<section id="about-sec">
<div class="container">
<div class="row text-center">
<h1>ABOUT CHARITY HOPE</h1>

<hr>
<?php
                                            
                                            $query= "SELECT * FROM `about` ORDER BY `id` ASC LIMIT 1";
                                           
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
<a href="<?php if(isset($_SESSION["loggedin"])){ echo "donate.php"; } else{ echo "login.php"; }?>"" class="btn1">donate now</a>
<a href="about-us.php" class="btn2">Read More</a>
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
<a href="activities.php" title="" >Read More</a>
</div>
</div>
<div class="col-md-4 clearfix top-off">
<div class="grid-content-left"><i class="fa fa-cutlery"></i></div>
<div class="grid-content-wrapper"><h4>Feed for Hungry Child</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis dignissim.</p>
<a href="activities.php" title="" >Read More</a>
</div>
</div>
<div class="col-md-4 clearfix top-off">
<div class="grid-content-left"><i class="fa fa-home"></i></div>
<div class="grid-content-wrapper"><h4>Home for Homeless</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis dignissim.</p>
<a href="activities.php" title="" >Read More</a>
</div>
</div>
<div class="col-md-4 clearfix top-off">
<div class="grid-content-left"><i class="fa fa-tint"></i></div>
<div class="grid-content-wrapper"><h4>Bringing Clean Water</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis dignissim.</p>
<a href="activities.php" title="" >Read More</a>
</div>
</div>
<div class="col-md-4 clearfix top-off">
<div class="grid-content-left"><i class="fa fa-thumbs-up"></i></div>
<div class="grid-content-wrapper"><h4>Help Little Hands</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis dignissim.</p>
<a href="activities.php" title="" >Read More</a>
</div>
</div>
<div class="col-md-4 clearfix top-off">
<div class="grid-content-left"><i class="fa fa-money"></i></div>
<div class="grid-content-wrapper"><h4>Donate for Children</h4><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut efficitur eget justo quis dignissim.</p>
<a href="activities.php" title="" >Read More</a>
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



<section id="gallery-sec">
<div class="container">
<div class="row text-center">
<h1>OUR GALLERY</h1>
<hr>
<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h5>
<ul class="clearfix">

                                           <?php
                                            
                                            $query= "SELECT * FROM `gallery` ORDER BY `id` ASC LIMIT 8";
                                           
                                            $res= mysqli_query($conn,$query);
                                            if(mysqli_num_rows($res)>0){
                                            
                                                while($row=mysqli_fetch_array($res)){
                                    
                                            ?>

<li>
<a href="admin/images/<?php echo $row["image"] ?>" class="swipebox" title="My Caption">
<div class="image"><img src="admin/images/<?php echo $row["image"] ?>">
<div class="overlay"><i class="fa fa-search-plus"></i></div>
</div></a>
</li>

<?php }
}
 ?>

</ul>
<div class="text-center">
<a href="gallery.php" class="btn1">View More</a>
</div>
</div>
</div>
</section>

<?php require_once('footer.php') ?>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootsnav.js"></script>
<script src="js/banner.js"></script>  
<script src="js/jquery.swipebox.js"></script>
<script type="text/javascript">
	$( document ).ready(function() {

			/* Basic Gallery */
			$( '.swipebox' ).swipebox();
			
			/* Video */
			$( '.swipebox-video' ).swipebox();

			/* Dynamic Gallery */
			$( '#gallery' ).click( function( e ) {
				e.preventDefault();
				$.swipebox( [
					{ href : 'http://swipebox.csag.co/mages/image-1.jpg', title : 'My Caption' },
					{ href : 'http://swipebox.csag.co/images/image-2.jpg', title : 'My Second Caption' }
				] );
			} );

      });
</script>
<script src="js/script.js"></script>
</body>
</html>
