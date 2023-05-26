<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
 <!--fontawsem-->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">.

</head>
<body> 

<div class="container">
<?php

if(isset($_GET['msg'])){

$msg = $_GET['msg'];
echo '<div class="alert alert-danger">
<strong>non correct</strong>.
</div>';
}
?>



  <a href="add_new.php" class ="btn  btn-dark mb-3"> add new</a>
<table class="table table-hover text-center ">
    <thead class="table-dark">
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quntite</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include "db_conn.php";
      $query = "SELECT * FROM produit";
      $result = mysqli_query($conn, $query);
      while($row = mysqli_fetch_assoc($result)){
?>
  <tr>
  <td><?php echo $row['id'] ?></td>
  <td><?php echo isset($row['name']) ? $row['name'] : ''; ?></td>
  <td><?php echo isset($row['price']) ? $row['price'] : ''; ?></td>
<td><?php echo $row['quantity'] ?></td>
              <td>
                <a href="edit.php?id=<?php echo $row['id']?>" class="link-dark"><i class="glyphicon glyphicon-edit  fs-5 me-3"></i></a>
                <a href="delete.php?id=<?php echo $row['id']?>" class="link-dark"><i class="glyphicon glyphicon-trash fs-5 me-3"></i></a>
                <a href="add_new.php?id=<?php echo $row['id']?>" class="link-dark"><i class="glyphicon glyphicon-plus  fs-5 me-3"></i></a>
                </td>
            </tr>
<?php


      }
      ?>
        
         
   
    </tbody>
  </table>
</div>
</body>
</html>





