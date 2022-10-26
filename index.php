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

$test_product = new Product('croccantini', 'MyDogHouse', '9,98 Euro');

var_dump($test_product);

?>