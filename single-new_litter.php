<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Dog Theme 1
 * @since Dog Theme 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content sidebar">

		<h1><?php the_title(); ?></h1>
		<div class="main-content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php  
				$puppy = get_field('puppy');
				$parents = get_field('parents');
				$link = get_field('site_link');
				$image_1 = get_field('image_1');

				?>
				<article class = "new-litter">
					<aside class = "new-litter-sidebar">
					<h2><?php the_title(); ?></h2>
					<div class = "new-litter-images">
						<img src="<?php echo $image_1; ?>"/>

					</div>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- .main-content -->

		<?php get_sidebar(); ?>

	</div><!-- #primary -->

<?php get_footer(); ?>
