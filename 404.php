<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Home Word
 */

get_header();
$cat = isset($_GET['cat']) ? $_GET['cat'] : null;
	?>

	<div class="general-content group <?php if ($cat != NULL) {echo $cat.'-content';} ?>">
		<div class="content-section 404">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'homeword' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below.', 'homeword' ); ?></p>
					<?php if ( homeword_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
					<div class="widget categories-404">
						<h4><?php _e( 'Popular Categories', 'homeword' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 0,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->
					<?php endif; ?>
					<h4>Search HomeWord</h4>
					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</div><!-- #main -->
		<?php get_sidebar(); ?>
	</div><!-- #primary -->

<?php get_footer(); ?>