<?php
/*
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Dog Theme 1.0
 */
get_header(); ?>
  <!-- BLOG PAGE -->
  <section class="index-page">
    <div class="site-content">
      <div class="main-content">
        <?php if ( have_posts() ): ?>
          <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part('content-blog', get_post_format()); ?>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>

    </div>
  </section>

  <nav id="navigation" class="container">
    <div class="left"><?php next_posts_link('&larr; <span>Older Posts</span>'); ?></div>
    <div class="pagination">
      <?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        echo 'Page '.$paged.' of '.$wp_query->max_num_pages;
      ?>
    </div>
    <div class="right"><?php previous_posts_link('<span>Newer Posts</span> &rarr;'); ?></div>
  </nav>

<?php get_footer();    