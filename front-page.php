<?php
/**
 * Home Page
 *
* @package dj
*/


get_header(); ?>

	<div id="content" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class('wrapper'); ?>>

				<?php get_template_part('section','home'); ?>
				<?php get_template_part('section', 'moments'); ?>
				<?php get_template_part('section', 'stats'); ?>
				<?php get_template_part('section', 'about'); ?>
				<?php get_template_part('section', 'types'); ?>
				<?php get_template_part('section', 'clients'); ?>
				<?php get_template_part('section', 'contact'); ?>
				
			</article><!-- #post-<?php the_ID(); ?> -->
		<?php endwhile; // end of the loop. ?>
	</div><!-- #content -->

<?php get_footer(); ?>