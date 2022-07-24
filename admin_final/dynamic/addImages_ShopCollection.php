<?php
    include "../../include/connection.php";
    if(isset($_POST['img_category_id'])){
        // echo "1";
        $category_id = $_POST['img_category_id'];
        $image_url = $_POST['image_url'];
        $image_title = mysqli_real_escape_string($con, $_POST['image_title']);
        $image_description = mysqli_real_escape_string($con, $_POST['image_description']);
        $image_price = $_POST['image_price'];
        $size_width = $_POST['size_width'];
        $size_height = $_POST['size_height'];


        $add = "INSERT INTO `shop_images`(`shop_id`, `image`, `title`, `description`, `price`, `size_width`, `size_height`) VALUES ('$category_id','$image_url','$image_title','$image_description','$image_price','$size_width','$size_height')";

        // mysqli_query($con, $add);
        if(mysqli_query($con, $add)){
            echo "1";
        }else{
            echo "0";
        }
    }
?>