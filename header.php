<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>I am Shumaila Ali</title>
    <?php wp_head(); ?>
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-light bg-light topnavclass" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1"
                aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'your-theme-slug'); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img class="logo"
                    src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="" /></a>
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'primary_menu',
                    'depth' => 1,
                    'container' => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'bs-example-navbar-collapse-1',
                    'menu_class' => 'nav navbar-nav mymenuclass',
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                    'walker' => new WP_Bootstrap_Navwalker(),
                )
            );
            ?>
            <!-- <img src="http://localhost/alexgross/wp-content/uploads/2022/12/homelogo.png" alt="" />   -->
            <div class="header-icons">



                <img class="fontawesomef" src="<?php bloginfo('template_directory'); ?>/images/icons/svg/facebook-f.svg"
                    alt="" />
                <img class="fontawesomein"
                    src="<?php bloginfo('template_directory'); ?>/images/icons/svg/linkedin-in.svg" alt="" />
                <img class="fontawesomeins"
                    src="<?php bloginfo('template_directory'); ?>/images/icons/svg/instagram.svg" alt="" />

            </div>

        </div>

    </nav>