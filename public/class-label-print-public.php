<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://encoderit.net
 * @since      1.0.0
 *
 * @package    Label_Print
 * @subpackage Label_Print/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Label_Print
 * @subpackage Label_Print/public
 * @author     Encoder IT Limited <info@encoderit.net>
 */
class Label_Print_Public {

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
		 * defined in Label_Print_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Label_Print_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/label-print-public.css', array(), $this->version, 'all' );

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
		 * defined in Label_Print_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Label_Print_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		// wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/label-print-public.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script('$this->plugin_name', plugin_dir_url(__FILE__) . 'js/label-print-public.js', array('jquery'), '1.0', true);
		wp_localize_script('$this->plugin_name', 'ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));

	}

	function search_product() {
		check_ajax_referer('custom_product_gallery_nonce', 'nonce');
	
		$search = $_POST['search'];
		$expect_product_id = $_POST['expect_product_id'];
	
		global $wpdb;
	
		$query = "SELECT ID, post_title FROM {$wpdb->posts} WHERE post_type = 'product' AND post_status = 'publish' AND post_title LIKE '%$search%' ";
		if($expect_product_id != ''){
			$query .= " AND  ID NOT IN ($expect_product_id)";
		}
		$query .= " ORDER BY ID DESC";
		
		$results = $wpdb->get_results($query);
		
		$post_array = array();
		
		foreach ($results as $result) {
			$tmp = [];
			$tmp['a_id'] = $result->ID;
			$tmp['title'] = $result->post_title;
			$tmp['serial'] = get_post_meta($result->ID, 'Serial', true);
			$tmp['weight'] = get_post_meta($result->ID, 'Weightg', true);
			$tmp['ingredients'] = get_post_meta($result->ID, 'Ingredients', true);
			$tmp['preview_img'] = get_the_post_thumbnail_url($result->ID,'full');
			array_push($post_array, $tmp);
		}
	
		echo json_encode($post_array);
	
		die();
	}

	public function create_shortcodes() {
		add_shortcode( 'show_links', array( $this, 'func_show_links' ) );
		add_shortcode( 'show_forms', array( $this, 'func_show_forms' ) );
		add_shortcode( 'recoder_page', array( $this, 're_order_page' ) );
	}

	public function func_show_links(){
		ob_start();
		$data = '
			<p><a href="'.site_url('label-print-forms').'?id=1">Hyllkantsetiketter - Höjd 3,7cm</a></p>
			<p><a href="'.site_url('label-print-forms').'?id=2">Hyllkantsetiketter - Höjd 5,1cm</a></p>
			<p><a href="'.site_url('label-print-forms').'?id=3">PLU-ark</a></p>
		';
		echo $data;
		return ob_get_clean();
	}

	public function func_show_forms(){
		ob_start();
		if($_GET['id'] == 1){
			require_once('partials/label-print-form-3-7cm.php');
		}elseif($_GET['id'] == 2){
			require_once('partials/label-print-form-5-5cm.php');
		}elseif($_GET['id'] == 3){
			require_once('partials/label-print-form-plu.php');
		}
		return ob_get_clean();
	}

    function add_specific_product_to_cart($product_id, $quantity = 1) {
    global $woocommerce; 
        echo $product_id;
    if (wc_get_product($product_id)) {
        // Get the cart instance
        $cart = WC()->cart;

        // Check if the product is already in the cart
        $cart_item_key = $cart->find_product_in_cart($product_id);
        
        if (!$cart_item_key) {
            // Product is not in the cart, so let's add it
            $cart->add_to_cart($product_id, $quantity);
        } else {
            // Product is already in the cart, so let's update the quantity
            $cart->set_quantity($cart_item_key, $quantity);
        }
     }
     }
	public function show_custom_forms($wp){
		if( $wp->request === 'label-print-generate-pdf' ) { 
			require_once('partials/label-print-generate-pdf.php');
		}
	}

	public function re_order_page()
	{
		ob_start();
		echo "Asa";
		return ob_get_clean();
	}
}
