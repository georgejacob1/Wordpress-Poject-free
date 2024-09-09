<?php

/**
 * * Template Name: gallery Page
 *
 */

get_header();

?>
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <?php while (have_posts()) : the_post(); ?>

                    <?php the_content(); ?>

                <?php endwhile; ?>

                <?php wp_reset_query(); ?>
            </div>
        </div>
        <?php echo do_shortcode('[modula id="35"]'); ?>
    </div>
</div>
<?php

get_footer();
?>