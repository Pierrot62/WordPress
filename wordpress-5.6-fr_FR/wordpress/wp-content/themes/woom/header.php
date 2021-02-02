<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>WOOM Theme</title>
    <!-- CSS de Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <!-- Ajout d'une nouvelle feuille de style qui sera spécifique à notre thème -->
    <link href="<?php bloginfo('template_directory'); ?>/blog.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
    <!-- HTML5 shim et Respond.js pour supporter les éléments HTML5 pour Internet Explorer 8 -->
    <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
    <?php wp_head(); ?>
</head>

<body>
    <div class="container">
        <div class="col-md-5">

            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                <?php
                $custom_logo_id = get_theme_mod('custom_logo');
                var_dump($custom_logo_id);
                $image = wp_get_attachment_image_src($custom_logo_id, 'full');
                ?>
                <img src="<?php echo $image[0]; ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
            </a>

        </div>
        <div class="col-md-5 blog-title"><?php echo get_bloginfo('name'); ?></div>
        <div class="col-md-5 menu"></div>
    </div>
    <div class="header">
        <div class="container">
            <nav id="navigation-principale" role="navigation"> <?php wp_nav_menu(array('theme_location' => 'menu-principal')); ?> </nav>
        </div>
    </div>
    <div class="container">
        <div class="blog-header">
        </div>