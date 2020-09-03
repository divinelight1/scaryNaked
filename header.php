<?php
/**
 * The header for our theme
 *
 * Template that display head section, and usually and optionaly header section (menu, logo) that is site wide same
 *

 */
 ?>

<!doctype html>
<html class="no-js" lang="">

  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- this file is used just if you have some custom css / normally all style files are enqueued in functions.php -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/custom.css">

    <!-- mobile browser bar color / match this color with your website highlighted color / or any other that you like -->
    <meta name="theme-color" content="#fafafa">

    <!-- bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- font awesome CDN / uncomment if you need -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->

    <!-- animations CDN -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <?php wp_head(); ?>

  </head>

  <body>

  <!-- HERE GOES CONTENT -->
