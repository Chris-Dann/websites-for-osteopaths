<?php

// enqueue stylesheet
function enqueue_stylesheet() {
    wp_enqueue_style('style', get_stylesheet_uri() );
}      
add_action( 'wp_enqueue_scripts', 'enqueue_stylesheet' ); 

// theme support
add_theme_support( 'post-thumbnails' ); 

//custom excerpt length
add_filter( 'excerpt_length', function($length) {
    return 20;
} );

// register menus
function register_menus() {
    register_nav_menus(
        array(
            'rb-main-menu' => 'RB Main Menu',
            'rb-handheld-menu' => 'RB Handheld Menu'
        )
    );
}
add_action( 'init', 'register_menus' );

// free review shortcode
function do_free_web_review() { ?>
    <div class="rb-container">
        <!--<img class="freesticker" src="<?php echo get_stylesheet_directory_uri(); ?>/images/free-sticker-1.png" alt="">-->
        <h2>Free Web Strategy Review</h2>
        <p class="icons rb-center"><i class="fas fa-desktop"></i><i class="fas fa-mobile-alt"></i><i class="fab fa-google"></i><i class="fab fa-facebook"></i><i class="fas fa-envelope"></i></p>
        <div class="columnsbox">
            <div class="image"></div>
            <div class="text">
                <p>Put yourself in the picture with our completely free web review. We will look at your website, search engine scores and local market, and give you advice on marketing your practice online, including free tips you can implement yourself. It's free and completely no-obligation, claim yours today!</p>
                <?php echo do_shortcode( ' [contact-form-7 id="8" title="Web Review Form"] ' ); ?>
            </div>
        </div>
    </div>
<?php }
add_shortcode( 'do-free-review', 'do_free_web_review' );

// mailing list shortcode
function do_mailing_list() { ?>
        <div class="rb-container">
            <div class="headingbox">
                <h2>Marketing Tips to your Inbox</h2>
                <div class="line"></div>
            </div>
            <div class="innerbox">
                <div class="text">
                    <p>Join our mailing list and stay up to date with the latest marketing advice and tips for osteopaths straight to your inbox. It’s completely free and you can unsubscribe at any time.</p>
                    <div class="form">
                    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
                        <div id="mc_embed_signup">
                            <form action="https://websitesforosteopaths.us4.list-manage.com/subscribe/post?u=8eb442b3f56a667238dcf1852&amp;id=cb53bf14d2" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                <div id="mc_embed_signup_scroll">
                            <div class="mc-field-group">
                                <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
                            </label>
                                <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                            </div>
                            <div class="mc-field-group">
                                <label for="mce-FNAME">First Name </label>
                                <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
                            </div>
                            <div class="mc-field-group">
                                <label for="mce-LNAME">Last Name </label>
                                <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
                            </div>
                                <div id="mce-responses" class="clear">
                                    <div class="response" id="mce-error-response" style="display:none"></div>
                                    <div class="response" id="mce-success-response" style="display:none"></div>
                                </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_8eb442b3f56a667238dcf1852_cb53bf14d2" tabindex="-1" value=""></div>
                                <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="image"></div>
            </div>
        </div>
<?php }
add_shortcode( 'do-mailing-list', 'do_mailing_list');