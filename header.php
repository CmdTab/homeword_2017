<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Home Word
 */
/*session_start();
$_SESSION['cat'] = $_GET['cat'];*/
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="icon"
      type="image/png"
      href="<?php bloginfo('template_directory'); ?>/_i/favicon.png">
<?php wp_head(); ?>
<script type="text/javascript" src="//use.typekit.net/gco3kee.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/ie.css" />
	<script src="<?php bloginfo('template_directory'); ?>/_js/html5shiv.js"></script>
<![endif]-->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T2ZWQRN');</script>
<!-- End Google Tag Manager -->
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T2ZWQRN"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="full-section top-header">
			<div class="wrap group">
				<a href = "#" class="toggle-nav">
					<span aria-hidden="true" data-icon="&#x6d;"></span>
					<span class="assistive-text">Mobile Navigation</span>
				</a>
				<a class="site-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <img src ="<?php bloginfo('template_directory'); ?>/_i/homeword-logo.png">
                    
                </a>
				<div class="header-content">
					<ul class="social ">
                        <li>
							<a href = "<?php echo esc_url( home_url( '/' ) ); ?>my-account" class="my-account">
                                <span>My Account</span>
                                <?php include('svg/icon-account.php'); ?>
							</a>
						</li>
						<li>
							<a href = "https://www.facebook.com/Homeword" target="_blank">
								<span aria-hidden="true" data-icon="&#x66;"></span>
								<span class="assistive-text">Facebook</span>
							</a>
						</li>
						<li>
							<a href = "https://twitter.com/drjimburns" target="_blank">
								<span aria-hidden="true" data-icon="&#x74;"></span>
								<span class="assistive-text">Twitter</span>
							</a>
						</li>
						<li>
							<a href = "https://www.youtube.com/channel/UCY1vTdorwRKBSgdM5opbTsQ" target="_blank">
								<span aria-hidden="true" data-icon="y"></span>
								<span class="assistive-text">YouTube</span>
							</a>
						</li>
						<li>
							<a href = "https://instagram.com/homewordcenter?igshid=h9kt72lxx4p2" target="_blank">
								<span aria-hidden="true" data-icon="&#x69;"></span>
								<span class="assistive-text">Instagram</span>
							</a>
						</li>
					</ul>
					<?php get_search_form(); ?>
				</div>
			</div>
		</div>
		<nav id="site-navigation" class="full-section main-navigation" role="navigation">
			<div class="wrap group">
                <?php wp_nav_menu( array( 'theme_location' => 'main', 'menu_class' => 'top-nav', 'container' => false) ); ?>

				<div class="nav-buttons">
					<a href = "<?php echo esc_url( home_url( '/' ) ); ?>your-donation" class="btn">Donate</a>
					<?php global $woocommerce; ?>
					<?php //if ($woocommerce->cart->cart_contents_count>0) :?>
						<a class="cart-contents" href="<?php echo $woocommerce->cart->get_cart_url(); ?>" title="<?php _e('View your shopping cart', 'woothemes'); ?>">
							<span class="cart-count"><?php echo sprintf(_n('%d item', '%d items', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?></span>
						</a>
					<?php //endif; ?>
				</div>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	<div class="modal newsletter-modal">
		<h2>Subscribe to our Newsletters</h2>
		<p>Stay in touch with HomeWord to hear about upcoming events, special offers, and more!</p>

		<?php
            if(site_url() == 'http://local-homeword.com') {
                mc4wp_form(5574);
            } elseif (site_url() == 'http://stg.homeword.com') {
                mc4wp_form(10296);
            } else {
                mc4wp_form(10296);
            }
        ?>

		<a href="#" class="close-overlay">Close</a>
	</div>
	<div class="modal-overlay"></div>

	<div id="content" class="site-content wrap">
