<?php $info = get_field('showcase_group'); ?>

<div class="desc container py-5">
    <div class="row">
      <div class="col-sm-12 col-md-4">
        <h3><?php echo $info['naslov_jedan']; ?></h3>
        <p class="lead fw-semibold"><?php echo $info['tekst_jedan']; ?></p>
      </div>
      <div class="col-sm-12 col-md-4">
        <h3><?php echo $info['naslov_dva']; ?></h3>
        <p class="lead fw-semibold"><?php echo $info['tekst_dva']; ?></p>
      </div>
      <div class="col-sm-12 col-md-4">
        <h3><?php echo $info['naslov_tri']; ?></h3>
        <p class="lead fw-semibold"><?php echo $info['tekst_tri']; ?></p>
      </div>
    </div>
  </div>