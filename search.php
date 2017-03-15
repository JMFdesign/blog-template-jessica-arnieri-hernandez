<?php
/* Template Name: Search Page */

  get_header(); ?>
  <!-- Begin Search Content -->
  <div class="seven columns offset-by-one">
    <nav>
      <ul>
        <li><a href="http://www.memoriesbyjmf.com/spring2017/">Home</a></li>
        <li><a href="http://jmfimagery.wordpress.com/about/" target="_blank">About the Author</a></li>
        <li><a href="http://onlinemasters.jou.ufl.edu/web-design/" target="_blank">Learn about the WDOC Program</a></li>
      </ul>
    </nav>
    <main>
      <h1>
        <?php printf(
          __('Search Results for: %s'),
          '<span>' . get_search_query() . '</span>' );
        ?>
      </h1>

      <?php if (have_posts()) :
        while ( have_posts() ) : the_post(); ?>
            <section>
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <p><?php the_excerpt(); ?></p>
              <div class="add_bottom_padding">
                <a href="<?php the_permalink(); ?>">Read More</a>
              </div>
            </section>
        <?php endwhile;
      else: ?>
        <h1>Nothing Found</h1>
        <p>Sorry, we could not find any posts that match your search criteria.  Please try again with different search terms.</p>
      <?php endif;
      ?>
    </main>
    <?php get_footer(); ?>
  </div>
  <!-- End Search Content -->
  <?php get_sidebar(); ?>
