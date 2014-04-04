<section class="section-home">

  <?php if ( has_post_thumbnail() ): ?>
  <?php the_post_thumbnail(); ?>
  <?php endif; ?>
  
  <?php the_content(); ?>

</section>