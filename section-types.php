<section class="section-types">

<?php

  $page = get_page_by_title('Types of Photography');

?>

  <?php 

    if ( get_field('types_of_photography', $page->ID) ): 
      while ( has_sub_field('types_of_photography', $page->ID) ):

    ?>
    
      <div>
        <?php the_sub_field('label'); ?>
        <img src="<?php the_sub_field('image'); ?>" />
      </div>

    <?php 

      endwhile; 
    endif;

  ?>

</section>