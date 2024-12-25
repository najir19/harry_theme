<!doctype html>
<html <?php language_attributes() ?>>

<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <?php

   if (is_singular() && pings_open(get_queried_object())): ?>
   <?php endif; ?>
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
   <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

   <?php harry_header(); ?>
   <?php harry_preloader(); ?>
   <?php harry_breadcrumb(); ?>