<?php get_header(); ?>
<div class="rb-nav-pusher"></div>

<div class="pageheader resources">
    <div class="rb-container">
        <h1>Free Resources</h1>
    </div>
</div>

<div class="rb-section-container resources-guides">
    <div class="rb-container">
        <div class="headingbox">
            <h2>How-to Guides</h2>
            <div class="line"></div>
        </div>
        <div class="innerbox">
            <div class="blurbbox">
                <h3>It's all Here!</h3>
                <p>Our free guides are jam-packed with essential marketing information, from the theory on how to market your practice through to essential skills and tips on doing it right.</p>
                <h3>Just for Osteopaths</h3>
                <p>The guides are written <strong>specifically for osteopaths</strong> and the specific challenges of marketing an osteopathic practice. Follow our fictional osteopath, Beth, as we look at marketing angles, write effective sales messages and build a website and adverts for her practice.</p>
                <h3>A Complete Course</h3>
                <p>You can follow the guides in order as a marketing course or just dip into whichever one interests you. Each guide follows on from the last and refers to concepts covered in the previous guides, but can also be read individually.</p>
                <h3>Feedback</h3>
                <p>Did you find the guides useful? Please let us know as we'd love to know that it's helped, or if you have any comments, suggestions or questions, then please <a href="#">contact us</a>!</p>
            </div>
            <div class="guidesbox">
                <div class="guidebox guide1">
                    <div class="image">
                        <div class="imagebox"></div>
                    </div>
                    <div class="text">
                        <h3>Marketing Basics</h3>
                        <p>Learn the fundamental principles of modern marketing, whether you should specialise and core concepts like the Big Idea.</p>
                        <p class="button-wrap rb-left"><a href="<?php echo get_stylesheet_directory_uri(); ?>/guides/MarketingBasics-WfO.pdf" target="_blank" class="button">Read Now</a></p>
                    </div>
                </div>
                <div class="guidebox guide2">
                    <div class="image">
                        <div class="imagebox"></div>
                    </div>
                    <div class="text">
                        <h3>Copywriting</h3>
                        <p>Make your selling points appeal to the heart, and write emotive, powerful copy that will draw in potential patients.</p>
                        <p class="button-wrap rb-left"><a href="<?php echo get_stylesheet_directory_uri(); ?>/guides/Copywriting-WfO.pdf" target="_blank" class="button">Read Now</a></p>
                    </div>
                </div>
                <div class="guidebox guide3">
                    <div class="image">
                        <div class="imagebox"></div>
                    </div>
                    <div class="text">
                        <h3>Your Website</h3>
                        <p>Learn what information to put on your website and why, and the power of choice and information architecture.</p>
                        <p class="button-wrap rb-left"><a href="<?php echo get_stylesheet_directory_uri(); ?>/guides/YourWebsite-WfO.pdf" target="_blank" class="button">Read Now</a></p>
                    </div>
                </div>
                <div class="guidebox guide4">
                    <div class="image">
                        <div class="imagebox"></div>
                    </div>
                    <div class="text">
                        <h3>Google</h3>
                        <p>How to promote your practice on Google, and how search engine optimisation is different for a local business.</p>
                        <p class="button-wrap rb-left"><a href="<?php echo get_stylesheet_directory_uri(); ?>/guides/Google-WfO.pdf" target="_blank" class="button">Read Now</a></p>
                    </div>
                </div>
                <div class="guidebox guide5">
                    <div class="image">
                        <div class="imagebox"></div>
                    </div>
                    <div class="text">
                        <h3>Blogging</h3>
                        <p>Learn how blogging can be a powerful marketing tool for your practice, what to write about and how to turn posts into patients.</p>
                        <p class="button-wrap rb-left"><a href="<?php echo get_stylesheet_directory_uri(); ?>/guides/Blogging-WfO.pdf" target="_blank" class="button">Read Now</a></p>
                    </div>
                </div>
                <div class="guidebox guide6">
                    <div class="image">
                        <div class="imagebox"></div>
                    </div>
                    <div class="text">
                        <h3>Graphic Design</h3>
                        <p>Understand the principles of graphic and web design, layout and colour theory and preparing artwork for print.</p>
                        <p class="button-wrap rb-left"><a href="<?php echo get_stylesheet_directory_uri(); ?>/guides/GraphicDesign-WfO.pdf" target="_blank" class="button">Read Now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rb-section-container free-web-review--dark">
        <?php echo do_shortcode('[do-free-review]'); ?>
</div>

<div class="rb-section-container mailing-list">
    <?php do_shortcode( ' [do-mailing-list] ' ); ?>
</div>

<?php get_footer(); ?>