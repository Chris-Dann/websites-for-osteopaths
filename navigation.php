<div id="rb-modal-menu">
        <div id="rb-modal-menu__close-button">
            <i class="fas fa-times"></i>
        </div>
    <?php
        wp_nav_menu( array( 
          'theme_location' => 'rb-handheld-menu', 
        ) );
    ?>
</div>

<div class="rb-desktop-navigation" id="rb-desktop-navigation">

    <div class="rb-desktop-navigation__logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/white-logo.png" alt="">
    </div>

    <div class="rb-desktop-navigation__menu">
        <?php
        wp_nav_menu( array( 
          'theme_location' => 'rb-main-menu', 
        ) );
        ?>
    </div>

    <div class="rb-desktop-navigation__hamburger" id="rb-desktop-navigation__hamburger">
        <i class="rb-desktop-navigation__hamburger-icon fas fa-bars"></i>
    </div>
</div>