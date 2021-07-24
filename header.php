<?php

/**
 * Arquivo header do tema Avives
 * @package avives
 */

?>

<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri(); ?>/assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri(); ?>/assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/<?= get_template_directory_uri(); ?>/assets/images/favicon-16x16.png">
    <link rel="manifest" href="<?= get_template_directory_uri(); ?>/assets/images/site.webmanifest">

    <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>

    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="<?php bloginfo('url'); ?>" />
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
    <meta property="og:title" content="<?php bloginfo('name');
                                        wp_title('|'); ?>">
    <meta property="og:description" content="<?php echo get_the_excerpt() ?: bloginfo('description'); ?>">
    <meta property="og:url" content="<?php bloginfo('url') ?>">
    <meta property="og:image" content="<?php get_the_post_thumbnail_url(); ?>">

    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/fontawesome-5-pro/css/all.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <div id="page" class="main">

        <header>
            <section>
                <div class="container py-3">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-4 text-center text-lg-left mb-4 mb-lg-0">
                            <img class="image-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/avives-logo.svg" alt="Avives">
                        </div>
                        <div class="col-12 col-lg-4"></div>
                        <div class="col-12 col-lg-4">
                            <form action="" method="get" class="form-inline">
                                <input type="text" name="s" id="s" class="form-control form-control-sm col mr-2" placeholder="Buscar">
                                <button type="submit" class="btn btn-sm btn-primary">Buscar<i class="fas fa-search ml-2"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container">
                    <a class="navbar-brand d-sm-inline d-lg-none">MENU</a>
                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <?php
                    // wp_nav_menu(array(
                    //     'menu'            => 'principal',
                    //     'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                    //     'container'       => 'div',
                    //     'container_class' => 'collapse navbar-collapse',
                    //     'container_id'    => 'navbarText',
                    //     'menu_class'      => 'navbar-nav mr-auto',
                    //     'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    //     'walker'          => new WP_Bootstrap_Navwalker(),
                    // ));
                    ?>
                    <div class="collapse navbar-collapse" id="navbarText">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item <?php echo (is_front_page()) ? 'active' : ''; ?>">
                                <a class="nav-link" href="<?php echo home_url(); ?>">Home</a>
                            </li>
                            <li class="nav-item <?php echo (is_page('sobre')) ? 'active' : ''; ?>">
                                <a class="nav-link" href="<?php echo home_url('sobre'); ?>">Sobre</a>
                            </li>
                            <li class="nav-item <?php echo (is_post_type_archive('associado')) ? 'active' : ''; ?>">
                                <a class="nav-link" href="<?php echo home_url('associado'); ?>">Associados</a>
                            </li>
                            <li class="nav-item <?php echo (is_post_type_archive('parceiro')) ? 'active' : ''; ?>">
                                <a class="nav-link" href="<?php echo home_url('parceiro'); ?>">Parceiros</a>
                            </li>
                            <li class="nav-item <?php echo (is_page('contato')) ? 'active' : ''; ?>">
                                <a class="nav-link" href="<?php echo home_url('contato'); ?>">Contato</a>
                            </li>
                            <li class="nav-item <?php echo (is_home()) ? 'active' : ''; ?>">
                                <a class="nav-link" href="<?php echo home_url('blog'); ?>">Blog</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link text-light" href="#"><i class="fab fa-lg fa-instagram"></i><span class="d-sm-inline d-lg-none ml-2">Instagram</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="#"><i class="fab fa-lg fa-facebook-square"></i><span class="d-sm-inline d-lg-none ml-2">Facebook</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="#"><i class="fab fa-lg fa-whatsapp"></i><span class="d-sm-inline d-lg-none ml-2">Whatsapp</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>