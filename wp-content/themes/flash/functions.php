<?php
add_action( 'after_setup_theme', 'flash_setup' );
function flash_setup() {
load_theme_textdomain( 'flash', get_template_directory() . '/languages' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'html5', array( 'search-form' ) );
global $content_width;
if ( ! isset( $content_width ) ) { $content_width = 1920; }
register_nav_menus( array( 'main-menu' => esc_html__( 'Main Menu', 'flash' ) ) );
}
add_action( 'wp_enqueue_scripts', 'flash_load_scripts' );
function flash_load_scripts() {
wp_enqueue_style( 'flash-style', get_stylesheet_uri() );
wp_enqueue_script( 'jquery' );
}
add_action( 'wp_footer', 'flash_footer_scripts' );
function flash_footer_scripts() {
?>
<script>
jQuery(document).ready(function ($) {
var deviceAgent = navigator.userAgent.toLowerCase();
if (deviceAgent.match(/(iphone|ipod|ipad)/)) {
$("html").addClass("ios");
$("html").addClass("mobile");
}
if (navigator.userAgent.search("MSIE") >= 0) {
$("html").addClass("ie");
}
else if (navigator.userAgent.search("Chrome") >= 0) {
$("html").addClass("chrome");
}
else if (navigator.userAgent.search("Firefox") >= 0) {
$("html").addClass("firefox");
}
else if (navigator.userAgent.search("Safari") >= 0 && navigator.userAgent.search("Chrome") < 0) {
$("html").addClass("safari");
}
else if (navigator.userAgent.search("Opera") >= 0) {
$("html").addClass("opera");
}
});
</script>
<?php
}
add_filter( 'document_title_separator', 'flash_document_title_separator' );
function flash_document_title_separator( $sep ) {
$sep = '|';
return $sep;
}
add_filter( 'the_title', 'flash_title' );
function flash_title( $title ) {
if ( $title == '' ) {
return '...';
} else {
return $title;
}
}
add_filter( 'the_content_more_link', 'flash_read_more_link' );
function flash_read_more_link() {
if ( ! is_admin() ) {
return ' <a href="' . esc_url( get_permalink() ) . '" class="more-link">...</a>';
}
}
add_filter( 'excerpt_more', 'flash_excerpt_read_more_link' );
function flash_excerpt_read_more_link( $more ) {
if ( ! is_admin() ) {
global $post;
return ' <a href="' . esc_url( get_permalink( $post->ID ) ) . '" class="more-link">...</a>';
}
}
add_filter( 'intermediate_image_sizes_advanced', 'flash_image_insert_override' );
function flash_image_insert_override( $sizes ) {
unset( $sizes['medium_large'] );
return $sizes;
}
add_action( 'widgets_init', 'flash_widgets_init' );
function flash_widgets_init() {

register_sidebar( array(
'name' => esc_html__( 'Header top', 'flash' ),
'id' => 'header-top',
'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
'after_widget' => '</div>',
) );

register_sidebar( array(
'name' => esc_html__( 'Logo', 'flash' ),
'id' => 'logo',
'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
'after_widget' => '</div>',
) );

register_sidebar( array(
'name' => esc_html__( 'Menu & Search', 'flash' ),
'id' => 'menu-and-search',
'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
'after_widget' => '</div>',
) );

register_sidebar( array(
'name' => esc_html__( 'Main menu', 'flash' ),
'id' => 'main-menu',
'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
'after_widget' => '</div>',
) );

register_sidebar( array(
'name' => esc_html__( 'Follow us ', 'flash' ),
'id' => 'social',
'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
'after_widget' => '</div>',
) );

register_sidebar( array(
'name' => esc_html__( 'Mobile Detail', 'flash' ),
'id' => 'mobile-application',
'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
'after_widget' => '</div>',
) );

register_sidebar( array(
'name' => esc_html__( 'Mobile Image', 'flash' ),
'id' => 'mobile',
'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
'after_widget' => '</div>',
) );

register_sidebar( array(
'name' => esc_html__( 'Copy Right', 'flash' ),
'id' => 'copy-right',
'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
'after_widget' => '</div>',
) );

register_sidebar( array(
'name' => esc_html__( 'Footer Menu', 'flash' ),
'id' => 'footer-menu',
'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
'after_widget' => '</div>',
) );

}
add_action( 'wp_head', 'flash_pingback_header' );
function flash_pingback_header() {
if ( is_singular() && pings_open() ) {
printf( '<link rel="pingback" href="%s" />' . "\n", esc_url( get_bloginfo( 'pingback_url' ) ) );
}
}
add_action( 'comment_form_before', 'flash_enqueue_comment_reply_script' );
function flash_enqueue_comment_reply_script() {
if ( get_option( 'thread_comments' ) ) {
wp_enqueue_script( 'comment-reply' );
}
}
function flash_custom_pings( $comment ) {
?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>"><?php echo comment_author_link(); ?></li>
<?php
}
add_filter( 'get_comments_number', 'flash_comment_count', 0 );
function flash_comment_count( $count ) {
if ( ! is_admin() ) {
global $id;
$get_comments = get_comments( 'status=approve&post_id=' . $id );
$comments_by_type = separate_comments( $get_comments );
return count( $comments_by_type['comment'] );
} else {
return $count;
}
}

