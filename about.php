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
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-straight/css/uicons-solid-straight.css'>
</head>

<body class="custom-neon-body">


    <?php
        include "include/whatsapp_social_media.php";
        include "include/mobile_header.php";
        include "include/preloader.php";
        include "include/login_modal.php";
    ?>

    
    <div class="outer-container">
        <div class="menu_heading">
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
                            <a href="index.php" class="not-selected">Home</a>
                            <a href="about.php" class="selected">About Us</a>
                            <a href="javascript:void" class="not-selected shop">Shop Collection <i class="fa-solid fa-caret-down"></i></a>
                            


                            <div class="row dropdown-menu-open">
                                <div class="col-md-3 menu-box">
                                    <h4>Features 1</h4>

                                    <img src="https://res.cloudinary.com/antickzone/image/upload/v1659368612/menu_img_11zon_lmjvyf.jpg" class="img-fluid w-100" alt="">
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

            <div class="container heading">
                <h1 class="text-white"><span class="size-extra">A</span>bout <span class="size-extra">U</span>s</h1>
            </div>
        </div>



        
        <section class="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <p class="mb-3">We currently provide the best quality Neon Signs made from LED lights. We are not aiming for maximum revenue but maximum customer satisfaction and happiness. So our customers can proudly say, that they got their Neon Signs from ANTICKZONE whenever they flaunt them. Our Neon Signs are proudly made in India and have world-class product quality.</p>

                        <p class="mb-3">We do sell in US, UK, Canada, Europe & Australia through our Global website antickzone.com</p>

                        <p class="mb-3">Our team also give personal & expert opinions to customers ordering custom neon signs for the first time, so the final product makes the customer satisfied.</p>

                        <p class="mb-3">ANTICKZONE is an Indian company based in Noida (NCR), Uttar Pradesh, India.</p>

                        <h6>Why LED Neon Sign? Over Traditional Glass Neon Sign</h6>

                        <ul>
                            <li>It is much more flexible that glass neon, so there are lots of design possibilities.</li>
                            <li>It lasts for years and produces more vivid light</li>
                            <li>It costs less to produce, which means we can pass on the savings to our customers</li>
                            <li>It's better for the environment as uses much less energy to run</li>
                            <li>It's doesn't produce massive heat like traditional glass neons</li>
                        </ul>
                    </div>

                    <div class="col-md-5">
                        <img src="img/about.jpg" class="img-fluid animate__animated animate__bounce" alt="">
                    </div>
                </div>
            </div>
        </section>
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

    
</body>

</html>