<div class="recreate_body">
  <style>
     @import url("https://fonts.googleapis.com/css2?family=Gilda+Display&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap");
.recreate_body {
  background: url(<?php echo site_url().'/wp-content/plugins/label-print/public/images/recreate_bg.jpg';?>) no-repeat center center fixed;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  -pie-background: url(../images/recreate_bg.jpg) no-repeat);
  behavior: url(PIE.htc);
}
.recreate_p {
  padding-top: 60px;
  font-family: "Lato", sans-serif;
}
.recreate_p .container {
  max-width: 1075px;
  padding-left: 50px;
  padding-right: 50px;
  margin: 0 auto;
}
.recreate_p .page_heading_container {
  margin-bottom: 20px;
  border-bottom: 1px solid #eee;
}
.recreate_p .page_heading {
  font-size: 30px;
  margin-top: 20px;
  margin-bottom: 10px;
  color: #3d3d3d;
  font-family: "Gilda Display", serif;
}
.recreate_p .table_container {
  /* font-family: 'Lato', sans-serif; */
  margin-top: 40px;
  border-radius: 5px;
  border: 1px solid #c9c9c9;
  background-color: #fff;
  background-image: url("/images/fabric.png");
  min-height: 445px;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 30px;
  padding: 0 15px;
  padding-bottom: 20px;
}
.recreate_p .well {
  min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: #f5f5f5;
  border: 1px solid #e3e3e3;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
}
.recreate_p table thead th {
  line-height: 1.428571429;
  font-size: 14px;
}
.recreate_p table tbody td small {
  font-size: 12px;
  line-height: 17px;
}
.recreate_p table tbody .form-control {
  display: block;
  width: 100%;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.428571429;
  color: #555;
  vertical-align: middle;
  background-color: #fff;
  border: 1px solid #ccc;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out 0.15s,
    box-shadow ease-in-out 0.15s;
  transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
}
.recreate_p table tbody .form-control:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075),
    0 0 8px rgba(102, 175, 233, 0.6);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075),
    0 0 8px rgba(102, 175, 233, 0.6);
}
.recreate_p table tbody td {
  line-height: 1.428571429;
  vertical-align: top;
  border-top: 1px solid #ddd;
  border-bottom: 0;
}
.table-hover > tbody > tr:hover > td,
.table-hover > tbody > tr:hover > th {
  background-color: #f5f5f5 !important;
  --bs-table-accent-bg: #f5f5f5;
}
.recreate_p .btn-success {
  color: #fff;
  background-color: #5cb85c;
  border-color: #4cae4c;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px;
  border: 1px solid transparent;
}
.recreate_p .btn-success:hover {
  color: #fff;
  background-color: #47a447;
  border-color: #398439;
}
.popup_content{
  position: relative;
  min-width: 150px;
}
.popup_content .hover_text {
	position: absolute;
	background-color: #fff;
	box-shadow: rgba(0, 0, 0, 0.25) 0px 14px 28px, rgba(0, 0, 0, 0.22) 0px 10px 10px;
	border-radius: 5px;
	top: 50%;
	left: auto;
	transform: translate( calc(100% + 27px), -50%);
	display: none;
	transition: .5s;
	right: 0;
	width: 100% !important;
	max-width: 100%;
	padding: 10px;
	min-width: 270px;
  border: 1px solid #ddd;
}
.popup_content .hover_text p {
	font-size: 12px;
	line-height: 22px;
	opacity: 1;
  color: #333;
}
.popup_content .hover_text p strong{
  font-size: 13px;
}
.popup_content:hover .hover_text{
  display: block;
}
.popup_content .hover_text::before {
	content: '';
	position: absolute;
	display: block;
	width: 0px;
	left: 0;
	top: 50%;
	border: 10px solid transparent;
	border-left: 0;
	border-right: 10px solid #fff;
	transform: translate(-100%, -50%);
}
.color__heading{
  font-size: 16px;
}
.popup_content .pop__heading{
font-size: 14px;
  cursor: pointer;
}
.popup_content .pop__heading svg {
	height: 12px;
	width: 12px;
	color: #5358a0;
	margin-right: 5px;
	margin-top: -3px;
}

.product-single-row .col-md-5, .product-single-row .col-md-5 > *, .product-single-row .col-md-5 strong, .product-single-row .col-md-5 span {
	font-size: 12.5px !important;
	color: red !important;
	font-style: italic;
}
/* 
==========================================
=============== Responsive ===============
==========================================
*/
@media only screen and (max-width: 1024px) {
  .recreate_p .container {
    padding-left: 30px;
    padding-right: 30px;
  }
}

