<?php


include 'header.php';

?>


<div class="inner-banner bg12">
    <div class="container">
        <div class="inner-title text-center">
            <h3>Contact Us</h3>
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>

            </ul>
        </div>
    </div>
    <div class="inner-shape">
        <img src="assets/images/shape/inner-shape.png" alt="Images">
    </div>
</div>



<div class="contact-form-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>Let's Send Us a Message Below</h2>
        </div>
        <div class="row pt-45">
            <div class="col-lg-4">
                <div class="contact-info mr-20">
                    <span>Contact Info</span>
                    <h2>Let's Connect With Us</h2>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam imperdiet varius mi, ut
                            hendrerit magna mollis ac. </p> -->
                    <div class="container">
                        <?php if (isset($_SESSION['status']) && isset($_SESSION['status_code'])) { ?>
                            <div class="alert alert-<?php echo $_SESSION['status_code']; ?>" style="position: relative;">
                                <?php echo $_SESSION['status']; ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="position: absolute; top: 0; right: 0;">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        <?php
                            unset($_SESSION['status']);
                            unset($_SESSION['status_code']);
                        }
                        ?>

                        <!-- Rest of your HTML content -->
                    </div>
                    <ul>
                        <li>
                            <div class="content">
                                <i class='bx bx-phone-call'></i>
                                <h3>Phone Number</h3>
                                <a href="tel:+1(212)-255-5511">☎️97-1507377966</a>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <i class='bx bxs-map'></i>
                                <h3>Address</h3>
                                <span>Office-06,17th floor, easy link business center, opal tower Dubai</span>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <i class='bx bx-message'></i>
                                <h3>Contact Info</h3>
                                <a href="/cdn-cgi/l/email-protection#ec8489808083ac98898f848994c28f8381"><span class="__cf_email__" data-cfemail="c6aea3aaaaa986b2a3a5aea3bee8a5a9ab"> 📧info@mindlglobal.ae</span></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="contact-form">
                    <form action="contact_f.php" method="post">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Your Name <span>*</span></label>
                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please Enter Your Name" placeholder="Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Your Email <span>*</span></label>
                                    <input type="email" name="email" id="email" class="form-control" required data-error="Please Enter Your Email" placeholder="Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Phone Number <span>*</span></label>
                                    <input type="text" name="phone" id="phone_number" required data-error="Please Enter Your number" class="form-control" placeholder="Phone Number">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Your Subject <span>*</span></label>
                                    <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please Enter Your Subject" placeholder="Your Subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Our Services <span>*</span></label>
                                    <select name="services" id="msg_subject" class="form-control" required data-error="Please Select a Service">
                                        <option value="" disabled selected>Select a Service</option>
                                        <option value="Web Development"> Web Development</option>
                                        <option value="App Development">App Development</option>
                                        <option value="Marketing Services">Marketing Services</option>
                                        <option value="Database Design">Database Design</option>
                                        <option value="IT Infrastructure">IT Infrastructure</option>
                                        <option value="Cloud Service">Cloud Service</option>
                                        <option value="Data Science">Data Science</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Your Message <span>*</span></label>
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Your Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="agree-label">
                                    <input type="checkbox" id="chb1" required>
                                    <label for="chb1">
                                        Accept <a href="terms-condition.html">Terms & Conditions</a> And <a href="privacy-policy.html">Privacy Policy.</a>
                                    </label>
                                </div>
                            </div>
                            <div class="form-input">
                                <!-- Google reCAPTCHA box -->
                                <div class="g-recaptcha" data-sitekey="<?php echo $siteKey; ?>"></div>
                            </div>

                            <div class="col-lg-12 col-md-12 text-center">
                                <button type="submit" id="submitBtn" class="default-btn btn-bg-two border-radius-50" disabled>
                                    Send Message <i class='bx bx-chevron-right'></i>
                                </button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>  
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="map-area">
    <div class="container-fluid m-0 p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3610.5207187704796!2d55.27349501744384!3d25.1856563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4522862dd1319327%3A0x48ed4f68ddb3cdb4!2sEasyLink%20Business%20center!5e0!3m2!1sen!2sin!4v1676973475481!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<div class="whatsapp hideOnScroll" style="position: fixed; left: 8px; bottom: 8px; z-index: 9999;       margin-bottom: 50px;">
    <a href="https://api.whatsapp.com/send?phone=971551103734" target="_blank" rel="nofollow">
        <img src="https://www.thewatchtower.com/assets/images/icons/whatsapp-icon.png" width="40">
    </a>
</div>
<div class="call_btn hideOnScroll" style="position: fixed;
        z-index: 9999;
        bottom: 8px;
        left: 8px;">
    <a rel="nofollow" href="tel:+97-1507377966">
        <img src="https://www.thewatchtower.com/assets/images/icons/call-icon.png" width="40">
    </a>
</div>






<script src="assets/js/jquery.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/jquery.magnific-popup.min.js"></script>

<script src="assets/js/jquery.nice-select.min.js"></script>

<script src="assets/js/wow.min.js"></script>

<script src="assets/js/meanmenu.js"></script>

<script src="assets/js/jquery.ajaxchimp.min.js"></script>

<script src="assets/js/form-validator.min.js"></script>

<script src="assets/js/contact-form-script.js"></script>

<script src="assets/js/custom.js"></script>
<script src="assets/js/sweetalert.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>
    document.getElementById("phone_number").addEventListener("input", function() {
        // Remove non-numeric characters
        this.value = this.value.replace(/\D/g, "");

        // Restrict to 10 digits
        if (this.value.length > 10) {
            this.value = this.value.slice(0, 10);
        }
    });
</script>
<script>
    document.getElementById("chb1").addEventListener("change", function() {
        document.getElementById("submitBtn").disabled = !this.checked;
    });
</script>

</body>

</html>


<?php


include 'footer.php';

?>