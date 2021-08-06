<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       text_replacer.com
 * @since      1.0.0
 *
 * @package    Text_replacer
 * @subpackage Text_replacer/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Text_replacer
 * @subpackage Text_replacer/public
 * @author     Shyam Sundar Maury <shyam@baseapp.com>
 */
class Text_replacer_Public
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

	function repeater_change_content()
	{
		$content = get_the_content();
		$options = get_option('my_replacer');
	
         if($options['opt-switcher-1'] == 1){
			$search = $options['opt-search'];
			$replace = $options['opt-replace'];
			$content = str_replace($search, $replace, $content);
		 }
		
		$rows = $options['opt-repeater-1'];
		if ($rows) {

			for ($i = 0; $i <= 100; $i++) {
				if ($rows[$i]['opt-switcher-1'] == 1) {
					$search = $rows[$i]['opt-search1'];
					$replace = $rows[$i]['opt-replace1'];
					$content = str_replace($search, $replace, $content);
				}
			}
		}

		return $content;
	} 












	

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct($plugin_name, $version)
	{

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	
		add_filter('the_content', [$this, 'repeater_change_content']);
	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
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

		wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/text_replacer-public.css', array(), $this->version, 'all');
	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
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

		wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/text_replacer-public.js', array('jquery'), $this->version, false);
	}


	public function replace_text()
	{
	}
}
