<div class="steps container-fluid" id="projects">
    <div class="container">
      <div class="row">
      <?php
$query = new WP_Query(array('post_type' => 'step'));

if ($query->have_posts()) :
    $counter = 1;
    while ($query->have_posts()) : $query->the_post();
?>
        <div class="s-step col-sm-12 col-md-4">
        <h2><?php echo $counter; ?></h2>
          <h3><?php the_title(); ?></h3>
          <p><?php the_content(); ?></p>
        </div>
        <?php
             $counter++;
    endwhile;
    wp_reset_postdata();
else :
    echo __('Nema jos clanova');
endif;
?>
        
      </div>
    </div>
  </div>