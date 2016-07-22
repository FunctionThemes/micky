<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package micky
 */
?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php the_content(); ?>
		<?php
		wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'micky' ),
					'after'  => '</div>',
		) );
		?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'micky' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer>
</div><!-- #post-## -->