<?php
include "db_conn.php";

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantite'];

    $sql = "INSERT INTO produit (id, Name, Price, quantity) VALUES ('$id', '$name', '$price', '$quantity')";
    $result = mysqli_query($conn, $sql);

    if($result){
        header("location: index.php?msg=new record created successfully");
    } else {
        echo "failed: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--bootstrap-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <!--fontawsem-->
 <link href="style.css" rel="stylesheet">
 <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">


<style>

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}
button {
    background-color: #04AA6D;
    color: white;
    padding: 14px 40px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    float: none;
    margin-top: 15px;
}
button:hover {
  background-color: #000;
  color:#fff;
}
h2 {
    text-align: center;
    font-size: 45px;
    text-transform: uppercase;
}
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body> 
 <div class="jumbotron" >
<h2>formulaire</h2>
</div>
<div class="container">
  <form action="" method="post">
    <label for="id">id</label>
      <input type="text" id="id" name="id" placeholder="Your id...">
      <label for="name">Name</label>
      <input type="text" id="name" name="name" placeholder="Your name..">
      <label for="lname">price</label>
      <input type="text" id="price" name="price" placeholder="Your price..">
      <label for="quantity">Quantity</label>
      <input type="text" id="quantite" name="quantite" placeholder="Your Quntity..">
    <button type="submit" name="submit"> Enregistrer</button>
  </form>
</div>
</body>
</html>


