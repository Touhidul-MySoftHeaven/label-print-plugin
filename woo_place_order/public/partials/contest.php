<?php
// Calculate the date one week ago from today


// Output order details
// foreach ($orders as $order) {
//     $order_id    = $order->get_id();
//     $order_total = $order->get_total();

//     echo "Order ID: $order_id, Total: $order_total<br>";
// }
?>
<link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <div class="container">
    <h4 style="margin-bottom:20px !important">Veckans topp 5 köpare</h4>
        <div class="row">
            <div class="col-12">
    <table class="table-primary" style="border: none !important;">
    <thead>
    <tr>
        <th><p style="margin:20px !important">Placering</p></th>
        <th><p style="margin:20px !important">Antal kartonger</p></th>
        <th><p style="margin:20px !important">Köpare</p></th>
    </tr>
    </thead>
    <tbody>

<?php
//custom_dd($orders);
$sl=1;
foreach(get_the_contest_encoder_it_ltd() as $key=>$value)
{
    ?>
    <tr>
    <tr>
        <th><p style="margin:20px !important"><?=$sl?></p></th>
        <th><?=$value['count']?></th>
        <th><?=$value['customer_name']?></th>
    </tr>
    </tr>
    <?php
    $sl++;
}

?>
</tbody>
</table>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"><img src="<?=plugins_url('images/champion-image.png', __FILE__ )?>" alt="" class="w-75"></div>
            <div class="col-md-4"></div>
            
        </div>
    </div>