@media only screen and (max-width: 767px) {
  .recreate_p .container {
    padding-left: 0;
    padding-right: 0;
  }
  .recreate_p .table_container {
    padding-bottom: 15px;
    margin-top: 20px;
  }
  input::-webkit-outer-spin-button,
  input::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
  }
  input[type="number"] {
    -moz-appearance: textfield;
  }
  .recreate_p table thead th,
  .recreate_p table tbody td {
    white-space: nowrap;
  }
  .table_responsive {
    width: 100%;
    overflow-x: scroll;
    overflow-y: hidden;
    border: 1px solid #c9c9c9;
    margin-bottom: 15px;
  }
  .recreate_p .table_container {
    margin-bottom: 0;
    margin-top: 0;
    border: 0;
  }
}
    .elementor-widget-woocommerce-my-account .e-my-account-tab:not(.e-my-account-tab__dashboard--custom) .woocommerce tbody>tr:nth-child(2n)>td, .elementor-widget-woocommerce-my-account .e-my-account-tab:not(.e-my-account-tab__dashboard--custom) .woocommerce tbody>tr:nth-child(2n)>th, .elementor-widget-woocommerce-my-account .e-my-account-tab:not(.e-my-account-tab__dashboard--custom) .woocommerce tbody>tr:nth-child(odd)>td, .elementor-widget-woocommerce-my-account .e-my-account-tab:not(.e-my-account-tab__dashboard--custom) .woocommerce tbody>tr:nth-child(odd)>th {
    
    padding-left: 10px;
      }
      table td div{
          width:90%!important;
      } 
      table th{
          padding-left: 10px!important;
      }
  </style>
    <?php 
     $cart = WC()->cart;
   
    if ( ! $cart ) {
      return;
    }
    //var_dump(WC()->cart->get_cart());
