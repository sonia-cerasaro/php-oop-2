<?php
require_once 'Auth.php';

class Utente {
  use Authenticable;        //sta prendendo trait

  protected $nome;
  protected $cognome:
  protected $data_nascita;
  protected $carta_credito;

  protected $carrello = [];

  public function __construct($nome, $cognome, $data_nascita, $username, $password)
  {
    $this->nome = $nome;
    $this->cognome = $cognome;
    $this->data_nascita = $data_nascita;
    $this->username = $username;
    $this->password = $password;
  }

  public function setCartaCredito($carta_credito)
  {
    $this->carta_credito = $carta_credito;
  }
  public function aggiungiNelCarrello($prodotto, $quantita)
  {
    $this->carrello[] = [
      'prodotto' => $prodotto,           //creo un push (facendo = [])e un array associativo dove pusho dentro il fatto che ripetiamo le qadre stiamo mettendo un array dentro un array. Perche' un carrello non c'e' un prodotto ma una serie di prodotti che hanno una relativa aquantita'
      'quantita' => $quantita,
    ];
  }
  public function getCarrello()
}
