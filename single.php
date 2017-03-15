<?php get_header(); ?>

  <!-- Begin Single Content -->
  <div class="seven columns offset-by-one">
    <nav>
      <ul>
        <li><a href="http://www.memoriesbyjmf.com/spring2017/">Home</a></li>
        <li><a href="http://jmfimagery.wordpress.com/about/" target="_blank">About the Author</a></li>
        <li><a href="http://onlinemasters.jou.ufl.edu/web-design/" target="_blank">Learn about the WDOC Program</a></li>
      </ul>
    </nav>
    <main id="single_and_page">
      <!-- Begin Loop -->
  		<?php if ( have_posts() ) {
        while( have_posts() ) {
          the_post();
          if ( has_post_thumbnail () ) { ?>
            <div class="post-thumbnail">
              <?php the_post_thumbnail('large'); ?>
            </div>
          <?php } ?>

          <h4><?php the_title(); ?></h4>
          <?php the_content();
        }
      } ?>
      <!-- End Loop -->
    </main>
    <?php get_footer(); ?>
  </div>
  <!-- End Single Content -->
  <?php get_sidebar(); ?>
