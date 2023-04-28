<?php

$username="root";
$password="";
$database = new PDO("mysql:host=localhost; dbname=test1;",$username ,$password );

if (isset($_POST['sub']) ){
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $region =$_POST['region'];
    $birthday = $_POST['birthday'];
    $pass =$_POST['pass'];
    $usersd = $database->prepare("INSERT INTO usres(username,email,region,birthday,pass) VALUES('$username','$email',' $region',' $birthday','$pass')");
    $usersd->execute(); 

 
}

?>

    <link rel="stylesheet" href="css/style2.css">



  
<div class="login-box">
  <h2>Login</h2>
  <form method="POST">

 
        
    <div class="user-box">
      <input type="text" name="username"  >
      <label>Name</label>
    </div>
    
    <div class="user-box">
        <input type="mail" name="email"   >
        <label>Email</label>
      </div>
      <div class="user-box">
      <input type="text" name="region"  >
      <label>region</label>
    </div>
    
    <div class="user-box">
        <input type="date" name="birthday"   >
        <label>birthday</label>
      </div> 
        
    <div class="user-box">
        <input type="text" name="pass"   >
        <label>password</label>
      </div>
 
 
 <button name="sub"><span></span><span></span><span></span> Set</button>
 <button name="btn_save" value="log in "><span></span><span></span><span></span> log in</button>



  </form>
</div>
  



<?php
if(isset($_POST ['btn_save'])){
    header('location:login.php');
}

?>
<!-- 



$usersd = $database->prepare("SELECT * FROM students WHERE id=$id ");

$usersd->execute(); 
$usersd=$usersd->fetch(PDO::FETCH_ASSOC);
var_dump($usersd);
echo "<h1>".$usersd['username']. "</h1>";
echo "<br>";
echo "<h1>".$usersd['email']. "</h1>";
echo "<br>";
echo "<h1>".$usersd['region']. "</h1>";
echo "<br>";
echo "<h1>".$usersd['birthday']. "</h1>";
echo "<br>";
-->



