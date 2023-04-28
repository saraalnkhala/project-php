<?php 

    $con= mysqli_connect(hostname:"localhost",username:"root",password:"",database:"test1");

    $id=$_GET["id"];
    mysqli_query($con ,query:"DELETE FROM usres WHERE id='$id'");

 header(header:'location: user.php');


?>