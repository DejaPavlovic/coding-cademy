<?php $team = get_field('team_group'); ?>

<section id="team" class="team container">
    <div class="row p-4">
      <h2><?php echo $team['team_title']; ?></h2>
      <p class="lead fw-normal text-center crews"><?php echo $team['team_subtitile']; ?></p>
      

      <?php
$query = new WP_Query(array('post_type' => 'crew'));

if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
?>
        <div class="col-sm-12 col-md-4 pb-5">
            <div class="card" style="background: #23CD6B;">
                <?php
              
                if (has_post_thumbnail()) {
                    the_post_thumbnail('thumbnail', ['class' => 'card-img-top', 'alt' => get_the_title()]);
                } else {
                ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/default-image.jpg" class="card-img-top" alt="Default Image">
                <?php
                }
                ?>
                <div class="card-body">
                    <h3 class="py-3 text-center"><?php the_title(); ?></h3>
                    <p class="card-text"><?php the_content(); ?></p>
                </div>
            </div>
        </div>
<?php
    endwhile;
    wp_reset_postdata();
else :
    echo __('Nema jos clanova', 'Code Cademy');
endif;
?>


    </div>
  </section>