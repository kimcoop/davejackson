<section class="section-clients">

<?php

  $page = get_page_by_title('Clients');

?>

  <?php 

    if ( get_field('recommendations', $page->ID) ): 
      while ( has_sub_field('recommendations', $page->ID) ):

    ?>
    
      <div>
        <?php the_sub_field('content'); ?>
        <img src="<?php the_sub_field('image'); ?>" />
        <?php the_sub_field('source'); ?>
      </div>

    <?php 

      endwhile; 
    endif;

  ?>

</section>