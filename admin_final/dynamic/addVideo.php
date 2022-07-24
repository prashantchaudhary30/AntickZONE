<?php
    include "../../include/connection.php";
    if(isset($_POST['video_link'])){

        $image_url = $_POST['image_url'];
        $video_link = mysqli_real_escape_string($con, $_POST['video_link']);

        
        $add = "INSERT INTO `videos`(`thumbnail`, `video_link`) VALUES ('$image_url','$video_link')";

        // mysqli_query($con, $add);
        if(mysqli_query($con, $add)){
            echo "1";
        }else{
            echo "0";
        }
    }
?>