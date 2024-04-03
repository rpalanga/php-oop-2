<?php

require './Models/Product.php';
require './Models/Kennel.php';
require './Models/Food.php';
require './Models/Game.php';
require './Models/Category.php';

$product1 = new Kennel('Cuccia','Spaziosa accogliente calda anche per esterni', 'https://best5.it/b5/wp-content/uploads/2018/03/Cibo-per-animali4-800x400.jpg', 100.00 , '4-anni', 'wood', '30kg');


$nameAnimal = new Category('Cane');
$product1->category = $nameAnimal;

$product2 = new Game('Collare','Collare regolabile in pelle con borchie, resistente e sicuro.' , 'https://best5.it/b5/wp-content/uploads/2018/03/Cibo-per-animali4-800x400.jpg', 10.00, '2-anni','Plastic');


$nameAnimal2 = new Category('Gatto');
$product2->category = $nameAnimal2;



$product3 = new Food('Croccantini','Nutrienti e ricchi di vitamine' , 'https://best5.it/b5/wp-content/uploads/2018/03/Cibo-per-animali4-800x400.jpg', 50.00, '20/10/2030', '3kg', 'Tropical');

$nameAnimal3 = new Category('Cane');
$product3->category = $nameAnimal3;



$product4 = new Game('Pallina','Materiale resistente agli urti ai graffi e morsi' , 'https://best5.it/b5/wp-content/uploads/2018/03/Cibo-per-animali4-800x400.jpg', 15.00 , '5-anni', 'Plastic');


$nameAnimal4 = new Category('Gatto');
$product4->category = $nameAnimal4;



$products = [
    $product1,
    $product2,
    $product3,
    $product4,
];