<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       acewebx.com/contact-us
 * @since      1.0.0
 *
 * @package    Ace_Twilio_For_Woocommerce
 * @subpackage Ace_Twilio_For_Woocommerce/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Ace_Twilio_For_Woocommerce
 * @subpackage Ace_Twilio_For_Woocommerce/public
 * @author     webninja <webbninja01@gmail.com>
 */
class Ace_Twilio_For_Woocommerce_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Ace_Twilio_For_Woocommerce_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Ace_Twilio_For_Woocommerce_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/ace-twilio-for-woocommerce -public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {
		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Ace_Twilio_For_Woocommerce_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Ace_Twilio_For_Woocommerce_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/ace-twilio-for-woocommerce -public.js', array( 'jquery' ), $this->version, false );

	}

	public function ace_woo_order_receive( $var, $order ){
		$status   = $order->data['status'];
		$order_id = $order->data['id'];		
		include plugin_dir_path(__FILE__).'twilio/index.php';
	}

	public function ace_woo_thanku_page( $data ){
		$order = wc_get_order( $data );
		$customer_name   = $order->data['billing']['first_name'];
		$customer_id     = $order->data['customer_id'];
		$customer_number =  $order->data['billing']['phone'];
		$status          = $order->data['status'];
		include plugin_dir_path(__FILE__).'twilio/index.php';
	}


}
