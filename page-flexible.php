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
	
		while ( have_posts() ) : the_post();
			if( current_user_can( 'wc_memberships_view_restricted_post_content', get_the_ID() ) ):
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
			if ( post_password_required() ) :
				echo '<div class="password-form">';
				echo get_the_password_form();
				echo '</div>';
			else:
			
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
			endif;
				?>
			</div><!-- general-content -->

	<?php
			else:
				if(is_user_logged_in()) {
					echo '<div class="content-wrap">';
					echo '<div class="content-restricted">';
					echo '<p>This content requires a purchase. Please <a href = "'.get_permalink( woocommerce_get_page_id( 'shop' ) ).'">visit our store for more details</a>.';
					echo '</div>';
				} else {
					echo '<div class="content-wrap">';
					echo '<div class="content-restricted">';
					if($_GET['login'] == 'failed') {
						echo '<div class="notification">Your email or password were incorrect.</div>';
					}
					echo '<p>This content requires you to be logged in to gain access.</p>';
					wp_login_form(array('redirect'=>( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],'value_remember'=>1));
					echo '<p class="lost-password"><a href = "'.wc_get_endpoint_url( 'lost-password' ,'',wc_get_page_permalink( 'myaccount' )).'">Lost your password?</a></p>';
					echo '</div>';
					echo '</div>';
				}
			endif;
		endwhile; // end of the loop.
	 ?>



<?php get_footer(); ?>
