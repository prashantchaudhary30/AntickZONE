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
    <title>Payments - ANTICKZONE</title>
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
        <?php
            include "include/header.php";
        ?>



        
        <section class="faqs">
            <div class="container">
                <div class="uppertext">
                    <p>We can ask for 10% advance for predesigned Neon Signs, those designs which are already on the website.</p>
                    <p>For custom Neon Sign designs, we take 50% advance before proceeding with the making of the order.</p>
                    <p>Fancelite takes advance because the Neon Signs are big in size and fragile, so the shipping costs are high. Also for the custom designs it’s completely necessary.</p>
                </div>

                <div class="account">
                    <h3 class="fw-bold">Our Official Payment Options</h3>
                    <h4 class="">Bank Account (IMPS/NEFT/RTGS/UPI)</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">AntickZone</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>A/C Number</td>
                                <td>41100183541</td>
                            </tr>

                            <tr>
                                <td>IFSC</td>
                                <td>SBIN0017739</td>
                            </tr>

                            <tr>
                                <td>@Account Type</td>
                                <td>Current A/C</td>
                            </tr>

                            <tr>
                                <td>Bank Name</td>
                                <td>State Bank of India</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="bhim mt-2">
                    <h4>BHIM UPI/Google Pay/PhonePe/PayTM UPI/Other UPI</h4>
                    <h5 class="fw-normal">UPI Address: </h5>
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