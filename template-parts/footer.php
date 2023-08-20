<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$footer_nav_menu = wp_nav_menu( [
	'theme_location' => 'foot',
	'fallback_cb' => false,
	'echo' => false,
] );
?>
<footer id="site-footer" class="site-footer" role="contentinfo">
	<?php if ( $footer_nav_menu ) : ?>
		<nav class="site-navigation" role="navigation">
			<?php	echo $footer_nav_menu;	?>
		</nav>
	<?php endif; ?>
<div class="copy"><?php echo esc_html( $site_name ); ?> &copy; <? echo  date('Y'); ?></div>
</footer>
