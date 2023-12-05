<?php 
 /*
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Water Delivery
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'water-delivery' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php water_delivery_posts_tags(); ?>
	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'water-delivery' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>	

	<div class="entry-meta">
		<?php water_delivery_posted_on();
		water_delivery_entry_meta(); ?>
	</div><!-- .entry-meta -->	
</article><!-- #post-## -->