<?php
include "db_conn.php";
    $id = $_GET['id'];
    $sql = "DELETE FROM produit WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if($result){
         header("location: index.php?msg=Record deleted successfully");
     } else {
        // echo "failed: " . mysqli_error($conn);
        




     }


/*



    $sql = "DELETE INTO produit WHERE id=$id;
   $result = mysqli_query($conn, $sql);
   if($result){
        header("location: index.php?msg=Record deleted successfully");
    } else {
        echo "failed: " . mysqli_error($conn);
    }*/
?>