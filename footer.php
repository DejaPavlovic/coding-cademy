<?php $footer = get_field('footer_group'); ?>
<footer class="footer">
    <div class="container">
        <div class="row py-5 justify-contete-between">
            <div class="col-md-4  ">
                <h4>
                    <?php echo $footer['contact_us_input']; ?>
                </h4>
                <p>
                    <?php echo $footer['contact_us_input-1']; ?>
                </p>
                <p>
                    <?php echo $footer['contact_us_input-2']; ?>
                </p>
                <p>
                    <?php echo $footer['contact_us_input-3']; ?>
                </p>
                <p>
                    <?php echo $footer['contact_us_input-4']; ?>
                </p>
            </div>
            <div class="col-md-4  ">
                <h4>
                    <?php echo $footer['company_input']; ?>
                </h4>
                <p>
                    <?php echo $footer['company_input-1']; ?>
                </p>
                <p>
                    <?php echo $footer['company_input-2']; ?>
                </p>
                <p>
                    <?php echo $footer['company_input-3']; ?>
                </p>
                <p>
                    <?php echo $footer['company_input-4']; ?>
                </p>
            </div>
            <div class="col-md-4 social_media ">
                <h4>Social Network</h4>
                <p><a href="<?php the_field('facebook'); ?>">Facebook</a></p>
                <p><a href="<?php the_field('twitter'); ?>">Twitter</a></p>
                <p><a href="<?php the_field('instagram'); ?>">Instagram</a></p>
                <p><a href="<?php the_field('youtube'); ?>">Youtube</a></p>
            </div>
        </div>
    </div>
</footer>
<?php get_template_part( 'includes/section', 'media' ); ?>
<?php wp_footer(); ?>
</body>

</html>