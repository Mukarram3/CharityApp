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
    header('location: ../../index.php');
   
  }


  if(isset($_POST["submit"])){

    $title=mysqli_real_escape_string($conn,$_POST["title"]);
    $title=htmlentities($title);
    $description=$_POST["description"];

  if(empty($title)){
      $titleerror="Title field is required";
      $_SESSION["titleerror"]=true;
        $_SESSION['titleerror']=$titleerror;
  }
  if(empty($description)){
      $descriptionerror="Description is Required";
      $_SESSION["descriptionerror"]=true;
        $_SESSION["descriptionerror"]=$descriptionerror;
  }
  else{
  
    $sql="INSERT INTO `about` (`title`,`description`) VALUES ('$title','$description')";
  
     
  
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
    $query="DELETE FROM `about` WHERE `id`='$id' ";  
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



if(isset($_GET["description"])){
    
    $id=$_GET["id"];
    echo $id;
    die();
    $query= "SELECT * FROM `about` WHERE `id`='$id' ";
                                           
                                            $res= mysqli_query($conn,$query);
                                            if(mysqli_num_rows($res)>0){

                                             $row2=mysqli_fetch_array($res2);
                                             
                                             echo $row2["description"];

                                            }
   
    }


    if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='edit'){

        $id=$_GET["id"];
      
        
        $query2= " SELECT * FROM `about` WHERE `id`='$id' ";
                    $res2= mysqli_query($conn,$query2);
                    if(mysqli_num_rows($res2)>0){
        
        $row2=mysqli_fetch_array($res2);
       
        
                    }
         
        }
    
    
    if(isset($_POST["update"])){
    
        $title=mysqli_real_escape_string($conn,$_POST["title"]);
    $title=htmlentities($title);
    $description=$_POST["description"];

    if(empty($title)){
        $titleerror="Title field is required";
        $_SESSION["titleerror"]=true;
          $_SESSION['titleerror']=$titleerror;
    }
    if(empty($description)){
        $descriptionerror="Description is Required";
        $_SESSION["descriptionerror"]=true;
          $_SESSION["descriptionerror"]=$descriptionerror;
    }
  else{
    
        $id=$_POST["id"];
      
      $sql= "UPDATE `about` SET `title`='$title',`description`='$description' WHERE `id`='$id' ";
      
         
      
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