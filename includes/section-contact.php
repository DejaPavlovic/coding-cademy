<?php $contact = get_field('contact_group'); ?>

<div class="container contact py-5" id="contact">
    <div class="row justify-content-between">
      <div class="col-md-5" style="background-color: #23CD6B;">
        <div class="p-4">
          <h2><?php echo $contact['contact_title']; ?></h2>
          <h4 class="py-3"><?php echo $contact['contact_adress']; ?></h4>
          <p><?php echo $contact['contact_text']; ?></p>
          <div class="pt-5">
            <p class="lead d-flex justify-content-end""><?php echo $contact['contact_num_1']; ?></p>
            <p class=" lead d-flex justify-content-end""><?php echo $contact['contact_num_2']; ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <h2>Send us a message</h2>
        <form action="/action_page.php">
        <?php echo do_shortcode('[contact-form-7 id="45a4c42" title="Contact form-2"]'); ?>

        </form>
      </div>
    </div>
  </div>