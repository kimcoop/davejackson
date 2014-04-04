<section class="section-moments">

<?php

  $page =  get_page_by_title('Moments');
  echo $page->post_content;

?>

  <div class="row">
    <?php

      while ( has_sub_field('moments', $page->ID) ):

        $image_url = get_sub_field('image', $page->ID); 

        ?>

        <a href=""><img src="<?php echo $image_url; ?>" /></a>

      <?php

        endwhile; 

      ?>

  </div>

</section>