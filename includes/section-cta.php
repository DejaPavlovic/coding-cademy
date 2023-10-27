<?php $cta = get_field('cta_group'); ?>
<div class="cta submit container">
    <div class="row text-center p-5">
      <div class="col">
        <h2 class="fw-bolder"><?php echo $cta['cta_headline']; ?></h2>
        <p class="p-3 lead fw-medium"><?php echo $cta['cta_text']; ?></p>
          <?php if ($cta['cta_button_link']): ?>
                   
                       
                   <a href="<?php echo $cta['cta_button_link']; ?>" class=" btn-success btn-lg">
                      
                       <b><?php echo $cta['cta_button_text']; ?></b>
                   </a>
            
               <?php endif; ?>
      </div>
    </div>
  </div>