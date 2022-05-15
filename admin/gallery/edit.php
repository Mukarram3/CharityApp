
<?php require_once('phpcode.php') ?>


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


<?php require_once('modalbox.php'); ?>

    <div class="wrapper">
        
        <!-- sidebar -->

        <?php
      
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
                                    <h4 class="card-title">Gallery</h4>
                             
                                </div>
                            

                                <div class="card-body table-full-width table-responsive">
                                <div class="">
      <form method="POST" enctype="multipart/form-data">
      <input type="hidden" value="<?php echo $row2["id"] ?>" name="id">
  <div class="form-row">
    <div class="form-group col-lg-6">
      <label for="inputEmail4">Caption</label>
      <input type="text" class="form-control" id="title" name="caption" value="<?php echo $row2["caption"] ?>" placeholder="Title">
      <span class="error text-danger"><?php  if(isset($_SESSION['captionerr'])){ echo $_SESSION['captionerr']; unset($_SESSION['captionerr']);  }  ?></span>
      
    </div>
    
  </div>
 
  <div class="form-group col-lg-4">
    <label for="inputAddress">Image</label>
    <input type="file" class="form-control" name="image"  id="image" placeholder="">
    <span class="error text-danger"><?php  if(isset($_SESSION['imageerr'])){ echo $_SESSION['imageerr']; unset($_SESSION['imageerr']);  }  ?></span>
<img src="../images/<?php echo $row2["image"] ?>" alt="loading" width="50" height="50" srcset="">
  </div>

      </div>
      <div class="form-group ml-2">
        <button type="button" class="btn btn-secondary">Close</button>
        <button type="submit" name="update" class="btn btn-primary">Save changes</button>
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
