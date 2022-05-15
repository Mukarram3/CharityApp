<?php
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


require_once("../connection.php");





if(isset($_POST['submit'])){ 
    $caption=mysqli_real_escape_string($conn,$_POST["caption"]);
    $caption=htmlentities($caption);
    // File upload configuration 
    $targetDir = "../images/"; 
    $allowTypes = array('jpg','png','jpeg','gif'); 
      
    $fileNames = array_filter($_FILES['image']['name']); 
 

    if(empty($caption)){
        $captionerr="Caption is required";
        $_SESSION["captionerr"]=true;
        $_SESSION['captionerr']=$captionerr;
    }
    if(empty($fileNames)){
        $imageerr="Please select Aleast 1 Image";
        $_SESSION["imageerr"]=true;
    $_SESSION['imageerr']=$imageerr;
    }
    else{

        foreach($_FILES['image']['name'] as $key=>$val){ 
            // File upload path 
            $fileName = basename($_FILES['image']['name'][$key]); 
            $targetFilePath = $targetDir . $fileName; 
             
            // Check whether file type is valid 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                // Upload file to server 
                if(move_uploaded_file($_FILES["image"]["tmp_name"][$key], $targetFilePath)){ 
                    // Image db insert sql 
                    // $insertValuesSQL .= "$fileName,"; 
                    $insert[$key] ="INSERT INTO `gallery` (`caption`,`image`) VALUES ('$caption','$fileName')"; 
                    $res[$key]=mysqli_query($conn,$insert[$key]);

                    if($res){
                        
                        $_SESSION["inserted"]=true;
                        $inserted="data submitted";
                        $_SESSION["inserted"]=$inserted;
                    }
                    else{
                        $insertionerr="no submitted";
                    }
                    
                }else{ 
                    $errorUpload .= $_FILES['image']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['image']['name'][$key].' | '; 
            } 
            

        } 
        // echo $insertValuesSQL;
        // die();
        // Error message 
        $errorUpload = !empty($errorUpload)?'Upload Error: '.trim($errorUpload, ' | '):''; 
        $errorUploadType = !empty($errorUploadType)?'File Type Error: '.trim($errorUploadType, ' | '):''; 
        $errorMsg = !empty($errorUpload)?'<br/>'.$errorUpload.'<br/>'.$errorUploadType:'<br/>'.$errorUploadType; 
         
    

}
} 



if(isset($_POST["btn_delete"])){

    $id=$_POST["id"];
    $query="DELETE FROM `gallery` WHERE `id`='$id' ";  
    $res=mysqli_query($conn,$query);
    if($res){
        
        $_SESSION["deleted"]=true;
        $deleted="Data Deleted";
        $_SESSION["deleted"]=$deleted;
    }
    else{
        $deletionerr="Data Can't Deleted";
    }

}


     
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='edit'){

    $id=$_GET["id"];
  
    
    $query2= " SELECT * FROM `gallery` WHERE `id`='$id'";
                $res2= mysqli_query($conn,$query2);
                if(mysqli_num_rows($res2)>0){
    
    $row2=mysqli_fetch_array($res2);
   
    
                }
        
    }


if(isset($_POST["update"])){

    $caption=mysqli_real_escape_string($conn,$_POST["caption"]);
    $caption=htmlentities($caption);
 
  $image=$_FILES["image"]["name"];
  $tmp_image=$_FILES["image"]["tmp_name"];
  if(empty($caption)){
    $captionerr="Caption is required";
    $_SESSION["captionerr"]=true;
    $_SESSION['captionerr']=$captionerr;
}
if(empty($image)){
    $imageerr="Please select Image";
    $_SESSION["imageerr"]=true;
$_SESSION["imageerr"]=$imageerr;
}
  else{

    $id=$_POST["id"];
  move_uploaded_file($tmp_image,"../images/".$image);
  
  $sql= "UPDATE `gallery` SET `caption`='$caption',`image`='$image' WHERE `id`='$id' ";
  
     
  
    $res = mysqli_query($conn,$sql);
    if($res){
        $_SESSION["updated"]=true;
        $updated="data updated";
        $_SESSION["updated"]=$updated;
        header('location: view.php');
        
    }
    else{
        $updationerr="data can't updated";
    }
   

}

    
    }




?>
