<?php
  $vat = 15;        
  $price = 1000;
  $vatComponent = ($price / 100) * $vat;
  $endPrice = $price + $vatComponent;

  echo 'Total Price With Vat: ' . number_format($endPrice, 2);
?>