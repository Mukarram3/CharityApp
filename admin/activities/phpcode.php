<?php 

require_once('../connection.php');

session_start();
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
    $raised=$_POST["raised"];
    $goal=$_POST["goals"];
  $image=$_FILES["image"]["name"];

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
if(empty($raised)){
    $raisederror="Rised Field is Required";
    $_SESSION["raisederror"]=true;
    $_SESSION['raisederror']=$raisederror;
}
if(empty($goal)){
    $goalerror="Goals Field is Required";
    $_SESSION["goalerror"]=true;
    $_SESSION['goalerror']=$goalerror;
}
if(empty($image)){
    $imageerror="Please select Image";
    $_SESSION["imageerror"]=true;
    $_SESSION['imageerror']=$imageerror;
}
else{
  $tmp_image=$_FILES["image"]["tmp_name"];
  move_uploaded_file($tmp_image,"../images/".$image);
  
    $sql="INSERT INTO `activities` (`title`,`description`,`image`,`raised`,`goal`) VALUES ('$title','$description','$image','$raised','$goal')";
  
     
  
    $res = mysqli_query($conn,$sql);
    
    if($res){
        $_SESSION["inserted"]=true;
        $inserted="Record inserted";
        $_SESSION["inserted"]=$inserted;
    }
    else{
        $insertionerr="no submitted";
    }
   

}
    
    }


if(isset($_POST["btn_delete"])){

    $id=$_POST["id"];
    $query="DELETE FROM `activities` WHERE `id`='$id' ";  
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
  
    
    $query2= " SELECT * FROM `activities` WHERE `id`='$id' ";
                $res2= mysqli_query($conn,$query2);
                if(mysqli_num_rows($res2)>0){
    
    $row2=mysqli_fetch_array($res2);
   
    
                }
    
        
    }


if(isset($_POST["update"])){

    $title=mysqli_real_escape_string($conn,$_POST["title"]);
    $title=htmlentities($title);
    $description=$_POST["description"];
    $raised=$_POST["raised"];
    $goal=$_POST["goals"];
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
if(empty($raised)){
    $raisederror="Rised Field is Required";
    $_SESSION["raisederror"]=true;
    $_SESSION['raisederror']=$raisederror;
}
if(empty($goal)){
    $goalerror="Goals Field is Required";
    $_SESSION["goalerror"]=true;
    $_SESSION['goalerror']=$goalerror;
}
if(empty($image)){
    $imageerror="Please select Image";
    $_SESSION["imageerror"]=true;
    $_SESSION['imageerror']=$imageerror;
}
else{

    $id=$_POST["id"];
  move_uploaded_file($tmp_image,"../images/".$image);
  
  $sql= "UPDATE `activities` SET `title`='$title',`description`='$description',`raised`='$raised',`goal`='$goal',`image`='$image' WHERE `id`='$id' ";
  
     
  
    $res = mysqli_query($conn,$sql);
    if($res){
        $_SESSION["updated"]=true;
        $updated="Record updated";
        $_SESSION["updated"]=$updated;
        header('location: view.php');
    }
    else{
        $updationerr="data can't updated";
    }
   

}

    
    }



?>