<?php
    include "include/check_login.php";
    include "include/connection.php";
    // echo $flag;
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
        <section class="custom-sign-main-section mt-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 left-content col-md-6">
                        <div class="img-section">
                            <div class="img-visible-div">
                                <img src="img/custom-neon-sign-1.png" class="img-fluid" alt="">
                                <p class="custom-text">Text Preview</p>
                            </div>

                            <div class="img-product-gallery">
                                <div class="swiper img-product-gallery-swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="img-product-gallery-box d-flex flex-column justify-content align-items-center">
                                                <img src="img/custom-neon-sign-1.png" class="img-fluid active" alt="">
                                            </div>
                                        </div>
                                        

                                        <div class="swiper-slide">
                                            <div class="img-product-gallery-box d-flex flex-column justify-content align-items-center">
                                                <img src="img/custom-neon-sign-2.png" class="img-fluid" alt="">
                                            </div>
                                        </div>


                                        <div class="swiper-slide">
                                            <div class="img-product-gallery-box d-flex flex-column justify-content align-items-center">
                                                <img src="img/custom-neon-sign-3.png" class="img-fluid" alt="">
                                            </div>
                                        </div>


                                        <div class="swiper-slide">
                                            <div class="img-product-gallery-box d-flex flex-column justify-content align-items-center">
                                                <img src="img/custom-neon-sign-4.png" class="img-fluid" alt="">
                                            </div>
                                        </div>


                                        <div class="swiper-slide">
                                            <div class="img-product-gallery-box d-flex flex-column justify-content align-items-center">
                                                <img src="img/custom-neon-sign-5.png" class="img-fluid" alt="">
                                            </div>
                                        </div>


                                        <div class="swiper-slide">
                                            <div class="img-product-gallery-box d-flex flex-column justify-content align-items-center">
                                                <img src="img/custom-neon-sign-6.png" class="img-fluid" alt="">
                                            </div>
                                        </div>


                                        <div class="swiper-slide">
                                            <div class="img-product-gallery-box d-flex flex-column justify-content align-items-center">
                                                <img src="img/custom-neon-sign-7.png" class="img-fluid" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid latest-videos mt-5">
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
                                                            <img src="<?=$row['thumbnail']?>" class="img-fluid w-100" alt="">    
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

                    <div class="col-lg-6 right-content col-md-6">
                        <h1>Custom Neon Light Sign</h1>

                        <div class="cost d-flex mt-2">
                            <div class="final-price text-black">
                                <i class="fa-solid fa-indian-rupee-sign"></i>
                                <span class="" id="disc_price">00</span>
                            </div>
                        </div>

                        <p id="image-size" class="fw-bold fs-5">Width: <span id="width">0</span> inch&nbsp;&nbsp;|&nbsp;&nbsp;Height: <span id="height">0</span> inch</p>
                        
                        <p class="min_size mt-2">The minimum size for this product is 1ft width × 1ft height, and can be further customised on demand.</p>

                        <div class="options">
                            <div class="mt-4 text">
                                <h5>Enter Text</h5>
                                <!-- <input class="form-control" maxlength="18" id="text_input" value="Custom Text" type="text"> -->
                                <!-- <textarea class="form-control" rows = "3" cols = "10" maxlength = "20" name = "description">Enter answer here...</textarea> -->
                                <!-- <textarea class="form-control" data-parsley-minlength="1" data-parsley-maxlength="75" maxlength="78" id="text_input" value="Custom Text"></textarea> -->
                                <!-- <textarea class="form-control uni_cpo_text2-field js-uni-cpo-field js-uni-cpo-field-text_area" id="uni_cpo_text2-field" name="uni_cpo_text2" data-parsley-trigger="change focusout submit" data-parsley-minlength="1" data-parsley-maxlength="75">Custom Text</textarea> -->
                                <textarea class="form-control" id="text_input" rows = "3" placeholder="Text Preview"></textarea>
                            </div>

                            <div class="mt-4 color-box">
                                <h5>Choose your color</h5>
                                
                                <div class="d-flex">
                                    <div style="background-color: #FF368D" data-color="Pink" class="color active"></div>
                                    <div style="background-color: #ffffff" data-color="White" class="color"></div>
                                    <div style="background-color: #FCF6DE" data-color="Warm White" class="color"></div>
                                    <div style="background-color: #A808FF" data-color="Purple" class="color"></div>
                                    <div style="background-color: #ED2113" data-color="Red" class="color"></div>
                                    <div style="background-color: #FF7A29" data-color="Orange" class="color"></div>
                                    <div style="background-color: #040FDB" data-color="Dark Blue" class="color"></div>
                                    <div style="background-color: #02BF37" data-color="Green" class="color"></div>
                                    <div style="background-color: #06CDFF" data-color="Light Blue" class="color"></div>
                                    <div style="background-color: #FAC848" data-color="Light Yellow" class="color"></div>
                                </div>
                            </div>

                            <div class="mt-4 font">
                                <h5>Choose your font</h5>
                                <select class="w-100" id="font_family_select">
                                    <option style="font-family: Dancing Script;" value="Dancing Script">Dancing Script</option>
                                    <option style="font-family: Brittany Signature Regular;" value="Brittany Signature Regular">Brittany Signature</option>
                                    <option style="font-family: Grayscale Signature;" value="Grayscale Signature">Grayscale Signature</option>
                                    <option style="font-family: City Streetwear;" value="City Streetwear">City Streetwear</option>
                                    <option style="font-family: Bath Oliver;" value="Bath Oliver">Bath Oliver</option>
                                    <option style="font-family: SilverSouthScriptAlt;" value="SilverSouthScriptAlt">Young</option>
                                    <option style="font-family: Rocket Clouds DEMO;" value="Rocket Clouds DEMO">Rocket Clouds DEMO</option>
                                    <option style="font-family: Gods own junkyard;" value="Gods own junkyard">GODSOWNJUNKYARD</option>
                                    <option style="font-family: Klaxons;" value="Klaxons">Klaxons</option>
                                    <option style="font-family: Bath Oliver;" value="Bath Oliver">Bath Oliver</option>
                                    <option style="font-family: Quicksand Book;" value="Quicksand Book">Circular</option>
                                    <option style="font-family: Walter;" value="Walter">Walter</option>
                                    
                                    <option style="font-family: VOLACROME;" value="VOLACROME">VOLACROME</option>
                                    <option style="font-family: Billabong;" value="Billabong">Billabong</option>
                                    <option style="font-family: Windtalker;" value="Windtalker">Windtalker</option>
                                    <option style="font-family: Neoneon;" value="Neoneon">Neoneon</option>
                                    <option style="font-family: Bebas;" value="Bebas">Bebas</option>
                                    <option style="font-family: Courier New;" value="Courier New">Courier</option>
                                    <option style="font-family: Modern;" value="Modern">Modern</option>
                                    <option style="font-family: Ellisa;" value="Ellisa">Ellisa</option>
                                    <option style="font-family: Etheriq Medium;" value="Etheriq Medium">Etheriq</option>
                                    <option style="font-family: Palm Beach Script Clean;" value="Palm Beach Script Clean">Palm Beach Script</option>
                                    <option style="font-family: LaurenScript;" value="LaurenScript">LaurenScript</option>
                                    <option style="font-family: Adinda Melia;" value="Adinda Melia">Adinda Melia</option>
                                    <option style="font-family: Beachbank;" value="Beachbank">Beachbank</option>
                                    <option style="font-family: BlinkStones;" value="BlinkStones">BlinkStones</option>
                                    <option style="font-family: Brock Script;" value="Brock Script">Brock Script</option>
                                    <option style="font-family: Button Shield Personal Use Only;" value="Button Shield Personal Use Only">Button Shield Personal Use Only</option>
                                    <option style="font-family: Ruge Boogie;" value="Ruge Boogie">Ruge Boogie</option>
                                    <option style="font-family: Sofia;" value="Sofia">Sofia</option>
                                    <option style="font-family: Walter;" value="Walter">Walter Regular<option>
                                    <option style="font-family: Stencil;" value="Stencil">Stencil</option>
                                    <option style="font-family: Boggie;" value="Boggie">Boggie</option>
                                    
                                    <option style="font-family: Bodoni MT;" value="Bodoni MT">Bodoni MT</option>
                                    
                                    <option style="font-family: Poppins;" value="Poppins">Poppins</option>
                                    <option style="font-family: Raleway;" value="Raleway">Raleway</option>
                                    <option style="font-family: Arial;" value="Arial">Arial</option>
                                    <option style="font-family: Roboto;" value="Roboto">Roboto</option>
                                </select>
                            </div>

                            <div class="mt-4 font">
                                <h5>Choose your size</h5>
                                <select id="font_size_select" class="w-100">
                                    <option value="12px">12px</option>
                                    <option value="14px">14px</option>
                                    <option value="18px">18px</option>
                                    <option value="22px">22px</option>
                                    <option value="24px">24px</option>
                                    <option value="28px">28px</option>
                                    <option value="30px" selected>30px</option>
                                    <option value="32px">32px</option>
                                    <option value="36px">36px</option>
                                    <option value="40px">40px</option>
                                    <option value="42px">42px</option>
                                    <option value="46px">46px</option>
                                    <option value="48px">48px</option>
                                    <option value="54px">54px</option>
                                    <option value="60px">60px</option>
                                </select>
                            </div>

                            <div class="mt-4 quality">
                                <h5>Quality</h5>
                                
                                <div class="d-flex align-items-center">
                                    <input value="Standard [4MM - Best-in-class]" type="radio" name="quality_radio" id="standard-price" checked="checked">
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

                            <!-- <div class="rate-review">
                                <h5>Rate and Review (Optional)</h5>
                                
                                <div class="rate-review-box d-flex align-items-center ">
                                    <button id="rate_1">
                                        <img src="img/star_ns.svg" alt="">
                                    </button>

                                    <button id="rate_2">
                                        <img src="img/star_ns.svg" alt="">
                                    </button>

                                    <button id="rate_3">
                                        <img src="img/star_ns.svg" alt="">
                                    </button>

                                    <button id="rate_4">
                                        <img src="img/star_ns.svg" alt="">
                                    </button>

                                    <button id="rate_5">
                                        <img src="img/star_ns.svg" alt="">
                                    </button>

                                    <button id="submit_rate_review" class="submit_rate_review">Submit</button>
                                    <span id="span"></span>
                                </div>
                            </div> -->

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

                        <div class="delivery-box d-flex p-3 mt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa-solid fa-truck"></i>
                            </div>

                            <div class="ms-3">
                                <p class="mb-0">Place your order within <strong id="time_to_12">07 hours and 39 minutes</strong> to receive the product before 
                                <strong id="get_today_date" data-date="<?php echo date('d M, Y')?> 24:00:00">
                                    <?php
                                        $date = date("d");
                                        $month = date("M");
                                        $year = strtotime("+8 days");
                                        echo date('M d, Y', $year);
                                    ?>
                                    <!-- July 14, 2022 -->
                                </strong></p>
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
                            <img src="img/custom-sign-detail-img.png" class="img-fluid w-75" alt="">
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



    <!-- Latest Videos starts -->
    
    <!-- Best Selling products ends -->




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
            slidesPerView: 6,
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
                slidesPerView: 3
            },
            1024: {
                slidesPerView: 4
            },
            1200: {
                slidesPerView: 5
            },
            },
        });

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

        $(document).ready(function(){
            $('.custom-sign-main-section .img-product-gallery-box img').on('click', function(){
                $('.custom-sign-main-section .img-product-gallery-box img').removeClass('active')
                $(this).addClass('active')
                $('.custom-sign-main-section .img-section .img-visible-div img').attr('src', $(this).attr('src'))
            })

            $('#text_input').on('input', function(){
                var data = $('#text_input').prop('value')
                var price = 0;
                var width=0;
                var height=0;
                for(i=1;i<=data.length;i++){
                    if(i == 1){
                        price = 1400;
                    }else{
                        price = price + 200;
                    }
                }
                $('#disc_price').html(price)
                $('.custom-sign-main-section .img-section .custom-text').html(data)
            })

            // $('#text_input').on('keyup', function(e){
            //     var evt = e ? e : event;
            //     if ((evt.keyCode && evt.keyCode != 13) || evt.which != 13)
            //         return;
            //     var elm = evt.target ? evt.target : evt.srcElement;
            //     var lines = elm.value.split("\n");
            //     for (var i = 0; i < lines.length; i++)
            //         lines[i] = lines[i].replace(/(\d+\.\s|^)/,"");
            //     elm.value = lines.join("\n");
            //     console.log(lines.length);
            // })

            $('.custom-sign-main-section .right-content .options .color-box .color').on('click', function(){
                $('.custom-sign-main-section .right-content .options .color-box .color').removeClass('active')
                $(this).addClass('active')
                console.log($(this).css("background-color"))
                $('.custom-sign-main-section .img-section .custom-text').css({"color":$(this).css("background-color")})
                $('.custom-sign-main-section .img-section .custom-text').css({"text-shadow":"0px 0px 8px "+$(this).css("background-color")})
            })

            $('.font_options_dropdown').on('keyup', function(){
                alert(1)
            })

            $('#font_size_select').on('change', function() {
                var value = $(this).val();
                $('.custom-sign-main-section .img-section .custom-text').css({"font-size":value})
            });

            $('#font_family_select').on('change', function() {
                var value = $(this).val();
                $('.custom-sign-main-section .img-section .custom-text').css({"font-family":value})
                $(this).css({"font-family":$('.custom-sign-main-section .img-section .custom-text').css("font-family")})
            });

            $('#rate_1').on('click', function(){
                $('#rate_1 img').attr('src', 'img/star_s.svg')
                $('#rate_2 img').attr('src', 'img/star_ns.svg')
                $('#rate_3 img').attr('src', 'img/star_ns.svg')
                $('#rate_4 img').attr('src', 'img/star_ns.svg')
                $('#rate_5 img').attr('src', 'img/star_ns.svg')
            })

            $('#rate_2').on('click', function(){
                $('#rate_1 img').attr('src', 'img/star_s.svg')
                $('#rate_2 img').attr('src', 'img/star_s.svg')
                $('#rate_3 img').attr('src', 'img/star_ns.svg')
                $('#rate_4 img').attr('src', 'img/star_ns.svg')
                $('#rate_5 img').attr('src', 'img/star_ns.svg')
            })

            $('#rate_3').on('click', function(){
                $('#rate_1 img').attr('src', 'img/star_s.svg')
                $('#rate_2 img').attr('src', 'img/star_s.svg')
                $('#rate_3 img').attr('src', 'img/star_s.svg')
                $('#rate_4 img').attr('src', 'img/star_ns.svg')
                $('#rate_5 img').attr('src', 'img/star_ns.svg')
            })

            $('#rate_4').on('click', function(){
                $('#rate_1 img').attr('src', 'img/star_s.svg')
                $('#rate_2 img').attr('src', 'img/star_s.svg')
                $('#rate_3 img').attr('src', 'img/star_s.svg')
                $('#rate_4 img').attr('src', 'img/star_s.svg')
                $('#rate_5 img').attr('src', 'img/star_ns.svg')
            })

            $('#rate_5').on('click', function(){
                $('#rate_1 img').attr('src', 'img/star_s.svg')
                $('#rate_2 img').attr('src', 'img/star_s.svg')
                $('#rate_3 img').attr('src', 'img/star_s.svg')
                $('#rate_4 img').attr('src', 'img/star_s.svg')
                $('#rate_5 img').attr('src', 'img/star_s.svg')
            })

            $('#submit_rate_review').on('click', function(){
                $('#span').html('Thanks')
            })


            var maxLength = 20;
            var mawRow = 3;

            $('#text_input').on('input keydown keyup', function() {
                var text = $(this).val();

                // Total no. of lines code starts
                var lines = text.split("\n");

                for (var i = 0; i < lines.length; i++) {
                    if (lines[i].length > maxLength) {
                        lines[i] = lines[i].substring(0, maxLength);
                    }     
                }
                // Total no. of lines code ends



                // price code starts
                var price = 0;
                var count = 0;
                for(i=0;i<lines.length;i++){
                    for(j=0;j<lines[i].length;j++){
                        if(lines[i][j] != ' '){
                            count = count + 1
                        }
                    }
                }
                if(count == 1){
                    price = 1400;
                }else if(count == 0){
                    price = 0;
                }else{
                    price = 1400 + (count-1)*200;
                }
                $('#disc_price').html(price)
                // Price code ends



                // Width code starts
                max=0
                // console.log(lines[0].length)
                for(i=0;i<lines.length;i++){
                    count_lines=0
                    for(j=0;j<lines[i].length;j++){
                        if(lines[i][j] != ' '){
                            count_lines = count_lines + 1
                        }
                    }
                    if(count_lines > max){
                        max = count_lines
                    }
                }
                width = 3.5 * max
                $('#width').html(width)
                // Width code ends
                
                
                // Height code starts
                total_lines=0
                for(i=0;i<lines.length;i++){
                    if(lines[i] != ''){
                        total_lines = total_lines + 1;
                    }
                }
                height = 10 * total_lines
                $('#height').html(height)
                // Height code ends



                // 4 lines se zyada nahi likh sakte code starts
                while (lines.length > 4){    
                    lines.pop();
                }
                $(this).val(lines.join("\n"));
                // 4 lines se zyada nahi likh sakte code ends
            });



            // Latest videos work
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




        var actual_price_fixed = 1499;
        var disc_price_fixed = 1349;
        var actual_price = 1499;
        var disc_price = 1349;
        // Increase price
        $('.custom-sign-main-section .right-content .options .quality input').on('change', function(){
            var id = $(this).attr('id');
            if(id == "standard-price"){
                if($('#brightness_checkbox').checked){
                    actual_price = Math.round(((1250*1*100)/80) + 500);
                    disc_price = Math.round((1250*1) + 500);
                }else{
                    actual_price = Math.round((1250*1*100)/80);
                    disc_price = Math.round((1250*1));
                }
            }else if(id == "premium-price"){
                if($('#brightness_checkbox').checked){
                    actual_price = Math.round(((1650*1*100)/80) + 500);
                    disc_price = Math.round((1650*1) + 500);
                }else{
                    actual_price = Math.round((1650*1*100)/80);
                    disc_price = Math.round((1650*1));
                }
            }else if(id == "fancyflow-price"){
                if($('#brightness_checkbox').checked){
                    actual_price = Math.round(((2565*1*100)/80) + 500);
                    disc_price = Math.round((2565*1) + 500);
                }else{
                    actual_price = Math.round((2565*1*100)/80);
                    disc_price = Math.round((2565*1));
                }
            }else if(id == "elite-price"){
                if($('#brightness_checkbox').checked){
                    actual_price = Math.round(((((2565*1*100)/80) + 500)*11)/10);
                    disc_price = Math.round((((2565*1)*11)/10) + 500);
                }else{
                    actual_price = Math.round(((((2565*1)*11)/10)*100)/80);
                    disc_price = Math.round(((2565*1)*11)/10);
                }
            }
            $('#actual_price').html(actual_price)
            $('#disc_price').html(disc_price)
        })

        function brightness(checkbox){
            if(checkbox.checked){
                actual_price = actual_price + 500;
                disc_price = disc_price + 500;
                $('.custom-sign-main-section .img-section .img-visible-div img').css({"filter":"brightness(1.1)"});
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
            var final_text=final_font="";
            var text = $('#text_input').val();
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
                        alert(data)
                    }
                })
            }else{
                link = "https://wa.me/+911203180706?text=*Customised%20Text*%20:%20"+text+"%0a*Color*%20:%20"+color+"%0a*Font*%20:%20"+font+"%0a*Size*%20:%20"+size+"%0a*Quality*%20:%20"+quality+"%0a%0a*I%20want%20to%20buy%20this%20customised%20product*";
                $.ajax({
                    url:"dynamic/add_to_cart_mail.php",
                    type:"POST",
                    data:{text:text, color:color, font:font, size:size, quality:quality, email:email, bright:1},
                    success:function(data){
                        alert(data)
                    }
                })
            }
            window.location = link;
        })


        // Set the date we're counting down to
        var data = document.getElementById("get_today_date").getAttribute('data-date');
        var countDownDate = new Date(data).getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

        // Get today's date and time
        var now = new Date().getTime();

        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("time_to_12").innerHTML = hours + " hours and " + minutes + " minutes";

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("time_to_12").innerHTML = "EXPIRED";
        }
        }, 1000);




















        // Custom neon sign work starts
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