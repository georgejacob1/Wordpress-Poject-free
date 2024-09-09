<?php

get_header();



?>

<section class="conten-wrapp blogin-wrapp common-style">
    <div class="margin">

        <div class="blogin-col1">

            <div class="blogin-row2">
                <h2><?php echo get_the_date('d / m / Y', $post->ID); ?></h2>
                <h3><?php the_title(); ?></h3>
                <?php while (have_posts()) : the_post(); ?>

                    <?php the_content(); ?>

                <?php endwhile; ?>

                <?php wp_reset_query(); ?>



                        <a href="<?php echo get_permalink(8); ?>" class="blogin-btn1">Back to Blog</a>

                   

                <?php wp_reset_query(); ?>

            </div>
        </div>
    </div>
    <!--conten-texture-grey-square-shape-->
    <div class="conten-texture-grey-square-shape1">
        <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/about-texture-grey-square-shape1.svg" alt="conten texture grey square shape1">
    </div>
    <div class="conten-texture-grey-square-shape2">
        <img loading="lazy" src="<?php echo TEMPLATE_URL; ?>images/conten-shape1.svg" alt="conten texture grey square shape1">
    </div>
</section>



<?php

get_footer();
