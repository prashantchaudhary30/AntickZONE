<?php
    include "../../include/connection.php";
    if(isset($_POST['product_title'])){
        $product_title = mysqli_real_escape_string($con, $_POST['product_title']);
        $product_slug = mysqli_real_escape_string($con, $_POST['product_slug']);
        $product_images = $_POST['product_image'];
        $product_price = $_POST['product_price'];
        $product_desc = mysqli_real_escape_string($con, $_POST['product_desc']);
        $product_width = $_POST['product_width'];
        $product_height = $_POST['product_height'];
        // $product_rate = $_POST['product_rate'];       
            
        $add = "INSERT INTO `product`(`product_title`, `product_img`, `product_slug`, `price`, `product_desc`, `size_width`, `size_height`) VALUES ('$product_title','$product_images','$product_slug','$product_price','$product_desc','$product_width','$product_height')";

        // mysqli_query($con, $add);
        if(mysqli_query($con, $add)){
            echo "1";
        }else{
            echo "0";
        }
    }
?>