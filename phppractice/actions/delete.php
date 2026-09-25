<?php 
    $id = $_GET['id']; // id ..
    include('cn.php'); // connection ..
    $query = "DELETE FROM `users` WHERE id='$id'";
    mysqli_query($cn,$query) or die('cant run query');
    $msg = "User Deleted Succesfully";
    header('Location:../home.php?error='.$msg);
?>