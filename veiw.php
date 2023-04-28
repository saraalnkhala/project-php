

  <table class="table table-dark">

 
<?php 
$con= new mysqli("localhost","root","","test1",3306);
$sql="SELECT * FROM `product`";
$res=$con->query($sql);
if($res->num_rows>0)
{
foreach ($res as $row ) {
echo '<tr>
<img src="'.$row["img"].'" class="card-img-top "  alt="..." width="300" height="300"/>
</div>
<div class="card-body text-center">
  <h1 class="card-title">'.$row["title"].'</h1>
  <h1 class="card-title">'.$row["price"].'</h1>


</tr>';
}
}

?>

  </table>


  <a href="insert.php" class="btn btn-danger" width="100" height="100">Add new</a>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
