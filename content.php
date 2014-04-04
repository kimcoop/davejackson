<?php
/**
 * The default template for displaying content
 *
* @package dj
*/
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<span class="entry-date"><?php echo get_the_date(); ?></span>
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'dj' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>
	
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'dj' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->

	<footer class="entry-meta">
		<span class="comments-link"><?php comments_popup_link( '<span class="leave-reply">' . __( 'No comments', 'dj' ) . '</span>', __( '<b>1</b> comment', 'dj' ), __( '<b>%</b> comments', 'dj' ) ); ?></span>
	</footer><!-- #entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
