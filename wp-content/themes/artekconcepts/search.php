<?php

get_header();

?>
<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="d-flex flex-column ">
            <div class="col-lg-6">
                <header>

                    <?php if (have_posts()) : ?>

                        <h1 class="page-title"><?php printf(__('Search Results for: %s'), '<span>' . get_search_query() . '</span>'); ?></h1>

                    <?php else : ?>

                        <h1 class="page-title"><?php _e('Nothing Found'); ?></h1>

                    <?php endif; ?>

                </header>
            </div>
            <?php while (have_posts()) : the_post(); ?>
            <div class="col">
                <div class="row mb-3">
                    <h3><?php the_title(); ?></h3>
                    <p><?php echo strip_shortcodes(wp_trim_words($post->post_content, 20)); ?></p>
                    <a href="<?php echo get_permalink($post->ID); ?>" class="blog-btn1">READ MORE</a>
                </div>
            </div>
        <?php endwhile; ?>
        </div>
        
    </div>
</div>
<?php

get_footer();
