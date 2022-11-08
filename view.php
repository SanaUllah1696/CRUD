
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
   <style>

   
    .form{
            margin: auto;
            font-size: 25px;
            background-color: #262626;
            color: aliceblue;
            text-align: center;
            width:100% ;
            height: 100vh;
            opacity: 1;

        }
        input{
            width:70% ;
            border-radius: 10%;
            transition: 2s;
            text-align: center;
        }
        /* input:hover{
            width:74% ;
            border-radius: 15%;
            height: 35px;
            
        } */
        </style>

</head>



    




<?php 
include 'config.php';
$sql="SELECT * FROM `user`";

$res=$conn->query($sql);

if($res->num_rows>0)
{
    while($row=$res->fetch_assoc())
    {
        
 ?>       
        
<body>

<form class="form">
    <h1> Data Of <?php echo $row['id'];?> Man</h1>
<input value="<?php echo $row['id'];?>"> <br>
    <input value="<?php echo $row['FirstName'];?>"> <br>
    <input value ="<?php echo $row['LastName'];?>"> <br>
    <input value="<?php echo $row['Email'];?>"> <br>
    <input  value="<?php echo $row['Password'];?>"><br>
    <input value="<?php echo $row['Phone'];?>"> <br>
    <input value="<?php echo $row['Gender'];?>"> <br>
   

</form>


<?php
    }

}
?>    
   

    
</body>
</html>