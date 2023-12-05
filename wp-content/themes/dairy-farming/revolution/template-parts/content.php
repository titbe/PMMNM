<?php
/**
 * Template part for displaying posts
 *
 * @package Dairy Farming
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="card-item card-blog-post">
	<header class="entry-header">
			<?php
			if ( 'post' === get_post_type() ) :

				if (is_singular()) {
					
					do_action('dairy_farming_breadcrumbs');
				}
				
				if ( is_singular() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
				endif;

				?>
					<div class="entry-meta">
						<?php
						dairy_farming_posted_on();
						dairy_farming_posted_by();
						?>
					</div><!-- .entry-meta -->

			<?php endif; ?>
		</header>
		<?php
			if (has_post_thumbnail()) {
			?>
				<div class="card-media">
					<?php dairy_farming_post_thumbnail(); ?>
				</div>
			<?php 
			} 
		?>

		

		<div class="entry-content">
			<?php
				if ( is_singular() ) :
					the_content();
				else :
					echo "<p>".wp_trim_words(get_the_excerpt(), 50)."</p>";
					?>
					<a href="<?php the_permalink(); ?>" class="btn read-btn text-uppercase"> <?php echo esc_html(get_theme_mod('dairy_farming_read_more_text', __('Continue Reading....', 'dairy-farming'))); ?> </a>
					<?php
				endif;
				?>


			<?php
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'dairy-farming' ),
					'after'  => '</div>',
				)
			);
			?>
		</div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
