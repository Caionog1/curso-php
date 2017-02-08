<?php

  //spl_autoload_register();

  require_once 'Cliente.php';
  require_once 'Conta.php';

  $cliente = new Cliente;
  $cliente->nome = "Joao";

  $conta = new Conta;
  $conta->numero = 42;
  $conta->saldo = 420;

  var_dump($conta->dono);

  $conta->dono = $cliente;

  echo "Nome do dono da conta:{$conta->numero->$nome}".PHP_EOL;

 ?>
