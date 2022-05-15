
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
<link rel="stylesheet" href="css/swipebox.css">

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'> 
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">  
</head>
<body>

<?php require_once('navbar.php') ?>

<section id="inner-banner">
<div class="overlay">
<div class="container">
<div class="row"> 
<div class="col-sm-6"><h1>GALLERY</h1></div>
<div class="col-sm-6">
  <h6 class="breadcrumb"><a href="index.php">Home</a> / Gallery</h6></div>
</div>
</div>
</div>
</section>

<section id="gallery-sec" style="margin-top:40px;">
<div class="container">
<div class="row text-center">
<ul class="clearfix">
<?php
                                            
                                            $query= "SELECT * FROM `gallery` ORDER BY `id` ASC LIMIT 8";
                                           
                                            $res= mysqli_query($conn,$query);
                                            if(mysqli_num_rows($res)>0){
                                            
                                                while($row=mysqli_fetch_array($res)){
                                    
                                            ?>

<li>
<a href="images/<?php echo $row["image"] ?>" class="swipebox" title="My Caption">
<div class="image"><img src="images/<?php echo $row["image"] ?>">
<div class="overlay"><i class="fa fa-search-plus"></i></div>
</div></a>
</li>

<?php }
}
 ?>
</ul>
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
