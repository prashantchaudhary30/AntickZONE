<?php
    include "../../include/connection.php";
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $delete = "DELETE FROM `shop` WHERE `id`='$id'";

        
        // mysqli_query($con, $add);
        if(mysqli_query($con, $delete)){
            echo "1";
        }else{
            echo "0";
        }
    }
?>