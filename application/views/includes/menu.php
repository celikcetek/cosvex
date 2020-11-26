<body>
    <header class="header-with-topbar">
        <div class="top-header-area bg-black padding-10px-tb">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-uppercase alt-font d-flex align-items-center justify-content-center justify-content-md-start">
                        <a href="tel:902127099727" class="text-link-white-2 line-height-normal" title="Call us +90 212 709 97 27">Call us +90 212 709 97 27</a>
                        <div class="separator-line-verticle-extra-small bg-dark-gray display-inline-block margin-two-half-lr position-relative vertical-align-middle"></div>
                        <a href="mailto:support@cosvex.com" class="text-link-white-2 line-height-normal" title="support@cosvex.comm">support@cosvex.com</a>
                    </div>
                    <div class="col-md-6 d-none d-md-flex align-items-center justify-content-end">
                        <div class="icon-social-very-small display-inline-block line-height-normal">
                            <a href="#" title="Facebook" target="_blank" class="text-link-white-2">
                                <i class="fab fa-facebook-f" aria-hidden="true"></i>
                            </a>
                            <a href="#" title="Twitter" target="_blank" class="text-link-white-2">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" title="Linked In" target="_blank" class="text-link-white-2">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" title="Google Plus" target="_blank" class="text-link-white-2">
                                <i class="fab fa-google-plus-g"></i>
                            </a>
                        </div>
                        <div class="separator-line-verticle-extra-small bg-dark-gray display-inline-block margin-two-half-lr position-relative vertical-align-middle top-1px"></div>
                        <div class="btn-group dropdown-style-1">
                            <button type="button" class="btn dropdown-toggle sm-width-100" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                English <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#" title="English"><span class="icon-country usa"></span>English</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-default bootsnav navbar-top header-light-transparent background-transparent nav-box-width navbar-expand-lg">
            <div class="container nav-header-container">
                <div class="col-auto pl-lg-0">
                    <a href="<?php echo base_url(); ?>" title="Cosvex" class="logo"><img src="<?php echo base_url('resources/'); ?>images/main-logo.png" data-rjs="<?php echo base_url('resources/'); ?>images/logo@2x.png" class="logo-dark default" alt="Pofo"><img src="images/logo-white.png" data-rjs="images/logo-white@2x.png" alt="Pofo" class="logo-light"></a>
                </div>
                <div class="col accordion-menu pr-0 pr-md-3">
                    <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
                        <span class="sr-only">toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-collapse collapse justify-content-end" id="navbar-collapse-toggle-1">
                        <ul id="accordion" class="nav navbar-nav navbar-left no-margin alt-font text-normal" data-in="fadeIn" data-out="fadeOut">
                            
                        <?php if ($this->session->userdata('id')) { ?>

                        <li class=""><a href="#">MY ACCOUNT</a></li>
                        <li class=""><a href="<?php echo base_url('logout'); ?>">LOGOUT</a></li>

                        <?php } else { ?>

                        <li class=""><a href="<?php echo base_url('login'); ?>">LOGIN</a></li>
                        <li class=""><a href="<?php echo base_url('register'); ?>">REGISTER</a></li>   
                        
                        <?php } ?>

                        </ul>
                    </div>
                </div>
                <!-- <div class="col-auto pr-lg-0">
                    <div class="header-searchbar">
                        <a href="#search-header" class="header-search-form"><i class="fas fa-search search-button"></i></a>
                        <form id="search-header" method="post" action="search-result.html" name="search-header" class="mfp-hide search-form-result">
                            <div class="search-form position-relative">
                                <button type="submit" class="fas fa-search close-search search-button"></button>
                                <input type="text" name="search" class="search-input" placeholder="Enter your keywords..." autocomplete="off">
                            </div>
                        </form>
                    </div>
                </div> -->
            </div>
        </nav>
    </header>