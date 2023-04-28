<?php 

    $con= mysqli_connect(hostname:"localhost",username:"root",password:"",database:"test1");

    $id=$_GET["id"];
    mysqli_query($con ,query:"DELETE FROM product WHERE id='$id'");

 header(header:'location: product.php');


?>