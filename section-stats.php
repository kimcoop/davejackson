<section class="section-stats">

<?php

  $page = get_page_by_title('Statistics');

?>

  <div class="row">

    <div class="col col-3"><?php the_field('num_clients_served', $page->ID); ?></div>
    <div class="col col-3"><?php the_field('num_presidents_photographed', $page->ID); ?></div>
    <div class="col col-3"><?php the_field('num_cameras_owned', $page->ID); ?></div>

  </div>

</section>