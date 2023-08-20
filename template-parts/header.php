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

	<?php if ( $header_nav_menu ) : ?>
		<nav class="site-navigation" role="navigation">
			<?php
			 wp_nav_menu( [ 'theme_location' => 'head', 'fallback_cb' => false, ] );
			?>
		</nav>
	<?php endif; ?>
</header>
