<?php

class CartaDiCredito
{
  private $numero;
  private $circuito;
  private $intestatario;
  private $scadenza;

  
  public function __construct($numero, $circuito, $intestatario, $scadenza, $cvc)
  {
    $this->numero = $numero;
    $this->circuito = $circuito;
    $this->intestatario = $intestatario;
    $thi....
  }
}
