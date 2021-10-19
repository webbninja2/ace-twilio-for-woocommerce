<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              acewebx.com/contact-us
 * @since             1.0.0
 * @package           Ace_Twilio_For_Woocommerce
 *
 * @wordpress-plugin
 * Plugin Name:       Ace Twilio For Woocommerce 
 * Plugin URI:        acewebx.com
 * Description:       This plugin help us to send sms when user placed order, It update order status to user.
 * Version:           1.0.0
 * Author:            AceWebx Team
 * Author URI:        acewebx.com/contact-us
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       ace-twilio-for-woocommerce 
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-ace-twilio-for-woocommerce -activator.php
 */
function activate_ace_twilio_for_woocommerce () {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ace-twilio-for-woocommerce -activator.php';
	Ace_Twilio_For_Woocommerce_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-ace-twilio-for-woocommerce -deactivator.php
 */
function deactivate_ace_twilio_for_woocommerce () {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-ace-twilio-for-woocommerce -deactivator.php';
	Ace_Twilio_For_Woocommerce_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_ace_twilio_for_woocommerce ' );
register_deactivation_hook( __FILE__, 'deactivate_ace_twilio_for_woocommerce ' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-ace-twilio-for-woocommerce .php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_ace_twilio_for_woocommerce () {

	$plugin = new Ace_Twilio_For_Woocommerce();
	$plugin->run();

}
run_ace_twilio_for_woocommerce ();
