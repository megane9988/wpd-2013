<?php
/**
 * WP-D-2013 functions and definitions
 *
 * @package WP-D-2013
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */

if ( ! function_exists( 'wp_d_2013_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function wp_d_2013_setup() {

	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on WP-D-2013, use a find and replace
	 * to change 'wp_d_2013' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'wp_d_2013', get_template_directory() . '/languages' );

	/**
	 * Add default posts and comments RSS feed links to head
	 */
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
  add_image_size('size1',250,250,true);

	/**
	 * This theme uses wp_nav_menu() in one location.
	 */
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'wp_d_2013' ),
	) );

	/**
	 * Enable support for Post Formats
	 */
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );
}
endif; // wp_d_2013_setup
add_action( 'after_setup_theme', 'wp_d_2013_setup' );

/**
 * Setup the WordPress core custom background feature.
 *
 * Use add_theme_support to register support for WordPress 3.4+
 * as well as provide backward compatibility for WordPress 3.3
 * using feature detection of wp_get_theme() which was introduced
 * in WordPress 3.4.
 *
 * @todo Remove the 3.3 support when WordPress 3.6 is released.
 *
 * Hooks into the after_setup_theme action.
 */
function wp_d_2013_register_custom_background() {
	$args = array(
		'default-color' => 'ffffff',
		'default-image' => '',
	);

	$args = apply_filters( 'wp_d_2013_custom_background_args', $args );

	if ( function_exists( 'wp_get_theme' ) ) {
		add_theme_support( 'custom-background', $args );
	} else {
		define( 'BACKGROUND_COLOR', $args['default-color'] );
		if ( ! empty( $args['default-image'] ) )
			define( 'BACKGROUND_IMAGE', $args['default-image'] );
		add_custom_background();
	}
}
add_action( 'after_setup_theme', 'wp_d_2013_register_custom_background' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function wp_d_2013_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Sidebar', 'wp_d_2013' ),
    'id'            => 'sidebar-1',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h5 class="widget-title">',
    'after_title'   => '</h5>',
  ) );
}
add_action( 'widgets_init', 'wp_d_2013_widgets_init' );
function wp_d_2013_widgets_init_f01() {
  register_sidebar( array(
    'name'          => __( 'footer01', 'wp_d_2013' ),
    'id'            => 'footer-1',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h5 class="widget-title">',
    'after_title'   => '</h5>',
  ) );
}
add_action( 'widgets_init', 'wp_d_2013_widgets_init_f01' );
function wp_d_2013_widgets_init_f02() {
  register_sidebar( array(
    'name'          => __( 'footer02', 'wp_d_2013' ),
    'id'            => 'footer-2',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h5 class="widget-title">',
    'after_title'   => '</h5>',
  ) );
}
add_action( 'widgets_init', 'wp_d_2013_widgets_init_f02' );
function wp_d_2013_widgets_init_f03() {
  register_sidebar( array(
    'name'          => __( 'footer03', 'wp_d_2013' ),
    'id'            => 'footer-3',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h5 class="widget-title">',
    'after_title'   => '</h5>',
  ) );
}
add_action( 'widgets_init', 'wp_d_2013_widgets_init_f03' );
function wp_d_2013_widgets_init_f04() {
  register_sidebar( array(
    'name'          => __( 'footer04', 'wp_d_2013' ),
    'id'            => 'footer-4',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h5 class="widget-title">',
    'after_title'   => '</h5>',
  ) );
}
add_action( 'widgets_init', 'wp_d_2013_widgets_init_f04' );
function wp_d_2013_widgets_init_f05() {
  register_sidebar( array(
    'name'          => __( 'footer05', 'wp_d_2013' ),
    'id'            => 'footer-5',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h5 class="widget-title">',
    'after_title'   => '</h5>',
  ) );
}
// add_action( 'widgets_init', 'wp_d_2013_widgets_init_f05' );
// function wp_d_2013_widgets_init_f06() {
//   register_sidebar( array(
//     'name'          => __( 'footer06', 'wp_d_2013' ),
//     'id'            => 'footer-6',
//     'before_widget' => '<aside id="%1$s" class="widget %2$s">',
//     'after_widget'  => '</aside>',
//     'before_title'  => '<h5 class="widget-title">',
//     'after_title'   => '</h5>',
//   ) );
// }
// add_action( 'widgets_init', 'wp_d_2013_widgets_init_f06' );
// function wp_d_2013_widgets_init_f07() {
//   register_sidebar( array(
//     'name'          => __( 'footer07', 'wp_d_2013' ),
//     'id'            => 'footer-7',
//     'before_widget' => '<aside id="%1$s" class="widget %2$s">',
//     'after_widget'  => '</aside>',
//     'before_title'  => '<h5 class="widget-title">',
//     'after_title'   => '</h5>',
//   ) );
// }
// add_action( 'widgets_init', 'wp_d_2013_widgets_init_f07' );
// function wp_d_2013_widgets_init_f08() {
//   register_sidebar( array(
//     'name'          => __( 'footer08', 'wp_d_2013' ),
//     'id'            => 'footer-8',
//     'before_widget' => '<aside id="%1$s" class="widget %2$s">',
//     'after_widget'  => '</aside>',
//     'before_title'  => '<h5 class="widget-title">',
//     'after_title'   => '</h5>',
//   ) );
// }
// add_action( 'widgets_init', 'wp_d_2013_widgets_init_f08' );
// function wp_d_2013_widgets_init_f09() {
//   register_sidebar( array(
//     'name'          => __( 'footer09', 'wp_d_2013' ),
//     'id'            => 'footer-9',
//     'before_widget' => '<aside id="%1$s" class="widget %2$s">',
//     'after_widget'  => '</aside>',
//     'before_title'  => '<h5 class="widget-title">',
//     'after_title'   => '</h5>',
//   ) );
// }
// add_action( 'widgets_init', 'wp_d_2013_widgets_init_f09' );
// function wp_d_2013_widgets_init_f10() {
//   register_sidebar( array(
//     'name'          => __( 'footer10', 'wp_d_2013' ),
//     'id'            => 'footer-10',
//     'before_widget' => '<aside id="%1$s" class="widget %2$s">',
//     'after_widget'  => '</aside>',
//     'before_title'  => '<h5 class="widget-title">',
//     'after_title'   => '</h5>',
//   ) );
// }
// add_action( 'widgets_init', 'wp_d_2013_widgets_init_f10' );
// function wp_d_2013_widgets_init_f11() {
//   register_sidebar( array(
//     'name'          => __( 'footer11', 'wp_d_2013' ),
//     'id'            => 'footer-11',
//     'before_widget' => '<aside id="%1$s" class="widget %2$s">',
//     'after_widget'  => '</aside>',
//     'before_title'  => '<h5 class="widget-title">',
//     'after_title'   => '</h5>',
//   ) );
// }
// add_action( 'widgets_init', 'wp_d_2013_widgets_init_f11' );
// function wp_d_2013_widgets_init_f12() {
//   register_sidebar( array(
//     'name'          => __( 'footer12', 'wp_d_2013' ),
//     'id'            => 'footer-12',
//     'before_widget' => '<aside id="%1$s" class="widget %2$s">',
//     'after_widget'  => '</aside>',
//     'before_title'  => '<h5 class="widget-title">',
//     'after_title'   => '</h5>',
//   ) );
// }
// add_action( 'widgets_init', 'wp_d_2013_widgets_init_f12' );
// function wp_d_2013_widgets_init_f13() {
//   register_sidebar( array(
//     'name'          => __( 'footer13', 'wp_d_2013' ),
//     'id'            => 'footer-13',
//     'before_widget' => '<aside id="%1$s" class="widget %2$s">',
//     'after_widget'  => '</aside>',
//     'before_title'  => '<h5 class="widget-title">',
//     'after_title'   => '</h5>',
//   ) );
// }
// add_action( 'widgets_init', 'wp_d_2013_widgets_init_f13' );
// function wp_d_2013_widgets_init_f14() {
//   register_sidebar( array(
//     'name'          => __( 'footer14', 'wp_d_2013' ),
//     'id'            => 'footer-14',
//     'before_widget' => '<aside id="%1$s" class="widget %2$s">',
//     'after_widget'  => '</aside>',
//     'before_title'  => '<h5 class="widget-title">',
//     'after_title'   => '</h5>',
//   ) );
// }
// add_action( 'widgets_init', 'wp_d_2013_widgets_init_f14' );

