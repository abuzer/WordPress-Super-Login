<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       github.com/abuzer
 * @since      1.0.0
 *
 * @package    Super_login_form
 * @subpackage Super_login_form/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Super_login_form
 * @subpackage Super_login_form/public
 * @author     Abuzer <abuzer.cs@gmail.com>
 */
class Super_login_form_Public {

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
		$this->enqueue_styles();
		$this->enqueue_scripts();

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
		 * defined in Super_login_form_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Super_login_form_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		

		wp_enqueue_style( 'bootstrap', plugin_dir_url( __FILE__ ) . 'vendor/bootstrap/css/bootstrap.min.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'font-awesome', plugin_dir_url( __FILE__ ) . 'fonts/font-awesome-4.7.0/css/font-awesome.min.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'material-design-iconic-font', plugin_dir_url( __FILE__ ) . 'fonts/iconic/css/material-design-iconic-font.min.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'animate', plugin_dir_url( __FILE__ ) . 'vendor/animate/animate.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'hamburgers', plugin_dir_url( __FILE__ ) . 'vendor/css-hamburgers/hamburgers.min.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'animsition', plugin_dir_url( __FILE__ ) . 'vendor/animsition/css/animsition.min.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'select2', plugin_dir_url( __FILE__ ) . 'vendor/select2/select2.min.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'daterangepicker', plugin_dir_url( __FILE__ ) . 'vendor/daterangepicker/daterangepicker.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'util.css', plugin_dir_url( __FILE__ ) . 'css/util.css', array(), $this->version, 'all' );
		wp_enqueue_style( $this->plugin_name.'main.css', plugin_dir_url( __FILE__ ) . 'css/main.css', array(), $this->version, 'all' );

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
		 * defined in Super_login_form_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Super_login_form_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		//wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'vendor/jquery/jquery-3.2.1.min.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( 'animsition.min.js', plugin_dir_url( __FILE__ ) . 'vendor/animsition/js/animsition.min.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( 'js/popper.js', plugin_dir_url( __FILE__ ) . 'vendor/bootstrap/js/popper.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( 'bootstrap.min.js', plugin_dir_url( __FILE__ ) . 'vendor/bootstrap/js/bootstrap.min.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( 'select2.min.js', plugin_dir_url( __FILE__ ) . 'vendor/select2/select2.min.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( 'moment.min.js', plugin_dir_url( __FILE__ ) . 'vendor/daterangepicker/moment.min.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( 'daterangepicker/daterangepicker.js', plugin_dir_url( __FILE__ ) . 'vendor/daterangepicker/daterangepicker.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( 'countdowntime/countdowntime.js', plugin_dir_url( __FILE__ ) . 'vendor/countdowntime/countdowntime.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( $this->plugin_name.'main-js', plugin_dir_url( __FILE__ ) . 'js/main.js', array( 'jquery' ), $this->version, false );

		

	}

}
