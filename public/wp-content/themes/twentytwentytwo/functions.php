<?php
/**
 * Twenty Twenty-Two functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Two
 * @since Twenty Twenty-Two 1.0
 */

 // Add the page to admin menu
function add_site_settings_to_menu(){
    add_menu_page( 'Art Project', 'Art Project', 'manage_options', 'post.php?post='.get_page_by_path("art",NULL,"page")->ID.'&action=edit', '', 'dashicons-admin-tools', 20);
	add_menu_page( 'Art Project-1', 'Art Project-1', 'manage_options', 'post.php?post='.get_page_by_path("Art Project-1",NULL,"page")->ID.'&action=edit', '', 'dashicons-admin-tools', 20);
	add_menu_page( 'Art Project-3', 'Art Project-3', 'manage_options', 'post.php?post='.get_page_by_path("Art Project-3",NULL,"page")->ID.'&action=edit', '', 'dashicons-admin-tools', 20);
}
add_action( 'admin_menu', 'add_site_settings_to_menu' );

// Change the active menu item

add_filter('parent_file', 'higlight_custom_settings_page');

function higlight_custom_settings_page($file) {
    global $parent_file;
    global $pagenow;
    global $typenow, $self;

    $settings_page = get_page_by_path("site-settings",NULL,"page")->ID;

    $post = (int)$_GET["post"];
    if ($pagenow === "post.php" && $post === $settings_page) {
        $file = "post.php?post=$settings_page&action=edit";
    }
    return $file;
}


function hide_settings_page($query) {
    if ( !is_admin() && !is_main_query() ) {
        return;
    }    
    global $typenow;
    if ($typenow === "page") {
        // Replace "site-settings" with the slug of your site settings page.
        $settings_page = get_page_by_path("site-settings",NULL,"page")->ID;
        $query->set( 'post__not_in', array($settings_page) );    
    }
    return;

}

add_action('pre_get_posts', 'hide_settings_page');

add_filter('use_block_editor_for_post', 'disable_gutenberg_on_settings_page', 5, 2);

function disable_gutenberg_on_settings_page($can, $post){
    if($post){
        // Replace "site-settings" with the slug of your site settings page.
        if($post->post_name === "site-settings"){
            return false;
        }
    }
    return $can;
}


function edit_site_settings_title() {
    global $post, $title, $action, $current_screen;
    if( isset( $current_screen->post_type ) && $current_screen->post_type === 'page' && $action == 'edit' && $post->post_name === "site-settings") {
        $title = $post->post_title.' - '.get_bloginfo('name');           
    }
    return $title;  
}

add_action( 'admin_title', 'edit_site_settings_title' );


if ( ! function_exists( 'twentytwentytwo_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'twentytwentytwo_support' );

if ( ! function_exists( 'twentytwentytwo_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'twentytwentytwo-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Add styles inline.
		wp_add_inline_style( 'twentytwentytwo-style', twentytwentytwo_get_font_face_styles() );

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'twentytwentytwo-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'twentytwentytwo_styles' );

if ( ! function_exists( 'twentytwentytwo_editor_styles' ) ) :

	/**
	 * Enqueue editor styles.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_editor_styles() {

		// Add styles inline.
		wp_add_inline_style( 'wp-block-library', twentytwentytwo_get_font_face_styles() );

	}

endif;

add_action( 'admin_init', 'twentytwentytwo_editor_styles' );


if ( ! function_exists( 'twentytwentytwo_get_font_face_styles' ) ) :

	/**
	 * Get font face styles.
	 * Called by functions twentytwentytwo_styles() and twentytwentytwo_editor_styles() above.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return string
	 */
	function twentytwentytwo_get_font_face_styles() {

		return "
		@font-face{
			font-family: 'Source Serif Pro';
			font-weight: 200 900;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/SourceSerif4Variable-Roman.ttf.woff2' ) . "') format('woff2');
		}

		@font-face{
			font-family: 'Source Serif Pro';
			font-weight: 200 900;
			font-style: italic;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/SourceSerif4Variable-Italic.ttf.woff2' ) . "') format('woff2');
		}
		";

	}

endif;

if ( ! function_exists( 'twentytwentytwo_preload_webfonts' ) ) :

	/**
	 * Preloads the main web font to improve performance.
	 *
	 * Only the main web font (font-style: normal) is preloaded here since that font is always relevant (it is used
	 * on every heading, for example). The other font is only needed if there is any applicable content in italic style,
	 * and therefore preloading it would in most cases regress performance when that font would otherwise not be loaded
	 * at all.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @return void
	 */
	function twentytwentytwo_preload_webfonts() {
		?>
		<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'assets/fonts/SourceSerif4Variable-Roman.ttf.woff2' ) ); ?>" as="font" type="font/woff2" crossorigin>
		<?php
	}

endif;

add_action( 'wp_head', 'twentytwentytwo_preload_webfonts' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';
