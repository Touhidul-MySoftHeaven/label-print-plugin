<?php
$args = array(
    'post_type'      => 'product',
    'posts_per_page' => -1,  // -1 to retrieve all products, you can set the number you want
);

$products_query = new WP_Query( $args );
$currency=get_woocommerce_currency_symbol();
if ( $products_query->have_posts() ) {
    while ( $products_query->have_posts() ) {
        $products_query->the_post();
        $image=get_the_post_thumbnail_url(get_the_ID());
        if(!empty($image))
        {
            ?>
            <div class="col-md-3">
              <div class="card m-2 p-2">
                <img src="<?=$image?>" alt="" class="w-25 mx-auto">
                <p class="mx-auto"><?=get_post_meta( get_the_ID(), '_regular_price', true );?> <?=$currency?></p>
              </div>
            </div>
            <?php
        }
        
    }
    wp_reset_postdata();
} else {
    echo 'No products found';
}
