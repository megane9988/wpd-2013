<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WP-D-2013
 */

get_header(); ?>


<div class="large-8 prime columns">	
    <div class="prime-banner">          
      <?php do_action('wpdbones-ad-content-above'); ?>
    </div>
    <div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php wp_d_2013_content_nav( 'nav-below' ); ?>
			
			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
			?>

		<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->	
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>