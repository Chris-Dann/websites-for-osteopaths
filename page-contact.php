<?php get_header(); ?>

<div class="rb-nav-pusher"></div>

<div class="pageheader contact">
    <div class="rb-container">
        <h1>Contact Us</h1>
    </div>
</div>

<div class="rb-section-container contact-upperbox">
    <div class="rb-container">
        <div class="map">
            <div class="rb-responsive-google-map">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3285.2183427123664!2d-0.11079896460070014!3d51.52148372714792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761b4e88d943ab%3A0x945a3e8012fd5a42!2sHatton%20Garden%2C%20Holborn%2C%20London%20EC1N%208LE!5e0!3m2!1sen!2suk!4v1591195519691!5m2!1sen!2suk" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

            </div>
        </div>

        <div class="deets">
            <div class="innerbox">
                <h3>Websites for Osteopaths</h3>
                <div class="line">
                    <i class="fas fa-phone"></i>
                    <p>0800 048 7608</p>
                </div>
                <div class="line">
                    <i class="fas fa-envelope"></i>
                    <p>hello@websitesfor<br>osteopaths.com</p>
                </div>
                <div class="line">
                    <i class="fas fa-map-pin"></i>
                    <p>Red Balloon Web<br>
                        Suite 19, Unit B<br>
                        63-66 Hatton Garden<br>
                        London EC1N 8LE</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="rb-section-container contact-lowerbox">
    <div class="rb-container">
        <div class="infobox">
            <div class="photo"></div>
            <div class="text">
                <p>Hi! I'm Chris Dann, the founder of Websites for Osteopaths. I'm a web developer and digital marketer, and a regular osteopathy patient for over 20 years.</p>
                <p>I'd love to speak to you about your website or marketing your practice. I'm always happy to chat and give you free, no-obligation advice.</p>
            </div>
        </div>

        <div class="form">
            <h2>Contact Form</h2>
            <?php echo do_shortcode( ' [contact-form-7 id="39" title="Contact form 1"] ' ); ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>