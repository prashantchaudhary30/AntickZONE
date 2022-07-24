<?php
    
    
    session_start();
    $flag=0;
    
    if(isset($_SESSION['username'])){
        // $username = $_SESSION['username'];
        // $cust_name = $_SESSION['cust_name'];
        // $phone = $_SESSION['phone'];
        // $email = $_SESSION['email'];
        // $password = $_SESSION['password'];
        $flag = 1;
    }else{
        session_Destroy();
    }
    
?>