<?php


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<main id="content" class="site-main" role="main">

	<header class="page-header">
			<?php
			the_archive_title( '<h1 class="entry-title">', '</h1>' );
			the_archive_description( '<p class="archive-description">', '</p>' );
			?>
		</header>
	<div class="page-content">
		<?php
		while ( have_posts() ) {     
			the_post(); 
			$post_link = get_permalink();			
			?>
			<article class="post post-<?php echo $post->ID?>"><?php echo $post->ID?>
				<h2 class="entry-title"><a href="<?php echo $post_link; ?>"><?php echo $post->post_title;?></h2>
				<?php 
			if(has_post_thumbnail( $post ))
				printf( '<a href="%s">%s</a>', esc_url( $post_link ), get_the_post_thumbnail( $post, 'large' ) );
				the_excerpt();
				?>
			</article>
		<?php } ?>
	</div>

	<?php wp_link_pages(); ?>

	<?php
	global $wp_query;
	if ( $wp_query->max_num_pages > 1 ) :
		?>
		<nav class="pagination" role="navigation">
		
			<div class="nav-previous"><?php next_posts_link(  '<span class="meta-nav">&larr;</span>' ); ?></div>
		
			<div class="nav-next"><?php previous_posts_link(  '<span class="meta-nav">&rarr;</span>'  ); ?></div>
		</nav>
	<?php endif; ?>
</main>
