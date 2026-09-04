<?php
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirm_password'];    
    if($password == $cpassword){
        $cn = mysqli_connect("localhost","root","","trendmart") or die('cant connect with database..!');
        $query = "INSERT INTO `users`(name,email,password) VALUES ('$name','$email','$password')";
      //  var_dump($query);
        mysqli_query($cn,$query) or die('cant run query');
        echo "Account Created Successfully";
    } else {
        echo "Password Not Matched";
    }
?>