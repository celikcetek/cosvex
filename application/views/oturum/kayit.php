<?php $this->load->view('includes/header.php'); ?>
<?php $this->load->view('includes/menu.php'); ?>

<section class="wow fadeIn big-section" id="section-down">
    <div class="container">
        <div class="row">
            <div class="col-12 mt-5 col-lg-6 md-margin-30px-bottom wow fadeInLeft">
                <div class="padding-ten-all bg-light-gray border-radius-6 lg-padding-seven-all sm-padding-30px-all h-100">
                    <span class="text-extra-dark-gray alt-font text-large font-weight-600 margin-25px-bottom d-block">Register</span>
                    <form id="contact-form" action="<?php echo base_url('oturum/kayit'); ?>" method="post">
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
                            <div class="col-6">
                                <input required type="text" name="isim_soyisim" id="isim_soyisim" placeholder="Name Surname" class="border-radius-4 bg-white medium-input">
                            </div>
                            <div class="col-6">
                                <input required type="text" name="sirket" id="sirket" placeholder="Company" class="border-radius-4 bg-white medium-input">
                            </div>
                            <div class="col-12">
                                <select required name="ulke" class="border-radius-4 bg-white medium-input">

                                    <option value="0">Country</option>

                                    <?php foreach ($ulkeler->result() as $ulke) { ?>

                                        <option value="<?php echo $ulke->id; ?>"><?php echo $ulke->name; ?></option>

                                    <?php } ?>

                                </select>
                            </div>
                            <div class="col-12 mb-4">
                                <select class="form-control select2" id="choose_sectors" multiple="multiple">
                                    <?php foreach ($sektorler->result() as $sektor) { ?>
                                        <option><?php echo $sektor->title; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-12 mb-4">
                                <input required type="text" name="other" id="other" placeholder="Other Sectors" class="d-none border-radius-4 bg-white medium-input">
                            </div>
                            <!-- <div class="col-12 mb-4">
                                <label for="sector">Sectors</label>

                                <?php foreach ($sektorler->result() as $sektor) { ?>

                                    <div class="form-check">
                                        <input class="form-check-input bg-white " type="checkbox" name="sektor[]" value="<?php echo $sektor->id; ?>" id="sector<?php echo $sektor->id; ?>">
                                        <label class="form-check-label" for="<?php echo $sektor->title; ?>">
                                            <?php echo $sektor->title; ?>
                                        </label>
                                    </div>

                                <?php } ?>

                            </div> -->
                            <div class="col-12 mb-4">
                                <select class="form-control select2" id="choose_activities" multiple="multiple">
                                    <?php foreach ($faaliyet_alanlari->result() as $faaliyet_alani) { ?>
                                        <option><?php echo $faaliyet_alani->title; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-12 mb-4">
                                <input required type="text" name="other_activities" id="other_activities" placeholder="Other Activities" class="d-none border-radius-4 bg-white medium-input">
                            </div>
                            <!-- <div class="col-12 mb-4">
                                <label for="faaliyetALani">Fields of Activities</label>

                                <?php foreach ($faaliyet_alanlari->result() as $faaliyet_alani) { ?>

                                    <div class="form-check">
                                        <input class="form-check-input bg-white " type="checkbox" name="faaliyetAlani[]" value="<?php echo $faaliyet_alani->id; ?>" id="faaliyetALani<?php echo $faaliyet_alani->title; ?>">
                                        <label class="form-check-label" for="<?php echo $sektor->title; ?>">
                                            <?php echo $faaliyet_alani->title; ?>
                                        </label>
                                    </div>

                                <?php } ?>

                            </div> -->
                            <div class="col-6">
                                <input required type="email" name="email" id="email" placeholder="Email" class="border-radius-4 bg-white medium-input">
                            </div>
                            <div class="col-6">
                                <input required type="tel" name="tel" id="tel" placeholder="Phone Number" class="border-radius-4 bg-white medium-input">
                            </div>
                            <div class="col-6">
                                <input required type="password" name="sifre" id="sifre" placeholder="Password" class="border-radius-4 bg-white medium-input">
                            </div>
                            <div class="col-6">
                                <input required type="password" name="re_sifre" id="re_sifre" placeholder="Password Again" class="border-radius-4 bg-white medium-input">
                            </div>
                            <div class="col-12">
                                <button id="contact-us-button" type="submit" name="submit" class="btn btn-small border-radius-4 btn-dark-gray">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-12 mt-5 col-lg-6 last-paragraph-no-margin wow fadeInRight">
                <div class="padding-ten-all bg-light-gray border-radius-6 lg-padding-seven-all sm-padding-30px-all h-100 text-center text-lg-left">
                    <img src="<?php echo base_url('resources/'); ?>images/about-img1.jpg" alt="" class="border-radius-6 margin-35px-bottom sm-margin-30px-bottom">
                    <span class="text-large font-weight-600 alt-font text-extra-dark-gray margin-5px-bottom d-block">Do you already have an account?</span>
                    <p>Log in and enjoy the many privileges we offer you!</p>
                    <a href="<?php echo base_url('login'); ?>" class="btn btn-dark-gray btn-small text-extra-small border-radius-4 margin-25px-top">Login</a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('includes/footer.php'); ?>
<script>
    $(document).ready(function() {
        var $eventSectors = $("#choose_sectors");
        var $eventActivities = $("#choose_activities");
        $eventSectors.on("select2:select", function (e) {
            if(e.params.data.text == "Other")
                $('#other').removeClass('d-none')
        });
        $eventSectors.on("select2:unselect", function (e) {
            if(e.params.data.text == "Other")
                $('#other').addClass('d-none')
        });
        $eventActivities.on("select2:unselect", function (e) {
            if(e.params.data.text == "Other")
                $('#other_activities').addClass('d-none')
        });
        $eventActivities.on("select2:select", function (e) {
            if(e.params.data.text == "Other")
                $('#other_activities').removeClass('d-none')
        });
        $('#choose_sectors').select2({
            placeholder: 'Select Sectors',
        });
        $('#choose_activities').select2({
            placeholder: 'Select Fields of Activities',
        });
        $('.select2 .select2-container .select2-container--default').attr('style','width: 100%')
    });
</script>