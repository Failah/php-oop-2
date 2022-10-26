<!-- CONSEGNA:

Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare 
uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e 
ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
Bonus:
Definire la carta di credito come classe e associarla all'utente -->


<?php

echo 'PHP OK';

require_once __DIR__ . '/models/Product.php';
require_once __DIR__ . '/models/Toy.php';

$test_product = new Product('croccantini', 'MyDogHouse', '9,98 Euro');

var_dump($test_product);

echo '<hr></hr>';

$test_toy = new Toy('Osso di Gomma', 'MyDogHouse', '3,99 Euro');
$test_toy->addMaterial('Gomma');
$test_toy->addMaterial('Materiaoscura');
$test_toy->weight = 500;

var_dump($test_toy);

?>