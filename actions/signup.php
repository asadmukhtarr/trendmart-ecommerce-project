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
        // Query ...
        $query = "INSERT INTO `users`(name,email,password) VALUES ('$name','$email','$password')";
      //  var_dump($query);
        mysqli_query($cn,$query) or die('cant run query');
        echo "Account Created Successfully";
    } else {
        echo "Password Not Matched";
    }
?>