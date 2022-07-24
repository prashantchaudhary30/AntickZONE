<?php
    include "../../include/connection.php";
    if(isset($_POST['username'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $select = "SELECT * FROM `admin_login` WHERE `username`='$username' and `password`='$password' and `status`=1";
        $run = mysqli_query($con, $select);
        if(mysqli_num_rows($run) > 0){
            while($row = mysqli_fetch_assoc($run)){
                session_start();
                $_SESSION['uname'] = $row['name'];
                $_SESSION['pwd'] = $password;
                $_SESSION['img'] = $row['user_img'];
            }
            echo "1";
        }else{
            echo "0";
        }
    }
?>