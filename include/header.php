<header class="laptop-menu laptop-menu-with-bg home-laptop-menu container-fluid container-less px-0">
    <div class="container-fluid bg-black">
        <div class="container p-1">
            <p class="m-0 ps-2 text-white fw-bold text-center top-banner-text">FANCIEST SALE EVER: 15% OFF ON ALL ORDERS + FREE REMOTE CONTROLLER ON ORDERS ABOVE ₹5000</p>
        </div>
    </div>


    <div class="container mt-2 px-5">
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