<?php
/**
 * Single product short description
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/short-description.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  Automattic
 * @package WooCommerce/Templates
 * @version 3.3.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

global $post;

$short_description = apply_filters( 'woocommerce_short_description', $post->post_content );

if ( ! $short_description ) {
	return;
}

?>
<div class="woocommerce-product-details__short-description">
	<?php if(get_field('english_option')) : ?>
		<div class="regular-tabs group">
			<ul class="nav nav-tabs regular-tab-nav">
				<li class="active"><a href = "#spanish" data-toggle="tab">Spanish</a></li>
				<li><a href = "#english" data-toggle="tab">English</a></li>
			</ul>
			<div class="tab-content regular-tab-content">
				<div class="tab-pane active" id="spanish">
					<?php echo $short_description; // WPCS: XSS ok. ?>
				</div>
				<div class="tab-pane" id="english">
					<?php the_field('english_translation'); ?>
				</div>
			</div>
		</div>
	<?php else: ?>
	<?php echo $short_description; // WPCS: XSS ok. ?>
	<?php endif; ?>
</div>
