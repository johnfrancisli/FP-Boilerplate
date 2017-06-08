<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

</section>
<div id="footer-container">
    <footer id="footer">
        <div class="top-footer-background">
            <div class="top-footer-wrapper">
                <div class="top-footer">
                    <div class="row">
                        <div class="columns">
                            <img class="footer-logo"
                                 src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo/jetlines-logo-white.svg"
                                 alt="Jetlines">
                        </div>
                    </div>
                    <div class="row footer-columns">
                        <div class="small-12 medium-6 large-3 columns">
                            <div class="footer-column-content"><h3>Head Office</h3>
                                <p class="footer-address">1240-1140 West Pender Street<br>
                                    Vancouver, BC, Canada V6E 4G1</p>

                                <p><?php echo do_shortcode("[phone-number class=footer-button]"); ?></p>
                                </div>
                        </div>
                        <div class="small-12 medium-6 large-3 columns">
                            <div class="footer-column-content"><h3>Our Partners</h3>
                                
                                <img class="footer-logo"
                                     src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/footer/logo-boeing.png"
                                     alt="Boeing">
                                <img class="footer-logo"
                                     src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/footer/logo-kingbaywest.png"
                                     alt="King & Bay West"></div>
                        </div>

                        <!--<div class="small-12 medium-6 large-3 columns">
                            <div class="footer-column-content"><h3>Investor Presentation</h3>
                                <p>Download our latest investor presentation below.</p>

                                <p><a class="footer-button" href="<?php /*echo esc_url(home_url('/')); */?>/investors/investor-downloads/"><i class="fa fa-file-text-o"></i> Investor Downloads</a></p></div>
                        </div>-->

                        <div class="small-12 medium-6 large-3 columns">
                            <div class="footer-column-content"><h3>Get Social With Us</h3>
                                <div class="social-icons">
                                    <a href="http://www.facebook.com/CanadaJetlines/" target="_blank"><i class="fa fa-facebook-square"></i></a>
                                    <a href="http://www.twitter.com/canadajetlines?lang=en" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="http://www.linkedin.com/company/canada-jetlines" target="_blank"><i class="fa fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="small-12 medium-6 large-3 columns">
                            <div class="footer-column-content"><h3>Contact us</h3>
                                <p><a class="footer-button" href="/contact/contact-us"><i class="fa fa-envelope"></i> Send Us A Message</a></p>
                                <p><a class="footer-button" href="/contact/"><i class="fa fa-file-text-o"></i> Join Our Mailing List</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mid-footer-background">
            <div class="mid-footer-wrapper">
                <div class="mid-footer">
                    <div class="row sitemap-title">
                        <div class="columns">
                            <h3>Site Map</h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="small-12 medium-12 large-9 columns">
                            <div class="row sitemap-menu">
                                <div class="small-12 medium-2 columns">
                                    <ul class="vertical menu">
                                        <li><a href="<?php echo esc_url(home_url('/')); ?>"><strong>Home</strong></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo esc_url(home_url('/')); ?>news"><strong>News</strong></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo esc_url(home_url('/')); ?>contact/contact-us"><strong>Contact</strong></a>
                                        </li>
                                        <li>
                                            <a href="<?php echo esc_url(home_url('/')); ?>shop"><strong>Shop</strong></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="small-12 medium-2 columns">
                                    <ul class="vertical menu">
                                        <li><a href="<?php echo esc_url(home_url('/')); ?>strategy"><strong>Our
                                                    Strategy</strong></a></li>
                                        <li><a href="<?php echo esc_url(home_url('/')); ?>strategy">Our Story</a>
                                        </li>
                                        <li><a href="<?php echo esc_url(home_url('/')); ?>strategy/ulcc-airline-model">ULCC
                                                Airline Model</a></li>
                                        <li><a href="<?php echo esc_url(home_url('/')); ?>strategy/planned-route-map">Planned
                                                Route Map</a>
                                        <!--<li><a href="<?php /*echo esc_url(home_url('/')); */?>strategy/planned-aircraft">Planned
                                                Aircraft</a>
                                        </li>-->
                                    </ul>
                                </div>
                                <div class="small-12 medium-2 columns">
                                    <ul class="vertical menu">
                                        <li>
                                            <a href="<?php echo esc_url(home_url('/')); ?>corporate"><strong>Corporate</strong></a>
                                        </li>
                                        <li><a href="<?php echo esc_url(home_url('/')); ?>corporate">Leadership
                                                Team</a></li>
                                        <li>
                                            <a href="<?php echo esc_url(home_url('/')); ?>corporate/corporate-governance">Corporate
                                                Governance</a></li>
                                        <li>
                                            <a href="<?php echo esc_url(home_url('/')); ?>corporate/company-information">Corporate
                                                Information</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="small-12 medium-5 columns">
                                    <div class="row">
                                        <ul class="columns vertical menu">
                                            <li>
                                                <a href="<?php echo esc_url(home_url('/')); ?>investors"><strong>Investors</strong></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="row align-top">

                                        <ul class="medium-6 columns vertical menu">
                                            <li>
                                                <a href="<?php echo esc_url(home_url('/')); ?>investors">Stock
                                                    Information</a></li>
                                            <li>
                                                <a href="<?php echo esc_url(home_url('/')); ?>investors/share-structure">Share
                                                    Structure</a></li>
                                            <li>
                                                <a href="<?php echo esc_url(home_url('/')); ?>investors/financial-reports">Financial
                                                    Reports</a></li>
                                        </ul>
                                        <ul class="medium-6 columns vertical menu">
                                            <li>
                                                <a href="<?php echo esc_url(home_url('/')); ?>investors/investor-downloads">Investor
                                                    Downloads</a></li>
                                            <li><a href="<?php echo esc_url(home_url('/')); ?>investors/media-coverage">Media
                                                    Coverage</a>

                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="small-12 medium-12 large-3 columns">

                            <div class="footer-stock-quote text-right">
                                <span class="stock-quote">TSX-V: JET <?php echo do_shortcode('[stock-ticker symbol="JET.V" field="Bid Change"]'); ?></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="bottom-footer-background">
            <div class="bottom-footer-wrapper">
                <div class="bottom-footer">
                    <div class="row">
                        <div class="small-12 medium-12 large-9 columns small-order-2 medium-order-1 disclaimer">
                            Copyright 2017 Canada Jetlines. All Rights Reserved. | <a
                                    href="<?php echo esc_url(home_url('/')); ?>disclaimer">Disclaimer</a>
                        </div>
                        <div class="small-12 medium-12 large-3 columns small-order-1 medium-order-2 backtotop-column">
                            Back to Top <a class="backtotop" href="#topofpage"><i class="fa fa-long-arrow-up"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
</div>

<?php do_action('foundationpress_layout_end'); ?>

<?php if (get_theme_mod('wpt_mobile_menu_layout') === 'offcanvas') : ?>
    </div><!-- Close off-canvas content -->
    </div><!-- Close off-canvas wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action('foundationpress_before_closing_body'); ?>
</body>
</html>
