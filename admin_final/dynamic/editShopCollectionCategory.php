<?php
    include "../../include/connection.php";
    if(isset($_POST['hid'])){
        $id = $_POST['hid'];

        $category_title_edit = $_POST['category_title_edit'];
        $category_select_edit = $_POST['category_select_edit'];
        $arr = explode(" ", $category_title_edit);
        $cat_slug=$str="";
        for($i=1;$i<=sizeof($arr);$i++){
            if($i<sizeof($arr)){
                $str = $arr[$i-1]."_";
            }else{
                $str = $arr[$i-1];
            }
            $cat_slug = $cat_slug.$str;
        }        

        

        $update = "UPDATE `shop` SET `category`='$category_select_edit',`title`='$category_title_edit',`slug`='$cat_slug' WHERE `id`='$id'";

        // mysqli_query($con, $add);
        if(mysqli_query($con, $update)){
            echo "1";
        }else{
            echo "0";
        }
    }
?>