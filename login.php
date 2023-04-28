<?php
session_start();
$username="root";
$password="";
$database=new PDO("mysql:host=localhost;dbname=test1;",$username ,$password);
if(isset($_POST ['btn_save'])){
$username=$_POST['username'];
$pass=$_POST['pass'];
$getuser=$database->prepare("SELECT * FROM usres WHERE username='$username'AND pass='$pass'");
$getuser->execute();
if($getuser->fetchobject()){
    $_SESSION['username']=$username;
    $_SESSION['pass']=$pass;
    header('location:iframe.php');
}
else{
    echo "<h3 style=text-align:center;> اسم المستخدم او كلمة المرور غير صحيحة<h3>";
}
}


?>


<link rel="stylesheet" href="css/style3.css">

<body>
    <div class="login_box">
<h2>login</h2>
<form action="" method="post">
<div class="user_box">
<input type="text" name="username" >
<label >username</label>


</div>

<div class="user_box">
    <input type="text" name="pass">
    <label >password</label>
</div>
<div class="user_box">
    <input type="submit" value="log in " class="ss" name="btn_save">

</div>
<a href="">Forgotten your password?</a><br><br>
<div class="user_box">
    <!-- <a href="reg.php"></a> -->
    <input type="submit" value="Sign up " name="rr" class="ss">
    <label for="ss"> </label>


</form>

    </div>

    <?php
if(isset($_POST ['rr'])){
    header('location:reg.php');
}

?>