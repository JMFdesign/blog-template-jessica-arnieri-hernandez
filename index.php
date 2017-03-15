<?php get_header(); ?>
<!--Continuation of Body Tag from Header-->

  <!-- Begin Index Content -->
  <div class="seven columns offset-by-one">
    <main>
      <h1>Recent Blog Posts</h1>
      <!-- Begin Loop -->
      <?php
        if ( have_posts() ) {
          while ( have_posts() ) {
            the_post(); ?>

            <section>
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <?php the_excerpt(); ?>
              <div class="add_bottom_padding">
                <a href="<?php the_permalink(); ?>">Read More</a>
              </div>
            </section>

          <?php
          } //end while
        } //end if
      ?>
      <!-- End Loop -->
    </main>
    <?php get_footer(); ?>
  </div>
  <!-- End Index Content -->

  <?php get_sidebar(); ?>
