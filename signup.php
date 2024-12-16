        <!-- Header -->
        <?php include 'include/header.php'; ?>





        <section id="auth">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="login_register">
                            <h3 class="section-heading">Sign Up</h3>
                            <form>
                                <input type="text" name="name" value="" id="signup__name__hc" class="form-control "
                                    placeholder="Name" required="">
                                <input type="email" name="email" value="" id="signup__email__hc" class="form-control "
                                    placeholder="Email" required="">
                                <input type="text" name="phone" value="" class="form-control " placeholder="Phone"
                                    required="">
                                <input type="password" name="password" id="signup__pass__hc" class="form-control "
                                    placeholder="Password" required="">
                                <button type="submit" id="signup__btn__hc" class="btn-login">Sign Up</button>
                                <div class="text-center">
                                    <p>Already have an account? <a href="login.php" class="right_link">Login</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <!-- Footer -->
        <?php include 'include/footer.php'; ?>