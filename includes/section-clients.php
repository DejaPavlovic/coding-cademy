<?php $clients = get_field('clients_group'); ?>



<section class="clients container-fluid pt-4 pb-5" id="clients">
    <h2 class="py-3 text-center"><?php echo $clients['clients_title']; ?></h2>
    <p class="lead fw-normal text-center"><?php echo $clients['clients_subtitile']; ?></p>


    <div class="row container m-auto justify-content-between">
        <?php
        //ovde mozete promeniti slike
        $logos = array(
            array('url' => 'logo1-removebg-preview.png', 'alt' => 'Logo 1'),
            array('url' => 'logo2-removebg-preview.png', 'alt' => 'Logo 2'),
            array('url' => 'logo3-removebg-preview.png', 'alt' => 'Logo 3'),
            array('url' => 'logo4-removebg-preview.png', 'alt' => 'Logo 4'),
            array('url' => 'logo5-removebg-preview.png', 'alt' => 'Logo 5'),
        );

        foreach ($logos as $logo) :
        ?>
            <div class="col-md-2 col-sm-6">
                <div class="card" style="border: none;">
                    <img src="<?php echo get_template_directory_uri() . '/img/' . $logo['url']; ?>" class="card-img-top" style="background: #23CD6B; border: none;" alt="<?php echo esc_attr($logo['alt']); ?>">
                </div>
            </div>
        <?php
        endforeach;
        ?>
    </div>
  </section>