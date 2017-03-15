<?php get_header(); ?>

  <!-- Begin Page Content -->
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
          /* OUR DATA CONTEXT IS DEFINED 	*/
          the_post(); ?>

          <h2><?php the_title(); ?></h2>
          <?php the_content();
        }
      } ?>
      <!-- End Loop -->
    </main>
    <?php get_footer(); ?>
  </div>
  <!-- End Page Content -->

  <?php get_sidebar(); ?>
