<?php
/**
 * The template for displaying all pages.
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

			$cat = isset($_GET['cat']) ? $_GET['cat'] : null;
	?>

	<div class="general-content group <?php if ($cat != NULL) {echo $cat.'-content';} ?>">
		<div class="content-section page">

				<?php get_template_part( 'content', 'page' ); ?>


			<?php endwhile; // end of the loop. ?>
			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
		</div><!-- content-section -->
		<?php get_sidebar(); ?>
	</div><!-- .general-content -->


<?php get_footer(); ?>
