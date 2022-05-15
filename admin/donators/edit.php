<?php require_once('phpcode.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Light Bootstrap Dashboard - Free Bootstrap 4 Admin Dashboard by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
     <!--     Fonts and icons     -->
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    
    <link href="../../assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../../assets/css/demo.css" rel="stylesheet" />
    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        
        <!-- sidebar -->

        <?php
        require_once("../connection.php");
        require_once('../sidebar.php');

        ?>

        <!-- sidebar -->

        <div class="main-panel">
            <!-- Navbar -->
            <?php
        
        require_once('../navbar.php')

        ?>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Edit Donator</h4>
                                    <div class="modal-body">
      <form method="POST" enctype="multipart/form-data">
      <input type="hidden" value="<?php echo $row2["id"]; ?>" name="id">
      <input type="hidden" value="<?php echo $row2["userId"]; ?>" name="userid">
  <div class="form-row">
    <div class="form-group col-lg-4">
      <label for="inputEmail4">First Name</label>
   
      <input type="text" class="form-control" name="fname" value="<?php echo $row2["fname"]; ?>" size="40" class="" aria-required="true" aria-invalid="false" placeholder="First Name*">
<span class="error text-danger"><?php  if(isset($_SESSION['fnameerr'])){ echo $_SESSION['fnameerr']; unset($_SESSION['fnameerr']);  }  ?> </span>
    </div>
    <div class="form-group col-lg-4">
      <label for="inputEmail4">Last Name</label>
   
      <input type="text"  class="form-control" name="lname" value="<?php echo $row2["lname"]; ?>" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Last Name*">
<span class="error text-danger"><?php  if(isset($_SESSION['lnameerr'])){ echo $_SESSION['lnameerr']; unset($_SESSION['lnameerr']);  }  ?> </span>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-lg-4">
      <label for="inputEmail4">Email</label>
   
      <input type="text" class="form-control" name="email" value="<?php echo $row2["email"]; ?>" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Email*">
<span class="error text-danger"><?php  if(isset($_SESSION['emailerr'])){ echo $_SESSION['emailerr']; unset($_SESSION['emailerr']);  }  ?> </span>
    </div>
    <div class="form-group col-lg-4">
      <label for="inputEmail4">Phone</label>
   
      <input type="tel"  class="form-control" name="phone" value="<?php echo $row2["phone"]; ?>" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Phone*">
<span class="error text-danger"><?php  if(isset($_SESSION['phoneerr'])){ echo $_SESSION['phoneerr']; unset($_SESSION['phoneerr']);  }  ?> </span>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-lg-4">
      <label for="inputEmail4">Address</label>
   
      <input type="text" class="form-control" name="address" value="<?php echo $row2["address"]; ?>" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Address*">
<span class="error text-danger"><?php  if(isset($_SESSION['addresserr'])){ echo $_SESSION['addresserr']; unset($_SESSION['addresserr']);  }  ?> </span>
    </div>
    <div class="form-group col-lg-4">
      <label for="inputEmail4">City</label>
   
      <input type="text"  class="form-control" name="city" value="<?php echo $row2["city"]; ?>" size="40" class="" aria-required="true" aria-invalid="false" placeholder="City*">
<span class="error text-danger"><?php  if(isset($_SESSION['cityerr'])){ echo $_SESSION['cityerr']; unset($_SESSION['cityerr']);  }  ?> </span>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-lg-4">
      <label for="inputEmail4">Country</label>
   
      <input type="text" class="form-control" name="country" value="<?php echo $row2["country"]; ?>" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Country*">
<span class="error text-danger"><?php  if(isset($_SESSION['countryerr'])){ echo $_SESSION['countryerr']; unset($_SESSION['countryerr']);  }  ?> </span>
    </div>
    <div class="form-group col-lg-4">
      <label for="inputEmail4">Amount</label>
   
      <input type="number"  class="form-control" name="amount" value="<?php echo $row2["amount"]; ?>" size="40" class="" aria-required="true" aria-invalid="false" placeholder="Amount*">
<span class="error text-danger"><?php  if(isset($_SESSION['amounterr'])){ echo $_SESSION['amounterr']; unset($_SESSION['amounterr']);  }  ?> </span>
    </div>
  </div>

  <div class="form-row">
    <div class="form-group col-lg-6">
      <label for="inputEmail4">Message</label>

      <textarea class="form-control" name="message" cols="40" rows="5" class="" id="message" aria-invalid="false" placeholder="Message"><?php echo $row2["message"]; ?></textarea>
<span class="error text-danger"><?php  if(isset($_SESSION['messageerr'])){ echo $_SESSION['messageerr']; unset($_SESSION['messageerr']);  }  ?> </span>
    </div>
   
  </div>

      </div>
      <div class="form-group ml-3">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="submit" name="submit" class="btn btn-primary">Save changes</button> -->
        <input type="submit" name="update" class="btn btn-primary" value="Save Changes">
      </div>
      </form>
                                </div>
                               
                                <div class="card-body table-full-width table-responsive">
                                
                            </div>
                        </div>
                       
                        <!-- footer -->

                        <?php
        
        require_once('../footer.php')

        ?>

                        <!--  -->
           
        </div>
    </div>

</body>
<!--   Core JS Files   -->
<script src="../../assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="../../assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="../../assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../../assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!--  Chartist Plugin  -->
<script src="../../assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="../../assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="../../assets/js/demo.js"></script>

</html>
