<?php
/**
 * Template for displaying search forms 
 */

?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">

	<label for="<?php echo $unique_id; ?>">

		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label'); ?></span>

	</label>

	<input type="search" id="<?php echo $unique_id; ?>" class="search-field" placeholder="Search" value="<?php echo get_search_query(); ?>" name="s" />

	<button type="submit" class="btn btn-primary py-3 px-5"><?php echo _x( 'Search', 'submit button' ); ?></button>
	
</form>
