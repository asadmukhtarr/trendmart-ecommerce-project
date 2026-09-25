<?php
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirm_password'];    
    if($password == $cpassword){
       include('cn.php'); // connection ..
       /*
        - Logic 
        - Step 1: Proccess check kry ga k is email k against account already ha ya ni 
        - Step 2: Agr ni ha to bna do wrna error dy do that email already exist 
       */
        $que = "SELECT * FROM `users` WHERE email = '$email'"; 
        $r   = mysqli_query($cn,$que) or die('cant run query');
        $rows = mysqli_num_rows($r); // this  function will count number of rows against this email id ..
        if($rows > 0){
           //echo 'Email already exist';
           $error = "Email already Exist, Please use Different Mail";
           header('Location:../signup.php?error='.$error); // if email is already exist then it will redirect to back ..
        } else {
            // Query ...
            $query = "INSERT INTO `users`(name,email,password) VALUES ('$name','$email','$password')";
            //  var_dump($query);
            mysqli_query($cn,$query) or die('cant run query');
            header('Location:../index.php');
        }
    } else {
            $error = "Password did not match";
           header('Location:../signup.php?error='.$error);
    }
?>