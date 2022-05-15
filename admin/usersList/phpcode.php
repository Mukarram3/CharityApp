<?php
session_start();
include('../connection.php');
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

if(isset($_POST["submit"])){

    $name=mysqli_real_escape_string($conn,$_POST["name"]);
    $name=htmlentities($name);
    $email=$_POST["email"];
    $password=$_POST["password"];

  if(empty($name)){
      $namerror="Name is required";
      $_SESSION["namerror"]=true;
        $_SESSION['namerror']=$namerror;
    }
  if(empty($email)){
      $emailerror="Email is Required";
      $_SESSION["emailerror"]=true;
      $_SESSION['emailerror']=$emailerror;
  }
 if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $emailerror="Invalid email format";
    $_SESSION["emailerror"]=true;
      $_SESSION["emailerror"]=$emailerror;
  }
  if(empty($password)){
      $passworderror="Password is Required";
      $_SESSION["passworderror"]=true;
      $_SESSION['passworderror']=$passworderror;
  }
  else{
  
    $sql="INSERT INTO `users` (`name`,`email`,`password`) VALUES ('$name','$email','$password')";   
  
    $res = mysqli_query($conn,$sql);
    if($res){
        $_SESSION["inserted"]=true;
        $inserted="Record Added Successfully...";
        $_SESSION["inserted"]=$inserted;
        
    }
    else{
        $insertionerr="no submitted";
    }
   

}

}


if(isset($_POST["btn_delete"])){

    $id=$_POST["id"];
    $query="DELETE FROM `users` WHERE `id`='$id' ";  
    $res=mysqli_query($conn,$query);
    if($res){
        $deleted="Record deleted";
        $_SESSION["deleted"]=true;
        $_SESSION["deleted"]=$deleted;
    }
    else{
        echo "no data deleted";
    }

}


if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='edit'){

    $id=$_GET["id"];
  
    
    $query2= " SELECT * FROM `users` WHERE `id`='$id' ";
                $res2= mysqli_query($conn,$query2);
                if(mysqli_num_rows($res2)>0){
    
    $row2=mysqli_fetch_array($res2);
   
    
                }
    
    }



    if(isset($_POST["update"])){

        $name=mysqli_real_escape_string($conn,$_POST["name"]);
        $name=htmlentities($name);
        $email=$_POST["email"];
        $password=$_POST["password"];
    
      if(empty($name)){
          $namerror="Name is required";
          $_SESSION["namerror"]=true;
            $_SESSION['namerror']=$namerror;
        }
      if(empty($email)){
          $emailerror="Email is Required";
          $_SESSION["emailerror"]=true;
          $_SESSION['emailerror']=$emailerror;
      }
     if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailerror="Invalid email format";
        $_SESSION["emailerror"]=true;
          $_SESSION["emailerror"]=$emailerror;
      }
      if(empty($password)){
          $passworderror="Password is Required";
          $_SESSION["passworderror"]=true;
          $_SESSION['passworderror']=$passworderror;
      }
      else{
    
        $id=$_POST["id"];
      
      $sql= "UPDATE `users` SET `name`='$name',`email`='$email',`password`='$password' WHERE `id`='$id' ";
      
         
      
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