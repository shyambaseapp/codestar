<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       text_replacer.com
 * @since      1.0.0
 *
 * @package    Text_replacer
 * @subpackage Text_replacer/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Text_replacer
 * @subpackage Text_replacer/admin
 * @author     Shyam Sundar Maury <shyam@baseapp.com>
 */
class Text_replacer_Admin
{

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct($plugin_name, $version)
	{

		$this->plugin_name = $plugin_name;
		$this->version = $version;
	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Text_replacer_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Text_replacer_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/text_replacer-admin.css', array(), $this->version, 'all');
	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts()
	{

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Text_replacer_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Text_replacer_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/text_replacer-admin.js', array('jquery'), $this->version, false);
	}

	public function render_admin()
	{
		//require plugin_dir_path( __FILE__ ) . 'includes/find_replace.php';

		//
		// Set a unique slug-like ID
		$prefix = 'my_replacer';
		//
		// Create options
		CSF::createOptions($prefix, array(
			'framework_title' => ' Text Replacer  <small> by  Shyam</small>',
			'menu_title' => ' Text Replacer',
			'menu_slug'  => 'my-framework',
			'menu_icon' => 'dashicons-editor-paste-text',
			'show_sub_menu' => true,
			'footer_text'=>'<a href="http://www.google.com"><big>Help!</big></a>',
			
			

		));
	


		// Create a section
		CSF::createSection($prefix, array(

			'title'  => 'Text Replacer',
			'fields' => array(
			
				// A switcher
				array(
					'id'    => 'opt-switcher-1',
					'type'  => 'switcher',
					'title' => 'Switcher',
				),
				// A text field
				array(
					'id'    => 'opt-search',
					'type'  => 'text',
					'title' => 'Search',
					'validate' => 'min_3char',

				),


				array(
					'id'    => 'opt-replace',
					'type'  => 'text',
					'title' => 'Replace',
					'validate' => 'min_3char',

				),
			
				array(
					'id'     => 'opt-repeater-1',
					'type'   => 'repeater',

					'fields' => array(
						array(
							'id'    => 'opt-switcher-1',
							'type'  => 'switcher',
							'title' => 'Switcher',

						),
						// A text field
						array(
							'id'    => 'opt-search1',
							'type'  => 'text',
							'title' => 'Search',
							'validate' => 'min_3char',

						),

						array(
							'id'    => 'opt-replace1',
							'type'  => 'text',
							'title' => 'Replace',
							'validate' => 'min_3char',

						),


					),
				),

			)
		));
	}
}
//check the value have at list three char
function min_3char($value)
{
	if (strlen($value) < 3) {
		return esc_html__('Atleast 3 characters please', 'csf');
	}
}

// adding sub-menu
function wp_replacer()
{
    add_submenu_page(
		
        'my-framework',
        'Text Replace',
        'Text Replace',
        'manage_options',
        'my-framework',
    );
	add_submenu_page(
		
        'my-framework',
        'Visit Site',
        'Visit Site',
        'manage_options',
       'https://www.google.com/',
    );
}
add_action('admin_menu', 'wp_replacer');


// remove tools submenu
function remove_sub_menu() {
    $page = remove_submenu_page( 'tools.php', 'csf-welcome' );
}
add_action( 'admin_menu', 'remove_sub_menu' );




