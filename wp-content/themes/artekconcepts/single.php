<?php

get_header();



?>
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col">
            <h3><?php the_title(); ?></h3>
                <?php while (have_posts()) : the_post(); ?>

                    <?php the_content(); ?>

                <?php endwhile; ?>

                <?php wp_reset_query(); ?>
            </div>
        </div>
        <div class="text-center"><a class="btn btn-primary py-3 px-5 mt-5" href="<?php echo get_permalink(8); ?>">Back to Services</a></div>
    </div>
</div>

<?php

get_footer();
