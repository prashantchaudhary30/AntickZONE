<?php
    include "include/check_login.php";
    include "include/connection.php";
    $cat_id = $table = "";
    if(isset($_GET['id'])){
        $cat_id = $_GET['id'];
        $table = $_GET['table'];
        $category = $_GET['category'];
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
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css'>
</head>

<body class="custom-neon-body">


    <?php
        include "include/whatsapp_social_media.php";
        include "include/mobile_header.php";
        include "include/header.php";
        include "include/preloader.php";
        include "include/login_modal.php";
    ?>


    

        
    <div class="outer-container">
        <section class="custom-sign-main-section mt-4">
            <input type="hidden" value="<?=$table?>" id="table_name">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 left-content col-md-6">
                        <div class="img-section">
                            <div class="img-visible-div">
                                <?php
                                    $select_images="";
                                    if($table == "shop_images"){
                                        $select_images = "SELECT * FROM `shop_images` WHERE `shop_id`='$cat_id' LIMIT 1";
                                    }else if($category == "newdesign"){
                                        $select_images = "SELECT * FROM `product` WHERE `id`='$cat_id' LIMIT 1";
                                    }else{
                                        $select_images = "SELECT * FROM `product` WHERE `id`='$cat_id' LIMIT 1";
                                    }
                                    $run_images = mysqli_query($con, $select_images);
                                    if(mysqli_num_rows($run_images) > 0){
                                        while($row = mysqli_fetch_assoc($run_images)){
                                ?>
                                            <?php
                                                if($table == "shop_images"){
                                            ?>
                                                    <img src="<?=$row['image']?>" class="img-fluid w-100" alt="">
                                            <?php
                                                }else{
                                                    $arr2 = explode(',', $row['product_img']);
                                            ?>

                                                    <img src="<?=$arr2[0]?>" class="img-fluid w-100" alt="">
                                            <?php
                                                }
                                            ?>
                                <?php
                                        }
                                    }
                                ?>
                                <!-- <p class="custom-text">Custom Text</p> -->
                            </div>

                            <div class="img-product-gallery">
                                <div class="swiper img-product-gallery-swiper">
                                    <div class="swiper-wrapper">
                                        <?php
                                            $select="";
                                            if($table == "shop_images"){
                                                $select = "SELECT * FROM `shop_images` WHERE `shop_id`='$cat_id'";
                                            }else if($category == "newdesign"){
                                                $select = "SELECT * FROM `product` WHERE `id`='$cat_id'";
                                            }else{
                                                $select = "SELECT * FROM `product`";
                                            }
                                            $run = mysqli_query($con, $select);
                                            if(mysqli_num_rows($run) > 0){
                                                $i=1;
                                                while($row = mysqli_fetch_assoc($run)){
                                                    if($table == "shop_images"){
                                                        if($i == 1){
                                        ?>
                                                            <div class="swiper-slide">
                                                                <div class="img-product-gallery-box d-flex flex-column justify-content align-items-center">
                                                                    <img src="<?=$row['image']?>" class="img-fluid active" id="img-<?=$row['id']?>" alt="">
                                                                    <input type="hidden" id="hid-<?=$row['id']?>" value="<?=$table?>">
                                                                </div>
                                                            </div>
                                        <?php
                                                        }else{
                                        ?>
                                                            <div class="swiper-slide">
                                                                <div class="img-product-gallery-box d-flex flex-column justify-content align-items-center">
                                                                    <img src="<?=$row['image']?>" class="img-fluid" id="img-<?=$row['id']?>" alt="">
                                                                    <input type="hidden" id="hid-<?=$row['id']?>" value="<?=$table?>">
                                                                </div>
                                                            </div>
                                        <?php
                                                        }
                                                    }else{
                                                        $arr = explode(',', $row['product_img']);
                                                        $count = sizeof($arr);
                                                        for($j=0;$j<$count;$j++){
                                                            if($j == 0 && $row['id'] == $cat_id){
                                        ?>
                                                                <div class="swiper-slide">
                                                                    <div class="img-product-gallery-box d-flex flex-column justify-content align-items-center">
                                                                        <img src="<?=$arr[$j]?>" class="img-fluid active" id="img-<?=$row['id']?>" alt="">
                                                                        <input type="hidden" id="hid-<?=$row['id']?>" value="<?=$table?>">
                                                                    </div>
                                                                </div>
                                        <?php
                                                            }else{
                                        ?>
                                                                <div class="swiper-slide">
                                                                    <div class="img-product-gallery-box d-flex flex-column justify-content align-items-center">
                                                                        <img src="<?=$arr[$j]?>" class="img-fluid" id="img-<?=$row['id']?>" alt="">
                                                                        <input type="hidden" id="hid-<?=$row['id']?>" value="<?=$table?>">
                                                                    </div>
                                                                </div>
                                        <?php
                                                            }
                                                        }
                                                    }
                                                    $i++;
                                                }
                                            }
                                        ?>
                                    </div>
                                    
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid latest-videos">
                            <h1>LATEST&nbsp;&nbsp;VIDEOS</h1>

                            <div class="row mt-3">
                                <div class="swiper latest-videos-swiper">
                                    <div class="swiper-wrapper">
                                        <?php
                                            $select = "SELECT * FROM `videos` WHERE `status`=1";
                                            $run = mysqli_query($con, $select);
                                            if(mysqli_num_rows($run) > 0){
                                                $i=1;
                                                while($row = mysqli_fetch_assoc($run)){

                                        ?>

                                                    <div class="swiper-slide">
                                                        <div class="latest-videos-box d-flex flex-column justify-content align-items-center">
                                                            <img src="<?=$row['thumbnail']?>" class="img-fluid" alt="">    
                                                            <div class="latest-videos-play-button">
                                                                <button id="button_videos_<?=$row['id']?>"><i class="fa-solid fa-play"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                        <?php
                                                    $i++;
                                                }
                                            }
                                        ?>
                                    </div>

                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <?php 
                    $selectOther="";
                    if($table == "shop_images"){
                        $selectOther = "SELECT * FROM `shop_images` WHERE `shop_id`='$cat_id' LIMIT 1";
                    }else if($category == "newdesign"){
                        $selectOther = "SELECT * FROM `product` WHERE `id`='$cat_id' LIMIT 1";
                    }else{
                        $selectOther = "SELECT * FROM `product` WHERE `id`='$cat_id'";
                    }
                    $runOther = mysqli_query($con, $selectOther);
                    if(mysqli_num_rows($runOther) > 0){
                        $i=1;
                        while($rowOther = mysqli_fetch_assoc($runOther)){
                    ?>
                        <?php
                            if($table == "shop_images"){
                        ?>
                                <div class="col-lg-6 right-content col-md-6">
                                    <h1 class="image-title"><?=$rowOther['title']?></h1>

                                    <div class="cost d-flex mt-2">
                                        <div class="actual-price">
                                            <div class="actual-price-box d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-indian-rupee-sign"></i>
                                                <span class="ms-2" id="actual_price"><?=$rowOther['price']?></span>
                                            </div>
                                        </div>

                                        <div class="final-price text-black ms-3">
                                            <i class="fa-solid fa-indian-rupee-sign"></i>
                                            <span class="" id="disc_price"><?=$rowOther['price']?></span>
                                        </div>
                                    </div>

                                    <p class="image-description mt-2"><?=$rowOther['description']?></p>
                                    

                                    <?php
                                        if($table != "products"){
                                    ?>
                                            <p id="image-size">Size: <?=$rowOther['size_width']?>ft. width x <?=$rowOther['size_height']?>ft. height</p>
                                    <?php
                                        }
                                    ?>
                                            
                        <?php
                            }else{
                        ?>
                                <div class="col-lg-6 right-content col-md-6">
                                    <h1 class="image-title"><?=$rowOther['product_title']?></h1>

                                    <div class="cost d-flex mt-2">
                                        <div class="actual-price">
                                            <div class="actual-price-box d-flex justify-content-center align-items-center">
                                                <i class="fa-solid fa-indian-rupee-sign"></i>
                                                <span class="ms-2" id="actual_price"><?=$rowOther['price']?></span>
                                            </div>
                                        </div>

                                        <div class="final-price text-black ms-3">
                                            <i class="fa-solid fa-indian-rupee-sign"></i>
                                            <span class="" id="disc_price"><?=$rowOther['price']?></span>
                                        </div>
                                    </div>

                                    <p class="image-description mt-2"><?=$rowOther['product_desc']?></p>
                                    

                                    <?php
                                        if($table != "products"){
                                    ?>
                                            <p id="image-size">Size: <?=$rowOther['size_width']?>ft. width x <?=$rowOther['size_height']?>ft. height</p>
                                    <?php
                                        }
                                    ?>
                                            
                                    
                        <?php
                            }
                        ?>

                                
                    <?php 
                        }
                    }
                    ?>
                        <div class="options">

                            <div class="mt-4 quality">
                                <h5>Quality</h5>
                                
                                <div class="d-flex align-items-center">
                                    <input value="Standard [4MM - Best-in-class]" type="radio" name="quality_radio" id="standard-price">
                                    <span class="ms-2">Standard [4MM - Best-in-class]</span>
                                </div>

                                <div class="d-flex align-items-center mt-2">
                                    <input value="Premium [5MM - Bestseller]" type="radio" name="quality_radio" id="premium-price">
                                    <span class="ms-2">Premium [5MM - Bestseller]</span>
                                </div>

                                <div class="d-flex align-items-center mt-2">
                                    <input value="Elite [8MM - Ultimate]" type="radio" name="quality_radio" id="elite-price">
                                    <span class="ms-2">Elite [8MM - Ultimate]</span>
                                </div>

                                <div class="d-flex align-items-center mt-2">
                                    <input value="FancyFlow RGB (5MM - Multi Color Neon)" type="radio" name="quality_radio" id="fancyflow-price">
                                    <span class="ms-2">FancyFlow RGB (5MM - Multi Color Neon)</span>
                                </div>
                            </div>

                            <div class="mt-4 addons">
                                <h5>Addons</h5>
                                
                                <div class="d-flex align-items-center">
                                    <input type="checkbox" name="addons-checkbox" onchange="brightness(this)" id="brightness_checkbox">
                                    <span class="ms-2" id="brightness_price">Brightness Controller (+ <i class="fa-solid fa-indian-rupee-sign"></i> 500)</span>
                                </div>
                            </div>

                            <div class="contact-buttons">
                                <?php
                                    if($flag == 1){
                                ?>
                                        <input type="hidden" id="add_to_cart_hidden" value="<?=$_SESSION['email']?>">
                                        <a id="whatsapp_link" target="_blank" href="javascript:void()" class="text-decoration-none">
                                            <button class="btn btn-dark add-to-cart mt-5 mb-3">
                                                <span class="ms-3">Add To Cart</span>
                                            </button>
                                        </a>
                                <?php
                                    }else{
                                ?>
                                        <a data-bs-toggle="modal" data-bs-target="#login_modal" target="_blank" href="javascript:void()" class="text-decoration-none">
                                            <button class="btn btn-dark add-to-cart mt-5 mb-3">
                                                <span class="ms-3">Add To Cart</span>
                                            </button>
                                        </a>
                                <?php
                                    }
                                ?>


                                <a href="https://wa.me/+911203180706?text=Hello,%20I%20want%20to%20customise%20one%20of%20your%20products" target="_blank" class="text-decoration-none">
                                    <button class="whatsapp-customise mt-5 mb-3">
                                        <i class="fa-brands fa-whatsapp"></i>
                                        <span class="ms-3"><strong>WhatsApp</strong> us to customise!</span>
                                    </button>
                                </a>

                                <a href="javascript:void()">
                                    <button class="messenger-customise mb-3">
                                        <i class="fa-brands fa-facebook-messenger"></i>
                                        <span class="ms-3"><strong>Messenger</strong> us to customise!</span>
                                    </button>
                                </a>

                                <a href="tel:919873906502" class="text-decoration-none">
                                    <button class="call-to-customise">
                                        <i class="fa-solid fa-phone"></i>
                                        <span class="ms-3"><strong>Call</strong> us to customise!</span>
                                    </button>
                                </a>
                            </div>

                            <div class="contact">
                                <div class="row align-items-start">
                                    <div class="col-1">
                                        <div class="marker mt-2"></div>
                                    </div>

                                    <div class="col-11 p-0">
                                        <p class="m-0 ms-1"><span class="contact_us">Contact us</span> for more design options. <span class="whatsapp">[WhatsApp]</span></p>
                                    </div>
                                </div>

                                <div class="row align-items-start">
                                    <div class="col-1">
                                        <div class="marker mt-2"></div>
                                    </div>

                                    <div class="col-11 p-0">
                                        <p class="m-0 ms-1">We will contact you after the order for confirming the details and design.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
            <div class="container">
                <!-- You might be interested in section starts -->
                <div class="container-fluid you-might-interested">
                    <div class="container">
                        <h3 class="text-start ps-3">You might be interested in</h3>

                        <div class="row">
                            <div class="swiper you-might-interested-swiper">
                                <div class="swiper-wrapper">
                                    <?php
                                        $select = "SELECT * FROM `product` WHERE `status`=1 LIMIT 8";
                                        $run = mysqli_query($con, $select);
                                        if(mysqli_num_rows($run) > 0){
                                            while($row = mysqli_fetch_assoc($run)){
                                    ?>
                                                <div class="swiper-slide ps-5">
                                                    <a href="" class="text-decoration-none">
                                                        <div class="you-might-interested-box d-flex flex-column justify-content align-items-center p-2">
                                                            <!-- <img src="<?=$row['product_img']?>" class="img-fluid" alt=""> -->
                                                            <a href="good_vibes_only.php?id=<?=$row['id']?>&table=product&category=bestproducts">
                                                                <?php
                                                                    $arr = explode(',', $row['product_img']);
                                                                    $count = sizeof($arr);
                                                                ?>
                                                                        <img src="<?=$arr[0]?>" class="img-fluid" alt="">
                                                            </a>
                                                            <!-- <a href="good_vibes_only.php?id=<?=$row['id']?>&table=product&category=bestproducts" class="w-100 text-decoration-none text-white"> 
                                                                <div class="button">BUY NOW</div>
                                                            </a>  -->
                                                        </div>
                                                    </a>
                                                    
                                                </div>
                                    <?php
                                            }
                                        }
                                    ?>
                                </div>

                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- You might be interested in section ends -->





                <!-- Similiar products starts -->
                <div class="container-fluid similar-products">
                    <div class="container">
                        <h3 class="text-start ps-3">Similiar Products</h3>

                        <div class="row">
                            <div class="swiper similar-products-swiper">
                                <div class="swiper-wrapper">
                                    <?php
                                        $select = "SELECT * FROM `product` WHERE `status`=1  ORDER BY `id` DESC LIMIT 10";
                                        $run = mysqli_query($con, $select);
                                        if(mysqli_num_rows($run) > 0){
                                            while($row = mysqli_fetch_assoc($run)){
                                    ?>
                                                <div class="swiper-slide ps-5">
                                                    <a href="" class="text-decoration-none">
                                                        <div class="similar-products-box d-flex flex-column justify-content align-items-center p-2">
                                                            <!-- <img src="<?=$row['product_img']?>" class="img-fluid" alt=""> -->
                                                            <a href="good_vibes_only.php?id=<?=$row['id']?>&table=product&category=bestproducts">
                                                                <?php
                                                                    $arr = explode(',', $row['product_img']);
                                                                    $count = sizeof($arr);
                                                                ?>
                                                                        <img src="<?=$arr[0]?>" class="img-fluid" alt="">
                                                            </a>

                                                            <p class="mt-3 fs-6 mb-0 text-center"><?=$row['product_title']?></p>
                                        
                                                            <div class="cost d-flex mt-1">
                                                                <div class="actual-price">
                                                                    <div class="actual-price-box d-flex justify-content-center align-items-center">
                                                                        <i class="fa-solid fa-indian-rupee-sign"></i>
                                                                        <?php
                                                                            $disc = round(($row['price']*100)/80);
                                                                        ?>
                                                                        <span class="ms-2"><?=$disc?></span>
                                                                    </div>
                                                                </div>

                                                                <div class="final-price d-flex justify-content-center align-items-center text-black ms-3">
                                                                    <i class="fa-solid fa-indian-rupee-sign"></i>
                                                                    <span class="ms-2"><?=$row['price']?></span>
                                                                </div>
                                                            </div>
                                                            <!-- <a href="good_vibes_only.php?id=<?=$row['id']?>&table=product&category=bestproducts" class="w-100 text-decoration-none text-white"> 
                                                                <div class="button">BUY NOW</div>
                                                            </a>  -->
                                                        </div>
                                                    </a>
                                                    
                                                </div>
                                    <?php
                                            }
                                        }
                                    ?>
                                </div>

                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Similiar products ends -->
            </div>


            <!-- Custom Neon Sign Details section starts -->
            <div class="container-fluid custom-sign-details mt-5 mb-5">
                <div class="container headings d-flex justify-content-center align-items-center">
                    <div class="active why-us-text">
                        <h4 class="mb-0">Why Us</h4>
                    </div>

                    <div class="product-details-text">
                        <h4 class="mb-0">Product Details</h4>
                    </div>

                    <div class="what-in-pckj-text">
                        <h4 class="mb-0">What's in the package</h4>
                    </div>

                    <div class="install-guide">
                        <h4 class="mb-0">Installation Guide</h4>
                    </div>
                </div>

                <div class="container-fluid content-div">
                    <div class="why-us-content">
                        <div class="row">
                            <div class="col-md-3 px-4">
                                <div class="why-us-box d-flex">
                                    <div>
                                        <i class="fa-solid fa-trophy"></i>
                                    </div>

                                    <div class="ps-3">
                                        <h5 class="fw-normal">India's No.1 Neon Signs</h5>
                                        <p>ANTICKZONE makes India's No.1 Neon Signs in terms of quality, durability, after sales service and much more.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-3 px-4">
                                <div class="why-us-box d-flex">
                                    <div>
                                        <i class="fa-solid fa-clipboard-check"></i>
                                        <!-- <i class="fa-regular fa-shield-check"></i> -->
                                        <!-- <i class="fa-regular fa-shield-check"></i> -->
                                    </div>

                                    <div class="ps-3">
                                        <h5 class="fw-normal">Upto 1 Year Warranty</h5>
                                        <p>All the Neon Signs comes with a limited warranty. It varies from qualities.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-3 px-4">
                                <div class="why-us-box d-flex">
                                    <div>
                                        <i class="fa-solid fa-box-archive"></i>
                                    </div>

                                    <div class="ps-3">
                                        <h5 class="fw-normal">Safe Packaging</h5>
                                        <p>Neon Signs are fragile, so the tough packaging is necessary. We ensure safe delivery of your order.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-3 px-4">
                                <div class="why-us-box d-flex">
                                    <div>
                                        <i class="fa-solid fa-truck"></i>
                                    </div>

                                    <div class="ps-3">
                                        <h5 class="fw-normal">COD & Free Shipping</h5>
                                        <p>Neon Signs comes with partial COD as they are fragile and made specially for you.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product-details">
                        <h4 class="ps-4">About the India's No.1 Neon Sign</h4>
                        <p class="ps-4">ANTICKZONE neon signs are made in India with advance neon LED lights, high precision cutting machines, acrylic backing. We offer multiple quality types of Neon Signs from Standard to our flagship i.e. the Elite neon signs.</p>
                        
                        <div class="row">
                            <div class="col-md-4 px-5 py-3">
                                <div class="why-us-box d-flex">
                                    <div>
                                        <i class="fa-regular fa-square-check"></i>
                                    </div>

                                    <div class="ps-4">
                                        <h5 class="fw-normal">Quality Tested</h5>
                                        <p class="mb-0">All neon signs are quality tested before shipping. This reduces probability of product issues.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4 px-5 py-3">
                                <div class="why-us-box d-flex">
                                    <div>
                                        <i class="fa-regular fa-heart"></i>                                        <!-- <i class="fa-regular fa-shield-check"></i> -->
                                    </div>

                                    <div class="ps-4">
                                        <h5 class="fw-normal">Proudly Made In India</h5>
                                        <p class="mb-0">We are a proud Indian company manufacturing Neon Signs in India. At the same time ensuring world class quality.</p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4 px-5 py-3">
                                <div class="why-us-box d-flex">
                                    <div>
                                        <i class="fa-regular fa-building"></i>
                                    </div>

                                    <div class="ps-4">
                                        <h5 class="fw-normal">Direct To Consumer</h5>
                                        <p class="mb-0">You are buying this product directly from the factory. Fancelite® manufactures this products.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="package-details">
                        <h4 class="ps-4">What's in the box?</h4>
                        <p class="ps-4">You will get the below mentioned items in the box when you order a Neon Sign from us. The holes for the screws are already there in the Neon Sign.</p>
                        
                        <div class="d-flex justify-content-center align-items-center">
                            <img src="img/custom-sign-detail-img.webp" class="img-fluid w-75" alt="">
                        </div>
                    </div>

                    <div class="installation-guide">
                        <h4 class="ps-4 fw-normal">You can install the neon sign on your wall with the help of these steps.</h4>
                        
                        <div class="row mt-3">
                            <div class="py-2 px-5">
                                <div class="guide-box-us-box d-flex">
                                    <div class="d-flex align-items-end">
                                        <h1>1</h1>
                                    </div>

                                    <div class="content mt-2 ms-2">
                                        <p>Firstly, unbox the package and pull out all the items like, Neon Sign, Adapter, Controller (if purchased),and Screw Kit.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="py-2 px-5">
                                <div class="guide-box-us-box d-flex">
                                    <div class="d-flex align-items-end">
                                        <h1>2</h1>
                                    </div>

                                    <div class="content mt-2">
                                        <p>Place the Neon Sign on the desired place on the wall. Mark the holes on the wall through the Neon Sign holes, so you drill the holes on the wall according to the sign holes.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="py-2 px-5">
                                <div class="guide-box-us-box d-flex">
                                    <div class="d-flex align-items-end">
                                        <h1>3</h1>
                                    </div>

                                    <div class="content mt-2">
                                        <p>Drill holes on the markings you made on the wall. Hammer the plastic caps inside those holes, then put screws through the Stainless Steel nuts into the plastic cap.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="py-2 px-5">
                                <div class="guide-box-us-box d-flex">
                                    <div class="d-flex align-items-end">
                                        <h1>4</h1>
                                    </div>

                                    <div class="content mt-2">
                                        <p>Now place the Neon Sign over those stainless steel nuts, and put the bolts through the sign into the SS nuts on the wall. Make sure the screws and kit is tight enough.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="py-2 px-5">
                                <div class="guide-box-us-box d-flex">
                                    <div class="d-flex align-items-end">
                                        <h1>5</h1>
                                    </div>

                                    <div class="content mt-2">
                                        <p>Plug the adapter, connect the controller if purchased. Turn on the switch, press the ON button on the remote and you are done.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Custom Neon Sign Details section ends -->




            <div class="container neon-signs-types mt-5">
            
                <h1>Types of Neon Signs</h1>
                <h5>We provide multiple types of Neon Signs. The range starts from Standard which is an economical variant but offers the best neon light sign in India at this price range.</h5>

    
                <div class="row">
                    <div class="col-md-4 p-4">
                        <div class="card-body p-4 d-flex flex-column justify-content-center align-items-center">
                            <h2 class="card-title">Standard</h2>
                            <p class="description">4MM Neon LED Lights + 4MM Acrylic Backing</p>
                            <p class="starting-price">from ₹1250</p>
                            <p class="card-text"><i class="fa-solid fa-check"></i>&nbsp;&nbsp;1 month warranty</p>
                        </div>
                    </div>
                    
                    <div class="col-md-4 p-4">
                        <div class="card-body p-4 d-flex flex-column justify-content-center align-items-center">
                            <h2 class="card-title">Premium</h2>
                            <p class="description">4MM Neon LED Lights + 5MM Acrylic Backing</p>
                            <p class="starting-price">from ₹1650</p>
                            <p class="card-text"><i class="fa-solid fa-check"></i>&nbsp;&nbsp;6 month warranty</p>
                        </div>
                    </div>

                    <div class="col-md-4 p-4">
                        <div class="card-body p-4 d-flex flex-column justify-content-center align-items-center">
                            <h2 class="card-title">Elite</h2>
                            <p class="description">4MM Neon LED Lights + 8MM Acrylic Backing</p>
                            <p class="starting-price">from ₹ 2565</p>
                            <p class="card-text"><i class="fa-solid fa-check"></i>&nbsp;&nbsp;1 year warranty</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>




        <!-- Modal Videos -->
        <div class="modal fade latest_videos_modal" id="latest_videos_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-body d-flex justify-content-center align-items-center">
                        <iframe id="latest_videos_modal_iframe" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>


    



    <?php
        include "include/footer.php";
    ?>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" ></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>


    <?php
        include "include/script.php";
    ?>

    <script>
        var swiper = new Swiper(".img-product-gallery-swiper", {
            slidesPerView: 4,
            spaceBetween: 25,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            loop:true,
            // coverflowEffect: {
            //   rotate: 50,
            //   stretch: 0,
            //   depth: 100,
            //   modifier: 1,
            //   slideShadows: true,
            // },
            // effect: "coverflow",
            // grabCursor: true,
            // centeredSlides: true,
            // slidesPerView: 4,
            // breakpoints={
            //   640: {
            //     slidesPerView: 1
            //   },
            //   768: {
            //     slidesPerView: 2
            //   },
            //   1024: {
            //     slidesPerView: 3
            //   },
            //   1200: {
            //     slidesPerView: 4
            //   },
            // }
            breakpoints: {
                375: {
                    slidesPerView: 2
                },
                768: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 3
                },
                1200: {
                    slidesPerView: 4
                }
            },
        });
        
        
        
        var swiper = new Swiper(".you-might-interested-swiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 1000,
                disableOnInteraction: false,
            },
            loop:true,
            breakpoints: {
                375: {
                    slidesPerView: 1
                },
                768: {
                    slidesPerView: 3
                },
                1024: {
                    slidesPerView: 4
                },
            },
        });

        var swiper = new Swiper(".similar-products-swiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 1000,
                disableOnInteraction: false,
            },
            loop:true,
            breakpoints: {
                375: {
                    slidesPerView: 1
                },
                768: {
                    slidesPerView: 3
                },
                1024: {
                    slidesPerView: 4
                },
            },
        });

        var mySwiper = document.querySelector('.you-might-interested-swiper').swiper;
        var mySwiper2 = document.querySelector('.similar-products-swiper').swiper;

        $(".you-might-interested-swiper").mouseenter(function() {
            mySwiper.autoplay.stop();
            console.log('slider stopped');
        });

        $(".you-might-interested-swiper").mouseleave(function() {
            mySwiper.autoplay.start();
            console.log('slider started');
        });

        $(".similar-products-swiper").mouseenter(function() {
            mySwiper2.autoplay.stop();
            console.log('slider stopped');
        });

        $(".similar-products-swiper").mouseleave(function() {
            mySwiper2.autoplay.start();
            console.log('slider started');
        });

        var result="";

        $(window).on('load', function(){
            var split_img_id = $('.custom-sign-main-section .img-product-gallery-box img.active').attr('id');
            var arr_img_id = split_img_id.split('-');
            var img_id = arr_img_id[(arr_img_id.length)-1]
            // $('.custom-sign-main-section .img-product-gallery-box img.active').modal('show');
            // alert(img_id);
            // alert("aaya");
            var table = $('#hid-'+img_id).val();
            $.ajax({
                url:"dynamic/get_good_vibes_data.php",
                type:"POST",
                data:{id:img_id, table:table},
                success:function(data){
                    result = JSON.parse(data);
                    console.log(result);
                    if(table != "new_designs_images"){
                        $('.image-title').html(result['title']);
                    }else{
                        $('.image-title').html(result['img_category']);
                    }
                    var discount_price = Math.round((result['price']*100)/80);
                    $('#actual_price').html(discount_price);
                    $('#disc_price').html(result['price']);
                    $('.image-description').html(result['description']);
                    $('#image-size').html("Size: "+result['size_width']+"ft width x "+result['size_height']+"ft height");
                }
            })

        });

        
        $('.custom-sign-main-section .img-product-gallery-box img').on('click', function(){
            $('.custom-sign-main-section .img-product-gallery-box img').removeClass('active')
            $(this).addClass('active')
            $('.custom-sign-main-section .img-section .img-visible-div img').attr('src', $(this).attr('src'));
            
            var split_img_id = $(this).attr('id');
            var arr_img_id = split_img_id.split('-');
            var img_id = arr_img_id[(arr_img_id.length)-1]
            // alert(img_id)
            var table = $('#hid-'+img_id).val();
            $.ajax({
                url:"dynamic/get_good_vibes_data.php",
                type:"POST",
                data:{id:img_id, table:table},
                success:function(data){
                    var result = JSON.parse(data);
                    console.log(result);
                    var discount_price = Math.round((result['price']*100)/80);
                    if($('#table_name').val() == "product"){
                        $('.image-title').html(result['product_title']);
                    }else{
                        $('.image-title').html(result['title']);
                    }
                    
                    $('#actual_price').html(discount_price);
                    $('#disc_price').html(result['price']);
                    $('.image-description').html(result['description']);
                    $('#image-size').html("Size: "+result['size_width']+"ft width x "+result['size_height']+"ft height");
                }
            })
            // var img_id = $('.hidden_id_image').attr('id');
            // var arr = img_id.split('_');
            // var id = arr[(arr.length)-1];
            // alert(id)
        })

        $('.latest-videos .latest-videos-box .latest-videos-play-button button').on('click', function(){
            $('.latest_videos_modal').modal('show');
            var btn_id = $(this).attr('id');
            var arr = btn_id.split("_");
            var id = arr[2];
            $.ajax({
                url:"dynamic/get_video.php",
                type:"POST",
                data:{id:id},
                // contentType: false,
                // processData: false,
                success:function(data){
                    // var result = $.parseJSON(data);
                    console.log(data);
                    var yt_code = data.split("=");
                    $('#latest_videos_modal_iframe').attr('src', 'https://www.youtube.com/embed/'+yt_code[1]);
                }
            })
        })

        $('#text_input').on('input', function(){
            console.log($('#text_input').prop('value'))
            $('.custom-sign-main-section .img-section .custom-text').html($('#text_input').prop('value'))
        })

        $('.custom-sign-main-section .right-content .options .color-box .color').on('click', function(){
            $('.custom-sign-main-section .right-content .options .color-box .color').removeClass('active')
            $(this).addClass('active')
            console.log($(this).css("background-color"))
            $('.custom-sign-main-section .img-section .custom-text').css({"color":$(this).css("background-color")})
            $('.custom-sign-main-section .img-section .custom-text').css({"text-shadow":"0px 0px 8px "+$(this).css("background-color")})
        })

        var swiper = new Swiper(".latest-videos-swiper", {
            // slidesPerView: 4,
            // spaceBetween: 30,
            navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
            },
            loop:true,
            breakpoints: {
            375: {
                slidesPerView: 1
            },
            768: {
                slidesPerView: 1
            },
            1024: {
                slidesPerView: 2
            },
            },
        });


        $('#whatsapp_link').on('click', function(e){
            e.preventDefault();
            var bright=0;
            var final_text=final_font="";
            var heading = $('.image-title').html();
            var price = $('#disc_price').html();
            var size = $('#image-size').html();
            var size_arr = size.split(':');
            var quality = "";
            $(".quality input").each(function(){
                if($(this).is(':checked')) { 
                    quality = $(this).val();
                }
            });

            if($('#brightness_checkbox').is(':checked')) { 
                bright = 1;
            }

            link="";
            if(bright == 1){
                link = "https://wa.me/+911203180706?text=*Text*%20:%20"+heading+"%0a*Price*%20:%20"+price+"%0a*Size*%20:"+size_arr[1]+"%0a*Quality*%20:%20"+quality+"%0a*Addons:*%0a1.%20Brightness%0a%0a*I%20want%20to%20buy%20this%20customised%20product*";
            }else{
                link = "https://wa.me/+911203180706?text=*Text*%20:%20"+heading+"%0a*Price*%20:%20"+price+"%0a*Size*%20:"+size_arr[1]+"%0a*Quality*%20:%20"+quality+"%0a%0a*I%20want%20to%20buy%20this%20customised%20product*";
            }
            window.location = link;
        });






        // Increase price
        var actual_price_fix = parseInt($('#actual_price').text());
        var disc_price_fix = parseInt($('#disc_price').text());
        $('.custom-sign-main-section .right-content .options .quality input').on('change', function(){
            var id = $(this).attr('id');
            var actual_price = 0;
            var disc_price = 0;
            if(id == "standard-price"){
                if($('#brightness_checkbox').checked){
                    actual_price = actual_price_fix + 2188;
                    disc_price = disc_price_fix + 1750;
                }else{
                    actual_price = actual_price_fix + 1688;
                    disc_price = disc_price_fix + 1350;
                }
            }else if(id == "premium-price" || id == "fancyflow-price"){
                if($('#brightness_checkbox').checked){
                    actual_price = actual_price_fix + 2610;
                    disc_price = disc_price_fix + 2188;
                }else{
                    actual_price = actual_price_fix + 2110;
                    disc_price = disc_price_fix + 1688;
                }
            }else if(id == "elite-price"){
                if($('#brightness_checkbox').checked){
                    actual_price = actual_price_fix + 3800;
                    disc_price = disc_price_fix + 3140;
                }else{
                    actual_price = actual_price_fix + 3300;
                    disc_price = disc_price_fix + 2640;
                }
            }
            $('#actual_price').html(actual_price)
            $('#disc_price').html(disc_price)
        })

        function brightness(checkbox){
            var actual_price = parseInt($('#actual_price').html());
            var disc_price = parseInt($('#disc_price').html());
            if(checkbox.checked){
                actual_price = actual_price + 500;
                disc_price = disc_price + 500;
                $('.custom-sign-main-section .img-section .img-visible-div img').css({"filter":"brightness(1.15)"});
            }else{
                actual_price = actual_price - 500;
                disc_price = disc_price - 500;
                $('.custom-sign-main-section .img-section .img-visible-div img').css({"filter":"brightness(1)"});
            }
            $('#actual_price').html(actual_price)
            $('#disc_price').html(disc_price)
        }



        $('#whatsapp_link').on('click', function(e){
            e.preventDefault();
            var bright=0;
            var text = $('.image-title').val();
            var color = $('.color-box div.active').attr('data-color');
            var font = $('#font_family_select').val();
            var size = $('#font_size_select').val();
            var email = $('#add_to_cart_hidden').val();
            var quality = "";
            $(".quality input").each(function(){
                if($(this).is(':checked')) { 
                    quality = $(this).val();
                }
            });

            if($('#brightness_checkbox').is(':checked')) { 
                bright = 1;
            }

            link="";
            if(bright == 1){
                link = "https://wa.me/+911203180706?text=*Customised%20Text*%20:%20"+text+"%0a*Color*%20:%20"+color+"%0a*Font*%20:%20"+font+"%0a*Size*%20:%20"+size+"%0a*Quality*%20:%20"+quality+"%0a*Addons:*%0a1.%20Brightness%0a%0a*I%20want%20to%20buy%20this%20customised%20product*";
                $.ajax({
                    url:"dynamic/add_to_cart_mail.php",
                    type:"POST",
                    data:{text:text, color:color, font:font, size:size, quality:quality, email:email},
                    success:function(data){
                        // alert(data)
                    }
                })
            }else{
                link = "https://wa.me/+911203180706?text=*Customised%20Text*%20:%20"+text+"%0a*Color*%20:%20"+color+"%0a*Font*%20:%20"+font+"%0a*Size*%20:%20"+size+"%0a*Quality*%20:%20"+quality+"%0a%0a*I%20want%20to%20buy%20this%20customised%20product*";
                $.ajax({
                    url:"dynamic/add_to_cart_mail.php",
                    type:"POST",
                    data:{text:text, color:color, font:font, size:size, quality:quality, email:email, bright:1},
                    success:function(data){
                        // alert(data)
                    }
                })
            }
            window.location = link;
        })



        $('.custom-sign-main-section .custom-sign-details .headings .why-us-text').on('click', function(){
            $(this).addClass('active');
            $('.custom-sign-main-section .custom-sign-details .headings .product-details-text').removeClass('active');
            $('.custom-sign-main-section .custom-sign-details .headings .what-in-pckj-text').removeClass('active');
            $('.custom-sign-main-section .custom-sign-details .headings .install-guide').removeClass('active');


            $('.custom-sign-main-section .custom-sign-details .content-div .why-us-content').css({"display":"block"});
            $('.custom-sign-main-section .custom-sign-details .content-div .product-details').css({"display":"none"});
            $('.custom-sign-main-section .custom-sign-details .content-div .package-details').css({"display":"none"});
            $('.custom-sign-main-section .custom-sign-details .content-div .installation-guide').css({"display":"none"});
        })


        $('.custom-sign-main-section .custom-sign-details .headings .product-details-text').on('click', function(){
            $(this).addClass('active');
            $('.custom-sign-main-section .custom-sign-details .headings .why-us-text').removeClass('active');
            $('.custom-sign-main-section .custom-sign-details .headings .what-in-pckj-text').removeClass('active');
            $('.custom-sign-main-section .custom-sign-details .headings .install-guide').removeClass('active');


            $('.custom-sign-main-section .custom-sign-details .content-div .why-us-content').css({"display":"none"});
            $('.custom-sign-main-section .custom-sign-details .content-div .product-details').css({"display":"block"});
            $('.custom-sign-main-section .custom-sign-details .content-div .package-details').css({"display":"none"});
            $('.custom-sign-main-section .custom-sign-details .content-div .installation-guide').css({"display":"none"});
        })


        $('.custom-sign-main-section .custom-sign-details .headings .what-in-pckj-text').on('click', function(){
            $(this).addClass('active');
            $('.custom-sign-main-section .custom-sign-details .headings .product-details-text').removeClass('active');
            $('.custom-sign-main-section .custom-sign-details .headings .why-us-text').removeClass('active');
            $('.custom-sign-main-section .custom-sign-details .headings .install-guide').removeClass('active');


            $('.custom-sign-main-section .custom-sign-details .content-div .why-us-content').css({"display":"none"});
            $('.custom-sign-main-section .custom-sign-details .content-div .product-details').css({"display":"none"});
            $('.custom-sign-main-section .custom-sign-details .content-div .package-details').css({"display":"block"});
            $('.custom-sign-main-section .custom-sign-details .content-div .installation-guide').css({"display":"none"});
        })


        $('.custom-sign-main-section .custom-sign-details .headings .install-guide').on('click', function(){
            $(this).addClass('active');
            $('.custom-sign-main-section .custom-sign-details .headings .product-details-text').removeClass('active');
            $('.custom-sign-main-section .custom-sign-details .headings .what-in-pckj-text').removeClass('active');
            $('.custom-sign-main-section .custom-sign-details .headings .why-us-text').removeClass('active');


            $('.custom-sign-main-section .custom-sign-details .content-div .why-us-content').css({"display":"none"});
            $('.custom-sign-main-section .custom-sign-details .content-div .product-details').css({"display":"none"});
            $('.custom-sign-main-section .custom-sign-details .content-div .package-details').css({"display":"none"});
            $('.custom-sign-main-section .custom-sign-details .content-div .installation-guide').css({"display":"block"});
        })
    </script>
</body>

</html>