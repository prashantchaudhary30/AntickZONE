<?php
    include "include/connection.php";
    include "include/check_login.php";
    if(isset($_REQUEST['id'])){
        $table = $_REQUEST['table'];
        $cat_id = $_REQUEST['id'];
        $category_title = $_REQUEST['title'];
        $arr = explode("_", $category_title);
        $title=$str="";
        for($i=1;$i<=sizeof($arr);$i++){
            if($i<sizeof($arr)){
                $str = $arr[$i-1]." ";
            }else{
                $str = $arr[$i-1];
            }
            $title = $title.$str;
        }      
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AntickZONE</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
</head>

<body>


    <?php
        include "include/whatsapp_social_media.php";
        include "include/preloader.php";
        include "include/login_modal.php";
        include "include/mobile_header.php";
    ?>





   <div class="outer-container-home">
        <?php
            include "include/header.php";
        ?>




        <!-- New Designs section starts -->
        <div class="container-fluid new-designs mt-5">
            <div class="container">
                <h1 class="text-center"><?=$title?></h1>

                <div class="row justify-content-center">

                    <?php
                        $select="";
                        if($table == "shop_images"){
                            $select = "SELECT * FROM `shop_images` WHERE `shop_id`='$cat_id'";
                        }else{
                            $select = "SELECT * FROM `product`";
                        }
                        
                        $run = mysqli_query($con, $select);
                        if(mysqli_num_rows($run) > 0){
                            while($row = mysqli_fetch_assoc($run)){
                                // var_dump(1);
                    ?>
                                <div class="col-md-3 p-2 mt-3">
                                    <?php
                                        if($table == "shop_images"){
                                    ?>
                                            <div class="new-designs-box d-flex flex-column justify-content-center align-items-center p-2">
                                                <a href="good_vibes_only.php?id=<?=$cat_id?>&table=<?=$table?>&category=explore" class="w-75"><img src="<?=$row['image']?>" class="img-fluid w-100" alt=""></a>
                                                <p style="font-size: 16px;" class="text-center mt-2 mb-0"><?=$row['title']?></p>
                                                
                                                <div class="cost d-flex mt-1">
                                                    <div class="actual-price">
                                                        <div class="actual-price-box d-flex justify-content-center align-items-center">
                                                            <i class="fa-solid fa-indian-rupee-sign"></i>
                                                            <?php
                                                                $discount = round(($row['price']*100)/80);
                                                            ?>
                                                            <span class="ms-2"><?=$discount?></span>
                                                        </div>
                                                    </div>

                                                    <div class="final-price text-black ms-3">
                                                        <i class="fa-solid fa-indian-rupee-sign"></i>
                                                        <span class=""><?=$row['price']?></span>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                        }else{
                                    ?>
                                            <div class="new-designs-box d-flex flex-column justify-content-center align-items-center p-2">
                                                <a href="good_vibes_only.php?id=<?=$row['id']?>&table=<?=$table?>&category=explore" class="w-75">
                                                    <?php
                                                        $arr = explode(',', $row['product_img']);
                                                    ?>
                                                    <img src="<?=$arr[0]?>" class="img-fluid w-100" alt="">
                                                </a>
                                                <p style="font-size: 16px;" class="text-center mt-2 mb-0"><?=$row['product_title']?></p>
                                                
                                                <div class="cost d-flex mt-1">
                                                    <div class="actual-price">
                                                        <div class="actual-price-box d-flex justify-content-center align-items-center">
                                                            <i class="fa-solid fa-indian-rupee-sign"></i>
                                                            <?php
                                                                $discount = round(($row['price']*100)/80);
                                                            ?>
                                                            <span class="ms-2"><?=$discount?></span>
                                                        </div>
                                                    </div>

                                                    <div class="final-price text-black ms-3">
                                                        <i class="fa-solid fa-indian-rupee-sign"></i>
                                                        <span class=""><?=$row['price']?></span>
                                                    </div>
                                                </div>
                                            </div>
                                    <?php
                                        }
                                    ?>
                                </div>
                    <?php
                            }
                        }
                    ?>
                    

                            
                </div>
            </div>
        </div>
        <!-- New Designs section ends -->
   </div>




    <?php
        include "include/footer.php";
    ?>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" ></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>


    <?php
        include "include/script.php";
    ?>
</body>

</html>