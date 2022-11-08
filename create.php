<?php
include "config.php";

if (isset($_POST["submit"])){
    
$lastname=$_POST["lastname"];
$firstname=$_POST["firstname"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$gender=$_POST["gender"];
$password=$_POST["password"];
}
$sql="INSERT INTO `user` (`id`, `FirstName`, `LastName`, `Email`, `Password`, `Gender`, `Phone`) VALUES
 (NULL, '$firstname', '$lastname', '$email', '$password', '$gender', '$phone');"; 
$result=$conn->query($sql);

if($result==true){
    echo "data is added into the table";
}
else{
    echo "data is not added ".$conn->error;

}
$conn->close();

?>