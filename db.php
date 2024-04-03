<?php

require './Models/Product.php';
require './Models/Kennel.php';
require './Models/Food.php';
require './Models/Game.php';

$product1 = new Product('Cuccia','Spaziosa accogliente calda anche per esterni', 100.00);
$product2 = new Product('Collare','Collare regolabile in pelle con borchie, resistente e sicuro.', 10.00);
$product3 = new Product('Croccantini','Nutrienti e ricchi di vitamine', 50.00);
$product4 = new Product('Pallina','Materiale resistente agli urti ai graffi e morsi', 15.00);

$products = [
    $product1,
    $product2,
    $product3,
    $product4,
];