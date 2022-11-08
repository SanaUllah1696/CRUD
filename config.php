<?php 
$user="root";
$password="";
$server="localhost";
$db="mydb";

$conn=mysqli_connect(
    $server,$user,$password,$db
);
if($conn){
    
} else{
    echo "connection is not created";
}

?>