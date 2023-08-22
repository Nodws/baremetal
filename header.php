<?php
 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
$site_name = get_bloginfo( 'name' );
$tagline   = get_bloginfo( 'description', 'display' );

?>

<header id="site-header" class="site-header" role="banner">
	<div class="site-branding">
		<?php
		if ( has_custom_logo() ) {
			the_custom_logo();
		} elseif ( $site_name ) {
			?>
			<h1 class="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( $site_name ); ?>" rel="home">
				<?php echo esc_html( $site_name ); ?>
				</a>
			</h1>
		
		<?php } ?>
	</div>

		<nav class="site-navigation" role="navigation">
			<?php
			 wp_nav_menu( [ 'theme_location' => 'head', 'fallback_cb' => false, ] );
			?>
		</nav>
</header>

	