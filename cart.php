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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
</head>

<body class="custom-neon-body">


    <?php
        include "include/whatsapp_social_media.php";
        include "include/mobile_header.php";
        include "include/preloader.php";
        include "include/login_modal.php";
    ?>




    
    <div class="outer-container">
        <!-- <div class="menu_heading"> -->
            <?php
                include "include/header.php";
            ?>
        <!-- </div> -->



        
        <div class="container-fluid cart-section">
            <div class="row">
                <div class="col-md-10 col-11 mx-auto">
                    <div class="row gx-3">
                        <!-- left side div -->
                        <div class="col-md-12 col-lg-8 col-11 mx-auto main_cart mb-lg-0 mb-5 shadow">
                            <div class="card p-4">
                                <h2 class="py-4 font-weight-bold">Cart (2 items)</h2>

                                <div class="row">
                                    <!-- cart images div -->
                                    <div class="col-md-5 col-11 mx-auto d-flex justify-content-start align-items-center product_img">
                                        <img src="img/cart-static.jpeg" class="img-fluid w-75" alt="cart img">
                                    </div>

                                    <!-- cart product details -->
                                    <div class="col-md-7 col-11 mx-auto px-4 mt-2">
                                        <div class="row">
                                            <!-- product name  -->
                                            <div class="col-md-6 col-12 card-title">
                                                <h1 class="mb-4 product_name">Neon Light</h1>
                                                <p class="mb-2">Size: 4mm</p>
                                                <p class="mb-3"></p>
                                            </div>
                                            <!-- quantity inc dec -->
                                            <div class="col-md-6 col-12">
                                                <ul class="pagination justify-content-end set_quantity">
                                                    <li class="page-item">
                                                        <button class="page-link "
                                                            onclick="decreaseNumber('textbox','itemval')">
                                                            <ion-icon name="remove-outline"></ion-icon>
                                                        </button>
                                                    </li>
                                                    <li class="page-item"><input type="text" name="" class="page-link"
                                                            value="0" id="textbox">
                                                    </li>
                                                    <li class="page-item">
                                                        <button class="page-link"
                                                            onclick="increaseNumber('textbox','itemval')">
                                                            <ion-icon name="add-outline"></ion-icon>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- //remover move and price -->
                                        <div class="row remove-price">
                                            <div class="col-md-8 col-12 d-flex justify-content-between remove_wish">
                                                <p>
                                                    <ion-icon name="trash-outline"></ion-icon>Remove
                                                </p>
                                                <p>
                                                    <ion-icon name="heart-outline"></ion-icon></i>Wish List
                                                </p>
                                            </div>
                                            <div class="col-md-4 col-12 d-flex justify-content-end price_money">
                                                <h3>&#8377<span id="itemval">0</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr />

                            <!-- 2nd cart product -->
                            <div class="card p-4">
                                <div class="row">
                                    <!-- cart images div -->
                                    <div class="col-md-5 col-11 mx-auto d-flex justify-content-start align-items-center product_img">
                                        <img src="img/cart-static.jpeg" class="img-fluid w-75" alt="cart img">
                                    </div>

                                    <!-- cart product details -->
                                    <div class="col-md-7 col-11 mx-auto px-4 mt-2">
                                        <div class="row">
                                            <!-- product name  -->
                                            <div class="col-md-6 col-12 card-title">
                                                <h1 class="mb-4 product_name">Neon Light</h1>
                                                <p class="mb-2">Size: 4mm</p>
                                                <p class="mb-3"></p>
                                            </div>
                                            <!-- quantity inc dec -->
                                            <div class="col-md-6 col-12">
                                                <ul class="pagination justify-content-end set_quantity">
                                                    <li class="page-item">
                                                        <button class="page-link "
                                                            onclick="decreaseNumber('textbox','itemval')">
                                                            <ion-icon name="remove-outline"></ion-icon>
                                                        </button>
                                                    </li>
                                                    <li class="page-item"><input type="text" name="" class="page-link"
                                                            value="0" id="textbox">
                                                    </li>
                                                    <li class="page-item">
                                                        <button class="page-link"
                                                            onclick="increaseNumber('textbox','itemval')">
                                                            <ion-icon name="add-outline"></ion-icon>
                                                        </button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>

                                        <!-- //remover move and price -->
                                        <div class="row remove-price">
                                            <div class="col-md-8 col-12 d-flex justify-content-between remove_wish">
                                                <p>
                                                    <ion-icon name="trash-outline"></ion-icon>Remove
                                                </p>
                                                <p>
                                                    <ion-icon name="heart-outline"></ion-icon></i>Wish List
                                                </p>
                                            </div>
                                            <div class="col-md-4 col-12 d-flex justify-content-end price_money">
                                                <h3>&#8377<span id="itemval">0</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- right side div -->
                        <div class="col-md-12 col-lg-4 col-11 mx-auto mt-lg-0 mt-md-5">
                            <div class="right_side p-3 shadow bg-white">
                                <h2 class="product_name mb-5">Total Amount</h2>
                                <div class="price_indiv d-flex justify-content-between">
                                    <p>Product amount</p>
                                    <p>&#8377<span id="product_total_amt">0.00</span></p>
                                </div>
                                <hr />
                                <div class="total-amt d-flex justify-content-between font-weight-bold">
                                    <p>Total amount of (including GST)</p>
                                    <p>&#8377<span id="total_cart_amt">0.00</span></p>
                                </div>
                                <button class="btn btn-primary text-uppercase">Checkout</button>
                            </div>

                            <!-- discount code part -->
                            <div class="discount_code mt-3 shadow">
                                <div class="card">
                                    <div class="card-body">
                                        <a class="d-flex justify-content-between text-decoration-none text-black" data-bs-toggle="collapse"
                                            href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                            Add a discount code (optional)
                                            <span>
                                                <ion-icon name="chevron-down-circle-outline"></ion-icon>
                                            </span>
                                        </a>
                                        <div class="collapse" id="collapseExample">
                                            <div class="mt-3">
                                                <input type="text" name="" id="discount_code1"
                                                    class="form-control font-weight-bold"
                                                    placeholder="Enter the discount code">
                                                <small id="error_trw" class="text-dark mt-3">Error</small>
                                            </div>
                                            <button class="btn btn-primary btn-sm mt-3"
                                                onclick="discount_code()">Apply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- discount code ends -->
                        </div>
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
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    <script src="js/cart.js"></script>


    <?php
        include "include/script.php";
    ?>
</body>

</html>