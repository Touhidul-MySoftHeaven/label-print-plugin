<?php
if(isset($_POST['order_submit'])){
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
    wp_redirect(wc_get_checkout_url());
    exit;
}
if(isset($_POST['form_submit']) && ($_POST['form_no'] == 1)){

    $html = '<div class="item_container">';
    $html .='<style>
            @import url("https://fonts.googleapis.com/css2?family=Gilda+Display&display=swap");
            @import url("https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap");
            /* body.recreate_body{
                background: url(\'../images/recreate_bg.jpg\') no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
                -pie-background: url(/images/recreate_bg.jpg) no-repeat);
                behavior: url(PIE.htc);
                color: #333;
            } */
            .recreate_p {
              padding-top: 60px;
              font-family: "Lato", sans-serif;
            }
            @page bigger { sheet-size: 3cm 7cm; }
            .recreate_p .container {
              max-width: 3cm;
              padding-left: 50px;
              padding-right: 50px;
              margin: 0 auto;
              margin-right: auto;
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
            
            .item_container {
              max-width: 850px;
              margin: 0 auto;
            }
            .item_container .single_item {
              background-color: #feffcf;
              margin-bottom: 20px;
              border: 1px solid #000;
              display: -webkit-inline-box;
              display: -ms-inline-flexbox;
              display: inline-flex;
              width: 100%;
            }
            
            
            .item_container .single_item .img_items > div,
            .item_container .single_item .sl_number {
              padding: 7px;
              display: block !important;
              width: 100%;
            }
            .single_item .img_items img {
              width: 120px;
              object-fit: contain;
              max-width: 100%;
              margin-bottom: 25px;
            }
            .single_item .text_title {
              color: #cf2733 !important;
              font-weight: 900;
              margin-bottom: 0;
              font-size: 50px;
            }
            .single_item .item_name {
              color: #000;
              font-weight: 800;
              margin-bottom: 5px;
              font-size: 24px;
              line-height: 29px;
            }
            .single_item .text_col .p {
              font-size: 12px;
              margin-bottom: 0;
            }
            .single_item .text_col .p.ingredienser_text {
              margin-bottom: 10px !important;
            }
            .single_item {
              position: relative;
            }
            .single_item .text_col {
              display: inline-block;
            }
            .single_item .logo_col {
              right: 0;
              bottom: 0;
              max-width: 250px;
              width: 100%;
              display: inline-block;
              margin-top: 30px;
            }
            .single_item .logo_col .price_weight p {
              font-size: 12px;
              margin-bottom: 0;
            }
            .single_item .logo_col .price_weight h4 {
              margin-bottom: 0;
              font-weight: 700;
              font-size: 24px;
              line-height: 29px;
            }
            .price_weight {
              width: 100%;
            }
            .single_item .logo_col img {
              height: 90px;
              object-fit: contain;
            }
            .single_item .logo_col .content_details {
              border: 1px solid #000;
              width: 125px;
              padding: 5px;
              display: inline-block !important;
              background-color: #fff !important;
              text-align: left;
            }
            .single_item .logo_col .weight {
              background-color: yellow !important;
            }
            .item_container table td {
              border: none !important;
              vertical-align: top;
              margin-left: 0 !important;
              border-left: 0 !important;
            }
            .single_item table .img_number {
              max-width: 120px;
              width: 120px;
              margin-right: 12px;
            }
            .single_item table .headin_items {
              max-width: 400px;
              width: 100%;
            }
            .single_item table .margin_right {
              margin-right: 5px;
              display: inline-block;
            }
            .single_item .small_text_main {
              max-width: 250px;
            }
            .single_item .logo_pricing {
            
              text-align: right;
            }
            table {page-break-inside: avoid;}
            </style>';



    foreach($_POST['qty'] as $key=>$val){
      if(!empty($val)){
        $data['a_id'] = $_POST['a_id'][$key];
        $data['qty'] = (empty($val))? 0 : $val;
        $data['title'] = $_POST['title'][$key];
        $data['price'] = (empty($_POST['price'][$key]))? 0 : $_POST['price'][$key];
        $data['custom_text'] = $_POST['custom_text'][$key];
        $data['serial'] = $_POST['serial'][$key];
        $data['weight'] = $_POST['weight'][$key];
        $data['ingredients'] = $_POST['ingredients'][$key];
        $data['preview_img'] = $_POST['preview_img'][$key];

        for($i=0; $i<$data['qty']; $i++){
          if(!empty($data['custom_text'])){
            $html .= '
              <table class="single_item" width="570px" style="margin-right: 115px; min-height: 130px;">
                <tbody width="570px">
                  <tr>
                    <td class="margin_right" style="width: 20%;">
                      <span class="sl_number">'.$data['serial'].'</span>
                    </td>
                    <td style="width: 50%;">
                      <h4
                        style="
                          color: #000;
                          font-weight: bold;
                          margin-bottom: 5px;
                          font-size: 17px;
                          line-height: 24px;
                        "
                        class="item_name"
                      >
                        '.$data['title'].' '.$data['weight'].'g
                      </h4>
                    </td>
                    <td style="width: 30%;"></td>
                  </tr>
                  <tr>
                    <td class="margin_right" style="width: 20%;">
                      <div class="img_items">
                        <img
                          style="
                            margin-bottom: 25px;
                            width: 78px;
                            margin-top: 7px;
                            height:78px;
                            object-fit: contain;
                            max-width: 100%;
                          "
                          src="'.$data['preview_img'].'"
                          alt=""
                        />
                      </div>
                    </td>
                    <td  style="width: 50%;">
                      <h2
                        style="
                          color: #cf2733;
                          font-weight: bold;
                          margin-bottom: 0;
                          font-size: 40px;
                        "
                        id="color_red"
                        class="text_title color_red"
                      >
                        '.$data['custom_text'].'
                      </h2>
                    </td>
                    <td style="width: 30%;"></td>
                  </tr>
                </tbody>
              </table>';
          }else{
            if(is_numeric($data['price']) && is_numeric($data['weight']) && ($data['weight']!=0)){
              $v1 = str_replace('.',',',number_format( ($data['price']*1000)/$data['weight'],2));
            }else{
              $v1 = '--';
            }
            if(is_numeric($data['price'])){
              $v2 = str_replace('.',',',number_format($data['price'], 2));
            }else{
              $v2 = '--';
            }
            $html .='
            
              <table class="single_item price_single_item" width="570px" style="margin-right: 115px; min-height: 130px;">
                <tbody width="570px">
                  <tr>
                    <td class="margin_right" style="width: 17%">
                      <span class="sl_number">'.$data['serial'].'</span>
    
                      <div class="img_items">
                        <img
                          style="
                            margin-bottom: 25px;
                            width: 78px;
                            margin-top: 7px;
                            height:78px;
                            object-fit: contain;
                            max-width: 100%;
                          "
                          src="'.$data['preview_img'].'"
                          alt=""
                        />
                      </div>
    
                    </td>
                    <td style="width: 53%">
                        <h4
                        style="
                          color: #000;
                          font-weight:bold;
                          margin-bottom: 5px;
                          font-size: 16px;
                          line-height: 24px;
                        "
                        class="item_name"
                      >
                      '.$data['title'].' '.$data['weight'].'g
                      </h4>
    
    
                      <span class="text_col">
                          <p
                            style="
                              font-size: 9px;
                              width: 100%;
                              display: block;
                              margin-top: 7px;
                              margin-bottom: 20px !important;
                            "
                            class="ingredienser_text p"
                          >
                            <strong>Ingredienser: </strong>
                            '.$data['ingredients'].'
                          </p>
                          <div style="height: 15px; visibility: hidden" class="separator">
                            
                          </div>
                          <p
                            style="
                              font-size: 9px;
                              width: 100%;
                              display: block;
                              margin-bottom: 0;
                            "
                            class="p"
                          >
                            
                          </p>
                        </span>
                    </td>
                    <td style="width: 30%;padding-bottom: 0px;width: 30%;
                    padding-bottom: 0px;
                    padding-right: 0;
                    margin: 0;
                    margin-bottom: 0px;
                    padding: 0;margin-left:4px;">
                    
                    <div
                      style="width: 100%;margin-top: 30px;"class="logo_col">
                        <div class="text-center">
                          <img
                            style="height: 80px; margin-left: 42px; object-fit: contain;"
                            src="'.__DIR__.'./../images/logo_header.png"
                            alt=""
                          />
                        </div>
                      </div>
    
                      <table style="margin: 0 !important; margin-top:2px;!important;padding-bottom: -10px !important;" >
                      <tbody style="margin: 0 !important; ">
                        <tr align="right" style="float: right; display: block !important; width: 100% !important;">
                          <td  style="
                            border: 1px solid #000;
                            width: 100%;
                            padding: 5px;
                            display: block !important;
                            background-color:#ffff00f2 !important;
                            text-align: left;
                            font-size: 10px;
                            "> 
                              <p style="
                                
                                  font-size: 9px;
                                  
                                ">Jämförpris kr/kg</p>
                                <p style="font-size: 16px; margin: 8px"><strong>
                                  '.$v1.'
                                </strong></p>
                    
                          </td>
                          <td style="
                                border: 1px solid #000;
                                width: 100%;
                                padding: 5px;
                                display: block !important;
                                background-color:#fff !important;
                                text-align: left;
                                font-size: 10px;
                                
                              ">
                            <p>Pris kr/st</p> 
                            <p style="font-size: 16px; margin: 8px"><strong>'.$v2.'</strong></p>
                          </td>
                        </tr>
    
                      </tbody>
                    </table> 
                    </td>
                  </tr>
                </tbody>
              </table>';
          }        
        }
  
  
      }
    }
    $html .= '</div>';
    // echo $html; exit;
    ob_end_flush();
    require_once __DIR__ . './../../vendor/autoload.php';
    $mpdf = new \Mpdf\Mpdf();
    $mpdf->shrink_tables_to_fit = 1;
    $mpdf->WriteHTML($html);
    $mpdf->Output();
}elseif(isset($_POST['form_submit']) && ($_POST['form_no'] == 2)){

  $html = '<div class="item_container">';
  $html .='<style>
    @import url("https://fonts.googleapis.com/css2?family=Gilda+Display&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap");
    /* body.recreate_body{
      background: url(\'../images/recreate_bg.jpg\') no-repeat center center fixed;
      -webkit-background-size: cover;
      -moz-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
      -pie-background: url(/images/recreate_bg.jpg) no-repeat);
      behavior: url(PIE.htc);
      color: #333;
    } */
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
    
    .item_container {
      max-width: 850px;
      margin: 0 auto;
    }
    .item_container .single_item {
      background-color: #feffcf;
      margin-bottom: 20px;
      border: 1px solid #000;
      display: -webkit-inline-box;
      display: -ms-inline-flexbox;
      display: inline-flex;
      width: 100%;
    }
    
    
    .item_container .single_item .img_items > div,
    .item_container .single_item .sl_number {
      padding: 7px;
      display: block !important;
      width: 100%;
    }
    .single_item .img_items img {
      width: 120px;
      object-fit: contain;
      max-width: 100%;
      margin-bottom: 25px;
    }
    .single_item .text_title {
      color: #cf2733 !important;
      font-weight: 900;
      margin-bottom: 0;
      font-size: 50px;
    }
    .single_item .item_name {
      color: #000;
      font-weight: 800;
      margin-bottom: 5px;
      font-size: 24px;
      line-height: 29px;
    }
    .single_item .text_col .p {
      font-size: 12px;
      margin-bottom: 0;
    }
    .single_item .text_col .p.ingredienser_text {
      margin-bottom: 10px !important;
    }
    .single_item {
      position: relative;
    }
    .single_item .text_col {
      display: inline-block;
    }
    .single_item .logo_col {
      right: 0;
      bottom: 0;
      max-width: 250px;
      width: 100%;
      display: inline-block;
      margin-top: 30px;
    }
    .single_item .logo_col .price_weight p {
      font-size: 12px;
      margin-bottom: 0;
    }
    .single_item .logo_col .price_weight h4 {
      margin-bottom: 0;
      font-weight: 700;
      font-size: 24px;
      line-height: 29px;
    }
    .price_weight {
      width: 100%;
    }
    .single_item .logo_col img {
      height: 90px;
      object-fit: contain;
    }
    .single_item .logo_col .content_details {
      border: 1px solid #000;
      width: 125px;
      padding: 5px;
      display: inline-block !important;
      background-color: #fff !important;
      text-align: left;
    }
    .single_item .logo_col .weight {
      background-color: yellow !important;
    }
    .item_container table td {
      border: none !important;
      vertical-align: top;
      margin-left: 0 !important;
      border-left: 0 !important;
    }
    .single_item table .img_number {
      max-width: 120px;
      width: 120px;
      margin-right: 12px;
    }
    .single_item table .headin_items {
      max-width: 400px;
      width: 100%;
    }
    .single_item table .margin_right {
      margin-right: 5px;
      display: inline-block;
    }
    .single_item .small_text_main {
      max-width: 250px;
    }
    .single_item .logo_pricing {
    
      text-align: right;
    }
    
    
    
    
    table {page-break-inside: avoid;}
    </style>';
  foreach($_POST['qty'] as $key=>$val){
    if(!empty($val)){
      $data['a_id'] = $_POST['a_id'][$key];
      $data['qty'] = (empty($val))? 0 : $val;
      $data['title'] = $_POST['title'][$key];
      $data['price'] = (empty($_POST['price'][$key]))? 0 : $_POST['price'][$key];
      $data['custom_text'] = $_POST['custom_text'][$key];
      $data['serial'] = $_POST['serial'][$key];
      $data['weight'] = $_POST['weight'][$key];
      $data['ingredients'] = $_POST['ingredients'][$key];
      $data['preview_img'] = $_POST['preview_img'][$key];

      for($i=0; $i<$data['qty']; $i++){
        if(!empty($data['custom_text'])){
          $html .= '
            <table class="single_item" width="570px" height="210" style="margin-right: 115px; min-height: 210px;">
              <tbody style="min-height: 210px !important;">
                <tr>
                  <td class="margin_right" style="width: 20%;">
                    <span class="sl_number">'.$data['serial'].'</span>
                  </td>
                  <td style="width: 50%;">
                    <h4
                      style="
                        color: #000;
                        font-weight: bold;
                        margin-bottom: 5px;
                        font-size: 17px;
                        line-height: 24px;
                      "
                      class="item_name"
                    >
                      '.$data['title'].' '.$data['weight'].'g
                    </h4>
                  </td>
                  <td style="width: 30%;"></td>
                </tr>
                <tr>
                  <td class="margin_right" style="width: 20%;">
                    <div class="img_items">
                      <img
                        style="
                          margin-bottom: 25px;
                          width: 78px;
                          margin-top: 7px;
                          height:78px;
                          object-fit: contain;
                          max-width: 100%;
                        "
                        src="'.$data['preview_img'].'"
                        alt=""
                      />
                    </div>
                  </td>
                  <td  style="width: 50%;">
                    <h2
                      style="
                        color: #cf2733;
                        font-weight: bold;
                        margin-bottom: 0;
                        font-size: 40px;
                      "
                      id="color_red"
                      class="text_title color_red"
                    >
                      '.$data['custom_text'].'
                    </h2>
                  </td>
                  <td style="width: 30%;"></td>
                </tr>
              </tbody>
            </table>';
        }else{
          if(is_numeric($data['price']) && is_numeric($data['weight']) && ($data['weight']!=0)){
            $v1 = str_replace('.',',',number_format( ($data['price']*1000)/$data['weight'],2));
          }else{
            $v1 = '--';
          }
          if(is_numeric($data['price'])){
            $v2 = str_replace('.',',',number_format($data['price'], 2));
          }else{
            $v2 = '--';
          }

          $html .='
          <table class="single_item price_single_item" height="210" width="570px" style="margin-right: 115px; min-height: 210px;">
            <tbody style="height: 21px;0px; min-height: 210px !important;">
              <tr>
                <td class="margin_right" style="width: 17%">
                  <span class="sl_number">'.$data['serial'].'</span>

                  <div class="img_items">
                    <img
                      style="
                        margin-bottom: 25px;
                        width: 78px;
                        margin-top: 7px;
                        height:78px;
                        object-fit: contain;
                        max-width: 100%;
                      "
                      src="'.$data['preview_img'].'"
                      alt=""
                    />
                  </div>

                </td>
                <td style="width: 53%">
                    <h4
                    style="
                      color: #000;
                      font-weight:bold;
                      margin-bottom: 5px;
                      font-size: 16px;
                      line-height: 24px;
                    "
                    class="item_name"
                  >
                  '.$data['title'].' '.$data['weight'].'g
                  </h4>


                  <span class="text_col" style="min-height: 170px !important;">
                      <p
                        style="
                          font-size: 11px;
                          width: 100%;
                          margin-top: 7px;
                          min-height: 170px !important;
                          display: block;
                          margin-bottom: 20px !important;
                        "
                        class="ingredienser_text p"
                      >
                        <strong>Ingredienser: </strong>
                        '.$data['ingredients'].'
                      </p>
                      <div style="height: 15px; visibility: hidden" class="separator">
                        
                      </div>
                      <p
                        style="
                          font-size: 9px;
                          width: 100%;
                          display: block;
                          margin-bottom: 0;
                        "
                        class="p"
                      >
                        
                      </p>
                    </span>
                </td>
                <td style="width: 30%;padding-bottom: 0px;width: 30%;
    padding-bottom: 0px;
    padding-right: 0;
    margin: 0;
    margin-bottom: 0px;
    padding: 0;margin-left:4px;">
                
                <div
                  style="width: 100%;margin-top: 30px;"class="logo_col">
                    <div class="text-center">
                      <img
                        style="height: 80px; margin-left: 42px; margin-bottom: 85px; object-fit: contain;"
                        src="'.__DIR__.'./../images/logo_header.png"
                        alt=""
                      />
                    </div>
                  </div>

                  <table style="margin: 0 !important; margin-top:2px;!important;padding-bottom: -10px !important;" >
                  <tbody style="margin: 0 !important; ">
                    <tr align="right" style="float: right; display: block !important; width: 100% !important;">
                      <td  style="
                        border: 1px solid #000;
                        width: 100%;
                        padding: 5px;
                        display: block !important;
                        background-color:#ffff00f2 !important;
                        text-align: left;
                        font-size: 10px;
                        "> 
                          <p style="
                            
                              font-size: 9px;
                              
                            ">Jämförpris kr/kg</p>
                            <p style="font-size: 16px; margin: 8px"><strong>
                              '.$v1.'
                            </strong></p>
                
                      </td>
                      <td style="
                            border: 1px solid #000;
                            width: 100%;
                            padding: 5px;
                            display: block !important;
                            background-color:#fff !important;
                            text-align: left;
                            font-size: 10px;
                            
                          ">
                        <p>Pris kr/st</p> 
                        <p style="font-size: 16px; margin: 8px"><strong>'.$v2.'</strong></p>
                      </td>
                    </tr>

                  </tbody>
                </table> 
                
                </td>
              </tr>
         
            </tbody>
          </table>';
        }        
      }


    }
  }
  $html .= '</div>';
  ob_end_flush();
  
    // echo $html; exit;
  require_once __DIR__ . './../../vendor/autoload.php';
  $mpdf = new \Mpdf\Mpdf();
  $mpdf->shrink_tables_to_fit = 1;
  $mpdf->WriteHTML($html);
  $mpdf->Output();
}elseif(isset($_POST['form_submit']) && ($_POST['form_no'] == 3)){
  $cnt = 0;
      $html = '
      <table>
        <tbody>
          <tr>';
  foreach($_POST['plu'] as $key=>$val){
    
    if(!empty($val)){
      $cnt++;
      $data['a_id'] = $_POST['a_id'][$key];
      $data['title'] = $_POST['title'][$key];
      $data['serial'] = $_POST['serial'][$key];
      $data['weight'] = $_POST['weight'][$key];
      $data['ingredients'] = $_POST['ingredients'][$key];
      $data['preview_img'] = $_POST['preview_img'][$key];

      $html .= '      <td style="box-shadow: none; width: 170px; display: inline-block">
      <table
        style="
          width: 100%;
          margin: 7.5px;
          padding: 5px;
          border-width: 1px;
          border-color: #000;
          border-style: solid;
        "
      >
        <tbody>
          <tr>
            <td
              style="
                border: 1px solid #1b1b1b;
                font-size: 10px;
                padding: 4px;
                border-width: 1px;
                padding-bottom: 10px;
              "
            >
              <p>'.$data['title'].'</p>
              <p>'.$data['weight'].'g</p>
            </td>
          </tr>
          <tr style="width: 100%; height: 80px">
            <td style="text-align: center; width: 100%; height: 80px">
              <div style="width: 100%; height: 80px">
                <img
                  style="
                    max-width: 100%;
                    max-height: 80px;
                    height: 80px;
                    object-fit: contain;
                    margin: 15px auto;
                  "
                  src="'.$data['preview_img'].'"
                  alt=""
                />
              </div>
            </td>
          </tr>
          <tr>
            <td
              style="border: 1px solid #1b1b1b; font-size: 10px; padding: 4px"
            >
              PLU '.$val.'
            </td>
          </tr>
        </tbody>
      </table>
    </td>';

      if($cnt%4==0){
        $html .='</tr>
              </tbody>
            </table>
            <table>
              <tbody>
                <tr>';      
      }
          
    }
  }
  $html .='</tr>
              </tbody>
            </table>';
    ob_end_flush();
    require_once __DIR__ . './../../vendor/autoload.php';
    $mpdf = new \Mpdf\Mpdf();
    $mpdf->shrink_tables_to_fit = 1;
    $mpdf->WriteHTML($html);
    $mpdf->Output();
}