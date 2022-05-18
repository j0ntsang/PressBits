<?php

/**
 * Template Name: 10up Frontend Challenge
 *
 * @package PressBits
 *
 * # 10up Front End Engineering Technical Challenge
 * Your mission to create a basic web page layout from the attached design.
 * The purpose of this exercise is to test your HTML, CSS, and JavaScript skillset
 * through the lens of maintainability, responsiveness, accessiblity, performance,
 * design integrity, and general attention to detail.
 *
 * While we are only providing larger screen high fidelity mock ups, we expect you
 * to implement a fully responsive layout using your best judgement. We believe that
 * finely crafted web designs comes to life in the browser, not in static mock ups,
 * and we'd love to see how you approach design implementation choices in the absence
 * of a complete articulation by a visual designer.
 *
 * Our more senior Front End Engineering roles at 10up also carry an expectation of
 * _basic_ WordPress theming capabilities. If you are seeking a more senior position,
 * please prepare your exercise as a basic WordPress theme that we can activate.
 * We are _not_ looking for each component of the page to be fully editable or custom blocks,
 * or for the ability to create other pages or content beyond the home page.
 * Rather, we expect some basic data to be provided by WordPress (e.g. the title tag),
 * and some more routine content like the navigation menu to be managed by WordPress.
 * The home page content itself can otherwise be assumed to be static.
 *
 * __Please do not use a starter theme to complete this exercise__
 *
 * While we will sometimes use internal frameworks and starter themes inside 10up,
 * we ideally want to gauge your ability to architect every aspect of the layout.
 *
 * Otherwise, use your best judgement when it comes to any decisions or requirements
 * not defined in this exercise, including potential modules, libraries, or frameworks
 * used to create the interface, so long as you reasonably adhere to modern front end best practices.
 *
 * Please keep track of your time (at least loosely), as we'd like to understand roughly
 * how much effort went into your outcome and make sure that we aren't overwhelming candidates
 * with our exercises. If you don't have time to finish every aspect of the project,
 * just make sure the parts you do finish are complete and set our expectations.
 *
 * It's perfectly fine to simply describe a few changes / enhancements you're aware of
 * that you'd work on with more time.
 *
 * Please include all source and build process configuration files in your submission.
 *
 * ## Fonts
 * Montserrat: https://fonts.google.com/specimen/Montserrat
 * Cousine: https://fonts.google.com/specimen/Cousine
 *
 * ### Sizes
 * - Hero Heading: 64px
 * - Content: 20px
 * - Buttons: 20px
 * - Menu Items: 28px

 * ## Colors
 * - #081523 - Content text
 * - #01FDAB - Hero eyebrow text
 * - #0262F0 - White panel eyebrow text
 * - #010203 - Menu and footer background
 * - #091523 -> #0E253F - Hero background gradient
 *
 *
 * ## Assets
 *
 * Desktop comps are located in `/designs`, icons are in `/icons` and images are in `/images`.
 *
 * If you have any questions or get stuck, please reach out to the 10up Recruiting team.
 *
 * Good luck!
 *
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <title><?php echo get_bloginfo('name'); ?></title>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cousine:wght@700&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body class="body">
  <header class="header">
    <a class="logo" href="<?php echo get_bloginfo('wpurl'); ?>" aria-label="Go back to the Home page">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/10up/icons/site_logo.svg" alt="" role="presentation" />
    </a>
    <div class="navigation">
    <button class="navigation__open-button" aria-label="Open navigation menu">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/10up/icons/Icon:Menu.svg" alt="" role="presentation" />
    </button>
    <nav class="navigation__menu">
      <button class="navigation__close-button" aria-label="Close navigation menu">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/10up/icons/Icon:Close.svg" alt="" role="presentation" />
      </button>
      <?php wp_nav_menu(array('theme_location' => '10up_navigation')); ?>
    </nav>
  </div>
  </header>
  <main class="page" id="content">
    <section class="call-to-action call-to-action--hero" data-section-theme="dark">
      <div class="call-to-action__wrapper">
        <div class="call-to-action__content call-to-action__content--left">
          <span class="call-to-action__eyebrow">Who we are</span>
          <h2 class="call-to-action__heading call-to-action__heading--hero">Engage brand and increase viewability.</h2>
          <p class="call-to-action__description">Elementum sagittis vitae et leo duis ut. Eu feugiat pretium nibh ipsum consequat</p>
          <aside class="call-to-action__button-group">
            <a class="call-to-action__button call-to-action__button--primary" href="#download">Download</a>
            <a class="call-to-action__button call-to-action__button--secondary" href="#learn-more">Learn More</a>
          </aside>
        </div>
        <picture class="call-to-action__decorative-picture" aria-hidden="true">
        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/10up/images/Device_Ipad.png" media="(min-width: 992px)" type="image/png">
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/10up/images/Device_Ipad_2.png" media="(min-width: 768px)" type="image/png">
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/10up/images/Device_Ipad_3.png" type="image/png">
          <img class="call-to-action__decorative-image" src="<?php echo get_template_directory_uri(); ?>/assets/10up/images/Device_Ipad_3.png" alt="" role="presentation" />
        </picture>
      </div>
    </section>
    <section class="call-to-action call-to-action--feature" data-section-theme="light">
      <div class="call-to-action__wrapper">
        <picture class="call-to-action__decorative-picture" aria-hidden="true">
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/10up/images/Device_Mobile.png" media="(min-width: 992px)" type="image/png">
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/10up/images/Device_Mobile_2.png" media="(min-width: 768px)" type="image/png">
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/10up/images/Device_Mobile_3.png" type="image/png">
          <img class="call-to-action__decorative-image" src="<?php echo get_template_directory_uri(); ?>/assets/10up/images/Device_Mobile_3.png" alt="" role="presentation" />
        </picture>
        <div class="call-to-action__content call-to-action__content--right">
          <span class="call-to-action__eyebrow">Eyebrow</span>
          <h2 class="call-to-action__heading">Generating relevant & engaging content</h2>
          <p class="call-to-action__description">Non diam phasellus vestibulum lorem sed. Massa enim nec dui nunc mattis enim. Quisque egestas diam in arcu cursus euismod quis viverra. Eget arcu dictum varius duis at consectetur orem donec massa.</p>
        </div>
      </div>
    </section>
    <section class="call-to-action call-to-action--contact" data-section-theme="dark">
      <div class="call-to-action__wrapper">
        <div class="call-to-action__content call-to-action__content--center">
          <span class="call-to-action__eyebrow">Eyebrow</span>
          <h2 class="call-to-action__heading">Integrated tech</h2>
          <p class="call-to-action__description">Create custom solutions with the aim to improve overall outcomes.</p>
          <a class="call-to-action__button call-to-action__button--primary" href="#contact-us">Contact Us</a>
        </div>
        <picture class="call-to-action__background" aria-hidden="true">
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/10up/images/Phone.png" media="(min-width: 992px)" type="image/png">
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/10up/images/Phone_2.png" media="(min-width: 768px)" type="image/png">
          <source srcset="<?php echo get_template_directory_uri(); ?>/assets/10up/images/Phone_3.png" type="image/png">
          <img class="call-to-action__background-image" src="<?php echo get_template_directory_uri(); ?>/assets/10up/images/Phone_3.png" alt="" role="presentation" />
        </picture>
      </div>
    </section>
  </main>
  <footer class="footer">
    <a class="footer__logo" href="https://10up.com/" target="_blank" aria-label="Click to go to 10up website">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/10up/icons/10up_Logo.svg" role="presentation" />
    </a>
  </footer>
  <?php wp_footer(); ?>
</body>