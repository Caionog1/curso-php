<?php

class cliente{
  public $nome;
  public $codigo;
}

$cliente = new cliente;
$cliente->nome=Caio;
$cliente->codigo=42;

  echo "Nome do Cliente: $cliente->nome". PHP_EOL;
  echo "Nome do Cliente: $cliente->codigo". PHP_EOL;

 ?>
