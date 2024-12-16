        <!-- Header -->
        <?php include 'include/header.php'; ?>




        <section id="auth">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-md-12 offset-md-0">
                        <div class="login_register">
                            <h3 class="section-heading">Sign In</h3>
                            <form>
                                <input type="hidden" name="_token" value="d5ABfAdvFDtm7GJzfXXUrygfxdOMTFD4vLc9k8gU">
                                <input type="email" name="email" class="form-control" value="" placeholder="Email"
                                    required="">
                                <input type="password" name="password" class="form-control" placeholder="Password"
                                    required="">
                                <button type="submit" class="btn-login">Login</button>
                                <!--<div class="text-center">-->
                                <!--	<a href="https://outlandcreation.customdev.devopdigital.com/admin/password/reset" class="right_link">Forget Your Password?</a>-->
                                <!--</div>-->
                                <div class="text-center">
                                    <a href="signup.php" class="create-account-link">Create an Account</a>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </section>










        <!-- Footer -->
        <?php include 'include/footer.php'; ?>