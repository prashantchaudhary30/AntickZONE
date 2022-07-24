<?php
    include "../../include/connection.php";
    if(isset($_POST['hid'])){
        $id = $_POST['hid'];

        $image_url_edit = $_POST['image_url_edit'];
        $video_link_edit = mysqli_real_escape_string($con, $_POST['video_link_edit']);

        
        
    
        $update = "UPDATE `videos` SET `thumbnail`='$image_url_edit',`video_link`='$video_link_edit' WHERE `id`='$id'";

        // mysqli_query($con, $add);
        if(mysqli_query($con, $update)){
            echo "1";
        }else{
            echo "0";
        }
    }
?>