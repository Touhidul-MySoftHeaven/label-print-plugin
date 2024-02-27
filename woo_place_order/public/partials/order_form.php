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
  width: 100%;
  /* overflow: scroll; */
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
    
    $product_id_prev=array();
    $quantity_prev=array();
    foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item) 
    {
           array_push($product_id_prev,$cart_item['product_id']);
           array_push($quantity_prev,$cart_item['quantity']);
    }
    $last_five_orders_ids=getLastFiveOderByCustomer();
    $last_order_master_array=array();
    foreach($last_five_orders_ids as $last_five_orders_id)
     {
        $temp_product_id=array();
        $temp_quantity=array();
        $last_oder_date=get_the_date('d/m', $last_five_orders_id->ID);
        $single_order['order_date']=$last_oder_date;    
        $last_order=wc_get_order( $last_five_orders_id->ID);

        foreach ( $last_order->get_items() as $item_id => $item ) {
          $product_id = $item->get_product_id();
          $quantity = $item->get_quantity();
          array_push($temp_product_id,$product_id);
          array_push($temp_quantity,$quantity);
       }
       $single_order['product_id']=$temp_product_id;
       $single_order['quantity']=$temp_quantity;

       array_push($last_order_master_array,$single_order);
     }
    





if(isset($_POST['order_submit'])){
  $cart = WC()->cart;

  // Check if the cart is not empty
  if (! $cart->is_empty()) {
      // Clear the cart
      $cart->empty_cart();
  }
      foreach($_POST['qty'] as $key=>$val){
      if(!empty($val)){
       $product_id = $_POST['a_id'][$key];
        $quantity = $val;
          $cart = WC()->cart;
            $cart_item_key = $cart->find_product_in_cart($product_id);
        
        if (!$cart_item_key) {
            // Product is not in the cart, so let's add it
            $cart->add_to_cart($product_id, $quantity);
        } else {
            // Product is already in the cart, so let's update the quantity
            $cart->set_quantity($cart_item_key, $quantity);
        }
          //$cart->add_to_cart($product_id, $quantity);
        //  add_specific_product_to_cart($product_id, $quantity);
      }
      }
    //echo wc_get_checkout_url();
    wp_redirect(site_url('/my-account/order_review_page'));
    exit;
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
                <h1 class="page_heading">'Förhandsgranska beställning</h1>
              </div>
              <form method="post" action=""> 
                <input type="hidden" name="form_no" value="1">
                <!-- Search -->
                <input type="hidden" value="" name="related_product" id="related-product">
                <?php wp_nonce_field('custom_product_gallery_nonce', 'custom_product_gallery_nonce');?>
                <input id="related-product-search-input2"  onkeyup='searchTable()' class="search-input" type="text" placeholder="Sök produkt">
                <br>
                <br>
                <!-- Search Ends -->
                <div class="table_responsive">
                  <table class="table table-condensed table-hover" id="productTable">
                    <thead>
                        <th>Art.Nr</th>
                        <th>Artikel</th>
                        <th>Kommentar</th>
                        <th>10krt pris</th>
                        <th>20krt pris</th>
                        <th>40krt pris</th>
                        <th style="width:120px;">Antal</th>
                        <?php
                        if(!empty($last_order_master_array))
                        {
							  $td='';
                          foreach($last_order_master_array as $last_order_master_single)
                          {
							   $td=$td.'<td></td>';
                            ?><th><?=$last_order_master_single['order_date']?></th><?php
                          }
                        }
                        ?>
                    </thead>
                    <tbody class="product-table-body">
                    <?php
                        $args = array(
                        'orderby'    => 'name',
                        'order'      => 'ASC',
                        'hide_empty' => 0,
                        'parent'    => 0); 

                   $categories = get_terms( 'product_cat', $args );
                   foreach($categories as $term){
                       echo '       <tr class="well"><td></td><td colspan="3" style=""><strong class="color__heading" style="color:green;">'.$term->name.'</strong></td><td></td><td></td><td></td>'. $td.'';
                        $args2 = array(  
                            'post_type' => 'product',
                            'post_status' => 'publish',
                            'posts_per_page' => -1, 
                            'orderby' => 'menu_order',
                            'meta_query'     => array(
                              array(
                                  'key'     => '_sku', // SKU meta key
                                  'value'   => '',     // Empty value
                                  'compare' => '!=',   // Not equal to
                              ),
                            ),
                            'tax_query'             => array(
                              array(
                             'taxonomy'      => 'product_cat',
                              'field' => 'term_id', //This is optional, as it defaults to 'term_id'
                              'terms'         => $term->term_id,
                             'operator'      => 'IN' // Possible values are 'IN', 'NOT IN', 'AND'.
                                 )),
                            'order' => 'ASC', 
                        );
                        $loop = new WP_Query( $args2 ); 
                        while ( $loop->have_posts() ) : $loop->the_post();
                        $product = wc_get_product( get_the_ID() );
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
                    ?>
                 
                      <tr id="row_id_<?php echo get_the_ID();?>" class="product-single-row" r-id="<?php echo get_the_ID();?>">
                        <td><small><?php echo get_post_meta(get_the_ID(), 'Serial', true); ?></small></td>
                        <td>
                           
                            <div class="popup_content"> 
                                <small class="pop__heading"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z"/></svg><?php the_title(); ?></small>
                                 <div class="hover_text">
                                     <?php if(!empty($image)){?>
                                     <img src="<?php echo $image['0'];?>" alt="<?php the_title(); ?>">
                                     <?php } ?>
                                       <p>
                                <?php if(!empty(get_post_meta(get_the_ID(),'Ingredients',true))){?><strong>Ingredienser:</strong> <?php echo get_post_meta(get_the_ID(),'Ingredients',true); ?><br /><?php } ?>
                                <br><?php if(!empty(get_post_meta(get_the_ID(),'Weightg',true))){?><strong>Vikt: </strong><?php echo get_post_meta(get_the_ID(),'Weightg',true); ?> <?php } ?><?php if(!empty(get_post_meta(get_the_ID(),'quantity-in-carton',true))){?><strong>Antal i kartong: </strong><?php echo get_post_meta(get_the_ID(),'quantity-in-carton',true); ?><?php } ?></p>
                                </div>
                            </div>
                          </td>
                        
                         
                          
                    
                          
                         <td>
                              <input type="hidden" name="a_id[<?php echo get_the_ID();?>]" value="<?php echo get_the_ID();?>" >
                         <?php echo $product->get_short_description(); ?>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                          <td style="width:100px;">
                          <?php
                          $quantity_value='';
                          if(in_array(get_the_ID(),$product_id_prev))
                          {
                            $index = array_search(get_the_ID(), $product_id_prev);
                            $quantity_value=$quantity_prev[$index];
                          }
                          ?>
                          <input
                            type="number"
                            min="0"
                            class="form-control qunatity"
                            name="qty[<?php echo get_the_ID();?>]"
                            id="qty-<?php echo get_the_ID();?>"
                            placeholder="Antal"
                            value="<?=$quantity_value?>"
                          />
                        </td>
                        <?php
                        if(!empty($last_order_master_array))
                        {
                          $total_quantity_master=array();
                          foreach($last_order_master_array as $last_order_master_single)
                          {
                            
                            $quantity_print=0;
                            if(in_array(get_the_ID(),$last_order_master_single['product_id']))
                          {
                            $index = array_search(get_the_ID(), $last_order_master_single['product_id']);
                            $quantity_print=$last_order_master_single['quantity'][$index];
                           
                          }


                            ?><td><?=$quantity_print?></td><?php

                            array_push($total_quantity_master,array_sum($last_order_master_single['quantity']));
                          }
                        }
                        ?>
                     
                        <!-- Search Ends -->
                      </tr>
                     

                    <?php
                        endwhile;
                        wp_reset_postdata(); 
                   }
                    ?>
                     <?php
                        if(!empty($last_order_master_array))
                        {
                        
                          ?>
                          <tr>
                            <td colspan="6">Antal artiklar (allt utom glutenfritt & tillbehör):</td>
                            <td>0</td>
                            <?php
                            foreach($total_quantity_master as $total_quantity)
                            {
                              ?><td><?=$total_quantity?></td><?php
                            }
                            ?>
                          </tr>
                          <tr>
                            <td colspan="6">Glutenfritt:</td>
                            <td>0</td>
                            <?php
                            foreach($total_quantity_master as $total_quantity)
                            {
                              ?><td>0</td><?php
                            }
                            ?>
                          </tr>
                          <tr>
                            <td colspan="6">Tillbehör:</td>
                            <td>0</td>
                            <?php
                            foreach($total_quantity_master as $total_quantity)
                            {
                              ?><td>0</td><?php
                            }
                            ?>
                          </tr>
                          <?php

                        } 
                       ?> 
                    </tbody>
                  </table>
                </div>
                <div>
                  <div class="row">
                    <div class="col-md-6">
                    <label for="e_deliverydate" class="">Önskat leveransdatum (åååå-mm-dd)&nbsp;<abbr class="required" title="obligatoriskt">*</abbr></label>
                    <br>
                    <input type="text" id="datepicker" name="datepicker" placeholder="" required>
                    </div>
                    <div class="col-md-6">
                    <label for="e_deliverydate" class="">Kommentar</label>
                    <br>
                     <input type="text" id="customer_note" class="form-control" name="customer_note" placeholder="">
                    </div>
                  </div>
                </div>
                <br>
                  <button type="submit" name="order_submit" class="btn btn-lg btn-success">
                  <i class="fa-solid fa-tag"></i> Förhandsgranska order
                </button>
              </form>
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