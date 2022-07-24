<?php
    include "../include/connection.php";
    if(isset($_POST['username_sign_up'])){
        $username=$_POST['username_sign_up'].rand(00, 9999);
        $username_sign_up = $_POST['username_sign_up'];
        $phone_no_sign_up = $_POST['phone_no_sign_up'];
        $email_sign_up = $_POST['email_sign_up'];
        $pwd_sign_up = $_POST['pwd_sign_up'];

        $add = "INSERT INTO `login`(`cust_name`, `username`, `phone`, `email`, `password`) VALUES ('$username_sign_up', '$username', '$phone_no_sign_up', '$email_sign_up', '$pwd_sign_up')";

        if(mysqli_query($con, $add)){
            // session_start();
            // $_SESSION['username'] = $username;
            // $_SESSION['phone'] = $phone_no_sign_up;
            echo "1";
        }else{
            echo "0";
        }
    }
?>