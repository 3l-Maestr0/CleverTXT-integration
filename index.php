<?php get_header(); ?>

  <!-- ***************************************************
    Menu
  **************************************************** -->
  <header id="masthead">
    <?php
      get_template_part('template-parts/navigation/navigation', 'noop');
    ?>
  </header>
  <div class="container-fluid px-0"> <!-- page -->

    <?php
    get_template_part('template-parts/page/content', 'home');
    ?>
<?php get_footer(); ?>
