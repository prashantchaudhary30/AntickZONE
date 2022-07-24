<?php
    include "../../include/connection.php";
    if(isset($_POST['product_title'])){
        $product_image = $_POST['product_image'];
        $product_title = mysqli_real_escape_string($con, $_POST['product_title']);
        $product_rate = $_POST['product_rate'];
        
        $product_review = mysqli_real_escape_string($con, $_POST['product_review']);

        

        $add = "INSERT INTO `happy_customers`(`product_img`, `product_title`, `rate`, `review`) VALUES ('$product_image','$product_title','$product_rate','$product_review')";

        if(mysqli_query($con, $add)){
            echo "1";
        }else{
            echo "0";
        }
    }
?>