/**
 * Enqueue scripts and styles
 */
function wp_d_2013_scripts() {
	if ( !is_admin() ) 
	{
    wp_enqueue_style( 'wp_d_2013-style', 
    get_stylesheet_uri() . '', 
    array(), 
    '20130626_2', 
    'all' );
    wp_enqueue_style( 'genericons_css', 
    get_template_directory_uri() . '/assets/css/genericons.css', 
    array(), 
    '20120208', 
    'all' );
		wp_enqueue_style( 'custom-style', 
    get_template_directory_uri() . '/assets/css/style.css', 
    array(), 
    '20130705', 
    'all' );
		wp_enqueue_script( 'wp_d_2013-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
		wp_enqueue_script( 'wp_d_2013-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );		
  	wp_enqueue_script( 'modernizr_js', 
    get_template_directory_uri() . '/assets/js/vendor/custom.modernizr.js', 
    array('jquery'), 
    '20120208', 
    false );
		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
		if ( is_singular() && wp_attachment_is_image() ) {
			wp_enqueue_script( 'wp_d_2013-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}
	}
}
add_action( 'wp_enqueue_scripts', 'wp_d_2013_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


/**
 * custom-style,ie8style and modernizer.js add
 */


function enqueue_ie_css() {
    wp_register_style( 'ie-media', get_template_directory_uri() . '/assets/css/foundation-ie.min.css' );
    $GLOBALS['wp_styles']->add_data( 'ie-media', 'conditional', 'lt IE 9' );
    wp_enqueue_style( 'ie-media' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_ie_css' );


/**
 * Ad Manage
 */

function wpdbones_ad_content_above(){
if ( !is_admin() ) :?>
<div class="adtxt">スポンサードリンク</div>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-2866035444666228";
width = document.documentElement.clientWidth;
      /* su-pa- */
      google_ad_slot = "5313631022";
      google_ad_width = 728;
      google_ad_height = 90;
      //-->
if (width < 1140) {
      /* 468左 */
      google_ad_slot = "4391258702";
      google_ad_width = 468;
      google_ad_height = 60;
      //-->
    }
if (width < 468) {
      google_ad_slot = "7941700887";
      google_ad_width = 320;
      google_ad_height = 50;
    }
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
<?php endif;
}



function wpdbones_ad_content_below(){
if ( !is_admin() ) :?>
<div class="clr"></div>
  <script type="text/javascript"><!--
  google_ad_client = "ca-pub-2866035444666228";
  width = document.documentElement.clientWidth;
  /* su-pa- */
  google_ad_slot = "5313631022";
  google_ad_width = 728;
  google_ad_height = 90;
  //-->
if (width < 1140) {
      /* 468左 */
      google_ad_slot = "4391258702";
      google_ad_width = 468;
      google_ad_height = 60;
      //-->
    }
if (width < 468) {
      google_ad_slot = "7941700887";
      google_ad_width = 320;
      google_ad_height = 50;
    }
  </script>
  <script type="text/javascript"
  src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
  </script>
<?php endif;
}

function wpdbones_ad_content_side(){
if ( !is_admin() ) :?>
<div id="socialside" class="socialwidget">
<div class="fb-like-box" style="background-color:#fff;width: 100%;">
  <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fpages%2FWP-D%2F292801787485325&amp;width=292&amp;height=198&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;border_color&amp;header=false&amp;appId=269852913138083" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:198px;" allowTransparency="true"></iframe>
</div>
<div style="margin-top: 10px;background-color: #fff;text-align: center;padding: 10px 0 5px 0;">
<a href="https://twitter.com/wp_d_official" class="twitter-follow-button" data-show-count="false" data-lang="ja" data-size="large">@wp_d_officialさんをフォロー</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
</div>
</div>
<div class="side-ad">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-2866035444666228";
width = document.documentElement.clientWidth;
      /* 336x280, 作成済み 09/04/19 */
      google_ad_slot = "4267328340";
      google_ad_width = 336;
      google_ad_height = 280;
      //-->
if (width < 1140) {
      /* 200サイド */
      google_ad_slot = "1437792308";
      google_ad_width = 200;
      google_ad_height = 200;
      //-->
    }
if (width < 768) {
      google_ad_slot = "7941700887";
      google_ad_width = 320;
      google_ad_height = 50;
    }
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
<?php endif;
}


/**
 * Fix Facebook locale setting
 */
function filter_facebook_locale($locale){
  $wp_locale = get_locale();
  if ( $wp_locale = 'ja' ) $locale = 'ja_JP';
  return $locale;
}
add_filter('fb_locale','filter_facebook_locale');

/**
 * Bookmark Manage
 */
function wpdbones_bookmarks(){
	?>
<script>(function(w,d){
  w._gaq=[["_setAccount","UA-33477429-1"],["_trackPageview"]];
  w.___gcfg={lang:"ja"};
  var s,e = d.getElementsByTagName("script")[0],
  a=function(u,f){if(!d.getElementById(f)){s=d.createElement("script");
  s.src=u;if(f){s.id=f;}e.parentNode.insertBefore(s,e);}};
  a(("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js","ga");
  a("https://apis.google.com/js/plusone.js");
  a("//b.st-hatena.com/js/bookmark_button_wo_al.js");
  a("//platform.twitter.com/widgets.js","twitter-wjs");
  a("//connect.facebook.net/ja_JP/all.js#xfbml=1","facebook-jssdk");
})(this, document);</script>
	<?php
}

add_filter('nginxchampuru_get_cache', 'nginxchampuru_get_cache', 10, 2);
function nginxchampuru_get_cache($key, $url = null) {
    global $nginxchampuru;
    if (!$url) {
        $url = $nginxchampuru->get_the_url();
    }
    $keys = array(
        $key,
        $nginxchampuru->get_cache_key($url.'@ktai'),
        $nginxchampuru->get_cache_key($url.'@smartphone'),
    );
    if ($key !== $nginxchampuru->get_cache_key($url)) {
        $keys[] = $nginxchampuru->get_cache_key($url);
    }
    return $nginxchampuru->get_cache_file($keys);
}

function SocialButtonVertical()
{ ?>
  <div class="social">
<ul>
<li>
    <a href="http://b.hatena.ne.jp/entry/" class="hatena-bookmark-button"
  data-hatena-bookmark-layout="vertical-balloon"
  data-hatena-bookmark-url="<?php the_permalink(); ?>">
  <img src="http://b.st-hatena.com/images/entry-button/button-only.gif"
      alt="このエントリーをはてなブックマークに追加" width="20" height="20"
      style="border: none">
    </a>
</li>
<li>
    <a href="https://twitter.com/share" class="twitter-share-button"
  data-lang="en"
  data-url="<?php the_permalink(); ?>"
  data-text="<?php the_title(); ?>"
  data-count="vertical"
    >Tweet</a>
</li>
<li>
    <div class="g-plusone" data-size="tall" data-href="<?php the_permalink(); ?>"></div>
</li>
<li>
    <div class="fb-like"
  data-href="<?php the_permalink(); ?>"
  data-layout="box_count"
  data-send="false"
  data-width="450"
  data-show-faces="false">
    </div>
</li>
</ul>
</div>
<?php }

function wpd_top_posts_avatar_size( $get_image_options ) {
$get_image_options['avatar_size'] = 100;
return $get_image_options;
}

add_filter( 'jetpack_top_posts_widget_image_options', 'wpd_top_posts_avatar_size' );
add_action( 'wpdbones-ad-header', 'wpdbones_ad_header' );
add_action('wp_footer', 'wpdbones_bookmarks');
add_action( 'wpdbones-ad-content-above', 'wpdbones_ad_content_above' );
add_action( 'wpdbones-ad-content-below', 'wpdbones_ad_content_below' );