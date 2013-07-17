<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WP-D-2013
 */
?>

	</div><!-- #main -->
  
  <footer id="site-footer">
    <div class="row">
      <div class="large-4 columns">
        <?php dynamic_sidebar( 'footer-1' ) ?>
      </div>
      <div class="large-4 columns">
        <?php dynamic_sidebar( 'footer-2' ) ?>
      </div>
      <div class="large-4 columns">
        <?php dynamic_sidebar( 'footer-3' ) ?>
      </div>
      <div class="large-12 columns">
        <div class="site-info">
          <?php do_action( 'wp_d_2013_credits' ); ?>
          <a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'wp_d_2013' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s', 'wp_d_2013' ), 'WordPress' ); ?></a>
          <span class="sep"> | </span>
          <?php printf( __( 'Theme: %1$s by %2$s.', 'wp_d_2013' ), 'WP-D-2013', '<a href="http://wp-d.org" rel="designer">WP-D</a>' ); ?>
        </div><!-- .site-info -->
      </div>
    </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>