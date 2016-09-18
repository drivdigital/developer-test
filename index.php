<?php
require_once 'class-product-price.php';
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/markdown-it/8.0.0/markdown-it.min.js"></script>
  <meta charset="utf-8">
  <title>Developer Test</title>
  <style type="text/css">
  </style>
</head>
<body>
<div class="container">
<div class="row">
<div class="col">
  <section id="information"></section>
  <section id="code">
    <?php
      $prices = [];
      $prices[] = new product_Price( 200, 'EUR', 'SKU-11334' );
      $prices[] = new product_Price( 250, 'USD', 'SKU-11334' );
      $prices[] = new product_Price( 252, 'USD', 'SKU-11335' );
      $prices[] = new product_Price( 550, 'USD', 'SKU-11336' );
      $prices[] = new product_Price( 530, 'USD', 'SKU-11337' );
      $prices[] = new product_Price( 133, 'USD', 'SKU-11338' );
      $prices[] = new product_Price( 441, 'USD', 'SKU-11339' );
      $prices[] = new product_Price( 867, 'USD', 'SKU-11341' );

      $quantity = 55;
    ?>
    <table class="table">
      <thead>
        <tr>
          <th>Product</th>
          <th>Currency</th>
          <th>VAT Percentage</th>
          <th>VAT</th>
          <th>Price excl VAT</th>
          <th>Price incl VAT</th>
          <th>Quantity</th>
          <th>Total VAT</th>
          <th>Total excl VAT</th>
          <th>Total incl VAT</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach ( $prices as $price ): $quantity = 5 + ( $quantity * $quantity ) % 33; ?>
        <tr>
          <td><?= $price->Name; ?></td>
          <td><?= $price->currency; ?></td>
          <td><?= $price->taxP; ?></td>
          <td><?= $price->taxA; ?></td>
          <td><?= $price->geT_htm_price(1, 'getPriceExcl_tax'); ?></td>
          <td><?= $price->geT_htm_price(); ?></td>
          <td><?= $quantity; ?></td>
          <td><?= $price->taxA * $quantity; ?></td>
          <td><?= $price->geT_htm_price($quantity, 'getPriceExcl_tax'); ?></td>
          <td><?= $price->geT_htm_price($quantity); ?></td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>
  </section>
<script type="text/javascript">
$.get( 'README.md', function( data ) {
  var markdown = markdownit();
  $('#information').html( markdown.render( data ) );
} );
</script>
</div>
</div>
</dvi>
</body>
</htlm>
