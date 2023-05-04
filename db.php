<?php

require_once './Models/Product.php';
require_once './Models/CatProduct.php';
require_once './Models/DogProduct.php';

$gourmetGoldMousse = new CatProduct('Gourmet Gold Mousse', '13,49', 'Food', './Views/img/cans_24_1000x1000_4.jpg','Alimento umido per gatti Gourmet Gold Mousse, a base di tenerissime mousse di carne o di pesce, con componenti freschi di alta qualità.', 'Cat');
$roccoClassic = new DogProduct('Rocco Classic', '8,99', 'Food', './Views/img/rocc_classic_rindpur_400g_hs_01_8.jpg','Alimento umido Rocco Classic 6 x 400 g senza cereali per cani adulti, con un\'elevata percentuale di carne e interiora, componenti 100% freschi della migliore qualità.', 'Dog');
$divanoOrtopedico = new DogProduct('Divano ortopedico per cani', '38,99', 'Kennels', './Views/img/divano_icon_topseller_1_55__7.jpg', 'Divano ortopedico per cani grigio, con materasso in Memory Foam che dà sollievo, rivestimento ben aderente e morbido con effetto "pelle di pesca", bordo alto, telo in peluche incluso, lavabile a 30°C', 'Dog');
$toiletteSavicNestor = new CatProduct('Toilette per gatti Savic Nestor', '21,99', 'Litterboxes', './Views/img/lettiera_50931_savic_katzentoilette_nestor_farbkacheln_hs_01_1_5.jpg', 'Toilette per gatti Savic Nestor dai colori moderni e freschi, con coperchio ribaltabile, per una rapida e pratica pulizia e filtro al carbone attivo.', 'Cat');


$products = [
    $gourmetGoldMousse,
    $roccoClassic,
    $divanoOrtopedico,
    $toiletteSavicNestor
];