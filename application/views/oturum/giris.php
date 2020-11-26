<?php $this->load->view('includes/header.php'); ?>
<?php $this->load->view('includes/menu.php'); ?>

<section class="wow fadeIn big-section" id="section-down">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5 col-lg-6 md-margin-30px-bottom wow fadeInLeft">
                <div class="padding-ten-all bg-light-gray border-radius-6 lg-padding-seven-all sm-padding-30px-all h-100">
                    <span class="text-extra-dark-gray alt-font text-large font-weight-600 margin-25px-bottom d-block">Login</span>
                    <form id="contact-form" action="<?php echo base_url('oturum/giris'); ?>" method="post">
                        <div class="row">
                            <div class="col-12">
                                <div id="success-contact-form" class="mx-0 <?php echo ($this->session->flashdata('onay_mesaji') ? 'd-block' : ''); ?>">
                                    <?php echo $this->session->flashdata('onay_mesaji'); ?>
                                </div>
                            </div>
                            <div class="col-12">
                                <div id="success-contact-form" class="mx-0 <?php echo ($this->session->flashdata('hata_mesaji') ? 'd-block danger-form' : ''); ?>">
                                    <?php echo $this->session->flashdata('hata_mesaji'); ?>
                                </div>
                            </div>                            
                            <div class="col-12">
                                <input type="email" name="email" id="email" placeholder="Email" class="border-radius-4 bg-white medium-input">
                            </div>
                            <div class="col-12">
                                <input type="password" name="sifre" id="re_sifre" placeholder="Password" class="border-radius-4 bg-white medium-input">
                            </div>
                            <div class="col-6">
                                <button id="contact-us-button" name="submit" type="submit" class="btn btn-small border-radius-4 btn-dark-gray">Login</button>
                            </div>
                            <div class="col-6 text-right">
                                <span aria-hidden="true"><a href="fargot-password">Forgot Password?</a></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 mt-5 col-lg-6 last-paragraph-no-margin wow fadeInRight">
                <div class="padding-ten-all bg-light-gray border-radius-6 lg-padding-seven-all sm-padding-30px-all h-100 text-center text-lg-left">
                    <img src="<?php echo base_url('resources/'); ?>images/about-img1.jpg" alt="" class="border-radius-6 margin-35px-bottom sm-margin-30px-bottom">
                    <span class="text-large font-weight-600 alt-font text-extra-dark-gray margin-5px-bottom d-block">Don't have an account?</span>
                    <p>Register now and join Cosvex!</p>
                    <a href="<?php echo base_url('register'); ?>" class="btn btn-dark-gray btn-small text-extra-small border-radius-4 margin-25px-top">Register</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('includes/footer.php'); ?>