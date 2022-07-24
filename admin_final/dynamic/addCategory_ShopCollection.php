<?php
    include "../../include/connection.php";
    if(isset($_POST['category_title'])){
        $category_select = $_POST['category_select'];
        $category_title = $_POST['category_title'];
        $arr = explode(" ", $category_title);
        $cat_slug=$str="";
        for($i=1;$i<=sizeof($arr);$i++){
            if($i<sizeof($arr)){
                $str = $arr[$i-1]."_";
            }else{
                $str = $arr[$i-1];
            }
            $cat_slug = $cat_slug.$str;
        }
        

        $add = "INSERT INTO `shop`(`category`, `title`, `slug`) VALUES ('$category_select','$category_title','$cat_slug')";

        // mysqli_query($con, $add);
        if(mysqli_query($con, $add)){
            echo "1";
        }else{
            echo "0";
        }
    }
?>