<?php
/* Template Name: Archive Page */

  get_header(); ?>
  <!-- Begin Archive Content -->
  <div class="seven columns offset-by-one">
    <nav>
      <ul>
        <li><a href="http://www.memoriesbyjmf.com/spring2017/">Home</a></li>
        <li><a href="http://jmfimagery.wordpress.com/about/" target="_blank">About the Author</a></li>
        <li><a href="http://onlinemasters.jou.ufl.edu/web-design/" target="_blank">Learn about the WDOC Program</a></li>
      </ul>
    </nav>
    <main>
      <section>
        <h1>Archives</h1>
        <?php if ( have_posts() ) :
          // The Loop
          while ( have_posts() ) : the_post(); ?>
          <!-- data content -->
            <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
            <p><?php the_excerpt(); ?></p>
          <?php endwhile;
        else: ?>
          <p>Sorry, we could not find any posts that match your search criteria.</p>
        <?php endif; ?>
      </section>

      <section>
    		<h2>Archives by Month:</h2>
    		<ul>
    			<?php wp_get_archives('type=monthly'); ?>
    		</ul>
      </section>

      <section>
    		<h2>Archives by Category:</h2>
    		<ul>
    			 <?php wp_list_categories(); ?>
    		</ul>
      </section>
    </main>
    <?php get_footer(); ?>
  </div>

  <?php get_sidebar(); ?>
