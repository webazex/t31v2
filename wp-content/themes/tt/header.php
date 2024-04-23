<!DOCTYPE HTML>
<!--
	Halcyonic by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>
        <?php the_title();?>
    </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <?php wp_head(); ?>
</head>
<body>
<div id="page-wrapper">

    <!-- Header -->
    <section id="header">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <!-- Logo -->
                    <h1>
                        <a href="<?php get_home_url();?>" id="logo">Halcyonic</a>
                    </h1>

                    <!-- Nav -->
                    <nav id="nav">
                        <?php
                        wp_nav_menu( [
                            'theme_location'  => 'header',
                            'echo'            => true,
                            'container' => false,
                            'fallback_cb' => '__return_empty_string'
                        ] );
                        ?>
                    </nav>

                </div>
            </div>
        </div>
        <?php
            if(is_front_page()){
                get_template_part('views/partials/header/frontpage-banner', '', []);
            }
        ?>
    </section>