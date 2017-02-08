<?php

  require_once 'Cliente.php';


  class CartaoDeCredito{
    public $dataDeValidade;
    public $numero;
    public $dono;
  }

  $cliente = new Cliente;
  $cliente->nome ="Caio Augusto";
  $cliente->codigo = "123";

  $cartao = new CartaoDeCredito;
  $cartao->numero = "123456789";
  $cartao->dataDeValidade = "18/11/2025";

  $cartao->dono = $cliente;

  echo "Numero do cartao: $cartao->numero".PHP_EOL;
  echo "Data de  validade: $cartao->validade".PHP_EOL;
  echo "Nome do dono: {$cartao->dono->nome}".PHP_EOL;


 ?>
