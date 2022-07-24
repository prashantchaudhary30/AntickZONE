<?php
    include "../include/connection.php";
    if(isset($_POST['email_sign_in'])){
        $email_sign_in = $_POST['email_sign_in'];
        $pwd_sign_in = $_POST['pwd_sign_in'];

        $select = "SELECT * FROM `login` WHERE (`email`='$email_sign_in' or `phone`='$email_sign_in') and `password`='$pwd_sign_in' and `status`=1";
        $run = mysqli_query($con, $select);
        if(mysqli_num_rows($run) > 0){
            while($row = mysqli_fetch_assoc($run)){
                session_start();
                $_SESSION['username'] = $row['username'];
                $_SESSION['cust_name'] = $row['cust_name'];
                $_SESSION['phone'] = $row['phone'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['password'] = $row['password'];
            }
            echo "1";
        }else{
            echo "0";
        }
    }
?>