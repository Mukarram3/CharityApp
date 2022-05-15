<?php session_start();

require_once('admin/connection.php');


if(isset($_SESSION["loggedin"])){
    header('location: index.php');
}

if(isset($_POST["signup"])){
  $name=mysqli_real_escape_string($conn,$_POST["name"]);
  $name=htmlentities($name);
  $email=$_POST["email"];
  $password=$_POST["password"];


  $sql="INSERT INTO `users` (`name`,`email`,`password`) VALUES ('$name','$email','$password')";

  $res = mysqli_query($conn,$sql);
  
  if($res){
    echo "data submitted";
  }
  else{
    echo "data not submitted";
  }


  
  }




  if(isset($_POST["login"])){
    $name=mysqli_real_escape_string($conn,$_POST["name"]);
    $name=htmlentities($name);
    $email=$_POST["email"];
    $password=$_POST["password"];
  
   
  $sql= "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password' ";
  $res=mysqli_query($conn,$sql);
  if (mysqli_num_rows($res) > 0){
    $row = mysqli_fetch_array($res);
    session_start();
    $_SESSION["loggedin"]=true;
    $_SESSION["name"] = $name;
  $_SESSION["email"] = $row["email"];
  $_SESSION["password"] = $row["password"];
  $_SESSION["type"]=$row["type"];
  $_SESSION["id"]=$row["id"];
  if($_SESSION["type"]=="admin"){
    header("location: admin/usersList/view.php");
  }
  else{
    header("location:index.php");
  }

    
    
  }
  else{
    echo "wrong email or password or image";
    header("refresh: 2; login.php");

  }
  
  
    
    }

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="robots" content="index,follow">

<title>Charity management system</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}


</style>
</head>
<body>
  
<nav class="navbar navbar-expand-sm bg-warning" style="padding-left: 350px;">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="navbar-brand" style="color: rgb(34, 30, 31);" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" style="color: rgb(34, 30, 31);" href="about-us.php">About us</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" style="color: rgb(34, 30, 31);"  href="activities.php">Activities</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" style="color: rgb(34, 30, 31);" href="Login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: rgb(34, 30, 31);"  href="gallery.php">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" style="color: rgb(34, 30, 31);"href="contact.php">Contact Us</a>
            </li>
  </ul>
</nav>

  


<h2>Modal Login & Signup Form</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:200px; background-color: #f44336;" >Login</button>
<button onclick="document.getElementById('id02').style.display='block'" style="width:200px; background-color: #f44336;" >Signup</button>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/111.jpg" alt="Avatar" class="avatar" height="250px;">
    </div>

    <div class="container">
      <div class="row">
      <label for="name"><b>Username</b></label>
      <input type="text" class="form-control" placeholder="Enter Username" name="name" required>
      </div>
      <div class="row">
      <label for="email"><b>Email</b></label>
      <input type="email" class="form-control" placeholder="Enter Email" name="email" required>
      </div>
      <div class="row">
      <label for="password"><b>Password</b></label>
      <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
      </div>
      <button type="submit" name="login">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
     
    </div>
  </form>
</div>



<div id="id02" class="modal">
  
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="images/111.jpg" alt="Avatar" class="avatar" height="250px;">
    </div>

    <div class="container">
      <div class="row">
      <label for="name"><b>Username</b></label>
      <input type="text" class="form-control" placeholder="Enter Username" name="name" required>
      </div>
      <div class="row">
      <label for="email"><b>Email</b></label>
      <input type="email" class="form-control" placeholder="Enter Email" name="email" required>
      </div>
      <div class="row">
      <label for="password"><b>Password</b></label>
      <input type="password" class="form-control" placeholder="Enter Password" name="password" required>
      </div>
      <button type="submit" name="signup">Signup</button>
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
     
    </div>
  </form>
</div>


<script>
// Get the modal
var modal = document.getElementById('id01');
var modal2 = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
}

</script>

</body>
</html>
