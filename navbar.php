<div class="topbar">
<div class="container">
<div class="row"> 
<div class="bar-phone">
<i class="fa fa-phone"></i> <span>Call Us :</span> <strong>923472894405</strong>
</div>
<div class="bar-mail">
<i class="fa fa-envelope"></i> <span>Mail Us :</span> <strong>info@charitymanagementsystem.com</strong>
</div>
<div class="header-social">
<a class="facebook" href="#" title="facebook" target="_blank" rel="nofollow"><i class="fa fa-facebook"></i>  </a>
<a class="twitter" href="#" title="twitter" target="_blank" rel="nofollow"><i class="fa fa-twitter"></i>  </a>
<a class="linkedin" href="#" title="linkedin" target="_blank" rel="nofollow"><i class="fa fa-linkedin"></i>  </a>
<a class="google" href="#" title="google-plus" target="_blank" rel="nofollow"><i class="fa fa-google-plus"></i>  </a>
<a class="youtube" href="#" title="youtube-play" target="_blank" rel="nofollow"><i class="fa fa-youtube-play"></i>  </a>
</div>
</div>
</div>
</div>
<nav class="navbar navbar-default navbar-sticky bootsnav">
<div class="container">
<div class="row"> 
<div class="attr-nav">
<a class="sponsor-button" href="sponsor-a-child.php">sponsor a child</a>
<a class="donation" href="<?php 

if(!isset($_SESSION["loggedin"])){

echo "login.php";
}
     else{
 echo "donate.php";
     }
     ?>" >donate now</a>
</div>           
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
<i class="fa fa-bars"></i>
</button>
<a class="navbar-brand logo" href="index.php"><img src="images/OIP (2).jpg" class="img-responsive" /></a>
</div>
<div class="collapse navbar-collapse" id="navbar-menu">
<ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
<li><a href="index.php">Home</a></li>
<li><a href="about-us.php">About Us</a></li>
<li><a href="activities.php">Activities</a></li>
<?php 

if(!isset($_SESSION["loggedin"])){
    ?>
<li><a href="login.php">Login</a></li>
    <?php
}
else{

?>
<li><a href="?action=logout">Logout</a></li>

<?php

}

?>

<li><a href="gallery.php">Gallery</a></li>
<li><a href="contact.php">Contact Us</a></li>
</ul>
</div>
</div>
</div>
</nav>