add_filter( 'auto_update_plugin', '__return_false' );

add_filter( 'auto_update_theme', '__return_false' );

function remove_core_updates(){
global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
}
add_filter('pre_site_transient_update_core','remove_core_updates');
add_filter('pre_site_transient_update_plugins','remove_core_updates');
add_filter('pre_site_transient_update_themes','remove_core_updates');




add_action( 'wp_ajax_nopriv_leagues_data', 'leagues_data' );
add_action( 'wp_ajax_leagues_data', 'leagues_data' );

function leagues_data() { 

	
	$leangueRequest = wp_remote_get($_POST['data']);
	$leagues = json_decode($leangueRequest['body']);

	if(count($leagues->data->league) > 0) {

		echo '<ul class="drop-menu">';

		foreach ($leagues->data->league as $key => $league_data) {
			echo '<li> <a href="#" data-id="'.$league_data->id.' data-country_id="'.$league_data->country_id.'   "> '.$league_data->name.' <i class = "fa fa-star-o" aria-hidden = "true"> </i> </a> </li>';
		}

		echo '</ul>';

	}

	die();
}


add_action( 'wp_ajax_nopriv_data_by_date', 'data_by_date' );
add_action( 'wp_ajax_data_by_date', 'data_by_date' );

function data_by_date() {

	$date = $_POST['date'];
	$type = $_POST['type'];

	$pastMatches = '';
	$liveTodayMatches = '';
	$upcomingTodayMatches = '';
	
	if( $type == 'past' or $type == NULL ) {

		$pastMatchesRequest = wp_remote_get('http://livescore-api.com/api-client/scores/history.json?key=9GKXlzHjoF6v3mlO&secret=ah65KoQi7lmDlWyvDisYS9igOoMSL8GV&from='.$date.'&to='.$date);
		$pastMatches = json_decode($pastMatchesRequest['body']);
	
		$pastMatches = ($pastMatches->data);

	}

	if( $type == 'present' or $type == NULL ) {
		
		$liveTodayMatchesRequest = wp_remote_get('http://livescore-api.com/api-client/scores/live.json?key=9GKXlzHjoF6v3mlO&secret=ah65KoQi7lmDlWyvDisYS9igOoMSL8GV');
		$liveTodayMatches = json_decode($liveTodayMatchesRequest['body']);

		$liveTodayMatches = ($liveTodayMatches->data);

	}

	

	if( $type == 'future' or $type == NULL ) { 

		$upcomingTodayMatchesRequest = wp_remote_get('https://livescore-api.com/api-client/fixtures/matches.json?key=9GKXlzHjoF6v3mlO&secret=ah65KoQi7lmDlWyvDisYS9igOoMSL8GV');
		$upcomingTodayMatches = json_decode($upcomingTodayMatchesRequest['body']);

		$upcomingTodayMatches = ($upcomingTodayMatches->data);

	}

	echo json_encode( [
		'past_matches' => $pastMatches,
		'present_matches' => $liveTodayMatches,
		'future_matches' => $upcomingTodayMatches
	] );

	die();

}




