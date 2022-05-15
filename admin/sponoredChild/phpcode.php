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
    $address=$_POST["address"];
    $age=$_POST["age"];
    $dob=$_POST["dob"];
   
  $image=$_FILES["image"]["name"];

  if(empty($title)){
    $titleerror="Title field is required";
      $_SESSION["titleerror"]=true;
        $_SESSION['titleerror']=$titleerror;
}
if(empty($address)){
   
    $addresserror="Address is Required";
      $_SESSION["addresserror"]=true;
        $_SESSION['addresserror']=$addresserror;
}
if(empty($age)){
   
    $agerror="Age is Required";
      $_SESSION["agerror"]=true;
        $_SESSION['agerror']=$agerror;
}
if(empty($dob)){
    
    $doberror="Date Of Birth is Required";
      $_SESSION["doberror"]=true;
        $_SESSION['doberror']=$doberror;
}
if(empty($image)){
    
    $imageerror="image is Required";
      $_SESSION["imageerror"]=true;
        $_SESSION['imageerror']=$imageerror;
}
else{

  $tmp_image=$_FILES["image"]["tmp_name"];
  move_uploaded_file($tmp_image,"../images/".$image);
  
    $sql="INSERT INTO `sponser_childs` (`title`,`address`,`age`,`dob`,`image`) VALUES ('$title','$address','$age','$dob','$image')";
  
    $res = mysqli_query($conn,$sql);
    
    if($res){
        $_SESSION["inserted"]=true;
        $inserted="Record Added Successfully...";
        $_SESSION["inserted"]=$inserted;
    }
    else{
        $insertionerr="Not submitted";
    }


}


    
    }


    if(isset($_POST["btn_delete"])){

        $id=$_POST["id"];
        $query="DELETE FROM `sponser_childs` WHERE `id`='$id' ";  
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
  
    
    $query2= " SELECT * FROM `sponser_childs` WHERE `id`='$id' ";
                $res2= mysqli_query($conn,$query2);
                if(mysqli_num_rows($res2)>0){
    
    $row2=mysqli_fetch_array($res2);
   
    
                }
    
        
    }


if(isset($_POST["update"])){

    $title=mysqli_real_escape_string($conn,$_POST["title"]);
    $title=htmlentities($title);
    $address=$_POST["address"];
    $age=$_POST["age"];
    $dob=$_POST["dob"];
  $image=$_FILES["image"]["name"];

  

  $tmp_image=$_FILES["image"]["tmp_name"];

  if(empty($title)){
    $titleerror="Title field is required";
    $_SESSION["titleerror"]=true;
      $_SESSION['titleerror']=$titleerror;
}
if(empty($address)){
    
    $addresserror="Address is Required";
    $_SESSION["addresserror"]=true;
      $_SESSION['addresserror']=$addresserror;
}
if(empty($age)){
    $agerror="Age is Required";
    $agerror="Age is Required";
    $_SESSION["agerror"]=true;
      $_SESSION['agerror']=$agerror;
}
if(empty($dob)){
    
    $doberror="Date Of Birth is Required";
    $_SESSION["doberror"]=true;
      $_SESSION['doberror']=$doberror;
}
if(empty($image)){
    
    $imageerror="image is Required";
    $_SESSION["imageerror"]=true;
      $_SESSION['imageerror']=$imageerror;
}
else{

    $id=$_POST["id"];
  move_uploaded_file($tmp_image,"../images/".$image);
  
  $sql= "UPDATE `sponser_childs` SET `title`='$title',`address`='$address',`age`='$age',`dob`='$dob',`image`='$image' WHERE `id`='$id' ";
  
     
  
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