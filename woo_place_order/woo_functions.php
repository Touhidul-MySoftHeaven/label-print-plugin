<?php

// Step 1 - Add Link (Tab) to My Account menu
add_filter ( 'woocommerce_account_menu_items', 'add_eil_custom_menu_items', 40 );
function add_eil_custom_menu_items( $menu_items ){
   
    
     $new_items = array();
    // Loop throu menu items
    foreach( $menu_items as $key => $item ){
        if( 'orders' == $key )
            $new_items['place-an-order'] = __( 'Lägg beställning' );

        $new_items[$key] = $item;
    }
    return $new_items;
}

// Step 2 - Enable endpoint (and endpoint permalink) - Since WooCommerce 3
add_action( 'init', 'eil_add_endpoint' );
function eil_add_endpoint() {

	add_rewrite_endpoint( 'place-an-order', EP_PAGES );

}
// content for the new page in My Account, woocommerce_account_{ENDPOINT NAME}_endpoint
add_action( 'woocommerce_account_place-an-order_endpoint', 'eil_my_account_endpoint_content' );
function eil_my_account_endpoint_content() {
        
		include plugin_dir_path( __FILE__ ).'/public/partials/order_form.php';
}

/*// Step 3. Content for the new page in My Account, woocommerce_account_{ENDPOINT NAME}_endpoint
add_action( 'woocommerce_account_place-an-order_endpoint', 'add_eil_account_place_order_endpoint_content' );
function add_eil_account_place_order_endpoint_content() {
    ob_start();
    
    require_once(plugin_dir_path( __FILE__ ) . '/woo_place_order.php') ;
    return ob_get_clean();
}*/



// Step 4. Endpoint page title
add_filter( 'woocommerce_endpoint_place-an-order_title', 'set_eil_account_place_order_endpoint_title', 10, 2 );
function set_eil_account_place_order_endpoint_title( $title, $endpoint ) {
    $title = __("Place an order", "woocommerce" );

    return $title;
}



add_filter( 'woocommerce_account_orders_columns', 'add_account_orders_column', 10, 1 );
function add_account_orders_column( $columns ){
    $order_actions  = $columns['order-actions']; // Save Order actions
    unset($columns['order-actions']); // Remove Order actions

    // Add your custom column key / label
    $columns['custom-column'] = __( 'Önskat leveransdatum (åååå-mm-dd)', 'woocommerce' );

    // Add back previously saved "Order actions"
    $columns['order-actions'] = $order_actions;

    return $columns;
}

// Display a custom field value from order metadata
add_action( 'woocommerce_my_account_my_orders_column_custom-column', 'add_account_orders_column_rows' );
function add_account_orders_column_rows( $order ) {
    // Example with a custom field
    if ( $value = get_post_meta($order->get_id(),'Önskat leveransdatum (åååå-mm-dd)',true)) {
        esc_html_e( $value );
    } else {
        printf( '<small>%s</small>', __("no value") );
    }
}

add_filter( 'woocommerce_my_account_my_orders_actions', 'ts_order_again_action', 9999, 2 );

function ts_order_again_action( $actions, $order ) {
//if ( $order->has_status( 'completed' ) ) {
$actions['order-again'] = array(
'url' => add_query_arg( 'order_again', $order->get_id(),site_url('/my-account/re-order-page')),
'name' => __( 'Order again', 'woocommerce' ),
);
//}
return $actions;
}

add_action( 'init', 'xrgty37_add_endpoint' );
function xrgty37_add_endpoint() {
 
	// Check WP_Rewrite
	add_rewrite_endpoint( 're-order-page', EP_PAGES );
 
}
/*
 * Step 3. Content for the new page in My Account, woocommerce_account_{ENDPOINT NAME}_endpoint
 */
add_action( 'woocommerce_account_re-order-page_endpoint', 'xrgty37_my_account_endpoint_content' );
function xrgty37_my_account_endpoint_content() {
 
	// Content for new page
    include plugin_dir_path( __FILE__ ).'/public/partials/re_order_form.php';

	echo 'This is content for newly created menu item.'.$_GET['order_again'];
 
}


/**** Contest */
// Step 1 - Add Link (Tab) to My Account menu
add_filter ( 'woocommerce_account_menu_items', 'add_contest_custom_menu_items', 40 );
function add_contest_custom_menu_items( $menu_items ){
   
    
     $new_items = array();
    // Loop throu menu items
    foreach( $menu_items as $key => $item ){
        if( 'orders' == $key )
            $new_items['contest'] = __( 'Tävling' );

        $new_items[$key] = $item;
    }
    return $new_items;
}

// Step 2 - Enable endpoint (and endpoint permalink) - Since WooCommerce 3
add_action( 'init', 'eil_add_endpoint_contest' );
function eil_add_endpoint_contest() {

	add_rewrite_endpoint( 'contest', EP_PAGES );

}
// content for the new page in My Account, woocommerce_account_{ENDPOINT NAME}_endpoint
add_action( 'woocommerce_account_contest_endpoint', 'eil_my_account_endpoint_contest' );
function eil_my_account_endpoint_contest() {
        
		include plugin_dir_path( __FILE__ ).'/public/partials/contest.php';
}


// Change Order Functionalities



add_action( 'init', 'eil_add_endpoint_order_review_page' );
function eil_add_endpoint_order_review_page() {

	add_rewrite_endpoint( 'order_review_page', EP_PAGES );

}
// content for the new page in My Account, woocommerce_account_{ENDPOINT NAME}_endpoint
add_action( 'woocommerce_account_order_review_page_endpoint', 'eil_my_account_endpoint_order_review_page' );
function eil_my_account_endpoint_order_review_page() {
        
    include plugin_dir_path( __FILE__ ).'/public/partials/order_review.php';
}


add_action( 'init', 'eil_add_endpoint_order_change_page' );
function eil_add_endpoint_order_change_page() {

	add_rewrite_endpoint( 'order_change_page', EP_PAGES );

}
// content for the new page in My Account, woocommerce_account_{ENDPOINT NAME}_endpoint
add_action( 'woocommerce_account_order_change_page_endpoint', 'eil_my_account_endpoint_order_change_page' );
function eil_my_account_endpoint_order_change_page() {
        
    include plugin_dir_path( __FILE__ ).'/public/partials/change-order.php';
}

add_shortcode( 'campaign_grid', 'campaign_grid' );

function campaign_grid()
{
    include plugin_dir_path( __FILE__ ).'/public/partials/campaign_grid.php';
}