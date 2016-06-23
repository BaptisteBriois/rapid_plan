<!DOCTYPE html>
    <!--[if IE 7]><html class="ie ie7" <?php language_attributes(); ?>> <![endif]-->
    <!--[if IE 8]><html class="ie ie8" <?php language_attributes(); ?>><![endif]-->
    <!--[if !(IE 7) | !(IE 8)  ]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
    <head>
        <title><?php the_title(); ?></title>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo( 'template_directory' ); ?>/assets/favicon/apple-touch-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo( 'template_directory' ); ?>/assets/favicon/apple-touch-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo( 'template_directory' ); ?>/assets/favicon/apple-touch-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo( 'template_directory' ); ?>/assets/favicon/apple-touch-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo( 'template_directory' ); ?>/assets/favicon/apple-touch-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo( 'template_directory' ); ?>/assets/favicon/apple-touch-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo( 'template_directory' ); ?>/assets/favicon/apple-touch-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo( 'template_directory' ); ?>/assets/favicon/apple-touch-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo( 'template_directory' ); ?>/assets/favicon/apple-touch-icon-180x180.png">
        <link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/assets/favicon/favicon-32x32.png" sizes="32x32">
        <link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/assets/favicon/android-chrome-192x192.png" sizes="192x192">
        <link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/assets/favicon/favicon-96x96.png" sizes="96x96">
        <link rel="icon" type="image/png" href="<?php bloginfo( 'template_directory' ); ?>/assets/favicon/favicon-16x16.png" sizes="16x16">
        <link rel="manifest" href="<?php bloginfo( 'template_directory' ); ?>/assets/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#000000">
        <meta name="msapplication-TileImage" content="<?php bloginfo( 'template_directory' ); ?>/assets/favicon/mstile-144x144.png">
        <meta name="theme-color" content="#ffffff">

        <!--Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Styles -->
        <?php $version = filemtime( get_theme_root().'/'.get_template() . '/css/build/main.css' ); ?>
        <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/css/build/main.css?v=<?= $version; ?>">

        <!--[if lt IE 9]>
        <script src="<?php bloginfo( 'template_directory' ); ?>/js/build/html5shiv.min.js"></script>
        <script src="<?php bloginfo( 'template_directory' ); ?>/js/build/respond.min.js"></script>
        <![endif]-->

        <!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php bloginfo( 'template_directory' ); ?>/js/build/jquery.min.js"><\/script>')</script>

        <!-- Important Owl stylesheet -->
        <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/owl-carousel/owl.carousel.css">

        <!-- Default Theme -->
        <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/owl-carousel/owl.theme.css">

        <!--  jQuery 1.7+  -->
        <script src="<?php bloginfo( 'template_directory' ); ?>/owl-carousel/jquery-1.9.1.min.js"></script>

        <!-- Include js plugin -->
        <script src="<?php bloginfo( 'template_directory' ); ?>/owl-carousel/owl.carousel.js"></script>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

        <header class="">
            <!-- your code HTML header here -->
        </header>

        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="http://localhost:8888/rapid_plan/">Brand</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#who">Présentation</a></li>
                        <li><a href="#prestations">Prestations</a></li>
                        <li><a href="#where">Adresses</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="<?php the_permalink(); ?>/shop">Boutique</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

