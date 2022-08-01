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

<body>


    <?php
        // include "include/whatsapp_social_media.php";
        include "include/mobile_header.php";
        include "include/preloader.php";
        include "include/login_modal.php";
        include "include/whatsapp_social_media.php";
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
                            <a href="about.php" class="not-selected">About Us</a>
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
                            <a href="contact_us.php" class="selected">Contact Us</a>
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
                <h1 class="text-white"><span class="size-extra">C</span>ontact <span class="size-extra">U</span>s</h1>
            </div>
        </div>



        <div class="contact_us_sect container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 left-content d-flex flex-column justify-content-center align-items-center">
                        <div class="details w-100">
                            <a class="text-decoration-none text-black" href="tel:+919873906502">
                                <div class="details-box d-flex align-items-center mb-4">
                                    <div class="icon">
                                        <i class="fa-solid fa-phone"></i>
                                    </div>

                                    <div class="content ms-3">
                                        <h3 class="fw-bold">Phone</h3>
                                        <h6 class="phone-number m-0 fw-normal">+91 987 390 6502</h6>
                                    </div>
                                </div>
                            </a>


                            <a class="text-decoration-none text-black" href="https://wa.me/+911203180706?text=Hello,%20I'm%20interested%20in%20your%20product" target="_blank">
                                <div class="details-box d-flex align-items-center">
                                    <div class="icon">
                                        <i class="fa-brands fa-whatsapp whatsapp"></i>
                                    </div>

                                    <div class="content ms-3">
                                        <h3 class="fw-bold">Whatsapp</h3>
                                        <h6 class="m-0 fw-normal">We are always excited to chat!</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-7 right-content">
                        <form action="">
                            <div class="form-box">
                                <input type="text" placeholder="Name">
                            </div>

                            <div class="form-box">
                                <input type="email" placeholder="Email">
                            </div>

                            <div class="form-box">
                                <input type="tel" placeholder="Phone number">
                            </div>

                            <div class="form-box">
                                <textarea placeholder="Message"></textarea>
                            </div>

                            <div class="position-relative btn-div">
                                <button type="submit">SEND MESSAGE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>



        <div class="contact_us_map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7002.958854854706!2d77.41019769348526!3d28.645360244998912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cf02bc0971b6b%3A0x9288b77dfc0ec1e8!2sSector%2012%2C%20Pratap%20Vihar%2C%20Ghaziabad%2C%20Uttar%20Pradesh%20201009!5e0!3m2!1sen!2sin!4v1656615287474!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
</body>

</html>