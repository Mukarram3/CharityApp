<?php

require_once("../connection.php");

$id=$_POST["id"];
  
$query="SELECT * FROM `about` WHERE `id`=$id ";
$res=mysqli_query($conn,$query);
if(mysqli_num_rows($res)>0){
    while($row=mysqli_fetch_array($res)){
?>

<p><?php echo $row["description"]; ?></p>


<?php
    }

    echo $row;
}
else{
    echo "no data available";
}

?>