<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">

    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header>
        <?php get_template_part('components/nav', 'topbar'); ?>
        <?php get_template_part('components/nav', 'main'); ?>
    </header>