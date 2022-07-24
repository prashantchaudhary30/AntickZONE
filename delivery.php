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
    <title>Shipping & Delivery - ANTICKZONE</title>
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



        
        <section class="return_policy">
            <div class="container">
                <p class="content">We are using multiple courier services like BlueDart, Delhivery, FEDEX, EcomExpress, Ship Rocket, etc for shipping. All the orders take 2-7 days on average to reach the customer in India. You can contact the support anytime to know the location of your order or check with the tracking code provided.</p>
                
                <p class="content">Neon LED Signs need 2-4 days for making and then 2-7 days for delivery. In total, it can take 2-11 days for you to receive the product after the order is confirmed.</p>
                
                <p class="content">Delivery in Delhi NCR can be fast, as we are based there.</p>
                
                <p class="content">Edits and design confirmations can take extra time as we will be talking with you to make the best possible product.</p>

                <p class="heading mb-1">COVID-19 DELIVERY DELAYS</p>

                <p class="content">THERE WILL BE NO REFUND OF THE ADVANCE, IF THE ORDER IS DELAYED DUE TO LOCKDOWNS IN SPECIFIC STATES OR ALL OVER INDIA. BUT WE WILL DEFINITELY DELIVER YOUR ORDER IF WE CAN DELIVER IT. YOUR ORDERS WILL BE SAFE WITH US!</p>

                <p class="content">IF WE HAVEN'T STARTED MAKING YOUR ORDER, THEN WE CAN MAYBE REFUND AS WELL. BETTER BE IN CONTACT WITH SUPPORT TEAM. [<a href="contact_us.php" class="text-decoration-none">CONTACT US</a>]</p>

                <p class="heading mb-1">What if you don't receive the order on time?</p>

                <p class="content">We don't delay orders on purpose, but there must be solid reason for the delay. It's very rare, that the orders get delayed. But the reasons for delay can be holidays, shipping company delays, custom packaging for bigger or non-standard sizes etc. Our team are always in contact with the customers, we definitely settle most cases by providing the best service.</p>

                <p class="content">We cannot refund the order, if the order doesn't arrive on your desired date. Neon LED Signs are mostly made after the order is received.</p>
                
                <p class="heading mb-1">If the order didn't arrive on the deadline (birthday, wedding, etc) but late by a day or two.</p>
                
                <p class="content">We don't take super close deadline orders usually. But even if you really want to order in such cases (<span class="text-decoration-underline">example: you're ordering for a friend's birthday which is just 1 week later</span>) In such case, the risk is completely on you, but we will try our best and put the order on priority to deliver it on time.</p>

                <p class="heading mb-1">We provide the best after sales support in the whole world.</p>

                <p class="content">You can even try that now! Just message us a simple, “Hi.” on our social media on mail support. Believe us, you will get a super friendly, intelligent and caring person at the other end.</p>
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