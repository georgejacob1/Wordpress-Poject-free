<?php
get_header();
?>

<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <i class="bi bi-exclamation-triangle display-1 text-primary"></i>
                    <h1 class="display-1">404</h1>
                    <h1 class="mb-4"><?php _e( 'Oops! That page can&rsquo;t be found.'); ?></h1>
                    <p class="mb-4"><?php _e( 'It looks like nothing was found at this location. Maybe try a search?'); ?></p>
                    <?php get_search_form(); ?>
                    <!-- <a class="btn btn-primary py-3 px-5" href="">Go Back To Home</a> -->
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
