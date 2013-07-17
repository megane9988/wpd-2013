<?php
/**
 * @package WPD-2nd
 */
?>

<a href="<?php the_permalink(); ?>" rel="bookmark">
<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
  <div class="post-inner">
    <div class="large-4 small-3 columns thumbnail">
					<?php if ( has_post_thumbnail()) {
					the_post_thumbnail('size1');
					} else {
						echo '<img src="' . get_bloginfo('template_url') .'/assets/img/no_image.png" alt="" title="" />';
					}
					?>
    </div> <!-- thumbnail -->    
    <div class="large-8 small-9 columns">
			<?php if ( 'post' == get_post_type() ) : ?>
			<div class="post-date">
				<?php wp_d_2013_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php endif; ?>
			<h4 class="entry-title"><?php the_title(); ?></h4>
			<div class="post-meta">
				<p>
					<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>					
						<span class="author <?php the_author(); ?>"><?php the_author(); ?></span>
						<?php
							/* translators: used between list items, there is a space after the comma */
							$categories_list = get_the_category_list( __( ', ', 'wpd_2nd' ) );
							if ( $categories_list && wp_d_2013_categorized_blog() ) :
						?>						
							<span>
								<?php
									$cat = get_the_category();
									$tmparray = array();
									if( count( $cat ) > 1 ) {
										foreach( $cat as $c ) $tmparray[] = $c->cat_name;
										echo implode( ', ', $tmparray );
									}
								?>
							</span>
						<?php endif; // End if categories ?>

						<?php
							/* translators: used between list items, there is a space after the comma */
							$tags_list = get_the_tag_list( '', __( ', ', 'wpd_2nd' ) );
							if ( $tags_list ) :
						?>
							<span>	
								| <?php
								$posttags = get_the_tags();
								if ($posttags) {
								foreach($posttags as $tag) {
								echo $tag->name . ', ';
								}
								}
								?>
							</span>
						<?php endif; // End if $tags_list ?>
					<?php endif; // End if 'post' == get_post_type() ?>
				</p>
			</div><!-- .entry-meta -->
		</div>
	</div>
</article><!-- #post-## -->
</a>
