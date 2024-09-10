<?php

get_header();

?>
<section class="conten-wrapp blog-wrapp">
    <div class="margin">

        <!-- <?php get_search_form(); ?> -->
        <?php if (have_posts()) : ?>
            <div class="blog-col1">

                <?php
                while (have_posts()) : the_post();
                ?>
                    <div class="blog-col2">
                        
                        <div class="blog-row2">
                            <h2><?php echo get_the_date('d / m / Y', $post->ID); ?></h2>
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_content(); ?></p>
                            <!-- <a href="<?php echo get_permalink($post->ID); ?>" class="blog-btn1">READ MORE</a> -->
                        </div>
                    </div>
                <?php endwhile; ?>

            </div>


            <div class="paiger-wrapp">
                <div class="paiger-col1">
                    <?php

                    the_posts_pagination(array(

                        'prev_text' => '<span class="paiger-btn1 ">' . __('Back') . '</span>',

                        'next_text' => '<span class="paiger-btn2 ">' . __('next') . '</span>',

                        'before_page_number' => '',

                        'screen_reader_text' => '&nbsp;',

                    )); ?>

                </div>
            </div>
        <?php

        else :

            echo '<h2>No blog posts found.</h2>';

        endif; ?>

    </div>

</section>

<?php

get_footer();

?>