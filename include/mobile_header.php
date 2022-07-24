<div class="mobile-menu container-fluid p-0">
    <div class="container-fluid bg-black">
        <div class="container p-1">
            <p class="m-0 ps-2 text-white fw-bold text-center top-banner-text">Get 15% Off on your first order</p>
        </div>
    </div>

    <div class="d-flex justify-content-between align-items-center px-2">
        <div>
            <a href="index.php" class="text-decoration-none text-white">
                <h1 class="m-0 text-white"><strong>Antick</strong>Zone</h1>
            </a>
        </div>

        <div class="menu-div">
            <div class="toggle">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
</div>




<?php
    if($flag == 0){
?>
        <div id="mySidenav" class="sidenav">
            <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
            <a class="sidenav-Topic" href="index.php">Home</a>
            <a class="sidenav-Topic" href="about.php">About Us</a>
            <a class="sidenav-Topic shop_mobile">Shop Collection <i class="shop-icon-mobile ms-2 fa-solid fa-plus"></i></a>
            <div class="shop-coll-menu">
                <div class="menu_main">
                    <div class="d-flex justify-content-between align-items-center px-4">
                        <a class="sidenav-Topic-Menu">Events</a>
                    </div>

                    <div class="events-menu">
                        <?php
                            $select_events = "SELECT * FROM `shop` WHERE `category`='Events'";
                            $run_events = mysqli_query($con, $select_events);
                            if(mysqli_num_rows($run_events) > 0){
                                while($row = mysqli_fetch_assoc($run_events)){
                        ?>
                                    <a class="sidenav-Topic-Sub-Menu" href="explore.php?id=<?=$row['id']?>&title=Shop_Collection&table=shop_images"><?=$row['title']?></a>
                        <?php
                                }
                            }
                        ?>
                    </div>

                    <div class="d-flex justify-content-between align-items-center px-4">
                        <a class="sidenav-Topic-Menu">Home</a>
                    </div>

                    <div class="events-menu">
                        <?php
                            $select_events = "SELECT * FROM `shop` WHERE `category`='Home'";
                            $run_events = mysqli_query($con, $select_events);
                            if(mysqli_num_rows($run_events) > 0){
                                while($row = mysqli_fetch_assoc($run_events)){
                        ?>
                                    <a class="sidenav-Topic-Sub-Menu" href="explore.php?id=<?=$row['id']?>&title=Shop_Collection&table=shop_images"><?=$row['title']?></a>
                        <?php
                                }
                            }
                        ?>
                    </div>

                    <div class="d-flex justify-content-between align-items-center px-4">
                        <a class="sidenav-Topic-Menu">Places</a>
                    </div>

                    <div class="events-menu">
                        <?php
                            $select_events = "SELECT * FROM `shop` WHERE `category`='Places'";
                            $run_events = mysqli_query($con, $select_events);
                            if(mysqli_num_rows($run_events) > 0){
                                while($row = mysqli_fetch_assoc($run_events)){
                        ?>
                                    <a class="sidenav-Topic-Sub-Menu" href="explore.php?id=<?=$row['id']?>&title=Shop_Collection&table=shop_images"><?=$row['title']?></a>
                        <?php
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
            <a class="sidenav-Topic" href="why_us.php">Why Us</a>
            <a class="sidenav-Topic" href="index.php#latest-videos">Videos</a>
            <a class="sidenav-Topic" href="contact_us.php">Contact Us</a>
            <a class="sidenav-Topic login-button">Login</a>
        </div>
<?php
    }else{
?>
        <div id="mySidenav" class="sidenav">
            <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
            <a class="sidenav-Topic" href="index.php">Home</a>
            <a class="sidenav-Topic" href="about.php">About Us</a>
            <a class="sidenav-Topic shop_mobile">Shop Collection <i class="shop-icon-mobile ms-2 fa-solid fa-plus"></i></a>
            <div class="shop-coll-menu">
                <div class="menu_main">
                    <div class="d-flex justify-content-between align-items-center px-4">
                        <a class="sidenav-Topic-Menu">Events</a>
                    </div>

                    <div class="events-menu">
                        <?php
                            $select_events = "SELECT * FROM `shop` WHERE `category`='Events'";
                            $run_events = mysqli_query($con, $select_events);
                            if(mysqli_num_rows($run_events) > 0){
                                while($row = mysqli_fetch_assoc($run_events)){
                        ?>
                                    <a class="sidenav-Topic-Sub-Menu" href="explore.php?id=<?=$row['id']?>&title=Shop_Collection&table=shop_images"><?=$row['title']?></a>
                        <?php
                                }
                            }
                        ?>
                    </div>

                    <div class="d-flex justify-content-between align-items-center px-4">
                        <a class="sidenav-Topic-Menu">Home</a>
                    </div>

                    <div class="events-menu">
                        <?php
                            $select_events = "SELECT * FROM `shop` WHERE `category`='Home'";
                            $run_events = mysqli_query($con, $select_events);
                            if(mysqli_num_rows($run_events) > 0){
                                while($row = mysqli_fetch_assoc($run_events)){
                        ?>
                                    <a class="sidenav-Topic-Sub-Menu" href="explore.php?id=<?=$row['id']?>&title=Shop_Collection&table=shop_images"><?=$row['title']?></a>
                        <?php
                                }
                            }
                        ?>
                    </div>

                    <div class="d-flex justify-content-between align-items-center px-4">
                        <a class="sidenav-Topic-Menu">Places</a>
                    </div>

                    <div class="events-menu">
                        <?php
                            $select_events = "SELECT * FROM `shop` WHERE `category`='Places'";
                            $run_events = mysqli_query($con, $select_events);
                            if(mysqli_num_rows($run_events) > 0){
                                while($row = mysqli_fetch_assoc($run_events)){
                        ?>
                                    <a class="sidenav-Topic-Sub-Menu" href="explore.php?id=<?=$row['id']?>&title=Shop_Collection&table=shop_images"><?=$row['title']?></a>
                        <?php
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>
            <a class="sidenav-Topic" href="why_us.php">Why Us</a>
            <a class="sidenav-Topic" href="index.php#latest-videos">Videos</a>
            <a class="sidenav-Topic" href="contact_us.php">Contact Us</a>
            <a class="sidenav-Topic logout-button">Logout</a>
            
        </div>
<?php
    }
?>