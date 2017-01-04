<?php wp_footer(); ?>
<footer>
    <div class="wrapper">
        <div class="title-second">
            <div class="footer-logo xs-grid-12 m-grid-1">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="img-responsiv" alt="Guillaume Delforge" />
                </a>
            </div>
            <div class="menu-footer xs-grid-4 m-grid-3 m-grid-offset-1">
                <p class="titre-h2">Menu</p>
                <?php wp_nav_menu( array( 'theme_location' => 'Top' ) ); ?>
            </div>
            <div class="follow xs-grid-4 m-grid-3">
                <p class="titre-h2">Me suivre</p>
                <ul>
                    <li>
                        <a href="" class="blue-light shadow-light ease" target="_blank"><i class="fa fa-github-alt" aria-hidden="true"></i><span>Github</span></a>
                    </li>
                    <li>
                        <a href="" class="blue-light shadow-light ease" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i><span>Linkedin</span></a>
                    </li>
                </ul>
            </div>
            <div class="contact xs-grid-4 m-grid-3">
                <p class="titre-h2">Contact</p>
                <a href="" class="btn btn-up blue-light blue-light-hover shadow-light ease-in-out">Contactez-moi</a>
            </div>
            <div class="clear"></div>
        </div>
    </div>
    <div class="mentions text-center">
        <div class="wrapper">
            <p>Copyright 2015 <a href="<?php echo home_url(); ?>">Guillaume DELFORGE</a></p>
        </div>
    </div>
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/js/particle/particles.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/particle/app.js"></script>
</body>
</html>
