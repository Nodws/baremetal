<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<main id="content" class="site-main" role="main">
		<header class="page-header">
			<h1 class="entry-title">				
				<span><?php echo get_search_query(); ?> :</span>
			</h1>
		</header>
	<div class="page-content">
		<?php if ( have_posts() ) : ?>
			<?php
			while ( have_posts() ) :
				the_post();
				printf( '<h2><a href="%s">%s</a></h2>', esc_url( get_permalink() ), esc_html( get_the_title() ) );
				the_post_thumbnail();
				the_excerpt();
			endwhile;
		 endif; ?>
	</div>

	<?php wp_link_pages(); ?>

	<?php
	global $wp_query;
	if ( $wp_query->max_num_pages > 1 ) :
		?>
		<nav class="pagination" role="navigation">

			<div class="nav-previous"><?php next_posts_link(  '<span class="meta-nav">&larr;</span>' )  ?></div>

			<div class="nav-next"><?php previous_posts_link( '<span class="meta-nav">&rarr;</span>' )  ?></div>
		</nav>
	<?php endif; ?>
</main>
