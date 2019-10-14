<?php
/**
 * Plugin Name: Test Plugin CMS
 * Plugin URI: http://wordpress/plugin/my-first-plugin-demo/my-first-plugin-demo.php // Địa chỉ trang chủ của plugin
 * Description: Đây là plugin test(Cường) tự tạo // Phần mô tả cho plugin
 * Version: 1.0 // Đây là phiên bản đầu tiên của plugin
 * Author: Phạm Cao Cường, người thực hiện plugin này
 * Author URI: http://     // Địa chỉ trang chủ của tác giả
 * License:   // Thông tin license của plugin, nếu không quan tâm thì bạn cứ để GPLv2 vào đây
 */
?>

<?php
if(!class_exists('My_First_Plugin_Demo')) {
    class My_First_Plugin_Demo {
            function __construct() {
                    if(!function_exists('add_shortcode')) {
                            return;
                    }
                    add_shortcode( 'hello' , array(&$this, 'hello_func') );
            }

            function hello_func($atts = array(), $content = null) {
                    extract(shortcode_atts(array('name' => 'test Plugin Wordpress'), $atts));
                    return '<div><p>Hello '.$name.'!!!</p></div>';
            }
    }
}
function mfpd_load() {
    global $mfpd;
    $mfpd = new My_First_Plugin_Demo();
}
add_action( 'plugins_loaded', 'mfpd_load' );
?>




<?php
function register_mysettings() {
        register_setting( 'mfpd-settings-group', 'mfpd_option_name' );
}
 
function mfpd_create_menu() {
        add_menu_page('My First Plugin Settings', 'MFPD Settings', 'administrator', __FILE__, 'mfpd_settings_page',plugins_url('/images/icon.png', __FILE__), 1);
        add_action( 'admin_init', 'register_mysettings' );
}
add_action('admin_menu', 'mfpd_create_menu'); 
 
function mfpd_settings_page() {
?>
<div class="wrap">
<h2>Tạo trang cài đặt cho plugin</h2>
<?php if( isset($_GET['settings-updated']) ) { ?>
    <div id="message" class="updated">
        <p><strong><?php _e('Settings saved.') ?></strong></p>
    </div>
<?php } ?>
<form method="post" action="options.php">
    <?php settings_fields( 'mfpd-settings-group' ); ?>
    <table class="form-table">
        <tr valign="top">
        <th scope="row">Tùy chọn cài đặt</th>
        <td><input type="text" name="mfpd_option_name" value="<?php echo get_option('mfpd_option_name'); ?>" /></td>
        </tr>
    </table>
    <?php submit_button(); ?>
</form>
</div>


<?php
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
?>

<?php } ?>



