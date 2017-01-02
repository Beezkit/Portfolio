<?php wp_footer(); ?>
<footer>
    <div class="wrapper">
        <div class="title-second">
            <div class="footer-logo xs-grid-1">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="img-responsiv" alt="Guillaume Delforge" />
                </a>
            </div>
            <div class="menu-footer xs-grid-3 xs-grid-offset-1">
                <p>Menu</p>
                <?php wp_nav_menu( array( 'theme_location' => 'Top' ) ); ?>
            </div>
            <div class="follow xs-grid-3">
                <p>Me suivre</p>
                <ul>
                    <li>
                        <a href="">Github</a>
                    </li>
                    <li>
                        <a href="">Linkedin</a>
                    </li>
                </ul>
            </div>
            <div class="contact xs-grid-3">
                <p>Contactez-moi</p>
            </div>
            <div class="clear"></div>
            <div class="mentions text-center">
                Copyright 2015 <a href="<?php echo home_url(); ?>">Guillaume DELFORGE</a>
            </div>
        </div>
    </div>
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/js/particle/particles.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/particle/app.js"></script>
</body>
</html>
