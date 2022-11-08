<?php
include "config.php";
if (isset($_POST["submit"])){
    
    
    $id=$_POST["updateid"];
    
    
    }

$sql= "DELETE FROM `user` WHERE id='$id';";

$result=$conn->query($sql);



if($result==true){
    echo "data has been deleted";
}
?>