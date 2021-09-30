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
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Newsreader:wght@300;400;600;700&display=swap&family=Kumbh+Sans:wght@300;400;500;600;700;800" rel="stylesheet">
<link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

<script type="text/javascript" src="//use.typekit.net/gco3kee.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/ie.css" />
	<script src="<?php bloginfo('template_directory'); ?>/_js/html5shiv.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
		<div class="wrap group">

			<a class="site-header--title" href="<?php echo esc_url( home_url( '/homeword-plus' ) ); ?>" rel="home">
				<span class="assistive-text">Homeword Plus Logo</span>
				<?php include( TEMPLATEPATH . '/_i/_homeword-plus/_svg/icon-homeword-logo.php'); ?>
			</a>

			<div class="site-header--menu">
				<div class="menu-icon">
					<span class="assistive-text">Menu Icon</span>
					<?php include( TEMPLATEPATH . '/_i/_homeword-plus/_svg/icon-menu.php'); ?>
				</div>

				<?php wp_nav_menu( array(
					'theme_location'  => 'homewordplus',
					'menu' 			  => 'homewordplus',
					'echo'            => false,
					'items_wrap'      => '%3$s',
					'depth'           => 0,
				)); ?>
				
				<nav>
					<a href="#about">About</a>
					<a href="#courses">Courses</a>
					<a href="#testimonials">Testimonials</a>
					<a href="#pricing">Pricing</a>
					<a href="#faq">FAQ</a>
				</nav>
			</div>
			
		</div>
	</header><!-- #masthead -->
	<div id="content" class="site-content">
