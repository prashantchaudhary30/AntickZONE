<?php
    include "../../include/connection.php";
    if(isset($_POST['hid'])){
        $id = $_POST['hid'];

        $product_title_edit = $_POST['product_title_edit'];

        $product_image_edit = $_POST['product_image_edit'];
        
        $product_rate_edit = $_POST['product_rate_edit'];
        
        $product_review_edit = mysqli_real_escape_string($con, $_POST['product_review_edit']);
        // var_dump($con);
        

        

        $update = "UPDATE `happy_customers` SET `product_img`='$product_image_edit',`product_title`='$product_title_edit',`rate`='$product_rate_edit',`review`='$product_review_edit' WHERE `id`='$id'";

        // mysqli_query($con, $add);
        if(mysqli_query($con, $update)){
            echo "1";
        }else{
            echo "0";
        }
    }
?>