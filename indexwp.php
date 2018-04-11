    <?php get_header(); ?>

    <div class="container content">
      <?php
      if ( have_posts() ) {
        while ( have_posts() ) {
          the_post();
      ?>
          <div id="row post py-5">
            <div class="col-md-12 px-5 titre">
              <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
            </div>
            <div class="col-md-12 px-5 byline">Ecrit par <?php the_author_posts_link(); ?> le <a href="<?php the_permalink(); ?>"><?php the_time('l F d, Y'); ?></a></div>
            <div class="col py-5">
              <?php the_content('Read More..'); ?>
            </div>
          </div>
      <?php
        }
      } else { ?>
        <p>No posts were found. Sorry!")</p>
      <?php } ?>
    </div>

    <?php get_footer(); ?>
