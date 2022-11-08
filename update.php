<?php
include "config.php";
if (isset($_POST["submit"])){
    
    $lastname=$_POST["lastname"];
    $updateid=$_POST["updateid"];
    $firstname=$_POST["firstname"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $gender=$_POST["gender"];
    $password=$_POST["password"];
    }

$sql= "UPDATE `user` SET `FirstName`='$firstname',`LastName`='$lastname',`Email`='$email',
`Password`='$password',`Gender`='$gender',`Phone`='$phone' WHERE `id`='$updateid'";

$result=$conn->query($sql);



if($result==true){
    echo "done and done";
}
?>