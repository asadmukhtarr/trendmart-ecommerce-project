<?php
    $email = $_GET['email']; // email .
    $password = $_GET['password']; // password ..
    include('cn.php'); // connection ...
    $query = "SELECT * FROM `users` WHERE email = '$email' AND password='$password'"; 
    $r   = mysqli_query($cn,$query) or die('cant run query');
    $rows = mysqli_num_rows($r); // this  function will count number of rows against this email id ..
    if($rows > 0){
        $row = mysqli_fetch_array($r);
        $name = $row['name'];
        session_start();
        $_SESSION['name'] = $name;
        header('Location:../home.php');
    } else {
        $error = "Email or password is wrong! Try Again";
        header('Location:../index.php?error='.$error);
    }
?>