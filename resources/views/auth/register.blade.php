<x-site>
    <div class="body_content_wrapper position-relative">
        <!-- Our SigIn -->
        <section class="our-log-reg bgc-f5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-5 col-xxl-4 m-auto">
                        <div class="log_reg_form mt70-992">
                            <h2 class="title">Create your account</h2>
                            <div class="sign_up_form">
                                <form action=#>
                                    <div class=form-group>
                                        <label for="firstname" class=form-label>First Name</label>
                                        <input name="first_name" id="firstname" class=form-control required>
                                    </div>
                                    <div class=form-group>
                                        <label for="lastname" class=form-label>Last Name</label>
                                        <input name="last_name" id="lastname" class=form-control required>
                                    </div>
                                    <div class=form-group>
                                        <label for="user_name" class=form-label>Username</label>
                                        <input name="username" id="user_name" class=form-control required>
                                    </div>
                                    <div class=form-group>
                                        <label for="e_mail" class=form-label>Your Email</label>
                                        <input id="e_mail" name="email" type=email class=form-control required>
                                    </div>
                                    <div class=form-group>
                                        <label for="_gender" class=form-label>Gender</label>
                                        <select class="form-control" name="gender" id="_gender" required>
                                            <option value="M">male</option>
                                            <option value="F">female</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb20">
                                        <label for="_password" class=form-label>Password</label>
                                        <input id="_password" name="password" type=password class=form-control required>
                                    </div>
                                    <div class="form-group mb20">
                                        <label for="pass_word_confirmation" class=form-label>Confirm Password</label>
                                        <input id="pass_word_confirmation" name="password_confirmation" type=password class=form-control required>
                                    </div>
                                    <button type=submit class="btn btn-signup btn-thm">Create Account</button>
                                    <p class="text-center mb25 mt10">Already have an account? <a href="{{ route('login') }}">Sign in</a>

                                    </p>
                                    <div class=hr_content>
                                        <hr>
                                        <span class=hr_top_text>or</span>
                                    </div>
                                    <ul class="login_with_social text-center mt30 mb0">
                                        <li class=list-inline-item><a href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li class=list-inline-item><a href="#"><i class="fab fa-google"></i></a></li>
                                        <li class=list-inline-item><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li class=list-inline-item><a href="#"><i class="fab fa-apple"></i></a></li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</x-site>
