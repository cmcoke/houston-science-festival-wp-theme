<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(array('flex', 'items-center', 'justify-center', 'h-screen')); ?>>

  <section class='bg-[var(--blue] px-4'>
    <div class="flex flex-col gap-y-[25px] place-items-center text-center">
      <h1 class="text-8xl font-semibold">Oops</h1>
      <h2 class='text-2xl'>404 - PAGE NOT FOUND</h2>
      <p class='text-[1.2rem]'>The page you are looking for might have been removed, <br> had it's name changed or is
        temporarily unavailable.
      </p>
      <a href=" <?php echo esc_url(site_url('/')); ?>" class='button'>GO TO HOMEPAGE</a>
    </div>
  </section>