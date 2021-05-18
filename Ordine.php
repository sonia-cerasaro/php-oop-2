<?php

class Ordine
{
  private $prodotti = [];
  private $totale;

  public function __construct($prodotti, $codice_sconto = NULL)
  {
    $this->prodotti = $prodotti;
    $this->totale = $this->ContaTotale($prodotti, $codice_sconto);
  }

  private function ContaTotale($prodotti, $codice_sconto)
  {
    $totale = 0;
    $sconto = $codice_sconto == 'PRE2002' ? 0.2 : 0;
    for ($i=0; $i < count($prodotti) ; $i++) {
      $totale += $prodotti[$i]['quantita'] * $prodotti[$i]['prodotto']->getPrezzo();
    }
    return $totale - ($totale * $sconto);
  }                                                      //privata perche mi serve solo all'interno della function e non la vedro fuori
}
