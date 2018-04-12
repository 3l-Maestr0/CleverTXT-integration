<?php get_header(); ?>

  <!-- ***************************************************
    Menu
  **************************************************** -->
  <header id="masthead">
    <?php get_template_part('template-parts/navigation/navigation', 'wop') ?>
  </header>
  <div class="container-fluid px-0" id="myPage"> <!-- page -->

    <?php get_template_part('template-parts/page/content', 'home') ?>
    <?php /*get_template_part('template-parts/page/content', 'exemples') */?>
<?php get_footer(); ?>
