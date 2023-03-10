<x-site>
    <div class="body_content_wrapper position-relative">
        <!-- Our SigIn -->
        <section class="our-log-reg bgc-f5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-5 col-xxl-4 m-auto">
                        <div class="log_reg_form mt70-992">
                            <h2 class="title">Sign-In</h2>
                            <div class="login_form">
                                <form action="{{ route('api.login') }}" method="POST" class="x-submit" data-then="reload">
                                    <div class="mb-2 mr-sm-2">
                                        <label for="e_mail" class=form-label>Email</label>
                                        <input id="e_mail" name="email" type="email" class=form-control placeholder="Enter email address..." required>
                                    </div>
                                    <div class="form-group mb5">
                                        <label for="_password" class=form-label>Password</label>
                                        <input id="_password" name="password" type=password class=form-control placeholder="Enter Password..." required>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type=checkbox name="remember" class=custom-control-input id=remember_me>
                                        <label class=custom-control-label for=remember_me>Remember me</label>
                                        <a class="btn-fpswd float-end" href="#">Lost your password?</a>
                                    </div>
                                    <button type=submit class="btn btn-log btn-thm mt20">Login</button>
                                    <p class="text-center mb25 mt10">
                                        Don't have an account? <a href="{{ route('register') }}">Create account</a>
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
