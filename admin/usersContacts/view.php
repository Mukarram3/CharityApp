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
        include('../sidebar.php');

        ?>

        <!-- sidebar -->

        <div class="main-panel">
            <!-- Navbar -->
            <?php
        
        include('../navbar.php')

        ?>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Contacted Users</h4>
                                  
                                </div>
                                <?php if(isset($_SESSION["deleted"])){
                                    ?>
                               
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <?php echo $_SESSION["deleted"]; unset($_SESSION["deleted"]); ?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
                        <?php 
                        } ?> 
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>Action</th>
                                          
                                        </thead>
                                        <tbody>
                                            <?php
                                            
                                            $query= "SELECT * FROM `users_contacts` ORDER BY `id` ASC";
                                           
                                            $res= mysqli_query($conn,$query);
                                            if(mysqli_num_rows($res)>0){
                                            
                                                while($row=mysqli_fetch_array($res)){
                                    
                                            ?>

                                            <tr>
                                                <td><?php echo $row["id"];?></td>
                                                <td><?php echo $row["name"];?></td>
                                                <td><?php echo $row["email"];?></td>
                                                <td><?php echo $row["subject"];?></td>
                                                <td><?php echo $row["message"];?></td>    
                                                <td>
                                                    <form action="" method="post">

                                                <input type="hidden" value="<?php echo $row["id"]; ?>" name="id">
                                                <button class="btn btn-danger btn-sm" name="btn_delete" onclick="return confirm('are you sure to delete...')">delete</button>

                                                </form>
                                            </td>
                                            </tr>

                                           <?php
                                           
                                                }
                                            }

                                           ?>
                                        </tbody>
                                    </table>
                                </div>
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
