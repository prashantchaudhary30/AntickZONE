<script>
    window.addEventListener("scroll", function(){
        var header = document.querySelector("header")
        header.classList.toggle("sticky", window.scrollY > 0)
    })
    window.onload = function(){
        document.getElementById("container-spinner").style.display = "none";
        document.getElementById("outer-container-home").style.display = "block";
    }

    
    
    $(document).ready(function(){
        $('.shop_mobile').on('click', function(){
            $('.shop-coll-menu').toggleClass('active');
            if($(".shop-coll-menu").hasClass("active")){
                // alert("hai")
                $('.shop-coll-menu').css({"display":"block"});
                $('.shop-icon-mobile').removeClass("fa-plus");
                $('.shop-icon-mobile').addClass("fa-minus");
                // $('.shop-coll-menu').removeClass('active');
            }else{
                // alert("nahi hai")
                // $('.shop-coll-menu').css({"diaplay":"block"});
                $('.shop-coll-menu').css({"display":"none"});
                $('.shop-icon-mobile').removeClass("fa-minus");
                $('.shop-icon-mobile').addClass("fa-plus");
            }
        })
        $('.mobile-menu .toggle').click(function(){
            $('.mobile-menu .toggle').toggleClass('toggle-active')
        })

        $('.toggle').click(function(){
            if($('.toggle').hasClass("toggle-active")){
                $("#mySidenav").css({"width":"200px"})
            }else{
                $("#mySidenav").css({"width":"0px"})
                
            }
        })

        $('.logout-button').click(function(){
            $("#mySidenav").css({"width":"0px"})
        })

        $('.login-button').click(function(){
            $("#mySidenav").css({"width":"0px"})
            $('#login_modal').modal('show');
            $('.mobile-menu .toggle').removeClass('toggle-active')
        })
        
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


        $('#sign_up_form_mobile').on('submit', function(e){
            e.preventDefault();
            var formData = new FormData(this);
            if($('#sign_up_form_mobile #username_sign_up_mobile').val() != "" && $('#sign_up_form_mobile #phone_no_sign_up_mobile').val() != "" && $('#sign_up_form_mobile #email_sign_up_mobile').val() != "" && $('#sign_up_form_mobile #pwd_sign_up_mobile').val() != ""){
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
                                location.reload();
                                $('#login_modal').modal('hide');
                                // window.location.href = "index.php";
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



        $('#sign_in_form_mobile').on('submit', function(e){
            e.preventDefault();
            var formData = new FormData(this);
            if($('#sign_in_form_mobile #email_sign_in_mobile').val() != "" && $('#sign_in_form_mobile #pwd_sign_in_mobile').val() != ""){
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
                                location.reload();
                                // window.location.href = "index.php";
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

        // Logout working
        $('.logout-button').on('click', function(){
            $.ajax({
                url:"dynamic/logout.php",
                method:"POST",
                data:{"id":"1"},
                success:function(data){
                    if(data == "1"){
                        swal("Good Job!", "Logged Out Successfuly!", "success").then((value) => {
                            location.reload();
                        });;
                        
                    }else{
                        swal("Error!", "Something went wrong!!", "error");
                    }
                }
            })
        })



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

        // $(window).on('load', function(){
        //     $('#login_modal').modal('show');
        //     // alert("aaya");
        // });
    })

    $(window).load(function(){
        $('#spinner').fadeOut();
        // $('#loading-img').delay(150).fadeOut('slow');
    }),4000;

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




<!-- Login modal switching code -->
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