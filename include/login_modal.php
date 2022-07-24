<!-- Modal -->
        
<?php
    if($flag == 0){
?>
        <div class="modal fade login_modal_home" id="login_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
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
                                        <input id="email_sign_in" name="email_sign_in" placeholder="Email/Phone No." type="text" class="input" />
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
                                    <form id="sign_in_form_mobile" class="row">                        
                                        <div class="form-group col-md-12 mt-3">
                                            <input type="text" class="form-control" id="email_sign_in_mobile" name="email_sign_in"
                                                placeholder="Email/Phone No.">
                                        </div>

                                        <div class="form-group col-md-12 mt-3">
                                            <input type="password" class="form-control" id="pwd_sign_in_mobile" name="pwd_sign_in"
                                                placeholder="Password">
                                        </div>

                                        <div class="d-flex justify-content-center w-100 mt-3">
                                            <button class="btn btn-primary" name="sign_in" type="submit">Sign In</button>
                                        </div>
                                    </form>
                                </div>


                                <div class="sign-up-mobile">
                                    <form id="sign_up_form_mobile" class="row">                        
                                        <div class="form-group col-md-12 mt-3">
                                            <input type="text" class="form-control" id="username_sign_up_mobile" name="username_sign_up"
                                                placeholder="User name">
                                        </div>

                                        <div class="form-group col-md-12 mt-3">
                                            <input type="tel" class="form-control" id="phone_no_sign_up_mobile" name="phone_no_sign_up"
                                                placeholder="Phone no.">
                                        </div>

                                        <div class="form-group col-md-12 mt-3">
                                            <input type="email" class="form-control" id="email_sign_up_mobile" name="email_sign_up"
                                                placeholder="Email">
                                        </div>

                                        <div class="form-group col-md-12 mt-3">
                                            <input type="password" class="form-control" id="pwd_sign_up_mobile" name="pwd_sign_up"
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
                </div>
            </div>
        </div>
<?php
    }
?>