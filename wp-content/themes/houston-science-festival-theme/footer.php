</main>


<footer class='footer mt-[10rem]'>

  <div class="wrapper py-[9rem] md:pt-[13rem] lg:pt-[32rem] lg:grid lg:grid-cols-2 lg:items-center gap-[50px]">

    <div class='lg:col-start-2 lg:col-end-3 lg:row-start-1 lg:row-end-2'>
      <h2
        class='text-[clamp(1.5rem,1.357rem_+_0.714vw,2.5rem)] not-italic font-bold leading-[120%] tracking-[-0.48px] md:tracking-[-0.8px] mb-[25px]'>
        Contact Us!</h2>

      <form class='flex flex-col  gap-[25px] mb-[91px]'>
        <input type="text" placeholder='First Name'
          class='flex items-center gap-2.5 bg-[color:var(--white)] px-5 py-2.5 max-w-full text-[var(--blue)] placeholder:text-[var(--blue)] lg:w-[282px]'>
        <input type="email" placeholder='Email'
          class='flex items-center gap-2.5 bg-[color:var(--white)] px-5 py-2.5 max-w-full text-[var(--blue)] placeholder:text-[var(--blue)] lg:w-[282px]'>
        <textarea name="message" id="message" cols="30" rows="10" placeholder='Message'
          class='flex max-w-full h-[100px] items-start gap-2.5 px-5 py-2.5 text-[var(--blue)] placeholder:text-[var(--blue)] mb-[15px] lg:w-[519px] lg:h-[171px]'></textarea>
        <input type="submit" value='Send'
          class='max-w-[202px] flex justify-center items-center gap-2.5 border-[color:var(--blue)] bg-[color:var(--white)] px-[75px] py-2.5 border-2 border-solid text-[color:var(--blue)] text-base not-italic font-bold leading-[120%] tracking-[0.32px] transition-all duration-[0.35s] ease-[ease-in-out] hover:border-[color:var(--white)] hover:bg-[color:var(--blue)] hover:text-[color:var(--white)] hover:border-2 hover:border-solid'>
      </form>
    </div>

    <div class='lg:col-start-1 lg:col-end-2 self-start lg:row-start-1 lg:row-end-2'>

      <h2
        class='text-[clamp(1.5rem,1.357rem_+_0.714vw,2.5rem)] not-italic font-bold leading-[120%] tracking-[-0.48px] md:tracking-[-0.8px]'>
        Follow us on socials!</h2>

      <ul class='flex gap-[15px] mt-[25px]'>
        <li>
          <a href="">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/footer/icons8-facebook-100 1(1).png' ?>"
              alt="facebook logo">
          </a>
        </li>
        <li>
          <a href="<?php echo home_url();  ?>">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/footer/icons8-instagram-100 1.png' ?>"
              alt="instagram logo">
          </a>
        </li>
        <li>
          <a href="<?php echo home_url();  ?>">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/footer/icons8-twitter-100 1.png' ?>"
              alt="twitter logo">
          </a>
        </li>
        <li>
          <a href="<?php echo home_url();  ?>">
            <img src="<?php echo get_template_directory_uri() . '/assets/img/footer/icons8-linkedin-100 1.png' ?>"
              alt="linkedin logo">
          </a>
        </li>
      </ul>

      <ul class='flex flex-col items-start mt-[65px] lg:hidden'>
        <li class='mb-[-1rem]'>
          <img src="<?php echo get_template_directory_uri() . '/assets/img/footer/beidges-to-science--mobile.png' ?>"
            alt="beidges to science logo">
        </li>
        <li class='ml-[-1rem]'>
          <img src="<?php echo get_template_directory_uri() . '/assets/img/footer/hsf--mobile.png' ?>"
            alt="houston science festival logo">
        </li>
        <li class='mt-[-1rem]'>
          <img src="<?php echo get_template_directory_uri() . '/assets/img/footer/alliance--mobile.png' ?>"
            alt="alliance logo">
        </li>
      </ul>

    </div>

    <div class='hidden lg:block lg:col-start-1 lg:col-end-3 lg:mt-[100px]'>
      <ul class=' lg:flex lg:justify-between items-center'>
        <li class='mb-[-1rem]'>
          <img src="<?php echo get_template_directory_uri() . '/assets/img/footer/beidges-to-science--desktop.png' ?>"
            alt="beidges to science logo">
        </li>
        <li class='ml-[-1rem]'>
          <img src="<?php echo get_template_directory_uri() . '/assets/img/footer/hsf--desktop.png' ?>"
            alt="houston science festival logo">
        </li>
        <li class='mt-[-1rem]'>
          <img src="<?php echo get_template_directory_uri() . '/assets/img/footer/alliance--desktop.png' ?>"
            alt="alliance logo">
        </li>
      </ul>
    </div>

  </div>

</footer>


<?php wp_footer(); ?>
</body>

</html>