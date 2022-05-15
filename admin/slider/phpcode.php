<?php
session_start();
require_once("../connection.php");
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

if(isset($_POST["submit"])){

    $title=mysqli_real_escape_string($conn,$_POST["title"]);
    $title=htmlentities($title);
    $description=$_POST["description"];
  $image=$_FILES["image"]["name"];
  $tmp_image=$_FILES["image"]["tmp_name"];

  $_SESSION["modalclose"]=true;
  $_SESSION["modalclose"]="no";

  if(empty($title)){
      $titleerror="Title field is required";
      $_SESSION["titleerror"]=true;
        $_SESSION['titleerror']=$titleerror;
    }
  if(empty($description)){
      $descriptionerror="Description is Required";
      $_SESSION["descriptionerror"]=true;
      $_SESSION['descriptionerror']=$descriptionerror;
  }
  if(empty($image)){
      $imageerror="Please select atleast 1 Image";
      $_SESSION["imageerror"]=true;
      $_SESSION['imageerror']=$imageerror;
  }
  else{

    unset($_SESSION["modalclose"]);
  move_uploaded_file($tmp_image,"../images/".$image);
  
    $sql="INSERT INTO `slider` (`title`,`description`,`image`) VALUES ('$title','$description','$image')";   
  
    $res = mysqli_query($conn,$sql);
    if($res){
        $_SESSION["inserted"]=true;
        $inserted="Slider Added Successfully...";
        $_SESSION["inserted"]=$inserted;
        
    }
    else{
        $insertionerr="no submitted";
    }
   

}

    
    }


    if(isset($_POST["btn_delete"])){

        $id=$_POST["id"];
        $query="DELETE FROM `slider` WHERE `id`='$id' ";  
        $res=mysqli_query($conn,$query);
        if($res){
           
            $_SESSION["deleted"]=true;
            $deleted="Slider Deleted";
        $_SESSION["deleted"]=$deleted;
        }
        else{
            $deletionerr="Data Can't Deleted";
            
        }
    
    }


      
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='edit'){

    $id=$_GET["id"];
  
    
    $query2= " SELECT * FROM `slider` WHERE `id`='$id' ";
                $res2= mysqli_query($conn,$query2);
                if(mysqli_num_rows($res2)>0){
    
    $row2=mysqli_fetch_array($res2);
   
    
                }
    
    }


if(isset($_POST["update"])){

    $title=mysqli_real_escape_string($conn,$_POST["title"]);
    $title=htmlentities($title);
    $description=$_POST["description"];
  $image=$_FILES["image"]["name"];
  $tmp_image=$_FILES["image"]["tmp_name"];

  if(empty($title)){
    $titleerror="Title field is required";
    $_SESSION["titleerror"]=true;
      $_SESSION['titleerror']=$titleerror;
  }
if(empty($description)){
    $descriptionerror="Description is Required";
    $_SESSION["descriptionerror"]=true;
    $_SESSION['descriptionerror']=$descriptionerror;
}
if(empty($image)){
    $imageerror="Please select atleast 1 Image";
    $_SESSION["imageerror"]=true;
    $_SESSION['imageerror']=$imageerror;
}
  else{

    $id=$_POST["id"];
  move_uploaded_file($tmp_image,"../images/".$image);
  
  $sql= "UPDATE `slider` SET `title`='$title',`description`='$description',`image`='$image' WHERE `id`='$id' ";
  
     
  
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
