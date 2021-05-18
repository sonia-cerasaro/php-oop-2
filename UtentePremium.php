<?php
require_once 'Utente.php';

class UtentePremium extends Utente {
  private $codice_sconto;

  public function __construct($nome, $cognome, $data_nascita, $username, $password, $codice_sconto)
  {
    parent::__construct($nome, $cognome, $data_nascita, $username, $password);   //parent si riferisce a utente e serve a richiamare una funzione statica. Statico significa: non ho bisogno di fare new class per usare quel metodo
    $this->codice_sconto = $codice_sconto;
  }

  public function getCodiceSconto()
  {
    return $this->codice_sconto;
  }
}
