<?php

get_header();

?>

<section class="conten-wrapp abouts-wrapp common-style about-extra">
	<div class="margin">
    
		<div class="abouts-col1">
        <?php while(have_posts()):the_post();?>

        <?php the_content(); ?>

        <?php endwhile; ?>

        <?php wp_reset_query(); ?>

        </div>
        
    </div>
        
</section>



<?php

get_footer();

