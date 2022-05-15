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

if(isset($_POST["btn_delete"])){

    $id=$_POST["id"];
    $query="DELETE FROM `users_contacts` WHERE `id`='$id' ";  
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

?>