<?php
    include "../../include/connection.php";
    if(isset($_POST['hid'])){
        $id = $_POST['hid'];

        $image_url_edit = $_POST['image_url_edit'];
        $image_title_edit = mysqli_real_escape_string($con, $_POST['image_title_edit']);
        $image_description_edit = mysqli_real_escape_string($con, $_POST['image_description_edit']);
        
        $image_price_edit = $_POST['image_price_edit'];
        
        $image_size_width_edit = $_POST['image_size_width_edit'];
        $image_size_height_edit = $_POST['image_size_height_edit'];
        // var_dump($con);
        
        

        $update = "UPDATE `shop_images` SET `image`='$image_url_edit',`title`='$image_title_edit',`description`='$image_description_edit',`price`='$image_price_edit',`size_width`='$image_size_width_edit',`size_height`='$image_size_height_edit' WHERE `id`='$id'";
        // var_dump($update);

        // mysqli_query($con, $add);
        if(mysqli_query($con, $update)){
            echo "1";
        }else{
            echo "0";
        }
    }
?>