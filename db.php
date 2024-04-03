<?php

require './Models/Product.php';

$product1 = new Product('Cuccia','Spaziosa accogliente calda anche per esterni', 100.00);
$product2 = new Product('Collare','Spaziosa accogliente calda anche per esterni', 10.00);
$product3 = new Product('Croccantini','Spaziosa accogliente calda anche per esterni', 50.00);
$product4 = new Product('Pallina','Spaziosa accogliente calda anche per esterni', 15.00);

$products = [
    $product1,
    $product2,
    $product3,
    $product4,
];