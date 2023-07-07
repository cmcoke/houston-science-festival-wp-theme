<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(array('grid', 'grid-rows-[auto_1fr_auto]', 'grid-cols-[100%]', 'min-h-[100vh]')); ?>>

  <header class="absolute z-10 w-full bg-[rgba(32,43,82,0.30)]">

    <div
      class="grid grid-cols-[1em_6em_1fr_0.5fr_1em] grid-rows-[6em_1fr_auto] lg:grid-cols-[minmax(1rem,3rem)_auto_1fr_1fr_1fr_1fr_minmax(1rem,3rem)] lg:grid-rows-[7rem] items-center"
      id='header__container'>

      <div class="col-start-2 col-end-3 self-center z-[2] lg:hidden">
        <a href="<?php echo home_url();  ?>">
          <img src="<?php echo get_template_directory_uri() . '/assets/img/header/logo-mobile.webp' ?>"
            alt="Houston Science Festival logo">
        </a>
      </div>

      <div class="hidden lg:block col-start-2 col-end-3 z-[2]">
        <a href="<?php echo home_url();  ?>">
          <img src="<?php echo get_template_directory_uri() . '/assets/img/header/logo-desktop.webp' ?>"
            alt="Houston Science Festival logo">
        </a>
      </div>

      <div class="col-start-4 col-end-5 self-center justify-self-end z-[2] lg:hidden" id='header__mobile-menu-icon'>
        <img src="<?php echo get_template_directory_uri() . '/assets/img/header/hamburger-menu.webp' ?>"
          alt="mobile menu icon">
      </div>

      <nav
        class="hidden col-start-4 col-end-5 row-start-2 row-end-3 justify-self-end lg:block lg:col-start-4 lg:col-end-7 lg:row-start-1 lg:row-end-2 "
        id='navigation'>
        <ul role="list"
          class='inline-flex flex-col justify-center items-end gap-[15px]  lg:gap-[75px] lg:flex-row lg:items-center '>
          <li><a href=" <?php echo esc_url(site_url('/present')); ?>"
              class='text-[color:var(--blue)] lg:text-[color:var(--white)] text-[clamp(1.5rem,0.4758rem_+_5.1209vw,3.75rem)] landscape:text-[1.5rem] min-[884px]:text-[clamp(3rem,-3.3597rem_+_11.5108vw,4rem)] lg:text-[1.5rem] not-italic font-bold leading-[120%] tracking-[-0.48px]'>Present</a>
          </li>
          <li><a href=" <?php echo esc_url(site_url('')); ?>"
              class='text-[color:var(--blue)] lg:text-[color:var(--white)] text-[clamp(1.5rem,0.4758rem_+_5.1209vw,3.75rem)] landscape:text-[1.5rem] min-[884px]:text-[clamp(3rem,-3.3597rem_+_11.5108vw,4rem)] lg:text-[1.5rem] not-italic font-bold leading-[120%] tracking-[-0.48px]'>Volunteer</a>
          </li>
          <li><a href=" <?php echo esc_url(site_url('/sponsor')); ?>"
              class='text-[color:var(--blue)] lg:text-[color:var(--white)] text-[clamp(1.5rem,0.4758rem_+_5.1209vw,3.75rem)] landscape:text-[1.5rem] min-[884px]:text-[clamp(3rem,-3.3597rem_+_11.5108vw,4rem)] lg:text-[1.5rem] not-italic font-bold leading-[120%] tracking-[-0.48px]'>Sponsor</a>
          </li>
          <li class="hidden lg:block">
            <a href=" <?php echo esc_url(site_url('')); ?>" class='button'>Donate</a>
          </li>
        </ul>
      </nav>

      <div class='hidden col-start-3 col-end-5 row-start-3 row-end-4 self-center justify-self-end z-[2] mb-4 lg:hidden'
        id='header__social-media'>
        <p
          class="text-[clamp(1rem,0.9643rem_+_0.1786vw,1.25rem)] not-italic font-normal leading-[160%] text-center text-[color:var(--blue)] mb-[5px]">
          Follow us on socials!</p>
        <ul role="list" class='flex gap-[15px]'>
          <li>
            <a href="<?php echo home_url();  ?>">
              <img
                src="<?php echo get_template_directory_uri() . '/assets/img/social-media/mobile-menu/facebook.webp' ?>"
                alt="facebook logo">
            </a>
          </li>
          <li>
            <a href="<?php echo home_url();  ?>">
              <img
                src="<?php echo get_template_directory_uri() . '/assets/img/social-media/mobile-menu/instagram.webp' ?>"
                alt="instagram logo">
            </a>
          </li>
          <li>
            <a href="<?php echo home_url();  ?>">
              <img
                src="<?php echo get_template_directory_uri() . '/assets/img/social-media/mobile-menu/twitter.webp' ?>"
                alt="twitter logo">
            </a>
          </li>
          <li>
            <a href="<?php echo home_url();  ?>">
              <img
                src="<?php echo get_template_directory_uri() . '/assets/img/social-media/mobile-menu/linkedin.webp' ?>"
                alt="linkedin logo">
            </a>
          </li>
        </ul>
      </div>

    </div>

  </header>

  <main>