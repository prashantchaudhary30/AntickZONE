<?php
    include "../../include/connection.php";
    if(isset($_POST['product_title_edit'])){
        $id = $_POST['hid'];
        $product_title_edit = $_POST['product_title_edit'];
        $product_slug_edit = $_POST['product_slug_edit'];
        $product_images_edit = $_POST['product_images_edit'];
        $product_desc_edit = $_POST['product_desc_edit'];
        $product_price_edit = $_POST['product_price_edit'];
        $product_width_edit = $_POST['product_width_edit'];
        $product_height_edit = $_POST['product_height_edit'];
        

        $update = "UPDATE `product` SET `product_title`='$product_title_edit',`product_img`='$product_images_edit',`product_slug`='$product_slug_edit',`price`='$product_price_edit',`product_desc`='$product_desc_edit',`size_width`='$product_width_edit',`size_height`='$product_height_edit' WHERE `id`='$id'";

        // mysqli_query($con, $add);
        if(mysqli_query($con, $update)){
            echo "1";
        }else{
            echo "0";
        }
    }
?>