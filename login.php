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
        // include "include/header.php";
        include "include/preloader.php";
    ?>

        
    <div class="outer-container-home">
        <header class="laptop-menu home-laptop-menu container-fluid container-less">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 text-white">
                        <a href="index.php" class="text-decoration-none text-white">
                            <h1 class="m-0"><strong>Antick</strong>Zone</h1>
                        </a>
                    </div>

                    <div class="col-lg-6 col-md-8 d-flex justify-content-around align-items-center text-white">
                        <a href="index.php" class="not-selected">Home</a>
                        <a href="about.php" class="not-selected">About Us</a>
                        <a href="javascript:void" class="not-selected shop">Shop Collection <i class="fa-solid fa-caret-down"></i></a>
                        


                        <!-- <div class="row px-5"> -->
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
                        <i class="fa-solid fa-moon"></i>
                        <a href="login.php"><i class="fa-regular fa-circle-user"></i></a>
                        <div class="search">
                            <input type="text" placeholder="Search...">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="login-container w-100">
            <div id="login-container-box" class="container right-panel-active">
                <!-- Sign Up -->
                <div class="container__form container--signup">
                    <form method="post" class="form" id="sign_up_form">
                        <h2 class="form__title">Sign Up</h2>
                        <input id="username_sign_up" name="username_sign_up" type="text" placeholder="User name" class="input" />
                        <input id="phone_no_sign_up" name="phone_no_sign_up" type="tel" placeholder="Phone No." class="input" pattern="[1-9]{1}[0-9]{9}" />
                        <p class="text-danger mb-0 text-start">
                            <small class="phone_no_sign_upErr" id="phone_no_sign_upErr"></small>
                        </p>
                        <input onkeyup="subscribeEmail(this.value)" id="email_sign_up" name="email_sign_up" type="email" placeholder="Email" class="input" />
                        <p class="text-danger mb-0 text-start">
                            <small class="email_id_sign_upErr" id="email_id_sign_upErr"></small>
                        </p>
                        <input id="pwd_sign_up" name="pwd_sign_up" type="password" placeholder="Password" class="input" />
                        <button onclick="sign_up()" class="btn" name="sign_up_btn" id="sign_up_btn" type="submit">Sign Up</button>
                    </form>
                </div>

                <!-- Sign In -->
                <div class="container__form container--signin">
                    <form method="post" class="form" id="sign_in_form">
                        <h2 class="form__title">Sign In</h2>
                        <input id="email_sign_in" name="email_sign_in" placeholder="Email" type="email" class="input" />
                        <input id="pwd_sign_in" name="pwd_sign_in" type="password" placeholder="Password" class="input" />
                        <a href="#" class="link">Forgot your password?</a>
                        <button class="btn" name="sign_in" type="submit">Sign In</button>
                    </form>
                </div>

                <!-- Overlay -->
                <div class="container__overlay">
                    <div class="overlay">
                        <div class="overlay__panel overlay--left">
                            <button class="btn" id="signIn">Sign In</button>
                        </div>
                        <div class="overlay__panel overlay--right">
                            <button class="btn" id="signUp">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="login-container-mobile px-4">
            <div class="container bg-white p-3">
                <div class="login-options d-flex justify-content-center align-items-center">
                    <button class="active login-options-sign-in">Sign In</button>
                    <button class="login-options-sign-up">Sign Up</button>
                </div>

                <div class="sign-in-mobile">
                    <form id="" class="row">                        
                        <div class="form-group col-md-12 mt-3">
                            <input type="text" class="form-control" id="cat_name" name="cat_name"
                                placeholder="Email">
                        </div>

                        <div class="form-group col-md-12 mt-3">
                            <input type="text" class="form-control" id="cat_slug" name="cat_slug"
                                placeholder="Password">
                        </div>

                        <div class="d-flex justify-content-center w-100 mt-3">
                            <button class="btn btn-primary" name="sign_in" type="submit">Sign In</button>
                        </div>
                    </form>
                </div>


                <div class="sign-up-mobile">
                    <form id="" class="row">                        
                        <div class="form-group col-md-12 mt-3">
                            <input type="text" class="form-control" id="cat_name" name="cat_name"
                                placeholder="User name">
                        </div>

                        <div class="form-group col-md-12 mt-3">
                            <input type="tel" class="form-control" id="cat_slug" name="cat_slug"
                                placeholder="Phone no.">
                        </div>

                        <div class="form-group col-md-12 mt-3">
                            <input type="email" class="form-control" id="cat_name" name="cat_name"
                                placeholder="Email">
                        </div>

                        <div class="form-group col-md-12 mt-3">
                            <input type="password" class="form-control" id="cat_name" name="cat_name"
                                placeholder="Password">
                        </div>

                        <div class="d-flex justify-content-center w-100 mt-3">
                            <button class="btn btn-primary" name="sign_up" type="submit">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>



    <!-- Latest Videos starts -->
    
    <!-- Best Selling products ends -->




    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" ></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <?php
        include "include/script.php";
    ?>

    <script>
        const signInBtn = document.getElementById("signIn");
        const signUpBtn = document.getElementById("signUp");
        const fistForm = document.getElementById("sign_up_form");
        const secondForm = document.getElementById("form2");
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

            // Cannot type letters or alphabets in phone no.
            $('#phone_no_sign_up').on('input blur paste', function() {
                $(this).val($(this).val().replace(/\D/g, ''))
            })

            // Validation (phone no.)
            $('#phone_no_sign_up').on('keyup', function() {
         
                var firstLetter = ($(this).val()).charAt(0);
            
                if (($(this).val()).length != 10) {
                    $('#phone_no_sign_up').focus();
                    $('.phone_no_sign_upErr').text('Enter valid mobile Number')
                    if (firstLetter == '0' || firstLetter == '+') {
                        $('#phone_no_sign_up').focus();
                        $('.phone_no_sign_upErr').text('Not Required Country code OR 0')
                    }
            
            
                } else {
                    if (firstLetter == '1' || firstLetter == '2' || firstLetter == '3' || firstLetter == '4' || firstLetter == '5') {
                        $('#phone_no_sign_up').focus();
                        $('.phone_no_sign_upErr').text('Enter valid mobile Number.')
                            // alert(2)
                    } else if (firstLetter == '0' || firstLetter == '+') {
                        $('#phone_no_sign_up').focus();
                        $('.phone_no_sign_upErr').text('Not Required Country code OR 0')
                    } else {
                        $('.phone_no_sign_upErr').text('')
                    }
                }
            
            
            })

            $('#sign_up_form').on('submit', function(e){
                e.preventDefault();
                var formData = new FormData(this);
                if($('#sign_up_form #username_sign_up').val() != "" && $('#sign_up_form #phone_no_sign_up').val() != "" && $('#sign_up_form #email_sign_up').val() != "" && $('#sign_up_form #pwd_sign_up').val() != ""){
                    $.ajax({
                        url:"dynamic/sign_up.php",
                        type:"POST",
                        data:formData,
                        contentType: false,
                        processData: false,
                        success:function(data){
                            if(data == "1"){
                                swal("Good Job!", "User Registered Successfuly!", "success").then((value) => {
                                    location.reload();
                                });;
                            }else{
                                swal("Oh no!", "Something went wrong! Please try again!", "error").then((value) => {
                                    location.reload();
                                });;
                            }
                        }
                    })
                }else{
                    swal("Alert", "Please fill the entire form!!", "warning");
                }
                
            })



            $('#sign_in_form').on('submit', function(e){
                e.preventDefault();
                var formData = new FormData(this);
                if($('#sign_up_form #email_sign_in').val() != "" && $('#sign_up_form #pwd_sign_in').val() != ""){
                    $.ajax({
                        url:"dynamic/sign_in.php",
                        type:"POST",
                        data:formData,
                        contentType: false,
                        processData: false,
                        success:function(data){
                            if(data == "1"){
                                swal("Good Job!", "Logged In Successfuly!", "success").then((value) => {
                                    // window.location("index.php");
                                    window.location.href = "index.php";
                                });;
                                
                            }else{
                                swal("Not Found!", "Please fill valid user credentials!!", "error");
                            }
                        }
                    })
                }else{
                    swal("Alert", "Please fill the entire form!!", "warning");
                }
                
            })
        })

        function subscribeEmail(value){
            // alert(1)
            if(value.toLowerCase().match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/) != null){
                // alert("checked");
                document.getElementById("email_id_sign_upErr").innerHTML = ' ';
                // document.getElementById("subscribe_btn").style.cursor = "pointer";
                // document.getElementById("subscribe_btn").style.backgroundColor = "#ff005e";
            }else{
                document.getElementById("email_id_sign_upErr").innerHTML = 'Enter Valid Email Address';
            }
        }
    </script>
</body>

</html>