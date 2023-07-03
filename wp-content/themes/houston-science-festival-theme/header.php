<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(array('grid', 'grid-rows-[auto_1fr_auto]', 'grid-cols-[100%]', 'min-h-[100vh]')); ?>>

  <header>
    <h1>header</h1>
  </header>

  <main>
    <h1>main</h1>