<?php

require_once 'Prodotto.php';
require_once 'Utente.php';
require_once 'UtentePremium.php';
require_once 'CartaDiCredito.php';
require_once 'Ordine.php';

$felpa = new Prodotto('felpa', 'una felpa da corsa', 12.35, true, 'F900');
$pantalone = new Prodotto('pantalone', 'pantalone sportivo', 12.35, true, 'F560');

$utente1 = new UtentePremium('Utente', 'Uno', '2021-03-04', 'user', );

$carta_credito = new CartaDiCredito('2627267627727', 'boolean', 'Utente Uno', '789');     //in index istanziamo vari oggetti

$utente1->setCartaCredito($carta_credito);

$utente1->aggiungiNelCarrello($felpa, 2);
$utente1->aggiungiNelCarrello($pantalone, 1);

$ordine1 = new Ordine($utente1->getCarrello(), $utente1->getCodiceSconto());

var_dump($ordine1);

//quindi il costruttore serve per instanziare il nuovo oggetto il settere si usa sempre perche' modificabile e riutilizzanile.
