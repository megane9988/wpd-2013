<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WP-D-2013
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php wp_head(); ?>
  
<script type="text/javascript">
  (function($){
  $(function() {
    var nav = $('.navigation-main');
    //navの位置  
    var navTop = nav.offset().top;
    //スクロールするたびに実行
    $(window).scroll(function () {
      var winTop = $(this).scrollTop();
      //スクロール位置がnavの位置より下だったらクラスfixedを追加
      if (winTop >= navTop) {
        nav.addClass('fixed');
      } else if (winTop <= navTop) {
        nav.removeClass('fixed');
      }
    });
  });
  })(jQuery);</script>

</head>

<body <?php body_class(); ?> onLoad="hideAdBar()" onOrientationChange="hideAdBar()">
<div id="page" class="hfeed site">
	<?php do_action( 'before' ); ?>
	<header id="masthead" class="site-header" role="banner">
    <div class="row">
      <div class="large-1 small-3 columns logo">
        <a href="http://wp-d.org">
        <img src="http://wp-d.org/wp-content/themes/wp-d-2013/assets/img/logo.png" alt="wp-d" title="wp-d" />
        </a>
      </div>
      <div class="large-5 small-8 columns">
        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <p class="site-description"><?php bloginfo( 'description' ); ?></p>
      </div>
      <div class="large-6 columns text-right">
      </div>
    </div>
		<nav id="site-navigation" class="navigation-main" role="navigation">
      <div class="row">
        <div class="large-12 columns">
					<h1 class="menu-toggle"><div class="genericon genericon-menu"></div></h1>
					<div class="screen-reader-text skip-link"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'wp_d_2013' ); ?>"><?php _e( 'Skip to content', 'wp_d_2013' ); ?></a></div>
					<?php wp_nav_menu( array( 
					'theme_location' => 'primary',
					'menu_class' => 'nav-inner'
					 ) ); ?>
				</div>
			</div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
	<div id="main" class="row contents site-main"> 
