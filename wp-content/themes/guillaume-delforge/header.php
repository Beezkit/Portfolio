<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if (is_home()) { ?>
        <title>Accueil | Guillaume Delforge Intégrateur Web Lille</title>
    <?php } else { ?>
        <title><?php wp_title(); ?> | Guillaume Delforge Intégrateur Web Lille</title>
    <?php } ?>
    <meta http-equiv="content-language" content="fr-FR" />
    <meta name="author" content="DELFORGE Guillaume" />
    <meta name="copyright" content="Copyright (c)2016 - 2017 DELFORGE Guillaume. Tout droit reservé." />
    <meta name="description" content="Portfolio de DELFORGE Guillaume, Intégrateur Web Lille. Création de site Wordpress, prestashop, utilisation de framework tel que : Bootstrap ou Stylizer." />
    <meta name="keywords" content="Delforge guillaume, intégrateur web lille, intégrateur web, intégrateur, developpeur front end" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="google-site-verification" content="FRJjA8ufTtN2Fvg0JkDb3-DXvAhF4hDDlJeeB2MpgbA" />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owl/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owl/owl.theme.default.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/fancybox/jquery.fancybox.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/stylizer/stylizer.min.css" type="text/css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/owl/owl.carousel.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/fancybox/jquery.fancybox.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/global.min.js"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class('columns-12'); ?>>

    <header class="shadow-light ease">
        <div class="wrapper">
            <div id="logo">
                <?php if (!is_home()) { ?>
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="img-responsiv" alt="Guillaume Delforge" />
                    </a>
                <?php } else { ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="img-responsiv" alt="Guillaume Delforge" />
                <?php } ?>
            </div>
            <?php if (is_home()) { ?>
            <nav class="ease">
                <?php wp_nav_menu( array( 'theme_location' => 'Top' ) ); ?>
            </nav>
            <div class="btn-menu right s-show shadow-light">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <?php } else { ?>
                <nav class="ease">
                    <?php wp_nav_menu( array( 'theme_location' => 'Second' ) ); ?>
                </nav>
                <div class="btn-menu right s-show shadow-light">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            <?php } ?>
        </div>
    </header>

    <?php if (is_home()) { ?>
        <div id="particles-js">
            <div class="head-particles text-center">
                <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" class="img-responsiv" alt="Guillaume Delforge" />
                <h1><?php bloginfo( 'name' ); ?></h1>
                <p><?php bloginfo( 'description' ); ?></p>
            </div>
            <div class="scrollBot"><a href="#aboutme"><i class="fa fa-angle-down" aria-hidden="true"></i></a></div>
        </div>
    <?php } ?>
