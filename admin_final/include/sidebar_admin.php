<!-- Main Sidebar Container -->
<?php
    include "../include/connection.php";
    session_start();
    $username = $_SESSION['uname'];
    $password = $_SESSION['pwd'];
    $img = $_SESSION['img'];
?>
<aside style="top: 57px !important; min-height: 90.6% !important; background-color: #164373 !important;" class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <!-- <a href="starter.php" class="brand-link">
        <span class="brand-text font-weight-normal">Dashboard</span>
    </a> -->

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div style="border-bottom: 1px solid #fff !important;" class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="<?=$img?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="text-white d-block"><?=$username?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Dashboard -->
                <li class="nav-item menu-open">
                    <a href="starter.php" class="nav-link active" style="background-color: transparent;">
                        <i class="nav-icon text-white fas fa-tachometer-alt"></i>
                        <p class="text-white">Dashboard</p>
                    </a>
                    
                </li>

                <!-- Settings -->
                <li class="nav-item">
                    <a href="profile_settings.php" class="nav-link">
                        <i style="margin-left: 1px;" class="nav-icon text-white fa-solid fa-gear"></i>
                        <p style="margin-left: 0px;" class="text-white">Settings</p>
                    </a>
                    
                </li>

                <!-- Manage Products -->
                <li class="nav-item">
                    <a href="manage_products.php" class="nav-link">
                        <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                        <!-- <i class="text-white fa-light fa-grid-2"></i> -->
                        <i style="margin-left: 5px;" class="text-white fa-solid fa-cart-shopping"></i>
                        <p style="padding-left: 7px;" class="text-white ms-2">
                            Manage Products
                        </p>
                    </a>
                </li>



                <!-- Shop Collection -->
                <li class="nav-item">
                    <a href="shop_collection_categories.php" class="nav-link">
                        <!-- <i class="nav-icon fas fa-tachometer-alt"></i> -->
                        <!-- <i class="text-white fa-light fa-grid-2"></i> -->
                        <i style="margin-left: 4px;"class="text-white fa-solid fa-basket-shopping"></i>
                        <p style="padding-left: 7px;" class="text-white ms-2">
                            Shop Collection
                        </p>
                    </a>
                </li>



                <!-- New Designs -->
                <!-- <li class="nav-item">
                    <a href="new_designs_categories.php" class="nav-link">
                        <i style="margin-left: 5px;" class="text-white fas fa-th-large"></i>
                        <p style="padding-left: 7px;" class="text-white ms-2">
                            New Designs
                        </p>
                    </a>
                </li> -->


            
                <!-- Happy Customers -->
                <li class="nav-item">
                    <a href="happy_customers.php" class="nav-link">
                        <i class="text-white nav-icon fas fa-users"></i>
                        <p class="text-white">Happy Customers</p>
                    </a>
                </li>



                <!-- Latest Videos -->
                <li class="nav-item">
                    <a href="latest_videos.php" class="nav-link">
                        <i style="margin-left: 5px;" class="text-white fa-solid fa-video"></i>
                        <p style="margin-left: 7px;" class="text-white">Videos</p>
                    </a>
                </li>


                <!-- Subscribers -->
                <li class="nav-item">
                    <a href="subscribers.php" class="nav-link">
                        <i style="margin-left: 5px;" class="text-white fa-solid fa-user-group"></i>
                        <p style="margin-left: 4px;" class="text-white">Subscribers</p>
                    </a>
                </li>


                <!-- Subscribers -->
                <li class="nav-item">
                    <a href="javascript:void(0)" class="nav-link logout-btn-admin" onclick="logout()">
                        <i style="margin-left: 5px;" class="text-white fa-solid fa-arrow-right-to-bracket"></i>
                        <p style="margin-left: 7px;" class="text-white">Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>



















<script>
    

    // alert(arr[(arr.length)-1]);

    $(document).ready(function(){
        var g_url = window.location.href;
        var arr = g_url.split("/");
        $('.nav-link').each(function(){
            $(this).removeClass('active');
            // $(this).css({"background-color":"transparent"});
            // alert($(this).attr('href'));
            if($(this).attr('href') == arr[(arr.length)-1]){
                $(this).addClass('active');
            }
        })

        
    })


    function logout(){
        // alert(1)
        $.ajax({
            url:"dynamic/logout_admin.php",
            method:"POST",
            success:function(data){
                if(data == "1"){
                    swal("Good Job!", "Logged Out Successfuly!", "success").then((value) => {
                        window.location.href = "login.php";
                    });;
                    
                }else{
                    swal("Error!", "Something went wrong!!", "error");
                }
            }
        })
    }
</script>