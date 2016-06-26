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

        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php bloginfo( 'template_directory' ); ?>/font-awesome-4.6.3/css/font-awesome.min.css">
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
                    <a class="navbar-brand" href="#start"><img src="<?php bloginfo( 'template_directory' ); ?>/assets/images/logo.png"></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#who">Présentation</a></li>
                        <li><a href="#prestations">Prestations</a></li>
                        <li><a href="#where">Adresses</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

