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
