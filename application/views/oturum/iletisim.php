<?php $this->load->view('includes/header.php'); ?>
<?php $this->load->view('includes/menu.php'); ?>

<section class="wow fadeIn big-section" id="section-down">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5 col-lg-6 md-margin-30px-bottom wow fadeInLeft">
                <div class="padding-ten-all bg-light-gray border-radius-6 lg-padding-seven-all sm-padding-30px-all h-100">
                    <span class="text-extra-dark-gray alt-font text-large font-weight-600 margin-25px-bottom d-block">
                        Contact
                    </span>
                    <form id="contact-form" action="#" method="post">
                        <div class="row">
                            <div class="col-12">
                                <div id="success-contact-form" class="mx-0 ___onay_mesaji___">
                                    <!--  -->
                                </div>
                            </div>
                            <div class="col-12">
                                <div id="success-contact-form" class="mx-0 ___hata_mesaji___">
                                    <!--  -->
                                </div>
                            </div>                            
                            <div class="col-12">
                                <input type="text" name="name" id="name" placeholder="Name Surname" class="border-radius-4 bg-white medium-input">
                            </div>
                            <div class="col-12">
                                <input type="tel" name="telephone" id="telephone" placeholder="Telephone" class="border-radius-4 bg-white medium-input">
                            </div>
                            <div class="col-12">
                                <input type="email" name="email" id="email" placeholder="Email" class="border-radius-4 bg-white medium-input">
                            </div>
                            <div class="col-12">
                                <input type="text" name="companyname" id="companyname" placeholder="Company Name" class="border-radius-4 bg-white medium-input">
                            </div>
                            <div class="col-12">
                                <textarea name="message" id="message" placeholder="Message" class="border-radius-4 bg-white medium-input" rows="4"></textarea>
                            </div>
                            <div class="col-12">
                                <button id="contact-us-button" name="submit" type="submit" class="btn btn-small border-radius-4 btn-dark-gray">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 mt-5 col-lg-6 last-paragraph-no-margin wow fadeInRight">
                <div class="padding-ten-all bg-light-gray border-radius-6 lg-padding-seven-all sm-padding-30px-all h-100 text-center text-lg-left">
                    <img src="<?php echo base_url('resources/'); ?>images/about-img1.jpg" alt="" class="border-radius-6 margin-35px-bottom sm-margin-30px-bottom">
                    <span class="text-large font-weight-600 alt-font text-extra-dark-gray margin-5px-bottom d-block">Forgot your password?</span>
                    <p>No worries! You can reset your password by typing your e-mail address.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('includes/footer.php'); ?>