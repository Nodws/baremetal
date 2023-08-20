<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

while ( have_posts() ) :
	the_post();
	?>
<main id="content" <?php post_class( 'site-main' ); ?> role="main">
	
		<header class="page-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header>
	<div class="page-content">
		<?php the_content(); ?>
		<div class="post-tags">
			<?php the_tags( '<span class="tag-links">', null, '</span>' ); ?>
		</div>
		<?php wp_link_pages(); ?>
	</div>

</main>
	<?php
endwhile;
