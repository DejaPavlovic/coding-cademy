
<?php $showbox = get_field('showbox_group'); ?>

<section class="showbox container-fluid">
    <div class="content container">
      <div class="row ">
        <div class="col-md-8">
          <div class="text">
            <h1><?php echo $showbox['title']; ?></h1>
            <p><?php echo $showbox['subtitle']; ?></p>
            <?php if ($showbox['dugme_link']): ?>
                   
                       
                        <a href="<?php echo $showbox['dugme_link']; ?>" class="btn btn-success">
                           
                            <b><?php echo $showbox['dugme_tekst']; ?></b>
                        </a>
                 
                    <?php endif; ?>

          </div>
        </div>
        <div class="col-md-4">
          <div class="icon">
            <span style="font-size: 20rem;">{...}</span>
          </div>

        </div>
      </div>
    </div>
  </section>