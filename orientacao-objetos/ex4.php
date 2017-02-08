<?php

  require_once 'Cliente.php';
  require_once 'CartaoDeCredito.php';

  $cliente = new Cliente;
  $cliente->nome ="Caio Augusto";
  $cliente->codigo = "423";

  $cartao = new CartaoDeCredito;
  $cartao->numero = "7777";
  $cartao->dataDeValidade = "18/11/2025";

  $cartao->dono = $cliente;

  echo "Numero do cartao: $cartao->numero".PHP_EOL;
  echo "Data de  validade: $cartao->validade".PHP_EOL;
  echo "Nome do dono: {$cartao->dono->nome}".PHP_EOL;


 ?>
