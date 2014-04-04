<section class="section-about">

<?php

  $page = get_page_by_title('About');

?>

  <?php 

    if ( get_field('timeline', $page->ID) ): 
      while ( has_sub_field('timeline', $page->ID) ):

    ?>
    
      <div>
        <?php the_sub_field('year'); ?>
        <?php the_sub_field('text'); ?>
      </div>

    <?php 

      endwhile; 
    endif;

  ?>

</section>