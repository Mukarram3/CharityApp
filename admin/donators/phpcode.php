<?php
session_start();
require_once('../connection.php');
if(!isset($_SESSION["loggedin"])){
    header('location: ../../login.php');
}
if(isset($_GET["action"]) && $_GET["action"]=="logout" ){
    unset($_SESSION["loggedin"]);
    header("location: ../../login.php");
}

if($_SESSION["type"]=="user"){
    header('location:../../index.php');
   
  }
//   else{
// header('location: index.php');
   
//   }

if(isset($_POST["btn_delete"])){

    $id=$_POST["id"];
    $query="DELETE FROM `donators` WHERE `id`='$id' ";  
    $res=mysqli_query($conn,$query);
    if($res){
        $_SESSION["deleted"]=true;
        $deleted="Record Deleted";
    $_SESSION["deleted"]=$deleted;
    }
    else{
        $deletionerr="Data Can't Deleted";
    }

}


if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='edit'){

    $id=$_GET["id"];
  
    
    $query2= " SELECT * FROM `donators` WHERE `id`='$id' ";
                $res2= mysqli_query($conn,$query2);
                if(mysqli_num_rows($res2)>0){
    
    $row2=mysqli_fetch_array($res2);
   
    
                }
        
    }


    if(isset($_POST["update"])){

        $fname=mysqli_real_escape_string($conn,$_POST["fname"]);
        $fname=htmlentities($fname);
        $lname=$_POST["lname"];
        $email=$_POST["email"];
        $phone=$_POST["phone"];
        $address=$_POST["address"];
        $city=$_POST["city"];
        $country=$_POST["country"];
        $amount=$_POST["amount"];
        $message=$_POST["message"];
        $userid=$_POST["userid"];
    
        if(empty($fname)){
            $fnameerr="First Name is required";
            $_SESSION["fnameerr"]=true;
          $_SESSION['fnameerr']=$fnameerr;
        }
        if(empty($lname)){
            $lnameerr="Last Name is Required";
            $_SESSION["lnameerr"]=true;
          $_SESSION['lnameerr']=$lnameerr;
        }
        if(empty($email)){
            $emailerr="Email is Required";
            $_SESSION["emailerr"]=true;
          $_SESSION['emailerr']=$emailerr;
        }
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          $emailerr="Invalid email format";
          $_SESSION["emailerr"]=true;
          $_SESSION['emailerr']=$emailerr;
        }
        if(empty($phone)){
            $phoneerr="Phone is Required";
            $_SESSION["phoneerr"]=true;
          $_SESSION['phoneerr']=$phoneerr;
        }
        if(empty($address)){
            $addresserr="Address is Required";
            $_SESSION["addresserr"]=true;
          $_SESSION['addresserr']=$addresserr;
        }
        if(empty($city)){
            $cityerr="City is Required";
            $_SESSION["cityerr"]=true;
          $_SESSION['cityerr']=$cityerr;
        }
        if(empty($country)){
            $countryerr="Country is Required";
            $_SESSION["countryerr"]=true;
          $_SESSION['countryerr']=$countryerr;
        }
        if(empty($amount)){
            $amounterr="Amount is Required";
            $_SESSION["amounterr"]=true;
          $_SESSION['amounterr']=$amounterr;
        }
        if(empty($message)){
            $messageerr="Message is Required";
            $_SESSION["messageerr"]=true;
          $_SESSION['messageerr']=$messageerr;
        }
        else{
        
        $id=$_POST["id"];
        $userid=$_POST["userid"];
      
      $sql= "UPDATE `donators` SET `fname`='$fname',`lname`='$lname',`email`='$email',`address`='$address',`city`='$city',`country`='$country',`phone`='$phone',`message`='$message',`amount`='$amount',`userId`='$userId' WHERE `id`='$id' ";
         
      
        $res = mysqli_query($conn,$sql);
        if($res){
            header('location: view.php');
        
            $_SESSION["updated"]=true;
            $updated="data updated";
            $_SESSION["updated"]=$updated;
        }
        else{
            $updationerr="data can't updated";
        }
       
    
    }
    
        
        }

?>