if(isset($_POST['order_submit_re_review'])){
    
      global $wpdb;
    //  $wc_customer_lookup = $wpdb->prefix . 'wc_customer_lookup';
      $user=wp_get_current_user();
    
    //  $email=$user->user_email;
    //  $username=$user->user_email;
    //  $sql="SELECT *from $wc_customer_lookup where email='$email'";
    //  $result = $wpdb->get_row( $wpdb->prepare($sql));
    //  if(empty($result))
    //  {
    //    wp_redirect(wc_get_checkout_url());
    //    exit;
    //  }
     //else{
      // $wp_posts=$wpdb->prefix . 'posts';
      // $wp_postmeta=$wpdb->prefix . 'postmeta';

      // $sql="SELECT $wp_posts.ID FROM $wp_posts INNER join $wp_postmeta on  $wp_posts.ID=$wp_postmeta.post_id and $wp_posts.post_type='shop_order' and $wp_posts.post_status not in ('trash') and $wp_postmeta.meta_key='_customer_user' and $wp_postmeta.meta_value=$user->ID ORDER BY $wp_posts.ID desc limit 1";
      // $order_id = $wpdb->get_row($sql);
      // $order_prev = wc_get_order( $order_id );
     
      //custom_dd($_POST);
      if(empty($_POST['delivary_date_hidden_field']))
      {
        echo '<script>alert("Önskat leveransdatum is missing")</script>';
        Header('Location: '.$_SERVER['PHP_SELF']);
        exit;
      }
      $wp_posts=$wpdb->prefix . 'posts';
    
      $order = wc_create_order();

      foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item) {
        $order->add_product( wc_get_product( $cart_item['product_id']),$cart_item['quantity']);
      }
      $wp_postmeta=$wpdb->prefix . 'postmeta';

      $sql="SELECT $wp_posts.ID FROM $wp_posts INNER join $wp_postmeta on  $wp_posts.ID=$wp_postmeta.post_id and $wp_posts.post_type='shop_order' and $wp_posts.post_status not in ('trash') and $wp_postmeta.meta_key='_customer_user' and $wp_postmeta.meta_value=$user->ID ORDER BY $wp_posts.ID desc limit 1";
      $order_id = $wpdb->get_row($sql);
      if(!empty($order_id ))
      {
        $order_prev = wc_get_order( $order_id->ID);
        $address = array(
          'first_name' =>get_post_meta( $order_id->ID , '_billing_first_name', true ),
          'last_name'  =>get_post_meta( $order_id->ID , '_billing_last_name', true ), 
          'company'    =>get_post_meta( $order_id->ID , '_billing_company', true ), 
          'email'      =>get_post_meta( $order_id->ID , '_billing_email', true ), 
          'phone'      =>get_post_meta( $order_id->ID , '_billing_phone', true ), 
          'address_1'  =>get_post_meta( $order_id->ID , '_billing_address_1', true ), 
          'address_2'  => '',
          'city'       =>get_post_meta( $order_id->ID , '_billing_city', true ), 
          'state'      =>'',
          'postcode'   =>get_post_meta( $order_id->ID, '_billing_postcode', true ), 
          'country'    =>get_post_meta( $order_id->ID , '_billing_country', true ), 
        );
  
       $order->set_address( $address, 'billing' );
       $order->set_address( $address, 'shipping' );
      }
     
      $order->set_customer_id( $user->ID);
      $order->set_customer_ip_address( getTheIPAddress());
      
      
      $shipping = new WC_Order_Item_Shipping();
      $shipping->set_total( 0 );
      $order->set_status( 'wc-processing' );
      $order->add_item($shipping);
      $order->calculate_totals();
      $order->save();
      //custom_dd($order);
      $order_id=$order->get_id();
      
      if(isset($_POST['customer_note_hidden_field']) && !empty($_POST['customer_note_hidden_field']))
      {
        
        $order->add_order_note($_POST['customer_note_hidden_field'],1);

      }
      
      update_post_meta($order_id,'Önskat leveransdatum (åååå-mm-dd)',$_POST['delivary_date_hidden_field']);
      //update_post_meta($order_id,'_orddd_lite_timestamp',$_POST['delivary_date_timestm_hidden_field']);

      $cart = WC()->cart;

      // Check if the cart is not empty
      if (! $cart->is_empty()) {
          // Clear the cart
          $cart->empty_cart();
      }
    
        
      $retun_url='/my-account/view-order/'.$order_id;
      if ( ! $order->has_status( 'failed' ) ) {
        wp_safe_redirect( $retun_url );
        exit;
     }

     //}
     
     
    //echo wc_get_checkout_url();
    
}
?>
<main class="recreate_p">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Search -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <!-- Search Ends -->
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="table_container">
              <div class="page_heading_container">
                <h1 class="page_heading">Förhandsgranska order</h1>
              </div>
              <form method="post" action="">
                <input type="hidden" name="delivary_date_hidden_field" id="delivary_date_hidden_field">
                <input type="hidden" name="delivary_date_timestm_hidden_field" id="delivary_date_timestm_hidden_field">
                <input type="hidden" name="customer_note_hidden_field" id="customer_note_hidden_field">    
              <div class="table_responsive">
              <table class="table table-condensed table-hover" id="productTable">
              <thead>
                  <th>Artikelnummer</th>
                  <th>Artikel</th>
                  <th>Kommentar</th>
                  <th>Vikt</th>
                  <th>Antal i kartong</th>
                  <th>Antal kartonger</th>
             </thead>
             <tbody>
             <?php
             $total_quantity=0;
            foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item) {
              //$product_id = $cart_item->get_product_id(); // Get product ID
              $total_quantity=$total_quantity+$cart_item['quantity'];
              $product = wc_get_product($cart_item['product_id']);
                    ?>
              <tr>
                <td><?=get_post_meta($cart_item['product_id'], 'Serial', true); ?></td>
                <td><?=get_the_title($cart_item['product_id']);?></td>
                <td><?=$product->get_short_description();?></td>
                <td><?=get_post_meta($cart_item['product_id'],'_weight',true);?></td>
                <td><?=get_post_meta($cart_item['product_id'],'quantity-in-carton',true);?></td>
                <td><?=$cart_item['quantity'];?></td>
              </tr>
              <?php 

            }
		      ?>
             </tbody>
              </table>
              <br>
              <br>
              <div class="well">
              <p>Antal artiklar (allt utom glutenfritt &amp; tillbehör): <strong><?=$total_quantity;?></strong> kartonger</p>
              <p>Glutenfritt: <strong>0</strong> kartonger</p>
              <p>Tillbehör: <strong>0</strong> kartonger</p>
              <p>Önskat leveransdatum: <span id="roder_review_dalivary_date"></span></p>
              <p>Kommentar :<span id="order_review_customer_note"></span></p>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-lg btn-success" name="order_submit_re_review">
              <i class="fas fa-arrow-up"></i> Skicka order
              </button>

              <a href="<?=site_url('/my-account/order_change_page')?>" <button="" type="button" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i> Ändra order</a>
          </form>
              </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </main>
</div>
<script>
function searchTable() {
    var input, filter, found, table, tr, td, i, j;
    input = document.getElementById("related-product-search-input2");
    filter = input.value.toUpperCase();
    table = document.getElementById("productTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td");
        for (j = 0; j < td.length; j++) {
            if (td[j].innerHTML.toUpperCase().indexOf(filter) > -1) {
                found = true;
            }
        }
        if (found) {
            tr[i].style.display = "";
            found = false;
        } else {
            tr[i].style.display = "none";
        }
    }
     tr[0].style.display = "";
}
</script>
<style>
    .well{
        min-height: 20px;
    padding: 19px;
    margin-bottom: 20px;
    background-color: #f5f5f5;
    border: 1px solid #e3e3e3;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,0.05);
    box-shadow: inset 0 1px 1px rgba(0,0,0,0.05);
    }
</style>