<?php get_header(); ?>

  <!-- ***************************************************
    Menu
  **************************************************** -->
  <header id="masthead">
    <?php
      get_template_part('template-parts/navigation/navigation', 'noop');
      // get_template_part('template-parts/navigation/navigation', 'wop');
    ?>
  </header>
  <div class="container-fluid px-0"> <!-- page -->

    <?php
      // get_template_part('template-parts/page/content', 'home');
      // get_template_part('template-parts/page/content', 'fonctionnalites');
      // get_template_part('template-parts/page/content', 'exemples');
      get_template_part('template-parts/page/content', 'tarif');
    ?>
<?php get_footer(); ?>
