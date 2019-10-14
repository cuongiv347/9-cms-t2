
function enqueue_scripts_and_styles()
{
        wp_register_style( 'hocwp-foundation', get_theme_uri() . '/lib/foundation.css', array(), get_theme_version() );
        wp_enqueue_style( 'hocwp-foundation' );
        wp_register_style( 'hocwp', get_style_uri(), array(), get_theme_version() );
        wp_enqueue_style( 'hocwp' );
        wp_enqueue_script('jquery');
        wp_register_script('my-plugin-script', plugins_url( '/js/script.js', __FILE__ ));
        wp_enqueue_script( 'my-plugin-script' );
 
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts_and_styles' );
