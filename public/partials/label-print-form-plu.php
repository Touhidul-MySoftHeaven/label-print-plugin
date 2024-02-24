<?php
/*
Template Name: Custom Template
*/
get_header(); 
?>

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
  </style>
<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Search -->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <!-- Search Ends -->
  <main class="recreate_p">
      <div class="container">
      <div class="row">
          <div class="col-md-12">
        <div class="table_container">
          <div class="page_heading_container">
            <h1 class="page_heading">Skapa PLU-ark</h1>
          </div>
          <form method="post" action="<?php echo site_url('label-print-generate-pdf');?>">
              <input type="hidden" name="form_no" value="3">
              <!-- Search -->
              <input type="hidden" value="" name="related_product" id="related-product">
              <?php wp_nonce_field('custom_product_gallery_nonce', 'custom_product_gallery_nonce');?>
              <input id="related-product-search-input" class="search-input" type="text" placeholder="Sök produkt">
              <br>
              <br>
              <!-- Search Ends -->
              <table class="table table-condensed table-hover">
                <thead>
                  <tr class="well">
                    <th>#</th>
                    <th>Artikel</th>
                    <th>PLU</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody class="product-table-body">
                <?php
                    $args = array(  
                        'post_type' => 'product',
                        'post_status' => 'publish',
                        'posts_per_page' => -1, 
                        'orderby' => 'menu_order',
                        'order' => 'ASC', 
                    );
                    $loop = new WP_Query( $args ); 
                    while ( $loop->have_posts() ) : $loop->the_post(); 
                ?>
                  <tr id="row_id_<?php echo get_the_ID();?>" class="product-single-row" r-id="<?php echo get_the_ID();?>">
                    <td><small><?php echo get_post_meta(get_the_ID(), 'Serial', true); ?></small></td>
                    <td><small><?php the_title(); ?></small></td>
                    <td>
                    <input type="hidden" name="a_id[]" value="<?php echo get_the_ID();?>" >
                      <input type="hidden" name="title[]" value="<?php echo get_the_title(); ?>" >
                      <input type="hidden" name="serial[]" value="<?php echo get_post_meta(get_the_ID(), 'Serial', true); ?>" >
                      <input type="hidden" name="weight[]" value="<?php echo get_post_meta(get_the_ID(), 'Weightg', true); ?>" >
                      <input type="hidden" name="ingredients[]" value="<?php echo get_post_meta(get_the_ID(), 'Ingredients', true); ?>" >
                      <input type="hidden" name="preview_img[]" value="<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>" >
                      <input
                        type="number"
                        min="0"
                        class="form-control"
                        name="plu[]"
                        id="plu-<?php echo get_the_ID();?>"
                        placeholder="PLU"
                        value=""
                      />
                    </td>
                    <!-- Search -->
                    <td class="remove-row" t-id="<?php echo get_the_ID();?>">
                      <i class="icon-remove"></i>
                    </td>
                    <!-- Search Ends -->
                  </tr>
                <?php
                  endwhile;
                  wp_reset_postdata(); 
                ?>
                </tbody>
              </table>
              <button type="submit" name="form_submit" class="btn btn-sm btn-success">
              <i class="fa-solid fa-tag"></i> Skapa etikettark
            </button>
            </div>
          </form>
        </div>
      </div>
      </div>
      </div>
    </main>
</div>
<?php get_footer(); ?>