<?php
	 global $wpdb;
$posttable=$wpdb->prefix.'posts';
$current_campaigns = $wpdb->get_results("SELECT * from $posttable as wp_posts where wp_posts.post_type='current_campaigns' and wp_posts.post_status = 'publish'  ORDER BY wp_posts.menu_order, wp_posts.post_date desc;");
   
?>
<style>
    .flex-container {
  display: flex;
  flex-wrap: wrap;
  margin-bottom: 100px !important; 
}

/* Flex items representing individual products */
.product {
  width: calc(33.33% - 20px); /* Adjust as needed for your layout */
  margin: 10px;
  border: 1px solid #ccc;
  padding: 10px; 
  margin-bottom: 10px;
}

</style>
<h2 style="text-align: center;">Aktuella Kampanjer</h2>
  <div class="flex-container">
   <?php
   foreach ( $current_campaigns as $key=>$value )
   {
    ?>
        <a class="product" href="<?=get_permalink($value->ID)?>">
        <div>
        <h5 style="color:#528000; margin-bootom:10px;text-align:center"><?=$value->post_title?></h5>
        <p style="text-align:center"><?=$value->post_content;?></p>
        </div>
        </a>
    <?php
   }
   
   ?>
 