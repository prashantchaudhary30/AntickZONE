<?php
    include "include/check_login.php";
    include "include/connection.php";
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
    ?>



   <div class="outer-container-home">


        <?php
            include "include/login_modal.php";
        ?>


        





        <!-- Home banner starts -->
        <div class="container-fluid home-banner-menu">

            <header class="laptop-menu home-laptop-menu container-fluid container-less px-0">
                <div class="container-fluid bg-black">
                    <div class="container p-1">
                        <p class="m-0 ps-2 text-white fw-bold text-center top-banner-text">FANCIEST SALE EVER: 15% OFF ON ALL ORDERS + FREE REMOTE CONTROLLER ON ORDERS ABOVE ₹5000</p>
                    </div>
                </div>

            
                <div class="container mt-2">
                    <div class="row">
                        <div class="col-md-3 text-white">
                            <a href="index.php" class="text-decoration-none text-white">
                                <h1 class="m-0"><strong>ANTICKZONE</strong></h1>
                            </a>
                        </div>

                        <div class="col-lg-6 col-md-8 d-flex justify-content-around align-items-center text-white">
                            <a href="index.php" class="selected">Home</a>
                            <a href="about.php" class="not-selected">About Us</a>
                            <a href="javascript:void" class="not-selected shop">Shop Collection <i class="fa-solid fa-caret-down"></i></a>
                            


                            <!-- <div class="row px-5"> -->
                            <div class="row dropdown-menu-open">
                                <div class="col-md-3 menu-box">
                                    <h4>Features 1</h4>

                                    <img src="img/menu_img.png" class="img-fluid w-100" alt="">
                                </div>

                                <div class="col-md-3 menu-box">
                                    <h4>Events</h4>

                                    <div class="options">
                                        <?php
                                            $select_events = "SELECT * FROM `shop` WHERE `category`='Events'";
                                            $run_events = mysqli_query($con, $select_events);
                                            if(mysqli_num_rows($run_events) > 0){
                                                while($row = mysqli_fetch_assoc($run_events)){
                                        ?>
                                                    <a href="explore.php?id=<?=$row['id']?>&title=Shop_Collection&table=shop_images"><?=$row['title']?></a>

                                        <?php
                                                }
                                            }
                                        ?>
                                    </div>
                                </div>

                                <div class="col-md-3 menu-box">
                                    <h4>Home</h4>

                                    <div class="options">
                                        <?php
                                            $select_home = "SELECT * FROM `shop` WHERE `category`='Home'";
                                            $run_home = mysqli_query($con, $select_home);
                                            if(mysqli_num_rows($run_home) > 0){
                                                while($row = mysqli_fetch_assoc($run_home)){
                                        ?>
                                                    <a href="explore.php?id=<?=$row['id']?>&title=Shop_Collection&table=shop_images"><?=$row['title']?></a>
                                        <?php
                                                }
                                            }
                                        ?>
                                    </div>
                                </div>

                                <div class="col-md-3 menu-box">
                                    <h4>Places</h4>

                                    <div class="options">
                                        <?php
                                            $select_places = "SELECT * FROM `shop` WHERE `category`='Places'";
                                            $run_places = mysqli_query($con, $select_places);
                                            if(mysqli_num_rows($run_places) > 0){
                                                while($row = mysqli_fetch_assoc($run_places)){
                                        ?>
                                                    <a href="explore.php?id=<?=$row['id']?>&title=Shop_Collection&table=shop_images"><?=$row['title']?></a>
                                        <?php
                                                }
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <a href="why_us.php" class="not-selected">Why Us</a>
                            <a href="index.php#latest-videos" class="not-selected">Videos</a>
                            <a href="contact_us.php" class="not-selected">Contact Us</a>
                        <!-- </div> -->
                        </div>

                        <div class="col-lg-3 col-md-1 d-flex justify-content-around align-items-center">
                            <div class="position-relative d-flex">
                                <i class="fa-solid fa-moon"></i>
                                <?php
                                    if($flag == 1){
                                ?>
                                        <a class="login-icon ms-2"><i class="fa-regular fa-circle-user"></i></a>
                                        <div class="row dropdown-menu-open-login pt-3">
                                            <div class="dropdown-menu-open-login-box">
                                                <a class="logout-button">Logout</a>
                                            </div>
                                        </div>
                                <?php
                                    }else{
                                ?>
                                        <a class="login-icon ms-2"><i class="fa-regular fa-circle-user"></i></a>
                                        <div class="row dropdown-menu-open-login pt-3">
                                            <div class="dropdown-menu-open-login-box">
                                                <a data-bs-toggle="modal" data-bs-target="#login_modal">Login</a>
                                            </div>
                                        </div>
                                <?php
                                    }
                                ?>
                            </div>

                            <div class="search">
                                <input type="text" placeholder="Search...">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <?php
                include "include/mobile_header.php";
            ?>

            <div class="home-banner">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 home-banner-box d-flex flex-column justify-content-center align-items-center text-white text-center">
                            <div class="customise-text">
                                <div class="lightbar"></div>
                                <div class="topLayer"></div>
                                <h1 class="m-0">Customise Your <strong>Neon Sign</strong></h1>
                            </div>

                            <p class="mt-3">Get yourself a Neon Light Sign that is customised according to your idea. WhatsApp or DM us now to get a quote for your design.</p>
                            
                            <a href="custom_neon_sign.php" class="text-decoration-none">
                                <button class="custumoise-own-design my-4">
                                    <i class="fa-solid fa-bolt-lightning"></i>
                                    <span class="ms-3">Customise Your Own Design</span>
                                </button>
                            </a>

                            <a href="https://wa.me/+911203180706?text=Hello,%20I%20want%20to%20customise%20one%20of%20your%20products" target="_blank" class="text-decoration-none">
                                <button class="whatsapp-customise">
                                    <i class="fa-brands fa-whatsapp"></i>
                                    <span class="ms-3"><strong>WhatsApp</strong> us to customise!</span>
                                </button>
                            </a>

                            <h3 class="my-4">OR</h3>

                            <a href="javascript:void()" class="text-decoration-none">
                                <button class="messenger-customise">
                                    <i class="fa-brands fa-facebook-messenger"></i>
                                    <span class="ms-3"><strong>Messenger</strong> us to customise!</span>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Home banner ends -->




        <!-- Best Selling products starts -->
        <div class="container-fluid best-selling-products">
            <div class="container">
                <h1>BEST SELLING PRODUCTS</h1>

                <div class="row">
                    <div class="swiper best-selling-products-swiper">
                        <div class="swiper-wrapper">
                            <?php
                                $select = "SELECT * FROM `product` WHERE `status`=1 LIMIT 8";
                                $run = mysqli_query($con, $select);
                                if(mysqli_num_rows($run) > 0){
                                    while($row = mysqli_fetch_assoc($run)){
                            ?>
                                        <div class="swiper-slide ps-5">
                                            <a href="" class="text-decoration-none">
                                                <div class="best-selling-products-box d-flex flex-column justify-content align-items-center p-2">
                                                    <img src="<?=$row['product_img']?>" class="img-fluid" alt="">
                                                    <h6 class="mt-2 mb-0 text-center text-black" style="height: 40px;"><?=$row['product_title']?></h6>
                                                    
                                                    <div class="cost d-flex justify-content-center mt-2">
                                                        <div class="actual-price">
                                                            <div class="actual-price-box d-flex justify-content-center align-items-center">
                                                                <i class="fa-solid fa-indian-rupee-sign"></i>
                                                                <?php
                                                                    $act_price = round(($row['price']*100)/80);
                                                                ?>
                                                                <span class="ms-2"><?=$act_price?></span>
                                                            </div>
                                                        </div>

                                                        <div class="final-price text-black ms-3">
                                                            <i class="fa-solid fa-indian-rupee-sign"></i>
                                                            <span class=""><?=$row['price']?></span>
                                                        </div>
                                                    </div>
                                                    
                                                    <a href="good_vibes_only.php?id=<?=$row['id']?>&table=product&category=bestproducts" class="w-100 text-decoration-none text-white"> 
                                                        <div class="button">BUY NOW</div>
                                                    </a> 
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
        <!-- Best Selling products ends -->




        <!-- Explore section starts -->
        <div class="container-fluid explore">
            <div class="container">
                <h1>EXPLORE</h1>

                <div class="row mt-5">
                    <div class="swiper explore-swiper">
                        <div class="swiper-wrapper">
                            <?php
                                $select_explore = "SELECT * FROM `product` WHERE `status`=1";
                                $run_explore = mysqli_query($con, $select_explore);
                                if(mysqli_num_rows($run_explore) > 0){
                                    while($row = mysqli_fetch_assoc($run_explore)){
                            ?>
                                        <div class="swiper-slide" pauseOnMouseEnter="true">
                                            <div class="explore-box d-flex flex-column justify-content align-items-center">
                                                <a href="explore.php?id=<?=$row['id']?>&table=product&title=Explore">
                                                    <?php
                                                        $arr = explode(',', $row['product_img']);
                                                        $count = sizeof($arr);
                                                    ?>
                                                            <img src="<?=$arr[0]?>" class="img-fluid" alt="">
                                                    <?php
                                                    ?>
                                                </a>
                                            </div>
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
        <!-- Explore section ends -->




        <!-- New Designs section starts -->
        <div class="container-fluid new-designs">
            <div class="container">
                <h1 class="text-center">NEW&nbsp;&nbsp;DESIGNS</h1>

                <div class="row">
                    
                    <?php
                        $select_new_designs_category = "SELECT * FROM `product` WHERE `status`=1 ORDER BY `id` DESC LIMIT 8";
                        $run_new_designs_category = mysqli_query($con, $select_new_designs_category);
                        if(mysqli_num_rows($run_new_designs_category) > 0){
                            while($row = mysqli_fetch_assoc($run_new_designs_category)){
                    ?>
                                <div class="col-md-3 p-2 mt-3">
                                    <div class="new-designs-box d-flex flex-column justify-content align-items-center p-2">
                                        <a class="w-100" href="good_vibes_only.php?id=<?=$row['id']?>&table=product&category=newdesign">
                                            <?php
                                                $arr = explode(',', $row['product_img']);
                                            ?>
                                                    <img src="<?=$arr[0]?>" class="img-fluid w-100 h-100" alt="">
                                            <?php
                                            ?>
                                        
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

                                            <div class="final-price text-black ms-3">
                                                <i class="fa-solid fa-indian-rupee-sign"></i>
                                                <span class=""><?=$row['price']?></span>
                                            </div>
                                        </div>
                                        
                                        <div class="rating mt-1">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                    </div>
                                </div>
                                
                    <?php
                            }
                        }
                    ?>
                            
                </div>
            </div>
        </div>
        <!-- New Designs section ends -->




        <!-- Happy Customers starts -->
        <div class="container-fluid happy-customers">
            <div class="container">
                <h3 class="text-center text-white mb-2">Over 5000+</h3>
                <h1 class="text-white mt-4">HAPPY&nbsp;&nbsp;CUSTOMERS</h1>

                <div class="row mt-5">
                    <div class="swiper happy-customers-swiper">
                        <div class="swiper-wrapper">
                            <?php
                                $select_customers = "SELECT * FROM `happy_customers` WHERE `status`=1";
                                $run_customers = mysqli_query($con, $select_customers);
                                if(mysqli_num_rows($run_customers) > 0){
                                    while($row = mysqli_fetch_assoc($run_customers)){
                            ?>
                                        <div class="swiper-slide">
                                            <div class="happy-customers-box d-flex flex-column justify-content align-items-center p-2">
                                                <img src="<?=$row['product_img']?>" class="img-fluid" alt="">
                                                <h5 class="mt-3 mb-0 text-white"><?=$row['product_title']?></h5>
                                                
                                                <!-- <div class="rating mt-1">
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star-half-stroke"></i>
                                                </div> -->
                                                <div class="rating mt-1">
                                                    <?php
                                                        for($i=1;$i<=(int)$row['rate'];$i++){                                                
                                                    ?>

                                                            <i class="fa-solid fa-star"></i>

                                                    <?php
                                                        }
                                                    ?>
                                                </div>

                                                <p class="text-center"><?=$row['review']?></p>
                                            </div>
                                        </div>
                            <?php
                                    }
                                }
                            ?>
                        </div>

                        <!-- <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Happy Customers ends -->




        <!-- Latest Videos starts -->
        <div id="latest-videos" class="container-fluid latest-videos">
            <div class="container">
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
        <!-- Best Selling products ends -->













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
        const signInBtn = document.getElementById("signIn");
        const signUpBtn = document.getElementById("signUp");
        const fistForm = document.getElementById("sign_up_form");
        const secondForm = document.getElementById("sign_in_form");
        const container = document.getElementById("login-container-box");

        signInBtn.addEventListener("click", () => {
            container.classList.remove("right-panel-active");
        });

        signUpBtn.addEventListener("click", () => {
            container.classList.add("right-panel-active");
        });

        fistForm.addEventListener("submit", (e) => e.preventDefault());
        secondForm.addEventListener("submit", (e) => e.preventDefault());

    </script>


    <script>
        $(document).ready(function(){
            $('.login-container-mobile .login-options .login-options-sign-in').on('click', function(){
                $('.login-container-mobile .login-options .login-options-sign-up').removeClass('active');
                $(this).addClass('active');
                $('.login-container-mobile .sign-in-mobile').css({"display":"block"})
                $('.login-container-mobile .sign-up-mobile').css({"display":"none"})
            })

            $('.login-container-mobile .login-options .login-options-sign-up').on('click', function(){
                $('.login-container-mobile .login-options .login-options-sign-in').removeClass('active');
                $(this).addClass('active');
                $('.login-container-mobile .sign-in-mobile').css({"display":"none"})
                $('.login-container-mobile .sign-up-mobile').css({"display":"block"})
            })

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

        
        $(window).on('load', function(){
            $('#login_modal').modal('show');
            // alert("aaya");
        });



        


        var swiper = new Swiper(".best-selling-products-swiper", {
            // slidesPerView: 4,
            // spaceBetween: 10,
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



        var swiper = new Swiper(".explore-swiper", {
            // slidesPerView: 4,
            // spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 500,
                disableOnInteraction: false,
            },
            loop:true,
            coverflowEffect: {
              rotate: 50,
              stretch: 0,
              depth: 100,
              modifier: 1,
              slideShadows: true,
            },
            effect: "coverflow",
            // grabCursor: true,
            centeredSlides: true,
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

        var mySwiper = document.querySelector('.explore-swiper').swiper;
        

        $(".explore-swiper").mouseenter(function() {
            mySwiper.autoplay.stop();
            console.log('slider stopped');
        });

        $(".explore-swiper").mouseleave(function() {
            mySwiper.autoplay.start();
            console.log('slider started');
        });

        
        var customersSwiper = document.querySelector('.happy-customers-swiper').swiper;
        $(".happy-customers-swiper").mouseenter(function() {
            customersSwiper.autoplay.stop();
            console.log('slider stopped');
        });

        $(".happy-customers-swiper").mouseleave(function() {
            customersSwiper.autoplay.start();
            console.log('slider started');
        });

        var swiper = new Swiper(".happy-customers-swiper", {
            // slidesPerView: 4,
            spaceBetween: 10,
            loop:true,
            autoplay: {
                delay: 1000,
                disableOnInteraction: false,
            },
            grabCursor: true,
            breakpoints: {
                375: {
                    slidesPerView: 1
                },
                768: {
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 4
                },
            }
        });

        var swiper = new Swiper(".latest-videos-swiper", {
            // slidesPerView: 4,
            // spaceBetween: 20,
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
                    slidesPerView: 2
                },
                1024: {
                    slidesPerView: 4
                },
            },
        });
    </script>
</body>

</html>