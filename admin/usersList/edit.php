<?php include('phpcode.php'); ?>
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
        include('../sidebar.php');

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
                                    <h4 class="card-title">Users</h4>
                                    
                                </div>
                                <div class="modal-body">
      <form method="POST">
<input type="hidden" name="id" value=" <?php echo $row2["id"]; ?>">
    <div class="form-group col-lg-6">
      <label for="inputEmail4">Name</label>
      <input type="text" class="form-control" value="<?php echo $row2["name"]; ?>" id="name" name="name" placeholder="Name">
<span class="error text-danger"><?php  if(isset($_SESSION['namerror'])){ echo $_SESSION['namerror']; unset($_SESSION['namerror']);  }  ?> </span>

  </div>
  <div class="form-group col-lg-6">
      <label for="inputPassword4">Email</label>
      <input type="text" class="form-control"  value="<?php echo $row2["email"]; ?>" id="email" name="email" placeholder="Email">
      
<span class="error text-danger"><?php  if(isset($_SESSION['emailerror'])){ echo $_SESSION['emailerror']; unset($_SESSION['emailerror']);  }  ?></span>
    
    </div>
  <div class="form-group col-lg-6">
    <label for="inputAddress">Password</label>
    <input type="password" class="form-control"  value="<?php echo $row2["password"]; ?>" name="password" id="password" placeholder="">
    <span class="error text-danger"><?php  if(isset($_SESSION['passworderror'])){ echo $_SESSION['passworderror']; unset($_SESSION['passworderror']);  }  ?></span>
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="submit" name="submit" class="btn btn-primary">Save changes</button> -->
        <input type="submit" name="update" class="btn btn-primary" value="Save Changes">
      </div>
      </form>

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
