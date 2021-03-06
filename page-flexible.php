<?php
/**
 * Template name: Flexible Layout
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Home Word
 */

get_header(); ?>
	<?php
		$displaySlider = get_field('display_slider');
		if ($displaySlider == 'Yes') :
			get_template_part( 'content', 'slider' );
			wp_reset_postdata();
		elseif ($displaySlider == 'Image') :
			$image = get_field('top_image');
			if( !empty($image) ):
	?>

	<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="top-image"/>

	<?php
			endif;
		endif;
	?>


	<?php
		while ( have_posts() ) : the_post();
			if( get_field('custom_sidebar') ): ?>
			<div class="general-content group">
				<div class="content-section">
			<?php else : ?>
			<div class="general-content group">
				<div class="content-wrap full">
			<?php endif; ?>

				<?php get_template_part( 'content', 'flexible' ); ?>

			</div><!-- content-wrap -->
			<?php
				if( get_field('custom_sidebar') ) {
					get_sidebar('flexible');
				}
			?>
		</div><!-- general-content -->

	<?php endwhile; // end of the loop. ?>



<?php get_footer(); ?>
