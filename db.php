<?php

require_once './Models/Product.php';
require_once './Models/CatProduct.php';
require_once './Models/DogProduct.php';
require_once './Models/CatFoodProduct.php';
require_once './Models/CatLitterProduct.php';
require_once './Models/DogFoodProduct.php';
require_once './Models/DogKennelsProduct.php';
require_once './Models/DogToysProduct.php';
require_once './Models/CatScratchProduct.php';

$gourmetGoldMousse = new CatFoodProduct('Gourmet Gold Mousse', '13,49', './Views/img/cans_24_1000x1000_4.jpg','Alimento umido per gatti Gourmet Gold Mousse, a base di tenerissime mousse di carne o di pesce, con componenti freschi di alta qualità.','Cat', 'Food');
$roccoClassic = new DogFoodProduct('Rocco Classic', '8,99', './Views/img/rocc_classic_rindpur_400g_hs_01_8.jpg','Alimento umido Rocco Classic 6 x 400 g senza cereali per cani adulti, con un\'elevata percentuale di carne e interiora, componenti 100% freschi della migliore qualità.','Dog', 'Food');
$divanoOrtopedico = new DogKennelsProduct('Divano ortopedico per cani', '38,99', './Views/img/divano_icon_topseller_1_55__7.jpg', 'Divano ortopedico per cani grigio, con materasso in Memory Foam che dà sollievo, rivestimento ben aderente e morbido con effetto "pelle di pesca", bordo alto, telo in peluche incluso, lavabile a 30°C','Dog', 'Kennels');
$toiletteSavicNestor = new CatLitterProduct('Toilette per gatti Savic Nestor', '21,99', './Views/img/lettiera_50931_savic_katzentoilette_nestor_farbkacheln_hs_01_1_5.jpg', 'Toilette per gatti Savic Nestor dai colori moderni e freschi, con coperchio ribaltabile, per una rapida e pratica pulizia e filtro al carbone attivo.','Cat', 'Litterboxes');
$tiakiPalla = new DogToysProduct('Gioco per cani TIAKI palla meteorite', '7,99', 'https://shop-cdn-m.mediazs.com/bilder/gioco/per/cani/tiaki/palla/meteorite/5/800/307696_pla_leckerli_ball_meteorit_fg_4797_5.jpg', "Gioco per cani che promuove l'intelligenza del tuo pet, può essere riempito con crocchette o snack, divertente forma di meteorite, un'unica apertura per gli snack, in robusto TPR", 'Dog', 'Toys');
$tiragraffiPrimrose = new CatScratchProduct('Tiragraffi a torre Natural Paradise Primrose', '92,99', 'https://shop-cdn-m.mediazs.com/bilder/tiragraffi/a/torre/natural/paradise/primrose/8/800/69109_np_kt_standard_logo_katze__fg_4504_8.jpg', 'Stabile tiragraffi a torre con robusto rivestimento in sisal, grandi piattaforme in legno ecosostenibile, 3 nicchie con cuscino e lettino in tessuto certificato Oeko-Tex®. Colore: crema.', 'Cat', 'Scratching posts');




$products = [
    $gourmetGoldMousse,
    $roccoClassic,
    $divanoOrtopedico,
    $toiletteSavicNestor,
    $tiakiPalla,
    $tiragraffiPrimrose
];