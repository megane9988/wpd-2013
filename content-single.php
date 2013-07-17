<?php
/**
 * @package WP-D-2013
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<div class="entry-meta">
			<?php wp_d_2013_posted_on(); ?>
		</div><!-- .entry-meta -->
		<h1 class="entry-title"><?php the_title(); ?></h1>
		<div class="sbver">
			<?php SocialButtonVertical(); ?>
		</div>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'wp_d_2013' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

		<div class="sbver">
			<?php SocialButtonVertical(); ?>
		</div>
    <div class="prime-banner-bottom">  
      <?php do_action('wpdbones-ad-content-below'); ?>
    </div>
	<footer class="entry-meta">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', 'wp_d_2013' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'wp_d_2013' ) );

			if ( ! wp_d_2013_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( '%2$s', 'wp_d_2013' );
				} else {
					$meta_text = __( '', 'wp_d_2013' );
				}

			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = __( '%1$s %2$s', 'wp_d_2013' );
				} else {
					$meta_text = __( ' %1$s', 'wp_d_2013' );
				}

			} // end check for categories on this blog

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink(),
				the_title_attribute( 'echo=0' )
			);
		?>

		<?php edit_post_link( __( 'Edit', 'wp_d_2013' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
