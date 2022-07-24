<?php
    include "../../include/connection.php";
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $status = $_POST['status'];
        $update="";
        if($status == 1){
            $update = "UPDATE `login` SET `status`=0 WHERE `id`='$id'";
        }elseif($status == 0){
            $update = "UPDATE `login` SET `status`=1 WHERE `id`='$id'";
        }

        if(mysqli_query($con, $update)){
            echo "1";
        }else{
            echo "0";
        }
    }
?>