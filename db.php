<?php

require_once './Models/Product.php';
require_once './Models/CatProduct.php';
require_once './Models/DogProduct.php';

$gourmetGoldMousse = new CatProduct('Gourmet Gold Mousse', '13,49', 'Food', './Views/img/cans_24_1000x1000_4.jpg','Alimento umido per gatti Gourmet Gold Mousse, a base di tenerissime mousse di carne o di pesce, con componenti freschi di alta qualità.', 'Cat');
$roccoClassic = new DogProduct('Rocco Classic', '8,99', 'Food', './Views/img/rocc_classic_rindpur_400g_hs_01_8','Alimento umido Rocco Classic 6 x 400 g senza cereali per cani adulti, con un\'elevata percentuale di carne e interiora, componenti 100% freschi della migliore qualità.', 'Dog');

$products = [
    $gourmetGoldMousse,
    $roccoClassic
];